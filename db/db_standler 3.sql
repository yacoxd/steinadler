-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-02-2014 a las 23:29:58
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `steinadler`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_language`
--

CREATE TABLE IF NOT EXISTS `st_language` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_description` text COLLATE utf8_unicode_ci,
  `lang_sufix` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `st_language`
--

INSERT INTO `st_language` (`lang_id`, `lang_name`, `lang_description`, `lang_sufix`) VALUES
(1, 'Ingles', NULL, 'english'),
(2, 'Español', NULL, 'spanish'),
(3, 'Chino', NULL, 'chinese');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_location`
--

CREATE TABLE IF NOT EXISTS `st_location` (
  `lo_id` int(11) NOT NULL AUTO_INCREMENT,
  `lo_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_address` text COLLATE utf8_unicode_ci,
  `lo_phone1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_phone2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_phone3` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_phone4` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_email1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_email2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_user_created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_date_created` datetime DEFAULT NULL,
  `lo_user_modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lo_date_modified` datetime DEFAULT NULL,
  `lo_page` int(11) NOT NULL,
  PRIMARY KEY (`lo_id`),
  KEY `fk_locations_page_idx` (`lo_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `st_location`
--

INSERT INTO `st_location` (`lo_id`, `lo_name`, `lo_address`, `lo_phone1`, `lo_phone2`, `lo_phone3`, `lo_phone4`, `lo_email1`, `lo_email2`, `lo_user_created`, `lo_date_created`, `lo_user_modified`, `lo_date_modified`, `lo_page`) VALUES
(1, 'Twain', 'Taipei City, XinYi District XinYi Rd Sec.5, Nr.8, 14F Taipei Manhattan Building', '886 (02) 8758-2205', '886 (02) 8758-2333', NULL, NULL, ':service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:45:12', 13),
(2, 'Hong Kong', 'No 109-111 Gloucester Road, 14F, Tung Wai Commercial Building, Wanchai', '852 3752-1937', '852 3013-7020', NULL, NULL, 'service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:46:14', 13),
(3, 'Shanghai', '8F Yueda 889, No.1111 Chang Shou Rd. Jing''an district, Shanghai', '86 (0) 21-2230-1889', '86 (0) 21-2230-1777', NULL, NULL, 'service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:46:38', 13),
(4, 'Guatemala', 'Centro Empresarial Zona Pradera, Torre I, Nr. 1207', '502 2221-6154', '502 4212-0743', NULL, NULL, 'service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:47:03', 13),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(9, '台湾', '新北市淡水区邓公路8-9号1楼', '电话： 886 (02) 2626-4352', '传真：886 (02) 2623-5498', NULL, NULL, '电邮：service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 11:13:10', 15),
(10, '香港', '湾仔告士打道109～111号东惠商业大厦14楼', '电话： 852 3752-1937', '传真： 852 3013-7020', NULL, NULL, '电邮：service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 11:13:35', 15),
(11, '上海', '上海市静安区长寿路1111号悦达889中心8楼', '电话： 86 (0) 21-2230-1889', '传真： 86 (0) 21-2230-1777', NULL, NULL, '电邮：service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 11:13:58', 15),
(12, '危地马拉', 'Centro Empresarial Zona Pradera, Torre I, Nr. 1207', '电话：502 2221-6154', '手机： 502 4212-0743', NULL, NULL, '电邮：service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 11:14:18', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_login_attempt`
--

CREATE TABLE IF NOT EXISTS `st_login_attempt` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `at_ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `at_time` datetime DEFAULT NULL,
  `at_user` int(11) NOT NULL,
  PRIMARY KEY (`at_id`),
  KEY `fk_user_id__user_idx` (`at_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `st_login_attempt`
--

INSERT INTO `st_login_attempt` (`at_id`, `at_ip_address`, `at_time`, `at_user`) VALUES
(1, '127.0.0.1', '2014-01-05 04:53:25', 1),
(2, '127.0.0.1', '2014-01-05 04:57:21', 1),
(3, '127.0.0.1', '2014-01-16 11:30:29', 1),
(4, '127.0.0.1', '2014-01-21 06:15:20', 1),
(5, '127.0.0.1', '2014-01-21 06:15:25', 1),
(6, '127.0.0.1', '2014-02-09 06:11:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_new`
--

CREATE TABLE IF NOT EXISTS `st_new` (
  `new_id` int(11) NOT NULL AUTO_INCREMENT,
  `new_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_descripton` text COLLATE utf8_unicode_ci,
  `new_date` datetime DEFAULT NULL,
  `new_page` int(11) NOT NULL,
  `new_user_created` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_user_modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_date_created` datetime DEFAULT NULL,
  `new_date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`new_id`),
  KEY `fk_news_page_idx` (`new_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `st_new`
--

INSERT INTO `st_new` (`new_id`, `new_title`, `new_descripton`, `new_date`, `new_page`, `new_user_created`, `new_user_modified`, `new_date_created`, `new_date_modified`) VALUES
(4, NULL, 'sadfsad', '2014-01-04 00:00:00', 17, 'yacoxd', NULL, '2014-01-17 12:44:14', NULL),
(5, NULL, 'Our Guatemala City Branch is now ready for business. Check out our Guatemala City office; contact details in the CONTACT US link.', '2013-10-29 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:38:44', NULL),
(6, NULL, 'Lobster Season begins! Notice to our customers: Regulations on Lobster Fishing are being strictly followed by our direct suppliers and fisheries. Fresh Lobster is now available from Canada and the Caribbean. Contact us for more information. ', '2013-07-01 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:39:07', NULL),
(7, NULL, 'Our Shanghai Branch is now ready for business. Check out our Shanghai office contact details in the CONTACTS US link.', '2013-04-12 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:39:25', NULL),
(8, NULL, 'Our Logistics division website is up and running! Check it out at www.steinadlerlogistics.com ', '2013-02-02 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:39:45', NULL),
(9, NULL, '我们的危地马拉分公司开业。“联系我们”目录下的连接提供了我们危地马拉市分公司的详细联系方式。', '2013-10-29 00:00:00', 18, 'yacoxd', NULL, '2014-02-17 11:02:54', NULL),
(10, NULL, '龙虾季节到了！在此向我们的客户声明：我们的直接供应商和渔场严格地遵守了龙虾捕捞法规。来自加拿大与加勒比海地区的鲜龙虾现已上市！如欲了解更多，请与我们联系。 ', '2013-07-01 00:00:00', 18, 'yacoxd', NULL, '2014-02-17 11:03:27', NULL),
(11, NULL, '我们的上海分公司开业。“联系我们”目录下的连接提供了我们上海公司的详细联系方式。', '2013-04-12 00:00:00', 18, 'yacoxd', NULL, '2014-02-17 11:04:18', NULL),
(12, NULL, '我们的物流部网站完成并正式运作！请登录 www.steinadlerlogistics.com 获取详情。', '2013-02-02 00:00:00', 18, 'yacoxd', NULL, '2014-02-17 11:04:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_page`
--

CREATE TABLE IF NOT EXISTS `st_page` (
  `pa_id` int(11) NOT NULL AUTO_INCREMENT,
  `pa_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pa_tags` text COLLATE utf8_unicode_ci,
  `pa_description` text COLLATE utf8_unicode_ci,
  `pa_url` text COLLATE utf8_unicode_ci,
  `pa_language` int(11) NOT NULL,
  `pa_user_createed` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pa_user_modified` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pa_date_created` datetime DEFAULT NULL,
  `pa_date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`pa_id`),
  KEY `fk_page_language_idx` (`pa_language`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `st_page`
--

INSERT INTO `st_page` (`pa_id`, `pa_title`, `pa_tags`, `pa_description`, `pa_url`, `pa_language`, `pa_user_createed`, `pa_user_modified`, `pa_date_created`, `pa_date_modified`) VALUES
(1, 'Home', 'Home', 'Home ', 'home', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:37:12'),
(2, 'En 1', 'En 2', 'En 3', 'home', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-01-12 01:42:39'),
(3, '主页', '主页', '主页', 'home', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 11:00:42'),
(4, 'Industrial', 'INDUSTRIAL', 'INDUSTRIAL', 'industrial', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:41:32'),
(5, NULL, NULL, NULL, 'industrial', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(6, '工 业-', '工 业-', '工 业-', 'industrial', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 11:16:56'),
(7, 'Construction', 'Construction', 'Construction', 'construction', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:40:19'),
(8, NULL, NULL, NULL, 'construction', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(9, '建 筑*-', '建 筑*-', '建 筑*-', 'construction', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 11:16:52'),
(10, 'Agribusiness', 'Agribusiness', 'Agribusiness', 'agribusiness', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:43:17'),
(11, NULL, NULL, NULL, 'agribusiness', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(12, '农业综合业务', '农业综合业务', '农业综合业务', 'agribusiness', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 11:17:08'),
(13, 'CONTACT US', 'CONTACT US', 'CONTACT US', 'locations', 1, 'admin', 'yacoxd', NULL, '2014-02-17 10:44:37'),
(14, NULL, NULL, NULL, 'locations', 2, 'admin', 'yacoxd', NULL, NULL),
(15, '联系我们', '联系我们', '联系我们', 'locations', 3, 'admin', 'yacoxd', NULL, '2014-02-17 11:12:34'),
(16, 'About Us', 'About Us', 'About Us', 'about_us', 1, 'admin', 'yacoxd', NULL, '2014-02-17 10:37:46'),
(17, 'about e', 'about e', 'about e', 'about_us', 2, 'admin', 'yacoxd', NULL, '2014-01-16 12:27:43'),
(18, '关于我们', '关于我们', '关于我们', 'about_us', 3, 'admin', 'yacoxd', NULL, '2014-02-17 11:02:14'),
(19, 'Services', 'Services', 'Services', 'services', 1, 'admin', 'yacoxd', NULL, '2014-02-17 10:47:46'),
(20, NULL, NULL, NULL, 'services', 2, 'admin', 'yacoxd', NULL, NULL),
(21, 'Services', 'Services', 'Services', 'services', 3, 'admin', 'yacoxd', NULL, '2014-02-17 11:15:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_product`
--

CREATE TABLE IF NOT EXISTS `st_product` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pr_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `pr_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `pr_title_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `pr_alt_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `pr_page` int(11) NOT NULL,
  `pr_catalog` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pr_user_created` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pr_date_created` datetime DEFAULT NULL,
  `pr_user_modified` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pr_date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`pr_id`),
  KEY `fk_productos_page_idx` (`pr_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `st_product`
--

INSERT INTO `st_product` (`pr_id`, `pr_name`, `pr_description`, `pr_image`, `pr_title_image`, `pr_alt_image`, `pr_page`, `pr_catalog`, `pr_user_created`, `pr_date_created`, `pr_user_modified`, `pr_date_modified`) VALUES
(1, 'EQUIPMENT', '<p>We offer aA wide range of industrial equipment, including fForklifts, overhead cranes, agricultural machinery, truck tires, truck scales, trailer &amp; truck chassis and dump trucks. All of our products complying with the highest quality standards and good manufacturing practices.</p>', 'productos-equipment.png', 'EQUIPMENT', 'EQUIPMENT', 4, 'Certificacion_de_Cumplimiento_persona_individual_y_juridica.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:41:44'),
(2, 'ENERGY', '<p>We can provide our customers with tailor-made solutions when it comes to their power supply needs. We exclusively manage 4 lines of energy products: Independent solar generators and equipment, on-grid solar generators and equipment and fuel-based generators. Our 4th product is, also a generator but instead of energy, it can supply drinkable potable and drinking waterand clean water. &nbsp;</p>', 'productos-energy.png', 'Energy', 'Energy', 4, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:41:57'),
(3, 'SOLAR LIGHTING', '<p>We offer dDifferent sSolutions to fit your lighting needs, mostly focused on city and park lighting, solar sStreet lighting, commercial and industrial lLighting. Our efficient LED lamps are able to save up to 85 percent of the cost compared to conventional lighting solutions.</p>', 'productos-solar-lightning.png', 'SOLAR LIGHTING', 'SOLAR LIGHTING', 4, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:42:11'),
(4, 'Steel', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(5, 'Wire & Mesh', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(6, 'Interiors', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(7, '设备', '<p>各种各样的工业设备，包括叉车、千斤顶、农业机械、卡车轮胎、卡车衡、拖车与卡车底盘以及自卸卡车等。我们供应的所有产品均符合最高品质标准与良好生产规范。</p>', 'productos-equipment1.png', '设备', '设备', 6, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:09:03'),
(8, '能源 ', '<p>针对客户对能源的需求，我们可提供量身定做的解决方案。我们独家管理4条能源产品线：独立太阳能发电机与设备、并网太阳能发电机与设备、燃料驱动发电机；我们的第4种产品，同样是生成器，但不是产生能源，而是提供可饮用的洁净水源。</p>', 'productos-energy1.png', '能源 ', '能源 ', 6, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:09:30'),
(9, '太阳能照明', '<p>为满足您的照明需求，我们提供了各种方案：我们主要专注于城市与公园照明、太阳能街道照明、商业与工业照明等。与常规照明方案相比，我们所提供的高效LED灯可节省成本超过85%。</p>', 'productos-solar-lightning1.png', '太阳能照明', '太阳能照明', 6, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:10:05'),
(10, 'STEEL', '<p>A wide range of Steel products are made and, which can be totally customized to fit your needs. All of our Steel Products comply with the highest quality standards and good manufacturing practices.</p>', 'productos-steel.png', 'Steel', 'Steel', 7, 'Certificacion_de_Cumplimiento_persona_individual_y_juridica.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:40:36'),
(11, 'WIRE & MESH', '<p>Our different types of steel wire, galvanized wire, wire-mesh and heavy duty nails, including roofing nails and concrete nails. Every item is produced according to the highest manufacturing standards and ensuresing durable quality.</p>', 'productos-wire.png', 'WIRE & MESH', 'WIRE & MESH', 7, 'GRUPO-NUEVA-VIDA-EN-CRISTO-volante.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:40:52'),
(12, 'Interiors & Finishing ', '<p>We offer a wide selection of finishing products and interior design products, such as plywood, gypsum boards, roofing tiles, dry wall, wood veneered panels, PVC and fiberglass panels, PVC doors and special weather and sound insulating materials.</p>', 'productos-interiors.png', 'Interiors & Finishing ', 'Interiors & Finishing ', 7, 'Trabajo-10.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:41:07'),
(13, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL),
(16, '钢材', '<p>各种各样的钢材制品，可完全根据您的需求而定制。我们所供应的所有钢材产品均符合最高品质标准与良好生产规范。</p>', 'productos-steel1.png', '钢材', '钢材', 9, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:07:12'),
(17, '钢丝与丝网', '<p>各种类型的钢丝、镀锌丝、丝网以及重型钉子（包括屋顶钉与混凝土钉）。每类产品均以最高制造标准生产，其品质经久耐用。</p>', 'productos-wire1.png', '钢丝与丝网', '钢丝与丝网', 9, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:07:42'),
(18, '室内设计产品与成品', '<p>我们同时供应各种成品与室内设计产品，诸如 胶合板、石膏板、屋面瓦、干砌墙、木质饰面板、PVC与玻璃纤维板、PVC门以及特殊的抗天气侵袭与隔音材料。</p>', 'productos-interiors1.png', '室内设计产品与成品', '室内设计产品与成品', 9, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:08:14'),
(19, 'Timber and special woods', '<p>We run a responsible and sustainable business. Most of our wood products and timber is are exported from Nicaragua, one of the few countries which that allowspermit to exporting special wood types such as cocobolo, teak, and rosewood, among others. Sustainability and re-plantation are essential parts of our business, as well as. Also creating jobs and enhancing export volume for the country of Nicaragua. Our timber is used in Asia for a wide variety of finished quality products.&nbsp;&nbsp;</p>', 'productos-timber-and-special-woods.png', 'TIMBER AND SPECIAL WOODS', 'TIMBER AND SPECIAL WOODS', 10, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:43:39'),
(20, 'Meat & Seafood ', '<p>We can provide our customers with excellent meat types and seafood, all original from Central America and the Caribbean. One of our top-selling products is our Caribbean &ldquo;Spiny Lobster&rdquo; which can be sold whole lobster or tails only.&nbsp; Other product lines are also available, such as Spanish Pork cold cuts or &ldquo;Iberico&rdquo; ham, chicken paws as well as other chicken cuts, shrimp and other types of fish are also available. Please check out catalog for more information about our products.</p>', 'productos-meat.png', 'Meat & Seafood ', 'Meat & Seafood ', 10, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:43:56'),
(21, 'Coffee ', '<p>All of our coffee is exported from Guatemala to one of our Asian branches, where we take care of its roasting and quality assurance. Our business is focused on reaching the food service industry, with freshly roasted coffee according to their taste, type and packaging needs. We are proudly the first Latin-American coffee roaster established in Asia Pacific. For more information, please download our product catalog.</p>', 'productos-coffee.png', 'Coffee ', 'Coffee ', 10, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:44:11'),
(22, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL),
(25, '木材与特殊木料', '<p>我们的业务运营注重社会责任与可持续发展。我们的大部分木材产品与木材都来自尼加拉瓜，该国是少数几个允许出口特殊木料（以微凹黄檀、柚木、红木等为代表的特殊木料）的国家之一。可持续发展与再种植是我们运营的重要组成部分；通过此种方式，我们帮助尼加拉瓜创造就业机会并增加出口量。我们销往亚洲的木材包括各类质量优良的成品。&nbsp;</p>', 'productos-timber-and-special-woods1.png', '木材与特殊木料', '木材与特殊木料', 12, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:11:33'),
(26, '肉类与海产食品', '<p>我们可为客户提供优质的肉类与海产食品，所有这些产品均来自中美洲与加勒比海地区。&ldquo;大螯虾 &rdquo;（Spiny Lobster）是我们销量最高的产品之一，可整只销售或只销售尾部。其他产品还包括西班牙猪肉冷切块或伊比利(Iberico)火腿、鸡爪、鸡肉切块、虾 与其它鱼类。如需了解更多产品信息，请参看我们的产品目录。</p>', 'productos-meat1.png', '肉类与海产食品', '肉类与海产食品', 12, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:11:55'),
(27, '咖啡', '<p>本公司的所有咖啡原料均由危地马拉出口至本公司的亚洲分公司，并在亚洲进行烘焙与质量控制。 我们主要专注于饮食行业，根据其口味、类别以及包装需求而提供新鲜烘焙的咖啡。值得自豪的是，我们已成为亚太地区第一家拉丁美洲咖啡烘焙商。如欲获取更多信息，请下载我们的产品目录。</p>', 'productos-coffee1.png', '咖啡', '咖啡', 12, NULL, NULL, NULL, 'yacoxd', '2014-02-17 11:12:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_service`
--

CREATE TABLE IF NOT EXISTS `st_service` (
  `sv_id` int(11) NOT NULL AUTO_INCREMENT,
  `sv_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sv_description` text COLLATE utf8_unicode_ci,
  `sv_page` int(11) DEFAULT NULL,
  PRIMARY KEY (`sv_id`),
  KEY `fk_service_page_idx` (`sv_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `st_service`
--

INSERT INTO `st_service` (`sv_id`, `sv_title`, `sv_description`, `sv_page`) VALUES
(1, 'Cocoa (CC)', '<p>Exchange: ICE<br />Contract Size: 10 Metric Tons</p>', 19),
(2, 'Coffee (KC)', '<p>Exchange: ICE<br />Contract Size: 37,500 pounds</p>', 19),
(3, 'Corn (C)', '<p>Exchange: CBOT<br />Contract Size: 5,000 Bushels</p>', 19),
(4, 'Soybeans (S)', '<p>Exchange: CBOT<br />Contract Size: 5,000 Bushels</p>', 19),
(5, 'Sugar (SB)', '<p>Exchange: ICE<br />Contract Size: 112,000 Pounds</p>', 19),
(6, NULL, NULL, 20),
(7, NULL, NULL, 20),
(8, NULL, NULL, 20),
(9, NULL, NULL, 20),
(10, NULL, NULL, 20),
(11, NULL, NULL, 20),
(12, 'Cocoa (CC)', '<p>Exchange: ICE</p>\r\n<p>Contract Size: 10 Metric Tons</p>', 21),
(13, 'Coffee (KC)', '<p>Exchange: ICE</p>\r\n<p>Contract Size: 37,500 pounds</p>', 21),
(14, 'Corn (C)', '<p>Exchange: CBOT</p>\r\n<p>Contract Size: 5,000 Bushels</p>', 21),
(15, 'Soybeans (S)', '<p>Exchange: CBOT</p>\r\n<p>Contract Size: 5,000 Bushels</p>', 21),
(16, 'Sugar (SB)', '<p>Exchange: ICE</p>\r\n<p>Contract Size: 112,000 Pounds</p>', 21),
(17, 'Wheat (W)', '<p>Exchange: CBOT</p>\r\n<p>Contract Size: 5,000 Bushels</p>', 21),
(18, 'Wheat (W)', '<p>Exchange: CBOT<br />Contract Size: 5,000 Bushels</p>', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_text`
--

CREATE TABLE IF NOT EXISTS `st_text` (
  `text_id` int(11) NOT NULL AUTO_INCREMENT,
  `text_description` text COLLATE utf8_unicode_ci,
  `text_page` int(11) NOT NULL,
  `text_order` int(11) DEFAULT NULL,
  `text_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`text_id`),
  KEY `fk_text_page_idx` (`text_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Volcado de datos para la tabla `st_text`
--

INSERT INTO `st_text` (`text_id`, `text_description`, `text_page`, `text_order`, `text_type`) VALUES
(1, 'Steinadler is the German name for the  "Golden Eagle" species. ', 1, 1, 'INPUT'),
(2, 'En 1', 2, 1, 'INPUT'),
(3, '在德文中，Steinadler的意思是“金雕”', 3, 1, 'INPUT'),
(4, 'Their excellent accuracy for achieving what they aim for,  their sharp vision and their high altitude flight is what inspires us to accomplish goals and provide excellent service every day. ', 1, 2, 'INPUT'),
(5, 'En 2', 2, 2, 'INPUT'),
(6, '金雕命中目标的高度精准性、锐利的视野、飞行的高度等等，每日都激励着我们努力地实现目标并提供优质的服务。', 3, 2, 'INPUT'),
(7, 'INDUSTRIAL', 4, 1, 'INPUT'),
(8, NULL, 5, 1, 'INPUT'),
(9, '工 业-', 6, 1, 'INPUT'),
(10, '<p style="text-align: left;">At Steinadler we bring our customers a great selection of industrial supplies and materials. We offer a wide range and scale of products, including industrial motor vehicles, agricultural motor vehicles, forklifts, cranes and overhead cranes, solar and diesel energy plants and LED lighting among other electrical and industrial tools. We work hand in hand with major producers and plants in Asia, providing our service to industrial and individual customers. As part of our services, our company also conducts pre-shipment inspections in order to always provide a transparent, top-notch service and a good customer experience for the customer. Our company runs under a strong financial backupendorsement, giving customers assurance and flexibility on their shipping/purchasing/financing choices. Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.</p>', 4, 2, 'TEXTAREA'),
(11, NULL, 5, 2, 'TEXTAREA'),
(12, '<p>Steinadler还为客户提供各种工业产品与材料，包括工业用机动车、农业用机动车、叉车、吊车、千斤顶、太阳能与柴油驱动设备以及LED照明等其他电气与工业用具。我们与亚洲的主要生厂商与工厂携手合作，为我们的工业与个体客户提供服务。作为服务的一部分，我们还对货物进行起运前检验，以确保始终如一地提供一流的、透明的服务与客户体验。本公司的运营具有强大的财力后盾支持，可为客户提供保障，并可为客户提供更灵活的货运、采购、融资选择。请点击各个类别，以获取 更多关于我司产品线的信息。对于未能列出的产品或部分，请与我们联系，以获取更多信息与服务。</p>', 6, 2, 'TEXTAREA'),
(13, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 4, 3, 'TEXTAREA'),
(14, NULL, 5, 3, 'TEXTAREA'),
(15, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 6, 3, 'TEXTAREA'),
(16, 'BUILDING MATERIALS', 7, 1, 'INPUT'),
(17, NULL, 8, 1, 'INPUT'),
(18, '建 筑*', 9, 1, 'INPUT'),
(19, '<p>With our main export markets being Central America, South America and the Caribbean we are focused on supplying Land Developers and Distributors with the best and most durable building materials and building equipment. Not only have we partnered-up with some of the largest factories in Asia (some of them even listed as Ffortune 500 companies), but we also run our own logistics Logistics divisionDivision. As part of our services, our company also conducts pre-shipment inspections in order to always provide a transparent, top-notch service and customer experience. Our company runs under a strong financial backup, giving customers assurance and flexibility on their shipping/purchasing/financing choices. Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.</p>', 7, 2, 'TEXTAREA'),
(20, NULL, 8, 2, 'TEXTAREA'),
(21, '<p>我们的出口市场集中在中美洲、南美洲以及加勒比海地区，我们的主要业务是为土地开发商与经销商提供最优质、最耐用的建筑材料与建筑设备。我们不但与亚洲某些最大型的工厂合作（一些公司甚至名列《财富》500强），我们还独立运营的物流业务。作为服务的一部分，我们还对货物进行起运前检验，以确保始终如一地提供一流的、透明的服务与客户体验。本公司的运营具有强大的财力后盾支持，可为客户提供保障，并可为客户提供更灵活的货运、采购、融资选择。请点击各个类别，以获取 更多关于我司产品线的信息。对于未能列出的产品或部分，请与我们联系，以获取更多信息与服务。</p>', 9, 2, 'TEXTAREA'),
(22, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 7, 3, 'TEXTAREA'),
(23, NULL, 8, 3, 'TEXTAREA'),
(24, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 9, 3, 'TEXTAREA'),
(25, 'AGRIBUSINESS', 10, 1, 'INPUT'),
(26, NULL, 11, 1, 'INPUT'),
(27, '农业综合业务', 12, 1, 'INPUT'),
(28, '<p>Steinadler Agribusiness division was established due to the high demand of agricultural products in the Asia Pacific region and China. We are focused on 3 categories:</p>\r\n<p>1. Timber and special woods, which are essential for the furniture, flooring and veneer industries.</p>\r\n<p>2. Seafood and meat, which are an important commodity and a big part of nutrition.</p>\r\n<p>3. Coffee, which is exported from our own farms to our roasting facilities in Asia.</p>\r\n<p>Our agricultural products line is aimed to at the Asian markets which at the same time creates new jobs, wealth and better conditions for Latin American farmers and fisheries.&nbsp; As part of our services, we provide all the logistics chain and distribution from any of our Asian branches. Please click on each category for more information about our product lines. If a product is not listed, contact us for more details and services.</p>', 10, 2, 'TEXTAREA'),
(29, NULL, 11, 2, 'TEXTAREA'),
(30, '<p>针对亚太地区与中国对农业产品的巨大需求，Steinadler成立了农业综合业务部。我们的业务集中在以下3个类别：</p>\r\n<p>1. 家具、地板、装饰工业等必不可少的木材与特殊木料。</p>\r\n<p>2. &nbsp;作为重要商品与主要营养来源的海产食品与肉类。</p>\r\n<p>3. &nbsp;&nbsp;咖啡，从我司自营农场出口至亚洲的烘焙工厂。 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>我们的农产品的目标市场是亚洲，该产品线为拉丁美洲的农民与渔场创造了就业机会、财富以及更好的生活工作条件。作为服务的一部分，我们通过亚洲分公司提供必须的所有物流链 与经销服务。请点击各个类别，以获取更多关于我司产品线的信息。对于未能列出的产品或部分，请与我们联系，以获取更多信息与服务。</p>', 12, 2, 'TEXTAREA'),
(31, 'Please click on each category for more information about our product lines. If a product is not listed, contact us for more details and services.', 10, 3, 'TEXTAREA'),
(32, NULL, 11, 3, 'TEXTAREA'),
(33, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 12, 3, 'TEXTAREA'),
(34, 'ABOUT US', 16, 1, 'INPUT'),
(35, 'about e 1', 17, 1, 'INPUT'),
(36, '关于我们', 18, 1, 'INPUT'),
(37, '<p>Steinadler is the German name for the species "Golden Eagle" species. Their excellent accuracy for achieving what they are aim for,ing to, their sharp vision and their high altitude flight is are what inspires us each day to accomplish goals and provide an excellent service every&nbsp; day. Not only by being accurate and aiming for perfection on in what we do, but to offering the best quality products under the same terms. At Steinadler Co. we focus on providing tailored Solutions.</p>\r\n<h3>Our Locations</h3>\r\n<p>Our offices are strategically located in Taipei, Hong Kong, Shanghai and in Guatemala City. Taiwan is a country rich in tradition and culture but contrastinged with high Technology and excellent logistics. Hong Kong, is our entrance to Mainland China, a city full of diverse culture but most important, strong financial services. Shanghai, a place known for its strong industry and excellent manufacturing quality. Guatemala became our important hub for Central and Latin America, where we can provide after-sales service and excellent assistance to our customers.&nbsp; All of our office locations were chosen aiming to fully support our clients and partners with a wide range of services.</p>', 16, 2, 'TEXTAREA'),
(38, '<p>about e 2</p>', 17, 2, 'TEXTAREA'),
(39, '<p>在德文中，Steinadler的意思是&ldquo;金雕&rdquo;。金雕命中目标的高度精准性、锐利的视野、飞行的高度等等，每日都激励着我们努力地实现目标并提供优质的服务。除了对所作一切力求精准与完美，我们还致力于提供最优质的产品。在Steinadler Co.里，我们专注于为您提供量身定做的方案。</p>\r\n<h2><strong>我们的布局</strong></h2>\r\n<p>我们的办公地址战略性地分布在台北、香港、上海以及危地马拉市。台湾，一个具有丰富的传统内涵的国度，同时有着现代化高科技和优越物流条件的支持映衬。香港，一个多元文化绽放的城市，具有完善的金融服务业（这是最重要的），是我们通往中国大陆的入口。上海，以其强大的工业与优秀的制造质量而闻名遐迩。危地马拉市已经成为我们在中南美洲地区的重要枢纽，在此，我们为客户提供售后服务以及优质的援助服务。我们所有办公地址的选择，都是以为我们的客户与合作伙伴提供广泛的服务和全力的支持为目标。</p>', 18, 2, 'TEXTAREA'),
(72, 'OUR SERVICES', 19, 1, 'INPUT'),
(73, NULL, 20, 1, 'INPUT'),
(74, 'Services', 21, 1, 'INPUT'),
(75, '<p>We provide capital management services by investing ion agricultural commodities, which are traded at the New York and Chicago Mercantile Stock Exchanges. We aim to provide you with flexible investment plans which fit your projections and expectations. We minimize risk on your investments by managing your portfolio using firm strategies, and based on our wide broad experience in agricultural markets troughout over the years. We specialize in trading cocoa, coffee, sugar, corn and, wheat among other commodities.</p>', 19, 2, 'TEXTAREA'),
(76, NULL, 20, 2, 'TEXTAREA'),
(77, '<p>We provide capital management services by investing on agricultural commodities which are traded at the New York and Chicago Mercantile Exchanges. We aim to provide you with flexible investment plans which fit your projections and expectations. We minimize risk on your investments by managing your portfolio using firm strategies and based on our wide experience in agricultural markets troughout the years. We specialize in trading cocoa, coffee, sugar, corn, wheat among other commodities.</p>', 21, 2, 'TEXTAREA'),
(78, 'WHY COMMODITIES?', 19, 3, 'INPUT'),
(79, NULL, 20, 3, 'INPUT'),
(80, 'WHY COMMODITIES?', 21, 3, 'INPUT'),
(81, '<p>Through Over the past few years, we acquired vast experience by the trading of physical agricultural commodities, making us confident and able to obtain solid results. By knowing the markets, we can easily gain get an edgeadvantage and be able to trade in favorable conditions.</p>', 19, 4, 'TEXTAREA'),
(82, NULL, 20, 4, 'TEXTAREA'),
(83, '<p>Through the past few years, we acquired vast experience by the trading of physical agricultural commodities, making us confident and able to obtain solid results. By knowing the markets, we can easily gain advantage and be able to trade in favorable conditions.</p>', 21, 4, 'TEXTAREA'),
(84, 'WHY', 19, 5, 'INPUT'),
(85, NULL, 20, 5, 'INPUT'),
(86, '', 21, 5, 'INPUT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_user`
--

CREATE TABLE IF NOT EXISTS `st_user` (
  `us_id` int(11) NOT NULL,
  `us_first_name` varchar(250) DEFAULT NULL,
  `us_last_name` varchar(250) DEFAULT NULL,
  `us_description` text,
  `us_email` varchar(50) NOT NULL,
  `us_username` varchar(50) NOT NULL,
  `us_password` varchar(250) DEFAULT NULL,
  `us_key_password` text,
  `us_date_password_modified` datetime DEFAULT NULL,
  `us_status` varchar(250) DEFAULT NULL,
  `us_user_created` varchar(250) DEFAULT NULL,
  `us_date_created` varchar(250) DEFAULT NULL,
  `us_user_modified` varchar(250) DEFAULT NULL,
  `us_date_modified` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`us_id`),
  UNIQUE KEY `us_email_UNIQUE` (`us_email`),
  UNIQUE KEY `us_username_UNIQUE` (`us_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `st_user`
--

INSERT INTO `st_user` (`us_id`, `us_first_name`, `us_last_name`, `us_description`, `us_email`, `us_username`, `us_password`, `us_key_password`, `us_date_password_modified`, `us_status`, `us_user_created`, `us_date_created`, `us_user_modified`, `us_date_modified`) VALUES
(1, 'Abner', 'Tellez', NULL, 'atellezsazo@gmail.com', 'yacoxd', '$2a$08$AOmEunWrZa296eg6cZurf.i6Wp.D97WytnhcSW11oN2fIOnDRlK76', '47685526ec46d4ffdf8263816fd4f7e9', '2014-01-01 04:20:54', 'A', 'yacoxd', '2013-12-15', NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `st_location`
--
ALTER TABLE `st_location`
  ADD CONSTRAINT `fk_locations_page` FOREIGN KEY (`lo_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_login_attempt`
--
ALTER TABLE `st_login_attempt`
  ADD CONSTRAINT `fk_user_id__user` FOREIGN KEY (`at_user`) REFERENCES `st_user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_new`
--
ALTER TABLE `st_new`
  ADD CONSTRAINT `fk_news_page` FOREIGN KEY (`new_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_page`
--
ALTER TABLE `st_page`
  ADD CONSTRAINT `fk_page_language` FOREIGN KEY (`pa_language`) REFERENCES `st_language` (`lang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_product`
--
ALTER TABLE `st_product`
  ADD CONSTRAINT `fk_productos_page` FOREIGN KEY (`pr_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_service`
--
ALTER TABLE `st_service`
  ADD CONSTRAINT `fk_service_page` FOREIGN KEY (`sv_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_text`
--
ALTER TABLE `st_text`
  ADD CONSTRAINT `fk_text_page` FOREIGN KEY (`text_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
