<div class="flowery">c</div>
<nav>
        <div class="prev">
            <?php if($page->hasPrevVisible()): ?>
                <a href="<?php echo $page->prevVisible()->url() ?>">previously</a>
        <?php endif ?>
        </div>
        <div class="home">
            <a href="<?php echo $site->homePage()->url() ?>">Index</a>
        </div>
        <div class="next">
            <?php if($page->hasNextVisible()): ?>
                <a href="<?php echo $page->nextVisible()->url() ?>">subsequently</a>
            <?php endif ?>
        </div>
</nav>
