<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'PingAndReceive.Simpleorder',
            'Ordersystem',
            'Order'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('simpleorder', 'Configuration/TypoScript', 'PingAndReceive');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleorder_domain_model_customer', 'EXT:simpleorder/Resources/Private/Language/locallang_csh_tx_simpleorder_domain_model_customer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleorder_domain_model_customer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleorder_domain_model_order', 'EXT:simpleorder/Resources/Private/Language/locallang_csh_tx_simpleorder_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleorder_domain_model_order');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleorder_domain_model_dish', 'EXT:simpleorder/Resources/Private/Language/locallang_csh_tx_simpleorder_domain_model_dish.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleorder_domain_model_dish');

    }
);
