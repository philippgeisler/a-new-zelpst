<!-- STILL TO DO -->

<?php snippet('header') ?>

<?php
	$search = new search(array(
		'searchfield' => 'q',
		'ignore'      => array('search', 'error', 'feed'),
		'words'       => true
		// ,'paginate'    => 10
	));
	$results = $search->results();
?>

<section class="content"><article>
	<?php if($results): ?>
		<ul>
		<?php foreach($results as $result): ?>
			<li><a href="<?php echo $result->url() ?>"><?php echo $result->title() ?></a></li>
		<?php endforeach ?>
		</ul>
		
	<?php elseif($search->query()): ?>
		<div class="no-results">No results for <strong><?php echo html($search->query()) ?></strong></div>
	<?php endif ?>
</article></section>

<?php snippet('footer') ?>