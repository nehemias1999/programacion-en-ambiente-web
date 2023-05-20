<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Obras sociales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/obras-sociales.style.css'>

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
                Obras sociales
            </h1>
    
            
            <a href="/portal-del-paciente/ingresar" class="boton_solicitar_turno">
              <h2>
                Solicitar turno
              </h2>
            </a>
                       
        </div>

        <section class="seccion_obras_sociales_main">

            <div class="div_buscador_obras_sociales">

                <form action="" method="" name="" class="form_buscador_obras_sociales">
                    <input type="search" class="input_buscador">
                    <input type="submit" value="buscar" class="boton_buscador">
                </form>

            </div>       
            
            <section class="seccion_listado_obras_sociales">
                
                <ul class="lista_obras_sociales">

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
                            <a href="https://www.ioma.gba.gob.ar/">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/ioma.png" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                           </a>

                           <a href="https://www.ioma.gba.gob.ar/">
                                 <div class="div_descripcion_obra_social">
                                    <h3 class="titulo_obra_social">
                                         IOMA
                                     </h3>
                                 </div>
                            </a>
                        </article>
    
                    </li>
                    
                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
                            <a href="https://www.osfatun.com.ar/">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/osfatun.jpg" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                            </a>

                            <a href="https://www.osfatun.com.ar/">
                                <div class="div_descripcion_obra_social">
        
                                    <h3 class="titulo_obra_social">
                                        OSFATUN
                                    </h3>
            
                                </div>
                            </a>
                        </article>
    
                    </li>

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
                            
                            <a href="https://www.galeno.com.ar/">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/galeno.png" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                            </a>

                            <a href="https://www.galeno.com.ar/">
                                <div class="div_descripcion_obra_social">

                                    <h3 class="titulo_obra_social">
                                        Galeno
                                    </h3>

                                </div>
                            </a>
                        </article>
                    </li>

                    <li class="elemento_obra_social">

                        <article class="articulo_obra_social">
                            
                            <a href="https://www.sancorsalud.com.ar/">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/sancor.jpg" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                            </a>

                            <a href="https://www.sancorsalud.com.ar/">
                                <div class="div_descripcion_obra_social">

                                    <h3 class="titulo_obra_social">
                                        Sancor Salud
                                    </h3>

                                </div>
                            </a>
                        </article>

                    </li>

                    <li class="elemento_obra_social">

                        <article class="articulo_obra_social">
                            <a href="https://medicus.com.ar/#/">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/medicus.png" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                            </a>

                            <a href="https://medicus.com.ar/#/">
                                <div class="div_descripcion_obra_social">

                                    <h3 class="titulo_obra_social">
                                        Medicus
                                    </h3>

                                </div>
                            </a>
                        </article>

                    </li>

                    <li class="elemento_obra_social">

                        <article class="articulo_obra_social">
                            <a href="https://www.osde.com.ar/index.html#!homepage.html">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/osde.png" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                            </a>

                            <a href="https://www.osde.com.ar/index.html#!homepage.html">
                                <div class="div_descripcion_obra_social">

                                    <h3 class="titulo_obra_social">
                                        OSDE
                                    </h3>

                                </div>
                            </a>
                        </article>

                    </li>

                    <li class="elemento_obra_social">

                        <article class="articulo_obra_social">
                            <a href="https://www.swissmedical.com.ar/prepagaclientes/">
                                <div class="div_imagen_obra_social">
                                    <img src="/assets/images/swiss.png" alt="imagen_obra_social" class="imagen_obra_social">
                                </div>
                            </a>

                            <a href="https://www.swissmedical.com.ar/prepagaclientes/">
                                <div class="div_descripcion_obra_social">

                                    <h3 class="titulo_obra_social">
                                        Swiss Medical
                                    </h3>

                                </div>
                            </a>
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