-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2014 at 11:43 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soundhaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`album_id` int(8) NOT NULL,
  `album_name` varchar(30) NOT NULL,
  `album_desc` varchar(300) NOT NULL,
  `album_price` double NOT NULL,
  `album_image` text NOT NULL,
  `genre_ID` int(11) NOT NULL,
  `artist_id` int(8) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_desc`, `album_price`, `album_image`, `genre_ID`, `artist_id`) VALUES
(1, 'Revolver', 'Revolver is the seventh studio album by the English rock band the Beatles. It was released on 5 August 1966 in the United Kingdom and on 8 August 1966 in the United States.', 25, '1_Revolver.jpg', 1, 1),
(2, 'OK Computer', 'OK Computer is the third studio album by the English alternative rock band Radiohead, released in 1997 on Parlophone and Capitol Records. OK Computer was the first self-produced Radiohead album, with assistance from Nigel Godrich.', 20, '2_OK_Computer.jpg', 2, 2),
(3, 'Kid A', 'Kid A is the fourth studio album by the English rock band Radiohead, released in October 2000 by the Parlophone label. A commercial success worldwide, Kid A went platinum in its first week of release in the United Kingdom.', 30, '3_Kid_A.jpg', 2, 2),
(4, 'Vivir', 'Vivir is the second Spanish album from pop singer Enrique Iglesias. This album was a successful release for the singer. The album includes three number-one singles on the Billboard Hot Latin Tracks charts in United States: "Enamorado Por Primera Vez", "Sólo En Ti" and "Miente".', 30, '4_Vivir.jpg', 3, 3),
(5, 'Euphoria', 'Euphoria is the ninth studio album by Spanish singer-songwriter Enrique Iglesias. The album is a joint-release by Universal Republic and Universal Music Latino and was released on July 5, 2010 internationally and in the US on July 6, 2010.', 28, '5_Euphoria.jpg', 3, 3),
(6, 'Insomniac', 'Insomniac is the eighth studio album, and fourth English-language album, released by Spanish singer Enrique Iglesias. The album was produced by John Shanks, Kristian Lundin, Sean Garrett, Anders Bagge, Jesper Andersen, Mark Taylor, Stargate, and Maratone.', 40, '6_Insomniac.jpg', 3, 3),
(7, 'Prism', 'Prism is the fourth studio album by American singer-songwriter Katy Perry, released by Capitol Records on October 18, 2013. While the album was initially planned to be "darker" than her previous material, Prism ultimately became a prominently dance-inspired record. ', 35, '7_Prism.jpeg', 4, 4),
(8, 'Teenage dream', 'Teenage Dream is the third studio album by American singer Katy Perry, released on August 24, 2010, through Capitol Records. Musically, it contains pop and rock with influences of disco, electronic, funk, house, gothic rock, Hi-NRG, and hip hop.', 15, '8_Teenage_Dream.jpg', 3, 4),
(9, 'The Hunting Party', 'The Hunting Party is the sixth studio album by American rock band Linkin Park. The album, self-produced by band members Mike Shinoda and Brad Delson, was released by Warner Bros. Records on June 13, 2014.', 20, '9_The_Hunting_Party.jpg', 5, 5),
(10, 'Meteora', 'Meteora is the second studio album by American rock band Linkin Park. It was released on March 25, 2003 through Warner Bros. Records, following Reanimation, a collaboration album which featured remixes of songs included on debut studio album Hybrid Theory. ', 25, '10_Meteora.jpg', 5, 5),
(11, 'Recharged', 'Recharged is the second remix album of recordings by American rock band Linkin Park. The album was released on October 29, 2013, through Warner Bros. Records and Machine Shop Recordings. It is entirely produced by Rick Rubin and Mike Shinoda.', 20, '11_Recharged.jpg', 6, 5),
(12, 'Temper Temper', 'Temper Temper is the fourth studio album by the Welsh heavy metal band Bullet for My Valentine released on February 8, 2013 in Australia, and February 11, 2013 worldwide under RCA Records.', 13, '12_Temper_Temper.jpg', 7, 6),
(13, 'Fever', 'Fever is the third studio album by Welsh heavy metal band, Bullet for My Valentine. Containing eleven tracks,[1] the album was released on 26 and 27 April 2010 in the UK and in the US, respectively.', 20, '13_Fever.jpg', 7, 6),
(14, 'The Poison', 'The Poison is the debut album by Welsh heavy metal band Bullet for My Valentine. The album was released on October 3, 2005 through Visible Noise Records in the UK, and on February 14, 2006 in the United States through Trustkill Records.', 30, '14_The_Poison.jpg', 7, 6),
(15, 'Death Magnetic', 'Death Magnetic is the ninth studio album by American heavy metal band Metallica, released on September 12, 2008 through Warner Bros. Records. It was the band''s first album to be produced by Rick Rubin.', 25, '15_Death_Magnetic.jpg', 7, 7),
(16, 'Metallica', 'Metallica (also known as The Black Album) is the eponymously titled fifth studio album by the American heavy metal band Metallica. Released on August 12, 1991 through Elektra Records, it received widespread critical acclaim and went on to become the band''s best selling album.', 30, '16_Metallica.jpg', 7, 7),
(17, 'Ride the Lightning', 'Ride the Lightning is the second studio album by American heavy metal band Metallica. The album was released on July 27, 1984, through the independent record label Megaforce Records.', 36, '17_Ride_the_Lightning.jpg', 7, 7),
(18, 'Reload', 'Reload is the seventh studio album by American heavy metal band Metallica. It was released on November 18, 1997 by Elektra Records. The album is a follow-up to Load, released the previous year.', 32, '18_Reload.jpg', 7, 7),
(19, 'Red', 'Red is the fourth studio album by American singer-songwriter Taylor Swift. It was released on October 22, 2012, by Big Machine Records, as the follow-up to her third studio album, Speak Now (2010).', 18, '19_Red.jpg', 8, 8),
(20, 'Beautiful Eyes', 'Beautiful Eyes is the second extended play (EP) by American country-pop singer Taylor Swift. The EP was released on July 15, 2008 by Big Machine Records exclusively to Wal-Mart stores in the United States and online.', 26, '20_Beautiful_Eyes.jpg', 8, 8),
(21, 'Freedom', 'Freedom is the third studio album by hip hop and R&B Senegalese-American singer and record producer Akon.[3] The album was originally named Acquitted; however, Akon changed it before it was released.', 20, '21_Freedom.jpg', 3, 9),
(22, 'Trouble', 'Trouble is the debut album by the Senegalese-American hip hop and R&B singer Akon, released in 2004. The album contains Akon''s first worldwide hit single, "Lonely", however, the release of "Locked Up" propelled Akon to sign a record deal.', 20, '22_Trouble.jpg', 9, 9),
(23, 'Unapologetic', 'Unapologetic is the seventh studio album by Barbadian recording artist Rihanna, released on November 19, 2012, by Def Jam Recordings and SRP Records. It was recorded between June and November 2012, during promotion of her sixth studio album, Talk That Talk (2011).', 28, '23_Unapologetic.jpg', 3, 10),
(24, 'Loud', 'Loud is the fifth studio album by Barbadian singer Rihanna. It was released on November 12, 2010, by Def Jam Recordings and SRP Records. The album was recorded between February and August 2010, during the singer''s Last Girl on Earth Tour and the filming of her first feature film Battleship.', 25, '24_Loud.jpg', 9, 10),
(25, 'Good Girl Gone Bad', 'Good Girl Gone Bad is the third studio album by Barbadian recording artist Rihanna. It was released on May 31, 2007 by Def Jam Recordings and SRP Records. While recording the album, Rihanna worked with many producers.', 30, '25_Good_Girl_Gone_Bad.jpg', 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `approved_comments`
--

CREATE TABLE IF NOT EXISTS `approved_comments` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved_comments`
--

INSERT INTO `approved_comments` (`name`, `email`, `comment`, `comment_id`) VALUES
('kasun', 'adaskjsa@jdada.com', 'dajsdkjdhqjhdqhdqdqwdqw', 1),
('kasun chathuranga', 'kasun@gmail.com', 'This is the best', 2);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
`artist_id` int(8) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `artist_pic` text NOT NULL,
  `artist_bio` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_pic`, `artist_bio`) VALUES
(1, 'The Beatles', 'the_beatles.jpg', 'The Beatles were an English rock band that formed in Liverpool, in 1960. With John Lennon, Paul McCartney, George Harrison and Ringo Starr, they became widely regarded as the greatest and most influential act of the rock era'),
(2, 'Radiohead', 'radiohead.jpg', 'Radiohead are an English rock band from Abingdon, Oxfordshire, formed in 1985.'),
(3, 'Enrique Iglesias', 'enrique_iglesias.jpg', 'Enrique Miguel Iglesias Preysler, simply known as Enrique Iglesias, is a Spanish-American singer-songwriter, actor, and record producer.'),
(4, 'Katy Perry', 'katy_perry.jpg', 'Katheryn Elizabeth "Katy" Hudson (born October 25, 1984), better known by her stage name Katy Perry, is an American singer, songwriter, and actress. She had limited exposure to secular music during her childhood and pursued a career in gospel music as a teenager, releasing her debut studio album, Katy Hudson, in 2001.'),
(5, 'Linkin Park', 'linkin_park.jpg', 'Linkin Park is an American rock band from Agoura Hills, California. Formed in 1996, the band rose to international fame with their debut album Hybrid Theory, which was certified Diamond by the RIAA in 2005 and multi-platinum in several other countries.'),
(6, 'Bullet for My Valentine', 'bullet_for_my_valentine.jpg', 'Bullet for My Valentine are a Welsh heavy metal band from Bridgend, formed in 1998. The band is composed of Matthew Tuck (lead vocals, rhythm guitar), Michael Paget (lead guitar, backing vocals), Jason James (bass guitar, backing vocals), and Michael Thomas (drums). They were formed under the name Jeff Killed John and started their music career by covering songs by Metallica and Nirvana.'),
(7, 'Metallica', 'metallica.jpg', 'Metallica is an American heavy metal band from Los Angeles, California. The band''s fast tempos, instrumentals, and aggressive musicianship placed them as one of the founding "big four" bands of thrash metal, alongside Slayer, Megadeth, and Anthrax.'),
(8, 'Taylor Swift', 'taylor_swift.jpg', 'Taylor Alison Swift (born December 13, 1989) is an American singer-songwriter and actress. Raised in Wyomissing, Pennsylvania, Swift moved to Nashville, Tennessee, at the age of 14 to pursue a career in country music. She signed with the independent label Big Machine Records and became the youngest songwriter ever hired by the Sony/ATV Music publishing house. The release of Swift''s self-titled debut album in 2006 established her as a country music star.'),
(9, 'Akon', 'akon.jpg', 'Aliaune Damala Bouga Time Bongo Puru Nacka Lu Lu Lu Badara Akon Thiam"(born April 16, 1973), known as Akon (pronounced /?e?k?n/), is an American R&B and hip hop recording artist, songwriter, and record producer.[2] He rose to prominence in 2004 following the release of "Locked Up", the first single from his debut album Trouble.'),
(10, 'Rihanna', 'rihanna.jpg', 'Robyn Rihanna Fenty (born February 20, 1988), better known by her stage name Rihanna is a Barbadian singer, actress, and fashion designer. Born in Saint Michael, Barbados, her career began when she met record producer Evan Rogers through mutual friends in late 2003 and recorded demo tapes under Rogers''s guidance.'),
(11, 'Boyzone', 'Boyzone_-_Better.jpg', 'Boyzone are an Irish boy band. Their most famous line-up was composed of Keith Duffy, Stephen Gately, Mikey Graham, Ronan Keating, and Shane Lynch. Boyzone have had 21 singles in the top 40 UK charts and 22 singles in the Irish charts'),
(12, 'Backstreet Boys', 'Backstreet-Boys.jpg', 'The Backstreet Boys are an American vocal group, formed in Orlando, Florida in 1993. The group consists of A. J. McLean, Howie Dorough, Nick Carter, Kevin Richardson, and Brian Littrell');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `user_name` varchar(50) NOT NULL,
  `user_cardno` varchar(20) NOT NULL,
  `user_cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`user_name`, `user_cardno`, `user_cvv`) VALUES
('chathura pathmasooriya', '4567890123456789', 111);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
`comment_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customer_id` int(8) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fname`, `lname`, `email`, `gender`, `address1`, `password`, `keyword`, `country`, `mobile`) VALUES
(1, 'Diyath', 'Ranasinghe', 'diyathni7123@gmail.com', 'Male', 'Ethulkotte', '1234567d', 'abc', 'Sri Lanka', 776999149);

-- --------------------------------------------------------

--
-- Table structure for table `customer_album`
--

CREATE TABLE IF NOT EXISTS `customer_album` (
  `customer_id` int(8) NOT NULL,
  `album_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_song`
--

CREATE TABLE IF NOT EXISTS `customer_song` (
  `customer_id` int(8) NOT NULL,
  `song_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
`delivery_id` int(8) NOT NULL,
  `delivery_name` varchar(30) NOT NULL,
  `delivery_company` varchar(30) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_duration` int(3) NOT NULL COMMENT 'duration (days)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
`genre_id` int(8) NOT NULL,
  `genre_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Rock'),
(2, 'Alternative Rock'),
(3, 'Pop'),
(4, 'Dance'),
(5, 'Alternative Metal'),
(6, 'Dubstep'),
(7, 'Heavy Metal'),
(8, 'Country'),
(9, 'R&B');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`purchase_id` int(8) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_time` time NOT NULL,
  `purchase_cost` double NOT NULL,
  `customer_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_item`
--

CREATE TABLE IF NOT EXISTS `purchase_item` (
`item_id` int(8) NOT NULL,
  `item_name` int(30) NOT NULL,
  `item_type` varchar(10) NOT NULL,
  `item_price` double NOT NULL,
  `purchase_id` int(8) NOT NULL,
  `object_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
`song_id` int(8) NOT NULL,
  `song_name` varchar(50) NOT NULL,
  `song_price` double NOT NULL,
  `song_picture` text NOT NULL,
  `artist_id` int(8) NOT NULL,
  `genre_id` int(8) NOT NULL,
  `album_id` int(8) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_price`, `song_picture`, `artist_id`, `genre_id`, `album_id`) VALUES
(1, 'Taxman', 3.5, '1_Revolver.jpg', 1, 1, 1),
(2, 'Eleanor Rigby', 5.5, '1_Revolver.jpg', 1, 1, 1),
(4, 'Love You To', 3.5, '1_Revolver.jpg', 1, 1, 1),
(5, 'Here, There and Everywhere', 3.5, '1_Revolver.jpg', 1, 1, 1),
(6, 'Yellow Submarine', 3.5, '1_Revolver.jpg', 1, 1, 1),
(7, 'She Said She Said', 3.5, '1_Revolver.jpg', 1, 1, 1),
(8, 'Good Day Sunshine', 3.5, '1_Revolver.jpg', 1, 1, 1),
(9, 'And Your Bird Can Sing', 3.5, '1_Revolver.jpg', 1, 1, 1),
(10, 'For No One', 3.5, '1_Revolver.jpg', 1, 1, 1),
(11, 'Doctor Robert', 3.5, '1_Revolver.jpg', 1, 1, 1),
(12, 'I Want to Tell You', 3.5, '1_Revolver.jpg', 1, 1, 1),
(13, 'Got to Get You into My Life', 3.5, '1_Revolver.jpg', 1, 1, 1),
(14, 'Tomorrow Never Knows', 3.5, '1_Revolver.jpg', 1, 1, 1),
(15, 'Airbag', 4, '2_OK_Computer.jpg', 2, 2, 2),
(16, 'Paranoid Android', 4, '2_OK_Computer.jpg', 2, 2, 2),
(17, 'Subterranean Homesick Alien', 4, '2_OK_Computer.jpg', 2, 2, 2),
(18, 'Exit Music (For a Film)', 4, '2_OK_Computer.jpg', 2, 2, 2),
(19, 'Let Down', 4, '2_OK_Computer.jpg', 2, 2, 2),
(20, 'Karma Police', 4, '2_OK_Computer.jpg', 2, 2, 2),
(21, 'Fitter Happier', 4, '2_OK_Computer.jpg', 2, 2, 2),
(22, 'Electioneering', 4, '2_OK_Computer.jpg', 2, 2, 2),
(23, 'Climbing Up the Walls', 4, '2_OK_Computer.jpg', 2, 2, 2),
(24, 'No Surprises', 4, '2_OK_Computer.jpg', 2, 2, 2),
(25, 'Lucky', 4, '2_OK_Computer.jpg', 2, 2, 2),
(26, 'The Tourist', 4, '2_OK_Computer.jpg', 2, 2, 2),
(27, 'Everything in Its Right Place', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(28, 'Kid A', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(29, 'The National Anthem', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(30, 'How to Disappear Completely', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(31, 'Treefingers', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(32, 'Optimistic', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(33, 'In Limbo', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(34, 'Idioteque', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(35, 'Morning Bell', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(36, 'Motion Picture Soundtrack', 3.75, '3_Kid_A.jpg', 2, 2, 3),
(37, 'Enamorado por primera vez', 3.5, '4_Vivir.jpg', 3, 3, 4),
(38, 'Al despertar', 3.5, '4_Vivir.jpg', 3, 3, 4),
(39, 'Lluvia cae', 3.5, '4_Vivir.jpg', 3, 3, 4),
(40, 'Tu vacío', 3.5, '4_Vivir.jpg', 3, 3, 4),
(41, 'Sólo en ti', 3.5, '4_Vivir.jpg', 3, 3, 4),
(42, 'Miente', 3.5, '4_Vivir.jpg', 3, 3, 4),
(43, 'Viviré y moriré', 3.5, '4_Vivir.jpg', 3, 3, 4),
(44, 'Volveré', 3.5, '4_Vivir.jpg', 3, 3, 4),
(45, 'El muro', 3.5, '4_Vivir.jpg', 3, 3, 4),
(46, 'Revolución', 3.5, '4_Vivir.jpg', 3, 3, 4),
(47, 'I Like It', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(48, 'One Day at a Time', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(49, 'Heartbeat', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(50, 'Dirty Dancer', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(51, 'Why Not Me?', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(52, 'No Me Digas Que No', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(53, 'Ayer', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(54, 'Cuando Me Enamoro', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(55, 'Dile Que', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(56, 'Tú y Yo', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(57, 'Heartbreaker', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(58, 'Coming Home', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(59, 'Everything''s Gonna Be Alright', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(60, 'No Me Digas Que No', 3.5, '5_Euphoria.jpg', 3, 3, 5),
(61, 'Ring My Bells', 3.75, '', 3, 3, 6),
(62, 'Push', 3.75, '', 3, 3, 6),
(63, 'Do You Know? (The Ping Pong Song)', 3.75, '', 3, 3, 6),
(64, 'Somebody''s Me', 3.75, '', 3, 3, 6),
(65, 'On Top of You', 3.75, '', 3, 3, 6),
(66, 'Tired of Being Sorry', 3.75, '', 3, 3, 6),
(67, 'Miss You', 3.75, '', 3, 3, 6),
(68, 'Wish I Was Your Lover', 3.75, '', 3, 3, 6),
(69, 'Little Girl', 3.75, '', 3, 3, 6),
(70, 'Stay Here Tonight', 3.75, '', 3, 3, 6),
(71, 'Sweet Isabel', 3.75, '', 3, 3, 6),
(72, 'Don''t You Forget About Me', 3.75, '', 3, 3, 6),
(73, 'Dimelo', 3.75, '', 3, 3, 6),
(74, 'Alguien Soy Yo', 3.75, '', 3, 3, 6),
(75, 'Amigo Vulnerable', 3.75, '', 3, 3, 6),
(76, 'Roar', 4, '', 4, 4, 7),
(77, 'Legendary Lovers', 4, '', 4, 4, 7),
(78, 'Birthday', 4, '', 4, 4, 7),
(79, 'Walking on Air', 4, '', 4, 4, 7),
(80, 'Unconditionally', 4, '', 4, 4, 7),
(81, 'Dark Horse', 4, '', 4, 4, 7),
(82, 'This Is How We Do', 4, '', 4, 4, 7),
(83, 'International Smile', 4, '', 4, 4, 7),
(84, 'Ghost', 4, '', 4, 4, 7),
(85, 'Love Me', 4, '', 4, 4, 7),
(86, 'This Moment', 4, '', 4, 4, 7),
(87, 'Double Rainbow', 4, '', 4, 4, 7),
(88, 'By the Grace of God', 4, '', 4, 4, 7),
(89, 'Teenage Dream', 5, '', 4, 3, 8),
(90, 'Last Friday Night (T.G.I.F.)', 5, '', 4, 3, 8),
(91, 'California Gurls', 5, '', 4, 3, 8),
(92, 'Firework', 5, '', 4, 3, 8),
(93, 'Peacock', 5, '', 4, 3, 8),
(94, 'Circle the Drain', 5, '', 4, 3, 8),
(95, 'The One That Got Away', 5, '', 4, 3, 8),
(96, 'E.T.', 5, '', 4, 3, 8),
(97, 'Who Am I Living For?', 5, '', 4, 3, 8),
(98, 'Pearl', 5, '', 4, 3, 8),
(99, 'Hummingbird Heartbeat', 5, '', 4, 3, 8),
(100, 'Not Like the Movies', 5, '', 4, 3, 8),
(101, 'Keys to the Kingdom', 5.5, '', 5, 5, 9),
(102, 'All for Nothing', 5.5, '', 5, 5, 9),
(103, 'Guilty All the Same', 5.5, '', 5, 5, 9),
(104, 'The Summoning', 5.5, '', 5, 5, 9),
(105, 'War', 5.5, '', 5, 5, 9),
(106, 'Wastelands', 5.5, '', 5, 5, 9),
(107, 'Until It''s Gone', 5.5, '', 5, 5, 9),
(108, 'Rebellion', 5.5, '', 5, 5, 9),
(109, 'Mark the Graves', 5.5, '', 5, 5, 9),
(110, 'Drawbar', 5.5, '', 5, 5, 9),
(111, 'Final Masquerade', 5.5, '', 5, 5, 9),
(112, 'A Line in the Sand', 5.5, '', 5, 5, 9),
(113, 'Foreword', 2, '', 5, 5, 10),
(114, 'Don''t Stay', 3.75, '', 5, 5, 10),
(115, 'Somewhere I Belong', 3.75, '', 5, 5, 10),
(116, 'Lying from You', 3.75, '', 5, 5, 10),
(117, 'Hit the Floor', 3.75, '', 5, 5, 10),
(118, 'Easier to Run', 3.75, '', 5, 5, 10),
(119, 'Faint', 3.75, '', 5, 5, 10),
(120, 'Figure.09', 3.75, '', 5, 5, 10),
(121, 'Breaking the Habit', 3.75, '', 5, 5, 10),
(122, 'From the Inside', 3.75, '', 5, 5, 10),
(123, 'Nobody''s Listening', 3.75, '', 5, 5, 10),
(124, 'Session', 3.75, '', 5, 5, 10),
(125, 'Numb', 4, '', 5, 5, 10),
(126, 'A Light That Never Comes', 4.5, '', 5, 6, 11),
(127, 'Castle of Glass', 4.5, '', 5, 6, 11),
(128, 'Lost in the Echo', 4.5, '', 5, 6, 11),
(129, 'Victimized', 4.5, '', 5, 6, 11),
(130, 'I''ll Be Gone', 4.5, '', 5, 6, 11),
(131, 'Lies Greed Misery', 4.5, '', 5, 6, 11),
(132, 'Roads Untraveled', 4.5, '', 5, 6, 11),
(133, 'Powerless', 4.5, '', 5, 6, 11),
(134, 'Burn It Down', 4.5, '', 5, 6, 11),
(135, 'Until It Breaks', 4.5, '', 5, 6, 11),
(136, 'Skin to Bone', 4.5, '', 5, 6, 11),
(137, 'I''ll Be Gone', 4.5, '', 5, 6, 11),
(138, 'Until It Breaks', 4.5, '', 5, 6, 11),
(139, 'A Light That Never Comes', 4.5, '', 5, 6, 11),
(140, 'Breaking Point', 5, '', 6, 7, 12),
(141, 'Truth Hurts', 5, '', 6, 7, 12),
(142, 'Temper Temper', 5, '', 6, 7, 12),
(143, 'P.O.W', 5, '', 6, 7, 12),
(144, 'Dirty Little Secret', 5, '', 6, 7, 12),
(145, 'Leech', 5, '', 6, 7, 12),
(146, 'Dead to the World', 5, '', 6, 7, 12),
(147, 'Riot', 5, '', 6, 7, 12),
(148, 'Saints & Sinners', 5, '', 6, 7, 12),
(149, 'Tears Don''t Fall (Part 2)', 5, '', 6, 7, 12),
(150, 'Livin'' Life (On the Edge of a Knife)', 5, '', 6, 7, 12),
(151, 'Your Betrayal', 4.5, '', 6, 7, 13),
(152, 'Fever', 4.5, '', 6, 7, 13),
(153, 'The Last Fight', 4.5, '', 6, 7, 13),
(154, 'A Place Where You Belong', 4.5, '', 6, 7, 13),
(155, 'Pleasure and Pain', 4.5, '', 6, 7, 13),
(156, 'Alone', 4.5, '', 6, 7, 13),
(157, 'Breaking Out, Breaking Down', 4.5, '', 6, 7, 13),
(158, 'Bittersweet Memories', 4.5, '', 6, 7, 13),
(159, 'Dignity', 4.5, '', 6, 7, 13),
(160, 'Begging for Mercy', 4.5, '', 6, 7, 13),
(161, 'Pretty on the Outside', 4.5, '', 6, 7, 13),
(162, 'Intro', 2.5, '', 6, 7, 14),
(163, 'Her Voice Resides', 4, '', 6, 7, 14),
(164, '4 Words (To Choke Upon)', 4, '', 6, 7, 14),
(165, 'Tears Don''t Fall', 4, '', 6, 7, 14),
(166, 'Suffocating Under Words of Sorrow (What Can I Do)', 4, '', 6, 7, 14),
(167, 'Hit the Floor', 4, '', 6, 7, 14),
(168, 'All These Things I Hate (Revolve Around Me)', 4, '', 6, 7, 14),
(169, 'Room 409', 4, '', 6, 7, 14),
(170, 'The Poison', 4, '', 6, 7, 14),
(171, '10 Years Today', 4, '', 6, 7, 14),
(172, 'Cries in Vain', 4, '', 6, 7, 14),
(173, 'Spit You Out', 4, '', 6, 7, 14),
(174, 'The End', 4, '', 6, 7, 14),
(175, 'That Was Just Your Life', 4, '', 7, 7, 15),
(176, 'The End of the Line', 4, '', 7, 7, 15),
(177, 'Broken, Beat & Scarred', 4, '', 7, 7, 15),
(178, 'The Day That Never Comes', 4, '', 7, 7, 15),
(179, 'All Nightmare Long', 4, '', 7, 7, 15),
(180, 'Cyanide', 4, '', 7, 7, 15),
(181, 'The Unforgiven III', 4, '', 7, 7, 15),
(182, 'The Judas Kiss', 4, '', 7, 7, 15),
(183, 'Suicide & Redemption', 4, '', 7, 7, 15),
(184, 'My Apocalypse', 4, '', 7, 7, 15),
(185, 'Enter Sandman', 4, '', 7, 7, 16),
(186, 'Sad but True', 4, '', 7, 7, 16),
(187, 'Holier Than Thou', 4, '', 7, 7, 16),
(188, 'The Unforgiven', 4, '', 7, 7, 16),
(189, 'Wherever I May Roam', 4, '', 7, 7, 16),
(190, 'Don''t Tread on Me', 4, '', 7, 7, 16),
(191, 'Through the Never', 4, '', 7, 7, 16),
(192, 'Nothing Else Matters', 4, '', 7, 7, 16),
(193, 'Of Wolf and Man', 4, '', 7, 7, 16),
(194, 'The God That Failed', 4, '', 7, 7, 16),
(195, 'My Friend of Misery', 4, '', 7, 7, 16),
(196, 'The Struggle Within', 4, '', 7, 7, 16),
(197, 'Fight Fire with Fire', 3.5, '', 7, 7, 17),
(198, 'Ride the Lightning', 3.5, '', 7, 7, 17),
(199, 'For Whom the Bell Tolls', 3.5, '', 7, 7, 17),
(200, 'Fade to Black', 3.5, '', 7, 7, 17),
(201, 'Trapped Under Ice', 3.5, '', 7, 7, 17),
(202, 'Escape', 3.5, '', 7, 7, 17),
(203, 'Creeping Death', 3.5, '', 7, 7, 17),
(204, 'The Call of Ktulu', 3.5, '', 7, 7, 17),
(205, 'Fuel', 4, '', 7, 7, 18),
(206, 'The Memory Remains', 4, '', 7, 7, 18),
(207, 'Devil''s Dance', 4, '', 7, 7, 18),
(208, 'The Unforgiven II', 4, '', 7, 7, 18),
(209, 'Better Than You', 4, '', 7, 7, 18),
(210, 'Slither', 4, '', 7, 7, 18),
(211, 'Carpe Diem Baby', 4, '', 7, 7, 18),
(212, 'Bad Seed', 4, '', 7, 7, 18),
(213, 'Where the Wild Things Are', 4, '', 7, 7, 18),
(214, 'Prince Charming', 4, '', 7, 7, 18),
(215, 'Low Man''s Lyric', 4, '', 7, 7, 18),
(216, 'Attitude', 4, '', 7, 7, 18),
(217, 'Fixxxer', 4, '', 7, 7, 18),
(218, 'State of Grace', 5, '', 8, 8, 19),
(219, 'Red', 5, '', 8, 8, 19),
(220, 'Treacherous', 5, '', 8, 8, 19),
(221, 'I Knew You Were Trouble', 5, '', 8, 8, 19),
(222, 'All Too Well', 5, '', 8, 8, 19),
(223, '22', 5, '', 8, 8, 19),
(224, 'I Almost Do', 5, '', 8, 8, 19),
(225, 'We Are Never Ever Getting Back Together', 5, '', 8, 8, 19),
(226, 'Stay Stay Stay', 5, '', 8, 8, 19),
(227, 'The Last Time', 5, '', 8, 8, 19),
(228, 'Holy Ground', 5, '', 8, 8, 19),
(229, 'Sad Beautiful Tragic', 5, '', 8, 8, 19),
(230, 'The Lucky One', 5, '', 8, 8, 19),
(231, 'Everything Has Changed', 5, '', 8, 8, 19),
(232, 'Starlight', 5, '', 8, 8, 19),
(233, 'Begin Again', 5, '', 8, 8, 19),
(234, 'Beautiful Eyes', 4, '', 8, 8, 20),
(235, 'Should''ve Said No', 4, '', 8, 8, 20),
(236, 'Teardrops on My Guitar', 4, '', 8, 8, 20),
(237, 'Picture to Burn', 4, '', 8, 8, 20),
(238, 'I''m Only Me When I''m with You', 4, '', 8, 8, 20),
(239, 'I Heart ?', 4, '', 8, 8, 20),
(240, 'Right Now (Na Na Na)', 4, '', 9, 3, 21),
(241, 'Beautiful', 4, '', 9, 3, 21),
(242, 'Keep You Much Longer', 4, '', 9, 3, 21),
(243, 'Troublemaker', 4, '', 9, 3, 21),
(244, 'We Don''t Care', 4, '', 9, 3, 21),
(245, 'I''m So Paid', 4, '', 9, 3, 21),
(246, 'Holla Holla', 4, '', 9, 3, 21),
(247, 'Against the Grain', 4, '', 9, 3, 21),
(248, 'Be with You', 4, '', 9, 3, 21),
(249, 'Sunny Day', 4, '', 9, 3, 21),
(250, 'Birthmark', 4, '', 9, 3, 21),
(251, 'Over the Edge', 4, '', 9, 3, 21),
(252, 'Freedom', 4, '', 9, 3, 21),
(253, 'Locked Up', 4, '', 9, 9, 22),
(254, 'Trouble Nobody', 4, '', 9, 9, 22),
(255, 'Bananza (Belly Dancer)', 4, '', 9, 9, 22),
(256, 'Gangsta', 4, '', 9, 9, 22),
(257, 'Ghetto', 4, '', 9, 9, 22),
(258, 'Pot of Gold', 4, '', 9, 9, 22),
(259, 'Show Out', 4, '', 9, 9, 22),
(260, 'Lonely', 4, '', 9, 9, 22),
(261, 'When The Time''s Right', 4, '', 9, 9, 22),
(262, 'Journey', 4, '', 9, 9, 22),
(263, 'Don''t Let Up', 4, '', 9, 9, 22),
(264, 'Phresh Out the Runway', 4, '', 10, 3, 23),
(265, 'Diamonds', 4, '', 10, 3, 23),
(266, 'Numb', 4, '', 10, 3, 23),
(267, 'Pour It Up', 4, '', 10, 3, 23),
(268, 'Loveeeeeee Song', 4, '', 10, 3, 23),
(269, 'Jump', 4, '', 10, 3, 23),
(270, 'Right Now', 4, '', 10, 3, 23),
(271, 'What Now', 4, '', 10, 3, 23),
(272, 'Stay', 4, '', 10, 3, 23),
(273, 'Nobody''s Business', 4, '', 10, 3, 23),
(274, 'Love Without Tragedy / Mother Mary', 4, '', 10, 3, 23),
(275, 'Get It Over With', 4, '', 10, 3, 23),
(276, 'No Love Allowed', 4, '', 10, 3, 23),
(277, 'Lost in Paradise', 4, '', 10, 3, 23),
(278, 'S&M', 5, '', 10, 9, 24),
(279, 'What''s My Name?', 5, '', 10, 9, 24),
(280, 'Cheers (Drink to That)', 5, '', 10, 9, 24),
(281, 'Fading', 5, '', 10, 9, 24),
(282, 'Only Girl (in the World)', 5, '', 10, 9, 24),
(283, 'California King Bed', 5, '', 10, 9, 24),
(284, 'Man Down', 5, '', 10, 9, 24),
(285, 'Raining Men', 5, '', 10, 9, 24),
(286, 'Complicated', 5, '', 10, 9, 24),
(287, 'Skin', 5, '', 10, 9, 24),
(288, 'Love the Way You Lie (Part II)', 5, '', 10, 9, 24),
(289, 'Umbrella', 4.5, '', 10, 9, 25),
(290, 'Push Up on Me', 4.5, '', 10, 9, 25),
(291, 'Don''t Stop the Music', 4.5, '', 10, 9, 25),
(292, 'Breakin'' Dishes', 4.5, '', 10, 9, 25),
(293, 'Shut Up and Drive', 4.5, '', 10, 9, 25),
(294, 'Hate That I Love You', 4.5, '', 10, 9, 25),
(295, 'Say It', 4.5, '', 10, 9, 25),
(296, 'Sell Me Candy', 4.5, '', 10, 9, 25),
(297, 'Lemme Get That', 4.5, '', 10, 9, 25),
(298, 'Rehab', 4.5, '', 10, 9, 25),
(299, 'Question Existing', 4.5, '', 10, 9, 25),
(300, 'Smile', 2.5, '', 11, 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`album_id`), ADD KEY `genre_ID` (`genre_ID`), ADD KEY `artist_id` (`artist_id`), ADD KEY `artist_id_2` (`artist_id`);

--
-- Indexes for table `approved_comments`
--
ALTER TABLE `approved_comments`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
 ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_album`
--
ALTER TABLE `customer_album`
 ADD PRIMARY KEY (`customer_id`,`album_id`);

--
-- Indexes for table `customer_song`
--
ALTER TABLE `customer_song`
 ADD PRIMARY KEY (`customer_id`,`song_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
 ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
 ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`purchase_id`), ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `purchase_item`
--
ALTER TABLE `purchase_item`
 ADD PRIMARY KEY (`item_id`), ADD KEY `object_id` (`object_id`), ADD KEY `purchase_id` (`purchase_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
 ADD PRIMARY KEY (`song_id`), ADD KEY `album_id` (`album_id`), ADD KEY `artist_id` (`artist_id`), ADD KEY `genre_id` (`genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `album_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
MODIFY `artist_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customer_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
MODIFY `delivery_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
MODIFY `genre_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `purchase_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_item`
--
ALTER TABLE `purchase_item`
MODIFY `item_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
MODIFY `song_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=301;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
