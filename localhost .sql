-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-08-21 16:49:14
-- 服务器版本： 8.0.12
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `qian`
--
CREATE DATABASE IF NOT EXISTS `qian` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `qian`;

-- --------------------------------------------------------

--
-- 表的结构 `qq_aboutuses`
--

CREATE TABLE `qq_aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '标题',
  `pic` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '图片',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '文章内容',
  `flag` tinyint(4) DEFAULT NULL COMMENT '标识 0：代表关于我们 1代表服务模块标题',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_aboutuses`
--

INSERT INTO `qq_aboutuses` (`id`, `title`, `pic`, `content`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'We Are Passionate And Always Produce Better Results For Interiors.', 'about/mm30kueNmM5EvSGuaU89Q9V6nL5NR5elCPDqA5ZI.png', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; width: 653px; opacity: 0.63; font-family: myfont-Regular; font-size: 1.12rem; color: rgb(53, 53, 53); text-align: justify; line-height: 2.25rem; text-indent: 2rem; white-space: normal; background-color: rgb(255, 255, 255);\">千雀室内设计有限公司主要从事以商业公共空间设计、住宅设计及品牌策划为主的多元化设计事务所。</p><p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0px; width: 653px; opacity: 0.63; font-family: myfont-Regular; font-size: 1.12rem; color: rgb(53, 53, 53); text-align: justify; line-height: 2.25rem; text-indent: 2rem; white-space: normal; background-color: rgb(255, 255, 255);\">通过多年的努力，我们建设完成了从“设计创意”、“工程技术管理”到“软装、设计、品牌策划、实施”，以及“进口高端设计产品供货”的设计项目各环节完整链条的服务系统。能够满足客户对全面设计服务，以及最为高端设计服务的需求，从而形成了鲜明的经营特色与独有的市场竞争力，并能有效控制最终的设计实施品质。</p><p><br/></p>', 0, '2019-08-19 07:22:19', '2019-08-19 07:22:19'),
(2, 'We server the best service', '', '<p><span style=\"color: #808080; font-family: myfont-Regular; background-color: #FFFFFF;\">aguar is an endangered animal. It is said that there are less than 20 jaguars in the world currently, one of which is now living in the national zoo of Peru. In order to protect this jaguar, Peruvians singled out a pitch of land in the zoo for it, where there are herds of cattle, sheep and deer for the jaguar to eat. Anyone who has visited the zoo praised it to be the &quot;Heaven of Tiger&quot;. However, strange enough, no one has ever seen the jaguar prey on the cattle and sheep. What we could see is its lying in its house eating and sleeping.</span></p>', 1, '2019-08-19 07:37:59', '2019-08-19 07:37:59'),
(3, 'Design Team', '', '<p>With supporting text below as a natural lead-in to additional content.</p>', 2, '2019-08-19 07:40:10', '2019-08-19 07:43:33');

-- --------------------------------------------------------

--
-- 表的结构 `qq_articles`
--

CREATE TABLE `qq_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '标题',
  `pic` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '图片',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '文章内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_articles`
--

INSERT INTO `qq_articles` (`id`, `title`, `pic`, `content`, `created_at`, `updated_at`) VALUES
(2, '标题标题标题标题标题标题标题标题标题标题标题标题', 'article/a3d5rLB50YAEPSrFrqcwkXBHctCJ8iLdsZQTB4gu.png', '<p>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</p>', '2019-08-19 07:48:13', '2019-08-19 07:48:13'),
(3, '标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题', 'article/qkq2p1mzZ2c6j5MhXJpghUjRWqrwJbs3c2C2WohU.png', '<p>标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题</p>', '2019-08-19 07:48:22', '2019-08-19 07:48:22'),
(4, 'biaobiaobiaobiaobiaobiaobiaobiao', 'article/C3uTEwRFiELvkYlw6rKAWmUeLI41rp9sFlMIkv9P.png', '<p>biaobiaobiaobiaobiaobiaobiaobiao</p>', '2019-08-20 19:45:13', '2019-08-20 19:45:13');

-- --------------------------------------------------------

--
-- 表的结构 `qq_banners`
--

CREATE TABLE `qq_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flag` tinyint(4) DEFAULT '1',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '标题',
  `desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '描述',
  `href` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '链接',
  `pic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '图片',
  `sort` int(11) DEFAULT '1' COMMENT '排序',
  `isshow` tinyint(4) DEFAULT '0' COMMENT '是否展示 0：不展示 1展示',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_banners`
--

INSERT INTO `qq_banners` (`id`, `flag`, `title`, `desc`, `href`, `pic`, `sort`, `isshow`, `created_at`, `updated_at`) VALUES
(1, 0, '千筑羽梦  雀鼎之峰', 'Thousands of feather dream bird tripod peak', 'http://qian.net/home/about/index', 'banner/N6azoaC1YbK2MG4ly0UMsdjAqYWyEryfb0UsEEob.png', 1, 1, '2019-08-19 07:53:05', '2019-08-19 07:53:05'),
(2, 0, '千筑羽梦&nbsp;雀鼎之峰', 'Thousands of feather dream bird tripod peak', 'http://qian.net/home/about/index', 'banner/64r0Pn9UJZJnekY304p0VDcFgPMoC8bEQBiYwMXp.png', 2, 1, '2019-08-19 07:53:33', '2019-08-19 07:53:33'),
(3, 0, '千筑羽梦&nbsp;雀鼎之峰', 'Thousands of feather dream bird tripod peak', 'http://qian.net/home/about/index', 'banner/0fQHjCitjYrouNFOkFgn7N94WUJwCytMM3BGsZYJ.png', 3, 1, '2019-08-19 07:54:02', '2019-08-19 07:54:02'),
(4, 1, 'Perfect blend with Extensive selection', 'Bespoke Luxury & Architecture Designing', NULL, 'banner/U2uOPrVEEWAQYG07NAGGzymuexfntcSrExe7iQvk.png', 1, 1, '2019-08-19 07:55:13', '2019-08-19 07:55:13'),
(5, 2, 'Perfect blend with Extensive selection', 'Bespoke Luxury & Architecture Designing', NULL, 'banner/LvKDGKtkUPR6RP1maFdrqRYjdpWZ2FwGPRgru43o.png', 3, 1, '2019-08-19 08:02:26', '2019-08-19 08:02:26');

-- --------------------------------------------------------

--
-- 表的结构 `qq_categories`
--

CREATE TABLE `qq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '分类名称',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '名称',
  `pic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '图片',
  `sort` int(11) DEFAULT '100' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_categories`
--

INSERT INTO `qq_categories` (`id`, `name`, `title`, `pic`, `sort`, `created_at`, `updated_at`) VALUES
(1, '商业设计', 'Business Design', 'category/nWCojwOm2RbfGzLoWIcaBAnT6aYIjoi1bdFCrYSG.png', 1, '2019-08-19 07:20:25', '2019-08-19 07:20:25'),
(2, '住宅设计', 'Housing Design', 'category/VwvN0T9KF6xZaTRqhnbfaWjZSKwToWbl7pslsT4q.png', 2, '2019-08-19 07:20:58', '2019-08-19 07:20:58'),
(3, '品牌策划', 'Brand Planning', 'category/O6xLIScENmwCFcZp0ERH05xss2yy546cDLOxapev.png', 3, '2019-08-19 07:21:26', '2019-08-19 07:21:26');

-- --------------------------------------------------------

--
-- 表的结构 `qq_configs`
--

CREATE TABLE `qq_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '配置标识',
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '配置名称',
  `config` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '配置信息',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_configs`
--

INSERT INTO `qq_configs` (`id`, `name`, `title`, `config`, `created_at`, `updated_at`) VALUES
(1, 'baseConfig', '基础配置', '{\"baseCompanyName\":\"\\u897f\\u5b89\\u5343\\u96c0\\u7a7a\\u95f4\\u8bbe\\u8ba1\\u6709\\u9650\\u516c\\u53f8\",\"baseCompanyAddr\":\"\\u897f\\u5b89\\u5e02\\u96c1\\u5854\\u533a\\u5510\\u5ef6\\u5357\\u8defi\\u90fd\\u4f1a3\\u53f7\\u697c3\\u5355\\u5143713.\",\"baseCompanyTel\":\"15929777753    17782658606    029-86385013\",\"baseCompanyEmail\":\"xakano@126.com\",\"baseCompanyNum\":\"ICP\\u590712050848\\u53f7\"}', '2019-08-19 08:56:46', '2019-08-19 09:35:52'),
(2, 'siteConfig', '网站配置', '{\"webName\":\"\\u5343\\u96c0\\u8bbe\\u8ba1\",\"webDomain\":\"http:\\/\\/www.bing.com\",\"webKeyword\":\"\\u5ba4\\u5185\\u8bbe\\u8ba1\\uff0c\\u5e7f\\u544a\\u8bbe\\u8ba1\",\"webDesc\":\"\\u4e13\\u4e1a\\u4ece\\u4e8b\\u5ba4\\u5185\\u8bbe\\u8ba1\"}', '2019-08-20 21:41:51', '2019-08-20 21:41:51');

-- --------------------------------------------------------

--
-- 表的结构 `qq_contacts`
--

CREATE TABLE `qq_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '姓名',
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '邮箱',
  `interested` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '感兴趣的',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '标题',
  `message` text COLLATE utf8mb4_unicode_ci COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `qq_designers`
--

CREATE TABLE `qq_designers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '名字',
  `subtitle` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '头衔',
  `pic` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '图片',
  `sort` int(11) DEFAULT '100' COMMENT '排序',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_designers`
--

INSERT INTO `qq_designers` (`id`, `name`, `subtitle`, `pic`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Tome', '设计总监', 'designer/yVznETQ7udEpRCgveZtniySqkhrZ1vHnF7UWQpxu.png', 1, '2019-08-19 07:49:06', '2019-08-19 07:49:06'),
(2, 'Alie', '设计总监', 'designer/hjb7lV6jOyFhRuhi1IHioOH7Gfr7PEj8MBJ0EV0Q.png', 2, '2019-08-19 07:49:31', '2019-08-19 07:49:31'),
(3, 'Kuke', '设计总监', 'designer/zjbR5G6xyL8jhR9epNIrxoZvWl1GxrqnaxleuYCH.png', 3, '2019-08-19 07:49:52', '2019-08-19 07:49:52'),
(4, 'Blue', '设计总监', 'designer/Sk4scCPmTDL8K8DWdqLerOM6jVnEor6cJCF69ZpY.png', 4, '2019-08-19 07:50:11', '2019-08-19 07:50:20'),
(5, 'Rene', '设计总监', 'designer/Ou2dX4SEQNaIMk6QjM8Kmq3VqdeFCdSCsRwjs4tx.png', 5, '2019-08-19 07:50:36', '2019-08-19 07:50:36'),
(6, 'dasd', '设计总监', 'designer/MP8T8E2Y4EGTQ2RnMnQJ5aDGfSD313PNiqvzLBRo.png', 6, '2019-08-19 07:50:51', '2019-08-19 07:50:51'),
(7, 'Rene', '设计总监', 'designer/nAWUrQwnYTNaqidtSQsYa4KoOza4H0YpiCFF4bCx.png', 7, '2019-08-19 07:51:08', '2019-08-19 07:51:08'),
(8, 'Rene', '设计总监', 'designer/SCCn7XcVQ6iGZDU6mJHG9GO0LyOZFfUrXggwACUw.png', 8, '2019-08-19 07:51:19', '2019-08-19 07:51:19'),
(9, 'Rene', '设计总监', 'designer/0KSiT8OTUZnQcuaG0s95sJFyEhpbilTPo4Esvk2U.png', 9, '2019-08-19 07:51:35', '2019-08-19 07:51:35'),
(10, 'dasd', '设计总监', 'designer/bYcFlv1ECOurR28cd2wmE3Dn5kPW2ir1rac7yrcH.png', 10, '2019-08-19 07:51:49', '2019-08-19 07:51:49');

-- --------------------------------------------------------

--
-- 表的结构 `qq_managers`
--

CREATE TABLE `qq_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '管理员账号',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '管理员密码',
  `status` tinyint(4) DEFAULT '0' COMMENT '管理员状态 0：禁用 1：待审核',
  `tel` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '手机号码',
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '邮箱',
  `ip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '登陆IP',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_managers`
--

INSERT INTO `qq_managers` (`id`, `username`, `password`, `status`, `tel`, `email`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'adminadmin', 'eyJpdiI6InpcL3FRV1Qramd5dUdmMEpYdkI3U0xRPT0iLCJ2YWx1ZSI6Ikh6WlJqVjd2R3NjQjllT3RuM1ZyVDJhUHY4OFVYTEQwSDhHbHpseDZhMjA9IiwibWFjIjoiYTQ4ODYzMWFiNzZhMDllOTMwNjQ1NWUxM2RhOGNkYjIwYjk4NjNiNDg3ZTIzNDlhMWIzY2Q3YzY2MjlmY2QwYyJ9', 1, '13000000000', 'admin@qq.com', '127.0.0.1', '2019-08-19 07:13:05', '2019-08-21 00:24:26');

-- --------------------------------------------------------

--
-- 表的结构 `qq_migrations`
--

CREATE TABLE `qq_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_migrations`
--

INSERT INTO `qq_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_13_032303_create_configs_table', 1),
(4, '2019_08_13_152533_create_articles_table', 1),
(5, '2019_08_14_065951_create_categories_table', 1),
(6, '2019_08_14_164458_create_products_table', 1),
(7, '2019_08_17_073459_create_designers_table', 1),
(8, '2019_08_17_084523_create_banners_table', 1),
(9, '2019_08_17_163646_create_managers_table', 1),
(10, '2019_08_18_161554_create_aboutuses_table', 1),
(11, '2019_08_21_040817_create_offers_table', 2),
(12, '2019_08_21_051632_create_contacts_table', 3);

-- --------------------------------------------------------

--
-- 表的结构 `qq_offers`
--

CREATE TABLE `qq_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '姓名',
  `tel` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '手机',
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '邮箱',
  `message` text COLLATE utf8mb4_unicode_ci COMMENT '留言信息',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `qq_password_resets`
--

CREATE TABLE `qq_password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `qq_products`
--

CREATE TABLE `qq_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` int(11) DEFAULT '0' COMMENT '外键',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '产品名称',
  `pic` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT '图片',
  `tuijian` int(11) DEFAULT '0' COMMENT '是否推荐',
  `flag` int(11) DEFAULT '0' COMMENT '标识 0:代表正常大小 1：横向占用两个图片大小 2：纵向占用两个图片大小',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `qq_products`
--

INSERT INTO `qq_products` (`id`, `cid`, `title`, `pic`, `tuijian`, `flag`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, '阳光小区', 'product/vxuRQG1bCk3IKw0rvEfbwWs9RMCjX68mRqP1SwYV.png', 1, 0, '<p>da s d<br/></p>', '2019-08-19 09:55:11', '2019-08-19 09:55:11'),
(2, 2, '阳光小区', 'product/lA9jlz3L3rbZaYofUHI0TNJ47BcMmmrUMiDX2GjB.png', 1, 0, '<p>da s d</p>', '2019-08-19 10:03:46', '2019-08-19 10:03:46'),
(3, 2, '阳光小区', 'product/Urxv8gWrDPtDvt8aGwMXgHCwKpB8n8zhDOgYjyWn.png', 1, 0, '<p>da s d</p>', '2019-08-19 10:04:11', '2019-08-19 10:04:11'),
(4, 2, '阳光小区', 'product/5L4EumIqaofB5tAdEWRdDrERU3qLK0zbdtI4NgQ6.png', 1, 2, '<p>dasd</p>', '2019-08-19 10:05:03', '2019-08-19 10:05:03'),
(5, 2, '阳光小区', 'product/N0aCujhAhQW7C0Kho25TgndpYFKuh7Z8FE8ALWIv.png', 1, 1, '<p>dasd</p>', '2019-08-19 10:05:42', '2019-08-19 10:05:42'),
(6, 2, '阳光小区', 'product/IeN7MUg9r3taAAxus7p1cIfoQK4aZBSe8LZecBle.png', 1, 0, '<p>ads<br/></p>', '2019-08-19 10:06:59', '2019-08-19 10:06:59'),
(7, 2, '阳光', 'product/MxyL5xiIiApGlRmuNo9PTM960pZsVQSgLkrxCryb.png', 1, 0, '<p>dsad</p>', '2019-08-19 10:07:24', '2019-08-19 10:07:24');

-- --------------------------------------------------------

--
-- 表的结构 `qq_users`
--

CREATE TABLE `qq_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转储表的索引
--

--
-- 表的索引 `qq_aboutuses`
--
ALTER TABLE `qq_aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_articles`
--
ALTER TABLE `qq_articles`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_banners`
--
ALTER TABLE `qq_banners`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_categories`
--
ALTER TABLE `qq_categories`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_configs`
--
ALTER TABLE `qq_configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `qq_configs_name_unique` (`name`),
  ADD UNIQUE KEY `qq_configs_title_unique` (`title`);

--
-- 表的索引 `qq_contacts`
--
ALTER TABLE `qq_contacts`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_designers`
--
ALTER TABLE `qq_designers`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_managers`
--
ALTER TABLE `qq_managers`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_migrations`
--
ALTER TABLE `qq_migrations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_offers`
--
ALTER TABLE `qq_offers`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_password_resets`
--
ALTER TABLE `qq_password_resets`
  ADD KEY `qq_password_resets_email_index` (`email`);

--
-- 表的索引 `qq_products`
--
ALTER TABLE `qq_products`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `qq_users`
--
ALTER TABLE `qq_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `qq_users_email_unique` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `qq_aboutuses`
--
ALTER TABLE `qq_aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `qq_articles`
--
ALTER TABLE `qq_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `qq_banners`
--
ALTER TABLE `qq_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `qq_categories`
--
ALTER TABLE `qq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `qq_configs`
--
ALTER TABLE `qq_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `qq_contacts`
--
ALTER TABLE `qq_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `qq_designers`
--
ALTER TABLE `qq_designers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `qq_managers`
--
ALTER TABLE `qq_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `qq_migrations`
--
ALTER TABLE `qq_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用表AUTO_INCREMENT `qq_offers`
--
ALTER TABLE `qq_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `qq_products`
--
ALTER TABLE `qq_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `qq_users`
--
ALTER TABLE `qq_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
