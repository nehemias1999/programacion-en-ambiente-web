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

        <div class="div_principal_main">

            <h1 class="titulo_principal">
                Contacto
            </h1>
        
        </div>

        <section class="seccion_contacto_main">

            <div class="div_formulario">

                <p class="parrafo_introductorio_formulario">
                    Para comunicarse con la clinica por email, a continuación complete el siguiente formulario:
                </p>
    
                <form action="procesarContacto.js" method="post">
    
                    <label for="input_nombre_apellido">Nombre y apellido</label>
                    <input type="text" value="" name="input_nombre_apellido"/>
    
                    <label for="input_email">Email de contacto</label>
                    <input type="email" value="" name="input_email"/>
    
                    <label for="input_telefono">Teléfono</label>
                    <input type="tel" name="input_telefono"/>
                    
                    <label for="input_asunto">Asunto</label>
                    <input type="text" value="" name="input_asunto"/>
    
                    <label for="textarea_mensaje">Mensaje</label>
                    <textarea name="mensaje" id="textarea_mensaje" cols="30" rows="10"></textarea>
    
                    <div class="div_botones">

                        <input type="reset" value="limpiar pantalla" class="boton_reset">
    
                        <input type="submit" value="enviar mensaje" class="boton_submit">
                    
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