-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2022 a las 01:19:44
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
                          `id` int(11) NOT NULL,
                          `hora` varchar(6) NOT NULL,
                          `fecha` date NOT NULL,
                          `confirmacion` varchar(2) NOT NULL,
                          `ciUsuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `hora`, `fecha`, `confirmacion`, `ciUsuario`) VALUES
                                                                              (1, '09:30', '2022-02-22', 'SI', '1111111111'),
                                                                              (12, '11:30', '2022-02-12', 'SI', '1234567890'),
                                                                              (13, '18:30', '2022-02-13', 'SI', '1803087558'),
                                                                              (14, '10:00', '2022-02-14', 'SI', '1803443850'),
                                                                              (15, '10:00', '2022-02-15', 'SI', '1803443850'),
                                                                              (16, '10:00', '2022-02-16', 'SI', '1803087558'),
                                                                              (17, '10:30', '2022-02-17', 'SI', '2222222222'),
                                                                              (18, '12:00', '2022-02-18', 'SI', '1803443850'),
                                                                              (19, '12:30', '2022-02-19', 'SI', '1803443850'),
                                                                              (20, '13:00', '2022-02-20', 'NO', '1803443850'),
                                                                              (21, '15:00', '2022-02-21', 'NO', '1850125277'),
                                                                              (22, '08:00', '2022-02-27', 'SI', '2222222222'),
                                                                              (23, '09:00', '2022-02-26', 'SI', '1111111111'),
                                                                              (24, '14:00', '2022-02-19', 'NO', '1803443850'),
                                                                              (25, '08:00', '2022-02-19', 'NO', '1803443850');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
                                `id` int(11) NOT NULL,
                                `fecha` date NOT NULL,
                                `archivo` varchar(300) CHARACTER SET utf8 NOT NULL,
                                `ciUsuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
                                   `id` int(11) NOT NULL,
                                   `fechaHistoria` date DEFAULT NULL,
                                   `cedula` varchar(10) DEFAULT NULL,
                                   `apellidoPaterno` varchar(32) DEFAULT NULL,
                                   `apellidoMaterno` varchar(32) DEFAULT NULL,
                                   `primerNombre` varchar(32) DEFAULT NULL,
                                   `segundoNombre` varchar(32) DEFAULT NULL,
                                   `direccion` varchar(120) DEFAULT NULL,
                                   `barrio` varchar(32) DEFAULT NULL,
                                   `canton` varchar(32) DEFAULT NULL,
                                   `provincia` varchar(32) DEFAULT NULL,
                                   `telefono` varchar(10) DEFAULT NULL,
                                   `fechaNacimiento` date DEFAULT NULL,
                                   `lugarNacimiento` varchar(32) DEFAULT NULL,
                                   `nacionalidad` varchar(32) DEFAULT NULL,
                                   `grupoCultural` varchar(32) DEFAULT NULL,
                                   `edad` int(11) DEFAULT NULL,
                                   `sexo` varchar(32) DEFAULT NULL,
                                   `estadoCivil` varchar(32) DEFAULT NULL,
                                   `instruccionAprobada` varchar(32) DEFAULT NULL,
                                   `ocupacion` varchar(120) DEFAULT NULL,
                                   `historiaLaboralPasada` varchar(120) DEFAULT NULL,
                                   `convulsiones` tinyint(1) DEFAULT NULL,
                                   `tosConFlemaConSangre` tinyint(1) DEFAULT NULL,
                                   `fracturas` tinyint(1) DEFAULT NULL,
                                   `cirugia` tinyint(1) DEFAULT NULL,
                                   `alergia` tinyint(1) DEFAULT NULL,
                                   `ira` tinyint(1) DEFAULT NULL,
                                   `hospitalizacion` tinyint(1) DEFAULT NULL,
                                   `otros` varchar(300) DEFAULT NULL,
                                   `hta` tinyint(1) DEFAULT NULL,
                                   `cardiopatia` tinyint(1) DEFAULT NULL,
                                   `hipotiroidismo` tinyint(1) DEFAULT NULL,
                                   `Diabetes` tinyint(1) DEFAULT NULL,
                                   `cancer` tinyint(1) DEFAULT NULL,
                                   `epilepsia` tinyint(1) DEFAULT NULL,
                                   `enfermedadPulmonar` tinyint(1) DEFAULT NULL,
                                   `detalleAntecedentesPatologicos` varchar(300) DEFAULT NULL,
                                   `menarquia` tinyint(1) DEFAULT NULL,
                                   `cm` tinyint(1) DEFAULT NULL,
                                   `disminorrea` tinyint(1) DEFAULT NULL,
                                   `fum` tinyint(1) DEFAULT NULL,
                                   `planificacionFamiliar` varchar(32) DEFAULT NULL,
                                   `papanicolao` varchar(32) DEFAULT NULL,
                                   `ecoMamario` varchar(32) DEFAULT NULL,
                                   `mamografia` varchar(32) DEFAULT NULL,
                                   `gesta` varchar(32) DEFAULT NULL,
                                   `menopausia` varchar(32) DEFAULT NULL,
                                   `aborto` varchar(32) DEFAULT NULL,
                                   `ivs` varchar(32) DEFAULT NULL,
                                   `partos` varchar(32) DEFAULT NULL,
                                   `cesareas` varchar(32) DEFAULT NULL,
                                   `hv` varchar(32) DEFAULT NULL,
                                   `hm` varchar(32) DEFAULT NULL,
                                   `detalleginecoObstetriz` varchar(300) DEFAULT NULL,
                                   `fuma` tinyint(1) DEFAULT NULL,
                                   `drogas` varchar(32) DEFAULT NULL,
                                   `alcohol` varchar(32) DEFAULT NULL,
                                   `parejasSexuales` varchar(32) DEFAULT NULL,
                                   `medicamentosHabituales` varchar(32) DEFAULT NULL,
                                   `detalleHabitosToxicos` varchar(300) DEFAULT NULL,
                                   `peso` varchar(32) DEFAULT NULL,
                                   `talla` varchar(32) DEFAULT NULL,
                                   `imc` varchar(32) DEFAULT NULL,
                                   `valnut` varchar(32) DEFAULT NULL,
                                   `ta` varchar(32) DEFAULT NULL,
                                   `fc` varchar(32) DEFAULT NULL,
                                   `fr` varchar(32) DEFAULT NULL,
                                   `sat` varchar(32) DEFAULT NULL,
                                   `detalleEnfermedadActual` text DEFAULT NULL,
                                   `detalleExamenFisico` text DEFAULT NULL,
                                   `diagnosticoClinico` text DEFAULT NULL,
                                   `tratamiento` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historiaclinica`
--

INSERT INTO `historiaclinica` (`id`, `fechaHistoria`, `cedula`, `apellidoPaterno`, `apellidoMaterno`, `primerNombre`, `segundoNombre`, `direccion`, `barrio`, `canton`, `provincia`, `telefono`, `fechaNacimiento`, `lugarNacimiento`, `nacionalidad`, `grupoCultural`, `edad`, `sexo`, `estadoCivil`, `instruccionAprobada`, `ocupacion`, `historiaLaboralPasada`, `convulsiones`, `tosConFlemaConSangre`, `fracturas`, `cirugia`, `alergia`, `ira`, `hospitalizacion`, `otros`, `hta`, `cardiopatia`, `hipotiroidismo`, `Diabetes`, `cancer`, `epilepsia`, `enfermedadPulmonar`, `detalleAntecedentesPatologicos`, `menarquia`, `cm`, `disminorrea`, `fum`, `planificacionFamiliar`, `papanicolao`, `ecoMamario`, `mamografia`, `gesta`, `menopausia`, `aborto`, `ivs`, `partos`, `cesareas`, `hv`, `hm`, `detalleginecoObstetriz`, `fuma`, `drogas`, `alcohol`, `parejasSexuales`, `medicamentosHabituales`, `detalleHabitosToxicos`, `peso`, `talla`, `imc`, `valnut`, `ta`, `fc`, `fr`, `sat`, `detalleEnfermedadActual`, `detalleExamenFisico`, `diagnosticoClinico`, `tratamiento`) VALUES
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               (1, '2022-01-01', '1111111111', 'aaa', 'aaa', 'aaa', 'aaa', 'direccion de prueba', 'la merced', 'ambato', 'tungurahua', '0999999999', '1998-01-01', 'ambato', 'ecuatoriana', 'BLANCO', 34, 'MASCULINO', 'CASADO', 'PREESCOLAR', 'uu', 'u', 1, 1, 1, 1, 1, 1, 1, 'ok', 1, 1, 1, 1, 1, 1, 1, '1', 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               (2, '2022-01-01', '2222222222', 'bbb', 'bbb', 'bbb', 'bbb', 'direccion de prueba', 'la merced', 'ambato', 'tungurahua', '0999999999', '1998-01-01', 'ambato', 'ecuatoriana', 'mestizo', 34, 'masculino', 'casado', 'u', 'uu', 'u', 1, 1, 1, 1, 1, 1, 1, 'ok', 1, 1, 1, 1, 1, 1, 1, '1', 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               (3, '2022-01-01', '3333333333', 'ccc', 'ccc', 'ccc', 'ccc', 'direccion de prueba', 'la merced', 'ambato', 'tungurahua', '0999999999', '1998-01-01', 'ambato', 'ecuatoriana', 'mestizo', 34, 'masculino', 'casado', 'u', 'uu', 'u', 1, 1, 1, 1, 1, 1, 1, 'ok', 1, 1, 1, 1, 1, 1, 1, '1', 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               (4, '2022-01-01', '4444444444', 'ddd', 'ddd', 'ddd', 'ddd', 'direccion de prueba', 'la merced', 'ambato', 'tungurahua', '0999999999', '1998-01-01', 'ambato', 'ecuatoriana', 'mestizo', 34, 'masculino', 'casado', 'u', 'uu', 'u', 1, 1, 1, 1, 1, 1, 1, 'ok', 1, 1, 1, 1, 1, 1, 1, '1', 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               (5, '2022-01-01', '5555555555', 'eee', 'eee', 'eee', 'eee', 'direccion de prueba', 'la merced', 'ambato', 'tungurahua', '0999999999', '1998-01-01', 'ambato', 'ecuatoriana', 'mestizo', 34, 'masculino', 'casado', 'u', 'uu', 'u', 1, 1, 1, 1, 1, 1, 1, 'ok', 1, 1, 1, 1, 1, 1, 1, '1', 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               (6, '2022-01-01', '6666666666', 'fff', 'fff', 'fff', 'fff', 'direccion de prueba', 'la merced', 'ambato', 'tungurahua', '0999999999', '1998-01-01', 'ambato', 'ecuatoriana', 'mestizo', 34, 'masculino', 'casado', 'u', 'uu', 'u', 1, 1, 1, 1, 1, 1, 1, 'ok', 1, 1, 1, 1, 1, 1, 1, '1', 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
                            `id` int(11) NOT NULL,
                            `fecha` date NOT NULL,
                            `archivo` varchar(300) CHARACTER SET utf8 NOT NULL,
                            `ciUsuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
                               `id` int(11) NOT NULL,
                               `fecha` date NOT NULL,
                               `archivo` varchar(300) CHARACTER SET utf8 NOT NULL,
                               `ciUsuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
                           `id` int(11) NOT NULL,
                           `fecha` date NOT NULL,
                           `archivo` varchar(300) CHARACTER SET utf8 NOT NULL,
                           `ciUsuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudesrecibidas`
--

CREATE TABLE `solicitudesrecibidas` (
                                        `id` int(11) NOT NULL,
                                        `tipoSolicitud` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
                                        `ciUsuario` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
                                        `respuesta` tinyint(1) DEFAULT NULL,
                                        `observaciones` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
                                        `nombre` varchar(32) DEFAULT NULL,
                                        `apellido` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
                           `ci` varchar(10) NOT NULL,
                           `primerNombre` varchar(32) NOT NULL,
                           `primerApellido` varchar(32) NOT NULL,
                           `email` varchar(128) NOT NULL,
                           `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `primerNombre`, `primerApellido`, `email`, `password`) VALUES
                                                                                        ('0000000000', 'AAA', 'QWERTYer', 'aaa', 'd41d8cd98f00b204e9800998ecf8427e'),
                                                                                        ('1111111111', 'KALED', 'ESPINOSA', 'ian2909@uta.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('1234567890', 'MARCELO', 'ESPINOSA', 'marceepinosa9@gmail.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('1803087558', 'SOLEDAD', 'GUTIERREZ', 'soledad@gmail.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('1803443850', 'JEANNETH', 'JURADO', 'lizsy87@gmail.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('1850125277', 'IAN', 'ESPINOSA', 'iandfds@gmal.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('1850345892', 'LUIS', 'DIAZ', 'dssdada@sdd.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('2123123124', 'sfdgdfgd', 'dsfsd', 'dsffsd@dd.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('2222222222', 'GAEL', 'ESPINOSA', 'gael@sd.cds', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('3333333333', 'TIME', 'TIME', 'timq@time.com', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('4444444444', 'QWERTY', 'QWERTY', 'qwerty@q.com', '25d55ad283aa400af464c76d713c07ad'),
                                                                                        ('6666666666', 'ZZZZZZZZZ', 'ZZZZZZZZZZZZ', 'zzzzz@zzzz.zzz', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                        ('7777777777', 'BBBBB', '', 'bbbbbb', 'd41d8cd98f00b204e9800998ecf8427e'),
                                                                                        ('9999999999', 'ALAN', '', 'wake', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudesrecibidas`
--
ALTER TABLE `solicitudesrecibidas`
    ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
    ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudesrecibidas`
--
ALTER TABLE `solicitudesrecibidas`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;