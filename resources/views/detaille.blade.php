@extends('layouts.app')
@section('pagetitle')
    Detaille sur : {{ $vehicule->nummoteur }} - Immatriculation : {{ $vehicule->immatriculation }}
@endsection
@section('content')

        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>QR Code</b></h4>
                                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->color(183,48,9)->size(320)->generate($vehicule->nummoteur)) !!} ">
                                    {{--<img class="img-responsive" src="{!!$QrCode::format('png')->generate($vehicule->nummoteur)!!}"/>--}}
                                    <div class="text-left" style="margin-top: 10px;">
                                        <a href="{{ route('qr.download') }}/{{ $vehicule->id }}" class="btn btn-ico waves-effect waves-light btn-info m-b-5">
                                            <i class="fa fa-download">
                                                <span>Telecharger</span>
                                            </i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Motocyclette</b></h4>
                                    <form action="#" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Marque</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">{{ $vehicule->marque }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Modele</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname">{{ $vehicule->modele }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Annee</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">{{ $vehicule->annee }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Couleur</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">{{ $vehicule->couleur }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Plaque</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth">{{ $vehicule->immatriculation }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Puissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $vehicule->puissance }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Numero Moteur</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $vehicule->nummoteur }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Numero Serie</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $vehicule->numserie }}</a>
                                            </div>
                                        </div>

                                    </form>
                                </div><!-- end col -->

                                <div class="col-lg-4">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Proprietaire</b></h4>
                                    <form action="#" class="form-horizontal editor-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Nom</label>
                                            <div class="col-sm-7">
                                                {{--<i>{{ $proprietaire->nom }}</i>--}}
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">{{ $proprietaire->nom }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Prenom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname">{{ $proprietaire->prenom }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Date Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" >{{ $proprietaire->datenaissance }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Sexe</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth">{{ $proprietaire->sexe }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">CIN</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $proprietaire->cin }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">NIF</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $proprietaire->nif }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Permis de Conduire</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $proprietaire->permisconduire }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Telephone</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $proprietaire->telephone }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Adresse</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $proprietaire->adress }}</a>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Profil</b></h4>
                                    <img src="{{ URL::to('storage/') }}/{{ $conducteur->photo }}" class="img-responsive" style="height: 250px; width: 250px;">
                                </div><!-- end col -->
                                <div class="col-lg-4">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Conducteur</b></h4>
                                    <form action="#" class="form-horizontal editor-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Nom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">{{ $conducteur->nom }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Prenom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname">{{ $conducteur->prenom }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Date Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">{{ $conducteur->datenaissance }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Lieu de Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">{{ $conducteur->lieunaissance }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Sexe</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" >{{ $conducteur->sexe }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">CIN</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $conducteur->cin }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">NIF</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $conducteur->nif }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Permis de Conduire</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $conducteur->permisconduire }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Telephone</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">{{ $conducteur->telephone }}</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Adresse</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">
                                                    @if($conducteur->commune)
                                                    {{ $conducteur->commune->name }}
                                                        @endif
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end col -->

                                <div class="col-lg-4">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Reference 1</b></h4>
                                    <form action="#" class="form-horizontal editor-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Nom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Prenom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Adresse</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Telephone</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                            </div>
                                        </div>
                                    </form>
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Reference 2</b></h4>
                                    <form action="#" class="form-horizontal editor-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Nom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Prenom</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Adresse</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Telephone</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end col -->

                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Station</b></h4>
                                    <form action="#" class="form-horizontal editor-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Code Station</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">{{ $station->codestation }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Station</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname">{{ $station->station }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Commune</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">{{ $station->commune->name }}</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Departement</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">{{ $station->commune->departement->name }}</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- container -->


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