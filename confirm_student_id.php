<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';
?>
<div id="content">
    <div class="container">
            <input
                name="" type="hidden"
                value="" />
            <h4>Step 1 of 2: Enter your Student ID.</h4>
            <hr />
            <div class="form-group">
                <label class="col-md-2" for="StudentID">Student ID</label>
                <div class="col-md-10">
                    <input class="form-control" id="STUDENT_ID" name="STUDENT_ID" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button class="btn btn-default" value="Continue" onclick="confirm_student_id()">Confirm</button>
                </div>
            </div>
    </div>
</div>

<?php
    include_once 'partials/footer.php';
?>

<script>
    function confirm_student_id(){
        $.ajax({
            url: "database/register_and_login/confirm_student_id.php",
            method: "POST",
            data:{
                "entered_id" : $('#STUDENT_ID').val()
            }, 
            success: function(data){
                if(data == "success"){
                  location.href="change_password.php";
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
    
</script>