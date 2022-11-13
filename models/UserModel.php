<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Account;


class UserModel extends ActiveRecord {
    public static function tableName()
    {
        return 'User';
    }

    public function getAccount()
    {
        return $this->hasMany(Account::className(), ['user_id' => 'id']);
    }

    
}