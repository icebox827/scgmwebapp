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
                                <h4>Nouvelle-Personnes de Reference</h4>
                                <div class="form-group">
                                    <label for="pass1">Nom*</label>
                                    <input id="pass1" type="password" placeholder="Nom" required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Prenom*</label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Prenom" class="form-control" id="passWord2">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Adresse*</label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Adresse" class="form-control" id="passWord2">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Telephone*</label>
                                    <input data-parsley-equalto="#pass1" type="password" required
                                           placeholder="Telephone" class="form-control" id="passWord2">
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


                </div>









            </form>
        </div>

    </div>
@endsection