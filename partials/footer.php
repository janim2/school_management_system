
<div id="footer" class="text-center">
    <h5><small>Copyright © 2021 St. Patrick's Nursing and Mid-wifery Training College . All Rights
            Reserved</small></h5>
</div>
</div>
<script src="assets/dashboard/Scripts/sweetalert.min.js"></script>
<script src="assets/dashboard/Scripts/jquery.validate.min.js"></script>
<script src="assets/dashboard/Scripts/jquery.validate.unobtrusive.min.js"></script>
<script src="assets/dashboard/Scripts/jquery.unobtrusive-ajax.min.js"></script>
<script src="assets/dashboard/Scripts/jquery-2.1.3.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script>
<script src="assets/dashboard/Scripts/jquery.dateselect.min.js"></script>
<script src="assets/dashboard/Scripts/bootstrap.min.js"></script>
<script src="assets/dashboard/Scripts/respond.min.js"></script>
<script src="assets/dashboard/Scripts/custom.js"></script>

<script type="text/javascript">
    var baseUrl = "https://apps.knust.edu.gh/students/";
</script>

<script>
    function Logout() {
        swal({
            title: 'Logout',
            text: 'All local data would be lost. Are you sure you want to logout?',
            icon: 'info',
            buttons: ["No", "Yes"],
            closeOnClickOutside: false,
        }).then(function (confirmed) {
            if (confirmed) {
                $.ajax({
                    url: 'database/logout.php',
                    method: 'POST',
                    success: function (data) {
                        if (data == "success") {
                            location.href = 'login.php';
                        }
                    }
                });
            }
        });
    }
</script>

</body>

</html>