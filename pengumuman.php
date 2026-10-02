<?php
$title = 'Pengumuman';
$file = "index";
$page = "pengumuman";
include 'includes/header.php';
?>

<?php include 'includes/hero.php'; ?>

<div class="main-container">
    <?php include 'includes/sidebar_desktop.php'; ?>
    <main class="content-center">
        <section class="content-section">
            <?php
            $query = '
                SELECT *
                FROM agenda
                ORDER BY tanggal DESC
            ';
            $pengumuman = rows($query);
            ?>

            <h2 class="judul mb-4">Pengumuman Desa</h2>
            <div class="row g-3">
                <?php foreach ($pengumuman as $b): ?>
                    <div class="col-md-4">
                        <div class="card-desa bg-white h-100">
                            <div class="p-3">
                                <span class="badge bg-success">Pengumuman</span>
                                <h6 class="mt-2 mb-2"><?= e($b['judul']) ?></h6>
                                <p class="small text-muted mb-1">
                                    <i class="fas fa-calendar me-1"></i>
                                    <?= e($b['tanggal']) ?>
                                </p>
                                <p class="small text-muted mb-0">
                                    <i class="fas fa-location-dot me-1"></i>
                                    <?= e($b['lokasi']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>