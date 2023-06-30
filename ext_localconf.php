<?php

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function () {
    $autoIncludeTypoScript = GeneralUtility::makeInstance(ExtensionConfiguration::class)
        ?->get('ticker_messages', 'autoIncludeTypoScript');

    if($autoIncludeTypoScript) {
        ExtensionManagementUtility::addTypoScript(
            'ticker_messages',
            'setup',
            "@import 'EXT:ticker_messages/Configuration/TypoScript/setup.typoscript'"
        );
    }

    /**
     * Adding the default Page TSconfig
     */
    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    if ($versionInformation->getMajorVersion() < 12) {
        ExtensionManagementUtility::addPageTSConfig(trim(
            '
                @import "EXT:ticker_messages/Configuration/page.tsconfig"
            '
        ));
    }

    /**
     * Plugin Configuration
     */
    ExtensionUtility::configurePlugin(
        'TickerMessages',
        'List',
        [
            'Tickermessages' => 'list'
        ]
    );
})();