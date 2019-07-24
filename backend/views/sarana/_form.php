<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sarana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sarana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'target')->dropDownList([ 'Trotoar' => 'Trotoar', 'Jembatan' => 'Jembatan', 'Zebracross' => 'Zebracross', 'Halte' => 'Halte', 'Terminal' => 'Terminal', 'Stasiun' => 'Stasiun', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'waktu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
