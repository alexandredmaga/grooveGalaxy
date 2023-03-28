<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matricula".
 *
 * @property int $id_usuario
 * @property int $id_curso
 * @property string|null $data
 *
 * @property Curso $curso
 * @property Pagamento[] $pagamentos
 * @property Usuario $usuario
 */
class Matricula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matricula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_curso'], 'required'],
            [['id_usuario', 'id_curso'], 'integer'],
            [['data'], 'safe'],
            [['id_usuario', 'id_curso'], 'unique', 'targetAttribute' => ['id_usuario', 'id_curso']],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['id_usuario' => 'id']],
            [['id_curso'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['id_curso' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'id_curso' => 'Id Curso',
            'data' => 'Data',
        ];
    }

    /**
     * Gets query for [[Curso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::class, ['id' => 'id_curso']);
    }

    /**
     * Gets query for [[Pagamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagamentos()
    {
        return $this->hasMany(Pagamento::class, ['matricula_fk_usuario' => 'id_usuario', 'matricula_fk_curso' => 'id_curso']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'id_usuario']);
    }
}
