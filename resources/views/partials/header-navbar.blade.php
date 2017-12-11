<header class="navbar navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->

    <div class="navbar-inner">

        <!-- logo -->
        <div class="navbar-brand">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/images/logo-light.png') }}" width="120" height="16" alt="Moje college of education" />
            </a>
        </div>



    @if(!auth()->guest())
        <ul class="navbar-nav">
            @role('applicant')
            <li>
                <a href="{{ url('/admission/dashboard') }}">
                    <i class="entypo-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @endrole

            @role('admin')
            <li class="opened active">
                <a href="#">
                    <i class="entypo-layout"></i>
                    <span>Administrator</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('users') }}">
                            <span>Manage Users</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ url('roles') }}">
                            <span>Manage Roles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admission/registration/list') }}">
                            <span>Registration</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admission/index') }}">
                            <span>Admissions</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endrole

            @role('registrar')
            <li class="opened active">
                <a href="#">
                    <i class="entypo-layout"></i>
                    <span>Registrar</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admission/registration/list') }}">
                            <span>Registration</span>
                            {{--<span class="badge badge-warning badge-roundless">Updated</span>--}}
                        </a>
                    </li>
                </ul>
            </li>
            @endrole

            @role('admin-officer')
            <li class="opened active">
                <a href="#">
                    <i class="entypo-layout"></i>
                    <span>Registrar</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('/admission/registration/list') }}">
                            <span>Registration List</span>
                            {{--<span class="badge badge-warning badge-roundless">Updated</span>--}}
                        </a>
                    </li>
                </ul>
            </li>
            @endrole
        </ul>


        <!-- notifications and other links -->
        <ul class="nav navbar-right pull-right">

            <li>

                @if(auth()->user()->hasRole('applicant'))
                <a href="{{ route('admission.logout') }}">
                    Log Out <i class="entypo-logout right"></i>
                </a>
                @elseif(auth()->user()->hasRole('account-officer'))
                <a href="{{ url('/payment/logout') }}">
                    Log Out <i class="entypo-logout right"></i>
                </a>
                @else
                <a href="{{ url('/logout') }}">
                    Log Out <i class="entypo-logout right"></i>
                </a>
                @endif
            </li>



            <!-- mobile only -->
            <li class="visible-xs">

                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="horizontal-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </li>

        </ul>

    @endif

    @if(auth()->guest())
        <ul class="nav navbar-right pull-right">
            <li>
                <a href="{{ route('auth.login') }}">
                    Log In <i class="entypo-login right"></i>
                </a>
            </li>
        </ul>
    @endif

    </div>

</header>