<?php


class Bomber extends Plane
{
    public function __construct()
    {
        $this->life = 80;
        $this->attackPower = 30;
        $this->unitType = 'Plane';
    }

}