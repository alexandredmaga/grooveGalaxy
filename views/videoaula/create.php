<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Videoaula $model */

$this->title = 'Create Videoaula';
$this->params['breadcrumbs'][] = ['label' => 'Videoaulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videoaula-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
