<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mis datos - modificar contraseña </title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.mis-datos.cambiar-contrasena.style.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
        
            $path = "../../../";

            require "parts/header.portal.view.php";
        
        ?>

    </header>

    <main>

        <section class="section-principal">

            <?php

                $path = "../";

                require "parts/nav.portal.view.php";

            ?>

            <section class="section-cambio-contrasena">

                <h1 class="titulo-principal">
                    Modificación de contraseña
                </h1>

                <?php
                
                    $mensajeCorrecto = "Se cambio con exito la contrasena.";

                    require "parts/notification-form-state.view.php";

                ?>
    
                <form action="/portal-del-paciente/inicio/mis-datos/cambiar-contrasena" method="POST">
                    
                    <label for="input-contrasena-actual">Ingrese su contraseña actual:</label>
                    <input type="password" id="input-contrasena-actual" name="input-contrasena-actual" required>
                    
                    <label for="input-nueva-contrasena">Nueva contraseña:</label>
                    <input type="password" id="input-nueva-contrasena" name="input-nueva-contrasena" required>
    
                    <label for="input-confirmacion-contrasena">Confirme contraseña nueva:</label>
                    <input type="password" id="input-confirmacion-contrasena" name="input-confirmacion-contrasena" required>
    
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
        
            $path = "../../../";

            require "parts/footer.view.php";

        ?>
        
    </footer>

</body>
</html>