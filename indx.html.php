<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($_POST['txt_email']);
    $pesan = htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-succes'>Terima kasih
        <strong>$nama</strong>, Pesan Anda telah berhasil dikirim ke server SMKN 5 batam!
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV meldia grevanda - SMKN 5 batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
    <div class="profile-info">
        <div class="avatar">👤</div>
        <img src="" alt="">
        <div>
            <h1 style="margin:0;">MELDIA GREVANDA</h1>
            <p style="margin:5px 0 0 0; color: black;">siswa teknik komputer dan jaringan SMKN 5 batam</p>
        </div>
      </div>
      <nav>
        <a href="#Profile">Home</a>
        <a href="#Skills">Skills</a>
        <a href="#kontak">contact</a>
        <button id="btn-theme" onclick="toggleTheme()">🌙Dark mode</button>
    </nav>
</header>

<div class="main-content">

<div class="left-column">
      <div class="card" id="profile">
        <h2>PROFILE</h2>
        <h3>👤BIODATA</h3>
        <p>siswa aktif dan praktisi di bidang teknik komputer dan jaringan.</p>

        <h3>🎓PENDIDIKAN</h3>
        <ul>
            <li>Lulusan mi daud kholifatullah</li>
            <li>Lulusan pondok pesantren annikmah</li>
            <li>Siswi aktif SMKN 5 Batam</li>
        </ul>

        <h3>💼PENGALAMAN BELAJAR</h3>
        <ul>
            <li>crimping kabel</li>
            <li>membuat laporan</li>
            <li>installasi mikrotik</li>
        </ul>
    </div>
</div>

<div class="right-column">
    <div class="card" id="skills">
        <h2> NETWORK SKILLS</h2>

        <div class="skill-item">
            <span class="skill-name">MIkrotik RouterOS</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
        </div>

        <div class="skill-item">
            <span class="skill-name">Cisco Networking</span>
            <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
       </div>

       <div class="skill-item">
        <span class="skill-name">Linux Server (Debian/Ubuntu)</span>
        <div class="progress-bar"><div class="progress-fill" style="width: 80%;"></div></div>
    </div>

    <div class="skill-item">
        <span class="skill-name">Network Security</span>
        <div class="progress-bar"><div class="progress-fill" style="width: 75%;"></div></div>
    </div>
</div>

    <div class="card" id="kontak">
       <h2>FORM KONTAK</h2>

       <?php echo $pesan_status; ?>

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="Email" name="txt_email" placeholder="Masukkan email..." required>

        <div class="form-group">
            <label for="pesan">pesan:</label>
            <input type="pesan" name="txt_pesan" placeholder="Masukkan pesan..." required></textarea>
        </div>

        <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
    </form>
</div>
</div>

</div>
<div>

<script src="script.js"></script>
</body>
</html>