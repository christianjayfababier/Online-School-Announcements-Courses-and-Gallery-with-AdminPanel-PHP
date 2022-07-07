-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prmsu_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_posts`
--

CREATE TABLE `announcement_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `post_description` text CHARACTER SET latin1 NOT NULL,
  `post_image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_posts`
--

INSERT INTO `announcement_posts` (`post_id`, `post_title`, `post_description`, `post_image`, `post_date`) VALUES
(2, 'This is a test 2', 'post test2 post test 2', 'post_uploads/kites.jpg', '0000-00-00 00:00:00'),
(8, 'Try', 'Try', 'post_uploads/Myth or Fact.png', '2022-06-29 22:09:45'),
(9, 'How change website url via .htaccess for php? - Quora', 'If I were you. I would contact your hosting provider. He should have help you with this. Atleast the big ones do. I can\'t count how many times customer support have saved me. And I am quite tech savy. I have been in this industry for past 8 years. And every once in a while I have some issue I have no idea how to fix. Luckily I have been hosting my sites mainly with namecheap and they have aleays helped me!', 'post_uploads/change.jpeg', '2022-06-29 23:03:34'),
(10, 'kuyjfguykfvkuyfv', 'jhgvlyijfgliflifi', 'post_uploads/admission.jpg', '2022-06-30 19:35:09'),
(11, 'Monique Valdez Test Post', 'This is a post na inupload ni monique bogik,  ayaw nya daw sana ipost pero gusto na nya', 'post_uploads/image-01.jpg', '2022-06-30 19:41:21'),
(12, '123123123', '123123123', 'post_uploads/60-days.jpg', '2022-07-01 11:03:26'),
(13, 'TESTSET', 'ETSTSETSETSET', 'post_uploads/icon-workout.png', '2022-07-01 11:10:41'),
(14, 'TEST2232323', 'TEST223232323', 'post_uploads/product-mug6-300x300.jpg', '2022-07-01 11:28:06'),
(15, 'The standard Loremasdasdasdasd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.asdasdasdasd', 'post_uploads/acper.PNG', '2022-07-01 11:37:26'),
(16, 'Announcement - EVENT ON AUGUST 7!!!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. \r\n\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'post_uploads/kickstart.png', '2022-07-01 20:51:10'),
(19, 'asdfjl;asdasdasd', 'asdasdasdasd', 'post_uploads/sample.JPG', '2022-07-02 17:39:30'),
(21, 'qweqweqwe', 'qweqweqweqwe', 'post_uploads/kites (1).jpg', '2022-07-05 15:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `complete_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user_id`, `username`, `password`, `complete_name`, `email_address`) VALUES
(1, 'Developer', 'Dev#123', 'Developer Account', 'developer.prmsu@prmsu.edu.ph'),
(2, 'admin', 'Admin#123', 'PRMSU Administrator', 'admin@prmsu.edu.ph'),
(3, 'aide_prmsu', '', 'Admin Aide', 'Sat Jul 02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_description` text NOT NULL,
  `course_abbreviation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`course_id`, `course_name`, `course_description`, `course_abbreviation`) VALUES
(1, 'Bachelor of Science in Information Technology', 'Bachelor of Science in Information Technology (BSIT) Program aims to produce students whose knowledge and competence in planning, installing, customizing, operating, managing, administering, and maintaining information technology infrastructure are grounded on the effective utilization of computers and computer software and thus enabling them to contribute worthwhile IT solutions to the business communities all over the world.  It  provides the student with the knowledge to successfully apply information technology theory and principles to address real world business opportunities and challenges. The one of the primary educational objective of the program is produce graduates who can enter into and advance in the professions of IT, management information systems, and IT business infrastructure, as well as continue their education and obtain advanced degrees in these and related fields.  With regard to program outcomes, graduates must be able to evaluate current and emerging technologies; identify user needs;', 'BSIT'),
(2, 'Bachelor of Science in Computer Science', 'Master in-demand programming languages and write the code for smart tech solutions. Our BS Computer Science program places you at the forefront of the most sought-after industry today with in-depth knowledge and technical skills in machine learning, artificial intelligence, data science and analytics, cloud computing, and more.  Train in fully-equipped computer laboratories, be exposed to hackathons and coding competitions, and join various activities that will also provide and sharpen your skillsets in problem solving, critical thinking, and business presentation skills that are essential for a long career in the fast-paced IT industry.', 'BSCS'),
(6, 'Bachelor of Science in Information Systems', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'BSIS'),
(7, 'Bachelor of Science in Bikini', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'BSBB'),
(8, 'Bachelor of Science in Business Management', 'Bachelor of Science in Business Management', 'BSBM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `img_id` int(11) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_desc` varchar(255) NOT NULL,
  `img_style` varchar(255) NOT NULL,
  `uploaded_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`img_id`, `img_title`, `img_desc`, `img_style`, `uploaded_image`) VALUES
(1, 'Gallery test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Regular Image', 'post_uploads/44081545_2170126193007368_6354589992026636288_o (1).jpg'),
(6, 'PRMSU Cover Image', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Regular Image', 'post_uploads/prmsu-bg-overlay.JPG'),
(9, 'Admin Office PRMSU', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Regular Image', 'post_uploads/admin-thumb.jpg'),
(12, 'Gabaldon Area', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Regular Image', 'post_uploads/gab-thumb.jpg'),
(13, 'Skit ulo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Regular Image', 'post_uploads/pexels-energepiccom-313690.jpg'),
(15, 'Try', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta', 'Regular Image', 'post_uploads/alt.png'),
(16, 'Try 2', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta', 'Regular Image', 'post_uploads/MC.png'),
(17, 'College of', 'College of', 'Regular Image', 'post_uploads/sample2.JPG'),
(19, 'asdasd', 'asdasdasd', 'Regular Image', 'post_uploads/4to1.jpg'),
(20, 'asdf', '123456', 'Regular Image', 'post_uploads/Check-in Post 4.png'),
(21, '123', '123', 'Panorama', 'post_uploads/pano_sample.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_posts`
--
ALTER TABLE `announcement_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_posts`
--
ALTER TABLE `announcement_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_course`
--
ALTER TABLE `tb_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
