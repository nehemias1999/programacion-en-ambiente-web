<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mis datos</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/misDatosStyles.css'>

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

            <section class="seccion-mis-datos">

                <div class="div-encabezado-mis-datos"> 

                    <h1 class="titulo-principal">
                        Tus datos
                    </h1>
        
                    <button class="boton-cambiar-contrasena">
                        <a href="mis-datos/cambiar-contrasena">
                            cambiar contrasena
                        </a>
                    </button>
    
                    
                    <button class="boton-editar">
                        <a href="mis-datos/editar-datos">
                            Editar datos
                        </a>
                    </button>
                    
                </div>
    
                <section class="seccion-datos-usuario">

                    <dl class="datos-generales-usuario-izquierda">
                        <dt>Nombre:</dt> 
                            <dd>nombre-usuario</dd>
                        <dt>Apellido:</dt> 
                            <dd>apellido-usuario</dd>
                        <dt>Fecha Nac:</dt> 
                            <dd>dd/mm/aaaa</dd>
                        <dt>Email:</dt> 
                            <dd>email-usuario</dd>
                        <dt>Teléfono:</dt> 
                            <dd>teléfono-usuario</dd>
                    </dl>
                    
                    <dl class="datos-generales-usuario-derecha">
                        <dt>Obra social:</dt> 
                            <dd>obra-social-usuario</dd>
                        <dt>Número afiliado:</dt> 
                            <dd>num-afi-usuario</dd>
                        <dt>Documento:</dt> 
                            <dd>documento-usuario</dd>
                        <dt>Tipo:</dt> 
                            <dd>tipo-doc-usuario</dd>
                        <dt>Provincia:</dt> 
                            <dd>provincia-usuario</dd>
                        <dt>Localidad:</dt> 
                            <dd>localidad-usuario</dd>
                        <dt>Calle:</dt> 
                            <dd>calle-usuario</dd>
                        <dt>N°:</dt> 
                            <dd>numero-usuario</dd>
                        <dt>Piso:</dt> 
                            <dd>piso-usuario</dd>
                        <dt>Depto:</dt> 
                            <dd>depto-usuario</dd>
                    </dl>

                </section>
                
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