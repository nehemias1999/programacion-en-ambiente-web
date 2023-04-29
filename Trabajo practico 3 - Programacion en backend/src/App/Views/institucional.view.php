<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Institucional</title>

    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/baseStyles.css">
    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/institucionalStyles.css">

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
            require "parts/header.view.php";
        ?>

    </header>

    <main>

        <div class="div_principal">

            <h1 class="titulo_principal_main">
                Institucional
            </h1>

            <div class="div_principal_main">  
                <a href="../portal del paciente/ingresar.html" class="boton_solicitar_turno">
                  <h2>
                    Solicitar turno
                  </h2>
                </a>
            </div>

        </div>

        <section class="seccion_mision_main">

            <article class="articulo_mision_main">

                <img src="../images/mision3.jpg" alt="imagen_mision" class="imagen_mision">

                <div class="div_introduccion_mision">

                    <h3 class="titulo_mision">
                        Misión
                    </h3>
    
                    <P class="parrafo_introductorio_mision">
                        En UNLU PAW queremos brindar la mayor asistencia a los enfermos y acompañar a
                        cada familia, protegiendo su vida desde la concepción, privilegiando a la persona y
                        asegurando los derechos de los enfermos y el respeto por su dignidad hasta su muerte natural
                    </P>

                </div>

            </article>

        </section>  

        <section class="seccion_valores_main">

            <a href="institucional/valores">

                <article class="articulo_valores">

                    <img src="../images/valores.jpg" alt="imagen_valores" class="imagen_valores">
    
                    <div class="div_introduccion_valores">
    
                        <h3 class="titulo_valores"> 
                            Valores  
                        </h3>
        
                        <P class="parrafo_introductorio_valores">
                            
                            Calidad médica
                            Ética profesional
                            Servicio personalizado
                        </P>
        
                    </div>
    
                </article>

            </a>

        </section>

        <section class="seccion_paginas_internas_main">

            <article class="articulo_pagina_interna"> 
            
                <a href="institucional/galeria-de-fotos">

                    <img src="../images/galeria_principal.jpg" alt="imagen_pagina_interna" class="imagen_pagina_interna">

                    <div class="div_introduccion_pagina_interna">

                            <h3 class="titulo_pagina_interna"> 
                                Galería de fotos 
                            </h3>

                            <p class="parrafo_introductorio_pagina_interna">
                                Realice un paseo virtual por UNLu PAW UL Hospitals
                            </p>

                    </div>
               </a>

            </article>

            <article class="articulo_pagina_interna"> 

                <a href="institucional/directorio">

                    <img src="../images/reunion.jpg" alt="imagen_pagina_interna" class="imagen_pagina_interna">

                    <div class="div_introduccion_pagina_interna">

                            <h3 class="titulo_pagina_interna"> 
                                Directorio
                            </h3>

                            <p class="parrafo_introductorio_pagina_interna">
                                Conozca la organización y cargos jerárquicos de nuestra institución 
                            </p>

                    </div>
               </a>

            </article>

        </section>

    </main>

    <footer>  
        
        <?php
            require "parts/footer.view.php";
        ?>
        
    </footer>  

</body>
</html>