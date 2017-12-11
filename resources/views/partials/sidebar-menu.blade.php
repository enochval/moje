<div class="sidebar-menu">

    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- Search Bar -->
        <li class="">
            <a href="{{url('/home')}}">
                <i class="entypo-gauge"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('users') }}">
                <i class="entypo-users"></i>
                <span>Manage Users</span>
            </a>
            <ul>
                <li>
                    <a href="{{ url('users') }}">
                        <span>Staffs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('users') }}">
                        <span>Students</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/applicant') }}">
                        <span>Applicants</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('roles') }}">
                <i class="entypo-layout"></i>
                <span>Manage Roles</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admission/registration/list') }}">
                <i class="entypo-star"></i>
                <span>Manage Registrations</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admission/index') }}">
                <i class="entypo-graduation-cap"></i>
                <span>Manage Admissions</span>
            </a>
            <ul>
                <li>
                    <a href="{{ url('/admission/index') }}">
                        <i class="entypo-check"></i>
                        <span>Admitted Students</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admission/index') }}">
                        <i class="entypo-cancel"></i>
                        <span>Not Admitted Students</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('users.profile') }}">
                <i class="entypo-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('general.settings') }}">
                <i class="entypo-tools"></i>
                <span>General Settings</span>
            </a>
        </li>

    </ul>

</div>