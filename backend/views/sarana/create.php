<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sarana */

$this->title = 'Create Sarana';
$this->params['breadcrumbs'][] = ['label' => 'Saranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sarana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
