
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>St. Patrick's NMTC Student login</title>
    <link rel="stylesheet" href="assets/css/form.css">
  </head>
    
  <body style="background: black">
    <div class="center">
      <h1>Student Login</h1>
      <form method="post" enctype="multipart/form-data" id="login_form">
        <div class="txt_field">
          <input type="text" id="username" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" id="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
            <input type="student id" id="student_id" name="student_id" required>
            <span></span>
            <label>Student ID</label>
          </div>
        <input type="submit" value="Login">
        <br>
        </br>
        <div class="pass">Forgot Password?</div>
        <div class="spnmtc 2021">
        <div class="pass">&copy;spnmtc 2021. All Rights Reserved.</div>
        </div>
      </form>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="assets/dashboard/Scripts/sweetalert.min.js"></script>

    <script>
        $(document).on('submit', '#login_form', function(event){
          event.preventDefault();
          $.ajax({
            url: "database/loginscript.php",
            method: "POST",
            data: new FormData(this),
            contentType: false, 
            cache: false, 
            processData: false,
            success: function(data){
                if(data == "success"){
                  location.href="dashboard.php";
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
        })
    </script>
  </body>
</html>
