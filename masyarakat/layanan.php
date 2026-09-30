<?php
$root='../';
$title='Layanan';
$page="layanan";
include '../includes/header.php';
?>
<div class="container">
    <h2 class="judul">Layanan Desa Digital</h2>
    <p>Pilih layanan, isi formulir, kirim, lalu simpan nomor pengajuan. <a href="cek-status.php">Cek status</a></p>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card-desa bg-white p-3">
                <h6 class="text-hijau">
                <i class="fa fa-file-lines text-gold"></i> 
                Cek Pajak Bumi dan Bangunan</h6>
                <a class="btn btn-hijau btn-sm" href="https://cekpbb.karawangkab.go.id/" target="_blank">Ajukan</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="judul">Pelayanan Online</h2>
    <p>Klik untuk download/unduh sesuai pengajuan dokumen kependudukan yang diperlukan. <a href="cek-status.php">Cek status</a></p>
    <div class="row g-3">
        <?php foreach(rows('SELECT * FROM layanan') as $l):?>
            <div class="col-md-4">
                <div class="card-desa bg-white p-3">
                    <h6 class="text-hijau">
                    <i class="fa fa-file-lines text-gold"></i> 
                    <?=e($l['nama'])?></h6>
                    <p class="small text-muted"><?=e($l['deskripsi'])?></p>
                    <a href="<?=e($l['link'])?>" class="btn btn-outline-hijau btn-sm" target="_blank">Download</a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

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
    </div>
</div>
        
<?php include '../includes/footer.php';?>
