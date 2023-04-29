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

        <div class="div_principal_main">

            <h1 class="titulo_principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion_recuperar_contrasena_main">

            <div class="div_formulario_recuperar_contrasena">

                <form action="" method="post">

                    <label for="input_documento select_tipo_documento">
                        Documento
                    </label>
                    <div class="div_ingreso_documento">

                        <input type="text" name="input_documento" class="input_documento" inputmode="numeric" pattern="[0-9]*">
        
                        <select name="select_tipo_documento" id="select_tipo_documento">
                            <option value="" disabled selected>Tipo</option>
                            <option value="">Documento Nacional de Identidad</option>
                            <option value="">Cédula de identidad</option>
                            <option value="">CUIT/CUIL</option>
                            <option value="">Libreta Cívica</option>
                            <option value="">Pasaporte</option>
                        </select>

                    </div>
        
                    <label for="input_email_recuperacion">
                        Email de recuperación
                    </label>
                    <input type="email" name="input_email_recuperacion" class="input_email_recuperacion">
                        
                    <div class="div_mensaje_aviso">
    
                        <p class="parrafo_mensaje_aviso">
                            A continuación provea una dirección de correo 
                            electrónico para otorgarle las indicaciones de recuperación 
                            de contraseña para su cuenta.
                        </p>
    
                    </div>

                    <input type="button" value="Cancelar" class="boton_cancelar">

                    <input type="submit" value="Recuperar" class="boton_submit">
    
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