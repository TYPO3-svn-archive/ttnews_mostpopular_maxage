<?php

if (!defined ('TYPO3_MODE')) die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['selectConfHook'][$_EXTKEY] = 'EXT:ttnews_mostpopular_maxage/class.tx_ttnewsmostpopularmaxage_hooks.php:&tx_ttnewsmostpopularmaxage_hooks';
?>
