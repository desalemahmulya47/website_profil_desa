<div class="main-container">
    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Geografi Desa <?= s('nama_desa') ?></h2>
            <p>
                <?= nl2br(e($p['geografi'] ?? '')) ?>
            </p>
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
