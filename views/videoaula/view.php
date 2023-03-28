<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\models\Instrumento;
use \app\models\Videoaula;

/** @var yii\web\View $this */
/** @var app\models\Videoaula $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Videoaulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="videoaula-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
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
            'id',
            'titulo',
            'duracao',
            [
                'attribute'=>'instrumento.nome',
                'label' => 'Instrumento',
            ],
            [
               'attribute' => 'professor.nome',
               'label' => 'Professor' 
            ],
        ],
    ]) ?>

</div>
