<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Nivel $model */

$this->title = 'Create Nivel';
$this->params['breadcrumbs'][] = ['label' => 'Nivels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nivel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
