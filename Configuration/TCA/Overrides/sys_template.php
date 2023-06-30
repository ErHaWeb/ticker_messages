<?php
declare(strict_types=1);

defined('TYPO3') or die();

(static function () {
    /**
     * Add static TypoScript (constants and setup) directly through TCA instead of the API function to be able to translate the title
     */
    if (is_array($GLOBALS['TCA']['sys_template']['columns'])) {
        $GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['items'][] = [
            'LLL:EXT:ticker_messages/Resources/Private/Language/locallang_be.xlf:sys_template.TypoScript.ticker_messages',
            'EXT:ticker_messages/Configuration/TypoScript/'
        ];
    }
})();