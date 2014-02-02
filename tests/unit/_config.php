<?php
/**
 * @link      https://github.com/index0h/yii-phar
 * @copyright Copyright (c) 2014 Roman Levishchenko <index.0h@gmail.com>
 * @license   https://raw.github.com/index0h/yii-phar/master/LICENSE
 */

return [
    'id' => 'basic',
    'basePath' => \Yii::getAlias('@tests'),
    'runtimePath' => \Yii::getAlias('@tests/_runtime'),
    'components' => [
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\\log\\FileTarget',
                    'logFile' => '@tests/_log/app.log'
                ],
            ],
        ],
    ],
    'modules' => [
        'phar' => ['class' => 'index0h\\yii\\phar\\Module']
    ]
];
