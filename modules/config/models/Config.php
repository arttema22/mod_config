<?php

namespace app\modules\config\models;

use Yii;
use app\modules\config\Module;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property integer $id
 * @property string $param
 * @property string $value
 * @property string $default
 * @property string $label
 * @property string $type
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['param', 'value', 'default', 'label', 'type'], 'required'],
            [['value', 'default'], 'string'],
            [['param', 'type'], 'string', 'max' => 128],
            [['label'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Module::t('module', 'ID'),
            'param' => Module::t('module', 'Param'),
            'value' => Module::t('module', 'Value'),
            'default' => Module::t('module', 'Default'),
            'label' => Module::t('module', 'Label'),
            'type' => Module::t('module', 'Type'),
        ];
    }
}
