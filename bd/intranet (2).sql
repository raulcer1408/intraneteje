-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2023 a las 14:11:20
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diacalculo`
--

CREATE TABLE `diacalculo` (
  `iddiacalculo` int(11) NOT NULL,
  `DiaInicioCalculo` int(11) DEFAULT NULL,
  `DiaFinCalculo` int(11) DEFAULT NULL,
  `Tolerancia` int(11) DEFAULT NULL,
  `MinPerPar` int(11) DEFAULT NULL,
  `MinAtrasos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `diacalculo`
--

INSERT INTO `diacalculo` (`iddiacalculo`, `DiaInicioCalculo`, `DiaFinCalculo`, `Tolerancia`, `MinPerPar`, `MinAtrasos`) VALUES
(1, 16, 15, 5, 120, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internospersonal`
--

CREATE TABLE `internospersonal` (
  `idinternos` int(11) NOT NULL,
  `NombreCompleto` varchar(200) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `ci` int(11) DEFAULT NULL,
  `Interno` int(11) DEFAULT NULL,
  `Celular` int(11) DEFAULT NULL,
  `TelefonoCasa` int(11) DEFAULT NULL,
  `Oficina` varchar(150) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `Cargo` varchar(150) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `CorreoInstitucional` varchar(150) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `CorreoPersonal` varchar(150) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `internospersonal`
--

INSERT INTO `internospersonal` (`idinternos`, `NombreCompleto`, `ci`, `Interno`, `Celular`, `TelefonoCasa`, `Oficina`, `Cargo`, `CorreoInstitucional`, `CorreoPersonal`, `status`) VALUES
(1, 'Dr. Sergio Romelio Villarroel', 4631549, 103, 72863765, NULL, 'DIRECCION GENERAL', 'DIRECTOR GENERAL', 'sergio.villarroel@eje.gob.bo', 'seroviva@hotmail.com', 1),
(2, 'Dr. Ivan Carballo Medina', 5663419, 100, 76118585, NULL, 'DIRECCION GENERAL', 'ASESOR JURIDICO', 'ivan.carballo@eje.gob.bo', 'ivancarballom@gmail.com', 1),
(3, 'Lic. Sonia Iglesias Fernandez', NULL, 205, 72869383, NULL, 'DIRECCION GENERAL', 'AUDITORA INTERNO', 'sonia.iglesias@eje.gob.bo', 'soniaiglesiasfer@gmail.com', 1),
(4, 'Lic. Lizbeth Anibarro', 5631631, 200, 70332017, NULL, 'DIRECCION GENERAL', 'COMUNICADOR SOCIAL Y RESPONSABLE DE DISEÑO', 'lizbeth.anibarro@eje.gob.bo', 'lizanibarro@gmail.com', 0),
(5, 'Ing. Rafael Poppe Aviles', 1147871, 104, 79301362, NULL, 'DIRECCION GENERAL', 'PROFESIONAL RESPONSABLE DE ADMINISTRACION DE SISTEMAS', 'rafael.poppe@eje.gob.bo', 'rafaelpoppe@gmail.com', 0),
(6, 'Abg. Paola Marcela Lopez', 5642532, 102, 75431709, NULL, 'DIRECCION GENERAL', 'SECRETARIO DE DIRECCION', 'marcela.lopez@eje.gob.bo', 'paolamarcelalopez@hotmail.cm', 0),
(7, 'Sr. Ismael Quilca Anarata', 10325109, NULL, 72886238, NULL, 'DIRECCION GENERAL', 'CHOFER', 'ismael.quillca@eje.gob.bo', 'ismaelquillca1@gmail.com', 1),
(8, 'Dr. Carlos Javier Ramos Miranda', 1117749, 217, 77119000, NULL, 'UNIDAD DE FORMACION', 'JEFE DE LA UNIDAD DE FORMACION Y ESPECIALIZACION', 'carlos.ramos@eje.gob.bo', 'ramosabog@hotmail.com', 0),
(9, 'Dr. Luis Fernando Cossio', 4038029, 132, 68620378, NULL, 'UNIDAD DE FORMACION', 'DOCENTE COORDINADOR ACADEMICO DE FORMACION I', 'luis.cossio@eje.gob.bo', 'lufercovi@hotmail.com', 1),
(10, 'Dr. Hugo Nava Aillon', 7561077, 120, 77114666, NULL, 'UNIDAD DE FORMACION', 'DOCENTE COORDINADOR ACADEMICO DE FORMACION II', 'hugo.nava@eje.gob.bo', 'hugojus4@hotmail.com', 1),
(11, 'Lic. Graciela Mamani Torrez', 0, 213, 70310727, NULL, 'UNIDAD DE FORMACION', 'PEDAGOGA UNIDAD DE FORMACION', 'graciela.mamani@eje.gob.bo', '0', 0),
(12, 'Ing. Milton Mora Saldaña', 3643409, 215, 71152517, NULL, 'UNIDAD DE FORMACION', 'PROFESIONAL DE SISTEMAS INFORMATICOS Y PLATAFORMA DE FORMACIÓN', 'milton.mora@eje.gob.bo', 'milton.mora.s@gmail.com', 1),
(13, 'Sra. Ana Maria Michel', 1387207, 105, 72861112, NULL, 'UNIDAD DE FORMACION', 'ASISTENTE DE FORMACION Y ESPECIALIZACIÓN', 'ana.michel@eje.gob.bo', 'anitamarmies@hotmail.com', 0),
(14, 'Dr. Jose Humberto Flores Flores', 4050318, 206, 76246444, NULL, 'UNIDAD DE CAPACITACIÓN', 'JEFE UNIDAD DE CAPACITACIÓN', 'joseh.flores@eje.gob.bo', 'jotah45@hotmail.es', 0),
(15, 'Dra. Mirna Fanny Mendia Ledezma', 3102871, 202, 78678038, NULL, 'UNIDAD DE CAPACITACIÓN', 'DOCENTE CORDINADOR ACADEMICO AREA AGROAMBIENTAL', 'mirna.mendia@eje.gob.bo', 'mirfamale@hotmail.com', 1),
(16, 'Dra. Marina Duran Miranda', 1093424, 207, 76123832, NULL, 'UNIDAD DE CAPACITACIÓN', 'DOCENTE CORDINADOR ACADEMICO AREA PENAL VIOLENCIA DE GENERO', 'marina.duran@eje.gob.bo', 'marina_du_mi67@hotmail.com', 1),
(17, 'Dra.Ivanna Jadue Jimenez', 3637639, 203, 77114200, NULL, 'UNIDAD DE CAPACITACIÓN', 'DOCENTE CORDINADOR ACADEMICO AREA NIÑEZ Y ADOLECENCIA', 'ivanna.jadue@eje.gob.bo', 'ivanajadue@yahoo.com', 1),
(18, 'Dra. Silvia Suarez Rodriguez', 1932312, 111, 70325307, NULL, 'UNIDAD DE CAPACITACIÓN', 'DOCENTE CORDINADOR ACADEMICO AREA DERECHOS HUMANOS', 'silvia.suarez@eje.gob.bo', 'arieugenia@hotmail.com', 1),
(19, 'Lic. Ana Maria Zarate Rivas', 3654618, 225, 68661361, NULL, 'UNIDAD DE CAPACITACIÓN', 'PEDAGOGA DE CAPACITACIÓN', 'ana.zarate@eje.gob.bo', 'marita_zr@yahoo.com', 1),
(20, 'Ing. Alan Vasquez Balderas', 5670458, 216, 72873129, NULL, 'UNIDAD DE CAPACITACIÓN', 'PROFESIONAL DE SISTEMAS INFORMATICOS Y PLATAFORMA DE CAPACITACIÓN', 'alan.vasquez@eje.gob.bo', 'alanvba@gmail.com', 1),
(21, 'Abg. Erika Montesinos', 5035091, 106, 78683731, NULL, 'UNIDAD DE CAPACITACIÓN', 'ASISTENTE DE CAPACITACIÓN', 'erika.montesinos@eje.gob.bo', 'erika.montesinosibanez@gmail.com', 1),
(22, 'Lic. Maria Gualy Rocha Nuñez', 3896016, 122, 67601313, NULL, 'UNIDAD ADMINISTRATIVA', 'JEFE UNIDAD ADMINISTRATIVA Y FINANCIERA', 'gualy.rocha@eje.gob.bo', 'lyron1@hotmail.com', 0),
(23, 'Lic. Daniel Junior Siles Chavez', 3512578, 210, 76111103, NULL, 'UNIDAD ADMINISTRATIVA', 'PROFESIONAL ADMINISTRACION Y RECURSOS HUMANOS', 'daniel.siles@eje.gob.bo', 'danieltigre_10@hotmail.com', 1),
(24, 'Lic. Jhonny Gabriel Pairumani', 3423818, 128, 75288610, NULL, 'UNIDAD ADMINISTRATIVA', 'PROFESIONAL PRESUPUESTOS Y TESORERIA', 'jhonny.pairumani@eje.gob.bo', 'pairujoni@gmail.com', 1),
(25, 'Lic. Roger Villalpando Amonzabel', 1425301, 107, 71173162, NULL, 'UNIDAD ADMINISTRATIVA', 'CONTADOR GENERAL', 'roger.villalpando@eje.gob.bo', 'roger.armando.v@gmail.com', 1),
(26, 'Lic. Antoni Llorenty Herrera', 5631874, 123, 74633388, NULL, 'UNIDAD ADMINISTRATIVA', 'ENCARGADO DE ALMACENES, ACTIVOS FIJOS Y BIBLIOTECA', 'antoni.llorenty@eje.gob.bo', 'antonio.llorentyherrera@gmail.com', 1),
(27, 'Sra. Dabeyba paz', 3654110, 101, 73410911, NULL, 'UNIDAD ADMINISTRATIVA', 'SECRETARIA ASISTENTE RESPONSABLE DE ARCHIVO', 'daveyba.paz@eje.gob.bo', 'daveybapaz@gmail.com', 1),
(28, 'Sr. Marco Salinas E.', 4197430, 110, 68300731, NULL, 'UNIDAD ADMINISTRATIVA', 'AUXILIAR DE MENSAJERIA Y MANTENIMIENTO', 'marco.salinas@eje.gob.bo', 'scofil91@gmail.com', 1),
(29, 'Lic. Wilmer Davila Vidal', 5231031, 122, 70357608, NULL, 'UNIDAD ADMINISTRATIVA', 'JEFE UNIDAD ADMINISTRATIVA Y FINANCIERA', 'wilmer.davila@eje.gob.bo', '', 1),
(30, 'Dr. Roberto Iborg Valdiviezo Salazar', 4087768, 206, 72884965, NULL, 'UNIDAD DE CAPACITACIÓN', 'JEFE UNIDAD DE CAPACITACIÓN', 'roberto.valdiviezo@eje.gob.bo', 'rivs979@gmail.com', 1),
(31, 'Lic. Dayna lizeth Bolaños Llanos', 8552887, 200, 79442857, NULL, 'DIRECCION GENERAL', 'COMUNICADOR SOCIAL Y RESPONSABLE DE DISEÑO', 'dayna.bolanos@eje.gob.bo', 'daynitus@gmail.com', 1),
(32, 'Silvia Paniagua Navas', 1099830, 102, 72860831, NULL, 'DIRECCION GENERAL', 'SECRETARIO DE DIRECCION', 'silvia.paniagua@eje.gob.bo', '', 1),
(33, 'Dra. Janeth Quiroga Aparicio', 1094977, 217, 72754581, NULL, 'UNIDAD DE FORMACION', 'JEFA DE LA UNIDAD DE FORMACION Y ESPECIALIZACION', 'janeth.quiroga@eje.gob.bo', '', 1),
(34, 'Lic. Maria Grace Carmiña Paredes Rodriguez', 3656721, 213, 76123604, NULL, 'UNIDAD DE FORMACION', 'PEDAGOGA UNIDAD DE FORMACION', 'grace.paredes@eje.gob.bo', '', 1),
(35, 'Dra. Naid Neme Amusquivar', 5237631, 222, 71764712, NULL, 'UNIDAD DE CAPACITACIÓN', 'DOCENTE CORDINADOR ACADEMICO', 'naid.neme@eje.gob.bo', 'naidneme@gmail.com', 1),
(36, 'Dra. Sandra Cristina Flores Azurduy', 6591516, 222, 73477046, NULL, 'UNIDAD DE CAPACITACIÓN', 'DOCENTE CORDINADOR ACADEMICO', 'sandra.flores@eje.gob.bo', 'crissandypunto@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idmodulo` bigint(20) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
(1, 'Dashboard', 'Dashboard', 1),
(2, 'Usuarios', 'Usuarios del sistema', 1),
(3, 'RRHH Consultas', 'Modulos para personal', 1),
(4, 'RRHH Impresion', 'Modulos para personal', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idpermiso` bigint(20) NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int(11) NOT NULL DEFAULT 0,
  `w` int(11) NOT NULL DEFAULT 0,
  `u` int(11) NOT NULL DEFAULT 0,
  `d` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
(9, 2, 1, 1, 0, 0, 0),
(10, 2, 2, 1, 0, 0, 0),
(23, 1, 1, 1, 1, 1, 1),
(24, 1, 2, 1, 1, 1, 1),
(25, 1, 3, 1, 1, 1, 1),
(26, 1, 4, 1, 0, 0, 0),
(27, 5, 1, 1, 0, 0, 0),
(28, 5, 2, 0, 0, 0, 0),
(29, 5, 3, 1, 0, 0, 0),
(30, 5, 4, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` bigint(20) NOT NULL,
  `identificacion` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombres` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombrefiscal` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccionfiscal` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `nit`, `nombrefiscal`, `direccionfiscal`, `token`, `rolid`, `datecreated`, `status`) VALUES
(1, '1147871', 'Rafael', 'Poppe Aviles', 79301362, 'admin@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '1147871', 'Rafael Hugo Poppe Aviles', 'Ciudad de Sucre1', '', 1, '2021-09-07 02:28:53', 0),
(2, '123456', 'Jhonatan Rafael', 'Poppe Tamayo', 123456, 'jhonatan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '', '', '', 5, '2021-09-07 02:31:07', 0),
(3, '3266629', 'Marisol', 'Tamayo Mendieta', 75435669, 'marisoltamayo@gmail.com', 'e63cfba9ddc3a1d7726291352a313b0fb3280a8c26ae6b253d049b1ca19f4dba', '', '', '', '', 2, '2021-09-08 01:35:00', 0),
(4, '3512578', 'DANIEL JUNIOR', 'SILES CHAVEZ', 76111103, 'daniel.siles@eje.gob.bo', 'dbad63177a8ffee8c617731dd77239d5c5d271c3577335c6bdd5e6fbda177ce4', '', '', '', '', 1, '2021-07-28 15:53:14', 1),
(5, '5631631', 'LIZBETH VANESA', 'ANIBARRO MUÑOZ', 70332017, 'lizbeth.anibarro@eje.gob.bo', '1122a3ffb6cdde9a148f32774c9576024cd108cbf1f2781782acc6cc5e77436f', '', '', '', '', 5, '2021-10-21 14:20:18', 0),
(6, '4631549', 'SERGIO ROMELIO', 'VILLARROEL BARAHONA', 72863765, 'sergio.villarroel@eje.gob.bo', '813c89443a52cd958836c45c790a87f5bc0aef807461fa0483bc8a2e3a243d39', '', '', '', '', 5, '2021-10-22 11:44:24', 1),
(7, '5663419', 'IVAN JUSTO', 'CARBALLO MEDINA', 76118585, 'ivan.carballo@eje.gob.bo', '8757c78cb2658780361979dd4a1bfba22ec7fe8cfae80fe8377f952d49c9c60a', '', '', '', '', 5, '2021-10-22 11:47:00', 1),
(8, '5642532', 'PAOLA MARCELA', 'LOPEZ MEDINA', 75431709, 'marcela.lopez@eje.gob.bo', 'e723241be254179960d01f5045f1aa95e8ecb3cb4006b4be0fadeb817d26276e', '', '', '', '', 5, '2021-10-22 11:51:31', 0),
(9, '10325109', 'ISMAEL', 'QUILLCA ANARATA', 72886238, 'ismael.quillca@eje.gob.bo', '57dcda538922175b1a92ccb82b983503a995ef50c4b1788f7f7a48a108067d96', '', '', '', '', 5, '2021-10-22 11:53:09', 1),
(10, '1117749', 'CARLOS JAVIER', 'RAMOS MIRANDA', 77119000, 'carlos.ramos@eje.gob.bo', 'a928ee3cf1deb9a1e313ea9b0a23a5697db47f4d97595fe60680933c4e68260e', '', '', '', '', 5, '2021-10-22 11:54:41', 0),
(11, '4038029', 'LUIS FERNANDO', 'COSSIO VILLEGAS', 68620378, 'luis.cossio@eje.gob.bo', '4aee9cc1348d50227afba1c5fd46c709340807aabfc8790dfb7d02b9d8e25e03', '', '', '', '', 5, '2021-10-22 11:55:58', 0),
(12, '7561077', 'HUGO ANTONIO', 'NAVA AILLON', 77114666, 'hugo.nava@eje.gob.bo', '85dd5136714a9e97dcb3b119310026ee21ff326e85e674470bc3231ab1dc5679', '', '', '', '', 5, '2021-10-22 11:57:27', 0),
(13, '3651000', 'GRACIELA', 'MAMANI TORRES', 70310727, 'graciela.mamani@eje.gob.bo', '41c58635398581b0bb3f2161279e93879a01791a9c4b132584e519dcaddf074b', '', '', '', '', 5, '2021-10-22 11:59:52', 0),
(14, '3643409', 'MILTON ROLANDO', 'MORA SALDAÑA', 71152517, 'milton.mora@eje.gob.bo', '9e97f1ca2a8890c7a7727fe6675099ca', '', '', '', '46e3c4fcd8af6b18e925-7873ae87ff3ad91087a2-f035b5d7daaff60d9cec-90b6376b7525dbcfa9eb', 1, '2021-10-22 12:01:24', 1),
(15, '1387207', 'ANA MARIA', 'MICHEL ESPINOZA', 72861112, 'ana.michel@eje.gob.bo', '29bd47d8459edfae44b896b888649b069c8def65bb1b37312a4fe4c9bae22ee6', '', '', '', '', 5, '2021-10-22 12:03:31', 0),
(16, '4050318', 'JOSE HUMBERTO', 'FLORES FLORES', 76246444, 'joseh.flores@eje.gob.bo', '3a3574e16cea48eb9bb1b710aee37fbb40a434d888be22a4db8094aa3cbcfbdd', '', '', '', '', 5, '2021-10-22 12:05:11', 0),
(17, '3102871', 'MIRNA FANNY', 'MENDIA LEDEZMA', 78678038, 'mirna.mendia@eje.gob.bo', '6929c7cff9180fa21b85a4f423acc8fce328b6837c241483d486ff58a016ec41', '', '', '', '', 5, '2021-10-22 12:07:38', 1),
(18, '1093424', 'MARINA', 'DURAN MIRANDA', 76123832, 'marina.duran@eje.gob.bo', '0b6789a59d4696d902c04062f68ac58e0cf4ca19af37a170c45642a9cb2cf0a9', '', '', '', '', 5, '2021-10-22 12:09:24', 1),
(19, '3637639', 'IVANNA', 'JADUE JIMENEZ', 77114200, 'ivanna.jadue@eje.gob.bo', '7e87d13db0c1cad07281df1137a5d4b106052496b65c0fc2404f3cf5526bf9a3', '', '', '', '24dae7f07bbe5ebc0048-013675c742932d41485a-07414bb57971ab935239-3c840131ef486fa8c292', 5, '2021-10-22 12:11:29', 1),
(20, '1932312', 'SILVIA EUGENIA', 'SUAREZ RODRIGUEZ', 70325307, 'silvia.suarez@eje.gob.bo', '7fe97c46d9914b4b5cdbd220f0e962762bf2f064982b21b90fcb7c3acd7716a6', '', '', '', '', 5, '2021-10-22 12:13:11', 1),
(21, '3654618', 'ANA MARIA', 'ZARATE RIVAS', 68661361, 'ana.zarate@eje.gob.bo', '29fab9cb22cb9bf2231556f277de11820eb7f2fd5d3fef2a87c239b6f2988bb4', '', '', '', '', 5, '2021-10-22 12:15:17', 1),
(22, '5670458', 'ALAN', 'VASQUEZ BALDERAS', 72873129, 'alan.vasquez@eje.gob.bo', '769a5a185dbe10dcd049bbe114503e6511330732647e9824f098a9e1b9628a8b', '', '', '', '', 1, '2021-10-22 12:17:47', 1),
(23, '5035091', 'ERIKA', 'MONTESINOS IBAÑEZ', 78683731, 'erika.montesinos@eje.gob.bo', '6f2e64ee99bd8e9e3ce31763effe161e0b3b0a0a7d78b27bf881551a926c44a3', '', '', '', '', 5, '2021-10-22 12:19:31', 1),
(24, '3896016', 'MARIA GUALY', 'ROCHA NUÑEZ', 67601313, 'gualy.rocha@eje.gob.bo', '3fe19c4e6ab03d38135f835a3793a823e33bb5d1a7b69b4c9a15c050688d16e5', '', '', '', '', 5, '2021-10-22 12:23:44', 0),
(25, '3423818', 'JOHNNY', 'GABRIEL PAIRUMANI', 75288610, 'jhonny.pairumani@eje.gob.bo', '352fed20e67b3ab26cd737fdfb9ea965e1a2d6a91e2f90e44c8aafabfb16bb55', '', '', '', '', 5, '2021-10-22 12:28:38', 0),
(26, '1425301', 'ROGER ARMANDO', 'VILLALPANDO AMONZABEL', 71173162, 'roger.villalpando@eje.gob.bo', 'bc4a82414192bd92636225d71a8ba7a236098afbb6e743f633a8e49cca6f2a8b', '', '', '', '', 5, '2021-10-22 12:30:31', 1),
(27, '5631874', 'ANTONIO', 'LLORENTY HERRERA', 74633388, 'antonio.llorenty@eje.gob.bo', '3f12e10e190989c219923d4dca736924742827ded02934fcb658b49ee7ef3c36', '', '', '', '', 5, '2021-10-22 12:32:02', 1),
(28, '3654110', 'DAVEYBA', 'PAZ', 73410911, 'daveyba.paz@eje.gob.bo', 'c55966976c751f23b08260f0b26517cb66aec006e8d5cf58b5bd913f57956856', '', '', '', '', 5, '2021-10-22 12:33:03', 1),
(29, '4197430', 'MARCO ANTONIO', 'SALINAS ESTEVEZ', 68300731, 'marco.salinas@eje.gob.bo', 'b681443ddfe74bedd4f4b671190d951a23ca087955fa6d766f4380e6691487c5', '', '', '', '', 5, '2021-10-22 12:33:56', 0),
(30, '4094505', 'SONIA BLANCA', 'IGLESIAS FERNANDEZ', 72869383, 'sonia.iglesias@eje.gob.bo', '01929ce122d499571460d584d1bd9815c4c8fc42386d98cf29b00c74839c9447', '', '', '', '', 5, '2022-02-02 10:16:39', 0),
(31, '5237631', 'NAID', 'NEME AMUSQUIVAR', 71764712, 'naid.neme@eje.gob.bo', '14bf7dab41f089eeb61f03cafb4ae0c187bd459cedd6d6fb5f303546da49dfa1', '', '', '', '', 5, '2022-07-15 12:20:02', 1),
(32, '6591516', 'SANDRA', 'FLORES AZURDUY', 73477046, 'sandra.flores@eje.gob.bo', 'e1620c6a9dfb65dc1cc9819ebee7fae13a5deb09c1b88410b3544518ca43af72', '', '', '', '', 5, '2022-08-11 07:30:19', 1),
(33, '1099830', 'SILVIA', 'PANIAGUA NAVAS', 72860831, 'silvia.paniagua@eje.gob.bo', '48e40d368036a4f8f7b08c09dba671c76a977388d0bc592f8f8d5b3b7e967a97', '', '', '', '', 5, '2022-08-12 11:25:28', 1),
(34, '4087768', 'ROBERTO IBORG', 'VALDIVIEZO SALAZAR', 72884965, 'roberto.valdiviezo@eje.gob.bo', '6c5aac4a70ef01775d4189d6a06740fe26964777272e98f916885a4caa103926', '', '', '', '', 5, '2022-08-12 12:11:53', 0),
(35, '1094977', 'JANETH FERNANDA', 'QUIROGA APARICIO', 72754581, 'janeth.quiroga@eje.gob.bo', 'c57ad5deeaaadddcfc6ed2931ebbd6e5f66ba630a7cbb8b316b889c25aab904e', '', '', '', '05549d96f33eda4fa105-9b3345c838364de1aaed-07b5d505d1dea47bb31f-e1d642e290ca1f36bc97', 5, '2022-08-12 12:24:26', 0),
(36, '8552887', 'DAYNA LIZETH', 'BOLAÑOS LLANOS', 79442857, 'dayna.bolanos@eje.gob.bo', '549363b63db1f8cbe6141e6e12deb189d2152c5db6e68833e25f4a00b5c5852d', '', '', '', '', 5, '2022-08-12 12:25:35', 1),
(37, '5231031', 'WILMER', 'DAVILA VIDAL', 70357608, 'wilmer.davila@eje.gob.bo', 'ddf6901d941b38fc9ee51dc183ac9c170283f43c54622ca6d14b72e2e98485f6', '', '', '', '', 5, '2022-09-05 09:22:59', 1),
(38, '3656721', 'MARIA GRACE', 'PAREDES RODRIGUEZ', 76123604, 'grace.paredes@eje.gob.bo', 'cde1ac3844b7cd54c6437b2c7fab8526aa9d30a98922b8b41ee8c29713f75820', '', '', '', '', 5, '2022-09-05 09:36:45', 0),
(39, '2707209', 'MIGUEL ANGEL', 'RAMIREZ CAMACHO', 69990712, 'miguel.ramirez@eje.gob.bo', 'ec1dadef012d273269d158149289a8f9ba9c8c6bea3e15000fece4ad63cf8816', '', '', '', '', 2, '2022-10-18 11:39:07', 0),
(40, '1878106', 'JUAN CARLOS', 'OROZCO ALFARO', 74578718, 'juan.orozco@eje.gob.bo', '71d81038d9033623c96f166155d45d02e064b8f8a765bc7820c32eb2b352a4c1', '', '', '', '', 5, '2022-12-19 14:16:57', 0),
(41, '4470869', 'ROGER FRED', 'ENCINAS SHOSTER', 70341332, 'roger.encinas@eje.gob.bo', 'e8d17fafd5e1535095ad184a9c90d1121cad3219e1176ce09a3aed9fbffd6349', '', '', '', '', 5, '2022-12-19 14:19:24', 0),
(42, '7537665', 'GUSTAVO', 'SANDOVAL SANCHEZ', 70317918, 'gustavo.sandoval@eje.gob.bo', 'b5d99bf2e9753c7b97ec7a477b2a5f8fd898738145b42103d5fe278fe0211fad', '', '', '', '', 1, '2023-04-13 10:05:07', 1),
(43, '7461011', 'RODRIGO', 'MOLINA VARON', 68640393, 'rodrigo.molina@eje.gob.bo', 'da3ea449b382c70d3abf683429e212dc3ba671115ebd895180d8da9a5fe0a559', '', '', '', '5379287f6c3be78586e2-c138a40fc89b80bb4927-2e10dcfdf8a8b3732460-b91ce53ff829f9894367', 5, '2023-04-13 10:43:17', 1),
(44, '10388480', 'DANNA ALEJANDRA', 'PALACIOS PRUDENCIO', 60325877, 'danna.palacios@eje.gob.bo', 'c034608562590d2be8b8854fa2e8714e77aa9d82c321a6041cae1e05c106e87e', '', '', '', '', 5, '2023-04-13 10:47:37', 1),
(45, '5667105', 'MIGUEL ANGEL', 'ALIAGA CUIZA', 75760430, 'miguel.aliaga@eje.gob.bo', 'f22b664384cc667d7b3f928b2b81444a1d5b81b3522882ca7ed92aae3bebfd19', '', '', '', '', 5, '2023-06-27 09:29:00', 1),
(46, '3650784', 'PATRICIA ERIKA', 'VARGAS REYNOLDS', 73477551, 'patricia.vargas@eje.gob.bo', '2228a0fbbd0db274bc56c6fd87036989eb46278e84f70f36f898e11cb082ed0e', '', '', '', '', 5, '2023-07-05 11:58:44', 1),
(47, '3791894', 'MARCELO AMERICO', 'CESPEDES CUELLAR', 72745507, 'marcelo.cespedes@eje.gob.bo', '8ea05e21161f5ea40be9ae1db645ab2379cb7f414d304dc2fc00087964b4301e', '', '', '', '', 5, '2023-07-06 09:47:37', 1),
(48, '5693125', 'LUIS', 'CHACOLLA HUANCA', 60326675, 'luis.chacolla@eje.gob.bo', 'c7d33157e017c52f3adcbd497d0dec5f46aefd82d53de51e0fd9c774a98e034b', '', '', '', '', 5, '2023-07-07 11:29:58', 1),
(49, '5695126', 'DORA ELENA', 'GARDEAZABAL OSSIO', 72852642, 'elena.gardeazabal@eje.gob.bo', 'ee19e0117ce54842a1785f886446548cb2b59ddc637290ad0b9bd7440ff60a08', '', '', '', '', 5, '2023-08-17 14:11:30', 1),
(50, '6700155', 'RAUL MANUEL', 'CERVANTES', 72433105, 'raul.cervantes@eje.gob.bo', '3da36304c2ad08ed88aebf2a50dbdb9e0f1efdcaf6f67a6402ddce02d7aa26cf', '', '', '', '', 5, '2023-09-13 14:29:54', 1),
(51, '5682745', 'DANITSA', 'ALCOBA QUIROGA', 75763656, 'danitsa.alcoba@eje.gob.bo', '925f2bb9027613189b1d71e6a2d33670a54646d5c4b564cb03e58e0e570d129b', '', '', '', '', 5, '2023-09-13 14:32:49', 1),
(52, '464506', 'JACQUELINE VERONICA', 'HESSE DELOS RIOS', 71866139, 'hessedelosrios@gmail.com', '56d49d6f6a3a739b8a6785dd4638220c6901bf9e3f1d490260ecb2cf6cdccfd9', '', '', '', '', 5, '2023-09-13 15:16:54', 1),
(53, '7573667', 'FRANZ RODRIGO', 'CARBALLO BARRIGA', 77862698, 'rodrigo.carballo@eje.gob.bo', 'ce65b1205944c26dd6cdc1a72537d56c25965bb94c161d94c1aff37f6df2fa6c', '', '', '', '', 5, '2023-10-12 14:51:47', 1),
(54, '1141619', 'ODALYS SHIRLEY', 'SERRANO MONTALVO', 72863064, 'odalys.serrano@eje.gob.bo', 'a3f03bbebf96bd4715090040ac1621e4c126c4ab9b24795e81aa4e038f64eb7a', '', '', '', '', 5, '2023-11-22 17:21:39', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL,
  `nombrerol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Acceso a todo el sistema 	', 1),
(2, 'Supervisores', 'Supervisores', 1),
(3, 'Vendedor', 'Ventas', 0),
(4, 'Venta', 'Vendedor', 0),
(5, 'Funcionario', 'Funcionario de la Escuela de Jueces del Estado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidasfuncionarios`
--

CREATE TABLE `salidasfuncionarios` (
  `IdSalidaFuncionario` smallint(6) NOT NULL,
  `NroPapeleta` smallint(6) DEFAULT NULL,
  `IdFuncionario` smallint(6) DEFAULT NULL,
  `IdTipoSalida` char(1) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `TiempoSolicitado` smallint(6) NOT NULL,
  `FechaHoraSalida` datetime DEFAULT NULL,
  `HoraRetorno` datetime NOT NULL,
  `Motivo` varchar(60) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Lugar` varchar(60) COLLATE utf8mb4_swedish_ci NOT NULL,
  `IdFuncionarioAutoriza` smallint(6) DEFAULT NULL,
  `Autorizado` int(11) DEFAULT 0,
  `estado` int(11) DEFAULT 1,
  `IdRrhhAutoriza` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `internospersonal`
--
ALTER TABLE `internospersonal`
  ADD PRIMARY KEY (`idinternos`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idpermiso`),
  ADD KEY `rolid` (`rolid`),
  ADD KEY `moduloid` (`moduloid`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `rolid` (`rolid`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `salidasfuncionarios`
--
ALTER TABLE `salidasfuncionarios`
  ADD PRIMARY KEY (`IdSalidaFuncionario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `internospersonal`
--
ALTER TABLE `internospersonal`
  MODIFY `idinternos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idpermiso` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `salidasfuncionarios`
--
ALTER TABLE `salidasfuncionarios`
  MODIFY `IdSalidaFuncionario` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
