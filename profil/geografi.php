<section class="content-section">
    <div class="section-header desktop-header-style">
        <div class="section-title">
            <i class="fas fa-file-alt icon-blue-green"></i>
            <div>
                <h3>Geografi Desa <?= s('nama_desa') ?></h3>
            </div>
        </div>
    </div>
    <p class="section-subtitle desktop-only">
        <?= nl2br(e($p['geografi'] ?? '')) ?>
    </p>
    <p class="section-subtitle desktop-only">
        <?= nl2br(e($p['batas'] ?? '')) ?>
    </p>
    <iframe src="<?= s('maps') ?>"
            width="100%"
            height="320"
            style="border:0; border-radius:16px;">
    </iframe>
</section>