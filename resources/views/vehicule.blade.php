@extends('layouts.app')
@section('pagetitle')
    Vehicules
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                    <div class="col-sm-6">
                        <div class="m-b-30">
                           <a href="{{route('addvehicule')}}"> <button id="addToTable" class="btn btn-primary waves-effect waves-light">Ajouter <i class="fa fa-plus"></i></button></a>
                        </div>
                    </div>

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

                        <h4 class="header-title m-t-0 m-b-30">Liste des Motocyclettes</h4>



                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Marque</th>
                                <th>Modele</th>
                                <th>Annee</th>
                                <th>Couleur</th>
                                <th>Immatriculation</th>
                                <th>Puissance</th>
                                <th>Numero Moteur</th>
                                <th>Numero Serie</th>
                                <th>Proprietaire</th>
                                <th>Conducteur</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($vehicules as $v)
                            <tr>
                                <td>{{ $v->marque }}</td>
                                <td>{{ $v->modele }}</td>
                                <td>{{ $v->annee }}</td>
                                <td>{{ $v->couleur }}</td>
                                <td>{{ $v->immatriculation }}</td>
                                <td>{{ $v->puissance }}</td>
                                <td>{{ $v->nummoteur }}</td>
                                <td>{{ $v->numserie }}</td>
                                <td>{{ $v->proprietaire->nif }}</td>
                                <td>{{ $v->conducteur()->nif }}</td>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "{{URL::to('assets/plugins/datatables/json/scroller-demo.json')}}", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>
@endsection