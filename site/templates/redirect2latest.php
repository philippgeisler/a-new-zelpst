<!-- simple redirect to latest blog entry -->
<?php go($pages->find('blog')->children()->visible()->last()->url()) ?>
