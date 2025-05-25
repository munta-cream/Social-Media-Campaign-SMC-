-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 06:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc`
--

-- --------------------------------------------------------

--
-- Table structure for table `procedure`
--

CREATE TABLE `procedure` (
  `id` int(11) NOT NULL,
  `heading_name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `procedure`
--

INSERT INTO `procedure` (`id`, `heading_name`, `image`, `discription`) VALUES
(5, 'Livestreaming', '', 'Privacy Settings Matter\r\nCheck and configure the privacy settings on your live streaming account. Make sure you understand who can view your live streams and interact with you. Set restrictions that align with your comfort level and age.\r\n\r\nBe Mindful of Personal Information\r\nAvoid sharing personal information like your home address, school name, or phone number during live streams. Protecting your privacy online is crucial for your safety.\r\n\r\nMonitor Viewer Comments\r\nStay vigilant about comments from viewers. If you notice any inappropriate or offensive remarks, take action by deleting the comments, blocking the user, or reporting the incident.\r\n\r\nChoose Appropriate Content\r\nBefore starting a live stream, think about the content you want to share. Make sure it is age-appropriate, positive, and adheres to community guidelines. Consider your audience and what would be enjoyable for them.\r\n\r\nSet Privacy Settings\r\nCheck and adjust your privacy settings before going live. Ensure that you are comfortable with who can view your stream. Consider making your stream private or accessible only to approved followers to maintain control over your audience.\r\n\r\nKnow Your Audience\r\nBe aware of who is watching your live stream. Consider limiting interactions to people you know personally or those who are supportive and positive. Avoid engaging with strangers who may have malicious intent.\r\n\r\nBe Authentic and Have Fun\r\nBe yourself during live streams. Authenticity is valued by viewers. Enjoy the experience, share your passions, and remember that live streaming is an opportunity to connect and have fun with others.'),
(6, 'Popular Social Media', '', 'Privacy Matters\r\nYour privacy is like a digital fortress that protects you from unwanted attention. Setting your profiles to private means that only people you approve can see your posts, photos, and personal information. It\'s an essential step to control who has access to your online life and helps prevent strangers from entering your digital space.\r\n\r\nThink Before You Post\r\nEverything you post online can leave a lasting impression. Before hitting the \"share\" button, consider whether the content reflects your values and if you would be comfortable with others seeing it. This practice helps in maintaining a positive online presence and avoiding the potential consequences of sharing inappropriate or regrettable content.\r\n\r\nBe Selective with Friends\r\nJust as you choose your friends in real life, be selective about who you connect with online. Accept friend requests or followers only from people you know personally and trust. Avoid adding strangers, as this reduces the risk of unwanted interactions and ensures a safer online environment.\r\n\r\nStay Informed\r\nSocial media platforms are continually evolving, introducing new features and potential risks. Staying informed about the latest updates, trends, and potential threats helps you make informed decisions about your online activities. Knowledge is a powerful tool for navigating the digital world safely.\r\n\r\nOpen Communication\r\nCommunication is key to a healthy online experience. Talk to your parents, guardians, or other trusted adults about your online activities. If you have questions or come across something that makes you uncomfortable, discussing it with a responsible adult can provide valuable guidance and support.\r\n\r\nAvoid Cyberbullying\r\nCyberbullying involves using technology to harass, threaten, or intimidate others. Treat people online with the same kindness and respect you would in person. If you witness cyberbullying, take a stand against it, support the victim, and report the behavior to adults or the platform administrators. Creating a positive online culture starts with individual actions.\r\n\r\nTrust Your Instincts\r\nYour instincts are powerful tools for self-protection. If something online feels off or uncomfortable, trust your gut feelings. It\'s okay to step back, reassess the situation, and seek guidance from a trusted adult. Trusting your instincts empowers you to make decisions that prioritize your safety and well-being in the online world.');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `uid` int(200) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `sur_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `gender` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(18) DEFAULT NULL,
  `dob` date NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`uid`, `first_name`, `sur_name`, `email`, `password`, `image`, `gender`, `phone`, `dob`, `address`) VALUES
(1, 'Muntakim', 'Hossain', '951@email.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'M', '952620', '2023-12-03', 'Dhaka'),
(2, 'Bob', 'Bob', 'bob@email.com', '202cb962ac59075b964b07152d234b70', '', 'M', '951', '2023-12-04', 'Dhaka'),
(9, 'momo', 'momo', 'momo@email.com', '202cb962ac59075b964b07152d234b70', '', 'M', '951', '2023-12-11', 'Dhaka'),
(10, 'hulu', 'hulu', 'hulu@email.com', '202cb962ac59075b964b07152d234b70', 'black-and-yellow-stars-rating-icon-set-five-stars-of-customer-product-rating-review-feedback-icon-for-app-and-website-vector.jpg', 'M', '654', '2023-12-11', 'hulu'),
(12, 'koko', 'koko', 'koko@email.com', '202cb962ac59075b964b07152d234b70', '2.JPG', 'M', '0125985265', '2024-01-02', 'Dhaka'),
(13, 'Muntakim', 'Hossain', 'munta.hossain@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 'Cover.png', 'M', '+8801775709090', '2023-12-13', '84, Kalabagan'),
(14, 'Muntakim', 'Hossain', 'munta@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 'Cover.png', 'M', '+8801775709090', '2023-12-13', '84, Kalabagan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `procedure`
--
ALTER TABLE `procedure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `procedure`
--
ALTER TABLE `procedure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
