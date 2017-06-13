<?php

namespace app\modules\config;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/config/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/config/messages',
            'fileMap' => [
                'modules/config/module' => 'module.php',
            ],
        ];
    }
}