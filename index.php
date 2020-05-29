<?php
    require_once('./classes/Unit.php');
    require_once('./classes/Plane.php');
    require_once('./classes/Soldier.php');
    require_once('./classes/Bomber.php');
    require_once('./classes/Tank.php');
    require_once('./classes/lightTank.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WW2 | Get ready!</title>
    <link rel="icon" href="https://img.icons8.com/color/48/000000/battleship.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <style>
        .alert{
            color: red;
            font-style: italic;
        }
        .succes{
            color: green;
            font-style: italic;
        }
        #headline{
            width: fit-content;
        }
        
    </style>
    <div class="container my-4" id="headline">
        <div id="headline text-right">
            <div class="display-4">The only thing we have to fear is fear itself</div>
            <h2 class="text-muted">D.Roselvelt</h2>
        </div>
        
        <h6 class="mt-5">Logs</h6>
        <div id="display" class="border p-5">
            <?php


                /* !! ZOMBIE CODE ALERT !! */


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

                // $bomber1 = new Bomber();

                // $tank = new Tank();

                $lightTank = new lightTank();
                var_dump($panzer);
            ?>
        </div>
    </div>
</body>
</html>
