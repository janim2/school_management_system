(function ($) {

    var apps = {
        init: function () {
            ParentPanel = $("#apps-home-panel");
            ParentPanel.on('click', '.examCentre-submit-btn', this.submitAcadrecordForm);
          
        },
        ajaxLoader: function (xhr) {
            var $this = $(this);
       
        },
        ajaxSuccess: function (data, status, xhr) {
            //apps.AddEvents($(document));
        },
        ajaxFailure: function (xhr, status, error) {
            sweetAlert(error);
        },
        //----------------------------------------------exams centre---------------------------------------------------------------------
        submitAcadrecordForm: function (e) {
            e.preventDefault();
            var $this = $(this), useraction = $this.data('useraction');
            var activeform = ParentPanel.find("form.main");
            bindFormValidation();
            if (activeform.valid()) {
                activeform.submit();
            }
            
            function bindFormValidation() {
                $(activeform).removeData("validator");
                $(activeform).removeData("unobtrusiveValidation");
                $.validator.unobtrusive.parse(activeform);
            }
        },

        SubmitSuccessAcadrecord: function (data, status, xhr) {
            if (status == "success") {
                $('#apps-examscentre-panel').html(data);
            }
            else {
                alert("Something went wrong");
            }
            alert("Exam Centre Saved Successfully");
        },

        // --------------------------added fxn---------------------------------------
        ExamCentreFormModal: function (useraction, studentid) {
            Globaluseraction = useraction;
            if (useraction == "NewEntry") {
                var urlextention = "?useraction=" + Globaluseraction + "&studentid=" + studentid
            }
            else if (useraction == "EditEntry") {

                var urlextention = "?useraction=" + Globaluseraction + "&studentid=" + studentid
            }
            var modal = $("#ExamCentreFormModal");
            $.ajax({
                type: "GET",
                url: window.baseUrl + "Home/ExamCentreModal" + urlextention,
                success: function (data) {
                    $("#ExamCentreFormControls", modal).html(data).show();
                    $("form", modal).removeData("validator");
                    $("form", modal).removeData("unobtrusiveValidation");
                    $.validator.unobtrusive.parse("form", modal);
                    $(".loading-element", modal).hide();
                    $(modal).modal('show');
                },
                error: function (data) {
                    alert(data.ErrorMessage);
                }
            });
        },
        ExamCentreRequest: function (e) {//we have two ajax in this function
            var urlextention = "?useraction=" + Globaluseraction;
            var modal = $(e).closest("#ExamCentreFormModal");
            var form = $('form', modal).get(0);
            $.ajax({//note this is an ajax
                url: baseUrl + "Home/UpdateExamCentre" + urlextention,
                type: 'POST',
                data: new FormData(form),
                processData: false,
                contentType: false,
                success: function (data, status, xhr) {
                    if (status == "success") {
                        modal.modal('hide');
                        $.get(window.baseUrl + "Home/ExamCentrePanel?actiontype=list", function (data) { //this is also an ajax (
                            $('#apps-examscentre-panel').html(data);
                        });
                    } else {
                        alert(data.ErrorMessage)
                    }
                }
            });
        },




        //----------------------------------------------General-------------------------------------------------------

		SubmitFailure: function(xhr, status, error) {
			console.log("xhr", xhr);
			console.log("status", status);
			alert(error);
		}
        
   }
    apps.init();
    window.apps = apps;
})(jQuery)




	