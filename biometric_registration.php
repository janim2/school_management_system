<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';
?>
<div id="content">
    <div class="container">

        <div style="text-align:center; margin-top:50px; font-size:20px; color: #2482DA;" class="">
            You have been biometrically verified for Semester <?=fetchCurrentSemester($con);?> of <?= fetchAcademicYearUsingID($con, fetchCurrentAcademicYear($con)); ?> Academic Year
        </div>

        <div style="margin-top:50px;">
            <p style="padding: 4px;  text-align: center;">
                <a class="btn btn-large" href="dashboard.php" style="width: 20% ;background-color: #dddddd;">&lt;&lt; Back
                    to Main Menu</a>
            </p>
        </div>
    </div>
</div>
<?php
    include_once 'partials/footer.php';
?>