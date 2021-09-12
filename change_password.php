<?php
    include_once 'partials/navbar.php';
    require_once 'database/config.php';
    require_once 'helpers/functions.php';
?>

<div id="content">
    <div class="container">
        <form method="POST">
            <input
                name="" type="hidden"
                value="" />
            <h4>Step 2 of 2: Change password.</h4>
            <hr />
            <div class="form-group">
                <label class="col-md-2" for="PREV_PASSWORD">Previous password</label>
                <div class="col-md-10">
                    <input class="form-control" id="PREV_PASSWORD" name="PREV_PASSWORD" type="password" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2" for="NEW_PASSWORD">New password</label>
                <div class="col-md-10">
                    <input class="form-control" id="NEW_PASSWORD" name="NEW_PASSWORD" type="password" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2" for="CONFIRM_PASSWORD">Confirm password</label>
                <div class="col-md-10">
                    <input class="form-control" id="CONFIRM_PASSWORD" name="CONFIRM_PASSWORD" type="password" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button class="btn btn-default" value="Continue" onclick="change_password()">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include_once 'partials/footer.php';
?>  
<script>

    function change_password(){

        var p_password      = $('#PREV_PASSWORD').val();
        var new_password    = $('#NEW_PASSWORD').val()  ;
        var old_password    = $('#CONFIRM_PASSWORD').val();

        if(p_password == ""){

        }
        else if(new_password == ""){

        }
        else{
            $.ajax({
                url: "database/password_management/change_password.php",
                method: "POST",
                data:{
                    "PREV_PASSWORD"     : p_password,
                    "NEW_PASSWORD"      : new_password,
                    "CONFIRM_PASSWORD"  : old_password,    
                }, 
                success: function(data){
                    // alert(data);
                    if(data.includes("success")){
                        swal({
                        title: 'Success',
                        text: "Password change successfully",
                        icon: 'success',
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
    }
    
</script>