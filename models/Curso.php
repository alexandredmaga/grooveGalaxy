<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $id
 * @property string $nome
 * @property int|null $instrumento_fk
 * @property int|null $professor_fk
 * @property string|null $tipo
 *
 * @property Instrumento $instrumentoFk
 * @property Matricula[] $matriculas
 * @property Possui[] $possuis
 * @property Usuario $professorFk
 * @property Usuario[] $usuarios
 * @property Videoaula[] $videoaulas
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['instrumento_fk', 'professor_fk'], 'integer'],
            [['nome', 'tipo'], 'string', 'max' => 255],
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
            'nome' => 'Nome',
            'instrumento_fk' => 'Instrumento',
            'professor_fk' => 'Professor',
            'tipo' => 'Tipo',
        ];
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
     * Gets query for [[Matriculas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatriculas()
    {
        return $this->hasMany(Matricula::class, ['id_curso' => 'id']);
    }

    /**
     * Gets query for [[Possuis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPossuis()
    {
        return $this->hasMany(Possui::class, ['id_curso' => 'id'])->joinWith('videoaula');
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

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::class, ['id' => 'id_usuario'])->viaTable('matricula', ['id_curso' => 'id']);
    }

    /**
     * Gets query for [[Videoaulas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideoaulas()
    {
        return $this->hasMany(Videoaula::class, ['id' => 'id_videoaula'])->viaTable('possui', ['id_curso' => 'id']);
    }
}
