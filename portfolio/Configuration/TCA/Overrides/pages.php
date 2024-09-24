<?php
defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'portfolio';

    /**
     * Default PageTS for Portfolio
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Portfolio'
    );
});
