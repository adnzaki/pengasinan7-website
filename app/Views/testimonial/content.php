<!-- faq-area-start -->
<div class="it-faq-area it-faq-inner-style it-faq-style-2 pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <div class="it-choose-2-section-title-box text-center mb-60">
                        <h4 class="it-section-title">Pernyataan Jujur <br>Dari Mereka Yang Telah Lulus</h4>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <div class="row gx-35">
                            <div class="col-12 wow itfadeLeft" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <div class="it-custom-accordion">
                                    <div class="accordion" id="testimonialAccordion">
                                        <?php $index = 0; ?>
                                        <?php foreach ($testimonials as $testimonial): ?>
                                            <div class="accordion-items mb-30">
                                                <h4 class="accordion-header" id="heading<?= $index ?>">
                                                    <button class="accordion-buttons <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                                        aria-controls="collapse<?= $index ?>">
                                                        <?= $testimonial['name'] ?>
                                                    </button>
                                                </h4>
                                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#testimonialAccordion">
                                                    <div class="accordion-body">
                                                        <div class="testimonial-shape">
                                                            <img src="<?= base_url('assets/img/testimonial/' . $testimonial['image']) ?>" alt="Testimonial Photo" class="mb-3">
                                                        </div>
                                                        <div class="testimonial-text">
                                                            <p class="mb-0"><?= $testimonial['description'] ?></p>
                                                            <br />

                                                            <span><i><strong><?= $testimonial['currentSchool'] ?></strong></i></span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        <?php $index++;
                                        endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- faq-area-end -->