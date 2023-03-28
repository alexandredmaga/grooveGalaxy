<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Possui $model */

$this->title = 'Update Possui: ' . $model->id_curso;
$this->params['breadcrumbs'][] = ['label' => 'Possuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_curso, 'url' => ['view', 'id_curso' => $model->id_curso, 'id_videoaula' => $model->id_videoaula]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="possui-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
