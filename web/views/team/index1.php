<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отчёт';
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'name',
            [
                'label' => 'Место',
                'value' => function($data){
                    return \app\models\Team::Rank($data);
                }
            ],
            [
                'label' => 'Очки',
                'value' => function($data){
                    return \app\models\Team::Scores($data);
                }
            ],
            [
                'label' => 'Всего голов',
                'value' => function($data){
                    return \app\models\Team::Score($data);
                }
            ],
            [
                'label' => 'Макс голов',
                'value' => function($data){
                    return \app\models\Team::Score_max($data);
                }
            ],
            [
                'label' => 'В среднем голов',
                'value' => function($data){
                    return \app\models\Team::Score_avg($data);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
