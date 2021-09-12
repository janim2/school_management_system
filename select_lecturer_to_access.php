<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';
?>

<div id="content">
    <div class="container">
        <style>
            tr.hand-cursor:hover {
                cursor: pointer;
            }
        </style>

        <p id="pinfo" style="font-size:larger"><strong>LECTURER ASSESSMENT FOR SEMESTER <?= fetchCurrentSemester($con); ?>, <?=fetchCurrentAcademicYearByName($con)?> ACADEMIC
                YEAR </strong></p>
        <div style="color: red">
            <p style="color:red; text-align:center; white-space:pre">

            </p>
        </div>

        <?php
            $query = "SELECT * FROM lecturers WHERE id NOT IN 
                (SELECT lecturer_id FROM assessed_lecturers WHERE user_id = :id 
                AND course_id IN(SELECT id FROM courses WHERE program_id = :program_id 
                AND academic_year = :year AND semester = :current_sem))";
                
            $statement = $con->prepare($query);
            $statement->execute(
                array(
                    ":id"           => $_SESSION['user_id'],
                    ":program_id"   => $_SESSION['program'],
                    ":year"         => fetchCurrentAcademicYear($con),
                    ":current_sem"  => fetchCurrentSemester($con),
                )
            );

            if($statement->rowCount() > 0){?>
                <div id="TableContainer" style="padding:5px 5px" class="col-lg-offset-2 col-lg-8 ">
                    <table class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Course Details</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>    
                            <?php
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                foreach($result as $results){?>
                                    <tr data-coursecode="<?= determineCourseFromLecturerID($con, $results['id']); ?>" data-lecturername="<?= strtoupper($results['name']);?>" class="hand-cursor"
                                        data-lecturer_id="<?=$results['id']?>" onclick="gotoAssessment(this);">
                                        <td><span style="font-weight:bolder">
                                                <?=fetchCourseDetailsUsingID($con,determineCourseFromLecturerID($con, $results['id']),'code');?>
                                            </span>
                                            <br /> <?= fetchCourseDetailsUsingID($con,determineCourseFromLecturerID($con, $results['id']),'name');?>
                                            <br /><span style="font-weight:bolder; color:darkgreen"> <?= strtoupper($results['name']);?>
                                                </span>
                                            <p style="padding-top:30px"><button class="btn btn-primary">Assess Lecturer <span
                                                        class="label label-danger"><small>Not Done</small></span></button></p>
                                        </td>
                                        <td style="text-align:center">
                                        <img
                                            src="assets/img/profile.png"
                                            style="height:100px; width:100px; border-radius:100px;"/>
                                        </td>
                                    </tr>
                                <?php
                                }

                            ?>
                            
                        </tbody>
                    </table>
                </div>
    

            <?php
            }
            else{?>
                <h2>No lecturers</h2>
        <?
            }
        ?>
       
        <div class="container"></div>

        <script>
            function gotoAssessment(e) {
                var CourseCode = $(e).attr("data-coursecode");
                var LecturerName = $(e).attr("data-lecturername");
                var lecturer_id = $(e).attr("data-lecturer_id");
                window.location.href = 'answer_assessment_tutor.php' + "?CourseCode=" +
                    CourseCode + "&name=" + LecturerName + "&iger=" + lecturer_id; 
            }
        </script>

    </div>
</div>
<?php
    include_once 'partials/footer.php';
?>