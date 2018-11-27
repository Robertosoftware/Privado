-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 10:01:48
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(3, 'Activar', '2rf', 2, '2018-11-08', '24r', '3', 'r@gmai.com', 2, 1, 1, 1, 2, 3, 2, 3, 22, 46, '2018-11-15 01:21:32'),
(1, 'Activar', 'Desarrolladores Java / Net / PLSQL / Cobol', 25000, '2018-10-28', 'Desarrollador Java, JSF, Web Services, Ajax, Struts, Jquery, Spring, JSP, Java Scrip, HTML5, Bootstrap, Oracle\\nDesarrollador .NET(C#), MVC, ASP,  SQL Server 2008, Servicios Web\\nDesarrollador de Bases de Datos Oracle PLSQL, vistas, tablas, procedimientos almacenados, Toad\\nDesarrollador cobol, JCL, Linea, BD SQL\\n', '5551911474', 'contacto@gruposalinas.com', 4, 1, 1, 1, 3, 1, 3, 3, 18, 47, '2018-11-27 08:45:52'),
(1, 'Activar', 'Programador Java Sr', 42000, '2018-11-14', 'Experiencia  en:Java, Struts, Spring y/o Hibernate, Jboss, Ajax, servlets.,Web services. ,JSON, PLSQL\', \'Programador Java Sr', '5552152396', 'contacto@gruposalinas.com', 4, 1, 1, 1, 3, 1, 3, 3, 18, 48, '2018-11-27 08:49:54'),
(1, 'Activar', 'DESARROLLADOR PL/SQL ORACLE', 31700, '2018-11-01', 'Experiencia en modelado de bases de datos, desarrollo de procesos y funciones de base de datos con PL/SQL Oracle, optimización y tunning en base de datos. Metodologías de desarrollo ágil: Scrum (deseable)', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 2, 2, 1, 3, 3, 18, 49, '2018-11-27 08:53:44'),
(1, 'Activar', 'DESARROLLADOR NET / C# / SQL', 30000, '2018-11-01', 'Desarrollador .NET, WFC y SQL Server 2008. Conocimiento de ASP, JavaScript, Hojas de estilo', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 1, 3, 1, 3, 3, 18, 50, '2018-11-27 08:57:14');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
