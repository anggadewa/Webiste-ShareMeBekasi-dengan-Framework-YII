<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Instansi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instansi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'target')->dropDownList([ 'Pemda' => 'Pemda', 'RumahSakit' => 'RumahSakit', 'Polda' => 'Polda', 'Kelurahan' => 'Kelurahan', 'Kecamatan' => 'Kecamatan', 'Imigrasi' => 'Imigrasi', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?> 

    <?= $form->field($model, 'waktu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
