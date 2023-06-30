<?php
declare(strict_types=1);

defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'Ticker Message',
        'label' => 'title',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'descriptionColumn' => 'rowDescription',
        'transOrigPointerField' => 'l18n_parent',
        'translationSource' => 'l10n_source',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'typeicon_classes' => [
            'default' => 'actions-message',
        ],
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group'
        ],
        'searchFields' => 'title, bodytext, categories',
    ],
    'types' => [
        '1' => ['showitem' => 'title, bodytext, categories'],
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input'
            ]
        ],
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 80,
                'rows' => 15,
            ],
        ],
        'categories' => [
            'config' => [
                'type' => 'category'
            ]
        ],
    ]
];