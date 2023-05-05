<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos personales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/datosPersonalesStyles.css'>
    
    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
        
            $path = "../../";

            require "parts/header.view.php";

        ?>

    </header>

    <main>

        <div class="div-principal-main">

            <h1 class="titulo-principal">
                Portal del paciente
            </h1>
        
        </div>

        <section class="seccion-ingresar-portal-main">

            <h2 class="titulo-crear-cuenta">
                Crear cuenta
            </h2>            

            <div class="div-formulario-datos-personales">

                <h3 class="titulo-datos-personales">
                    Datos personales
                </h3> 

                <?php
                
                    $mensajeCorrecto = "okey";

                    require "parts/notification-form-state.view.php";

                ?>

                <form id="formulario" action="/portal-del-paciente/crear-cuenta/datos-personales" method="POST">

                    <label for="input-nombre">
                        Nombre
                    </label>
                    <input type="text" name="input-nombre" id="input-nombre" required>
    
                    <label for="input-apellido">
                        Apellido
                    </label>
                    <input type="text" name="input-apellido" id="input-apellido" required>
       
                    <label for="input-documento select-tipo-documento">
                        Documento
                    </label>

                    <div class="div-ingreso-documento">

                        <input type="text" name="input-documento" id="input-documento" inputmode="numeric" pattern="[0-9]*" required>
        
                        <select name="select-tipo-documento" id="select-tipo-documento" required>
                            <option value="" disabled selected>Tipo</option>
                            <option value="documento-nacional-de-identidad">Documento Nacional de Identidad</option>
                            <option value="cedula-de-identidad">Cédula de identidad</option>
                            <option value="cuit-cuil">CUIT/CUIL</option>
                            <option value="libreta-civica">Libreta Cívica</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select>

                    </div>
                    
                    <label for="input-fecha-nacimiento">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="input-fecha-nacimiento" id="input-fecha-nacimiento" required>
            
                    <label for="input-caracteristica input-celular">
                        Celular
                    </label>
                    <div class="div-telefono">

                        <input type="text" name="input-caracteristica" id="input-caracteristica" class="input-caracteristica" inputmode="numeric" pattern="[0-9]*" required>
    
                        <input type="text" name="input-celular"  id="input-celular" class="input-celular" inputmode="numeric" pattern="[0-9]*" required>

                    </div>
    
                    <label for="select-obra-social">
                        Obra social
                    </label>
                    <select name="select-obra-social" id="select-obra-social" required>
                        <option value="" disabled selected>---</option>
                        <option value="medife">Medife</option>
                        <option value="osde">OSDE</option>
                        <option value="ioma">IOMA</option>
                        <option value="osfatun">OSFATUN</option>
                        <option value="dasmi">DASMI</option>
                    </select>
    
                    <label for="input-numero-afiliado">
                        Nº afiliado
                    </label>
                    <input type="text" name="input-numero-afiliado" id="input-numero-afiliado">
        
                    <progress value="30" max="90"></progress>
    
                </form>

                <div class="div-botones">

                    <button>
                        <a href="../ingresar">
                            Volver
                        </a>
                    </button>
    
                    <button form="formulario">
                        Siguiente
                    </button>

                </div>

            </div>
                
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