-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2017 at 11:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seatingarrangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectCode` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `ShortNames` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubjectCode`, `Name`, `ShortNames`) VALUES
('TEITC602', 'Distributed System', 'D.S'),
('TEITC604', 'Data mining and business Intelligence', 'D.M.B.I'),
('TEITC605', 'Advanced Internet Technology', 'A.I.T'),
('TEITC601', 'Software Engineering', 'S.E'),
('TEITC603', 'Software and Web Security', 'S.W.S'),
('BEITC701', 'Software Project Management', 'S.P.M'),
('BEITC702', 'Cloud Computing', 'C.C'),
('BEITC703', 'Intelligent System', 'I.S'),
('BEITC704', 'Wireless Technology', 'W.T'),
('BEITC705', 'Elective-1', 'E-1'),
('BEITC801', 'Storage Network Management and Retrieval', 'S.N.M.R'),
('BEITC802', 'Big Data Analytics', 'B.D.A'),
('BEITC803', 'Computer Simulation and Modeling', 'C.S.M'),
('BEITC804', 'Elective-2', 'E-2'),
('TEITC501', 'Computer Graphics And Virtual Reality', 'C.G.V.R'),
('TEITC502', 'Operating System', 'O.S'),
('TEITC503', 'Microcontroller and Embeded System', 'M.C.E.S'),
('TEITC504', 'Advanced Database Management Systems', 'A.D.B.M.S'),
('TEITC505', 'Open Source Technologies', 'O.S.T'),
('TEITC506', 'Business Communication And Ethics', 'B.C.E'),
('SEITC301', 'Applied Mathemetics 3', 'A.M 3'),
('SEITC302', 'Data Structure And Algorithm', 'D.S.A'),
('SEITC303', 'Object Oriented Programming Methodology', 'O.O.P.M'),
('SEITC304', 'Analog And Digital Circuits', 'A.D.C'),
('SEITC306', 'Principles Of Analog And Digital Comm', 'P.A.D.C'),
('SEITC305', 'Database Management System', 'D.B.M.S'),
('SEITC401', 'Applied Mathemetics 4', 'A.M 4'),
('SEITC402', 'Computer Networks', 'C.N'),
('SEITC403', 'Computer Organization And Architecture', 'C.O.A'),
('SEITC404', 'Automata Theory', 'A.T'),
('SEITC405', 'Web Programming', 'W.P'),
('SEITC406', 'Information Theory And Coding', 'I.T.C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
