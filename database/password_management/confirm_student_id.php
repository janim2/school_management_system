<?php
    session_start();
    $entered_id  = $_POST['entered_id'];

    if($entered_id == $_SESSION['user_id']){
        echo "success";
    }
    else{
        echo "Incorrect ID";
    }
?>