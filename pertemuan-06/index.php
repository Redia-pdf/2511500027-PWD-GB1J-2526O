<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $NIM = "2511500027";
    $Nama = "Redia Yuana Dinandika Tjandring";
    $Tempat_Lahir = "Kupang";
    $Tanggal_Lahir = "06 Agustus 2007";
    $Hobby = "Main futsal,main basket, fotografi, baca komik";
    $Pasangan = "Tidak Ada";
    $Pekerjaan = "Tidak Ada";
    $Nama_Orang_Tua = "Bapak El Tjandring dan Ibu Fyllalinas Feoh";
    $Nama_Kakak = "Meiriana Cleorita Efelin Tjandring";
    $Nama_Adek = "Constantin Tjandring";
    ?> 
    <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label=""togel Navigation">
    &#9776;
    </button>
    <nav>
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#contact">kontak</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <section id="home">
        <h2>Selamat Datang</h2>
            <p>Ini contoh paragraf HTML.</p>
    </section>
    <section id="about">
        <h2>Tentang saya</h2>
        <p><strong>NIM:</strong> <?php echo "$NIM"; ?> &trade; </p>
        <P><STRONG>Nama Lengkap:</STRONG><?php echo "$Nama"; ?> &#128516; </p>
        <p><strong>Tempat Lahir:</strong> <?php echo "$Tempat_Lahir"; ?> &hearts;</p>
        <p><strong>Tanggal Lahir:</strong><?php echo "$Tanggal_Lahir"; ?> </p>
        <P><strong>Hobby:</strong><?php echo "$Hobby"; ?> </p>
        <p><strong>Pasangan:</strong><?php echo "$Pasangan"; ?> &#128546;</p>
        <p><strong>pekerjaan:</strong><?php echo "$Pekerjaan"; ?> &#128512;</p>
        <p><strong>Nama orang tua:</strong><?php echo "$Nama_Orang_Tua"; ?> &#128525;</p>
        <p><strong>Nama Kakak:</strong><?php echo "$Nama_Kakak"; ?> </p>
        <p><strong>Nama Adik:</strong><?php echo "$Nama_Adek"; ?> </p>
        <p>HTML digunakan untuk membuat struk halaman web.</p>
    </section>      
    <section id="contact">
        <h2>kontak kami</h2>
        <form action="" method="GET">
            <label for="txtNama">
              <span>Nama:</span>
            <input type="text" id="txtNama" name="txtNama" placeholder="Masukan nama" autocomplete="name">
            </label>
            <label for="txtEmail"><span>Email:</span>
            <input type="email" id="txtEmail" name="txtemail" placeholder="Masukan email" autocomplete="email">
            </label>
            <label for="txtpesan"><span>Pesan Anda:</span>
            <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
            <small id="charCount">0/200 karakter</small>
            </label>
            <button type="submit">Kirim</button>
             <button type="reset">Batal</button>
        </form>
    </section>
    </main>
    <section id="ipk">
        <h2> Nilai Saya</h2>
        <?php
        $namaMatkul1 = "Kalkulus";
        $namaMatkul2 = "Logika Informatika";
        $namaMatkul3 = "Konsep Basis Data";
        $namaMatkul4 = "Aplikasi Perkantoran";
        $namaMatkul5 = "Pemrograman Web Dasar";

        $sksMatkul1 = "3";
        $sksMatkul2 = "3";
        $sksMatkul3 = "3";
        $sksMatkul4 = "3";
        $sksMatkul5 = "3";

        $nilaiHadir1 = "95";
        $nilaiHadir2 = "90";
        $nilaiHadir3 = "80";
        $nilaiHadir4 = "95";
        $nilaiHadir5 = "100";

        $nilaiTugas1 = "80";
        $nilaiTugas2 = "90";
        $nilaiTugas3 = "85";
        $nilaiTugas4 = "80";
        $nilaiTugas5 = "90";
        
        $nilaiUTS1 = "80";
        $nilaiUTS2 = "90";
        $nilaiUTS3 = "80";
        $nilaiUTS4 = "95";
        $nilaiUTS5 = "85";

        $nilaiUAS1 = "75";
        $nilaiUAS2 = "95";
        $nilaiUAS3 = "90";
        $nilaiUAS4 = "85";
        $nilaiUAS5 = "95";

        $nilaiAkhir1 = ($nilaiHadir1 * 0.1) + ($nilaiTugas1 * 0.2) + ($nilaiUTS1 * 0.3) + ($nilaiUAS1 * 0.4);
        $nilaiAkhir2 = ($nilaiHadir2 * 0.1) + ($nilaiTugas2 * 0.2) + ($nilaiUTS2 * 0.3) + ($nilaiUAS2 * 0.4);
        $nilaiAkhir3 = ($nilaiHadir3 * 0.1) + ($nilaiTugas3 * 0.2) + ($nilaiUTS3 * 0.3) + ($nilaiUAS3 * 0.4);
        $nilaiAkhir4 = ($nilaiHadir4 * 0.1) + ($nilaiTugas4 * 0.2) + ($nilaiUTS4 * 0.3) + ($nilaiUAS4 * 0.4);
        $nilaiAkhir5 = ($nilaiHadir5 * 0.1) + ($nilaiTugas5 * 0.2) + ($nilaiUTS5 * 0.3) + ($nilaiUAS5 * 0.4);

        function getGrade($nilaiAkhir) {
        if ($nilaiAkhir >= 91) {
            $grade = "A";  $mutu = 4.00;
        } elseif ($nilaiAkhir >= 81) {
            $grade = "A-"; $mutu = 3.70;
        } elseif ($nilaiAkhir >= 76) {
            $grade = "B+"; $mutu = 3.30;
        } elseif ($nilaiAkhir >= 71) {
            $grade = "B";  $mutu = 3.00;
        } elseif ($nilaiAkhir >= 66) {
            $grade = "B-"; $mutu = 2.70;
        } elseif ($nilaiAkhir >= 61) {
            $grade = "C+"; $mutu = 2.30;
        } elseif ($nilaiAkhir >= 56) {
            $grade = "C";  $mutu = 2.00;
        } elseif ($nilaiAkhir >= 51) {
            $grade = "C-"; $mutu = 1.70;
        } elseif ($nilaiAkhir >= 36) {
            $grade = "D";  $mutu = 1.00;
        } else {
            $grade = "E";  $mutu = 0.00;
        }
        return [$grade, $mutu];
        }

        echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%; text-align:center;'>";
        echo "<tr style='background-color:#e0e0e0;'>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Kehadiran</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Grade</th>
                <th>Angka Mutu</th>
              </tr>";

        $matkulData = [
            [$namaMatkul1, $sksMatkul1, $nilaiHadir1, $nilaiTugas1, $nilaiUTS1, $nilaiUAS1, $nilaiAkhir1],
            [$namaMatkul2, $sksMatkul2, $nilaiHadir2, $nilaiTugas2, $nilaiUTS2, $nilaiUAS2, $nilaiAkhir2],
            [$namaMatkul3, $sksMatkul3, $nilaiHadir3, $nilaiTugas3, $nilaiUTS3, $nilaiUAS3, $nilaiAkhir3],
            [$namaMatkul4, $sksMatkul4, $nilaiHadir4, $nilaiTugas4, $nilaiUTS4, $nilaiUAS4, $nilaiAkhir4],
            [$namaMatkul5, $sksMatkul5, $nilaiHadir5, $nilaiTugas5, $nilaiUTS5, $nilaiUAS5, $nilaiAkhir5]
        ];

         $totalBobot = 0;
        $totalSKS = 0;

        foreach ($matkulData as $m) {
            list($nama, $sks, $hadir, $tugas, $uts, $uas, $akhir) = $m;
            list($grade, $mutu) = getGrade($akhir);
            $bobot = $sks * $mutu;

            echo "<tr>
                    <td>$nama</td>
                    <td>$sks</td>
                    <td>$hadir</td>
                    <td>$tugas</td>
                    <td>$uts</td>
                    <td>$uas</td>
                    <td>" . number_format($akhir, 2) . "</td>
                    <td>$grade</td>
                    <td>" . number_format($mutu, 2) . "</td>
                  </tr>";

            $totalBobot += $bobot;
            $totalSKS += $sks;
        }

         echo "</table>";

        $ipk = $totalBobot / $totalSKS;
        $statusAkhir = ($ipk >= 2.00) ? "Lulus" : "Gagal";

        echo "<p><b>Total Bobot :</b> " . number_format($totalBobot, 2) . "</p>";
        echo "<p><b>Total SKS :</b> $totalSKS</p>";
        echo "<p><b>IPK :</b> " . number_format($ipk, 2) . "</p>";
        echo "<p><b>Status :</b> $statusAkhir</p>";
        ?>
    </section>
    <footer>
        <p>&copy; 2025 Redia Yuana Dinandika Tjandring [2511500027] &reg; &trade;</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>