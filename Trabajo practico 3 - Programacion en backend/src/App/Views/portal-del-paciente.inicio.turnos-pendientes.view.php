<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Turnos pendientes</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/turnosPendientesStyles.css'>

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

            <section class="seccion-turnos-pendientes">
                
                <h1 class="titulo-principal">
                    Turnos pendientes
                </h1>

                <div class="div-nombre-columnas">

                    <h3 class="titulo-nombre-columna">
                        Fecha turno
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Profesional
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Especialidad
                    </h3>

                    <h3 class="titulo-nombre-columna">
                        Estado
                    </h3>

                </div>

                <div class="div-scrollbar">

                    <div class="div-contenido">

                        <ul class="lista-turnos-pendientes">
                        
                            <li class="elemento-turno-pendiente">
    
                                <article class="articulo-turno-pendiente">
                                
                                    <p class="parrafo-fecha-turno">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-profesional">
                                        Profesional
                                    </p>
    
                                    <p class="parrafo-especialidad">
                                        Especialidad
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
                                </article>
    
                            </li>
    
                            <li class="elemento-turno-pendiente">
    
                                <article class="articulo-turno-pendiente">
                                
                                    <p class="parrafo-fecha-turno">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-profesional">
                                        Profesional
                                    </p>
    
                                    <p class="parrafo-especialidad">
                                        Especialidad
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
                                </article>
    
                            </li>
    
                            <li class="elemento-turno-pendiente">
    
                                <article class="articulo-turno-pendiente">
                                
                                    <p class="parrafo-fecha-turno">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-profesional">
                                        Profesional
                                    </p>
    
                                    <p class="parrafo-especialidad">
                                        Especialidad
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
                                </article>
    
                            </li>
    
                            <li class="elemento-turno-pendiente">
    
                                <article class="articulo-turno-pendiente">
                                
                                    <p class="parrafo-fecha-turno">
                                        dd/mm/aaaa
                                    </p>
    
                                    <p class="parrafo-profesional">
                                        Profesional
                                    </p>
    
                                    <p class="parrafo-especialidad">
                                        Especialidad
                                    </p>
    
                                    <p class="parrafo-estado">
                                        Estado
                                    </p>
    
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