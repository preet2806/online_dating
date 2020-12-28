-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 12:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinedating`
--

-- --------------------------------------------------------

--
-- Table structure for table `like_table`
--

CREATE TABLE `like_table` (
  `User_1` varchar(20) NOT NULL,
  `User_2` varchar(20) NOT NULL,
  `Like_12` tinyint(1) DEFAULT NULL,
  `Like_21` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_table`
--

INSERT INTO `like_table` (`User_1`, `User_2`, `Like_12`, `Like_21`) VALUES
('2chirayu', 'danoushka', 1, 1),
('2chirayu', 'dshailee', 1, 1),
('2chirayu', 'rsashi', -1, 0),
('2chirayu', 'rshreya', 1, 0),
('amrita1', 'roh1t', 1, 0),
('ankush123', 'nandinimo', 1, 0),
('ankush123', 'userexample', 1, 0),
('danoushka', 'dshailee', 1, 0),
('danoushka', 'mahira15', 1, 0),
('danoushka', 'mish15', 0, 0),
('danoushka', 'nandinimo', 1, 0),
('dhruvvv3', 'mish15', 1, 0),
('dhruvvv3', 'preet28', 1, 1),
('dinalaloy', 'deltad', 1, 0),
('dinalaloy', 'dshailee', 1, 1),
('dinalaloy', 'sanjanana', 1, 1),
('dkeval', 'dhruvvv3', 0, 1),
('dshailee', '2sushant', 1, 0),
('dshailee', 'deveshvv3', 0, 0),
('dshailee', 'jayie', 1, 0),
('dshailee', 'joeie', 1, 0),
('dshailee', 'ravii', 1, 0),
('dshailee', 'roh1t', 1, 0),
('flynn', '2chirayu', 1, 0),
('flynn', 'dhruvvv3', 0, 0),
('flynn', 'dvedant', 1, 0),
('flynn', 'joeie', 1, 0),
('kushk', '2chirayu', 1, 0),
('kushk', 'dhruvvv3', 1, 0),
('kushk', 'dvedant', 0, 0),
('kushk', 'flynn', 1, 0),
('kushk', 'joeie', 1, 0),
('mahira15', 'dkeval', 1, 0),
('mahira15', 'farhan', 1, 0),
('mahira15', 'kedarnathk', 1, 1),
('mahira15', 'kushk', 1, 0),
('mahira15', 'roh1t', 0, 0),
('margip', 'roh1t', 1, 0),
('mish15', 'roh1t', 1, 1),
('nandinimo', 'userexample', 0, 1),
('pearlmot', '2chirayu', 1, 1),
('pearlmot', 'ankush123', 1, 0),
('pearlmot', 'dinalaloy', 1, 0),
('pearlmot', 'jayie', 1, 0),
('pearlmot', 'preat', 1, 0),
('pearlmot', 'ravii', 1, 1),
('pearlmot', 'roh1t', 1, 0),
('preat', 'dkeval', 0, 0),
('preat', 'farhan', 0, 0),
('preat', 'kedarnathk', 1, 1),
('preat', 'kushk', 1, 0),
('prernar', 'prachi20', 1, 1),
('prernar', 'preet28', 1, 0),
('prernar', 'rsashi', 1, 0),
('prernar', 'rshreya', 1, 0),
('roh1t', 'prachi20', 1, 1),
('roh1t', 'preet28', 1, 0),
('roh1t', 'rsashi', 1, 0),
('roh1t', 'rshreya', 1, 0),
('rsashi', 'mahira15', 0, 0),
('rsashi', 'mish15', 0, 0),
('rsashi', 'nandinimo', 0, 0),
('userexample', 'danoushka', 1, 1),
('userexample', 'deltad', 1, 0),
('userexample', 'dshailee', 1, 1),
('userexample', 'mahira15', 1, 0),
('userexample', 'mish15', 1, 1),
('userexample', 'prachi20', 1, 0),
('userexample', 'rsashi', 0, 0),
('userexample', 'rshreya', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `user_id` varchar(20) DEFAULT NULL,
  `email_id` varchar(20) NOT NULL,
  `user_password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_id`, `email_id`, `user_password`) VALUES
('amrita1', 'amrita@gmail.com', 'amritadbms'),
('ankush123', 'ankush@gmail.com', 'ankush'),
('rshreya', 'ayerhs@gmail.com', 'kllih4'),
('2chirayu', 'chiryu@gmail.com', 'uhfoeij'),
('danoushka', 'dano@gmail.com', 'ojocoold'),
('deltad', 'delta@gmail.com', 'mypass'),
('dshailee', 'desais@gmail.com', 'ojo19kd'),
('deveshvv3', 'deveshv@gmail.com', 'dd16rf'),
('dhruvvv3', 'dhruvv@gmail.com', '416rf'),
('dinalaloy', 'dinal@yahoo.com', 'dinalit'),
('farhan', 'farhan@gmail.com', 'pkimjmy87'),
('flynn', 'flynn@gmail.com', 'pojo8y87'),
('kushk', 'husk@gmail.com', 'GY8f*'),
('rsashi', 'ihsahs@gmail.com', 'kllihggg'),
('jayie', 'jayy@gmail.com', 'h42de'),
('joeie', 'joey@gmail.com', 'h42'),
('dkeval', 'kevdall@gmail.com', 'opjo%j2'),
('mahira15', 'mahirara@gmail.com', 'shau498'),
('margip', 'margi@gmail.com', 'mar123'),
('mish15', 'mishra@gmail.com', 'iju498'),
('nandinimo', 'nandiniy@gmail.com', 'lldko'),
('nithyas', 'nithya@gmail.com', 'dbms'),
('pearlmot', 'pearly@gmail.com', 'coko'),
('prachi20', 'prashi@gmail.com', '9999us'),
('preet28', 'pree@yahoo.com', '99njujn'),
('preat', 'preey@gmail.com', '99nju'),
('prernar', 'prernarathi@gmail.co', 'venkar'),
('ravii', 'ravi@gmail.com', 'raviravi'),
('roh1t', 'rohi@gmail.com', 'hjn24'),
('sanjanana', 'sanjana@gmail.com', 'sanjana'),
('2sushant', 'sush@gmail.com', 'uhfaqdeij'),
('userexample', 'thisuser@gmail.com', 'usermeme');

-- --------------------------------------------------------

--
-- Table structure for table `match_table`
--

CREATE TABLE `match_table` (
  `match_id` int(11) NOT NULL,
  `User_1` varchar(20) DEFAULT NULL,
  `User_2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_table`
--

INSERT INTO `match_table` (`match_id`, `User_1`, `User_2`) VALUES
(11, '2chirayu', 'danoushka'),
(2, '2chirayu', 'dshailee'),
(3, 'dhruvvv3', 'preet28'),
(20, 'dinalaloy', 'dshailee'),
(19, 'dinalaloy', 'sanjanana'),
(4, 'mahira15', 'kedarnathk'),
(5, 'mish15', 'roh1t'),
(22, 'pearlmot', '2chirayu'),
(21, 'preat', 'kedarnathk'),
(15, 'prernar', 'prachi20'),
(14, 'roh1t', 'prachi20'),
(12, 'userexample', 'danoushka'),
(13, 'userexample', 'dshailee'),
(1, 'userexample', 'mish15');

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

CREATE TABLE `message_table` (
  `Message_id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `From_user` varchar(20) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `message_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_table`
--

INSERT INTO `message_table` (`Message_id`, `match_id`, `From_user`, `message`, `message_time`) VALUES
(1, 11, 'danoushka', 'hey!', '2020-10-27 08:52:25'),
(2, 1, 'userexample', 'heyy!!', '2020-10-28 15:09:10'),
(3, 1, 'mish15', 'hello', '2020-10-28 15:47:04'),
(4, 1, 'userexample', 'how are you', '2020-10-28 17:07:06'),
(10, 12, 'userexample', 'hey', '2020-10-29 10:19:24'),
(11, 12, 'userexample', 'how are you', '2020-10-29 12:34:42'),
(12, 4, 'mahira15', 'hello kedarnath', '2020-10-30 12:39:33'),
(13, 2, 'dshailee', 'coffee?', '2020-10-30 12:42:46'),
(14, 2, 'mish15', 'i am fine', '2020-10-30 13:12:01'),
(16, 1, 'userexample', 'lets meet', '2020-10-31 08:59:47'),
(17, 11, '2chirayu', 'hello', '2020-12-27 09:03:44'),
(18, 11, '2chirayu', 'i am fine', '2020-12-27 09:24:23'),
(19, 22, '2chirayu', 'hi', '2020-12-27 09:25:28'),
(20, 22, '2chirayu', 'hi', '2020-12-27 09:25:34'),
(21, 22, '2chirayu', 'how are you', '2020-12-27 09:27:29'),
(22, 2, '2chirayu', 'shailee?', '2020-12-27 09:33:05'),
(23, 2, '2chirayu', 'this is chiryu', '2020-12-27 09:34:04'),
(24, 2, '2chirayu', 'hello?', '2020-12-27 09:34:32'),
(25, 11, '2chirayu', 'aboushka?', '2020-12-27 09:35:52'),
(26, 11, '2chirayu', 'h', '2020-12-27 09:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `picture_table`
--

CREATE TABLE `picture_table` (
  `pic_id` int(11) NOT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `picture` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picture_table`
--

INSERT INTO `picture_table` (`pic_id`, `user_id`, `picture`) VALUES
(1, 'danoushka', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/beautiful-female-model-with-long-light-brown-hair-vine-lips-posing-isolated-wall-with-lovely-smile-portrait-young-well-groomed-girl-with-perfect-skin-close-up.jpg?alt=media&token=e560a488-f1ac-4471-b4f2-92edc78884c4'),
(3, 'deltad', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/beautiful-young-woman-looking-camera.jpg?alt=media&token=e566fa97-001a-44c4-a47b-7d18ac294832'),
(4, 'dshailee', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/cropped-shot-attractive-mixed-race-female-model-with-bushy-afro-hairstyle-updates-profile-social-networks-mobile-phone-connected-wireless-internet-coffee-shop-drinks-cocktail.jpg?alt=media&token=3dc2d47b-09a5-4925-98af-c541bf859436'),
(5, 'mahira15', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/modern-woman-taking-selfie.jpg?alt=media&token=8c008a7c-c4bc-4207-a4d8-3160c2f4de79'),
(6, 'margip', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/outdoor-summer-smiling-lifestyle-portrait-pretty-young-woman-having-fun-city-europe-evening-with-camera-travel-photo-photographer-making-pictures.jpg?alt=media&token=5f5b3e7b-c90d-4965-8837-ef54c0772ce8'),
(7, 'mish15', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/playful-hot-african-american-with-afro-hairstyle-pulling-hands-towards-make-selfie-winking-joyfully-smiling-broadly-making-new-profile-pic-social-network.jpg?alt=media&token=24f9b36c-4e1c-43f1-ba71-c28f01aa38e6'),
(8, 'nandinimo', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/profile-charming-professional-young-female-designer-dressed-stylish-wear-enjoying-process-creation-holding-pencil-sketching-large-tablet-people-creativity-art-design-concept.jpg?alt=media&token=7102b1e0-b39c-41f6-ab5c-8bb99cc6b6f8'),
(9, 'pearlmot', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/profile-portrait-young-beautiful-tender-redhead-girl-with-bun-headphones-smiling.jpg?alt=media&token=836cd53f-78e8-4799-961f-0065cc8d02d3'),
(10, 'prachi20', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/romantic-female-portrait-with-city-lights.jpg?alt=media&token=5f05deb6-4b5c-40b4-80f1-da4e411f2301'),
(11, 'preat', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/young-happy-smiling-woman-casual-clothes-holding-laptop-sending-email-her-best-friend.jpg?alt=media&token=797010c2-0705-4081-9c19-96055154a2f0'),
(12, 'preet28', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/young-woman-photographer-shooting-with-camera-isolated-gray-wall.jpg?alt=media&token=38e683e2-8336-455a-afec-c7c9562f7220'),
(13, 'rsashi', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/portrait-side-profile-beautiful-woman-with-long-hair-dressed-whitr-casual-t-shirt-glasses-looking-aside.jpg?alt=media&token=1640a9c7-aff9-4b19-8b0d-982a3b28b35d'),
(14, 'rshreya', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/profile-attractive-carefree-girl-smiling-with-hands-head-looking-determined-ready-action.jpg?alt=media&token=79c5601a-fe13-4eec-809a-6efce6c35e55'),
(15, 'sanjanana', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/AdobeStock_244380850_Preview.jpeg?alt=media&token=f1b3deb8-24d1-43bf-8450-61aca8c893f9'),
(16, '2chirayu', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/happy-business-afro-american-man-standing-smiling-against-blue-background-profile-view.jpg?alt=media&token=4e53370c-37e5-464d-8cb8-802bbd65999e'),
(17, '2sushant', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/isolated-pink-young-casual-man-shouting-studio.jpg?alt=media&token=acc326e9-a1d7-414a-8e76-3d9a19464dac'),
(18, 'deveshvv3', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/let-me-think-doubtful-pensive-man-with-thoughtful-expression-making-choice-against-green-background.jpg?alt=media&token=b1772418-fbed-4b88-8d54-1e6b1e671e60'),
(19, 'dhruvvv3', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/portrait-cheerful-pleasant-bearded-guy-showing-direction-with-his-forefinger-having-sincere-smile.jpg?alt=media&token=8e5b9476-0c1a-40c9-8d10-59bc11e1653f'),
(20, 'dinalaloy', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/portrait-young-asian-man-looking-confident-taking-selfie-while-standing-outdoors-street.jpg?alt=media&token=b0421676-b4bb-4c0f-b111-26f797fb10b2'),
(21, 'dkeval', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/profile-cheerful-handsome-man-with-fashionable-hairstyle-beard-smiling-brightfully-pointing-copyspace.jpg?alt=media&token=79ec840a-52f0-4927-92a9-de605c5d9e49'),
(22, 'dvedant', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/profile-serious-male-scientist-with-stubble-taking-picture-nature-his-black-generic-digital-tablet-while-working-scientific-research-jungle.jpg?alt=media&token=718c863d-2751-43c4-a817-20442468ba93'),
(23, 'farhan', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/smiling-photographer-posing.jpg?alt=media&token=a44ea222-7de1-496a-ab07-1273a7eecb11'),
(24, 'flynn', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/young-guy-posing-zoo-with-parrot-his-hand-bearded-man-bird.jpg?alt=media&token=a67806e2-2371-4046-9b3a-a9d11a5d8130'),
(25, 'jayie', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/young-handsome-man-listens-music-with-earphones.jpg?alt=media&token=e4ac4b79-d39f-48f7-b614-210be955d60a'),
(26, 'prernar', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/outdoor-summer-smiling-lifestyle-portrait-pretty-young-woman-having-fun-city-europe-evening-with-camera-travel-photo-photographer-making-pictures.jpg?alt=media&token=981897ad-54f3-41cc-84ca-29d3997ff9d8'),
(27, 'joeie', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/man-portrait.jpg?alt=media&token=34357d0a-0dec-4591-9732-b244e3224f25'),
(28, 'kedarnathk', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/close-up-portrait-handsome-smiling-young-man-white-t-shirt-looking-away-blurry-outdoor-nature.jpg?alt=media&token=df08e439-1987-456c-a82b-55f89077f9e7'),
(29, 'kushk', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/portrait-happy-pensive-young-businessman-wears-white-shirt-office.jpg?alt=media&token=a61397b7-9c57-447e-8c49-f77327d74da4'),
(30, 'ravii', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/photo-laughting-african-american-attracrive-guy-sits-cafe-works-laptop-drinks-aromatic-coffee-enjoy-his-freelance-work.jpg?alt=media&token=9004c586-0d50-4d9b-9b17-c650c02f65bd'),
(31, 'roh1t', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/portrait-young-man-looking-camera.jpg?alt=media&token=e7b509f6-8a07-4d13-bd7b-fd4e545e3a65'),
(32, 'userexample', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/joyful-stylish-guy-glasses-posing-apartment-balcony.jpg?alt=media&token=a3700fee-712c-49eb-a274-f901405a3389'),
(34, 'amrita1', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/modern-woman-taking-selfie.jpg?alt=media&token=c2cd6cc2-90b6-4b9a-8cb1-137e6db44a1f'),
(35, 'ankush123', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/outdoor-summer-smiling-lifestyle-portrait-pretty-young-woman-having-fun-city-europe-evening-with-camera-travel-photo-photographer-making-pictures.jpg?alt=media&token=e96b0100-aad3-4a4a-a7c5-e502f5071ee0'),
(36, 'nithyas', 'https://firebasestorage.googleapis.com/v0/b/vmatch-57c66.appspot.com/o/outdoor-summer-smiling-lifestyle-portrait-pretty-young-woman-having-fun-city-europe-evening-with-camera-travel-photo-photographer-making-pictures.jpg?alt=media&token=946db8ea-fb20-4297-b0fe-96225c0dbc23');

-- --------------------------------------------------------

--
-- Table structure for table `preference_table`
--

CREATE TABLE `preference_table` (
  `pref_id` int(11) NOT NULL,
  `pref_location` varchar(50) DEFAULT NULL,
  `pref_age` int(11) DEFAULT NULL,
  `pref_gender` varchar(10) DEFAULT NULL
) ;

--
-- Dumping data for table `preference_table`
--

INSERT INTO `preference_table` (`pref_id`, `pref_location`, `pref_age`, `pref_gender`) VALUES
(1, 'vellore', 18, 'Female'),
(2, 'vellore', 18, 'Female'),
(3, 'vellore', 18, 'Female'),
(4, 'chennai', 20, 'Male'),
(5, 'chennai', 20, 'Male'),
(6, 'chennai', 20, 'Male'),
(7, 'chennai', 20, 'Male'),
(8, 'vellore', 18, 'Male'),
(9, 'vellore', 18, 'Male'),
(10, 'vellore', 18, 'Male'),
(11, 'vellore', 19, 'Male'),
(12, 'vellore', 19, 'Male'),
(13, 'vellore', 19, 'Male'),
(14, 'vellore', 19, 'Male'),
(15, 'vellore', 19, 'Female'),
(16, 'vellore', 19, 'Female'),
(17, 'vellore', 18, 'Female'),
(18, 'vellore', 19, 'Male'),
(19, 'vellore', 18, 'Female'),
(20, 'vellore', 19, 'Female'),
(21, 'vellore', 19, 'Female'),
(22, 'vellore', 19, 'Female'),
(23, 'chennai', 20, 'Female'),
(24, 'chennai', 20, 'Female'),
(25, 'chennai', 20, 'Female'),
(26, 'chennai', 20, 'Female'),
(27, 'chennai', 20, 'Female'),
(28, 'chennai', 20, 'Male'),
(29, 'vellore', 18, 'Male'),
(30, 'vellore', 18, 'Male'),
(37, 'vellore', 19, 'Male'),
(38, 'vellore', 18, 'Female'),
(39, 'vellore', 18, 'Male'),
(40, 'chennai', 20, 'Male'),
(41, 'chennai', 20, 'Female'),
(42, 'vellore', 18, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `bio` varchar(50) DEFAULT NULL,
  `pref_id` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `age`, `gender`, `location`, `bio`, `pref_id`) VALUES
('2chirayu', 'chirayu', 20, 'Male', 'chennai', 'hi il', 2),
('2sushant', 'sushant', 19, 'Male', 'vellore', 'hi il', 20),
('amrita1', 'amrita', 20, 'Female', 'chennai', 'hey', 40),
('ankush123', 'ankush', 19, 'Male', 'vellore', 'hey', 41),
('danoushka', 'anoushka d', 19, 'Female', 'vellore', 'hill', 21),
('deltad', 'delta', 20, 'Female', 'chennai', 'hey', 14),
('deveshvv3', 'devesh', 19, 'Male', 'vellore', 'hello', 23),
('dhruvvv3', 'dhruv', 20, 'Male', 'chennai', 'hello', 3),
('dinalaloy', 'dinal', 19, 'Male', 'vellore', 'hey ', 16),
('dkeval', 'keval', 18, 'Male', 'vellore', '#fg', 4),
('dshailee', 'shailee d', 19, 'Female', 'vellore', 'hill', 12),
('dvedant', 'vedant rao', 20, 'Male', 'chennai', '#fg', 24),
('farhan', 'n farhan', 18, 'Male', 'vellore', 'swipe me', 26),
('flynn', 'noah flynn', 20, 'Male', 'chennai', 'swipe me', 6),
('jayie', 'jay', 19, 'Male', 'vellore', 'hi', 25),
('joeie', 'joe', 20, 'Male', 'chennai', 'hi', 5),
('kedarnathk', 'kedarnath', 18, 'Male', 'vellore', 'hi', 27),
('kushk', 'kush', 18, 'Male', 'vellore', 'hi', 7),
('mahira15', 'mahira', 19, 'Female', 'vellore', 'bonjour', 29),
('margip', 'margi', 20, 'Female', 'chennai', 'hello!', 18),
('mish15', 'swati m', 19, 'Female', 'vellore', 'bonjour', 9),
('nandinimo', 'nandini', 19, 'Female', 'vellore', 'this is my bio', 22),
('nithyas', 'nithya', 20, 'Female', 'chennai', 'hey', 42),
('pearlmot', 'pearl', 20, 'Female', 'chennai', 'this is my bio', 11),
('prachi20', 'prachi', 18, 'Female', 'vellore', 'hey', 30),
('preat', 'preet', 20, 'Female', 'chennai', 'hey', 10),
('preet28', 'preet', 18, 'Female', 'vellore', 'tres', 15),
('prernar', 'prerna', 20, 'Female', 'chennai', 'cia', 38),
('ravii', 'ravi', 19, 'Male', 'vellore', 'hey', 17),
('roh1t', 'rohit m', 19, 'Male', 'vellore', 'hi i am dinal', 1),
('rsashi', 'sashi', 18, 'Female', 'vellore', 'hello', 28),
('rshreya', 'shreya', 18, 'Female', 'vellore', 'hello', 8),
('sanjanana', 'sanjana', 20, 'Female', 'chennai', 'bello', 13),
('userexample', 'user', 19, 'Female', 'vellore', 'hey', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`User_1`,`User_2`),
  ADD KEY `User_2` (`User_2`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `match_table`
--
ALTER TABLE `match_table`
  ADD PRIMARY KEY (`match_id`),
  ADD UNIQUE KEY `User_1` (`User_1`,`User_2`);

--
-- Indexes for table `message_table`
--
ALTER TABLE `message_table`
  ADD PRIMARY KEY (`Message_id`),
  ADD KEY `From_user` (`From_user`),
  ADD KEY `match_id` (`match_id`);

--
-- Indexes for table `picture_table`
--
ALTER TABLE `picture_table`
  ADD PRIMARY KEY (`pic_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `preference_table`
--
ALTER TABLE `preference_table`
  ADD PRIMARY KEY (`pref_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `pref_id` (`pref_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match_table`
--
ALTER TABLE `match_table`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `message_table`
--
ALTER TABLE `message_table`
  MODIFY `Message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `picture_table`
--
ALTER TABLE `picture_table`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `preference_table`
--
ALTER TABLE `preference_table`
  MODIFY `pref_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `like_table`
--
ALTER TABLE `like_table`
  ADD CONSTRAINT `like_table_ibfk_1` FOREIGN KEY (`User_1`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `like_table_ibfk_2` FOREIGN KEY (`User_2`) REFERENCES `user_table` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `login_table`
--
ALTER TABLE `login_table`
  ADD CONSTRAINT `login_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON DELETE SET NULL;

--
-- Constraints for table `match_table`
--
ALTER TABLE `match_table`
  ADD CONSTRAINT `match_table_ibfk_1` FOREIGN KEY (`User_1`,`User_2`) REFERENCES `like_table` (`User_1`, `User_2`) ON DELETE CASCADE;

--
-- Constraints for table `message_table`
--
ALTER TABLE `message_table`
  ADD CONSTRAINT `message_table_ibfk_1` FOREIGN KEY (`From_user`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `message_table_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `match_table` (`match_id`);

--
-- Constraints for table `picture_table`
--
ALTER TABLE `picture_table`
  ADD CONSTRAINT `picture_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`pref_id`) REFERENCES `preference_table` (`pref_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
