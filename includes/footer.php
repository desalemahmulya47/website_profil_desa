<footer id="kontak" class="desktop-footer desktop-only">
    <div class="footer-container">
        <div class="footer-brand">
            <img src="https://via.placeholder.com/40" alt="Logo" class="footer-logo">
            <div>
                <h4><?=s('nama_desa')?></h4>
                <p>Kecamatan <?=s('kecamatan')?>, Kabupaten <?=s('kabupaten')?></p>
            </div>
        </div>
        <div class="footer-info">
            <div class="footer-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <span class="font-bold">Alamat</span>
                    <p><?=s('alamat')?></p>
                </div>
            </div>
            <div class="footer-item">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <span class="font-bold">Kontak</span>
                    <p><?=s('telepon')?></p>
                </div>
            </div>
            <div class="footer-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <span class="font-bold">Email</span>
                    <p><?=s('email')?></p>
                </div>
            </div>
        </div>
        <div class="footer-social">
            <p class="slogan">Bersama Membangun<br>Desa Lemahmulya <i class="fas fa-leaf"></i></p>
            <div class="social-icons">
                <a class="text-white me-3" href="<?=s('facebook')?>"><i class="fab fa-facebook fa-lg"></i></a>
                <a class="text-white me-3" href="<?=s('instagram')?>"><i class="fab fa-instagram fa-lg"></i></a>
                <a class="text-white" href="<?=s('youtube')?>"><i class="fab fa-youtube fa-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <hr class="border-secondary mt-4">
        <p class="text-center pb-3 mb-0 small">© 2026 Desa <?=s('nama_desa')?>. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=$root?>assets/js/app.js"></script>
<script src="<?=$root?>assets/js/scripts.js"></script>
</body>
</html>
