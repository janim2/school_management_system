<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/counters.php';
    require_once 'helpers/functions.php';

    $program_id = $_SESSION['program'];

    //assuming that all semesters are 2 for now. 

    $query = "SELECT * FROM courses WHERE program_id = :program_id AND academic_year = :year AND semester = :current_sem";
    $statement = $con->prepare($query);
    $statement->execute(
        array(
            ":program_id"   => $program_id,
            ":year"         => fetchCurrentAcademicYear($con),
            ":current_sem"  => fetchCurrentSemester($con),
        )
    );

    $counter = $statement->rowCount();

?>
<div id="content">
    <div class="container">
        <link href="/students/Content/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" />
        <style>
            body {}

            .ui-dialog .ui-dialog-titlebar-close {
                display: none;
            }

            @media (max-width: 467px) {
                .btn-sm {
                    padding: 5px 4px !important;
                }
            }

            .k-wrapper {
                padding: 0 4px 0 4px;
            }

            .k-block {
                display: block;
                width: 100%;
            }

            .k-table {
                display: table;
                width: 100%;
                margin-bottom: 20px;
                border-radius: 5px;
                border: 1.5px solid #232;
                border-bottom-width: 4px;
            }

            .k-caption {
                color: #474780;
                font-weight: bold;
                display: table-caption;
                text-align: center;
                margin-top: 14px;
            }

            .k-header {
                border: 5px;
                /*color: white;
            background: #474780;*/
                font-weight: bolder;
                background: #364758 repeat-x;
                border-top: 2px solid #d3ddff;
                border-bottom: 1px solid #fff;
                color: #fff;
            }

            .k-header,
            .k-body {
                display: table-row;
                border-bottom: 1px solid #fff;
                border-top: 1px solid transparent;
            }

            .k-body {
                /*color: #49496d;*/
                font-size: 14px;
                /*background: #e8edff;*/
                color: #2d2d39;
                background: #fff repeat-x;
                padding: 8px;
                border-bottom: 1px solid #fff;
                border-top: 1px solid #fff;
            }

            .k-body:hover {
                color: #1f2c38 !important;
                background: #b1ddee !important;
            }

            .k-body.row:nth-of-type(odd) {
                background: #e1ebf2;
            }

            .k-cell {
                padding: 5px 0px;
                display: table-cell;
                text-align: center;
                vertical-align: middle;
                float: left;
                top: 0;
                bottom: 0;
            }

            .k-cell span:first-child {
                padding: 0 3px;
            }

            .k-cell span:last-child {
                float: right;
            }

            .k-cell .k-head {}

            .k-body .k-cell {
                /*border-right: 2px solid #aabcfe;*/
            }

            .k-body .k-cell:first-child {
                /*border-left: 2px solid #aabcfe;*/
            }

            .k-center {
                text-align: center;
            }

            .k-left {
                text-align: left;
            }

            .k-11 {
                width: 11%;
            }

            .k-14 {
                width: 14%;
            }

            .k-15 {
                width: 15%;
            }

            .k-25 {
                width: 25%;
            }

            .k-50 {
                width: 50%;
            }

            .k-61 {
                width: 61%;
            }

            .k-63 {
                width: 63%;
            }

            .k-80 {
                width: 80%;
            }

            @media (min-width: 768px) {
                .k-cell {}

                .k-cell .k-center,
                .k-hear .k-center {}
            }
        </style>
        <div id="main-body">
            <h3 class="text-center" style="color: #474780;font-weight: bold; text-decoration:underline;">ONLINE COURSE
                REGISTRATION</h3>
            <div class="row">
                <div style="color: red" id="diverror">
                    <strong></strong>
                </div>
                <div class="col-sm-6 col-xs-12 k-wrapper">
                    <button class="btn btn-success col-sm-12" id="RegisterAllComp" onclick="showSelectDialog()"><i class="fa fa-check"></i> Select
                        All Compulsory Courses</button>
                    <div id="Compulsory Courses" class="k-wrapper">
                        <div class="k-table k-center" id="CompTrailCourses">
                            <h4 class="k-caption">COMPULSORY COURSES</h4>
                            <div class="row k-header">
                                <div class="k-cell k-61">Course</div>
                                <div class="k-cell k-14">Credits</div>
                                <div class="k-cell k-25"></div>
                            </div>

                            <!-- duplicate this -->
                            <?php
                                if($counter == 0){?>
                            <p> No courses added</p>
                            <?php
                                }else{
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($result as $results){?>
                            <div class="row k-body comptrailrow">
                                <div class="k-cell k-61 k-left">
                                    <span class="k-14 comptrailcoursecode"><?= $results['code']?></span>
                                    <span class="k-63 comptrailcoursename"><?= $results['name']?></span>
                                </div>
                                <div class="k-cell k-14 comptrailcredits"><?= $results['credits']?></div>
                                <div class="k-cell k-25"></div>
                            </div>
                            <?php
                                    }

                                }
                            ?>


                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 k-wrapper k-center">

                    <button class="btn btn-danger col-sm-12" id="DeleteAll" onclick="deleteAllCourses()"><i class="fa fa-trash"></i> Delete All
                        Selected Courses</button>

                    <div>

                        <div id="divRegisteredCourses" class="k-wrapper">
                            <div class="k-table k-center" id="registeredcoursetable">
                                <h4 class="k-caption">
                                    <span id="registeredCoursesDisplayHeader">YOUR COURSES</span>
                                    <br class="visible-sm visible-xs" />
                                    : <span style="font-size:14px" class="text-danger">Maximum ( <?= calculateCourseCredit($con, $_SESSION['user_id'], $_SESSION['program']); ?> credits )</span>
                                    : <span style="font-size:14px" class="text-info">Minimum ( 15 credits )</span>
                                </h4>
                                <div class="row k-header">
                                    <div class="k-cell k-61">Course</div>
                                    <div class="k-cell k-14">Credits</div>
                                    <div class="k-cell k-15">Status</div>
                                    <div class="k-cell k-11"></div>
                                </div>

                                <!-- duplicate this -->
                                <?php
                                    $registered_query = "SELECT * FROM registered_courses WHERE user_id = :id";
                                    $registered_statement = $con->prepare($registered_query);

                                    $registered_statement->execute(
                                        array(
                                            ":id" => $_SESSION['user_id'],
                                        )
                                    );

                                    if($registered_statement->rowCount() == 0){?>
                                        <p> No registered courses </p>
                                    <?php
                                    }
                                    else{
                                        $registered_result = $registered_statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($registered_result as $registered_results){?>
                                            <div id="row-id-DIT-224" class="row k-body regcourses">
                                                <div class="k-cell k-61 k-left">
                                                    <span class="k-14"><?= fetchCourseDetailsUsingID($con, $registered_results['course'], 'code')?></span>
                                                    <span class="k-63"><?= fetchCourseDetailsUsingID($con, $registered_results['course'], 'name')?></span>
                                                </div>
                                                <div class="k-cell k-14"><?= fetchCourseDetailsUsingID($con, $registered_results['course'], 'credits') ?></div>
                                                <div id="cell-idstatus-DIT-224" class="k-cell k-11">
                                                </div>
                                                <div class="k-cell k-14" onclick="deleteSpecificCourse(<?= $registered_results['course'];?>)">
                                                    <a class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                ?>
                            
                            </div>
                            <h5 class="text-danger"><b>Click "Save and Print Registration Slip" Button below to Complete
                                    Registration</b></h5>
                        </div>


                        <div class="k-wrapper col-xs-12">
                            <div class="k-table k-center">
                                <h4 class="k-caption" style="padding:10px 15px;">COURSE SUMMARY</h4>
                                <h4 class="k-header">&nbsp;</h4>
                                <div class="row k-body">
                                    <div class="k-cell k-50"><b>Deferred Credits: </b></div>
                                    <div class="k-cell k-50 totaldeferredcell">0</div>
                                </div>
                                <div class="row k-body">
                                    <div class="k-cell k-50 "><b>UnDeferred Credits: </b></div>
                                    <div class="k-cell k-50 totalundeferredcell">
                                        <?= calculateCourseCredit($con, $_SESSION['user_id'], $_SESSION['program']); ?>
                                    </div>
                                </div>
                                <div class="row k-body">
                                    <div class="k-cell k-50"><b>Number of Courses: </b></div>
                                    <div class="k-cell k-50 numcoursescell">
                                        <?= countCourses($con, $_SESSION['user_id'], $_SESSION['program']);?>
                                    </div>
                                </div>
                                <div class="row k-body">
                                    <div class="k-cell k-50"><b>Total Credits:</b></div>
                                    <div class="k-cell k-50 totalcreditscell">
                                        <?= calculateCourseCredit($con, $_SESSION['user_id'], $_SESSION['program']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="k-center">
                            <a class="btn btn-large btn-primary col-sm-6 hidden-xs" href="dashboard.php">&lt;&lt; Return to Main Menu</a>
                            <br class="visible-sm" />
                            <br class="visible-sm" />
                            <input class="btn btn-large btn-success col-sm-6 col-xs-12" id="PrintRegSlip" onclick="printregslip()" name="PrintRegSlip" type="submit" value="Save and Print Registration Slip" />
                        </div>


                        <div id="divinvisible" style="display: none">
                            <div id="divhead">

                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <td class="thw100"><img width="54" height="80" alt="logo"
                                                src="assets/dashboard/Content/images/logo55.png" /></td>
                                        <td></td>
                                        <td>
                                            <div id="head1">St. Patrick's Nursing and Mid-wifery Training College
                                            </div>
                                            <div id="head2">N/A</div>
                                            <div id="head3"><?= fetchCurrentAcademicYear($con); ?>, SECOND SEMESTER REGISTRATION</div>
                                        </td>
                                    </tr>
                                </table>

                                <div id="divtablestudet">
                                    <table id="tablestudet" border="0">

                                        <tr>
                                            <td class="thw60"></td>
                                            <td class="thw60">Name:</td>
                                            <td class="thw220">LUMOR Theophilus Akwasi Addo</td>
                                            <td class="thw70">Year:</td>
                                            <td class="thw220"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Student Id:</td>
                                            <td>20680372</td>
                                            <td>Programme:</td>
                                            <td>DIP. INFORMATION TECHNOLOGY (IDL) (WEEKEND)</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Fees Paid:</td>
                                            <td>2750.00</td>
                                            <td>Date:</td>
                                            <td>7/21/2021 8:15:49 AM</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Email:</td>
                                            <td>taalumor@st.knust.edu.gh</td>
                                            <td>Option:</td>
                                            <td>General</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div id="divbodyprint">
                            </div>
                        </div>
                    </div>

                    <div id="Dialog-Alert">
                    </div>

                    <script src="/students/Scripts/jquery.unobtrusive-ajax.min.js"></script>
                    <script src="/students/Content/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
                    <script src="/students/Content/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
                    <script type="text/javascript">
                        function printregslip() {

                            str = document.getElementById('divinvisible').innerHTML;
                            var newwin = window.open('', 'printwin', 'left=100,top=100,width=800,height=1200');
                            //event.preventDefault();


                            //newwin = window.open('', 'printwin', 'left=100,top=100,width=800,height=1200');
                            newwin.document.write('<HTML>\n<HEAD>\n');
                            newwin.document.write('<TITLE> St. Patrick\'s Nursing and Mid-wifery Training College </TITLE>\n');
                            newwin.document.write('<script>\n');
                            newwin.document.write('function chkstate(){\n');
                            newwin.document.write('if(document.readyState=="complete"){\n');
                            newwin.document.write('window.close()\n');
                            newwin.document.write('}\n');
                            newwin.document.write('else{\n');
                            newwin.document.write('setTimeout("chkstate()",2000)\n');
                            newwin.document.write('}\n');
                            newwin.document.write('}\n');
                            newwin.document.write('function print_win(){\n');
                            newwin.document.write('window.print();\n');
                            newwin.document.write('chkstate();\n');
                            newwin.document.write('}\n');
                            newwin.document.write('<\/script>\n');
                            newwin.document.write(
                                '<link href="/students/Content/regslip.css" rel="stylesheet" type="text/css" />');
                            //newwin.document.write('<link href="/Content/regslip.css" rel="stylesheet" type="text/css" />');
                            newwin.document.write('</HEAD>\n');
                            newwin.document.write('<BODY onload="print_win()">\n');
                            newwin.document.write(str);
                            newwin.document.write(str);
                            newwin.document.write('</BODY>\n');
                            newwin.document.write('</HTML>\n');
                            newwin.document.close();



                            // document.getElementById('logoutForm').submit();
                        };


                        //});
                    </script>

                    <script>
                        (function (i, s, o, g, r, a, m) {
                            i['GoogleAnalyticsObject'] = r;
                            i[r] = i[r] || function () {
                                (i[r].q = i[r].q || []).push(arguments)
                            }, i[r].l = 1 * new Date();
                            a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                            a.async = 1;
                            a.src = g;
                            m.parentNode.insertBefore(a, m)
                        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                        ga('create', 'UA-47081066-1', 'knust.edu.gh');
                        ga('send', 'pageview');
                    </script>

<?php
    include_once 'partials/footer.php';
?>

<script>
    function showSelectDialog(){
        swal({
            title: 'Register Courses',
            text: 'Are you sure you want to register these courses?',
            icon: 'info',
            buttons: ["No", "Yes"],
            closeOnClickOutside: false,
        }).then(function (confirmed) {
            if (confirmed) {
                $.ajax({
                    url: 'database/course_registration/register_courses.php',
                    method: 'POST',
                    success: function (data) {
                        if (data.includes("success")) {
                            swal({
                                title: 'Success',
                                text: 'Courses registered successfully',
                                icon: 'success',
                                closeOnClickOutside: true,
                            }).then(function(confirmed){
                                if(confirmed){
                                    location.reload();
                                }
                            });
                        }
                        else if(data.includes('already')){
                            swal({
                                title: 'Error',
                                text: "Courses already registered",
                                icon: 'error',
                                buttons: ["OK"],
                                closeOnClickOutside: true,
                            })
                        }
                        else{
                            swal({
                                title: 'Error',
                                text: data,
                                icon: 'error',
                                buttons: ["OK"],
                                closeOnClickOutside: true,
                            })
                        }
                    }
                });
            }
        });
    }

    function deleteSpecificCourse(course_id){
        swal({
            title: 'Delete Course',
            text: 'Are you sure you want to delete this course?',
            icon: 'info',
            buttons: ["No", "Yes"],
            closeOnClickOutside: false,
        }).then(function (confirmed) {
            if (confirmed) {
                $.ajax({
                    url: 'database/course_registration/delete_course.php',
                    method: 'POST',
                    data:{
                        "id" : course_id,
                    },
                    success: function (data) {
                        if (data == "success") {
                            swal({
                                title: 'Success',
                                text: 'Course deleted successfully',
                                icon: 'success',
                                closeOnClickOutside: false,
                            }).then(function(confirmed){
                                if(confirmed){
                                    location.reload();
                                }
                            });
                        }else{
                            swal({
                                title: 'Error',
                                text: data,
                                icon: 'error',
                                buttons: ["OK"],
                                closeOnClickOutside: true,
                            })
                        }
                    }
                });
            }
        });
    }

    function deleteAllCourses(){
        swal({
            title: 'Delete All Courses',
            text: 'Are you sure you want to delete all Registered courses?',
            icon: 'info',
            buttons: ["No", "Yes"],
            closeOnClickOutside: false,
        }).then(function (confirmed) {
            if (confirmed) {
                $.ajax({
                    url: 'database/course_registration/deleteall_courses.php',
                    method: 'POST',
                    success: function (data) {
                        if (data.includes("success")) {
                            swal({
                                title: 'Success',
                                text: 'Courses deleted successfully',
                                icon: 'success',
                                closeOnClickOutside: false,
                            }).then(function(confirmed){
                                if(confirmed){
                                    location.reload();
                                }
                            });
                        }else{
                            swal({
                                title: 'Error',
                                text: data,
                                icon: 'error',
                                buttons: ["OK"],
                                closeOnClickOutside: true,
                            })
                        }
                    }
                });
            }
        });
    }
</script>