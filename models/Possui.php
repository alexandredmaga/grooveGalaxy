<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "possui".
 *
 * @property int $id_curso
 * @property int $id_videoaula
 *
 * @property Curso $curso
 * @property Videoaula $videoaula
 */
class Possui extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'possui';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_curso', 'id_videoaula'], 'required'],
            [['id_curso', 'id_videoaula'], 'integer'],
            [['id_curso', 'id_videoaula'], 'unique', 'targetAttribute' => ['id_curso', 'id_videoaula']],
            [['id_videoaula'], 'exist', 'skipOnError' => true, 'targetClass' => Videoaula::class, 'targetAttribute' => ['id_videoaula' => 'id']],
            [['id_curso'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['id_curso' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_curso' => 'Id Curso',
            'id_videoaula' => 'Id Videoaula',
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
     * Gets query for [[Videoaula]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideoaula()
    {
        return $this->hasOne(Videoaula::class, ['id' => 'id_videoaula']);
    }
}
