<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property int $id
 * @property int $team_one_id
 * @property int $team_two_id
 * @property int $game_no
 *
 * @property Team $teamOne
 * @property Team $teamTwo
 * @property Result[] $results
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['team_one_id', 'team_two_id', 'game_no'], 'required'],
            [['team_one_id', 'team_two_id', 'game_no'], 'integer'],
            [['team_one_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_one_id' => 'id']],
            [['team_two_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_two_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team_one_id' => 'Team One ID',
            'team_two_id' => 'Team Two ID',
            'game_no' => 'Game No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamOne()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_one_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamTwo()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_two_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Result::className(), ['game_id' => 'id']);
    }
}
