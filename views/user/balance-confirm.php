<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<p>Вы пополнили счет</p>
<a href="<?= Url::to(['user/view', 'id' => $account['user_id']]) ?>">В кабинет</a>