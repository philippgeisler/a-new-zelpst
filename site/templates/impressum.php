<?php snippet('header') ?>
<section id="content">
	<article id="impressum">
		<h1><?php echo markdown($page->title_styled()) ?></h1>
		<hr>
		<address><?php echo kirbytext($page->address()) ?></address>
		<?php echo kirbytext($page->text()) ?>
	</article>
</section>
<?php snippet('footer') ?>
