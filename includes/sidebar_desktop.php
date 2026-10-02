<aside class="sidebar-left desktop-only">
    <div class="side-menu">
        <a href="<?=$root?>index.php" class="side-menu-item <?= $page == 'beranda' ? 'active' : '' ?>">
            <div><i class="fas fa-home icon-box"></i> Beranda</div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <?php
        // Submenu terbuka jika sedang di halaman profil atau sub-halaman profil
        $profilOpen = in_array($page, ['profil', 'sejarah', 'visi-misi', 'geografi']);
        $subPage    = $page; // e.g. 'sejarah', 'visi-misi', 'geografi'
        ?>
        <!-- Profil Desa – klik untuk buka submenu -->
        <div class="side-menu-item-wrapper">
            <a href="javascript:void(0)"
               class="side-menu-item side-menu-toggle <?= $profilOpen ? 'active' : '' ?>"
               id="profilToggle">
                <div><i class="fas fa-user icon-box"></i> Profil Desa</div>
                <i class="fas fa-chevron-right arrow <?= $profilOpen ? 'rotated' : '' ?>"></i>
            </a>
            <div class="side-submenu" id="profilSubmenu" <?= $profilOpen ? 'style="display:block"' : '' ?>>
                <a href="<?=$root?>profil.php?bagian=sejarah"
                   class="side-submenu-item <?= $subPage == 'sejarah' ? 'active' : '' ?>">
                    <i class="fas fa-scroll icon-box"></i> Sejarah Desa
                </a>
                <a href="<?=$root?>profil.php?bagian=visi-misi"
                   class="side-submenu-item <?= $subPage == 'visi-misi' ? 'active' : '' ?>">
                    <i class="fas fa-eye icon-box"></i> Visi &amp; Misi
                </a>
                <a href="<?=$root?>profil.php?bagian=geografi"
                   class="side-submenu-item <?= $subPage == 'geografi' ? 'active' : '' ?>">
                    <i class="fas fa-map-marked-alt icon-box"></i> Geografi
                </a>
            </div>
        </div>
        <a href="<?=$root?>data-desa.php" class="side-menu-item <?= $page == 'data-desa' ? 'active' : '' ?>">
            <div><i class="fas fa-database icon-box"></i> Data Desa</div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <a href="<?=$root?>struktur.php" class="side-menu-item <?= $page == 'struktur' ? 'active' : '' ?>">
            <div><i class="fas fa-users icon-box"></i> Struktur Pemerintah Desa</div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <a href="<?=$root?>berita.php" class="side-menu-item <?= $page == 'berita' ? 'active' : '' ?>">
            <div><i class="fas fa-file-alt icon-box"></i> Berita</div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <a href="<?=$root?>pengumuman.php" class="side-menu-item <?= $page == 'pengumuman' ? 'active' : '' ?>">
            <div><i class="fas fa-bullhorn icon-box"></i> Pengumuman</div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <a href="<?=$root?>masyarakat/layanan.php" class="side-menu-item <?= $page == 'layanan' ? 'active' : '' ?>">
            <div><i class="fas fa-file-signature icon-box"></i> Pelayanan Online </div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <a href="<?=$root?>kontak.php" class="side-menu-item <?= $page == 'kontak' ? 'active' : '' ?>">
            <div><i class="fas fa-phone-alt icon-box"></i> Kontak</div>
            <i class="fas fa-chevron-right arrow"></i>
        </a>
        <div class="sidebar-illustration">
            <i class="fas fa-leaf" style="color: #4ade80; font-size: 24px;"></i>
            <p>Bersama Membangun<br>Desa Lemahmulya</p>
        </div>
    </div>
</aside>