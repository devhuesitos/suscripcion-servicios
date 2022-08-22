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

    <title>Inicio de Sesi&oacute;n</title>
</head>
<body>
    <main class="main-container">
        <!--############################################
            Contenedor de título y texto de introducción
            ############################################-->
        <div class="container">
            <h1 class="center-align">Inicio de Sesi&oacute;n</h1>
            
            <div class="divider"></div>
            
            <div class="intro-textbox">
                <p class="center-align">Para acceder a tu suscripci&oacute;n, por favor ingresa tus datos a continuaci&oacute;n:</p>
            </div>

            <div class="divider"></div>
        </div>

        <!--####################################
            Contenedor de formulario de registro
            ####################################-->
        <div class="container">
            <form action="" method="post" class="form-box">
                <div class="row">
                    <!-- ### txtEmail ### -->
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="txtEmail" name="txtEmail" type="email" class="validate">
                        <label for="txtEmail">Correo electr&oacute;nico</label>
                    </div>

                    <!-- ### txtPassword ### -->
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">lock</i>
                        <input id="txtPassword" name="txtPassword" type="password" class="validate">
                        <label for="txtPassword">Contrase&ntilde;a</label>
                    </div>

                    <!-- ### btnSubmit ### -->
                    <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            Acceder <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- ### Import materialize.min.js ### -->
    <script type="text/javascript" src="{{ URL::asset('js/materialize.min.js') }}"></script>
    <!-- ### Import scripts.js ### -->
    <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
</body>
</html>