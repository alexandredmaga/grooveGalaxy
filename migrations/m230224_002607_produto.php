<?php

use yii\db\Migration;

/**
 * Class m230224_002607_produto
 */
class m230224_002607_produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('produto', [
            'id' => $this->primaryKey(),
            'descricao' => $this->string(),
            'valor' => $this->money(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('produto');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230224_002607_produto cannot be reverted.\n";

        return false;
    }
    */
}
