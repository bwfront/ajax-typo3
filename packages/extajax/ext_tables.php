<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_extajax_domain_model_liste', 'EXT:extajax/Resources/Private/Language/locallang_csh_tx_extajax_domain_model_liste.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extajax_domain_model_liste');
})();
