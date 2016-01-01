<?php snippet('header') ?>
<section id="content">
	<article id="impressum">
		<h1><?php echo markdown($page->title_styled()) ?></h1>
		<hr>
		<address><?php echo kirbytext($page->address()) ?></address>
		<?php echo kirbytext($page->text()) ?>
	</article>
</section>
<nav>
	<a class="home" href="<?php echo $site->homePage()->url() ?>">Index</a>
</nav>
<?php snippet('footer') ?>
