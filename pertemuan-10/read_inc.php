<?php
require 'koneksi.php';

$fieldContact = [
    "nama" => ["label" => "Nama:", "suffix" => ""],
    "email" => ["label" => "Email:", "suffix" => ""],
    "pesan" => ["label" => "Pesan Anda:", "suffix" => ""]
];

$sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);
if (!$q) {
    echo "<p>Gagal membaca data tamu: " . htmlspecialchars(mysqli_connect_error($conn)) . "</p>";
} elseif (mysqli_num_rows($q) === 0) {
    echo "<p>Belum ada data tamu yang tersimpan. </p>";
} else {
    while ($row = mysqli_fetch_assoc($q)) {
        $arrContact = [
            "nama" => $_POST["txtNama"] ?? "",
            "email" => $_POST["txtEmail"] ?? "",
            "pesan" => $_POST["txtPesan"] ?? ""
        ];
        echo tampilkanBiodata($fieldContact, $contact);
    }
}
?>