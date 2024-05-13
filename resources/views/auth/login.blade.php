@extends('be.main')

@section('content')

<link rel="stylesheet" type="text/css" href="be/css/pages/authentication.css">
<style>
    fieldset .form-control-position {
        top: 2px;
    }
</style>

<script>
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
</script>

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper m-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="be/images/pages/login.jpg" alt="Login">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Welcome back, please login to your account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1 mb-3">
                                                <form id="loginForm">
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input hidden type="text" name="_token" value="{{ csrf_token() }}">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                        <label for="User_Username">Email Address</label>
                                                    </fieldset>
                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="User_Password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="/auth/forgot-password" class="card-link">Forgot Password?</a></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text">OR</div>
                                            </div>
                                            <div class="footer-btn d-inline">
                                                <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                                <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                                <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Change Password -->
    <div class="modal fade text-left" id="changepwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning white">
                    <h5 class="modal-title" id="myModalLabel160">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="pt-1">
                        <form id="changepwd">
                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                <input id="password_change" name="pass_change" type="text" hidden>
                                <input id="u_id" name="u_id" type="text" hidden>                         
                                <input id="n_pass" type="password" name="n_pass" placeholder="New Password" class="form-control"/>
                                <div class="form-control-position">
                                    <i class="feather icon-unlock"></i>
                                </div>
                                <label for="TypePass">New Password</label>
                            </fieldset>

                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                <input id="c_pass" type="password" name="c_pass" placeholder="Confirm Password" class="form-control"/>
                                <div class="form-control-position">
                                    <i class="feather icon-unlock"></i>
                                </div>
                                <label for="ConfirmPass">Confirm Password</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="bt-change-pwd">Update</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="be/vendors/js/signalr/signalr.js"></script>
    <script src="be/js/wise-erp-core.js"></script>
    <script src="be/vendors/js/vendors.min.js"></script>
    <script src="be/vendors/js/extensions/toastr.min.js"></script>
    <script src="be/js/core/app-menu.js"></script>
    <script src="be/js/core/app.js"></script>
    <script src="be/js/scripts/components.js"></script>
    <script src="be/js/accounts-login.js"></script>
</body>
@endsection
