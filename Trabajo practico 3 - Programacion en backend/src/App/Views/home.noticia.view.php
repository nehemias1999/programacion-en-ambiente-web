<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Noticia del mes</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css//baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/noticiaHomeStyles.css'>

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
    
            <button class="boton_solicitar_turno" >
                <a href="../home/home.html">
                    <h2>
                        Solicitar turno
                    </h2>
                </a>
            </button>

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
                    Título noticia
                </h2>

                <p class="parrafo_noticia">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ab minus 
                    nobis non iste optio rerum rem? Itaque, adipisci laborum maxime debitis consequatur
                    rem expedita numquam ipsam veniam provident at. 

                    <br>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ab minus 
                    nobis non iste optio rerum rem? Itaque, adipisci laborum maxime debitis consequatur
                    rem expedita numquam ipsam veniam provident at.

                    <br>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ab minus 
                    nobis non iste optio rerum rem? Itaque, adipisci laborum maxime debitis consequatur
                    rem expedita numquam ipsam veniam provident at.

                    <br>

                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis ab minus 
                    nobis non iste optio rerum rem? Itaque, adipisci laborum maxime debitis consequatur
                    rem expedita numquam ipsam veniam provident at.
                </p>

                <div class="div_imagen_noticia">
                    <img src="" alt="imagen_noticia" class="imagen_noticia">
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