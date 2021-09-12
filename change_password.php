<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';
?>
<div id="content">
    <div class="container">
        <form class="form-horizontal" method="post" role="form"><input
                name="__RequestVerificationToken" type="hidden"
                value="bAnmzJ2qs0Pwf3EzDfrJXF2-DncKxhKrB0zpolqRxSMisCQVNmbnnDnRzYLb7G9I02Uswz6srlJRxJ1p-AgjIXhKMByzEYmfsW4pwPOPrPP1wYwo6uliWVtJIxSg_fxr5-iAUDtf9CBIEvGGedE79Q2" />
            <h4>Step 2 of 2: Change password.</h4>
            <hr />
            <div class="validation-summary-valid text-danger" data-valmsg-summary="true">
                <ul>
                    <li style="display:none"></li>
                </ul>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="StudentID">Student ID</label>
                <div class="col-md-10">
                    <input class="form-control" data-val="true"
                        data-val-length="Student ID should have a length of 8 Characters" data-val-length-max="8"
                        data-val-length-min="8" data-val-required="The Student ID field is required." id="StudentID"
                        name="StudentID" type="text" value="" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" class="btn btn-default" value="Continue" />
                </div>
            </div>
        </form>

    </div>
</div>

<?php
    include_once 'partials/footer.php';
?>