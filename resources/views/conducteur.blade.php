@extends('layouts.app')
@section('pagetitle')
    Conducteurs
@endsection
@section('content')
    <div class="content">
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="m-b-30">
                <a href="{{route('addconducteur')}}"> <button id="addToTable" class="btn btn-primary waves-effect waves-light">Ajouter <i class="fa fa-plus"></i></button></a>
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

                <h4 class="header-title m-t-0 m-b-30">Liste des Conducteurs</h4>



                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Sexe</th>
                        <th>CIN</th>
                        <th>NIF</th>
                        <th>Permis de Conduire</th>
                        <th>Telephone</th>
                        <th>Proprietaire</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($conducteurs as $conducteur)
                    <tr>
                        <td><img src="{{ URL::to('storage/'. $conducteur->photo) }}" class="img-responsive" style="width: 100px; height: 100px;"></td>
                        <td>{{ $conducteur->nom }}</td>
                        <td>{{ $conducteur->prenom }}</td>
                        <td>{{ $conducteur->datenaissance }}</td>
                        <td>{{ $conducteur->lieunaissance }}</td>
                        <td>{{ $conducteur->sexe }}</td>
                        <td>{{ $conducteur->cin }}</td>
                        <td>{{ $conducteur->nif }}</td>
                        <td>{{ $conducteur->permisconduire }}</td>
                        <td>{{ $conducteur->telephone }}</td>
                        <td>{{ $conducteur->proprietaire->nif  }}</td>

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