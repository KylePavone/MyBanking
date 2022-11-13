<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<p>Вы создали счет с именем: <?= Html::encode($accForm->name) ?></p>

<a href="<?= Url::to(['user/view', 'id' => $model->user_id]) ?>">В кабинет</a>