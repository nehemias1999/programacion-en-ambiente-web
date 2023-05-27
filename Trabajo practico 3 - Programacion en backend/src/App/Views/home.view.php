<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>home</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/home.style.css'>

    <script src="/assets/js/components/ScriptAdministrator.js"></script>
    <script src="/assets/js/HomeFuncionalities.js"></script>

</head>
<body>

    <header>

        <?php
            require "parts/header.view.php";
        ?>

    </header>

    <main>

        <div class="div-principal-main">  
            <a href="/portal-del-paciente/ingresar" class="boton-solicitar-turno">
              <h2>
                Solicitar turno
              </h2>
            </a>
        </div>

        <section class="seccion-carrousel-noticias-main">

            <div class="progress-bar">
                <div class="progress"></div>
            </div>

            <div class="carousel">  
                <a href="noticia-home.html"> <!-- ver como manejamos esto del href-->
                    <img class="active" src="/assets/images/equipamiento.jpg" alt="Imagen 1">
                </a>
                
                <img src="/assets/images/quirofano.jpg" alt="Imagen 2">
                <img src="/assets/images/laboratorio2.jpg" alt="Imagen 3">
            </div>
            
            <button class="carousel-btn prev" >&#10094;</button>
            <button class="carousel-btn next" >&#10095;</button>
            <button class="carousel-btn pause">&#10074;&#10074;</button>

            <div class="div-introduccion-noticia">
                <h4 id="titulo-noticia" class="titulo-noticia-carrousel">
                    Sala angiográfica 2023
                </h4>
                <p id="contenido-noticia">
                    UNLu Paw inauguró la nueva sala angiográfica con la más alta tecnología permitiendo así tratar pacientes con problemas vasculares neurológicos, cardiacos y vasculares periféricos
                </p>
            </div>

            <div class="thumbnails">
                <img src="/assets/images/equipamiento.jpg" alt="Imagen 1">
                <img src="/assets/images/quirofano.jpg" alt="Imagen 2">
                <img src="/assets/images/laboratorio2.jpg" alt="Imagen 3">
            </div>

        </section>
          
        <section class="seccion-paginas-internas-main">

            <article class="articulo-enlace-pagina-interna">
                
                <a href="/obras-sociales">

                    <img src="/assets/images/obra-social.jpeg" alt="imagen-pagina-interna" class="imagen-pagina-interna">

                    <div class="div-introduccion-pagina-interna">

                        <h4 class="titulo-pagina-interna">
                            Obras sociales
                        </h4>
    
                        <p class="parrafo-introductorio-pagina-interna">
                            Contamos con una gran cantidad de coberturas médicas asociadas 
                        </p>

                    </div>

                </a>

            </article>

            <article class="articulo-enlace-pagina-interna">
                
                <a href="/profesionales">

                    <img src="/assets/images/profesionales1.jpg" alt="imagen-pagina-interna" class="imagen-pagina-interna">

                    <div class="div-introduccion-pagina-interna">

                        <h4 class="titulo-pagina-interna">
                            Profesionales
                        </h4>
    
                        <p class="parrafo-introductorio-pagina-interna">
                            La información completa de cada uno de los profesionales 
                        </p>

                    </div>

                </a>

            </article>

        </section>

        <section class="seccion-ubicacion-main">
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