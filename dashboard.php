<?php
    include_once 'partials/navbar.php';
?>
<div id="content">
    <div class="container">

        <style>
            .graduateBanner {
                margin: auto;
                border: 2px solid #2c3e50;
                border-radius: 10px;
                padding-top: 15px;
                /*        overflow: hidden;*/
                padding: 5px;
                margin-bottom: 25px;
                margin-top: 5px;
                background-color: #95ff79;
                /*cursor: pointer;*/
            }

            /*.graduateBanner:hover {
            background-color: #95ff79;
        }*/

            .graduateBannerText {
                font-size: 18px;
                font-weight: bolder;
                text-align: left;
            }

            .graduateBannerText2 {
                font-size: 14px;
                text-align: left;
            }

            #clockdiv {
                font-family: sans-serif;
                color: #fff;
                display: inline-block;
                font-weight: 100;
                text-align: center;
                font-size: 30px;
            }

            #clockdiv>div {
                margin-top: 3px;
                padding: 10px;
                border-radius: 3px;
                background: #00cea240;
                display: inline-block;
            }

            #clockdiv div>span {
                padding: 15px;
                border-radius: 3px;
                background: #00816A;
                display: inline-block;
            }

            .smalltext {
                padding-top: 15px;
                font-size: 12px;
                color: black;
            }

            .gridbase{
                margin-top: 40px;
            }
        </style>

        <div style="color: red">
            <p style="color:red; text-align:center; white-space:pre">

            </p>
        </div>

        <div class="container" style="margin-top: 5px; text-align: center;">

            <p id="welcomenote">
                <span>Welcome <b><?= $name; ?></b></span><br />
                <span>Please select an activity by clicking on one of the buttons below</span><br />
            </p>

            <div class="grid_18">
                <div class="col-md-4 gridbase">
                    <div class="circle1">
                        <img src="assets/dashboard/Content/images/profile.png" id="icon1" />
                    </div>
                    <a class="dashBtn" href="profile.php">
                        <div id="txtbox2"></br></br></br><strong>Profile</strong></div>
                    </a>

                </div>

                <div class="col-md-4 gridbase">
                    <div class="circle1">
                        <img src="assets/dashboard/Content/images/online_registration.png" id="icon1" />
                    </div>
                    <a class="dashBtn" href="course_registration.php">
                        <div id="txtbox2"></br></br></br><strong>Course Registration</strong></div>
                    </a>

                </div>

                <div class="col-md-4 gridbase">
                    <div class="circle1"><img src="assets/dashboard/Content/images/registrationslip.png" />
                    </div>

                    <a class="dashBtn" href="registration_slip.php">
                        <div id="txtbox2"></br></br></br><strong>Registration Slip</strong></div>
                    </a>
                </div>
                <div class="col-md-4 gridbase">
                    <div class=" circle1">
                        <img src="assets/dashboard/Content/images/check_results.png" id="icon1" />
                    </div>
                    <a class="dashBtn" href="check_results.php">
                        <div id="txtbox2"></br></br></br><strong>Check Results</strong></div>
                    </a>
                </div>
                <div class="col-md-4 gridbase">
                    <div class="circle1"><img src="assets/dashboard/Content/images/assess_tutor.png" /></div>
                    <a class="dashBtn" href="access_tutor.php">
                        <div id="txtbox2"></br></br></br><strong>Assess Tutor</strong></div>
                    </a>
                </div>
                <div class="col-md-4 gridbase">
                    <div class="circle1"><img src="assets/dashboard/Content/images/fees_transaction.png" />
                    </div>
                    <a class="dashBtn" href="bills_and_payments.php">
                        <div id="txtbox2"></br></br></br><strong>Bill and Payments</strong></div>
                    </a>
                </div>
                <div class="col-md-4 gridbase">
                    <div class="circle1"><img src="assets/dashboard/Content/images/biometricicon.png" /></div>
                    <a class="dashBtn" href="#">
                        <div id="txtbox2"></br></br></br><strong>Biometric Verification</strong></div>
                    </a>
                </div>
                <div class="col-md-4 gridbase">
                    <div class="circle1"><img src="assets/dashboard/Content/images/graduation.png" /></div>
                    <a class="dashBtn" href="#">
                        <div id="txtbox2"></br></br></br><strong> Graduation</strong></div>
                    </a>
                </div>
            </div>
        </div>

        <script src="/students/Scripts/jquery-2.1.3.min.js"></script>

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
    </div>
</div>

<?php
    include_once 'partials/footer.php';
?>