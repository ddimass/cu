<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 *
 * @property Game[] $games
 * @property Game[] $games0
 * @property Result[] $results
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames()
    {
        return $this->hasMany(Game::className(), ['team_one_id' => 'id']);
    }
    public static function Scores($data)
    {
        $sql = 'select * from result where team_id=:id and winner = :win';
        return Result::findBySql($sql, [':id'=>$data->id, ':win'=>1])->count() * 3;
    }
    public static function Score($data)
    {
        $sql = 'select sum(score) from result where team_id=:id';
        return Result::findBySql($sql, [':id'=>$data->id])->scalar();
    }
    public static function Score_max($data)
    {
        $sql = 'select max(score) from result where team_id=:id';
        return Result::findBySql($sql, [':id'=>$data->id])->scalar();
    }
    public static function Score_avg($data)
    {
        $sql = 'select avg(score) from result where team_id=:id';
        return Result::findBySql($sql, [':id'=>$data->id])->scalar();
    }
    public static function Rank($data)
    {
        $sql = 'select * from result where team_id=:id and winner = :win';
        $scores =  Result::findBySql($sql, [':id'=>$data->id, ':win'=>1])->count() * 3;
        $sql = 'select `team_one_id` from game where game_no=15';
        $team1 =  Game::findBySql($sql)->scalar();
        $sql = 'select team_two_id from game where game_no=15';
        $team2 =  Game::findBySql($sql)->scalar();
        if ($scores == 0) {
            return '16-8';
        }
        if ($scores == 3) {
            return '8-4';
        }
        if ($scores == 6) {
            return '4';
        }
        if ($scores == 9 and ($team1 == $data->id or $team2== $data->id)) {
            return '3';
        }
        if ($scores == 9) {
            return '2';
        }
        if ($scores == 12) {
            return '1';
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames0()
    {
        return $this->hasMany(Game::className(), ['team_two_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Result::className(), ['team_id' => 'id']);
    }
}
