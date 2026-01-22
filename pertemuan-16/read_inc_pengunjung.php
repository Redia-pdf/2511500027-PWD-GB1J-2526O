<?php
require 'koneksi.php';

  $fieldConfig = [
      "kdp" => ["label" => "NIM:", "suffix" => ""],
      "nmp" => ["label" => "Nama Lengkap:", "suffix" => "&#128526"],
      "alamat" => ["label" => "Tempat Lahir:", "suffix" => ""],
      "tglkj" => ["label" => "Tanggal Lahir:", "suffix" => ""],
      "hobi" => ["label" => "Hobi:", "suffix" => "&#127926;"],
      "asalslta" => ["label" => "Pasangan:", "suffix" => "&hearts;"],
      "pekerjaan" => ["label" => "Pekerjaan:", "suffix" => " &copy; 2025"],
      "ortu" => ["label" => "Nama Orang Tua:", "suffix" => ""],
      "nmpcr" => ["label" => "Nama Kakak:", "suffix" => ""],
      "nmmtn" => ["label" => "Nama :", "suffix" => ""],
    ];

$sql = "SELECT * FROM tbl_biodata ORDER BY nim DESC limit 1";    
$q = mysqli_query($conn, $sql);

if (!$q) {
  echo "<p>Gagal membaca data biodata: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data biodata tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {

   $arrBiodata = [
  "kodepen" => $row["txtKodePen"] ?? "",
  "nama" => $row["txtNmPengunjung"] ?? "",
  "alamat" => $row["txtAlRmh"] ?? "",
  "tanggal" => $row["txtTglKunjungan"] ?? "",
  "hobi" => $row["txtHobi"] ?? "",
  "slta" => $row["txtAsalSMA"] ?? "",
  "pekerjaan" => $row["txtKerja"] ?? "",
  "ortu" => $row["txtNmOrtu"] ?? "",
  "pacar" => $row["txtNmPacar"] ?? "",
  "mantan" => $row["txtNmMantan"] ?? ""
    ];
    echo tampilkanBiodata($fieldConfig, $arrBiodata);
  }
}
?>