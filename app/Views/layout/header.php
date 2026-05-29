<header class="it-header-height">
    <!-- header-top-area-start -->
    <div class="it-header-top-area  black-bg it-header-top-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-5">
                    <div
                        class="it-header-top-contact-wrap d-flex justify-content-center justify-content-sm-start align-items-center">
                        <ul>

                            <li>
                                <div class="it-header-top-contact d-flex align-items-center">
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.25 0.75H3.75C2.7558 0.751191 1.80267 1.14666 1.09966 1.84966C0.396661 2.55267 0.00119089 3.5058 0 4.5L0 13.5C0.00119089 14.4942 0.396661 15.4473 1.09966 16.1503C1.80267 16.8533 2.7558 17.2488 3.75 17.25H14.25C15.2442 17.2488 16.1973 16.8533 16.9003 16.1503C17.6033 15.4473 17.9988 14.4942 18 13.5V4.5C17.9988 3.5058 17.6033 2.55267 16.9003 1.84966C16.1973 1.14666 15.2442 0.751191 14.25 0.75ZM3.75 2.25H14.25C14.6991 2.25088 15.1376 2.38614 15.5092 2.63835C15.8808 2.89057 16.1684 3.24821 16.335 3.66525L10.5915 9.4095C10.1688 9.83049 9.59656 10.0669 9 10.0669C8.40344 10.0669 7.83118 9.83049 7.4085 9.4095L1.665 3.66525C1.83161 3.24821 2.11921 2.89057 2.49079 2.63835C2.86236 2.38614 3.30091 2.25088 3.75 2.25ZM14.25 15.75H3.75C3.15326 15.75 2.58097 15.5129 2.15901 15.091C1.73705 14.669 1.5 14.0967 1.5 13.5V5.625L6.348 10.47C7.05197 11.1722 8.00569 11.5665 9 11.5665C9.99431 11.5665 10.948 11.1722 11.652 10.47L16.5 5.625V13.5C16.5 14.0967 16.2629 14.669 15.841 15.091C15.419 15.5129 14.8467 15.75 14.25 15.75Z" fill="#F8C62F" />
                                        </svg>
                                    </span>
                                    <a class="border-line" href="mailto:<?= $schoolInfo['email'] ?>"><?= $schoolInfo['email'] ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-8 col-sm-7 d-none d-sm-block">
                    <div class="it-header-top-right-action d-flex align-items-center justify-content-end">

                        <div class="it-header-top-social-box align-items-center d-none d-md-flex">
                            <span>Follow On:</span>

                            <a href="#">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.7963 7.55921C10.8827 8.14178 10.7832 8.73676 10.5119 9.25952C10.2407 9.78228 9.81148 10.2062 9.28542 10.471C8.75935 10.7358 8.16319 10.8279 7.58173 10.7344C7.00027 10.6408 6.46311 10.3663 6.04667 9.94982C5.63022 9.53338 5.35569 8.99622 5.26213 8.41476C5.16856 7.8333 5.26073 7.23714 5.52551 6.71107C5.79029 6.18501 6.21421 5.75583 6.73697 5.48458C7.25973 5.21333 7.85471 5.11382 8.43728 5.20021C9.03152 5.28833 9.58167 5.56524 10.0065 5.99003C10.4313 6.41482 10.7082 6.96496 10.7963 7.55921Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.8477 4.15039H11.8577" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->

    <!-- header-area-start -->
    <div id="header-sticky" class="it-header-area it-header-ptb p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-1 col-xl-1 col-lg-4 col-md-5 col-6">
                    <div class="it-header-logo">
                        <a href="<?= base_url() ?>"><img class="header-logo" src="<?= base_url('assets/img/logo/apple-touch-icon.png'); ?>" alt=""></a>
                        <!-- <a href="<? //= base_url() 
                                        ?>"><img src="<? //= base_url('assets/img/logo/logo-black.png'); 
                                                        ?>" alt=""></a> -->
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 d-none d-xl-block">
                    <div class="it-header-menu it-header-dropdown">
                        <nav class="it-menu-content">
                            <ul>
                                <li class="p-static">
                                    <a href="<?= base_url() ?>">Home</a>

                                </li>
                                <li class="has-dropdown p-static">
                                    <a href="#">Profil</a>
                                    <div class="it-submenu submenu it-megamenu-wrap">
                                        <div class="row gx-50">
                                            <div class="col-xl-6">
                                                <div class="it-megamenu-item">
                                                    <h4 class="it-megamenu-title">Tentang Sekolah</h4>
                                                    <ul>
                                                        <li><a href="<?= base_url('/profil/tentang-sekolah') ?>">Profil Sekolah</a></li>
                                                        <li><a href="<?= base_url('/profil/pendidik') ?>">Pendidik</a></li>
                                                        <li><a href="<?= base_url('/profil/tenaga-kependidikan') ?>">Tenaga Kependidikan</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="it-megamenu-item">
                                                    <h4 class="it-megamenu-title">Fasilitas</h4>
                                                    <ul>
                                                        <li><a href="<?= base_url('/profil/prasarana') ?>">Prasarana</a></li>
                                                        <li><a href="<?= base_url('/profil/sarana-pembelajaran') ?>">Sarana Pembelajaran</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown">
                                    <a href="courses-v1.html">Kegiatan</a>
                                    <ul class="it-submenu submenu">
                                        <li><a href="<?= base_url('kegiatan/ekstrakurikuler') ?>">Ekstrakurikuler</a></li>
                                        <!-- <li><a href="courses-v4.html">Test Kemampuan Akademik</a></li> -->
                                        <li><a href="<?= base_url('kegiatan/perlombaan') ?>">Perlombaan</a></li>
                                    </ul>
                                    <!-- <div class="it-submenu submenu it-megamenu-wrap">
                                        <div class="row gx-50">
                                            <div class="col-xl-6">
                                                <div class="it-megamenu-item">
                                                    <h4 class="it-megamenu-title">Kegiatan</h4>
                                                </div>
                                            </div>
                                            

                                        </div>
                                    </div> -->
                                </li>
                                <li class="has-dropdown">
                                    <a href="<?= base_url('berita') ?>">Berita</a>
                                    <ul class="it-submenu submenu">
                                        <li><a href="<?= base_url('berita/kategori/kegiatan') ?>">Kegiatan</a></li>
                                        <li><a href="<?= base_url('berita/kategori/pemberitahuan') ?>">Pemberitahuan</a></li>
                                        <li><a href="<?= base_url('berita/kategori/artikel') ?>">Artikel</a></li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a href="contact-me.html">Kontak</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-7 col-6">
                    <div class="it-header-right-action d-flex justify-content-end align-items-center">


                        <a href="<?= base_url('pendaftaran') ?>" class="it-btn-yellow border-radius-100 d-none d-md-flex">
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
                        <div class="it-header-bar d-xl-none">
                            <button class="it-menu-bar">
                                <span>
                                    <i class="fa-light fa-bars-staggered"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area-end -->

</header>