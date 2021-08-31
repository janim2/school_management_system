<?php
    session_start();
    require_once '../../database/config.php';
    require_once '../../helpers/functions.php';


    //fetch all courses for current sem
    $program_id = $_SESSION['program'];

    $query = "SELECT * FROM courses WHERE program_id = :program_id AND academic_year = :year AND semester = :current_sem";
    $statement = $con->prepare($query);
    $statement->execute(
        array(
            ":program_id" => $program_id,
            ":year" => fetchCurrentAcademicYear($con),
            ":current_sem" => fetchCurrentSemester($con),
        )
    );

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $results){
        $query = "DELETE FROM registered_courses WHERE user_id = :id AND course = :course_id";
        $statement = $con->prepare($query);
    
        $has_removed = $statement->execute(
            array(
                ":id"           => $_SESSION['user_id'],
                ":course_id"    => $results['id'],
            )
        );
    
        if($has_removed){
            echo "success";
        }
        else{
            echo "Something went wrong";
        }
    }

?>