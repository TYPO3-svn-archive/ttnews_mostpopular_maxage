<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Steffen Gebert <steffen@steffen-gebert.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Limits the view MOST_POPULAR of nc_ttnews_mostpopular to display only
 * news from the last X days.
 *
 * $Id: $
 *
 * @author	Steffen Gebert <steffen@steffen-gebert.de>
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 */

/**
 * Limits the view MOST_POPULAR of nc_ttnews_mostpopular to display only
 * news from the last X days.
 *
 * @author	Steffen Gebert <steffen@steffen-gebert.de>
 * @package TYPO3
 * @subpackage ttnews_mostpopular_maxage
 */
class tx_ttnewsmostpopularmaxage_hooks {

	/**
	 * Updates $selectConf if current code is MOST_POPULAR to select only news articles newer than maxAge days.
	 *
	 * @param	tx_ttnews	$pObj	Parent object
	 * @param	array	$selectConf	Configuration array as required by {@link tslib_cObj::exec_getQuery()}
	 * @see	tx_ttnews::getSelectConf()
	 * @see	tslib_cObj::exec_getQuery()
	 * @see http://bugs.typo3.org/view.php?id=6884
	 */
	function processSelectConfHook(&$pObj, &$selectConf) {
		/* @var $pObj tx_ttnews */
		if ($pObj->theCode == 'MOST_POPULAR') {

				// limit age of news
                        if (isset($pObj->conf['maxAge']) && t3lib_div::intval_positive($pObj->conf['maxAge'])) {
                                $selectConf['where'] .= ' AND datetime >= '.($GLOBALS['EXEC_TIME'] - 3600 * 24 * t3lib_div::intval_positive($pObj->conf['maxAge']));
                        }
		}
		return $selectConf;
	}
}
?>
