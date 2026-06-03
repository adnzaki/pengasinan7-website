<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?? 'SDN Pengasinan VII'; ?></title>
    <meta name="description" content="SDN Pengasinan VII adalah sekolah dasar negeri yang terletak di Bekasi, Indonesia. Kami berkomitmen untuk memberikan pendidikan berkualitas kepada siswa kami guna menyiapkan generasi yang berprestasi, berakhlak mulia, dan berkarakter.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="sdn pengasinan 7, pengasinan vii, sekolah dasar, sd, sekolah dasar negeri, sekolah dasar pengasinan vii, sekolah dasar pengasinan 7, sd pengasinan vii, sd pengasinan 7, sekolah dasar di bekasi, sekolah dasar di kota bekasi, sekolah dasar terbaik di bekasi, sekolah dasar unggulan di bekasi">
    <meta property="og:title" content="<?= $og_meta['title'] ?>">
    <meta property="og:image" content="<?= $og_meta['image'] ?>">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/logo/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/logo/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/logo/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/logo/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/img/logo/site.webmanifest') ?>">

    <!-- CSS Here -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-pro.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom-animation.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css" />

    <!-- Theme / Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/spacing.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/site.css'); ?>">

</head>

<body id="body" class="it-magic-cursor">
    <?php if (session()->getFlashdata('success')): ?>
        <?= view('layout/toast', ['message' => session()->getFlashdata('success'), 'color' => 'success']) ?>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <?= view('layout/toast', ['message' => session()->getFlashdata('error'), 'color' => 'danger']) ?>
    <?php endif; ?>
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->



    <!-- it-offcanvus-area-start -->
    <?= view('layout/mobile-menu') ?>
    <!-- it-offcanvus-area-end -->

    <?= view('layout/header') ?>

    <main>
        <?= $contents ?>
    </main>



    <?= view('layout/footer') ?>

    <!-- JS  Libraries -->
    <?= view('layout/scripts') ?>


</body>

</html>