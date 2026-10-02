<?php require_once __DIR__.'/../config/database.php';$root=$root??'';?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?=e($title??'Beranda')?> - DIGITAL DESA <?=s('nama_desa')?></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="<?=$root?>assets/css/style.css" rel="stylesheet">
        <link href="<?=$root?>assets/css/global.css" rel="stylesheet">
        <link href="<?=$root?>assets/css/navbar.css" rel="stylesheet">
        <link href="<?=$root?>assets/css/<?=$file?>.css" rel="stylesheet">
    </head>
    <body>
        
<?php include __DIR__.'/navbar.php';?>
