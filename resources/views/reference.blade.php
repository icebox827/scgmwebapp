@extends('layouts.app')
@section('pagetitle')
    Les Personnes de Reference
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="m-b-30">
                        <a href="{{route('addreference')}}"> <button id="addToTable" class="btn btn-primary waves-effect waves-light">Ajouter <i class="fa fa-plus"></i></button></a>
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

                        <h4 class="header-title m-t-0 m-b-30">Liste des References</h4>



                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Adresse</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($references as $r)
                            <tr>
                                <td>{{ $r->nom }}</td>
                                <td>{{ $r->prenom }}</td>
                                <td>{{ $r->telephone }}</td>
                                <td>
                                    @if($r->quartier)
                                        {{ $r->quartier }}
                                        @endif

                                </td>
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