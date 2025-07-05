-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2025 at 11:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_ease_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee_list`
--

CREATE TABLE `attendee_list` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number_of_tickets` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_holder_name` varchar(255) NOT NULL,
  `booking_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendee_list`
--

INSERT INTO `attendee_list` (`id`, `event_id`, `user_id`, `number_of_tickets`, `price`, `card_number`, `card_holder_name`, `booking_time`) VALUES
(1, 12, 9, 26, 16016, 950, 'Macaulay Dunn', '2025-06-28 15:12:06'),
(2, 12, 9, 58, 35728, 120, 'Teegan Noble', '2025-06-28 15:17:56'),
(3, 6, 9, 40, 12320, 602, 'Laurel Preston', '2025-06-28 15:54:04'),
(4, 6, 9, 64, 19712, 589, 'Indigo Montgomery', '2025-06-28 15:54:37'),
(5, 6, 9, 98, 30184, 809, 'Ralph Boone', '2025-06-28 15:54:51'),
(6, 6, 9, 81, 24948, 806, 'Cora Craft', '2025-06-28 15:55:07'),
(7, 6, 9, 36, 11088, 526, 'Thaddeus Russell', '2025-06-28 15:55:25'),
(8, 6, 9, 11, 3388, 823, 'Fritz Ellison', '2025-06-28 15:55:40'),
(9, 6, 9, 99, 30492, 104, 'Gannon Schmidt', '2025-06-28 15:56:19'),
(10, 5, 9, 88, 35904, 599, 'Barry Hubbard', '2025-06-28 15:57:58'),
(11, 5, 9, 37, 15096, 679, 'Deirdre Wynn', '2025-06-28 16:00:48'),
(12, 5, 9, 59, 24072, 968, 'Jonah Cohen', '2025-06-28 16:00:59'),
(13, 5, 9, 1, 408, 201, 'Hilda Cabrera', '2025-06-28 16:04:07'),
(14, 11, 9, 6, 108, 43, 'Imelda Henderson', '2025-06-28 16:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Madonna Fitzpatrick', 'dufu@mailinator.com', 'Sunt ut consequuntu', 'Reiciendis irure sed', '2025-06-28 20:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `organizer` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `available_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `price`, `location`, `date`, `time`, `category`, `organizer`, `image`, `description`, `available_seats`) VALUES
(5, 'Similique quidem exc', 408.00, 'Atque dolore et quis', '1995-08-06', 'Officiis do omnis ni', 'Concert', 'In voluptatem id ali', '../uploads/event-1.jpg', ' Architecto voluptate', 56),
(6, 'Voluptatibus reprehe', 308.00, 'Reiciendis doloremqu', '2025-06-26', 'Veritatis quia commo', 'Conference', 'Eu optio ipsa volu', '../uploads/event-2.jpg', ' Facilis ad pariatur', 95),
(7, 'Ea quibusdam corpori', 936.00, 'Et modi rerum dolor ', '2025-07-12', 'Soluta nihil beatae ', 'Error est exercitati', 'Mollit ipsum aliquam', '../uploads/event-3.jpg', 'Molestias in placeat', 61),
(8, 'Sit veniam sint ten', 882.00, 'Dhaka', '2026-06-26', 'Tempora dolorem ex v', 'Concert', 'Dolor cumque est qui', '../uploads/event-5.jpg', ' Assumenda fugiat ex', 3),
(9, 'Aliquid quas non ali', 734.00, 'Odio similique volup', '2025-07-08', 'Voluptatem aut venia', 'Rerum voluptatum sit', 'Suscipit ut dicta in', '../uploads/event-6.jpg', 'Nulla quisquam conse', 78),
(10, 'Non libero amet ips', 98.00, 'Khulna', '2025-06-28', 'Ea et illum praesen', 'Festival', 'Molestias eu laborum', '../uploads/event-7.jpg', ' Perspiciatis repreh', 59),
(11, 'Facere sed odit beat', 18.00, 'Expedita eiusmod qua', '2012-09-11', 'Autem necessitatibus', 'Quo molestias dolore', 'Fugit numquam eius ', '../uploads/event-4.jpg', 'Vel consectetur veli', 43),
(12, 'Qui non est officia ', 616.00, 'Perspiciatis veniam', '2027-11-08', 'Qui cumque tempore ', 'Maiores Nam alias ip', 'Quibusdam quia et co', '../uploads/event-1.jpg', 'Ad velit mollit repu', 33),
(13, 'Aut necessitatibus e', 107.00, 'Mollit qui dolore qu', '2025-07-11', 'Non alias laboriosam', 'Minus incididunt ani', 'Elit aute ut totam ', '../uploads/event-8.jpg', 'Necessitatibus et oc', 44),
(14, 'Quo odit sint volup', 806.00, 'Repellendus Incidid', '2000-06-20', 'Aut rem sint ut ea s', 'Eos aspernatur magn', 'Illum culpa ad numq', '../uploads/event-4.jpg', 'Mollit debitis et qu', 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'MD. Ahasan Ullah', 'ahasan@gmail.com', 'Abc123', 'normal'),
(9, 'Admin', 'admin@gmail.com', 'admin123', 'admin'),
(13, 'Kaden Snider', 'gitogyso@mailinator.com', 'Pa$$w0rd!', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee_list`
--
ALTER TABLE `attendee_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendee_list`
--
ALTER TABLE `attendee_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendee_list`
--
ALTER TABLE `attendee_list`
  ADD CONSTRAINT `attendee_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `attendee_list_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
