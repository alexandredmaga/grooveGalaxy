<?php

use yii\db\Migration;

/**
 * Class m230224_002420_cliente
 */
class m230224_002420_cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('cliente', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'endereco' => $this->text(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropTable('news');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230224_002420_cliente cannot be reverted.\n";

        return false;
    }
    */
}
