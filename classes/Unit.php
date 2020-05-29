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

    public function getAttackEfficiency($target){
        if(get_class($this) === get_class($target) || get_class($this) != 'Soldier')
            return 1;
        $attackerClass = get_class($this);
        $targetClass = get_class($target);

        switch (true) {
            case ($attackerClass == 'Soldier' and $targetClass == 'Plane'):
                return .1;
                break;
            case ($attackerClass == 'Soldier' and $targetClass == 'Tank');
                return .5;
                break;
            default:
                break;
        }

        return;
    }

    public function defense($enemyAttack)
    {
        $lifeValue = $this->life - $enemyAttack;
        $this->setLife($lifeValue);
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