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
    <div class="hero-beranda">
        <?php foreach ($bn as $i => $b): ?>
        <div class="hero-bg">
            <div class="carousel-item <?= $i ? '' : 'active' ?>">
                <?php if ($b['link']): ?>
                <a href="<?= e($b['link']) ?>">
                <?php endif; ?>
                <img src="assets/uploads/<?= e($b['foto']) ?>" class="d-block w-100 hero-img" alt="<?= e($b['judul']) ?>">
                <div class="hero-overlay-gradient"></div>
                <?php if ($b['link']): ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="hero-content">
            <div class="welcome-badge">
                <i class="fas fa-leaf"></i> Selamat Datang di
            </div>
            <h2>Desa <?=s('nama_desa')?></h2>
            <p class="subtitle">Kecamatan <?=s('kecamatan')?>, Kabupaten <?=s('kabupaten')?></p>
            
            <div class="hero-buttons">
                <a href="masyarakat/layanan.php" class="btn-primary-hero">
                    <i class="fas fa-file-alt"></i>
                    <p>Pelayanan Online</p> 
                </a>
                <a href="profil.php" class="btn-outline-hero">
                    <i class="fas fa-user"></i>
                    <p>Profil Desa</p>
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#hs" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<?php else: ?>
<section class="hero-beranda">
    <div class="hero-bg">
        <img src="assets/uploads/banner1.jpg" alt="Kantor Desa">
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
                <i class="fas fa-file-alt"></i>
                <p>Pelayanan Online</p> 
            </a>
            <a href="profil.php" class="btn-outline-hero">
                <i class="fas fa-user"></i>
                <p>Profil Desa</p>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>