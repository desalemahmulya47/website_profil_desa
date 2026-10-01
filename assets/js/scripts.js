const menuToggleBtn = document.getElementById('menuToggleBtn');
const bottomMenuBtn = document.getElementById('bottomMenuBtn');
const closeSidebarBtn = document.getElementById('closeSidebarBtn');
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');

if(menuToggleBtn) {
    menuToggleBtn.addEventListener('click', () => {
        sidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
    });
}

if(bottomMenuBtn) {
    bottomMenuBtn.addEventListener('click', (e) => {
        e.preventDefault();
        sidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
    });
}

if(closeSidebarBtn) {
    closeSidebarBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
    });
}

if(sidebarOverlay) {
    sidebarOverlay.addEventListener('click', () => {
        sidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
    });
}

const profilToggle = document.getElementById('profilToggle');
const profilSubmenu = document.getElementById('profilSubmenu');
const arrow = profilToggle.querySelector('.arrow');

profilToggle.addEventListener('click', function () {
    const terbuka = profilSubmenu.style.display === 'block';

    profilSubmenu.style.display = terbuka ? 'none' : 'block';
    arrow.classList.toggle('rotated', !terbuka);
});