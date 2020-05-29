<?php


class Plane extends  Unit
{

    public function __construct()
    {
        $this->life = 50;
        $this->attackPower = 15;
        $this->attackType = "plane";
    }

    public function setAttackPower($enemyType)
    {
        switch ($enemyType) {
            case "soldier":
                $efficiency = 0.1;
                break;
            case "tank":
                $efficiency = 0.5 ;
                break;
            case "plane":
                $efficiency = 1 ;
                break;
            default:
                $efficiency = 1;
        }

        return $this->attackPower * $efficiency;
    }

}