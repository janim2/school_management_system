<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['student_id'])){
        $query = "SELECT * FROM students WHERE username = :username AND id = :id AND password = :pass";
        $statement = $con->prepare($query);
        $statement->execute(
            array(
                ":username" => $_POST['username'],
                ":id"       => $_POST['student_id'],
                ":pass"     => $_POST['password'],
            )
        );

        if($statement->rowCount() == 0){
            //user is not in system
            echo "Invalid user credentials";
        }
        else{
            //user is in system
            $user_details = $statement->fetch();
            $_SESSION['user_id']    = $user_details['id'];
            $_SESSION['firstname']  = $user_details['firstname'];
            $_SESSION['middlename'] = $user_details['middlename'];
            $_SESSION['lastname']   = $user_details['lastname'];
            $_SESSION['username']   = $_POST['username'];
            $_SESSION['program']    = $user_details['program'];
            $_SESSION['dob']        = $user_details['dob'];
            
            echo "success";
        }

    }
    else{
        echo "No details provided";
    }
?>