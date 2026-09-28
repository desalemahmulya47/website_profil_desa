<?php
/**
 * Galeri Desa page – displays a masonry grid of images with optional video links.
 */
$title = 'Galeri';
$file = "index";
$page = "galeri";
include 'includes/header.php';

// Fetch all gallery items ordered by newest first
$galleryItems = rows('SELECT * FROM galeri ORDER BY id DESC');
?>

<?php include 'includes/hero.php'; ?>
<div class="main-container">
    <?php include 'includes/sidebar_desktop.php'; ?>

    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Galeri Desa <?= s('nama_desa') ?></h2>
            <div class="masonry">
                <?php foreach ($galleryItems as $g): ?>
                    <div class="card-desa bg-white mb-3">
                        <?php if (!empty($g['foto'])): ?>
                            <img class="img-fluid rounded-top" src="assets/uploads/<?= e($g['foto']) ?>" alt="<?= e($g['judul']) ?>">
                        <?php endif; ?>
                        <div class="p-3">
                            <b><?= e($g['judul']) ?></b>
                            <span class="badge bg-success"><?= e($g['kategori']) ?></span>
                            <?php if (!empty($g['video_url'])): ?>
                                <br>
                                <a href="<?= e($g['video_url']) ?>" target="_blank" class="d-inline-block mt-2">
                                    <i class="fa fa-play"></i> Tonton video
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</div>
<?php include 'includes/footer.php'; ?>
