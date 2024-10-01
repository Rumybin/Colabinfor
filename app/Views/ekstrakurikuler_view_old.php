<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - ITB</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">


</head>
<body>
    <header>
        <h1>EKSTRAKURIKULER</h1>
        <nav>
            <ul>
                <li><a href="/halaman">Beranda</a></li>
                <li><a href="#">Pendidikan</a></li>
                <li><a href="#">Penerimaan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    
    <section>
        <h2>Jadwal Hari Ini: <?= esc($hariini); ?></h2> <!-- Menampilkan nama hari saat ini -->

        <!-- Loop pertama untuk menampilkan ekstrakurikuler berdasarkan hari ini (Controller 1) -->
        <h2>Program Ekstrakurikuler Hari Ini</h2>
        
        <!-- View File -->
<div class="ekstra-hari-ini">
    <?php if (!empty($ekstra_hari_ini)): ?>
        <div class="card">
            <?php foreach ($ekstra_hari_ini as $ekstra): ?>
                <div class="card-image">
                    <h3><?= esc($ekstra['Nama']); ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Tidak ada kegiatan ekstrakurikuler pada hari ini.</p>
    <?php endif; ?>
</div>

    
<!-- Tambahkan script di bawah ini untuk menghubungkan JS -->
<script src="<?= base_url('js/programLoop.js'); ?>"></script>

        <!-- Loop kedua untuk menampilkan semua ekstrakurikuler (Controller 2) -->
        <h2>Semua Program Ekstrakurikuler</h2>
        <div class="program-container">
            <?php foreach ($all_nama as $ekstra): ?>
                <div class="program-box">
                    <h3><?= esc($ekstra['Nama']); ?></h3>
                </div>
            <?php endforeach; ?>
        </>

    </section>

    <footer>
        <p>&copy; YAYASAN PONDOK PESANTREN MODERN AR RAHMAT BOJONEGORO</p>
    </footer>
</body>
</html>
