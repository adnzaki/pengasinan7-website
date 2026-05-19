<section class="it-choose-2-area z-index-1 pb-95 mb-100">
    <img class="it-choose-2-shape-1" src="<?= base_url() ?>assets/img/shape/choose-5-1.png" alt="">
    <div class="container">

        <div class="row gx-35">
            <div class="col-12">
                <div class="it-choose-2-section-title-box text-center mb-60">
                    <span class="it-section-subtitle style-2">Galeri</span>
                    
                </div>
            </div>
            <?php foreach ($classRooms as $classRoom) : ?>
                <div class="col-lg-3 col-md-6 wow itfadeUp mb-30" data-wow-duration=".9s"
                    data-wow-delay=".3s">
                    <a href="<?= base_url('assets/img/about/facilities/' . $classRoom['image']) ?>" data-fancybox="gallery" data-caption="<?= $classRoom['name'] ?>">
                        <img class="mb-5 fancy-thumbnail-full" src="<?= base_url('assets/img/about/facilities/' . $classRoom['image']) ?>" alt="<?= $classRoom['name'] ?>" />
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>