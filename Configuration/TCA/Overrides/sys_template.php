<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(static function () {
    ExtensionManagementUtility::addStaticFile(
        'ticker_messages',
        'Configuration/TypoScript/',
        'Ticker Messages'
    );
})();