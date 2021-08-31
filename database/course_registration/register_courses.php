<?php
    session_start();
    require_once '../../database/config.php';
    require_once '../../helpers/functions.php';

    $program_id = $_SESSION['program'];

    $query = "SELECT * FROM courses WHERE program_id = :program_id AND academic_year = :year AND semester = :current_sem";
    $statement = $con->prepare($query);
    $statement->execute(
        array(
            ":program_id"   => $program_id,
            ":year"         => fetchCurrentAcademicYear($con),
            ":current_sem"  => fetchCurrentSemester($con),
        )
    );

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $results){

        //check for the presence of a course before adding it again.

        $check_query = "SELECT * FROM registered_courses WHERE course = :course AND user_id = :id";
        $check_statement = $con->prepare($check_query);

        $check_statement->execute(
            array(
                ":course" => $results['id'],
                ":id"     => $_SESSION['user_id'],
            )
        );

        if($check_statement->rowCount() == 0){
            $register_query = "INSERT INTO registered_courses (user_id, course, time) VALUES(:user_id, :course, :time_)";
            $register_statement = $con->prepare($register_query);
    
            $has_registered = $register_statement->execute(
                array(
                    ":user_id" => $_SESSION['user_id'],
                    ":course" => $results['id'],
                    ":time_"  => date("Y-m-d H:i:s"),
                )
            );

            if($has_registered){
                echo "success";
            }
            else{
                echo "Something went wrong";
            }
        }
        else{
            echo "Courses already registered";
        }

        //check for presence ends here
    }
?>