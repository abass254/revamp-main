$(document).ready(function() {
    $("#frm-clear-session").on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: '/clear-session',
            method: 'POST',
            data: $(this).serialize(),
            beforeSend: function() {
                toastr.info('Please wait while it is processing', 'Loading');
              },
              success: function(response) {
                 // console.log(response)
                  toastr.success('Successfully logged out', 'Success');
                  window.location.href = "/login";

              },
              error: function(xhr, status, error) {
                // Handle error response
                console.error('Form submission failed:', error);
              }
        });
    });

    
});