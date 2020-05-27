<?php

class Tank extends Unit{
    public function __construct()
    {
        $this->life = 100;
        $this->attackPower = 35;
    }
}