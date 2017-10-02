<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public static function winLossRatio($matches)
    {
        $teamsRatio = [];

        foreach ($matches as $match)
        {
            if($match->MatchIsFinished)
            {
                $matchResult = $match->MatchResults[1];
                if ($matchResult->PointsTeam1 > $matchResult->PointsTeam2)
                {
                    static::setWinner($teamsRatio, $match->Team1);
                    static::setLooser($teamsRatio, $match->Team2);
                }else if($matchResult->PointsTeam2 > $matchResult->PointsTeam1){
                    static::setWinner($teamsRatio, $match->Team2);
                    static::setLooser($teamsRatio, $match->Team1);
                }
            }
        }

        return $teamsRatio;
    }

    private static function setWinner(&$teamsRatio, $team)
    {
        if(!isset($teamsRatio[$team->TeamId]['win']))
        {
            $teamsRatio[$team->TeamId]['name'] = $team->TeamName;
            $teamsRatio[$team->TeamId]['win'] = 1;
            $teamsRatio[$team->TeamId]['total'] = 1;
        }else{
            $teamsRatio[$team->TeamId]['win']++;
            $teamsRatio[$team->TeamId]['total']++;
        }
    }

    private static function setLooser(&$teamsRatio, $team)
    {
        if(!isset($teamsRatio[$team->TeamId]['total']))
        {
            $teamsRatio[$team->TeamId]['name'] = $team->TeamName;
            $teamsRatio[$team->TeamId]['win'] = 0;
            $teamsRatio[$team->TeamId]['total'] = 1;
        }else{
            $teamsRatio[$team->TeamId]['total']++;
        }
    }
}
