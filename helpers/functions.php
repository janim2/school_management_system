<?php

    function fetchCurrentSemester($con){
        $query = "SELECT * FROM current_semester LIMIT 1";
        $statement = $con->prepare($query);

        $statement->execute();
        $results = $statement->fetch();
       
        return $results['semester'] ?? 'None';
    }

    function nameCurrentSemester($current_semester){
        if($current_semester == 1){
            return "FIRST SEMESTER";

        }
        else if($current_semester == 2){
            return "SECOND SEMESTER";
        }
    }

    function fetchCurrentAcademicYear($con){
        $query = "SELECT * FROM academic_year ORDER BY id DESC LIMIT 1";
        $statement = $con->prepare($query);

        $statement->execute();
        $results = $statement->fetch();

        return $results['id'] ?? 'No Academic year';
    }

    function fetchAcademicYearUsingID($con, $id){
        $query = "SELECT * FROM academic_year WHERE id=:id";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id" => $id,
            )
        );
        $results = $statement->fetch();

        return $results['name'] ?? 'No Academic year';
    }

    function fetchCurrentAcademicYearByName($con){
        $query = "SELECT * FROM academic_year ORDER BY id DESC LIMIT 1";
        $statement = $con->prepare($query);

        $statement->execute();
        $results = $statement->fetch();

        return $results['name'] ?? 'No Academic year';
    }

    function fetchCourseDetailsUsingID($con, $course_id, $scope){
        $query = "SELECT * FROM courses WHERE id = :id";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id" => $course_id,
            )
        );
        $results = $statement->fetch();

        return $results[$scope] ?? 'No Course';
    }

    function fetchProgramNameUsingID($con, $id){
        $query = "SELECT * FROM program WHERE id = :id";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id" => $id,
            )
        );
        $results = $statement->fetch();

        return $results['name'] ?? 'No Program';
    }

    function fetchResultOfCourse($con, $id){
        $query = "SELECT * FROM results WHERE course_id = :id AND user_id = :u_id";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id" => $id,
                ":u_id" => $_SESSION['user_id'],
            )
        );
        $results = $statement->fetch();

        return $results['mark'] ?? '0';
    }

    function determineGrade($mark){
        if($mark <= 100 && $mark >= 70){
            return "A";
        }
        else if($mark <= 69 && $mark >= 60){
            return "B";
        }
        else if($mark <= 59 && $mark >= 50){
            return "C";
        }
        else if($mark <= 49 && $mark >= 40){
            return "D";
        }
        else{
            return "E";
        }
    }

    function fetchFeeTransactionsTotalPrize($con){
        $query = "SELECT SUM(amount_paid) AS paid_amount FROM fee_transactions WHERE user_id = :id AND academic_year = :a_year";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id"       => $_SESSION['user_id'],
                ":a_year"   => fetchCurrentAcademicYear($con),
            )
        );

        $result = $statement->fetch();
        return $result['paid_amount'] ?? '0.00';

    }



?>