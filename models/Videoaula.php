<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "videoaula".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $duracao
 * @property int|null $instrumento_fk
 * @property int|null $professor_fk
 *
 * @property Curso[] $cursos
 * @property Instrumento $instrumentoFk
 * @property Possui[] $possuis
 * @property Usuario $professorFk
 */
class Videoaula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'videoaula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'professor_fk'], 'required'],
            [['instrumento_fk', 'professor_fk'], 'integer'],
            [['titulo', 'duracao'], 'string', 'max' => 255],
            [['instrumento_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Instrumento::class, 'targetAttribute' => ['instrumento_fk' => 'id']],
            [['professor_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['professor_fk' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'duracao' => 'Duracao',
            'instrumento_fk' => 'Instrumento',
            'professor_fk' => 'Professor',
        ];
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Curso::class, ['id' => 'id_curso'])->viaTable('possui', ['id_videoaula' => 'id']);
    }

    /**
     * Gets query for [[InstrumentoFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstrumento()
    {
        return $this->hasOne(Instrumento::class, ['id' => 'instrumento_fk']);
    }

    /**
     * Gets query for [[Possuis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPossuis()
    {
        return $this->hasMany(Possui::class, ['id_videoaula' => 'id']);
    }

    /**
     * Gets query for [[ProfessorFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfessor()
    {
        return $this->hasOne(Usuario::class, ['id' => 'professor_fk']);
    }
}
