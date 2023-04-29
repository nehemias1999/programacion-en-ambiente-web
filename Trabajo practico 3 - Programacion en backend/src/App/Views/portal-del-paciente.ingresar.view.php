<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ingresar</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/ingresarStyles.css'>

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

        <section class="seccion_formulario_main">

            <div class="div_formulario_ingreso">

                <form action="" method="post">

                    <label for="input_documento select_tipo_documento">
                        Documento
                    </label>
                    <div class="div_ingreso_documento">

                        <input type="number" name="input_documento" class="input_documento">
        
                        <select name="select_tipo_documento" id="select_tipo_documento">
                            <option value="" disabled selected>Tipo</option>
                            <option value="">Documento Nacional de Identidad</option>
                            <option value="">Cédula de identidad</option>
                            <option value="">CUIT/CUIL</option>
                            <option value="">Libreta Cívica</option>
                            <option value="">Pasaporte</option>
                        </select>

                    </div>
    
                    <label for="input_contrasena">
                        Contraseña
                    </label>
                    <input type="password" name="input_contrasena" class="input_contrasena">
    
                    <a href="recuperar-contrasena">
                        Olvide la contraseña
                    </a>
    
                    <a href="crear-cuenta/datos-personales">
                        Crear cuenta
                    </a>

                    <input type="submit" value="iniciar sesion" class="boton_submit">
    
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