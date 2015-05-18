<?php
return [



    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
	'db'=>require(__DIR__ . '/db.php'),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
            'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
    ],
];
