<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'timeZone' => 'Asia/Shanghai',
    'modules' => [
        'dev' => [
            'class' => 'frontend\modules\dev\controllers\website\Module',
        ],
        'design' => [
            'class' => 'frontend\modules\design\controllers\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
//            'enableSession' => false,
//            'loginUrl' => null,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.qq.com',
//                'username' => '1499236748@qq.com',
//                'password' => 'q1234567we',
//                'port' => '465',
//                'encryption' => 'ssl',
                'host' => 'smtp.163.com',
                'username' => 'wulishengtian@163.com',
                'password' => 'q123456789we',
                'port' => '465',
                'encryption' => 'ssl',
//                'host' => 'smtp.live.com',
//                'username' => 'your_all_world@outlook.com',
//                'password' => 'wsnmds@123',
//                'port' => '587',
//                'encryption' => 'tls',
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => [
                    'wulishengtian@163.com' => 'admin'
                ]
            ],
        ],
        'urlManager' => [
            //用于表明urlManager是否启用URL美化功能，在Yii1.1中称为path格式URL，
            // Yii2.0中改称美化。
            // 默认不启用。但实际使用中，特别是产品环境，一般都会启用。
            "enablePrettyUrl" => true,
            // 是否启用严格解析，如启用严格解析，要求当前请求应至少匹配1个路由规则，
            // 否则认为是无效路由。
            // 这个选项仅在 enablePrettyUrl 启用后才有效。
            "enableStrictParsing" => false,
            // 是否在URL中显示入口脚本。是对美化功能的进一步补充。
            "showScriptName" => false,
            // 指定续接在URL后面的一个后缀，如 .html 之类的。仅在 enablePrettyUrl 启用时有效。
            "suffix" => "",
            "rules" => [
//                "<controller:\w+>/<id:\d+>" => "<controller>/view",
//                "<controller:\w+>/<action:\w+>" => "<controller>/<action>"
                ['class' => 'yii\rest\UrlRule', 'controller' => ['book'], 'pluralize' => false],
            ],
        ],
    ],
    'params' => $params,
];
