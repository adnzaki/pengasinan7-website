<div class="it-breadcrumb-area team-details-style it-breadcrumb-course-details-style fix z-index-1" data-background="<?= base_url() ?>assets/img/shape/nanik-dark.jpg">
    <img class="it-breadcrumb-shape-1" src="<?= base_url() ?>assets/img/shape/breadcrumb-1-1.png" alt="">
    <img class="it-breadcrumb-shape-3" src="<?= base_url() ?>assets/img/shape/breadcrumb-1-2.png" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="it-breadcrumb-content z-index-1">
                    <div class="it-breadcrumb-list-2">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.6364 8.1364C14.9879 7.78492 14.9879 7.21508 14.6364 6.8636L8.90883 1.13604C8.55736 0.784567 7.98751 0.784567 7.63604 1.13604C7.28457 1.48751 7.28457 2.05736 7.63604 2.40883L12.7272 7.5L7.63604 12.5912C7.28457 12.9426 7.28457 13.5125 7.63604 13.864C7.98751 14.2154 8.55736 14.2154 8.90883 13.864L14.6364 8.1364ZM0 7.5V8.4H14V7.5V6.6H0V7.5Z" fill="white" />
                            </svg>
                        </span>
                        <span>Profil</span>
                        <span class="dvdr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.6364 8.1364C14.9879 7.78492 14.9879 7.21508 14.6364 6.8636L8.90883 1.13604C8.55736 0.784567 7.98751 0.784567 7.63604 1.13604C7.28457 1.48751 7.28457 2.05736 7.63604 2.40883L12.7272 7.5L7.63604 12.5912C7.28457 12.9426 7.28457 13.5125 7.63604 13.864C7.98751 14.2154 8.55736 14.2154 8.90883 13.864L14.6364 8.1364ZM0 7.5V8.4H14V7.5V6.6H0V7.5Z" fill="white" />
                            </svg>
                        </span>
                        <span>Sambutan</span>
                    </div>
                    <div class="it-breadcrumb-list-wrap">
                        <span class="it-breadcrumb-subtitle" style="background-color: #318DB0;"><?= $headmaster['position'] ?></span>
                    </div>
                    <div class="it-breadcrumb-title-box mb-20">
                        <h3 class="it-section-title text-white"><?= $headmaster['name'] ?></h3>
                    </div>
                    <div class="it-breadcrumb-author-wrapper d-flex align-items-center">
                        <div class="it-breadcrumb-author-info border-style mb-20" style="padding-right: 45px;">
                            <span>Mulai Bertugas</span>
                            <span>2023</span>
                        </div>
                        <div class="it-breadcrumb-author-info mb-20 ml-20">
                            <span>Pendidikan</span>
                            <span><?= $headmaster['education']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="it-team-details-area it-course-details-style-2 pb-110">
    <div class="container">
        <div class="row gx-30">
            <div class="col-12 d-block d-lg-none">
                <div class="it-course-sidebar-wrap z-index-2">
                    <div class="it-course-sidebar">
                        <div class="it-course-sidebar-thumb">
                            <img class="w-100" src="<?= base_url('assets/img/about/employee/' . $headmaster['photo']); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="it-team-details-left mt-55">
                    <h4 class="it-details-title">Selayang Pandang</h4>
                    <div class="postbox-dsc">
                        <p class="mb-15 testimonial-text"><?= $headmaster['description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="it-course-sidebar-wrap z-index-2">
                    <div class="it-course-sidebar">
                        <div class="it-course-sidebar-thumb">
                            <img class="w-100" src="<?= base_url('assets/img/about/employee/' . $headmaster['photo']); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>