<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>home</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/homeStyles.css'>

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
            <a href="../portal del paciente/ingresar.html" class="boton_solicitar_turno">
              <h2>
                Solicitar turno
              </h2>
            </a>
        </div>
          
        <section class="seccion_carrousel_noticias_main">

            <a href="home/noticia">

                <article class="articulo_carrousel_main">

                    <img src="/assets/images/equipamiento.jpg" alt="imagen_noticia" class="imagen_noticia_carrousel">

                    <div class="div_introduccion_noticia">

                        <h4 class="titulo_noticia_carrousel">
                            Sala angiográfica 2023
                        </h4>

                        <p class="parrafo_introductorio_noticia_carrousel">
                            UNLu Paw inaguró la nueva sala angiográfica con la más alta tecnología permitiendo así tratar pacientes
                            con problemas vasculares neurologicos, cardiacos y vasculares periféricos 
                        </p>

                    </div>

                </article>

            </a>

        </section>

        <section class="seccion_paginas_internas_main">

            <article class="articulo_enlace_pagina_interna">
                
                <a href="obras-sociales">

                    <img src="/assets/images/obra_social.jpeg" alt="imagen_pagina_interna" class="imagen_pagina_interna">

                    <div class="div_introduccion_pagina_interna">

                        <h4 class="titulo_pagina_interna">
                            Obras sociales
                        </h4>
    
                        <p class="parrafo_introductorio_pagina_interna">
                            Contamos con una gran cantidad de coberturas médicas asociadas 
                        </p>

                    </div>

                </a>

            </article>

            <article class="articulo_enlace_pagina_interna">
                
                <a href="profesionales">

                    <img src="/assets/images/profesionales1.jpg" alt="imagen_pagina_interna" class="imagen_pagina_interna">

                    <div class="div_introduccion_pagina_interna">

                        <h4 class="titulo_pagina_interna">
                            Profesionales
                        </h4>
    
                        <p class="parrafo_introductorio_pagina_interna">
                            La información completa de cada uno de los profesionales 
                        </p>

                    </div>

                </a>

            </article>

        </section>

        <section class="seccion_ubicacion_main">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3205.9678638195483!2d-58.86765139708054!3d-34.457138578792204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc9c67ea60bb3b%3A0x40d0bcfe5b652e7b!2sHospital%20Universitario%20Austral!5e0!3m2!1ses!2sar!4v1679872560649!5m2!1ses!2sar" 
            ></iframe>
        </section>

    </main>

    <footer>  
        
        <?php
            require "parts/footer.view.php";
        ?>

    </footer>

</body>
</html>