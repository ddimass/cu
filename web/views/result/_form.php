<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Result */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-form">

    <?php $form = ActiveForm::begin();

    ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'score_extra')->textInput() ?>

    <?= $form->field($model, 'team_id')->dropDownList($teams, [
        'prompt' => 'Выберите команду'
    ]); ?>

    <?= $form->field($model, 'winner')->dropDownList([
            '0' => 'Поражение',
            '1' => 'Победа'
    ], [
        'prompt' => 'Выберите'
    ]) ?>

    <?= $form->field($model, 'game_id')->dropDownList($games, [
        'prompt' => 'Выберите игру'
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
