<?php

namespace app\models;

use yii\base\Model;


class AccountForm extends Model {
    public $name;

    public function rules() {
        return [
            [['name'], 'required']
        ];
    }
}