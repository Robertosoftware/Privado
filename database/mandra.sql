-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 19:42:57
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
(1, 'Activar', 'DESARROLLADOR NET / C# / SQL', 30000, '2018-11-01', 'Desarrollador .NET, WFC y SQL Server 2008. Conocimiento de ASP, JavaScript, Hojas de estilo', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 1, 3, 1, 3, 3, 18, 50, '2018-11-27 08:57:14'),
(4, 'Activar', 'Arquitecto de Soluciones Cloud', 70000, '2018-11-15', 'Creación de una infraestructura de TI en plataformas Cloud\\nTransformación y Implementación de aplicaciones de nube en AWS/Google/ azure con seguridad, alta disponibilidad y despliegue continuo.\\nCrear soluciones complejas que incorporen sevicios de datos, gobernanza y seguridad en las plataformas de Nube. \\nSeleccionar el mecanismo de implementación de Nube  mas apropiado (AWS, Azure o Google)\\nDiseña e Implementa estrategias de seguridad, alta disponibilidad y plan de recuperación de desastres.Creación de una infraestructura de TI en plataformas Cloud', '5552152396', 'contacto@gruposalinas.com', 3, 1, 1, 1, 3, 1, 3, 2, 18, 51, '2018-11-27 16:11:48'),
(0, 'Activar', 'Técnico reparador', 8436, '2018-11-26', 'En nuestro centro de servicio requerimos técnicos para el mantenimiento de nuestros dispositivos, diagnostico, mantenimiento, estética y remplazo de bases y etiquetas', '5528995303', 'contacto@manpower.com', 2, 1, 1, 1, 1, 2, 3, 3, 18, 52, '2018-11-27 16:16:42'),
(5, 'Activar', 'Desarrollador de software', 40000, '2018-11-22', 'Licenciatura o Ingenieria en Sistemas Computaciones o a fin.Experiencia minima de 5 años realizando proyectos de Software, Conocimiento de patrones de diseños MVC\\nExperiencia en desarrollo de sistemas Windows Service, Web Service, Servicios REST\\nAlto conocimiento de programación en lenguaje C# c-sharp, Paqueteria Office Avanzado. Actividades: Analizar, diseñar  y desarrollar sistemas con tecnología MS, .Net , tanto en web (ASP. NET, MVC, WEBAPI),Winforms, Windows service, Mobile, etc', '5528995303', 'contacto@manpower.com', 4, 1, 1, 2, 2, 2, 3, 3, 18, 53, '2018-11-27 16:23:28'),
(2, 'Activar', 'PROGRAMADOR DE APLICACIONES MÓVILES', 25000, '2018-11-09', 'Objetivo del puesto: Administrar el ciclo de vida de las aplicaciones móviles de acuerdo a las reglas de negocio y estándares de la empresa. Diseñar, programar, probar y dar mantenimiento a las aplicaciones desarrolladas en la empresa siguiendo las mejores prácticas de la industria. 2. Administrar la atención de los requerimientos de desarrollo de aplicaciones móviles. 3. Sugerir mejoras al diseño y/o desarrollo para beneficio de la experiencia del usuario. ', '17194000', 'contacto@manpower.com', 4, 1, 1, 1, 2, 2, 3, 3, 18, 54, '2018-11-27 16:49:01'),
(2, 'Activar', 'Consultor Especialista en Modelo de Datos', 30000, '2018-11-21', 'REQUISITOS:Mínimo 2 años de experiencia en área de Business Intelligence, Modelo de Datos, Indispensable conocimiento o experiencia en Datawarehouse, datamarts y modelos relacionales),Indispensable conocimiento o experiencia en diseño y construcción de procesos ETL, Manejo de Bases de Datos (preferentemente Oracle),Consulta de datos (SQL). Conocimiento de SAS (no indispensable). Actividades: Análisis y diseño de modelo de datos (Datawarehouse, datamarts y modelos relacionales), Diseño y construcción de procesos ETL, Levantamiento de Información.Generación de diccionario de datos, mapeo de información y flujo de datos.', '58096555', 'servicioaclientes@profuturo.com.mx', 4, 1, 1, 2, 2, 4, 3, 3, 18, 55, '2018-11-27 17:57:52'),
(2, 'Activar', 'Consultor de Estadística', 15000, '2018-10-29', 'Diseñar y desarrollar procesos de depuración, transformación y carga de datos para acumularlos de forma estandarizada.\\n-Diseñar y desarrollar modelos que permitan proyectar los resultados de ventas de las líneas de negocio a su cargo.\\n-Diseñar y desarrollar tableros analíticos y reportes de seguimiento de los concursos e incentivos.\\n-Diseñar y desarrollar procesos automatizados de cálculo de indicadores de gestión y generación de reportes.\\n-Analizar indicadores de los sistemas de información, con la finalidad de identificar fortalezas y debilidades de la gestión y actividad comercial', '58096555', 'servicioaclientes@profuturo.com.mx', 4, 1, 1, 2, 2, 4, 3, 3, 18, 56, '2018-11-27 18:10:13'),
(2, 'Activar', 'ANALISTA DE TELECOMUNICACIONES', 9500, '2018-11-22', '\'OFRECEMOS:\\n· SUELDO BASE DE $9,500 LIBRES DE IMPUESTOS\\n· SEGURO DESDE PRIMER DÍA\\n· PRESTACIONES SUPERIORES A LAS DE LEY\\n· SEGURO DE GASTOS POR ACCIDENTE, SEGURO DE AUTO.\\n· SERVICIOS DENTAL Y ÓPTICO.\\n· ESTABILIDAD LABORAL\\n· PAGO PUNTUAL', '50625800', 'soluciones@tkm.com.mx', 4, 1, 1, 2, 3, 5, 3, 3, 18, 57, '2018-11-27 18:14:54'),
(1, 'Activar', 'Desarrollador VB6', 31700, '2018-11-08', 'Ing. Sistemas Computacionales, Informática, Electrónica, TSU o carrera afín (Titulados o Proceso de titulación comprobable).\\nBuscamos experiencia o bien con conocimientos solidos en los siguiente:\\nDesarrollo en aplicaciones VB6 \\nConocimientos WEB( web Services, ajax, html)\\nManejo de SQL ( Stored Procedure)\\nZona de trabajo DF (Sur) Lunes a Viernes 09 a 19, guardias algunos fines de sem', '5552152396', 'contacto@gruposalinas.com', 4, 1, 1, 1, 2, 1, 3, 3, 18, 58, '2018-11-27 18:31:09');

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
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
