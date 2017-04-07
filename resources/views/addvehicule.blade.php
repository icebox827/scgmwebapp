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
                            <h4>Nouveau-Motocyclette</h4>
                            <div class="form-group">
                                <label for="pass1">Marque*</label>
                                <input id="pass1" type="password" placeholder="La marque" required
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passWord2">Modele *</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
                            </div>

                            <div class="form-group">
                                <label for="passWord2">Annee *</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
                            </div>

                            <div class="form-group">
                                <label for="passWord2">Couleur *</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
                            </div>
                            <div class="form-group">
                                <label for="passWord2">Immatriculation*</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
                            </div>
                            <div class="form-group">
                                <label for="passWord2">Puissance*</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
                            </div>
                            <div class="form-group">
                                <label for="passWord2">Numero Moteur*</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
                            </div>
                            <div class="form-group">
                                <label for="passWord2">Numero Serie*</label>
                                <input data-parsley-equalto="#pass1" type="Modele" required
                                       placeholder="Password" class="form-control" id="passWord2">
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