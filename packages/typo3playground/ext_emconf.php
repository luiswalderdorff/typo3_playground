<?php

/**
 * Extension Manager/Repository config file for ext "typo3playground".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3playground',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Kompany\\Typo3playground\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Luis',
    'author_email' => 'walderdorff@live.de',
    'author_company' => 'Kompany',
    'version' => '1.0.0',
];
