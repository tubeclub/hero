-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2016 at 02:32 PM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gotestsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(255) DEFAULT NULL,
  `slot` varchar(255) DEFAULT NULL,
  `etat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `client`, `slot`, `etat`) VALUES
(1, 'ca-pub-4924474933877335', '7479503007', 'enable ');

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE IF NOT EXISTS `age` (
  `idage` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idage`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE IF NOT EXISTS `conf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ap` varchar(45) DEFAULT NULL,
  `secret` varchar(45) DEFAULT NULL,
  `page_fb` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `conf`
--

INSERT INTO `conf` (`id`, `id_ap`, `secret`, `page_fb`, `logo`) VALUES
(1, '2194918024065728', 'e4cb3066c345241aee520df213b3413c', 'https://www.facebook.com/allquizz ', 'Sanslog.png');

-- --------------------------------------------------------

--
-- Table structure for table `confi`
--

CREATE TABLE IF NOT EXISTS `confi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `seo` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `confi`
--

INSERT INTO `confi` (`id`, `title`, `description`, `seo`, `icon`) VALUES
(1, 'Bestfunnyapps -  you deserve the real fun.', 'you deserve the real fun.', 'you ,deserve ,the real fun,', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `cpa`
--

CREATE TABLE IF NOT EXISTS `cpa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr1`
--

CREATE TABLE IF NOT EXISTS `fr1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_photoonefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `fr1`
--

INSERT INTO `fr1` (`id`, `x1`, `y1`, `x2`, `y2`, `w`, `h`, `squizes_id`) VALUES
(44, 606, 149, 787, 332, 181, 182, 154);

-- --------------------------------------------------------

--
-- Table structure for table `fr2`
--

CREATE TABLE IF NOT EXISTS `fr2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototofr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `fr2`
--

INSERT INTO `fr2` (`id`, `x1`, `y1`, `x2`, `y2`, `w`, `h`, `squizes_id`) VALUES
(16, 425, 169, 588, 337, 163, 167, 154);

-- --------------------------------------------------------

--
-- Table structure for table `fr3`
--

CREATE TABLE IF NOT EXISTS `fr3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fr3`
--

INSERT INTO `fr3` (`id`, `x1`, `y1`, `x2`, `y2`, `w`, `h`, `squizes_id`) VALUES
(11, 257, 176, 413, 332, 156, 156, 154);

-- --------------------------------------------------------

--
-- Table structure for table `fr4`
--

CREATE TABLE IF NOT EXISTS `fr4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr5`
--

CREATE TABLE IF NOT EXISTS `fr5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr6`
--

CREATE TABLE IF NOT EXISTS `fr6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr7`
--

CREATE TABLE IF NOT EXISTS `fr7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr8`
--

CREATE TABLE IF NOT EXISTS `fr8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr9`
--

CREATE TABLE IF NOT EXISTS `fr9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr10`
--

CREATE TABLE IF NOT EXISTS `fr10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fr11`
--

CREATE TABLE IF NOT EXISTS `fr11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`squizes_id`),
  KEY `fk_phototreefr_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE IF NOT EXISTS `name` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  UNIQUE KEY `idname` (`idname`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`idname`, `x`, `y`, `squizes_id`, `color`, `size`) VALUES
(96, '17', '374', 154, '0', '20');

-- --------------------------------------------------------

--
-- Table structure for table `name_fr1`
--

CREATE TABLE IF NOT EXISTS `name_fr1` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `name_fr1`
--

INSERT INTO `name_fr1` (`idname`, `x`, `y`, `squizes_id`, `color`, `size`) VALUES
(31, '636', '367', 154, '0', '20');

-- --------------------------------------------------------

--
-- Table structure for table `name_fr2`
--

CREATE TABLE IF NOT EXISTS `name_fr2` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `name_fr2`
--

INSERT INTO `name_fr2` (`idname`, `x`, `y`, `squizes_id`, `color`, `size`) VALUES
(14, '441', '373', 154, '0', '20');

-- --------------------------------------------------------

--
-- Table structure for table `name_fr3`
--

CREATE TABLE IF NOT EXISTS `name_fr3` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `name_fr3`
--

INSERT INTO `name_fr3` (`idname`, `x`, `y`, `squizes_id`, `color`, `size`) VALUES
(7, '263', '369', 154, '0', '20');

-- --------------------------------------------------------

--
-- Table structure for table `name_fr4`
--

CREATE TABLE IF NOT EXISTS `name_fr4` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr5`
--

CREATE TABLE IF NOT EXISTS `name_fr5` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr6`
--

CREATE TABLE IF NOT EXISTS `name_fr6` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr7`
--

CREATE TABLE IF NOT EXISTS `name_fr7` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr8`
--

CREATE TABLE IF NOT EXISTS `name_fr8` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr9`
--

CREATE TABLE IF NOT EXISTS `name_fr9` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr10`
--

CREATE TABLE IF NOT EXISTS `name_fr10` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `name_fr11`
--

CREATE TABLE IF NOT EXISTS `name_fr11` (
  `idname` int(11) NOT NULL AUTO_INCREMENT,
  `x` varchar(45) DEFAULT NULL,
  `y` varchar(45) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idname`,`squizes_id`),
  KEY `fk_name_squizes1_idx` (`squizes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `squizes`
--

CREATE TABLE IF NOT EXISTS `squizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` longtext CHARACTER SET utf8,
  `backgroundm` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `imagetest` varchar(255) DEFAULT NULL,
  `bc1` varchar(255) DEFAULT NULL,
  `bc2` varchar(255) DEFAULT NULL,
  `bc3` varchar(255) DEFAULT NULL,
  `bc4` varchar(255) DEFAULT NULL,
  `result1` longtext,
  `type` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `users` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `squizes`
--

INSERT INTO `squizes` (`id`, `date`, `titre`, `description`, `backgroundm`, `background`, `imagetest`, `bc1`, `bc2`, `bc3`, `bc4`, `result1`, `type`, `etat`, `users`) VALUES
(112, '2016-10-29', 'What is your role on Earth', 'What is your role on Earth', 'sv6859gqhm.jpg', '1555.jpg', '1555.jpg', 'sv6859gqhm.jpg', 'xgppl6etxj.jpg', 'xgppl6etxj.jpg', 'xgppl6etxj.jpg', NULL, 'amis', 'desable', '12'),
(113, '2016-11-04', 'Which door does your heart have the key to', 'Which door does your heart have the key to', 'd2simkf9xp.jpg', '1567.jpg', '1567.jpg', 'd2simkf9xp.jpg', 'd2simkf9xp.jpg', 'd2simkf9xp.jpg', 'd2simkf9xp.jpg', NULL, NULL, 'enable', '15'),
(142, '2016-10-30', 'What Does Your Lover Thinks Of  You', 'Check Out Now What Your Lover Thinks About You But Never Openly Says to You', 'Slide4.JPG', 'Slide3.JPG', 'Slide3.JPG', 'Slide5.JPG', 'Slide6.JPG', 'Slide7.JPG', 'Slide8.JPG', 'simple', NULL, 'enable', '13'),
(143, '2016-11-04', 'When Will You Meet Your Life Partner', 'Check Out Now When will You be meeting your life partner.  ', 'Slide13.JPG', 'Slide12.JPG', 'Slide12.JPG', 'Slide14.JPG', 'Slide15.JPG', 'Slide16.JPG', 'Slide17.JPG', 'simple', NULL, 'enable', '15'),
(144, '2016-11-04', 'How Many People Are Jealous Of You', 'Click Here and Check Out Now How Many of the people you know are jealous on your smile.', 'Slide6.JPG', 'Slide5.JPG', 'Slide5.JPG', 'Slide7.JPG', 'Slide8.JPG', 'Slide9.JPG', 'Slide10.JPG', 'simple', NULL, 'enable', '4'),
(154, '2016-11-29', 'Who will still be your friends in 50 years	', 'Who will still be your friends in 50 years	', 'uhrv946myh.jpg', 'Who will still be your friends in 50 years.jpg', 'Who will still be your friends in 50 years.jpg', 'uhrv946myh.jpg', 'uhrv946myh.jpg', 'uhrv946myh.jpg', 'uhrv946myh.jpg', 'simple', NULL, 'enable', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `w` int(11) DEFAULT NULL,
  `h` int(11) DEFAULT NULL,
  `squizes_id` int(11) NOT NULL,
  PRIMARY KEY (`id_type`,`squizes_id`),
  KEY `fk_type_squizes_idx` (`squizes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `name`, `x1`, `y1`, `x2`, `y2`, `w`, `h`, `squizes_id`) VALUES
(175, NULL, 84, 220, 460, 590, 376, 370, 144),
(176, NULL, 52, 172, 426, 546, 374, 374, 143),
(177, NULL, 36, 230, 446, 636, 410, 406, 142),
(179, NULL, 25, 113, 261, 356, 236, 242, 113),
(180, NULL, 10, 88, 298, 411, 288, 322, 112),
(188, NULL, 10, 133, 166, 304, 156, 171, 154);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `local` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `idfb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=708 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `photo`, `email`, `name`, `gender`, `age`, `local`, `idfb`) VALUES
(547, 'http://demo.argouquiz.com/assets/img/122/382169315506061.jpg', 'chumburidzeofficial@gmail.com', 'Aleksandre Chumburidze', 'male', '02/09/1996', 'Kyiv, Ukraine', '382169315506061'),
(548, 'http://demo.argouquiz.com/assets/img/121/10154526060336132.jpg', 'vamsi.godavarthi@gmail.com', 'Vamsi Krishna Varma', 'male', '03/08/1983', 'Hyderabad, India', '10154526060336132'),
(549, 'http://demo.argouquiz.com/assets/img/113/1703428326642624.jpg', 'ma7allll@gmail.com', 'Ahmed Kerra', 'male', '06/24/1990', 'Giza, Egypt', '1703428326642624'),
(550, 'http://demo.argouquiz.com/assets/img/113/1609495689346260.jpg', 'osama2025osama@gmail.com', 'Jode Mohamed', 'female', NULL, NULL, '1609495689346260'),
(551, 'http://demo.argouquiz.com/assets/img/120/1248339985226481.jpg', 'gamal_love2232@yahoo.com', 'Gamal Kemo', 'male', '12/01/1992', 'Maghaghah, Al Minya, Egypt', '1248339985226481'),
(552, 'http://demo.argouquiz.com/assets/img/122/1802290626681102.jpg', 'taslima.kabir1@gmail.com', 'Taslima Kabir', 'female', '06/16/1989', 'Lake View Terrace, California', '1802290626681102'),
(553, 'http://demo.argouquiz.com/assets/img/114/889330081197801.jpg', 'hellas@otenet.gr', 'Paschalis Ketetzoudis', 'male', '02/22/1977', 'Athens, Greece', '889330081197801'),
(554, 'http://demo.argouquiz.com/assets/img/113/354387568234174.jpg', 'inova168@gmail.com', 'Jan Dara', 'male', NULL, NULL, '354387568234174'),
(555, 'http://demo.argouquiz.com/assets/img/122/373860986335893.jpg', 'maliwadyogeshkumar00@gmail.com', 'Yogesh Maliwad', 'male', '08/13/1991', 'Ahmedabad, India', '373860986335893'),
(556, 'http://demo.argouquiz.com/assets/img/122/10209015160668871.jpg', 'mamon.soloist@gmail.com', 'Ahmed Soudy', 'male', '10/28/1980', 'Cairo, Egypt', '10209015160668871'),
(557, 'http://demo.argouquiz.com/assets/img/121/349620178722410.jpg', 'jagata123321@gmail.com', 'Zura Mgaloblishvili', 'male', NULL, NULL, '349620178722410'),
(558, 'http://demo.argouquiz.com/assets/img/122/1833943473496302.jpg', 'ramdani92@outlook.fr', 'Ahmed Ramdani', 'male', '08/03/1991', 'New York, New York', '1833943473496302'),
(559, 'http://demo.argouquiz.com/assets/img/120/319982258361163.jpg', 'ibadlyneedit40@gmail.com', 'Adi Kapoor', 'male', '04/08/1991', 'Delhi, India', '319982258361163'),
(560, 'http://demo.argouquiz.com/assets/img/121/10154104865039506.jpg', 'guibufoni@gmail.com', 'Guilherme Bufoni', 'male', '06/17/1986', 'São Paulo, Brazil', '10154104865039506'),
(561, 'http://demo.argouquiz.com/assets/img/122/316662832045350.jpg', 'raffaellanodini@accademiapareto.it', 'Raffaella Nodini', 'female', '01/01/1970', 'Rome, Italy', '316662832045350'),
(562, 'http://demo.argouquiz.com/assets/img/122/1151873224859784.jpg', 'dave4real59@yahoo.com', 'David Chukwuma', 'male', '08/25/1992', 'Owerri, Imo', '1151873224859784'),
(563, 'http://demo.argouquiz.com/assets/img/120/1212862608780446.jpg', 'c0der.man.007@gmail.com', 'ẪĦmẻḓ Elsheshtawy', 'male', '03/15/1988', 'Mansoura', '1212862608780446'),
(564, 'http://demo.argouquiz.com/assets/img/122/284074488638025.jpg', 'elbachirargoub@gmail.com', 'El Bachir Argoub', 'male', '06/01/1989', 'Oujda', '284074488638025'),
(565, 'http://demo.argouquiz.com/assets/img/122/357720291243155.jpg', 'luka500luka@hotmail.com', 'Luka Goderdzishvili', 'male', '09/12/1989', 'Tbilisi, Georgia', '357720291243155'),
(566, 'http://demo.argouquiz.com/assets/img/120/1299355580098186.jpg', 'maxamadok@gmail.com', 'Cazaam Binu Cali', 'male', '10/01/1994', 'Mogadishu, Banadir, Somalia', '1299355580098186'),
(567, 'http://demo.argouquiz.com/assets/img/114/1284189074934223.jpg', 'medialandinfo@gmail.com', 'Hoàng Ngọc Phượng', 'male', '06/26/1981', 'Ho Chi Minh City, Vietnam', '1284189074934223'),
(568, 'http://demo.argouquiz.com/assets/img/120/10154691993324031.jpg', 'byanjiong@yahoo.com', 'Boo Yan Jiong', 'male', '11/22/1983', 'New York, Florida', '10154691993324031'),
(569, 'http://demo.argouquiz.com/assets/img/121/195384094229819.jpg', 'calvin.andrey1980@mail.com', 'Jalel Sedki', 'male', NULL, NULL, '195384094229819'),
(570, 'http://demo.argouquiz.com/assets/img/120/1089632047753156.jpg', 'adasco24@yahoo.com', 'Adaz D. Muz', 'male', '05/21/1993', 'Buea', '1089632047753156'),
(571, 'http://demo.argouquiz.com/assets/img/122/659695380855786.jpg', 'djflaytops2019@hotmail.com', 'Edson Viana Von Paumgartten Júnior', 'male', '01/26/1993', 'Parauapebas', '659695380855786'),
(572, 'http://demo.argouquiz.com/assets/img/120/1836243076652976.jpg', 'photoslove2014@hotmail.com', 'Anglina Martien', 'female', '03/10/1989', 'San Francisco, California', '1836243076652976'),
(573, 'http://demo.argouquiz.com/assets/img/114/1129972330423203.jpg', 'selahin007@gmail.com', 'Sela Hin', 'male', '01/18/1994', 'Siem Reap', '1129972330423203'),
(574, 'http://demo.argouquiz.com/assets/img/114/10208961818180946.jpg', 'deronnyz@gmail.com', 'Ronnyz Apchaar', 'male', NULL, NULL, '10208961818180946'),
(575, 'http://demo.argouquiz.com/assets/img/122/308356609547297.jpg', 'vanirammys@gmail.com', 'Ramu Sathyamurthy', 'male', NULL, NULL, '308356609547297'),
(576, 'http://demo.argouquiz.com/assets/img/122/1271789649538956.jpg', 'gangmorgan4@hotmail.com', 'Siciid Morgan', 'male', '04/20/1993', 'Hargeisa, Somalia', '1271789649538956'),
(577, 'http://demo.argouquiz.com/assets/img/122/1181444671901179.jpg', 'mhamad@graphic-designer.com', 'Mhamad Majeed', 'male', '10/26/1990', 'Washington, District of Columbia', '1181444671901179'),
(579, 'http://demo.argouquiz.com/assets/img/122/10210151097681122.jpg', 'stefanobeck@gmail.com', 'Stefano Cocca', 'male', '12/25/1974', 'Rome, Italy', '10210151097681122'),
(581, 'http://demo.argouquiz.com/assets/img/122/158355561292946.jpg', 'ismailargoub1@gmail.com', 'Ismail L''oujdii', 'male', '06/22/1993', 'Oujda', '158355561292946'),
(582, 'http://demo.argouquiz.com/assets/img/132/192969671147663.jpg', 'lidor.david@walla.com', 'Lidor David', 'male', '01/04/1996', 'Holon, Israel', '192969671147663'),
(583, 'http://demo.argouquiz.com/assets/img/134/1774726846135459.jpg', 'issmailhp5@gmail.com', 'اسماعيل ال مهران', 'male', '06/22/1988', 'Dubai, United Arab Emirates', '1774726846135459'),
(584, 'http://demo.argouquiz.com/assets/img/133/543164882552185.jpg', 'devteamar@gmail.com', 'Ismail Argoub', 'male', '06/22/1995', 'Oujda', '543164882552185'),
(585, 'http://demo.argouquiz.com/assets/img/130/1009879552456001.jpg', 'knives@outlook.com.br', 'Gabriel Santana', 'male', '11/05/1997', 'São Lourenço, Minas Gerais', '1009879552456001'),
(586, 'http://demo.argouquiz.com/assets/img/122/344192962585834.jpg', 'kazz20094@gmail.com', 'Ionut Copcea', 'male', '05/25/1994', 'Barrow in Furness', '344192962585834'),
(587, 'http://demo.argouquiz.com/assets/img/141/184544708662493.jpg', 'arthur.alhasov1991@yandex.ru', 'Arthur Alchasov', 'male', '08/08/1991', 'Ashdod', '184544708662493'),
(588, 'http://demo.argouquiz.com/assets/img/120/1167136000032865.jpg', 'arilson10rj@hotmail.com', 'Arilson Lima', 'male', '07/31/1997', 'Rio de Janeiro, Brazil', '1167136000032865'),
(589, 'http://demo.argouquiz.com/assets/img/120/1061409447291765.jpg', 'jeferson.jreis@icloud.com', 'Jeferson José', 'male', '06/13/1991', 'Ipatinga', '1061409447291765'),
(590, 'http://demo.argouquiz.com/assets/img/114/1689703464676894.jpg', 'junior.turbobox@gmail.com', 'Newton Junior', 'male', '03/01/1980', 'Rio de Janeiro, Brazil', '1689703464676894'),
(591, 'http://demo.argouquiz.com/assets/img/114/327701114262614.jpg', 'engr.limonahmed@gmail.com', 'Limon Ahmed', 'male', '10/04/1995', 'Jamgara, Dhaka, Bangladesh', '327701114262614'),
(592, 'http://demo.argouquiz.com/assets/img/121/1091192880936565.jpg', 'tucristo@aol.com', 'Kervin Frometa', 'male', '07/20/1979', 'Houston, Texas', '1091192880936565'),
(593, 'http://demo.argouquiz.com/assets/img/120/1185203158226879.jpg', 'kletsher@gmail.com', 'Tamer Sharkas', 'male', '11/01/1974', 'Hammam-Plage, Tunis, Tunisia', '1185203158226879'),
(594, 'http://demo.argouquiz.com/assets/img/114/699237766919952.jpg', 'pavankumarv111@yahoo.com', 'Pavan Kumar', 'male', '11/19/1995', 'Ranchi, Jharkhand', '699237766919952'),
(595, 'http://demo.argouquiz.com/assets/img/141/10210791921784190.jpg', 'orkdukinz@hotmail.com', 'Boula Boula', 'male', '10/04/1982', 'Lausanne, Switzerland', '10210791921784190'),
(596, 'http://demo.argouquiz.com/assets/img/113/634985206673602.jpg', 'fay1z059@gmail.com', 'Fáyëz Jãd Állah', 'male', '03/13/1996', 'Gaza', '634985206673602'),
(597, 'http://demo.argouquiz.com/assets/img/141/688597227983148.jpg', 'robelworker@yahoo.com', 'Robel Mahmud', 'male', '04/25/1985', 'Comilla', '688597227983148'),
(598, 'http://demo.argouquiz.com/assets/img/114/1163046600429086.jpg', 'arieshitler@gmail.com', 'Ares Az', 'male', '03/24/1984', 'Ulaanbaatar, Mongolia', '1163046600429086'),
(599, 'http://demo.argouquiz.com/assets/img/141/10155334494362802.jpg', 'sad-_-@live.com', 'Moha Sa', 'male', '03/26/1993', 'Beirut, Lebanon', '10155334494362802'),
(600, 'http://demo.argouquiz.com/assets/img/114/1641320602826052.jpg', 'tudor.stevens@yandex.com', 'Wendy Stevens', 'female', '11/07/1990', 'Chicago, Illinois', '1641320602826052'),
(601, 'http://demo.argouquiz.com/assets/img/134/1275410622510715.jpg', 'yasine.boubakri@gmail.com', 'Yassine Boubakri', 'male', '03/20/1993', 'Agadir, Morocco', '1275410622510715'),
(602, 'http://demo.argouquiz.com/assets/img/134/10205478032630067.jpg', 'tadart16@hotmail.com', 'Omar Abakhir', 'male', '05/05/1993', 'Agadir, Morocco', '10205478032630067'),
(603, 'http://demo.argouquiz.com/assets/img/134/10154103903568108.jpg', 'lui_2012@yahoo.com', 'Mohamed Gabr', 'male', '12/20/1985', 'Damietta', '10154103903568108'),
(604, 'http://demo.argouquiz.com/assets/img/122/836117906531008.jpg', 'bisu758@gmail.com', 'Biswajit Das', 'male', '02/10/1996', 'Dubai, United Arab Emirates', '836117906531008'),
(605, 'http://demo.argouquiz.com/assets/img/134/1708856746099982.jpg', 'jlogan950@gmail.com', 'James Logan', 'male', NULL, NULL, '1708856746099982'),
(606, 'http://demo.argouquiz.com/assets/img/122/1094455267320385.jpg', 'marlonraphiphop@gmail.com', 'Marlon Schemberger', 'male', '05/13/1992', 'Ponta Grossa', '1094455267320385'),
(607, 'http://demo.argouquiz.com/assets/img/141/748049145332875.jpg', 'dotruongvip@gmail.com', 'Do Truong', 'male', '01/02/1990', 'Hanoi, Vietnam', '748049145332875'),
(608, 'http://demo.argouquiz.com/assets/img/141/918620674940217.jpg', 'fillipejesus@hotmail.com', 'Alcir Fellipe', 'male', '02/24/1996', 'Rio de Janeiro, Brazil', '918620674940217'),
(609, 'http://demo.argouquiz.com/assets/img/121/1784536205143722.jpg', 'mihalcea.alexandru96@gmail.com', 'Mihalcea Alexandru', 'male', '03/08/1996', 'Bucharest, Romania', '1784536205143722'),
(610, 'http://demo.argouquiz.com/assets/img/121/1193339294038220.jpg', 'ndeckson@yahoo.fr', 'Deck Son', 'male', '01/09/1986', 'Bamenda, Cameroon', '1193339294038220'),
(611, 'http://demo.argouquiz.com/assets/img/122/1854592834761736.jpg', 'barroswesley41@gmail.com', 'Wesley Silva', 'male', '10/15/1996', 'Porto Alegre', '1854592834761736'),
(612, 'http://demo.argouquiz.com/assets/img/122/223988574688537.jpg', 'albasotit@gmail.com', 'Alba Soti', 'female', NULL, NULL, '223988574688537'),
(613, 'http://demo.argouquiz.com/assets/img/120/240156686400034.jpg', 'daphine.wachuka@gmail.com', 'Outfits Avenue', 'male', '02/16/2000', 'Nairobi, Kenya', '240156686400034'),
(614, 'http://demo.argouquiz.com/assets/img/151/10209125324904449.jpg', 'abasit2020@yahoo.com', 'Abdul Basit', 'male', '02/01/1981', 'California City, California', '10209125324904449'),
(615, 'http://demo.argouquiz.com/assets/img/122/306280483084571.jpg', 'llamyae51@gmail.com', 'لمياء خير الهدى', 'female', '02/01/1996', 'Amman, Jordan', '306280483084571'),
(616, 'http://demo.argouquiz.com/assets/img/151/1184792181597552.jpg', 'nasirnasra2014@gmail.com', 'ناصر محمد', 'male', '11/13/1977', 'Omdurman, Al Kharţūm, Sudan', '1184792181597552'),
(617, 'http://demo.argouquiz.com/assets/img/122/1586005554759128.jpg', 'marius_o23@yahoo.com', 'Marius Oros', 'male', '03/29/1984', 'Baia Mare', '1586005554759128'),
(618, 'http://demo.argouquiz.com/assets/img/114/1331104573591009.jpg', 'faizanattari1988@gmail.com', 'Faizan Ansari', 'male', '04/19/1988', 'Karachi, Pakistan', '1331104573591009'),
(619, 'http://demo.argouquiz.com/assets/img/122/1247697825298117.jpg', 'jayasnkr1@gmail.com', 'Jaya Sankar', 'male', '10/08/1992', 'Hyderabad, India', '1247697825298117'),
(620, 'http://demo.argouquiz.com/assets/img/114/766423750175046.jpg', 'chethana_bandara@yahoo.com', 'Chethana Bandara', 'male', '01/24/1994', 'Malabe', '766423750175046'),
(621, 'http://demo.argouquiz.com/assets/img/151/651901758322617.jpg', 'nho2em@yahoo.com', 'Nho Em', 'female', '01/01/1992', 'Ho Chi Minh City, Vietnam', '651901758322617'),
(622, 'http://demo.argouquiz.com/assets/img/121/368654120139724.jpg', 'cantorpablorios@gmail.com', 'Pablo Rios', 'male', '07/19/1996', 'Patos de Minas', '368654120139724'),
(623, 'http://demo.argouquiz.com/assets/img/151/1136600696423295.jpg', 'abdellatif.rahouti@gmail.com', 'Abdellatif Rahouti', 'male', NULL, NULL, '1136600696423295'),
(624, 'http://demo.argouquiz.com/assets/img/151/1739748839683746.jpg', 'zk53043@gmail.com', 'Hira Ali', 'female', '12/20/1996', 'Islamabad, Pakistan', '1739748839683746'),
(625, 'http://demo.argouquiz.com/assets/img/151/1772801736323813.jpg', 'jard2@bk.ru', 'Gurgen Muradyan', 'male', NULL, NULL, '1772801736323813'),
(626, 'http://demo.argouquiz.com/assets/img/151/1061439003934429.jpg', 'levansky@live.com', 'ლევანი სხირტლაძე', 'male', '02/24/1996', 'Tbilisi, Georgia', '1061439003934429'),
(627, 'http://demo.argouquiz.com/assets/img/114/2121184611440548.jpg', 'infoessolh@gmail.com', 'Ali Essolh', 'male', '06/23/1991', 'Essaouira', '2121184611440548'),
(628, 'http://demo.argouquiz.com/assets/img/114/10211381649925066.jpg', 'roddycstafford@gmail.com', 'Roddy Stafford', 'male', '01/11/1978', 'Glasgow, United Kingdom', '10211381649925066'),
(629, 'http://demo.argouquiz.com/assets/img/114/1769846943278201.jpg', 'ismail@avdas.net', 'İsmail Avdaş', 'male', '09/01/1981', 'Eskisehir, Turkey', '1769846943278201'),
(630, 'http://demo.argouquiz.com/assets/img/114/1349075921769832.jpg', 'kate.amol0@gmail.com', 'Amol Kate', 'male', '10/21/1984', 'Mumbai, India', '1349075921769832'),
(632, 'http://demo.argouquiz.com/assets/img/151/371492879865231.jpg', 'igorramosyb@gmail.com', 'Igor Ramos', 'male', NULL, NULL, '371492879865231'),
(633, 'http://demo.argouquiz.com/assets/img/151/167365480394149.jpg', 'tekismail985@gmail.com', 'Burcu Şahin', 'female', NULL, NULL, '167365480394149'),
(634, 'http://demo.argouquiz.com/assets/img/120/2125019967723724.jpg', 'remembernn@yahoo.com', 'ကညီဖိ အဲၣ်ကညီဖိ', 'male', NULL, NULL, '2125019967723724'),
(635, 'http://demo.argouquiz.com/assets/img/120/602090629993593.jpg', 'nardii.doda@hotmail.com', 'Nardii Doda', 'male', '05/11/1996', 'Tirana, Albania', '602090629993593'),
(636, 'http://demo.argouquiz.com/assets/img/114/1310572298986979.jpg', 'annisamashelnazafarin@ngeet.com', 'Eza Leviando', 'female', '05/15/1986', 'Jakarta, Indonesia', '1310572298986979'),
(637, 'http://demo.argouquiz.com/assets/img/151/1009894172470884.jpg', 'infopointsuporte@gmail.com', 'Francisco Eneas', 'male', '03/07/1990', 'Alexandria, Brazil', '1009894172470884'),
(638, 'http://demo.argouquiz.com/assets/img/114/275200602876003.jpg', 'aadharsh028@gmail.com', 'Leela Kandimalla', 'female', '11/08/1989', 'Hyderabad, India', '275200602876003'),
(639, 'http://demo.argouquiz.com/assets/img/120/10211105448457955.jpg', 'ravivgolov@gmail.com', 'Raviv Golov', 'male', '11/05/1990', 'Kiryat-Ata, Hefa, Israel', '10211105448457955'),
(640, 'http://demo.argouquiz.com/assets/img/151/338520306508546.jpg', 'weender64@gmail.com', 'Wender Teixeira', 'male', '05/28/1994', 'Goiatuba, Goias, Brazil', '338520306508546'),
(641, 'http://demo.argouquiz.com/assets/img/120/10209484982339614.jpg', 'erkaland@gmail.com', 'Ervin Jona Kallmi', 'male', '07/09/1984', 'Bari, Italy', '10209484982339614'),
(642, 'http://demo.argouquiz.com/assets/img/151/211404079298228.jpg', 'fujitsucleefray@gmail.com', 'Floki Grim', 'male', '12/18/1985', 'General Santos City, Philippines', '211404079298228'),
(643, 'http://demo.argouquiz.com/assets/img/122/342652362779367.jpg', 'abdihakin442@outlook.com', 'Burji Nasiib', 'male', NULL, NULL, '342652362779367'),
(644, 'http://demo.argouquiz.com/assets/img/113/334382110259621.jpg', 'shakilc01@gmail.com', 'Shakil Mahmud Chowdhury', 'male', '10/04/1988', 'Dhaka, Bangladesh', '334382110259621'),
(645, 'http://demo.argouquiz.com/assets/img/120/10210582334211074.jpg', 'andreqbertuzzi@gmail.com', 'André Bertuzzi', 'male', '02/04/1986', 'São Paulo, Brazil', '10210582334211074'),
(646, 'http://demo.argouquiz.com/assets/img/114/10206008445449483.jpg', 'thijmedevisser@gmail.com', 'Thijme de Visser', 'male', '01/29/1992', 'Amsterdam, Netherlands', '10206008445449483'),
(647, 'http://demo.argouquiz.com/assets/img/151/721400081357446.jpg', 'geovanebdo@gmail.com', 'Geovane Souza', 'male', '01/05/1989', 'Brumado, Bahia, Brazil', '721400081357446'),
(648, 'http://demo.argouquiz.com/assets/img/120/1613420192295832.jpg', 'creativeapps9@gmail.com', 'Riya Kumari', 'female', NULL, NULL, '1613420192295832'),
(649, 'http://demo.argouquiz.com/assets/img/114/100485697104906.jpg', 'd247944c@mohmal.im', 'Lila Peen', 'female', NULL, NULL, '100485697104906'),
(650, 'http://demo.argouquiz.com/assets/img/122/1168484236550186.jpg', 'lolo_musick@yahoo.com', 'Olaa Ahmed', 'female', '10/24/1988', 'Jeddah, Saudi Arabia', '1168484236550186'),
(651, 'http://demo.argouquiz.com/assets/img/151/10211425092605783.jpg', 'khimdhua@gmail.com', 'Khim Dhua', 'male', '10/04/1984', 'Bhuj', '10211425092605783'),
(652, 'http://demo.argouquiz.com/assets/img/114/1602752086699033.jpg', 'emmanuelapetsi@gmail.com', 'Scientific Manuel', 'male', '09/10/1995', 'Accra, Ghana', '1602752086699033'),
(653, 'http://demo.argouquiz.com/assets/img/151/10202217395074258.jpg', 'dpstream@mail.ru', 'Youssef Elabbouni', 'male', '03/22/1993', 'Casablanca, Morocco', '10202217395074258'),
(654, 'http://demo.argouquiz.com/assets/img/151/1820642861486696.jpg', 'skmdrony@gmail.com', 'Faisal Hasan', 'male', NULL, NULL, '1820642861486696'),
(655, 'http://demo.argouquiz.com/assets/img/121/10208837151341003.jpg', 'adhamgamal008@gmail.com', 'Adham Dedo', 'male', '07/08/1992', 'Cairo, Egypt', '10208837151341003'),
(656, 'http://demo.argouquiz.com/assets/img/122/1355280714516485.jpg', 'catalincablu@gmail.com', 'Catalin Caramida', 'male', '07/19/1984', 'Ricadi', '1355280714516485'),
(657, 'http://demo.argouquiz.com/assets/img/151/211797525927649.jpg', 'fomaquina11@gmail.com', 'Marcos Silva', 'male', NULL, NULL, '211797525927649'),
(658, 'http://demo.argouquiz.com/assets/img/151/668340083343443.jpg', 'nikhilmsuthar@gmail.com', 'Nikhil Suthar', 'male', '09/11/1994', 'Unjha', '668340083343443'),
(659, 'http://demo.argouquiz.com/assets/img/114/1341916582485104.jpg', 'nasirnasra2014@hotmail.com', 'ناصر حسين', 'male', '01/28/1976', 'Makha`Il, Jizan, Saudi Arabia', '1341916582485104'),
(660, 'http://demo.argouquiz.com/assets/img/120/1566308230062763.jpg', 'beautiful-italia@email.it', 'Pippo Marvin', 'male', NULL, NULL, '1566308230062763'),
(661, 'http://demo.argouquiz.com/assets/img/151/100481497107243.jpg', 'nesrin.shabrawishy@gmail.com', 'Nesrin Shabrawishy', 'female', NULL, NULL, '100481497107243'),
(662, 'http://demo.argouquiz.com/assets/img/122/1123446191102400.jpg', 'fabi_rubio@hotmail.com', 'Fabi Rapha', 'female', '02/02/1989', 'São Paulo, Brazil', '1123446191102400'),
(663, 'http://demo.argouquiz.com/assets/img/151/183265465469356.jpg', 'contato@ateliefernandasilva.com.br', 'Fernanda Silva', 'female', '03/26/1983', 'Ipatinga', '183265465469356'),
(664, 'http://demo.argouquiz.com/assets/img/120/1278455525559148.jpg', 'mansamnang71@yahoo.com', 'Man Samnang', 'male', '06/06/1991', 'Siem Reap', '1278455525559148'),
(665, 'http://demo.argouquiz.com/assets/img/143/258065697905571.jpg', 'elbachirargoub@gmail.com', 'El Bachir Argoub', 'male', '06/01/1989', 'Oujda', '258065697905571'),
(666, 'http://demo.argouquiz.com/assets/img/113/934746773319374.jpg', 'dahij.dahij@gmail.com', 'Th-girl Dahij', 'female', '07/15/1995', 'Oujda', '934746773319374'),
(667, 'http://demo.argouquiz.com/assets/img/144/1254655054601201.jpg', 'c0der.man.007@gmail.com', 'ẪĦmẻḓ Elsheshtawy', 'male', NULL, NULL, '1254655054601201'),
(668, 'http://demo.argouquiz.com/assets/img/144/1823372077880441.jpg', 'skmdrony@gmail.com', 'Faisal Hasan', 'male', NULL, NULL, '1823372077880441'),
(669, 'http://demo.argouquiz.com/assets/img/112/383832465284616.jpg', 'wmushonew@gmail.com', 'ლევან ავალიანი', 'male', NULL, NULL, '383832465284616'),
(670, 'http://demo.argouquiz.com/assets/img/144/1174426905967261.jpg', 'maytham873@yahoo.com', 'Tamara Saeed', 'female', NULL, NULL, '1174426905967261'),
(671, 'http://demo.argouquiz.com/assets/img/144/1796613173936025.jpg', 'mihalcea.alexandru96@gmail.com', 'Mihalcea Alexandru', 'male', NULL, NULL, '1796613173936025'),
(672, 'http://demo.argouquiz.com/assets/img/143/252524765126810.jpg', 'llamyae51@gmail.com', 'لمياء خير الهدى', 'female', '02/01/1996', 'Amman, Jordan', '252524765126810'),
(673, 'http://demo.argouquiz.com/assets/img/144/574969979380643.jpg', 'jozantee@gmail.com', 'Faqimi Mohd Fauzi', 'male', NULL, NULL, '574969979380643'),
(674, 'http://demo.argouquiz.com/assets/img/143/10211065408415273.jpg', 'yt.boulouayz@gmail.com', 'Brahim Boulouayz', 'male', NULL, NULL, '10211065408415273'),
(675, 'http://demo.argouquiz.com/assets/img/143/1129617360467266.jpg', 'kitsbabashvili@gmail.com', 'Alexandre Kitsbabashvili', 'male', NULL, NULL, '1129617360467266'),
(676, 'http://demo.argouquiz.com/assets/img/112/904285883040849.jpg', 'hiagodeoliveiratv@gmail.com', 'Hiago de Oliveira', 'male', NULL, NULL, '904285883040849'),
(677, 'http://demo.argouquiz.com/assets/img/142/1343405099043258.jpg', 'rahmatandromedia@gmail.com', 'Fajar Baehaqi', 'male', NULL, NULL, '1343405099043258'),
(678, 'http://demo.argouquiz.com/assets/img/144/207411396369597.jpg', 'nissrine@moustacho.com', 'Amandine Ab', 'female', NULL, NULL, '207411396369597'),
(679, 'http://demo.argouquiz.com/assets/img/144/10209607101592860.jpg', 'panka_sr@hotmail.com', 'Pance Stojkov', 'male', NULL, NULL, '10209607101592860'),
(680, 'http://demo.argouquiz.com/assets/img/112/1789040521359475.jpg', 'nayeem0326@gmail.com', 'Ashraf Nayeem', 'male', NULL, NULL, '1789040521359475'),
(681, 'http://demo.argouquiz.com/assets/img/142/1798463050411133.jpg', 'alanforts@mail.bg', 'Cvetomir Nikolaev', 'male', NULL, NULL, '1798463050411133'),
(682, 'http://demo.argouquiz.com/assets/img/142/10208902770701446.jpg', 'adhamgamal008@gmail.com', 'Adham Dedo', 'male', NULL, NULL, '10208902770701446'),
(683, 'http://demo.argouquiz.com/assets/img/143/1840596219520132.jpg', 'ranganbag@gmail.com', 'Rangan Bag', 'male', NULL, NULL, '1840596219520132'),
(684, 'http://demo.argouquiz.com/assets/img/143/337012683336260.jpg', 'estefaesteves@gmail.com', 'Estefa Esteves', 'female', NULL, NULL, '337012683336260'),
(685, 'http://demo.argouquiz.com/assets/img/113/1270723269662239.jpg', 'jayasnkr1@gmail.com', 'Jaya Sankar', 'male', NULL, NULL, '1270723269662239'),
(686, 'http://demo.argouquiz.com/assets/img/142/10154669710429014.jpg', 'ahmad.a.ahmad@outlook.com', 'Ahmad Hijjawi', 'male', NULL, NULL, '10154669710429014'),
(687, 'http://demo.argouquiz.com/assets/img/144/10209502427268935.jpg', 'giovadiso@libero.it', 'Giovanni Paradiso', 'male', NULL, NULL, '10209502427268935'),
(688, 'http://demo.argouquiz.com/assets/img/112/2141984436025802.jpg', 'contact@tubehost.ro', 'Viorel Urse', 'male', NULL, NULL, '2141984436025802'),
(689, 'http://demo.argouquiz.com/assets/img/154/326758054371681.jpg', 'ettounssi.net@gmail.com', 'Mohamed Brg', 'male', NULL, NULL, '326758054371681'),
(690, 'http://demo.argouquiz.com/assets/img/154/666261403555239.jpg', 'ghassen.brg27@gmail.com', 'Ghas Sen', 'male', NULL, NULL, '666261403555239'),
(691, 'http://demo.argouquiz.com/assets/img/144/169932796810938.jpg', 'itbeckham7@outlook.com', 'Cai Ming', 'male', NULL, NULL, '169932796810938'),
(692, 'http://demo.argouquiz.com/assets/img/155/1140679872720042.jpg', 'ceoiam55@hotmail.com', 'ไอ ดี', 'male', NULL, NULL, '1140679872720042'),
(693, 'http://demo.argouquiz.com/assets/img/112/1366733350023705.jpg', 'grigoli_samxo@mail.ru', 'Grigol Samkharadze', 'male', NULL, NULL, '1366733350023705'),
(694, 'http://demo.argouquiz.com/assets/img/143/10210663875930818.jpg', 'shamim.ice.ewu@gmail.com', 'ফরহাদ শামিম', 'male', NULL, NULL, '10210663875930818'),
(695, 'http://demo.argouquiz.com/assets/img/154/10209783306877650.jpg', 'deronnyz@gmail.com', 'Ronnyz Apchaar', 'male', NULL, NULL, '10209783306877650'),
(696, 'http://demo.argouquiz.com/assets/img/113/906519526151228.jpg', 'thonyhenrique@yahoo.com.br', 'Thony Henrique', 'male', NULL, NULL, '906519526151228'),
(697, 'http://demo.argouquiz.com/assets/img/154/1162843447168021.jpg', '001rasheed001@gmail.com', 'Rasheed T', 'male', NULL, NULL, '1162843447168021'),
(698, 'http://demo.argouquiz.com/assets/img/143/383703508641704.jpg', 'lashparesha@gmail.com', 'Lasha Pareshishvili', 'male', NULL, NULL, '383703508641704'),
(699, 'http://demo.argouquiz.com/assets/img/113/10209107048208062.jpg', 'by.vodka@kimo.com', 'Sarhan Ali', 'male', NULL, NULL, '10209107048208062'),
(700, 'http://demo.argouquiz.com/assets/img/142/1806002176338895.jpg', 'ptcbadr@gmail.com', 'Badreddine Benhassan', 'male', NULL, NULL, '1806002176338895'),
(701, 'http://demo.argouquiz.com/assets/img/143/659967357497931.jpg', 'kangchandara@gmail.com', 'Dara Higa', 'male', NULL, NULL, '659967357497931'),
(702, 'http://demo.argouquiz.com/assets/img/155/1323602334348206.jpg', 'butavpaul@yahoo.com', 'Paul Buta', 'male', NULL, NULL, '1323602334348206'),
(703, 'http://demo.argouquiz.com/assets/img/142/1806807879592142.jpg', 'caetano.corujao@gmail.com', 'Diego Pires', 'male', NULL, NULL, '1806807879592142'),
(704, 'http://demo.argouquiz.com/assets/img/154/10209999876051635.jpg', 'erkaland@gmail.com', 'Ervin Jona Kallmi', 'male', NULL, NULL, '10209999876051635'),
(705, 'http://en.allquizz.com/assets/img/156/279657582413049.jpg', 'elbachirargoub@gmail.com', 'El Bachir Argoub', 'male', '06/01/1989', 'Oujda', '279657582413049'),
(706, 'http://en.allquizz.com/assets/img/155/.jpg', 'elbachirargoub@gmail.com', 'El Bachir Argoub', 'male', '06/01/1989', 'Oujda', NULL),
(707, 'http://en.allquizz.com/assets/img/113/361008844271639.jpg', 'nguyentruonghai6868@gmail.com', 'Nguyễn Trường Hải', 'male', '06/22/1991', 'Ho Chi Minh City, Vietnam', '361008844271639');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@admin.com', 'lg7DkkD8bBTcY+aaI5MLqfsizm06NqLd3QVUHZTpGi8=', 'argoub el bachir');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `age`
--
ALTER TABLE `age`
  ADD CONSTRAINT `fk_name_squizes13` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr1`
--
ALTER TABLE `fr1`
  ADD CONSTRAINT `fk_photoonefr_squizes1` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr2`
--
ALTER TABLE `fr2`
  ADD CONSTRAINT `fk_phototofr_squizes1` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr3`
--
ALTER TABLE `fr3`
  ADD CONSTRAINT `fk_phototreefr_squizes1` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr4`
--
ALTER TABLE `fr4`
  ADD CONSTRAINT `fk_phototreefr_squizes10` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr5`
--
ALTER TABLE `fr5`
  ADD CONSTRAINT `fk_phototreefr_squizes11` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr6`
--
ALTER TABLE `fr6`
  ADD CONSTRAINT `fk_phototreefr_squizes110` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr7`
--
ALTER TABLE `fr7`
  ADD CONSTRAINT `fk_phototreefr_squizes111` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr8`
--
ALTER TABLE `fr8`
  ADD CONSTRAINT `fk_phototreefr_squizes112` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr9`
--
ALTER TABLE `fr9`
  ADD CONSTRAINT `fk_phototreefr_squizes113` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr10`
--
ALTER TABLE `fr10`
  ADD CONSTRAINT `fk_phototreefr_squizes114` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fr11`
--
ALTER TABLE `fr11`
  ADD CONSTRAINT `fk_phototreefr_squizes1140` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name`
--
ALTER TABLE `name`
  ADD CONSTRAINT `fk_name_squizes1` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr1`
--
ALTER TABLE `name_fr1`
  ADD CONSTRAINT `fk_name_squizes10` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr2`
--
ALTER TABLE `name_fr2`
  ADD CONSTRAINT `fk_name_squizes11` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr3`
--
ALTER TABLE `name_fr3`
  ADD CONSTRAINT `fk_name_squizes12` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr4`
--
ALTER TABLE `name_fr4`
  ADD CONSTRAINT `fk_name_squizes120` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr5`
--
ALTER TABLE `name_fr5`
  ADD CONSTRAINT `fk_name_squizes121` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr6`
--
ALTER TABLE `name_fr6`
  ADD CONSTRAINT `fk_name_squizes1210` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr7`
--
ALTER TABLE `name_fr7`
  ADD CONSTRAINT `fk_name_squizes1211` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr8`
--
ALTER TABLE `name_fr8`
  ADD CONSTRAINT `fk_name_squizes1212` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr9`
--
ALTER TABLE `name_fr9`
  ADD CONSTRAINT `fk_name_squizes1213` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr10`
--
ALTER TABLE `name_fr10`
  ADD CONSTRAINT `fk_name_squizes1214` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `name_fr11`
--
ALTER TABLE `name_fr11`
  ADD CONSTRAINT `fk_name_squizes12140` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `fk_type_squizes` FOREIGN KEY (`squizes_id`) REFERENCES `squizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
