<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profesionales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/profesionales.style.css'>

    <script src="/assets/js/profesionales.functionalities.js"></script>

</head>
<body>

    <header>

        <?php
            require "parts/header.view.php";
        ?>

    </header>

    <main>

        <div class="div-principal-main">

            <h1>
                Profesionales
            </h1>
    
          
            <div class="div-principal-main">  
                 <a href="/portal-del-paciente/ingresar" class="boton-solicitar-turno">
                     <h2>
                      Solicitar turno
                      </h2>
                 </a>
            </div>
           
    
        </div>

        <section class="seccion-profesionales-main">

            <section class="seccion-filtro-busqueda">

                <div>

                    <input type="search" name="input-buscador-profesionales">

                    <select>
                        <option value="" disabled selected>Filtrar</option>
                        <option value="nombre">Nombre</option>
                        <option value="apellido">Apellido</option>
                        <option value="especialidad">Especialidad</option>
                    </select>

                </div>

                <div>

                    <button>
                        Ordenar ascendente
                    </button>
                                        
                    <div>

                        <label for="input-cantidad-resultados">
                            Resultados por página:
                        </label>
                        <input type="number" name="input-cantidad-resultados" id="input-cantidad-resultados" min="10" max="30" value="10">

                    </div>

                    <button>
                        Buscar
                    </button>

                </div>
        
            </section>
    
            <section class="seccion-listado-profesionales">

                <ul class="lista-profesionales">

                    <li class="elemento-profesional">
    
                        <article class="articulo-profesional">
    
                            <div class="div-imagen-profesional">
                                <img src="/assets/images/medico_1.jpg" alt="imagen-profesional" class="imagen-profesional">
                            </div>

                            <div class="div-descripcion-profesional">
    
                                <div class="div-nombre-profesional">

                                    <h3 class="titulo-profesional">
                                        Esteban Illia
                                    </h3>    

                                </div>

                                <h4 class="subtitulo-cargo-profesional">
                                    Médico cirujano
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento-profesional">
    
                        <article class="articulo-profesional">
    
                            <div class="div-imagen-profesional">
                                <img src="/assets/images/medico_2.jpg" alt="imagen-profesional" class="imagen-profesional">
                            </div>

                            <div class="div-descripcion-profesional">
    
                                <div class="div-nombre-profesional">

                                    <h3 class="titulo-profesional">
                                        Gustavo Marchesin 
                                    </h3>    

                                </div>

                                <h4 class="subtitulo-cargo-profesional">
                                    Médico obstetra 
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento-profesional">
    
                        <article class="articulo-profesional">
    
                            <div class="div-imagen-profesional">
                                <img src="/assets/images/medico_3.jpg" alt="imagen-profesional" class="imagen-profesional">
                            </div>

                            <div class="div-descripcion-profesional">
    
                                <div class="div-nombre-profesional">

                                    <h3 class="titulo-profesional">
                                        Martin Sotelo
                                    </h3>    

                                </div>

                                <h4 class="subtitulo-cargo-profesional">
                                    Médico cardiólogo 
                                </h4>
    
                            </div>
    
                        </article>
    
                    </li>

                    <li class="elemento-profesional">
    
                        <article class="articulo-profesional">
    
                            <div class="div-imagen-profesional">
                                <img src="/assets/images/medico_4.jpg" alt="imagen-profesional" class="imagen-profesional">
                            </div>

                            <div class="div-descripcion-profesional">
    
                                <div class="div-nombre-profesional">

                                    <h3 class="titulo-profesional">
                                        Santiago Chamorro
                                    </h3>    

                                </div>

                                <h4 class="subtitulo-cargo-profesional">
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