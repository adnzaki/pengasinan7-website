<div class="it-blog-details-area pt-130 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12">
                <div class="postbox-details-wrapper it-career-details-area">
                    <div class="postbox-thumb-box mb-60">
                        <!-- <div class="postbox-main-thumb border-radius-20 mb-35">
                            <img class="w-100" src="<? //= base_url() 
                                                    ?>assets/img/about/peresmian.jpeg" alt="">
                        </div> -->
                        <div class="postbox-content-box">

                            <h4 class="it-section-title">Pembelajaran Menyenangkan di Ruang Kelas yang Nyaman</h4>
                            <div class="postbox-dsc">
                                <p class="mb-15">SDN Pengasinan VII memiliki 13 ruang kelas belajar yang nyaman dan berkualitas. Setiap ruang kelas dilengkapi dengan peralatan dan fasilitas yang memadai untuk meningkatkan kualitas pendidikan di sekolah ini.</p>
                                <p>Selain penyediaan fasilitas dari sekolah, siswa-siswa juga diajak untuk berpartisipasi dalam menjaga kebersihan serta kenyamanan di ruang kelas melalui kegiatan piket rutin setiap hari yang dipandu oleh bapak/ibu guru.</p>
                                <p>Dengan ruang kelas yang nyaman dan fasilitas yang memadai, SDN Pengasinan VII berkomitmen untuk memberikan pengalaman belajar yang menyenangkan bagi seluruh siswa.</p>
                                <p>Berikut adalah beberapa potret ruang kelas SDN Pengasinan VII:</p>
                            </div>
                            <?php foreach ($classRooms as $classRoom) : ?>
                                <a href="<?= base_url('assets/img/about/rooms/' . $classRoom['image']) ?>" data-fancybox="gallery" data-caption="<?= $classRoom['name'] ?>">
                                    <img class="mb-5 fancy-thumbnail" src="<?= base_url('assets/img/about/rooms/' . $classRoom['image']) ?>" alt="<?= $classRoom['name'] ?>" />
                                </a>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>