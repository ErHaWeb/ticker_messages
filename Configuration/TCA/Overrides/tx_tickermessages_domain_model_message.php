<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

(static function (): void {
    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    if ($versionInformation->getMajorVersion() < 11) {
        ExtensionManagementUtility::makeCategorizable(
            'ticker_messages',
            'tx_tickermessages_domain_model_message'
        );
    }
})();