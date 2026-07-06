<div class="it-offcanvas-area">
    <div class="itoffcanvas">
        <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="itoffcanvas__logo">
            <a href="<?= base_url() ?>">
                <img class="header-logo" src="<?= base_url('assets/img/logo/apple-touch-icon.png'); ?>" alt="">
            </a>
        </div>
        <div class="itoffcanvas__text">
            <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra nibh
                cras pulvinar suspen.</p>
        </div>
        <div class="it-menu-mobile d-xl-none"></div>
        <a href="<?= base_url('pendaftaran') ?>" style="width: 75%;margin-top: -60px;position: absolute;" class="it-btn-yellow border-radius-100">
            <span>
                <span class="text-1">Pendaftaran</span>
                <span class="text-2">Pendaftaran</span>
            </span>
            <i>
                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z" fill="currentcolor" />
                </svg>
            </i>
        </a>
        <div class="itoffcanvas__info">
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