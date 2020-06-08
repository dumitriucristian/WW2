<?php


class Attack
{
    private $attacker;
    private $defender;
    private $strength;

    public function __construct($attacker, $target)
    {
        $this->attacker = $attacker;
        $this->defender = $target;
        $this->setStrength($attacker, $target);
        $this->strength = $this->getStrength();
        $target->receiveAttack($this->strength);
    }


    public function setStrength($attacker)
    {
        $this->strength =  $attacker->attackPower * $this->attackEfficiency();
    }

    public function getStrength()
    {
        return $this->strength;
    }

    private function attackerType()
    {
        return strtolower(get_class($this->attacker));
    }

    private function defenderType()
    {
        return strtolower(get_class($this->defender));
    }

    private function attackEfficiency()
    {
        return $this->attacker->attackEfficiency[$this->defenderType()];
    }







}