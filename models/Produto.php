<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string|null $descricao
 * @property float|null $valor
 *
 * @property ItensCompra[] $itensCompras
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor'], 'number'],
            [['descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'valor' => 'Valor',
        ];
    }

    /**
     * Gets query for [[ItensCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItensCompras()
    {
        return $this->hasMany(ItensCompra::class, ['produto_id' => 'id']);
    }
}
