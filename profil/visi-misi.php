<section class="content-section">
    <div class="section-header desktop-header-style">
        <div class="section-title">
            <i class="fas fa-file-alt icon-blue-green"></i>
            <div>
                <h3>Visi & Misi Desa <?= s('nama_desa') ?></h3>
            </div>
        </div>
    </div>
    <h4>Visi</h4>
    <p class="section-subtitle desktop-only">
        <?= nl2br(e($p['visi'] ?? '')) ?>
    </p>
    <h4>Misi</h4>
    <p class="section-subtitle desktop-only">
        <?= nl2br(e($p['misi'] ?? '')) ?>
    </p>
</section>