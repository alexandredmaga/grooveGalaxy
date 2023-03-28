<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Instrumento $model */

$this->title = 'Create Instrumento';
$this->params['breadcrumbs'][] = ['label' => 'Instrumentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instrumento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
