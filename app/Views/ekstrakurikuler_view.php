<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - ITB</title>
    <!-- Mengambil link CSS dari HTML kedua -->
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
    <link rel="shortcut icon" type="x-icon" href="favicon.png">
</head>
<body>
    <!-- Menggunakan header dari HTML kedua -->
    <header class="header">
        <div class="logo">
            <img src="https://arrahmat-bjn.sch.id/wp-content/uploads/2024/09/logo_PPM-removebg-preview-1.png" alt="ARR LOGO">
        </div>
        <div class="logo-text">
            <h3>PPM AR-RAHMAT BOJONEGORO</h3>
        </div>  
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Prestasi</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
        <div class="login">
            <button>Login</button>
        </div>
    </header>

    <section class="info-section">
        <h4>DAFTAR EKSTRAKULIKULER</h4>
        
        
        <!-- Mengambil konten dari HTML pertama -->
        <h2>Jadwal Hari Ini: <?= esc($hariini); ?></h2> <!-- Menampilkan nama hari saat ini -->

        <!-- Loop pertama untuk menampilkan ekstrakurikuler berdasarkan hari ini -->
        <h2>Program Ekstrakurikuler Hari Ini</h2>
        <div class="ekstra-hari-ini">
            <?php if (!empty($ekstra_hari_ini)): ?>
                <div class="card">
                    <?php foreach ($ekstra_hari_ini as $ekstra): ?>
                        <div class="program-box">
                            <h3><?= esc($ekstra['Nama']); ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p>Tidak ada kegiatan ekstrakurikuler pada hari ini.</p>
            <?php endif; ?>
        </div>

        <!-- Loop kedua untuk menampilkan semua ekstrakurikuler -->
        <h2>Semua Program Ekstrakurikuler</h2>
        <div class="card">
            <?php foreach ($all_nama as $ekstra): ?>
                <div class="card-image">
                    <h3><?= esc($ekstra['Nama']); ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer dari HTML pertama -->
    <footer>
        <p>&copy; YAYASAN PONDOK PESANTREN MODERN AR RAHMAT BOJONEGORO</p>
    </footer>

    <!-- Menghubungkan file JS -->
    <script src="<?= base_url('js/programLoop.js'); ?>"></script>
</body>
</html>
