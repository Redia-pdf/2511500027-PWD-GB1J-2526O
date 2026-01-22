<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('read.php');
}

/*
  validasi nim wajib angka dan > 0
  (karena nim sudah bigint)
*/
$nim = filter_input(INPUT_POST, 'nim', FILTER_VALIDATE_INT, [
  'options' => ['min_range' => 1]
]);

if (!$nim) {
  $_SESSION['flash_error'] = 'NIM Tidak Valid.';
  redirect_ke('edit_b.php?nim=' . (int)$nim);
}

/*
  ambil dan bersihkan (sanitasi) nilai dari form
*/
$nama        = bersihkan($_POST['txtNamalengkapEd'] ?? '');
$tempat      = bersihkan($_POST['txtTempatLahirEd'] ?? '');
$tanggal     = bersihkan($_POST['txtTanggalLahirEd'] ?? '');
$hobi        = bersihkan($_POST['txtHobiEd'] ?? '');
$pasangan    = bersihkan($_POST['txtPasanganEd'] ?? '');
$pekerjaan   = bersihkan($_POST['txtPekerjaanEd'] ?? '');
$ortu        = bersihkan($_POST['txtNamaOrangTuaEd'] ?? '');
$kakak       = bersihkan($_POST['txtNamaKakakEd'] ?? '');
$adik        = bersihkan($_POST['txtNamaAdikEd'] ?? '');

#Validasi sederhana
$errors = [];

if ($nama === '') {
  $errors[] = 'Nama lengkap wajib diisi.';
} elseif (mb_strlen($nama) < 4) {
  $errors[] = 'Nama lengkap minimal 4 karakter.';
}

if ($tempat === '') {
  $errors[] = 'Tempat lahir wajib diisi.';
}

if ($tanggal === '') {
  $errors[] = 'Tanggal lahir wajib diisi.';
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

/*
  jika ada error, simpan old value + error, lalu redirect
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'nama'      => $nama,
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
  redirect_ke('edit_b.php?nim=' . (int)$nim);
}

/*
  Prepared statement untuk anti SQL injection.
  UPDATE tbl_biodata (NIM tidak berubah)
*/
$stmt = mysqli_prepare($conn, "UPDATE tbl_biodata SET
                              nama_lengkap = ?,
                              tempat_lahir = ?,
                              tanggal_lahir = ?,
                              hobi = ?,
                              pasangan = ?,
                              pekerjaan = ?,
                              nama_ortu = ?,
                              nama_kakak = ?,
                              nama_adik = ?
                              WHERE nim = ?");

if (!$stmt) {
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('edit_b.php?nim=' . (int)$nim);
}

/*
  bind parameter:
  - s = string
  - i = integer
*/
mysqli_stmt_bind_param($stmt, "sssssssssi",
  $nama, $tempat, $tanggal, $hobi, $pasangan, $pekerjaan, $ortu, $kakak, $adik, $nim);

if (mysqli_stmt_execute($stmt)) {
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Biodata berhasil diperbarui.';
  redirect_ke('read.php');
} else {
  $_SESSION['old'] = [
    'nama'      => $nama,
    'tempat'    => $tempat,
    'tanggal'   => $tanggal,
    'hobi'      => $hobi,
    'pasangan'  => $pasangan,
    'pekerjaan' => $pekerjaan,
    'ortu'      => $ortu,
    'kakak'     => $kakak,
    'adik'      => $adik,
  ];

  $_SESSION['flash_error'] = 'Data gagal diperbaharui. Silakan coba lagi.';
  redirect_ke('edit_b.php?nim=' . (int)$nim);
}

mysqli_stmt_close($stmt);
