<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Ticker Messages',
    'description' => 'This is a demo extension that demonstrates how to output custom records without a "Classes" directory in the extension with DatabaseQueryProcessor in a categorized list view. Thanks to Thomas Löffler and his extension "just_news" for the inspiration for this approach.',
    'category' => 'plugin',
    'author' => 'Eric Harrer',
    'author_email' => 'info@eric-harrer.de',
    'author_company' => 'eric-harrer.de',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];