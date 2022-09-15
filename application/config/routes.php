<?php
return [
    'wizard-form/users' =>[
        'controller'=>'users',
        'action'=>'index',
    ],
    'wizard-form/main' =>[
        'controller'=>'main',
        'action'=>'index',
    ],

    'wizard-form/firstform'=>[
        'controller'=>'users',
        'action'=>'create',
    ],

    'wizard-form/secondform'=>[
        'controller'=>'users',
        'action'=>'updete',
    ]
];