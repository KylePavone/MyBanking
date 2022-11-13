<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account}}`.
 */
class m221113_001720_create_account_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand('CREATE TABLE "Account" (
            "id" serial NOT NULL,
            PRIMARY KEY ("id"),
            "user_id" integer NOT NULL,
            "amount" integer DEFAULT 0 NOT NULL,
            "name" character varying(52) NULL,
            "uid" integer NULL
        ) WITH (oids = false)')->execute();

        Yii::$app->db->createCommand('ALTER TABLE ONLY "Account" ADD CONSTRAINT "Account_user_id_fkey" FOREIGN KEY (user_id) REFERENCES "User"(id) ON UPDATE CASCADE ON DELETE CASCADE NOT DEFERRABLE')->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Account}}');
    }
}
