<?php
$file = "index";
$page = $page ?? '';
?>

<!-- Header -->
<header class="header">
    <div>
        <a href="<?=$root?>index.php" class="header-left">
        <div class="logo">
            <img src="assets/uploads/logo.png" alt="Logo">
        </div>
        <div class="header-titles">
            <h1>Desa <?=s('nama_desa')?></h1>
            <p>Kecamatan <?=s('kecamatan')?>, Kabupaten <?=s('kabupaten')?></p>
        </div>
        </a>
    </div>
    
    <!-- Desktop Navigation -->
    <nav class="desktop-nav desktop-only-flex">
        <a href="<?=$root?>index.php" class=<?= $page == 'beranda' ? 'active' : '' ?>>Beranda</a>
        <a href="<?=$root?>profil.php" class=<?= $page == 'profil' ? 'active' : '' ?>>Profil Desa</a>
        <a href="<?=$root?>struktur.php" class=<?= $page == 'struktur' ? 'active' : '' ?>>Struktur</a>
        <a href="<?=$root?>berita.php" class=<?= $page == 'berita' ? 'active' : '' ?>>Berita</a>
        <a href="<?=$root?>pengumuman.php" class=<?= $page == 'pengumuman' ? 'active' : '' ?>>Pengumuman</a>
        <a href="<?=$root?>masyarakat/layanan.php" class=<?= $page == 'layanan' ? 'active' : '' ?>>Pelayanan Online</a>
        <a href="<?=$root?>kontak.php" class=<?= $page == 'kontak' ? 'active' : '' ?>>Kontak</a>
    </nav>

    <div class="header-right desktop-only-flex">
        <!-- <button class="btn-icon"><i class="fas fa-search"></i></button> -->
         <a href="<?=$root?>login.php">
        <button class="btn-login"><i class="fas fa-user"></i> Login Admin</button>
        </a>
    </div>

    <button class="menu-toggle mobile-only" id="menuToggleBtn">
        <i class="fas fa-bars"></i>
    </button>
</header>

<!-- Sidebar Overlay (Drawer) - Mobile Only -->
<div class="sidebar-overlay mobile-only" id="sidebarOverlay"></div>
<div class="sidebar mobile-only" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo-container">
            <div class="logo">
                <img src="assets/uploads/logo.png" alt="Logo">
            </div>
            <div class="sidebar-titles">
                <h2>Desa <?=s('nama_desa')?></h2>
                <p>Kec. <?=s('kecamatan')?>, Kab. <?=s('kabupaten')?></p>
            </div>
        </div>
        <button class="close-btn" id="closeSidebarBtn">
            <i class="fas fa-times"></i>
        </button>
    </div>
    
    <div class="sidebar-menu">
        <a href="<?=$root?>index.php" class="sidebar-item">
            <i class="fas fa-home"></i>
            <span>Berandaa</span>
        </a>
        <a href="<?=$root?>profil.php" class="sidebar-item">
            <i class="fas fa-user"></i>
            <span>Profil Desa</span>
        </a>
        <a href="<?=$root?>struktur.php" class="sidebar-item">
            <i class="fas fa-users"></i>
            <span>Struktur Organisasi</span>
        </a>
        <a href="<?=$root?>berita.php" class="sidebar-item">
            <i class="fas fa-file-alt"></i>
            <span>Berita</span>
        </a>
        <a href="<?=$root?>pengumuman.php" class="sidebar-item">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span>
        </a>
        <a href="<?=$root?>masyarakat/layanan.php" class="sidebar-item">
            <i class="fas fa-file-signature"></i>
            <span>Pelayanan Online</span>
        </a>
        <a href="<?=$root?>kontak.php" class="sidebar-item">
            <i class="fas fa-phone-alt"></i>
            <span>Kontak</span>
        </a>
        <div class="sidebar-divider"></div>
        <a href="<?=$root?>login.php" class="sidebar-item">
            <i class="fas fa-user-circle"></i>
            <span>Login Admin</span>
        </a>
    </div>

    <div class="sidebar-footer">
        <button class="btn-whatsapp">
            <i class="fab fa-whatsapp"></i> WhatsApp Desa
        </button>
    </div>
</div>

<!-- Bottom Navigation - Mobile Only -->
<nav class="bottom-nav mobile-only">
    <a href="<?=$root?>index.php" class="nav-item active">
        <i class="fas fa-home"></i>
        <span>Beranda</span>
    </a>
    <a href="<?=$root?>profil.php" class="nav-item">
        <i class="fas fa-file-alt"></i>
        <span>Profil</span>
    </a>
    <a href="<?=$root?>berita.php" class="nav-item">
        <i class="fas fa-newspaper"></i>
        <span>Berita</span>
    </a>
    <a href="<?=$root?>menu.php" class="nav-item" id="bottomMenuBtn">
        <i class="fas fa-bars"></i>
        <span>Menu</span>
    </a>
</nav>