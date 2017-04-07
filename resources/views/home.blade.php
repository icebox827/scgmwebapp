@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="page-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> SCGMWEBAPP</h1>
                <p>Bienvenue</p>
            </div>
            <div>
                <ul class="breadcrumb">
                    <li><i class="fa fa-home fa-lg"></i></li>
                    <li><a href="#">SCGM</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?= $date = date("d-m-Y"); ?>
                                <h2 align="center">Coordination des Direction Départementales</h2>
                            </div>
                            <div class="panel-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Enregistrement
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                    <li role="presentation"><a role="menuitem" href="#">Station</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Propriétaire</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Véhicule</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Conducteur</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Référence</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Modification
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                    <li role="presentation"><a role="menuitem" href="#">Station</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Propriétaire</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Véhicule</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Conducteur</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Référence</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Affichage
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                    <li role="presentation"><a role="menuitem" href="#">Station</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="{{ url('/proprietaire') }}">Propriétaire</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Conducteur</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Recherche
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                                    <li role="presentation"><a role="menuitem" href="#">Station</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Propriétaire</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Véhicule</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Conducteur</a></li>
                                                    <li role="presentation" class="divider"></li>
                                                    <li role="presentation"><a role="menuitem" href="#">Référence</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
