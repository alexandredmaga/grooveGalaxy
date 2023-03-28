<?php

use yii\db\Migration;

/**
 * Class m230327_224322_videoaula
 */
class m230327_224322_videoaula extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('videoaula', [
            'id' => $this->primaryKey(),
            'titulo' => $this->string()->notNull(),
            'duracao' => $this->string(),
            'instrumento_fk' => $this->integer(),
            'professor_fk' => $this->integer(),
        ]);

        $this->addForeignKey('fk_instrumento_videoaula','videoaula','instrumento_fk','instrumento','id');
        $this->addForeignKey('fk_professor_videoaula','videoaula','professor_fk','usuario','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropForeignKey('fk_instrumento_videoaula');
         $this->dropForeignKey('fk_professor_videoaula');

         $this->dropTable('videoaula');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_224322_videoaula cannot be reverted.\n";

        return false;
    }
    */
}
