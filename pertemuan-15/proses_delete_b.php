<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

# validasi nim wajib angka dan > 0
$nim = filter_input(INPUT_GET, 'nim', FILTER_VALIDATE_INT, [
  'options' => ['min_range' => 1]
]);

if (!$nim) {
  $_SESSION['flash_error'] = 'NIM Tidak Valid.';
  redirect_ke('read.php');
}

# query delete
$stmt = mysqli_prepare($conn, "DELETE FROM tbl_biodata WHERE nim = ?");
if (!$stmt) {
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('read.php');
}

mysqli_stmt_bind_param($stmt, "i", $nim);

if (mysqli_stmt_execute($stmt)) {
  $_SESSION['flash_sukses'] = 'Biodata berhasil dihapus.';
} else {
  $_SESSION['flash_error'] = 'Biodata gagal dihapus. Silakan coba lagi.';
}

mysqli_stmt_close($stmt);
redirect_ke('read.php');
