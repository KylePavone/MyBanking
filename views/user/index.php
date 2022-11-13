<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php 
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'css/user.css',
]);
?>
<?php
?>
<div class="bank__body">
    <h2 class="bank__title">CLIENTS</h2>
    <ul class="bank__list">
    <?php foreach($users as $user): ?>
        <li class="bank__item">
            <a href="<?= Url::to(['user/view', 'id' => $user['id']]) ?>" class="bank__link"><?= $user['name'] . " " . $user['surname'] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</div>


