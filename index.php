<?php

   require_once 'autoloader/autoloader.php';


    echo "<h2>The only thing we have to fear is fear itself - D.Roselvelt</h2>";


    //create a soldier;
    $soldier1 = new Soldier();

    //soldier life
    // var_dump( "initaial life:" . $soldier1->getLife() );

    //attack soldier
    $soldier1->attack(10);

    //soldier life
   // var_dump( "life after attack:" . $soldier1->getLife() );

    //$plane1 = new Plane();
    //plane life
    //var_dump($plane1);

    $bomber1 = new Bomber();
    var_dump($bomber1);