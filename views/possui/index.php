<?php

use app\models\Possui;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PossuiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Possuis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="possui-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Possui', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_curso',
            'id_videoaula',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Possui $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_curso' => $model->id_curso, 'id_videoaula' => $model->id_videoaula]);
                 }
            ],
        ],
    ]); ?>


</div>
