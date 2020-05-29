<?php


class Soldier extends Unit
{

    public function __construct()
    {
        $this->life = 25;
        $this->attackPower = 5;
    }

    //DAMAGE EFFICENCY AGAINST CERTAIN TYPE OF UNITS
    protected function setAttackEfficency($enemyAttackType)
    {
        switch ($enemyAttackType) {
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

        return $efficiency;
    }







}