<?php
    include_once 'partials/navbar.php';
?>
<div id="content">
    <div class="container">

        <form action="/students/ResultCheck/AcadSemSelection" method="post">
            <div id="main-body" class="box css">
                <div style="text-align:center;">
                    <br /><br /><br /><br />
                    <b>Please Select Academic Year:</b><br />
                    <select data-val="true" data-val-number="The field Academic Year must be a number."
                        data-val-required="Academic Year is required" id="ACADYEAR" name="ACADYEAR">
                        <option selected="selected" value="2021">2020 - 2021</option>
                        <option value="2020">2019 - 2020</option>
                    </select>
                    <span class="field-validation-valid" data-valmsg-for="ACADYEAR" data-valmsg-replace="true"></span>

                    <br /><br />

                    <b>Please Select Semester:</b><br />
                    <select data-val="true" data-val-number="The field Semester must be a number."
                        data-val-required="Semester is required" id="SEM" name="SEM">
                        <option selected="selected" value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                    <span class="field-validation-valid" data-valmsg-for="SEM" data-valmsg-replace="true"></span>

                    <br /><br />

                    <br />

                    <p style="padding-top: 5px">
                        <input type="submit" id="displayresult" value="Display Results"
                            class="btn btn-primary btn-large" style="width: 30%; min-width: 140px" />
                    </p>
                    <br /><br />
                    <br />
                </div>
            </div>
        </form>

    </div>
</div>
<?php
    include_once 'partials/footer.php';
?>