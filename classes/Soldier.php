<?php


class Soldier extends Unit
{

    public function __construct()
    {
        $this->life = 25;
        $this->attackPower = 5;
    }

    public function setAttack($enemyType)
    {
        switch ($enemyType) {
            case "soldier":
                $efficiency = 1;
                break;
            case "tank":
                $efficiency = 0.5;
                break;
            case "plane":
                $efficiency = 0.1 ;
                break;
            default:
                $efficiency = 1;
        }

        return $this->attackPower * $efficiency;
    }







}