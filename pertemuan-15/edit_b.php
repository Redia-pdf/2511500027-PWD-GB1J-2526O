<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

// ambil nim dari URL
$nim = filter_input(INPUT_GET, 'nim', FILTER_VALIDATE_INT, [
  'options' => ['min_range' => 1]
]);

if (!$nim) {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('read.php');
}

// ambil data biodata
$stmt = mysqli_prepare($conn, "SELECT * FROM tbl_biodata WHERE nim = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "i", $nim);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$row) {
  $_SESSION['flash_error'] = 'Record tidak ditemukan.';
  redirect_ke('read.php');
}

// isi form dari data lama
$nama           = $row['nama_lengkap'];
$tempat_lahir   = $row['tempat_lahir'];
$tanggal_lahir  = $row['tanggal_lahir'];
$hobi           = $row['hobi'];
$pasangan       = $row['pasangan'];
$pekerjaan      = $row['pekerjaan'];
$nama_ortu      = $row['nama_ortu'];
$nama_kakak     = $row['nama_kakak'];
$nama_adik      = $row['nama_adik'];

$flash_error = $_SESSION['flash_error'] ?? '';
unset($_SESSION['flash_error']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Biodata</title>
</head>
<body>

<link rel="stylesheet" href="style.css">
 <div class="container">
    <div class="card">
  <h2>EDIT BIODATA</h2>

  <?php if (!empty($flash_error)): ?>
    <div style="padding:10px; margin-bottom:10px; background:#f8d7da; color:#721c24; border-radius:6px;">
      <?= $flash_error; ?>
    </div>
  <?php endif; ?>

  <form action="proses_edit_b.php" method="POST">

    <!-- NIM tidak boleh diubah -->
    <input type="hidden" name="nim" value="<?= htmlspecialchars($nim); ?>">

    <label>
      Nama Lengkap:
      <input type="text" name="txtNamalengkapEd" required autocomplete="name"
        value="<?= htmlspecialchars($nama); ?>">
    </label><br>

    <label>
      Tempat Lahir:
      <input type="text" name="txtTempatLahirEd" required autocomplete="off"
        value="<?= htmlspecialchars($tempat_lahir); ?>">
    </label><br>

    <label>
      Tanggal Lahir:
      <input type="text" name="txtTanggalLahirEd" required
        value="<?= htmlspecialchars($tanggal_lahir); ?>">
    </label><br>

    <label>
      Hobi:
      <input type="text" name="txtHobiEd" required autocomplete="off"
        value="<?= htmlspecialchars($hobi); ?>">
    </label><br>

    <label>
      Pasangan:
      <input type="text" name="txtPasanganEd" required autocomplete="off"
        value="<?= htmlspecialchars($pasangan); ?>">
    </label><br>

    <label>
      Pekerjaan:
      <input type="text" name="txtPekerjaanEd" required autocomplete="off"
        value="<?= htmlspecialchars($pekerjaan); ?>">
    </label><br>

    <label>
      Nama Orang Tua:
      <input type="text" name="txtNamaOrangTuaEd" required autocomplete="off"
        value="<?= htmlspecialchars($nama_ortu); ?>">
    </label><br>

    <label>
      Nama Kakak:
      <input type="text" name="txtNamaKakakEd" required autocomplete="off"
        value="<?= htmlspecialchars($nama_kakak); ?>">
    </label><br>

    <label>
      Nama Adik:
      <input type="text" name="txtNamaAdikEd" required autocomplete="off"
        value="<?= htmlspecialchars($nama_adik); ?>">
    </label><br>

    <button type="submit">Simpan</button>
    <a href="read.php">Kembali</a>

  </form>
    </div>
  </div>
</body>
</html>
