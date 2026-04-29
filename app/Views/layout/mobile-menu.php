<div class="it-offcanvas-area">
    <div class="itoffcanvas">
        <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="itoffcanvas__logo">
            <a href="index.html">
                <img src="<?= base_url('assets/img/logo/logo-black.png'); ?>" alt="">
            </a>
        </div>
        <div class="itoffcanvas__text">
            <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra nibh
                cras pulvinar suspen.</p>
        </div>
        <div class="it-menu-mobile d-xl-none"></div>
        <div class="itoffcanvas__info">
            <h3 class="offcanva-title">Get In Touch</h3>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <div class="itoffcanvas__info-icon">
                    <a href="#"><i class="fal fa-envelope"></i></a>
                </div>
                <div class="itoffcanvas__info-address">
                    <span>Email</span>
                    <?php
                    $splitEmail = explode('@', $schoolInfo['email']);
                    ?>
                    <a href="maito:<?= $schoolInfo['email'] ?>"><?= $splitEmail[0] ?> @<?= $splitEmail[1] ?></a>
                </div>
            </div>

            <div class="it-info-wrapper mb-20 d-flex align-items-center">
                <div class="itoffcanvas__info-icon">
                    <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                </div>
                <div class="itoffcanvas__info-address">
                    <span>Lokasi</span>
                    <a href="<?= $schoolInfo['maps'] ?>" target="_blank"><?= $schoolInfo['address'] ?> <br> <?= $schoolInfo['city'] ?> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>