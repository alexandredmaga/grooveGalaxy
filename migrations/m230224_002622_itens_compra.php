<?php

use yii\db\Migration;

/**
 * Class m230224_002622_itens_compra
 */
class m230224_002622_itens_compra extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('itens_compra', [
            'compra_id' => $this->integer(),
            'produto_id' => $this->integer(),
            'quantidade' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk_compra_id',
            'itens_compra',
            'compra_id',
            'compra',
            'id'
        );

        $this->addForeignKey(
            'fk_produto_id',
            'itens_compra',
            'produto_id',
            'produto',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_compra_id',
            'itens_compra'
        );

        $this->dropForeignKey(
            'fk_produto_id',
            'itens_compra'
        );

        $this->dropTable('itens_compra');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230224_002622_itens_compra cannot be reverted.\n";

        return false;
    }
    */
}
