<div class="it-blog-details-area blog-sidebar-style pt-30 pb-130">
    <div class="container">
        <div class="row gx-35">
            <div class="col-xl-8 col-lg-8">
                <?= view('single-post/search-box', ['visibility' => 'd-block d-md-none']) ?>
                <div class="postbox-details-wrapper">
                    <?php foreach ($posts as $post): ?>
                        <div class="postbox-thumb-box mb-70">
                            <div class="postbox-main-thumb border-radius-20 mb-35">
                                <a href="<?= $post->url ?>">
                                    <img class="w-100 post-thumbnail" src="<?= $post->media ?>" alt="Gambar <?= $post->title ?>">
                                </a>
                            </div>
                            <div class="postbox-content-box">
                                <div class="it-blog-meta mb-20 d-flex">
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.468788 13.1562H2.81253V14.5625C2.81253 14.8213 3.02241 15.0312 3.28128 15.0312H15.5313C15.7901 15.0312 16 14.8213 16 14.5625V2.375C16 2.11612 15.7901 1.90625 15.5313 1.90625H13.1875V1.4375C13.1875 1.17862 12.9776 0.96875 12.7188 0.96875C12.4599 0.96875 12.25 1.17862 12.25 1.4375V1.90625H9.87502V1.4375C9.87502 1.17862 9.66514 0.96875 9.40627 0.96875C9.1474 0.96875 8.93752 1.17862 8.93752 1.4375V1.90625H6.59378V1.4375C6.59378 1.17862 6.3839 0.96875 6.12503 0.96875C5.86615 0.96875 5.65628 1.17862 5.65628 1.4375V1.90625H3.28128C3.02241 1.90625 2.81253 2.11612 2.81253 2.375V5.18749C2.81253 8.64217 1.37676 11.2999 0.168695 12.3274C0.0170703 12.4537 -0.0391483 12.6615 0.0280078 12.8471C0.0952264 13.0326 0.271414 13.1562 0.468788 13.1562ZM15.0625 14.0937H3.75003V13.1562H12.7188C12.8284 13.1562 12.9346 13.1178 13.0189 13.0476C13.5824 12.5782 14.4552 11.4608 15.0625 10.0296V14.0937ZM3.75003 2.84375H5.65628V3.3125C5.65628 3.57137 5.86615 3.78124 6.12503 3.78124C6.3839 3.78124 6.59378 3.57137 6.59378 3.3125V2.84375H8.93752V3.3125C8.93752 3.57137 9.1474 3.78124 9.40627 3.78124C9.66514 3.78124 9.87502 3.57137 9.87502 3.3125V2.84375H12.25V3.3125C12.25 3.57137 12.4599 3.78124 12.7188 3.78124C12.9776 3.78124 13.1875 3.57137 13.1875 3.3125V2.84375H15.0625V4.71874H3.75003V2.84375ZM3.742 5.65593H15.0542C14.9486 8.62952 13.8073 10.9691 12.535 12.2187H1.535C2.97666 10.3818 3.66466 7.99005 3.742 5.65593Z"
                                                fill="currentcolor" />
                                        </svg>
                                        <?= osdate()->create($post->date, 'd-M-y') ?>
                                    </span>
                                    <span>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1325_3240)">
                                                <path d="M8 8C8.79113 8 9.56448 7.76541 10.2223 7.32588C10.8801 6.88635 11.3928 6.26164 11.6955 5.53074C11.9983 4.79983 12.0775 3.99556 11.9231 3.21964C11.7688 2.44372 11.3878 1.73098 10.8284 1.17157C10.269 0.612165 9.55629 0.231202 8.78036 0.0768607C8.00444 -0.0774802 7.20017 0.00173314 6.46927 0.304484C5.73836 0.607234 5.11365 1.11992 4.67412 1.77772C4.2346 2.43552 4 3.20888 4 4C4.00106 5.06054 4.42283 6.07734 5.17274 6.82726C5.92266 7.57718 6.93946 7.99894 8 8ZM8 1.33334C8.52742 1.33334 9.04299 1.48973 9.48152 1.78275C9.92005 2.07577 10.2618 2.49224 10.4637 2.97951C10.6655 3.46678 10.7183 4.00296 10.6154 4.52024C10.5125 5.03753 10.2586 5.51268 9.88562 5.88562C9.51268 6.25856 9.03752 6.51254 8.52024 6.61543C8.00296 6.71832 7.46678 6.66551 6.97951 6.46368C6.49224 6.26185 6.07577 5.92005 5.78275 5.48152C5.48973 5.04299 5.33333 4.52742 5.33333 4C5.33333 3.29276 5.61428 2.61448 6.11438 2.11438C6.61448 1.61429 7.29276 1.33334 8 1.33334Z" fill="#03594E" />
                                                <path d="M8 9.33337C6.40924 9.33514 4.88414 9.96785 3.75931 11.0927C2.63447 12.2175 2.00176 13.7426 2 15.3334C2 15.5102 2.07024 15.6798 2.19526 15.8048C2.32029 15.9298 2.48986 16 2.66667 16C2.84348 16 3.01305 15.9298 3.13807 15.8048C3.2631 15.6798 3.33333 15.5102 3.33333 15.3334C3.33333 14.0957 3.825 12.9087 4.70017 12.0335C5.57534 11.1584 6.76232 10.6667 8 10.6667C9.23768 10.6667 10.4247 11.1584 11.2998 12.0335C12.175 12.9087 12.6667 14.0957 12.6667 15.3334C12.6667 15.5102 12.7369 15.6798 12.8619 15.8048C12.987 15.9298 13.1565 16 13.3333 16C13.5101 16 13.6797 15.9298 13.8047 15.8048C13.9298 15.6798 14 15.5102 14 15.3334C13.9982 13.7426 13.3655 12.2175 12.2407 11.0927C11.1159 9.96785 9.59076 9.33514 8 9.33337Z" fill="#03594E" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1325_32403">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <?= $post->author ?>
                                    </span>
                                    <span class="d-none d-md-block" style="color: var(--it-theme-1);">
                                        <i class="fa-regular fa-newspaper"></i>
                                        &nbsp;&nbsp;<?= $post->categories ?>
                                    </span>

                                </div>
                                <span class="d-block d-md-none" style="margin-top: -20px;margin-bottom: 30px;">
                                    <i class="fa-regular fa-newspaper" style="color: var(--it-theme-1);"></i>
                                    &nbsp;&nbsp;<?= $post->categories ?>
                                </span>
                                <h4 class="it-section-title">
                                    <a href="<?= $post->url ?>" class="border-line"><?= $post->title ?></a>
                                </h4>
                                <div class="postbox-dsc">
                                    <p class="mb-25"><?= $post->excerpt ?></p>
                                </div>
                                <a href="<?= $post->url ?>" class="it-btn-yellow theme-bg">
                                    <span>
                                        <span class="text-1">Baca Berita</span>
                                        <span class="text-2">Baca Berita</span>
                                    </span>
                                    <i>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z" fill="currentcolor" />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <?= $pageLinks ?>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="it-shop-sidebar">
                    <?= view('single-post/search-box', ['visibility' => 'd-none d-md-block']) ?>
                    <!-- category -->
                    <div class="sidebar-widget mb-60">
                        <h4 class="sidebar-widget-title mb-25">Kategori</h4>
                        <?php $uri = service('uri');
                        foreach ($categories as $category) : ?>
                            <a href="<?= base_url('berita/kategori/' . $category->slug) ?>">
                                <div class="sidebar-widget-list <?= $uri->getSegment($uri->getTotalSegments()) == $category->slug ? 'active' : '' ?> mb-15">
                                    <?= esc($category->name) ?>
                                    <span>
                                        <?= esc($category->count) ?>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>

                    </div>
                    <!-- post -->
                    <?= view('single-post/posts', ['posts' => $popularPosts, 'title' => 'Berita Terpopuler']) ?>


                </div>
            </div>
        </div>
    </div>
</div>