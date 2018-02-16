<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'DishExtension.Dishextension',
            'Infodish',
            [
                'Dish' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Dish' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    infodish {
                        iconIdentifier = dishextension-plugin-infodish
                        title = LLL:EXT:dishextension/Resources/Private/Language/locallang_db.xlf:tx_dishextension_infodish.name
                        description = LLL:EXT:dishextension/Resources/Private/Language/locallang_db.xlf:tx_dishextension_infodish.description
                        tt_content_defValues {
                            CType = list
                            list_type = dishextension_infodish
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'dishextension-plugin-infodish',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:dishextension/Resources/Public/Icons/user_plugin_infodish.svg']
			);
		
    }
);
