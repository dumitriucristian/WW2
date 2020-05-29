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

    public function setLifeAfterAttack($enemyAttack)
    {
        $lifeValue = $this->life - $enemyAttack;
        $this->setLife($lifeValue);
    }

    //A FRIENDLY UNIT ATACKS AN ENEMY UNIT
    public function attack($target)
    {

        $target->setLifeAfterAttack($this->getDamageInflictedToEnemy($target->attackType));
    }


    //DAMAGE INFLICTED TO THE ENEMY WHEN THE FRIENDLY UNIT ATTACKS OR THE FRIENDLY UNIT IS ATTACKED
    private function getDamageInflictedToEnemy($enemyAttackType)
    {
        
        return $this->attackPower * $this->setAttackEfficency($enemyAttackType);
    }


    abstract protected function setAttackEfficency($enemyAttackType);



}