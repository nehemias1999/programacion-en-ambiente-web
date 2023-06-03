<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitar turno</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/portal-del-paciente.inicio.solicitar-turno.style.css'>

    <script src="/assets/js/components/ScriptAdministrator.js"></script>
    <script src="/assets/js/SolicitarTurnoFunctionalities.js"></script>

    <script str="/assets/js/TurneroMedicoFunctionalities.js"></script>

</head>
<body>

    <header>

        <?php

            $path = "../../";
        
            require "parts/header.portal.view.php";

        ?>

    </header>

    <main>

        <?php

            $path = "";

            require "parts/nav.portal.view.php";

        ?>

        <section class="seccion-formulario-turno">

            <h1>
                Solicitar turno
            </h1>

            <?php

                $mensajeCorrecto = "Se reservo el turno correctamente.";

                require "parts/notification-form-state.view.php";

            ?>

            <form action="/portal-del-paciente/inicio/solicitar-turno" method="POST">

                <div class="div-vinculo">

                    <label for="checkbox-vinculo select-vinculo">
                        Solicitar turno para un tercero
                    </label>
                    <input type="checkbox" id="checkbox-vinculo" name="checkbox-vinculo">

                    <select id="select-vinculo" name="select-vinculo">
                        <option value="" disabled selected>---</option>
                        <option value="vinculo-1">Vinculo 1</option>
                        <option value="vinculo-2">Vinculo 2</option>
                        <option value="vinculo-3">Vinculo 3</option>
                    </select>

                </div>

                <div class="div-alineacion">

                        <div>

                            <label for="select-especialidad">
                                Especialidad
                            </label>
                            <select id="select-especialidad" name="select-especialidad">
                                <option value="" disabled selected>---</option>
                                <option value="cardiologia">Cardiologia</option>
                                <option value="traumatologia">Traumatologia</option>
                                <option value="medicina-clinica">Medicina clinica</option>
                                <option value="urologia">Urologia</option>
                            </select>

                        </div>

                        <div>

                            <label for="select-profesional">
                                Profesional
                            </label>
                            <select id="select-profesional" name="select-profesional">
                                <option value="" disabled selected>---</option>
                                <option value="Pagani Rocio">Pagani, Rocio</option>
                                <option value="De Negri Gerardo">De negri, Gerardo</option>
                                <option value="Fernandez Gustavo">Fernandez, Gustavo</option>
                                <option value="Solei Sofia">Solei, Sofia</option>
                            </select>

                        </div>

                </div>

                <label for="div-diasAtiende" class="label-turnos-disponibles">
                    Seleccione una fecha
                </label>

                <div id="div-diasAtiende">
                    <ul>
                        <li></li>
                    </ul>
                </div>

                <label for="div-turnosDisponibles" class="label-turnos-disponibles-hora">
                    Seleccione un horario disponible
                </label>

                <div id="div-turnosDisponibles">
                    <ul>
                        <li></li>
                    </ul>
                </div>

                <div id="div-resultado">
                </div>

                <div class="div-drag-and-drop" draggable="true">
                    Arrastra y suelta la imagen del estudio aquí
                    <input type="hidden" name="input-image" id="input-image" class="input-image" value="">
                </div>

                <div class="div-input-files">

                </div>
                
                <div class="div-botones">

                    <input type="reset" value="Cancelar" class="boton-reset">
                    <input type="submit" value="Solicitar turno" class="boton-submit">

                </div>

            </form>

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

<!---
<section class="seccion-formulario-turno">

            <h1>
                Solicitar turno
            </h1>

            < ? php

                $mensajeCorrecto = "Se reservo el turno correctamente.";

                require "parts/notification-form-state.view.php";

            ?>

            <form action="/portal-del-paciente/inicio/solicitar-turno" method="POST">

                <div class="div-vinculo">

                    <label for="checkbox-vinculo select-vinculo">
                        Solicitar turno para un tercero
                    </label>
                    <input type="checkbox" id="checkbox-vinculo" name="checkbox-vinculo">

                    <select id="select-vinculo" name="select-vinculo">
                        <option value="" disabled selected>---</option>
                        <option value="vinculo-1">Vinculo 1</option>
                        <option value="vinculo-2">Vinculo 2</option>
                        <option value="vinculo-3">Vinculo 3</option>
                    </select>

                </div>

                <div class="div-alineacion">

                        <div>

                            <label for="select-especialidad">
                                Especialidad
                            </label>
                            <select id="select-especialidad" name="select-especialidad">
                                <option value="" disabled selected>---</option>
                                <option value="cardiologia">Cardiologia</option>
                                <option value="traumatologia">Traumatologia</option>
                                <option value="medicina-clinica">Medicina clinica</option>
                                <option value="urologia">Urologia</option>
                            </select>

                        </div>

                        <div>

                            <label for="select-profesional">
                                Profesional
                            </label>
                            <select id="select-profesional" name="select-profesional">
                                <option value="" disabled selected>---</option>
                                <option value="pagani-rocio">Pagani, Rocio</option>
                                <option value="denegri-gerardo">De negri, Gerardo</option>
                                <option value="fernandez-gustavo">Fernandez, Gustavo</option>
                                <option value="solei-sofia">Solei, Sofia</option>
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

                <div class="div-input-files">

                </div>
                
                <div class="div-botones">

                    <input type="reset" value="Cancelar" class="boton-reset">
                    <input type="submit" value="Solicitar turno" class="boton-submit">

                </div>

            </form>

        </section>

->