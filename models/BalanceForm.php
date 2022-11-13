<?php

namespace app\models;

use yii\base\Model;


class BalanceForm extends Model {

    public $sum;

    public function rules() {
        return [
            [['sum'], 'required']
        ];
    }
}