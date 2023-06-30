<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function (): void {

    ArrayUtility::mergeRecursiveWithOverrule(
        $GLOBALS['TCA']['tt_content']['types']['list'],
        [
            'subtypes_excludelist' => [
                'tickermessages_list' => 'select_key,categories',
            ],
            'subtypes_addlist' => [
                'tickermessages_list' => 'selected_categories',
            ]
        ]
    );

    // Adds the content element to the "Type" dropdown
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            // title
            'Ticker Messages',
            // plugin signature: extkey_identifier
            'tickermessages_list',
            // icon identifier
            'actions-list',
        ],
        'textmedia',
        'after'
    );

    $GLOBALS['TCA']['tt_content']['types']['tickermessages_list'] = [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
               header,
               selected_categories,
               pages,
               recursive,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         '
    ];

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['tickermessages_list'] = 'actions-list';
})();