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
                    Vinculos
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

                <form action="procesarVinculo.js" method="post">

                    <label for="select-obra-social">
                        Obra social
                    </label>
                    <select name="select-obra-social" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Medife</option>
                        <option value="">OSDE</option>
                        <option value="">IOMA</option>
                        <option value="">OSFATUN</option>
                        <option value="">DASMI</option>
                    </select>

                    <label for="input-afiliado">
                        Nº afiliado
                    </label>
                    <input type="text" name="input-afiliado">

                    <label for="input-vinculo">
                        Vinculo
                    </label>
                    <select name="select-vinculo" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Hijo/a menor de 18 anos</option>
                        <option value="">Hijo/a mayor de 18 anos</option>
                        <option value="">Conyuge</option>
                    </select>
                
                    <label for="input-nombre">
                        Nombre
                    </label>
                    <input type="text" name="input-nombre">

                    <label for="input-apellido">
                        Apellido
                    </label>
                    <input type="text" name="input-apellido">            

                    <label for="input-fecha-nacimiento">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="input-fecha-nacimiento">

                    <label for="select-provincia">
                        Provincia
                    </label>
                    <select name="select-provincia" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Buenos Aires</option>
                        <option value="">Cordoba</option>
                        <option value="">Santa Fe</option>
                    </select>
                
                    <label for="select-localidad">
                        Localidad
                    </label>
                    <select name="select-localidad" id="">
                        <option value="" disabled selected>---</option>
                        <option value="">Ciudad Autonoma de Buenos Aires</option>
                        <option value="">Lujan</option>
                        <option value="">General Rodriguez</option>
                        <option value="">Merlo</option>
                        <option value="">Pilar</option>
                    </select>
                               
                    <label for="input-calle">
                        Calle
                    </label>
                    <input type="text" name="input-calle">

                    <div class="div-domicilio">

                        <div class="div-dato">

                            <label for="input-numero">
                                Nro
                            </label>
                            <input type="text" name="input-numero" inputmode="numeric" pattern="[0-9]*">                            

                        </div>

                        <div class="div-dato">

                            <label for="input-depto">
                                Depto
                            </label>
                            <input type="text" name="input-depto">

                        </div>

                        <div class="div-dato">

                            <label for="input-piso">
                                Piso
                            </label>
                            <input type="number" name="input-piso">

                        </div>

                    </div>

                    <div class="div-botones">

                        <input type="reset" value="Cancelar" class="boton-reset">
                    
                        <input type="submit" value="Agregar vinculo" class="boton-submit">

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