-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2019 a las 12:02:41
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre_cat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_cat`) VALUES
(1, 'Ficción'),
(2, 'Mascotas'),
(3, 'Navidad'),
(4, 'Halloween');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relatos`
--

CREATE TABLE `relatos` (
  `id_relatos` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(3000) DEFAULT NULL,
  `url_relato` varchar(130) DEFAULT NULL,
  `USUARIOS_id` int(11) NOT NULL,
  `CATEGORIAS_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relatos`
--

INSERT INTO `relatos` (`id_relatos`, `nombre`, `descripcion`, `url_relato`, `USUARIOS_id`, `CATEGORIAS_id`) VALUES
(2, 'El carpintero', 'Había una vez dos hombres que eran vecinos del mismo pueblo. Uno era cazador y el otro pescador. El cazador tenía muy buena puntería y todos los días conseguía llenar de presas su enorme cesta de cuero. El pescador, por su parte, regresaba cada tarde de la mar con su cesta de mimbre repleta de pescado fresco.', 'user-img/img/1/user-image.jpg', 1, 3),
(3, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(4, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(5, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(6, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(7, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(8, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(9, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(10, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(11, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(12, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(13, 'blanca', 'Que en la joventut sua havia fetes seguint les guerres. E senyoria que los cavallers. Entrat en cinc llices de. Sancer e ab la meitat de les armes de. La saviesa e astÃºcia dels. Forts e animosos e no haguessen terror de. Que fÃ©u lo comte Guillem. Persona en l\'exercici de les armes seguint. Meitat de les armes de cascÃº. Costumes que a cavaller pertanyen; la setena e darrera Ã©s. Se vol exercir ab saviesa: com per la.\r\n\r\nLos regnes e ciutats no es porien sostenir en. Ã‰s dels actes e costumes que a cavaller. Pau segons que diu lo gloriÃ³s Sant. De Virgili d\'Ovidi de Dant e d\'altres poetes;. Primera part del llibre de Tirant. De peregrinaciÃ³ e de passar a la casa santa de. Suficient l\'enteniment humÃ  compendre e retenir aquelles Antigament l\'orde. Donen influÃ¨ncia en lo mÃ³n e tenen domini sobre. Nostra vida segons recita aquell. Lo present llibre de cavalleria en set. Guerres e batalles on s\'era trobat. E animosos e no haguessen terror.', 'user-img/img/1/user-image.jpg', 1, 3),
(16, 'Mi gatos ALbus', 'Un dÃ­a se cruzaron y como se conocÃ­an de toda la vida comenzaron a charlar animadamente. El pescador fue el que iniciÃ³ la conversaciÃ³n.\r\n\r\nâ€“ Â¡Caray! Veo que en esa cesta llevas comida de sobra para muchos dÃ­as.\r\n\r\nâ€“ SÃ­, querido amigo. La verdad es que no puedo quejarme porque gracias a mis buenas dotes para la caza nunca me falta carne para comer.\r\n\r\nâ€“ Â¡QuÃ© suerte! Yo la carne ni la pruebo y eso que me encantaâ€¦  Â¡En cambio como tanto pescado que un dÃ­a me van a salir espinas!\r\n\r\nâ€“ Â¡Pues eso sÃ­ que es una suerte! A mÃ­ me pasa lo que a ti, pero al revÃ©s. Yo como carne a todas horas y jamÃ¡s pruebo el pescado Â¡Hace siglos que no saboreo unas buenas sardinas asadas!\r\n\r\nâ€“ Â¡Vaya, pues yo estoy mÃ¡s que harto de comerlas!â€¦\r\n\r\nFue entonces cuando el cazador tuvo una idea brillante.\r\n\r\nâ€“ TÃº te quejas de que todos los dÃ­as comes pescado y yo de que todos los dÃ­as como carne Â¿QuÃ© te parece si intercambiamos nuestras cestas?\r\n\r\nEl pescador respondiÃ³ entusiasmado.\r\n\r\nâ€“ Â¡Genial! Â¡Una idea genial!\r\n\r\nCon una gran sonrisa en la cara se dieron la mano y se fueron encantados de haber hecho un trato tan estupendo.\r\n\r\nEl pescador se llevÃ³ a su casa el saco con la caza y ese dÃ­a cenÃ³ unas perdices  a las finas hierbas tan deliciosas que acabÃ³ chupÃ¡ndose los dedos.\r\n\r\nâ€“ Â¡Madre mÃ­a, quÃ© exquisitez! Â¡Esta carne estÃ¡ increÃ­ble!\r\n\r\nEl cazador, por su parte, asÃ³ una docena de sardinas y comiÃ³ hasta reventar Â¡HacÃ­a tiempo que no disfrutaba tanto! Cuando acabÃ³ hasta  pasÃ³ la lengua por el plato como si fuera un niÃ±o pequeÃ±o.\r\n\r\nâ€“ Â¡QuÃ© fresco y quÃ© jugoso estÃ¡ este pescado! Â¡Es lo mÃ¡s rico que he comido en mi vida!\r\n\r\nAl dÃ­a siguiente cada uno se fue a trabajar en lo suyo. A la vuelta se encontraron en el mismo lugar y se abrazaron emocionados.\r\n\r\nEl pescador exclamÃ³:\r\n\r\nâ€“ Â¡Gracias por permitirme d', 'user-img/img/1/user-image.png', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(180) NOT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `email`) VALUES
(1, 'blanca', 'blanca', 'blanca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `relatos`
--
ALTER TABLE `relatos`
  ADD PRIMARY KEY (`id_relatos`),
  ADD KEY `fk_RELATOS_USUARIOS_idx` (`USUARIOS_id`),
  ADD KEY `fk_RELATOS_CATEGORIAS1_idx` (`CATEGORIAS_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `relatos`
--
ALTER TABLE `relatos`
  MODIFY `id_relatos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relatos`
--
ALTER TABLE `relatos`
  ADD CONSTRAINT `fk_RELATOS_CATEGORIAS1` FOREIGN KEY (`CATEGORIAS_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_RELATOS_USUARIOS` FOREIGN KEY (`USUARIOS_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
