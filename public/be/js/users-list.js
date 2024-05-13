$(document).ready(function(){
    var dataListView = $(".data-list-view").DataTable({
        responsive: false,
        columnDefs: [
          {
            orderable: true,
            targets: 0,
            checkboxes: { selectRow: false }
          }
        ],
        dom:
          '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
          sLengthMenu: "_MENU_",
          sSearch: ""
        },
        aLengthMenu: [[10, 15, 20, 100], [10, 15, 20, 100]],
        select: {
          style: "single"
        },
        order: [[1, "asc"]],
        bInfo: false,
        pageLength: 10,
        buttons: [
          {
            text: "<i class='feather icon-plus '></i><b>Add User</b>",
            action: function() {
              $(this).removeClass("btn-secondary");
              $(".add-new-data").addClass("show");
              $(".overlay-bg").addClass("show");
              $("#donor-idnt").val(0);
              jq('#modal-add-petty-cash').modal('show');
            },
            className: "btn-primary boxed-shadow"
          }
        ],
        initComplete: function(settings, json) {
          $(".dt-buttons .btn").removeClass("btn-secondary")
        }
      });
    
      dataListView.on('draw.dt', function(){
        setTimeout(function(){
          if (navigator.userAgent.indexOf("Mac OS X") != -1) {
            $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
          }
        }, 50);
      });

      let currentItemId = null;

      // Event handler for the "Update" buttons
      $(".update-button").click(function(evt) {
        evt.preventDefault();
        currentItemId = $(this).data("id"); // Get the ID of the clicked item
        currentUser = $(this).data('username');
        currentStatus = $(this).data('status');
        let textStatus = "";


       // $("#modal-body-content").text(`Are you sure you want to update ${currentItemId}'s?`);
        if(currentStatus == '1'){
          textStatus = "disable";
        }
        else{
          textStatus = "enable";
        }

        $("#current-status").text(textStatus);

        $('#status-txt').val(currentStatus)
        $('#user-txt').val(currentItemId)

        $("#update-entry-id").text(currentUser);
        $("#updateConfirmationModal").modal("show"); // Show the modal
      });


      $(".update-password").click(function(evt) {
          evt.preventDefault();
          currentItemId = $(this).data("id"); 
          $("#p-id").val(currentItemId);
          
          $("#formUpdatePassword").modal("show"); // Show the modal
      });

      $("#update_status").on('submit', function(event) {
          event.preventDefault();
       // if (currentItemId !== null) {
          // Perform the update action (e.g., make an AJAX request to update the item)
          var user = $('#user-txt').val();
          var formData = $(this).serialize();

          $.ajax({
              url: '/update_status/' + user,
              type: 'PUT',
              data: formData,
              beforeSend: function() {
                toastr.info('Please wait while it is processing', 'Loading');
              },
              success: function(response) {
                 // console.log(response)
                  toastr.success(response, 'Success');
                  window.location.href = "/manage-users";

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


      $("#formUpdatePassword").on('submit', function(event) {
        event.preventDefault();
        //alert('111');
     // if (currentItemId !== null) {
        // Perform the update action (e.g., make an AJAX request to update the item)
        var user = $('#user-txt').val();
        var formData = $(this).serialize();


        if ($('#n_pass').val() === "") {
          toastr.error('Please provide the new password');
          return;
        }

        else if ($('#p_pass').val() === "") {
          toastr.error('Please confirm the new password');
          return;
        }


        else if ($('#n_pass').val() !== $('#p_pass').val()) {
          toastr.error('The new and confirm password do not much');
          return;
        }

        
          toastr.success('Good to go');
          return;
        

        

        $.ajax({
            url: '/update_user/' + user,
            type: 'PUT',
            data: formData,
            beforeSend: function() {
              toastr.info('Please wait while it is processing', 'Loading');
            },
            success: function(response) {
               // console.log(response)
                toastr.success(response, 'Success');
                window.location.href = "/manage-users";

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

      $('.action-edit').on("click",function(e){
        e.stopPropagation();
        e.preventDefault();

    
        var idnt = $(this).data('idnt');
        var uuid = $(this).data('uuid');

        // alert(idnt);
        // return;
    
        $("#u_id").val(idnt);
        $("#u_fname,#u_lname,#u_phone,#gender,#u_email").val("");
    
        jq.ajax({
          dataType: "json",
          url: '/user/' + idnt,
          success: function(result) {
            console.log(result);
            $("#donor-idnt").val(result.id);
            $("#u_fname").val(result.u_fname);
            $("#u_lname").val(result.u_lname);
            $("#u_phone").val(result.u_phone);
            $("#gender").val(result.gender);
            $("#u_email").val(result.email);
            $('#u_email').attr('readonly', 'readonly');
    
            $('#modal-add-petty-cash').modal('show');
            $('#u_email').addClass('readonly');
            $(".overlay-bg").addClass("show");
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(xhr.status);
              console.log(thrownError);
          },
          complete: function() {
              //nothing todo
          }
        }); 
    });
});

jq(function() {
    
    

    $('#exampleModal').on('click', function(e) {
        if ($(e.target).hasClass('modal')) {
          var centerX = $(window).width() / 2;
          var centerY = $(window).height() / 2;
          var distance = Math.sqrt(Math.pow(e.pageX - centerX, 2) + Math.pow(e.pageY - centerY, 2));
          
          // Set new width and height based on distance
          $(this).css('width', distance * 2);
          $(this).css('height', distance * 2);
          
          // Center the modal
          $(this).css('top', 'calc(50% - ' + distance + 'px)');
          $(this).css('left', 'calc(50% - ' + distance + 'px)');
        }
      });




    jq('button.btn-print').click(function(){
        window.print();
    });

    jq('li.edit-action').click(function(){
        window.location.href = "/administration/petty-cash/edit?pc=" + uuid;
    });

    jq('li.email-action').click(function(){
        toastr.error('Action to email the Petty Cash is currently not enabled.', "Email Failed");
    });

    /* Approvals */
    jq('#bt-approve').click(function(){
        var status = jq('#approval-form select.status').val();
        var notes = jq('#approval-form textarea.notes').val();

        if (status == ''){
            toastr.error('Kindly provide an option the Voucher status', "Verification Failed");
            return;
        }

        if (status > 1 && notes == ''){
            toastr.error('Kindly provide the reason for Voucher cancellation/rejection', "Verification Failed");
            return;
        }

        jq('#approval-form').submit();
    });

    /* Payments */
    jq('li.payment-action').click(function(){
        jq("table.payment-details tbody tr").each(function(i, row) {
            if (i == 0){
                jq(this).removeClass('hidden');
            }
            else{
                if (!jq(this).hasClass('hidden')){
                    jq(this).addClass('hidden');
                }
            }
            
            jq(this).find('td:eq(0) select').val(2);
            jq(this).find('td:eq(1) input').val('');
            jq(this).find('td:eq(2) input').val('');
            jq(this).find('td:eq(3) input').val('');
        });

        jq('#modal-payment').modal('show');
    });

    jq('table.payment-details tbody tr td').on('blur change', 'input.pd-amts', function(){
        var totals = 0;

        jq("table.payment-details tbody tr").not(".hidden").each(function(i, row) {
            var amnt = jq(this).find('td:eq(3) input').val().trim();            
            if (jq.isNumeric(amnt)) {
                totals += eval(amnt);
            }
        });

        jq('table.payment-details tfoot tr:eq(0) th:eq(2)').html(totals.toString().toAccounting());
    });

    jq('#btn-payment-add-row').click(function(evt){
      //  alert('1111');
        evt.preventDefault();
        jq('#modal-add-petty-cash').modal('show');
       
    });

    jq('#btn-update-status').click(function(evt){
        alert('1111111');
        // evt.preventDefault();
        // jq('#modal-update-status').modal('show');
    });



    $('#modal-add-petty-cash').on('click', function(e) {
        if ($(e.target).hasClass('modal')) {
          var centerX = $(window).width() / 2;
          var centerY = $(window).height() / 2;
          var distance = Math.sqrt(Math.pow(e.pageX - centerX, 2) + Math.pow(e.pageY - centerY, 2));
          
          // Set new width and height based on distance
          $(this).css('width', distance * 2);
          $(this).css('height', distance * 2);
          
          // Center the modal
          $(this).css('top', 'calc(50% - ' + distance + 'px)');
          $(this).css('left', 'calc(50% - ' + distance + 'px)');
        }
      });


      jq('#btn-post-service').on('click', function(e){
        if (jq('#title').val().length < 1){
            toastr.error('Please provide the service title', 'Validation Failed');
            return false;
        }
        else if (jq('#desc').val().length < 1){
            toastr.error('Please provide more description of the service', 'Validation Failed');
            return false;
        }


        var formData = $('#post-service').serialize();
        $.ajax({
            type: 'POST',
            url: '/post_service',
            data: formData,
            beforeSend: function() {
                toastr.info('Please wait while it is processing', 'Loading');
            },
            success: function(response) {
                toastr.success('Service successfully saved. It will be displayed on to the landing page.', 'Success');
            },
            error: function(xhr, status, error) {
              // Handle error response
              console.error('Form submission failed:', error);
            }
        });
      });


      $('#submitBtn').click(function(e) {
        e.preventDefault();

        var formData = $('#user-data').serialize();
        var button = $(this);


        if ($('#gender').val() === null) {
          toastr.error('Please select the user gender');
          return;
        }
        $.blockUI();
        // return;
        $.ajax({
            url: '/add-user',
            type: 'POST',
            data: formData,
            beforeSend: function () {
                toast = toastr.info('Please wait as the product is being confirmed...', 'Vendor Product', { closeButton: true, progressBar: true, timeOut: "10000" });
                button.text("Please wait.....")
                button.prop("disabled", true);

            },
            success: function(response) {
                console.log(response);
                toastr.success(response.message, "Success");
                window.location.href = "/manage-users";
                return;
            },
            error: function (xhr, ajaxOptions, thrownError) {
                toastr.clear(toast);
                console.log(xhr.responseJSON);
                toastr.error(`Failed. Failed to create user. ${xhr.responseJSON?.error ?? ""}`, 'User', { "closeButton": true, "progressBar": true });
            },

            complete: function () {
                button.text("Save")
                button.prop("disabled", false);
                $.unblockUI();
            }
            
        });
    });

});


function mirrorInput(value) {
    // Replace spaces with underscores
    value = value.replace(/ /g, '_');
    // Convert uppercase letters to lowercase
    value = value.toLowerCase();
    document.getElementById('url').value = value;
}