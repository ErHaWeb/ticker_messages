<?php
declare(strict_types=1);

defined('TYPO3') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:ticker_messages/Resources/Private/Language/locallang_db.xlf:tx_tickermessages_domain_model_message',
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
        'iconfile' => 'EXT:ticker_messages/Resources/Public/Icons/Extension.svg',
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
            'label' => 'LLL:EXT:ticker_messages/Resources/Private/Language/locallang_db.xlf:tx_tickermessages_domain_model_message.title',
            'config' => [
                'type' => 'input'
            ]
        ],
        'bodytext' => [
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'LLL:EXT:ticker_messages/Resources/Private/Language/locallang_db.xlf:tx_tickermessages_domain_model_message.bodytext',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 80,
                'rows' => 15,
            ],
        ],
        'categories' => [
            'label' => 'LLL:EXT:ticker_messages/Resources/Private/Language/locallang_db.xlf:tx_tickermessages_domain_model_message.categories',
            'config' => [
                'type' => 'category'
            ]
        ],
    ]
];