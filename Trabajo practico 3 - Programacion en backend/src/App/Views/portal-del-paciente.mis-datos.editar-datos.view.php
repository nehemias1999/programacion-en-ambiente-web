<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mis datos - editar </title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/editarStyles.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
        
            $path = "../";

            require "parts/header.portal.view.php";

        ?>

    </header>

    <main class="main">

        <section class="seccion-principal">

            <?php

                $path = "../../";

                require "parts/nav.portal.view.php";
                
            ?>

            <section class="seccion-editar-campos">
            
                <h1 class="titulo-principal">
                    Editar campos
                </h1>
    
                <form action="ProcesorCambioDatos.js" method="post">
                     
                    <label for="select-provincia">Provincia</label>
                    <select name="select-provincia" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Buenos Aires</option>
                        <option value="">Cordoba</option>
                        <option value="">Santa Fe</option>
                    </select>
    
                    <label for="select-localidad">Localidad</label>
                    <select name="select-localidad" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Ciudad Autonoma de Buenos Aires</option>
                        <option value="">Lujan</option>
                        <option value="">General Rodriguez</option>
                        <option value="">Merlo</option>
                        <option value="">Pilar</option>
                    </select>
    
                    <label for="input-calle">Calle:</label>
                    <input type="text" name="input-calle">
                
                    <div class="div-domicilio">

                        <div class="div-dato">
                            <label for="input-num">N°:</label>
                            <input type="text" name="input-documento" class="input-documento" inputmode="numeric" pattern="[0-9]*">
                        </div>
                    
                        <div class="div-dato">
                            <label for="input-depto">Depto:</label>
                            <input type="text" name="input-depto">
                        </div>
                        
                        <div class="div-dato">
                            <label for="input-piso">Piso:</label>
                            <input type="text" name="input-documento" class="input-documento" inputmode="numeric" pattern="[0-9]*">
                        </div>

                    </div>
                    
                    <label for="input-email">Email:</label>
                    <input type="email" name="input-email">
    
                    <label for="input-tel">Tel:</label>
                    <input type="tel" name="input-tel">
                   
                    <div class="div-botones">

                        <input type="reset" value="Cancelar" class="boton-reset">
    
                        <input type="submit" value="Guardar cambios" class="boton-submit">

                    </div>
                    
                </form>
                
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