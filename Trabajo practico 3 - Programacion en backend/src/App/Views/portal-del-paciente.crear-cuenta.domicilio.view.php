<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Domicilio</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/domicilioStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php

            $path = "../../";

            require "parts/header.view.php";
            
        ?>

    </header>

    <main class="main">

        <div class="div-principal-main">

            <h1 class="titulo-principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion-ingresar-portal-main">

            <h2 class="titulo-crear-cuenta">
                Crear cuenta
            </h2>            

            <div class="div-formulario-domicilio">

                <h3 class="titulo-domicilio">
                    Domicilio
                </h3> 

                <?php
                
                    $mensajeCorrecto = "Datos agregados con exito.";

                    require "parts/notification-form-state.view.php";

                ?>

                <form id="formulario" action="/portal-del-paciente/crear-cuenta/domicilio" method="POST">

                    <label for="select-provincia">
                        Provincia
                    </label>
                    <select name="select-provincia" id="select-provincia" required>
                        <option value="" disabled selected>---</option>
                        <option value="buenos-aires">Buenos Aires</option>
                        <option value="cordoba">Córdoba</option>
                        <option value="santa-fe">Santa Fe</option>
                    </select>

                    <label for="select-localidad">
                        Localidad
                    </label>
                    <select name="select-localidad" id="select-localidad" required>
                        <option value="" disabled selected>---</option>
                        <option value="ciudad-autonoma-de-buenos-aires">Ciudad Autónoma de Buenos Aires</option>
                        <option value="lujan">Luján</option>
                        <option value="general-rodriguez">General Rodriguez</option>
                        <option value="merlo">Merlo</option>
                        <option value="pilar">Pilar</option>
                    </select>

                    <label for="input-calle">
                        Calle
                    </label>
                    <input type="text" name="input-calle" id="input-calle" required>

                    <div class="div-domicilio">

                        <div class="div-dato">
                            <label for="input-numero">
                                Número
                            </label>
                            <input type="text" name="input-numero" id="input-numero" inputmode="numeric" pattern="[0-9]*" required>
                        </div>

                        <div class="div-dato">
                            <label for="input-depto">
                                Depto
                            </label>
                            <input type="text" name="input-depto" id="input-depto">
                        </div>    
                        
                        <div class="div-dato">
                            <label for="input-piso">
                                Piso
                            </label>
                            <input type="text" name="input-piso" id="input-piso" inputmode="numeric" pattern="[0-9]*">
                        </div> 
                    
                    </div>

                    <progress value="60" max="90"></progress>

                </form>

                <div class="div-botones">

                    <button onclick="window.location.href='datos-personales'">
                        Volver
                    </button>

                    <button form="formulario">
                        Siguiente
                    </button>

                </div>

            </div>

        </section>

    </main>

    <footer>  
        
        <?php

            $path = "../../";

            require "parts/footer.view.php";

        ?>
        
    </footer> 

</body>
</html>