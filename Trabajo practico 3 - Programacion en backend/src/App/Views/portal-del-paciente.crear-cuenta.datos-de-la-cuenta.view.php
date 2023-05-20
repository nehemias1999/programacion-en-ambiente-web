<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos de la cuenta</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.crear-cuenta.datos-de-la-cuenta.style.css'>

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

        <div class="div-principal-main">

            <h1 class="titulo-principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion-ingresar-portal-main">

            <h2 class="titulo-crear-cuenta">
                Crear cuenta
            </h2>            

            <div class="div-formulario-datos-cuenta">

                <h3 class="titulo-datos-cuenta">
                    Datos de la cuenta
                </h3>

                <?php
                
                    $mensajeCorrecto = "Cuenta creada con exito.";

                    require "parts/notification-form-state.view.php";

                ?>

                <form id="formulario" action="/portal-del-paciente/crear-cuenta/datos-de-la-cuenta" method="POST">

                    <label for="input-email">
                        Email
                    </label>
                    <input type="email" name="input-email" required>
    
                    <label for="input-contrasena">
                        Contraseña
                    </label>
                    <input type="password" name="input-contrasena" required>
    
                    <label for="input-repetir-contrasena">
                        Repetir contraseña
                    </label>
                    <input type="password" name="input-repetir-contrasena" required>              
                                
                    <progress value="90" max="90"></progress>
    
                </form>

                <div class="div-botones">

                    <button onclick="window.location.href='domicilio'">
                        Volver
                    </button>
    
                    <button form="formulario">
                        Crear cuenta
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