<?php

use yii\db\Migration;

/**
 * Class m230327_214029_instrumento
 */
class m230327_214029_instrumento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('instrumento', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropTable('instrumento');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_214029_instrumento cannot be reverted.\n";

        return false;
    }
    */
}
