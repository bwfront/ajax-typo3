<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$ZFdrbXd1blEuYmhNUGhzUw$tm7MY40l95Czz1ebf/g/lppo0s0ikWohGgQNeJTHjlc',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'extension_builder' => [
            'backupDir' => 'var/tx_extensionbuilder/backups',
            'backupExtension' => '1',
            'enableRoundtrip' => '1',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
		'caching' => [
			'cacheConfigurations' => [
				'core' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'hash' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'pages' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'pagesection' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'runtime' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'rootline' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'imagesizes' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'assets' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'l10n' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'fluid_template' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
				'extbase' => [
					'backend' => \TYPO3\CMS\Core\Cache\Backend\NullBackend::class,
				],
			],
		],
		'devIPmask' => '*',
		'displayErrors' => 1,
		'errorHandlerErrors' => E_ALL ^ E_DEPRECATED ^ E_NOTICE,
		'exceptionalErrors' => E_ALL ^ E_DEPRECATED ^ E_NOTICE,
		'errorHandler' => 'TYPO3\\CMS\\Core\\Error\\ErrorHandler',
		'debugExceptionHandler' => 'TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler',
		'productionExceptionHandler' => 'TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler',
        'encryptionKey' => '9286e4760d5ebdec5aa179a58662081f706e5e21efe074792a4930b3a7807ab5622885acd711665cf5cf42b4e1fabe85',
        'exceptionalErrors' => 4096,
        'features' => [
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'New TYPO3 site',
        'systemMaintainers' => [
            1,
            2,
        ],
    ],
];
