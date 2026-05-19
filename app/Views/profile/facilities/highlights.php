<section class="it-choose-2-area z-index-1 pt-50 pb-95">
    <img class="it-choose-2-shape-1" src="assets/img/shape/choose-5-1.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="it-choose-2-section-title-box text-center mb-60">
                    <!-- <span class="it-section-subtitle style-2">Why Choose Us</span> -->
                    <!-- <h4 class="it-section-title">Fasilitas Lengkap untuk <br />Mendukung Belajar dan Berkembang </h4> -->
                </div>
            </div>
        </div>
        <div class="row gx-35">
            <?php foreach ($highlights as $highlight): ?>
                <div class="col-lg-4 col-md-6 wow itfadeUp" data-wow-duration=".9s"
                    data-wow-delay=".3s">
                    <div class="it-choose-2-item text-center mb-35">
                        <div class="it-choose-2-icon">
                            <i class="fa-light fa-<?= $highlight['icon'] ?>" style="font-size: 80px; color: var(--it-theme-1);"></i>
                        </div>
                        <div class=" it-choose-2-content">
                            <h6 class="it-choose-2-title"><?= $highlight['name'] ?></h6>
                            <p><?= $highlight['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>