-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 10:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ishan', 'ishan123');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(4) NOT NULL,
  `filename` text NOT NULL,
  `song` varchar(500) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `Genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `filename`, `song`, `artist`, `image`, `Genre`) VALUES
(1, '../Uploads/Heading Home.mp3', 'test1', 'test1', '../Uploads/500x500.jpg', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(500) NOT NULL,
  `cat_sub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_sub`) VALUES
(3, 'PS4', 'Game'),
(4, 'Xbox', 'Game'),
(5, 'Nintendo', 'Game'),
(6, 'Gaming', 'Article');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `comments_post_id` int(11) NOT NULL,
  `comments_author` varchar(255) NOT NULL,
  `comments_email` varchar(255) NOT NULL,
  `comments_content` text NOT NULL,
  `comments_status` varchar(255) NOT NULL,
  `comments_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comments_post_id`, `comments_author`, `comments_email`, `comments_content`, `comments_status`, `comments_date`) VALUES
(1, 2, 'no one', 'none@none.com', 'sdvjnedjhnbvgjvg', 'approved', '2021-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_cat_id` int(11) NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `game_date` date NOT NULL,
  `game_img` text NOT NULL,
  `game_content` text NOT NULL,
  `game_tags` varchar(255) NOT NULL,
  `game_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_cat_id`, `game_title`, `game_date`, `game_img`, `game_content`, `game_tags`, `game_status`) VALUES
(1, 3, 'God of War 2019', '2021-06-08', '45.jpg', '<p>God of War is an action RPG</p>\r\n', 'Adventure', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_img` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_desc` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_date`, `post_img`, `post_content`, `post_tags`, `post_desc`, `post_status`) VALUES
(4, 4, 'Sony has 25 PS5 games in the works, including characters you’ve never seen', 'Admin', '2021-06-02', '24.jpg', '<div class=\"mb-100 post-details-content\">\r\n<div class=\"blog-thumbnail mb-50\"><img alt=\"\" src=\"img/bg-img/vpavic_4278_20201030_0206.0.webp\" /></div>\r\n\r\n<div class=\"c-entry-hero c-entry-hero--default\">\r\n<div class=\"c-entry-hero__header-wrap\">\r\n<h2>That&rsquo;s a lot of games</h2>\r\n</div>\r\n\r\n<div class=\"c-byline\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"c-entry-content\">\r\n<p>Sony is apparently looking to release more than 25 PlayStation 5 games under its PlayStation Studios brand. And &ldquo;nearly half&rdquo; of them will <em>not</em> be sequels or spinoffs, according to <a href=\"https://www.wired.com/story/playstation-5-six-months-later/\"><em>Wired</em>&rsquo;s interview</a> with PlayStation Studio lead (and former Guerrilla Games managing director) Hermen Hulst.</p>\r\n\r\n<p>That could theoretically be a <em>lot </em>more games than the four first-party Sony titles we already know about:</p>\r\n\r\n<ul>\r\n	<li><em>Horizon Forbidden West </em>(2021)</li>\r\n	<li><em>Ratchet and Clank: Rift Apart </em>(June 2021)</li>\r\n	<li><em>God of War: Ragnarok </em>(2021)</li>\r\n	<li><em>Gran Turismo 7 </em>(2022)</li>\r\n</ul>\r\n\r\n<p>Twenty-one additional games could be a huge shot in the arm for the PS5, especially considering how slowly exclusives are trickling out; <em>Gran Turismo</em> has <a href=\"https://www.theverge.com/2021/2/23/22297059/gran-turismo-7-ps5-playstation-5-release-date-delay-2022\">already slipped to next year</a>.</p>\r\n\r\n<p>Sony also may not be completely on the hook for producing all of the games that are unaccounted for, though. The PlayStation Studios branding is a bit murky. When it was first announced, Eric Lempel, the head of global marketing at Sony Interactive Entertainment, <a href=\"https://www.gamesindustry.biz/articles/2020-05-12-sony-unveils-playstation-studios-brand-to-launch-alongside-ps5\">told <em>GamesIndustry.biz</em></a> that the branding &ldquo;doesn&rsquo;t mean that we outright own the developer, but it just means we brought it up as a first-party. In a lot of cases we don&rsquo;t own the developer.&rdquo;</p>\r\n\r\n<div class=\"c-float-right\">\r\n<p><q>&ldquo;In a lot of cases we don&rsquo;t own the developer.&rdquo;</q></p>\r\n</div>\r\n\r\n<p><em>Wired</em> specifically name-drops indie games from outside studios partnered with Sony, including the upcoming <em>Kena: Bridge of Spirits</em>, and a game from Haven Studios. It&rsquo;s unclear whether those and similar titles will be counted toward the more-than-25 figure. Sony didn&rsquo;t immediately respond to a request for clarification.</p>\r\n\r\n<p>Also, if Haven Studios doesn&rsquo;t sound familiar, it&rsquo;s because it was <a href=\"https://www.theverge.com/2021/3/16/22334101/jade-raymond-haven-game-studio-playstation\">just formed in March</a> when noted industry figure Jade Raymond left Google when it <a href=\"https://www.theverge.com/2021/2/1/22260803/google-stadia-game-development-studio-shut-down-jade-raymond\">shut down its in-house Stadia development studios</a>. That speaks to the idea that we many not be seeing some of these games for quite a while. Hulst did mention that some of the games would be small, however, likely taking less development time. That, along with the fact that many of the games won&rsquo;t be part of existing franchises, is exciting for non-AAA aficionados like myself and could help relieve worries that it&rsquo;ll take a decade for all these games to come out.</p>\r\n\r\n<p>And while the games may not all be first-party games, that&rsquo;s not necessarily a bad thing: <em>Returnal </em>was a PlayStation Studios game made by an outside developer, and it&rsquo;s an example of an original game <a href=\"https://www.theverge.com/2021/4/29/22408468/returnal-ps5-dualsense-3d-audio\">that&rsquo;s received a lot of praise</a> since its release.</p>\r\n\r\n<p>It&rsquo;s also worth noting that these games won&rsquo;t necessarily be exclusive to the PS5. <em>MLB: The Show 21 </em>is a PlayStation Studios game that&rsquo;s available on Xbox, and <em>Horizon Zero Dawn </em>has gotten <a href=\"https://www.theverge.com/21363127/horizon-zero-dawn-pc-port-review-performance\">a (somewhat troubled) PC port</a>. Sony has also <a href=\"https://www.theverge.com/2021/2/23/22297091/days-gone-pc-playstation-games-ports-jim-ryan\">said it&rsquo;s interested</a> in bringing more of its games to the PC in the future. There are also, of course, games that will come out for PS4 as well as PS5: we know that <em>Forbidden West </em><a href=\"https://www.playstation.com/en-us/games/horizon-forbidden-west/\">will be released on the older PlayStation</a>.</p>\r\n\r\n<p>Even with all the caveats, it&rsquo;s exciting to hear that Sony is working on a slate of games for the PS5, likely far beyond what we&rsquo;ve already heard about. With Sony&rsquo;s <a href=\"https://www.theverge.com/2021/4/28/22407195/sony-ps5-sales-numbers-q4-2020-earnings\">latest earnings report</a> indicating that it&rsquo;s sold 7.8 million PS5s, there are a lot of customers who will be looking for experiences that justify the cost of the PS5, and it seems like Sony is trying to make sure it&rsquo;s got its bases covered.</p>\r\n\r\n<div class=\"c-read-more\">\r\n<p>Related</p>\r\n\r\n<h4><a href=\"https://www.theverge.com/21538464/ps5-xbox-series-x-launch-games-list-new-release-holiday-2020-2021\">Here&rsquo;s every game coming to the PlayStation 5 and Xbox Series X in 2021</a></h4>\r\n</div>\r\n</div>\r\n\r\n<div class=\"l-segment l-sidebar-fixed\">\r\n<div class=\"l-col__main\">&nbsp;</div>\r\n</div>\r\n</div>\r\n', 'Gaming, Sony', 'All the biggest announcements and trailers from Sony PlayStation at E3 2018', 'Published'),
(5, 6, 'Microsoft and Sony are teaming up for the future of gaming', 'Admin', '2021-06-02', 'xboxplaystation.0.webp', '<p>text goes here</p>\r\n', 'Microsoft , Sony , Gaming', 'It’s all about Xbox and PlayStation beating Amazon and Google', 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `first_name`, `last_name`, `user_email`, `user_image`, `user_role`) VALUES
(1, 'admin', '123', 'Admin', '', 'admin@divergent.com', '', 'Admin'),
(2, 'ip', 'nm', 'Ishan', 'Patni', 'ishan.patni@gmail.com', '', 'User'),
(3, 'aakash', 'ip', 'Aakash', 'Girhe', 'aakash.girhe@gmail.com', '', 'User'),
(8, 'e', '123', 'e', '', '', '', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(4) NOT NULL,
  `url` text NOT NULL,
  `Title` text NOT NULL,
  `Category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `url`, `Title`, `Category`) VALUES
(1, 'https://www.youtube.com/embed/KIIS-vIXvAo?controls=0', 'Fake LS', 'Trending'),
(2, '1.mp4', 'TEST', 'Trending'),
(3, 'https://www.youtube.com/embed/b8--JS9lRnI', 'Deedar de', 'Dance'),
(4, 'https://www.youtube.com/embed/dWHIcMeAIMw', 'Woh Anjabee', 'Dance'),
(5, 'https://www.youtube.com/embed/d1ZnM7CH-v4', 'TEST', 'Food');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
