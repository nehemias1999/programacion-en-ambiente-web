<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vinculaciones</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/vinculacionesStyles.css'>

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

            <section class="seccion-vinculos-cargados">

                <h1 class="titulo-principal">
                    Vínculos
                </h1>
    
               <div class="div-vinculos-cargados">

                    <div class="div-scrollbar">

                        <div class="div-contenido">

                            <ul class="lista-vinculos-cargados">
                                <li class="elemento-vinculo">
                                    <article class="articulo-vinculo">
            
                                        <div class="div-encabezado-vinculo">

                                            <div class="div-imagen-vinculo">
                                                <img src="" alt="imagen-vinculo" class="imagen-vinculo">
                                            </div>

                                            <h3 class="nombre-apellido-vinculo">
                                                Apellido, Nombre vinculo
                                            </h2>
            
                                        </div>
            
                                        <div class="div-datos-vinculo">

                                            <dl class="datos-usuario">
            
                                                <dt>Vinculo:</dt> 
                                                    <dd>tipo vinculo</dd>
                                                <dt>Obra social:</dt> 
                                                    <dd>obra social vinculo</dd>
                                                <dt>Numero afiliado:</dt> 
                                                    <dd>numero afiliado vinculo</dd>
                                                <dt>Edad:</dt> 
                                                    <dd>edad vinculo</dd>
                                                <dt>Provincia:</dt> 
                                                    <dd>provincia vinculo</dd>
                                                <dt>Localidad:</dt> 
                                                    <dd>localidad vinculo</dd>
                                                <dt>Calle:</dt> 
                                                    <dd>calle vinculo</dd>
                                                <dt>Numero:</dt> 
                                                    <dd>numero vinculo</dd>
                                                <dt>Piso:</dt> 
                                                    <dd>piso vinculo</dd>
                                                <dt>Depto:</dt> 
                                                    <dd>depto vinculo</dd>
                                                    
                                            </dl>

                                        </div>
            
                                        <div class="div-seccion-botones-vinculo">
                                            <button class="boton-eliminar">
                                                Eliminar
                                            </button>
                                       </div>
            
                                    </article>
                                </li>
                            </ul>
            
                        </div>

                    </div>

               </div>
    
            </section>

            <section class="seccion-cargar-vinculos">
                
                <h2 class="titulo-agregar-vinculo">
                    Agregar vinculo
                </h2>

                <?php
                
                    $mensajeCorrecto = "Se cargo un nuevo vinculo con exito.";

                    require "parts/notification-form-state.view.php";

                ?>

                <form action="/portal-del-paciente/inicio/vinculaciones" method="POST">

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

                    <label for="input-afiliado">
                        Nº afiliado
                    </label>
                    <input type="text" name="input-afiliado" id="input-afiliado" required>

                    <label for="input-vinculo">
                        Vinculo
                    </label>
                    <select name="select-vinculo" id="select-vinculo" required>
                        <option value="" disabled selected>---</option>
                        <option value="hijo-menor-de-18-anos">Hijo/a menor de 18 anos</option>
                        <option value="hijo-mayor-de-18-anos">Hijo/a mayor de 18 anos</option>
                        <option value="conyuge">Conyuge</option>
                    </select>
                
                    <label for="input-nombre">
                        Nombre
                    </label>
                    <input type="text" name="input-nombre" id="input-nombre" required>

                    <label for="input-apellido">
                        Apellido
                    </label>
                    <input type="text" name="input-apellido" id="input-apellido" required>            

                    <label for="input-fecha-nacimiento">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="input-fecha-nacimiento" id="input-fecha-nacimiento" required>

                    <label for="select-provincia">
                        Provincia
                    </label>
                    <select name="select-provincia" id="select-provincia" required>
                        <option value="" disabled selected>---</option>
                        <option value="buenos-aires">Buenos Aires</option>
                        <option value="cordoba">Cordoba</option>
                        <option value="santa-fe">Santa Fe</option>
                    </select>
                
                    <label for="select-localidad">
                        Localidad
                    </label>
                    <select name="select-localidad" id="select-localidad" required>
                        <option value="" disabled selected>---</option>
                        <option value="ciudad-autonoma-de-buenos-aires">Ciudad Autonoma de Buenos Aires</option>
                        <option value="lujan">Lujan</option>
                        <option value="general-rodriguez">General Rodriguez</option>
                        <option value="merlo">Merlo</option>
                        <option value="pilar">Pilar</option>
                    </select>
                               
                    <label for="input-calle">
                        Calle
                    </label>
                    <input type="text" name="input-calle" id="input-calle" required>

                    <div class="div-domicilio">

                        <div class="div-dato">

                            <label for="input-numero">
                                Numero
                            </label>
                            <input type="text" name="input-numero" id="input-numero" inputmode="numeric" pattern="[0-9]*" required>                            

                        </div>

                        <div class="div-dato">

                            <label for="input-depto">
                                Departamento
                            </label>
                            <input type="text" name="input-depto" id="input-depto" required>

                        </div>

                        <div class="div-dato">

                            <label for="input-piso">
                                Piso
                            </label>
                            <input type="number" name="input-piso" id="input-piso" inputmode="numeric" pattern="[0-9]*" required>

                        </div>

                    </div>

                    <div class="div-botones">

                        <input type="reset" value="Cancelar">
                    
                        <input type="submit" value="Agregar vinculo">

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