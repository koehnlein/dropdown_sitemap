<?php
	if (!defined ("TYPO3_MODE")) {
		die ("Access denied.");
	}
	
	// Add plugin
	t3lib_extMgm::addPlugin(Array("LLL:EXT:dropdown_sitemap/locallang_db.php:tt_content.menu_type_pi1", $_EXTKEY."_pi1"),"menu_type");
?>
