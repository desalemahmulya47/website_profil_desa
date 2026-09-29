<?php
session_start();

if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // XAMPP (Lokal)
    $host = 'localhost';
    $db   = 'digital_desa';
    $user = 'root';
    $pass = '';
} else {
    // InfinityFree (Hosting)
    $host = 'sql107.infinityfree.com';
    $db   = 'if0_43028656_desa_lemahmulya';
    $user = 'if0_43028656';
    $pass = 'rgmvGCwJ3SWcKxg';
}

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
function e($s){return htmlspecialchars((string)$s,ENT_QUOTES,'UTF-8');}
function csrf(){if(empty($_SESSION['c']))$_SESSION['c']=bin2hex(random_bytes(16));return '<input type="hidden" name="csrf" value="'.$_SESSION['c'].'">';}
function csrf_ok(){return isset($_POST['csrf'],$_SESSION['c'])&&hash_equals($_SESSION['c'],$_POST['csrf']);}
function run($q,$p=[]){global $pdo;$s=$pdo->prepare($q);$s->execute($p);return $s;}
function rows($q,$p=[]){return run($q,$p)->fetchAll();}
function row($q,$p=[]){return rows($q,$p)[0]??null;}
$S=array_column(rows('SELECT k,v FROM pengaturan'),'v','k');
function s($k){global $S;return e($S[$k]??'');}
function need($r){if(empty($_SESSION['u'])||!in_array($_SESSION['u']['role'],$r)){header('Location: ../login.php');exit;}}
function upload($f){if(empty($_FILES[$f]['name'])||$_FILES[$f]['error']!==0)return null;
$x=strtolower(pathinfo($_FILES[$f]['name'],PATHINFO_EXTENSION));
if(!in_array($x,['jpg','jpeg','png','webp','pdf','doc','docx','xls','xlsx']))throw new Exception('Tipe file tidak diizinkan');
if($_FILES[$f]['size']>5*1048576)throw new Exception('Ukuran file maksimal 5 MB');
if(in_array($x,['jpg','jpeg','png','webp'])&&!getimagesize($_FILES[$f]['tmp_name']))throw new Exception('Bukan gambar valid');
$n=bin2hex(random_bytes(8)).'.'.$x;move_uploaded_file($_FILES[$f]['tmp_name'],__DIR__.'/../assets/uploads/'.$n);return $n;}
