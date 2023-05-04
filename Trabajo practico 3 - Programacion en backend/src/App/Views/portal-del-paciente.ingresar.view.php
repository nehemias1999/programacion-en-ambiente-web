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

        
        <div class="div-principal-main">

            <h1 class="titulo-principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion-formulario-main">

            <div class="div-formulario-ingreso">

                <?php
                    require "parts/notification-form-state.view.php";                    
                ?>

                <form action="/portal-del-paciente/ingresar" method="POST">

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
    
                    <label for="input-contrasena">
                        Contraseña
                    </label>
                    <input type="password" name="input-contrasena" required>
    
                    <a href="recuperar-contrasena">
                        Olvide la contraseña
                    </a>
    
                    <a href="crear-cuenta/datos-personales">
                        Crear cuenta
                    </a>

                    <input type="submit" value="iniciar sesion" class="boton-submit">
    
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