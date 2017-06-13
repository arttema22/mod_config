<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\config\Module;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('module', 'Configs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'label',
            'value:ntext',
            'default:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {link}',
            ],
        ],
    ]);
    ?>
</div>
