<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$7Ah9taVDrB38MMUYf9dw/Q$H6K0ND7xA0.eeifFj58GrTyQ3zMk6rp5knqzptoZmC0',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'typo3_new_site1',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => 'dev',
                'user' => 'developer',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'about' => 'a:0:{}',
            'backend' => 'a:5:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'belog' => 'a:0:{}',
            'beuser' => 'a:0:{}',
            'bootstrap_package' => 'a:7:{s:16:"disablePageTsRTE";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:30:"disablePageTsTtContentPreviews";s:1:"0";s:36:"disablePageTsNewContentElementWizard";s:1:"0";s:20:"disableCssProcessing";s:1:"0";}',
            'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'femanager' => 'a:4:{s:13:"disableModule";s:1:"0";s:24:"enableConfirmationModule";s:1:"0";s:10:"disableLog";s:1:"0";s:16:"setCookieOnLogin";s:1:"0";}',
            'form' => 'a:0:{}',
            'func' => 'a:0:{}',
            'info' => 'a:0:{}',
            'introduction' => 'a:0:{}',
            'lowlevel' => 'a:0:{}',
            'ping_receive_app' => 'a:0:{}',
            'reports' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
            'setup' => 'a:0:{}',
            'testing' => 'a:0:{}',
            'tstemplate' => 'a:0:{}',
            'viewpage' => 'a:0:{}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'eu',
            ],
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => -1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'enableDeprecationLog' => 'file',
        'encryptionKey' => '312356a0fa6e12e82fc979d7d68e92ad0bbba16b4fb8d0b74ecf481f04846a75cb2dcca6c2b7966e8384f62840c13524',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'New TYPO3 Console site',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
    ],
];
