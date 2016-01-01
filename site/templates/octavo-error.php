<?php snippet('header') ?>
<!-- default.php -->
<section id="content">
	<article>
        <header>
            <hgroup>
    		    <?php echo $page->title_styled()->markdown() ?>
            </hgroup>
    		<hr>

    		<section class="subtitle"><?php echo $page->subtitle()->kirbytext() ?></section>
    		<?php ecco($page->subtitle(), "<hr>", "") ?>

    		<aside id="post-meta">
    			<div class="place"><?php echo $page->city()->html() ?></div>
    			<div class="author">Printed for &nbsp;<div class="author-name"><?php echo $page->author()->html() ?></div>,&nbsp; in <em><?php echo $page->borrow()->html() ?></em></div>
    			<hr>
    			<div class="year"><?php echo $page->year_romanized()->html() ?></div>
    		</aside>
        </header>

		<section class="textbody"><?php echo $page->text()->kirbytext() ?></section>
	</article>
</section>
<nav>
        <div class="home-err">
            <a href="<?php echo $site->homePage()->url() ?>">Index</a>
        </div>
</nav><?php snippet('footer') ?>
