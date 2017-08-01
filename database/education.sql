-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 05:38 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `qid` int(11) NOT NULL,
  `question` text,
  `answer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`qid`, `question`, `answer`) VALUES
(1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `uid`, `name`, `email`, `password`, `avatar`) VALUES
(1, 'yogesh', 'Yogesh Gupta', 'yogesh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/cat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `name` varchar(128) NOT NULL,
  `uid` varchar(256) NOT NULL,
  `date` text,
  `totalCorrect` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`name`, `uid`, `date`, `totalCorrect`) VALUES
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 03:56:26 AM', 0),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 03:56:34 AM', 2),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 04:40:48 AM', 5),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 04:40:56 AM', 4),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 04:41:06 AM', 2),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 04:41:13 AM', 3),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 06:59:57 AM', 1),
('Yogesh Gupta', 'yogesh', 'Saturday 5th of November 2016 07:13:17 AM', 0),
('', '', 'Tuesday 1st of August 2017 05:14:48 PM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_resource_past_paper`
--

CREATE TABLE `student_resource_past_paper` (
  `Paper_ID` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Month` char(255) DEFAULT NULL,
  `Year` int(255) DEFAULT NULL,
  `Paper_Path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_resource_past_paper`
--

INSERT INTO `student_resource_past_paper` (`Paper_ID`, `Name`, `Month`, `Year`, `Paper_Path`) VALUES
('HIN13', 'HINDI', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('HIN15', 'HINDI', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('HIN16', 'HINDI', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('ENG13', 'ENGLISH', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('ENG15', 'ENGLISH', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('ENG16', 'ENGLISH', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('MAT13', 'MARATHI', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('ALG13', 'ALGEBRA', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('ALG15', 'ALGEBRA', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('ALG16', 'ALGEBRA', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GTY13', 'GEOMETRY', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GTY15', 'GEOMETRY', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GTY16', 'GEOMETRY', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('HIS13', 'HISTORY', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('HIS15', 'HISTORY', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('HIS16', 'HISTORY', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GEO13', 'GEOGRAPHY', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GEO14', 'GEOGRAPHY', 'MARCH', 2014, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GEO15', 'GEOGRAPHY', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('GEO16', 'GEOGRAPHY', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('SCI12', 'SCIENCE', 'MARCH', 2012, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('SCI13', 'SCIENCE', 'MARCH', 2013, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('SCI14', 'SCIENCE', 'MARCH', 2014, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('SCI15', 'SCIENCE', 'MARCH', 2015, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('SCI116', 'SCIENCE-1', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf'),
('SCI216', 'SCIENCE-2', 'MARCH', 2016, 'files/Past_Papers/SSC-2013/ssc-hindi.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `syllabusid` int(11) NOT NULL,
  `standard` varchar(60) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabusid`, `standard`, `path`) VALUES
(1, 'ten', 'files/Past_Papers/SSC-2013/ssc-history.pdf'),
(2, 'eleven', 'files/Past_Papers/SSC-2013/ssc-history.pdf'),
(3, 'twelve', 'files/Past_Papers/SSC-2013/ssc-history.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_tb3`
--

CREATE TABLE `tutorial_tb3` (
  `student_id` int(11) DEFAULT NULL,
  `student_name` varchar(30) DEFAULT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Dumping data for table `tutorial_tb3`
--

INSERT INTO `tutorial_tb3` (`student_id`, `student_name`, `submission_date`) VALUES
(1234567, 'vaibhav', '1996-07-13'),
(542675, 'yogesh', '1996-07-11'),
(175432, 'yash', '1996-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_resource_past_paper`
--
ALTER TABLE `student_resource_past_paper`
  ADD PRIMARY KEY (`Paper_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
