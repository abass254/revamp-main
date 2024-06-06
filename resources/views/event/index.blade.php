@extends('be.main')
@section('content')

<script src="be/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="be/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="be/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="be/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="be/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="be/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="be/js/events-list.js"></script>


<link rel="stylesheet" type="text/css" href="be/vendors/css/tables/datatable/datatables.min.css">
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
</style>

<div class="content-body">
    <h1 class="display-4">Services Offered By Konvergenz</h1>
    <hr />

    <section class="top-side-up">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body card-dashboard" style="padding-top:10px">
                            <div class="table-responsive">
                                <table id="queue-table" class="table data-list">
                                    <thead>
                                    <!-- 'ev_title', 'ev_code', 'ev_type', 'ev_start', 'ev_end', 'ev_date', 'ev_venue', 'ev_banner', 'ev_desc', 'ev_status', 'ev_presenter', 'ev_gender', 'ev_photo' -->
                                        <tr>
                                            <th>#</th>
                                            <th></i></th>
                                            <th>TITLE</th>
                                            <th>BANNER</th>
                                            <th>TYPE</th>
                                            <th>VENUE</th>
                                            <th>EVENT LINK</th>
                                            <th>DATE</th>
                                            <th>START TIME</th>
                                            <th>END TIME</th>
                                            <th>PRESENTED BY</th>
                                            <th>GENDER(FOR ICON)</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i = 1; $i < 5; $i++)
                                            <tr>
                                                <td>EV-1999</td>
                                                <td><a href="">TITLE</a></td>
                                                <td><img src="{{ asset('assets/images/henry-event.jpeg') }}" height="50" width="50"></td>
                                                <td>TYPE</td>
                                                <td>EV-1999</td>
                                                <td>EV-1999</td>
                                                <td>EV-1999</td>
                                                <td>EV-1999</td>
                                                <td>EV-1999</td>
                                                <td>EV-1999</td>
                                                <td width="240px">DESC</td>
                                                <td><span class="bullet bullet-sm bullet-success"></span>Hide</td>
                                                <td>
                                                    <a href=""> <i class="feather icon-edit-1 dark td-action"></i></a>
                                                    <a href=""> <i class="feather icon-airplay td-action"></i></a>
                                                    <a class="pointer redirect-link" data-uuid=""> <i class="feather icon-x danger td-action"></i></a>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<a id="btn-payment-add-row"  class="vs-component vs-button buy-now vs-button-danger vs-button-filled pointer btn-payment-add-row btn-add-petty-cash" href="#">
    <span class="vs-button-text vs-button--text"><b>Add Service</b></span>
</a>    

<!-- <a class="vs-component vs-button buy-now vs-button-danger vs-button-filled pointer btn-add-petty-cash">
        <span class="vs-button-text vs-button--text">Add New</span>
    </a> -->

    <!-- Payment -->
    <div class="modal fade text-left" id="modal-add-petty-cash"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
        <div class="modal-dialog wi modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary white">
                    <h5 class="modal-title" id="myModalLabel160">&nbsp;SERVICE DETAILS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="add-blog-post-form" id="post-service" method="post" action="/post_service">
                        <div class="modal-body">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <fieldset class="form-group has-icon-left input-divider-left p-0 mb-2">
                                        <label for="Request_Date"><b>SERVICE TITLE</b></label> 
                                            <input type="text" id="service_id" hidden="">
                                            <input type="text" id="title" oninput="mirrorInput(this.value)" class="form-control">
                                        <div class="form-control-position">
                                            <i class="feather icon-clipboard"></i>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-12 col-lg-12">
                                    <fieldset class="form-group has-icon-left input-divider-left p-0 mb-25">
                                        <label for="Request_Date"><b>EXTENSION</b></label>
                                        <input type="text" id="url" readonly class="form-control"/>
                                        <div class="form-control-position">
                                            <i class="feather icon-globe"></i>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-12">
                                    <fieldset class="form-group has-icon-left input-divider-left p-0 mb-50">
                                        <label for="Request_Date"><b>Please give a brief description of the service</b></label>
                                        <textarea name="" id="desc" class="form-control" id="" cols="40" rows="10"></textarea>
                                        <div class="form-control-position">
                                            <i class="fa fa-sticky-note-o"></i>
                                        </div>
                                    </div>
                                    </fieldset>
                            </div>
                        </div>
                        <div class="modal-footer" style="justify-content: space-between;">
                            <div>
                                <button type="button" class="btn btn-primary" id="btn-post-service">Save</button>
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    


@endsection