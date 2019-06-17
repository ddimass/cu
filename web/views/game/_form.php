<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Game */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="game-form">

    <?php $form = ActiveForm::begin();
    $params = [
        'prompt' => 'Выберите команду'
    ];
    ?>

    <?= $form->field($model, 'team_one_id')->dropDownList($teams,$params); ?>

    <?= $form->field($model, 'team_two_id')->dropDownList($teams,$params); ?>

    <?= $form->field($model, 'game_no')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
