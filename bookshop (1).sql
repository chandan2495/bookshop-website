-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2014 at 04:02 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookid` int(50) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `upvote` int(50) NOT NULL,
  `aboutbook` varchar(5000) NOT NULL,
  `aboutauthor` varchar(5000) NOT NULL,
  `catid` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `pages` int(50) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `book_name`, `author_name`, `price`, `upvote`, `aboutbook`, `aboutauthor`, `catid`, `image`, `isbn`, `pages`) VALUES
(1, 'American Military History', 'William Thomas Allison', 4497, 0, 'American Military History is uniquely tailored to American military history courses. Organized chronologically, the text begins at the point of European conflict with Native Americans and concludes with military affairs in the early 21st century. ', 'William Thomas Allison is Professor of History Georgia Southern University. He earned his Ph.D. in history at Bowling Green State University in 1995, and has taught as Visiting Professor at the Air War College and the School for Advanced Air and Space Studies.  He is author of Military Justice in Vietnam: The Rule of Law in an American War (Kansas, 2007), The Tet Offensive (Routledge, 2008), My Lai: An American Tragedy (Johns Hopkins, 2012), and The Gulf War, 1991 (Palgrave, 2012), among other w', 1, 'images/history/his1.jpg', '978-0205898503', 416),
(2, 'Africa in World', 'Erik Gilbert', 4148, 0, 'This comprehensive survey is the first to provide a view of African history in the wider context of World History. The text illustrates how Africans have influenced regions beyond the continent''s borders, how they have been influenced from outside, and how internal African developments can be compared and contrasted to those elsewhere in the world.', 'The authors show that Africans not only have shaped their own destiny but also have played a central role in a number of grand narratives of global history. In doing so, the text encourages readers to reconsider many popular or oversimplified myths regarding Africa and Africans and to explore the many issues, controversies, and debate within the field of African study.', 1, 'images/history/his2.jpg', '4849645694', 678),
(3, 'History of Australia', 'Manning Clark', 6626, 0, 'Whilst having nothing of the sweeping grandeur or personal analysis of character of the original, thyis is a useful potted summary of Clark''s view of history as the drama of a transfer of a civilisation into a silent land. ', 'Clark gives a fairly exhausive account of the arguments which built and tore down Australia. His flowering prose elaborates the rather furious divisions of religious sects, political parties, classes and races: ', 1, 'images/history/his3.jpg', '54877891231', 372);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobileno` int(50) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `username`, `password`, `emailid`, `address`, `mobileno`) VALUES
(1, 'Chandan', 'killer2495', '2495', 'chandan2495@gmail.com', NULL, NULL),
(2, 'a', 'a', 'a', 'a', NULL, NULL),
(3, 'prince', 'prince', 'prince', 'prince@gmail.com', NULL, NULL),
(5, 't', 't', 't', 't@gmail.com', NULL, NULL),
(6, 'chandra', 'chandra', 'chandra', '', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
