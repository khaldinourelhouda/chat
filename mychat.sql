-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 04 Mars 2020 à 15:32
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mychat`
--
CREATE DATABASE IF NOT EXISTS `mychat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mychat`;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `log_in` varchar(7) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_profile`, `user_country`, `user_gender`, `forgotten_answer`, `log_in`) VALUES
(28, 'nourhouda', 'nour2020', 'nour@gmail.com', 'images/ForrestGump.jpg.14', 'France', 'Female', 'test hello', 'Online'),
(30, 'sofiene', 'sofiene2020', 'sofiene@gmail.com', 'images/codingcafe2.jpg', 'Tunisie', 'Male', '', 'Offline'),
(31, 'test', 'testtest', 'test@gmail.com', 'images/codingcafe1.jpg', 'Pakistan', 'Male', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users_chat`
--

CREATE TABLE IF NOT EXISTS `users_chat` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_username` varchar(100) NOT NULL,
  `receive_username` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users_chat`
--

INSERT INTO `users_chat` (`msg_id`, `sender_username`, `receive_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(1, 'nour', 'nour', 'hello', 'read', '2020-02-24 13:50:28'),
(2, 'nour', 'sofiene', 'test', 'read', '2020-02-24 14:38:29'),
(3, 'sofiene', 'nour', 'test', 'read', '2020-02-24 14:38:29'),
(4, 'nour', 'sofiene', 'bonjour', 'read', '2020-02-24 15:11:37'),
(5, 'sofiene', 'sofiene', 'bonjour', 'read', '2020-02-24 15:12:28'),
(6, 'sofiene', 'sofiene', 'bonjoue', 'read', '2020-02-24 15:12:37'),
(7, 'sofiene', 'sofiene', 'hello', 'read', '2020-02-24 15:14:32'),
(8, 'sofiene', 'sofiene', 'hello', 'read', '2020-02-24 15:14:40'),
(9, 'nourhouda', 'nourhouda', 'helo', 'read', '2020-03-04 13:57:17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
