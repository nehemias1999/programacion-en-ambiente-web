<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mis datos - modificar contraseña </title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/cambioDeContrasenaStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
        
            $path = "../../";

            require "parts/header.portal.view.php";
        
        ?>

    </header>

    <main>

        <section class="seccion-principal">

            <?php

                $path = "../";

                require "parts/nav.portal.view.php";

            ?>

            <section class="seccion-cambio-contrasena">

                <h1 class="titulo-principal">
                    Modificación de contraseña
                </h1>
    
                <form action="ProcesarCambioContraseña.js" method="post">
                    
                    <label for="input-contraseña-actual">Ingrese su contraseña actual:</label>
                    <input type="text" name="input-contraseña-actual">
                    
                    <label for="input-nueva-contraseña">Nueva contraseña:</label>
                    <input type="text" name="input-nueva-contraseña">
    
                    <label for="input-confirmacion">Confirme contraseña nueva:</label>
                    <input type="text" name="input-confirmacion">
    
                    <div class="div-botones">
    
                        <input type="reset" value="Cancelar" class="boton-reset">
                    
                        <input type="submit" value="Guardar cambios" class="boton-submit">
    
                    </div>
    
                </form>
    
            </section>

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