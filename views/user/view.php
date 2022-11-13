<?php 
use yii\helpers\Url;

$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'css/user.css',
]);
?>
<div class="user__body">
    <h2><?= $user->name ?></h2>
    <h5 class="user__accounts">Счета:</h5>
    <ul class="user__list">
    <?php foreach($user->account as $acc): ?>
        <li class="user__item">
        <a href="<?= Url::to(['user/set-balance', 'id' => $acc->id]) ?>" class="user__link"><?= $acc->name; ?>:</a>
        <?= $acc->amount; ?> руб.
        <p>uid: <?= $acc->uid ?><br><a href="<?= Url::to(['user/operations', 'id' => $acc->id]) ?>">История операций</a></p>
        </li>
    <?php endforeach; ?>
    </ul>
    <div class="links__body">
        <a href="<?= Url::to(['user/account-create', 'id' => $user['id']]) ?>" class="create-account">Создать счет</a>
        <a href="<?= Url::to(['user/transaction']) ?>">Перевести деньги</a>
    </div>
</div>

