<?php
    require_once 'helpers/functions.php';

    function calculateCourseCredit($con, $user_id, $program_id){
        $sum = 0;
        $query = "SELECT * FROM registered_courses WHERE user_id = :id 
            AND course IN (SELECT id FROM courses WHERE program_id = :program_id 
            AND academic_year = :year AND semester = :current_sem)";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id"           => $user_id, 
                ":program_id"   => $program_id,
                ":year"         => fetchCurrentAcademicYear($con),
                ":current_sem"  => fetchCurrentSemester($con),
            )
        );
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $results){
            $credit_sum_query = "SELECT SUM(credits) AS credit_sum FROM courses WHERE id = :id";
            $credit_sum_statement = $con->prepare($credit_sum_query);
    
            $credit_sum_statement->execute(
                array(
                    ":id" => $results['course']
                )
            );

            $sumSum = $credit_sum_statement->fetch();

            $sum += $sumSum['credit_sum'];
        }
        return $sum ?? 0;
    }

    function countCourses($con, $user_id, $program_id){
        $query = "SELECT * FROM registered_courses WHERE user_id = :id 
            AND course IN (SELECT id FROM courses WHERE program_id = :program_id 
            AND academic_year = :year AND semester = :current_sem)";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id"           => $user_id, 
                ":program_id"   => $program_id,
                ":year"         => fetchCurrentAcademicYear($con),
                ":current_sem"  => fetchCurrentSemester($con),
            )
        );

        return $statement->rowCount() ?? 0;

    }
?>