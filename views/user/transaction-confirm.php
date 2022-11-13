<?php
use yii\helpers\Html;
?>

<p>Вы отправили: <?= Html::encode($model->sum) ?> рублей На счет <?= Html::encode($model->account_id) ?></p>

