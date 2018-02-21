-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-02-2018 a las 23:13:53
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `condominio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominios`
--

CREATE TABLE `condominios` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `direccion` varchar(1000) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `piscina` varchar(100) DEFAULT NULL,
  `estacionamiento` int(1) DEFAULT NULL,
  `gym` int(1) DEFAULT NULL,
  `cancha` int(1) DEFAULT NULL,
  `parque` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condominios`
--

INSERT INTO `condominios` (`id`, `usuarios_id`, `nombre`, `direccion`, `lat`, `lng`, `piscina`, `estacionamiento`, `gym`, `cancha`, `parque`) VALUES
(8, 19, 'LAS LOMAS', 'Alto Barinas, Barinas 5201, Barinas, Venezuela', '8.59207', '-70.22508199999999', '1', 0, 1, 0, 1),
(9, 20, 'DOMINGA ORITZ', 'Av Principal Dominga Ortiz de Paez, Barinas 5201, Barinas, Venezuela', '8.597425601796806', '-70.18722614115904', '1', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominios_imagenes`
--

CREATE TABLE `condominios_imagenes` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `imagen_original` varchar(300) NOT NULL,
  `imagen_grande` varchar(300) NOT NULL,
  `imagen_medio` varchar(300) NOT NULL,
  `imagen_miniatura` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condominios_imagenes`
--

INSERT INTO `condominios_imagenes` (`id`, `condominios_id`, `imagen_original`, `imagen_grande`, `imagen_medio`, `imagen_miniatura`) VALUES
(8, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453822/fm7fmjheemshrtl1e8yt.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453827/zbbjuwyduoozfypfhmob.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453829/o1c9j9sfz4ipb6zunplq.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453830/uisocdkobiza7kqviyqi.jpg'),
(9, 7, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454862/pstlu7ivk93efdzrjrmm.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454863/cm1zgxo2vugdg5szsuwa.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454864/emjmptkbjcre4zkdvnzj.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454865/vdnfffvnubtb2rnehszx.jpg'),
(10, 8, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461438/gkcb8no7nl6evvjh2dhf.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461441/a0uwu0rdedcqvyczjkrq.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461442/oogsmz0xgxdtnum1zyoj.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461443/jo2dzgqwxev5spbqziqq.jpg'),
(11, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521055/k0eytwuht4uj0wm3smhy.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521056/bv2ukrx5cjo61p0eeigz.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521058/mocfmx2gszgptphieitx.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521060/wuxkwdnaj2abrqtgr4mv.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `id_con` int(11) NOT NULL,
  `consultorio` varchar(50) COLLATE utf8_bin NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio`
--

CREATE TABLE `directorio` (
  `id` int(11) NOT NULL,
  `tratamiento` varchar(4) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `especialidad2` varchar(255) NOT NULL,
  `piso` varchar(2) NOT NULL,
  `consultorio` varchar(10) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_con` int(11) NOT NULL,
  `fecha` varchar(100) COLLATE utf8_bin NOT NULL,
  `titulo` varchar(200) COLLATE utf8_bin NOT NULL,
  `documento` varchar(300) COLLATE utf8_bin NOT NULL,
  `ver` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20170211144301, 'Usuarios', '2018-01-31 17:05:52', '2018-01-31 17:05:53', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id` int(11) NOT NULL,
  `id_con` int(11) NOT NULL,
  `num_transferecia` int(100) NOT NULL,
  `mes` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(25) COLLATE utf8_bin NOT NULL,
  `banco` varchar(100) COLLATE utf8_bin NOT NULL,
  `num_recibo` int(50) NOT NULL,
  `montopag` double NOT NULL,
  `ver` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `id_con` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes`
--

CREATE TABLE `residentes` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `num_casa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes`
--

INSERT INTO `residentes` (`id`, `usuarios_id`, `nombre`, `cedula`, `fecha_nacimiento`, `num_casa`) VALUES
(1, 21, 'carlos silva', 19881315, '30/05/1989', '03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes_imagenes`
--

CREATE TABLE `residentes_imagenes` (
  `id` int(11) NOT NULL,
  `residentes_id` int(11) NOT NULL,
  `imagen_original` varchar(300) NOT NULL,
  `imagen_grande` varchar(300) NOT NULL,
  `imagen_medio` varchar(300) NOT NULL,
  `imagen_miniatura` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes_imagenes`
--

INSERT INTO `residentes_imagenes` (`id`, `residentes_id`, `imagen_original`, `imagen_grande`, `imagen_medio`, `imagen_miniatura`) VALUES
(8, 1, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453822/fm7fmjheemshrtl1e8yt.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453827/zbbjuwyduoozfypfhmob.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453829/o1c9j9sfz4ipb6zunplq.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517453830/uisocdkobiza7kqviyqi.jpg'),
(9, 7, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454862/pstlu7ivk93efdzrjrmm.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454863/cm1zgxo2vugdg5szsuwa.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454864/emjmptkbjcre4zkdvnzj.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517454865/vdnfffvnubtb2rnehszx.jpg'),
(10, 8, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461438/gkcb8no7nl6evvjh2dhf.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461441/a0uwu0rdedcqvyczjkrq.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461442/oogsmz0xgxdtnum1zyoj.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517461443/jo2dzgqwxev5spbqziqq.jpg'),
(11, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521055/k0eytwuht4uj0wm3smhy.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521056/bv2ukrx5cjo61p0eeigz.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521058/mocfmx2gszgptphieitx.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521060/wuxkwdnaj2abrqtgr4mv.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 'carlos silva', '$2y$10$gX07YyXRlb5ChehrsncWkOOU9LQCWAWwAVS6KZBzsYWUJdK6xD9cC', 'elmorochez22@gmail.com', 'admin', '2018-01-31 13:06:23', '2018-01-31 13:06:23'),
(19, 'LAS LOMAS', '$2y$10$jwHootEM.2L8R/DRsr45v.WPHwwdTuzt8oXEDDTXWURDw0p9LN.5m', 'laslomas@gmail.com', 'condominio', '2018-02-01 01:03:50', '2018-02-01 01:03:50'),
(20, 'DOMINGA ORITZ', '$2y$10$aI9ewWDOnDpHVvim0HY4iOdAPZhL0h1JlsxWOxILqseWwQlsumuPe', 'gimon@gmail.com', 'condominio', '2018-02-01 17:37:31', '2018-02-01 17:37:32'),
(21, 'carlos silva', '$2y$10$aI9ewWDOnDpHVvim0HY4iOdAPZhL0h1JlsxWOxILqseWwQlsumuPe', 'carlos@gmail.com', 'residente', '2018-02-01 17:37:31', '2018-02-01 17:37:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condominios_imagenes`
--
ALTER TABLE `condominios_imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`id_con`);

--
-- Indices de la tabla `directorio`
--
ALTER TABLE `directorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `residentes`
--
ALTER TABLE `residentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `residentes_imagenes`
--
ALTER TABLE `residentes_imagenes`
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
-- AUTO_INCREMENT de la tabla `condominios`
--
ALTER TABLE `condominios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `condominios_imagenes`
--
ALTER TABLE `condominios_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `directorio`
--
ALTER TABLE `directorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `residentes`
--
ALTER TABLE `residentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `residentes_imagenes`
--
ALTER TABLE `residentes_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
