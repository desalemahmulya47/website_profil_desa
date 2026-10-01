<?php
require '../config/database.php';
need(['super_admin','admin_desa','kepala_desa']);
include '../includes/sidebar.php';
$c = [
    'Penduduk'=>'SELECT COUNT(*) FROM penduduk',
    'Pengajuan Baru'=>"SELECT COUNT(*) FROM pengajuan_layanan WHERE status='Diajukan'",
    'Pengaduan Baru'=>"SELECT COUNT(*) FROM pengaduan WHERE status='Baru'",
    'Berita'=>'SELECT COUNT(*) FROM berita'
];
?>

<h3 class="text-hijau">Dashboard</h3>
<div class="row g-3">
    <?php foreach($c as $l=>$q):?>
        <div class="col-6 col-md-3">
            <div class="card-desa bg-white stat">
                <h3><?=run($q)->fetchColumn()?></h3>
                <small><?=$l?></small>
            </div>
        </div>
    <?php endforeach;?>
</div>

<h5 class="mt-4 text-hijau">Pengajuan Terbaru</h5>
<table class="table bg-white">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Status</th>
    </tr>
    <?php foreach(rows('SELECT * FROM pengajuan_layanan ORDER BY id DESC LIMIT 8') as $p):?>
        <tr>
            <td>
            <a href="crud.php?t=pengajuan_layanan&e=<?=$p['id']?>">
                <?=e($p['nomor'])?></a>
            </td>
            <td>
                <?=e($p['nama'])?>
            </td>
            <td>
                <?=e($p['status'])?>
            </td>
        </tr>
    <?php endforeach;?>
</table>

<?php include '../includes/adminfoot.php';?>
