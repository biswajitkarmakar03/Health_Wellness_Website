-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 03:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitset`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_desc` varchar(1000) NOT NULL,
  `image` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_desc`, `image`) VALUES
(1, 'Yoga', ' Yoga is a highly individualized practice, and it can be adapted to suit people of all ages, fitness levels, and body types. It is not competitive, and there is no pressure to perform or achieve specific goals. Instead, the emphasis is on self-acceptance, self-care, and self-discovery. Yoga is a versatile practice that offers numerous benefits for both the body and mind. It provides a space for  personal growth, allowing individuals to cultivate a sense of balance.', 'yoga.webp'),
(2, 'Meditation', 'Meditation is a practice that can be beneficial for individuals at any level, including intermediates who have already established a foundation in their meditation practice. Intermediate practitioners may have already experienced some of the benefits of meditation and are looking to deepen their practice further. Here are some suggestions for intermediate meditation practices and embrace the transformative potential of this ancient practice.', 'meditation.webp'),
(3, 'Zumba', '\r\nZumba is a popular fitness program that combines dance and aerobic exercises. It was created in the 1990s by Colombian dancer and choreographer Alberto \"Beto\" Perez. Zumba incorporates various dance styles, such as salsa, merengue, cumbia, reggaeton, and hip-hop, along with fitness movements. Zumba offers a fun and engaging way to stay active and improve your fitness levels. Whether you choose to join a class or dance along to Zumba.', 'zumba.webp'),
(4, 'Physiotherapy', 'Physiotherapy can benefit people of all ages and conditions, from athletes recovering from sports injuries to individuals managing chronic pain or recovering from surgeries. It is often integrated into multidisciplinary healthcare teams, working alongside doctors, nurses, and other healthcare professionals to provide comprehensive care. The ultimate goal of physiotherapy is to optimize physical function, relieve pain, improve quality of life.', 'physio.webp'),
(5, 'Aerobics', 'Aerobic exercises are designed to increase the body\'s oxygen consumption and heart rate over an extended period. These activities involve large muscle groups and are performed continuously, allowing the body to utilize oxygen efficiently and improve cardiovascular fitness. Some common aerobic exercises include jogging, dancing, jumping jacks, kickboxing, cycling, and swimming, It enhancing their efficiency and promoting a healthy circulatory system.', 'aerobics.webp');

-- --------------------------------------------------------

--
-- Table structure for table `course_level`
--

CREATE TABLE `course_level` (
  `id` int(11) NOT NULL,
  `level_name` varchar(50) NOT NULL,
  `level_desc` varchar(1000) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_id` varchar(25) NOT NULL,
  `amount` int(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_level`
--

INSERT INTO `course_level` (`id`, `level_name`, `level_desc`, `course_duration`, `course_id`, `amount`, `image`) VALUES
(1, 'Yoga | Beginner', 'Welcome to our beginner\'s guide to yoga! If you\'re new to the world of yoga and looking to embark on a journey of self-discovery, relaxation, and physical well-being, you\'ve come to the right place. In this comprehensive guide, we will introduce you to the fundamental principles and postures of yoga, providing you with a solid foundation to kickstart your practice.', '3Months', '1', 2999, 'yoga.webp'),
(2, 'Yoga | Intermediate', 'Welcome to our Intermediate Yoga Program, designed to take your practice to the next level. This dynamic and invigorating yoga sequence is perfect for those who have some experience with yoga and are ready to deepen their practice. Our carefully crafted sequence combines strength, flexibility, and mindfulness, offering a balanced blend of challenging poses and rejuvenating flows. ', '6 Months', '1', 5499, 'yoga.webp'),
(3, 'Yoga | Advanced', 'Welcome to our advanced yoga program! Congratulations on reaching this stage of your yoga journey. In this guide, we will explore advanced asanas, delve deeper into pranayama and meditation, and invite you to explore the profound depths of your practice. Get ready to challenge your body, expand your mind, and tap into new levels of strength and awareness.', '12 Months', '1', 9999, 'yoga.webp'),
(4, 'Meditation | Beginner', 'Welcome to the beginner\'s guide to meditation! Meditation is a practice that allows you to cultivate a calm and focused state of mind, reduce stress, and increase self-awareness. It is a wonderful tool for beginners who are looking to find inner peace and improve their overall well-being. Here\'s a step-by-step guide to help you get started on your meditation journey', '3Months', '2', 2999, 'meditation.webp'),
(5, 'Meditation|Intermediate', 'Welcome to the intermediate level of meditation! If you have already established a regular meditation practice and are ready to deepen your experience, explore different techniques, and expand your mindfulness, this guide is designed to support your journey. Here are some suggestions for intermediate meditation. Join us on this enriching journey of self-discovery.', '6 Months', '2', 5499, 'meditation.webp'),
(6, 'Meditation | Advanced', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '12 Months', '2', 9999, 'meditation.webp'),
(7, 'Zumba | Beginner', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '3Months', '3', 2999, 'zumba.webp'),
(8, 'Zumba | Intermediate', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '6 Months', '3', 5499, 'zumba.webp'),
(9, 'Zumba | Advanced', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '12 Months', '3', 9999, 'zumba.webp'),
(10, 'Physiotherapy | Beginner', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '3Months', '4', 2999, 'physio.webp'),
(11, 'Physiotherapy|Intermediate', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline.', '6 Months', '4', 5499, 'physio.webp'),
(12, 'Physiotherapy | Advanced', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '12 Months', '4', 9999, 'physio.webp'),
(13, 'Aerobics | Beginner', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '3Months', '5', 2999, 'aerobics.webp'),
(14, 'Aerobics | Intermediate', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '6 Months', '5', 5499, 'aerobics.webp'),
(15, 'Aerobics | Advanced', 'Welcome to the advanced level of meditation! At this stage, you have likely developed a strong foundation in meditation and are ready to explore deeper states of consciousness and expanded awareness. Advanced meditation practices often require greater commitment, patience, and discipline. Here are some suggestions for advanced meditation', '12 Months', '5', 9999, 'aerobics.webp');

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `course_level_id` int(11) NOT NULL,
  `video_tittle` varchar(50) NOT NULL,
  `media_url` varchar(110) NOT NULL,
  `views` int(11) NOT NULL,
  `rating` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `password` int(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_system`
--

CREATE TABLE `login_system` (
  `user_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_system`
--

INSERT INTO `login_system` (`user_id`, `name`, `age`, `gender`, `email`, `phone`, `password`) VALUES
(1, 'Biswajit Karmakar', '22', 'male', 'biswajit@gmail.com', 111111111, '123'),
(2, 'Abhishek Singh', '22', 'male', 'abhishek@gmail.com', 2147483647, '1234'),
(3, 'sudipta biswas', '19', 'female', 'sudipta@gmail.com', 2147483647, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(20) NOT NULL,
  `user_id` text NOT NULL,
  `purchase_date` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `course_level_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sub_id`, `user_id`, `purchase_date`, `amount`, `course_level_id`) VALUES
(1, 'biswajit@gmail.com', '2023-06-21', 2999, 1),
(2, 'biswajit@gmail.com', '2023-06-21', 9999, 3),
(3, 'biswajit@gmail.com', '2023-06-21', 5499, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_level`
--
ALTER TABLE `course_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_system`
--
ALTER TABLE `login_system`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_level`
--
ALTER TABLE `course_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_system`
--
ALTER TABLE `login_system`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
