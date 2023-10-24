-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 22:20:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginsystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservation`
--

CREATE TABLE `reservation` (
  `reserv_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `num_guests` int(11) NOT NULL,
  `num_tables` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `time_zone` text NOT NULL,
  `telephone` text NOT NULL,
  `comment` mediumtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `reservation`
--

INSERT INTO `reservation` (`reserv_id`, `f_name`, `l_name`, `num_guests`, `num_tables`, `rdate`, `time_zone`, `telephone`, `comment`, `reg_date`, `user_fk`) VALUES
(80, 'Cesar', 'Mendoza Loza', 5, 2, '2023-10-14', '12:30 - 14:30', '98454532', 'Mesa para compartir con amigos', '2023-10-08 23:50:45', 36),
(81, 'Pedro', 'Sosa Vargas', 1, 1, '2023-10-14', '10:30 - 12:30', '941153515', 'Almuerzo', '2023-10-08 23:51:40', 36),
(82, 'Rodrigo', 'Taqueguchi Mena', 2, 1, '2023-10-14', '14:30 - 16:30', '941535412', 'Cita con mi pareja', '2023-10-08 23:52:21', 36),
(83, 'Cristian', 'Oscco Canari', 2, 1, '2023-10-14', '12:30 - 14:30', '980544923', 'Cita con mi enamorada', '2023-10-09 00:10:30', 35),
(84, 'Jorge', 'Linares', 6, 2, '2023-10-14', '12:30 - 14:30', '911565153', 'Almuerzo ejecutivo', '2023-10-09 00:11:22', 35),
(85, 'Maria', 'Tello Vargas', 3, 1, '2023-10-14', '18:30 - 20:30', '941541567', 'Cena familiar', '2023-10-09 00:13:23', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `role_id` int(5) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `open_time` time NOT NULL DEFAULT '12:00:00',
  `close_time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `date`, `open_time`, `close_time`) VALUES
(9, '2023-10-14', '09:30:00', '21:15:00'),
(10, '2023-10-15', '09:30:00', '20:00:00'),
(11, '2023-10-16', '09:30:00', '21:15:00'),
(12, '2023-10-17', '09:30:00', '21:15:00'),
(13, '2023-10-18', '09:30:00', '21:15:00'),
(14, '2023-10-19', '09:30:00', '21:15:00'),
(15, '2023-10-20', '09:30:00', '21:15:00'),
(16, '2023-10-21', '09:30:00', '21:15:00'),
(17, '2023-10-22', '09:30:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tables`
--

CREATE TABLE `tables` (
  `tables_id` int(11) NOT NULL,
  `t_date` date NOT NULL,
  `t_tables` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tables`
--

INSERT INTO `tables` (`tables_id`, `t_date`, `t_tables`) VALUES
(11, '2023-10-14', 40),
(12, '2023-10-15', 60),
(13, '2023-10-16', 40),
(14, '2023-10-17', 40),
(15, '2023-10-18', 40),
(16, '2023-10-19', 40),
(17, '2023-10-20', 40),
(18, '2023-10-21', 40),
(20, '2023-10-22', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `uidUsers`, `emailUsers`, `pwdUsers`, `reg_date`, `role_id`) VALUES
(35, 'cristiandaos', 'cristiandaos@outlook.com', '$2y$10$AfkH1BaWY.MJSiyqyU2kHOu.OqvajgHhG5E8aRzGOtTj9jnL/kZL6', '2023-10-08 20:58:58', 2),
(36, 'test', 'test@mail.es', '$2y$10$Ghw3tLBWzexC15EPJHTqAeteAT29Tq1awdCSo/IRB3o4w8rslN38u', '2023-10-08 21:17:35', 1),
(37, 'fabri', 'fabris05@gmail.pe', '$2y$10$Q1obsMnlDA2T.aDYwUEMhOJe4RfXOVl53OsOyMlzw8rm6P7Y9cgDq', '2023-10-09 00:25:08', 2),
(38, 'leonardo', 'leonardo@mail.es', '$2y$10$fOSHu0QL1K.kUea2neWjt.C4At2t9IdFMxc/0vhIIShw1GWtC9dHC', '2023-10-09 00:28:27', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserv_id`),
  ADD KEY `users_fk` (`user_fk`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indices de la tabla `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indices de la tabla `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`tables_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tables`
--
ALTER TABLE `tables`
  MODIFY `tables_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `idusers` FOREIGN KEY (`user_fk`) REFERENCES `users` (`user_id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
