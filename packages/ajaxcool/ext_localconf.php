<?php

$GLOBALS['TYPO3_CONF_VARS']['FE']['ajaxRoutes']['myextension_example_dosomething'] = [
    'path' => '/ajaxcool/do-something',
    'target' => \bennet\ajaxcool\Controller\ExampleController::class . '::doSomethingAction',
];