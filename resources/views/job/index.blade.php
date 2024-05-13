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

<script src="be/js/jobs-list.js"></script>


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
    .editor-form {
        max-width: 600px;
        margin: 0 auto;
    }
    .editor-form label {
        display: block;
        margin-bottom: 10px;
    }
    .editor-form textarea {
        width: 100%;
        height: 200px;
    }
    .editor-form button {
        display: block;
        margin-top: 10px;
    }
</style>

<div class="content-body">
    <h1 class="display-4">Manage Jobs</h1>
    <hr />
    <section id="data-list-" class="data-list-view-header">
        <div class="table-responsive">
            <table class="table data-list-view">
                <thead>
                    <tr style="">
                        <th>#</th>
                        <th>JOB TITLE</th>
                        <th>TOTAL APPLICANTS</th>
                        <th>DATE POSTED</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $key=>$jb)
                        <tr class="text-uppercase">
                            <td class="text-primary"><b>1</b></td>
                            <td class="text-uppercase">{{ $jb->jb_title }}</td>
                            <td class="text-center"><b>0</b></td>
                            <td style="margin-top:0px; width:140px;">{{ $jb->jb_date_posted }}</td>
                            <!-- <td class="text-left text-capitalize">Super Admin</td> -->
                            <td style="width:110px;">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Update Job Status" data-status="" data-username="" data-id="" class="update-button"><i style="stroke-width=1;" class="feather icon-{{ $jb->jb_status == '1'  ? 'slash danger': 'check-circle success' }} td-action"></i></a>
                                <a data-idnt="{{ $jb->id }}" class="action-edit" href=""><i class="feather icon-edit-1 dark td-action"></i></a>
                                <a href="job/{{ $jb->id }}" data-toggle="tooltip" data-placement="bottom" title="View Job" data-status="" data-username="" data-id="{{ $jb->id }}"><b><i class="feather icon-airplay primary td-action"></i></b></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
<div class="modal fade text-left" id="modal-add-petty-cash"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
    <div class="modal-dialog wi modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h5 class="modal-title" id="myModalLabel160">&nbsp;JOB DETAILS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form id="frmJob">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-2">
                                <label for="Request_Date"><b class="text-uppercase">Job Title</b></label> 
                                    <input type="hidden" name="jb_id" class="form-control" id="jb_id">
                                    <input type="text" name="jb_title" id="jb_title" class="form-control">
                                <div class="form-control-position">
                                    <i class="feather icon-arrow-right-circle"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-25">
                                <label for="Request_Date"><b class="text-uppercase">Job Description</b></label>
                                <textarea name="jb_description" class="form-control" id="jb_description" cols="30" rows="10"></textarea>
                                <div class="form-control-position">
                                    <i class="feather icon-arrow-right-circle"></i>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <fieldset class="form-group has-icon-left input-divider-left p-0 mb-25">
                                <label for="Request_Date"><b class="text-uppercase">Job Qualifications</b></label>
                                <textarea name="jb_requirements" class="form-control" id="jb_requirements" cols="30" rows="10"></textarea>
                                <div class="form-control-position">
                                    <i class="feather icon-arrow-right-circle"></i>
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
    


@endsection