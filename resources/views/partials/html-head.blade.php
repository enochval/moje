<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <title>Moje | @yield('page-title')</title>

    <link rel="stylesheet" href="{{ asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
    {{--@yield('style')--}}
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/green.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/js/selectboxit/jquery.selectBoxIt.css') }}">

    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript">
        var BaseUrl = "{{url('/')}}";
    </script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>