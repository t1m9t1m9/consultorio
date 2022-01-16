-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-01-2022 a las 22:27:58
-- Versión del servidor: 8.0.27-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
                          `id` int NOT NULL,
                          `hora` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
                          `fecha` date NOT NULL,
                          `confirmacion` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
                          `ciUsuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `hora`, `fecha`, `confirmacion`, `ciUsuario`) VALUES
                                                                              (1, '14:00', '2021-05-17', 'si', '1803087558'),
                                                                              (2, '8:00', '2022-01-04', 'si', '1803443850'),
                                                                              (3, '10:00', '2022-01-08', 'si', '1803443850');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
                                `id` int NOT NULL,
                                `hora` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
                                `fecha` date NOT NULL,
                                `archivo` longblob NOT NULL,
                                `ciUsuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
                            `id` int NOT NULL,
                            `hora` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
                            `fecha` date NOT NULL,
                            `archivo` longblob NOT NULL,
                            `ciUsuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
                               `id` int NOT NULL,
                               `hora` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
                               `fecha` date NOT NULL,
                               `archivo` longblob NOT NULL,
                               `ciUsuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
                           `id` int NOT NULL,
                           `hora` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
                           `fecha` date NOT NULL,
                           `archivo` longblob NOT NULL,
                           `ciUsuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
                           `ci` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
                           `primerNombre` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `segundoNombre` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `primerApellido` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `segundoApellido` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `edad` int NOT NULL,
                           `sexo` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
                           `etnia` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
                           `celular` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
                           `direccion` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
                           `pregunta1` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `pregunta2` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `pregunta3` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
                           `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `edad`, `sexo`, `etnia`, `email`, `celular`, `direccion`, `pregunta1`, `pregunta2`, `pregunta3`, `password`) VALUES
                                                                                                                                                                                                                    ('1803087558', 'MARIA', 'SOLEDAD', 'GUTIERREZ', 'IZA', 34, 'MASCULINO', 'MESTIZO', 'marceespinosa9@gmail.com', '0994036590', 'COLLAY Y EL ARENAL', 'AMBATO', 'NATASHA', 'ILUSIONES', '0aa75ab97c26a79526cee8ae49ab4b4e'),
                                                                                                                                                                                                                    ('1803443850', 'JEANNETH', 'ELIZABETH', 'JURADO', 'VILLACIS', 34, 'FEMENINO', 'MESTIZO', 'lizsy87@gmail.com', '0994036590', 'COLLAY Y EL ARENAL', 'AMBATO', 'LLUVIA', 'ILUSIONES', '0aa75ab97c26a79526cee8ae49ab4b4e');

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


ALTER TABLE `agenda`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historia`
--
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;