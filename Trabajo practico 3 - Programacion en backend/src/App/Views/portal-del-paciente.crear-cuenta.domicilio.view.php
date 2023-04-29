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

        <div class="div_principal_main">

            <h1 class="titulo_principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion_ingresar_portal_main">

            <h2 class="titulo_crear_cuenta">
                Crear cuenta
            </h2>            

            <div class="div_formulario_domicilio">

                <h3 class="titulo_domicilio">
                    Domicilio
                </h3> 

                <form action="procesarDatosCuenta.js" method="post">

                    <label for="select_provincia">Provincia</label>
                    <select name="select_provincia" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Buenos Aires</option>
                        <option value="">Córdoba</option>
                        <option value="">Santa Fe</option>
                    </select>

                    <label for="select_localidad">Localidad</label>
                    <select name="select_localidad" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Ciudad Autónoma de Buenos Aires</option>
                        <option value="">Luján</option>
                        <option value="">General Rodriguez</option>
                        <option value="">Merlo</option>
                        <option value="">Pilar</option>
                    </select>

                    <label for="input_calle">Calle</label>
                    <input type="text" name="input_calle">

                    <div class="div_domicilio">

                        <div class="div_dato">
                            <label for="input_numero">Número</label>
                            <input type="text" name="input_numero" inputmode="numeric" pattern="[0-9]*">
                        </div>

                        <div class="div_dato">
                            <label for="input_depto">Depto</label>
                            <input type="text" name="input_depto">
                        </div>    
                        
                        <div class="div_dato">
                            <label for="input_piso">Piso</label>
                            <input type="text" name="input_piso" inputmode="numeric" pattern="[0-9]*">
                        </div> 
                    
                    </div>

                    <div class="div_botones">

                        <button class="boton_volver">
                            <a href="">
                                Volver
                            </a>
                        </button>
        
                        <button>
                            <a href="">
                                Siguiente
                            </a>
                        </button>

                    </div>
                    
                    <progress value="60" max="90"></progress>
    
                </form>

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