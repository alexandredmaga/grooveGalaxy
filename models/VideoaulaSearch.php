<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Videoaula;

/**
 * VideoaulaSearch represents the model behind the search form of `app\models\Videoaula`.
 */
class VideoaulaSearch extends Videoaula
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'instrumento_fk', 'professor_fk'], 'integer'],
            [['titulo', 'duracao'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Videoaula::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith(['instrumento']);

        $dataProvider->sort->attributes['instrumento.nome'] = [
            'asc' => ['instrumento.nome' => SORT_ASC],
            'desc' => ['instrumento.nome' => SORT_DESC],
        ];



        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'instrumento_fk' => $this->instrumento_fk,
            'professor_fk' => $this->professor_fk,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'duracao', $this->duracao]);

        return $dataProvider;
    }
}
