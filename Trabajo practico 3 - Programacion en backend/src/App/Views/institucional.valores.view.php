<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Valores</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/valoresStyles.css'>

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

            <h1 class="titulo_principal_main">
                Valores
            </h1>
    
            <a href="../portal del paciente/ingresar.html" class="boton_solicitar_turno">
                <h2>
                   Solicitar turno
                </h2>
            </a>
        </div>

        <section class="seccion_valores_main">

            <p class="parrafo_top">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut ipsum diam. 
                Nam et quam finibus, vehicula nisl nec, consequat nulla. Morbi luctus odio sollicitudin 
                ipsum pretium accumsan eget vitae ipsum. Mauris lacinia magna semper ante sodales vulputate. 
                Proin gravida condimentum ullamcorper. Nam ultricies dolor nec augue gravida ultrices. 
                Etiam egestas diam ut nibh dignissim, vel dignissim mauris dictum.

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut ipsum diam. 
                Nam et quam finibus, vehicula nisl nec, consequat nulla. Morbi luctus odio sollicitudin 
                ipsum pretium accumsan eget vitae ipsum. Mauris lacinia magna semper ante sodales vulputate. 
                Proin gravida condimentum ullamcorper. Nam ultricies dolor nec augue gravida ultrices. 
                Etiam egestas diam ut nibh dignissim, vel dignissim mauris dictum.

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut ipsum diam. 
                Nam et quam finibus, vehicula nisl nec, consequat nulla. Morbi luctus odio sollicitudin 
                ipsum pretium accumsan eget vitae ipsum. Mauris lacinia magna semper ante sodales vulputate. 
                Proin gravida condimentum ullamcorper. Nam ultricies dolor nec augue gravida ultrices. 
                Etiam egestas diam ut nibh dignissim, vel dignissim mauris dictum.
            </p>

            <img src="../images/valores.jpg" alt="imagen_valores" class="imagen_valores">         

        </section>

        <div class="div_boton">

            <button class="boton_vuelta_arriba">
                <a href="">
                    <h3>
                        Volver arriba
                    </h3>
                </a>
            </button>

        </div>

    </main>

    <footer>  
        
        <?php

            $path = "../";

            require "parts/footer.view.php";

        ?>
                
    </footer>  

</body>
</html>