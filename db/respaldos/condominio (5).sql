-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-02-2018 a las 21:39:51
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
(21, 8, 2, 100000, '2018-02-24 20:40:30', '28/02/2018', 1),
(22, 8, 5, 200000, '2018-02-24 20:40:40', '28/02/2018', 1),
(23, 8, 5, 500000, '2018-02-24 20:56:55', '28/02/2018', 1),
(24, 8, 3, 100000, '2018-02-24 21:08:46', '28/02/2018', 1),
(25, 8, 2, 200000, '2018-02-24 21:37:05', '28/02/2018', 1),
(26, 8, 3, 200000, '2018-02-24 21:38:13', '28/02/2018', 1);

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
(4, 8, 'sdfs'),
(5, 8, 'parque');

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
(4, 8, 'Banesco', 'Ahorro', '01025698754566341', 'carlos silva', '20000000', 'elmorochez22@gmail.com');

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
-- Estructura de tabla para la tabla `residentes_comprobantes`
--

CREATE TABLE `residentes_comprobantes` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `residentes_id` int(11) NOT NULL,
  `cuentas_bancos_id` int(11) NOT NULL,
  `servicios` varchar(1000) NOT NULL,
  `numero_referencia` varchar(100) NOT NULL,
  `monto_total` int(255) NOT NULL,
  `monto_comprobante` int(255) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes_comprobantes`
--

INSERT INTO `residentes_comprobantes` (`id`, `condominios_id`, `residentes_id`, `cuentas_bancos_id`, `servicios`, `numero_referencia`, `monto_total`, `monto_comprobante`, `fecha`, `estatus`) VALUES
(16, 8, 9, 4, 'a%3A2%3A%7Bi%3A0%3Bs%3A2%3A%2242%22%3Bi%3A1%3Bs%3A2%3A%2240%22%3B%7D', '3453457567', 300000, 0, '21/02/2018', 0),
(17, 8, 9, 4, 'a%3A1%3A%7Bi%3A0%3Bs%3A2%3A%2244%22%3B%7D', '234234233424', 500000, 600000, '20/02/2018', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes_comprobantes_imagenes`
--

CREATE TABLE `residentes_comprobantes_imagenes` (
  `id` int(11) NOT NULL,
  `residentes_comprobantes_id` int(11) NOT NULL,
  `imagen_original` varchar(300) NOT NULL,
  `imagen_grande` varchar(300) NOT NULL,
  `imagen_medio` varchar(300) NOT NULL,
  `imagen_miniatura` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes_comprobantes_imagenes`
--

INSERT INTO `residentes_comprobantes_imagenes` (`id`, `residentes_comprobantes_id`, `imagen_original`, `imagen_grande`, `imagen_medio`, `imagen_miniatura`) VALUES
(1, 4, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519255273/aotkxjniu3avdwmzk67f.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519255276/baqdbwvqai0ls4bojxze.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519255277/hjyy88qmcs0k5ojknz6m.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519255278/jce5npg6bfhcyxb0me2w.png'),
(2, 5, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321498/syr3f4perfcqsnshlrgt.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321504/rfqed7q9t4y6yfg5rtjk.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321508/tlwsf8mwwnsv6mcea17x.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321512/awvbo87ndrei40rsd1qm.png'),
(3, 6, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321645/nvttdkjk2fcwayt5zpx1.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321648/crwllwftcsfn2izssj02.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321651/jylolb0d4casnuofiq8v.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519321652/joye4pef24lrfjju6cwq.png'),
(4, 7, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496295/zzzlpdnynkfg4e2ljoj8.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496299/sexecpdmsi84gff5khd5.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496303/zosxilamtsejrwdpzjoz.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496305/c0d9rdqlp0rd14upekcd.png'),
(5, 8, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496601/iimi2o0cm7vfnl9lhjjx.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496606/krfmzcoq6vckgkf5wgva.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496609/c9wdxzk4z9dyti7u25ge.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519496611/pgtrzchgz9ecu3p5umbv.png'),
(6, 9, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497190/iqb1g8z0zxml7jwb4scc.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497196/vswpcu05szn3p74trjvz.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497204/spjulzk7wsjq06nhixvk.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497210/lzvbzfslvregyr8jveyh.png'),
(7, 10, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497721/pez77usdkstytlwjxvch.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497727/ycwcibnocrhq46sbyhcy.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497730/ap85giukir4sjvofaunc.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519497732/yh7bjbgoerhza7pokdip.png'),
(8, 11, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498005/omkxdvd8vdtcjhptmvob.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498009/t0oijxu249eo55vk9yfc.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498012/pcazddmagqxhofvjayt2.png', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498015/jszdp85ghzyditkdgdsi.png'),
(9, 12, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498246/kaan5r1qf6zohxvl28vj.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498248/ggssqoqcj9glcgvmarqc.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498251/fkzluwkpxxo2nelaahrr.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498252/bbiiexeeuuajx15h8hl6.jpg'),
(10, 13, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498427/rppcw1wmgyanvkremns2.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498428/lmtahlgif4wpnttvbllt.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498431/is1gt2i0rfsatkzpmfwf.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519498433/shc4ykqe6gc7b0dio2d3.jpg'),
(11, 14, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519516493/css3kefdovvoamms69hz.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519516495/hzrqjttxgltw3loo0fzm.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519516497/ldlcyfkuigibosdxu35o.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519516499/d9jefyds6f5tutu9lzhj.jpg'),
(12, 15, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519517970/sltvois8akaijnccyii2.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519517973/x9kjxyadtcacd51jysgo.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519517975/f3lxcu6lor4bkcnsdczh.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519517977/wzh5qok2h8gs3zrclbkd.jpg'),
(13, 16, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519519453/utasqktz7haxebbjlc11.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519519455/m7wctdptgshltq29uaxy.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519519458/fgdfz5fbplaprbgxxx5w.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519519460/hdnigfhuohloipwilbsl.jpg'),
(14, 17, 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519520294/y7i0bvvgmwhhatkgvool.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519520297/tynlz9wot9dbukvfjvsg.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519520298/iad4chnik8jgjtu4e6tt.jpg', 'http://res.cloudinary.com/tuconsultaenlinea/image/upload/v1519520300/xziuk64krpyooqyl6mw0.jpg');

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
  `residentes_comprobantes_id` int(11) DEFAULT NULL,
  `fecha_notificacion` varchar(100) NOT NULL,
  `fecha_pago` varchar(100) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `residentes_pagos`
--

INSERT INTO `residentes_pagos` (`id`, `residentes_id`, `condominios_id`, `condominios_cobros_id`, `residentes_comprobantes_id`, `fecha_notificacion`, `fecha_pago`, `estatus`) VALUES
(39, 8, 8, 22, NULL, '2018-02-24 20:40:55', '', 0),
(40, 9, 8, 22, 16, '2018-02-24 20:40:55', '', 1),
(41, 8, 8, 21, NULL, '2018-02-24 20:40:57', '', 0),
(42, 9, 8, 21, 16, '2018-02-24 20:40:57', '', 1),
(43, 8, 8, 23, NULL, '2018-02-24 20:57:01', '', 0),
(44, 9, 8, 23, 17, '2018-02-24 20:57:01', '', 2),
(45, 8, 8, 24, NULL, '2018-02-24 21:08:49', '', 0),
(47, 8, 8, 25, NULL, '2018-02-24 21:37:07', '', 0),
(49, 8, 8, 26, NULL, '2018-02-24 21:38:15', '', 0),
(50, 9, 8, 26, NULL, '2018-02-24 21:38:15', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residentes_puntos`
--

CREATE TABLE `residentes_puntos` (
  `id` int(11) NOT NULL,
  `condominios_id` int(11) NOT NULL,
  `condominios_cobros_id` int(11) NOT NULL,
  `residentes_id` int(11) NOT NULL,
  `residentes_pagos_id` int(11) NOT NULL,
  `monto` int(100) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldos`
--

CREATE TABLE `saldos` (
  `id` int(11) NOT NULL,
  `residentes_id` int(11) NOT NULL,
  `monto_positivo` int(255) NOT NULL,
  `monto_negativo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `saldos`
--

INSERT INTO `saldos` (`id`, `residentes_id`, `monto_positivo`, `monto_negativo`) VALUES
(1, 9, 700000, 0);

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
-- Indices de la tabla `residentes_comprobantes`
--
ALTER TABLE `residentes_comprobantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `residentes_comprobantes_imagenes`
--
ALTER TABLE `residentes_comprobantes_imagenes`
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
-- Indices de la tabla `residentes_puntos`
--
ALTER TABLE `residentes_puntos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `saldos`
--
ALTER TABLE `saldos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `condominios_imagenes`
--
ALTER TABLE `condominios_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `condominios_servicios`
--
ALTER TABLE `condominios_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT de la tabla `residentes_comprobantes`
--
ALTER TABLE `residentes_comprobantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `residentes_comprobantes_imagenes`
--
ALTER TABLE `residentes_comprobantes_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `residentes_imagenes`
--
ALTER TABLE `residentes_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `residentes_pagos`
--
ALTER TABLE `residentes_pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `residentes_puntos`
--
ALTER TABLE `residentes_puntos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `saldos`
--
ALTER TABLE `saldos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
