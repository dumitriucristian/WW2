<?php


abstract class Unit
{
    protected $life;
    protected $attackPower;
    protected $attackType;


    public function getLife()
    {
        return $this->life;
    }

    protected function setLife( $lifeValue )
    {
        $this->life = $lifeValue;
    }

    public function getAttackPower()
    {
        return $this->attackPower;
    }

    public function defense($enemyAttack)
    {
        $lifeValue = $this->life - $enemyAttack;
        $this->setLife($lifeValue);
    }

    public function attack($target)
    {

         $target->defense($this->attackPower);
    }






}