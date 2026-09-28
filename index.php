<?php
$title = 'Beranda';
$file = "index";
$page = "beranda";
include 'includes/header.php';

$st = [
    'stat_penduduk' => ['Penduduk', 'users'],
    'stat_kk'       => ['Kepala Keluarga', 'house-user'],
    'stat_lk'       => ['Laki-laki', 'person'],
    'stat_pr'       => ['Perempuan', 'person-dress'],
    'stat_dusun'    => ['Dusun', 'map'],
    'stat_rt'       => ['RT', 'signs-post'],
    'stat_rw'       => ['RW', 'sitemap'],
];
?>
<?php
$bn = rows('SELECT * FROM banner WHERE aktif=1 ORDER BY urutan,id DESC');
if ($bn):
?>

<div id="hs" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
        <?php foreach ($bn as $i => $b): ?>
        <button type="button" data-bs-target="#hs" data-bs-slide-to="<?= $i ?>" class="<?= $i ? '' : 'active' ?>"></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($bn as $i => $b): ?>
        <div class="carousel-item <?= $i ? '' : 'active' ?>">
            <?php if ($b['link']): ?>
            <a href="<?= e($b['link']) ?>">
            <?php endif; ?>
            <img src="assets/uploads/<?= e($b['foto']) ?>" class="d-block w-100 hero-img" alt="<?= e($b['judul']) ?>">
            <?php if ($b['link']): ?>
            </a>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hs" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hs" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<?php else: ?>
<section class="hero-beranda">
    <div class="hero-bg">
        <img src="https://images.unsplash.com/photo-1599839619722-39751411ea63?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80" alt="Kantor Desa">
        <div class="hero-overlay-gradient"></div>
    </div>
    <div class="hero-content">
        <div class="welcome-badge">
            <i class="fas fa-leaf"></i> Selamat Datang di
        </div>
        <h2>Desa <?=s('nama_desa')?></h2>
        <p class="subtitle">Kecamatan <?=s('kecamatan')?>, Kabupaten <?=s('kabupaten')?></p>
        
        <div class="hero-buttons">
            <a href="masyarakat/layanan.php" class="btn-primary-hero">
                <i class="fas fa-file-alt"></i> Pelayanan Online 
            </a>
            <a href="profil.php" class="btn-outline-hero">
                <i class="fas fa-user"></i> Profil Desa
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<a href="pengaduan.php" class="fab-aduan"><i class="fa fa-headset"></i> Pengaduan</a>

    <!-- Main Layout Grid -->
    <div class="main-container">
        
        <!-- Left Sidebar (Desktop Only) -->
        <?php include 'includes/sidebar_desktop.php'; ?>

        <!-- Main Content -->
        <main class="content-center">
            
            <!-- Akses Cepat / Menu Grid -->
            <section class="content-section">
                <div class="section-header desktop-header-style">
                    <div class="section-title">
                        <i class="fas fa-file-alt icon-blue-green"></i>
                        <div>
                            <h3>Akses Cepat</h3>
                            <p class="section-subtitle desktop-only">Layanan yang dapat Anda gunakan dengan mudah</p>
                        </div>
                    </div>
                </div>
                
                <div class="menu-grid">
                    <a href="<?=$root?>masyarakat/layanan.php" class="grid-item">
                        <div class="icon-wrapper" style="background-color: #e8f5e9; color: #0b5e46;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <span>Pelayanan<br>Online</span>
                        <i class="fas fa-arrow-right small-arrow"></i>
                    </a>
                    <a href="#" class="grid-item">
                        <div class="icon-wrapper" style="background-color: #f3e5f5; color: #7b1fa2;">
                            <i class="fas fa-images"></i>
                        </div>
                        <span>Profil Desa</span>
                        <i class="fas fa-arrow-right small-arrow"></i>
                    </a>
                    <a href="<?=$root?>berita.php" class="grid-item">
                        <div class="icon-wrapper" style="background-color: #e3f2fd; color: #1976d2;">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <span>Berita Desa</span>
                        <i class="fas fa-arrow-right small-arrow"></i>
                    </a>
                    <a href="#" class="grid-item">
                        <div class="icon-wrapper" style="background-color: #f3e5f5; color: #7b1fa2;">
                            <i class="fas fa-image"></i>
                        </div>
                        <span>Galeri Foto</span>
                        <i class="fas fa-arrow-right small-arrow"></i>
                    </a>
                    <a href="<?=$root?>masyarakat/layanan.php" class="grid-item">
                        <div class="icon-wrapper" style="background-color: #e8f5e9; color: #2e7d32;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <span>WhatsApp<br>Desa</span>
                        <i class="fas fa-arrow-right small-arrow"></i>
                    </a>
                </div>
            </section>

            <!-- Berita Terbaru -->
            <section class="content-section">
                <div class="section-header">
                    <div class="section-title">
                        <i class="fas fa-newspaper icon-blue-green"></i>
                        <h3>Berita Terbaru</h3>
                    </div>
                    <a href="berita.php" class="see-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="news-grid">
                    <?php foreach (rows('SELECT b.*,k.nama kat FROM berita b JOIN kategori_berita k ON k.id=b.kategori_id ORDER BY headline DESC,tanggal DESC,id DESC LIMIT 3') as $b): ?>
                    <a href="berita.php?id=<?= $b['id'] ?>" class="news-card">
                        <?php if ($b['foto']): ?>
                        <img src="assets/uploads/<?= e($b['foto']) ?>" alt="<?= e($b['judul']) ?>" class="news-img">
                        <?php else: ?>
                        <div class="news-img-placeholder"></div>
                        <?php endif; ?>
                        <div class="news-content">
                            <span class="news-date">
                                <i class="far fa-calendar-alt"></i> <?= e($b['tanggal']) ?>
                                
                                <span class="badge bg-success"><?= e($b['kat']) ?></span>
                            </span>
                            <h4><?= e($b['judul']) ?></h4>
                            <p><?= e(substr(strip_tags($b['isi']), 0, 100)) ?>...</p>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Pengumuman -->
            <section class="content-section">
                <div class="section-header">
                    <div class="section-title">
                        <i class="fas fa-bullhorn icon-blue-green"></i>
                        <h3>Pengumuman</h3>
                    </div>
                    <a href="pengumuman.php" class="see-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="announcement-grid">
                    <?php foreach (rows('SELECT * FROM agenda WHERE tanggal>=CURDATE() ORDER BY tanggal LIMIT 4') as $a): ?>
                    <div class="announcement-item">
                        <div class="ann-content">
                            <h5><?= e($a['judul']) ?></h5>
                            <span class="ann-date"><i class="fa fa-calendar"></i> <?= e($a['tanggal']) ?></span>
                            <span class="ann-date"><i class="fa fa-location-dot"></i> <?= e($a['lokasi']) ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>
    </div>
    <!-- End Main Container -->

<!-- <div class="container">
    <div class="row g-3 mt-n5 pt-4">
        <?php foreach ($st as $k => [$l, $i]): ?>
        <div class="col-6 col-md-3 col-lg">
            <div class="card-desa bg-white stat">
                <i class="fa fa-<?= $i ?>"></i>
                <h3><?= number_format((int)($S[$k] ?? 0), 0, ',', '.') ?></h3>
                <small><?= $l ?></small>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h3 class="judul">Layanan Desa</h3>
    <div class="row g-3">
        <?php foreach (rows('SELECT * FROM layanan LIMIT 6') as $l): ?>
        <div class="col-md-4">
            <a href="masyarakat/pengajuan.php?id=<?= $l['id'] ?>" class="text-decoration-none">
                <div class="card-desa bg-white p-3">
                    <i class="fa fa-file-lines text-gold fa-lg"></i>
                    <b class="text-hijau"><?= e($l['nama']) ?></b>
                    <p class="small text-muted mb-0"><?= e($l['deskripsi']) ?></p>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-3">
        <a href="masyarakat/layanan.php" class="btn btn-hijau">Semua Layanan</a>
        <a href="masyarakat/cek-status.php" class="btn btn-outline-success rounded-pill">Cek Status</a>
    </div>

    <h3 class="judul">Berita Terbaru</h3>
    <div class="row g-3">
        <?php foreach (rows('SELECT b.*,k.nama kat FROM berita b JOIN kategori_berita k ON k.id=b.kategori_id ORDER BY headline DESC,tanggal DESC,id DESC LIMIT 3') as $b): ?>
        <div class="col-md-4">
            <a href="berita.php?id=<?= $b['id'] ?>" class="text-decoration-none text-dark">
                <div class="card-desa bg-white">
                    <?php if ($b['foto']): ?>
                    <img class="thumb" src="assets/uploads/<?= e($b['foto']) ?>">
                    <?php else: ?>
                    <div class="thumb"></div>
                    <?php endif; ?>
                    <div class="p-3">
                        <span class="badge bg-success"><?= e($b['kat']) ?></span>
                        <h6 class="mt-2"><?= e($b['judul']) ?></h6>
                        <small class="text-muted"><?= e($b['tanggal']) ?></small>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <h3 class="judul">Agenda Desa</h3>
    <div class="row g-3">
        <?php foreach (rows('SELECT * FROM agenda WHERE tanggal>=CURDATE() ORDER BY tanggal LIMIT 4') as $a): ?>
        <div class="col-md-3">
            <div class="card-desa bg-white p-3">
                <b class="text-hijau"><?= e($a['judul']) ?></b><br>
                <small><i class="fa fa-calendar"></i> <?= e($a['tanggal']) ?><br>
                <i class="fa fa-location-dot"></i> <?= e($a['lokasi']) ?></small>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div> -->

<?php include 'includes/footer.php'; ?>
