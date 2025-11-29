<?php
session_start();

$arrKontak = [
    "sesnama" => $_POST["txtNama"] ?? "",
    "sesemail" => $_POST["txtEmail"] ?? "",
    "sespesan" => $_POST["txtPesan"] ?? ""
];

$_SESSION["Hasil"] = $arrHasil;
header("location: index.php#ahsil");

$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;

$arrBiodata = [
    "nim" => $_POST["txtNim"] ?? "",
    "nama" => $_POST["txtNmLengkap"] ?? "",
    "tempat" => $_POST["txtT4Lhr"] ?? "",
    "tanggal" => $_POST["txtTglLhr"] ?? "",
    "hobi" => $_POST["txtHobi"] ?? "",
    "pasangan" => $_POST["txtPasangan"] ?? "",
    "pekerjaan" => $_POST["txtKerja"] ?? "",
    "ortu" => $_POST["txtNmOrtu"] ?? "",
    "kakak" => $_POST["txtNmKakak"] ?? "",
    "adik" => $_POST["txtNmAdik"] ?? "",
];

$_SESSION["Biodata"] = $arrBiodata;
header("location: index.php#about");
