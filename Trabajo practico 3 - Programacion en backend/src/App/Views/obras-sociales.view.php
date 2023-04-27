<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras sociales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/obrasSocialesStyles.css'>

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
    
            
            <a href="../Punto 4 - HTML/portal del paciente/ingresar.html" class="boton_solicitar_turno">
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
    
                            <div class="div_imagen_obra_social">
                                <img src="" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
                            </div>
    
                        </article>
    
                    </li>
                    
                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
    
                            <div class="div_imagen_obra_social">
                                <img src="images/ambulancia.jpg" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
    
                            <div class="div_imagen_obra_social">
                                <img src="" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
                            </div>
    
                        </article>
                    </li>

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
    
                            <div class="div_imagen_obra_social">
                                <img src="" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
    
                            <div class="div_imagen_obra_social">
                                <img src="" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
    
                            <div class="div_imagen_obra_social">
                                <img src="" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_obra_social">
    
                        <article class="articulo_obra_social">
    
                            <div class="div_imagen_obra_social">
                                <img src="" alt="imagen_obra_social" class="imagen_obra_social">
                            </div>
                            
                            <div class="div_descripcion_obra_social">
    
                                <h3 class="titulo_obra_social">
                                    Nombre obra social
                                </h3>
        
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