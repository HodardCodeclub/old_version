-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2017 at 06:35 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umuco`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `EvID` int(11) NOT NULL AUTO_INCREMENT,
  `EvTitle` varchar(255) NOT NULL,
  `Descript` text NOT NULL,
  `Category` int(11) NOT NULL,
  `Edate` date NOT NULL,
  PRIMARY KEY (`EvID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EvID`, `EvTitle`, `Descript`, `Category`, `Edate`) VALUES
(2, ' PRESS CONFERENCE', 'Explaining the project of new miss at Kigali <b>Selena Hotel</b> on 15th March 2017. at <u><i>4PM</i></u>. &nbsp;', 5, '2017-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `famous`
--

CREATE TABLE IF NOT EXISTS `famous` (
  `FamID` int(11) NOT NULL AUTO_INCREMENT,
  `FamNames` varchar(255) NOT NULL,
  `FamStyle` varchar(255) NOT NULL,
  `FamProfile` varchar(255) NOT NULL,
  `FamPic` varchar(255) NOT NULL,
  `FamDetails` text NOT NULL,
  `Default` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FamID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `famous`
--

INSERT INTO `famous` (`FamID`, `FamNames`, `FamStyle`, `FamProfile`, `FamPic`, `FamDetails`, `Default`) VALUES
(9, 'THE BEN ', ' R& B', 'the ben.jpg', 'the ben.jpg', 'nmsdnfkldsjf', 1),
(11, ' Meddy', ' R& B', 'meddy.jpg', 'meddy.jpg', '<h5 style="font-family: Oswald, sans-serif; font-weight: 600; line-height: 1.5em; color: rgb(0, 0, 0); font-size: 1em;">Remarkably handsome, charming and full of talent is what sums up Ben Mugisha aka The Ben, one of Rwanda''s top RnB artists. It was not long ago that he embarked on his musical career and has steadily managed to be at the top of his game cementing a household name on the musical scene.</h5><h5 style="font-family: Oswald, sans-serif; font-weight: 600; line-height: 1.5em; color: rgb(0, 0, 0); font-size: 1em;">The star is currently based in the US but that has not stopped him from thrilling his fans, in fact one would only observe that being miles away only made him stretch for the best. Rewinding his musical journey, Mugisha says, "It was in 2007 that I entered the music industry though I had already started singing when I was little that''s why I can''t say that I chose music because I believe it chose me and I fell in love with it." The RnB singer has released a number of songs such as Wigenda, Amaaso ku maaso, Zoubeda among others..</h5><div><br></div><h5 style="font-family: Oswald, sans-serif; font-weight: 600; line-height: 1.5em; color: rgb(0, 0, 0); font-size: 1em;">Despite him being miles away he has managed to top charts with songs like I am in love, Ndi uwi I Kigali, Ko Nahindutse and Ntacyadutanya which is his latest and it has been a frequent play on the airwaves. "I have released a lot of songs and my latest song is always my favorite thus Ntacyadutanya is my favorite one now however konahindutse has so much power in me for some reasons," Mugisha points out.</h5><h5 style="font-family: Oswald, sans-serif; font-weight: 600; line-height: 1.5em; color: rgb(0, 0, 0); font-size: 1em;">&nbsp;As with any other pursuit, there is no such thing as a smooth sail because rough encounters are bound to occur.</h5>	\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `misses`
--

CREATE TABLE IF NOT EXISTS `misses` (
  `MissID` int(11) NOT NULL AUTO_INCREMENT,
  `MissNames` varchar(255) NOT NULL,
  `MissYear` year(4) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL,
  `FullPic` varchar(255) NOT NULL,
  `Details` text NOT NULL,
  `Default` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`MissID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `misses`
--

INSERT INTO `misses` (`MissID`, `MissNames`, `MissYear`, `ProfilePic`, `FullPic`, `Details`, `Default`) VALUES
(6, ' IRADUKUNDA Elysa', 2017, 'MISS.jpg', 'MISS.jpg', 'jksdjfhklsdjhfklsdhlkf', 1),
(7, ' UMUTESI Jolly', 2016, 'banner112.png', '6.jpg', 'Jolly Mutesi, 19, has been crowned Miss Rwanda 2016 in a colourful ceremony held at Camp Kigali grounds on Saturday evening. Mutesi, a senior-six graduate from King David High School, who represented the Southern Province in the preliminaries, emerged the topmost contender for the beauty pageant, beating Peace Kwizera to the crown. Kwizera emerged the first runner-up followed by Vanessa Mpogazi, who emerged second runner-up\r\nMarie d’Amour Rangira and Sharifa Umuhoza completed the top five in the contest that pitted 15 finalists in the national competition.Mutesi, who was crowned by Miss Rwanda 2015 Doriane Kundwa, was later handed a brand-new Suzuki Swift worth Rwf15 million, courtesy of Cogebanque, a local bank. On top of the car, Mutesi will be getting a monthly salary of Rwf800,000, according to the organisers, among other perks. Mutesi said that, during her reign as Miss Rwanda, she will focus on promoting domestic tourism, especially among the youth, by leveraging the touristic heritage the country is gifted with.\r\n\r\nThe highlight of the night will remain the biggest support of about 300 people who followed Sharifa Umuhoza from the Northern Province, storming the event in a convoy of several mini-buses in show of support to their own. Peace Kwizera was announced Miss Photogenic, Sharifa Umuhoza predictably emerged Miss Popularity, Ariane Uwimana as Miss Congeniality while the emotional Jeanne Umutoni became Miss Heritage Rwanda 2016.', 0),
(8, ' KUNDWA Doriane', 2015, 'banner113.png', 'banner113.png', 'Miss 2015, uyu byaramamunaniye', 0),
(9, ' AKIWACU Colombe', 2013, 'banner116.jpg', 'banner116.jpg', 'Aka kari kabi rwose', 0),
(10, ' UMUTESI K. Aurore', 2012, 'banner114.png', 'banner114.png', 'SJADJKASHDKJ', 0),
(12, ' BAHATI Grace', 2009, 'banner115.png', 'banner115.png', '<i style="font-weight: bold;">Bahati Grace </i>ni nyampinga wakojeje igihugu isoni, kuko yabyaranya n''umuhanzi <b><i>K8 Kavuyo.</i></b><div><b><i><br></i></b></div><div>Kubwamahire nuko yaje guhungira muri <u><b>USA. &nbsp;</b></u></div><div><u><i>Ni akumiro pepepeeee!</i></u></div>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE IF NOT EXISTS `news_categories` (
  `CatID` int(11) NOT NULL AUTO_INCREMENT,
  `CatNAME` varchar(255) NOT NULL,
  PRIMARY KEY (`CatID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`CatID`, `CatNAME`) VALUES
(1, 'PROVERBS'),
(2, 'ART AND CRAFTS'),
(3, 'TRADITIONAL DANCE'),
(4, 'WEAVING OR BASKETRY'),
(5, 'MISS');

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE IF NOT EXISTS `news_comments` (
  `CmtID` int(11) NOT NULL AUTO_INCREMENT,
  `Names` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `InfoID` int(11) NOT NULL,
  `Accepted` varchar(100) NOT NULL,
  `Reply` int(11) NOT NULL,
  `Dte` varchar(100) NOT NULL,
  PRIMARY KEY (`CmtID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news_comments`
--

INSERT INTO `news_comments` (`CmtID`, `Names`, `Email`, `Comment`, `InfoID`, `Accepted`, `Reply`, `Dte`) VALUES
(4, 'pason', 'pason@gmail.com', 'hhhhhhhhhhhhhhhhhh', 15, 'No', 0, '02/17/03'),
(9, 'Rugara', 'rugara@gmail.com', 'aka kamiss nikeza pe, ndemeye kbsa', 15, 'No', 0, '02/17/03'),
(10, 'Maguru', 'maguru@gmal.com', 'Njyewe rwose nabonye aka gakobwabatoye atari keza pe', 15, 'No', 0, '02/17/03'),
(11, 'patrick', 'patrick@gmail.com', 'hsdjkjksahdjkashjkdhjska', 14, 'No', 0, '02/17/03');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Published_on` datetime NOT NULL,
  `News_Title` varchar(255) NOT NULL,
  `Short_description` text NOT NULL,
  `Full_Content` text NOT NULL,
  `news_icon` varchar(255) NOT NULL,
  `Likes` int(11) NOT NULL,
  `news_author` varchar(255) NOT NULL,
  `news_category` int(11) NOT NULL,
  `Sub_category` int(11) NOT NULL,
  `News_type` varchar(100) NOT NULL,
  PRIMARY KEY (`news_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_ID`, `Published_on`, `News_Title`, `Short_description`, `Full_Content`, `news_icon`, `Likes`, `news_author`, `news_category`, `Sub_category`, `News_type`) VALUES
(1, '2017-02-23 17:19:08', 'UMUGANI WA NGUNDA Igice cya mbere', 'Habayeho umugabo akitwa Ngunda. Uwo mugabo yari icyago, yari ishyano, yari igisahiranda ; uko yaryaga ni nako yahingaga.', '<p>Umugabo ngunda yaratuye ibwanacyabwe hahoze ari mubufundo, ubu ni mucyahoze ari gikongo </p><b>(Nyamagabe). </b><p>Ngunda akaba umugabo w''igisambo koko yagiraga unuheha witwaga "</p><i>ruvunabataka".</i><div>					<img src="../news_info/imgs/ngunda.jpg" alt="ngunda" /><br /></div><div><i>Ngunda yararyaga ntibagarure.</i></div><div><i><br /></i></div><div>Ibyangunda ni birebire ntawabivuga ngo abiragize gusa yakundaga amafunguro kuburyo buteye ubwoba</div>', 'ngunda.jpg', 0, 'admin', 1, 1, 'head'),
(2, '2017-02-23 17:47:26', 'INGANZO NGARI CULTURAL TROUPE PERFORMING AT THE EVENT', 'Inganzo Ngari perform at African Day in Turkey.', '', 'inganzo ngari.jpg', 0, 'admin', 3, 0, 'head'),
(3, '2017-02-23 17:53:29', 'INYAMIBWA SHOWCASES BEAUTY', 'history of Rwandan culture through dance', '', 'inyamibwa.jpg', 0, 'admin', 3, 0, 'head'),
(4, '2017-02-23 17:56:09', 'A LESSON FROM RWANDAN BASKET WEAVERS', 'Rwandan women take up basket weaving to global markets.', '', 'Tulips.jpg', 0, 'admin', 4, 0, 'head'),
(5, '2017-02-23 17:57:56', 'INEMA ARTS CENTER', 'Another art gallery in Kigali! Woohoo!! Meet the Inema Arts Center, located in Kacyiru. It’s actually been around for several months now but I’ve been.', '', 'insp.jpg', 0, 'admin', 2, 0, 'head'),
(10, '2017-02-24 15:04:38', 'IMIGANI- YARAYE RWA NTAMBI', 'Ni insigamigani yakomotse ahitwa rwa ntambi', '', '1.jpg', 0, 'admin', 1, 0, 'sub'),
(13, '2017-02-24 18:08:35', 'NYAGAKECURU MUBISI BYA HUYE', 'Nyagakecuru ni umugore wamamaye mumateka y''u Rwanda aho yaratuye mubisi bya huye afite inzoka karundura yari yarazengereje rubanda', '<br>', 'IMG_5829.JPG', 0, 'admin', 1, 0, 'head'),
(14, '2017-02-24 18:23:10', 'MISS 2017 CANDIDATES SIGNS THEIR PERFORMANCE', 'Today candidates of miss Rwanda 2017 has signed their contract performance before cabinet leadres', '<div style="text-align: left;">As it is known, always Miss candidates sign their contract performance, <b>Hon BAMPORIKI Edouard, </b>&nbsp;says that it is pleasure to have misses like them.</div>', 'miss1.jpg', 0, 'admin', 5, 0, 'head'),
(15, '2017-03-02 00:11:07', 'MISS RWANDA 2017 HAS BEEN CROWNED', 'On 27th February 2017, new miss has been crowned at Serena Hotel where the ceremony take place', '<div style="text-align: left;"><b>hasjdkhskajdh</b></div>', 'MISS.jpg', 0, 'admin', 5, 0, 'head');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `SubID` int(11) NOT NULL AUTO_INCREMENT,
  `SubName` varchar(255) NOT NULL,
  `Category` int(11) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  PRIMARY KEY (`SubID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`SubID`, `SubName`, `Category`, `Profile`, `Details`) VALUES
(1, 'THE PAINTING', 2, 'Desert.jpg', 'GASGDHJASGDJHAS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UsID` int(11) NOT NULL AUTO_INCREMENT,
  `Names` varchar(100) NOT NULL,
  `Contacts` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Utype` varchar(50) NOT NULL,
  PRIMARY KEY (`UsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsID`, `Names`, `Contacts`, `UserName`, `Password`, `Utype`) VALUES
(1, 'Admin', '', 'admin', '123', 'Admin'),
(2, 'Manzi Paul', 'manzi@gmail.com', 'manzi', '456', 'General');
