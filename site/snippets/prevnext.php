<nav>
    <?php if($page->hasPrevVisible()): ?>
        <a class="prev" href="<?php echo $page->prevVisible()->url() ?>">previously</a>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
        <a class="next" href="<?php echo $page->nextVisible()->url() ?>">subsequently</a>
    <?php endif ?>
</nav>
