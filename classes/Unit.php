<?php


abstract class Unit
{
    protected $life;
    protected $attackPower;

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

    public function attack($enemyAttack)
    {
        $lifeValue = $this->life - $enemyAttack;
        $this->setLife($lifeValue);
    }


}