<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $id
 * @property int $score
 * @property int $score_extra
 * @property int $team_id
 * @property int $winner 0-loose, 1-winner
 * @property int $game_id
 *
 * @property Game $game
 * @property Team $team
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['score', 'score_extra', 'team_id', 'winner', 'game_id'], 'required'],
            [['score', 'score_extra', 'team_id', 'winner', 'game_id'], 'integer'],
            [['game_id'], 'exist', 'skipOnError' => true, 'targetClass' => Game::className(), 'targetAttribute' => ['game_id' => 'id']],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'score' => 'Score',
            'score_extra' => 'Score Extra',
            'team_id' => 'Team ID',
            'winner' => 'Winner',
            'game_id' => 'Game ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGame()
    {
        return $this->hasOne(Game::className(), ['id' => 'game_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Team::className(), ['id' => 'team_id']);
    }
}
