<div class="main-container">
    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Sejarah Desa <?= s('nama_desa') ?></h2>
            <p>
                <?= nl2br(e($p['sejarah'] ?? '')) ?>
            </p>
        </section>
    </main>
</div>