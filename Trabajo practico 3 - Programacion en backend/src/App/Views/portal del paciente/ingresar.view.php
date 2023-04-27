<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>

    <link rel='stylesheet' type='text/css' media='all' href='../styles/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='../styles/ingresarStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <div class="div_logo_header">
            <a href="../home/home.html" class="enlace_logo">
                <img src="../images/Imagotipo_PAW_Hospitals.svg" alt="imagen_logo" class="imagen_logo">
            </a>
        </div>

        <nav class="nav_contactos_header">

            <a href="https://www.facebook.com/" class="enlace_contacto">
                <img src="../images/icono_facebook.png" alt="logo_facebook" class="imagen_contacto"/>
            </a>

            <a href="https://twitter.com/" class="enlace_contacto">
                <img src="../images/icono_twitter.png" alt="logo_twitter" class="imagen_contacto"/>
            </a>

            <a href="https://instagram.com/" class="enlace_contacto">
                <img src="../images/icono_instagram.png" alt="logo_instagram" class="imagen_contacto"/>
            </a>
            
            <a href="https://www.youtube.com/" class="enlace_contacto">
                <img src="../images/icono_youtube.png" alt="logo_youtube" class="imagen_contacto"/>
            </a>

            <a href="tel:011-15XXXXXX" class="enlace_contacto">
                <img src="../images/icono_telefono.png" alt="logo_telefono" class="imagen_contacto"/>
            </a>

            <a href="mailto:clinica@email.com" class="enlace_contacto">
                <img src="../images/icono_email.png" alt="logo_mail" class="imagen_contacto"/>
            </a>

        </nav>

        <nav class="nav_enlaces_header">

            <a href="../institucional/institucional.html" class="enlace_pagina">
                Institucional
            </a>

            <a href="../portal del paciente/ingresar.html" class="enlace_pagina">
                Portal del paciente
            </a>

            <a href="../profesionales.html" class="enlace_pagina">
                Profesionales
            </a>

            <a href="../obras_sociales.html" class="enlace_pagina">
                Obras sociales
            </a>

            <a href="../contacto.html" class="enlace_pagina">
                Contacto
            </a>

        </nav>

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
    
                    <a href="recuperar_contrasena.html">
                        Olvide la contraseña
                    </a>
    
                    <a href="crear cuenta/datos_personales.html">
                        Crear cuenta
                    </a>

                    <input type="submit" value="iniciar sesion" class="boton_submit">
    
                </form>

            </div>

        </section>

    </main>

    <footer>  
        
        <nav class="nav_contactos_footer">

            <a href="https://www.facebook.com/" class="enlace_contacto_footer">
                <img src="../images/icono_facebook.png" alt="logo_facebook" class="imagen_contacto_footer"/>
            </a>

            <a href="https://twitter.com/" class="enlace_contacto_footer">
                <img src="../images/icono_twitter.png" alt="logo_twitter" class="imagen_contacto_footer"/>
            </a>

            <a href="https://instagram.com/" class="enlace_contacto_footer">
                <img src="../images/icono_instagram.png" alt="logo_instagram" class="imagen_contacto_footer"/>
            </a>
            
            <a href="https://www.youtube.com/" class="enlace_contacto_footer">
                <img src="../images/icono_youtube.png" alt="logo_youtube" class="imagen_contacto_footer"/>
            </a>

            <a href="tel:011-15XXXXXX" class="enlace_contacto_footer">
                <img src="../images/icono_telefono.png" alt="logo_telefono" class="imagen_contacto_footer"/>
            </a>

            <a href="mailto:clinica@email.com" class="enlace_contacto_footer">
                <img src="../images/icono_email.png" alt="logo_mail" class="imagen_contacto_footer"/>
            </a>

        </nav>

        <section class="seccion_final_footer">

            <a href="#" class="enlace_logo_footer">
                <img src="../images/Imagotipo_PAW_Hospitals.svg" alt="logo_de_la_clinica" class="imagen_logo_footer"/>
            </a>
    
            <p class="parrafo_final_footer">©2023 UNLu PAW UL Hospital Mariano Moreno 2790, Lujan, Buenos Aires.</p>
    
        </section>
        
    </footer>  

</body>
</html>