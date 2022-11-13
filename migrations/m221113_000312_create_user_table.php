<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m221113_000312_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand('CREATE TABLE "User" (
            "id" serial NOT NULL,
            PRIMARY KEY ("id"),
            "name" character varying(52) NOT NULL,
            "surname" character varying(52) NOT NULL
          )')->execute();

        $this->insert('{{%User}}', array(
            'name' => 'Иван',
            'surname' => 'Иванов',
        ));
        /*$this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
        ]);*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%User}}');
    }
}
