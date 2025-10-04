<?php
session_start();

// Jika belum login, redirect ke login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=Silakan+login+dulu");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NICE DENTAL CARE</title>

  <!-- ICONS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"/>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <nav>
    <div>
      <img src="logo nice dental.png" alt="Nice Dental Care">
    </div>
    <ul>
      <li><a href="#home">NICE DENTAL CARE</a></li>
      <li><a href="#Layanan">Layanan</a></li>
      <li><a href="#Dokter">Dokter</a></li>
      <li><a href="#Lokasi">Lokasi</a></li>
      <li><a href="#Promo">Promo</a></li>
    </ul>
  </nav>

  <p style="text-align:right; margin-right:20px;">
    Login sebagai: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong> |
    <a href="logout.php">Logout</a>
  </p>

  <!-- Konten Asli -->
  <main>
    <section id="home">
      <h2>Selamat Datang di NICE DENTAL CARE</h2>
      <p>Care for your smile 🦷😁</p>
      <p>Nice Dental Care hadir untuk memudahkan hidupmu!</p>
      <p>Kami menjadi satu solusi perawatan gigi untuk semua orang dengan menyediakan berbagai layanan lengkap, dari pencegahan hingga perawatan estetika.</p>
    </section>

    <section id="Layanan">
      <h2>Layanan</h2>
      <div class="card card-featured">
        <h3>Behel/Kawat Gigi</h3>
        <p>Conventional Braces • Clear Aligner • Damon</p>
      </div>
      <div class="card"><h3>Cabut Gigi</h3><p>Prosedur pencabutan gigi yang mengalami gangguan masalah kesehatan gigi.</p></div>
      <div class="card"><h3>Bleaching Gigi</h3><p>Perawatan pemutihan gigi agar tampak lebih cerah, putih, dan sehat.</p></div>
      <div class="card"><h3>Gigi Palsu</h3><p>Perawatan untuk menggantikan gigi yang hilang atau rusak.</p></div>
      <div class="card"><h3>Scaling/Karang Gigi</h3><p>Prosedur pembersihan karang gigi pada permukaan gigi dan gusi.</p></div>
    </section>

    <section id="Lokasi">
      <h2>Lokasi</h2>
      <p>Nice Dental Care Samarinda</p>
      <p>Jl. P Antasari No.26, Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243</p>
      <p>WA : 0853-5330-0088</p>
      <a href="https://maps.app.goo.gl/3vdeDUZmRJkEi1yZ9/" target="_blank" class="btn btn-primary">Lihat di Google Maps</a>
    </section>

    <section id="Promo">
      <h2>Promo</h2>
      <div class="card"><h3>Scaling/Karang Gigi</h3><p>Dari 300k menjadi 150k</p></div>
      <div class="card"><h3>Bleaching Gigi</h3><p>Dari 2.500k menjadi 799k</p></div>
    </section>

    <section id="Dokter">
      <h2>Dokter</h2>
      <div class="card"><h4>Drg. Milda. ap. ort</h4><p>Spesialis Orthodonti</p></div>
    </section>
  </main>

  <footer>
    <p>Referensi Desain:</p>
    <ul>
      <li><a href="https://www.satudental.com/" target="_blank">Klinik Gigi SATU Dental</a></li>
      <li><a href="https://www.audydental.com/" target="_blank">Audy Dental</a></li>
    </ul>
  </footer>
</body>
</html>
