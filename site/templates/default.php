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
        </header>
		<section id="post-meta">
			<div class="place"><?php echo $page->city()->html() ?></div>
			<div class="author">Printed for &nbsp;<div class="author-name"><?php echo $page->author()->html() ?></div>,&nbsp; in <em><?php echo $page->borrow()->html() ?></em></div>
			<hr>
			<div class="year"><?php echo $page->year_romanized()->html() ?></div>
		</section>

		<div class="textbody"><?php echo $page->text()->kirbytext() ?></div>
	</article>
</section>
<?php snippet('prevnext') ?>
<?php snippet('footer') ?>
