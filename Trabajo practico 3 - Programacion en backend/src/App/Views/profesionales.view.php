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

        <div class="div-principal-main">

            <h1 class="titulo-principal-main">
                Profesionales
            </h1>
    
          
            <div class="div_principal_main">  
                 <a href="/portal-del-paciente/ingresar" class="boton_solicitar_turno">
                     <h2>
                      Solicitar turno
                      </h2>
                 </a>
            </div>
           
    
        </div>

        <section class="seccion-profesionales-main">

            <div class="div-buscador-profesionales">

                <form action="" method="" name="" class="form-buscador-profesionales">
                    <input type="search" class="input-buscador">
                    <select name="select-filter" id="" class="selector-filtro-busqueda">
                        <option value="" disabled selected>Filtrar</option>
                        <option value="">Nombre</option>
                        <option value="">Especialidad</option>
                    </select>
                    <input type="submit" value="buscar" class="boton-buscador">
                </form>

            </div>       
            
            <section class="seccion-listado-profesionales">

                <ul class="lista-profesionales">

                    <li class="elemento-profesional">
    
                        <article class="articulo-profesional">
    
                            <div class="div-imagen-profesional">
                                <img src="/assets/images/medico_1.jpg" alt="imagen-profesional" class="imagen-profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Esteban Illia
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Médico cirujano
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="/assets/images/medico_2.jpg" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Gustavo Marchesin 
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Médico obstetra 
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="/assets/images/medico_3.jpg" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Martin Sotelo
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Médico cardiólogo 
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento_profesional">
    
                        <article class="articulo_profesional">
    
                            <div class="div_imagen_profesional">
                                <img src="/assets/images/medico_4.jpg" alt="imagen_profesional" class="imagen_profesional">
                            </div>

                            <div class="div_descripcion_profesional">
    
                                <div class="div_nombre_profesional">

                                    <h3 class="titulo_profesional">
                                        Santiago Chamorro
                                    </h3>    

                                </div>

                                <h4 class="subtitulo_cargo_profesional">
                                    Médico gastroenterólogo 
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