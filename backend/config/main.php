<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'mdm' => [
            'class' => 'mdm\admin\Module'
        ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'as backend' => 'dektrium\user\filters\BackendFilter',
           // 'controllers' => ['profile', 'recovery', 'settings'], // not allowed controller in 'backend'
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['child'],
            'modelMap' => [

                'Account' => 'backend\models\Account',

                'LoginForm' => 'backend\models\LoginForm',

                'Profile' => 'backend\models\Profile',

                'RecoveryForm' => 'backend\models\RecoveryForm',

                'RegistrationForm' => 'backend\models\RegistrationForm',

                'ResendForm' => 'backend\models\ResendForm',

                'SettingsForm' => 'backend\models\SettingsForm',

                'Token' => 'backend\models\Token',

                'User' => 'backend\models\User',

                'UserSearch' => 'backend\models\UserSearch',

            ],

            // Overide Controller Yii2-user

            'controllerMap' => [

                'profile' => 'backend\controllers\user\ProfileController',

                'recovery' => 'backend\controllers\user\RecoveryController',

                'registration' => 'backend\controllers\user\RegistrationController',

                'security' => 'backend\controllers\user\SecurityController',

                'settings' => 'backend\controllers\user\SettingsController',

                'admin' => 'backend\controllers\user\AdminController',


            ],
        ],
    ],

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
//        ],
//        'session' => [
//            // this is the name of the session cookie used for login on the backend
//            'name' => 'advanced-backend',
//        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-black',
                ],
            ],
        ],

//        'urlManager' => [
//            'class' => 'yii\web\UrlManager',
//            'baseUrl'=>'/e-region/backend/web/',
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'rules' => [
//            ],
//        ],

    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            '/user/admin/*',
            'gii/*',
            'debug/*',
//            'user/security/login',
//            'user/registration/register',
//            'user/registration/resend',
//            'user/recovery/request',
        ]
    ],
    'params' => $params,
];
