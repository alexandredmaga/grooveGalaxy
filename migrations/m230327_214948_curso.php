<?php

use yii\db\Migration;

/**
 * Class m230327_214948_curso
 */
class m230327_214948_curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('curso', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'instrumento_fk' => $this->integer(),
            'professor_fk' => $this->integer(),
            'tipo' => $this->string(),
        ]);

        $this->addForeignKey('fk_instrumento','curso','instrumento_fk','instrumento','id');
        $this->addForeignKey('fk_professor','curso','professor_fk','usuario','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropForeignKey('fk_instrumento');
         $this->dropForeignKey('fk_professor');

         $this->dropTable('curso');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_214948_curso cannot be reverted.\n";

        return false;
    }
    */
}
