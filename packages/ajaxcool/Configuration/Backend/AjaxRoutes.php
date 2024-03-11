<?php
use bennet\ajaxcool\Controller\ExampleController;

return [
    'myextension_example_dosomething' => [
        'path' => '/ajaxcool/do-something',
        'target' => ExampleController::class . '::doSomethingAction',
    ],
];
