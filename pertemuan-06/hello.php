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
?>