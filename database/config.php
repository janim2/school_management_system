<?php

    try{
        $con = new PDO('mysql:host=localhost; dbname=saint_patricks', 'root'/*username*/, ''/*password*/);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //This prevents PDO from displaying default error
    }catch(PDOException $e){
        die("Sorry... Encountered a database problem.");//This kills the page and displays an error
    }
?>