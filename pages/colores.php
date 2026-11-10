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
        <title>LookBook Cinema · Colores</title>
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
                    <h2>Colores</h2>
                    <p> El color comunica emociones, simboliza ideas y construye atmósferas. Descubrí cómo se usan las paletas para contar historias inolvidables.</p>
                </div>

                <img src="../img/" alt="Rueda cromática" width="250px" height="auto">
            </section>

            <!-- Colores y su explicación -->
            <section class="colores-significados">
                <div class="galeria-colores">
                    <div class="color">
                        <div class="muestra-color rojo"></div>
                        <p> Pasión. Deseo. Peligro. Rebeldía. Obsesión. El rojo rara vez pasa desapercibido. Cuando aparece, suele indicar que algo importante está por suceder.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color naranja"></div>
                        <p>Calidez. Optimismo. Seguridad o el concepto de "hogar". A la vez se asocia a menudo con el desiertoo ambientes hostiles.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color amarillo"></div>
                        <p>Esperanza. Energía. Juventud, pero también locura, enfermedad o incomodidad (especialmente en tonos más verdosos o desaturados).</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color verde"></div>
                        <p>Naturaleza. Transformación, pero también toxicidad, envidia, corrupción, peligro sobrenatural o decadencia.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color azul"></div>
                        <p>Melancolía, misterio, introspección, nostalgia o tecnología. Frecuentemente usado en escenas de soledad o mundos futuristas.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color violeta"></div>
                        <p> Misterio, fantasía, realeza. Lujo o estados mentales alterados y surrealistas.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color rosa"></div>
                        <p>Feminidad. Romanticismo. Ternura. También utilizado para hablar de identidad y poder femenino.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color blanco"></div>
                        <p>Pureza, inocencia, vacío o esterilidad. También puede representar una limpieza abrumadora.</p>
                    </div>

                    <div class="color">
                        <div class="muestra-color negro"></div>
                        <p>Poder, desconocido, maldad, elegancia o misterio. Muchos personajes icónicos lo utilizan ya que también transmite presencia.</p>
                    </div>
                </div>
            </section>


            <!-- Películas cuya paleta destaca -->
            <section class="peliculas-colores">
                <div class="galeria-paletas">
                    <div class="pelicula-paleta">
                        <img src="../img/" alt="">

                        <div class="paleta">
                            <span style="background-color: #F2B1C5;"></span>
                            <span style="background-color: #D77C9B;"></span>
                            <span style="background-color: #D8B45B;"></span>
                            <span style="background-color: #8D6BAA;"></span>
                            <span style="background-color: #F0E5D2;"></span>
                        </div>
                    </div>

                    <div class="pelicula-paleta">
                        <img src="../img/" alt="">

                        <div class="paleta">
                            <span style="background-color: #315AA2;"></span>
                            <span style="background-color: #FFD343;"></span>
                            <span style="background-color: #D83D35;"></span>
                            <span style="background-color: #7945AC;"></span>
                            <span style="background-color: #49B4B1;"></span>
                        </div>
                    </div>

                    <div class="pelicula-paleta">
                        <img src="../img/" alt="">

                        <div class="paleta">
                            <span style="background-color: #F746A1;"></span>
                            <span style="background-color: #C2185B;"></span>
                            <span style="background-color: #04A9DF;"></span>
                            <span style="background-color: #19364E;"></span>
                            <span style="background-color: #D99A38;"></span>
                        </div>
                    </div>
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