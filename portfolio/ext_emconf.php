<?php

/**
 * Extension Manager/Repository config file for ext "portfolio".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Portfolio',
    'description' => 'Personal Portfolio',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ProwelerAsapSa\\Portfolio\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Prowler',
    'author_email' => 'prowler-asap@gmail.com',
    'author_company' => 'Proweler ASAP SA',
    'version' => '1.0.0',
];
