<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
?>
<div id="content">
    <div class="container">
        <div class="grid_14">
            <div>

                <div id="personal_info">
                    <p id="pinfo">REGISTRATION INSTRUCTIONS</p>
                    <hr>
                    <p>Welcome to the KNUST Online registration system. Kindly read the instructions below and adhere to
                        it accordingly to ensure you are duly registered for this semester's academic work.</p>
                    <br>
                    <p id="pinfo">STEP 1: REGISTRATION SCREEN</p>

                    <p>
                        To the upper left hand side of the main registration screen, you would see a button labeled
                        "First Step: ", "Register All Trail and Compulsory Courses".

                        + Beneath this button, you would see your Compulsory semester courses and any Trails, Elective
                        Set 1, Elective Set 2, Elective Set 3 where applicable.
                        Review ALL the Compulsory courses and/or Elective Courses and ensure it is what you intend to
                        study this semester. After reviewing, Click on the Button, “Register All Trail and Compulsory
                        Courses”. After clicking this button, all your trail and compulsory courses should appear in a
                        list on the right hand side of your screen.
                    </p>

                    <p>
                        Click on the "Register" Action link by any Elective Course you wish to add to register that
                        elective course individually. Registered electives would also appear in the list to the right
                        hand side of your screen.
                        To the upper right hand side of your Screen, you should see, a button that says “Delete All
                        Registered Courses” . Please note, you are only to click this button, "Delete All Registered
                        Courses" only if you have made an error otherwise proceed to STEP 2.
                        Use the Delete link to delete individually registered course Electives.
                    </p>

                    <br>

                    <p id="pinfo">STEP 2: DEFERMENT OF COURSES</p>
                    <p>For all students with trails exceeding the maximum allowed semester credits, you are expected to
                        defer one or more compulsory semester courses to enable you resit the trail paper(s). Click on
                        the link “DEFER” once you have decided on the course(s) to defer. </p>

                    <br>

                    <p id="pinfo">STEP 3: SAVE AND PRINT REGISTRATION SLIP</p>
                    <p>
                        Kindly ensure that the details of your registration are accurate especially with the credit
                        hours and courses you are to offer for the semester. Once your review is complete, Click on the
                        button labeled "Final Step ", "Save and Print Registration Slip" to complete your registration.
                        <span id="note_this"> Please Note that pop-ups would have to be enabled for this site before you
                            proceed,</span> to enable you view and print your Registration Slip!!
                        To learn how to do this,<a href=""> click here</a>
                    </p>

                    <br>

                    <p id="pinfo">STEP 4: SUBMISSION OF REGISTRATION SLIP</p>
                    <p>Sign the registration slip and send a copy to the officer in charge of registration slips at your
                        department for confirmation. </p>




                </div>
            </div>
        </div>


        <br />


        <div id="divajaxloader2" style="text-align:center">
            <input type="submit" id="buttonprevious" value="Previous" class="btn btn-large" style="width: 20%"
                onclick="location.href='dashboard.php'" />
            <input class="btn btn-large btn-primary" id="OnlineRegButton" name="buttononlinereg" style="width: 40%"
                type="submit" value="Proceed to Course Registration" onclick="location.href='course_registration.php'"/>
        </div>


        <?php
    include_once 'partials/footer.php';
?>