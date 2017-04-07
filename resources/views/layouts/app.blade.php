{{--<!DOCTYPE html>--}}
{{--<html >--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ route('login') }}">Se Connecter</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">S'enregistrer</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>SCGM-Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
    <!-- Navbar-->
    <header class="main-header hidden-print"><a href="index.html" class="logo">PNH</a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                    <!--Notification Menu-->
                    <li class="dropdown notification-menu"><a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-bell-o fa-lg"></i></a>
                        <ul class="dropdown-menu">
                            <li class="not-head">You have 4 new notifications.</li>
                            <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                            <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                            <li><a href="javascript:;" class="media"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                            <li class="not-footer"><a href="#">See all notifications.</a></li>
                        </ul>
                    </li>
                    <!-- User Menu-->
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user fa-lg"></i></a>
                        <ul class="dropdown-menu settings-menu">

                            <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image" class="img-circle"></div>
                <div class="pull-left info">
                    <p>John Doe</p>
                    <p class="designation">Frontend Developer</p>
                </div>
            </div>
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="bootstrap-componants.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
                        <li><a href="ui-font-awesome.html"><i class="fa fa-circle-o"></i> Font Icons</a></li>
                        <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                        <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
                    </ul>
                </li>
                <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
                <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="form-componants.html"><i class="fa fa-circle-o"></i> Form Componants</a></li>
                        <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Componants</a></li>
                        <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                        <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                        <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                        <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
                        <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                        <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
                        <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                        <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                        <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>MultiLavel Menu</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
   @yield('content')
</div>
<!-- Javascripts-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/essential-plugins.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/pace.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>