<?php

namespace app\models;

use yii\base\Model;


class TransactionForm extends Model {
    public $my_account;
    public $sum;
    public $account_id;

    public function rules() {
        return [
            [['my_account', 'sum', 'account_id'], 'required']
        ];
    }
}