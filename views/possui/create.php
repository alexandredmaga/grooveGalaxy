<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Possui $model */

$this->title = 'Create Possui';
$this->params['breadcrumbs'][] = ['label' => 'Possuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="possui-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
