-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 05:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdmquiz`
--
CREATE DATABASE IF NOT EXISTS fdmquiz DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE fdmquiz;
-- --------------------------------------------------------

--
-- Table structure for table `categories`
--


CREATE TABLE `categories` (
  `CategoryID` int(4) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `QuestionID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `QuestionID`) VALUES
(1, 'General', 1),
(1, 'General', 2),
(1, 'General', 3),
(1, 'General', 4),
(1, 'General', 5),
(1, 'General', 6),
(1, 'General', 7),
(1, 'General', 8),
(1, 'General', 9),
(1, 'General', 10),
(2, 'Sport', 11),
(2, 'Sport', 12),
(2, 'Sport', 13),
(2, 'Sport', 14),
(2, 'Sport', 15),
(2, 'Sport', 16),
(2, 'Sport', 17),
(2, 'Sport', 18),
(2, 'Sport', 19),
(2, 'Sport', 20),
(3, 'Music', 21),
(3, 'Music', 22),
(3, 'Music', 23),
(3, 'Music', 24),
(3, 'Music', 25),
(3, 'Music', 26),
(3, 'Music', 27),
(3, 'Music', 28),
(3, 'Music', 29),
(3, 'Music', 30),
(4, 'History', 31),
(4, 'History', 32),
(4, 'History', 33),
(4, 'History', 34),
(4, 'History', 35),
(4, 'History', 36),
(4, 'History', 37),
(4, 'History', 38),
(4, 'History', 39),
(4, 'History', 40);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionID` int(4) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer 1` varchar(255) NOT NULL,
  `Answer 2` varchar(255) NOT NULL,
  `Answer 3` varchar(255) NOT NULL,
  `Answer 4` varchar(255) NOT NULL,
  `Correct Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionID`, `Question`, `Answer 1`, `Answer 2`, `Answer 3`, `Answer 4`, `Correct Answer`) VALUES
(1, 'Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop ____________.', 'Wishing', 'Questioning', 'Thinking', 'Asking', '2'),
(2, 'The name of which spice comes from the French word for `nail`?', 'Cinnamon', 'Cardamom', 'Clove', 'None of the above', '3'),
(3, 'In India, the train Lifeline Express is a...', 'Hospital', 'Bank', 'Primary School', 'None of the above', '1'),
(4, 'Which Asian mountain is also known as the Savage Mountain due to the extreme difficulty of ascent?', 'Kanchenjunga', 'K2', 'Lhotse', 'None of the above', '2'),
(5, 'In 1964, which portfolio was given to Indira Gandhi in the government of Lal Bahadur Shastri?', 'Defence', 'Home', 'Information and Broadcasting', 'None of the above', '3'),
(6, 'In Alice’s Adventures in Wonderland, which game was played by the Queen of Hearts using hedgehogs as balls?', 'Quintet', 'Quidditch', 'Croquet', 'None of the above', '3'),
(7, 'With which unfortunate incident would you associate the warplane Enola Gay?', 'Sinking of the ship Bismark', 'The Hiroshima bombing', 'Storming of Bastille', 'None of the above', '2'),
(8, 'Odhra Magadha is the precursor to which Indian dance form?', 'Kuchipudi', 'Kathak', 'Odissi', 'None of the above', '3'),
(9, 'Who composed music for the 1969 film Goopy Gyne Bagha Byne', 'Satyajit Ray', 'Ravi Shankar', 'Shiv-Hari', 'None of the above', '1'),
(10, 'Where in the human body is the stapedius muscle situated?', 'Nose', 'Ears', 'Leg', 'None of the above', '2'),
(11, 'In which year did Maradona score a goal with his hand?', '1984', '1986', '1990', '1995', '2'),
(12, 'How many players are in the starting lineup for a football team?', '11', '9', '10', '12', '1'),
(13, 'Where was the 2010 FIFA World Cup held?', 'Brazil', 'France', 'South Africa', 'Spain', '3'),
(14, 'How many times has Andy Murray won Wimbledon?', 'Two', 'Three', 'One', 'Four', '1'),
(15, 'What country has won the most Olympic Medals?', 'USA', 'Germany', 'China', 'Great Britain', '1'),
(16, 'In inches, how big is the diameter of a basketball hoop?', '1984', '1986', '1990', '1995', '2'),
(17, 'In which year did England win the world cup?', '1970', '1966', '1950', '1958', '2'),
(18, 'What is the second event on day one of a men’s decathlon?', '100m Sprint', 'Long Jump', 'High Jump', 'None of the above', '2'),
(19, 'Who was the first U.S. volleyball player to win three Olympic gold medals?', 'Karch Kiraly', 'Jordan Larson', 'Kimberley Hill', 'None of the above', '1'),
(20, 'How many world records did swimmer Mark Spitz set when he won seven gold medals at the 1972 Olympics?', 'Seven', 'Ten', 'Fifteen', 'Nine', '1'),
(21, 'Name the person who replaced Ozzy Osbourne as Black Sabbath`s lead singer?', 'Ronnie James Dio', 'Judas Priest', 'Don Dokken', 'None of the above', '1'),
(22, 'To consider a band as a `big band` what is the minimum number of musicians to be needed?', '7', '11', '9', '10', '4'),
(23, 'Bjork was lead singer of what Icelandic band before pursuing a solo career?', 'Kukl', 'The Sugarcubes', 'Cocteau Twins', 'None of the above', '2'),
(24, 'In an Orchestra, which is the largest brass section instrument?', 'Trumpet', 'Trumbone', 'Tuba', 'None of the above', '3'),
(25, 'Name the singer who released the album Alf?', 'Alison Moyet', 'Aretha Louise Franklin', 'Michael Joseph Jackson', 'None of the above', '1'),
(26, 'Name the singer who released the album, Here, My Dear?', 'Frankie Gaye', 'Bruno Mars', 'Marvin Gaye', 'None of the above', '3'),
(27, 'A tribute to David Bowie`s ex-wife was given with a song by The Rolling stones, name the song?', 'Wild Horses', 'Angie', 'Gimme Shelter', 'None of the above', '2'),
(28, 'Name the blues great who was born Ellas Otha Bates?', 'Little Richard', 'Muddy Waters', 'Bo Diddley', 'None of the above', '3'),
(29, 'Name the band having its name after a scientist from the movie Barbarella?', 'Duran Duran', 'A Ha', 'Nile Rodgers', 'None of the above', '1'),
(30, 'Which Michael Jackson album featured the single, `Beat It`?', 'Invincible', 'Dangerous', 'Bad', 'Thriller', '4'),
(31, 'Who is the only person to have served as both US Vice President and President without being elected to either office?', 'George Washington', 'Lyndon B. Johnson', 'Harry Truman', 'Gerald Ford', '4'),
(32, 'Who was the longest serving non-royal world leader who rose to power after 1900?', 'Francisco Franco', 'Kim Il-Sung', 'Muammar Gaddafi', 'Fidel Castro', '4'),
(33, 'In 1781, William Herschel discovered which planet?', 'Uranus', 'Jupiter', 'Saturn', 'Neptune', '1'),
(34, 'During which decade was slavery abolished in the United States?', '1840s', '1850s', '1860s', '1870s', '3'),
(35, 'During which year did Christopher Columbus first arrive in the Americas?', '1498', '1501', '1495', '1492', '4'),
(36, 'Whose autobiography was titled `Long Walk to Freedom`?', 'Thomas Jefferson', 'Nelson Mandela', 'Mahatma Gandhi', 'Aung San Suu Kyi', '3'),
(37, 'Which artist painted `The Scream`?', 'Claude Monet', 'Vincent van Gogh', 'Pablo Picasso', 'Edvard Munch', '4'),
(38, 'Who is the only US president to serve more than two terms?', 'Ronald Reagan', 'Abraham Lincoln', 'George Washington', 'Franklin D. Roosevelt', '4'),
(39, 'Which African nation gained independence from France in 1962?', 'Algeria', 'Ethiopia', 'South Africa', 'Kenya', '1'),
(40, 'Which of these countries was considered part of the Axis in World War II?', 'China', 'Japan', 'France', 'Poland', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `Email` varchar(20) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `username`, `password`, `created_at`, `Email`, `admin`) VALUES
(1, '', '', 'gregor', '$2y$10$fXp3oUdbqAKBEKTIdTyyfO5T77o5VpuxxC0x3BSmXk/7995boeW0e', '2019-04-10 15:24:02', '', 1),
(3, '', '', 'ysys', '$2y$10$V5k8WwowQhP7z6WtLDXUeOv08/7YXRdpOqzaycfwMffrDTiSrv4t2', '2019-04-17 00:41:42', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userscore`
--

CREATE TABLE `userscore` (
  `UserID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `scoreID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userscore`
--

INSERT INTO `userscore` (`UserID`, `CategoryID`, `Score`, `scoreID`) VALUES
(1, 1, 4, 1),
(1, 1, 3, 2),
(1, 1, 1, 3),
(3, 1, 1, 4),
(1, 2, 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`,`QuestionID`),
  ADD KEY `QuestionID` (`QuestionID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userscore`
--
ALTER TABLE `userscore`
  ADD PRIMARY KEY (`scoreID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `QuestionID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userscore`
--
ALTER TABLE `userscore`
  MODIFY `scoreID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`QuestionID`) REFERENCES `questions` (`QuestionID`);

--
-- Constraints for table `userscore`
--
ALTER TABLE `userscore`
  ADD CONSTRAINT `categoryidfk` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`),
  ADD CONSTRAINT `useridfk` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
