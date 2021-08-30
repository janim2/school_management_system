<?php
    session_start();
    require_once '../config.php';

    $PROGRAMID      = $_POST['PROGRAMID'];
    $PRIMARYMOBILE  = $_POST['PRIMARYMOBILE'];
    $OTHER_PHONE    = $_POST['OTHER_PHONE'];
    $OTHER_EMAIL    = $_POST['OTHER_EMAIL'];
    $REGIONID       = $_POST['REGIONID'];
    $RESADD1        = $_POST['RESADD1'];
    $POSTADD1       = $_POST['POSTADD1'];
    $RELIGIONID     = $_POST['RELIGIONID'];
    $DENOMINATIONID = $_POST['DENOMINATIONID'];


    $query = "UPDATE students 
            SET program = :program,
            phone_number = :primary_number,
            other_phone_numbers = :other_number,
            other_email = :other_email,
            region = :region,
            residential_address = :r_address,
            postal_address = :p_address, 
            religion = :religion, 
            denomination = :denomination
            WHERE id = :user_id";

    $statement = $con->prepare($query);
    $has_updated = $statement->execute(
        array(
            ":program"        => $PROGRAMID,
            ":primary_number" => $PRIMARYMOBILE,
            ":other_number"   => $OTHER_PHONE,
            ":other_email"    => $OTHER_EMAIL,
            ":region"         => $REGIONID,
            ":r_address"      => $RESADD1,
            ":p_address"      => $POSTADD1,
            ":religion"       => $RELIGIONID,
            ":denomination"   => $DENOMINATIONID,
            ":user_id"        => $_SESSION['user_id'],
        )
    );

    if($has_updated){
        echo "success";
    }
    else{
        echo "Something went wrong";
    }

?>