<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {



    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ce_icon_text', 'Configuration/TypoScript', 'Icon Text');


});
