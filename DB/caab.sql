

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `caab`
--
CREATE DATABASE IF NOT EXISTS `caab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `caab`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `v_id` int(222) NOT NULL AUTO_INCREMENT,
  `cimage` varchar(222) NOT NULL,
  `cname` varchar(222) NOT NULL,
  `seat` varchar(222) NOT NULL,
  `price` varchar(222) NOT NULL,
  `ctext` text NOT NULL,
  `location` varchar(222) NOT NULL,
  `comfort` varchar(222) NOT NULL,
  `air_c` varchar(222) NOT NULL,
  `fuel` varchar(222) NOT NULL,
  `gps` varchar(222) NOT NULL,
  `safety` varchar(222) NOT NULL,
  `km` varchar(222) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`v_id`, `cimage`, `cname`, `seat`, `price`, `ctext`, `location`, `comfort`, `air_c`, `fuel`, `gps`, `safety`, `km`) VALUES
(1, 'audi1.jpg', 'Audi', '5', '15000', '...', 'Tetove', 'stand', 'Yes', 'Petrol', 'Yes', 'Yes', '60000'),
(2, 'bmw.jpg', 'BMW', '5', '20000', '...', 'Gostivar', 'lux', 'Yes', 'Petrol', 'Yes', 'Yes', '20000'),
(3, 'ford.jpg', 'Ford', '4', '8000', '...', 'Tetove', 'eco', 'Yes', 'Desiel', 'Yes', 'Yes', '20000'),
(4, 'mercedes.jpeg', 'Mercedes','5', '22000', '...', 'Gostivar', 'lux', 'Yes', 'Petrol', 'Yes', 'Airbags', '20000'),
(5, 'renault.jpg', 'Renault', '4', '8000', '...', 'Tetove', 'eco', 'Yes', 'Desiel', 'Yes', 'Yes', '20000');
-- --------------------------------------------------------

--
-- Table structure for table `admin_dir`
--

CREATE TABLE IF NOT EXISTS `admin_dir` (
  `a_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_dir`
--

INSERT INTO `admin_dir` (`a_id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `Message` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `pickup` varchar(222) NOT NULL,
  `dropoff` varchar(222) NOT NULL,
  `phone` int(222) NOT NULL,
  `first` varchar(222) NOT NULL,
  `mid` varchar(222) NOT NULL,
  `last` varchar(222) NOT NULL,
  `cod` int(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `cardno` int(222) NOT NULL,
  `cardbrand` varchar(222) NOT NULL,
  `ed` int(222) NOT NULL,
  `ey` int(222) NOT NULL,
  `em` int(222) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--

--


-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `Dfrom` varchar(222) NOT NULL,
  `Dto` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` varchar(222) NOT NULL,
  `adult` varchar(222) NOT NULL,
  `child` varchar(222) NOT NULL,
  `text` text NOT NULL,
  `pack` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

