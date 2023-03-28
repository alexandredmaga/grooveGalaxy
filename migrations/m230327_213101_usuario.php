<?php

use yii\db\Migration;

/**
 * Class m230327_213101_usuario
 */
class m230327_213101_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'senha' => $this->string(),
            'email' => $this->string(),
            'telefone' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('cliente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_213101_usuario cannot be reverted.\n";

        return false;
    }
    */
}
