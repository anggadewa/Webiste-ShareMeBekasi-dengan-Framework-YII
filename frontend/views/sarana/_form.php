<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Sarana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sarana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->hiddenInput(['value' => Yii::$app->user->identity->username])->label(false) ?>

    <?= $form->field($model, 'nama')->hiddenInput(['value' => Yii::$app->user->identity->nama])->label(false) ?>

    <?= $form->field($model, 'saran')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'target')->dropDownList([ 'Trotoar' => 'Trotoar', 'Jembatan' => 'Jembatan', 'Zebracross' => 'Zebracross', 'Halte' => 'Halte', 'Terminal' => 'Terminal', 'Stasiun' => 'Stasiun', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Lapor', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
