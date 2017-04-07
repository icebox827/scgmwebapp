<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>SGCM Admin</title>

    <!-- App CSS -->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ URL::to('assets/js/modernizr.min.js') }}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="fixed-left">

@yield('contenu')
<!-- end wrapper page -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/detect.js') }}"></script>
<script src="{{ URL::to('assets/js/fastclick.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ URL::to('assets/js/waves.js') }}"></script>
<script src="{{ URL::to('assets/js/wow.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.scrollTo.min.js') }}"></script>

<!-- App js -->
<script src="{{ URL::to('assets/js/jquery.core.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.app.js') }}"></script>

</body>
</html>