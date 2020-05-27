<?php


class Plane extends  Unit
{
    public function __construct()
    {
        $this->life = 50;
        $this->attackPower = 15;
    }

}