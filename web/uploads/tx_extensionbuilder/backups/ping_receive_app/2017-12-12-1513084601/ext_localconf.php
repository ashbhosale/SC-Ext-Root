<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Testing.PingReceiveApp',
            'Food',
            [
                'FoodItem' => 'list, show, order'
            ],
            // non-cacheable actions
            [
                'FoodType' => 'order'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    food {
                        iconIdentifier = ping_receive_app-plugin-food
                        title = LLL:EXT:ping_receive_app/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_app_food.name
                        description = LLL:EXT:ping_receive_app/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_app_food.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingreceiveapp_food
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'ping_receive_app-plugin-food',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ping_receive_app/Resources/Public/Icons/user_plugin_food.svg']
			);
		
    }
);
