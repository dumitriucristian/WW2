<?php


class Soldier extends Unit
{

    public function __construct()
    {
        parent::__construct();
        $this->life = 25;
        $this->attackPower = 5;
    }

    public function setAttackEfficiency()
    {
        $efficiency = [
            "soldier" => 1,
            "tank"  => 0.5,
            "plane" => 0.1
        ];

         $this->attackEffiency = $efficiency;
    }


}