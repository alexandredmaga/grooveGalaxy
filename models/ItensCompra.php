<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_compra".
 *
 * @property int|null $compra_id
 * @property int|null $produto_id
 * @property int|null $quantidade
 *
 * @property Compra $compra
 * @property Produto $produto
 */
class ItensCompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['compra_id', 'produto_id', 'quantidade'], 'integer'],
            [['compra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compra::class, 'targetAttribute' => ['compra_id' => 'id']],
            [['produto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::class, 'targetAttribute' => ['produto_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'compra_id' => 'Compra ID',
            'produto_id' => 'Produto ID',
            'quantidade' => 'Quantidade',
        ];
    }

    /**
     * Gets query for [[Compra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompra()
    {
        return $this->hasOne(Compra::class, ['id' => 'compra_id']);
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::class, ['id' => 'produto_id']);
    }
}
