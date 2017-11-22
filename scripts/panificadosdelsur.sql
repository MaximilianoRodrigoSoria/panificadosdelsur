-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2017 a las 11:34:25
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panificadosdelsur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `estado_id`, `nombre`, `apellido`, `dni`, `telefono`, `email`) VALUES
(1, 1, 'Jesica', 'Soria', 34404040, 1233123123, 'jesi@sdadasdd.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpedidos`
--

CREATE TABLE `cpedidos` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `subestado_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cpedidos`
--

INSERT INTO `cpedidos` (`id`, `cliente_id`, `estado_id`, `subestado_id`, `producto_id`, `cantidad`, `fecha`) VALUES
(1, 1, 1, 1, 2, 2, '2017-11-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epedidos`
--

CREATE TABLE `epedidos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `subestado_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `epedidos`
--

INSERT INTO `epedidos` (`id`, `user_id`, `estado_id`, `subestado_id`, `producto_id`, `tipo_id`, `cantidad`, `fecha`) VALUES
(1, 1, 1, 1, 2, 1, 3, '2017-11-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`) VALUES
(1, 'Operativo'),
(2, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulas`
--

CREATE TABLE `formulas` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulas`
--

INSERT INTO `formulas` (`id`, `estado_id`, `nombre`, `descripcion`) VALUES
(1, 1, 'Pan', 'Pan Casero'),
(2, 1, 'Pan Lactal', 'Esteban se la come');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulas_insumos`
--

CREATE TABLE `formulas_insumos` (
  `id` int(11) NOT NULL,
  `formula_id` int(11) NOT NULL,
  `insumo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formulas_insumos`
--

INSERT INTO `formulas_insumos` (`id`, `formula_id`, `insumo_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `estado_id`, `nombre`, `stock`) VALUES
(1, 1, 'Harina', 5),
(2, 1, 'Huevos', 5),
(3, 1, 'Grasa', 5),
(4, 1, 'Cemillas de centeno', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `formula_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `detalle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `estado_id`, `formula_id`, `nombre`, `detalle`) VALUES
(2, 1, 1, 'Pan de centeno', 'Pan vendible'),
(3, 1, 1, 'Pan cacero', 'Algo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `estado_id`, `tipo`) VALUES
(1, 1, 'Administrador'),
(3, 1, 'Gerente de Produccion'),
(4, 1, 'Encargado de Produccion'),
(5, 1, 'Empleado de Ventas'),
(6, 1, 'Empleado de Produccion'),
(7, 1, 'Super Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestado`
--

CREATE TABLE `subestado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subestado`
--

INSERT INTO `subestado` (`id`, `nombre`, `estado_id`) VALUES
(1, 'Pendiente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre`, `estado_id`) VALUES
(1, 'Produccion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `dni` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `estado_id`, `username`, `password`, `nombre`, `apellido`, `dni`, `telefono`, `email`) VALUES
(1, 1, 1, 'soria', '$2a$10$igdZ/2Yjs/fJ3SnZXLYSQOYVUKvuiXygXvhYjh3Ku1YC89sFCIYGC', 'Maximiliano Rodrigo', 'Soria', '34080910', '444455555', 'miemail@gmail.com'),
(2, 1, 1, 'Esteban', '$2a$10$lGRe2BTPS7N2FGtCVu/3sO3nwtwsDE3vyblvtD8u8XP.C66MsjIia', 'Esteban', 'Slobodianik', '33333333', '1111212', '11111@gmail.com'),
(3, 1, 1, 'elpotro', '$2a$10$Ov7SDg56oys6Uy6sl65qEeA8xrNMR7rwo85cjpHeEF8j17xRIgg/u', 'Maximiliano', 'Soria', '2242344', 'werwerwe', 'wqeqweqw@gmail.com'),
(4, 3, 1, 'GerenteDeProduccion', '$2a$10$QVnLuj.6gv8Fhy/73rclo.xznqpop6IQH5cONWIgqdnKEicUS69dG', 'Marcos', 'Polo', '1111111111', '444444444', 'marcospolo@gmail.com'),
(5, 4, 1, 'EncargadoDeProduccion', '$2a$10$KlAUTdrCoj68ryMMSaDoqeejkbSX/2fLi7m6qExw1hPS.sjR72VMW', 'Andrea', 'Villanova', '121121212', '21321312313', 'villanov@gmail.com'),
(6, 5, 1, 'EmpleadoDeVentas', '$2a$10$8RkbGjGDmCPpuqT1jyi99O3j6beJaAZnCLl/rn8RPxOZ4YdF.Q1d6', 'Camilia', 'Temira', '231231', '213123123', 'eqweqwe@asasdasd.com'),
(7, 6, 1, 'EmpleadoDeProduccion', '$2a$10$Ppqrzu0AN/nrIUQ6TNpHceUWg9Y3C7P9cg.84zWYn6cr1W6pqizrS', 'Armando', 'Barreda', '12121212212', '1212', 'asadasd@gmail.com'),
(8, 7, 1, 'SuperAdmin', '$2a$10$6BtgNGQlL8wSNPk5snPZxuGhw1RKnvFS64OK0zVjQUMCi1PFJ7gcO', 'Goku', 'SS3', '12312312', '213213', 'asdasd@sdasdas.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cpedidos`
--
ALTER TABLE `cpedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `epedidos`
--
ALTER TABLE `epedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formulas`
--
ALTER TABLE `formulas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formulas_insumos`
--
ALTER TABLE `formulas_insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subestado`
--
ALTER TABLE `subestado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cpedidos`
--
ALTER TABLE `cpedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `epedidos`
--
ALTER TABLE `epedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `formulas`
--
ALTER TABLE `formulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `formulas_insumos`
--
ALTER TABLE `formulas_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `subestado`
--
ALTER TABLE `subestado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
