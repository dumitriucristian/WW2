<?php


abstract class Unit
{
    protected $life;
    public $attackPower;
    public $attackEfficiency;

    public function __construct()
    {
        $this->attackEfficency = $this->setAttackEfficiency();
        $this->attackPower = $this->getAttackPower();
    }

    public function getLife()
    {
        return $this->life;
    }

    protected function setLife( $lifeValue )
    {
        $this->life = $lifeValue;
    }

    private function getAttackPower()
    {
        return $this->attackPower;
    }

    public function getAttackEfficiency()
    {
        return $this->attackEfficiency;
    }

    public function receiveAttack( $attackStrength )
    {
        $this->setLife($this->life - $attackStrength );
    }












}