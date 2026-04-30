<section class="it-choose-2-area z-index-1 pt-130 pb-95">
    <img class="it-choose-2-shape-1" src="assets/img/shape/choose-5-1.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="it-choose-2-section-title-box text-center mb-60">
                    <span class="it-section-subtitle style-2">Sekilas Tentang SDN Pengasinan VII</span>
                    <h4 class="it-section-title">Perjalanan Panjang Menuju <br>Pencapaian Gemilang</h4>
                </div>
            </div>
        </div>
        <div class="row gx-35">
            <div class="col-lg-5 wow itfadeUp" data-wow-duration=".9s"
                data-wow-delay=".3s">
                <div class="it-choose-2-item mb-35">

                    <div class="it-choose-2-content">
                        <h6 class="it-choose-2-title">Informasi Sekolah</h6>
                        <p>Ringkasan informasi tentang SDN Pengasinan VII</p>
                        <div class="row gx-15 mt-5">
                            <?php foreach ($summary as $item) : ?>
                                <div class="col-6">
                                    <div class="card mt-5" style="background-color: var(--p7-light-grey);">
                                        <div class="card-body">
                                            <!-- <h5 class="card-title">Tahun Berdiri</h5> -->
                                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $item['value'] ?></h6>
                                            <p class="card-text"><?= $item['title'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>

                <div class="it-choose-2-item mb-35">

                    <div class="it-choose-2-content">
                        <h6 class="it-choose-2-title">Visi dan Misi</h6>
                        <p class="mb-15">Visi dan Misi SDN Pengasinan VII menjadi landasan utama dalam membentuk karakter, budaya, dan kualitas pendidikan di sekolah.
                        <div class="card mt-10" style="background-color: var(--p7-light-grey);">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Visi</h6>
                                <p class="card-text fst-italic fs-5">"Mewujudkan Insan Berprestasi, Berakhlak Mulia dan Berkarakter"</p>
                            </div>
                        </div>
                        <div class="card mt-10" style="background-color: var(--p7-light-grey);">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Misi</h6>
                                <div class="postbox-list style-2 mb-55">
                                    <ul>
                                        <?php foreach ($missions as $mission) : ?>
                                            <li>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                                    <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                                    <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <span class="mission"> <?= $mission ?></span>
                                            </li>
                                        <?php endforeach; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-7 wow itfadeUp" data-wow-duration=".9s"
                data-wow-delay=".5s">
                <div class="it-choose-2-item mb-35">

                    <div class="it-choose-2-content">
                        <div class="postbox-main-thumb border-radius-20 mb-35">
                            <img class="w-100" src="<?= base_url() ?>assets/img/about/peresmian.jpeg" alt="">
                        </div>
                        <h4 class="it-details-title-sm">Sejarah Singkat</h4>
                        <p class="mb-15">SDN Pengasinan VII memiliki perjalanan panjang sejak awal berdirinya. Sekolah ini pertama kali didirikan pada tahun 1990 dengan nama SD Negeri Rawalumbu Utara. Setahun kemudian, tepatnya pada 15 Juli 1991, sekolah mulai menerima siswa angkatan pertama. Gedung sekolah kemudian diresmikan pada 19 Desember 1991 oleh Drs. H. Suyaman, yang saat itu menjabat sebagai Pembantu Gubernur Jawa Barat Wilayah IV Purwakarta.</p>
                        <h4 class="it-details-title-sm mt-10">Perubahan Nama</h4>
                        <p class="mb-15">Dalam perjalanannya, sekolah ini mengalami beberapa kali perubahan nama sebagai berikut:</p>
                        <div class="postbox-list style-2 mb-30 mt-5">
                            <ul>
                                <?php foreach ($schoolNames as $schoolName) : ?>
                                    <li>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="history"> <?= $schoolName ?></span>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                        <h4 class="it-details-title-sm">Merger</h4>
                        <p class="mb-15">Untuk meningkatkan efisiensi dan layanan pendidikan, SDN Pengasinan VII masuk dalam program Pemerintah Kota Bekasi melalui Dinas Pendidikan sehingga mengalami penggabungan dengan sekolah lain:</p>
                        <div class="postbox-list style-2 mt-20 mb-30">
                            <ul>
                                <li>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                        <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                        <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="history"> SDN Pengasinan X pada tahun 2016</span>
                                </li>
                                <li>
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                        <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                        <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="history"> SDN Sepanjang Jaya VIII pada tahun 2020</span>
                                </li>
                            </ul>
                        </div>

                        <h4 class="it-details-title-sm">Kepemimpinan Kepala Sekolah</h4>
                        <p class="mb-15">Estafet kepemimpinan di SDN Pengasinan VII memiliki peran besar dalam membentuk karakter, budaya, dan kualitas pendidikan di sekolah ini. Setiap kepala sekolah membawa visi dan inovasi yang berkontribusi pada kemajuan sekolah, baik dalam aspek akademik maupun non-akademik. </p>
                        <p class="mb-15">Berikut adalah daftar kepala sekolah yang pernah menjabat di SDN Pengasinan VII:</p>
                        <div class="postbox-list style-2 mt-10">
                            <ul>
                                <?php foreach ($headmasters as $headmaster) : ?>
                                    <li>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span> <?= $headmaster['name'] ?> (<?= $headmaster['period'] ?>)</span>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?= view('profile/about/organization') ?>
    </div>
</section>