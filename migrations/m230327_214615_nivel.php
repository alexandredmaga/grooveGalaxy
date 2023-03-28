<?php

use yii\db\Migration;

/**
 * Class m230327_214615_nivel
 */
class m230327_214615_nivel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nivel', [
            'id' => $this->primaryKey(),
            'nivel' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('nivel');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_214615_nivel cannot be reverted.\n";

        return false;
    }
    */
}
