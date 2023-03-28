<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagamento".
 *
 * @property int $id
 * @property int|null $confirmacao
 * @property int|null $matricula_fk_usuario
 * @property int|null $matricula_fk_curso
 *
 * @property Matricula $matriculaFkUsuario
 */
class Pagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['confirmacao', 'matricula_fk_usuario', 'matricula_fk_curso'], 'integer'],
            [['matricula_fk_usuario', 'matricula_fk_curso'], 'exist', 'skipOnError' => true, 'targetClass' => Matricula::class, 'targetAttribute' => ['matricula_fk_usuario' => 'id_usuario', 'matricula_fk_curso' => 'id_curso']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'confirmacao' => 'Confirmacao',
            'matricula_fk_usuario' => 'Matricula Fk Usuario',
            'matricula_fk_curso' => 'Matricula Fk Curso',
        ];
    }

    /**
     * Gets query for [[MatriculaFkUsuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculaFkUsuario()
    {
        return $this->hasOne(Matricula::class, ['id_usuario' => 'matricula_fk_usuario', 'id_curso' => 'matricula_fk_curso']);
    }
}
