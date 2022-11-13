<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Transaction;


class Account extends ActiveRecord {
    public static function tableName()
    {
        return 'Account';
    }


    public function getTransaction()
    {
        return $this->hasMany(Transaction::className(), ['account_id' => 'id']);
    }
}