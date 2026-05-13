<div class="it-team-area pt-130 pb-130">
    <div class="container">
        <div class="row gx-35">
            <?php foreach ($employees as $employee) : ?>
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow itfadeUp" data-wow-duration=".9s"
                data-wow-delay=".3s">
                <div class="it-team-item text-center p-relative mb-35">
                    <div class="it-team-thumb p-relative border-radius-20">
                        <img class="w-100" src="<?= base_url('assets/img/about/employee/' . $employee['photo']); ?>" alt="">
                        
                    </div>
                    <div class="it-team-content">
                        <h4 class="it-team-title" style="font-size: <?= $employee['photo'] === 'insan.webp' ? '14' : '15' ?>px;">
                            <a class="border-line" href="team-details.html"><?= $employee['name']; ?></a>
                        </h4>
                        <span><?= $employee['position']; ?></span>
                        <div class="it-course-meta d-flex justify-content-between">
                            
                            <span style="width: 95%; text-align: center; border-right: 0 !important">
                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4995 13.4374V14.9999H10.2495V13.4374C10.2495 12.5762 9.54828 11.8749 8.68703 11.8749H4.31203C3.45078 11.8749 2.74953 12.5762 2.74953 13.4374V14.9999H1.49953V13.4374C1.49953 11.8868 2.76141 10.6249 4.31203 10.6249H8.68703C10.2377 10.6249 11.4995 11.8868 11.4995 13.4374ZM12.7495 2.81244V7.49994H11.4995V3.41932L10.2495 4.04432V5.62494C10.2495 7.69307 8.56766 9.37494 6.49953 9.37494C4.43141 9.37494 2.74953 7.69307 2.74953 5.62494V4.04432L0.285156 2.81244L5.42203 0.244941C6.07641 -0.0806835 6.92141 -0.0813085 7.57578 0.244941L12.7495 2.81244ZM3.08078 2.81244L5.98141 4.26244C6.28141 4.41244 6.71703 4.41244 7.01766 4.26244L9.91828 2.81244L7.01766 1.36244C6.71828 1.21307 6.28078 1.21244 5.98078 1.36244L3.08078 2.81244ZM8.99953 4.66932L7.57703 5.38057C7.25016 5.54432 6.87453 5.62619 6.49953 5.62619C6.12453 5.62619 5.74953 5.54432 5.42203 5.38057L3.99953 4.66932V5.62494C3.99953 7.00369 5.12078 8.12494 6.49953 8.12494C7.87828 8.12494 8.99953 7.00369 8.99953 5.62494V4.66932Z" fill="#6C757D" />
                                </svg>
                                <?= $employee['education']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>