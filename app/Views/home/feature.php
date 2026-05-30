<section class="it-feature-area">
    <div class="container">
        <div class="it-feature-wrap z-index-2">
            <div class="row gx-0">
                <?php foreach ($features as $feature) : ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="it-feature-item d-flex justify-content-center">
                        <div class="it-feature-icon">
                            <span style="padding-top: 3px;">
                                <i class="<?= $feature['icon'] ?>" style="font-size: 30px; color: var(--it-theme-1);"></i>
                            </span>
                        </div>
                        <div class="it-feature-content">
                            <h5 class="it-feature-title"><?= $feature['title'] ?></h5>
                            <p><?= $feature['description'] ?></p>
                            <a href="<?= $feature['link'] ?>">Selengkapnya
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6364 7.6364C14.9879 7.28492 14.9879 6.71508 14.6364 6.3636L8.90883 0.636039C8.55736 0.284567 7.98751 0.284567 7.63604 0.636039C7.28457 0.987511 7.28457 1.55736 7.63604 1.90883L12.7272 7L7.63604 12.0912C7.28457 12.4426 7.28457 13.0125 7.63604 13.364C7.98751 13.7154 8.55736 13.7154 8.90883 13.364L14.6364 7.6364ZM0 7V7.9H14V7V6.1H0V7Z" fill="currentcolor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>    
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
</section>