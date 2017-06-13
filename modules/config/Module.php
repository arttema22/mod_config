<?php

namespace app\modules\config;

use Yii;

/**
 * config module definition class
 */
class Module extends \yii\base\Module {

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\config\controllers';


    public static function t($category, $message, $params = [], $language = null) {
        return Yii::t('modules/config/' . $category, $message, $params, $language);
    }

}
