<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function (): void {
    // Adds the content element to the "Type" dropdown
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            // title
            'LLL:EXT:ticker_messages/Resources/Private/Language/locallang_be.xlf:content.ticker_messages.title',
            // plugin signature: extkey_identifier
            'tickermessages_list',
            // icon identifier
            'actions-list',
        ],
        'textmedia',
        'after'
    );

    ArrayUtility::mergeRecursiveWithOverrule(
        $GLOBALS['TCA']['tt_content'],
        [
            'ctrl' => [
                'typeicon_classes' => [
                    'tickermessages_list' => 'actions-list',
                ]
            ],
            'types' => [
                'tickermessages_list' => [
                    'showitem' =>
                        '
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                            --palette--;;general,
                            --palette--;;headers,
                            selected_categories,
                            pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,
                            recursive,
                        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                            --palette--;;frames,
                            --palette--;;appearanceLinks,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                            --palette--;;language, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                            --palette--;;hidden,
                            --palette--;;access,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended
                        '
                ]
            ]
        ]
    );
})();