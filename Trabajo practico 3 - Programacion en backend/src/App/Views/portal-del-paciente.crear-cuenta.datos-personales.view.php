<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos personales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/datosPersonalesStyles.css'>
    
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

        <section class="seccion_ingresar_portal_main">

            <h2 class="titulo_crear_cuenta">
                Crear cuenta
            </h2>            

            <div class="div_formulario_datos_personales">

                <h3 class="titulo_datos_personales">
                    Datos personales
                </h3> 

                <form action="" method="post">

                    <label for="input_nombre" required="true">
                        Nombre
                    </label>
                    <input type="text" name="input_nombre">
    
                    <label for="input_apellido" required="true">
                        Apellido
                    </label>
                    <input type="text" name="input_apellido">
       
                    <label for="input_documento select_tipo_documento">
                        Documento
                    </label>

                    <div class="div_ingreso_documento">

                        <input type="text" name="input_documento" class="input_documento" inputmode="numeric" pattern="[0-9]*">
        
                        <select name="select_tipo_documento" id="select_tipo_documento" class="select_documento">
                            <option value="" disabled selected>Tipo</option>
                            <option value="">Documento Nacional de Identidad</option>
                            <option value="">Cédula de identidad</option>
                            <option value="">CUIT/CUIL</option>
                            <option value="">Libreta Cívica</option>
                            <option value="">Pasaporte</option>
                        </select>

                    </div>
                    
                    <label for="input_fecha_nacimiento">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="input_fecha_nacimiento">
            
                    <label for="input_caracteristica input_telefono">
                        Teléfono
                    </label>
                    <div class="div_telefono">

                        <input type="text" name="input_caracteristica" class="input_caracteristica" inputmode="numeric" pattern="[0-9]*">
    
                        <input type="text" name="input_telefono" class="input_telefono" inputmode="numeric" pattern="[0-9]*">

                    </div>
    
                    <label for="select_obra_social" required="true">
                        Obra social
                    </label>
                    <select name="select_obra_social" id="" class="select_obra_social">
                        <option value="" disabled selected>---</option>
                        <option value="">Medife</option>
                        <option value="">OSDE</option>
                        <option value="">IOMA</option>
                        <option value="">OSFATUN</option>
                        <option value="">DASMI</option>
                    </select>
    
                    <label for="input_afiliado" required="true">Nº afiliado</label>
                    <input type="text" name="input_afiliado">
        
                    <div class="div_botones">

                        <button class="boton_volver">
                            <a href="../../ingresar">
                                Volver
                            </a>
                        </button>
        
                        <button class="boton_siguiente">
                            <a href=<?php echo "/portal-del-paciente/crear-cuenta/domicilio";?>>
                                Siguiente
                            </a>
                        </button>

                    </div>
                    
                    <progress value="30" max="90"></progress>
    
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