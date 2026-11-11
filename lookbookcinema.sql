-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2026 a las 09:14:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lookbookcinema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `año` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `año`, `duracion`, `genero`, `director`, `sinopsis`, `imagen`) VALUES
(1, '2001: Odisea del espacio', 1968, 149, 'Ciencia Ficción', 'Stanley Kubrick', 'Un equipo de astronautas trata de seguir las señales de radio emitidas por un extraño monolito hallado en la Luna que parece ser obra de una civilización extraterrestre.', '2001aspaceodyssey - afiche.jpeg'),
(2, 'El mago de Oz', 1939, 102, 'Fantasía', 'Victor Fleming', 'Una niña estadounidense es arrastrada por un tornado en el estado de Kansas hasta una tierra de fantasía donde habitan brujas buenas y malas, un espantapájaros que habla, un león cobarde, un hombre de hojalata y otros seres extraordinarios.', 'thewizardofoz - afiche.jpeg'),
(3, 'Matrix', 1999, 136, 'Ciencia Ficción', 'Lana Wachowski & Lilly Wachowski', 'En un futuro distópico en el que la humanidad está atrapada sin saberlo dentro de una realidad simulada llamada Matrix, que las máquinas inteligentes han creado para distraer a los humanos mientras usan sus cuerpos como fuente de energía en campos de cultivo; el programador informático Thomas Anderson, bajo el alias de hacker \"Neo\", descubre la incómoda verdad y se une a una rebelión contra las máquinas junto con otras personas que han sido liberadas de Matrix.', 'thematrix - afiche.jpeg'),
(4, 'Psicosis', 1960, 109, 'Terror', 'Alfred Hitchcock', 'Narra la historia de Marion Crane, una secretaria que huye tras robar $40,000 con la intención de iniciar una nueva vida junto a su novio. Durante su huida bajo una fuerte tormenta, Marion decide pasar la noche en el solitario Bates Motel, gestionado por Norman Bates, un joven tímido y dominado por la figura de su posesiva madre, quien vive en la tétrica mansión contigua.', 'psycho - afiche.jpeg'),
(5, 'Star Wars', 1977, 121, 'Ciencia Ficción', 'George Lucas', 'Un grupo de guerrilleros —conocidos como la Alianza Rebelde— buscan destruir la estación espacial llamada La Estrella de la Muerte, creada por el opresor Imperio Galáctico.', 'starwars - afiche.jpeg'),
(6, 'Ciudadano Kane', 1941, 119, 'Drama', 'Orson Welles', 'La historia examina la vida y el legado de Charles Foster Kane, personaje basado en el magnate de la prensa, William Randolph Hearst.', 'citizenkane - afiche.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `mail`, `contraseña`, `pais`) VALUES
(1, 'Ezequiel', 'Ezequiel@gmail.com', '$2y$10$1YBzPoWZQpnkcMaPlPL1YOS0wNaS/RZeIG05I6g8Qx8bpi5kfNJpW', 'Argentina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
