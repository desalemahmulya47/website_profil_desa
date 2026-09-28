<?php
/**
 * Profil Desa page
 * Displays various sections (sejarah, visi, misi, ...), a link to pemerintahan & potensi, and a map iframe.
 */
$title = 'Profil Desa';
$file = "index";
$page = "profil";
include 'includes/header.php';

// Fetch the single row with all profile data
$p = row('SELECT * FROM profil_desa LIMIT 1');
?>

<?php include 'includes/hero.php'; ?>
<div class="main-container">
    <?php include 'includes/sidebar_desktop.php'; ?>

    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Profil Desa <?= s('nama_desa') ?></h2>
            <?php
            // Map of database fields to their displayed titles
            $sections = [
                'sejarah'   => 'Sejarah Desa',
                'visi'      => 'Visi',
                'misi'      => 'Misi',
                'geografis' => 'Kondisi Geografis',
                'batas'     => 'Batas Wilayah',
                'demografi' => 'Demografi'
            ];
            foreach ($sections as $key => $label):
            ?>
                <div class="card-desa bg-white p-4 mb-3">
                    <h5 class="text-hijau"><?= $label ?></h5>
                    <?= nl2br(e($p[$key] ?? '')) ?>
                </div>
            <?php endforeach; ?>

            <div class="card-desa bg-white p-4 mb-3">
                <h5 class="text-hijau">Struktur Pemerintahan &amp; Potensi</h5>
                <a href="pemerintahan.php">Lihat Pemerintahan</a> |
                <a href="potensi.php">Lihat Potensi</a>
            </div>

            <!-- Map iframe -->
            <iframe src="<?= s('maps') ?>"
                    width="100%"
                    height="320"
                    style="border:0; border-radius:16px;">
            </iframe>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
