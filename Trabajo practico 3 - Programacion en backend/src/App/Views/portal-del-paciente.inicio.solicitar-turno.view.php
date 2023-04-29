<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitar turno</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/baseCuentaStyles.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/solicitarTurnoStyles.css'>

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

            <section class="seccion-solicitar-turno">

                <h1 class="titulo-principal">
                    Solicitar turno
                </h1>

                <section class="seccion-formulario-turno">

                    <form action="" method="">

                        <div class="div-vinculo">

                            <label for="checkbox-vinculo" class="label-vinculo">Solicitar turno para un tercero</label>
                            <input type="checkbox" name="checkbox-vinculo" class="checkbox-vinculo">
        
                            <select name="select-vinculo" class="select-vinculo">
                                <option value="" disabled selected>---</option>
                                <option value="">Vinculo 1</option>
                                <option value="">Vinculo 2</option>
                                <option value="">Vinculo 3</option>
                            </select>

                        </div>
    
                       <div class="div-alineacion">

                            <div class="div-especialidad">

                                <label for="select-especialidad">Especialidad</label>
                                <select name="select-especialidad" id="">
                                    <option value="" disabled selected>---</option>
                                    <option value="">Cardiologia</option>
                                    <option value="">Traumatologia</option>
                                    <option value="">Medicina clinica</option>
                                    <option value="">Urologia</option>
                                </select>

                            </div>

                            <div class="div-profesional">
            
                                <label for="select-profesional">Profesional</label>
                                <select name="select-profesional" id="">
                                    <option value="" disabled selected>---</option>
                                    <option value="">Pagani, Rocio</option>
                                    <option value="">De negri, Gerardo</option>
                                    <option value="">Fernandez, Gustavo</option>
                                    <option value="">Solei, Sofia</option>
                                </select>

                            </div>

                       </div>
    
                        <label for="div-turnos-disponibles" class="label-turnos-disponibles">
                            Seleccione una fecha y horario
                        </label>
                        <div class="div-turnos-disponibles">
                            <div class="div-scrollbar">
                                <div class="div-contenido">
                                    <ul class="lista-turnos-disponibles">

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                        <li class="elemento-turno-disponible">
                                            <article class="articulo-turno-disponible">

                                                <p>
                                                    dd/mm/aaaa
                                                </p>

                                                <p>
                                                    hh:mm
                                                </p>

                                                <button class="boton-seleccionar">
                                                    Seleccionar
                                                </button>

                                            </article>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
    
                       <div class="div-botones">

                            <input type="reset" value="Cancelar" class="boton-reset">
                            <input type="submit" value="Solicitar turno" class="boton-submit">

                       </div>
    
                    </form>

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