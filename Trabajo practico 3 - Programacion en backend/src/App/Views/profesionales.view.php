<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profesionales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/profesionalesStyles.css'>

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

            <h1 class="titulo_principal_main">
                Profesionales
            </h1>
    
          
                <a href="../Punto 4 - HTML/portal del paciente/ingresar.html" class="boton_solicitar_turno">
                  <h2>
                    Solicitar turno
                  </h2>
                </a>
           
    
        </div>

        <section class="seccion_profesionales_main">

            <div class="div_buscador_profesionales">

                <form action="" method="" name="" class="form_buscador_profesionales">
                    <input type="search" class="input_buscador">
                    <select name="select_filter" id="" class="selector_filtro_busqueda">
                        <option value="" disabled selected>Filtrar</option>
                        <option value="">Nombre</option>
                        <option value="">Especialidad</option>
                    </select>
                    <input type="submit" value="buscar" class="boton_buscador">
                </form>

            </div>       
            
            <section class="seccion_listado_profesionales">

                <ul class="lista_profesionales">

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="images/fondo_noticia_principal.png" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Nombre profesional
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Cargo profesional
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="images/fondo_noticia_principal.png" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Nombre profesional
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Cargo profesional
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="images/fondo_noticia_principal.png" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Nombre profesional
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Cargo profesional
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="images/fondo_noticia_principal.png" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Nombre profesional
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Cargo profesional
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>                    

                </ul>

            </section>

        </section>

    </main>

    <footer>  
        
        <?php
            require "parts/footer.view.php";
        ?>
        
    </footer>  

</body>
</html>