-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 07:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'bangladesh', '2020-06-08 11:31:54', '2020-06-08 11:31:54'),
(2, 'International', 'International', '2020-06-08 11:32:10', '2020-06-08 11:32:10'),
(3, 'BUSINESS', 'business', '2020-06-08 23:19:43', '2020-06-08 23:19:43'),
(4, 'OPINION', 'opinion', '2020-06-08 23:19:53', '2020-06-08 23:19:53'),
(5, 'SPORTS', 'sports', '2020-06-08 23:20:09', '2020-06-08 23:20:09'),
(6, 'Entertainment', 'entertainment', '2020-06-08 23:20:25', '2020-06-08 23:20:25'),
(7, 'LIFESTYLE', 'lifestyle', '2020-06-08 23:20:52', '2020-06-08 23:20:52'),
(8, 'HEALTH', 'health', '2020-06-08 23:21:16', '2020-06-08 23:21:16'),
(9, 'SCIENCE', 'science', '2020-06-08 23:21:27', '2020-06-08 23:21:27'),
(10, 'TRAVEL', 'travel', '2020-06-08 23:21:47', '2020-06-08 23:21:47'),
(11, 'Environment', 'environement', '2020-06-08 23:22:30', '2020-06-08 23:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `categoriesnews`
--

CREATE TABLE `categoriesnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoriesnews`
--

INSERT INTO `categoriesnews` (`id`, `news_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 3, 1, NULL, NULL),
(3, 4, 8, NULL, NULL),
(4, 5, 3, NULL, NULL),
(5, 6, 9, NULL, NULL),
(6, 7, 5, NULL, NULL),
(7, 8, 3, NULL, NULL),
(8, 9, 5, NULL, NULL),
(9, 10, 1, NULL, NULL),
(10, 11, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2019_10_11_181258_create_news_table', 1),
(19, '2019_11_17_150102_create_pages_number_category', 1),
(21, '2014_10_12_000000_create_users_table', 2),
(22, '2014_10_12_100000_create_password_resets_table', 2),
(23, '2019_10_08_042347_create_categories_table', 2),
(24, '2019_10_08_043821_create_roles_table', 2),
(25, '2019_10_12_105719_create_tags_table', 2),
(26, '2019_10_16_084826_tags_news', 2),
(27, '2019_10_16_085240_categories_news', 2),
(28, '2019_12_12_064237_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 'Police Brutality in US: Anti-racism protests spread around world', 'police brutality in us: anti-racism protests spread around world', 'Police Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around worldPolice Brutality in US: Anti-racism protests spread around world', '1591637580.jpg', '2020-06-08 11:33:01', '2020-06-08 11:33:01'),
(3, 1, 0, 'Shimulia-Kathalbari water transport to be suspended for 8 hours this Wednesday', 'shimulia-kathalbari water transport to be suspended for 8 hours this wednesday', 'Operation of ferries, launches, speed boats and trawlers will remain suspended on Shimulia-Kathalbari route from 11:00am to 7:00pm on Wednesday.\r\n\r\nThe authority took the decision to facilitate the installation of 31st span of the long-awaited Padma Bridge in the middle of Shimulia-Kathalbari channel of the Padma river on Wednesday, according to a press release of Bridge Division.\r\n\r\nPeople are requested to use the alternative route -- Paturia-Daulatdia -- on that day. Bridge Division also expressed regrets for the temporary problem.\r\n\r\n\r\n&nbsp;\r\n', '1591637880.jpg', '2020-06-08 11:38:00', '2020-06-08 11:38:00'),
(4, 8, 0, 'Favipiravir: A light of hope for COVID-19', 'favipiravir: a light of hope for covid-19', 'The antiviral drug Favipiravir, better known as Avigan, is being trialed as a treatment for the novel coronavirus disease (COVID-19). Avigan is the brand name of the drug Favipiravir, it was developed by the Japanese Fujifilm Toyama Chemical Company, has emerged as a potential drug to treat patients infected with the deadly novel coronavirus.\r\n\r\n&nbsp;Two renowned pharmaceutical industries of Bangladesh have manufactured this drug in their plant for the trial of COVID-19 patients in Bangladesh. Other pharmaceutical industries are also in the process of getting permission to produce the drug from the Directorate General of Drug Administration (DGDA), Bangladesh.\r\n\r\nIn Japan, Favipiravir was approved in 2014 for sale domestically under the brand name Avigan for stockpiling against influenza pandemics. Testing in the development stages, however, revealed that the drug can result in elevated blood uric acid levels and cause deformities in the unborn young of animals.\r\n\r\nThis anti-influenza drug has shown some promise in the fight against COVID-19, but experts warn that it has known side effects and that there is insufficient clinical data for its use. Favipiravir works by blocking the ability of a virus to replicate inside a cell. It induces lethal RNA transversion mutations, producing a nonviable viral phenotype.\r\n\r\nFavipiravir is a prodrug that is metabolised to its active form, favipiravir-ribofuranosyl-5-triphosphate, available in both oral and intravenous formulations. It does not inhibit RNA or DNA synthesis in mammalian cells and is not toxic to them.\r\n\r\nHowever, Favipiravir has not proven effective in primary human airway cells, casting doubt on its efficacy in influenza treatment. Japan approved favipiravir for treating influenza strains unresponsive to current antivirals. The Japanese Fujifilm Toyama Chemical Company initially hoped that favipiravir would become a new influenza medication that could replace oseltamivir (brand name Tamiflu).\r\n\r\n&nbsp;\r\n\r\n\r\n&nbsp;\r\n\r\nঅ্যা\r\n\r\n&nbsp;\r\n', '1591680330.jpg', '2020-06-08 23:25:31', '2020-06-08 23:25:31'),
(5, 3, 0, 'World Bank forecasts Bangladesh’s growth to slow to 1.6 percent', 'world bank forecasts bangladesh’s growth to slow to 1.6 percent', 'World Bank predicts that Bangladesh&#39;s growth will slow to 1.6 percent in the current fiscal year.\r\n\r\nThe global lender made the prediction in its &quot;Global Economic Prospects 2020&quot; report last night.\r\n\r\nThe country&#39;s growth is estimated to have slowed as the recovery in industrial production is reversed by Covid-19 related disruptions such as mitigation measures and global exports plunge, and as remittances fall -- the World Bank observed in its report.\r\n\r\nThe report said the GDP in the South Asian region is projected to contract by 2.7 percent in 2020 as pandemic mitigation measures hinder consumption and services activity and uncertainty about the course of the pandemic chills private investment.\r\n\r\nThe WB, in its global outlook, said the shock of the coronavirus pandemic and shutdown measures to contain it have plunged the global economy into a severe contraction. It predicted that the global economy will shrink by 5.2 percent this year.', '1591680495.jpg', '2020-06-08 23:28:16', '2020-06-08 23:28:16'),
(6, 9, 0, 'Annular solar eclipse on December 26, 2019', 'annular solar eclipse on december 26, 2019', 'A partial solar eclipse will be visible on December 26 in Bangladesh if the sky remains clear, according to Bangladesh Meteorological Department.\r\n\r\nThe solar eclipse will begin at 8.30am and end at 2.05pm (BST), said the BMD.\r\n\r\nApart from Bangladesh, the eclipse will be visible in India, Saudi Arabia, Qatar, United Arab Emirates, Oman, Sri Lanka, Malaysia, Indonesia and Singapore.\r\n\r\nPeople are requested to visit&nbsp;www.bmd.gov.bd/astronomy/eclipse&nbsp;for particulars.', '1591680591.jpg', '2020-06-08 23:29:51', '2020-06-08 23:29:51'),
(7, 5, 0, 'Wasim recalls incident when Donald bouncer left him with 20 stitches', 'wasim recalls incident when donald bouncer left him with 20 stitches', 'Former Pakistan captain Wasim Akram played in an era when international cricket was dominated by a brilliant crop of fast bowlers. The 1990s witnessed a steep rise in the quality of fast bowling as almost all the international teams boasted of pacers, who made their presence felt at the highest level.\r\n\r\nAkram shared a great partnership with Waqar Younis and also shepherded pace sensation Shoaib Akhtar in his formative years, in what was one of the most successful phase of Pakistan cricket. He was recently asked to name some of the best pacers of his era by his former teammate Basit Ali on his Youtube show.\r\n\r\n&quot;There were Curtly Ambrose and Courtney Walsh from West Indies. Glenn McGrath was also there. Allan Donald was also another great bowler. I mean these guys were all good&quot; Akram said.\r\n\r\nWhile playing county cricket, Akram, who himself was a mean machine with the ball, faced the music from Donald.\r\n\r\n&quot;I have twenty stitches here, right under my chin. I think the year was 1989 and I had gone out to bat at number 8 on an uneven pitch. He bowled a short delivery and he bowled easily in excess of 150 kilometers per hour. I was also a youngster in my early twenties and I tried to pull the ball. It hit the top edge of the bat and hit me under the chin.\r\n\r\nWasim wanted Donald to face the music too but while his team won he did not get his wish.\r\n\r\n&quot;I had a psyche for revenge as I knew I will not leave this bowler. I went to the hospital and the dentist had to put ten stitches on the inside and ten on the outside as it was a deep cut. I was asked to take rest for a couple of days but I said I want to got out there and bowl. I bowled in the evening and we won the match and interestingly Donald never came out to bat as he was scared,&quot; Akram reminisced.\r\n\r\nStay updated on the go with&nbsp;The Daily Star&nbsp;Android &amp; iOS&nbsp;News App.&nbsp;Click here&nbsp;to download it for your device.', '1591680912.jpg', '2020-06-08 23:35:13', '2020-06-08 23:35:13'),
(8, 3, 0, 'Budget for Health Ministry: No big rise for inefficiency', 'budget for health ministry: no big rise for inefficiency', 'The health ministry will not see a significant rise in allocation in the upcoming budget amid Covid-19 pandemic mainly due to its lack of capacity to utilise funds, say planning ministry officials.\r\n\r\nThe ministry has failed to complete one-third of the development projects under the Annual Development Programme (ADP) within the deadline, meaning those have to be approved afresh. Besides, many of the projects will require additional funds, they point out.\r\n\r\nThere have been expectations that the size of allocation and the number of projects in the health sector will go up significantly in the next fiscal year, as the country is facing an unprecedented challenge from coronavirus pandemic that has exposed the vulnerabilities of the healthcare system.\r\n\r\nWith Covid-19 infections on the rise, a lack of Intensive Care Unit (ICU) beds and a shortage of oxygen in most of the hospitals have become a matter of concern.\r\n\r\nThe government recently took two coronavirus-related projects involving Tk 2,492 crore funded by the World Bank and the Asian Development Bank. The projects, approved by the Ecnec last week, have been included in the ADP for the next fiscal year.\r\n\r\nAgainst this backdrop, Finance Minister AHM Mustafa Kamal is likely to allocate Tk 27,600 crore for the health ministry in the upcoming budget to be unveiled in parliament on June 11, said officials of finance and planning ministries.\r\n\r\nThis means the allocation for the ministry will increase by 7.25 percent from outgoing fiscal year&#39;s allocation of Tk 25,733 crore.\r\n\r\nThe allocation includes the health ministry&#39;s ADP budget of Tk 13,033 crore, which is 6.25 percent higher than that in the outgoing fiscal year.\r\n\r\nAccording to the World Bank&#39;s World Development Indicator 2019, Bangladesh has the lowest per capita public expenditure in the health sector among the South Asian countries. In India, per capita expenditure was $15, while it was $14 in Pakistan and $6 in Bangladesh. The average South Asian per capita public expenditure was $15.\r\n\r\nTalking to The Daily Star, Shamsul Alam, senior secretary at the General Economics Division of the Planning Commission, said, &quot;You cannot say the ADP allocation for the health ministry is low&hellip; Around 5 percent of the total ADP has been allocated for the ministry&hellip; There are 58 ministries and divisions.\r\n\r\n&quot;Implementation is more important than allocation. We do not see 100 percent utilisation of the allocated money. There is no dearth of funds&hellip; But they [the health ministry] need to increase the capacity for utilising funds and ensuring accountability to improve service.&quot;\r\n\r\nAt least 22 out of 62 projects under the health ministry could not be implemented within the deadline, according to officials of planning and finance ministries.\r\n\r\nThey also mentioned that the pace of implementation of the ministry&#39;s largest project -- Tk 36,000-crore Fourth Health, Population and Nutrition Sector Development Programme -- has been slow with the ministry failing to spend two-third of the money allocated since June 2017.\r\n\r\nThe project officials need to utilise the funds by June 2022 if they are to complete the project on time, they added.\r\n\r\nAccording to the planning ministry&#39;s Implementation Monitoring and Evaluation Division, till April this year, around 70 percent of the health ministry&#39;s projects under the ADP were yet to be implemented.\r\n\r\nTalking to this newspaper, economist Hossain Zillur Rahman, executive chairman at the Power and Participation Research Centre, said, &quot;The health ministry is a consistent poor performer in terms of ADP implementation. There are some issues like a lack of capacity and corruption.\r\n\r\n&quot;So it is understandable that the finance ministry is in doubt about increasing the health budget.&quot;\r\n\r\nIn the absence of adequate allocation and proper utilisation of funds, the out of pocket expenditure (OOP) of people is very high in Bangladesh, mentioned Zillur.\r\n\r\nA 2015 health ministry survey shows the OOP accounts for 67 percent of the total healthcare expenditure in Bangladesh. This means, if the healthcare cost is Tk 100, the government provides Tk 34 while the patient spends Tk 67.\r\n\r\nThe OOP in Bangladesh is the highest in South and Southeast Asia.\r\n\r\nProfessor Syed Abdul Hamid of the Institute of Health Economics at Dhaka University said, &quot;Implementation of ADP is a problem for the health ministry. A lengthy process of preparing proposals for development projects, feasibility tests and tender are some of the key reasons for the delay in project implementation.&quot;\r\n\r\n&quot;We also cannot rule out the scope for corruption,&quot; he added.', '1591681052.jpg', '2020-06-08 23:37:32', '2020-06-08 23:37:32'),
(9, 5, 0, '‘Racism only disease right now’', '‘racism only disease right now’', 'Manchester City and England footballer Raheem Sterling on Sunday insisted that racism is &quot;the only disease right now&quot;.\r\n\r\nThe 25-year-old, who has often and powerfully spoken out on discrimination, admitted his remarks may appear ill-chosen as the globe fights the coronavirus pandemic.\r\n\r\n&quot;I know this might sound a little bit cheesy but the only disease right now is the racism that we are fighting,&quot; said Sterling in a BBC TV interview to be broadcast on Monday.\r\n\r\nSterling is the latest sports star to voice support for protests against racism in the United States and across the world following the death of George Floyd in Minneapolis last month.\r\n\r\n&quot;This is the most important thing at this moment in time because this is something that is happening for years and years. Just like the pandemic, we want to find a solution to stop it,&quot; he added.\r\n\r\n&quot;At the same time, this is what all these protesters are doing. They are trying to find a solution and a way to stop the injustice they are seeing, and they are fighting for their cause.', '1591681366.jpg', '2020-06-08 23:42:46', '2020-06-08 23:42:46'),
(10, 1, 0, 'Semester System: Four public universities struggling', 'semester system: four public universities struggling', 'Students are deprived of reaping the rewards of the semester system in four public universities due to mismanagement by the authorities.\r\n\r\nFailure to publish examination results on time, absence of teaching assistants (TA), and playing catch-up to complete a six-month schedule in three to four months are reasons why the semester system is failing to bring the desired results, observed students and academics.\r\n\r\nThey also blamed the admission system where students are enrolled annually, effectively preventing an unsuccessful student from repeating a class in the first semester before the completion of the one-year cycle. Lack of teachers and classrooms are other structural issues students and academics pointed out as obstacles to the semester system running smoothly.\r\n\r\nWith the coronavirus outbreak and ongoing indefinite shutdown of public universities, the semester system is set to be hampered further. While some private universities started offering online classes, Dhaka University and most other public universities are yet to do so -- citing lack of internet access of all students.\r\n\r\nIn May, DU authorities announced they were considering cutting upcoming weekends and holidays and arranging additional classes in order to prevent a looming session jam and make up for academic losses during the closure.', '1591681496.jpg', '2020-06-08 23:44:56', '2020-06-08 23:44:56'),
(11, 3, 0, 'Safety net outlay to hit 3pc of GDP for first time', 'safety net outlay to hit 3pc of gdp for first time', 'The government may allocate Tk 95,155 crore for the safety net programmes in the next fiscal year as it looks to broaden the number of beneficiaries to support those who are struggling to make ends meet after the coronavirus outbreak.\r\n\r\nThe allocation would be 27.95 per cent higher than Tk 74,367 crore set aside in the current fiscal year and 3 per cent of the gross domestic product of Bangladesh, according to an official of the finance ministry.\r\n\r\nThe allocation was 2.58 per cent of the GDP in FY2019-20.\r\n\r\nMillions of people have lost their jobs owing to the countrywide shutdown enforced from March 26 to flatten the curve on the deadly virus.\r\n\r\nDue to the income shock caused by the pandemic, 77.2 per cent of the vulnerable non-poor fell below the poverty line, according to a joint survey of the Power and Participation Research Centre (PPRC) and the Brac Institute for Governance and Development.\r\n\r\nThis would imply that beyond the 20.5 per cent of the population officially recognised as poor, there is a group of &quot;new poor&quot; representing an additional 22.9 per cent of the population that needed to be brought within the discussion on poverty.\r\n\r\nAbout 74 per cent families have seen a reduction in income because of the coronavirus pandemic, a joint study of Brac, Data Sense and Unnayan Shamannay showed.\r\n\r\nThe situation prompted the government to beef up the spending for the social safety net programmes (SSNPs) by Tk 20,788 crore in FY2020-21, starting on July 1.\r\n\r\nThe allocation per beneficiary would not go up in terms of amount; rather, the number of beneficiaries would increase.\r\n\r\nThe government is boosting the allocation for eight core safety net programmes, especially those of food-based ones. There are 81 lakh beneficiaries under the schemes and that number will rise by 10 lakh.\r\n\r\nThe number of widows, destitute and deserted women entitled to Tk 500 per month support from the government would increase by 8.5 lakh. Another 2.5 lakh would be added to the list of the financially insolvent disabled, who receive Tk 750 a month.\r\n\r\nThe number of beneficiaries receiving maternity allowance would go up by 10 per cent. Currently, 750,000 individuals get such a payment.\r\n\r\nThe government&#39;s strategy to expand the SSNPs as one of the four strategic priorities for FY21 needs to be proactively pursued, the Centre for Policy Dialogue said in a virtual briefing on Sunday.\r\n\r\nThe government should allocate at least 3 per cent of the GDP for the SSNPs as outlined in its National Social Security Strategy formulated in 2015, it said.\r\n\r\nThe government has prepared a list of 50 lakh households as beneficiaries to be covered under its support programme in response to the coronavirus pandemic.\r\n\r\n&quot;The government should take support of NGOs and local-level social organisations in identifying, selecting and distributing the support, and to address inclusion and exclusion bias in selection process and adopt a whole of society approach,&quot; the CPD said.\r\n\r\nThe food and cash support has become crucial as a major portion of the population is facing food insecurity because of the pandemic, Hossain Zillur Rahman, executive chairman of the PPRC, told The Daily Star recently.\r\n\r\nThere are a lot of questions whether the listing of the beneficiaries is being done properly and the support is being distributed appropriately, he said.&nbsp;\r\n\r\nThe SSNPs also include the pension going to the civil servants. If the allocation for the retired government employees and their families is excluded, the SSNP budget for the poor would reduce significantly, according to Rahman, also the chairperson of Brac.\r\n\r\nSo, the real allocation for the poor should be clear, he said.\r\n\r\nThe allocation for the pension has been kept unchanged at Tk 23,010 crore for the FY21, which is 31 per cent of the total SSNP budget in the FY20 and it would be 24.18 per cent in FY21.&nbsp;\r\n\r\nExcluding the allocation for the pensioners and their families, the total SSNP budget stands at Tk 72,145 crore, which would be 2.50 per cent of the Tk 2,885,872-crore GDP of Bangladesh.&nbsp;\r\n\r\nThe government should step up to introduce schemes for the urban poor as most of the programmes target beneficiaries in the rural areas, Rahman said.\r\n\r\n&quot;We don&#39;t have any programme for the urban poor in that sense. From the coronavirus pandemic, we came to realise in a big way that the urban poor is the new unaddressed poor. It would be better if there is an explanation how much of the safety net programmes is going to the urban poor.&quot;\r\n\r\nSafety net programmes in Bangladesh have been contributing to the reduction of poverty and vulnerability by addressing a range of population groups through different forms of assistance, the World Bank said.\r\n\r\nThese include the provision of income security for the elderly, widows, and persons-with-disabilities, generating temporary employment for working age men and women, and supporting the healthy development of young mothers and children.\r\n\r\nThe government aims to double the budget allocation in the SSNP sector in the next five years.', '1591681606.jpg', '2020-06-08 23:46:46', '2020-06-08 23:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `pages_number_category`
--

CREATE TABLE `pages_number_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`) VALUES
(1, 'Admin', 'admin'),
(2, 'Author', 'author'),
(3, 'Editor', 'editor\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tagnews`
--

CREATE TABLE `tagnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagnews`
--

INSERT INTO `tagnews` (`id`, `news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 3, 1, NULL, NULL),
(3, 4, 1, NULL, NULL),
(4, 5, 2, NULL, NULL),
(5, 6, 1, NULL, NULL),
(6, 7, 1, NULL, NULL),
(7, 8, 2, NULL, NULL),
(8, 9, 1, NULL, NULL),
(9, 10, 1, NULL, NULL),
(10, 11, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'banagladesh', '2020-06-08 11:32:23', '2020-06-08 11:32:23'),
(2, 'economoy', '2020-06-08 11:32:32', '2020-06-08 11:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mizanur Rahman', 'admin', 'mrahman5037@gmail.com', NULL, '$2y$10$7/fT3UjVy1oNtwHiVavJt.05uJPA8QJopuq.zCLgGMqq7ZznsZwFC', NULL, NULL, NULL),
(2, 2, 'Mizan', 'author', 'programmer620@gmail.com', NULL, '$2y$10$kicxfWyG3a7U4xa6xdz.fuWr4X/j8yh5nsZSm696rFFD0gGDS/kM2', NULL, NULL, NULL),
(3, 2, 'Farjana Akter Mitu', 'author', 'farjana@gmail.com', NULL, '$2y$10$i0D3yR9WY0mI8TOhEdsQLOEFiZiE3xKx.I3Nd1wrobLvDBvlVcgyS', NULL, NULL, NULL),
(4, 3, 'Editor', 'editor', 'editor@gmail.com', NULL, '$2y$10$i0D3yR9WY0mI8TOhEdsQLOEFiZiE3xKx.I3Nd1wrobLvDBvlVcgyS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoriesnews`
--
ALTER TABLE `categoriesnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriesnews_news_id_foreign` (`news_id`),
  ADD KEY `categoriesnews_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_number_category`
--
ALTER TABLE `pages_number_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagnews`
--
ALTER TABLE `tagnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagnews_news_id_foreign` (`news_id`),
  ADD KEY `tagnews_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categoriesnews`
--
ALTER TABLE `categoriesnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pages_number_category`
--
ALTER TABLE `pages_number_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tagnews`
--
ALTER TABLE `tagnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoriesnews`
--
ALTER TABLE `categoriesnews`
  ADD CONSTRAINT `categoriesnews_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categoriesnews_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tagnews`
--
ALTER TABLE `tagnews`
  ADD CONSTRAINT `tagnews_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tagnews_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
