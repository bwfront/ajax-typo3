<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'ajaxkey',
    'description' => 'empty',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Bennet\\Ajaxcool\\' => 'Classes/',
        ],
    ],
];
