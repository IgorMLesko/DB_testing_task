SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `birthDate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

INSERT INTO `persons` (`id`, `firstName`, `lastName`, `birthDate`, `email`, `phone`, `description`) VALUES
(1, 'Igor', 'LLL', '2017-08-05', 'igorsdksd@gmail.com', '2147483', 'sdfheshb shsdr'),
(2, 'gfhgfd', 'dfgsdfg', '2000-01-31', 'tsrhtrht@erf.ery', '0', 'regewrg'),
(4, 'gfhgfd', 'sdfgasdf', '2002-08-26', 'tsrhtrht@erf.eryewf', '0', 'rgerasg'),
(6, 'gfhgfd', 'erger', '2014-02-20', 'asdgasdgs@wefw.ergggh', '73', 'gfhjxgfj'),
(7, 'gfhgfd', 'erger', '2014-02-20', 'asdgasdgs@wefw.ergggh', '73', 'gfhjxgfj'),
(8, 'rtyh', 'trhytr', '2027-10-03', 'tsrh4h5ytrht@erf.ery', '73', '4w5yw45'),
(9, 'gfhgfd', 'sdfgasdf', '2015-03-30', 'asdgetasdgs@wefw.ggh', '073-037-1465', 'ergtye'),
(11, 'апав', 'dgbfsdgfbs', '2013-12-28', 'htrht@erf.ery', '043-045-1465', 'sgfhdfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
