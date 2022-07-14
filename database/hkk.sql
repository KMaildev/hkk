-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2022 at 08:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_eng`, `title_jp`, `description_eng`, `description_jp`, `author`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'JOB INTERVIEW TIPS 1', 'JOB INTERVIEW TIPS 1', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'Admin', 'https://recruitmentmyanmarsak.com/admin/uploads/files/zp_x7oqr40fkmie.png', NULL, NULL),
(2, 'JOB INTERVIEW TIPS 1', 'JOB INTERVIEW TIPS 1', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'Admin', 'https://recruitmentmyanmarsak.com/admin/uploads/files/zp_x7oqr40fkmie.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'mm@gmail.com', '09555161554', 'Hello', 'Hello HKK.', '2022-07-13 11:52:37', '2022-07-13 11:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `phone`, `additional_note`, `attachment_file`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'mgmg@gmail.com', '09444161997', 'Hello', 'http://localhost/projects/hkk/storage/cv/2O7HHRs4c0ogaHF6JkhKHpr7lU5y4DxuZmz1GQjc.docx', '2022-07-14 04:50:12', '2022-07-14 04:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_experience_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_additional_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_salary_offer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_allowance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `company_name`, `type_of_company`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `date`, `created_at`, `updated_at`) VALUES
(1, 'KMail Software', 'Softwaer', 'Yangon', 'www.kmail.com', '09444161997', 'info@kmail.com', 'Web Developer', '20 to 40', 'No', 'No', 'No', '2000', 'No', 'Male = 20', 'Online', '2022-07-14', '2022-07-14 04:30:03', '2022-07-14 04:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question_eng`, `answer_eng`, `question_jp`, `answer_jp`, `created_at`, `updated_at`) VALUES
(1, 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', NULL, NULL),
(2, 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', NULL, NULL),
(3, 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', NULL, NULL),
(4, 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', 'Can any foreigner work in Japan?', 'Foreigners must have a workable status of residence in order to work in Japan. This status of residence can be confirmed with your passport or residence card. Status of residence that allows you to work regardless of occupation or industry Japanese spouse, permanent resident, permanent resident spouse, long- term resident ・ Persons with the above qualifications must work in any occupation Is possible.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Activities', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. Wikipedia\n', 'http://royalgatecompany.com/admin/uploads/files/me9uidofz61_tqn.jpg,http://royalgatecompany.com/admin/uploads/files/wg2q0isu9dp6yjb.jpg,http://royalgatecompany.com/admin/uploads/files/5h0ykf_pmgbevdw.jpg,http://royalgatecompany.com/admin/uploads/files/nf71ap6_juzthme.jpg', NULL, NULL),
(2, 'Activities', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. Wikipedia', 'http://royalgatecompany.com/admin/uploads/files/7bdoljxvcmks3ne.jpg,http://royalgatecompany.com/admin/uploads/files/nv4chxu6fek_p1w.jpg,http://royalgatecompany.com/admin/uploads/files/cwoqgj7ldnmitbp.jpg,http://royalgatecompany.com/admin/uploads/files/fedy01nr53vps82.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Construction', NULL, NULL),
(2, 'Scaffolding in Construction', NULL, NULL),
(3, 'Glove Factory', NULL, NULL),
(4, 'Caregiver', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_07_13_181859_create_contacts_table', 1),
(4, '2022_07_14_052329_create_galleries_table', 2),
(5, '2022_07_14_060651_create_blogs_table', 3),
(6, '2022_07_14_101141_create_faqs_table', 4),
(7, '2022_07_14_105331_create_employers_table', 5),
(8, '2022_07_14_111106_create_cvs_table', 6),
(9, '2022_07_14_153945_create_jobs_table', 7),
(10, '2022_07_14_155218_create_milestones_table', 8),
(11, '2022_07_14_175141_create_training_photos_table', 9),
(12, '2022_07_14_183815_create_partners_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, NULL, 'http://royalgatecompany.com/data/certification/1.png', NULL, NULL),
(2, NULL, 'http://royalgatecompany.com/data/certification/2.png', NULL, NULL),
(3, NULL, 'http://royalgatecompany.com/data/certification/3.png', NULL, NULL),
(4, NULL, 'http://royalgatecompany.com/data/certification/4.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `company_name`, `city`, `created_at`, `updated_at`) VALUES
(1, 'CHUKYO PLACARE CO.,LTD ', 'Mie Prefecture', NULL, NULL),
(2, 'CHUSEI RUBBER CORPORATION', 'Tsu City, Mieken Prefecture', NULL, NULL),
(3, 'DAIMEI PLASTICS OOITA CO.,LTD ', 'Usa City,Oita Prefecture', NULL, NULL),
(4, 'DAIMEI OKAYAMA CO.,LTD ', 'Okayama Prefecture', NULL, NULL),
(5, 'DAISAN CONSTRUCTION CO.,LTD ', 'Nagoya,Aichi Prefecture', NULL, NULL),
(6, 'HARUNO CORPORATION CO.,LTD ', 'Shizuoka Prefecture', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `training_photos`
--

CREATE TABLE `training_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_photos`
--

INSERT INTO `training_photos` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'http://royalgatecompany.com/admin/uploads/files/me9uidofz61_tqn.jpg,http://royalgatecompany.com/admin/uploads/files/wg2q0isu9dp6yjb.jpg,http://royalgatecompany.com/admin/uploads/files/5h0ykf_pmgbevdw.jpg,http://royalgatecompany.com/admin/uploads/files/nf71ap6_juzthme.jpg', NULL, NULL),
(2, 'http://royalgatecompany.com/admin/uploads/files/me9uidofz61_tqn.jpg,http://royalgatecompany.com/admin/uploads/files/wg2q0isu9dp6yjb.jpg,http://royalgatecompany.com/admin/uploads/files/5h0ykf_pmgbevdw.jpg,http://royalgatecompany.com/admin/uploads/files/nf71ap6_juzthme.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_photos`
--
ALTER TABLE `training_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `training_photos`
--
ALTER TABLE `training_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
