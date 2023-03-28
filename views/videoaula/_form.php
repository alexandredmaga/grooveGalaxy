<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Videoaula $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="videoaula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrumento_fk')->textInput() ?>

    <?= $form->field($model, 'professor_fk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
