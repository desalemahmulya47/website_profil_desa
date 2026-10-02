<?php
// ----------------------------------------------------------
// berita.php – tampilkan daftar berita atau detail satu berita
// ----------------------------------------------------------
$title = 'Berita';
$file = "index";
$page = "berita";
include 'includes/header.php';

// Get article ID (if any) from query string
$id = (int)($_GET['id'] ?? 0);
?>

<?php include 'includes/hero.php'; ?>
<div class="main-container">
    <?php include 'includes/sidebar_desktop.php'; ?>

    <main class="content-center">
        <section class="content-section">
            <?php
                if ($id && ($b = row(
                'SELECT b.*, k.nama kat 
                FROM berita b 
                LEFT JOIN kategori_berita k ON k.id = b.kategori_id 
                WHERE b.id = ?', [$id]
                ))): 
            ?>

            <!-- Detail berita -->
            <h2 class="judul mb-3"><?= e($b['judul']) ?></h2>
            <p class="text-muted mb-2">
                <span class="badge bg-success"><?= e($b['kat']) ?></span>
                <?= e($b['tanggal']) ?> • <?= e($b['penulis']) ?>
            </p>
            
            <?php if ($b['foto']): ?>
                <img class="img-fluid rounded mb-3" src="assets/uploads/<?= e($b['foto']) ?>" alt="Foto Berita">
            <?php endif; ?>
            <div class="card-desa bg-white p-4">
                <?= nl2br(e($b['isi'])) ?>
            </div>
            <a href="berita.php" class="btn btn-hijau mt-3">Kembali</a>
            <?php else: ?>
                <!-- Daftar berita -->
                <h2 class="judul mb-4">Berita Desa</h2>
                <!-- Kategori filter -->
                <form class="mb-3" method="GET" action="berita.php">
                    <select name="k" class="form-select w-auto" onchange="this.form.submit()">
                        <option value="">Semua Kategori</option>
                        <?php foreach (rows('SELECT * FROM kategori_berita') as $k): ?>
                            <option value="<?= $k['id'] ?>" <?= (($_GET['k'] ?? '') == $k['id']) ? 'selected' : '' ?>><?= e($k['nama']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </form>
                <div class="row g-3">
                    <?php
                    $k = (int)($_GET['k'] ?? 0);
                    $query = 'SELECT b.*, k.nama kat 
                        FROM berita b 
                        LEFT JOIN kategori_berita k ON k.id = b.kategori_id 
                        WHERE (? = 0 OR b.kategori_id = ?) 
                        ORDER BY b.tanggal DESC, b.id DESC';
                    foreach (rows($query, [$k, $k]) as $b): ?>
                        <div class="col-md-4">
                            <a class="text-decoration-none text-dark" href="berita.php?id=<?= $b['id'] ?>">
                                <div class="card-desa bg-white h-100">
                                    <?php if ($b['foto']): ?>
                                        <img class="thumb" src="assets/uploads/<?= e($b['foto']) ?>" alt="Thumbnail">
                                    <?php else: ?>
                                        <div class="thumb"></div>
                                    <?php endif; ?>
                                    <div class="p-3">
                                        <span class="badge bg-success"><?= e($b['kat']) ?></span>
                                        <?php if (!empty($b['headline'])): ?>
                                            <span class="badge bg-warning">Headline</span>
                                        <?php endif; ?>
                                        <h6 class="mt-2 mb-1"><?= e($b['judul']) ?></h6>
                                        <p class="small text-muted mb-1"><?= e($b['ringkasan']) ?></p>
                                        <small><?= e($b['tanggal']) ?> • <?= e($b['penulis']) ?></small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </main>
</div>
<?php include 'includes/footer.php'; ?>
