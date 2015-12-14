<?php snippet('header') ?>
<!-- home.php -->
<section id="content">
    <header id="site-header">
        <h1>Z<span class="epsilon">3</span>LPST</h1>
        <div class="flowery">c</div>
    </header>
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
                <?php echo kirbytext($article->text()->excerpt(130)) ?>
                <p><a href="<?php echo $article->url() ?>">Read the Treatise</a></p>
            </section>
        </article>
        <div class="flowery">c</div>
    <?php endforeach ?>
</section>

<?php if($pagination->hasNextPage() || $pagination->hasPrevPage()): ?>
    <nav class="pagination">
        <?php if($pagination->hasNextPage()): ?>
            <div class="art-nav prev">
                  <a class="prev" href="<?php echo $pagination->nextPageUrl() ?>">previously</a>
            </div>
        <?php endif ?>
        <?php if($pagination->hasPrevPage()): ?>
            <div class="art-nav next">
                  <a class="next" href="<?php echo $pagination->prevPageUrl() ?>">subsequently</a>&nbsp;-&#62;
            </div>
        <?php endif ?>
    </nav>
<?php endif ?>
<?php snippet('footer') ?>
