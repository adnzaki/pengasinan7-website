<section class="it-funfact-area z-index-2 theme-bg">
    <div class="container">
        <div class="row">
            <?php foreach ($stats as $stat): ?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="it-funfact-item style-1 d-flex align-items-center">
                        <div class="it-funfact-icon">
                            <i class="<?= $stat['icon'] ?>" style="font-size: 60px;margin-right: 15px;color: #fff;"></i>
                        </div>
                        <div class="it-funfact-content">
                            <h6 class="it-funfact-number">
                                <?= $stat['value'] ?>
                            </h6>
                            <span><?= $stat['title'] ?></span>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>