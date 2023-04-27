<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis datos - modificar contraseña </title>

    <link rel='stylesheet' type='text/css' media='all' href='../../../styles/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='../../../styles/cambioDeContrasenaStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <div class="div_logo_header">
            <a href="" class="enlace_logo">
                <img src="../../../images/Imagotipo_PAW_Hospitals.svg" alt="imagen_logo" class="imagen_logo">
            </a>
        </div>

        <section class="seccion_logo_cuenta">
            <h4 class="titulo_nombre_cuenta">
                Nombre de usuario
            </h4>
            
            <div class="div_imagen_cuenta">
                <img src="" alt="imagen_usuario" class="imagen_usuario">
            </div>

        </section>

    </header>

    <main>

        <section class="seccion_principal">

            <nav class="nav_menu_paginas_internas">

                <a href="turnos_pendientes.html" class="enlace_pagina_interna">
                    Turnos pendientes
                </a>

                <a href="ingresar_turno.html" class="enlace_pagina_interna">
                    Ingresar turno
                </a>

                <a href="vinculaciones.html" class="enlace_pagina_interna">
                    Vinculaciones
                </a>

                <a href="resultados.html" class="enlace_pagina_interna">
                    Resultados
                </a>

                <a href="mis_datos/mis_datos.html" class="enlace_pagina_interna">
                    Mis datos
                </a>
    
            </nav>

            <section class="seccion_cambio_contrasena">

                <h1 class="titulo_principal">
                    Modificación de contraseña
                </h1>
    
                <form action="ProcesarCambioContraseña.js" method="post">
                    
                    <label for="input_contraseña_actual">Ingrese su contraseña actual:</label>
                    <input type="text" name="input_contraseña_actual">
                    
                    <label for="input_nueva_contraseña">Nueva contraseña:</label>
                    <input type="text" name="input_nueva_contraseña">
    
                    <label for="input_confirmacion">Confirme contraseña nueva:</label>
                    <input type="text" name="input_confirmacion">
    
                    <div class="div_botones">
    
                        <input type="reset" value="Cancelar" class="boton_reset">
                    
                        <input type="submit" value="Guardar cambios" class="boton_submit">
    
                    </div>
    
                </form>
    
            </section>

        </section>
           
    </main>

    <footer>  
        
        <nav class="nav_contactos_footer">

            <a href="" class="enlace_contacto_footer">
                <img src="../../../images/icono_facebook.png" alt="logo_facebook" class="imagen_contacto_footer"/>
            </a>

            <a href="" class="enlace_contacto_footer">
                <img src="../../../images/icono_twitter.png" alt="logo_twitter" class="imagen_contacto_footer"/>
            </a>

            <a href="" class="enlace_contacto_footer">
                <img src="../../../images/icono_instagram.png" alt="logo_instagram" class="imagen_contacto_footer"/>
            </a>
            
            <a href="" class="enlace_contacto_footer">
                <img src="../../../images/icono_youtube.png" alt="logo_youtube" class="imagen_contacto_footer"/>
            </a>

            <a href="tel:011-15XXXXXX" class="enlace_contacto_footer">
                <img src="../../../images/icono_telefono.png" alt="logo_telefono" class="imagen_contacto_footer"/>
            </a>

            <a href="mailto:clinica@email.com" class="enlace_contacto_footer">
                <img src="../../../images/icono_email.png" alt="logo_mail" class="imagen_contacto_footer"/>
            </a>

        </nav>

        <section class="seccion_final_footer">

            <a href="#" class="enlace_logo_footer">
                <img src="../../../images/Imagotipo_PAW_Hospitals.svg" alt="logo_de_la_clinica" class="imagen_logo_footer"/>
            </a>
    
            <p class="parrafo_final_footer">©2023 UNLu PAW UL Hospital Mariano Moreno 2790, Lujan, Buenos Aires.</p>
    
        </section>
        
    </footer>

</body>
</html>