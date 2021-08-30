<?php
    function fetchCurrentAcademicYear($con){
        $query = "SELECT * FROM academic_year ORDER BY id DESC LIMIT 1";
        $statement = $con->prepare($query);

        $statement->execute();
        $results = $statement->fetch();

        return $results['id'] ?? 'No Academic year';
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

?>