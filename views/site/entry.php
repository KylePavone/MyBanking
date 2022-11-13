<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/*@var $this yii\web\View*/
$this->title = "Brazilia";
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        <p>Просто чтобы знали <?= Html::encode($this->context->id) ?> - сучья страна</p>
    </div>

<?php ActiveForm::end(); ?>
