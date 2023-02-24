<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property int $id
 * @property string|null $data_compra
 * @property float|null $valor_total
 * @property int|null $cliente_id
 *
 * @property Cliente $cliente
 * @property ItensCompra[] $itensCompras
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_compra'], 'safe'],
            [['valor_total'], 'number'],
            [['cliente_id'], 'integer'],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['cliente_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data_compra' => 'Data Compra',
            'valor_total' => 'Valor Total',
            'cliente_id' => 'Cliente ID',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['id' => 'cliente_id']);
    }

    /**
     * Gets query for [[ItensCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItensCompras()
    {
        return $this->hasMany(ItensCompra::class, ['compra_id' => 'id']);
    }
}
