<!-- <nav class="navbar navbar-expand-lg sticky-top bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-hijau" href="<?=$root?>index.php"><i class="fa-solid fa-landmark text-gold"></i> <?=s('nama_desa')?></a>
        
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nv">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nv">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>profil.php">Profil Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>pemerintahan.php">Pemerintahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>data-desa.php">Data Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>berita.php">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>potensi.php">Potensi Desa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=$root?>masyarakat/layanan.php">Layanan Surat</a></li>
                        <li><a class="dropdown-item" href="<?=$root?>masyarakat/cek-status.php">Cek Status Pengajuan</a></li>
                        <li><a class="dropdown-item" href="<?=$root?>pengaduan.php">Pengaduan</a></li>
                        <li><a class="dropdown-item" href="<?=$root?>galeri.php">Galeri</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>transparansi.php">Transparansi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>

                <li class="nav-item ms-lg-2">
                    <a class="btn btn-hijau btn-sm" href="<?=$root?>login.php"><i class="fa fa-lock"></i> Login Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- Header -->
<header class="header">
    <div>
        <a href="<?=$root?>index.php" class="header-left">
        <div class="logo">
            <img src="https://via.placeholder.com/40" alt="Logo">
        </div>
        <div class="header-titles">
            <h1><?=s('nama_desa')?></h1>
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
        <a href="<?=$root?>galeri.php" class=<?= $page == 'galeri' ? 'active' : '' ?>>Galeri</a>
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
                <img src="https://via.placeholder.com/40" alt="Logo">
            </div>
            <div class="sidebar-titles">
                <h2>Desa Lemahmulya</h2>
                <p>Kec. Majalaya, Kab. Karawang</p>
            </div>
        </div>
        <button class="close-btn" id="closeSidebarBtn">
            <i class="fas fa-times"></i>
        </button>
    </div>
    
    <div class="sidebar-menu">
        <a href="index.html" class="sidebar-item">
            <i class="fas fa-home"></i>
            <span>Beranda</span>
        </a>
        <a href="profil.html" class="sidebar-item">
            <i class="fas fa-user"></i>
            <span>Profil Desa</span>
        </a>
        <a href="struktur.html" class="sidebar-item">
            <i class="fas fa-users"></i>
            <span>Struktur Organisasi</span>
        </a>
        <a href="berita.html" class="sidebar-item">
            <i class="fas fa-file-alt"></i>
            <span>Berita</span>
        </a>
        <a href="galeri.html" class="sidebar-item">
            <i class="fas fa-images"></i>
            <span>Galeri Foto</span>
        </a>
        <a href="pengumuman.html" class="sidebar-item">
            <i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span>
        </a>
        <a href="layanan.html" class="sidebar-item">
            <i class="fas fa-file-signature"></i>
            <span>Pelayanan Online</span>
        </a>
        <a href="kontak.html" class="sidebar-item">
            <i class="fas fa-phone-alt"></i>
            <span>Kontak</span>
        </a>
        <div class="sidebar-divider"></div>
        <a href="login.html" class="sidebar-item">
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
    <a href="<?=$root?>galeri.php" class="nav-item">
        <i class="fas fa-images"></i>
        <span>Galeri</span>
    </a>
    <a href="<?=$root?>menu.php" class="nav-item" id="bottomMenuBtn">
        <i class="fas fa-bars"></i>
        <span>Menu</span>
    </a>
</nav>