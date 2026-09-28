<?php
/**
 * Profil Desa page
 * Displays various sections (sejarah, visi, misi, ...), a link to pemerintahan & potensi, and a map iframe.
 */
$title = 'Profil Desa';
$file = "index";
$page = "kontak";
include 'includes/header.php';

// Fetch the single row with all profile data
$p = row('SELECT * FROM profil_desa LIMIT 1');
?>

<?php include 'includes/hero.php'; ?>
<div class="main-container">
    <?php include 'includes/sidebar_desktop.php'; ?>

    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Kontak</h2>
        </section>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
