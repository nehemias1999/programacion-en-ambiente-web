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

                <form action="procesarDatosCuenta.js" method="post">

                    <label for="select-provincia">Provincia</label>
                    <select name="select-provincia" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Buenos Aires</option>
                        <option value="">Córdoba</option>
                        <option value="">Santa Fe</option>
                    </select>

                    <label for="select-localidad">Localidad</label>
                    <select name="select-localidad" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Ciudad Autónoma de Buenos Aires</option>
                        <option value="">Luján</option>
                        <option value="">General Rodriguez</option>
                        <option value="">Merlo</option>
                        <option value="">Pilar</option>
                    </select>

                    <label for="input-calle">Calle</label>
                    <input type="text" name="input-calle">

                    <div class="div-domicilio">

                        <div class="div-dato">
                            <label for="input-numero">Número</label>
                            <input type="text" name="input-numero" inputmode="numeric" pattern="[0-9]*">
                        </div>

                        <div class="div-dato">
                            <label for="input-depto">Depto</label>
                            <input type="text" name="input-depto">
                        </div>    
                        
                        <div class="div-dato">
                            <label for="input-piso">Piso</label>
                            <input type="text" name="input-piso" inputmode="numeric" pattern="[0-9]*">
                        </div> 
                    
                    </div>

                    <progress value="60" max="90"></progress>

                </form>

                <div class="div-botones">

                    <button class="boton-volver">
                        <a href="datos-personales">
                            Volver
                        </a>
                    </button>

                    <button class="boton-siguiente">
                        <a href="datos-de-la-cuenta">
                            Siguiente
                        </a>
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