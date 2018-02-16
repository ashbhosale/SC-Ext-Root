<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'DishExtension.Dishextension',
            'Infodish',
            'InfoDish'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('dishextension', 'Configuration/TypoScript', 'DishExtension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dishextension_domain_model_dish', 'EXT:dishextension/Resources/Private/Language/locallang_csh_tx_dishextension_domain_model_dish.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dishextension_domain_model_dish');

    }
);
