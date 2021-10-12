-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 oct. 2021 à 12:50
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `meetings`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `filldates` (`dateStart` DATE, `dateEnd` DATE)  BEGIN
  WHILE dateStart <= dateEnd DO
    INSERT INTO benefiter (benefiter) VALUES (dateStart);
    SET dateStart = date_add(dateStart, INTERVAL 7 DAY);
  END WHILE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `filleddates` (`dateStart` DATE, `dateEnd` DATE)  BEGIN
  WHILE dateStart <= dateEnd DO
    INSERT INTO benefiter (benefiter) VALUES (dateStart);
    SET dateStart = date_add(dateStart, INTERVAL 7 DAY);
  END WHILE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `fillerdates` (`dateStart` DATE, `dateEnd` DATE)  BEGIN
  WHILE dateStart <= dateEnd DO
    INSERT INTO benefiter (benefiter) VALUES (dateStart);
    SET dateStart = date_add(dateStart, INTERVAL 7 DAY);
  END WHILE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `job` varchar(30) NOT NULL,
  `images` text DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`, `job`, `images`, `phone`, `email`, `id`) VALUES
('olivia', 'aymardismyfav', 'President', 'admin/olivia.jpg', 'sonfackdolly@gmail.com', '653141771', 1),
('Rozz', 'damso', 'Auditor', 'admin/Rozz.jpg', 'sonfackdolly@gmail.com', '698542312', 2),
('Winnie', 'lordisgood', 'Treasurer', 'admin/Winnie.jpg', 'njikiirma@gmail.com', '651315517', 3),
('Meli', 'ilove', 'accountant', 'admin/Meli.jpg', 'yakubaba1234@gmail.com', '654326899', 4),
('Nellysa', 'savesus', 'Secretary', 'admin/Nellysa.jpg', 'yakubaba1234@gmail.com', '675422456', 5),
('Aymard', 'azeqxqgq', 'Programmer', 'admin/Aymard.jpg', 'aymardnguemo@gmail.com', '67902135', 6);

-- --------------------------------------------------------

--
-- Structure de la table `avance`
--

CREATE TABLE `avance` (
  `avance_name` varchar(30) DEFAULT NULL,
  `refunded_amount` varchar(30) DEFAULT NULL,
  `DOT` date DEFAULT curdate(),
  `avance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `benefit_id` int(11) NOT NULL,
  `beneficiary` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `beneficiary`
--

INSERT INTO `beneficiary` (`benefit_id`, `beneficiary`) VALUES
(1, '2022-01-14'),
(2, '2022-01-21'),
(3, '2022-01-28'),
(4, '2022-02-04'),
(5, '2022-02-11'),
(6, '2022-02-18'),
(7, '2022-02-25'),
(8, '2022-03-04'),
(9, '2022-03-11'),
(10, '2022-03-18'),
(11, '2022-03-25'),
(12, '2022-04-01'),
(13, '2022-04-08'),
(14, '2022-04-15'),
(15, '2022-04-22'),
(16, '2022-04-29'),
(17, '2022-05-06'),
(18, '2022-05-13'),
(19, '2022-05-20'),
(20, '2022-05-27'),
(21, '2022-06-03'),
(22, '2022-06-10'),
(23, '2022-06-17'),
(24, '2022-06-24'),
(25, '2022-07-01'),
(26, '2022-07-08'),
(27, '2022-07-15'),
(28, '2022-07-22'),
(29, '2022-07-29'),
(30, '2022-08-05'),
(31, '2022-08-12'),
(32, '2022-08-19'),
(33, '2022-08-26'),
(34, '2022-09-02'),
(35, '2022-09-09'),
(36, '2022-09-16'),
(37, '2022-09-23'),
(38, '2022-09-30'),
(39, '2022-10-07'),
(40, '2022-10-14'),
(41, '2022-10-21'),
(42, '2022-10-28'),
(43, '2022-11-04'),
(44, '2022-11-11'),
(45, '2022-11-18'),
(46, '2022-11-25'),
(47, '2022-12-02'),
(48, '2022-12-09'),
(49, '2022-12-16'),
(50, '2023-01-14'),
(51, '2023-01-21'),
(52, '2023-01-28'),
(53, '2023-02-04'),
(54, '2023-02-11'),
(55, '2023-02-18'),
(56, '2023-02-25'),
(57, '2023-03-04'),
(58, '2023-03-11'),
(59, '2023-03-18'),
(60, '2023-03-25'),
(61, '2023-04-01'),
(62, '2023-04-08'),
(63, '2023-04-15'),
(64, '2023-04-22'),
(65, '2023-04-29'),
(66, '2023-05-06'),
(67, '2023-05-13'),
(68, '2023-05-20'),
(69, '2023-05-27'),
(70, '2023-06-03'),
(71, '2023-06-10'),
(72, '2023-06-17'),
(73, '2023-06-24'),
(74, '2023-07-01'),
(75, '2023-07-08'),
(76, '2023-07-15'),
(77, '2023-07-22'),
(78, '2023-07-29'),
(79, '2023-08-05'),
(80, '2023-08-12'),
(81, '2023-08-19'),
(82, '2023-08-26'),
(83, '2023-09-02'),
(84, '2023-09-09'),
(85, '2023-09-16'),
(86, '2023-09-23'),
(87, '2023-09-30'),
(88, '2023-10-07'),
(89, '2023-10-14'),
(90, '2023-10-21'),
(91, '2023-10-28'),
(92, '2023-11-04'),
(93, '2023-11-11'),
(94, '2023-11-18'),
(95, '2023-11-25'),
(96, '2023-12-02'),
(97, '2023-12-09'),
(98, '2023-12-16'),
(99, '2024-01-14'),
(100, '2024-01-21'),
(101, '2024-01-28'),
(102, '2024-02-04'),
(103, '2024-02-11'),
(104, '2024-02-18'),
(105, '2024-02-25'),
(106, '2024-03-03'),
(107, '2024-03-10'),
(108, '2024-03-17'),
(109, '2024-03-24'),
(110, '2024-03-31'),
(111, '2024-04-07'),
(112, '2024-04-14'),
(113, '2024-04-21'),
(114, '2024-04-28'),
(115, '2024-05-05'),
(116, '2024-05-12'),
(117, '2024-05-19'),
(118, '2024-05-26'),
(119, '2024-06-02'),
(120, '2024-06-09'),
(121, '2024-06-16'),
(122, '2024-06-23'),
(123, '2024-06-30'),
(124, '2024-07-07'),
(125, '2024-07-14'),
(126, '2024-07-21'),
(127, '2024-07-28'),
(128, '2024-08-04'),
(129, '2024-08-11'),
(130, '2024-08-18'),
(131, '2024-08-25'),
(132, '2024-09-01'),
(133, '2024-09-08'),
(134, '2024-09-15'),
(135, '2024-09-22'),
(136, '2024-09-29'),
(137, '2024-10-06'),
(138, '2024-10-13'),
(139, '2024-10-20'),
(140, '2024-10-27'),
(141, '2024-11-03'),
(142, '2024-11-10'),
(143, '2024-11-17'),
(144, '2024-11-24'),
(145, '2024-12-01'),
(146, '2024-12-08'),
(147, '2024-12-15'),
(148, '2025-01-14'),
(149, '2025-01-21'),
(150, '2025-01-28'),
(151, '2025-02-04'),
(152, '2025-02-11'),
(153, '2025-02-18'),
(154, '2025-02-25'),
(155, '2025-03-04'),
(156, '2025-03-11'),
(157, '2025-03-18'),
(158, '2025-03-25'),
(159, '2025-04-01'),
(160, '2025-04-08'),
(161, '2025-04-15'),
(162, '2025-04-22'),
(163, '2025-04-29'),
(164, '2025-05-06'),
(165, '2025-05-13'),
(166, '2025-05-20'),
(167, '2025-05-27'),
(168, '2025-06-03'),
(169, '2025-06-10'),
(170, '2025-06-17'),
(171, '2025-06-24'),
(172, '2025-07-01'),
(173, '2025-07-08'),
(174, '2025-07-15'),
(175, '2025-07-22'),
(176, '2025-07-29'),
(177, '2025-08-05'),
(178, '2025-08-12'),
(179, '2025-08-19'),
(180, '2025-08-26'),
(181, '2025-09-02'),
(182, '2025-09-09'),
(183, '2025-09-16'),
(184, '2025-09-23'),
(185, '2025-09-30'),
(186, '2025-10-07'),
(187, '2025-10-14'),
(188, '2025-10-21'),
(189, '2025-10-28'),
(190, '2025-11-04'),
(191, '2025-11-11'),
(192, '2025-11-18'),
(193, '2025-11-25'),
(194, '2025-12-02'),
(195, '2025-12-09'),
(196, '2025-12-16');

-- --------------------------------------------------------

--
-- Structure de la table `benefiter`
--

CREATE TABLE `benefiter` (
  `benefiter_id` int(11) NOT NULL,
  `benefiter` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `benefiter`
--

INSERT INTO `benefiter` (`benefiter_id`, `benefiter`) VALUES
(1, '2022-01-14'),
(2, '2022-01-21'),
(3, '2022-01-28'),
(4, '2022-02-04'),
(5, '2022-02-11'),
(6, '2022-02-18'),
(7, '2022-02-25'),
(8, '2022-03-04'),
(9, '2022-03-11'),
(10, '2022-03-18'),
(11, '2022-03-25'),
(12, '2022-04-01'),
(13, '2022-04-08'),
(14, '2022-04-15'),
(15, '2022-04-22'),
(16, '2022-04-29'),
(17, '2022-05-06'),
(18, '2022-05-13'),
(19, '2022-05-20'),
(20, '2022-05-27'),
(21, '2022-06-03'),
(22, '2022-06-10'),
(23, '2022-06-17'),
(24, '2022-06-24'),
(25, '2022-07-01'),
(26, '2022-07-08'),
(27, '2022-07-15'),
(28, '2022-07-22'),
(29, '2022-07-29'),
(30, '2022-08-05'),
(31, '2022-08-12'),
(32, '2022-08-19'),
(33, '2022-08-26'),
(34, '2022-09-02'),
(35, '2022-09-09'),
(36, '2022-09-16'),
(37, '2022-09-23'),
(38, '2022-09-30'),
(39, '2022-10-07'),
(40, '2022-10-14'),
(41, '2022-10-21'),
(42, '2022-10-28'),
(43, '2022-11-04'),
(44, '2022-11-11'),
(45, '2022-11-18'),
(46, '2022-11-25'),
(47, '2022-12-02'),
(48, '2022-12-09'),
(49, '2022-12-16'),
(50, '2023-01-14'),
(51, '2023-01-21'),
(52, '2023-01-28'),
(53, '2023-02-04'),
(54, '2023-02-11'),
(55, '2023-02-18'),
(56, '2023-02-25'),
(57, '2023-03-04'),
(58, '2023-03-11'),
(59, '2023-03-18'),
(60, '2023-03-25'),
(61, '2023-04-01'),
(62, '2023-04-08'),
(63, '2023-04-15'),
(64, '2023-04-22'),
(65, '2023-04-29'),
(66, '2023-05-06'),
(67, '2023-05-13'),
(68, '2023-05-20'),
(69, '2023-05-27'),
(70, '2023-06-03'),
(71, '2023-06-10'),
(72, '2023-06-17'),
(73, '2023-06-24'),
(74, '2023-07-01'),
(75, '2023-07-08'),
(76, '2023-07-15'),
(77, '2023-07-22'),
(78, '2023-07-29'),
(79, '2023-08-05'),
(80, '2023-08-12'),
(81, '2023-08-19'),
(82, '2023-08-26'),
(83, '2023-09-02'),
(84, '2023-09-09'),
(85, '2023-09-16'),
(86, '2023-09-23'),
(87, '2023-09-30'),
(88, '2023-10-07'),
(89, '2023-10-14'),
(90, '2023-10-21'),
(91, '2023-10-28'),
(92, '2023-11-04'),
(93, '2023-11-11'),
(94, '2023-11-18'),
(95, '2023-11-25'),
(96, '2023-12-02'),
(97, '2023-12-09'),
(98, '2023-12-16'),
(99, '2024-01-14'),
(100, '2024-01-21'),
(101, '2024-01-28'),
(102, '2024-02-04'),
(103, '2024-02-11'),
(104, '2024-02-18'),
(105, '2024-02-25'),
(106, '2024-03-03'),
(107, '2024-03-10'),
(108, '2024-03-17'),
(109, '2024-03-24'),
(110, '2024-03-31'),
(111, '2024-04-07'),
(112, '2024-04-14'),
(113, '2024-04-21'),
(114, '2024-04-28'),
(115, '2024-05-05'),
(116, '2024-05-12'),
(117, '2024-05-19'),
(118, '2024-05-26'),
(119, '2024-06-02'),
(120, '2024-06-09'),
(121, '2024-06-16'),
(122, '2024-06-23'),
(123, '2024-06-30'),
(124, '2024-07-07'),
(125, '2024-07-14'),
(126, '2024-07-21'),
(127, '2024-07-28'),
(128, '2024-08-04'),
(129, '2024-08-11'),
(130, '2024-08-18'),
(131, '2024-08-25'),
(132, '2024-09-01'),
(133, '2024-09-08'),
(134, '2024-09-15'),
(135, '2024-09-22'),
(136, '2024-09-29'),
(137, '2024-10-06'),
(138, '2024-10-13'),
(139, '2024-10-20'),
(140, '2024-10-27'),
(141, '2024-11-03'),
(142, '2024-11-10'),
(143, '2024-11-17'),
(144, '2024-11-24'),
(145, '2024-12-01'),
(146, '2024-12-08'),
(147, '2024-12-15'),
(148, '2025-01-14'),
(149, '2025-01-21'),
(150, '2025-01-28'),
(151, '2025-02-04'),
(152, '2025-02-11'),
(153, '2025-02-18'),
(154, '2025-02-25'),
(155, '2025-03-04'),
(156, '2025-03-11'),
(157, '2025-03-18'),
(158, '2025-03-25'),
(159, '2025-04-01'),
(160, '2025-04-08'),
(161, '2025-04-15'),
(162, '2025-04-22'),
(163, '2025-04-29'),
(164, '2025-05-06'),
(165, '2025-05-13'),
(166, '2025-05-20'),
(167, '2025-05-27'),
(168, '2025-06-03'),
(169, '2025-06-10'),
(170, '2025-06-17'),
(171, '2025-06-24'),
(172, '2025-07-01'),
(173, '2025-07-08'),
(174, '2025-07-15'),
(175, '2025-07-22'),
(176, '2025-07-29'),
(177, '2025-08-05'),
(178, '2025-08-12'),
(179, '2025-08-19'),
(180, '2025-08-26'),
(181, '2025-09-02'),
(182, '2025-09-09'),
(183, '2025-09-16'),
(184, '2025-09-23'),
(185, '2025-09-30'),
(186, '2025-10-07'),
(187, '2025-10-14'),
(188, '2025-10-21'),
(189, '2025-10-28'),
(190, '2025-11-04'),
(191, '2025-11-11'),
(192, '2025-11-18'),
(193, '2025-11-25'),
(194, '2025-12-02'),
(195, '2025-12-09'),
(196, '2025-12-16');

-- --------------------------------------------------------

--
-- Structure de la table `borrows`
--

CREATE TABLE `borrows` (
  `bname` varchar(30) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `bEmail` varchar(30) DEFAULT NULL,
  `DOP` date DEFAULT curdate(),
  `avalist` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `msg` varchar(255) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `chat_date` date DEFAULT curdate(),
  `dt` time DEFAULT curtime(),
  `job` varchar(30) DEFAULT NULL,
  `chat_id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`msg`, `uname`, `chat_date`, `dt`, `job`, `chat_id`, `images`) VALUES
(NULL, 'Daniel', '2021-10-06', '07:01:45', NULL, 11, 'chats/download (1).jpg'),
(NULL, 'Daniel', '2021-10-06', '07:02:01', NULL, 12, 'chats/download (1).jpg'),
('contribution started please send your money    ', 'Olivia', '2021-10-08', '21:07:38', 'President', 13, NULL),
(NULL, 'Tchinga', '2021-10-08', '21:09:35', NULL, 14, 'chats/photo_2021-06-22_17-53-19.jpg'),
(NULL, 'Tchinga', '2021-10-08', '21:09:53', NULL, 15, 'chats/photo_2021-06-22_17-53-19.jpg'),
('I need a rescue for my new born', 'Tchinga', '2021-10-08', '21:10:41', NULL, 16, NULL),
('Rescue Accepted for a new born . Please everyone should contribute 4500 to refill our rescues', 'olivia', '2021-10-08', '21:18:04', NULL, 17, NULL),
('I need a rescue for my new born', 'Tchinga', '2021-10-08', '21:23:16', NULL, 18, NULL),
('I need a rescue for marriage', 'Sandrine', '2021-10-09', '17:08:22', NULL, 19, NULL),
('I need a rescue for marriage', 'Sandrine', '2021-10-09', '17:09:05', NULL, 20, NULL),
('I need a rescue for marriage', 'Sandrine', '2021-10-09', '17:10:35', NULL, 21, NULL),
('h helo', 'Sandrine', '2021-10-09', '17:11:12', NULL, 22, NULL),
(NULL, 'Sandrine', '2021-10-09', '17:26:14', NULL, 23, 'chats/photo_2021-07-05_17-34-25.jpg'),
(NULL, 'Sandrine', '2021-10-09', '17:26:29', NULL, 24, 'chats/photo_2021-07-05_17-34-25.jpg'),
(NULL, 'Nellysa', '2021-10-09', '17:40:11', NULL, 25, 'chats/photo_2021-06-15_11-28-49.jpg'),
(NULL, 'Nellysa', '2021-10-09', '17:40:29', NULL, 26, 'chats/photo_2021-06-15_11-28-49.jpg'),
('hello    ', 'Nellysa', '2021-10-09', '17:48:22', NULL, 27, NULL),
('hello    ', 'Nellysa', '2021-10-09', '17:51:48', NULL, 28, NULL),
('Hey    ', 'Nellysa', '2021-10-09', '17:52:24', NULL, 29, NULL),
('    hello', 'Nellysa', '2021-10-09', '18:03:16', NULL, 30, NULL),
('    i want to fuck pablo', 'Nellysa', '2021-10-09', '18:03:35', NULL, 31, NULL),
(NULL, 'Nellysa', '2021-10-09', '18:06:53', NULL, 32, 'chats/IMG-20210606-WA0014.jpg'),
(NULL, 'Nellysa', '2021-10-09', '18:07:13', NULL, 33, 'chats/IMG-20210606-WA0014.jpg'),
(NULL, 'Nellysa', '2021-10-09', '18:10:17', NULL, 34, 'chats/IMG-20210606-WA0005.jpg'),
(NULL, 'Nellysa', '2021-10-09', '18:10:49', NULL, 35, 'chats/IMG-20210606-WA0009.jpg'),
('    hello', 'Meli', '2021-10-09', '18:35:09', 'accountant', 36, NULL),
('    hello', 'Meli', '2021-10-10', '08:30:42', 'accountant', 37, NULL),
('    hello', 'Bayere', '2021-10-10', '08:33:52', NULL, 38, NULL),
(NULL, 'Bayere', '2021-10-10', '08:34:07', NULL, 39, 'chats/IMG-20210606-WA0003.jpg'),
(NULL, 'Bayere', '2021-10-10', '08:34:19', NULL, 40, 'chats/IMG-20210606-WA0003.jpg'),
('    hello', 'Meli', '2021-10-10', '08:36:01', 'accountant', 41, NULL),
('    cool let me record it', 'Meli', '2021-10-10', '08:36:31', 'accountant', 42, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`comment_id`, `name`, `subject`, `email`, `message`) VALUES
(1, 'Rozz', 'hello', 'yakubaba1234@gmail.com', 'congratulation'),
(2, 'yakuza', 'Appreciation', 'yakubaba1234@gmail.com', 'hello'),
(3, 'leaticia', 'Appreciation', 'yakubaba1234@gmail.com', 'i am glad'),
(4, 'hello', 'Appreciation', 'yakubaba1234@gmail.com', 'what a wonderful app');

-- --------------------------------------------------------

--
-- Structure de la table `contribution`
--

CREATE TABLE `contribution` (
  `contribution_amount` varchar(30) DEFAULT NULL,
  `contribution_benefit` varchar(30) DEFAULT NULL,
  `contribution_period` date DEFAULT NULL,
  `contribution_paidfine` varchar(30) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `number_of_turns` int(11) DEFAULT NULL,
  `Today` date DEFAULT curdate(),
  `contribution_fine` varchar(30) DEFAULT NULL,
  `activepaid` int(11) DEFAULT NULL,
  `activefine` int(11) DEFAULT NULL,
  `contribution_id` int(11) NOT NULL,
  `contribution_payment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contribution`
--

INSERT INTO `contribution` (`contribution_amount`, `contribution_benefit`, `contribution_period`, `contribution_paidfine`, `Start_date`, `number_of_turns`, `Today`, `contribution_fine`, `activepaid`, `activefine`, `contribution_id`, `contribution_payment`) VALUES
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-14', NULL, 1, 1, 1, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-14', NULL, 1, 1, 2, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-14', NULL, 1, 1, 3, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-14', NULL, 1, 1, 4, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-14', NULL, 1, 1, 5, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-14', NULL, 1, 1, 6, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-15', NULL, 1, 1, 7, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-15', NULL, 1, 1, 8, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 9, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 10, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 11, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 12, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 13, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 14, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 15, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 16, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-16', NULL, 1, 1, 17, NULL),
('5000', NULL, NULL, NULL, NULL, NULL, '2021-09-25', NULL, 1, 1, 18, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-26', NULL, 1, 1, 19, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-09-26', NULL, 1, 1, 20, NULL),
('2000', NULL, NULL, NULL, NULL, NULL, '2021-10-08', NULL, 1, 1, 21, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `grantres`
--

CREATE TABLE `grantres` (
  `occasion` varchar(30) DEFAULT NULL,
  `grant_amount` int(11) DEFAULT NULL,
  `grantname` varchar(30) DEFAULT NULL,
  `yes` date DEFAULT curdate(),
  `grant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `helps`
--

CREATE TABLE `helps` (
  `hname` varchar(30) DEFAULT NULL,
  `helps_amount` varchar(30) DEFAULT NULL,
  `hEmail` varchar(30) DEFAULT NULL,
  `DOT` date DEFAULT curdate(),
  `helps_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `lastname` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `contribution` varchar(30) DEFAULT NULL,
  `mstatus` varchar(30) DEFAULT NULL,
  `images` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `payment` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `fine` varchar(30) DEFAULT NULL,
  `paidfine` varchar(30) DEFAULT NULL,
  `benefit` varchar(30) DEFAULT NULL,
  `periodicity` date DEFAULT NULL,
  `Today` date DEFAULT curdate(),
  `avalist_name` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `activeres` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `member`
--

INSERT INTO `member` (`lastname`, `password`, `DOB`, `Email`, `gender`, `contribution`, `mstatus`, `images`, `address`, `payment`, `firstname`, `fine`, `paidfine`, `benefit`, `periodicity`, `Today`, `avalist_name`, `phone`, `code`, `member_id`, `status`, `activeres`) VALUES
('dolly', '65TYDFG', '2021-09-14', 'farn@gmail.com', 'Female', '2000', 'Married', 'uploads/olivia.jpg', 'ilmenau', NULL, 'olivia', NULL, NULL, NULL, NULL, '2021-09-14', NULL, '695132570', NULL, 1, 'offline', 0),
('mayi', 'azeqsd', '2021-09-16', 'hat@gmail.com', 'Female', '5000', 'Not Married', 'uploads/Rozz.jpg', 'douala', NULL, 'Rozz', NULL, NULL, NULL, NULL, '2021-09-14', NULL, '695132570', NULL, 2, 'offline', 0),
('irma', 'set34(-ty', '2021-09-08', 'aezrt@gmail.com', 'Female', '2000', 'Married', 'uploads/Winnie.jpg', 'azearrty', NULL, 'Winnie', NULL, NULL, NULL, NULL, '2021-09-14', NULL, '695132570', NULL, 3, 'offline', 0),
('mistelle', 'REAPAU', '2021-09-01', 'rat@gmail.com', 'Female', '5000', 'Not Married', 'uploads/meli.jpg', 'biteng', NULL, 'meli ', NULL, NULL, NULL, NULL, '2021-09-14', NULL, '691325728', NULL, 4, 'offline', 0),
('Nstama', 'razty', '2021-09-29', 'tart@gmail.com', 'Female', '2000', 'Married', 'uploads/Vannessa.jpg', 'damas', NULL, 'Vannessa', NULL, NULL, NULL, NULL, '2021-09-14', NULL, '691325728', NULL, 5, 'offline', 0),
('djontu', '65743278', '2021-09-09', 'yakubaba1234@gmail.com', 'Female', '5000', 'Married', 'uploads/sandrine.jpg', 'bansoua', NULL, 'sandrine', NULL, NULL, NULL, NULL, '2021-09-14', NULL, '691325728', NULL, 6, 'offline', 0),
('linus', '&\"é(&--&', '2021-09-08', 'yakubaba1234@gmail.com', 'Male', '2000', 'Not Married', 'uploads/bayere.jpg', 'azerqdgqy', NULL, 'bayere', NULL, NULL, NULL, NULL, '2021-09-15', NULL, '651628905', NULL, 7, 'offline', 0),
('escobar', '12345646', '2021-09-03', 'aymardnguemo1234@gmail.com', 'Male', '5000', 'Not Married', 'uploads/Pablo.jpeg', 'biteng', NULL, 'Pablo', NULL, NULL, NULL, NULL, '2021-09-15', NULL, '651628905', NULL, 8, 'offline', 0),
('Nguemo', '&é\"aze(', '2002-02-14', 'aymardnguemo1234@gmail.com', 'Male', '2000', 'Married', 'uploads/Aymard.jpg', 'dschang', NULL, 'Aymard ', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '671892460', NULL, 9, 'offline', 0),
('zangmo', 'azeqsd&é', '2000-06-06', 'zng@gmail.com', 'Male', '5000', 'Not Married', 'uploads/Lopez.jpg', 'ekounou', NULL, 'Lopez', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '671892460', NULL, 10, 'offline', 0),
('souna', 'yakubaba', '2001-05-07', 'yakubaba1234@gmail.com', 'Female', '2000', 'Married', 'uploads/Leila.jpg', 'kodengui', NULL, 'Leila', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '671892460', NULL, 11, 'offline', 0),
('Claire', 'azeqsdr', '2021-09-05', 'yakubaba1234@gmail.com', 'Female', '5000', 'Not Married', 'uploads/Maelle.jpg', 'damas', NULL, 'Maelle', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '6170262781', NULL, 12, 'offline', 0),
('bendera', 'azert(-èyu', '2021-09-07', 'love@gmail.com', 'Female', '2000', 'Married', 'uploads/wenda.jpg', 'france', NULL, 'wenda', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '690132469', NULL, 13, 'offline', 0),
('Taka', 'tyuiop_çàghj', '2021-09-06', 'vald@gmail.com', 'Female', '5000', 'Not Married', 'uploads/Mezoh.jpg', 'bamenda', NULL, 'Mezoh', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '561325678', NULL, 14, 'offline', 0),
('Nsini', 'azear2a((-aè67', '2020-08-04', 'nsinifranc@gmail.com', 'Male', '2000', 'Not Married', 'uploads/Franc .jpeg', 'brique', NULL, 'Franc ', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '67032156788', NULL, 15, 'offline', 0),
('ndabose', '12345azqsd', '2021-09-07', 'fru@gmail.com', 'Male', '5000', 'Married', 'uploads/daniel.jpg', 'awae', NULL, 'daniel', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '6781902893', NULL, 16, 'offline', 0),
('miendjem', 'azeqsds12345', '2021-08-29', 'miendjemthierry01@gmail.com', 'Male', '2000', 'Married', 'uploads/Thierry.jpg', 'awae', NULL, 'Thierry', NULL, NULL, NULL, NULL, '2021-09-16', NULL, '670124262', NULL, 17, 'offline', 0),
('laMarque', '1235Azarqdqgyqv', '2010-06-08', 'onanadavy9@gmail.com', 'Male', '5000', 'Married', 'uploads/Davy.jpg', 'kodengui', NULL, 'Davy', NULL, NULL, NULL, NULL, '2021-09-25', NULL, '651725628', 1193067929, 18, 'offline', 0),
('tego', '&éazeqsdr', '2021-09-02', 'urbantigo@gmail.com', 'Male', '2000', 'Married', 'uploads/urbain.jpg', 'washington', NULL, 'urbain', NULL, NULL, NULL, NULL, '2021-09-26', NULL, '697854789', 2103582784, 19, 'offline', 0),
('noah', 'azeata13141', '1999-05-11', 'yaku@gmail.com', 'Male', '2000', 'Married', 'uploads/yannick.jpg', 'ilmenau', NULL, 'yannick', NULL, NULL, NULL, NULL, '2021-09-26', NULL, '671527910', 2087445793, 20, 'offline', 0),
('Alice', 'alearqttqyy', '2020-08-09', 'alicelove@gmail.com', 'Female', '2000', 'Married', 'uploads/Tchinga .jpg', 'AICS', NULL, 'Tchinga ', NULL, NULL, NULL, NULL, '2021-10-08', NULL, '6785431278', 1538097620, 21, 'offline', 0);

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

CREATE TABLE `report` (
  `report_name` varchar(30) DEFAULT NULL,
  `News` varchar(255) DEFAULT NULL,
  `object` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `projects` varchar(255) DEFAULT NULL,
  `Salut` varchar(255) DEFAULT NULL,
  `goals` varchar(255) DEFAULT NULL,
  `report_id` int(11) NOT NULL,
  `Report_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `report`
--

INSERT INTO `report` (`report_name`, `News`, `object`, `message`, `projects`, `Salut`, `goals`, `report_id`, `Report_date`) VALUES
('Rapport Famille Nguemo', 'Les nouvelles etait bonnes dans ', 'aucun pour le moment', 'Bonjour a tous et bienvenue', 'Preparer le nkui a la prochaine ', 'on ne doit plus avoir faim', 'aucun pour le moment', 1, '2021-09-11'),
('Ndajangi tontine', 'We are on the last month of intenship', 'We will be in year 3', 'Hello everyone', 'We want to go to year 3', 'how can we pass and go to year 3', 'our app is finished', 2, '2021-09-14'),
('AICS tontine', 'today are AICS defenses', 'we must have 19', 'welcome to every one', 'The 19 for the defence of nguemo', 'nguemo should have 19 for this project', 'We pleed the jury to give us 19', 3, '2021-10-08');

-- --------------------------------------------------------

--
-- Structure de la table `savings`
--

CREATE TABLE `savings` (
  `saving_amount` varchar(30) DEFAULT NULL,
  `sEmail` varchar(30) DEFAULT NULL,
  `savings_interest` float DEFAULT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `gone` date DEFAULT curdate(),
  `savings_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdraw_name` varchar(30) DEFAULT NULL,
  `withdrawed_savings` varchar(30) DEFAULT NULL,
  `withdraw_id` int(11) NOT NULL,
  `DOT` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job` (`job`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `avance`
--
ALTER TABLE `avance`
  ADD PRIMARY KEY (`avance_id`),
  ADD UNIQUE KEY `avance_name` (`avance_name`);

--
-- Index pour la table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`benefit_id`);

--
-- Index pour la table `benefiter`
--
ALTER TABLE `benefiter`
  ADD PRIMARY KEY (`benefiter_id`);

--
-- Index pour la table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bname` (`bname`),
  ADD UNIQUE KEY `avalist` (`avalist`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`contribution_id`);

--
-- Index pour la table `grantres`
--
ALTER TABLE `grantres`
  ADD PRIMARY KEY (`grant_id`),
  ADD UNIQUE KEY `grantname` (`grantname`);

--
-- Index pour la table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`helps_id`),
  ADD UNIQUE KEY `hname` (`hname`);

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `firstname` (`firstname`);

--
-- Index pour la table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Index pour la table `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`savings_id`);

--
-- Index pour la table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`withdraw_id`),
  ADD UNIQUE KEY `withdraw_name` (`withdraw_name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `avance`
--
ALTER TABLE `avance`
  MODIFY `avance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `benefit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT pour la table `benefiter`
--
ALTER TABLE `benefiter`
  MODIFY `benefiter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT pour la table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `contribution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `grantres`
--
ALTER TABLE `grantres`
  MODIFY `grant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `helps`
--
ALTER TABLE `helps`
  MODIFY `helps_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `savings`
--
ALTER TABLE `savings`
  MODIFY `savings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
