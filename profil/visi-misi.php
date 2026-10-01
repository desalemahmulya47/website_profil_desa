<div class="main-container">
    <main class="content-center">
        <section class="content-section">
            <h2 class="judul">Visi & Misi Desa <?= s('nama_desa') ?></h2>
            <p>
                <?= nl2br(e($p['visi'] ?? '')) ?>
            </p>
            <p>
                <?= nl2br(e($p['misi'] ?? '')) ?>
            </p>
        </section>
    </main>
</div>