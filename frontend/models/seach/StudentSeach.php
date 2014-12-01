<?php

namespace app\models\seach;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSeach represents the model behind the search form about `app\models\Student`.
 */
class StudentSeach extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'class_id'], 'integer'],
            [['name'], 'safe'],
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
        $query = Student::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'class_id' => $this->class_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
