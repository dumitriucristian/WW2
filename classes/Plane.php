<?php


class Plane extends  Unit
{

    public function __construct()
    {
        parent::__construct();
        $this->life = 50;
        $this->attackPower = 15;
    }

    public function setAttackEfficiency()
    {
        $efficiency = [
            "soldier" => 0.1,
            "tank"  => 0.5,
            "plane" => 1
        ];

        $this->attackEfficiency = $efficiency;
    }

}