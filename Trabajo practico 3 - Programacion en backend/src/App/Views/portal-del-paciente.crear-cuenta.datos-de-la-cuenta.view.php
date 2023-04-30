<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos de la cuenta</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/datosDeLaCuenta.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php

            $path = "../../";

            require "parts/header.view.php";

        ?>

    </header>

    <main>

        <div class="div_principal_main">

            <h1 class="titulo_principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion_ingresar_portal_main">

            <h2 class="titulo_crear_cuenta">
                Crear cuenta
            </h2>            

            <div class="div_formulario_datos_cuenta">

                <h3 class="titulo_datos_cuenta">
                    Datos de la cuenta
                </h3> 

                <form action="procesarDatosCuenta.js" method="post">

                    <label for="input_email">
                        Email
                    </label>
                    <input type="email" name="input_email">
    
                    <label for="input_contrasena">
                        Contraseña
                    </label>
                    <input type="password" name="input_contrasena">
    
                    <label for="input_repetir_contrasena">
                        Repetir contraseña
                    </label>
                    <input type="password" name="input_repetir_contrasena">              
                                
                    <progress value="90" max="90"></progress>
    
                </form>

                <div class="div_botones">

                    <button class="boton-volver">
                        <a href="domicilio">
                            Volver
                        </a>
                    </button>
    
                    <button class="boton-submit">
                        <a href="">
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