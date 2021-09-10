<?php
    $year   = $_POSt['year'];
    $sem    = $_POST['sem'];
?>
<table class="table table-bordered table-striped" style="margin:auto;width:97%;">
<thead>
    <tr>
        <th>
            Course Code
        </th>
        <th>
            Course Name
        </th>
        <th>
            Credits
        </th>

        <th>
            Total Mark
        </th>
        <th>
            Grade
        </th>

    </tr>
</thead>
<tbody>

    <?php
        $result_query = "SELECT * FROM courses WHERE program_id = :p_id 
            AND academic_year = :academic_year AND semester = :sem";
        $results_statement = $con->prepare($result_query);

        $results_statement->execute(
            array(
                ":p_id"             => $_SESSION['program'],
                ":academic_year"    => $year,
                ":sem"              => $sem,
            )
        );
        if($results_statement->rowCount() > 0){
            foreach($results_statement as $results_statements){
                // <!-- check for results for that specific course -->

                ?>
                <tr>
                    <td>
                        <?= $results_statements['code'];?>
                    </td>
                    <td>
                        <?= $results_statements['name'];?>
                    </td>
                    <td>
                        <?php 
                            $credit = $results_statements['credits'];
                            $total_credits += $credit;
                            echo $credit;
                        ?>
                    </td>

                    <td>
                        <?php 
                            $mark = fetchResultOfCourse($con, $results_statements['id']);
                            $cummulative_marks += $credit * $mark;
                            echo $mark;
                        ?>
                    </td>
                    <td>
                        <?php $grade = determineGrade(fetchResultOfCourse($con, $results_statements['id']));
                              if($grade == "E"){
                                    $trailed_courses = $results_statements['code'];
                              }
                              echo $grade;

                        ?>
                    </td>

                </tr>
            <?php
                }
            ?>
            <p>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th class="thw340">&nbsp;</th>
                        <th class="thw140">&nbsp;</th>
                        <th class="thw100">Semester</th>
                        <th class="thw100">Cummulative</th>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Credits Registered:</td>
                        <td><?= $total_credits; ?></td>
                        <td>35</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Credits Obtained:</td>
                        <td><?= $total_credits; ?></td>
                        <td>35</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Credits Calc:</td>
                        <td><?= $total_credits; ?></td>
                        <td>35</td>
                    </tr>

                    <tr>
                        <td>Courses Trailing:</td>
                        <td>Weighted Marks:</td>
                        <td><?= $cummulative_marks; ?></td>
                        <td>2301</td>
                    </tr>

                    <tr>
                        <td style="color: red">&lt;<?= $trailed_courses; ?>&gt;</td>
                        <td>CWA:</td>
                        <td>67.76</td>
                        <td>65.74</td>
                    </tr>

                </table>


                <div id="divStudentTagg">

                    <div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th class="thw270">Tag</th>
                                    <th class="thw140">Reason</th>

                                </tr>
                            </tbody>

                        </table>

                    </div>
                </div>



                <p style="padding: 4px">
                    <a class="btn btn-large" href="dashboard.php"
                        style="width: 20% ;background-color: #dddddd;">&lt;&lt; Back to Main Menu</a>


                    <input class="btn btn-large btn-primary" id="buttonresslipprint" name="buttonresslipprint"
                        style="width: 40%" type="submit" value="Print Result Slip" />
                </p>

                <div id="divinvisible" style="display: none">

                    <div id="divhead">


                        <table class="table table-bordered table-striped">
                            <tr>
                                <td class="thw100"><img width="54" height="80" alt="logo"
                                        src="assets/dashboard/Content/images/logo55.png" /></td>
                                <td></td>
                                <td>
                                    <div id="head1"><?= $org_name; ?></div>
                                    <div id="head2"></div>
                                    <div id="head3">RESULTS FOR SEMESTER <?= $sem; ?>, <?= fetchAcademicYearUsingID($con, $year); ?> ACADEMIC YEAR</div>
                                </td>
                            </tr>
                        </table>

                        <div id="divtablestudet">
                            <table id="tablestudet" border="0">

                                <tr>
                                    <td class="thw60"></td>
                                    <td class="thw60">Name:</td>
                                    <td class="thw220"><?= $name; ?></td>
                                    <td class="thw70">Year:</td>
                                    <td class="thw220">1</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Index No:</td>
                                    <td>0</td>
                                    <td>Programme:</td>
                                    <td>
                                        <?= fetchProgramNameUsingID($con, $_SESSION['program']);?>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Student ID:</td>
                                    <td>
                                        <?= $_SESSION['user_id'];?>
                                    </td>
                                    <td>Date:</td>
                                    <td><?= date('Y-m-d H:i:s');?></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Email:</td>
                                    <td>
                                        <?= $_SESSION["email"];?>
                                    </td>
                                    <td>Option:</td>
                                    <td>General</td>
                                </tr>

                            </table>
                        </div>
                    </div>

                    <div id="divbodyprint">
                    </div>

                </div>

                <script type="text/javascript">
                    $("#buttonresslipprint").click(function () {
                        $.ajax({
                            url: '/students/ResultCheck/PrintResultSlip',
                            data: {
                                acadyearin: 2020,
                                semin: 2
                            },
                            cache: false,
                            complete: printregslip,
                            success: function (data, textStatus, xhr) {
                                $('#divbodyprint')[0].innerHTML = data;
                            }
                        });
                    });

                    function printregslip() {
                        str = document.getElementById('divinvisible').innerHTML;


                        var newwin = window.open('', 'printwin', 'left=100,top=100,width=800,height=1200');
                        //event.preventDefault();


                        //newwin = window.open('', 'printwin', 'left=100,top=100,width=800,height=1200');
                        newwin.document.write('<HTML>\n<HEAD>\n');
                        newwin.document.write('<TITLE>KNUST Online Results System</TITLE>\n');
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
                        //newwin.document.write('<link href="/students/Content/master.css" rel="stylesheet" type="text/css" />');
                        newwin.document.write(
                            '<link href="/Content/regslip.css" rel="stylesheet" type="text/css" />');
                        newwin.document.write('</HEAD>\n');
                        newwin.document.write('<BODY onload="print_win()">\n');
                        newwin.document.write(str);
                        //newwin.document.write(str);
                        newwin.document.write('</BODY>\n');
                        newwin.document.write('</HTML>\n');
                        newwin.document.close();


                        document.getElementById('logoutForm').submit();
                    };
                </script>


            </p>
        <?php
        }
        else{?>
            <h3 style="text-align:center">No Results</h1>   
        <?php
        }
        
    ?>
</tbody>
</table>
