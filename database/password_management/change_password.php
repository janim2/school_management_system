<?php
    session_start();
    require_once '../../database/config.php';

    $old_password = $_POST['PREV_PASSWORD'];
    $new_password = $_POST['NEW_PASSWORD'];
    $confirm_password = $_POST['CONFIRM_PASSWORD'];

    $old_p_query = "SELECT password FROM students WHERE id = :id";

    $old_p_statement = $con->prepare($old_p_query);
    $old_p_statement->execute(
        array(
            ":id" => $_SESSION['user_id'],
        )
    );

    $old_p_result = $old_p_statement->fetch();
    if($old_p_result['password'] == $old_password){
        if($new_password == $confirm_password){
            $change_query = "UPDATE students SET password = :pass WHERE id = :id"; 
            $change_statement = $con->prepare($change_query);

            $has_changed = $change_statement->execute(
                array(
                    ":pass" => $new_password,
                    ":id"   => $_SESSION['user_id']
                )
            );
            if($has_changed){
                echo "success";
            }
            else{
                echo "Something went wrong";
            }
        }
        else{
            echo "Password do not match";
        }
    }
    else{
        echo "Incorrect password";
    }
?>