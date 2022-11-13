<?php

namespace app\controllers;

use app\models\UserModel;
use app\models\Account;
use app\models\Transaction;
use yii\web\Controller;
use app\models\TransactionForm;
use app\models\AccountForm;
use app\models\BalanceForm;
use Yii;


class UserController extends Controller {
    public function actionIndex() {
        $users = Yii::$app->db->createCommand('SELECT * FROM "User"')->queryAll();
        
        return $this->render('index', ['users' => $users]);
    }

    public function actionInfo() {
        $allinfo = UserModel::find()->with('account')->all();
        
        return $this->render('info', ['allinfo' => $allinfo]);
    }


    public function actionView($id) {
        $user = UserModel::findOne($id);

        return $this->render('view', ['user' => $user]);
    }

    
    public function actionAccountCreate($id) {
        $model = new Account();
        $accForm = new AccountForm();

        if ($accForm->load(Yii::$app->request->post()) && $accForm->validate()) {
            $model->user_id = $id;
            $model->name = $accForm->name;
            $model->uid = rand(100000, 999999);
            $model->save();
            return $this->render('account-confirm', ['accForm' => $accForm, 'model' => $model]);
        } else {
            return $this->render('account-create', ['accForm' => $accForm]);
        }
    }


    public function actionTransaction() {
        $model = new TransactionForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('transaction-confirm', ['model' => $model]);
        } else {
            return $this->render('transaction', ['model' => $model]);
        }
    }


    public function actionSetBalance($id) {
        $balanceForm = new BalanceForm();
        $account = Account::findOne($id);
        $transaction = new Transaction();
        if ($balanceForm->load(Yii::$app->request->post()) && $balanceForm->validate()) {
            $account->amount += $balanceForm->sum;
            $account->save();
            $transaction->account_id = $id;
            $transaction->sum = $balanceForm->sum;
            $transaction->type = "Зачислено";
            $transaction->save();
            return $this->render('balance-confirm', ['balanceForm' => $balanceForm, 'account' => $account]);
        } else {
            return $this->render('set-balance', ['balanceForm' => $balanceForm, 'account' => $account]);
        }
    }


    public function actionOperations($id) {
        $account = Account::findOne($id);
        /*$transactions = Account::find()->with('transaction')->all();*/
        return $this->render('operations', ['account' => $account]);
    }
}

/*SELECT "User".name, "User".surname, "Account".amount FROM "User" JOIN "Account" ON
"User".id = "Account".user_id
WHERE "User".id = 1;*/