<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ### Import Google Icon Font ### -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ### Import materialize.min.css ### -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.min.css') }}"  media="screen,projection"/>
    <!-- ### Import styles.css ### -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"  media="screen,projection"/>

    <title>Panel de Administraci&oacute;n</title>
</head>
<body>
    <main class="main-container">
        <!--############################################
            Contenedor de título y texto de introducción
            ############################################-->
        <div class="container">
            <h1 class="center-align">Panel de Administraci&oacute;n</h1>
            
            <div class="divider"></div>
            
            <div class="intro-textbox">
                <h2 class="center-align">Listado de Suscripciones</h2>
                <p class="center-align">Para gestionar alguna suscripci&oacute;n, utilice los botones a la derecha de cada suscripci&oacute;n.</p>
            </div>

            <div class="divider"></div>
        </div>

        <!--######################################
            Contenedor de listado de suscripciones
            ######################################-->
        <div class="container">
            <table class="centered">
                <thead>
                    <tr>
                        <th>Nombre de Usuario</th>
                        <th>E-mail</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Magdyta</td>
                        <td>magdyta93@gmail.com</td>
                        <td><span class="green-text text-darken-1">Aprobada</span></td>
                        <td>
                            <a class="waves-effect waves-light btn-floating btn-small yellow lighten-1 tooltipped" data-position="top" data-tooltip="Deshacer"><i class="material-icons right">do_not_disturb</i></a>
                            <a class="waves-effect waves-light btn-floating btn-small red lighten-1 tooltipped" data-position="top" data-tooltip="Anular"><i class="material-icons right">clear</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Patchyn</td>
                        <td>patchyn94@gmail.com</td>
                        <td><span class="yellow-text text-darken-1">Pendiente</span></td>
                        <td>
                            <a class="waves-effect waves-light btn-floating btn-small green lighten-1 tooltipped" data-position="top" data-tooltip="Aprobar"><i class="material-icons right">check</i></a>
                            <a class="waves-effect waves-light btn-floating btn-small red lighten-1 tooltipped" data-position="top" data-tooltip="Anular"><i class="material-icons right">clear</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Ardillita</td>
                        <td>ardillita95@gmail.com</td>
                        <td><span class="red-text text-darken-1">Anulada</span></td>
                        <td>
                            <a class="waves-effect waves-light btn-floating btn-small yellow lighten-1 tooltipped" data-position="top" data-tooltip="Deshacer"><i class="material-icons right">do_not_disturb</i></a>
                            <a class="waves-effect waves-light btn-floating btn-small green lighten-1 tooltipped" data-position="top" data-tooltip="Aprobar"><i class="material-icons right">check</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- ### Import materialize.min.js ### -->
    <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
    <!-- ### Import scripts.js ### -->
    <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
</body>
</html>