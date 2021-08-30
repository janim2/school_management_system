<?php
    session_start();
    require_once '../../database/config.php';
    require_once '../../helpers/functions.php';

    $course_id = $_POST['id'];

    $query = "DELETE FROM registered_courses WHERE course = :course_id AND user_id = :id";
    $statement = $con->prepare($query);

    $has_removed = $statement->execute(
        array(
            ":course_id" => $course_id,
            ":id"       => $_SESSION['user_id'],
        )
    );

    if($has_removed){
        echo "success";
    }
    else{
        echo "Something went wrong";
    }

?>