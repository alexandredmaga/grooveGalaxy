<?php

use app\models\Videoaula;
use \app\models\Instrumento;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\VideoaulaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Videoaulas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videoaula-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Videoaula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'duracao',
             [
                'attribute'=>'instrumento.nome',
                'label' => 'Instrumento',
             ],
             [
                'attribute'=>'professor.nome',
                'label' => 'Professor',
             ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Videoaula $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
