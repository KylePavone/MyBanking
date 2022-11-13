<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m221113_003230_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand('CREATE TABLE "Transaction" (
            "id" serial  NOT NULL,
            PRIMARY KEY ("id"),
            "account_id" integer NOT NULL,
            "sum" real DEFAULT 0 NOT NULL,
            "type" character varying(52) NULL
        ) WITH (oids = false)')->execute();

        Yii::$app->db->createCommand('ALTER TABLE ONLY "Transaction" ADD CONSTRAINT "Transaction_account_id_fkey" FOREIGN KEY (account_id) REFERENCES "Account"(id) ON UPDATE CASCADE ON DELETE CASCADE NOT DEFERRABLE')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction}}');
    }
}
