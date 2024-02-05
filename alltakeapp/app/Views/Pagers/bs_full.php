<?php

/**
 * bs_full.php - - Bootstrap 5.2 Pager Template.
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <ul class="pager pagination justify-content-center">
        <?php if ($pager->hasPreviousPage()) : ?>
            <li class="page-item oswald text-uppercase">
                <a class="page-link text-blue oswald text-uppercase" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li <?= $link['active']  ? 'class="page-item active"' : '' ?>>
                <a class="page-link text-muted oswald text-uppercase" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li class="page-item oswald text-uppercase text-decoration-none">
                <a class="page-link text-blue text-decoration-none" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav> 