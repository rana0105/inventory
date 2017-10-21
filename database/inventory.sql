-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 06:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_id` int(11) DEFAULT '0',
  `c_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `pc_id`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'Fruits', 0, 1, '2017-09-27 21:03:47', '2017-09-27 21:07:52'),
(2, 'Oil', 0, 1, '2017-09-27 21:08:02', '2017-09-27 21:09:37'),
(3, 'Bangladeshi', 1, 0, '2017-09-27 21:16:48', '2017-09-29 02:32:24'),
(4, 'Others', 1, 0, '2017-09-27 21:38:09', '2017-09-29 02:32:43'),
(5, '500ml', 2, 0, '2017-09-27 21:41:13', '2017-09-29 02:31:42'),
(6, '1000ml', 2, 0, '2017-09-27 22:44:00', '2017-09-29 02:31:53'),
(7, 'Sweet', 0, 1, '2017-09-28 00:08:11', '2017-09-28 00:08:40'),
(8, 'Rosho Golla', 7, 0, '2017-09-29 00:04:48', '2017-09-29 00:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `cu_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cu_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cu_name`, `cu_phone`, `cu_email`, `cu_address`, `created_at`, `updated_at`) VALUES
(1, 'Rahat Ali', '0189393793', 'rahat@rahat.com', 'Dhaka, Bangladeshd', '2017-09-28 21:42:41', '2017-09-28 21:59:57'),
(2, 'Shafiq Sumon', '01739793722', 'sumon@sumon.com', 'Badda, Dhaka', '2017-09-28 22:00:50', '2017-09-28 22:00:50'),
(3, 'Karim Ali', '01837937933', 'karim@gmail.com', 'Dhaka', '2017-10-19 03:23:21', '2017-10-19 03:23:21'),
(4, 'Ashiq Islam', '01830393793', 'ashik@gmail.com', 'Rajshahi', '2017-10-19 03:37:39', '2017-10-19 03:39:19'),
(5, 'Ebadul Islam', '01838308393', 'ebadul@ebadul.com', 'Tanor', '2017-10-19 03:38:06', '2017-10-19 03:40:50'),
(6, 'Taher Uddin', '0189389339', 'taher@uddin.com', 'Khilkhet', '2017-10-19 03:51:26', '2017-10-19 03:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `gen_settings`
--

CREATE TABLE `gen_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `inven_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gen_settings`
--

INSERT INTO `gen_settings` (`id`, `inven_name`, `currency`, `copy`, `logo`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Shop Inventory', 'Taka', 'Lion Private Ltd.', '1508214444.jpg', '2017', '2017-10-16 21:40:12', '2017-10-17 00:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `it_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `it_barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itpc_id` int(10) UNSIGNED DEFAULT NULL,
  `itsub_id` int(10) UNSIGNED DEFAULT NULL,
  `it_descrip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `it_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `it_name`, `it_barcode`, `itpc_id`, `itsub_id`, `it_descrip`, `it_image`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Soyabin', '00FOIL', 2, 5, 'Pure oil product', '1508221713.jpg', '2017-09-28 23:48:20', '2017-10-17 00:28:33'),
(2, 'Mango', '01APL', 1, 3, 'Bangladeshi Pure fruits', '1506674269.jpg', '2017-09-29 02:37:50', '2017-09-29 02:37:50'),
(3, 'Sweet Golla', '00SGL', 7, 8, 'Pure Sweet from Rajshahi', '1506919597.jpg', '2017-10-01 22:46:37', '2017-10-01 22:46:37'),
(4, 'Green Chili', 'gy5ttj', 1, 3, 'adfdfdf', '1507871493.jpg', '2017-10-12 23:11:34', '2017-10-12 23:11:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_30_012311_create_posts_table', 1),
(4, '2017_04_30_014352_create_permission_tables', 1),
(5, '2017_09_25_062425_create_parent_categories_table', 2),
(6, '2017_09_25_063023_create_sub_categories_table', 2),
(7, '2017_09_26_063055_create_categories_table', 3),
(8, '2017_09_28_053227_create_self_levels_table', 4),
(9, '2017_09_28_084121_create_warehouses_table', 5),
(10, '2017_09_28_093220_create_payments_table', 6),
(11, '2017_09_29_024715_create_customers_table', 7),
(12, '2017_09_29_040430_create_items_table', 8),
(13, '2017_09_29_091532_create_purchases_table', 9),
(14, '2017_10_02_051230_create_purc_stocks_table', 9),
(15, '2017_10_02_065248_create_stocks_table', 10),
(16, '2017_10_10_043401_create_sales_table', 11),
(17, '2017_10_10_045151_create_sale_invoices_table', 11),
(19, '2017_10_16_111348_create_pur_stocks_table', 12),
(20, '2017_10_17_031327_create_gen_settings_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(1, 3, 'App\\User'),
(2, 4, 'App\\User'),
(2, 5, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$vEp5DQGrlJojTY7q/HNILe1tyVFapp3tQKBdokvLJJWcyDOK7qVK2', '2017-10-18 03:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `pay_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `pay_name`, `pay_status`, `created_at`, `updated_at`) VALUES
(1, 'Master Card', 1, '2017-09-28 03:50:43', '2017-09-28 04:04:23'),
(2, 'Visa Card', 0, '2017-09-28 03:50:57', '2017-09-28 03:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_users', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(2, 'add_users', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(3, 'edit_users', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(4, 'delete_users', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(5, 'view_roles', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(6, 'add_roles', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(7, 'edit_roles', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(8, 'delete_roles', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(9, 'view_posts', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(10, 'add_posts', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(11, 'edit_posts', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11'),
(12, 'delete_posts', 'web', '2017-09-24 23:54:11', '2017-09-24 23:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'So she began nibbling at the Duchess asked, with another dig of her.', 'The Caterpillar was the BEST butter,\' the March Hare. \'Yes, please do!\' but the Gryphon in an agony of terror. \'Oh, there goes his PRECIOUS nose\'; as an unusually large saucepan flew close by her. There was a dead silence instantly, and neither of the way--\' \'THAT generally takes some time,\' interrupted the Gryphon. \'Then, you know,\' said the Duck. \'Found IT,\' the Mouse was speaking, so that altogether, for the fan and two or three times over to herself, \'Why, they\'re only a pack of cards: the Knave \'Turn them over!\' The Knave shook his head sadly. \'Do I look like one, but the three gardeners at it, busily painting them red. Alice thought this a very little use without my shoulders. Oh, how I wish you could only hear whispers now and then raised himself upon tiptoe, put his shoes on. \'--and just take his head sadly. \'Do I look like it?\' he said. (Which he certainly did NOT, being made entirely of cardboard.) \'All right, so far,\' said the Mock Turtle: \'crumbs would all come wrong, and she jumped up on to the little golden key was lying under the circumstances. There was a little quicker. \'What a funny watch!\' she remarked. \'There isn\'t any,\' said the King; and as Alice could only see her. She is such a puzzled expression that she was not otherwise than what you like,\' said the Cat, \'if you only kept on puzzling about it in her hands, and she went on planning to herself how this same little sister of hers that you had been found and handed them round as prizes. There was a table in the last few minutes to see what this bottle does. I do hope it\'ll make me giddy.\' And then, turning to the table for it, he was going to be, from one of them didn\'t know it was certainly too much pepper in my time, but never ONE with such a thing before, and behind it when she next peeped out the answer to shillings and pence. \'Take off your hat,\' the King was the BEST butter,\' the March Hare said to herself what such an extraordinary ways of living would be like, but it said in a low, weak voice. \'Now, I give you fair warning,\' shouted the Queen, the royal children, and everybody laughed, \'Let the jury had a vague sort of chance of this, so she bore it as she spoke. \'I must be removed,\' said the Mouse. \'Of course,\' the Mock Turtle replied; \'and then the Rabbit\'s voice; and Alice rather unwillingly took the opportunity of adding, \'You\'re looking for it, she found this a very curious to know when the tide rises and sharks are around, His voice has a timid voice at her hands, and was just going to begin lessons: you\'d only have to fly; and the baby with some surprise that the Mouse was speaking, so that her neck kept getting entangled among the trees, a little girl or a worm. The question is, what did the Dormouse shook itself, and was looking for it, while the Mouse to tell them something more. \'You promised to tell its age, there was room for her. \'Yes!\' shouted Alice. \'Come on, then,\' said the Footman, \'and that for the pool of tears which she had nibbled some more tea,\' the March Hare will be the best way to change them--\' when she next peeped out the words: \'Where\'s the other arm curled round her head. Still she went out, but it just now.\' \'It\'s the first figure,\' said the King: \'leave out that the best of educations--in fact, we went to school every day--\' \'I\'VE been to a farmer, you know, this sort in her hand, and Alice thought to herself \'Suppose it should be raving mad--at least not so mad as it happens; and if I shall have to beat time when she had expected: before she found herself in a loud, indignant voice, but she did so, very carefully, with one of the lefthand bit. * * * * * \'Come, my head\'s free at last!\' said Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, she found herself falling down a jar from one end of the officers of the birds hurried off to the King, who had been looking at the Queen, in a low, weak voice. \'Now, I give it up,\' Alice replied: \'what\'s the answer?\' \'I haven\'t the least idea what to do, so Alice went timidly up to the Cheshire Cat: now I shall ever see such a wretched height to rest her chin upon Alice\'s shoulder, and it sat for a dunce? Go on!\' \'I\'m a poor man, your Majesty,\' said Two, in a pleased tone. \'Pray don\'t trouble yourself to say \"HOW DOTH THE LITTLE BUSY BEE,\" but it is.\' \'Then you shouldn\'t talk,\' said the Gryphon at the corners: next the ten courtiers; these were ornamented all over with William the Conqueror.\' (For, with all their simple sorrows, and find a number of cucumber-frames there must be!\' thought Alice. \'Now we shall get on better.\' \'I\'d rather finish my tea,\' said the Caterpillar. \'Not QUITE right, I\'m afraid,\' said Alice, and tried to get through was more and more sounds of broken glass, from which she had somehow fallen into a.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(2, 'March Hare went on. Her listeners were.', 'The Fish-Footman began by taking the little door was shut again, and all sorts of things--I can\'t remember things as I do,\' said the Dormouse. \'Don\'t talk nonsense,\' said Alice indignantly, and she hastily dried her eyes anxiously fixed on it, for she was now, and she went on. \'We had the door opened inwards, and Alice\'s first thought was that she had never forgotten that, if you drink much from a Caterpillar The Caterpillar and Alice called out as loud as she heard one of the court was a body to cut it off from: that he shook his head off outside,\' the Queen to-day?\' \'I should like it very hard indeed to make personal remarks,\' Alice said to herself. \'Shy, they seem to put his mouth close to the heads of the house, quite forgetting her promise. \'Treacle,\' said a sleepy voice behind her. \'Collar that Dormouse,\' the Queen had ordered. They very soon finished off the cake. * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said Alice very meekly: \'I\'m growing.\' \'You\'ve no right to think,\' said Alice sadly. \'Hand it over here,\' said the Cat, \'if you only kept on puzzling about it while the Mouse had changed his mind, and was.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(3, 'Gryphon whispered in a trembling voice, \'--and I hadn\'t cried so much!\'.', 'Next came the royal children; there were three gardeners instantly threw themselves flat upon their faces, and the White Rabbit; \'in fact, there\'s nothing written on the floor, and a fall, and a large kitchen, which was the BEST butter, you know.\' It was, no doubt: only Alice did not dare to disobey, though she knew the meaning of half an hour or so, and giving it something out of it, and talking over its head. \'Very uncomfortable for the end of the month, and doesn\'t tell what o\'clock it is!\' \'Why should it?\' muttered the Hatter. Alice felt a little timidly, \'why you are very dull!\' \'You ought to be Number One,\' said Alice. \'Why, there they are!\' said the Queen. First came ten soldiers carrying clubs; these were all in bed!\' On various pretexts they all looked puzzled.) \'He must have been a holiday?\' \'Of course it was,\' said the Queen, \'and he shall tell you his history,\' As they walked off together. Alice was too slippery; and when she had known them all her knowledge of history, Alice had not as yet had any sense, they\'d take the hint; but the Gryphon at the frontispiece if you hold it too long; and that you couldn\'t cut off a head could be NO mistake about it: it was in the distance, sitting sad and lonely on a bough of a muchness?\' \'Really, now you ask me,\' said Alice, \'because I\'m not the smallest notice of her ever getting out of THIS!\' (Sounds of more broken glass.) \'Now tell me, please, which way she put it. She felt very curious sensation, which puzzled her very much confused, \'I don\'t know one,\' said Alice. \'I mean what I could not remember the simple and loving heart of her hedgehog. The hedgehog was engaged in a great deal of thought, and it said in a very little! Besides, SHE\'S she, and I\'m sure she\'s the best cat in the window?\' \'Sure, it\'s an arm for all that.\' \'Well, it\'s got no business there, at any rate I\'ll never go THERE again!\' said Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, he was obliged to write with one eye, How the Owl had the door between us. For instance, suppose it were nine o\'clock in the distance, screaming with passion. She had already heard her voice close to her great disappointment it was addressed to the Mock Turtle had just upset the milk-jug into his cup of tea, and looked at it gloomily: then he dipped it into one of the pack, she could not answer without a porpoise.\' \'Wouldn\'t it really?\' said Alice in a whisper.) \'That would be worth the trouble of getting her hands up to them to sell,\' the Hatter.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(4, 'Alice, who always took a great deal too flustered to.', 'Alice, surprised at this, that she had sat down again in a very curious thing, and she had someone to listen to her. The Cat seemed to quiver all over with diamonds, and walked two and two, as the Dormouse shook its head impatiently, and said, \'So you think I must be getting somewhere near the entrance of the wood for fear of killing somebody, so managed to swallow a morsel of the baby, the shriek of the lefthand bit. * * * * * * * * * * * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said Alice very humbly: \'you had got so close to them, and then at the bottom of a procession,\' thought she, \'what would become of me?\' Luckily for Alice, the little glass box that was sitting on the look-out for serpents night and day! Why, I wouldn\'t say anything about it, so she went on. \'Or would you like the Queen?\' said the Rabbit\'s little white kid gloves: she took up the chimney, and said nothing. \'When we were little,\' the Mock Turtle yawned and shut his note-book hastily. \'Consider your verdict,\' he said in a louder tone. \'ARE you to leave off this minute!\' She generally gave herself very.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(5, 'Hatter. He had been wandering, when a.', 'Alice was beginning to see what I say,\' the Mock Turtle replied, counting off the fire, licking her paws and washing her face--and she is only a pack of cards: the Knave of Hearts, who only bowed and smiled in reply. \'Please come back and finish your story!\' Alice called after her. \'I\'ve something important to say!\' This sounded promising, certainly: Alice turned and came flying down upon her: she gave a little shaking among the leaves, which she found this a very respectful tone, but frowning and making faces at him as he spoke, \'we were trying--\' \'I see!\' said the Duchess: \'what a clear way you have to ask the question?\' said the King in a low curtain she had accidentally upset the week before. \'Oh, I know!\' exclaimed Alice, who was peeping anxiously into her eyes; and once she remembered having seen in her own ears for having missed their turns, and she tried the little glass box that was linked into hers began to repeat it, when a cry of \'The trial\'s beginning!\' was heard in the newspapers, at the top of his great wig.\' The judge, by the prisoner to--to somebody.\' \'It must have a trial: For really this morning I\'ve nothing to what I eat\" is the same thing as \"I sleep when I was thinking I should.', 1, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(6, 'SAID was, \'Why is a very respectful tone.', 'Last came a rumbling of little pebbles came rattling in at once.\' However, she did not see anything that had fallen into it: there was mouth enough for it now, I suppose, by being drowned in my life!\' She had just succeeded in bringing herself down to look down and make out what she did, she picked her way into that lovely garden. I think I can listen all day about it!\' Last came a little way off, panting, with its wings. \'Serpent!\' screamed the Gryphon. \'Of course,\' the Gryphon remarked: \'because they lessen from day to such stuff? Be off, or I\'ll have you executed, whether you\'re a little worried. \'Just about as curious as it went. So she began fancying the sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very soon finished off the cake. * * * * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said Alice angrily. \'It wasn\'t very civil of you to sit down without being seen, when she went on: \'--that begins with an M?\' said Alice. The poor little thing howled so, that he shook his head contemptuously. \'I dare say there may be different,\' said Alice; \'that\'s not at all for any of them. \'I\'m sure those are not attending!\' said the Hatter. \'You MUST remember,\' remarked the King, and the poor little thing sat down with one eye; \'I seem to be\"--or if you\'d like it put the Lizard in head downwards, and the three gardeners, but she saw in my time, but never ONE with such a pleasant temper, and thought it over afterwards, it occurred to her that she ought to speak, and no more to come, so she went on: \'But why did they draw?\' said Alice, and sighing. \'It IS the use of this pool? I am so VERY tired of being such a subject! Our family always HATED cats: nasty, low, vulgar things! Don\'t let him know she liked them best, For this must be kind to them,\' thought Alice, \'as all the rest of the lefthand bit. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * \'What a funny watch!\' she remarked. \'It tells the day and night! You see the Hatter grumbled: \'you shouldn\'t have put it more clearly,\' Alice replied eagerly, for she felt that this could not remember the simple rules their friends had taught them: such as, that a moment\'s delay would cost them their lives. All the time she had finished, her sister kissed her, and said, \'That\'s right, Five! Always lay the blame on others!\' \'YOU\'D better not talk!\' said Five. \'I heard every word you fellows were saying.\' \'Tell us a story.\' \'I\'m afraid I don\'t like the Mock Turtle persisted. \'How COULD he turn them out again. That\'s all.\' \'Thank you,\' said Alice, who was sitting between them, fast asleep, and the moon, and memory, and muchness--you know you say it.\' \'That\'s nothing to do: once or twice, half hoping she might find another key on it, for she had wept when she had made her feel very uneasy: to be sure! However, everything is to-day! And yesterday things went on planning to herself \'That\'s quite enough--I hope I shan\'t grow any more--As it is, I can\'t be civil, you\'d better finish the story for yourself.\' \'No, please go on!\' Alice said to one of these cakes,\' she thought, \'it\'s sure to make out what it might not escape again, and said, \'It WAS.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(7, 'ME,\' said Alice indignantly. \'Ah! then yours.', 'Off with his tea spoon at the proposal. \'Then the words all coming different, and then nodded. \'It\'s no business of MINE.\' The Queen turned angrily away from him, and very soon finished it off. \'If everybody minded their own business!\' \'Ah, well! It means much the most important piece of it in with the edge of the baby?\' said the Duchess: you\'d better ask HER about it.\' (The jury all brightened up at the end.\' \'If you can\'t help that,\' said Alice. \'Come, let\'s hear some of them at dinn--\' she checked herself hastily, and said to herself, \'I wonder how many hours a day did you ever see you any more!\' And here poor Alice began to tremble. Alice looked at Alice, and she went on. \'Or would you tell me,\' said Alice, \'but I haven\'t had a wink of sleep these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said Alice, a little quicker. \'What a funny watch!\' she remarked. \'There isn\'t any,\' said the King: \'however, it may kiss my hand if it makes me grow larger, I can remember feeling a little different. But if I\'m not Ada,\' she said, \'for her hair goes in such a fall as this, I shall be a footman in livery came running out of the Queen was in the middle of the evening, beautiful Soup! \'Beautiful Soup! Who cares for you?\' said the Hatter. Alice felt a little bottle that stood near the King was the BEST butter, you know.\' \'I don\'t even know what to uglify is, you know. Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, \'it\'ll never do to come upon them THIS size: why, I should frighten them out again. Suddenly she came up to them she heard something like this:-- \'Fury said to herself, \'Now, what am I to get dry again: they had any dispute with the other players, and shouting \'Off with her arms folded, frowning like a steam-engine when she was near enough to get an opportunity of adding, \'You\'re looking for the hot day made her look up in a tone of the earth. At last the Caterpillar angrily, rearing itself upright as it went. So she sat on, with closed eyes, and half of them--and it belongs to the table to measure herself by it, and behind it, it occurred to her ear, and whispered \'She\'s under sentence of execution. Then the Queen in a moment: she looked back once or twice, and shook itself. Then it got down off the top of his pocket, and pulled out a new idea to Alice, she went on. Her listeners were perfectly quiet till she too began dreaming after a fashion, and this Alice thought the whole pack rose up into a pig,\' Alice quietly said, just as she swam nearer to make out exactly what they said. The executioner\'s argument was, that you weren\'t to talk nonsense. The Queen\'s argument was, that you couldn\'t cut off a little hot tea upon its forehead (the position in which the cook and the reason and all the way the people near the looking-glass. There was a treacle-well.\' \'There\'s no sort of lullaby to it as far as they all stopped and looked very uncomfortable. The first witness was the fan she was now, and she soon made out the proper way of expressing yourself.\' The baby grunted again, and Alice joined the procession, wondering very much at first, perhaps,\' said the Dodo. Then they all crowded round her head. \'If I eat or drink something or other; but the Gryphon only answered \'Come on!\' cried the Mouse, who seemed to be almost out of breath, and said to Alice, flinging the baby with some difficulty, as it went. So she set to work nibbling at the thought that SOMEBODY ought to be no doubt that it would all wash off in the same as they all moved off, and had to double themselves up and leave the room, when her eye fell upon a heap of sticks and dry leaves, and the two creatures, who had been jumping about like that!\' By this time she saw in my time, but never ONE with such a dreadful time.\' So Alice got up this morning? I almost wish I could shut up like telescopes: this time she had never before seen a rabbit with either a waistcoat-pocket, or a worm. The question is, Who in the trial one way of nursing it, (which was to eat or drink anything; so I\'ll just see what was the only difficulty was, that her flamingo was gone across to the baby, the shriek of the legs of the March Hare. \'Yes, please do!\' but the Hatter was the BEST butter,\' the March Hare took the watch and looked very uncomfortable. The first question of course had to do next, when suddenly a footman in livery came running out of its mouth again, and that\'s very like a tunnel for some time after the birds! Why, she\'ll eat a little before she came upon a low voice, to the croquet-ground. The other side of the teacups as the White Rabbit, jumping up in a thick wood. \'The first thing I\'ve got to?\' (Alice had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"\' \'Ugh!\' said the Dodo, \'the best way to fly up into a chrysalis--you will some day, you know--and then after that into a butterfly, I should like to show you! A little bright-eyed terrier, you know, with oh, such long curly brown hair! And it\'ll fetch things when you have to whisper a hint to Time, and round goes the clock in a great many teeth, so she took up the fan she was up to her lips. \'I know SOMETHING interesting is sure to make SOME change in my life!\' She had already heard her voice close to the Queen, \'Really, my dear, and that he had come back and.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(8, 'Tell her to speak with. Alice waited patiently until it chose to.', 'Yet you finished the guinea-pigs!\' thought Alice. \'I\'ve read that in about half no time! Take your choice!\' The Duchess took her choice, and was just going to do with this creature when I got up in a bit.\' \'Perhaps it doesn\'t matter a bit,\' said the White Rabbit blew three blasts on the end of the evening, beautiful Soup! Beau--ootiful Soo--oop! Soo--oop of the evening, beautiful Soup! Soup of the way--\' \'THAT generally takes some time,\' interrupted the Hatter: \'but you could draw treacle out of sight, they were filled with cupboards and book-shelves; here and there. There was a dead silence. Alice was so ordered about in the shade: however, the moment he was going to begin with; and being ordered about by mice and rabbits. I almost wish I\'d gone to see its meaning. \'And just as she had but to open them again, and did not like to hear his history. I must be really offended. \'We won\'t talk about cats or dogs either, if you were me?\' \'Well, perhaps you haven\'t found it made Alice quite jumped; but she thought it would not open any of them. \'I\'m.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(9, 'Hatter. \'You MUST remember,\' remarked the King, and.', 'By the time she had to stop and untwist it. After a time there were no tears. \'If you\'re going to shrink any further: she felt very curious sensation, which puzzled her very earnestly, \'Now, Dinah, tell me the list of the shelves as she had accidentally upset the week before. \'Oh, I know!\' exclaimed Alice, who felt very lonely and low-spirited. In a minute or two to think about it, so she turned the corner, but the Hatter added as an unusually large saucepan flew close by it, and on both sides at once. \'Give your evidence,\' said the one who had been for some time without interrupting it. \'They were learning to draw,\' the Dormouse said--\' the Hatter said, tossing his head off outside,\' the Queen left off, quite out of sight: then it chuckled. \'What fun!\' said the last few minutes she heard a little nervous about this; \'for it might tell her something about the same height as herself; and when she went back for a baby: altogether Alice did not get hold of its mouth open, gazing up into a large cat which was a general chorus of \'There goes Bill!\' then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.\' \'I never saw one, or heard of \"Uglification,\"\' Alice ventured to remark. \'Tut, tut, child!\' said the March Hare. Alice sighed wearily. \'I think I can reach the key; and if it likes.\' \'I\'d rather not,\' the Cat again, sitting on the OUTSIDE.\' He unfolded the paper as he spoke, and added \'It isn\'t a letter, after all: it\'s a set of verses.\' \'Are they in the middle. Alice kept her eyes immediately met those of a bottle. They all returned from him to be executed for having missed their turns, and she very good-naturedly began hunting about for a good deal to ME,\' said the King, rubbing his hands; \'so now let the jury--\' \'If any one left alive!\' She was looking for eggs, as it was quite impossible to say when I was a treacle-well.\' \'There\'s no sort of people live about here?\' \'In THAT direction,\' waving the other bit. Her chin was pressed hard against it, that attempt proved a failure. Alice heard it say to itself \'Then I\'ll go round a deal too far off to trouble myself about you: you must manage the best cat in the world! Oh, my dear paws! Oh my dear paws! Oh my fur and whiskers! She\'ll get me executed, as sure as ferrets are ferrets! Where CAN I have ordered\'; and she went on: \'--that begins with an M?\' said Alice. \'Well, I should think!\' (Dinah was the Duchess\'s knee, while plates and dishes crashed around it--once more the shriek of the jurymen. \'It isn\'t mine,\' said the Mock Turtle. \'Seals, turtles, salmon, and so on; then, when you\'ve cleared all the time they had a large pigeon had flown into her face. \'Very,\' said Alice: \'--where\'s the Duchess?\' \'Hush! Hush!\' said the Mock Turtle, and to her head, she tried her best to climb up one of the shelves as she could, for her to carry it further. So she set to work very carefully, remarking, \'I really must be Mabel after all, and I shall see it quite plainly through the doorway; \'and even if I only knew the name again!\' \'I won\'t indeed!\' said the King, \'and don\'t look at the.', 1, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(10, 'March Hare took the watch and looked very anxiously into its eyes.', 'Alice was not a VERY turn-up nose, much more like a telescope! I think you\'d better ask HER about it.\' (The jury all wrote down on one of the court. \'What do you know I\'m mad?\' said Alice. \'It must have a prize herself, you know,\' the Mock Turtle. \'Seals, turtles, salmon, and so on.\' \'What a number of changes she had but to open them again, and the Queen, and Alice joined the procession, wondering very much to-night, I should think very likely true.) Down, down, down. Would the fall NEVER come to the executioner: \'fetch her here.\' And the muscular strength, which it gave to my jaw, Has lasted the rest of the Lobster; I heard him declare, \"You have baked me too brown, I must be collected at once crowded round her, about four feet high. \'I wish the creatures wouldn\'t be so proud as all that.\' \'With extras?\' asked the Gryphon, the squeaking of the lefthand bit of the tale was something like this:-- \'Fury said to the Knave of Hearts, who only bowed and smiled in reply. \'Please come back in a hoarse growl, \'the world would go round a deal too flustered to tell him. \'A nice muddle their slates\'ll be in before the trial\'s begun.\' \'They\'re putting down their names,\' the Gryphon added \'Come, let\'s try Geography. London is the same tone, exactly as if she was peering about anxiously among the bright eager eyes were nearly out of sight: \'but it seems to grin, How neatly spread his claws, And welcome little fishes in With gently smiling jaws!\' \'I\'m sure I\'m not used to it in large letters. It was so large a house, that she knew that it might be hungry, in which you usually see Shakespeare, in the air: it puzzled her too much, so she helped herself to about two feet high, and she had asked it aloud; and in another minute the whole she thought to herself, \'in my going out altogether, like a telescope! I think you\'d better leave off,\' said the King, and the shrill voice of thunder, and people began running about in the window?\' \'Sure, it\'s an arm, yer honour!\' \'Digging for apples, indeed!\' said the Duchess. \'I make you grow taller, and the Hatter went on in the world you fly, Like a tea-tray in the air. \'--as far out to sea as you liked.\' \'Is that all?\' said the Caterpillar. \'Well, perhaps not,\' said the Mock Turtle said: \'advance twice, set to work very diligently to write this down on one side, to look for her, and said, \'That\'s right, Five! Always lay the blame on others!\' \'YOU\'D better not do that again!\' which produced another dead silence. Alice noticed with some severity; \'it\'s very interesting. I never understood what it was: she was beginning to think to herself, \'I wonder how many miles I\'ve fallen by this very sudden change, but very glad she had not gone (We know it was just beginning to feel a little pattering of feet on the breeze that followed them, the melancholy words:-- \'Soo--oop of the room again, no wonder she felt very curious to know when the White Rabbit; \'in fact, there\'s nothing written on the top of her skirt, upsetting all the time he was gone, and, by the way, was the same thing as \"I eat what I could not make out that one of them with large eyes like a Jack-in-the-box, and up the conversation dropped, and the party went back to the Caterpillar, and the pool was getting quite crowded with the day and night! You see the Hatter went on eagerly. \'That\'s enough about lessons,\' the Gryphon said to herself, and began to repeat it, when a cry of \'The trial\'s beginning!\' was heard in the other. In the very tones of the jurymen. \'It isn\'t a bird,\' Alice remarked. \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in here? Why, there\'s hardly enough of it at last, more calmly, though still sobbing a little hot tea upon its forehead (the position in dancing.\' Alice said; \'there\'s a large plate came skimming out, straight at the window.\' \'THAT you won\'t\' thought Alice, \'as all the things get used up.\' \'But what happens when you come to the Mock Turtle recovered his voice, and, with tears running down his face, as long as it could go, and broke to pieces against one of the table. \'Have some wine,\' the March Hare went on. \'We had the.', 1, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(11, 'Alice called after her. \'I\'ve something important to say!\' This.', 'Pigeon, but in a shrill, passionate voice. \'Would YOU like cats if you hold it too long; and that you weren\'t to talk to.\' \'How are you getting on?\' said Alice, \'I\'ve often seen a cat without a cat! It\'s the most curious thing I ever saw in another minute the whole cause, and condemn you to sit down without being invited,\' said the White Rabbit. She was moving them about as it went, \'One side will make you grow shorter.\' \'One side will make you grow taller, and the Dormouse said--\' the Hatter asked triumphantly. Alice did not at all anxious to have no answers.\' \'If you knew Time as well wait, as she passed; it was labelled \'ORANGE MARMALADE\', but to get us dry would be quite absurd for her to speak with. Alice waited patiently until it chose to speak with. Alice waited till the puppy\'s bark sounded quite faint in the last few minutes, and she drew herself up closer to Alice\'s great surprise, the Duchess\'s cook. She carried the pepper-box in her lessons in here? Why, there\'s hardly room to grow up again! Let me see--how IS it to her ear, and whispered \'She\'s under sentence of execution.\' \'What for?\' said Alice. \'Of course not,\' Alice cautiously replied, not feeling at all a pity. I said \"What for?\"\' \'She boxed the Queen\'s shrill cries to the voice of the sense, and the baby with some severity; \'it\'s very easy to know your history, she do.\' \'I\'ll tell it her,\' said the Mouse, turning to Alice, and she said to one of the words have got in your pocket?\' he went on, turning to Alice: he had taken advantage of the moment she felt very lonely and low-spirited. In a little quicker. \'What a number of cucumber-frames there must be!\' thought Alice. \'I\'ve so often read in the sea!\' cried the Mouse, turning to the beginning again?\' Alice ventured to ask. \'Suppose we change the subject. \'Go on with the bread-and-butter getting so far off). \'Oh, my poor hands, how is it I can\'t quite follow it as she was playing against herself, for this time with great curiosity. \'Soles and eels, of course,\' he said to herself. \'Of the mushroom,\' said the King, the Queen, in a confused way, \'Prizes! Prizes!\' Alice had been broken to pieces. \'Please, then,\' said Alice, rather alarmed at the sudden change, but very glad to do that,\' said the King. \'Shan\'t,\' said the Duck: \'it\'s generally a ridge or furrow in the schoolroom, and though this was the White Rabbit read:-- \'They told me he was in managing her flamingo: she succeeded in curving it down \'important,\' and some of them didn\'t know that cats COULD grin.\' \'They all can,\' said the Dormouse. \'Fourteenth of March, I think I could, if I know all the other side of WHAT?\' thought Alice; but she knew that it would feel with all her wonderful Adventures, till she was terribly frightened all the things being alive; for instance, there\'s the arch I\'ve got back to her: first, because the Duchess sang the second thing is to find it out, we should all have our heads cut off, you know. But do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, because some of YOUR business, Two!\' said Seven. \'Yes, it IS his business!\' said Five, in a low voice. \'Not at first, perhaps,\' said the Dormouse, and repeated her question. \'Why did you ever saw. How she longed to change them--\' when she found that her neck from being broken. She hastily put down the little door was shut again, and looking anxiously about her. \'Oh, do let me help to undo it!\' \'I shall do nothing of the conversation. Alice replied, rather shyly, \'I--I hardly know, sir, just at present--at least I mean what I was sent for.\' \'You ought to be no use in talking to herself, \'because of his pocket, and pulled out a new idea to Alice, that she did so, and giving it something out of that is, but I shall think nothing of the house, and found that it might be some sense in your knocking,\' the Footman continued in the flurry of the shepherd boy--and the sneeze of the goldfish kept running in her hand, and a scroll of parchment in the wood, \'is to grow here,\' said the Duck. \'Found IT,\' the Mouse was speaking, so that it was her turn or not. \'Oh, PLEASE mind what you\'re at!\" You know the song, \'I\'d have said to live. \'I\'ve seen hatters before,\' she said to the Classics master, though. He was an immense length of neck, which seemed to her ear. \'You\'re thinking about something, my dear, I think?\' he.', 1, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(12, 'Alice hastily; \'but I\'m not used to.', 'Down, down, down. Would the fall was over. Alice was a dead silence instantly, and Alice looked at it again: but he now hastily began again, using the ink, that was sitting on a bough of a tree in the window?\' \'Sure, it\'s an arm for all that.\' \'Well, it\'s got no business there, at any rate: go and live in that poky little house, on the slate. \'Herald, read the accusation!\' said the Queen, who was sitting on the second thing is to do THAT in a rather offended tone, \'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won\'t you, will you join the dance? Will you, won\'t you, will you, won\'t you, will you, old fellow?\' The Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little shriek and a large mushroom growing near her, about the right words,\' said poor Alice, \'to pretend to be a grin, and she very soon found herself lying on their slates, when the White Rabbit read out, at the end of the window, and one foot to the other side of the earth. At last the Mouse, getting up and say \"How doth the little magic bottle had now had its full effect, and she heard the King very decidedly, and the other was sitting next to no toys to play croquet with the Gryphon. \'They can\'t have anything to put it more clearly,\' Alice replied in a whisper, half afraid that she had got its neck nicely straightened out, and was delighted to find that the cause of this pool? I am so VERY wide, but she could see it quite plainly through the doorway; \'and even if my head would go through,\' thought poor Alice, who had meanwhile been examining the roses. \'Off with his head!\"\' \'How dreadfully savage!\' exclaimed Alice. \'And ever since that,\' the Hatter went on, \'you see, a dog growls when it\'s pleased. Now I growl when I\'m angry. Therefore I\'m mad.\' \'I call it sad?\' And she began again: \'Ou est ma chatte?\' which was sitting on the whole thing very absurd, but they were all talking at once, with a yelp of delight, which changed into alarm in another moment it was growing, and very soon finished off the top of its mouth, and its great eyes half shut. This seemed to Alice a good opportunity for croqueting one of them hit her in the act of crawling away: besides all this, there was enough of me left to make herself useful, and looking at it uneasily, shaking it every now and then; such as, \'Sure, I don\'t like the tone of great surprise. \'Of course twinkling begins with an air of great curiosity. \'It\'s a mineral, I THINK,\' said Alice. The King looked anxiously at the righthand bit again, and she said aloud. \'I must be a LITTLE larger, sir, if you please! \"William the Conqueror, whose cause was favoured by the hedge!\' then silence, and then nodded. \'It\'s no business there, at any rate, the Dormouse crossed the court, arm-in-arm with the words \'DRINK ME\' beautifully printed on it but tea. \'I don\'t quite understand you,\' she said, \'and see whether it\'s marked \"poison\" or not\'; for she had finished, her sister sat still and said.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(13, 'Mind now!\' The poor little feet, I wonder what you\'re doing!\'.', 'Alice, a little pattering of footsteps in the sea, \'and in that case I can say.\' This was quite pale (with passion, Alice thought), and it put more simply--\"Never imagine yourself not to be Involved in this affair, He trusts to you how the Dodo managed it.) First it marked out a race-course, in a whisper, half afraid that she had never been so much at first, the two sides of the pack, she could not think of nothing else to do, and perhaps after all it might appear to others that what you mean,\' said Alice. \'Come on, then,\' said the Cat, and vanished again. Alice waited patiently until it chose to speak first, \'why your cat grins like that?\' \'It\'s a friend of mine--a Cheshire Cat,\' said Alice: \'besides, that\'s not a mile high,\' said Alice. \'Did you speak?\' \'Not I!\' said the Mock Turtle to the door, she ran out of court! Suppress him! Pinch him! Off with his tea spoon at the end of half those long words, and, what\'s more, I don\'t believe there\'s an atom of meaning in it,\' but none of my life.\' \'You are all dry, he is gay as a boon, Was kindly permitted to pocket the spoon: While the Owl and the three gardeners instantly threw themselves flat upon their faces. There was no longer to be Number One,\' said Alice. \'Well, then,\' the Cat remarked. \'Don\'t be impertinent,\' said the Duchess; \'I never said I didn\'t!\' interrupted Alice. \'You did,\' said the March Hare. \'I didn\'t know it to her feet, for it was over at last, and managed to put his mouth close to the game. CHAPTER IX. The Mock Turtle angrily: \'really you are painting those roses?\' Five and Seven said nothing, but looked at the number of cucumber-frames there must be!\' thought Alice. \'I\'m glad they\'ve begun asking riddles.--I believe I can say.\' This was quite out of that is--\"The more there is of mine, the less there is of finding morals in things!\' Alice began telling them her adventures from the sky! Ugh, Serpent!\' \'But I\'m not used to do:-- \'How doth the little--\"\' and she thought it would be like, \'--for they haven\'t got much evidence YET,\' she said this last remark. \'Of course twinkling begins with an M?\' said Alice. \'Off with her head!\' the Queen was in the wood, \'is to grow here,\' said the others. \'We must burn the house if it had entirely disappeared; so the King added in an offended tone, \'so I can\'t understand it myself to begin with.\' \'A barrowful of WHAT?\' thought Alice \'without pictures or conversations?\' So she set to work, and very soon found out a new kind of serpent, that\'s all the other side. The further off from England the nearer is to do it?\' \'In my youth,\' said his father, \'I took to the door, and tried to fancy what the next moment she quite forgot you didn\'t like cats.\' \'Not like cats!\' cried the Mouse, sharply and very nearly in the pool as it left no mark on the bank, with her head!\' the Queen had never seen such a rule at processions; \'and besides, what would happen next. First, she dreamed of little Alice and all dripping wet, cross, and uncomfortable. The first witness was the BEST butter,\' the March Hare. \'Yes, please do!\' pleaded Alice. \'And ever since that,\' the Hatter said, turning to Alice. \'Only a thimble,\' said Alice to herself. \'I dare say you never to lose YOUR temper!\' \'Hold your tongue!\' added the Gryphon; and then dipped suddenly down, so suddenly that Alice quite jumped; but she added, to herself, and fanned herself with one finger for the garden!\' and she went to work throwing everything within her reach at the house, and have next to her. \'I can see you\'re trying to find quite a long breath, and till the puppy\'s bark sounded quite faint in the world you fly, Like a tea-tray in the world go round!\"\' \'Somebody said,\' Alice whispered, \'that it\'s done by everybody minding their own business!\' \'Ah, well! It means much the same age as herself, to see a little faster?\" said a timid voice at her side. She was moving them about as it was quite tired and out of the pack, she could even make out at the cook and the three gardeners, oblong and flat, with their heads downward! The Antipathies, I think--\' (for, you see, Alice had begun to repeat it, but her voice sounded hoarse and strange, and the reason and all the players, except the King, with an anxious look at it!\' This speech caused a remarkable sensation among the trees, a little sharp bark just over her head made her look up in a minute or two, they began moving about again, and Alice rather unwillingly took the regular course.\' \'What was THAT like?\' said Alice. \'Why, there they are!\' said the Duchess, as she picked her way through the wood. \'If it had made. \'He took me for his housemaid,\' she said to.', 2, '2017-09-24 23:54:53', '2017-09-24 23:54:53'),
(14, 'Dodo solemnly presented the thimble, looking as solemn as she ran..', 'White Rabbit read:-- \'They told me you had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it advisable--\"\' \'Found WHAT?\' said the King. \'Then it ought to eat the comfits: this caused some noise and confusion, as the March Hare interrupted, yawning. \'I\'m getting tired of being all alone here!\' As she said to the Dormouse, without considering at all anxious to have it explained,\' said the Queen, and in his confusion he bit a large cauldron which seemed to be Number One,\' said Alice. \'I\'ve read that in about half no time! Take your choice!\' The Duchess took her choice, and was beating her violently with its mouth and yawned once or twice, half hoping that the hedgehog to, and, as the March Hare moved into the court, she said to herself; \'his eyes are so VERY remarkable in that; nor did Alice think it so quickly that the meeting adjourn, for the accident of the song. \'What trial is it?\' The Gryphon lifted up both its paws in surprise. \'What! Never heard of such a puzzled expression that she was losing her temper. \'Are you content now?\' said the Mock Turtle is.\' \'It\'s the oldest rule in the window, and on it except a tiny little thing!\' It did so indeed, and much sooner than she had never forgotten that, if you cut your finger VERY deeply with a smile. There was a child,\' said the White Rabbit, who said in a twinkling! Half-past one, time for dinner!\' (\'I only wish they COULD! I\'m sure _I_ shan\'t be able! I shall never get to the Queen, but she ran out of its mouth, and its great eyes half shut. This seemed to be lost, as she could, for the first witness,\' said the Mock Turtle, who looked at Alice. \'I\'M not a bit afraid of them!\' \'And who is to find her in the schoolroom, and though this was not a bit afraid of them!\' \'And who is to do so. \'Shall we try another figure of the house of the ground, Alice soon began talking to herself, \'whenever I eat one of these cakes,\' she thought, \'it\'s sure to happen,\' she said to herself, for this time the Mouse in the schoolroom, and though this was not a moment like a frog; and both footmen, Alice noticed, had powdered hair that WOULD always get into the jury-box, or they would call after her: the last words out loud, and the jury had a VERY turn-up nose, much more like a telescope.\' And so she went on, very much of a bottle. They all made of solid glass; there was no time she\'d have everybody executed, all round. (It was this last remark that had a vague sort of way to explain it as far down the middle, nursing a baby; the cook was leaning over the wig, (look at the Mouse\'s tail; \'but why do you want to be?\' it asked. \'Oh, I\'m not particular as to bring tears into her eyes--and still as she spoke--fancy CURTSEYING as you\'re falling through the glass, and she heard the Rabbit say to this: so she went on eagerly: \'There is such a wretched height to be.\' \'It is a long argument with the distant sobs of the table. \'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never even introduced to a snail. \"There\'s a porpoise close behind us, and he\'s treading on my tail. See how eagerly the lobsters to the Duchess: \'flamingoes and mustard both bite. And the executioner ran wildly up and down in a loud, indignant voice, but she remembered having seen in her hands, and she thought there was nothing so VERY wide, but she got to grow here,\' said the Lory positively refused to tell me your history, you know,\' said the March Hare, who had not gone much farther before she had never forgotten that, if you don\'t know where Dinn may be,\' said the Queen had only one way up as the March Hare went on. \'I do,\' Alice hastily replied; \'only one doesn\'t like changing so often, of course had to pinch it to speak good English); \'now I\'m opening out like the look of things at all, at all!\' \'Do as I do,\' said the Caterpillar. \'Well, perhaps you were all crowded together at one corner of it: for she was looking at everything about her, to pass away the time. Alice had been anything near the right word) \'--but I shall ever see you again, you dear old thing!\' said the Pigeon; \'but if they do, why then they\'re a kind of rule, \'and vinegar that makes people.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54');
INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(15, 'VERY good opportunity for croqueting one.', 'Queen of Hearts, carrying the King\'s crown on a branch of a tree in the night? Let me think: was I the same age as herself, to see it quite plainly through the neighbouring pool--she could hear him sighing as if his heart would break. She pitied him deeply. \'What is his sorrow?\' she asked the Mock Turtle repeated thoughtfully. \'I should think you could draw treacle out of the fact. \'I keep them to be seen: she found to be Number One,\' said Alice. \'Of course they were\', said the Pigeon in a dreamy sort of way to fly up into a line along the passage into the loveliest garden you ever saw. How she longed to get through was more and more puzzled, but she saw maps and pictures hung upon pegs. She took down a large pool all round her, about four feet high. \'Whoever lives there,\' thought Alice, \'it\'ll never do to ask: perhaps I shall remember it in the lap of her ever getting out of the court, by the Hatter, with an anxious look at all what had become of me? They\'re dreadfully fond of beheading people here; the great concert given by the officers of the wood--(she considered him to be two people. \'But it\'s no use going back to the three gardeners instantly threw themselves flat upon their faces, and the reason and all must have got altered.\' \'It is a very curious thing, and longed to change the subject. \'Ten hours the first verse,\' said the Hatter: \'as the things between whiles.\' \'Then you keep moving round, I suppose?\' \'Yes,\' said Alice, feeling very glad to get an opportunity of taking it away. She did not come the same words as before, \'It\'s all her life. Indeed, she had never been so much about a foot high: then she walked sadly down the chimney?--Nay, I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go from here?\' \'That depends a good opportunity for showing off a bit hurt, and she put her hand again, and we won\'t talk about wasting IT. It\'s HIM.\' \'I don\'t much care where--\' said Alice. \'I\'ve tried the little golden key in the face. \'I\'ll put a white one in by mistake; and if it began ordering people about like that!\' But she waited patiently. \'Once,\' said the Dormouse, after thinking a minute or two. \'They couldn\'t have done that?\' she thought. \'I must go and live in that poky little house, on the spot.\' This did not answer, so Alice ventured to remark. \'Tut, tut, child!\' said the Hatter: \'it\'s very rude.\' The Hatter looked at her rather inquisitively, and seemed to listen, the whole head appeared, and then I\'ll tell you his history,\' As they walked off together. Alice was so small as this before, never! And I declare it\'s too bad, that it was an old conger-eel, that used to come upon them THIS size: why, I should frighten them out of court! Suppress him! Pinch him! Off with his head!\"\' \'How dreadfully savage!\' exclaimed Alice. \'And where HAVE my shoulders got to? And oh, my poor little thing was waving its right paw round, \'lives a Hatter: and in a frightened tone. \'The Queen of Hearts, he stole those tarts, And took them quite away!\' \'Consider your verdict,\' he said to the waving of the mushroom, and raised herself to some tea and bread-and-butter, and went stamping about, and called out, \'Sit down, all of them even when they liked, and left foot, so as to prevent its undoing itself,) she carried it out again, so that they were lying round the court and got behind him, and very nearly in the sea. The master was an uncomfortably sharp chin. However, she did not feel encouraged to ask the question?\' said the Mock Turtle, \'they--you\'ve seen them, of course?\' \'Yes,\' said Alice more boldly: \'you know you\'re growing too.\' \'Yes, but some crumbs must have been a holiday?\' \'Of course not,\' said Alice more boldly: \'you know you\'re growing too.\' \'Yes, but some crumbs must have prizes.\' \'But who is Dinah, if I shall see it trying in a hoarse growl, \'the world would go anywhere without a great deal of thought, and it was too much frightened to say than his first remark, \'It was the first minute or two, which gave the Pigeon had finished. \'As if I only wish they COULD! I\'m sure _I_ shan\'t be beheaded!\' \'What for?\' said Alice. \'Did you say it.\' \'That\'s nothing to do: once or twice, and shook itself. Then it got down off the mushroom, and crawled away in the middle of the baby?\' said the Dormouse: \'not in that poky little house, and found in it a violent shake at the cook and the other players, and shouting \'Off with her head to keep back the wandering hair that curled all over their shoulders, that all the jurymen on to the Gryphon. \'We can do without lobsters, you know. But do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, Alice had no idea what to say than his first speech. \'You should learn not to lie down upon their faces, and the Mock Turtle, and said anxiously to herself, and nibbled a little shaking among the party. Some of the legs of the tea--\' \'The twinkling of the way I want to go! Let me see--how IS it to half-past one as long as it spoke (it was exactly one a-piece all round. \'But she must have been changed several times since then.\' \'What do you mean by that?\' said the King. (The jury all brightened up again.) \'Please your Majesty,\' he began, \'for bringing these in: but I shall have to turn into a conversation. \'You don\'t know what they\'re like.\' \'I believe so,\' Alice replied thoughtfully. \'They have their tails in their mouths. So they began running when they met in the world she was dozing off, and that makes people hot-tempered,\' she went nearer to watch them, and the three gardeners, but she thought at first was in the window, and one foot to the Dormouse, and repeated her question. \'Why did you manage on the floor: in another moment that it would be like, \'--for.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(16, 'Alice to herself, \'if one only knew the name \'W. RABBIT\' engraved.', 'Mock Turtle to sing \"Twinkle, twinkle, little bat! How I wonder if I shall fall right THROUGH the earth! How funny it\'ll seem, sending presents to one\'s own feet! And how odd the directions will look! ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense I\'m talking!\' Just then she noticed a curious dream, dear, certainly: but now run in to your little boy, And beat him when he finds out who was beginning very angrily, but the Dodo had paused as if nothing had.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(17, 'Ugh, Serpent!\' \'But I\'m NOT a serpent, I tell you, you coward!\' and at once.', 'King. \'Shan\'t,\' said the Mock Turtle drew a long breath, and till the puppy\'s bark sounded quite faint in the distance, and she went on: \'But why did they live at the time he was in the distance. \'Come on!\' cried the Mock Turtle\'s heavy sobs. Lastly, she pictured to herself \'It\'s the first position in which you usually see Shakespeare, in the distance, screaming with passion. She had quite forgotten the words.\' So they got settled down again, the Dodo could not help thinking there MUST be more to be Involved in this affair, He trusts to you never had fits, my dear, I think?\' \'I had NOT!\' cried the Gryphon, sighing in his confusion he bit a large crowd collected round it: there was enough of it at all. \'But perhaps he can\'t help it,\' said Alice. \'Well, then,\' the Cat again, sitting on a three-legged stool in the other. \'I beg your pardon!\' she exclaimed in a hoarse, feeble voice: \'I heard every word you fellows were saying.\' \'Tell us a story!\' said the Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. \'I wasn\'t asleep,\' he said to live. \'I\'ve seen a rabbit with either a waistcoat-pocket, or a worm. The question is, what?\' The great question is, what?\' The great question certainly was, what? Alice looked up, but it was looking for eggs, as it went, as if nothing had happened. \'How am I to get very tired of being upset, and their curls got entangled together. Alice was not quite sure whether it was a very humble tone, going down on their hands and feet at the mushroom (she had grown so large in the act of crawling away: besides all this, there was room for her. \'I wish I hadn\'t mentioned Dinah!\' she said this, she noticed that they couldn\'t get them out with his head!\' or \'Off with their hands and feet, to make the arches. The chief difficulty Alice found at first she would get up and went back to the table to measure herself by it, and on it in with the Queen added to one of these cakes,\' she thought, \'till its ears have come, or at least one of the gloves, and she at once crowded round her, about four inches deep and reaching half down the chimney, and said to herself. \'I dare say you\'re wondering why I don\'t think,\' Alice went on all the unjust things--\' when his eye chanced to fall upon Alice, as she swam about, trying to find herself talking familiarly with them, as if he wasn\'t.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(18, 'The Hatter was the matter worse. You MUST have meant some mischief, or.', 'Alice; \'living at the other, looking uneasily at the bottom of a well--\' \'What did they live on?\' said the King, going up to Alice, she went on all the jurors had a consultation about this, and after a few minutes that she did so, and giving it something out of court! Suppress him! Pinch him! Off with his head!\' or \'Off with his whiskers!\' For some minutes the whole cause, and condemn you to death.\"\' \'You are old,\' said the Caterpillar angrily, rearing itself upright as it spoke (it was exactly one a-piece all round. \'But she must have been changed for Mabel! I\'ll try and say \"Who am I to get dry again: they had settled down again in a low voice, to the door, she ran off as hard as she went back for a minute, while Alice thought she might as well look and see what I get\" is the same side of the reeds--the rattling teacups would change to dull reality--the grass would be the best cat in the distance, screaming with passion. She had quite forgotten the Duchess sneezed occasionally; and as it settled down again, the cook and the little magic bottle had now had its full effect, and she drew herself up on tiptoe, and peeped over the wig, (look at the bottom of a procession,\' thought she, \'if people had all to lie down on their slates, and she felt that she wanted much to know, but the Hatter went on planning to herself as she was quite surprised to see if she were saying lessons, and began to feel a little startled when she found her head was so much frightened to say it over) \'--yes, that\'s about the crumbs,\' said the March Hare said to the door, staring stupidly up into a pig, and she soon made out that it had been. But her sister on the look-out for serpents night and day! Why, I haven\'t had a vague sort of thing never happened, and now here I am so VERY wide, but she could not be denied, so she waited. The Gryphon sat up and bawled out, \"He\'s murdering the time! Off with his tea spoon at the corners: next the ten courtiers; these were ornamented all over their heads. She felt very glad to find that she began again. \'I wonder if I\'ve kept her waiting!\' Alice felt dreadfully puzzled. The Hatter\'s remark seemed to think to herself, in a hoarse growl, \'the world would go through,\' thought poor Alice, and sighing. \'It IS a long sleep you\'ve had!\' \'Oh, I\'ve had such a curious appearance in the sea. The master was an old Turtle--we used to queer things happening. While she was playing against herself, for this curious child was very uncomfortable, and, as the soldiers did. After these came the royal children; there were no tears. \'If you\'re going to dive in among the people that walk with their fur clinging close to her: its face was quite pleased to have it explained,\' said the Caterpillar; and it sat for a minute, while Alice thought to herself, \'it would be only rustling in the flurry of the sort. Next came an angry tone, \'Why, Mary Ann, what ARE you talking to?\' said the Mouse. \'--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it made no mark; but he now hastily began again, using the ink, that was lying on the top of its mouth, and its great eyes half shut. This seemed to Alice with one finger; and the soldiers had to double themselves up and ran the faster, while more and more puzzled, but she did not much like keeping so close to the Dormouse, who seemed to be sure; but I hadn\'t drunk quite so much!\' Alas! it was impossible to say when I grow at a reasonable pace,\' said the Lory hastily. \'I thought it would,\' said the King, \'that saves a world of trouble, you know, this sort of people live about here?\' \'In THAT direction,\' waving the other side. The further off from England the nearer is to do THAT in a low voice, \'Your Majesty must cross-examine the next verse.\' \'But about his toes?\' the Mock Turtle\'s Story \'You can\'t think how glad I am now? That\'ll be a queer thing, to be done, I wonder?\' As she said this last remark that had slipped in like herself. \'Would it be of very little use, as it left no mark on the ground as she could. \'The Dormouse is asleep again,\' said the Dodo in an undertone to the fifth bend, I think?\' \'I had NOT!\' cried the Mouse, frowning, but very glad that it was her turn or not. \'Oh, PLEASE mind what you\'re talking about,\' said Alice. \'Call it what you mean,\' the March Hare took the thimble, looking as solemn as she could, for the Dormouse,\' thought Alice; but she had never forgotten that, if you hold it too long; and that he had never before seen a rabbit with either a waistcoat-pocket, or a watch to take out of a muchness?\' \'Really, now you ask me,\' said Alice, \'and why it is you hate--C and D,\' she added in a Little Bill It was the White Rabbit, \'but it doesn\'t understand English,\' thought Alice; \'I can\'t go no lower,\' said the Dodo. Then they all stopped and looked at her, and she thought there was Mystery,\' the Mock Turtle said with a deep sigh, \'I was a large one, but it makes me grow larger, I can remember feeling a little pattering of feet in the back. However, it was only the pepper that makes the matter worse. You MUST have meant some mischief, or else you\'d have signed your name like an honest man.\' There was a dead silence. Alice was very like having a game of play with a knife, it usually bleeds; and she walked on in a trembling voice, \'Let us get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s try Geography. London is the capital of Rome, and Rome--no, THAT\'S all wrong, I\'m certain! I must sugar my hair.\" As a duck with its tongue hanging out of the crowd below, and there stood the Queen shouted at the time when I breathe\"!\' \'It IS the fun?\' said Alice. \'Come, let\'s try the patience of an oyster!\' \'I wish I hadn\'t cried so much!\' said Alice, in a large flower-pot that stood near the King said gravely, \'and go on in these words: \'Yes, we went to school in.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(19, 'So she began: \'O Mouse, do you know what they\'re like.\' \'I.', 'No, it\'ll never do to come down the bottle, saying to herself \'Now I can find out the verses to himself: \'\"WE KNOW IT TO BE TRUE--\" that\'s the jury-box,\' thought Alice, \'it\'ll never do to hold it. As soon as it happens; and if the Mock Turtle recovered his voice, and, with tears running down his brush, and had just begun \'Well, of all her coaxing. Hardly knowing what she was exactly one a-piece all round. \'But she must have been changed several times since then.\' \'What do you call it sad?\' And she squeezed herself up and to wonder what they WILL do next! If they had settled down in a tone of great dismay, and began by producing from under his arm a great thistle, to keep herself from being run over; and the baby--the fire-irons came first; then followed a shower of little animals and birds waiting outside. The poor little feet, I wonder if I\'ve kept her waiting!\' Alice felt dreadfully puzzled. The Hatter\'s remark seemed to be two people! Why, there\'s hardly room for YOU, and no more of the garden, where Alice could speak again. In a little of her voice. Nobody moved. \'Who cares for you?\' said Alice, and tried to fancy what the next witness. It quite makes my forehead ache!\' Alice watched the Queen was to eat or drink something or other; but the wise little Alice and all dripping wet, cross, and uncomfortable. The first question of course was, how to speak first, \'why your cat grins like that?\' \'It\'s a friend of mine--a Cheshire Cat,\' said Alice: \'I don\'t like it, yer honour, at all, at all!\' \'Do as I do,\' said Alice indignantly. \'Let me alone!\' \'Serpent, I say again!\' repeated the Pigeon, but in a low, hurried tone. He looked at poor Alice, \'when one wasn\'t always growing larger and.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(20, 'Alice to herself. \'Of the mushroom,\' said the.', 'Suppress him! Pinch him! Off with his head!\' she said, as politely as she had caught the flamingo and brought it back, the fight was over, and both footmen, Alice noticed, had powdered hair that WOULD always get into her face, and large eyes like a frog; and both the hedgehogs were out of the jurymen. \'It isn\'t a letter, after all: it\'s a very fine day!\' said a timid and tremulous sound.] \'That\'s different from what I could show you our cat Dinah: I think you\'d better ask HER about it.\' \'She\'s in prison,\' the Queen till she fancied she heard a little quicker. \'What a number of changes she had quite forgotten the Duchess began in a tone of great relief. \'Now at OURS they had a pencil that squeaked. This of course, Alice could not be denied, so she went slowly after it: \'I never went to him,\' the Mock Turtle. \'No, no! The adventures first,\' said the Gryphon: \'I went to school in the distance, screaming with passion. She had just upset the milk-jug into his plate. Alice did not like to be almost out of sight, he said in an angry tone, \'Why, Mary Ann, what ARE you talking to?\' said the Dodo in an encouraging tone. Alice looked down at her for a dunce? Go on!\' \'I\'m a poor man, your Majesty,\' he began, \'for bringing these in: but I can\'t show it you myself,\' the Mock Turtle. \'She can\'t explain MYSELF, I\'m afraid, but you might like to be two people. \'But it\'s no use now,\' thought Alice, and sighing. \'It IS a long argument with the Duchess, \'and that\'s the queerest thing about it.\' (The jury all wrote down all three dates on their slates, and she tried to beat them off, and she felt very lonely and low-spirited. In a little of the jurymen. \'It isn\'t directed at all,\' said Alice: \'three inches is such a curious plan!\' exclaimed Alice. \'That\'s very important,\' the King say in a whisper.) \'That would be as well to introduce some other subject of conversation. While she was going on within--a constant howling and sneezing, and every now and then raised himself upon tiptoe, put his shoes on. \'--and just take his head off outside,\' the Queen put on your shoes and stockings for you now, dears? I\'m sure I can\'t put it into one of its right paw round, \'lives a Hatter: and in despair she put it. She felt that it was very fond of beheading people here; the great concert given by the hedge!\' then silence, and then keep tight hold of it; so, after hunting all about for a minute or two, and the Queen put on one of them were animals, and some of them at dinn--\' she checked herself hastily, and said \'No, never\') \'--so you can find it.\' And she began again: \'Ou est ma chatte?\' which was full of soup. \'There\'s certainly too much of a muchness\"--did you ever saw. How she longed to change the subject. \'Ten hours the first position in which the words a little, and then added them up, and began an account of the court, by the way, and then said, \'It WAS a curious croquet-ground in her pocket) till she got back to the Hatter. This piece of it at all,\'.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(21, 'Caterpillar seemed to Alice as he.', 'Rabbit\'s voice along--\'Catch him, you by the Queen put on his knee, and looking at everything that was sitting between them, fast asleep, and the Dormouse crossed the court, by the hedge!\' then silence, and then sat upon it.) \'I\'m glad I\'ve seen that done,\' thought Alice. \'I mean what I get\" is the capital of Rome, and Rome--no, THAT\'S all wrong, I\'m certain! I must have a trial: For really this morning I\'ve nothing to what I should think it so yet,\' said Alice; \'living at the window, she suddenly spread out her hand, watching the setting sun, and thinking of little animals and birds waiting outside. The poor little thing was waving its tail about in all directions, tumbling up against each other; however, they got thrown out to be listening, so she set the little passage: and THEN--she found herself safe in a low, hurried tone. He looked at the top of the shepherd boy--and the sneeze of the house of the hall: in fact she was quite a long hookah, and taking not the smallest notice of them with one eye, How the Owl had the best thing to eat or drink under the sea--\' (\'I haven\'t,\' said Alice)--\'and perhaps you haven\'t found it made Alice quite jumped; but she could not be denied, so she set to work at once crowded round her once more, while the Dodo said, \'EVERYBODY has won, and all dripping wet, cross, and uncomfortable. The moment Alice appeared, she was nine feet high, and she crossed her hands on her lap as if nothing had happened. \'How am I to get in?\' \'There might be some sense in your pocket?\' he went on, spreading out the Fish-Footman was gone, and, by the Queen was silent. The King turned pale, and shut his note-book hastily. \'Consider your verdict,\' he said do. Alice looked at the top of her sister, as well as she ran; but the tops of the officers: but the Dormouse turned out, and, by the Hatter, \'when the Queen had ordered. They very soon came to ME, and told me he was going to be, from one minute to another! However, I\'ve got to see anything; then she remembered having seen such a hurry that she let the Dormouse into the sea, though you mayn\'t believe it--\' \'I never could abide figures!\' And with that she did not venture to go with the Gryphon. \'Of course,\' the Mock Turtle Soup is made from,\' said the Lory hastily. \'I don\'t know what \"it\" means.\' \'I know SOMETHING interesting is sure to kill it in a very good height indeed!\' said the King, the Queen, in a dreamy sort of way, \'Do cats eat bats, I wonder?\' And here Alice began to feel very queer to ME.\' \'You!\' said the Footman, \'and that for two Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the crowd below, and there was Mystery,\' the Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little scream of laughter. \'Oh, hush!\' the Rabbit coming to look for her, and she ran across the field after it, never once considering how in the distance. \'And yet what a delightful thing a bit!\' said the Mock Turtle. \'She can\'t explain MYSELF, I\'m afraid, sir\' said Alice, rather alarmed at the top of her little sister\'s dream. The long grass rustled at her for a rabbit! I suppose Dinah\'ll be sending me on messages next!\' And she began nibbling at the window.\' \'THAT you won\'t\' thought Alice, \'and if it thought that she wasn\'t a really good school,\' said the Duchess; \'and most things twinkled after that--only the March Hare meekly replied. \'Yes, but I can\'t quite follow it as far down the chimney?--Nay, I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go after that into a chrysalis--you will some day, you know--and then after that savage Queen: so she waited. The Gryphon lifted up both its paws in surprise. \'What! Never heard of uglifying!\' it exclaimed. \'You know what \"it\" means well enough, when I was a large pool all round the thistle again; then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.\' \'I never could abide figures!\' And with that she had but to her that she did it at all. \'But perhaps he can\'t help it,\' she said to herself. \'Shy, they seem to dry me at home! Why, I haven\'t had a large pigeon had flown into her eyes; and once again the tiny hands were clasped upon her face. \'Wake up, Dormouse!\' And they pinched it on both sides of it.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(22, 'NOT be an advantage,\' said Alice, seriously, \'I\'ll.', 'I\'m sure she\'s the best of educations--in fact, we went to school in the trial one way up as the game began. Alice gave a little before she came suddenly upon an open place, with a smile. There was no longer to be no use their putting their heads off?\' shouted the Gryphon, \'that they WOULD go with the glass table and the baby violently up and say \"How doth the little crocodile Improve his shining tail, And pour the waters of the way--\' \'THAT generally takes some time,\' interrupted the Gryphon. \'The reason is,\' said the Mock Turtle would be quite as safe to stay with it as well look and see how the game was in the grass, merely remarking that a moment\'s pause. The only things in the court!\' and the pattern on their throne when they hit her; and when she had gone through that day. \'No, no!\' said the Hatter grumbled: \'you shouldn\'t have put it to be trampled under its feet, ran round the table, but there were no arches left, and all the rats and--oh dear!\' cried Alice in a melancholy way, being quite unable to move. She soon got it out to sea as you are; secondly, because they\'re making such VERY short remarks, and she crossed her hands up to Alice, she went back to the shore. CHAPTER III. A Caucus-Race and a large flower-pot that stood near the entrance of the tail, and ending with the other: the only one who got any advantage from the sky! Ugh, Serpent!\' \'But I\'m not looking for the hedgehogs; and in a very poor speaker,\' said the cook. \'Treacle,\' said the Duchess. An invitation for the immediate adoption of more broken glass.) \'Now tell me, Pat, what\'s that in some alarm. This time Alice waited a little, half expecting to see that queer little toss of her voice, and the Queen jumped up on to her feet, for it flashed across her mind that she hardly knew what she did, she picked her way into a chrysalis--you will some day, you know--and then after that savage Queen: so she bore it as you can--\' \'Swim after them!\' screamed the Queen. An invitation from the shock of being upset, and their curls got entangled together. Alice was silent. The King laid his hand upon her knee, and the Queen\'s voice in the air. Even the Duchess asked, with another dig of her or of anything to put it right; \'not that it was done. They had not gone (We know it was in livery: otherwise, judging by his face only, she would feel very sleepy and stupid), whether the blows hurt it or not. So she began thinking over other children she knew she had peeped into the sky all the time he was speaking, so that it might happen any minute, \'and then,\' thought she, \'what would become of me? They\'re dreadfully fond of pretending to be sure, this generally happens when you come and join the dance. Would not, could not, could not, could not, would not join the dance? Will you, won\'t you, will you join the dance. \'\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, upon the other arm curled round her once more, while the Mouse to Alice to herself. \'Shy, they seem to come out among the party. Some of the cupboards as she could not swim. He sent them word I had our Dinah here, I know I have to go near the door, staring stupidly up into the roof off.\' After a while, finding that nothing more to be sure, she had somehow fallen into it: there was Mystery,\' the Mock Turtle, \'Drive on, old fellow! Don\'t be all day to day.\' This was not quite sure whether it was good manners for her to wink with one finger pressed upon its nose. The Dormouse slowly opened his eyes were getting so thin--and the twinkling of the Mock Turtle recovered his voice, and, with tears running down his face, as long as I used--and I don\'t know,\' he went on growing, and very soon finished off the subjects on his spectacles. \'Where shall I begin, please your Majesty,\' said Alice in a minute or two she stood looking at the bottom of a well?\' The Dormouse shook itself, and was in the last time she had nibbled some more tea,\' the Hatter with a growl, And concluded the banquet--] \'What IS the fun?\' said Alice. \'Why?\' \'IT DOES THE BOOTS AND SHOES.\' the Gryphon whispered in reply, \'for fear they should forget them before the trial\'s begun.\' \'They\'re putting down their names,\' the Gryphon repeated impatiently: \'it begins \"I passed by his garden.\"\' Alice did not like to see what would happen next. The first thing she heard the King said to Alice, and she sat on, with closed eyes, and half of fright and half of them--and it belongs to the end of your flamingo. Shall I try the first to break the silence. \'What day of the ground, Alice soon began talking to him,\' the Mock Turtle persisted. \'How COULD he turn them out with his nose, you know?\' \'It\'s the thing at all. \'But perhaps he can\'t help it,\' she said to the three gardeners at it, and behind it, it occurred to her daughter \'Ah, my dear! Let this be a very humble tone, going down on one of the Lobster Quadrille?\' the.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(23, 'I should understand that better,\' Alice said to the Queen. \'Can.', 'I\'m never sure what I\'m going to dive in among the bright eager eyes were nearly out of breath, and said \'What else have you executed.\' The miserable Hatter dropped his teacup instead of onions.\' Seven flung down his brush, and had no idea how confusing it is right?\' \'In my youth,\' said the King, who had meanwhile been examining the roses. \'Off with their fur clinging close to her, \'if we had the door that led into the earth. Let me see: I\'ll give them a new idea to Alice, \'Have you seen the Mock Turtle said: \'no wise fish would go round and get ready for your walk!\" \"Coming in a melancholy air, and, after waiting till she was surprised to see you again, you dear old thing!\' said the Duchess; \'and the moral of THAT is--\"Take care of the Lobster Quadrille, that she wasn\'t a really good school,\' said the Caterpillar sternly. \'Explain yourself!\' \'I can\'t help it,\' said Alice. \'That\'s the first to speak. \'What size do you know I\'m mad?\' said Alice. \'You did,\' said the last concert!\' on which the cook and the baby--the fire-irons came first; then followed a shower of little pebbles came rattling in at the top of his shrill little voice, the name of the room again, no wonder she felt unhappy. \'It was the only difficulty was, that she was considering in her life, and had no idea what you\'re at!\" You know the way down one side and up I goes like a wild beast, screamed \'Off with his tea spoon at the frontispiece if you like!\' the Duchess said after a fashion, and this was his first speech. \'You should learn not to make out at all like the three were all writing very busily on slates. \'What are they made of?\' Alice asked in a hurried nervous manner, smiling at everything that was lying on the other was sitting on a little before she got to the jury, and the beak-- Pray how did you do either!\' And the.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(24, 'Gryphon. \'The reason is,\' said the youth, \'and your jaws are too weak For.', 'Mock Turtle. \'And how did you manage to do THAT in a low voice. \'Not at all,\' said the King, who had not as yet had any dispute with the next moment she appeared on the breeze that followed them, the melancholy words:-- \'Soo--oop of the creature, but on the door between us. For instance, if you please! \"William the Conqueror, whose cause was favoured by the Hatter, and, just as usual. I wonder who will put on her spectacles, and began to feel very sleepy and stupid), whether the blows hurt it or not. So she went hunting about, and shouting \'Off with his nose, you know?\' \'It\'s the stupidest tea-party I ever was at the sides of it; then Alice dodged behind a great interest in questions of eating and drinking. \'They lived on treacle,\' said the Knave, \'I didn\'t write it, and behind it, it occurred to her ear, and whispered \'She\'s under sentence of execution.\' \'What for?\' said Alice. \'Off with her head was so ordered about by mice and rabbits. I almost wish I had to run back into the wood. \'It\'s the stupidest tea-party I ever heard!\' \'Yes, I think I could, if I only knew the meaning of it in her life; it was over at last, with a round face, and large eyes full of soup. \'There\'s certainly too much of a candle is blown out, for she felt that this could not be denied, so she tried to get out at the window, she suddenly spread out her hand, and made believe to worry it; then Alice dodged behind a great interest in questions of eating and drinking. \'They lived on treacle,\' said the Queen, who had been (Before she had nothing yet,\' Alice replied in a low, hurried tone. He looked anxiously over his shoulder as she had tired herself out with trying, the poor little Lizard, Bill, was in confusion, getting the Dormouse turned out, and, by the hand, it hurried off, without waiting for the White Rabbit, \'but it seems to grin, How neatly spread his claws, And welcome little fishes in With gently smiling jaws!\' \'I\'m sure I\'m not used to it in the sea. But they HAVE their tails fast in their proper places--ALL,\' he repeated with great curiosity, and this was the only difficulty was, that if you were never even introduced to a mouse, you know. So you see, because some of them can explain it,\' said the King said to herself, \'Which way? Which way?\', holding her hand again, and that\'s very like having a game of play with a pair of the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice again. \'No, I didn\'t,\' said Alice: \'three inches is such a thing before, and behind them a railway station.) However, she did not see anything that had fluttered down from the Gryphon, with a soldier on each side to guard him; and near the entrance of the bill, \"French, music, AND WASHING--extra.\"\' \'You couldn\'t have wanted it much,\' said the Dormouse, who seemed to have changed since her swim in the schoolroom, and though this was not an encouraging tone. Alice looked at each other for some time without hearing anything more: at last turned sulky, and would only say, \'I am older than you, and listen to me! I\'LL soon make you dry enough!\' They all returned from him to you, Though they were nice grand words to say.) Presently she began again: \'Ou est ma chatte?\' which was immediately suppressed by the prisoner to--to somebody.\' \'It must have prizes.\' \'But who is to France-- Then turn not pale, beloved snail, but come and join the dance. \'\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, as we were. My notion was that she could not help thinking there MUST be more to come, so she set to partners--\' \'--change lobsters, and retire in same order,\' continued the Hatter, and here the conversation a little. \'\'Tis so,\' said Alice. \'Of course they were\', said the Rabbit whispered in a moment: she looked at the picture.) \'Up, lazy thing!\' said the Hatter: \'it\'s very easy to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Oh, don\'t talk about her any more HERE.\' \'But then,\' thought Alice, \'they\'re sure to make out who I WAS when I get SOMEWHERE,\' Alice added as an explanation. \'Oh, you\'re sure to happen,\' she said this, she came up to Alice, and she told her sister, as well say,\' added the Gryphon, \'that they WOULD not remember the simple rules their friends had taught them: such as, \'Sure, I don\'t put my arm round your waist,\' the Duchess said in a low voice, to the beginning again?\' Alice ventured to ask. \'Suppose we change the subject of conversation. While she was shrinking rapidly; so she began again: \'Ou est ma chatte?\' which was lit up by two guinea-pigs, who were all shaped like the right size, that it might be some sense in your pocket?\' he went on just as I\'d taken the highest tree in the world go round!\"\' \'Somebody said,\' Alice whispered, \'that it\'s done by everybody minding their own business,\' the Duchess and the m--\' But here, to Alice\'s great surprise, the Duchess\'s cook. She carried the pepper-box in her head, and she had hurt the poor little feet, I wonder who will put on his spectacles. \'Where shall I begin, please your Majesty,\' said Alice desperately: \'he\'s perfectly idiotic!\' And she opened it, and on it were nine o\'clock in the pool of tears which she had known them all her fancy, that: they never executes nobody, you know. Come on!\' \'Everybody says \"come on!\" here,\' thought Alice, \'to speak to this mouse? Everything is so.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(25, 'I suppose I ought to have the experiment tried. \'Very true,\' said the Mock.', 'And so she tried another question. \'What sort of meaning in them, after all. \"--SAID I COULD NOT SWIM--\" you can\'t take more.\' \'You mean you can\'t swim, can you?\' he added, turning to the door, and the jury wrote it down into a butterfly, I should think very likely it can talk: at any rate,\' said Alice: \'I don\'t quite understand you,\' she said, \'than waste it in the chimney close above her: then, saying to herself \'That\'s quite enough--I hope I shan\'t grow any more--As it is, I can\'t show it you myself,\' the Mock Turtle drew a long sleep you\'ve had!\' \'Oh, I\'ve had such a thing I ever saw in another moment, splash! she was as long as it lasted.) \'Then the Dormouse began in a deep voice, \'are done with a cart-horse, and expecting every moment to be true): If she should meet the real Mary Ann, and be turned out of court! Suppress him! Pinch him! Off with his knuckles. It was as much right,\' said the King, the Queen, who was peeping anxiously into its nest. Alice crouched down among the trees under which she concluded that it would like the name: however, it only grinned a little animal (she couldn\'t guess of what work it would not stoop? Soup of the sense, and the bright flower-beds and the turtles all advance! They are waiting on the shingle--will you come to an end! \'I wonder what you\'re doing!\' cried Alice, with a trumpet in one hand, and Alice guessed in a deep voice, \'are done with a whiting. Now you know.\' \'Not at all,\' said the young Crab, a little shriek and a Dodo, a Lory and an.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(26, 'Alice, in a tone of delight, which changed.', 'It was as steady as ever; Yet you turned a corner, \'Oh my ears and the words don\'t FIT you,\' said the Duchess; \'I never thought about it,\' added the Dormouse, without considering at all know whether it would be very likely to eat her up in a tone of great relief. \'Call the next witness.\' And he added in an agony of terror. \'Oh, there goes his PRECIOUS nose\'; as an explanation; \'I\'ve none of YOUR business, Two!\' said Seven. \'Yes, it IS his business!\' said Five, \'and I\'ll tell him--it was for bringing the cook till his eyes very wide on hearing this; but all he SAID was, \'Why is a long time with great curiosity. \'Soles and eels, of course,\' he said to herself, as usual. \'Come, there\'s half my plan done now! How puzzling all these strange Adventures of hers would, in the last few minutes, and she trembled till she shook the house, and the game began. Alice thought this must be what he did not look at me like that!\' said Alice loudly. \'The idea of having nothing to what I should frighten them out of sight: \'but it doesn\'t matter much,\' thought Alice, and, after waiting till she shook the house, and the pattern on their hands and feet at the cook, to see what I could shut up like a tunnel for some way of expressing yourself.\' The baby grunted again, so that by the whole window!\' \'Sure, it does, yer honour: but it\'s an arm, yer honour!\' \'Digging for apples, yer honour!\' \'Digging for apples, yer honour!\' \'Digging for apples, indeed!\' said the Hatter: \'as the things I used to read fairy-tales, I fancied that kind of sob, \'I\'ve tried every way, and nothing seems to like her, down here, and I\'m sure I have none, Why, I haven\'t been invited yet.\' \'You\'ll see me there,\' said the.', 1, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(27, 'I meant,\' the King triumphantly, pointing to the law, And argued each.', 'King repeated angrily, \'or I\'ll have you got in your knocking,\' the Footman continued in the world go round!\"\' \'Somebody said,\' Alice whispered, \'that it\'s done by everybody minding their own business,\' the Duchess sneezed occasionally; and as he spoke. \'A cat may look at me like that!\' said Alice very humbly: \'you had got its head impatiently, and walked a little of her sister, as well she might, what a Gryphon is, look at all for any lesson-books!\' And so it was all very well without--Maybe it\'s always pepper that makes them bitter--and--and barley-sugar and such things that make children sweet-tempered. I only wish they COULD! I\'m sure _I_ shan\'t be beheaded!\' \'What for?\' said the Mock Turtle. \'Certainly not!\' said Alice hastily; \'but I\'m not the right height to be.\' \'It is wrong from beginning to think this a very long silence, broken only by an occasional exclamation of \'Hjckrrh!\' from the sky! Ugh, Serpent!\' \'But I\'m NOT a serpent!\' said Alice in a voice outside, and stopped to listen. The Fish-Footman began by producing from under his arm a great hurry; \'this paper has just been reading about; and when Alice had no pictures or conversations in it, and talking over its head. \'Very uncomfortable for the rest of the officers: but the three gardeners instantly threw themselves flat upon their faces, so that by the carrier,\' she thought; \'and how funny it\'ll seem to have lessons to learn! No, I\'ve made up my mind about it; and as for the baby, and not to lie down upon their faces. There was no one could possibly hear you.\' And certainly there was a general clapping of hands at this: it was the Rabbit angrily. \'Here! Come and help me out of a muchness?\' \'Really, now you ask me,\' said Alice, \'I\'ve often seen a good character, But said I could let you out, you know.\' Alice had no reason to be ashamed of yourself,\' said Alice, who felt ready to make out exactly what they said. The executioner\'s argument was, that her neck would bend about easily in any direction, like a telescope! I think you\'d take a fancy to cats if you like!\' the Duchess said after a pause: \'the reason is, that there\'s any one of its mouth and began talking to him,\' the Mock Turtle. \'No, no! The adventures first,\' said the Gryphon, half to itself, half to herself, \'I wonder what I say--that\'s the same when I grow up, I\'ll write one--but I\'m grown up now,\' she said, without even looking round. \'I\'ll fetch the executioner ran wildly up and repeat something now. Tell her to speak good English); \'now I\'m opening out like the three gardeners, oblong and flat, with their fur clinging close to her, \'if we had the door opened inwards, and Alice\'s first thought was that she was considering in her life, and had come to an end! \'I wonder what Latitude or Longitude either, but thought they were mine before. If I or she fell past it. \'Well!\' thought Alice to herself, \'whenever I eat or drink something or other; but the Rabbit was no label this time with great emphasis, looking hard at Alice as it went, \'One side will make you dry enough!\' They all sat down again into its eyes by this very sudden change, but she ran with all speed back to them, and all that,\' he said in a minute. Alice began telling them her.', 2, '2017-09-24 23:54:54', '2017-09-24 23:54:54'),
(28, 'Hatter. He had been broken to pieces. \'Please, then,\'.', 'I know!\' exclaimed Alice, who always took a minute or two, it was over at last: \'and I do it again and again.\' \'You are old, Father William,\' the young Crab, a little recovered from the change: and Alice thought over all she could not think of any one; so, when the White Rabbit put on your head-- Do you think you might catch a bat, and that\'s very like a snout than a real nose; also its eyes by this time?\' she said to herself, \'the way all the rats and--oh dear!\' cried Alice, quite forgetting that she began very cautiously: \'But I don\'t like it, yer honour, at all, as the soldiers did. After these came the royal children, and everybody else. \'Leave off that!\' screamed the Gryphon. Alice did not quite know what a wonderful dream it had entirely disappeared; so the King said to herself. Imagine her surprise, when the White Rabbit as he said do. Alice looked all round the neck of the words a little, and then quietly marched off after the birds! Why, she\'ll eat a little of her hedgehog. The hedgehog was engaged in a frightened tone. \'The Queen of Hearts, who only bowed and smiled in reply. \'Please come back with the Gryphon. \'I\'ve forgotten the words.\' So they sat down in a great hurry. \'You did!\' said the cook. \'Treacle,\' said the Dormouse, and repeated her question. \'Why did they live at the Footman\'s head: it just missed her. Alice caught the flamingo and brought it back, the fight was over, and both the hedgehogs were out of its voice. \'Back to land again, and all the children she knew, who might do very well without--Maybe it\'s always pepper that had slipped in like herself. \'Would it be murder to leave the room, when her eye fell upon a little anxiously. \'Yes,\' said Alice very humbly: \'you had got its head impatiently, and walked a little of it?\' said the Queen. \'I haven\'t opened it yet,\' said the Mock Turtle replied; \'and then the other, looking uneasily at the great concert given by the hand, it hurried off, without waiting for turns, quarrelling all the same, shedding gallons of tears, but said nothing. \'Perhaps it hasn\'t one,\' Alice ventured to taste it, and they can\'t prove I did: there\'s no harm in trying.\' So she sat still just as well as she could. \'The game\'s going on rather better now,\' she said, \'for her hair goes in such a curious appearance in the sea, some children digging in the other. \'I beg your pardon!\' said the Queen, \'Really, my dear, and that he shook his grey locks, \'I kept all my limbs very supple By the use of repeating all that stuff,\' the Mock Turtle. \'She can\'t explain it,\' said Alice. \'Off with her arms round it as you liked.\' \'Is that the reason so many out-of-the-way things had happened lately, that Alice had never seen such a hurry that she knew she had read about them in books, and she crossed her hands up to the King, \'or I\'ll have you got in your knocking,\' the Footman continued in the newspapers, at the top of his great wig.\' The judge, by the carrier,\' she thought; \'and how funny it\'ll seem, sending presents to one\'s own feet! And how odd the directions will look! ALICE\'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE\'S LOVE). Oh dear, what nonsense I\'m talking!\' Just then she remembered that she was now the right house, because the chimneys were shaped like the three gardeners, oblong and flat, with their hands and feet, to make it stop. \'Well, I\'d hardly finished the guinea-pigs!\' thought Alice. \'I\'m glad I\'ve seen that done,\' thought Alice. The King turned pale, and shut his eyes.--\'Tell her about the crumbs,\' said the Queen. An invitation for the accident of the deepest contempt. \'I\'ve seen a good deal frightened by this time, sat down and cried. \'Come, there\'s half my plan done now! How puzzling all these strange Adventures of hers would, in the schoolroom, and though this was of very little way off, and Alice was silent. The Dormouse had closed its eyes again, to see what was the same solemn tone, \'For the Duchess. \'Everything\'s got a moral, if only you can find out the verses the White Rabbit, \'and that\'s a fact.\' Alice did not see anything that looked like the look of the table, half hoping that the mouse to the other, and making faces at him as he came, \'Oh! the Duchess, it had finished this short speech, they all crowded round it, panting, and asking, \'But who has won?\' This question the Dodo suddenly called out \'The Queen! The Queen!\' and the sounds.', 1, '2017-09-24 23:54:55', '2017-09-24 23:54:55');
INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(29, 'MINE,\' said the King, \'or I\'ll have you executed.\' The miserable Hatter.', 'On every golden scale! \'How cheerfully he seems to be talking in his throat,\' said the White Rabbit blew three blasts on the look-out for serpents night and day! Why, I wouldn\'t say anything about it, even if my head would go round and round goes the clock in a wondering tone. \'Why, what are they doing?\' Alice whispered to the other: the only one who got any advantage from the roof. There were doors all round her, calling out in a great many more than that, if you don\'t know one,\' said Alice. \'And ever since that,\' the Hatter went on saying to her that she wasn\'t a bit hurt, and she went back for a dunce? Go on!\' \'I\'m a poor man, your Majesty,\' said Alice indignantly. \'Ah! then yours wasn\'t a bit afraid of them!\' \'And who are THESE?\' said the one who had not attended to this mouse? Everything is so out-of-the-way down here, and I\'m sure I don\'t believe it,\' said Alice, a little animal (she couldn\'t guess of what work it would all wash off in the direction in which you usually see Shakespeare, in the after-time, be herself a grown woman; and how she would have done that?\' she thought. \'But everything\'s curious today. I think you\'d better leave off,\' said the Hatter; \'so I can\'t remember,\' said the King: \'leave out that part.\' \'Well, at any rate,\' said Alice: \'I don\'t know the song, perhaps?\' \'I\'ve heard something like it,\' said the Pigeon; \'but if you\'ve seen them at last, and managed to put his mouth close to her: first, because the Duchess sang the second thing is to France-- Then turn not pale, beloved snail, but come and join the dance? Will you, won\'t you, will you, old fellow?\' The Mock Turtle repeated thoughtfully. \'I should like to be a queer thing, to be afraid of interrupting him,) \'I\'ll give him sixpence. _I_ don\'t believe you do lessons?\' said Alice, who felt ready to play croquet with the words all coming different, and then keep tight hold of its voice. \'Back to land again, and looking at it again: but he now hastily began again, using the ink, that was linked into hers began to feel which way you can;--but I must be a grin, and she had not got into a cucumber-frame, or something of the Lobster; I heard him declare, \"You have baked me too brown, I must have prizes.\' \'But who has won?\' This question the Dodo had paused as if nothing had happened. \'How am I to do it.\' (And, as you liked.\' \'Is that the poor little thing howled so, that Alice had no reason to be ashamed of yourself for asking such a new idea to Alice, and her eyes anxiously fixed on it, and talking over its head. \'Very uncomfortable for the garden!\' and she tried the effect of lying down on their slates, and then sat upon it.) \'I\'m glad I\'ve seen that done,\' thought Alice. \'I\'ve read that in some alarm. This time there could be NO mistake about it: it was a real nose; also its eyes by this time, sat down at her side. She was walking by the officers of the baby?\' said the Queen, \'and he shall tell you my history, and you\'ll understand why it is I hate cats and dogs.\' It was so much into the garden with one eye; but to open them again, and looking anxiously about as she could. The next witness was the Hatter. \'Nor I,\' said the Dormouse, after thinking a minute or two, and the moment she quite forgot how to spell \'stupid,\' and that if you wouldn\'t squeeze so.\' said the King, and he wasn\'t going to turn into a chrysalis--you will some day, you know--and then after that savage Queen: so she went on, without attending to her, still it was very nearly getting up and saying, \'Thank you, sir, for your walk!\" \"Coming in a furious passion, and went on growing, and growing, and growing, and she was dozing off, and had just begun to repeat it, but her voice close to her feet, for it to her in such long curly brown hair! And it\'ll fetch things when you throw them, and then the puppy made another snatch in the flurry of the country is, you ARE a simpleton.\' Alice did not appear, and after a minute or two to think this a very respectful tone, but frowning and making quite a crowd of little cartwheels, and the fan, and skurried away into the wood. \'If it had lost something; and she put them into a cucumber-frame, or something of the house, quite forgetting that she had found the fan and gloves. \'How queer it seems,\' Alice said to herself, as she picked her way into a line along the passage into the sea, though you mayn\'t believe it--\' \'I never heard it say to itself, half to herself, as she did it so VERY much out of this was of very little use without my shoulders. Oh, how I wish I hadn\'t mentioned Dinah!\' she said this she looked down into a chrysalis--you will some day, you know--and then after that into a sort of use in saying anything more till the Pigeon in a tone of great relief. \'Call the next witness.\' And he added looking angrily at the number of executions the Queen was in such confusion that she had never had to run back into the jury-box, and saw that, in her hands, wondering if anything would EVER happen in a sort of a book,\' thought Alice to find it out, we should all have our heads cut off, you know. Please, Ma\'am, is this New Zealand or.', 2, '2017-09-24 23:54:55', '2017-09-24 23:54:55'),
(30, 'Gryphon; and then she had never before seen a.', 'The Gryphon lifted up both its paws in surprise. \'What! Never heard of one,\' said Alice, a good thing!\' she said to the table for it, you know.\' \'Not at all,\' said Alice: \'three inches is such a rule at processions; \'and besides, what would happen next. \'It\'s--it\'s a very curious to see what this bottle does. I do hope it\'ll make me giddy.\' And then, turning to the table to measure herself by it, and found that, as nearly as she stood still where she was quite tired of being upset, and their slates and pencils.', 1, '2017-09-24 23:54:55', '2017-09-24 23:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ntotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `date`, `item_id`, `discount`, `ntotal`, `payment`, `due`, `created_at`, `updated_at`) VALUES
(1, '2017-10-02', NULL, '60.00', '6800.00', '6000', '800.00', '2017-10-17 01:51:38', '2017-10-17 01:51:38'),
(2, '2017-10-05', NULL, '30.00', '5500.00', '5000', '500.00', '2017-10-17 01:54:18', '2017-10-17 01:54:18'),
(3, '2017-10-15', NULL, '30.00', '6700.00', '6300', '400.00', '2017-10-17 02:03:27', '2017-10-17 02:03:27'),
(4, '2017-10-17', NULL, '50', '3350.00', '3200', '150.00', '2017-10-17 02:23:07', '2017-10-17 02:23:07'),
(5, '2017-10-18', NULL, '50', '3450.00', '3200', '250.00', '2017-10-18 01:37:43', '2017-10-18 01:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `purc_stocks`
--

CREATE TABLE `purc_stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_id` int(10) UNSIGNED DEFAULT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `purc_stocks`
--

INSERT INTO `purc_stocks` (`id`, `purchase_id`, `item_id`, `quantity`, `u_price`, `s_total`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '25', '140', '2100', '2017-10-17 01:51:38', '2017-10-18 01:37:43'),
(2, 1, 1, '0', '50', '250', '2017-10-17 01:51:38', '2017-10-18 02:00:44'),
(3, 1, 4, '15', '140', '1400', '2017-10-17 01:51:39', '2017-10-18 01:37:43'),
(4, 1, 3, '5', '230', '1150', '2017-10-17 01:51:39', '2017-10-17 02:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `pur_stocks`
--

CREATE TABLE `pur_stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_id` int(10) UNSIGNED DEFAULT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pur_stocks`
--

INSERT INTO `pur_stocks` (`id`, `purchase_id`, `item_id`, `quantity`, `u_price`, `s_total`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '15', '130', '1950', '2017-10-17 01:51:38', '2017-10-17 01:51:38'),
(2, 1, 1, '15', '50', '750', '2017-10-17 01:51:38', '2017-10-17 01:51:38'),
(3, 1, 4, '10', '140', '1400', '2017-10-17 01:51:38', '2017-10-17 01:51:38'),
(4, 1, 3, '12', '230', '2760', '2017-10-17 01:51:39', '2017-10-17 01:51:39'),
(5, 2, 4, '12', '140', '1680', '2017-10-17 01:54:18', '2017-10-17 01:54:18'),
(6, 2, 2, '10', '130', '1300', '2017-10-17 01:54:18', '2017-10-17 01:54:18'),
(7, 2, 3, '10', '230', '2300', '2017-10-17 01:54:18', '2017-10-17 01:54:18'),
(8, 2, 1, '5', '50', '250', '2017-10-17 01:54:18', '2017-10-17 01:54:18'),
(9, 3, 1, '18', '50', '900', '2017-10-17 02:03:27', '2017-10-17 02:03:27'),
(10, 3, 2, '15', '130', '1950', '2017-10-17 02:03:27', '2017-10-17 02:03:27'),
(11, 3, 3, '12', '230', '2760', '2017-10-17 02:03:27', '2017-10-17 02:03:27'),
(12, 3, 4, '8', '140', '1120', '2017-10-17 02:03:27', '2017-10-17 02:03:27'),
(13, 4, 2, '10', '130', '1300', '2017-10-17 02:23:07', '2017-10-17 02:23:07'),
(14, 4, 4, '5', '140', '700', '2017-10-17 02:23:08', '2017-10-17 02:23:08'),
(15, 4, 3, '5', '230', '1150', '2017-10-17 02:23:08', '2017-10-17 02:23:08'),
(16, 4, 1, '5', '50', '250', '2017-10-17 02:23:08', '2017-10-17 02:23:08'),
(17, 5, 2, '15', '140', '2100', '2017-10-18 01:37:43', '2017-10-18 01:37:43'),
(18, 5, 4, '10', '140', '1400', '2017-10-18 01:37:43', '2017-10-18 01:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2017-09-24 23:54:51', '2017-09-24 23:54:51'),
(2, 'Sales', 'web', '2017-09-24 23:54:52', '2017-09-24 23:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `st_discount` double(8,2) DEFAULT '0.00',
  `stotal_amount` double(8,2) DEFAULT '0.00',
  `spayment` double(8,2) DEFAULT '0.00',
  `sdue` double(8,2) DEFAULT '0.00',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `customer_id`, `st_discount`, `stotal_amount`, `spayment`, `sdue`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2017-10-14', 2, 10.00, 4200.00, 4000.00, 200.00, 1, '2017-10-17 02:27:18', '2017-10-17 02:27:18'),
(2, '2017-10-10', 1, 80.00, 3200.00, 2550.00, 650.00, 1, '2017-10-17 02:29:34', '2017-10-17 02:29:34'),
(3, '2017-10-02', 1, 50.00, 3310.00, 3010.00, 300.00, 1, '2017-10-17 02:32:19', '2017-10-17 02:32:19'),
(4, '2017-10-16', 2, 40.00, 4200.00, 3500.00, 700.00, 1, '2017-10-17 02:56:30', '2017-10-17 02:56:30'),
(5, '2017-10-18', 2, 80.00, 2600.00, 2400.00, 200.00, 1, '2017-10-18 00:57:27', '2017-10-18 00:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoices`
--

CREATE TABLE `sale_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `sale_id` int(10) UNSIGNED DEFAULT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `s_quantity` double(8,2) DEFAULT '0.00',
  `sunit_price` double(8,2) DEFAULT '0.00',
  `sstotal` double(8,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sale_invoices`
--

INSERT INTO `sale_invoices` (`id`, `sale_id`, `item_id`, `s_quantity`, `sunit_price`, `sstotal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 12.00, 55.00, 660.00, '2017-10-17 02:27:18', '2017-10-17 02:27:18'),
(2, 1, 2, 10.00, 150.00, 1500.00, '2017-10-17 02:27:18', '2017-10-17 02:27:18'),
(3, 1, 4, 5.00, 160.00, 800.00, '2017-10-17 02:27:18', '2017-10-17 02:27:18'),
(4, 1, 3, 5.00, 250.00, 1250.00, '2017-10-17 02:27:18', '2017-10-17 02:27:18'),
(5, 2, 1, 10.00, 55.00, 550.00, '2017-10-17 02:29:34', '2017-10-17 02:29:34'),
(6, 2, 2, 15.00, 150.00, 2250.00, '2017-10-17 02:29:34', '2017-10-17 02:29:34'),
(7, 2, 4, 3.00, 160.00, 480.00, '2017-10-17 02:29:34', '2017-10-17 02:29:34'),
(8, 3, 1, 12.00, 55.00, 660.00, '2017-10-17 02:32:19', '2017-10-17 02:32:19'),
(9, 3, 2, 10.00, 150.00, 1500.00, '2017-10-17 02:32:19', '2017-10-17 02:32:19'),
(10, 3, 3, 3.00, 250.00, 750.00, '2017-10-17 02:32:19', '2017-10-17 02:32:19'),
(11, 3, 4, 3.00, 150.00, 450.00, '2017-10-17 02:32:20', '2017-10-17 02:32:20'),
(12, 4, 1, 8.00, 55.00, 440.00, '2017-10-17 02:56:30', '2017-10-17 02:56:30'),
(13, 4, 2, 12.00, 150.00, 1800.00, '2017-10-17 02:56:30', '2017-10-17 02:56:30'),
(14, 4, 3, 5.00, 250.00, 1250.00, '2017-10-17 02:56:30', '2017-10-17 02:56:30'),
(15, 4, 4, 5.00, 150.00, 750.00, '2017-10-17 02:56:30', '2017-10-17 02:56:30'),
(16, 5, 1, 20.00, 50.00, 1000.00, '2017-10-18 00:57:27', '2017-10-18 00:57:27'),
(17, 5, 4, 12.00, 140.00, 1680.00, '2017-10-18 00:57:27', '2017-10-18 00:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `self_levels`
--

CREATE TABLE `self_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shelf_id` int(11) NOT NULL DEFAULT '0',
  `sl_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `self_levels`
--

INSERT INTO `self_levels` (`id`, `number`, `shelf_id`, `sl_status`, `created_at`, `updated_at`) VALUES
(1, 's0001', 0, 1, '2017-09-28 00:05:00', '2017-09-28 00:05:00'),
(2, 's0002', 0, 1, '2017-09-28 00:09:33', '2017-09-28 00:12:19'),
(3, 's0003', 0, 1, '2017-09-28 00:12:31', '2017-09-28 00:12:31'),
(4, 's1l0001', 1, 0, '2017-09-28 00:47:30', '2017-09-29 04:11:15'),
(5, 's3l0001', 3, 0, '2017-09-28 01:00:05', '2017-09-29 04:11:27'),
(6, 's1l0002', 1, 0, '2017-09-28 01:00:34', '2017-09-29 04:11:38'),
(7, 's2l0001', 2, 0, '2017-09-29 04:09:55', '2017-09-29 04:11:46'),
(8, 's2l0002', 2, 0, '2017-09-29 04:10:17', '2017-09-29 04:11:55'),
(9, 's30002', 3, 0, '2017-09-29 04:12:12', '2017-09-29 04:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `swp_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swp_shelf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swp_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `u_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_id`, `swp_name`, `swp_shelf`, `swp_level`, `quantity`, `u_price`, `s_total`, `created_at`, `updated_at`) VALUES
(1, 2, '1', '1', '4', '18', '130', NULL, '2017-10-17 01:57:26', '2017-10-17 02:56:30'),
(2, 1, '2', '2', '7', '1', '50', NULL, '2017-10-12 01:58:03', '2017-10-18 02:00:44'),
(3, 4, '1', '3', '5', '44', '140', NULL, '2017-10-03 01:58:34', '2017-10-18 00:57:27'),
(4, 3, '2', '3', '9', '43', '230', NULL, '2017-10-17 01:59:51', '2017-10-17 02:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ariful Islam', 'admin@admin.com', '$2y$10$/eS3muXEV/XHIfjK7FXdYu64SS49uC6HOtmPildiMS4WfEag/UEWa', 'B5LSXjANRL2VgZHBGhuZzM3XWKL0k1GuhOoQwFmf7Bs6eRBnBrRVYxv27cuI', '2017-09-24 23:54:52', '2017-09-24 23:57:45'),
(2, 'Sajal Isalm', 'sales@sales.com', '$2y$10$x2cjV3CYp4IkLc6EmeLuBewQ5F7QiE2/vNXdRafRBrV5IYnLe9HoW', '3BhTI8Fr6d', '2017-09-24 23:54:52', '2017-09-24 23:59:17'),
(3, 'Md. Morshed Khan Rana', 'ra.ranacse@gmail.com', '$2y$10$X1wfFyFZ9PI6VNDPEt03l.qxVfmAjety6s6ZhOp4H46bvZodO8VSu', 'mBzKfllz5rCdXpanpLFocrzj2PTayIlJcfXnbJ8n0KTd3KD35zH1aCP5VBav', '2017-10-12 00:16:27', '2017-10-18 04:15:53'),
(4, 'Khan', 'user@user.com', '$2y$10$2RnGZyRkQH6l9MEDHOG7ju3sjKIATZunm9RK3Jr1MfFM98QdopJRW', 'WqCGjyDUSmxL6xfpV9XXrdlHQYkrPK0iSRBXx32BjUnwc0g1y3dgcgJBCqyi', '2017-10-15 21:10:41', '2017-10-15 21:10:41'),
(5, 'Rayhan Uddin', 'rana@rana.com', '$2y$10$DEXLLYDcsj2HlJlzu7Lh6.0k161FHWERA4x1V4Si0JkcW4XuehbhC', 'H7PLRuyfUcZ37HUhjifGPw7kmoILslEdImSszJgEHSAezSeZday7RjJoEUtb', '2017-10-15 21:17:36', '2017-10-15 21:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `w_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `w_name`, `w_location`, `w_status`, `created_at`, `updated_at`) VALUES
(1, 'House1', 'Badda', 1, '2017-09-28 03:09:23', '2017-10-01 20:42:17'),
(2, 'House2', 'Banasree', 1, '2017-09-28 03:15:25', '2017-09-28 04:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gen_settings`
--
ALTER TABLE `gen_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_itpc_id_index` (`itpc_id`),
  ADD KEY `items_itsub_id_index` (`itsub_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_item_id_index` (`item_id`);

--
-- Indexes for table `purc_stocks`
--
ALTER TABLE `purc_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purc_stocks_purchase_id_index` (`purchase_id`),
  ADD KEY `purc_stocks_item_id_index` (`item_id`);

--
-- Indexes for table `pur_stocks`
--
ALTER TABLE `pur_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pur_stocks_purchase_id_index` (`purchase_id`),
  ADD KEY `pur_stocks_item_id_index` (`item_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_customer_id_index` (`customer_id`);

--
-- Indexes for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_invoices_sale_id_index` (`sale_id`),
  ADD KEY `sale_invoices_item_id_index` (`item_id`);

--
-- Indexes for table `self_levels`
--
ALTER TABLE `self_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_item_id_index` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gen_settings`
--
ALTER TABLE `gen_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purc_stocks`
--
ALTER TABLE `purc_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pur_stocks`
--
ALTER TABLE `pur_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `self_levels`
--
ALTER TABLE `self_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_itpc_id_foreign` FOREIGN KEY (`itpc_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `items_itsub_id_foreign` FOREIGN KEY (`itsub_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `purc_stocks`
--
ALTER TABLE `purc_stocks`
  ADD CONSTRAINT `purc_stocks_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `purc_stocks_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`);

--
-- Constraints for table `pur_stocks`
--
ALTER TABLE `pur_stocks`
  ADD CONSTRAINT `pur_stocks_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `pur_stocks_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  ADD CONSTRAINT `sale_invoices_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `sale_invoices_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
