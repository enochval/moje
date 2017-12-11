@extends('layouts.auth')

@section('page-title') Login @endsection

@section('content')

    <div class="login-container">

        <div class="login-header login-caret">

            <div class="login-content">

                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ url('assets/images/logo-light.png') }}" width="260" height="60" alt="Moje college of education" />
                </a>

                <p class="description">Dear user, log in to access the admin area!</p>

                <!-- progress bar indicator -->
                <div class="login-progressbar-indicator">
                    <h3>43%</h3>
                    <span>logging in...</span>
                </div>
            </div>

        </div>

        <div class="login-progressbar">
            <div></div>
        </div>

        <div class="login-form">

            <div class="login-content">

                <div class="form-login-error">
                    <h3>Invalid login</h3>
                    <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
                </div>

                <form action="{{ url('/login') }}" method="post" role="form" id="form_login">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-user"></i>
                            </div>

                            <input type="text" class="form-control" name="school_id" id="school_id" placeholder="School ID" autocomplete="off" />
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-key"></i>
                            </div>

                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-login">
                            Login In
                            <i class="entypo-login"></i>
                        </button>
                    </div>

                    <!-- Implemented in v1.1.4 -->				<div class="form-group">
                        <em>- or -</em>
                    </div>

                    <div class="form-group">

                        <div class="form-group">
                            <a href="{{ url('/admission/login') }}">
                                <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
                                    New Student Registration
                                    <i class="entypo-graduation-cap"></i>
                                </button>
                            </a>
                        </div>

                    </div>

                </form>


                <div class="login-bottom-links">

                    <a href="extra-forgot-password.html" class="link">Forgot your password?</a>

                    <br />

                    <a href="#">ToS</a>  - <a href="#">Privacy Policy</a>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/neon-login.js') }}"></script>
@endsection