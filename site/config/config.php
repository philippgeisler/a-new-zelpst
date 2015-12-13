<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// c::set('debug','true');
c::set('content.file.extension', 'md');
c::set('locale','de_DE.utf8');
c::set('markdown.extra',true);

/* Routing (Short-URLs) */
c::set('routes', array(
	array(
		'pattern' => '([0-9a-fA-F][0-9a-fA-F][0-9a-fA-F][0-9a-fA-F])',
		'action'  => function($idx) {
			$to = page('blog')->children()->findBy('idx', $idx);
			/* echo $to;*/
			go($to);
		}
	)
));
