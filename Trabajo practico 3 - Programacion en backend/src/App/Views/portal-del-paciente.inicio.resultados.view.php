<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resultados</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/resultadosStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
        
            $path = "../../";

            require "parts/header.portal.view.php";
        
        ?>

    </header>

    <main>

        <section class="seccion-principal">

            <?php

                $path = "";

                require "parts/nav.portal.view.php";

            ?>

            <section class="seccion-resultados">
                
                <h1 class="titulo-principal">
                    Resultados
                </h1>

                <div class="div-nombre-columnas">

                    <h3 class="titulo-nombre-columna">
                        Fecha realizado
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Estado
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Tipo de examen
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Solicitud
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Ver informe
                    </h3>

                </div>

                <div class="div-scrollbar">

                    <div class="div-contenido">

                        <ul class="lista-resultados">
                    
                            <li class="elemento-resultado">
    
                                <article class="articulo-resultado">
                                
                                    <p class="parrafo-fecha-realizado">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
                                    <p class="parrafo-tipo-examen">
                                        Tipo examen
                                    </p>
    
                                    <p class="parrafo-solicitud">
                                        Solicitud
                                    </p>
    
                                    <button class="boton-enlace-resultado">
                                        <a href="">
                                            PDF
                                        </a>
                                    </button>
    
                                </article>
    
                            </li>
                            
                            <li class="elemento-resultado">
    
                                <article class="articulo-resultado">
                                
                                    <p class="parrafo-fecha-realizado">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
                                    <p class="parrafo-tipo-examen">
                                        Tipo examen
                                    </p>
    
                                    <p class="parrafo-solicitud">
                                        Solicitud
                                    </p>
                                    
                                    <button class="boton-enlace-resultado">
                                        <a href="">
                                            PDF
                                        </a>
                                    </button>
    
                                </article>
    
                            </li>
    
                            <li class="elemento-resultado">
    
                                <article class="articulo-resultado">
                                
                                    <p class="parrafo-fecha-realizado">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
                                    <p class="parrafo-tipo-examen">
                                        Tipo examen
                                    </p>
    
                                    <p class="parrafo-solicitud">
                                        Solicitud
                                    </p>
    
                                    <button class="boton-enlace-resultado">
                                        <a href="">
                                            PDF
                                        </a>
                                    </button>
    
                                </article>
    
                            </li>
    
                        </ul>

                    </div>

                </div>              

            </section>

        </section>

    </main>

    <footer>  
        
        <?php

            $path = "../../";

            require "parts/footer.view.php";

        ?>
        
    </footer>

</body>
</html>