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

                <img src="../img/" alt="Composición" width="250px" height="auto">
            </section>

            <!-- Principios de la composición -->
            <section class="principios-composicion">
                <h2>Principios de composición</h2>

                <div class="galeria-principios">
                    <div class="principio">
                        <img src="../img/" alt="Regla de los tercios">

                        <div class="texto-principio">
                            <h3>Regla de los tercios</h3>
                            <p>Divide la imagen en nueve cuadrículas iguales y sus puntos de intersección funcionan como puntos de interés para ubicar los elementos importantes.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Simetría">

                        <div class="texto-principio">
                            <h3>Simetría</h3>
                            <p>Ambos lados de la imagen reflejan uno al otro, creando balance y equilibrio visual.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Espiral de Fibonacci">

                        <div class="texto-principio">
                            <h3>Espiral de Fibonacci</h3>
                            <p>También conocida como proporción áurea, organiza los elementos para dirigir la mirada del espectador hacia un punto de interés.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Asimetría">

                        <div class="texto-principio">
                            <h3>Asimetría</h3>
                            <p>Proporciona equilibrio a la imagen mediante una distribución desigual de los elementos.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Triángulos">

                        <div class="texto-principio">
                            <h3>Triángulos</h3>
                            <p>Agrupar los puntos dentro de un encuadre para formar estructuras triangulares genera estabilidad y una composición dinámica.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Espacio negativo">

                        <div class="texto-principio">
                            <h3>Espacio negativo</h3>
                            <p>El espacio negativo permite destacar al sujeto principal, dejando áreas vacías a su alrededor para atraer la atención.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Líneas convergentes">

                        <div class="texto-principio">
                            <h3>Líneas convergentes</h3>
                            <p>Las líneas convergentes conducen la mirada hacia un punto de interés, generando profundidad y ayudando a capturar la atención del espectador.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Contraste">

                        <div class="texto-principio">
                            <h3>Contraste</h3>
                            <p>El grado de diferencia entre los elementos permite generar énfasis en la imagen.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Líneas verticales">

                        <div class="texto-principio">
                            <h3>Líneas verticales</h3>
                            <p>Las líneas verticales transmiten estabilidad y fuerza.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Líneas horizontales">

                        <div class="texto-principio">
                            <h3>Líneas horizontales</h3>
                            <p>Las líneas horizontales generan sensación de calma y estabilidad.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Encuadre">

                        <div class="texto-principio">
                            <h3>Encuadre</h3>
                            <p>Utilizar elementos de la escena para crear un marco dentro del propio marco ayuda a resaltar al protagonista del sujeto.</p>
                        </div>
                    </div>

                    <div class="principio">
                        <img src="../img/" alt="Yuxtaposición">

                        <div class="texto-principio">
                            <h3>Yuxtaposición</h3>
                            <p>Consiste en colocar elementos uno al lado del otro para crear relaciones o contrastes visuales.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Directores destacados por su composición -->
            <section class="directores-composicion">
                <h2>Directores maestros de la composición</h2>

                <div class="galeria-directores">
                    <img class="imgrealizador" src="../img/" alt="Director 1">
                    <img class="imgrealizador" src="../img/" alt="Director 2">
                    <img class="imgrealizador" src="../img/" alt="Director 3">
                    <img class="imgrealizador" src="../img/" alt="Director 4">
                    <img class="imgrealizador" src="../img/" alt="Director 5">
                    <img class="imgrealizador" src="../img/" alt="Director 6">
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