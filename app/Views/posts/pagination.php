<?php

/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */
$pager->setSurroundCount(2)
?>
<div class="it-pagination pt-30">
    <nav>
        <ul>
            <li>
                <a href="<?= $pager->getPreviousPage() ?>">
                    <i class="fa-regular fa-arrow-left"></i>
                </a>
            </li>
            <?php foreach ($pager->links() as $link) : ?>
            <li class="<?= $link['active'] ? 'current' : '' ?>">
                <a href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
            </li>
            <?php endforeach; ?>
            
            <li>
                <a href="<?= $pager->getNextPage() ?>">
                    <i class="fa-regular fa-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>