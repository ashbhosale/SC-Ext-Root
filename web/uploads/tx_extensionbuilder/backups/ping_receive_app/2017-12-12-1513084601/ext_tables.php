<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Testing.PingReceiveApp',
            'Food',
            'Food'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ping_receive_app', 'Configuration/TypoScript', 'PingAndReceive');

    }
);
