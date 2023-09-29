<?php
    //Iniciamos una sesion de PHP
    session_start();

    //Comprobamos que el arreglo de empleados exista, de no ser asi lo creamos
    if (!isset($_SESSION['empleados'])) {
        $_SESSION['empleados'] = [];
    }

    //Verifica si se ha enviado el formulario
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Obtenemos los datos del formulario
        $nombre = $_POST["txtNombre"];
        $apellido = $_POST["txtApellido"];
        $edad = $_POST["txtEdad"];
        $civil = $_POST["selectCivil"];
        $sexo = $_POST["selectSexo"];
        $sueldo = $_POST["selectSueldo"];

        if($nombre != "" && $apellido != "" && $edad != "") {

            // Validar que edad sea un numero
            if (is_numeric($edad)) {
                // Crea un arreglo asociativo con los datos
                $empleado = [
                    "nombre" => $nombre,
                    "apellido" => $apellido,
                    "edad" => $edad,
                    "civil" => $civil,
                    "sexo" => $sexo,
                    "sueldo" => $sueldo
                ];

                // Agrega el empleado al arreglo de empleados en la sesión
                $_SESSION['empleados'][] = $empleado;


                //Validamos que hayan como minimo 5 empleados para mostrar las estadisticas
                if (count($_SESSION['empleados']) >= 5) {

                    //Contadores
                    $empleadosFem = 0;
                    $empleadosMasc = 0;
                    $sumaEdadHombres = 0;
                    $hombresCasados = 0;
                    $mujeresViudas = 0;
                            

                    foreach($_SESSION['empleados'] as $empleado) {

                        //Empleados de sexo femenino
                        if($empleado["sexo"] === "Femenino") {
                            $empleadosFem++;
                        } else {
                            //Datos para la edad promedio hombres
                            $sumaEdadHombres = $sumaEdadHombres + $empleado["edad"];
                            $empleadosMasc++;
                        }

                        //Hombres casados que ganan mas de 2500 Bs
                        if($empleado["sexo"] === "Masculino" && $empleado["civil"] === "Casado(a)" && $empleado["sueldo"] === "Más de 2500 Bs") {
                            $hombresCasados++;
                        }

                        //Mujeres viudas que ganan mas de 1000 Bs
                        if($empleado["sexo"] === "Femenino" && $empleado["civil"] === "Viudo(a)" && ($empleado["sueldo"] === "Entre 1000 Bs y 2500 Bs" || $empleado["sueldo"] === "Más de 2500 Bs")) {
                            $mujeresViudas++;
                        }
                    }

                    //Edad promedio de los hombres
                    $promedioEdadHombres = $sumaEdadHombres/$empleadosMasc;

                    //Muestra los resultados en pantalla
                    echo "<br><br><h3><b>Estadísticas</b></h3><br>";

                    echo "<h4><b>Total de empleados del sexo femenino:</b> ". $empleadosFem. "</h4><br>";

                    echo "<h4><b>Total de hombres casados que ganan más de 2500 Bs:</b> ".$hombresCasados. "</h4><br>";

                    echo "<h4><b>Total de mujeres viudas que ganan más de 1000 Bs:</b> ". $mujeresViudas. "</h4><br>";
                            
                    echo "<h4><b>Edad promedio de los hombres:</b> ". $promedioEdadHombres. "</h4><br>";
                } else {
                    echo "<br><br><p>Deben estar registrados como minimo 5 empleados para mostrar las estadísticas.</p><br>";
                            
                    // Muestra el número de empleados registrados
                    echo "<p><b>Número de empleados registrados:</b> " . count($_SESSION['empleados']) . "</p>";
                }
                        
            } else {
                echo "<p>La edad debe ser un número. </p>";
            }
        } else {
            echo "<p>Los campos no pueden estar vacios. </p>";
        }
            
    }
?>