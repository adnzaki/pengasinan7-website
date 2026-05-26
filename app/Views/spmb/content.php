<section class="it-event-details-area  it-course-details-style-3 z-index-1 pt-80 pb-95">
    <div class="container">
        <!-- <div class="row">
            <div class="col-12">
                <div class="it-event-details-thumb border-radius-10">
                    <img src="<? //= $titleImage 
                                ?>" alt="">
                </div>
            </div>
        </div> -->
        <div class="row gx-35">
            <div class="col-lg-8">
                <div class="it-course-details-left">
                    <div class="course-details-border">
                        <h4 class="it-details-title">Penjelasan Singkat</h4>
                        <div class="postbox-dsc">
                            <p class="mb-10">Sistem Penerimaan Murid Baru (SPMB) Kota Bekasi Tahun 2026 merupakan sistem pendaftaran online yang diselenggarakan oleh Pemerintah Kota Bekasi melalui Dinas Pendidikan dalam rangka menjaring calon peserta didik baru jenjang SD dan SMP secara transparan, objektif, dan akuntabel.</p>
                        </div>
                    </div>
                    <div class="course-details-border">
                        <h4 class="it-details-title">Persyaratan Umum</h4>
                        <div class="it-details-list-box mt-5">
                            <div class="it-details-list style-1">
                                <ul>
                                    <?php foreach ($terms['umum'] as $term): ?>
                                        <li>
                                            <span>
                                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.71195 16C5.58634 16 5.48163 15.9144 5.43976 15.8073C5.41885 15.7644 3.618 11.0101 0.833023 9.21113C0.288584 8.86848 -0.130124 8.50439 0.0373593 7.69056C0.204843 6.89818 0.728376 6.44844 1.67062 6.23426C3.34575 5.87017 5.14655 8.52577 5.81666 9.61804C8.16184 6.12724 12.8523 0.644689 19.6786 0.00221658C20.0079 -0.037266 20.1297 0.461976 19.8252 0.601865C19.7205 0.644689 9.96258 5.20638 6.00505 15.8287C5.94227 15.9357 5.83756 16 5.71195 16Z" fill="currentcolor" />
                                                </svg>
                                                <?= $term ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="course-details-border">
                        <h4 class="it-details-title">Persyaratan Khusus</h4>
                        <div class="it-details-list-box mt-5">
                            <div class="it-details-list style-1">
                                <ul>
                                    <?php foreach ($terms['khusus'] as $term): ?>
                                        <li>
                                            <span>
                                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.71195 16C5.58634 16 5.48163 15.9144 5.43976 15.8073C5.41885 15.7644 3.618 11.0101 0.833023 9.21113C0.288584 8.86848 -0.130124 8.50439 0.0373593 7.69056C0.204843 6.89818 0.728376 6.44844 1.67062 6.23426C3.34575 5.87017 5.14655 8.52577 5.81666 9.61804C8.16184 6.12724 12.8523 0.644689 19.6786 0.00221658C20.0079 -0.037266 20.1297 0.461976 19.8252 0.601865C19.7205 0.644689 9.96258 5.20638 6.00505 15.8287C5.94227 15.9357 5.83756 16 5.71195 16Z" fill="currentcolor" />
                                                </svg>
                                                <?= $term ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="course-details-border">
                        <h4 class="it-details-title">Selengkapnya</h4>
                        <div class="postbox-dsc">
                            <p class="mb-10">Informasi lanjut mengenai SPMB Tahun Ajaran 2026 dapat ditemukan di website SPMB Kota Bekasi berikut ini:</p>

                            <?= view('spmb/register-button') ?>
                        </div>
                    </div>
                </div>
            </div>
            <?= view('spmb/timeline') ?>
        </div>
    </div>
</section>