-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2020 at 08:46 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title_table` varchar(256) DEFAULT NULL,
  `blog_content` longtext,
  `siteusers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title_table`, `blog_content`, `siteusers_ID`) VALUES
(2, 'Hey', 'Hello', 7),
(3, 'Test', 'This is a test', 7),
(4, 'Title', 'Post super duper gotta make this one long so yeeeeeeeeeeeet', 7),
(5, 'Title', 'idk man', 7),
(17, 'Epic title', 'Epic content', 7),
(19, 'Bee Movie', 'According to all known laws of aviation, there is no way that a bee should be able to fly. Its wings are too small to get its fat little body off the ground. The bee, of course, flies anyway. Because bees dont care what humans think is impossible.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `comments_table`
--

CREATE TABLE `comments_table` (
  `id` int(11) NOT NULL,
  `comment_text` text,
  `blog_posts_id` int(11) NOT NULL,
  `siteusers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments_table`
--

INSERT INTO `comments_table` (`id`, `comment_text`, `blog_posts_id`, `siteusers_ID`) VALUES
(1, 'Sup nerd', 2, 7),
(2, 'Hola', 2, 7),
(3, 'Hello', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `likes_dislikes`
--

CREATE TABLE `likes_dislikes` (
  `id` int(11) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  `dislikes` int(11) DEFAULT NULL,
  `blog_posts_id` int(11) NOT NULL,
  `siteusers_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `siteusers`
--

CREATE TABLE `siteusers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `EMail` varchar(200) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siteusers`
--

INSERT INTO `siteusers` (`ID`, `Name`, `EMail`, `Birthday`, `Password`, `Username`, `Role`) VALUES
(1, 'Jim', 'Jim@hotmail.com', '2020-09-22', 'password', 'Jimbo1', NULL),
(2, 'Chad', 'Chad@bigboys.com', '2020-09-21', 'password', 'MadLadChad', NULL),
(4, 'Kim', 'kimpossible@gmail.com', '2020-09-20', 'SuperSecretPassword1', 'Kimmyp', NULL),
(5, 'Cleetus', 'Cleetus@yaboy.com', '2020-09-22', 'CleetusRocks', 'YeetCleet', NULL),
(6, 'Andrea', 'andrea@hotmail.com', '2020-10-20', 'password', 'AisCool', NULL),
(7, 'Zac', 'zebaconman@gmail.com', '2002-02-01', 'Beauxdog66', 'ThatGhostToast', 'admin'),
(8, 'Liv', 'liv.perrego@gmail.com', '2001-04-09', 'Br00klyn01', 'LPerrego', 'admin'),
(9, 'Test', 'test@test.com', '2020-11-30', 'password', 'test', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_table1_siteusers_idx` (`siteusers_ID`);

--
-- Indexes for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_table_blog_posts1_idx` (`blog_posts_id`),
  ADD KEY `fk_comments_table_siteusers1_idx` (`siteusers_ID`);

--
-- Indexes for table `likes_dislikes`
--
ALTER TABLE `likes_dislikes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Likes_Dislikes_blog_posts1_idx` (`blog_posts_id`),
  ADD KEY `fk_Likes_Dislikes_siteusers1_idx` (`siteusers_ID`);

--
-- Indexes for table `siteusers`
--
ALTER TABLE `siteusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments_table`
--
ALTER TABLE `comments_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes_dislikes`
--
ALTER TABLE `likes_dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siteusers`
--
ALTER TABLE `siteusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `fk_table1_siteusers` FOREIGN KEY (`siteusers_ID`) REFERENCES `siteusers` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `comments_table`
--
ALTER TABLE `comments_table`
  ADD CONSTRAINT `fk_comments_table_blog_posts1` FOREIGN KEY (`blog_posts_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comments_table_siteusers1` FOREIGN KEY (`siteusers_ID`) REFERENCES `siteusers` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `likes_dislikes`
--
ALTER TABLE `likes_dislikes`
  ADD CONSTRAINT `fk_Likes_Dislikes_blog_posts1` FOREIGN KEY (`blog_posts_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Likes_Dislikes_siteusers1` FOREIGN KEY (`siteusers_ID`) REFERENCES `siteusers` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
