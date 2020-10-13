-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2019 a las 15:07:16
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica5`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `Codigo` varchar(11) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `tipoUsuario` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `motivo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `repercusion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `aprobado` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `recursos` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `coste` int(10) NOT NULL,
  `filosofia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `viabilidad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `efecto` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `justificacion` text COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`Codigo`, `nombre`, `email`, `telefono`, `tipoUsuario`, `motivo`, `descripcion`, `repercusion`, `fecha`, `aprobado`, `recursos`, `coste`, `filosofia`, `viabilidad`, `efecto`, `justificacion`) VALUES
('6226d4dd', 'Angela ', '', 0, 'Proveedores', 'Calidad de servicio', 'salvapantallas de caballos para todos', 'son bonitos y a mi me gustan mucho', '2019-06-13', 'Aprobada', 'mucho dinero', 1000, 'descartes', 'mucha', 'mejorara la capacidad productiva', ''),
('665452c5', 'Juan Ramon', '', 0, 'Empleado/a', 'Otros', 'Mas salario', 'Ire mas contento a trabajar', '2019-06-13', 'Pendiente', '', 0, '', '', '', ''),
('bc4233dd', 'pikachu', 'asasasa@wewe.com', 0, 'Clientes', 'Servicio', 'pintar la clase de verde', 'es color esperanza', '2019-06-13', 'Rechazada', '', 0, '', '', '', 'no me gusta esa idea'),
('c116c72c', 'Lidia', '', 0, 'Alumnos', 'Instalaciones', 'sillas comodas que no sudes en verano', 'mas comodidad', '2019-06-13', 'Rechazada', '', 0, '', '', '', 'sin presupuesto'),
('cd3c76d3', 'josue', '', 0, 'Alumnos', 'Otros', 'Separar a las chicas', 'estaria mas seguro', '2019-06-13', 'Aprobada', 'mucho dinero', 232323, 'platon', 'mucha', 'menos dinero', ''),
('d246773d', 'alejandro', '', 0, 'Clientes', 'Producto', 'que pongan manzanas', 'todos comeremos mas sano', '2019-06-13', 'Aprobada', 'mucho dinero', 232323, 'platon', 'mucha', 'ASASAS', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`, `email`, `grupo`) VALUES
(1, 'root', 'root', 'pepe@pepe.es', 1),
(2, 'fulano', 'fulano', 'fulano@fulano.es', 2),
(3, 'mengano', 'mengano', 'mengano@mengano.es', 2),
(4, 'ana', 'ana', 'ana@ana.es', 2),
(4, 'Instalaciones', 'Empleado/a', 'no me gusta el color de las parades', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
