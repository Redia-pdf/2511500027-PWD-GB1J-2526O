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
?>