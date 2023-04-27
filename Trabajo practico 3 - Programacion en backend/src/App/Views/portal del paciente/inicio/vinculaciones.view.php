<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinculaciones</title>

    <link rel='stylesheet' type='text/css' media='all' href='../../styles/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='../../styles/vinculacionesStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <div class="div_logo_header">
            <a href="/Punto 4 - HTML/home/home.html" class="enlace_logo">
                <img src="../../images/Imagotipo_PAW_Hospitals.svg" alt="imagen_logo" class="imagen_logo">
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

            <section class="seccion_vinculos_cargados">

                <h1 class="titulo_principal">
                    Vinculos
                </h1>
    
               <div class="div_vinculos_cargados">

                    <div class="div_scrollbar">

                        <div class="div_contenido">

                            <ul class="lista_vinculos_cargados">
                                <li class="elemento_vinculo">
                                    <article class="articulo_vinculo">
            
                                        <div class="div_encabezado_vinculo">

                                            <div class="div_imagen_vinculo">
                                                <img src="" alt="imagen_vinculo" class="imagen_vinculo">
                                            </div>

                                            <h3 class="nombre_apellido_vinculo">
                                                Apellido, Nombre vinculo
                                            </h2>
            
                                        </div>
            
                                        <div class="div_datos_vinculo">

                                            <dl class="datos_usuario">
            
                                                <dt>Vinculo:</dt> 
                                                    <dd>tipo vinculo</dd>
                                                <dt>Obra social:</dt> 
                                                    <dd>obra social vinculo</dd>
                                                <dt>Numero afiliado:</dt> 
                                                    <dd>numero afiliado vinculo</dd>
                                                <dt>Edad:</dt> 
                                                    <dd>edad vinculo</dd>
                                                <dt>Provincia:</dt> 
                                                    <dd>provincia vinculo</dd>
                                                <dt>Localidad:</dt> 
                                                    <dd>localidad vinculo</dd>
                                                <dt>Calle:</dt> 
                                                    <dd>calle vinculo</dd>
                                                <dt>Numero:</dt> 
                                                    <dd>numero vinculo</dd>
                                                <dt>Piso:</dt> 
                                                    <dd>piso vinculo</dd>
                                                <dt>Depto:</dt> 
                                                    <dd>depto vinculo</dd>
                                                    
                                            </dl>

                                        </div>
            
                                        <div class="div_seccion_botones_vinculo">
                                            <button class="boton_eliminar">
                                                Eliminar
                                            </button>
                                       </div>
            
                                    </article>
                                </li>
                            </ul>
            
                        </div>

                    </div>

               </div>
    
            </section>

            <section class="seccion_cargar_vinculos">
                
                <h2 class="titulo_agregar_vinculo">
                    Agregar vinculo
                </h2>

                <form action="procesarVinculo.js" method="post">

                    <label for="select_obra_social">
                        Obra social
                    </label>
                    <select name="select_obra_social" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Medife</option>
                        <option value="">OSDE</option>
                        <option value="">IOMA</option>
                        <option value="">OSFATUN</option>
                        <option value="">DASMI</option>
                    </select>

                    <label for="input_afiliado">
                        Nº afiliado
                    </label>
                    <input type="text" name="input_afiliado">

                    <label for="input_vinculo">
                        Vinculo
                    </label>
                    <select name="select_vinculo" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Hijo/a menor de 18 anos</option>
                        <option value="">Hijo/a mayor de 18 anos</option>
                        <option value="">Conyuge</option>
                    </select>
                
                    <label for="input_nombre">
                        Nombre
                    </label>
                    <input type="text" name="input_nombre">

                    <label for="input_apellido">
                        Apellido
                    </label>
                    <input type="text" name="input_apellido">            

                    <label for="input_fecha_nacimiento">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="input_fecha_nacimiento">

                    <label for="select_provincia">
                        Provincia
                    </label>
                    <select name="select_provincia" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Buenos Aires</option>
                        <option value="">Cordoba</option>
                        <option value="">Santa Fe</option>
                    </select>
                
                    <label for="select_localidad">
                        Localidad
                    </label>
                    <select name="select_localidad" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Ciudad Autonoma de Buenos Aires</option>
                        <option value="">Lujan</option>
                        <option value="">General Rodriguez</option>
                        <option value="">Merlo</option>
                        <option value="">Pilar</option>
                    </select>
                               
                    <label for="input_calle">
                        Calle
                    </label>
                    <input type="text" name="input_calle">

                    <div class="div_domicilio">

                        <div class="div_dato">

                            <label for="input_numero">
                                Nro
                            </label>
                            <input type="text" name="input_numero" inputmode="numeric" pattern="[0-9]*">                            

                        </div>

                        <div class="div_dato">

                            <label for="input_depto">
                                Depto
                            </label>
                            <input type="text" name="input_depto">

                        </div>

                        <div class="div_dato">

                            <label for="input_piso">
                                Piso
                            </label>
                            <input type="number" name="input_piso">

                        </div>

                    </div>

                    <div class="div_botones">

                        <input type="reset" value="Cancelar" class="boton_reset">
                    
                        <input type="submit" value="Agregar vinculo" class="boton_submit">

                    </div>

                </form>

            </section>

        </section>

    </main>


    <footer>  
        
        <nav class="nav_contactos_footer">

            <a href="" class="enlace_contacto_footer">
                <img src="../../images/icono_facebook.png" alt="logo_facebook" class="imagen_contacto_footer"/>
            </a>

            <a href="" class="enlace_contacto_footer">
                <img src="../../images/icono_twitter.png" alt="logo_twitter" class="imagen_contacto_footer"/>
            </a>

            <a href="" class="enlace_contacto_footer">
                <img src="../../images/icono_instagram.png" alt="logo_instagram" class="imagen_contacto_footer"/>
            </a>
            
            <a href="" class="enlace_contacto_footer">
                <img src="../../images/icono_youtube.png" alt="logo_youtube" class="imagen_contacto_footer"/>
            </a>

            <a href="tel:011-15XXXXXX" class="enlace_contacto_footer">
                <img src="../../images/icono_telefono.png" alt="logo_telefono" class="imagen_contacto_footer"/>
            </a>

            <a href="mailto:clinica@email.com" class="enlace_contacto_footer">
                <img src="../../images/icono_email.png" alt="logo_mail" class="imagen_contacto_footer"/>
            </a>

        </nav>

        <section class="seccion_final_footer">

            <a href="#" class="enlace_logo_footer">
                <img src="../../images/Imagotipo_PAW_Hospitals.svg" alt="logo_de_la_clinica" class="imagen_logo_footer"/>
            </a>
    
            <p class="parrafo_final_footer">©2023 UNLu PAW UL Hospital Mariano Moreno 2790, Lujan, Buenos Aires.</p>
    
        </section>
        
    </footer>

</body>
</html>