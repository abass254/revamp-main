// String.prototype.toAccounting = function() {
//     var str = parseFloat(this).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
//     if (str.charAt(0) == '-') {
//         return '(' + str.substring(1, 40) + ')';
//     }
//     else {
//         return str;
//     }
// };

jq(function() {
    

    //  alert('11111');
      tbl = $("#queue-table").DataTable({
          responsive: true,
          "order": [[ 3, "asc" ]],
          'columnDefs': [{
              "orderable": false,
              "targets": [0],
              "visible": false
          }, {
              className: "text-center",
              "orderable": false,
              "targets": [1],
          }, {
              className: "dt-nowrap", 
              "targets": [2]
          }, {
              className: "dt-nowrap", 
              "targets": [3]
          }, {
              className: "text-center",
              "orderable": false,
              "targets": [4]
          }, {
              className: "dt-nowrap", 
              "targets": [5]
          }, {
              className: "dt-nowrap", 
              "targets": [6]
          }, {
              className: "dt-nowrap", 
              "targets": [7]
          }, {
              className: "dt-nowrap", 
              "targets": [8]
          }, {
              className: "dt-nowrap", 
              "targets": [9]
           }, {
                className: "dt-nowrap", 
                "targets": [10]
           }, {
                className: "dt-nowrap", 
                "targets": [11]
           },{
              className: "dt-nowrap", 
              "targets": [12]
          }],
          "displayLength": 25,
          "language": {
              "emptyTable": "No Services Availability",
              "zeroRecords": "No Petty Cash matched the criteria"
          }
      });
      
  
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
  
  
  
      
  
  });
  
  
  function mirrorInput(value) {
      // Replace spaces with underscores
      value = value.replace(/ /g, '_');
      // Convert uppercase letters to lowercase
      value = value.toLowerCase();
      document.getElementById('url').value = value;
  }