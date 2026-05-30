<!-- course-area-start -->
<section class="it-course-area it-course-style-3 z-index-1 gray-bg pt-130 pb-130">
    <img class="it-course-shape-10" data-parallax='{"y": -200, "smoothness": 30}' src="<?= base_url('assets/img/shape/course-3-2.png'); ?>" alt="">
    <img class="it-course-shape-12" src="<?= base_url('assets/img/shape/course-3-1.png'); ?>" alt="">
    <img class="it-course-shape-13" src="<?= base_url('assets/img/shape/course-3-3.png'); ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="it-course-section-title-box text-center mb-65">
                    <span class="it-section-subtitle">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 1.66667H16.6667V0.833333C16.6667 0.61232 16.5789 0.400358 16.4226 0.244078C16.2663 0.0877975 16.0543 0 15.8333 0C13.3333 0 10.5708 0.133334 9.16667 1.46667C7.7625 0.133334 5 0 2.5 0C2.27899 0 2.06702 0.0877975 1.91074 0.244078C1.75446 0.400358 1.66667 0.61232 1.66667 0.833333V1.66667H0.833333C0.61232 1.66667 0.400358 1.75446 0.244078 1.91074C0.0877973 2.06702 0 2.27899 0 2.5V12.5C0 12.721 0.0877973 12.933 0.244078 13.0893C0.400358 13.2455 0.61232 13.3333 0.833333 13.3333H17.5C17.721 13.3333 17.933 13.2455 18.0893 13.0893C18.2455 12.933 18.3333 12.721 18.3333 12.5V2.5C18.3333 2.27899 18.2455 2.06702 18.0893 1.91074C17.933 1.75446 17.721 1.66667 17.5 1.66667ZM15.8333 0.833333V10.8333C13.5542 10.8333 11.0708 10.9417 9.58333 11.9583V2.22917C10.675 0.954167 13.375 0.833333 15.8333 0.833333ZM8.75 2.22917V11.9583C7.2625 10.9417 4.77917 10.8333 2.5 10.8333V0.833333C4.95833 0.833333 7.65833 0.954167 8.75 2.22917ZM0.833333 2.5H1.66667V10.8333C1.66667 11.0543 1.75446 11.2663 1.91074 11.4226C2.06702 11.5789 2.27899 11.6667 2.5 11.6667C4.53333 11.6667 6.72917 11.75 8.04583 12.5H0.833333V2.5ZM17.5 12.5H10.2875C11.6042 11.75 13.8 11.6667 15.8333 11.6667C16.0543 11.6667 16.2663 11.5789 16.4226 11.4226C16.5789 11.2663 16.6667 11.0543 16.6667 10.8333V2.5H17.5V12.5Z" fill="#03594E" />
                        </svg>
                        Ekstrakurikuler
                    </span>
                    <h4 class="it-section-title">Kegiatan Ekstrakurikuler <br>Untuk Menggali Potensi Siswa</h4>

                </div>
            </div>
        </div>
        <div class="it-course-tab-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row gx-35">
                        <?php foreach ($ekskul as $item) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="it-course-item mb-35">
                                    <div class="it-course-thumb z-index-1 border-radius-20">
                                        <a href="#"><img class="w-100" src="<?= base_url('assets/img/ekskul/' . $item['image']); ?>" alt="<?= $item['image'] ?? 'course-1-1.jpg'; ?>" alt=""></a>
                                        <span class="course-category"><?= ucfirst($item['category']) ?></span>
                                        <button class="wishlist-btn">
                                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.6811 4.50134C13.3564 2.47755 11.9261 0.859544 10.0381 0.378868C9.06325 0.130895 8.04117 0.00363597 6.99804 0C5.95853 0.00290878 4.93718 0.130168 3.96232 0.378868C2.07436 0.859544 0.644035 2.47755 0.319325 4.50134C-0.155754 7.46102 -0.101273 10.5952 0.486402 14.0829C0.638224 14.9875 1.28038 15.7103 2.1717 15.9234C3.27005 16.1859 4.09235 15.695 4.53692 15.1395C4.99675 14.565 6.75178 12.3267 6.75178 12.3267C6.83459 12.2212 6.94355 12.2052 7.00021 12.2052C7.05688 12.2052 7.16584 12.2205 7.24865 12.3267C7.24865 12.3267 9.00441 14.5657 9.46351 15.1395C10.0359 15.8536 10.9418 16.1546 11.8287 15.9234C12.7157 15.6929 13.3615 14.9875 13.5133 14.0836C14.101 10.596 14.1562 7.46175 13.6804 4.50206L13.6811 4.50134ZM12.0808 13.8414C11.9973 14.3396 11.5868 14.4835 11.4626 14.5155C11.3399 14.5483 10.9113 14.6224 10.5967 14.229C10.1398 13.6589 9.65601 13.0415 9.16785 12.4176L8.38913 11.425C8.05134 10.9959 7.54503 10.7501 6.99949 10.7501C6.45395 10.7501 5.94836 10.9959 5.60985 11.425L4.83112 12.4176C4.34297 13.0408 3.85917 13.6589 3.40225 14.229C3.08844 14.6224 2.66058 14.5483 2.53636 14.5155C2.41287 14.4835 2.00244 14.3396 1.91818 13.8407C1.35738 10.5123 1.3029 7.53228 1.75255 4.73186C1.98573 3.2811 2.99328 2.12559 4.31972 1.78817C5.17908 1.56929 6.08129 1.4573 6.99731 1.45439C7.91768 1.4573 8.8199 1.56929 9.67925 1.78817C11.0057 2.12559 12.0132 3.2811 12.2464 4.73186C12.6961 7.53228 12.6416 10.5123 12.0808 13.8407V13.8414Z" fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="it-course-content p-relative">

                                        <h5 class="it-course-title mb-20"><a class="border-line" href="#"><?= $item['name']; ?></a></h5>
                                        <div class="it-course-rating mb-10">
                                            <div>

                                                <span><?= $item['description']; ?></span>
                                            </div>
                                        </div>
                                        <div class="it-course-meta d-flex justify-content-between">
                                            <span>
                                                <i class="fa-regular fa-chalkboard-user"></i>
                                                <?= $item['teacher']; ?> Pembimbing
                                            </span>
                                            <span>
                                                <i class="fa-sharp fa-solid fa-graduation-cap"></i>
                                                <?= $item['students']; ?> Siswa
                                            </span>
                                        </div>
                                        <!-- <div class="it-course-btn">
                                        <a href="#" class="it-btn-yellow w-100 border-radius-100">
                                            <span>
                                                <span class="text-1">Pelajari Lebih Lanjut</span>
                                                <span class="text-2">Pelajari Lebih Lanjut</span>
                                            </span>
                                            <i>
                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z" fill="currentcolor" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!-- course-area-end -->