@extends('layouts.app')
@section('pagetitle')
    Home
    @endsection
@section('content')

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-custom" data-plugin="counterup">0</h2>
                            <h5>Motocyclettes</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-pink" data-plugin="counterup">0</h2>
                            <h5>Proprietaires</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-warning" data-plugin="counterup">0</h2>
                            <h5>Conducteurs</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card-box widget-user">
                        <div class="text-center">
                            <h2 class="text-info" data-plugin="counterup">0</h2>
                            <h5>Station</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">


                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                            {{--</ul>--}}
                        </div>
                        <h4 class="header-title m-t-0">Statistics</h4>
                        <div id="morris-bar-example" style="height: 280px;"></div>
                    </div>
                </div><!-- end col -->


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                            </div>

                            <h4 class="header-title m-t-0 m-b-30">Last Added</h4>

                            <p class="text-muted font-13 m-b-25">
                                Les dernieres Entrees
                            </p>

                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Numero Moteur</th>
                                        <th>Proprietaires</th>
                                        <th>Conducteurs</th>
                                        <th>Departements</th>
                                        <th>Communes</th>
                                        <th>Stations</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>




            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
