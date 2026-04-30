<div class="it-blog-details-area pt-130 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12">
                <div class="postbox-details-wrapper it-career-details-area">
                    <div class="postbox-thumb-box mb-60">

                        <div class="postbox-content-box">
                            <h4 class="it-section-title">Tentang Visi dan Misi Sekolah</h4>
                            <div class="postbox-dsc">
                                <p class="mb-15">Visi dan Misi SDN Pengasinan VII menjadi landasan utama dalam membentuk karakter, budaya, dan kualitas pendidikan di sekolah. Setiap kata yang disusun dalam visi dan misi ini memiliki makna mendalam yang menjadi panduan dalam membangun SDN Pengasinan VII menjadi sekolah yang berdaya dan berkarakter.</p>
                                <p>Berdasarkan hasil musyawarah sekolah kepala sekolah, dewan guru, staff dan komite, maka disusunkanlah visi dan misi sekolah sebagai berikut:</p>

                            </div>
                            <h4 class="it-details-title-sm">Visi</h4>
                            <p class="fst-italic fs-4"> Mewujudkan Insan Berprestasi, Berakhlak Mulia dan Berkarakter</p>


                            <h4 class="it-details-title-sm">Misi</h4>
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
    </div>
</div>
</div>