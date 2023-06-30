<?php
declare(strict_types=1);

defined('TYPO3') or die();

$EM_CONF[$_EXTKEY] = [
    'title' => 'Ticker Messages',
    'description' => 'This is a demo extension that demonstrates how to output custom records without a "Classes" directory in the extension with DatabaseQueryProcessor in a categorized list view. Thanks to Thomas Löffler and his extension "just_news" for the inspiration for this approach.',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Eric Harrer',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'fluid_styled_content' => ''
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];