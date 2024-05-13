$(document).ready(function(){
    $(".update-job-status").click(function(evt) {
        evt.preventDefault();
        currentItemId = $(this).data("id"); // Get the ID of the clicked item
        currentStatus = $(this).data('status');
        let textStatus = "";


       // $("#modal-body-content").text(`Are you sure you want to update ${currentItemId}'s?`);
        if(currentStatus == '1'){
          textStatus = "close";
        }
        else{
          textStatus = "open";
        }

        $("#current-status").text(textStatus);

        $('#status-txt').val(currentStatus)
        $('#user-txt').val(currentItemId)

        $("#updateConfirmationModal").modal("show"); // Show the modal
    });
    

    $("#update_status").on('submit', function(event) {
        event.preventDefault();
        var user = $('#user-txt').val();
        var formData = $(this).serialize();

        $.ajax({
            url: '/update_job_status/' + user,
            type: 'PUT',
            data: formData,
            beforeSend: function() {
              toastr.info('Please wait while it is processing', 'Loading');
            },
            success: function(response) {
               // console.log(response)
                toastr.success(response, 'Success');
                window.location.href = '/job/' + user;

            },
            error: function(xhr, status, error) {
              // Handle error response
              console.error('Form submission failed:', error);
            }
        });
     //   console.log("Updating item with ID:", currentItemId);
        
        // Close the modal after confirming
        $("#updateConfirmationModal").modal("hide");
    });
});