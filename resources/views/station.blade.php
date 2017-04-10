@extends('layouts.app')
@section('pagetitle')
    Stations
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box table-responsive">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Liste des Stations se trouvant les conducteurs</h4>



                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Station</th>
                                <th>Code Station</th>
                                <th>Departement</th>
                                <th>Commune</th>


                            </tr>
                            </thead>

                            <tbody>
                            @foreach($stations as $s)
                            <tr>
                                <td>{{ $s->station }}</td>
                                <td>{{ $s->codestation }}</td>
                                <td>{{ $s->commune->departement->name }}</td>
                                <td>{{ $s->commune->name }}</td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->
@endsection
@section('js')


@endsection