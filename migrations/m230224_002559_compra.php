<?php

use yii\db\Migration;

/**
 * Class m230224_002559_compra
 */
class m230224_002559_compra extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('compra', [
            'id' => $this->primaryKey(),
            'data_compra' => $this->date(),
            'valor_total' => $this->money(),
            'cliente_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk_cliente_id',
            'compra',
            'cliente_id',
            'cliente',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_cliente_id',
            'compra'
        );

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230224_002559_compra cannot be reverted.\n";

        return false;
    }
    */
}
