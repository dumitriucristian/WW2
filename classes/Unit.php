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

    //LIFE AFTER A UNIT ATTACKS OR IT'S ATTACKED
    public function setLifeAfterAttack($enemyAttack)
    {

        $lifeValue = $this->life - $enemyAttack;
        $this->setLife($lifeValue);

    }

    //AN UNIT ATACKS AN ENEMY UNIT
    public function attack($target)
    {

        $target->setLifeAfterAttack($this->getDamageInflictedToEnemy($target->attackType));
        $this->setLifeAfterAttack($this->getDamageInflictedToMyUnit($target));

    }


    //DAMAGE INFLICTED TO THE ENEMY WHEN THE FRIENDLY UNIT ATTACKS OR THE FRIENDLY UNIT IS ATTACKED
    private function getDamageInflictedToEnemy($enemyAttackType)
    {
        
        return $this->attackPower * $this->setAttackEfficency($enemyAttackType);

    }

    //DAMAGE INFLICTED TO THE FRIENDLY UNIT WHEN THE FRIENDLY UNIT ATTACKS OR THE FRIENDLY UNIT IS ATTACKED
    private function getDamageInflictedToMyUnit($enemyObject)
    {
        
        return $enemyObject->attackPower * $enemyObject->setAttackEfficency($this->attackType);

    }


    abstract protected function setAttackEfficency($enemyAttackType);



}