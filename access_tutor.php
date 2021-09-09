<?php
    include_once 'partials/navbar.php';
?>
<div id="content">
    <div class="container">
        <div class="grid_14">
            <div>
                <div id="personal_info">
                    <div id="instructions">
                        <h3 style="color:#f00; text-align:center">IMPORTANT</h3>

                        The Quality Assurance & Planning has a mandate to put measures in place, to ensure continuous
                        improvement, value for money and customer satisfaction.
                        As a valuable member of the University Community, we would like to ask your opinions about your
                        teaching and learning experience on this particular course.
                        Your answers to the questions would be treated with the strictest confidence, and would not
                        reflect on your performance with the lecturer.
                        This is to assist the University to put measures in place for improvement.
                        Be assured that your assessment can never be traced back to you.
                        Thank you.<br /><br />

                        <p id="pinfo">INSTRUCTIONS FOR LECTURER ASSESSMENT</p>
                        <hr>

                        <p>Welcome to the KNUST Online Lecturer Assessment system. Kindly read the instructions below
                            and adhere to it accordingly to ensure you have adequately assessed all Lecturers for your
                            registered courses this semester</p>
                        <br>
                        <p id="pinfo">STEP 1: COURSE-LECTURER SELECT SCREEN</p>

                        <p>

                            On the First Lecturer Assessment Screen,
                            you would see a table listing of all your registered courses together with the Names and
                            photographs of lecturers teaching them. <br />

                            <br />Click on a row to Assess a Lecturer and the Particular Course on that Row <br />

                        </p>

                        <br>

                        <p id="pinfo">STEP 2: ASSESSMENT FORM</p>
                        <p>

                            <br /> Proceed to answer the Assessment Questions on the ASSESSMENT FORM for the Lecturer
                            and Course Selected.
                            Select the most approiprate answer for the Multiple Choice Questions and Enter your Comments
                            for the Questions that ask for comments.


                            <br />Click on the "Submit Assessment" Button to Submit the Assessment.
                            Upon Submisssion, A Submission Status is Generated to indicate the success or otherwise of
                            the Submission


                            <br /> Click on the "Back to Lecturer Assessment" Link below the Submission Status to return
                            to the COURSE - LECTURER SELECT SCREEN to assess Other Courses and their Corresponding
                            Lecturers

                        </p>




                    </div>
                </div>
            </div>
        </div>

        <div id="divajaxloader2" style="text-align:center">
            <input type="submit" id="buttonprevious" value="Previous" class="btn btn-large" style="width: 20%" 
            onclick="location.href='dashboard.php'"/>
            <input class="btn btn-large btn-primary" id="LecturerAssessButton" name="buttonAssessLecturer"
                onclick="location.href='select_lecturer_to_access.php'" style="width: 65%;" type="submit"
                value="Proceed to Lecturer Assessment" />
        </div>
        <br />
        <br />
    </div>
</div>
<?php
    include_once 'partials/footer.php';
?>