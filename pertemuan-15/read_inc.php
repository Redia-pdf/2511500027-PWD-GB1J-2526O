<?php
require 'koneksi.php';

  $fieldConfig = [
      "nim" => ["label" => "NIM:", "suffix" => ""],
      "namas" => ["label" => "Nama Lengkap:", "suffix" => ""],
      "tempat" => ["label" => "Tempat Lahir:", "suffix" => ""],
      "tanggal" => ["label" => "Tanggal Lahir:", "suffix" => ""],
      "hobi" => ["label" => "Hobi:", "suffix" => ""],
      "pasangan" => ["label" => "Pasangan:", "suffix" => ""],
      "pekerjaan" => ["label" => "Pekerjaan:", "suffix" => ""],
      "ortu" => ["label" => "Nama Orang Tua:", "suffix" => ""],
      "kakak" => ["label" => "Nama Kakak:", "suffix" => ""],
      "adik" => ["label" => "Nama Adik:", "suffix" => ""],
    ];

$sql = "SELECT * FROM tbl_biodata ORDER BY id DESC LIMIT 1";    
$q = mysqli_query($conn, $sql);

if (!$q) {
  echo "<p>Gagal membaca data biodata: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data biodata tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {

    $arrBiodata = [
      "nim"       => $row["nim"] ?? "",
      "namas"      => $row["nama_lengkap"] ?? "",
      "tempat"    => $row["tempat_lahir"] ?? "",
      "tanggal"   => $row["tanggal_lahir"] ?? "",
      "hobi"      => $row["hobi"] ?? "",
      "pasangan"  => $row["pasangan"] ?? "",
      "pekerjaan" => $row["pekerjaan"] ?? "",
      "ortu"      => $row["nama_ortu"] ?? "",
      "kakak"     => $row["nama_kakak"] ?? "",
      "adik"      => $row["nama_adik"] ?? "",
    ];
    echo tampilkanBiodata($fieldConfig, $arrBiodata);
  }
}
$fieldContact = [
  "nama" => ["label" => "Nama:", "suffix" => ""],
  "email" => ["label" => "Email:", "suffix" => ""],
  "pesan" => ["label" => "Pesan Anda:", "suffix" => ""]
];

$sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
  echo "<p>Gagal membaca data tamu: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data tamu yang tersimpan.</p>";
} else {
  while ($row = mysqli_fetch_assoc($q)) {
    $arrContact = [
      "nama"  => $row["cnama"]  ?? "",
      "email" => $row["cemail"] ?? "",
      "pesan" => $row["cpesan"] ?? "",
    ];
    echo tampilkanBiodata($fieldContact, $arrContact);
  }
}
?>