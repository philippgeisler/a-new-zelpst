<?php snippet('header') ?>
<!-- home.php -->
<section id="content">
    <article class="banner">
       <p><strong><?php echo kirbytext($site->description()) ?></strong></p>
    </article>

    <?php $articles = $pages->findByURI('blog')->children()->visible()->flip()->paginate(8); $pagination = $articles->pagination() ?>

    <?php foreach($articles as $article): ?>
        <article class="bloglist">
            <header>
                <hgroup>
                    <?php echo $article->title_styled()->markdown() ?>
                </hgroup>
                <hr>

                <section class="subtitle"><?php echo $article->subtitle()->kirbytext() ?></section>
                <?php ecco($article->subtitle(), "<hr>", "") ?>

                <aside id="post-meta">
                    <div class="place"><?php echo $article->city()->html() ?></div>
                    <div class="author">Printed for &nbsp;<div class="author-name"><?php echo $article->author()->html() ?></div>,&nbsp; in <em><?php echo $article->borrow()->html() ?></em></div>
                    <hr>
                    <div class="year"><?php echo $article->year_romanized()->html() ?></div>
                </aside>
            </header>
            <section class="excerpt">
                <?php echo kirbytext($article->text()->excerpt(180)) ?>
                <p><a href="<?php echo $article->url() ?>">Read on</a></p>
            </section>
        </article>
        <hr>
    <?php endforeach ?>
</section>

<nav class="pagination">
    <div class="art-nav prev">
      <?php if($pagination->hasNextPage()): ?>
          <a class="prev" href="<?php echo $pagination->nextPageUrl() ?>">previously</a>
      <?php endif ?>
    </div>
    <div class="art-nav next">
      <?php if($pagination->hasPrevPage()): ?>
          <a class="next" href="<?php echo $pagination->prevPageUrl() ?>">subsequently</a>&nbsp;-&#62;
      <?php endif ?>
    </div>
</nav>
<?php snippet('footer') ?>
