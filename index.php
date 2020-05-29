<?php

   require_once 'autoloader/autoloader.php';


    echo "<h2>The only thing we have to fear is fear itself - D.Roselvelt</h2>";

    $Bomber1 = new Bomber();
    $Bomber2 = new Bomber();
    $Plane1 = new Plane();
    $Plane2 = new Plane();
    $Soldier1 = new Soldier();    
    $Soldier2 = new Soldier();

    $Bomber1->attack($Plane1);
    var_dump($Plane1);
    echo "<br>";

    $Bomber1->attack($Soldier1);
    var_dump($Soldier1);
    echo "<br>";

    $Plane1->attack($Bomber1);
    var_dump($Bomber1);
    echo "<br>";

    $Plane1->attack($Soldier2);
    var_dump($Soldier2);
    echo "<br>";

    $Soldier2->attack($Plane2);
    var_dump($Plane2);
    echo "<br>";

    $Soldier2->attack($Bomber2);
    var_dump($Bomber2);
    echo "<br>";