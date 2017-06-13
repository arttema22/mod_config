<?php

use yii\helpers\Html;
use app\modules\config\Module;

/* @var $this yii\web\View */
/* @var $model app\modules\config\models\Config */

$this->title = Module::t('module', 'Update {modelClass}: ', [
            'modelClass' => 'Config',
        ]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Module::t('module', 'Configs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->label];
$this->params['breadcrumbs'][] = Module::t('module', 'Update');
?>
<div class="config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
