<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contacto</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/contactoStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
            require "parts/header.view.php";
        ?>

    </header>

    <main>

        <div class="div-principal-main">

            <h1 class="titulo-principal">
                Contacto
            </h1>
        
        </div>

        <section class="seccion-contacto-main">

            <div class="div-formulario">

                <p class="parrafo-introductorio-formulario">
                    Para comunicarse con la clinica por email, a continuación complete el siguiente formulario:
                </p>

                <?php

                    $mensajeCorrecto = "Se proceso correctamente el formulario. Sera notificado a su mail.";

                    require "parts/notification-form-state.view.php";
                    
                ?>               
    
                <form action="/contacto" method="POST" enctype="multipart/form-data">
    
                    <label for="input-nombre-apellido">
                        Nombre y apellido (*)
                    </label>
                    <input type="text" id="input-nombre-apellido" name="input-nombre-apellido" required/>
    
                    <label for="input-email">
                        Email de contacto (*)
                    </label>
                    <input type="email" id="input-email" name="input-email" required/>
    
                    <label for="input-caracteristica input-celular">
                        Celular (*)
                    </label>
                    <div class="div-celular">

                        <input type="text" id="input-caracteristica" name="input-caracteristica" class="input-caracteristica" inputmode="numeric" pattern="[0-9]*" required>
    
                        <input type="text" id="input-celular" name="input-celular" class="input-celular" inputmode="numeric" pattern="[0-9]*" required>

                    </div>
                    
                    <label for="input-asunto">
                        Asunto (*)
                    </label>
                    <input type="text" id="input-asunto" name="input-asunto" required/>
    
                    <label for="textarea-mensaje">
                        Mensaje (*)
                    </label>
                    <textarea id="textarea-mensaje" name="textarea-mensaje" cols="30" rows="10" required>
                        
                    </textarea>

                    <label for="input-imagen">
                        Seleccione una imagen:
                    </label>
		            <input type="file" name="input-imagen" id="input-imagen" accept="image/*">
    
                    <div class="div-botones">

                        <input type="reset" value="limpiar pantalla">
    
                        <input type="submit" value="enviar mensaje">
                    
                    </div>
    
                </form>

            </div>

        </section>

    </main>

    <footer>  
                
        <?php
            require "parts/footer.view.php";
        ?>

    </footer>  

</body>
</html>