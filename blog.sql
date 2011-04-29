-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2011 at 04:06 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `cat` int(20) NOT NULL,
  `body` text NOT NULL,
  `coment` text NOT NULL,
  `unregcom` tinyint(1) NOT NULL,
  `regcom` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `userid`, `date`, `title`, `cat`, `body`, `coment`, `unregcom`, `regcom`) VALUES
(10, 3, '0000-00-00', 'Eminem', 2, 'Marshall Bruce Mathers III (born October 17, 1972), better known by his stage name Eminem, is an American rapper, record producer, and actor. Eminem quickly gained popularity in 1999 with his major-label debut album, The Slim Shady LP, which won a Grammy Award for Best Rap Album. The following album, The Marshall Mathers LP, became the fastest-selling solo album in United States history. It brought Eminem increased popularity, including his own record label, Shady Records, and brought his group project, D12, to mainstream recognition.', '\n<br/>Ivan:\n<br/>Eminem ft. Rihanna - love this song\n<br/>mordevil:\n<br/>Da i Mockingbird e mn qka\n<br/>mordevil:\n<br/>Da blagodarq', 1, 1),
(12, 2, '2011-02-15', 'Burlesque', 1, 'Burlesque is a 2010 Golden Globe award winning musical film directed and written by Steven Antin and starring Christina Aguilera and Cher. The film was released on November 24, 2010 in North America.\r\nCher and Aguilera contributed to the soundtrack album, with Aguilera contributing to eight out of the ten songs with Cher taking the remaining two. The album was released in the USA on November 22, 2010.[4] The song ''You Haven''t Seen The Last of Me'', penned by Diane Warren and sung by Cher, won the Golden Globe Award for Best Original Song in 2011.', '\n<br/>Mordevil:\n<br/>Mnogo gotin film bravo lide!\n<br/>Thral25:\n<br/>Dam dosta interesno be6e .', 0, 0),
(13, 3, '2011-02-15', 'Iron Man', 1, 'When wealthy industrialist Tony Stark is forced to build an armored suit after a life-threatening incident, he ultimately decides to use its technology to fight against evil.', '', 1, 1),
(14, 3, '2011-02-15', 'Sherlock Holmes', 1, 'Detective Sherlock Holmes and his stalwart partner Watson engage in a battle of wits and brawn with a nemesis whose plot is a threat to all of England.', '', 0, 1),
(15, 3, '2011-02-15', 'Crisis', 3, 'Crisis has four defining characteristics. Seeger, Sellnow and Ulmer explain that crises are &quot;specific, unexpected, and non-routine events or series of events that [create] high levels of uncertainty and threat or perceived threat to an organization''s high priority goals.&quot; Thus the first three characteristics are that the event is 1. unexpected (i.e., a surprise), 2. creates uncertainty, and 3. is seen as a threat to important goals. Venette argues that &quot;crisis is a process of transformation where the old system can no longer be maintained.&quot; Therefore the fourth defining quality is the need for change. If change is not needed, the event could more accurately be described as a failure.\r\n\r\nApart from natural crises that are inherently unpredictable (volcanic eruptions, tsunami etc.) most of the crises that we face are created by man. Hence the requirements of their being ''unexpected'' depends upon man failing to note the onset of crisis conditions. Some of our inability to recognise crises before they become dangerous is due to denial and other psychological responses that provide succour and protection for our emotions.', '', 1, 1),
(16, 3, '2011-02-15', 'Down of War top-3 features', 3, 'The three features that help the Dawn of War series stand out from the competition are its emphasis on visceral frontline combat, its streamlined resource model, and five playable races taken from the extremely popular Warhammer 40,000 setting.\r\n\r\nThe expansion pack is a must-have game because of the exciting content being added. Winter Assault features an entirely new race, the Imperial Guard, which will appeal to players who are interested in playing the most defensive race in the game. In addition, Winter Assault enhances and refines the original Warhammer 40,000: Dawn of War races, by adding at least one completely new unit to each, as well as by streamlining and enhancing the tech trees. In addition to all that, Winter Assault features a brand new single player experience featuring 2 campaigns, and more compelling gameplay.', '', 1, 1),
(17, 1, '2011-02-15', 'AVATAR', 1, 'Avatar is a 2009 American[6][7] epic science fiction film written and directed by James Cameron, and starring Sam Worthington, Zoe Saldana, Stephen Lang, Michelle Rodriguez, Joel David Moore, Giovanni Ribisi and Sigourney Weaver. The film is set in the mid-22nd century, when humans are mining a precious mineral called unobtanium on Pandora, a lush moon of a gas giant in the Alpha Centauri star system.[8][9][10] The expansion of the mining colony threatens the continued existence of a local tribe of Na''vi&acirc;€”a humanoid species indigenous to Pandora. The film''s title refers to the genetically engineered Na''vi-human hybrid bodies used by a team of researchers to interact with the natives of Pandora.', 'Lidiq:\r\nGreat movie (only in 3D)!\n<br/>Mordevil:\n<br/>Moje da e otnelo 10 godini da se razvie ideqta i realizaciqta no vse pak si e zaslujavalo ! :D\n<br/>Guest:\n<br/>Cool :D', 1, 1),
(19, 1, '2011-02-15', 'test asd', 1, 'asd', '', 1, 1),
(22, 3, '2011-02-18', 'Barlesque', 1, 'MN qk film s Christina Aguilera i Sher s dosta zaribqvashti pesnichki.', '\n<br/>Violinka:\n<br/>Bla bla bla', 0, 1),
(23, 8, '2011-02-23', 'Tati iska sait', 0, 'bla bla bla', '\n<br/>mordevil:\n<br/>Pa shte mu pomognem kato iska\n<br/>silvy:\n<br/>Bravo', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `theme` smallint(2) NOT NULL,
  `perm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `theme`, `perm`) VALUES
(1, 'Thral25', 'mironov25@abv.bg', '35918937e9e1a6c3d4ec971385e6296bd3b2de22', 2, 1),
(2, 'Lidiq', 'lidka_5@abv.bg', '61acb71a71deff41054d2d9b4eca4c10a65a954a', 2, 0),
(3, 'Mordevil', 'asd@php.com', 'e70b6c4406952b2386f1077747929c2815826c7b', 2, 0),
(5, 'todor', 'to6eto_td@hotmail.com', '6f5da12165acbc48e6a7a39af10ed291f5e96361', 1, 0),
(6, 'else', 'elina_kaneva@abv.bg', '9503d7607ae1b0e2bc4af16b95c99e1c707a0835', 1, 0),
(7, 'Qncheto', 'vaizy@abv.bg', '61acb71a71deff41054d2d9b4eca4c10a65a954a', 1, 0),
(8, 'Silvy', 'silvy@abv.bg', '61acb71a71deff41054d2d9b4eca4c10a65a954a', 3, 0),
(9, 'Violinka', 'asd@asd.com', '61acb71a71deff41054d2d9b4eca4c10a65a954a', 2, 0);
