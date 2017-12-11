<!DOCTYPE html>
<html lang="en">
    @include('partials.html-head')

<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
    var baseurl = '';
</script>

    @yield('content')


@include('partials.javascript')

</body>
</html>