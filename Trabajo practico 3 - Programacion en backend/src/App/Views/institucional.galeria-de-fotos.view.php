<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeria</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/institucional.galeria-de-fotos.style.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php

            $path = "../";

            require "parts/header.view.php";

        ?>

    </header>

    <main>

        <div class="div_principal_main">

            <h1 class="titulo_principal_main">
                Galería de fotos
            </h1>
    
            <a href="/portal-del-paciente/ingresar" class="boton_solicitar_turno">
              <h2>
                Solicitar turno
              </h2>
            </a>
        </div>

        <section class="seccion_galeria_fotos_main">

            <div class="div_lista_galeria_fotos">

               <div class="div_scrollbar">

                    <div class="div_contenido">

                        <ul class="lista_galeria_fotos">

                            <li class="elemento_galeria_fotos">
                                <article class="articulo_imagen">
            
                                    <img src="" alt="imagen_galeria_fotos" class="imagen_galeria">
            
                                    
            
                                </article>
                            </li>
                            <li class="elemento_galeria_fotos">
                                <article class="articulo_imagen">
            
                                    <img src="" alt="imagen_galeria_fotos" class="imagen_galeria">
            
                                    <div class="div_titulo_imagen">
                                        <h3 class="titulo_imagen">
                                            Título foto
                                        </h3>
                                    </div>
            
                                </article>
                            </li>
                            <li class="elemento_galeria_fotos">
                                <article class="articulo_imagen">
            
                                    <img src="" alt="imagen_galeria_fotos" class="imagen_galeria">
            
                                    <div class="div_titulo_imagen">
                                        <h3 class="titulo_imagen">
                                            Título foto
                                        </h3>
                                    </div>
            
                                </article>
                            </li>
                            <li class="elemento_galeria_fotos">
                                <article class="articulo_imagen">
            
                                    <img src="" alt="imagen_galeria_fotos" class="imagen_galeria">
            
                                    <div class="div_titulo_imagen">
                                        <h3 class="titulo_imagen">
                                            Título foto
                                        </h3>
                                    </div>
            
                                </article>
                            </li>
                            <li class="elemento_galeria_fotos">
                                <article class="articulo_imagen">
            
                                    <img src="" alt="imagen_galeria_fotos" class="imagen_galeria">
            
                                    <div class="div_titulo_imagen">
                                        <h3 class="titulo_imagen">
                                            Título foto
                                        </h3>
                                    </div>
            
                                </article>
                            </li>
                            
                        </ul>

                    </div>

               </div>

            </div>

        </section>

    </main>

    <footer>  
        
        <?php

            $path = "../";

            require "parts/footer.view.php";

        ?>
        
    </footer>  

</body>
</html>