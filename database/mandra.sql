-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2018 a las 20:30:28
-- Versión del servidor: 5.7.24-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mandra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `password`, `create_time`) VALUES
(1, 'root', '7993e11204b215b27694b6f139e34ce8', '2018-11-08 06:31:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'Ingenieria', 'Licenciatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `idcompetencia` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `subcategoria_idsubcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`idcompetencia`, `nombre`, `subcategoria_idsubcategoria`) VALUES
(1, 'Programación orientada a objetos', 1),
(2, 'Bases de datos', 1),
(3, 'Programacion para Web', 1),
(4, 'Sistemas operativos', 1),
(5, 'Programacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `ideducacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`ideducacion`, `nombre`) VALUES
(1, 'Doctorado'),
(2, 'Maestria o especialidad'),
(3, 'Licenciatura'),
(4, 'Bachillerato'),
(5, 'Secundaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `correo` varchar(55) DEFAULT NULL,
  `telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombre`, `descripcion`, `correo`, `telefono`) VALUES
(1, 'Grupo salinas', NULL, NULL, '5551911474'),
(2, 'Manpower', 'Insurgentes Centro 36, colonia Tabacalera', NULL, '5528995303'),
(3, 'Posadas', 'Prolongación Paseo de la Reforma 1015 Piso 9 Torre A Col Santa Fe Del. Álvaro Obregón CP 01210, México DF', NULL, '+52 (55) 5326 6700'),
(4, 'Profuturo', NULL, 'servicioaclientes@profuturo.com.mx', '58 09 65 55'),
(5, 'tkm', 'Av. Amores 321, Col. Del Valle, Del. Benito Juárez, C.P. 03100, CDMX', 'soluciones@tkm.com.mx', '+52 (55) 5326 6734'),
(6, 'Santander', NULL, NULL, '51694300'),
(7, 'Citibanamex', NULL, NULL, '2262 6391'),
(8, 'Sanpablo', NULL, NULL, '(55) 5354 9000'),
(9, 'Grupo prodensa', NULL, NULL, '52 81 1161 90 00'),
(10, 'Inbursa', NULL, NULL, ' 5447 8000 '),
(11, 'Nelson Vargas', 'Camino a Santa Teresa 187-C, piso 4, Col. Parque del Pedregal, México D.F, Código postal: 14010', 'contacto@anv.com.mx', '	(55) 5424 8455');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE `habilidad` (
  `idhabilidad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habilidad`
--

INSERT INTO `habilidad` (`idhabilidad`, `nombre`) VALUES
(1, 'Adaptabilidad'),
(2, 'Habilidades comunicativas'),
(3, 'Capacidad para resolver problemas'),
(4, 'Creatividad'),
(5, 'Relaciones interpersonales'),
(6, 'Trabajo en equipo'),
(7, 'Actitud positiva'),
(8, 'Dedicación'),
(9, 'Confianza'),
(10, 'Honestidad'),
(11, 'Iniciativa'),
(12, 'Deseos de aprender'),
(13, 'Empatia'),
(14, 'Liderazgo'),
(15, 'Persuacion'),
(16, 'Negociación'),
(17, 'Elegancia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `tipo`) VALUES
(1, 'Medio tiempo matutino'),
(2, 'Medio tiempo vespertino'),
(3, 'Medio tiempo'),
(4, 'Tiempo completo'),
(5, 'Cualquier horario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE `ingles` (
  `idingles` int(11) NOT NULL,
  `nivel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingles`
--

INSERT INTO `ingles` (`idingles`, `nivel`) VALUES
(1, 'Nada'),
(2, 'Basico'),
(3, 'Intermedio'),
(4, 'Avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `idlocalidad` int(11) NOT NULL,
  `nombre` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`idlocalidad`, `nombre`) VALUES
(1, 'Distrito Federal'),
(2, 'Estado de México'),
(4, 'Toluca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `idsexo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idsexo`, `nombre`) VALUES
(1, 'Femenino'),
(2, 'Masculino'),
(3, 'Prefiero no especificar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `idsubcategoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`idsubcategoria`, `nombre`, `categoria_idcategoria`) VALUES
(1, 'Ingenieria en sistemas y tecnologias de informacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnica`
--

CREATE TABLE `tecnica` (
  `idtecnica` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `competencia_idcompetencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnica`
--

INSERT INTO `tecnica` (`idtecnica`, `nombre`, `competencia_idcompetencia`) VALUES
(1, 'Java', 1),
(2, 'Mysql', 2),
(3, 'Postgresql', 2),
(4, 'MongoDB', 2),
(5, 'MariaDB', 2),
(6, 'Html', 3),
(7, 'Php', 3),
(8, 'Javascript', 3),
(9, 'Bootstrap', 3),
(10, 'Linux', 4),
(11, 'C', 5),
(12, 'C++', 5),
(13, 'Python', 5),
(14, '.Net', 5),
(15, 'Gambas', 5),
(16, 'Visual Basic', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `anos_exp` int(11) NOT NULL,
  `activo` varchar(15) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `salario` int(11) DEFAULT NULL,
  `fecha_post` date NOT NULL,
  `descripcion` varchar(800) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `horario_id_horario` int(11) NOT NULL,
  `subcategoria_idsubcategoria` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `localidad_idlocalidad` int(11) NOT NULL,
  `ingles_idingles` int(11) NOT NULL,
  `empresa_idempresa` int(11) NOT NULL,
  `sexo_idsexo` int(11) NOT NULL,
  `educacion_ideducacion` int(11) NOT NULL,
  `edad_req` int(11) DEFAULT NULL,
  `id_trabajo` int(11) NOT NULL,
  `Registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`anos_exp`, `activo`, `nombre`, `salario`, `fecha_post`, `descripcion`, `telefono`, `correo`, `horario_id_horario`, `subcategoria_idsubcategoria`, `categoria_idcategoria`, `localidad_idlocalidad`, `ingles_idingles`, `empresa_idempresa`, `sexo_idsexo`, `educacion_ideducacion`, `edad_req`, `id_trabajo`, `Registro`) VALUES
(19, 'si', 'Becario', 12000, '2018-11-17', 'Jefe', '5526277283', 'tvkr@krmc.com', 1, 1, 1, 2, 3, 2, 2, 1, 19, 1, '2018-11-15 00:56:53'),
(1, 'si', 'Becario', 1200, '2018-11-16', '6to a 7mo semestre', '5537737288', 'roberto@gmail.com', 4, 1, 1, 1, 3, 3, 2, 4, 19, 2, '2018-11-15 00:56:53'),
(1, 'si', 'Bosques de las Lomas a', 1, '2018-11-10', 'w', '1', 'rvirvvrivr@gamil.com', 2, 1, 1, 2, 4, 8, 2, 4, 19, 3, '2018-11-15 00:56:53'),
(3, 'Activar', 'Becario', 2000, '2018-11-06', '33', '33', 'roberto@gmail.com', 1, 1, 1, 1, 1, 1, 2, 5, 34, 6, '2018-11-15 00:56:53'),
(3, 'Activar', 'Desarrollador', 3000, '2018-11-01', 'trabajo descripcion', '552536585937', 'r.lomel@hotmail.com', 2, 1, 1, 1, 2, 2, 1, 2, 2, 12, '2018-11-15 00:56:53'),
(3, 'Activar', '2rf', 2, '2018-11-08', '24r', '3', 'r@gmai.com', 2, 1, 1, 1, 2, 3, 2, 3, 22, 46, '2018-11-15 01:21:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_has_habilidad`
--

CREATE TABLE `trabajo_has_habilidad` (
  `habilidad_idhabilidad` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `trabajo_id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo_has_habilidad`
--

INSERT INTO `trabajo_has_habilidad` (`habilidad_idhabilidad`, `importancia`, `trabajo_id_trabajo`) VALUES
(1, 2, 12),
(2, 1, 46),
(5, 1, 12),
(16, 3, 12),
(17, 3, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_has_tecnica`
--

CREATE TABLE `trabajo_has_tecnica` (
  `tecnica_idtecnica` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `pericidad` int(11) DEFAULT NULL,
  `trabajo_id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo_has_tecnica`
--

INSERT INTO `trabajo_has_tecnica` (`tecnica_idtecnica`, `importancia`, `pericidad`, `trabajo_id_trabajo`) VALUES
(1, 2, 3, 12),
(1, 1, 3, 46),
(2, 1, 2, 12),
(6, 3, 3, 46),
(10, 3, 5, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_register`
--

CREATE TABLE `user_register` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_register`
--

INSERT INTO `user_register` (`id_usuario`, `correo`, `password`, `create_time`) VALUES
(7, 'roberto@gmail.com', '2420', '2018-10-15 21:24:30'),
(8, 'bonilla@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:33:49'),
(9, 'bonilla2@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:38:21'),
(11, 'bonilla20@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:40:38'),
(12, 'bonilla50@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:42:13'),
(13, 'bonilla1100@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:49:13'),
(14, 'hifo@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:54:00'),
(15, 'efle@hotmai.com', 'bc6dc48b743dc5d013b1abaebd2faed2', '2018-10-15 21:54:42'),
(16, 'roberto22@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 21:55:34'),
(17, 'roberto2340@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:02:09'),
(18, 'robbefb@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:02:58'),
(19, 'jrjvri@gmai.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:28:53'),
(20, 'ebwfehwbfwebhe@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:30:18'),
(21, 'root@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:32:11'),
(22, 'rvirvvrivr@gamil.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:39:21'),
(23, 'tvkr@krmc.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 22:43:11'),
(24, 'roberto24@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-15 23:14:46'),
(25, 'roberto88@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-10-23 03:34:49'),
(26, 'roberto34@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-08 04:54:04'),
(27, 'admin@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-13 07:33:00'),
(28, 'robbi@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-13 08:15:10'),
(29, 'r.lomel@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-13 15:33:40'),
(30, 'robonilla@gmail.com', '7993e11204b215b27694b6f139e34ce8', '2018-11-15 02:13:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(12) DEFAULT NULL,
  `apellido_paterno` varchar(22) DEFAULT NULL,
  `apellido_materno` varchar(22) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `sueldo_actual` int(11) DEFAULT NULL,
  `salario_deseado` int(11) DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT NULL,
  `activo` varchar(15) DEFAULT NULL,
  `completo` varchar(5) DEFAULT NULL,
  `descripcion_habilidad` varchar(450) DEFAULT NULL,
  `descripcion_persona` varchar(450) DEFAULT NULL,
  `horario_id_horario` int(11) DEFAULT NULL,
  `subcategoria_idsubcategoria` int(11) DEFAULT NULL,
  `categoria_idcategoria` int(11) DEFAULT NULL,
  `localidad_idlocalidad` int(11) DEFAULT NULL,
  `ingles_idingles` int(11) DEFAULT NULL,
  `sexo_idsexo` int(11) DEFAULT NULL,
  `educacion_ideducacion` int(11) DEFAULT NULL,
  `user_register_id_usuario` int(11) NOT NULL,
  `Registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `telefono`, `celular`, `linkedin`, `sueldo_actual`, `salario_deseado`, `fecha_registro`, `activo`, `completo`, `descripcion_habilidad`, `descripcion_persona`, `horario_id_horario`, `subcategoria_idsubcategoria`, `categoria_idcategoria`, `localidad_idlocalidad`, `ingles_idingles`, `sexo_idsexo`, `educacion_ideducacion`, `user_register_id_usuario`, `Registro`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '2018-11-15 02:22:35'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '2018-11-15 02:22:35'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '2018-11-15 02:22:35'),
('eub4', 'rf', 'j', 1, '777', '99', '0990', 987, 89099, NULL, 'Activar', NULL, '33', 'jjj', 1, 1, 1, 2, 2, 2, 2, 27, '2018-11-15 02:22:35'),
('ggmmm', 'uhuuh', 'hb', 1, '1', '1', 'ghh', 55, 66, NULL, NULL, NULL, NULL, 'h', 1, 1, 1, 1, 4, 1, 1, 28, '2018-11-15 02:22:35'),
('regina', 'lomelin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 29, '2018-11-15 02:22:35'),
('R', 'B', 'I', 12, '22', 'e', NULL, NULL, NULL, NULL, 'Activar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, '2018-11-15 02:22:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_habilidad`
--

CREATE TABLE `usuario_has_habilidad` (
  `habilidad_idhabilidad` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `user_register_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_habilidad`
--

INSERT INTO `usuario_has_habilidad` (`habilidad_idhabilidad`, `importancia`, `user_register_id_usuario`) VALUES
(1, 1, 27),
(2, 2, 27),
(2, 2, 30),
(3, 1, 30),
(8, 3, 27),
(16, 3, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_tecnica`
--

CREATE TABLE `usuario_has_tecnica` (
  `tecnica_idtecnica` int(11) DEFAULT NULL,
  `importancia` int(11) NOT NULL,
  `pericidad` int(11) DEFAULT NULL,
  `user_register_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_has_tecnica`
--

INSERT INTO `usuario_has_tecnica` (`tecnica_idtecnica`, `importancia`, `pericidad`, `user_register_id_usuario`) VALUES
(1, 1, 2, 27),
(2, 2, 4, 27),
(6, 3, 5, 27),
(1, 1, 2, 30),
(3, 2, 3, 30),
(10, 3, 4, 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `correo_UNIQUE` (`admin_name`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `idcategoria_UNIQUE` (`idcategoria`);

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`idcompetencia`),
  ADD UNIQUE KEY `idcompetencia_UNIQUE` (`idcompetencia`),
  ADD KEY `fk_competencia_subcategoria1_idx` (`subcategoria_idsubcategoria`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`ideducacion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  ADD PRIMARY KEY (`idhabilidad`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD UNIQUE KEY `id_horario_UNIQUE` (`id_horario`);

--
-- Indices de la tabla `ingles`
--
ALTER TABLE `ingles`
  ADD PRIMARY KEY (`idingles`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`idlocalidad`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`idsexo`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`idsubcategoria`),
  ADD KEY `fk_subcategoria_categoria1_idx` (`categoria_idcategoria`);

--
-- Indices de la tabla `tecnica`
--
ALTER TABLE `tecnica`
  ADD PRIMARY KEY (`idtecnica`),
  ADD KEY `fk_tecnica_competencia1_idx` (`competencia_idcompetencia`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id_trabajo`),
  ADD UNIQUE KEY `id_trabajo_UNIQUE` (`id_trabajo`),
  ADD KEY `fk_trabajo_horario1_idx` (`horario_id_horario`),
  ADD KEY `fk_trabajo_subcategoria1_idx` (`subcategoria_idsubcategoria`),
  ADD KEY `fk_trabajo_categoria1_idx` (`categoria_idcategoria`),
  ADD KEY `fk_trabajo_localidad1_idx` (`localidad_idlocalidad`),
  ADD KEY `fk_trabajo_ingles1_idx` (`ingles_idingles`),
  ADD KEY `fk_trabajo_empresa1_idx` (`empresa_idempresa`),
  ADD KEY `fk_trabajo_sexo1_idx` (`sexo_idsexo`),
  ADD KEY `fk_trabajo_educacion1_idx` (`educacion_ideducacion`);

--
-- Indices de la tabla `trabajo_has_habilidad`
--
ALTER TABLE `trabajo_has_habilidad`
  ADD PRIMARY KEY (`importancia`,`trabajo_id_trabajo`),
  ADD KEY `fk_trabajo_has_habilidad_habilidad1_idx` (`habilidad_idhabilidad`),
  ADD KEY `fk_trabajo_has_habilidad_trabajo1_idx` (`trabajo_id_trabajo`);

--
-- Indices de la tabla `trabajo_has_tecnica`
--
ALTER TABLE `trabajo_has_tecnica`
  ADD PRIMARY KEY (`importancia`,`trabajo_id_trabajo`),
  ADD KEY `fk_trabajo_has_tecnica_tecnica1_idx` (`tecnica_idtecnica`),
  ADD KEY `fk_trabajo_has_tecnica_trabajo1_idx` (`trabajo_id_trabajo`);

--
-- Indices de la tabla `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_register_id_usuario`),
  ADD UNIQUE KEY `user_register_id_usuario_UNIQUE` (`user_register_id_usuario`),
  ADD KEY `fk_usuario_horario1_idx` (`horario_id_horario`),
  ADD KEY `fk_usuario_subcategoria1_idx` (`subcategoria_idsubcategoria`),
  ADD KEY `fk_usuario_categoria1_idx` (`categoria_idcategoria`),
  ADD KEY `fk_usuario_localidad1_idx` (`localidad_idlocalidad`),
  ADD KEY `fk_usuario_ingles1_idx` (`ingles_idingles`),
  ADD KEY `fk_usuario_sexo1_idx` (`sexo_idsexo`),
  ADD KEY `fk_usuario_educacion1_idx` (`educacion_ideducacion`);

--
-- Indices de la tabla `usuario_has_habilidad`
--
ALTER TABLE `usuario_has_habilidad`
  ADD PRIMARY KEY (`user_register_id_usuario`,`importancia`),
  ADD KEY `fk_usuario_has_habilidad_habilidad1_idx` (`habilidad_idhabilidad`),
  ADD KEY `fk_usuario_has_habilidad_usuario1_idx` (`user_register_id_usuario`);

--
-- Indices de la tabla `usuario_has_tecnica`
--
ALTER TABLE `usuario_has_tecnica`
  ADD PRIMARY KEY (`user_register_id_usuario`,`importancia`),
  ADD KEY `fk_usuario_has_tecnica_tecnica1_idx` (`tecnica_idtecnica`),
  ADD KEY `fk_usuario_has_tecnica_usuario1_idx` (`user_register_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `idcompetencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `ideducacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `habilidad`
--
ALTER TABLE `habilidad`
  MODIFY `idhabilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ingles`
--
ALTER TABLE `ingles`
  MODIFY `idingles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `idlocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `idsexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tecnica`
--
ALTER TABLE `tecnica`
  MODIFY `idtecnica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT de la tabla `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `fk_competencia_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `fk_subcategoria_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tecnica`
--
ALTER TABLE `tecnica`
  ADD CONSTRAINT `fk_tecnica_competencia1` FOREIGN KEY (`competencia_idcompetencia`) REFERENCES `competencia` (`idcompetencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `fk_trabajo_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_educacion1` FOREIGN KEY (`educacion_ideducacion`) REFERENCES `educacion` (`ideducacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_empresa1` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_horario1` FOREIGN KEY (`horario_id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_ingles1` FOREIGN KEY (`ingles_idingles`) REFERENCES `ingles` (`idingles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_localidad1` FOREIGN KEY (`localidad_idlocalidad`) REFERENCES `localidad` (`idlocalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_sexo1` FOREIGN KEY (`sexo_idsexo`) REFERENCES `sexo` (`idsexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo_has_habilidad`
--
ALTER TABLE `trabajo_has_habilidad`
  ADD CONSTRAINT `fk_trabajo_has_habilidad_habilidad1` FOREIGN KEY (`habilidad_idhabilidad`) REFERENCES `habilidad` (`idhabilidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_has_habilidad_trabajo1` FOREIGN KEY (`trabajo_id_trabajo`) REFERENCES `trabajo` (`id_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo_has_tecnica`
--
ALTER TABLE `trabajo_has_tecnica`
  ADD CONSTRAINT `fk_trabajo_has_tecnica_tecnica1` FOREIGN KEY (`tecnica_idtecnica`) REFERENCES `tecnica` (`idtecnica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajo_has_tecnica_trabajo1` FOREIGN KEY (`trabajo_id_trabajo`) REFERENCES `trabajo` (`id_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_educacion1` FOREIGN KEY (`educacion_ideducacion`) REFERENCES `educacion` (`ideducacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_horario1` FOREIGN KEY (`horario_id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_ingles1` FOREIGN KEY (`ingles_idingles`) REFERENCES `ingles` (`idingles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_localidad1` FOREIGN KEY (`localidad_idlocalidad`) REFERENCES `localidad` (`idlocalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_sexo1` FOREIGN KEY (`sexo_idsexo`) REFERENCES `sexo` (`idsexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_user_register1` FOREIGN KEY (`user_register_id_usuario`) REFERENCES `user_register` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_habilidad`
--
ALTER TABLE `usuario_has_habilidad`
  ADD CONSTRAINT `fk_usuario_has_habilidad_habilidad1` FOREIGN KEY (`habilidad_idhabilidad`) REFERENCES `habilidad` (`idhabilidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_habilidad_usuario1` FOREIGN KEY (`user_register_id_usuario`) REFERENCES `user_register` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_tecnica`
--
ALTER TABLE `usuario_has_tecnica`
  ADD CONSTRAINT `fk_usuario_has_tecnica_tecnica1` FOREIGN KEY (`tecnica_idtecnica`) REFERENCES `tecnica` (`idtecnica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;