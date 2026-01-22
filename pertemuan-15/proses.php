<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php');
}

$formType = $_POST['form_type'] ?? '';

if ($formType === 'biodata') {
$nim       = bersihkan($_POST['txtNim'] ?? '');
$namaB     = bersihkan($_POST['txtNmLengkap'] ?? '');
$tempat    = bersihkan($_POST['txtT4Lhr'] ?? '');
$tanggal   = bersihkan($_POST['txtTglLhr'] ?? '');
$hobi      = bersihkan($_POST['txtHobi'] ?? '');
$pasangan  = bersihkan($_POST['txtPasangan'] ?? '');
$pekerjaan = bersihkan($_POST['txtKerja'] ?? '');
$ortu      = bersihkan($_POST['txtNmOrtu'] ?? '');
$kakak     = bersihkan($_POST['txtNmKakak'] ?? '');
$adik      = bersihkan($_POST['txtNmAdik'] ?? '');


#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada

if ($nim === '') {
  $errors[] = 'NIM wajib diisi.';
} elseif (!ctype_digit($nim)) {
  $errors[] = 'NIM harus berupa angka.';
}elseif (strlen($nim) < 10) {
  $errors[] = 'NIM minimal 10 digit.';
}

 if ($namaB === '') {
  $errors[] = 'Nama lengkap wajib diisi.';
} elseif (mb_strlen($namaB) < 4) {
  $errors[] = 'Nama lengkap minimal 4 karakter.';
}

if ($tempat === '') {
  $errors[] = 'Tempat lahir wajib diisi.';
}

if ($tanggal === '') {
  $errors[] = 'Tanggal lahir wajib diisi.';
} elseif (mb_strlen($tanggal) < 6) {
  $errors[] = 'Format tanggal lahir tidak valid.';
}

if ($hobi === '') {
  $errors[] = 'Hobi wajib diisi.';
}

if ($pasangan === '') {
  $errors[] = 'Nama pasangan wajib diisi.';
}

if ($pekerjaan === '') {
  $errors[] = 'Pekerjaan wajib diisi.';
}

if ($ortu === '') {
  $errors[] = 'Nama orang tua wajib diisi.';
}

if ($kakak === '') {
  $errors[] = 'Nama kakak wajib diisi.';
}

if ($adik === '') {
  $errors[] = 'Nama adik wajib diisi.';
}

if (!empty($errors)) {

  $_SESSION['old_biodata'] = [
    'nim'       => $nim,
    'nama'      => $namaB,
    'tempat'    => $tempat,
    'tanggal'   => $tanggal,
    'hobi'      => $hobi,
    'pasangan'  => $pasangan,
    'pekerjaan' => $pekerjaan,
    'ortu'      => $ortu,
    'kakak'     => $kakak,
    'adik'      => $adik,
  ];
    $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#about');
}

$sql = "INSERT INTO tbl_biodata
        (nim, nama_lengkap, tempat_lahir, tanggal_lahir,
         hobi, pasangan, pekerjaan, nama_ortu, nama_kakak, nama_adik)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#about');
}

mysqli_stmt_bind_param(
  $stmt, "isssssssss", $nim, $namaB, $tempat, $tanggal, $hobi, $pasangan, $pekerjaan, $ortu, $kakak, $adik);

if (mysqli_stmt_execute($stmt)) {
  $_SESSION['flash_sukses'] = 'Biodata berhasil disimpan.';
  redirect_ke('index.php#about');
} else {
  $_SESSION['flash_error'] = 'NIM sudah terdaftar.';
  redirect_ke('index.php#about');
}
mysqli_stmt_close($stmt);
}

if ($formType === 'contact') {
#ambil dan bersihkan nilai dari form
$nama  = bersihkan($_POST['txtNama']  ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');
$captcha = bersihkan($_POST['txtCaptcha'] ?? '');

$errors = [];
if ($nama === '') {
  $errors[] = 'Nama wajib diisi.';
}

if ($email === '') {
  $errors[] = 'Email wajib diisi.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Format e-mail tidak valid.';
}

if ($pesan === '') {
  $errors[] = 'Pesan wajib diisi.';
}

if ($captcha === '') {
  $errors[] = 'Pertanyaan wajib diisi.';
}

if (mb_strlen($nama) < 3) {
  $errors[] = 'Nama minimal 3 karakter.';
}

if (mb_strlen($pesan) < 10) {
  $errors[] = 'Pesan minimal 10 karakter.';
}

if ($captcha!=="5") {
  $errors[] = 'Jawaban '. $captcha.' captcha salah.';
}
/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'nama'  => $nama,
    'email' => $email,
    'pesan' => $pesan,
    'captcha' => $captcha,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#contact');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_tamu (cnama, cemail, cpesan) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#contact');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('index.php#contact'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
  $_SESSION['old'] = [
    'nama'  => $nama,
    'email' => $email,
    'pesan' => $pesan,
    'captcha' => $captcha,
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php#contact');
}

#tutup statement
mysqli_stmt_close($stmt);
}
else {
  $_SESSION['flash_error'] = 'Form tidak dikenali.';
  redirect_ke('index.php');
}