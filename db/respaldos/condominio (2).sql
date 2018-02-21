-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-02-2018 a las 22:11:04
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
(9, 20, 'DOMINGA ORITZ', 'Av Principal Dominga Ortiz de Paez, Barinas 5201, Barinas, Venezuela', '8.597425601796806', '-70.18722614115904', '1', 0, 0, 1, 1),
(10, 31, 'raul leoni', 'Raúl Leoni, Barinas 5201, Barinas, Venezuela', '8.6012587', '-70.19469670000001', '1', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominios_cobros`
--

CREATE TABLE `condominios_cobros` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `condominios_servicios_id` int(11) NOT NULL,
  `monto` int(255) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `fecha_limite` varchar(100) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condominios_cobros`
--

INSERT INTO `condominios_cobros` (`id`, `condominios_id`, `condominios_servicios_id`, `monto`, `fecha`, `fecha_limite`, `estatus`) VALUES
(6, 8, 2, 200000, '2018-02-04 17:20:52', '28/02/2018', 1);

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
(11, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521055/k0eytwuht4uj0wm3smhy.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521056/bv2ukrx5cjo61p0eeigz.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521058/mocfmx2gszgptphieitx.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521060/wuxkwdnaj2abrqtgr4mv.jpg'),
(12, 10, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517773739/rwlxuy1di6t8wxutj3gn.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517773743/wavsmf9pndfi9lwhyodc.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517773749/lmpudh2mgigg9w2wzkuf.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517773751/teaabjxz54j3zrmmh3fz.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominios_servicios`
--

CREATE TABLE `condominios_servicios` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `servicio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `condominios_servicios`
--

INSERT INTO `condominios_servicios` (`id`, `condominios_id`, `servicio`) VALUES
(2, 8, 'agua'),
(3, 8, 'gym'),
(4, 8, 'sdfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_bancos`
--

CREATE TABLE `cuentas_bancos` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `banco` varchar(300) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas_bancos`
--

INSERT INTO `cuentas_bancos` (`id`, `condominios_id`, `banco`, `tipo`, `numero`, `nombre`, `cedula`, `email`) VALUES
(4, 8, 'Banesco', 'Banesco', '01025698754566341', 'carlos silva', '20000000', 'elmorochez22@gmail.com');

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
-- Estructura de tabla para la tabla `residentes`
--

CREATE TABLE `residentes` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `num_casa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes`
--

INSERT INTO `residentes` (`id`, `usuarios_id`, `condominios_id`, `nombre`, `cedula`, `fecha_nacimiento`, `num_casa`) VALUES
(8, 29, 8, 'carlos silva', 19881315, '03/02/1989', '03'),
(9, 30, 8, 'daniel silva', 19881315, '04/02/2018', '03');

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
(11, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521055/k0eytwuht4uj0wm3smhy.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521056/bv2ukrx5cjo61p0eeigz.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521058/mocfmx2gszgptphieitx.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517521060/wuxkwdnaj2abrqtgr4mv.jpg'),
(12, 4, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668875/jrivsru6dicowzsdqfuz.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668876/scvcpua5crhavbqtqwob.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668878/epsd12fv7edw8semsz92.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668879/zndsyvho6gsmwabmsdhb.png'),
(13, 5, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668953/avfkpyyrjujhq2cdiuhs.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668955/rkn2zxl4rbnib5kn6p05.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668956/enhcqosi9aacrl3u4qt3.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517668958/vvifamo6nxduttyg93xz.png'),
(14, 6, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669951/vnc6hc5pgq4aecuqchcg.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669955/tdbqqmnfmge1jg14tire.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669958/kwszmykjpq9hmwyegi1x.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669960/hjd79zc3ozjp7waexubm.png'),
(15, 7, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669962/oj19mmeyzplpk6rcfqpi.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669964/gtt9letsj9eyijrarscv.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669966/v2iwejhey1mdvzbs56y0.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517669967/yubxogoqkc6vmgkgd7us.png'),
(16, 8, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517670224/ttnxu5byymwdc9anmdug.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517670226/mszpcbbhcuksoxbiswbh.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517670228/ijofelfoljrxbuneaqta.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517670231/s2e81eexpe4mmok8deud.jpg'),
(17, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517762780/vms34p0cjg3dfqmfuv30.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517762783/vdjrdhf4crprdmhlvnze.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517762786/yghud21wfrzyaeknjeou.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1517762787/wrt8yh5tviw6oyakyzec.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes_pagos`
--

CREATE TABLE `residentes_pagos` (
  `id` int(11) NOT NULL,
  `residentes_id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `condominios_cobros_id` int(11) NOT NULL,
  `fecha_notificacion` varchar(100) NOT NULL,
  `fecha_pago` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes_pagos`
--

INSERT INTO `residentes_pagos` (`id`, `residentes_id`, `condominios_id`, `condominios_cobros_id`, `fecha_notificacion`, `fecha_pago`, `estatus`) VALUES
(9, 8, 8, 6, '2018-02-04 17:21:34', '', 0),
(10, 9, 8, 6, '2018-02-04 17:21:34', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
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

INSERT INTO `usuarios` (`id`, `condominios_id`, `name`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 0, 'carlos silva', '$2y$10$gX07YyXRlb5ChehrsncWkOOU9LQCWAWwAVS6KZBzsYWUJdK6xD9cC', 'elmorochez22@gmail.com', 'admin', '2018-01-31 13:06:23', '2018-01-31 13:06:23'),
(19, 8, 'LAS LOMAS', '$2y$10$jwHootEM.2L8R/DRsr45v.WPHwwdTuzt8oXEDDTXWURDw0p9LN.5m', 'laslomas@gmail.com', 'condominio', '2018-02-01 01:03:50', '2018-02-01 01:03:50'),
(20, 9, 'DOMINGA ORITZ', '$2y$10$aI9ewWDOnDpHVvim0HY4iOdAPZhL0h1JlsxWOxILqseWwQlsumuPe', 'gimon@gmail.com', 'condominio', '2018-02-01 17:37:31', '2018-02-01 17:37:32'),
(29, 8, 'carlos silva', '$2y$10$esM5w./AuSFNwf/klkTAAei25uqcbfmkH4inmekJPP9UWdpDRPsBS', 'carcar@gmail.com', 'residente', '2018-02-03 11:03:42', '2018-02-03 11:03:42'),
(30, 9, 'daniel silva', '$2y$10$CKSVQH2Wa1X5EnM0nMWscudqn61kyCD3WSHUyTpUo/WdFXmwtuVSC', 'daniel@gmail.com', 'residente', '2018-02-04 12:46:13', '2018-02-04 12:46:13'),
(31, 10, 'raul leoni', '$2y$10$slIu6j58GRdjldt0k0rEGOCYUREy021RbYObLarZ7ilj1Po5DWMXO', 'raulleoni@gmail.com', 'condominio', '2018-02-04 15:48:53', '2018-02-04 15:48:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `condominios`
--
ALTER TABLE `condominios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condominios_cobros`
--
ALTER TABLE `condominios_cobros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condominios_imagenes`
--
ALTER TABLE `condominios_imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condominios_servicios`
--
ALTER TABLE `condominios_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas_bancos`
--
ALTER TABLE `cuentas_bancos`
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
-- Indices de la tabla `residentes_pagos`
--
ALTER TABLE `residentes_pagos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `condominios_cobros`
--
ALTER TABLE `condominios_cobros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `condominios_imagenes`
--
ALTER TABLE `condominios_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `condominios_servicios`
--
ALTER TABLE `condominios_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cuentas_bancos`
--
ALTER TABLE `cuentas_bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT de la tabla `residentes`
--
ALTER TABLE `residentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `residentes_imagenes`
--
ALTER TABLE `residentes_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `residentes_pagos`
--
ALTER TABLE `residentes_pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
