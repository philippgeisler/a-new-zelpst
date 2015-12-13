<?php snippet('header') ?>
<!-- home.php -->
   <section class="content">
    <article class="banner">
       <p><strong><?php echo kirbytext($site->description()) ?></strong></p>
    </article>
   
    <?php $articles = $pages->findByURI('blog')->children()->visible()->flip()->paginate(8); $pagination = $articles->pagination() ?>
     
    <?php foreach($articles as $article): ?>
        <article class="bloglist">
<aside class="createdAt">
<time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo strftime('%e. %B ’%y', $article->date()) ?></time>
</aside>
	<h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
        <?php echo kirbytext($article->text()) ?>
        </article>
    <?php endforeach ?>
      
</section>
<nav class="pagination">
    <div class="art-nav prev">
      <?php if($pagination->hasNextPage()): ?>
      &#60;–&nbsp;<a href="<?php echo $pagination->nextPageUrl() ?>">&nbsp;ältere Einträge&nbsp;</a>
      <?php endif ?>
    </div>
    <div class="art-nav next">
      <?php if($pagination->hasPrevPage()): ?>
      <a href="<?php echo $pagination->prevPageUrl() ?>">&nbsp;spätere Einträge&nbsp;</a>&nbsp;-&#62;
      <?php endif ?>
    </div>
</nav>
<?php snippet('footer') ?>
