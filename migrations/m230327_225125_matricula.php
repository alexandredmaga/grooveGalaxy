<?php

use yii\db\Migration;

/**
 * Class m230327_225125_matricula
 */
class m230327_225125_matricula extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('matricula', [            
            'id_usuario' => $this->integer(),
            'id_curso' => $this->integer(),
            'data' =>$this->date(),
        ]);


        $this->addPrimaryKey('pk-matricula', 'matricula', ['id_usuario', 'id_curso']);
        $this-> addForeignKey('fk_matricula','matricula','id_usuario','usuario','id');
        $this-> addForeignKey('fk_matricula_curso','matricula','id_curso','curso','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('pk-matricula', 'matricula');
        $this->dropForeignKey('fk_matricula', 'matricula');
        $this->dropForeignKey('fk_matricula_curso', 'matricula');   
        $this->dropTable('matricula');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_225125_matricula cannot be reverted.\n";

        return false;
    }
    */
}
