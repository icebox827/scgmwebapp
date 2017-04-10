@extends('layouts.app')
@section('pagetitle')
    Detaille sur :
@endsection
@section('content')

        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-6">
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
                                                <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Annee</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Couleur</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Plaque</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Puissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Numero Moteur</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Numero Serie</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                    </form>
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Proprietaire</b></h4>
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
                                            <label class="col-sm-5 control-label">Date Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Lieu de Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Sexe</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">CIN</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">NIF</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Permis de Conduire</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Telephone</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Adresse</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
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
                                <div class="col-lg-6">
                                    <h4 class="m-b-30 m-t-0 header-title"><b>Conducteur</b></h4>
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
                                            <label class="col-sm-5 control-label">Date Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Lieu de Naissance</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Sexe</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">CIN</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">NIF</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Permis de Conduire</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Telephone</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Adresse</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end col -->

                                <div class="col-lg-6">
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
                                </div><!-- end col -->
                                <div class="col-lg-6">
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
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Station</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Commune</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Departement</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
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