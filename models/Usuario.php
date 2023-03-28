<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nome
 * @property string|null $senha
 * @property string|null $email
 * @property string|null $telefone
 *
 * @property Curso[] $cursos
 * @property Curso[] $cursos0
 * @property Matricula[] $matriculas
 * @property Videoaula[] $videoaulas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome', 'senha', 'email', 'telefone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'senha' => 'Senha',
            'email' => 'Email',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Curso::class, ['professor_fk' => 'id']);
    }

    /**
     * Gets query for [[Cursos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos0()
    {
        return $this->hasMany(Curso::class, ['id' => 'id_curso'])->viaTable('matricula', ['id_usuario' => 'id']);
    }

    /**
     * Gets query for [[Matriculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculas()
    {
        return $this->hasMany(Matricula::class, ['id_usuario' => 'id']);
    }

    /**
     * Gets query for [[Videoaulas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideoaulas()
    {
        return $this->hasMany(Videoaula::class, ['professor_fk' => 'id']);
    }
}
