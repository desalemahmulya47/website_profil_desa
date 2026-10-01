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
$bagian = $_GET['bagian'] ?? 'sejarah';
?>

<?php include 'includes/hero.php'; ?>
<div class="main-container">
    <?php include 'includes/sidebar_desktop.php'; ?>

    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Profil Desa <?= s('nama_desa') ?></h2>
            <?php
            $bagian = $_GET['bagian'] ?? 'sejarah';

            $sections = [
                'sejarah'   => 'Sejarah Desa',
                'visi-misi' => 'Visi & Misi',
                'geografi'  => 'Geografi'
            ];
            ?>

            <div class="card-desa bg-white p-4 mb-3">
                <?php
                if ($bagian === 'sejarah') {
                    include 'profil/sejarah.php';
                } elseif ($bagian === 'visi-misi') {
                    include 'profil/visi-misi.php';
                } elseif ($bagian === 'geografi') {
                    include 'profil/geografi.php';
                }
                ?>
            </div>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
