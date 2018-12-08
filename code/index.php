<?php 

/*
 #### ##    ## ########  ######## ##     ##    ########     ###     ######   ########
  ##  ###   ## ##     ## ##        ##   ##     ##     ##   ## ##   ##    ##  ##      
  ##  ####  ## ##     ## ##         ## ##      ##     ##  ##   ##  ##        ##      
  ##  ## ## ## ##     ## ######      ###       ########  ##     ## ##   #### ######  
  ##  ##  #### ##     ## ##         ## ##      ##        ######### ##    ##  ##      
  ##  ##   ### ##     ## ##        ##   ##     ##        ##     ## ##    ##  ##      
 #### ##    ## ########  ######## ##     ##    ##        ##     ##  ######   ########
*/

    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once "inc/config.php";
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow">

        <title>Index</title>

        <base href="/" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
    </head>
    <body>
        
    <?php 
        echo 'Today is: ';
        echo date('Y - m - d'); 
    ?>

    <ul>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    </ul>
        
    <!-- FOOTER -->    
    <?php require_once 'inc/footer.php'?>
    </body>
</html>
