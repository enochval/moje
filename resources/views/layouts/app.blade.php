<!DOCTYPE html>
<html lang="en">

@include('partials.html-head')

<body class="page-body  page-fade skin-green" data-url="">

    <div class="page-container horizontal-menu"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        @include('partials.header-navbar')

        <div class="main-content">


            <div class="container">

                @yield('content')

            </div>


            @include('partials.footer')

        </div>
    </div>

    @include('partials.javascript')

</body>
</html>