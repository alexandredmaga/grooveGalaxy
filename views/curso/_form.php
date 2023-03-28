<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\Instrumento;
use \app\models\Videoaula;


/** @var yii\web\View $this */
/** @var app\models\Curso $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrumento_fk')->dropDownList([ArrayHelper::map(Instrumento::find()->orderBy('nome')->all(), 'id', 'nome')], ['prompt' => 'Selecione um Instrumento'] ) ?>

    <?= $form->field($model, 'professor_fk')->dropDownList([ArrayHelper::map(Videoaula::find()->orderBy('id')->all(), 'id', 'professor_fk')], ['prompt' => 'Selecione um Professor'] ) ?>

    <?= $form->field($model, 'professor_fk')->textInput() ?>

    <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
