<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instrumento".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Curso[] $cursos
 * @property Videoaula[] $videoaulas
 */
class Instrumento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instrumento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Curso::class, ['instrumento_fk' => 'id']);
    }

    /**
     * Gets query for [[Videoaulas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideoaulas()
    {
        return $this->hasMany(Videoaula::class, ['instrumento_fk' => 'id']);
    }
}
