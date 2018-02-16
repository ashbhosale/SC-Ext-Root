<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PingAndReceive.Simpleorder',
            'Ordersystem',
            [
                
            ],
            // non-cacheable actions
            [
                
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    ordersystem {
                        iconIdentifier = simpleorder-plugin-ordersystem
                        title = LLL:EXT:simpleorder/Resources/Private/Language/locallang_db.xlf:tx_simpleorder_ordersystem.name
                        description = LLL:EXT:simpleorder/Resources/Private/Language/locallang_db.xlf:tx_simpleorder_ordersystem.description
                        tt_content_defValues {
                            CType = list
                            list_type = simpleorder_ordersystem
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'simpleorder-plugin-ordersystem',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:simpleorder/Resources/Public/Icons/user_plugin_ordersystem.svg']
			);
		
    }
);
