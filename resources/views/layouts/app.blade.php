@extends('layouts.main')
@section('contenu')

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{route('dashboard')}}" class="logo"><span>SCGM<span>pnh</span></span><i class="zmdi zmdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h4 class="page-title">@yield('pagetitle')</h4>
                        </li>
                    </ul>

                    <!-- Right(Notification and Searchbox -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <!-- Notification -->
                            <div class="notification-box">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <a href="javascript:void(0);" class="right-bar-toggle">
                                            <i class="zmdi zmdi-T`H`E`M`E`L`O`C`K`.`C`O`M`-none"></i>
                                        </a>
                                        <div class="noti-dot">
                                            <span class="dot"></span>
                                            <span class="pulse"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Notification bar -->
                        </li>
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..."
                                       class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{ URL::to('assets/images/users/pnh.png') }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                    </div>
                    <h5><a href="#">
                            @if(Auth::check())
                                {{ Auth::user()->name }}
                                @else
                                Jhon Doe
                            @endif
                        </a> </h5>
                    <ul class="list-inline">
                        <li>
                            <a href="#" >
                                <i class="zmdi zmdi-settings"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-custom">
                                <i class="zmdi zmdi-power"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- End User -->

                <!--- Sidebar -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">Navigation</li>

                        <li>
                            <a href="{{route('home')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Tableau de Bord-SCGM </span> </a>
                        </li>
                        <li>
                            <a href="{{route('proprietaire')}}" class="waves-effect"><i class="zmdi zmdi-account"></i><span> Proprietaires </span> </a>

                        </li>
                        <li >
                            <a href="{{route('vehicule')}}" class="waves-effect"><i class="zmdi zmdi-directions-car"></i> <span> Vehicules </span></a>

                        </li>

                        <li>
                            <a href="{{route('conducteur')}}" class="waves-effect"><i class="zmdi zmdi-directions-bike"></i> <span> Conducteurs </span> </a>
                        </li>

                        <li>
                            <a href="{{route('reference')}}" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span> Reference </span> </a>

                        </li>

                        <li>
                            <a href="{{route('station')}}" class="waves-effect"><i class="zmdi zmdi-pin-drop"></i> <span> Stations </span></a>

                        </li>

                        <li>
                            <a href="#" class="waves-effect"><i class="zmdi zmdi-plus-circle"></i><span> Registraire </span></a>
                            <ul>
                                <li>
                                    <a href="{{route('registraire')}}" class="waves-effect"><i class="zmdi zmdi-plus-circle"></i><span>Nouveau Enregistrement </span></a>
                                </li>
                                <li>
                                    <a href="{{route('registre')}}" class="waves-effect"><i class="zmdi zmdi-plus-circle"></i><span>Affichage du registre </span></a>
                                </li>

                            </ul>


                        </li>




                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')

            <footer class="footer">
                2017 © Coordination des Directions Départementales | PNH.
            </footer>

        </div>
        <!-- End content-page -->


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->


        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->

    @endsection