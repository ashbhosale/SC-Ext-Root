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

    }
);
