<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Noticia del mes</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css//generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/home.noticia.style.css'>

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
            <a href="/portal-del-paciente/ingresar" class="boton_solicitar_turno">
              <h2>
                Solicitar turno
              </h2>
            </a>
        </div>

        <section class="seccion_noticia_main">

            <div class="encabezado_titulo_principal">

                <h1 class="titulo_principal">
                    Noticia del mes
                </h1>

                <div class="div_fecha">
                    <time datetime="2023-04-14" class="fecha_noticia">
                        14 de abril de 2023
                    </time>
                </div>

            </div>

            <article class="articulo_noticia">

                <h2 class="titulo_noticia">
                     Sala angiográfica 2023
                </h2>

                <p class="parrafo_noticia">
                    UNLu Paw inaguró la nueva sala angiográfica con la más alta tecnología permitiendo así tratar pacientes
                    con problemas vasculares neurologicos, cardiacos y vasculares periféricos 

                    <br>
                </p>

                <div class="div_imagen_noticia">
                    <img src="/assets/images/equipamiento.jpg" alt="imagen_noticia" class="imagen_noticia">
                </div>

            </article>

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