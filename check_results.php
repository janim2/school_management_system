<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';

?>
<div id="content">
    <div class="container">

        <!-- <form method="POST"> -->
            <div id="main-body" class="box css">
                <div style="text-align:center;">
                    <br /><br /><br /><br />
                    <b>Please Select Academic Year:</b><br />
                    <select data-val="true" data-val-number="The field Academic Year must be a number."
                        data-val-required="Academic Year is required" id="ACADYEAR" name="ACADYEAR">
                        <?php
                            $academic_year_query = "SELECT * FROM academic_year";
                            $academic_year_statement = $con->prepare($academic_year_query);

                            $academic_year_statement->execute();
                            $academic_year_results = $academic_year_statement->fetchAll(PDO::FETCH_ASSOC);

                            foreach($academic_year_results as $academic_year_result){?>
                                <option value="<?= $academic_year_result['id'];?>"><?= $academic_year_result['name'];?></option>
                        <?php
                            }
                        ?>
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
                        <input type="submit" id="displayresult" value="Display Results" onclick="view_results()"
                            class="btn btn-primary btn-large" style="width: 30%; min-width: 140px" />
                    </p>
                    <br /><br />
                    <br />
                </div>
            </div>
        <!-- </form> -->

    </div>
</div>

<script>
    function view_results(){
        location.href='view_results.php?year=' + $('#ACADYEAR').val() + '&sem=' + $('#SEM').val();
    }

</script>
<?php
    include_once 'partials/footer.php';
?>