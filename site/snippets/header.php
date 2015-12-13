<!DOCTYPE html>
<html lang="<?php ecco($page->lang() == '', 'de', $page->lang()) ?>" />
<!-- header.php -->
<head>
	<title><?php ecco($page->title() == 'Zuhause',
                      html($site->title()), // . $wort,
                      html($site->title()) . ': ' . html($page->title())) ?>
    </title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">

    <!-- DEBUG (disable caching) -->
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
    <!-- END DEBUG -->

    <?php echo css('assets/css/octavo.css') ?>

    <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Blog Feed" />
</head>
<body>
