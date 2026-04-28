<div class="it-blog-details-area pt-130 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12">
                <div class="postbox-details-wrapper it-career-details-area">
                    <div class="postbox-thumb-box mb-60">
                        <div class="postbox-main-thumb border-radius-20 mb-35">
                            <img class="w-100" src="<?= base_url() ?>assets/img/about/peresmian.jpeg" alt="">
                        </div>
                        <div class="postbox-content-box">
                            <h4 class="it-section-title">Perjalanan Panjang Menuju Pencapaian Gemilang</h4>
                            <div class="postbox-dsc">
                                <p class="mb-15">SDN Pengasinan VII memiliki perjalanan panjang sejak awal berdirinya. Sekolah ini pertama kali didirikan pada tahun 1990 dengan nama SD Negeri Rawalumbu Utara. Setahun kemudian, tepatnya pada 15 Juli 1991, sekolah mulai menerima siswa angkatan pertama. Gedung sekolah kemudian diresmikan pada 19 Desember 1991 oleh Drs. H. Suyaman, yang saat itu menjabat sebagai Pembantu Gubernur Jawa Barat Wilayah IV Purwakarta.</p>
                            </div>
                            <h4 class="it-details-title-sm">Perubahan Nama</h4>
                            <p class="mb-15">Dalam perjalanannya, sekolah ini mengalami beberapa kali perubahan nama sebagai berikut:</p>
                            <div class="postbox-list style-2 mb-55">
                                <ul>
                                    <li>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span> SDN Bumi Bekasi Baru I</span>
                                    </li>
                                    <li>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span> SDN Pengasinan VII (nama yang digunakan hingga sekarang)</span>
                                </ul>
                            </div>

                            <h4 class="it-details-title-sm">Merger</h4>
                            <p class="mb-15">Untuk meningkatkan efisiensi dan layanan pendidikan, SDN Pengasinan VII masuk dalam program Pemerintah Kota Bekasi melalui Dinas Pendidikan sehingga mengalami penggabungan dengan sekolah lain:</p>
                            <div class="postbox-list style-2 mb-55">
                                <ul>
                                    <li>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span> SDN Pengasinan X pada tahun 2016</span>
                                    </li>
                                    <li>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" fill="#03594E" />
                                            <path d="M11.7728 6.53906L7.41385 10.898L5.23438 8.71855" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span> SDN Sepanjang Jaya VIII pada tahun 2020</span>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        <h4 class="it-details-title-sm">Kepemimpinan Kepala Sekolah</h4>
                        <p class="mb-15">Estafet kepemimpinan di SDN Pengasinan VII memiliki peran besar dalam membentuk karakter, budaya, dan kualitas pendidikan di sekolah ini. Setiap kepala sekolah membawa visi dan inovasi yang berkontribusi pada kemajuan sekolah, baik dalam aspek akademik maupun non-akademik. </p>
                        <p class="mb-15">Berikut adalah daftar kepala sekolah yang pernah menjabat di SDN Pengasinan VII:</p>
                        <div class="postbox-list style-2 mb-55">
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
    </div>
</div>
</div>