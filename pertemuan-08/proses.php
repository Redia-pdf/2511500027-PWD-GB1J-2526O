<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;


$sesnim = $_SESSION["nim"];
$sesnama = $_POST["nama"];
$sestempat = $_POST["tempat"];
$sestanggal = $_POST["tanggal"];
$seshobi = $_POST["hobi"];
$sespasangan = $_POST["pasangan"];
$sespekerjaan = $_POST["pekerjaan"];
$sesortu = $_POST["ortu"];
$seskakak = $_POST["kakak"];
$sesadik = $_POST["adik"];

$_SESSION["nim"] = $sesnim;
$_SESSION["nama"] = $sesnama;
$_SESSION["tempat"] = $sestempat;
$_SESSION["tanggal"] = $sestanggal;
$_SESSION["hobi"] = $seshobi;
$_SESSION["pasangan"] = $sespasangan;
$_SESSION["pekerjaan"] = $sespekerjaan;
$_SESSION["ortu"] = $sesortu;
$_SESSION["kakak"] = $seskakak;
$_SESSION["adik"] = $sesadik;
header("Location: index.php");
?>