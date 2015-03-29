-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2011 at 07:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `trustworthy`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `superadmin` varchar(255) NOT NULL DEFAULT 'No',
  `lastlogin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`, `superadmin`, `lastlogin`) VALUES
(1, 'admin', 'admin', 'Yes', 'February 8, 2011, 4:11 pm'),
(3, 'ashwani', 'ashwani12', 'No', 'March 3, 2010, 1:15 pm');

-- --------------------------------------------------------

--
-- Table structure for table `factor`
--

CREATE TABLE IF NOT EXISTS `factor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `WebsiteTitle` int(3) NOT NULL,
  `WebsiteKeywords` int(3) NOT NULL,
  `WebsiteDescription` int(3) NOT NULL,
  `AlexaRank` int(3) NOT NULL,
  `GooglePagerank` int(3) NOT NULL,
  `GoogleBacklinks` int(3) NOT NULL,
  `YahooBacklinks` int(3) NOT NULL,
  `InboundLink` int(3) NOT NULL,
  `OutboundLink` int(3) NOT NULL,
  `WebsiteAge` int(3) NOT NULL,
  `DomainWhois` int(3) NOT NULL,
  `Lastmodifieddateforpage` int(3) NOT NULL,
  `IPAddress` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `factor`
--

INSERT INTO `factor` (`id`, `WebsiteTitle`, `WebsiteKeywords`, `WebsiteDescription`, `AlexaRank`, `GooglePagerank`, `GoogleBacklinks`, `YahooBacklinks`, `InboundLink`, `OutboundLink`, `WebsiteAge`, `DomainWhois`, `Lastmodifieddateforpage`, `IPAddress`) VALUES
(1, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 45, 34, 45);

-- --------------------------------------------------------

--
-- Table structure for table `trustworthy_factor`
--

CREATE TABLE IF NOT EXISTS `trustworthy_factor` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(1055) NOT NULL,
  `page_title` varchar(1055) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `last_modified` varchar(255) NOT NULL,
  `google_page_rank` varchar(255) NOT NULL,
  `google_indexed_pages` varchar(255) NOT NULL,
  `google_inbound_links` varchar(255) NOT NULL,
  `yahoo_indexed_pages` varchar(255) NOT NULL,
  `yahoo_inbound_links` varchar(255) NOT NULL,
  `bing_indexed_pages` varchar(255) NOT NULL,
  `bing_inbound_links` varchar(255) NOT NULL,
  `ask_indexed_pages` varchar(255) NOT NULL,
  `alexa_rank` varchar(255) NOT NULL,
  `alexa_inbound_links` varchar(255) NOT NULL,
  `dmoz_listing` varchar(255) NOT NULL,
  `site_advisor_rating` varchar(255) NOT NULL,
  `wot_rating` varchar(255) NOT NULL,
  `domain_age` varchar(255) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trustworthy_factor`
--

INSERT INTO `trustworthy_factor` (`uid`, `url`, `page_title`, `meta_keywords`, `meta_description`, `last_modified`, `google_page_rank`, `google_indexed_pages`, `google_inbound_links`, `yahoo_indexed_pages`, `yahoo_inbound_links`, `bing_indexed_pages`, `bing_inbound_links`, `ask_indexed_pages`, `alexa_rank`, `alexa_inbound_links`, `dmoz_listing`, `site_advisor_rating`, `wot_rating`, `domain_age`, `date`) VALUES
(1, 'http://www.rediff.com/', 'Rediff.com - India, Business, Stock, Sports, Cricket, Entertainment, Bollywood, Music, Video and Breaking news, Rediffmail NG', 'India news, India breaking news, Hindi songs, new songs, listen to music, Live cricket score, sports, Stock market, share value, finance, free mail, web email free, social networking, make friends, free videos, video clip, india shopping, online shopping, news , Music, Cricket, Money, Rediffmail, MyPage, iShare, Shopping, Rediffmail NG', 'Rediff.com - India''s leading portal which covers India news, Hindi Movies, Photos, Videos, Live Cricket Score, Stock updates from BSE and NSE, Bollywood news, Online shopping, Social networking, Rediffmail NG', '', '7\n', '1,050,000', '334', 'Not-Available', 'Not-Available', '1,75,000', '44,100', 'Not-Available', '145', '4,947', 'Free/Web-Based', 'green', 'trustworthy', '14 years, 1 day', 'February 9, 2011, 4:24 pm'),
(2, 'http://www.imdb.com/', 'The Internet Movie Database (IMDb)', 'movies,films,movie database,actors,actresses,directors,hollywood,stars,quotes', 'IMDb: The biggest, best, most award-winning movie site on the planet.', '', '8\n', '24,300,000', '1,970', 'Not-Available', 'Not-Available', '76,90,000', '57,90,000', 'Not-Available', '36', '110,613', 'Movies/Databases', 'green', 'trustworthy', '15 years, 36 days', 'February 9, 2011, 4:24 pm');

-- --------------------------------------------------------

--
-- Table structure for table `trustworthy_result`
--

CREATE TABLE IF NOT EXISTS `trustworthy_result` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(1055) NOT NULL,
  `title` varchar(1055) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(1055) NOT NULL,
  `realurl` varchar(1055) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `trustworthy_result`
--

INSERT INTO `trustworthy_result` (`uid`, `keywords`, `title`, `description`, `url`, `realurl`, `date`) VALUES
(1, 'srk', 'Shoryuken - Home', 'srklive. <b>SRK</b> Live 24/7 by Shoryuken.com. today @ 24/7. goto stream ', 'www.shoryuken.com', 'http://www.shoryuken.com/', 'February 9, 2011, 4:23 pm'),
(2, 'srk', '<b>Shah Rukh Khan</b> | <b>SRK</b> the Don | Ra.One | Don 2 | <b>Shah Rukh Khan', 'Jan 8, 2011 <b>...</b> Close friends <b>Shah Rukh Khan</b> and Hrithik Roshan will ring in 2011 right here in   Dubai with a starry celebration. <b>SRK</b>, of course, owns a <b>...</b>', 'srkthedon.blogspot.com', 'http://srkthedon.blogspot.com/', 'February 9, 2011, 4:23 pm'),
(3, 'srk', '<b>Shahrukh</b> Khan - Wikipedia, the free encyclopedia', '<b>Shahrukh</b> Khan (Urdu: شاہ رُخ خان, Hindi: शाहरुख़ ख़ान; born 2   November 1965), often credited as <b>Shah Rukh Khan</b>, is an Indian film actor and a   <b>...</b>', 'en.wikipedia.org', 'http://en.wikipedia.org/wiki/Shahrukh_Khan', 'February 9, 2011, 4:23 pm'),
(4, 'srk', '<b>SRK</b> Global', 'Multi-disciplinary consulting firm, providing comprehensive engineering and   environmental services to the mining industry worldwide. Based in Colorado.', 'www.srk.com', 'http://www.srk.com/', 'February 9, 2011, 4:23 pm'),
(5, 'srk', '<b>SHAH RUKH KHAN</b> (iamsrk) on Twitter', '<b>SHAH RUKH KHAN</b> (iamsrk) is on Twitter. Sign up for Twitter to follow <b>SHAH RUKH</b>   <b>KHAN</b> (iamsrk) and get their latest updates.', 'twitter.com', 'http://twitter.com/IAMSRK', 'February 9, 2011, 4:23 pm'),
(6, 'srk', 'Was <b>SRK</b> a zordaar host in Zor Ka Jhatka? - Rediff.com Movies', 'Feb 2, 2011 <b>...</b> After several months of lying low, Shah Rukh packs in truckloads of enthusiasm   for a racy show that', 'www.rediff.com', 'http://www.rediff.com/movies/slide-show/slide-show-1-tv-zor-ka-jhatka-review/20110202.htm', 'February 9, 2011, 4:23 pm'),
(7, 'srk', '<b>Shahrukh</b> Khan My name is Khan, Rab ne bana di jodi, Om shanti om <b>...</b>', '<b>Shahrukh</b> Khan fan site with up to date pictures, news and info on <b>Shahrukh</b> Khan   - the true king of Hindi films.', 'vluvshahrukh.com', 'http://vluvshahrukh.com/', 'February 9, 2011, 4:23 pm'),
(8, 'srk', '<b>Shahrukh</b> Khan - Biography', '<b>Shahrukh</b> Khan was born on 2nd November 1965. He was brought up in Delhi. He has   a sister named Shehnaaz, Wife Gauri Khan, And a dog Named Chewbacca. <b>...</b>', 'www.imdb.com', 'http://www.imdb.com/name/nm0451321/bio', 'February 9, 2011, 4:23 pm');

-- --------------------------------------------------------

--
-- Table structure for table `trustworthy_url`
--

CREATE TABLE IF NOT EXISTS `trustworthy_url` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(1055) NOT NULL,
  `url` varchar(1055) NOT NULL,
  `date` varchar(55) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `trustworthy_url`
--

INSERT INTO `trustworthy_url` (`uid`, `keywords`, `url`, `date`) VALUES
(1, 'srk', 'http://www.shoryuken.com/', 'February 9, 2011, 4:23 pm'),
(2, 'srk', '.com/', 'February 9, 2011, 4:23 pm'),
(3, 'srk', 'http://srkthedon.blogspot.com/', 'February 9, 2011, 4:23 pm'),
(4, 'srk', 'http://www.srk.com/', 'February 9, 2011, 4:23 pm'),
(5, 'srk', 'http://twitter.com/', 'February 9, 2011, 4:23 pm'),
(6, 'srk', 'http://www.rediff.com/', 'February 9, 2011, 4:23 pm'),
(7, 'srk', 'http://vluvshahrukh.com/', 'February 9, 2011, 4:23 pm'),
(8, 'srk', 'http://www.imdb.com/', 'February 9, 2011, 4:23 pm');
