<?php

namespace app\modules\config\models;

use Yii;

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
            'id' => Yii::t('module', 'ID'),
            'param' => Yii::t('module', 'Param'),
            'value' => Yii::t('module', 'Value'),
            'default' => Yii::t('module', 'Default'),
            'label' => Yii::t('module', 'Label'),
            'type' => Yii::t('module', 'Type'),
        ];
    }
}
