<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kepribadian;

/**
 * KepribadianSearch represents the model behind the search form of `backend\models\Kepribadian`.
 */
class KepribadianSearch extends Kepribadian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDKEPRIBADIAN'], 'integer'],
            [['NAMAKEPRIBADIAN', 'DESKRIPSIKEPRIBADIAN'], 'safe'],
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
        $query = Kepribadian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'IDKEPRIBADIAN' => $this->IDKEPRIBADIAN,
        ]);

        $query->andFilterWhere(['like', 'NAMAKEPRIBADIAN', $this->NAMAKEPRIBADIAN])
            ->andFilterWhere(['like', 'DESKRIPSIKEPRIBADIAN', $this->DESKRIPSIKEPRIBADIAN]);

        return $dataProvider;
    }
}