<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Possui $model */

$this->title = $model->id_curso;
$this->params['breadcrumbs'][] = ['label' => 'Possuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="possui-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_curso' => $model->id_curso, 'id_videoaula' => $model->id_videoaula], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_curso' => $model->id_curso, 'id_videoaula' => $model->id_videoaula], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_curso',
            'id_videoaula',
        ],
    ]) ?>

</div>
