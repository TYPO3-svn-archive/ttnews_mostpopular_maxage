<?php

########################################################################
# Extension Manager/Repository config file for ext "ttnews_mostpopular_maxage".
#
# Auto generated 09-01-2010 23:42
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'News: most popular with maxAge',
	'description' => 'Extends nc_ttnews_mostpopular to show only news from the past X days.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'tt_news,nc_ttnews_mostpopular',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Steffen Gebert',
	'author_email' => 'steffen@steffen-gebert.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'tt_news' => '',
			'nc_ttnews_mostpopular' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:4:{s:42:"class.tx_ttnewsmostpopularmaxage_hooks.php";s:4:"64d2";s:12:"ext_icon.gif";s:4:"f19a";s:17:"ext_localconf.php";s:4:"398e";s:14:"doc/manual.sxw";s:4:"2998";}',
	'suggests' => array(
	),
);

?>