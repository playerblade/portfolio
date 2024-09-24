<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(function () {

    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'Custom Element TEST',
            'custom_element',
            'content-text',
        ]
    );

    $GLOBALS['TCA']['tt_content']['types']['custom_element'] = [
        'showitem' => '
        --palette--;General;general,
        header;Title,
        bodytext;Text,
        --div--;Media,
        image,
        --div--;Access,
        --palette--;visibility;visibility,
        --palette--;access;access'
    ];

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['custom_element'] = 'content-text';

});
