@extends('be.main')
@section('content')


<script src="{{ asset('be/js/job-view.js') }}"></script>
<style>

    .profile-image {
        width: 70px;
        position: absolute;
        top: 99px;
        z-index: 1;
        cursor: pointer;
        border-radius: 3rem;
        border: 3px solid white;
    }

    .profile-edit-icon {
        position: relative;
        top: -40px;
        right: -20px;
    }

    .font-semibold {
        font-weight: 600 !important;
    }

    table.user-details td {
        vertical-align: top;
        min-width: 140px;
        word-break: break-all;
        padding-bottom: .8rem;
    }

    table.users-permission tbody td {
        padding-top: .5rem;
        padding-bottom: .5rem;
    }
</style>

<div class="content-body">
    <section>
        <div class="row">
            <div class="col-12 col-lg-9 pr-0">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job Description</h4>
                    </div>
                    <hr class="mb-0" />
                    <div class="card-content">
                        <div class="card-body row mx-2 px-0">
                        <p>Hello candidate. We are delighted to announce an opportunity for a <b>{{ $posts->jb_title }}</b> position. The job description is:</p>
                        <ul>
                            <?php foreach(preg_split('/(?<=[.?!])\s+(?=[a-zA-Z])/', $posts->jb_description) as $sentence){ ?>
                                <li class="text-dark"><?php echo trim($sentence); ?></li>
                            <?php } ?>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-bottom mx-2 px-0">
                        <h4 class="card-title">Job Qualifications</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body row mx-2 px-0">
                        <p>We are looking for a candidate who has the following qualifications:</p>
                        <ul>
                            <?php foreach(preg_split('/(?<=[.?!])\s+(?=[a-zA-Z])/', $posts->jb_requirements) as $sentence){ ?>
                                <li class="text-dark"><?php echo trim($sentence); ?></li>
                            <?php } ?>
                        </ul>
                        </div>
                    </div>

                    
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $posts->jb_title }}</h4>
                    </div>
                    <hr class="mb-0" />
                    <div class="card-content">
                        <div class="card-body row">
                            <div class="col-12 col-md-6">
                                <table class="user-details">
                                    <tr><td class="font-semibold">Applicants</td><td class="text-danger"><b>0</b></td></tr>
                                    <tr><td class="font-semibold">Status</td><td><span class="badge badge-{{ $posts->jb_status == '1' ? 'success' : 'danger' }}">{{ $posts->jb_status == '1' ? 'Hiring' : 'Not Hiring' }}</span></td></tr>
                                </table>
                            </div>

        
                            @if(Auth::check())
                            <button class="btn btn-secondary text-uppercase d-grid w-100 mb-2 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-2"></i><b>Edit Job Details</b></span>
                            </button>
                            <button class="btn btn-primary text-uppercase d-grid w-100 mb-2 waves-effect waves-light" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-2"></i><b>View Applicants</b></span>
                            </button>

                            <button data-status="{{ $posts->jb_status }}" data-id="{{ $posts->id }}" class="btn btn-{{ $posts->jb_status == 1 ? 'danger' : 'success'}} text-uppercase d-grid w-100 mb-2 waves-effect waves-light update-job-status" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-2"></i><b>{{ $posts->jb_status == 1 ? 'Close' : 'Open'}}</b></span>
                            </button>

                            @else

                            <button data-status="{{ $posts->jb_status }}" data-id="{{ $posts->id }}" class="btn btn-primary {{ $posts->jb_status == 0 ? 'disabled' : ''}} text-uppercase d-grid w-100 mb-2 waves-effect waves-light update-job-status" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-2"></i><b>{{ $posts->jb_status == 1 ? 'Apply' : 'Not Hiring atm'}}</b></span>
                            </button>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        Are you sure you want to <span id="current-status"></span> the job application?
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


@endsection