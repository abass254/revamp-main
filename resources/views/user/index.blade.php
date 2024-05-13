@extends('be.main')
@section('content')
<link rel="stylesheet" type="text/css" href="be/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="be/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
<link rel="stylesheet" type="text/css" href="be/css/pages/data-list-view.css">
<style>
    td.product-action span i.feather {
        font-size: 1.3em;
    }
</style>

<script src="be/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="be/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="be/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="be/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="be/vendors/js/tables/datatable/dataTables.select.min.js"></script>
<script src="be/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="be/components/jq.blockUI.js"></script>


<script src="be/js/users-list.js"></script>    

<style>
    div.search-list div.fields {
        padding: 0 7px;
    }
    .card .card-header {
        padding-bottom: 0px !important;
    }
    div.dataTables_length,
    div.dataTables_filter {
        display: none;
    }
    tr.th{
        text-indent:20px;
    }
    tr.td{
        text-indent:20px;
    }
</style>

<div class="content-body">
    <h1 class="display-4">Manage Users</h1>
    <hr />
    <section id="data-list-view" class="data-list-view-header">
        <div class="table-responsive">
            <table class="table data-list-view">
                <thead>
                    <tr style="">
                        <th>#</th>
                        <th></i></th>
                        <th>USERNAME</th>
                        <th>FULL NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                        <th>GENDER</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key=>$sv)
                        <tr class="text-uppercase">
                            <td class="text-primary"><b>{{ $key+1 }}</b></td>
                            <td><img src="be/images/avatar/avatar-{{strtolower($sv->gender)}}.jpg" height="32" width="32"></td>
                            <td class="text-lowercase">{{ $sv->u_name }}</td>
                            <td>{{ $sv->u_fname }} {{ $sv->u_lname }}</td>
                            <td class="text-left text-lowercase">{{ $sv->email }}</td>
                            <td>{{ $sv->u_phone }}</td>
                            <td>{{ $sv->gender }}</td>
                            <!-- <td class="text-left text-capitalize">Super Admin</td> -->
                            <td>
                                <a href="#" data-status="{{ $sv->u_enabled }}" data-username="{{ $sv->u_name }}" data-id="{{ $sv->id }}" class="update-button"><i style="stroke-width=1;" class="feather icon-{{ $sv->u_enabled == '1'  ? 'slash danger': 'check-circle success' }} td-action"></i></a>
                                <a data-idnt="{{ $sv->id }}" class="action-edit" href=""><i class="feather icon-edit-1 dark td-action"></i></a>
                                <a href="#" data-status="{{ $sv->u_enabled }}" data-username="{{ $sv->u_name }}" data-id="{{ $sv->id }}" class="update-password"><b><i class="feather icon-lock primary td-action"></i></b></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>x

    <!-- Payment -->
<div class="modal fade text-left" id="modal-add-petty-cash"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-dialog wi modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h5 class="modal-title" id="myModalLabel160">&nbsp;USER DETAILS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="user-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-2">
                                <label for="Request_Date"><b class="text-uppercase">First Name</b></label> 
                                    <input type="hidden" name="u_id" class="form-control" id="u_id">
                                    <input type="text" name="u_fname" id="u_fname" class="form-control">
                                <div class="form-control-position">
                                    <i class="feather icon-arrow-right-circle"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-25">
                                <label for="Request_Date"><b class="text-uppercase">Last Name</b></label>
                                <input type="text" name="u_lname" id="u_lname" class="form-control"/>
                                <div class="form-control-position">
                                    <i class="feather icon-arrow-right-circle"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-2">
                                <label for="Request_Date"><b class="text-uppercase">Phone Number</b></label> 
                                    <input type="text" name="u_phone" id="u_phone" class="form-control">
                                <div class="form-control-position">
                                    <i class="feather icon-phone"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-2">
                                <label for="Request_Date"><b class="text-uppercase">Gender</b></label> 
                                    <select name="gender" class="form-control" id="gender">
                                        <option value="" disabled selected>--SELECT--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                <div class="form-control-position">
                                    <i class="feather icon-crosshair"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-50">
                                <label for="Request_Date"><b class="text-uppercase">Email Address</b></label>
                                <input type="email" name="u_email" id="u_email" class="form-control"/>
                                <div class="form-control-position">
                                    <i class="feather icon-mail"></i>
                                </div>
                            </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-between;">
                        <div>
                            <button type="button" id="submitBtn" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade text-left" id="formUpdatePassword"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-dialog wi modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger white">
                <h5 class="modal-title" id="myModalLabel160">&nbsp;UPDATE USER PASSWORD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formUpdatePassword">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-2">
                                <label for="Request_Date"><b class="text-uppercase">New Password</b></label> 
                                    <input type="password" name="n_pass" id="n_pass" class="form-control">
                                    <input hidden type="text" name="u_id" class="form-control" id="p-id">
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-25">
                                <label for="Request_Date"><b class="text-uppercase">Confirm Password</b></label>
                                <input type="password" name="c_pass" id="c_pass" class="form-control"/>
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-between;">
                        <div>
                            <button type="submit" class="btn btn-danger">UPDATE PASSWORD</button>
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="updateConfirmationModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to <span id="current-status"></span> <strong id="update-entry-id"></strong>?
      </div>
      <div class="modal-footer">
        <form id="update_status">
            <input type="text" hidden name="_token" value="{{ $_token }}">
            <input type="text" hidden name="user_txt" hidden id="user-txt" value="1">
            <input type="text" hidden name="status_txt" id="status-txt">
            
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- <div class="modal fade" id="" tabindex="-1" aria-labelledby="updateConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateConfirmationModalLabel">Confirm Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to <span id="current-status"></span> <strong id="update-entry-id"></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="confirmUpdateButton">Confirm</button>
      </div>
    </div>
  </div>
</div> -->
    


@endsection