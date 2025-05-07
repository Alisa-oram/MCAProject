-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 07:53 PM
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
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'soum@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_sic` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `attendance_date` date NOT NULL,
  `status` enum('Present','Absent') NOT NULL,
  `coach_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_sic`, `club_name`, `attendance_date`, `status`, `coach_email`, `created_at`, `student_name`) VALUES
(26, '23bcci23', 'Cricket', '2025-04-26', 'Present', 'sanjeetsahu25@gmail.com', '2025-04-26 15:12:22', 'Kebin'),
(27, '23bvc56', 'Cricket', '2025-04-26', 'Present', 'sanjeetsahu25@gmail.com', '2025-04-26 15:12:22', 'mousey'),
(28, '23mmci56', 'Cricket', '2025-04-26', 'Absent', 'sanjeetsahu25@gmail.com', '2025-04-26 15:12:22', 'jack'),
(29, '23mmci35', 'Cricket', '2025-04-26', 'Absent', 'sanjeetsahu25@gmail.com', '2025-04-26 15:12:22', 'Anil'),
(30, '23mdsa04', 'Cricket', '2025-04-26', 'Present', 'sanjeetsahu25@gmail.com', '2025-04-26 15:12:22', 'jitendra'),
(31, '23mmci67', 'Basketball', '2025-04-27', 'Present', 'jack@gmail.com', '2025-04-27 18:03:27', 'Jay'),
(32, '23mnb67', 'Basketball', '2025-04-27', 'Present', 'jack@gmail.com', '2025-04-27 18:03:27', 'Asis'),
(33, '23bcci23', 'Cricket', '2025-05-01', 'Present', 'sanjeetsahu25@gmail.com', '2025-05-01 10:12:20', 'Kebin'),
(34, '23bvc56', 'Cricket', '2025-05-01', 'Present', 'sanjeetsahu25@gmail.com', '2025-05-01 10:12:20', 'mousey'),
(35, '23mmci56', 'Cricket', '2025-05-01', 'Absent', 'sanjeetsahu25@gmail.com', '2025-05-01 10:12:20', 'jack'),
(36, '23mmci35', 'Cricket', '2025-05-01', 'Present', 'sanjeetsahu25@gmail.com', '2025-05-01 10:12:20', 'Anil'),
(37, '23mdsa04', 'Cricket', '2025-05-01', 'Present', 'sanjeetsahu25@gmail.com', '2025-05-01 10:12:20', 'jitendra');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` longtext NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `image`, `detail`) VALUES
(1, 'Uniting Through Competition', '2025-05-02', '1746538068-tug.jpg', 'Sports have an uncanny ability to bring people together, inspiring a unique spirit of unity, discipline, and determination. This was once again evident during the Inter-College Sports Meet 2025, held on April 25th at the City Sports Complex. A vibrant mix of energy, enthusiasm, and friendly rivalry lit up the arena as students from various colleges gathered to showcase their athletic prowess and team spirit.\r\n\r\nThe day began with a grand opening ceremony, featuring a colorful parade by participating institutions, followed by an uplifting address from the Chief Guest—an acclaimed national athlete who encouraged students to embrace both victory and defeat with grace. With the sound of the starting pistol, the games kicked off, and the atmosphere quickly transformed into one filled with cheers, motivation, and a competitive edge.\r\n\r\nAthletics formed the heart of the event, with races, long jump, high jump, and relay events drawing large crowds. Each track event told a story of rigorous preparation and the hunger to excel. The 4x100m relay, in particular, stole the show with a photo finish that had spectators on the edge of their seats. Meanwhile, team sports like football, basketball, and volleyball added to the excitement, showcasing excellent coordination and teamwork.\r\n\r\nOne of the highlights of the meet was the Tug of War competition—an event that may seem simple but never fails to capture attention. The tension, struggle, and eventual triumph brought together supporters and competitors alike, reminding everyone that in sports, even the smallest victory is hard-earned and meaningful.\r\n\r\nWhat made the event truly memorable was the spirit of sportsmanship displayed throughout. Win or lose, students shook hands, exchanged smiles, and often congratulated their rivals—an essential reminder that respect and camaraderie go beyond the final scores.\r\n\r\nThe Sports Meet concluded with a prize distribution ceremony, where winners received medals and trophies amidst thunderous applause. But beyond the podium finishes, every participant walked away with cherished memories, newfound friendships, and a renewed passion for fitness and perseverance.\r\n\r\nIn a world often divided by differences, sports continue to be a powerful medium of connection. Events like the Inter-College Sports Meet are not just competitions; they are celebrations of effort, resilience, and unity.\r\n'),
(2, 'Champions in the Making', '2025-05-03', '1746538424-relay6.jpg', 'Every great athlete starts with a first step, a first race, or a first goal—and there\'s no better place to witness these beginnings than at a school sports day. On March 15, 2025, our school grounds buzzed with energy and anticipation as students, teachers, and parents came together for the much-awaited Annual School Sports Day.\r\n\r\nThe event began with an impressive march-past by students from all four houses, followed by the hoisting of the sports flag and the lighting of the torch, symbolizing the true spirit of sportsmanship. The principal’s opening speech reminded everyone that sports are not just about winning but about effort, resilience, and growth.\r\n\r\nThe competitions kicked off with track and field events. The 100m and 200m sprints had everyone cheering loudly as young runners dashed toward the finish line with determination in their eyes. The long jump, shot put, and sack race added variety and excitement, with students pushing their limits and surprising the audience with their skills.\r\n\r\nApart from individual events, team games like kho-kho, relay races, and tug of war fostered a sense of cooperation and house pride. One of the most anticipated events, the teachers vs. students relay race, drew laughter and cheers, showcasing the lighter side of the day.\r\n\r\nParents also played a part in the festivities. Special events like the “Three-Legged Race” and “Musical Chairs for Parents” gave them a chance to engage and enjoy the fun, blurring the line between participants and spectators.\r\n\r\nThe day concluded with a colorful medal ceremony. The air was filled with applause as winners stood proudly on the podium, their medals gleaming in the sunlight. Trophies were awarded to the Best Athlete (boys and girls), the Overall Champion House, and the Most Disciplined Team.\r\n\r\nWhile medals and victories were celebrated, the biggest takeaway was the joy, confidence, and sportsmanship that the event inspired in everyone. The Annual School Sports Day 2025 wasn’t just a competition—it was a celebration of talent, hard work, and the spirit of never giving up. '),
(3, 'Racing Hearts and Rising Spirits', '2025-05-01', '1746539927-land6.webp', 'The District Athletics Championship 2025 held at Greenfield Stadium was more than just a sports event—it was a celebration of youthful energy, perseverance, and the unbreakable human spirit. Athletes from over twenty schools gathered with one goal: to give their best and make their teams proud.\r\n\r\nThe day kicked off with an energetic opening ceremony featuring a parade of participating schools, each showcasing their unique banners and team chants. The stadium pulsed with excitement as the district sports officer lit the ceremonial torch, officially declaring the championship open.\r\n\r\nFrom the first whistle, the track events brought the audience to their feet. The 400m sprint displayed raw speed, while the 1500m run tested the limits of endurance. One of the standout moments was a dramatic finish in the boys’ 800m final, where a last-second surge helped a relatively unknown athlete claim gold.\r\n\r\nBut the event wasn’t just about individual brilliance. Team spirit shone in the relays and team-based events. The girls’ 4x100m relay, in particular, was a showstopper, with seamless baton passes and an electrifying final dash that had the crowd roaring.\r\n\r\nBeyond the races, the field events were equally thrilling. The long jump pit saw records broken, and the javelin throwers left the audience in awe with their strength and precision. Meanwhile, high jumpers turned the sandpit into a stage for agility and grace.\r\n\r\nAs the sun began to set, the award ceremony wrapped up the day on a high note. Medals were distributed, school teams took group photos, and the best athletes of the day received special recognition. But even those who didn’t reach the podium walked away with pride, memories, and motivation to train harder for the next challenge.\r\n\r\nThe District Athletics Championship was more than a competition—it was a reminder that sports teach us to push boundaries, support one another, and grow beyond our limits. For the participants and the spectators alike, it was a day that won’t soon be forgotten.'),
(4, ' Victory Beyond the Scoreboard', '2025-04-30', '1746540067-tennis.jpg', 'The air buzzed with anticipation and cheers as students from various colleges gathered for the grand Inter-College Sports Fiesta 2025, hosted by Horizon University. More than just a competition, the event became a platform for unity, talent, and sportsmanship among youth from diverse academic institutions.\r\n\r\nSpanning over three days, the fiesta featured a mix of indoor and outdoor games—from intense football and basketball matches to nerve-wracking table tennis, chess, and badminton tournaments. With over 500 participants, the campus was transformed into a vibrant arena of adrenaline, ambition, and applause.\r\n\r\nDay one kicked off with an inaugural ceremony that included a cultural performance and oath-taking by the team captains. The football ground was soon alive with thrilling matches, where strategic play and team coordination determined the victors. Meanwhile, on the indoor courts, spectators were treated to exciting shuttle rallies and powerful smashes in badminton.\r\n\r\nOne of the event’s highlights was the \"Battle of Minds\" chess championship. Silence ruled the hall, but the mental intensity of the players was electric. It was a reminder that sports don’t always demand physical strength—sometimes, it’s the quiet thinkers who shine the brightest.\r\n\r\nDay two brought track events, including sprints, relays, and hurdles. Cheers from fellow students echoed across the stadium, creating a powerful atmosphere of encouragement. A particularly inspiring moment came when a runner stumbled during the 400m race, got back up, and still finished strong—earning a standing ovation for sheer determination.\r\n\r\nOn the final day, the basketball finals and tug-of-war showdown closed the event on a high. With music, food stalls, and excited chatter filling the air, the entire campus felt like a festival ground. The prize distribution ceremony recognized not only the winners but also fair play, effort, and team spirit.\r\n\r\nThe Inter-College Sports Fiesta 2025 wasn’t just about medals and trophies. It was about resilience, connection, and the joy of being part of something bigger than oneself. For many, it marked the beginning of lasting friendships, renewed confidence, and a deeper love for sports.');

-- --------------------------------------------------------

--
-- Table structure for table `club_member`
--

CREATE TABLE `club_member` (
  `id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sic` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_member`
--

INSERT INTO `club_member` (`id`, `club_id`, `club_name`, `name`, `email`, `password`, `sic`, `dept`, `year`) VALUES
(7, 1, 'Football', 'Jenny', 'jenny@gmail.com', '2025-04-03', '23mmci88', 'ECE', '1st year'),
(8, 4, 'Vollyball', 'Kenny', 'kenny@gmail.com', '2025-04-03', '23mmvi78', 'EEE', '4th year'),
(9, 2, 'Basketball', 'Jay', 'jay@gmail.com', '2025-04-03', '23mmci67', 'MCA', '1st year'),
(10, 3, 'Cricket', 'Kebin', 'kebin@gmail.com', '2025-04-03', '23bcci23', 'CSE', '2nd year'),
(11, 1, 'Football', 'mouse', 'mouse@gmail.com', '2025-04-03', '34mmci89', 'EEE', '1st year'),
(12, 2, 'Basketball', 'Asis', 'asis@gmail.com', '2025-04-03', '23mnb67', 'MCA', '1st year'),
(14, 3, 'Cricket', 'mousey', 'panisubhamita@gmail.com', '2025-04-22', '23bvc56', 'MSC', '3rd year'),
(15, 4, 'Vollyball', 'jet', 'jet@gmail.com', '2025-04-04', '34mmbi78', 'EEE', '3rd year'),
(16, 3, 'Cricket', 'jack', 'jack@gmail.com', '2025-04-11', '23mmci56', 'EEE', '3rd year'),
(17, 3, 'Cricket', 'Anil', 'anilsahu9786@gmail.com', '2025-04-17', '23mmci35', 'MCA', '2nd year'),
(19, 3, 'Cricket', 'jitendra', 'datasceince.23mdsa04@silicon.ac.in', '2025-04-18', '23mdsa04', 'MSC', '2nd year');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `role`, `club`, `password`, `email`) VALUES
(10, 'Sanjit', 'coach', 'Cricket', '12345', 'sanjeetsahu25@gmail.com'),
(11, 'Jack', 'coach', 'Basketball', '12345', 'jack@gmail.com'),
(12, 'Jason Ken', 'coach', 'Badminton', '12345', 'jason@gmail.com'),
(13, 'Abby Blues', 'secretary', 'Cricket', '12345', 'abby@gmail.com'),
(14, 'Jessie Pinkman', 'secretary', 'Basketball', '12345', 'jessie@gmail.com'),
(15, 'Jade Black', 'secretary', 'vollyball', '12345', 'jade@gmail.com'),
(16, 'Patty Ruth', 'secretary', 'Badminton', '12345', 'patty@gmail.com'),
(17, 'Gil Morman', 'secretary', 'Kabadi', '12345', 'gil@gmail.com'),
(18, 'Tony Hills', 'secretary', 'Football', '12345', 'tony@gmail.com'),
(19, 'Jamie Lannister', 'coach', 'vollyball', '12345', 'jamie@gmail.com'),
(20, 'Cersie Ronan', 'coach', 'Football', '12345', 'cersie@gmail.com'),
(21, 'Kevin Rohde', 'coach', 'Kabadi', '12345', 'kevin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `completedmatches`
--

CREATE TABLE `completedmatches` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `match_datetime` datetime NOT NULL,
  `team_a` varchar(255) NOT NULL,
  `team_b` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `score_a` varchar(255) NOT NULL,
  `score_b` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completedmatches`
--

INSERT INTO `completedmatches` (`id`, `event_name`, `venue`, `match_datetime`, `team_a`, `team_b`, `msg`, `score_a`, `score_b`) VALUES
(1, 'Chakravyuh Premier League-Cricket', 'Silicon Sports Ground, Bhubaneswar', '2025-05-07 13:00:00', 'Storm Breakers', 'Turbo Titans', 'Storm Breakers won by 17 runs', '139', '122'),
(2, 'Inter College Football Cup', 'Silicon Turf, Bhubaneswar', '2025-05-08 10:00:00', 'Blazing Boots', 'Iron Kickers', 'Blazing boots won by 2 goals', '3', '1'),
(3, 'Campus Indoor Hoops Championship', 'Silicon Indoor Arena, Bhubaneswar', '2025-05-08 14:01:00', 'Dunk Masters', 'Net Warriors', 'Dunk Masters won by 13 points', '78', '65');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `event_for` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `date`, `image`, `topic`, `detail`, `event_for`) VALUES
(1, '2025-04-10', 'football_tournament.jpg', 'Inter-College Football Tournament', 'Annual football tournament featuring top college teams from across the region.', 'student'),
(2, '2025-04-20', 'cricket_league.jpg', 'Campus Premier Cricket League', 'Exciting T20 cricket matches between departmental teams with live commentary.', 'student'),
(3, '2025-05-01', 'athletics_meet.jpg', 'Annual Athletics Meet', 'Track and field events including 100m sprint, long jump, shot put, and relay races.', 'student'),
(4, '2025-06-05', 'badminton_open.jpg', 'Badminton Open Tournament', 'Singles and doubles categories for both men and women.', 'student'),
(5, '2025-08-05', 'chess_competition.jpg', 'All India Chess Competition', 'Battle of minds featuring players from colleges nationwide.', 'student'),
(6, '2025-05-15', 'faculty_cricket.jpg', 'Faculty Cricket League', 'A friendly cricket competition among faculty members from different departments.', 'faculty'),
(7, '2025-06-10', 'faculty_badminton.jpg', 'Faculty Badminton Championship', 'A competitive badminton event exclusively for college faculty.', 'faculty'),
(8, '2025-07-05', 'faculty_walkathon.jpg', 'Faculty Wellness Walkathon', 'A health-focused event promoting fitness through a 5K walkathon.', 'faculty'),
(9, '2025-07-20', 'faculty_volleyball.jpg', 'Faculty Volleyball Clash', 'Fun-filled volleyball matches promoting team spirit among faculty.', 'faculty'),
(10, '2025-08-15', 'faculty_tabletennis.jpg', 'Faculty Table Tennis Tournament', 'Indoor table tennis competition organized on Independence Day.', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `team_a` varchar(255) NOT NULL,
  `team_b` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `match_datetime` datetime NOT NULL,
  `venue` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `banner_a` varchar(255) NOT NULL,
  `banner_b` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `team_a`, `team_b`, `event_name`, `match_datetime`, `venue`, `club`, `banner_a`, `banner_b`) VALUES
(1, 'Apex Smashers', 'Turbo Titans', 'Chakravyuh 2025', '2025-05-30 16:30:00', 'Sundeck Sport Complex', 'Silicon Cricket Club', '1746470071-a-logo2.png', '1746470071-b-logo1.png'),
(2, 'Legends United', 'Victory FC', 'Legends Cup', '2025-06-01 17:00:00', 'Sundeck Sport Complex', 'Silicon Football Club', '1746382877-a-logo2.png', '1746382877-b-logo1.png'),
(3, 'Football League', 'Soccer', 'Silicon Cup League', '2025-06-03 16:10:00', 'Silicon Sports Complex', 'Silicon Football Club', '1746383205-a-logo1.png', '1746383205-b-logo2.png'),
(4, 'Team Alpha', 'Team Beta', 'Champions League', '2025-06-01 16:00:00', 'Global Stadium', 'Silicon Tennis Club', '1746383864-a-logo2.png', '1746383864-b-logo1.png'),
(5, 'Strombreakers', 'Thundercats', 'Elite Series', '2025-06-01 10:00:00', 'Sundeck Sport Complex', 'Silicon Vollyball Club', '1746384001-a-logo2.png', '1746384001-b-logo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `match_teams`
--

CREATE TABLE `match_teams` (
  `id` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `coach_email` varchar(100) NOT NULL,
  `team_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `student_sic` varchar(20) NOT NULL,
  `student_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `match_teams`
--

INSERT INTO `match_teams` (`id`, `club_name`, `coach_email`, `team_name`, `created_at`, `student_sic`, `student_name`) VALUES
(1, 'Cricket', 'sanjeetsahu25@gmail.com', 'Team1', '2025-04-27 15:51:39', '23bcci23', 'Kebin'),
(2, 'Cricket', 'sanjeetsahu25@gmail.com', 'Team1', '2025-04-27 15:51:39', '23bvc56', 'mousey'),
(3, 'Cricket', 'sanjeetsahu25@gmail.com', 'Team1', '2025-04-27 15:51:39', '23mmci56', 'jack'),
(4, 'Basketball', 'jack@gmail.com', 'Team1', '2025-04-27 18:06:55', '23mmci67', 'Jay'),
(5, 'Basketball', 'jack@gmail.com', 'Team1', '2025-04-27 18:06:55', '23mnb67', 'Asis'),
(6, 'Cricket', 'sanjeetsahu25@gmail.com', 'Team2', '2025-05-01 10:15:07', '23bcci23', 'Kebin'),
(7, 'Cricket', 'sanjeetsahu25@gmail.com', 'Team2', '2025-05-01 10:15:07', '23bvc56', 'mousey'),
(8, 'Cricket', 'sanjeetsahu25@gmail.com', 'Team2', '2025-05-01 10:15:07', '23mmci56', 'jack');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `is_read`, `created_at`) VALUES
(1, 'New student registered in Kabadi', 1, '2025-04-02 18:32:35'),
(2, 'New student registered in Vollyball', 1, '2025-04-02 18:33:29'),
(3, 'New student registered in Football', 1, '2025-04-02 18:57:01'),
(4, 'New student registered in Vollyball', 1, '2025-04-02 18:57:38'),
(5, 'New student registered in Basketball', 1, '2025-04-02 19:09:29'),
(6, 'New student registered in Cricket', 1, '2025-04-02 19:10:23'),
(7, 'New student registered in Football', 1, '2025-04-02 19:11:24'),
(8, 'New student registered in Basketball', 1, '2025-04-03 09:06:46'),
(9, 'New student registered in Tennis', 1, '2025-04-04 10:38:19'),
(10, 'New student registered in Basketball', 1, '2025-04-04 10:51:01'),
(11, 'New student registered in Cricket', 1, '2025-04-04 10:56:41'),
(12, 'New student registered in Vollyball', 1, '2025-04-04 11:08:23'),
(13, 'New student registered in Cricket', 1, '2025-04-11 05:33:01'),
(14, 'New student registered in Cricket', 1, '2025-04-17 09:42:37'),
(15, 'New student registered in Cricket', 1, '2025-04-18 08:52:07'),
(16, 'New student registered in Cricket', 1, '2025-04-18 08:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('Student','Faculty') NOT NULL,
  `department` varchar(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_student`
--

CREATE TABLE `registered_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sic` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sports_club`
--

CREATE TABLE `sports_club` (
  `id` int(11) NOT NULL,
  `clubId` int(11) NOT NULL,
  `clubName` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_club`
--

INSERT INTO `sports_club` (`id`, `clubId`, `clubName`, `detail`, `image`) VALUES
(1, 1, 'Football', 'A globally popular game where teams score by getting a ball into the opponent\'s goal.', 'football.jpg'),
(2, 2, 'Basketball', 'A team sports where players aim to score shooting a ball through a hoop.', 'aaaa.jpg'),
(3, 3, 'Cricket', 'A bat-and-ballgame played between two teams aiming to score the most runs.', 'cricket.jpg'),
(4, 4, 'Vollyball', 'A sports where two teams hit a ball over a net aiming to land it on the opponent\'s court.', 'volleybal.webp'),
(5, 5, 'Kabadi', 'A contact team sport where players tag opponents while holding their breath.', 'kabadi.jpg'),
(6, 6, 'Badminton', 'A fast-pace racket sports played with a shuttlecock over a net.', 'badminton.jpg'),
(7, 7, 'Tennis', 'A fast-paced racket sport played individually or in pairs on a rectangular court.', 'tennis.jpg'),
(9, 8, 'Hockey', 'A high-speed team sport played on ice or field using sticks and a puck/ball.\r\n', 'hockey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_remarks`
--

CREATE TABLE `student_remarks` (
  `id` int(11) NOT NULL,
  `student_sic` varchar(20) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `coach_email` varchar(100) NOT NULL,
  `remark_date` date NOT NULL,
  `stars` int(11) NOT NULL CHECK (`stars` between 1 and 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_remarks`
--

INSERT INTO `student_remarks` (`id`, `student_sic`, `student_name`, `club_name`, `coach_email`, `remark_date`, `stars`, `created_at`) VALUES
(1, '23bcci23', 'Kebin', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-04-27', 4, '2025-04-27 17:44:04'),
(2, '23mmci56', 'jack', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-04-27', 1, '2025-04-27 17:44:04'),
(3, '23mmci35', 'Anil', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-04-27', 2, '2025-04-27 17:44:04'),
(4, '23mdsa04', 'jitendra', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-04-27', 4, '2025-04-27 17:44:04'),
(5, '23mnb67', 'Asis', 'Basketball', 'jack@gmail.com', '2025-04-27', 3, '2025-04-27 18:04:40'),
(6, '23bcci23', 'Kebin', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-05-01', 3, '2025-05-01 10:13:16'),
(7, '23bvc56', 'mousey', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-05-01', 3, '2025-05-01 10:13:16'),
(8, '23mmci56', 'jack', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-05-01', 3, '2025-05-01 10:13:16'),
(9, '23mmci35', 'Anil', 'Cricket', 'sanjeetsahu25@gmail.com', '2025-05-01', 3, '2025-05-01 10:13:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_member`
--
ALTER TABLE `club_member`
  ADD PRIMARY KEY (`id`,`club_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completedmatches`
--
ALTER TABLE `completedmatches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_teams`
--
ALTER TABLE `match_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_student`
--
ALTER TABLE `registered_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sic` (`sic`);

--
-- Indexes for table `sports_club`
--
ALTER TABLE `sports_club`
  ADD PRIMARY KEY (`id`,`clubId`);

--
-- Indexes for table `student_remarks`
--
ALTER TABLE `student_remarks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `club_member`
--
ALTER TABLE `club_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `completedmatches`
--
ALTER TABLE `completedmatches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `match_teams`
--
ALTER TABLE `match_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered_student`
--
ALTER TABLE `registered_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sports_club`
--
ALTER TABLE `sports_club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_remarks`
--
ALTER TABLE `student_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
