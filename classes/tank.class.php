<?php

class Tank{
    public $life;
    public $attack;
    public $defence;
    public $moves;
    // TODO: id tank (variabila static in clasa abstracta?)

    function __construct(number $life, number $attack, number $defence, number $moves)
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
}