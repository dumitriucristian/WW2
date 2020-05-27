<?php

class Tank{
    public number $life;
    public number $attack;
    public number $defence;
    public number $moves;
    // TODO: id tank (variabila static in clasa abstracta?)

    protected bool $isDefending = true;
    protected $armorBonus = 20;

    function __construct($life = 78, $attack = 65, $defence = 175, $moves = 1)
    {
        $this->life = $life;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->moves = $moves;
    }

    function __destruct()
    {
        echo '<p class="alert"> A tank was destroyed! </p>';
    }

    public function move()
    {
        if($this->isDefending){
            $this->isDefending = false;
            $this->defence -= $this->armorBonus;
        }
        echo '<p>A tank has moves</p>';
    }

    public function attack($target){
        $target->life -= ($this->attack/$target->armor) * 100;
        if($targte->life <= 0){
            $target_>__destruct();
            unset($target);
        }
        echo '<p>A tank is destorying the enemy!</p>';
    }

    public function defence(){
        $this->isDefending = true;
        $this->defence += $this->armorBonus;
        echo '<p>A tank is ready to take a hit</p>';
    }
}