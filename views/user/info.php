<?php
use yii\helpers\Html;
?>

<h1>Accounts Info</h1>
<br><br><br><br><br>
<?php foreach ($allinfo as $info): ?>
    <tr>
        <td><?= $info->name ?></td>
        <td>
             <ul>
                  <?php foreach ($info->account as $a): ?>
                        <li>
                        <?php echo $a->name; ?>
                        <?php echo $a->amount; ?>
                        </li>
                  <? endforeach;?>
            </ul>
        </td>
      
    </tr>
    <?php endforeach; ?>