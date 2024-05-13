jq(function() {
   // alert('1111');
    if (message != ""){
        setTimeout(
            function() {
                toastr.error(message, 'Login Error');
            },
        500);
    }

    if (change == 1) {
        toastr.info('You are required to change your password before you continue', 'Authentication');

        setTimeout(
          function() {
            jq('#changepwd').modal('show')
          },
        500);
    }

    jq('#bt-change-pwd').click(function(){
        if (jq('#TypePass').val() != jq('#ConfirmPass').val()){
            toastr.error('Your new passwords do not match. Try again', 'Authentication');
            return;
        }

        if (jq('#OldPass').val() == jq('#TypePass').val()){
            toastr.error('Your new password can not be the same as the old password. Try again', 'Authentication');
            return;
        }

        var pass = jq('#TypePass').val();

        var strength = 1;
        var arr = [/.{5,}/, /[a-z]+/, /[0-9]+/, /[A-Z]+/];
        jQuery.map(arr, function(regexp) {
          if(pass.match(regexp))
             strength++;
        });

        if (strength < 4){
            toastr.error('Specified password is weak and can be easily by passed. Try another', 'Authentication');
            return;
        }

        jq('#Password').val(jq('#TypePass').val());
        jq('#User_Password').val(jq('#OldPass').val());

        jq("form").submit();
    });


   
});



$(document).ready(function(){
    $("#loginForm").on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        if ($('#email').val() === "") {
            toastr.error('Please provide your email address','Login Failed', { "closeButton": true, "progressBar": true });
            return;
        }
        else if ($('#password').val() === "") {
            toastr.error('Please provide a password', 'Login Failed', { "closeButton": true, "progressBar": true });
            return;
        }


        $.ajax({
            url: '/custom_login',
            method: 'POST',
            data: formData,
            beforeSend: function() {
                toastr.info('Please wait while it is processing', 'Loading');
            },
            success: function(response) {
                if(response.code == '600'){
                    toastr.warning(response.message, 'Login failed');
                    $('#myModalLabel160').text(response.message);
                    $("#password_change").val(1);
                    $("#u_id").val(response.u_id);
                    setTimeout(
                        function() {
                            $("#changepwd").modal("show");
                        },
                      500);
                }

                else if(response.code == '200'){
                    setTimeout(
                        function() {
                            toastr.success(response.message, 'Login Success');
                        },
                      500);
                    
                    window.location.href = "/home";
                }
                else{
                    toastr.error(response.message, 'Login failed');
                }
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Form submission failed:', error);
              }
        });

        $("#updateConfirmationModal").modal("hide");
    });


    $("#changepwd").on('submit', function(event) {
       // event.preventDefault();

        if ($('#n_pass').val() === "") {
            toastr.error('Please provide your new password','Login Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if ($('#n_pass').val().length < 8) {
            toastr.error('The password should not be less than 8 characters', 'Login Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if ($('#c_pass').val() === "") {
            toastr.error('Please confirm your new password', 'Login Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if ($('#n_pass').val() !== $('#c_pass').val()) {
            toastr.error('The passwords are not the same. Kindly confirm again', 'Login Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        $.ajax({
            url: '/update-password',
            method: 'PUT',
            data: changepwd,
            beforeSend: function() {
                toastr.info('Please wait while it is processing', 'Loading');
            },
            success: function(response) {
                setTimeout(
                    function() {
                        toastr.success(response.message, 'Login failed');
                    },
                  500);
                  clearSession(response._token)
                  window.location.href = "/manage-users";
            },
            error: function(xhr, status, error) {
                console.error('Form submission failed:', error);
              }

        });

        

        
    });


})




function clearSession(token){
    $.ajax({
        url: '/clear-session',
        method: 'POST',
        data: {
            _token: token // Pass the token as part of the request data
        },
        success: function(response) {
            if (response.success) {
                console.log('Session cleared');
            } else {
                // Session clearing failed
                console.error('Failed to clear session');
            }
        },
        error: function(xhr, status, error) {
            // Handle AJAX error
            console.error('AJAX Error:', error);
        }
    });
}