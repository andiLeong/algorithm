<?php

namespace App\AlgoExpert;

class TournamentWinner
{
    public static function calculate($competition, $result)
    {
        $finalWinner = '';
        $lists = [];
        foreach ($competition as $index => $value) {
            $winner = $result[$index] === 0 ? $value[1] : $value[0];

            if(array_key_exists($winner, $lists)){
                $lists[$winner] += 3;
            }else{
                $lists[$winner] = 3;
            }

            if($finalWinner === ''){
                $finalWinner = $winner;
            }else if( $lists[$finalWinner] < $lists[$winner] && $finalWinner !== $winner) {
                $finalWinner = $winner;
            }
        }

        return $finalWinner;
    }
}