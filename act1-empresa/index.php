<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <!-- Navegador -->
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo center">Actividad 1</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
          </div>   
        </nav>
    </div>

    <div id="text1" class="section white">

        <!-- Formulario -->
        <h2><b>Empresa</b></h2>
        <h3><b>Registro del empleado</b></h3>
        <form method="post">
            <div class="row">
                <div class="col s12 m6">
                    <label for="idNombre">Nombre</label><br>
                    <input type="text" name="txtNombre" id="idNombre" required><br><br>
                </div>

                <div class="col s12 m6">
                    <label for="idApellido">Apellido</label><br>
                    <input type="text" name="txtApellido" id="idApellido" required><br><br>
                </div>
            </div>
            
            <div class="row">
                <div class="col s12 m4">
                    <label for="idEdad">Edad</label><br>
                    <input type="number" min = "18" max= "100" onpaste = "return false;" name="txtEdad" id="idEdad" required><br><br>
                </div>

                <div class="col s12 m4">
                    <label for="idCivil">Estado Civil</label><br>
                    <select name="selectCivil" id="idCivil">
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                    </select><br><br>
                </div>

                <div class="col s12 m4">
                    <label for="idSexo">Sexo</label><br>
                    <select name="selectSexo" id="idSexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select><br><br>
                </div>
            </div>

            <label for="idSueldo">Sueldo</label><br>
            <select name="selectSueldo" id="idSueldo">
                <option value="Menos de 1000 Bs">Menos de 1000 Bs</option>
                <option value="Entre 1000 Bs y 2500 Bs">Entre 1000 Bs y 2500 Bs</option>
                <option value="Más de 2500 Bs">Más de 2500 Bs</option>
            </select><br><br>

            <button class="btn waves-effect waves-light" name="btn" type="submit" value="Registro">Registrar
            <i class="material-icons right">send</i>
            </button>
        </form>

        <?php
        
        include_once "calcular.php";

        ?>

    </div>



    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Más información</h5>
                <p class="grey-text text-lighten-4">Actividad 1 de Programación Web</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                <li><a class="grey-text text-lighten-3" href="http://www.virtudvirtual.site">Página Principal</a></li>
                <li><a class="grey-text text-lighten-3" href="https://github.com/Mariduq/pw-act1.git">Github</a></li>
                </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2023 Copyright. Todos los derechos reservados. <br> Maracaibo - Zulia. Venezuela
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>