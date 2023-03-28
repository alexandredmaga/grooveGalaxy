<?php

use yii\db\Migration;

/**
 * Class m230327_231103_possui
 */
class m230327_231103_possui extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('possui', [            
            'id_curso' => $this->integer(),
            'id_videoaula' => $this->integer(),
        ]);


        $this->addPrimaryKey('pk-possui', 'possui', ['id_curso', 'id_videoaula']);
        $this-> addForeignKey('fk_possui_curso','possui','id_curso','curso','id');
        $this-> addForeignKey('fk_possui','possui','id_videoaula','videoaula','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('pk-possui', 'possui');
        $this->dropForeignKey('fk_possui_curso', 'possui');   
        $this->dropForeignKey('fk_possui', 'possui');
        $this->dropTable('possui');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_231103_possui cannot be reverted.\n";

        return false;
    }
    */
}
