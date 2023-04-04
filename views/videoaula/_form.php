<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\Instrumento;
use \app\models\Videoaula;


/*<?= $form->field($model, 'professor_fk')->dropDownList([ArrayHelper::map(Videoaula::find()->orderBy('id')->all(), 'id', 'professor_fk')], ['prompt' => 'Selecione um Professor'] ) ?> */

/** @var yii\web\View $this  */
/** @var app\models\Videoaula $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="videoaula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrumento_fk')->dropDownList([ArrayHelper::map(Instrumento::find()->orderBy('nome')->all(), 'id', 'nome')], ['prompt' => 'Selecione um Instrumento'] ) ?>

    <?= $form->field($model, 'professor_fk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
