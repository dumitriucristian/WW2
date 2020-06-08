<?php


abstract class Unit
{
    protected $life;
    protected $attackPower;
    protected $unitType;


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

    private function getAttackEfficiency($target){
        if( $this->unitType == $target->unitType || 
            $this->unitType != 'Soldier')   return 1;

        switch (true) {
            case ($this->unitType == 'Soldier' and $target->unitType == 'Plane'):
                return .1;
                break;
            case ($this->unitType == 'Soldier' and $target->unitType == 'Tank');
                return .5;
                break;
            default:
                break;
        }

        return;
    }

    public function attack($target)
    {
        $damagedDealt = $this->attackPower * $this->getAttackEfficiency($target);
        $newTargetsLife = $target->getLife() - $damagedDealt;
        if($newTargetsLife <= 0)
            // Kill the target
            print "Killed";

        $target->setLife($newTargetsLife);
    }






}