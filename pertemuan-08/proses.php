<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;
header("Location: index.php");
?>


<?php
session_start();
$sesnim = $_POST["nim"];
$sesnamaa = $_POST["namaa"];
$sestempat = $_POST["tempat"];
$sestanggal = $_POST["tanggal"];
$seshobi = $_POST["hobi"];
$sespasangan = $_POST["pasangan"];
$sespekerjaan = $_POST["pekerjaan"];
$sesortu = $_POST["ortu"];
$seskakak = $_POST["kakak"];
$sesadik = $_POST["adik"];
$_SESSION["nim"] = $sesnim;
$_SESSION["namaa"] = $sesnamaa;
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