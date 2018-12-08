<?php 

/*
    ######   #######  ##    ## ######## ####  ######  
    ##    ## ##     ## ###   ## ##        ##  ##    ## 
    ##       ##     ## ####  ## ##        ##  ##       
    ##       ##     ## ## ## ## ######    ##  ##   ####
    ##       ##     ## ##  #### ##        ##  ##    ## 
    ##    ## ##     ## ##   ### ##        ##  ##    ## 
    ######   #######  ##    ## ##       ####  ######  
*/

    // if there's no constante defined called __CONFIG__, do not load this file
    if (!defined('__CONFIG__')) {
        die('You do not have a config file');
    }

    // Include DB
    include_once "classes/DB.php";

    $con = DB::getConnection();