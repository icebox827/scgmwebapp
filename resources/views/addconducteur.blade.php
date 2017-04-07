@extends('layouts.app')
@section('pagetitle')
    Registre
@endsection
@section('content')

    <div class="content">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4>Nouveau Conducteur</h4>
                            <div class="form-group">

                                <label for="userName">Nom*</label>
                                <input type="text" name="nick" parsley-trigger="change" required
                                       placeholder="Entrez le nom du conducteur" class="form-control" id="userName">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Prenom*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrer le Prenom du conducteur" class="form-control" id="emailAddress">
                            </div>


                            <div class="form-group">
                                <label for="emailAddress">Date de Naissance*</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                        <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Lieu de Naissance*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez le Lieu de Naissance du conducteur" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Sexe*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez le Sexe du conducteur" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">CIN*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez le CIN du conducteur" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">NIF*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez le NIF du conducteur" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Permis de Conduire*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez le numero de Permis du conducteur" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group gal-upload">
                                <label for="file-4" class="col-sm-2 control-label">Photo*</label>

                                <div class="col-sm-10">
                                    <input id="file-4" class="form-control file-loading" type="file" name="picture[]" multiple data-show-caption="true">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Empreinte Index-droite*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Empreinte droite" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Empreinte Index-gauche*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Empreinte gauche" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Telephone*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez le numero de Telephone du conducteur" class="form-control" id="emailAddress">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Adresse*</label>
                                <input type="email" name="email" parsley-trigger="change" required
                                       placeholder="Entrez adrese du Conducteur" class="form-control" id="emailAddress">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right m-b-0">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                            Enregistrer
                        </button>
                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                            Annuler
                        </button>
                    </div>
                </div>





            </form>
        </div>

    </div>
@endsection