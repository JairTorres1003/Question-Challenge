-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2022 a las 11:05:30
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `challenge_concurso de preguntas_y_respuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas_creadas`
--

CREATE TABLE `partidas_creadas` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `puntos_l1` int(11) NOT NULL,
  `puntos_l2` int(11) NOT NULL,
  `puntos_l3` int(11) NOT NULL,
  `puntos_l4` int(11) NOT NULL,
  `puntos_l5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partidas_creadas`
--

INSERT INTO `partidas_creadas` (`Id`, `nombre`, `puntos_l1`, `puntos_l2`, `puntos_l3`, `puntos_l4`, `puntos_l5`) VALUES
(1, 'Default', 50, 150, 300, 500, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_y_respuestas`
--

CREATE TABLE `preguntas_y_respuestas` (
  `Id` int(11) NOT NULL,
  `id_partida` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `preguntas_por_nivel` int(11) NOT NULL,
  `pregunta` varchar(300) NOT NULL,
  `respuesta_1` varchar(300) NOT NULL,
  `respuesta_2` varchar(300) NOT NULL,
  `respuesta_3` varchar(300) NOT NULL,
  `respuesta_4` varchar(300) NOT NULL,
  `respuesta_correcta` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas_y_respuestas`
--

INSERT INTO `preguntas_y_respuestas` (`Id`, `id_partida`, `nivel`, `preguntas_por_nivel`, `pregunta`, `respuesta_1`, `respuesta_2`, `respuesta_3`, `respuesta_4`, `respuesta_correcta`) VALUES
(1, 1, 1, 1, '¿Cuáles son los colores primarios tradicionales o RYB?', 'Rojo, Verde, Azul', 'Blanco, Negro, Amarillo', 'Amarillo, Azul, Rojo', 'Magenta, Verde, Amarillo', 'Amarillo, Azul, Rojo'),
(2, 1, 1, 2, '¿Cómo se llaman los animales que carecen de esqueleto?', 'Vertebrados', 'Ovíparos', 'Invertebrados', 'Vivíparos', 'Invertebrados'),
(3, 1, 1, 3, '¿Cómo se llaman los animales que solo se alimentan de vegetales y plantas?', 'Carnívoros', 'Insectívoros', 'Omnívoros', 'Herbívoros', 'Herbívoros'),
(4, 1, 1, 4, '¿Cómo se llaman los animales que tienen un esqueleto articulado?', 'Vertebrados', 'Ovíparos', 'Invertebrados', 'Vivíparos', 'Vertebrados'),
(5, 1, 1, 5, '¿Qué aparato utiliza nuestro cuerpo para digerir alimentos?', 'El aparato respiratorio', 'El aparato digestivo', 'El aparato circulatorio', 'El aparato vestibular', 'El aparato digestivo'),
(6, 1, 2, 1, '¿Cómo se llama la Reina del Reino Unido?', 'Isabel II', 'Matilde II', 'Sofía II', 'Beatriz II', 'Isabel II'),
(7, 1, 2, 2, '¿Qué rama de la Biología estudia los animales?', 'La zoología', 'La cartografía', 'La botánica', 'La cosmología', 'La zoología'),
(8, 1, 2, 3, '¿Cuál es el lugar más frío de la tierra?', 'Groenlandia', 'Mongolia', 'Estonia', 'Antártida', 'Antártida'),
(9, 1, 2, 4, '¿Cuál es quinto planeta en el sistema solar?', 'Marte', 'Júpiter', 'Saturno', 'Urano', 'Júpiter'),
(10, 1, 2, 5, '¿Cuál es la capital de Suecia?', 'Bruselas', 'Estocolmo', 'Pekín', 'Bogotá', 'Estocolmo'),
(11, 1, 3, 1, '¿Cuál es la moneda Marruecos?', 'Uguiya (MRO)', 'Metical (MZN)', 'Ariari (MGA)', 'Dírham (MAD)', 'Dírham (MAD)'),
(12, 1, 3, 2, '¿De qué se alimentan los koalas?', 'Hojas de eucalipto', 'bayas de sauco', 'Hojas de romero', 'Bayas de goji', 'Hojas de eucalipto'),
(13, 1, 3, 3, '¿Cómo se llama la capital de Mongolia?', 'Kuala Lumpur', 'Podgorica', 'Ulán Bator', 'Mónaco', 'Ulán Bator'),
(14, 1, 3, 4, '¿En qué año comenzó la II Guerra Mundial?', '1938', '1939', '1940', '1941', '1939'),
(15, 1, 3, 5, '¿Cuándo empezó la Primera Guerra Mundial?', '1911', '1912', '1913', '1914', '1914'),
(16, 1, 4, 1, 'Es considerado el lago más viejo del planeta y constituye una de las mayores reservas de agua dulce del mundo', 'El lago Vostok', 'El lago Tanganica', 'El lago Malawi', 'El lago Baikal', 'El lago Baikal'),
(17, 1, 4, 2, '¿Quien fue el conquistador de peru?', 'Cristóbal Colón', 'Juan Díaz de Solís', 'Francisco Pizarro', 'Diego de Almagro', 'Francisco Pizarro'),
(18, 1, 4, 3, '¿Cuál es el metal precioso más caro del mundo?', 'El oro', 'El rodio', 'El iridio', 'El paladio', 'El rodio'),
(19, 1, 4, 4, '¿Cuál es la pelicula mas famosa de Disney?', 'Pinocho', 'Dumbo', 'Los Tres Caballeros', 'Blancanieves y los siete enanitos', 'Blancanieves y los siete enanitos'),
(20, 1, 4, 5, '¿Cuál es la capital de Suecia?', 'Virginia Woolf', 'Victor Hugo', 'Homero', 'Ernest Hemingway', 'Homero'),
(21, 1, 5, 1, '¿En qué lugar del cuerpo se produce la insulina?', 'En el hígado', 'En el corazón', 'En el páncreas', 'En el riñón', 'En el páncreas'),
(22, 1, 5, 2, 'Cuando una organización debe efectuar un cambio organizacional planeado que permita su desarrollo, considera aspectos de carácter', 'Interno porque corresponde a un cambio que planea la organización', 'Interno y externo, porque en el cambio planeado confluyen los dos tipos de factores', 'Externo, porque el medio externo siempre es el que genera el cambio organizacional', 'Interno o externo, porque cualquiera de los dos es útil para determinar los cambios', 'Interno y externo, porque en el cambio planeado confluyen los dos tipos de factores'),
(23, 1, 5, 3, '¿Cuántos satélites tenemos orbitando alrededor de la tierra?', '4.921', '2.642', '1.419', '3.822', '4.921'),
(24, 1, 5, 4, '¿En qué país se encuentra la Universidad de Standford?', 'Canadá', 'Estados Unidos', 'Alemania', 'Francia', 'Estados Unidos'),
(25, 1, 5, 5, '¿Quién es el primer humano que pisó la luna?', 'Neil Alden Armstrong', 'Edwin Eugene Aldrin Junior (Buzz Aldrin)', 'Michael Collins', 'Ninguna de las anteriores', 'Neil Alden Armstrong');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_de_clasificacion`
--

CREATE TABLE `tabla_de_clasificacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `partida` varchar(100) NOT NULL,
  `puntaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla_de_clasificacion`
--

INSERT INTO `tabla_de_clasificacion` (`id`, `nombre`, `partida`, `puntaje`) VALUES
(1, 'Jair Torres', 'Default', '2000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partidas_creadas`
--
ALTER TABLE `partidas_creadas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `preguntas_y_respuestas`
--
ALTER TABLE `preguntas_y_respuestas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tabla_de_clasificacion`
--
ALTER TABLE `tabla_de_clasificacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partidas_creadas`
--
ALTER TABLE `partidas_creadas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preguntas_y_respuestas`
--
ALTER TABLE `preguntas_y_respuestas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tabla_de_clasificacion`
--
ALTER TABLE `tabla_de_clasificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
