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
            <section class="acercade">
                <div class="acercadetexto">
                    <h2>Composición</h2>
                    <p>La composición organiza los elementos dentro del encuadre para guiar la mirada del espectador y transmitir significado.</p>
                </div>

                <img src="../img/composicionportada.png" alt="Composición" width="250px" height="auto">
            </section>

            <!-- Principios de la composición -->
            <section class="principios-composicion">
                <h2>Principios de composición</h2>

                <div class="galeria-principios">
                    <div class="principio">
                        <img src="../img/composicion1.png" alt="Regla de los tercios">

                        <div class="texto-principio">
                            <h3>Regla de los tercios</h3>
                            <p>Alinear el sujeto con las líneas guía y sus puntos de intersección, colocando el horizonte en la línea superior o inferior.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion5.png" alt="Simetría">

                        <div class="texto-principio">
                            <h3>Simetría</h3>
                            <p>Ambos lados de la imagen reflejan uno al otro para lograr un equilibrio perfecto.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion2.png" alt="Espiral de Fibonacci">

                        <div class="texto-principio">
                            <h3>Espiral de Fibonacci</h3>
                            <p>También conocida como proporción áurea. Ayuda a guiar la mirada del espectador a través de la imagen.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion8.png" alt="Asimetría">

                        <div class="texto-principio">
                            <h3>Asimetría</h3>
                            <p>Ausencia o ruptura de la simetría: una imagen cuyos dos lados no coinciden.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion3.png" alt="Triángulos">

                        <div class="texto-principio">
                            <h3>Triángulos</h3>
                            <p>Agrupar tres puntos dentro de un encuadre para transmitir estabilidad o inestabilidad.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion12.png" alt="Espacio negativo">

                        <div class="texto-principio">
                            <h3>Espacio negativo</h3>
                            <p>Define y enfatiza el sujeto principal, dirigiendo la atención hacia él.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion6.png" alt="Líneas convergentes">

                        <div class="texto-principio">
                            <h3>Líneas convergentes</h3>
                            <p>Conducen la mirada hacia el centro del encuadre, ayudando a captar la atención.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion9.png" alt="Contraste">

                        <div class="texto-principio">
                            <h3>Contraste</h3>
                            <p>Grado de diferencia entre los elementos que forman una imagen.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion4.png" alt="Líneas verticales">

                        <div class="texto-principio">
                            <h3>Líneas verticales</h3>
                            <p>Transmiten gravedad o elevación. También muestran repetición mediante patrones.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion7.png" alt="Líneas horizontales">

                        <div class="texto-principio">
                            <h3>Líneas horizontales</h3>
                            <p>Expresan estabilidad. El equilibrio proviene de su asociación con el horizonte.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion11.png" alt="Encuadre">

                        <div class="texto-principio">
                            <h3>Encuadre</h3>
                            <p>Utilizar elementos de la escena para crear un marco dentro de otro marco.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/composicion10.png" alt="Yuxtaposición">

                        <div class="texto-principio">
                            <h3>Yuxtaposición</h3>
                            <p>Dos elementos colocados cerca para compararlos o contrastarlos.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Directores destacados por su composición -->
            <section class="directores-composicion">
                <h2>Directores maestros de la composición</h2>

                <div class="galeria-directores">
                    <img class="imgrealizador" src="../img/kubrick.jpeg" alt="Director 1">
                    <img class="imgrealizador" src="../img/anderson.png" alt="Director 2">
                    <img class="imgrealizador" src="../img/kurosawa.jpeg" alt="Director 3">
                    <img class="imgrealizador" src="../img/villeneuve.jpeg" alt="Director 4">
                    <img class="imgrealizador" src="../img/tarkovsky.jpeg" alt="Director 5">
                    <img class="imgrealizador" src="../img/leone.jpeg" alt="Director 6">
                </div>
            </section>
        </main>

        <footer class="footer container-fluid py-4 text-center">
            <!-- Texto del Footer -->
            <p class="mb-0 textodefooter">©2026 Desarrollado por Martina Fekonja Casiña & Ezequiel López Mic</p>
        </footer>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    </body>
</html>