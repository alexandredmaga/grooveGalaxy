<?php

use yii\db\Migration;

/**
 * Class m230327_231711_pagamento
 */
class m230327_231711_pagamento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('pagamento', [
            'id' => $this->primaryKey(),
            'confirmacao' => $this->boolean(),
            'matricula_fk_usuario' => $this->integer(),
            'matricula_fk_curso' => $this->integer(),
        ]);

        $this->addForeignKey('fk_matricula_pagamento','pagamento',['matricula_fk_usuario', 'matricula_fk_curso'],'matricula',['id_usuario', 'id_curso']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropForeignKey('fk_matricula_pagamento', 'matricula');

         $this->dropTable('pagamento');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230327_231711_pagamento cannot be reverted.\n";

        return false;
    }
    */
}
