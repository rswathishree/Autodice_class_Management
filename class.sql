-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2020 at 02:43 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `rollno` int(11) NOT NULL,
  `standard` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `gender`, `rollno`, `standard`) VALUES
(1, 'swathi', 'swathi@gmail.com', 987654321, 'female', 1, 12),
(8, 'aarthi', 'aarthi@gmail.com', 9889868767, 'female', 67, 3),
(3, 'rajan', 'rajan@gmil.com', 5678901234, 'male', 7, 6),
(4, 'kalaichelvi', 'kalaichelvi@gmail.com', 1234987654, 'female', 3, 3),
(5, 'swa', 'swa@gmail.com', 1234670890, 'female', 6, 5),
(19, 'muthumani', 'muthumani@gmail.com', 14243337546, 'female', 14, 3),
(7, 'jay', 'jay@gmail.com', 1234670899, 'female', 8, 5),
(9, 'anirudh', 'anirudh@gmail.com', 89898989898, 'male', 90, 1),
(10, 'hello', 'hello@gmail.com', 78787875656, 'male', 12, 2),
(21, 'raju', 'raju@gmail.com', 123455698, 'male', 10, 4),
(12, 'cutie', 'cutie@gmail.com', 45564646567, 'female', 45, 5),
(13, 'mandir', 'mandir@gmail.com', 6709778878, 'male', 34, 6),
(14, 'kadhir', 'kadhir@gmail.com', 45346464656, 'male', 65, 7),
(15, 'geeta', 'geetu@gmail.com', 764231376, 'female', 68, 8),
(16, 'jayashree', 'jayashree@gmail.com', 64747646758, 'male', 59, 9),
(17, 'gayathri', 'gayathri@gmail.com', 98907979788, 'female', 89, 10),
(18, 'uma', 'uma@gmail.com', 56586687685, 'male', 80, 11),
(20, 'mani', 'mani@gmail.com', 9876587998, 'male', 11, 5),
(22, 'manasa', 'manasa@gmail.com', 986525656, 'female', 78, 9),
(23, 'janani', 'janani@gmail.com', 77655445465, 'female', 90, 7),
(31, 'kishore', 'kishore@gmail.com', 64437655644, 'male', 12, 1),
(26, 'selvi', 'selvi@gmail.com', 5686535355, 'male', 4, 12),
(27, 'umagouri', 'umagouri@gmail.com', 582647826, 'female', 56, 8),
(28, 'mythreyee', 'mythreyee@gmail.com', 67898776646576, 'male', 11, 2),
(29, 'anandh', 'anandh@gmail.com', 23456775, 'male', 45, 2),
(30, 'kumar', 'kumar@gmail.com', 466786984, 'male', 8, 9),
(32, 'sanjay', 'sanjay@gmail.com', 343687644, 'male', 19, 1),
(33, 'joseph', 'joseph@gmail.com', 144444567, 'female', 11, 1),
(34, 'ragini', 'ragini@gmail.com', 643476543, 'female', 14, 1),
(35, 'rakesh', 'rakesh@gmail.com', 12467654, 'male', 33, 2),
(36, 'porsathiswaran', 'porsathiswaran@gmail.com', 756545746, 'male', 17, 2),
(37, 'murugan', 'murugan@gmail.com', 12343567, 'male', 16, 3),
(38, 'jayashree', 'jaya@gmail.com', 9472783789, 'female', 60, 3),
(39, 'adeepa', 'adeepa@gmail.com', 764358746, 'female', 5, 3),
(40, 'ganeshan', 'ganeshan@gmail.com', 676543575, 'male', 14, 4),
(41, 'deivanai', 'deivanai@gmail.com', 3546676476, 'female', 76, 4),
(42, 'valli', 'valli@gmail.com', 765734557, 'female', 77, 4),
(43, 'rajan', 'rajan@gmail.com', 54547659478, 'male', 57, 4),
(44, 'parvathi', 'parvathi@gmail.com', 6376647647, 'female', 90, 5),
(45, 'sivan', 'sivan@gmail.com', 54314354679, 'male', 81, 6),
(46, 'arunachalam', 'arunachalam@gmail.com', 7543654666, 'male', 64, 6),
(47, 'perumal', 'perumal@gmail.com', 6542267849, 'male', 76, 6),
(48, 'saraswathi', 'saraswathi@gmail.com', 564598876, 'female', 46, 7),
(49, 'lakshmi', 'lakshmi@gmail.com', 4347656555, 'female', 34, 7),
(50, 'aandaal', 'aandaal@gmail.com', 76454856567, 'female', 18, 7),
(51, ' varaghi', 'varaghi@gmail.com', 4717566356, 'male', 67, 8),
(52, 'narasimha', 'narasimha@gmail.com', 4564765475, 'male', 86, 8),
(53, 'kannan', 'kannan@gmail.com', 354477624, 'male', 54, 8),
(68, 'karunya', 'karunya@gmail.com', 987868657, 'female', 90, 9),
(55, 'kani', 'kani@gmail.com', 324365874, 'female', 83, 9),
(56, 'bunny', 'bunny@gmail.com', 43654687, 'male', 30, 10),
(57, 'sunny', 'sunny@gmail.com', 635876543, 'male', 71, 10),
(58, 'vani', 'vani@gmail.com', 526486846876, 'female', 10, 10),
(59, 'rani', 'rani@gmail.com', 3625463446, 'female', 50, 10),
(60, 'shruthi', 'sruthi@gmail.com', 43656534764, 'female', 20, 11),
(61, 'saranya', 'saranya@gmail.com', 3226543765, 'female', 40, 11),
(62, 'vini', 'vini@gmail.com', 7863554436, 'female', 98, 11),
(63, 'kadi', 'kadi@gmail.com', 755423467, 'male', 29, 11),
(64, 'solana', 'sols@gmail.com', 7542557647, 'female', 38, 12),
(65, 'gili', 'gili@gmail.com', 66543257, 'female', 91, 12),
(66, 'durga', 'durga@gmail.com', 123789098, 'female', 68, 12),
(69, 'kannama', 'kannama@gmail.com', 8766556778, 'female', 19, 4),
(71, 'magil', 'magil@gmail.com', 9087654321, 'female', 43, 5),
(72, 'neha', 'neha@gmail.com', 5645676545, 'female', 70, 5),
(73, 'kala', 'kala@gmail.com', 98676352535, 'female', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `teacherid` int(11) NOT NULL,
  `standard` int(11) NOT NULL,
  `subject` enum('english','hindi','marathi','maths','science','social studies') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`no`, `teacherid`, `standard`, `subject`) VALUES
(1, 3, 7, 'social studies'),
(2, 2, 8, 'science'),
(3, 1, 5, 'social studies'),
(4, 2, 6, 'social studies'),
(5, 2, 4, 'marathi'),
(6, 1, 4, 'marathi'),
(7, 1, 8, 'social studies'),
(8, 1, 2, 'science'),
(9, 1, 2, 'marathi'),
(17, 6, 3, 'english'),
(11, 1, 10, 'english'),
(12, 2, 2, 'english'),
(13, 1, 4, 'maths'),
(14, 3, 3, 'hindi'),
(15, 3, 10, 'marathi'),
(16, 5, 10, 'marathi'),
(18, 8, 4, 'maths'),
(19, 8, 12, 'maths'),
(20, 9, 9, 'maths'),
(21, 8, 9, 'science'),
(22, 3, 10, 'maths'),
(23, 8, 10, 'maths'),
(24, 8, 1, 'maths'),
(25, 5, 10, 'social studies'),
(26, 6, 7, 'hindi'),
(27, 6, 7, 'hindi'),
(28, 6, 7, 'hindi'),
(29, 6, 7, 'hindi'),
(30, 10, 2, 'hindi'),
(31, 10, 12, 'science'),
(32, 11, 1, 'maths'),
(33, 11, 3, 'maths'),
(34, 11, 5, 'maths'),
(35, 11, 7, 'maths'),
(36, 11, 9, 'maths'),
(37, 11, 11, 'maths'),
(38, 12, 2, 'maths'),
(39, 12, 4, 'maths'),
(40, 12, 6, 'maths'),
(41, 12, 8, 'maths'),
(42, 12, 10, 'maths'),
(43, 12, 12, 'maths'),
(44, 13, 1, 'english'),
(45, 12, 3, 'english'),
(46, 12, 5, 'english'),
(47, 13, 3, 'english'),
(48, 13, 5, 'english'),
(49, 13, 7, 'english'),
(50, 13, 9, 'english'),
(51, 13, 11, 'english'),
(52, 14, 1, 'hindi'),
(53, 14, 3, 'hindi'),
(54, 14, 5, 'hindi'),
(55, 14, 7, 'hindi'),
(56, 14, 9, 'hindi'),
(57, 14, 11, 'hindi'),
(108, 23, 12, 'marathi'),
(59, 15, 4, 'english'),
(60, 15, 6, 'english'),
(61, 15, 8, 'english'),
(62, 15, 10, 'english'),
(63, 15, 12, 'english'),
(64, 15, 2, 'english'),
(65, 16, 2, 'hindi'),
(66, 16, 4, 'hindi'),
(67, 16, 6, 'hindi'),
(68, 16, 8, 'hindi'),
(69, 16, 10, 'hindi'),
(70, 16, 12, 'hindi'),
(71, 17, 1, 'marathi'),
(72, 17, 3, 'marathi'),
(73, 17, 5, 'marathi'),
(109, 8, 5, 'science'),
(75, 17, 7, 'marathi'),
(76, 17, 9, 'marathi'),
(77, 17, 11, 'marathi'),
(78, 18, 2, 'marathi'),
(79, 18, 3, 'marathi'),
(80, 18, 5, 'marathi'),
(81, 18, 7, 'marathi'),
(82, 18, 9, 'marathi'),
(83, 18, 11, 'marathi'),
(84, 19, 1, 'science'),
(85, 19, 3, 'science'),
(86, 19, 5, 'science'),
(87, 19, 7, 'science'),
(88, 19, 9, 'science'),
(89, 19, 11, 'science'),
(90, 20, 2, 'science'),
(91, 20, 4, 'science'),
(92, 20, 6, 'science'),
(93, 20, 8, 'science'),
(94, 20, 10, 'science'),
(95, 20, 12, 'science'),
(96, 21, 1, 'social studies'),
(97, 21, 3, 'social studies'),
(98, 21, 6, 'social studies'),
(99, 21, 7, 'social studies'),
(100, 21, 9, 'social studies'),
(101, 21, 11, 'social studies'),
(102, 22, 2, 'social studies'),
(103, 22, 4, 'social studies'),
(104, 22, 5, 'social studies'),
(105, 22, 8, 'social studies'),
(106, 22, 10, 'social studies'),
(107, 22, 12, 'social studies'),
(110, 16, 5, 'social studies'),
(111, 24, 8, 'maths'),
(112, 8, 3, 'maths'),
(113, 24, 9, 'science'),
(114, 24, 3, 'english'),
(115, 24, 7, 'social studies'),
(116, 24, 9, 'social studies'),
(117, 24, 6, 'maths'),
(118, 24, 1, 'maths'),
(119, 25, 7, 'marathi'),
(120, 26, 7, 'marathi'),
(121, 26, 9, 'marathi'),
(122, 26, 11, 'science'),
(123, 27, 1, 'english'),
(124, 27, 2, 'hindi'),
(125, 27, 3, 'marathi'),
(126, 27, 4, 'maths'),
(127, 27, 5, 'science'),
(128, 27, 6, 'social studies');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `phone`, `gender`, `qualification`, `experience`) VALUES
(8, 'subhu', 'subhu@gmail.com', 56787653, 'female', 'msc maths', 7),
(5, 'juliet mary', 'julietmary@gmail.com', 12345676873, 'female', 'bsc marathi', 3),
(23, 'swaraj', 'swaraj@gmail.com', 97456786, 'male', 'bsc marathi', 12),
(6, 'ajith', 'ajith@gmail.com', 7555766268, 'male', 'med hindi', 8),
(10, 'kajal', 'kajal@gmail.com', 531134568, 'female', 'bed hindi', 5),
(11, 'rajeev', 'rajeev@gmail.com', 786482656, 'male', 'be maths', 11),
(12, 'shanthi', 'shanthi@gmail.com', 5643321345, 'female', 'med maths', 8),
(13, 'annie', 'annie@gmail.com', 1208657743, 'female', 'mphiil english', 5),
(14, 'jayshankari', 'jayshankari@gmail.com', 1234555555, 'female', 'med hindi', 6),
(15, 'wajitha', 'wajitha@gmail.com', 77765576, 'male', 'med english', 3),
(16, 'sudhakar', 'sudhakar@gmail.com', 6556676356, 'male', 'med hindi', 80),
(17, 'anandhi', 'anandhi@gmail.com', 532898988, 'female', 'med', 5),
(18, 'melba', 'melba@gmail.com', 876546575, 'female', 'med marathi', 8),
(19, 'maheshwari', 'maheshwari@gmail.com', 96764527654, 'female', 'bed science', 3),
(20, 'manikandan', 'manikandan@gmail.com', 876753234, 'male', 'med science', 9),
(21, 'revathi', 'revathi@gmail.com', 979776545, 'female', 'bed geography', 4),
(22, 'siva', 'siva@gmail.com', 9877775478, 'male', 'med history', 4),
(24, 'kanmani', 'kanmani@gmail.com', 6432436576, 'female', 'bed geography', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
