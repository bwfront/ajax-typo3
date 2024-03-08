<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Extajax',
        'Pluginajax',
        [
            \Bennet\Extajax\Controller\ListeController::class => 'list, ajaxCall'
        ],
        // non-cacheable actions
        [
            \Bennet\Extajax\Controller\ListeController::class => ''
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pluginajax {
                        iconIdentifier = extajax-plugin-pluginajax
                        title = LLL:EXT:extajax/Resources/Private/Language/locallang_db.xlf:tx_extajax_pluginajax.name
                        description = LLL:EXT:extajax/Resources/Private/Language/locallang_db.xlf:tx_extajax_pluginajax.description
                        tt_content_defValues {
                            CType = list
                            list_type = extajax_pluginajax
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
