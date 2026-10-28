<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
        <link rel="icon" href="../img/icono.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="../css/stylesheet.css">
        <title>LookBook Cinema · Composición</title>
    </head>

    <body>
        <header class="container-fluid pt-6 pb-4 px-3 px-md-5 header">
            <!-- Contenedor de Logo y contenedor de Barra de Búsqueda y Botón de Inicio de Sesión -->
            <div class="row align-items-center justify-content-center gy-3 mb-3">
                <!-- Logo -->
                <div class="col-3 col-md-auto logo">
                    <a href="../index.php">
                        <img src="../img/logo.png" alt="Logo" class="img-fluid imglogo">
                    </a>
                </div>
                
                <!-- Contenedor de Barra de Búsqueda y Botón de Inicio de Sesión -->
                <div class="col-9 col-md-8 col-lg-7 d-flex align-items-center justify-content-end gap-2 gap-md-3">
                    <!-- Barra de Búsqueda -->
                    <form action="../pages/recibebusq.php" method="GET" class="input-group barradebusq1">
                        <div class="input-group barradebusq1">
                            <input type="search" name="busqueda" class="form-control" placeholder="Buscar">
                            <button class="btnlupa" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>

                    <!-- Botón de Inicio de Sesión -->
                    <div class="iconodeusuario text-end">
                        <a href="../pages/form.php">
                            <img src="../img/usuario1.png" alt="Usuario" class="img-usuario">
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Barra de Navegación -->
            <nav class="mt-5 mb-4">
                <!-- Botones -->
                <div class="barradebotones d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-5">
                    <a href="../pages/composicion.php" class="btn btn-sm px-3 py-2">Composición</a>
                    <a href="../pages/colores.php" class="btn btn-sm px-3 py-2">Colores</a>
                    <a href="../pages/planos.php" class="btn btn-sm px-3 py-2">Planos</a>
                    <a href="../pages/iluminacion.php" class="btn btn-sm px-3 py-2">Iluminación</a>
                    <a href="../pages/vestuario.php" class="btn btn-sm px-3 py-2">Vestuario</a>
                </div>
            </nav>      
        </header>

        <main class="main">
            <!-- Bajada -->
            <section>
                <div>

                </div>
            </section>

            <!-- Principios de la composición -->
            <section>
                <div>

                </div>
            </section>

            <!-- Directores destacados por su composición -->
            <section>
                <div>
                    
                </div>
            </section>
        </main>

        <footer class="footer container-fluid py-4 text-center">
            <p class="mb-0 textodefooter">©2026 Desarrollado por Martina Fekonja Casiña & Ezequiel López Mic</p>
        </footer>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html>