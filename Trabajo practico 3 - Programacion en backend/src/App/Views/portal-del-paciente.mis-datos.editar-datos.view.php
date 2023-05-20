<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mis datos - editar datos</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.mis-datos.editar-datos.style.css'>

    <script src='main.js'></script>

</head>
<body>

    <header>

        <?php
        
            $path = "../../../";

            require "parts/header.portal.view.php";

        ?>

    </header>

    <main class="main">

        <section class="section-principal">

            <?php

                $path = "../";

                require "parts/nav.portal.view.php";
                
            ?>

            <section class="section-editar-campos">
            
                <h1 class="titulo-principal">
                    Editar campos
                </h1>

                <?php
                
                    $mensajeCorrecto = "Se guardaron los cambios con exito.";

                    require "parts/notification-form-state.view.php";

                ?>
    
                <form action="/portal-del-paciente/inicio/mis-datos/editar-datos" method="POST">
                     
                    <label for="select-provincia">Provincia</label>
                    <select name="select-provincia" id="select-provincia">
                        <option value="" disabled selected>---</option>
                        <option value="buenos-aires">Buenos Aires</option>
                        <option value="cordoba">Cordoba</option>
                        <option value="santa-fe">Santa Fe</option>
                    </select>
    
                    <label for="select-localidad">Localidad</label>
                    <select name="select-localidad" id="select-localidad">
                        <option value="" disabled selected>---</option>
                        <option value="ciudad-autonoma-de-buenos-aires">Ciudad Autonoma de Buenos Aires</option>
                        <option value="lujan">Lujan</option>
                        <option value="general-rodriguez">General Rodriguez</option>
                        <option value="merlo">Merlo</option>
                        <option value="pilar">Pilar</option>
                    </select>
    
                    <label for="input-calle">Calle:</label>
                    <input type="text" id="input-calle" name="input-calle">
                
                    <div class="div-domicilio">

                        <div class="div-dato">
                            <label for="input-numero">Numero:</label>
                            <input type="text" id="input-numero" name="input-numero" inputmode="numeric" pattern="[0-9]*">
                        </div>
                    
                        <div class="div-dato">
                            <label for="input-depto">Departamento:</label>
                            <input type="text" id="input-departamento" name="input-departamento">
                        </div>
                        
                        <div class="div-dato">
                            <label for="input-piso">Piso:</label>
                            <input type="text" id="input-piso" name="input-piso" inputmode="numeric" pattern="[0-9]*">
                        </div>

                    </div>
                    
                    <label for="input-email">Email:</label>
                    <input type="email" id="input-email" name="input-email">
    
                    <label for="input-celular">Celular:</label>
                    <input type="tel" id="input-celular" name="input-celular">
                   
                    <div class="div-botones">

                        <input type="reset" value="Cancelar">
    
                        <input type="submit" value="Guardar cambios">

                    </div>
                    
                </form>
                
            </section>

        </section>
  
    </main>

    <footer>  
        
        <?php
        
            $path = "../../../";

            require "parts/footer.view.php";
        
        ?>
        
    </footer>

</body>
</html>