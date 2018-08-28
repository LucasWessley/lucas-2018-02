<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id_usuario',
            'nome',
            'email:email',
            'senha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
