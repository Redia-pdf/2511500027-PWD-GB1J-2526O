<?php
    echo "Halo Dunia!";

    $nama = "Redia";
    $umur = "18";
    $tinggi = "1.5";
    $aktif = "true";

    echo "nama: $nama <br>";
    echo "umur: $umur <br>";
    echo "tinggi: $tinggi meter <br>";
    echo "status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";
    var_dump($nama);
    var_dump($umur);
    var_dump($tinggi);
    var_dump($aktif);

    $nama = "Redia Yuana Dinandika Tjandring";
    $umur = 18;
    $tinggi = 1.5;
    $aktif = true;
    $hobi = ["Sepak Bola", "Dance", "Baca Komik"];
    $mahasiswa = (object)[
        "nim" => "2511500027",
        "nama" => "Redia Yuana Dinandika Tjandring",
        "prodi" => "Teknik Informatika"
    ];
  $nilai_akhir = NULL;
  echo "<h2> Demo Tipe Data PHP</h2>";
  
  echo "<pre>";
  echo "string:\n";
  var_dump($nama);

  echo "\nInteger:\n";
  var_dump($umur);

  echo "\nFloat:\n";
  var_dump($tinggi);

  echo "\nBoolean:\n";
  var_dump($aktif);

  echo "\nArray\n";
  var_dump($hobi);

  echo "\nObject:\n";
  var_dump($mahasiswa);

  echo "\nNULL\n";
  var_dump($nilai_akhir);
  echo "</pre>";

  define("KAMPUS", "ISB ATMA LUHUR");
  const ANGKATAN = 2025;

  echo "Kampus: " . KAMPUS . "<br>";
  echo "Angkatan: " . ANGKATAN;

// Ini komentar 1 baris
#Ini juga komentar 1 baris
/*
    Ini Komentar
    lebih dari satu baris
    */
$a = 10;
$b = 3;

echo $a + $b;
echo $a % $b;

$a = 100;
$b = "100";
$c = 0;
$d = false;

echo "<h3> Perbandingan == dan === </h3>";
echo "\$a == $b : "; var_dump($a == $b);
echo "\$a === \$b : "; var_dump($a === $b);
echo "\$c == \$d : "; var_dump($c == $d);
echo "\$c === \$d : "; var_dump($c === $d);

$nilai = 80;

if ($nilai >= 90) {
    echo "A";
} elseif ($nilai >= 80) {
    echo "B";
}else {
    echo "C";
}

$hari = "senin";
switch ($hari) {
    case "senin": echo "awal Minggu!"; break;
    case "jumat": echo "Hampir Weekend!"; break;
    default: echo "Hari biasa.";
}
$hobi = ["Sepak Bola", "Dance", "Baca Komik"];
foreach ($hobi as $item) {
    echo "Hobi: $item <br>";
}
$hobi = ["Sepak Bola", "Dance", "Baca Komik"];

echo "<h3>Daftar Hobi Saya: </h3>";
for ($i = 0; $i < count($hobi); $i++) {
    echo ($i + 1) . ". " . $hobi[$i] . "<br>";
}

echo "<hr>";
echo "<h4>Hasil print_r():</h4>";
echo "<pre>";
print_r($hobi);
echo "</pre>";

echo "<h4>Hasil var_dump():</h4>";
echo "<pre>";
var_dump($hobi);
echo "</pre>";

for ($i=1; $i<=5; $i++) {
echo "Perulangan ke-$i <br>";
}
?>