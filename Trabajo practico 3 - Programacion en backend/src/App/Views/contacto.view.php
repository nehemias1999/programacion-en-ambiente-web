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
                    require "parts/notification-form-state.view.php";
                ?>               
    
                <form action="/contacto" method="POST">
    
                    <label for="input-nombre-apellido">Nombre y apellido (*)</label>
                    <input type="text" id="input-nombre-apellido" name="nombre-apellido" required/>
    
                    <label for="input-email">Email de contacto (*)</label>
                    <input type="email" id="input-email" name="email" required/>
    
                    <label for="input-celular">Celular (*)</label>
                    <input type="tel" id="input-celular" name="celular" required/>
                    
                    <label for="input-asunto">Asunto (*)</label>
                    <input type="text" id="input-asunto" name="asunto" required/>
    
                    <label for="textarea-mensaje">Mensaje (*)</label>
                    <textarea name="mensaje" id="textarea-mensaje" name="mensaje" cols="30" rows="10" required>
                        
                    </textarea>
    
                    <div class="div-botones">

                        <input type="reset" value="limpiar pantalla" class="boton-reset">
    
                        <input type="submit" value="enviar mensaje" class="boton-submit">
                    
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