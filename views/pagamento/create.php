<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pagamento $model */

$this->title = 'Create Pagamento';
$this->params['breadcrumbs'][] = ['label' => 'Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
