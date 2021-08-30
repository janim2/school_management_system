<?php
    session_start();
    require_once '../../database/config.php';
    require_once '../../helpers/functions.php';

    $program_id = $_SESSION['program'];

    $query = "SELECT * FROM courses WHERE program_id = :program_id AND academic_year = :year AND semester = 2";
    $statement = $con->prepare($query);
    $statement->execute(
        array(
            ":program_id" => $program_id,
            ":year" => fetchCurrentAcademicYear($con)
        )
    );

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $results){
        $register_query = "INSERT INTO registered_courses (user_id, course, time) VALUES(:user_id, :course, :time_)";
        $register_statement = $con->prepare($register_query);

        $has_registered = $register_statement->execute(
            array(
                ":user_id" => $_SESSION['user_id'],
                ":course" => $results['id'],
                ":time_"  => date("Y-m-d H:i:s"),
            )
        );
    }

    if($has_registered){
        echo "success";
    }
    else{
        echo "Something went wrong";
    }
?>