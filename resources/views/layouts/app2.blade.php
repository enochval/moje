<!DOCTYPE html>
<html lang="en">

@include('partials.html-head')

<body class="page-body  page-fade skin-green" data-url="">

    <div class="page-container horizontal-menu with-sidebar fit-logo-with-sidebar">


        @include('partials.header-navbar')

        @include('partials.sidebar-menu')

        <div class="main-content">

            @yield('content')

            @include('partials.footer')

        </div>

    </div>

    @include('partials.javascript')

</body>
</html>