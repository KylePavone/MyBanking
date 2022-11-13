<?php 
use yii\helpers\Url;

$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'css/user.css',
]);
?>
<h2>История операций</h2>
<div class="operations__info-account"><?= $account->name ?> <?= $account->uid ?></div>
<div class="operations__body">
<ul class="operations__list">
    <?php foreach($account->transaction as $trans): ?>
        <li class="operations__item">
            <span class="operations__type"><?= $trans->type ?> - </span>
            <span class="operations__sum"><?= $trans->sum ?>руб.</span>
        </li>
    <?php endforeach; ?>
</ul>
</div>
