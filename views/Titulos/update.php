<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Titulos */

$this->title = 'Update Titulos: ' . $model->id_titulo;
$this->params['breadcrumbs'][] = ['label' => 'Titulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_titulo, 'url' => ['view', 'id' => $model->id_titulo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="titulos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
