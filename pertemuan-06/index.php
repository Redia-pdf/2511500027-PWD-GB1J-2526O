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
    <footer>
        <p>&copy; 2025 Redia Yuana Dinandika Tjandring [2511500027] &reg; &trade;</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>