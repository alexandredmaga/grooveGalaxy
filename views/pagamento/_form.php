<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pagamento $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pagamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'confirmacao')->textInput() ?>

    <?= $form->field($model, 'matricula_fk_usuario')->textInput() ?>

    <?= $form->field($model, 'matricula_fk_curso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
