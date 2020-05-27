<?php

abstract class Planes
{

    protected $namePlane;
    protected $factionPlane;
    protected $speedPlane;
    protected $lifePlane;
    protected $defensePlane;
    protected $attackTypePlane;
    protected $attackPointsPlane;

    function __construct(string $namePlane,string $factionPlane,int $speedPlane,int $lifePlane,int $defensePlane)
    {

        $this->namePlane = $namePlane;
        $this->factionPlane = $factionPlane;
        $this->speedPlane = $speedPlane;
        $this->lifePlane = $lifePlane;
        $this->defensePlane =$defensePlane;

    }


    abstract function getAttack(int $attackPointsPlane) :void;


}


//FIGHTERS NEED TO BE FAST BUT WITH LESS LIFE
class Fighter extends Planes
{


    public function getAttack(int $attackPointsPlane) :void
    {

        $this->attackTypePlane = "shooting";
        $this->$attackPointsPlane = $attackPointsPlane;

    }


}


//BOMBERS NEED TO ATTACK SOLDIERS AND TANKS THEY HAVE A LOT OF LIFE BUT NOT SPEED
class Bomber extends Planes
{

    public function getAttack(int $attackPointsPlane) :void
    {

        $this->attackTypePlane = "bombing";
        $this->$attackPointsPlane = $attackPointsPlane;

    }

}