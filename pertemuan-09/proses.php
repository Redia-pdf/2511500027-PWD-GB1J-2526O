<?php
session_start();

$arrcontact = [
    "sesnama" => $_POST["txtNama"] ?? "",
    "sesemail" => $_POST["txtEmail"] ?? "",
    "sespesan" => $_POST["txtPesan"] ?? ""
];

$_SESSION["contact"] = $arrcontact;
header("location: index.php#contact");

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
