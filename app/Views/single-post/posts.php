<div class="sidebar-widget mb-60">
    <h4 class="sidebar-widget-title mb-25"><?= $title ?></h4>
    <div class="sidebar-widget-content">
        <div class="sidebar-widget-post">
            <ul>
                <?php foreach ($posts as $post) : ?>
                    <li>
                        <div class="rc-post">
                            <div class="rc-post-thumb mb-20">
                                <a href="<?= $post->url ?>">
                                    <img src="<?= $post->singlePostImage ?>" alt="">
                                </a>
                            </div>
                            <div class="rc-post-content">
                                <div class="rc-meta mb-10">
                                    <span>
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <?= osdate()->create($post->date, 'd-M-y') ?>
                                    </span>
                                </div>
                                <h5 class="rc-post-title">
                                    <a class="border-line" href="<?= $post->url ?>"><?= $post->title ?></a>
                                </h5>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>


            </ul>
        </div>
    </div>
</div>