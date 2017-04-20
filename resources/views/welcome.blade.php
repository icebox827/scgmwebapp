<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Système de Controle et de Gestion des Motocyclettes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url("logo_eccusson.png");
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bcdd {
                font-size: 60px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Acceuil</a>
                    @else
                        <a href="{{ url('/login') }}">Se Connecter</a>
                        {{--<a href="{{ url('/register') }}">S'enregistrer</a>--}}
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SCGM v1.00 Unleashed
                </div>
                <div class="bcdd">
                    Coordination des Directions Départementales
                </div>

                <div class="links">
                    <a href="http://www.pnh.ht">Site web de la PNH</a>
                    <a href="http://www.anphaiti.org">Site web de l'ANP</a>
                    <a href="http://www.dap.pnh.ht">Site web de la DAP</a>
                </div>
            </div>
        </div>
    </body>
</html>
