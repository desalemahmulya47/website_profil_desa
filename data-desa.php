<?php $title='Data Desa';include 'includes/header.php';
function grp($c){return rows("SELECT COALESCE($c,'-') l,COUNT(*) n FROM penduduk GROUP BY $c");}
$D=['jk'=>grp('jk'),'pendidikan'=>grp('pendidikan'),'pekerjaan'=>grp('pekerjaan'),'umkm'=>rows('SELECT jenis_usaha l,COUNT(*) n FROM umkm GROUP BY jenis_usaha')];?>
<div class="container"><h2 class="judul">Data Desa</h2><div class="row g-3"><?php foreach(['jk'=>'Jenis Kelamin','pendidikan'=>'Pendidikan','pekerjaan'=>'Pekerjaan','umkm'=>'Jenis UMKM'] as $k=>$l):?><div class="col-md-6"><div class="card-desa bg-white p-3"><h6 class="text-hijau"><?=$l?></h6><canvas id="c_<?=$k?>"></canvas></div></div><?php endforeach;?></div></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script><script>const D=<?=json_encode($D)?>;for(const k in D){new Chart(document.getElementById('c_'+k),{type:k=='jk'?'doughnut':'bar',data:{labels:D[k].map(x=>x.l),datasets:[{data:D[k].map(x=>x.n),backgroundColor:['#064e3b','#059669','#d4a017','#34d399','#a7f3d0','#92400e']}]},options:{plugins:{legend:{display:k=='jk'}}}})}</script>
<?php include 'includes/footer.php';?>
