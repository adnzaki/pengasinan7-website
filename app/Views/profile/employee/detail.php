<div class="it-breadcrumb-area team-details-style it-breadcrumb-course-details-style fix z-index-1" data-background="<?= base_url() ?>assets/img/shape/breadcrumb-details-bg.png">
    <img class="it-breadcrumb-shape-1" src="<?= base_url() ?>assets/img/shape/breadcrumb-1-1.png" alt="">
    <img class="it-breadcrumb-shape-3" src="<?= base_url() ?>assets/img/shape/breadcrumb-1-2.png" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="it-breadcrumb-content z-index-1">
                    <div class="it-breadcrumb-list-2">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.6364 8.1364C14.9879 7.78492 14.9879 7.21508 14.6364 6.8636L8.90883 1.13604C8.55736 0.784567 7.98751 0.784567 7.63604 1.13604C7.28457 1.48751 7.28457 2.05736 7.63604 2.40883L12.7272 7.5L7.63604 12.5912C7.28457 12.9426 7.28457 13.5125 7.63604 13.864C7.98751 14.2154 8.55736 14.2154 8.90883 13.864L14.6364 8.1364ZM0 7.5V8.4H14V7.5V6.6H0V7.5Z" fill="white" />
                            </svg>
                        </span>
                        <span>Profil</span>
                        <span class="dvdr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.6364 8.1364C14.9879 7.78492 14.9879 7.21508 14.6364 6.8636L8.90883 1.13604C8.55736 0.784567 7.98751 0.784567 7.63604 1.13604C7.28457 1.48751 7.28457 2.05736 7.63604 2.40883L12.7272 7.5L7.63604 12.5912C7.28457 12.9426 7.28457 13.5125 7.63604 13.864C7.98751 14.2154 8.55736 14.2154 8.90883 13.864L14.6364 8.1364ZM0 7.5V8.4H14V7.5V6.6H0V7.5Z" fill="white" />
                            </svg>
                        </span>
                        <span><?= $employee['type'] === 'teacher' ? 'Pendidik' : 'Tenaga Kependidikan'; ?></span>
                    </div>
                    <div class="it-breadcrumb-list-wrap">
                        <span class="it-breadcrumb-subtitle"><?= $employee['position'] ?></span>
                    </div>
                    <div class="it-breadcrumb-title-box mb-20">
                        <h3 class="it-section-title text-white"><?= $employee['name'] ?></h3>
                    </div>
                    <div class="it-breadcrumb-author-wrapper d-flex align-items-center">
                        <div class="it-breadcrumb-author-info border-style mb-20">
                            <span>Pendidikan</span>
                            <span><?= $employee['education']; ?></span>
                        </div>
                        <div class="it-breadcrumb-author-info mb-20">
                            <span>Tahun Lulus</span>
                            <span><?= $employee['year_graduated']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="it-team-details-area it-course-details-style-2 pb-110">
    <div class="container">
        <div class="row gx-30">
            <div class="col-lg-8">
                <div class="it-team-details-left mt-55">
                    <h4 class="it-details-title">Tentang Saya</h4>
                    <div class="postbox-dsc">
                        <p class="mb-15"><?= $employee['description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="it-course-sidebar-wrap z-index-2">
                    <div class="it-course-sidebar">
                        <div class="it-course-sidebar-thumb">
                            <img class="w-100" src="<?= base_url('assets/img/about/employee/' . $employee['photo']); ?>" alt="">
                        </div>
                        <!-- <div class="social-section">
                            <div class="postbox-social text-center">
                                <a href="#">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.52583 13.4713C6.06167 13.0071 5.71333 12.4654 5.45833 11.8871L6.76667 10.5788C6.9125 11.2129 7.22333 11.8121 7.70417 12.2929C8.37333 12.9621 9.2625 13.3304 10.2083 13.3304C11.1542 13.3304 12.0442 12.9621 12.7125 12.2929L17.2958 7.70958C17.965 7.04042 18.3333 6.15125 18.3333 5.20542C18.3333 4.25958 17.965 3.36958 17.2958 2.70125C15.915 1.32042 13.6692 1.32042 12.2875 2.70125L11.45 3.53958C10.9133 3.40708 10.3592 3.33125 9.79167 3.33125C9.61833 3.33125 9.4475 3.34375 9.27667 3.35625L11.1092 1.52375C13.14 -0.507917 16.4442 -0.507917 18.475 1.52375C20.5058 3.55458 20.5058 6.85875 18.475 8.88958L13.8917 13.4729C12.9083 14.4571 11.6 14.9988 10.2092 14.9988C8.81833 14.9988 7.51 14.4571 6.52667 13.4729L6.52583 13.4713ZM0 14.7888C0 16.1796 0.541667 17.4879 1.52583 18.4713C2.50917 19.4554 3.81667 19.9971 5.20833 19.9971C6.6 19.9971 7.9075 19.4554 8.89083 18.4713L10.7242 16.6379C10.5533 16.6504 10.3817 16.6629 10.2092 16.6629C9.64167 16.6629 9.0875 16.5871 8.55083 16.4546L7.7125 17.2929C7.04333 17.9621 6.15417 18.3304 5.20833 18.3304C4.2625 18.3304 3.37333 17.9621 2.70417 17.2929C2.035 16.6238 1.66667 15.7346 1.66667 14.7888C1.66667 13.8429 2.035 12.9529 2.70417 12.2846L7.2875 7.70125C7.95667 7.03208 8.84583 6.66375 9.79167 6.66375C10.7375 6.66375 11.6267 7.03208 12.295 7.70042C12.7758 8.18208 13.0867 8.78125 13.2325 9.41542L14.5408 8.10708C14.2858 7.52875 13.9375 6.98708 13.4733 6.52292C12.49 5.53875 11.1817 4.99708 9.79083 4.99708C8.4 4.99708 7.09167 5.53875 6.10833 6.52292L1.52583 11.1063C0.541667 12.0896 0 13.3979 0 14.7888Z" fill="currentcolor" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.82727 6.83333C1.14284 6.83333 1 6.96763 1 7.61111V8.77778C1 9.42126 1.14284 9.55556 1.82727 9.55556H3.48182V14.2222C3.48182 14.8657 3.62466 15 4.30909 15H5.96364C6.64807 15 6.79091 14.8657 6.79091 14.2222V9.55556H8.64871C9.1678 9.55556 9.30155 9.4607 9.44416 8.99145L9.7987 7.82478C10.043 7.02095 9.89246 6.83333 9.00326 6.83333H6.79091V4.88889C6.79091 4.45933 7.16129 4.11111 7.61818 4.11111H9.97273C10.6572 4.11111 10.8 3.97681 10.8 3.33333V1.77778C10.8 1.1343 10.6572 1 9.97273 1H7.61818C5.33373 1 3.48182 2.74111 3.48182 4.88889V6.83333H1.82727Z"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.41177 0H0L5.23083 6.87316L0.334618 12.6389H2.59681L6.29998 8.27809L9.58823 12.5988H14L8.6172 5.52593L8.62673 5.53813L13.2614 0.0802914H10.9992L7.55741 4.13336L4.41177 0ZM2.43522 1.20371H3.80866L11.5648 11.395H10.1913L2.43522 1.20371Z"
                                            fill="currentcolor" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.7963 7.55921C10.8827 8.14178 10.7832 8.73676 10.5119 9.25952C10.2407 9.78228 9.81148 10.2062 9.28542 10.471C8.75935 10.7358 8.16319 10.8279 7.58173 10.7344C7.00027 10.6408 6.46311 10.3663 6.04667 9.94982C5.63022 9.53338 5.35569 8.99622 5.26213 8.41476C5.16856 7.8333 5.26073 7.23714 5.52551 6.71107C5.79029 6.18501 6.21421 5.75583 6.73697 5.48458C7.25973 5.21333 7.85471 5.11382 8.43728 5.20021C9.03152 5.28833 9.58167 5.56524 10.0065 5.99003C10.4313 6.41482 10.7082 6.96496 10.7963 7.55921Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.8477 4.15039H11.8577" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.2579 4.73828C11.5141 4.73828 12.7188 5.2373 13.6071 6.12555C14.4954 7.01381 14.9944 8.21854 14.9944 9.47473V15.0006H11.8367V9.47473C11.8367 9.056 11.6704 8.65442 11.3743 8.35834C11.0782 8.06225 10.6767 7.89591 10.2579 7.89591C9.8392 7.89591 9.43762 8.06225 9.14154 8.35834C8.84545 8.65442 8.67911 9.056 8.67911 9.47473V15.0006H5.52148V9.47473C5.52148 8.21854 6.0205 7.01381 6.90876 6.12555C7.79701 5.2373 9.00174 4.73828 10.2579 4.73828Z" fill="currentcolor" />
                                        <path d="M3.15763 5.52734H0V15.0002H3.15763V5.52734Z" fill="currentcolor" />
                                        <path d="M1.57881 3.15763C2.45077 3.15763 3.15763 2.45077 3.15763 1.57881C3.15763 0.706859 2.45077 0 1.57881 0C0.706859 0 0 0.706859 0 1.57881C0 2.45077 0.706859 3.15763 1.57881 3.15763Z" fill="currentcolor" />
                                    </svg>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>