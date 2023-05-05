<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/recuperarContrasenaStyles.css'>

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

        <section class="seccion-recuperar-contrasena-main">

            <div class="div-formulario-recuperar-contrasena">

                <?php

                    $mensajeCorrecto = "Sera notificado al mail.";

                    require "parts/notification-form-state.view.php";                    
                ?>

                <form action="/portal-del-paciente/recuperar-contrasena" method="POST">

                    <label for="input-documento select-tipo-documento">
                        Documento
                    </label>
                    <div class="div-ingreso-documento">

                        <input type="text" name="input-documento" inputmode="numeric" pattern="[0-9]*" required>
        
                        <select name="select-tipo-documento" id="select-tipo-documento" required>
                            <option value="" disabled selected>Tipo</option>
                            <option value="documento-nacional-de-identidad">Documento Nacional de Identidad</option>
                            <option value="cedula-de-identidad">Cédula de identidad</option>
                            <option value="cuit-cuil">CUIT/CUIL</option>
                            <option value="libreta-civica">Libreta Cívica</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select>

                    </div>
        
                    <label for="input-email-recuperacion">
                        Email de recuperación
                    </label>
                    <input type="email" name="input-email-recuperacion" required>
                        
                    <div class="div-mensaje-aviso">
    
                        <p class="parrafo-mensaje-aviso">
                            A continuación provea una dirección de correo 
                            electrónico para otorgarle las indicaciones de recuperación 
                            de contraseña para su cuenta.
                        </p>
    
                    </div>

                    <input type="button" value="Cancelar">

                    <input type="submit" value="Recuperar">
    
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