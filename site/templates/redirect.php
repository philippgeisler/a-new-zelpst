<!-- simple redirect to latest blog entry -->
<?php go($pages->findByUID('archiv')->children()->visible()->last()->url()) ?>