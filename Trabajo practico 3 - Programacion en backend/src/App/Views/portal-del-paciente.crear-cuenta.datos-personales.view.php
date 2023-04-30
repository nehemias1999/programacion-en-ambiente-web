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

                <form action="" method="post">

                    <label for="input-nombre" required="true">
                        Nombre
                    </label>
                    <input type="text" name="input-nombre">
    
                    <label for="input-apellido" required="true">
                        Apellido
                    </label>
                    <input type="text" name="input-apellido">
       
                    <label for="input-documento select-tipo-documento">
                        Documento
                    </label>

                    <div class="div-ingreso-documento">

                        <input type="text" name="input-documento" class="input-documento" inputmode="numeric" pattern="[0-9]*">
        
                        <select name="select-tipo-documento" id="select-tipo-documento" class="select-documento">
                            <option value="" disabled selected>Tipo</option>
                            <option value="">Documento Nacional de Identidad</option>
                            <option value="">Cédula de identidad</option>
                            <option value="">CUIT/CUIL</option>
                            <option value="">Libreta Cívica</option>
                            <option value="">Pasaporte</option>
                        </select>

                    </div>
                    
                    <label for="input-fecha-nacimiento">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="input-fecha-nacimiento">
            
                    <label for="input-caracteristica input-telefono">
                        Teléfono
                    </label>
                    <div class="div-telefono">

                        <input type="text" name="input-caracteristica" class="input-caracteristica" inputmode="numeric" pattern="[0-9]*">
    
                        <input type="text" name="input-telefono" class="input-telefono" inputmode="numeric" pattern="[0-9]*">

                    </div>
    
                    <label for="select-obra-social" required="true">
                        Obra social
                    </label>
                    <select name="select-obra-social" id="" class="select-obra-social">
                        <option value="" disabled selected>---</option>
                        <option value="">Medife</option>
                        <option value="">OSDE</option>
                        <option value="">IOMA</option>
                        <option value="">OSFATUN</option>
                        <option value="">DASMI</option>
                    </select>
    
                    <label for="input-afiliado" required="true">Nº afiliado</label>
                    <input type="text" name="input-afiliado">
        
                    <progress value="30" max="90"></progress>
    
                </form>

                <div class="div-botones">

                    <button class="boton-volver">
                        <a href="../ingresar">
                            Volver
                        </a>
                    </button>
    
                    <button class="boton-siguiente">
                        <a href="domicilio">
                            Siguiente
                        </a>
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