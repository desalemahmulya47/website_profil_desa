<section class="content-section">
    <div class="section-header desktop-header-style">
        <div class="section-title">
            <i class="fas fa-file-alt icon-blue-green"></i>
            <div>
                <h3>Sejarah Desa <?= s('nama_desa') ?></h3>
            </div>
        </div>
    </div>
    <p class="section-subtitle desktop-only">
        <?= nl2br(e($p['sejarah'] ?? '')) ?>
    </p>
</section>