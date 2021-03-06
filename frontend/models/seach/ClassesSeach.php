<?php

namespace app\models\seach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Classes;

/**
 * ClassesSeach represents the model behind the search form about `app\models\Classes`.
 */
class ClassesSeach extends Classes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'school_id', 'num_class'], 'integer'],
            [['letter'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Classes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'school_id' => $this->school_id,
            'num_class' => $this->num_class,
        ]);

        $query->andFilterWhere(['like', 'letter', $this->letter]);

        return $dataProvider;
    }
}
