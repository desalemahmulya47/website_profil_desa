<?php
$root='../';
$title='Layanan';
$page="layanan";
$file="layanan";
include '../includes/header.php';
?>

<main class="container">
    <div class="breadcrumb">
        <a href="<?=$root?>index.php"><span class="home-icon">⌂</span>Beranda</a>
        <span class="separator">›</span>
        <span class="current">Pelayanan Online</span>
    </div>

    <h2 class="service-title">Pusat Layanan Online &amp; Unduh Formulir Kependudukan</h2>
    <p class="service-description">Klik untuk download/unduh formulir resmi kependudukan yang diperlukan atau akses langsung portal layanan terintegrasi Pemerintah Kabupaten Karawang secaar mandiri, akurat, dan transparan.</p>

    <div>
        <h2 class="section-title">Pelayanan Online &amp; Aplikasi Daerah</h2>
        <p class="section-description">Aplikasi dan sistem pelayanan terpadu Kabupaten Karawang &amp; Desa Lemahmulya</p>
        <div id="app-service-grid">
            <?php foreach(rows('SELECT * FROM layanan') as $l):?>
                <article class="service-card">
                    <h3 class="service-card-title"><?=e($l['nama'])?></h3>
                    <p class="service-card-description"><?=e($l['deskripsi'])?></p>
                    <a href="<?=e($l['link'])?>" class="btn btn-outline-hijau btn-sm" target="_blank">Akses Layanan</a>
                </article>
            <?php endforeach;?>
        </div>
    </div>
</main>

<div class="container">
    <h2 class="judul">Formulir Kependudukan</h2>
    <p>Klik untuk download/unduh sesuai pengajuan dokumen kependudukan yang diperlukan. <a href="cek-status.php">Cek status</a></p>
    <div class="row g-3">
        <?php foreach(rows('SELECT * FROM formulir') as $l):?>
            <div class="col-md-4">
                <div class="card-desa bg-white p-3">
                    <h6 class="text-hijau">
                    <i class="fa fa-file-lines text-gold"></i> 
                    <?=e($l['nama'])?></h6>
                    <p class="small text-muted"><?=e($l['deskripsi'])?></p>
                    <a href="../assets/formulir/<?=e($l['dokumen'])?>" class="btn btn-outline-hijau btn-sm" target="_blank">Download</a>
                </div>
            </div>
        <?php endforeach;?>
            <div class="card-desa bg-white p-3">
                <h6 class="text-hijau">
                <i class="fa fa-file-lines text-gold"></i> 
                <?=e($l['nama'])?></h6>
                <p class="small text-muted"><?=e($l['deskripsi'])?></p>
                <a href="https://karawangkab.go.id/layanan-kecamatan" class="btn btn-outline-hijau btn-sm" target="_blank">Download</a>
            </div>
    </div>
</div>
        
<?php include '../includes/footer.php';?>
