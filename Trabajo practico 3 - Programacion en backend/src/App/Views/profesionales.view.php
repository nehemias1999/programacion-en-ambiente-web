<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profesionales</title>

    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/generic.style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='/assets/css/profesionales.style.css'>
    
    <script src="/assets/js/components/ScriptAdministrator.js"></script>
    <script src="/assets/js/ProfesionalesFunctionalities.js"></script>

</head>
<body>

    <header>

        <?php
            require "parts/header.view.php";
        ?>

    </header>

    <main>

        <div class="div-principal-main">

            <h1>
                Profesionales
            </h1>
          
            <div class="div-principal-main">  
                <a href="/portal-del-paciente/ingresar" class="boton-solicitar-turno">
                    <h2>
                      Solicitar turno
                    </h2>
                </a>
            </div>
           
        </div>

        <section class="seccion-profesionales-main">

            <section class="seccion-filtro-busqueda">

                <input type="search" name="input-buscador-profesionales" id="input-search">

                <select id="filterSelect">
                    <option value="" disabled selected>Filtrar</option>
                    <option value="nombre">Nombre</option>
                    <option value="especialidad">Especialidad</option>
                </select>

                <input type="checkbox" id="input-checkbox" checked>
                <label for="input-checkbox">Ordenar ascendente</label>

                <label id="resultsPerPageInput" for="input-cantidad-resultados">
                    Resultados por página:
                </label>
                <input type="number" name="input-cantidad-resultados" id="input-cantidad-resultados" min="1" max="30" value="10">

                <button id="searchButton">
                    Buscar
                </button>
        
            </section>
    
            <section class="seccion-tabla-profesionales">

                <div class="div-scrollbar">

                    <table>

                        <thead>
                            
                        </thead>

                        <tbody>
                            
                        </tbody>

                    </table>

                </div>

            </section>

        </section>

    </main>

    <footer>  
        
        <?php
            require "parts/footer.view.php";
        ?>
        
    </footer>  

</body>
</html>