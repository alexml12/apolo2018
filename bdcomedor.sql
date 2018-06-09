-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2018 a las 04:45:00
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcomedor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `codigo_alumno` varchar(200) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `carrera_profesional` varchar(200) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `FECHA_REGISTRO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigo_alumno`, `dni`, `correo`, `nombres`, `apellidos`, `carrera_profesional`, `sexo`, `estado`, `FECHA_REGISTRO`) VALUES
('082205A', '46063346', 'spydy2289@gmail.com', 'sergio', 'mendoza', 'sistemas', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205B', '46063340', 'eltigre@gmail.com', 'pedro', 'quispe', 'ambiental', 'Masculino', '0', '2014-07-30 9:39:06'),
('082205C', '46063343', 'ronel345@hotmail.com', 'romel', 'trujillo', 'turismo', 'Masculino', '0', '2014-07-30 10:39:06'),
('082205D', '46063344', 'maria22@gmail.com', 'maria', 'mejia', 'civil', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205Ds', '12', 'ass@hotmail.com', 'alexnaderee', 'as', 'ING CIVIL', 'Masculino', '0', '2018-06-07 15:49:57'),
('082205E', '46063347', 'liz456@gmail.com', 'lizbeth', 'marin', 'enfermeria', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205F', '46063448', 'gh345@gmail.com', 'alejandro', 'zela', 'sistemas', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205G', '46063449', 'bris234@hotmail.com', 'brizaida', 'huillca', 'agronomia', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205H', '46063450', 'base123@gmail.com', 'pedro', 'zevillano', 'educacion', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205I', '46063451', 'marredondo@gmail.com', 'marco', 'vaca', 'sistemas', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205J', '46063452', 'scasaverde@gmail.com', 'sonia', 'casaverde', 'enfermeria', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205K', '46063453', 'scastro12@gmail.com', 'saul', 'davila', 'enfermeria', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205M', '46063454', 'smotta33@hotmail.com', 'sullians', 'motta', 'civil', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205N', '46063500', 'jaliaga11@gmail.com', 'jaime', 'vega', 'civil', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205O', '46063503', 'jpaucar90@gmail.com', 'jorge', 'pumacayo', 'contabilidad', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205P', '46063504', 'mlopez@gmail.com', 'milagros', 'pinto', 'contabilidad', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205Q', '46063506', 'gioser@hotmail.com', 'orlando', 'tapia', 'contabilidad', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205R', '46063507', 'jlimachi@gmail.com', 'jhon', 'utani', 'agronomia', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205S', '46063508', 'tchoque@gmail.com', 'tania', 'moraya', 'agronomia', 'Femenino', '0', '2014-07-30 14:39:06'),
('082205T', '46063509', 'gato22@hotmail.com', 'andres', 'limachi', 'sistemas', 'Masculino', '0', '2014-07-30 14:39:06'),
('082205U', '46063600', 'mila2289@gmail.com', 'maricruz', 'aroni', 'medio ambiente', 'Femenino', '0', '2014-07-30 14:39:06'),
('125698456K', '23434345', 'carla@hotmail.com', 'carla', 'guitierrez', 'contabilidad', 'Femenino', '0', '2014-07-30 14:39:06'),
('201210399e', '45345432', 'ass@hotmail.com', 'AS', 'as', 'ing. de sistemas e informatica', 'Masculino', '0', '2014-07-30 14:39:06'),
('201210399K', '12', 'ass@hotmail.com', 'alexnaderee', 'as', 'ING DE SISTEMAS E INFORMATICA', 'Masculino', '0', '2018-06-07 10:57:45'),
('2012393', '12345', 'ADSAS@HOTMAIL.COM', 'PRUEBA2', 'AS', 'ing. de sistemas e informatica', 'Masculino', '0', '2014-07-30 14:39:06'),
('201239368E', '123343', 'ads@hotmail.com', 'alberto', 'fernandez', 'ing. de sistemas e informatica', 'Masculino', '0', '2014-07-30 14:39:06'),
('879564213', '12345678', 'maricita@hotmail.com', 'mari', 'guitierrrez', 'ing. de sistemas e informatica', 'Femenino', '0', '2014-07-30 14:39:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `codigo_alumno` varchar(50) DEFAULT NULL,
  `fecha_Registro` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `codigo_alumno`, `fecha_Registro`) VALUES
(20, '082205D', '2018-06-02'),
(21, '201210399K', '2018-06-06'),
(22, '082205E', '2018-06-07'),
(27, '201210399K', '2018-06-07'),
(30, '201210399K', '2018-06-08'),
(31, '082205Ds', '2018-06-07'),
(32, '201210399K', '2018-06-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_sistema`
--

CREATE TABLE `menu_sistema` (
  `ID` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `IMAGEN` varchar(50) NOT NULL DEFAULT 'imagenes/not_found.png',
  `URL` varchar(50) DEFAULT NULL,
  `ORDENAMIENTO` int(11) NOT NULL DEFAULT '0',
  `ESTATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu_sistema`
--

INSERT INTO `menu_sistema` (`ID`, `DESCRIPCION`, `IMAGEN`, `URL`, `ORDENAMIENTO`, `ESTATUS`) VALUES
(1, 'Inicio', 'imagenes/Customer.png', '#', 1, 0),
(2, 'Agregar Usuarios', 'imagenes/Proveedores.png', 'usuarios/nuevo', 3, 0),
(3, 'Listar Usuarios', 'imagenes/Product.png', 'usuarios', 2, 0),
(4, 'Listar Alumnos', 'imagenes/not_found.png', 'alumnos', 4, 0),
(5, 'Agregar Alumnos', 'imagenes/not_found.png', 'alumnos/nuevo', 5, 0),
(6, 'Agregar Asistencia', 'imagenes/not_found.png', 'asistencia/nuevo', 6, 0),
(7, 'Listar Asistencia', 'imagenes/not_found.png', 'asistencia', 7, 0),
(8, 'Reportes', 'imagenes/not_found.png', 'reportes', 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisosmenu`
--

CREATE TABLE `permisosmenu` (
  `ID` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_MENU` int(11) NOT NULL,
  `ESTATUS` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisosmenu`
--

INSERT INTO `permisosmenu` (`ID`, `ID_USUARIO`, `ID_MENU`, `ESTATUS`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 0),
(5, 2, 1, 0),
(6, 2, 3, 0),
(7, 2, 2, 1),
(8, 1, 4, 0),
(9, 1, 5, 0),
(10, 1, 6, 0),
(11, 1, 7, 0),
(12, 1, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `FECHA_REGISTRO` varchar(20) NOT NULL,
  `ESTATUS` int(11) NOT NULL DEFAULT '0',
  `TIPO` varchar(20) NOT NULL DEFAULT 'Invitado',
  `PASSWORD` varchar(50) DEFAULT '123'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDOS`, `EMAIL`, `FECHA_REGISTRO`, `ESTATUS`, `TIPO`, `PASSWORD`) VALUES
(1, 'Alexander Luis Miguel', 'Valdez Flores', 'alexml_12@hotmail.com', '2014-07-30 14:39:06', 0, 'Administrador', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'alexander', 'valdez flores', 'alexmll_12@hotmail.com', '2018-06-07 15:49:25', 0, 'Invitado', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`codigo_alumno`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `menu_sistema`
--
ALTER TABLE `menu_sistema`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `permisosmenu`
--
ALTER TABLE `permisosmenu`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `menu_sistema`
--
ALTER TABLE `menu_sistema`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `permisosmenu`
--
ALTER TABLE `permisosmenu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
