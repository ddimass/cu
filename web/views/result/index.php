<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ResultSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить результат', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'team.name',
            'game.game_no',
            'score',
            'score_extra',
            [
                'label' => 'Статус',
                'value' => function($data) {
                    return $data->winner === 1 ? 'Победа' : 'Поражение';
                }
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
