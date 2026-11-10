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
        <title>LookBook Cinema · Planos</title>
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
                    <h2>Planos</h2>
                    <p>Los planos definen la distancia entre la cámara y el sujeto, ayudando a construir la emoción, la tensión y la forma de contar una escena.</p>
                </div>

                <img src="../img/planosportada.png" alt="Planos" width="250px" height="auto">
            </section>

            <!-- Tipos de planos -->
            <section class="tipos-planos">
                <h2>Tipos de planos</h2>

                <div class="galeria-planos">
                    <div class="plano">
                        <img src="../img/plano1.png" alt="Plano detalle">
                        <h3>Plano detalle</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano2.png" alt="Primer plano">
                        <h3>Primer plano</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano9.jpg" alt="Plano medio">
                        <h3>Plano medio</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano3.png" alt="Plano entero">
                        <h3>Plano entero</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano4.jpeg" alt="Plano general">
                        <h3>Plano general</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano5.jpeg" alt="Plano general extremo">
                        <h3>Plano general extremo</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano6.jpeg" alt="Plano americano">
                        <h3>Plano americano</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano7.jpeg" alt="Plano de establecimiento">
                        <h3>Plano de establecimiento</h3>
                    </div>

                    <div class="plano">
                        <img src="../img/plano8.jpeg" alt="Plano escorzo">
                        <h3>Plano escorzo</h3>
                    </div>
                </div>
            </section>

            <!-- Tipos de ángulos -->
            <section class="tipos-angulos">
                <h2>Ángulos</h2>

                <div class="galeria-angulos">
                    <div class="angulo">
                        <img src="../img/angulo1.png" alt="Ángulo normal">
                        <h3>Ángulo normal</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo6.png" alt="Ras de suelo">
                        <h3>Ras de suelo</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo2.png" alt="Contrapicado">
                        <h3>Contrapicado</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo7.png" alt="Altura del hombro">
                        <h3>Altura del hombro</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo3.jpeg" alt="Plano picado">
                        <h3>Plano picado</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo8.jpeg" alt="Plano inclinado">
                        <h3>Plano inclinado</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo4.png" alt="Al nivel de cadera">
                        <h3>Al nivel de cadera</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo9.jpeg" alt="Cenital">
                        <h3>Cenital</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo5.png" alt="Al nivel de rodilla">
                        <h3>Al nivel de rodilla</h3>
                    </div>

                    <div class="angulo">
                        <img src="../img/angulo10.jpeg" alt="Plano aéreo">
                        <h3>Plano aéreo</h3>
                    </div>
                </div>
            </section>

            <!-- Películas destacadas por sus planos -->
            <section class="peliculas-planos">
                <h2>Películas que usan los planos de forma excepcional</h2>

                <div class="galeria-peliculas">
                    <img class="imgpeliculas" src="../img/bladerunner2049 - afiche.jpeg" alt="Blade Runner 2049">
                    <img class="imgpeliculas" src="../img/lawrenceofarabia - afiche.jpeg" alt="Lawrence of Arabia">
                    <img class="imgpeliculas" src="../img/madmaxfuryroad - afiche.jpeg" alt="Mad Max Fury Road">
                    <img class="imgpeliculas" src="../img/theshining - afiche.jpeg" alt="The Shining">
                    <img class="imgpeliculas" src="../img/thegoodthebadandtheugly - afiche.jpeg" alt="The Good The Bad and the Ugly">
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