<?php
    session_start();
    require_once '../../database/config.php';
    require_once '../../helpers/functions.php';

    $query = "INSERT INTO assessed_lecturers(user_id, lecturer_id, course_id, date_) VALUES(:id, :l_id, :c_id, :date_)";
    $statement = $con->prepare($query);

    $has_added = $statement->execute(
        array(
            ":id"       => $_SESSION['user_id'],
            ":l_id"     => $_POST['lecturer_id'],
            ":c_id"     => $_POST['course_id'],
            ":date_"    => date("Y-m-d H:i:s"),
        )
    );

    if($has_added){
        echo "success";
    }
    else{
        echo "Something went wrong";
    }
?>