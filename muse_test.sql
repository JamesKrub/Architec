-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `archive_bg`;
CREATE TABLE `archive_bg` (
  `bg_id` int(11) NOT NULL,
  `bg_name` text NOT NULL,
  `bg_desc` text NOT NULL,
  `bg_entry` text NOT NULL,
  `bg_lat` float NOT NULL,
  `bg_lon` float NOT NULL,
  `bg_number` text NOT NULL,
  `bg_tambon` text NOT NULL,
  `bg_ampher` text NOT NULL,
  `bg_city` text NOT NULL,
  `bg_postcode` text NOT NULL,
  `bg_tel` text NOT NULL,
  `bg_email` text NOT NULL,
  `bg_website` text NOT NULL,
  `bg_pic` text NOT NULL,
  `bg_picshow` int(11) NOT NULL,
  `bg_watermark` text NOT NULL,
  `bg_watermarkshow` int(11) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_bg` (`bg_id`, `bg_name`, `bg_desc`, `bg_entry`, `bg_lat`, `bg_lon`, `bg_number`, `bg_tambon`, `bg_ampher`, `bg_city`, `bg_postcode`, `bg_tel`, `bg_email`, `bg_website`, `bg_pic`, `bg_picshow`, `bg_watermark`, `bg_watermarkshow`) VALUES
(1,	'หอจดหมายเหตุยุวกาชาดไทย',	'สวทช. เป็นหน่วยงานของรัฐที่มิใช่ส่วนราชการ มีระบบการบริหารและนโยบายที่กำหนดโดยคณะกรรมการพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ ซึ่ง คณะรัฐมนตรีแต่งตั้งจากผู้ทรงคุณวุฒิในภาครัฐบาล และภาคเอกชนฝ่ายละเท่าๆ กัน มีคณะกรรมการบริหาร ซึ่งมีองค์ประกอบคล้ายคลึงกับ กวทช. คือ มีกรรมการ จากภาครัฐและภาคเอกชนอย่างละประมาณฝ่ายละเท่าๆ กัน และมีผู้อำนวยการ กวทช. เป็นประธานเพื่อให้เกิดความร่วมมืออย่างใกล้ชิด ในการกำหนดนโยบาย ทิศทางการพัฒนาการให้บริการทางเทคนิค และการถ่ายทอดเทคโนโลยีระหว่างภาครัฐ และเอกชนภารกิจหลักของเนคเทค ได้แก่การให้ทุนสนับสนุนการวิจัยในภาครัฐ การดำเนินการวิจัยเอง เพื่อเร่งให้ผลงานวิจัยเกิดผลจริงในภาคอุตสาหกรรม การให้บริการเพื่อสร้าง ความแข็งแกร่งให้แก่อุตสาหกรรมอิเล็กทรอนิกส์ คอมพิวเตอร์ โทรคมนาคม และสารสนเทศ และการทำหน้าที่เป็นสำนักงานเลขานุการคณะกรรมการเทคโนโลยีสารสนเทศแห่งชาติ ตั้งแต่ พ.ศ. 2539 เป็นต้นมา เนคเทคได้รับพระมหากรุณาธิคุณจากสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี ให้ดำเนินโครงการเครือข่ายกาญจนาภิเษก เพื่อกระจายความรู้ แก่ประชาชน และเป็นสำนักงานเลขานุการโครงการเทคโนโลยีสารสนเทศตามพระราชดำริฯ เพื่อประยุกต์ใช้ไอทีกับสังคมไทย โดยเน้นนักเรียนในชนบท ผู้พิการ และเด็กที่ป่วยในโรงพยาบาล',	'กรุณาติดต่อสอบถามล่วงหน้า',	0,	0,	'',	'',	'',	'1',	'',	'',	'',	'',	'2016-08-31_04-37-51_m79_eiei.jpg',	0,	'watermark.png',	0);

DROP TABLE IF EXISTS `archive_category`;
CREATE TABLE `archive_category` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` text NOT NULL,
  `cat1_parent` int(11) NOT NULL,
  PRIMARY KEY (`cat1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_category` (`cat1_id`, `cat1_name`, `cat1_parent`) VALUES
(120,	'วัสดุคอมพิวเตอร์',	0),
(121,	'International album',	0),
(122,	'โปสเตอร์/แผ่นพับ/แผนที่',	0),
(123,	'ภาพ/สไลด์',	0),
(38,	'สิ่งพิมพ์',	0),
(129,	'เอกสารสำคัญx',	0),
(131,	'rwerwe',	0),
(133,	'333',	0),
(134,	'19',	0),
(135,	'19',	0),
(136,	'r',	0),
(138,	'Test01',	0);

DROP TABLE IF EXISTS `archive_category_lv2`;
CREATE TABLE `archive_category_lv2` (
  `ac2_id` int(4) NOT NULL AUTO_INCREMENT,
  `ac2_name` varchar(50) NOT NULL,
  `ac1_id` int(11) NOT NULL,
  PRIMARY KEY (`ac2_id`),
  KEY `ac1_id` (`ac1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `archive_category_lv2` (`ac2_id`, `ac2_name`, `ac1_id`) VALUES
(1,	'คำถาม 120',	120),
(2,	'ทดสอบ 38',	38),
(3,	'ดีๆ',	129),
(5,	'',	129),
(6,	'พพพพพพ',	121),
(7,	'พพพ',	120),
(8,	'0',	120),
(9,	'1',	121),
(10,	'1',	122),
(11,	'1',	123),
(12,	'1',	38),
(13,	'1',	129),
(14,	'ddd',	120),
(15,	'dsds',	122),
(16,	'',	131),
(17,	'ปปป',	120),
(18,	'2222',	133),
(19,	'19.1',	134),
(20,	'',	120),
(21,	'ขนาด 3.5',	137),
(22,	'กหฟกห',	120),
(23,	'MOS',	138),
(24,	'Day',	138);

DROP TABLE IF EXISTS `archive_category_lv3`;
CREATE TABLE `archive_category_lv3` (
  `ac3_id` int(5) NOT NULL AUTO_INCREMENT,
  `ac3_name` varchar(50) NOT NULL,
  `ac2_id` int(4) NOT NULL,
  PRIMARY KEY (`ac3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `archive_category_lv3` (`ac3_id`, `ac3_name`, `ac2_id`) VALUES
(1,	'Mini CD',	1),
(2,	'micro CD',	1),
(5,	'mos01',	23),
(6,	'Day01',	24);

DROP TABLE IF EXISTS `archive_menu`;
CREATE TABLE `archive_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` text NOT NULL,
  `menu_pic` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_menu` (`menu_id`, `menu_name`, `menu_pic`) VALUES
(1,	'ประวัติความเป็นมา',	'1050588516IMG_0192.jpg'),
(2,	'วัตถุจัดแสดง',	'1968565083E9078183-13.jpg'),
(3,	'ข่าวประชาสัมพันธ์',	'1896024605newspaperXSmall.jpg'),
(4,	'ข้อมูลสำหรับผู้เยี่ยมชม',	'2131085549information.jpg');

DROP TABLE IF EXISTS `archive_news`;
CREATE TABLE `archive_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_detail` text NOT NULL,
  `news_date` date DEFAULT NULL,
  `news_publish` int(11) NOT NULL,
  `news_ref_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_news` (`news_id`, `news_title`, `news_detail`, `news_date`, `news_publish`, `news_ref_link`) VALUES
(34,	'ข่าวใหม่',	'หหหหหห',	'0000-00-00',	1,	''),
(35,	'ข่าว',	'ข่าว1',	'0000-00-00',	1,	''),
(36,	'aaa',	'aaaa',	'0000-00-00',	0,	''),
(41,	'aaaqqq',	'qqq',	'0000-00-00',	0,	'qqq'),
(44,	'เดินเล่น',	'lll',	NULL,	1,	NULL);

DROP TABLE IF EXISTS `archive_object`;
CREATE TABLE `archive_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_datecreate` text NOT NULL,
  `obj_level` text NOT NULL,
  `obj_extent` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_bio` text NOT NULL,
  `obj_dateacc` text NOT NULL,
  `obj_history` text NOT NULL,
  `obj_acquis` text NOT NULL,
  `obj_scope` text NOT NULL,
  `obj_appraisal` text NOT NULL,
  `obj_accruals` text NOT NULL,
  `obj_arrangement` text NOT NULL,
  `obj_legal` text NOT NULL,
  `obj_condition` text NOT NULL,
  `obj_copyright` text NOT NULL,
  `obj_lang` text NOT NULL,
  `obj_physicals` text NOT NULL,
  `obj_aids` text NOT NULL,
  `obj_location` text NOT NULL,
  `obj_existence` text NOT NULL,
  `obj_related` text NOT NULL,
  `obj_associated` text NOT NULL,
  `obj_pubnote` text NOT NULL,
  `obj_note` text NOT NULL,
  `obj_date` text NOT NULL,
  `obj_category` int(11) NOT NULL,
  `obj_access` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `obj_keyword` text NOT NULL,
  `obj_approve` int(11) NOT NULL,
  `obj_relation` text NOT NULL,
  `obj_display` int(11) NOT NULL,
  `obj_location_display` int(11) NOT NULL,
  `obj_existence_display` int(11) NOT NULL,
  `obj_creator_display` int(11) NOT NULL,
  `obj_bio_display` int(11) NOT NULL,
  `obj_dateacc_display` int(11) NOT NULL,
  `obj_history_display` int(11) NOT NULL,
  `obj_acquis_display` int(11) NOT NULL,
  `obj_downloadfile` text NOT NULL,
  `obj_download` int(11) NOT NULL,
  `obj_countdownload` int(11) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_object` (`obj_id`, `obj_refcode`, `obj_title`, `obj_datecreate`, `obj_level`, `obj_extent`, `obj_creator`, `obj_bio`, `obj_dateacc`, `obj_history`, `obj_acquis`, `obj_scope`, `obj_appraisal`, `obj_accruals`, `obj_arrangement`, `obj_legal`, `obj_condition`, `obj_copyright`, `obj_lang`, `obj_physicals`, `obj_aids`, `obj_location`, `obj_existence`, `obj_related`, `obj_associated`, `obj_pubnote`, `obj_note`, `obj_date`, `obj_category`, `obj_access`, `user_id`, `obj_keyword`, `obj_approve`, `obj_relation`, `obj_display`, `obj_location_display`, `obj_existence_display`, `obj_creator_display`, `obj_bio_display`, `obj_dateacc_display`, `obj_history_display`, `obj_acquis_display`, `obj_downloadfile`, `obj_download`, `obj_countdownload`, `obj_cate2`, `obj_cate3`) VALUES
(580,	'RCY_A002001_003_79',	'อาคารอบรม ที่ศูนย์ผิน แจ่มวิชาสอน',	'13-13-2017',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'อาคารอบรม ที่ศูนย์ผิน แจ่มวิชาสอน',	'',	'',	'',	'',	'',	'',	'',	'2017-09-08',	123,	1,	1,	'อบรม, ศูนย์ผิน, ศูนย์ผินแจ่มวิชาสอน',	1,	'',	1,	0,	0,	0,	0,	0,	0,	0,	'',	0,	0,	0,	0),
(578,	'G001-1',	'หนังสือแลกเปลี่ยน JRC',	'--',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'หนังสือแลกเปลี่ยนระหว่างยุวกาชาด JRC',	'',	'',	'',	'',	'',	'',	'',	'0000-00-00',	121,	1,	1,	'หนังสือ, JRC, ญี่ปุ่น',	1,	'',	0,	0,	0,	0,	0,	0,	0,	0,	'',	0,	0,	0,	0),
(585533,	'aaaa',	'aaaa',	'28-09-2017',	'',	'asd',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'asd',	'',	'',	'',	'',	'',	'',	'',	'2017-09-11',	122,	2,	1,	'as',	1,	'',	1,	1,	1,	1,	1,	1,	1,	1,	'0',	0,	0,	15,	0),
(585532,	'asdasdasd',	'asd',	'26-09-2017',	'',	'sd',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'asda',	'',	'',	'',	'',	'',	'',	'',	'2017-09-11',	121,	1,	1,	'asd',	1,	'',	1,	1,	0,	1,	1,	1,	0,	1,	'0',	0,	0,	9,	0);

DROP TABLE IF EXISTS `archive_pic`;
CREATE TABLE `archive_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(1,	'2016-06-13_16-20-49.jpg',	'Thumb_2016-06-13_16-20-46.jpg',	'Thumb2_2016-06-13_16-20-46.jpg',	0,	'RCY_A002001_003_106',	0,	'<p>งานชุมนุม</p>\r\n',	0,	0),
(2,	'2016-06-13_16-20-52.jpg',	'Thumb_2016-06-13_16-20-49.jpg',	'Thumb2_2016-06-13_16-20-49.jpg',	0,	'RCY_A002001_003_106',	0,	'',	0,	0),
(3,	'2016-06-13_16-20-56.jpg',	'Thumb_2016-06-13_16-20-52.jpg',	'Thumb2_2016-06-13_16-20-53.jpg',	0,	'RCY_A002001_003_106',	0,	'',	0,	0),
(5,	'2016-06-13_16-21-03.jpg',	'Thumb_2016-06-13_16-20-59.jpg',	'Thumb2_2016-06-13_16-21-00.jpg',	0,	'RCY_A002001_003_106',	1,	'',	0,	0),
(6,	'2016-06-13_16-21-06.jpg',	'Thumb_2016-06-13_16-21-03.jpg',	'Thumb2_2016-06-13_16-21-03.jpg',	0,	'RCY_A002001_003_106',	0,	'',	0,	0),
(7,	'2016-06-13_16-21-09.jpg',	'Thumb_2016-06-13_16-21-06.jpg',	'Thumb2_2016-06-13_16-21-06.jpg',	0,	'RCY_A002001_003_106',	0,	'',	0,	0),
(8,	'2016-07-12_10-20-30.jpg',	'Thumb_2016-07-12_10-20-27.jpg',	'Thumb2_2016-07-12_10-20-27.jpg',	0,	'G001-1',	0,	'',	2,	0),
(9,	'2016-07-12_10-20-34.jpg',	'Thumb_2016-07-12_10-20-30.jpg',	'Thumb2_2016-07-12_10-20-31.jpg',	0,	'G001-1',	0,	'',	1,	0),
(10,	'2016-07-12_10-20-37.jpg',	'Thumb_2016-07-12_10-20-34.jpg',	'Thumb2_2016-07-12_10-20-34.jpg',	0,	'G001-1',	0,	'',	3,	0),
(11,	'2016-07-12_10-20-40.jpg',	'Thumb_2016-07-12_10-20-37.jpg',	'Thumb2_2016-07-12_10-20-37.jpg',	0,	'G001-1',	0,	'',	4,	0),
(12,	'2016-07-12_10-20-43.jpg',	'Thumb_2016-07-12_10-20-40.jpg',	'Thumb2_2016-07-12_10-20-40.jpg',	0,	'G001-1',	0,	'',	5,	0),
(13,	'2016-07-12_10-20-47.jpg',	'Thumb_2016-07-12_10-20-44.jpg',	'Thumb2_2016-07-12_10-20-44.jpg',	0,	'G001-1',	0,	'',	6,	0),
(14,	'2016-07-12_10-20-50.jpg',	'Thumb_2016-07-12_10-20-47.jpg',	'Thumb2_2016-07-12_10-20-47.jpg',	0,	'G001-1',	0,	'',	7,	0),
(15,	'2016-07-12_10-20-53.jpg',	'Thumb_2016-07-12_10-20-50.jpg',	'Thumb2_2016-07-12_10-20-50.jpg',	0,	'G001-1',	0,	'',	8,	0),
(16,	'2016-07-12_10-20-57.jpg',	'Thumb_2016-07-12_10-20-53.jpg',	'Thumb2_2016-07-12_10-20-54.jpg',	0,	'G001-1',	0,	'',	9,	0),
(17,	'2016-07-12_10-21-00.jpg',	'Thumb_2016-07-12_10-20-57.jpg',	'Thumb2_2016-07-12_10-20-57.jpg',	0,	'G001-1',	0,	'',	10,	0),
(18,	'2016-07-12_10-21-03.jpg',	'Thumb_2016-07-12_10-21-00.jpg',	'Thumb2_2016-07-12_10-21-00.jpg',	0,	'G001-1',	0,	'',	11,	0),
(19,	'2016-07-12_10-21-07.jpg',	'Thumb_2016-07-12_10-21-03.jpg',	'Thumb2_2016-07-12_10-21-03.jpg',	0,	'G001-1',	0,	'',	12,	0),
(20,	'2016-07-12_10-21-10.jpg',	'Thumb_2016-07-12_10-21-07.jpg',	'Thumb2_2016-07-12_10-21-07.jpg',	0,	'G001-1',	0,	'',	13,	0),
(21,	'2016-07-12_10-21-13.jpg',	'Thumb_2016-07-12_10-21-10.jpg',	'Thumb2_2016-07-12_10-21-10.jpg',	0,	'G001-1',	0,	'',	14,	0),
(22,	'2016-07-12_10-21-16.jpg',	'Thumb_2016-07-12_10-21-13.jpg',	'Thumb2_2016-07-12_10-21-13.jpg',	0,	'G001-1',	0,	'',	15,	0),
(23,	'2016-07-12_10-21-20.jpg',	'Thumb_2016-07-12_10-21-16.jpg',	'Thumb2_2016-07-12_10-21-17.jpg',	0,	'G001-1',	0,	'',	16,	0),
(24,	'2016-07-12_10-21-23.jpg',	'Thumb_2016-07-12_10-21-20.jpg',	'Thumb2_2016-07-12_10-21-20.jpg',	0,	'G001-1',	0,	'',	17,	0),
(25,	'2016-07-12_10-21-26.jpg',	'Thumb_2016-07-12_10-21-23.jpg',	'Thumb2_2016-07-12_10-21-23.jpg',	0,	'G001-1',	1,	'',	20,	0),
(26,	'2016-07-12_10-21-29.jpg',	'Thumb_2016-07-12_10-21-26.jpg',	'Thumb2_2016-07-12_10-21-26.jpg',	0,	'G001-1',	0,	'',	18,	0),
(27,	'2016-07-12_10-21-33.jpg',	'Thumb_2016-07-12_10-21-30.jpg',	'Thumb2_2016-07-12_10-21-30.jpg',	0,	'G001-1',	0,	'',	19,	0),
(28,	'2016-07-21_09-01-44.jpg',	'Thumb_2016-07-21_09-01-41.jpg',	'Thumb2_2016-07-21_09-01-41.jpg',	0,	'RCY_A002001_003_92',	1,	'',	0,	0),
(29,	'2016-07-21_09-01-48.jpg',	'Thumb_2016-07-21_09-01-45.jpg',	'Thumb2_2016-07-21_09-01-45.jpg',	0,	'RCY_A002001_003_92',	0,	'',	0,	0),
(30,	'2016-07-21_09-04-26.jpg',	'Thumb_2016-07-21_09-04-23.jpg',	'Thumb2_2016-07-21_09-04-23.jpg',	0,	'RCY_A002001_003_79',	1,	'',	0,	1),
(31,	'2016-07-21_09-04-29.jpg',	'Thumb_2016-07-21_09-04-26.jpg',	'Thumb2_2016-07-21_09-04-26.jpg',	0,	'RCY_A002001_003_79',	0,	'',	0,	0),
(32,	'2016-07-21_09-11-21.jpg',	'Thumb_2016-07-21_09-11-18.jpg',	'Thumb2_2016-07-21_09-11-18.jpg',	0,	'RCY_A002001_003_44',	1,	'',	0,	1),
(33,	'2016-07-21_09-15-07.jpg',	'Thumb_2016-07-21_09-15-04.jpg',	'Thumb2_2016-07-21_09-15-04.jpg',	0,	'RCY_A002001_003_56',	0,	'',	0,	0),
(34,	'2016-07-21_09-15-10.jpg',	'Thumb_2016-07-21_09-15-07.jpg',	'Thumb2_2016-07-21_09-15-07.jpg',	0,	'RCY_A002001_003_56',	1,	'',	0,	0),
(35,	'2016-07-21_09-15-13.jpg',	'Thumb_2016-07-21_09-15-10.jpg',	'Thumb2_2016-07-21_09-15-10.jpg',	0,	'RCY_A002001_003_56',	0,	'',	0,	0),
(36,	'2016-07-21_09-15-17.jpg',	'Thumb_2016-07-21_09-15-13.jpg',	'Thumb2_2016-07-21_09-15-14.jpg',	0,	'RCY_A002001_003_56',	0,	'',	0,	0),
(37,	'2016-07-21_09-20-32.jpg',	'Thumb_2016-07-21_09-20-29.jpg',	'Thumb2_2016-07-21_09-20-29.jpg',	0,	'RCY_A002001_003_59',	0,	'',	7,	0),
(38,	'2016-07-21_09-20-36.jpg',	'Thumb_2016-07-21_09-20-32.jpg',	'Thumb2_2016-07-21_09-20-33.jpg',	0,	'RCY_A002001_003_59',	0,	'',	11,	0),
(39,	'2016-07-21_09-20-39.jpg',	'Thumb_2016-07-21_09-20-36.jpg',	'Thumb2_2016-07-21_09-20-36.jpg',	0,	'RCY_A002001_003_59',	0,	'',	2,	1),
(40,	'2016-07-21_09-20-43.jpg',	'Thumb_2016-07-21_09-20-40.jpg',	'Thumb2_2016-07-21_09-20-40.jpg',	0,	'RCY_A002001_003_59',	0,	'',	3,	0),
(41,	'2016-07-21_09-20-46.jpg',	'Thumb_2016-07-21_09-20-43.jpg',	'Thumb2_2016-07-21_09-20-43.jpg',	0,	'RCY_A002001_003_59',	0,	'',	4,	1),
(42,	'2016-07-21_09-20-50.jpg',	'Thumb_2016-07-21_09-20-47.jpg',	'Thumb2_2016-07-21_09-20-47.jpg',	0,	'RCY_A002001_003_59',	0,	'',	8,	0),
(43,	'2016-07-21_09-20-54.jpg',	'Thumb_2016-07-21_09-20-50.jpg',	'Thumb2_2016-07-21_09-20-51.jpg',	0,	'RCY_A002001_003_59',	0,	'',	0,	0),
(44,	'2016-07-21_09-20-57.jpg',	'Thumb_2016-07-21_09-20-54.jpg',	'Thumb2_2016-07-21_09-20-54.jpg',	0,	'RCY_A002001_003_59',	0,	'',	1,	0),
(45,	'2016-07-21_09-21-01.jpg',	'Thumb_2016-07-21_09-20-57.jpg',	'Thumb2_2016-07-21_09-20-58.jpg',	0,	'RCY_A002001_003_59',	0,	'',	5,	0),
(46,	'2016-07-21_09-21-04.jpg',	'Thumb_2016-07-21_09-21-01.jpg',	'Thumb2_2016-07-21_09-21-01.jpg',	0,	'RCY_A002001_003_59',	0,	'',	6,	0),
(47,	'2016-07-21_09-21-07.jpg',	'Thumb_2016-07-21_09-21-04.jpg',	'Thumb2_2016-07-21_09-21-04.jpg',	0,	'RCY_A002001_003_59',	0,	'',	9,	0),
(48,	'2016-07-21_09-21-11.jpg',	'Thumb_2016-07-21_09-21-08.jpg',	'Thumb2_2016-07-21_09-21-08.jpg',	0,	'RCY_A002001_003_59',	0,	'',	10,	0),
(49,	'2016-07-21_09-21-14.jpg',	'Thumb_2016-07-21_09-21-11.jpg',	'Thumb2_2016-07-21_09-21-11.jpg',	0,	'RCY_A002001_003_59',	0,	'',	12,	0),
(50,	'2016-07-21_09-21-18.jpg',	'Thumb_2016-07-21_09-21-15.jpg',	'Thumb2_2016-07-21_09-21-15.jpg',	0,	'RCY_A002001_003_59',	0,	'',	13,	0),
(51,	'2016-07-21_09-21-21.jpg',	'Thumb_2016-07-21_09-21-18.jpg',	'Thumb2_2016-07-21_09-21-18.jpg',	0,	'RCY_A002001_003_59',	0,	'',	14,	0),
(52,	'2016-07-21_09-21-25.jpg',	'Thumb_2016-07-21_09-21-22.jpg',	'Thumb2_2016-07-21_09-21-22.jpg',	0,	'RCY_A002001_003_59',	0,	'',	15,	0),
(53,	'2016-07-21_09-21-29.jpg',	'Thumb_2016-07-21_09-21-25.jpg',	'Thumb2_2016-07-21_09-21-26.jpg',	0,	'RCY_A002001_003_59',	0,	'',	17,	0),
(54,	'2016-07-21_09-21-32.jpg',	'Thumb_2016-07-21_09-21-29.jpg',	'Thumb2_2016-07-21_09-21-29.jpg',	0,	'RCY_A002001_003_59',	0,	'',	18,	1),
(55,	'2016-07-21_09-21-36.jpg',	'Thumb_2016-07-21_09-21-32.jpg',	'Thumb2_2016-07-21_09-21-33.jpg',	0,	'RCY_A002001_003_59',	0,	'',	19,	0),
(56,	'2016-07-21_09-21-39.jpg',	'Thumb_2016-07-21_09-21-36.jpg',	'Thumb2_2016-07-21_09-21-36.jpg',	0,	'RCY_A002001_003_59',	0,	'',	20,	0),
(58,	'2016-07-21_09-21-47.jpg',	'Thumb_2016-07-21_09-21-44.jpg',	'Thumb2_2016-07-21_09-21-44.jpg',	0,	'RCY_A002001_003_59',	0,	'',	21,	0),
(59,	'2016-07-21_09-21-51.jpg',	'Thumb_2016-07-21_09-21-47.jpg',	'Thumb2_2016-07-21_09-21-48.jpg',	0,	'RCY_A002001_003_59',	1,	'',	16,	1),
(63,	'',	'',	'',	0,	'RCY_A002001_003_106',	0,	'',	0,	0),
(70,	'2016-08-25_05-55-43.jpg',	'Thumb_2016-08-25_05-55-39.jpg',	'Thumb2_2016-08-25_05-55-40.jpg',	0,	'C7584',	0,	'',	0,	0),
(86,	'2016-08-31_05-11-57_m79_eiei.jpg',	'Thumb_2016-08-31_05-11-54_m79_eiei.jpg',	'Thumb_2016-08-31_05-11-54_m79_eiei.jpg',	0,	'M79_ABC_123',	0,	'',	0,	0),
(73,	'2016-08-25_05-55-45.jpg',	'Thumb_2016-08-25_05-55-42.jpg',	'Thumb2_2016-08-25_05-55-42.jpg',	0,	'C7584',	0,	'',	0,	0),
(74,	'2016-08-25_05-55-45.jpg',	'Thumb_2016-08-25_05-55-42.jpg',	'Thumb2_2016-08-25_05-55-42.jpg',	0,	'C7584',	0,	'',	0,	0),
(75,	'2016-08-25_05-56-01.jpg',	'Thumb_2016-08-25_05-55-58.jpg',	'Thumb2_2016-08-25_05-55-58.jpg',	0,	'C7584',	0,	'',	0,	0),
(76,	'2016-08-25_05-56-05.jpg',	'Thumb_2016-08-25_05-56-02.jpg',	'Thumb2_2016-08-25_05-56-02.jpg',	0,	'C7584',	0,	'',	0,	0),
(77,	'2016-08-25_05-56-08.jpg',	'Thumb_2016-08-25_05-56-05.jpg',	'Thumb2_2016-08-25_05-56-05.jpg',	0,	'C7584',	0,	'',	0,	0),
(78,	'2016-08-25_05-56-11.jpg',	'Thumb_2016-08-25_05-56-08.jpg',	'Thumb2_2016-08-25_05-56-08.jpg',	0,	'C7584',	0,	'',	0,	0),
(79,	'2016-08-25_05-56-15.jpg',	'Thumb_2016-08-25_05-56-12.jpg',	'Thumb2_2016-08-25_05-56-12.jpg',	0,	'C7584',	0,	'',	0,	0),
(80,	'2016-08-25_05-56-18.jpg',	'Thumb_2016-08-25_05-56-15.jpg',	'Thumb2_2016-08-25_05-56-15.jpg',	0,	'C7584',	0,	'',	0,	0),
(81,	'2016-08-25_05-56-22.jpg',	'Thumb_2016-08-25_05-56-18.jpg',	'Thumb2_2016-08-25_05-56-19.jpg',	0,	'C7584',	0,	'',	0,	0),
(82,	'',	'Thumb_2016-08-25_05-56-22.jpg',	'Thumb2_2016-08-25_05-56-22.jpg',	0,	'C7584',	0,	'',	0,	0),
(92,	'2016-09-07_04-17-59_1.jpg',	'Thumb_2016-09-07_04-17-55_1.jpg',	'Thumb_2016-09-07_04-17-56_1.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(93,	'2016-09-07_04-18-02_2.jpg',	'Thumb_2016-09-07_04-17-59_2.jpg',	'Thumb_2016-09-07_04-17-59_2.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(131,	'',	'Thumb_2016-10-09_13-49-39_ajWBhx.gif',	'Thumb_2016-10-09_13-49-39_ajWBhx.gif',	0,	'',	0,	'',	0,	0),
(95,	'2016-09-07_04-18-09_4.jpg',	'Thumb_2016-09-07_04-18-06_4.jpg',	'Thumb_2016-09-07_04-18-06_4.jpg',	0,	'HIST_1111',	1,	'',	0,	0),
(96,	'2016-09-07_04-18-13_5.jpg',	'Thumb_2016-09-07_04-18-09_5.jpg',	'Thumb_2016-09-07_04-18-10_5.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(97,	'2016-09-07_04-18-16_6.jpg',	'Thumb_2016-09-07_04-18-13_6.jpg',	'Thumb_2016-09-07_04-18-13_6.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(98,	'2016-09-07_04-18-20_7.jpg',	'Thumb_2016-09-07_04-18-17_7.jpg',	'Thumb_2016-09-07_04-18-17_7.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(99,	'2016-09-07_04-18-23_8.jpg',	'Thumb_2016-09-07_04-18-20_8.jpg',	'Thumb_2016-09-07_04-18-20_8.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(100,	'2016-09-07_04-18-27_9.jpg',	'Thumb_2016-09-07_04-18-24_9.jpg',	'Thumb_2016-09-07_04-18-24_9.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(101,	'2016-09-07_04-18-31_10.jpg',	'Thumb_2016-09-07_04-18-27_10.jpg',	'Thumb_2016-09-07_04-18-28_10.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(102,	'2016-09-07_04-18-34_11.jpg',	'Thumb_2016-09-07_04-18-31_11.jpg',	'Thumb_2016-09-07_04-18-31_11.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(103,	'2016-09-07_04-18-38_12.jpg',	'Thumb_2016-09-07_04-18-34_12.jpg',	'Thumb_2016-09-07_04-18-35_12.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(104,	'2016-09-07_04-18-41_13.jpg',	'Thumb_2016-09-07_04-18-38_13.jpg',	'Thumb_2016-09-07_04-18-38_13.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(105,	'2016-09-07_04-18-45_14.jpg',	'Thumb_2016-09-07_04-18-41_14.jpg',	'Thumb_2016-09-07_04-18-42_14.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(106,	'2016-09-07_04-18-48_15.jpg',	'Thumb_2016-09-07_04-18-45_15.jpg',	'Thumb_2016-09-07_04-18-45_15.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(107,	'2016-09-07_04-18-52_16.jpg',	'Thumb_2016-09-07_04-18-49_16.jpg',	'Thumb_2016-09-07_04-18-49_16.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(108,	'2016-09-07_04-18-56_17.jpg',	'Thumb_2016-09-07_04-18-52_17.jpg',	'Thumb_2016-09-07_04-18-52_17.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(109,	'2016-09-07_04-18-59_18.jpg',	'Thumb_2016-09-07_04-18-56_18.jpg',	'Thumb_2016-09-07_04-18-56_18.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(110,	'2016-09-07_04-19-03_19.jpg',	'Thumb_2016-09-07_04-18-59_19.jpg',	'Thumb_2016-09-07_04-18-59_19.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(111,	'2016-09-07_04-19-06_20.jpg',	'Thumb_2016-09-07_04-19-03_20.jpg',	'Thumb_2016-09-07_04-19-03_20.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(112,	'2016-09-07_04-19-10_21.jpg',	'Thumb_2016-09-07_04-19-06_21.jpg',	'Thumb_2016-09-07_04-19-07_21.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(113,	'2016-09-07_04-19-13_22.jpg',	'Thumb_2016-09-07_04-19-10_22.jpg',	'Thumb_2016-09-07_04-19-10_22.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(114,	'2016-09-07_04-19-17_23.jpg',	'Thumb_2016-09-07_04-19-13_23.jpg',	'Thumb_2016-09-07_04-19-14_23.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(115,	'2016-09-07_04-19-20_24.jpg',	'Thumb_2016-09-07_04-19-17_24.jpg',	'Thumb_2016-09-07_04-19-17_24.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(116,	'2016-09-07_04-19-24_25.jpg',	'Thumb_2016-09-07_04-19-20_25.jpg',	'Thumb_2016-09-07_04-19-21_25.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(117,	'2016-09-07_04-19-27_26.jpg',	'Thumb_2016-09-07_04-19-24_26.jpg',	'Thumb_2016-09-07_04-19-24_26.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(118,	'2016-09-07_04-19-31_27.jpg',	'Thumb_2016-09-07_04-19-27_27.jpg',	'Thumb_2016-09-07_04-19-28_27.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(119,	'2016-09-07_04-19-34_28.jpg',	'Thumb_2016-09-07_04-19-31_28.jpg',	'Thumb_2016-09-07_04-19-31_28.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(120,	'2016-09-07_04-19-38_29.jpg',	'Thumb_2016-09-07_04-19-34_29.jpg',	'Thumb_2016-09-07_04-19-35_29.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(121,	'2016-09-07_04-19-42_30.jpg',	'Thumb_2016-09-07_04-19-38_30.jpg',	'Thumb_2016-09-07_04-19-38_30.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(122,	'2016-09-07_04-19-45_31.jpg',	'Thumb_2016-09-07_04-19-42_31.jpg',	'Thumb_2016-09-07_04-19-42_31.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(123,	'2016-09-07_04-19-49_32.jpg',	'Thumb_2016-09-07_04-19-45_32.jpg',	'Thumb_2016-09-07_04-19-46_32.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(124,	'2016-09-07_04-19-52_33.jpg',	'Thumb_2016-09-07_04-19-49_33.jpg',	'Thumb_2016-09-07_04-19-49_33.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(125,	'2016-09-07_04-19-56_34.jpg',	'Thumb_2016-09-07_04-19-52_34.jpg',	'Thumb_2016-09-07_04-19-53_34.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(126,	'2016-09-07_04-19-59_35.jpg',	'Thumb_2016-09-07_04-19-56_35.jpg',	'Thumb_2016-09-07_04-19-56_35.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(127,	'2016-09-07_04-20-03_36.jpg',	'Thumb_2016-09-07_04-19-59_36.jpg',	'Thumb_2016-09-07_04-20-00_36.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(128,	'2016-09-07_04-20-06_37.jpg',	'Thumb_2016-09-07_04-20-03_37.jpg',	'Thumb_2016-09-07_04-20-03_37.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(129,	'2016-09-07_04-20-10_38.jpg',	'Thumb_2016-09-07_04-20-06_38.jpg',	'Thumb_2016-09-07_04-20-07_38.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(130,	'2016-09-07_04-20-13_39.jpg',	'Thumb_2016-09-07_04-20-10_39.jpg',	'Thumb_2016-09-07_04-20-10_39.jpg',	0,	'HIST_1111',	0,	'',	0,	0),
(132,	'2017-06-16_09-22-06_s-2557-00004.jpg',	'Thumb_2017-06-16_09-22-03_s-2557-00004.jpg',	'Thumb_2017-06-16_09-22-03_s-2557-00004.jpg',	0,	't34s',	1,	'',	0,	0),
(133,	'2017-06-16_09-22-09_s-2557-00005.jpg',	'Thumb_2017-06-16_09-22-06_s-2557-00005.jpg',	'Thumb_2017-06-16_09-22-06_s-2557-00005.jpg',	0,	't34s',	0,	'',	0,	0),
(134,	'2017-06-16_09-22-12_s-2557-00006.jpg',	'Thumb_2017-06-16_09-22-09_s-2557-00006.jpg',	'Thumb_2017-06-16_09-22-09_s-2557-00006.jpg',	0,	't34s',	0,	'',	0,	0),
(143,	'2017-08-22_10-31-26_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-31-23_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-31-23_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	0,	'PTT',	0,	'0',	0,	0),
(137,	'2017-08-17_16-28-40_thumb_DSC02274_1024.jpg',	'Thumb_2017-08-17_16-28-37_thumb_DSC02274_1024.jpg',	'Thumb_2017-08-17_16-28-37_thumb_DSC02274_1024.jpg',	585507,	'aAaa',	1,	'0',	0,	0),
(138,	'2017-08-17_16-29-36_map_16.jpg',	'Thumb_2017-08-17_16-29-33_map_16.jpg',	'Thumb_2017-08-17_16-29-33_map_16.jpg',	585507,	'aAa',	0,	'0',	0,	0),
(142,	'2017-08-17_16-55-19_สถานที่-11.jpg',	'Thumb_2017-08-17_16-55-15_สถานที่-11.jpg',	'Thumb_2017-08-17_16-55-16_สถานที่-11.jpg',	585507,	'aA',	0,	'0',	0,	0),
(144,	'2017-08-22_11-10-24_442482.jpg',	'Thumb_2017-08-22_11-10-21_442482.jpg',	'Thumb_2017-08-22_11-10-21_442482.jpg',	585507,	'a',	1,	'0',	0,	0),
(145,	'2017-08-23_10-44-31_IMG_1140.JPG',	'Thumb_2017-08-23_10-44-28_IMG_1140.JPG',	'Thumb_2017-08-23_10-44-28_IMG_1140.JPG',	585507,	'RCY_A002001_003_59',	0,	'0',	0,	0),
(146,	'2017-08-23_10-44-35_IMG_1143.JPG',	'Thumb_2017-08-23_10-44-31_IMG_1143.JPG',	'Thumb_2017-08-23_10-44-31_IMG_1143.JPG',	585507,	'RCY_A002001_003_59',	0,	'0',	0,	0),
(148,	'2017-08-23_10-46-30_1375088803office-nstda2.jpg',	'Thumb_2017-08-23_10-46-26_1375088803office-nstda2.jpg',	'Thumb_2017-08-23_10-46-27_1375088803office-nstda2.jpg',	585507,	'RCY_A002001_003_59',	0,	'0',	0,	0),
(154,	'2017-09-04_10-25-02_1477564_562350553858354_538797945_n.jpg',	'Thumb_2017-09-04_10-24-59_1477564_562350553858354_538797945_n.jpg',	'Thumb_2017-09-04_10-24-59_1477564_562350553858354_538797945_n.jpg',	585507,	'2375',	0,	'0',	0,	1),
(150,	'2017-09-04_10-19-05_47664057_m.jpg',	'Thumb_2017-09-04_10-19-01_47664057_m.jpg',	'Thumb_2017-09-04_10-19-02_47664057_m.jpg',	585507,	'2375',	0,	'0',	0,	1),
(155,	'2017-09-07_10-18-20_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_10-18-16_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_10-18-16_Fotolia_18349495_XS.jpg',	585507,	'RCY_A002001_003_44',	0,	'0',	0,	0),
(152,	'2017-09-04_10-19-12_image-35.jpg',	'Thumb_2017-09-04_10-19-09_image-35.jpg',	'Thumb_2017-09-04_10-19-09_image-35.jpg',	585507,	'2375',	1,	'0',	0,	0),
(156,	'2017-09-07_11-17-32_accident-1497298_1920.jpg',	'Thumb_2017-09-07_11-17-29_accident-1497298_1920.jpg',	'Thumb_2017-09-07_11-17-29_accident-1497298_1920.jpg',	585507,	'RCY_A002001_003_44',	0,	'0',	0,	0),
(157,	'2017-09-07_11-20-56_21268304_818859114959028_1486119900_o.jpg',	'Thumb_2017-09-07_11-20-53_21268304_818859114959028_1486119900_o.jpg',	'Thumb_2017-09-07_11-20-53_21268304_818859114959028_1486119900_o.jpg',	585507,	'หก',	1,	'0',	0,	0),
(158,	'2017-09-07_11-20-59_21389298_277687376069817_732130315_o.jpg',	'Thumb_2017-09-07_11-20-56_21389298_277687376069817_732130315_o.jpg',	'Thumb_2017-09-07_11-20-56_21389298_277687376069817_732130315_o.jpg',	585507,	'หก',	0,	'0',	0,	0),
(159,	'2017-09-07_11-21-03_accident-1497298_1920.jpg',	'Thumb_2017-09-07_11-20-59_accident-1497298_1920.jpg',	'Thumb_2017-09-07_11-21-00_accident-1497298_1920.jpg',	585507,	'หก',	0,	'0',	0,	0),
(160,	'2017-09-07_11-21-45_21389298_277687376069817_732130315_o.jpg',	'Thumb_2017-09-07_11-21-42_21389298_277687376069817_732130315_o.jpg',	'Thumb_2017-09-07_11-21-42_21389298_277687376069817_732130315_o.jpg',	585507,	'หก',	0,	'0',	0,	0),
(161,	'2017-09-07_11-24-03_47664057_m.jpg',	'Thumb_2017-09-07_11-23-59_47664057_m.jpg',	'Thumb_2017-09-07_11-24-00_47664057_m.jpg',	585507,	'กกกหกฟหกฟหก',	0,	'0',	0,	0),
(162,	'2017-09-07_11-25-03_47664057_m.jpg',	'Thumb_2017-09-07_11-25-00_47664057_m.jpg',	'Thumb_2017-09-07_11-25-00_47664057_m.jpg',	585507,	'กกกหกฟหกฟหก',	0,	'0',	0,	0),
(163,	'2017-09-07_11-25-35_47664057_m.jpg',	'Thumb_2017-09-07_11-25-31_47664057_m.jpg',	'Thumb_2017-09-07_11-25-32_47664057_m.jpg',	585507,	'กกกหกฟหกฟหก',	0,	'0',	0,	0),
(164,	'2017-09-07_11-26-55_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_11-26-52_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_11-26-52_Fotolia_18349495_XS.jpg',	585507,	'หก',	0,	'0',	0,	0),
(165,	'2017-09-07_11-29-18_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_11-29-15_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_11-29-15_Fotolia_18349495_XS.jpg',	585507,	'RCY_A002001_003_79',	0,	'0',	0,	0),
(166,	'2017-09-07_11-31-38_ef950eab68599cecbbc322ffe205e54e.jpg',	'Thumb_2017-09-07_11-31-35_ef950eab68599cecbbc322ffe205e54e.jpg',	'Thumb_2017-09-07_11-31-35_ef950eab68599cecbbc322ffe205e54e.jpg',	585507,	'กกกหกฟหกฟหก',	0,	'0',	0,	0),
(167,	'2017-09-07_11-33-44_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_11-33-41_Fotolia_18349495_XS.jpg',	'Thumb_2017-09-07_11-33-41_Fotolia_18349495_XS.jpg',	585507,	'fsdf',	1,	'0',	0,	1),
(169,	'2017-09-07_11-35-01_image-35.jpg',	'Thumb_2017-09-07_11-34-58_image-35.jpg',	'Thumb_2017-09-07_11-34-58_image-35.jpg',	585507,	'5259655959595959',	1,	'0',	0,	1),
(170,	'2017-09-07_11-51-11_image-35.jpg',	'Thumb_2017-09-07_11-51-08_image-35.jpg',	'Thumb_2017-09-07_11-51-08_image-35.jpg',	585507,	'fsdf',	0,	'0',	0,	0),
(172,	'2017-09-07_16-13-17_ef950eab68599cecbbc322ffe205e54e.jpg',	'Thumb_2017-09-07_16-13-14_ef950eab68599cecbbc322ffe205e54e.jpg',	'Thumb_2017-09-07_16-13-14_ef950eab68599cecbbc322ffe205e54e.jpg',	585507,	'ทดสอบ',	0,	'0',	0,	0),
(173,	'2017-09-08_09-07-59_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-07-56_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-07-56_accident-1497298_1920.jpg',	585507,	'5259655959595959',	0,	'0',	0,	0),
(180,	'2017-09-08_09-20-02_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-19-58_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-19-59_accident-1497298_1920.jpg',	585507,	'ทดสอบทดสอบ',	0,	'0',	0,	0),
(178,	'2017-09-08_09-14-55_856712.jpg',	'Thumb_2017-09-08_09-14-51_856712.jpg',	'Thumb_2017-09-08_09-14-52_856712.jpg',	585507,	'ทดสอบทดสอบ',	0,	'0',	0,	0),
(179,	'2017-09-08_09-19-21_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-19-18_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-19-18_accident-1497298_1920.jpg',	585507,	'ทดสอบทดสอบ',	0,	'0',	0,	0),
(181,	'2017-09-08_09-22-19_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-22-16_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-22-16_accident-1497298_1920.jpg',	585507,	'ทดสอบทดสอบ',	0,	'0',	0,	0),
(182,	'2017-09-08_09-26-05_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-26-02_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-26-02_accident-1497298_1920.jpg',	585507,	'ทดสอบทดสอบ',	0,	'0',	0,	0),
(183,	'2017-09-08_09-31-34_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-31-31_accident-1497298_1920.jpg',	'Thumb_2017-09-08_09-31-31_accident-1497298_1920.jpg',	585507,	'testaaaa',	0,	'0',	0,	1),
(184,	'2017-09-08_09-31-52_856712.jpg',	'Thumb_2017-09-08_09-31-49_856712.jpg',	'Thumb_2017-09-08_09-31-49_856712.jpg',	585507,	'testaaaa',	1,	'0',	0,	1),
(185,	'2017-09-08_11-06-53_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-08_11-06-50_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-08_11-06-50_21149972_817742551737351_8968958069032507858_n.jpg',	585507,	'REG_1455454_A566',	1,	'0',	0,	1),
(186,	'2017-09-08_14-23-49_21291380_820009354844004_2133853534_n.jpg',	'Thumb_2017-09-08_14-23-46_21291380_820009354844004_2133853534_n.jpg',	'Thumb_2017-09-08_14-23-46_21291380_820009354844004_2133853534_n.jpg',	585507,	'REG_1455454_A566',	0,	'0',	0,	0),
(187,	'2017-09-11_12-31-49_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-11_12-31-46_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-11_12-31-46_21149972_817742551737351_8968958069032507858_n.jpg',	585507,	'asdasdasd',	1,	'0',	0,	0),
(192,	'2017-09-11_14-30-51_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-11_14-30-48_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-11_14-30-48_21149972_817742551737351_8968958069032507858_n.jpg',	585507,	'asdasdasd',	0,	'0',	0,	0),
(191,	'2017-09-11_14-00-42_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-11_14-00-39_21149972_817742551737351_8968958069032507858_n.jpg',	'Thumb_2017-09-11_14-00-39_21149972_817742551737351_8968958069032507858_n.jpg',	585507,	'sdsadd',	0,	'0',	0,	0);

DROP TABLE IF EXISTS `archive_stat`;
CREATE TABLE `archive_stat` (
  `stat_id` int(11) NOT NULL AUTO_INCREMENT,
  `stat_ip` text NOT NULL,
  `stat_browser` text NOT NULL,
  `stat_ref` text NOT NULL,
  `stat_date` date NOT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `archive_stat` (`stat_id`, `stat_ip`, `stat_browser`, `stat_ref`, `stat_date`) VALUES
(1,	'::1',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36',	'This page was accessed directly',	'0000-00-00'),
(2,	'::1',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36',	'This page was accessed directly',	'0000-00-00'),
(3,	'::1',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36',	'This page was accessed directly',	'0000-00-00'),
(4,	'::1',	'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36',	'This page was accessed directly',	'0000-00-00');

DROP TABLE IF EXISTS `archive_theme`;
CREATE TABLE `archive_theme` (
  `theme_id` int(11) NOT NULL,
  `theme_fonts` text NOT NULL,
  `theme_color` text NOT NULL,
  `theme_preview` int(11) NOT NULL,
  `theme_active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_theme` (`theme_id`, `theme_fonts`, `theme_color`, `theme_preview`, `theme_active`) VALUES
(1,	'type_6',	'color_10',	0,	1);

DROP TABLE IF EXISTS `archive_upload`;
CREATE TABLE `archive_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `archive_upload` (`bpu_id`, `bpu_file`, `bpu_upload_time`, `obj_id`) VALUES
(2,	'56160011-LST.pdf',	'2016-10-30 22:06:13',	583),
(3,	'56160011.pdf',	'2017-06-15 19:23:03',	598),
(11,	'register_162-012.pdf',	'2017-08-10 09:46:16',	583),
(12,	'coupon.png',	'2017-08-16 09:15:29',	585504),
(13,	'20786545_809307885914151_2001637738_n.jpg',	'2017-08-16 09:32:00',	585518),
(16,	'if_pdfs_774684.png',	'2017-08-17 02:35:55',	585516),
(19,	'pdf.png',	'2017-08-17 09:22:58',	585507),
(20,	'pdf.png',	'2017-08-22 01:55:01',	585510),
(21,	'New_Doc_2017-08-24.pdf',	'2017-09-04 03:14:31',	585521),
(22,	'Test-Logo.svg.png',	'2017-09-07 03:15:46',	581),
(23,	'47664057_m.jpg',	'2017-09-07 04:24:14',	55585524);

DROP TABLE IF EXISTS `archive_vr`;
CREATE TABLE `archive_vr` (
  `vr_id` int(11) NOT NULL AUTO_INCREMENT,
  `vr_dir` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `vr_direction` char(2) NOT NULL,
  PRIMARY KEY (`vr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `archive_vr` (`vr_id`, `vr_dir`, `obj_id`, `obj_refcode`, `vr_direction`) VALUES
(35,	'H0049',	0,	'T002',	'L'),
(47,	'H0009',	0,	'TG061',	'L'),
(48,	'H0033',	0,	'AA0091',	'R'),
(49,	'fishVR',	0,	'TG0098',	'R');

DROP TABLE IF EXISTS `boganic_bg`;
CREATE TABLE `boganic_bg` (
  `bg_id` int(1) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(80) NOT NULL,
  `bg_desc` text NOT NULL,
  `bg_entry` text NOT NULL,
  `bg_lat` float NOT NULL,
  `bg_lon` float NOT NULL,
  `bg_number` text NOT NULL,
  `bg_tambon` text NOT NULL,
  `bg_ampher` text NOT NULL,
  `bg_city` text NOT NULL,
  `bg_postcode` text NOT NULL,
  `bg_tel` text NOT NULL,
  `bg_email` text NOT NULL,
  `bg_website` text NOT NULL,
  `bg_pic` text NOT NULL,
  `bg_picshow` int(11) NOT NULL,
  `bg_watermark` text NOT NULL,
  `bg_watermarkshow` int(11) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `boganic_pic`;
CREATE TABLE `boganic_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `boganic_vr`;
CREATE TABLE `boganic_vr` (
  `vr_id` int(11) NOT NULL AUTO_INCREMENT,
  `vr_dir` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `vr_direction` char(2) NOT NULL,
  PRIMARY KEY (`vr_id`),
  KEY `obj_id` (`obj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `botanic_animal_category`;
CREATE TABLE `botanic_animal_category` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` text NOT NULL,
  `cat1_parent` int(11) NOT NULL,
  PRIMARY KEY (`cat1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_animal_category` (`cat1_id`, `cat1_name`, `cat1_parent`) VALUES
(1,	'เลี้ยงลูกด้วยนม',	0),
(2,	'สัตว์ปีก',	0),
(3,	'asdasd',	0),
(4,	'dasdasd',	0),
(5,	'กหดหก',	0);

DROP TABLE IF EXISTS `botanic_animal_category_lv2`;
CREATE TABLE `botanic_animal_category_lv2` (
  `ac2_id` int(4) NOT NULL AUTO_INCREMENT,
  `ac2_name` varchar(50) NOT NULL,
  `ac1_id` int(11) NOT NULL,
  PRIMARY KEY (`ac2_id`),
  KEY `ac1_id` (`ac1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_animal_category_lv2` (`ac2_id`, `ac2_name`, `ac1_id`) VALUES
(2,	'เคี้ยวเอื้อง',	1),
(3,	'น้ำจืด',	3),
(4,	'น้ำเค็ม',	3),
(5,	'น้ำกร่อย',	3),
(6,	'ddddd',	2);

DROP TABLE IF EXISTS `botanic_animal_category_lv3`;
CREATE TABLE `botanic_animal_category_lv3` (
  `ac3_id` int(5) NOT NULL AUTO_INCREMENT,
  `ac3_name` varchar(50) NOT NULL,
  `ac2_id` int(4) NOT NULL,
  PRIMARY KEY (`ac3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `botanic_animal_object`;
CREATE TABLE `botanic_animal_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_identity` text NOT NULL,
  `obj_desc` text NOT NULL,
  `obj_area` text NOT NULL,
  `obj_date` varchar(40) NOT NULL,
  `obj_comment` text NOT NULL,
  `obj_cate` int(4) NOT NULL,
  `obj_access` int(1) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_animal_object` (`obj_id`, `obj_refcode`, `obj_title`, `obj_creator`, `obj_identity`, `obj_desc`, `obj_area`, `obj_date`, `obj_comment`, `obj_cate`, `obj_access`, `obj_cate2`, `obj_cate3`) VALUES
(2,	'ANI-01-R-1',	'กวาง',	'นรวีร์',	'มีลักษณะขนยาวหยาบสีน้ำตาล ตัวผู้มีเขาเป็นแขนง ผลัดเขาปีละครั้ง ตัวเมียมีขนาดเล็กกว่าและไม่มีเขา ลักษณะเขาตัน ไม่กลวง เป็นเกลียว บางชนิดอาจแตกแขนงได้มากเหมือนกิ่งไม้ ไม่มีถุงน้ำดี ชอบอยู่ตามลำพังตัวเดียวยกเว้นฤดูผสมพันธุ์ กินใบไม้อ่อน หญ้าอ่อน',	'กวางเป็นสัตว์ที่มีบทบาทสำคัญต่อการตำรงชีวิตของมนุษย์มานานแล้ว ตั้งแต่ยุคที่มีการล่าสัตว์เพื่อนำมาทำเป็นอาหาร เอาหนังมาทำเครื่องนุ่งห่ม ต่อมาได้มีการนำกวางมาเป็นสัตว์เลี้ยงเพื่อบริโภคเนื้อ เป็นเกมกีฬาของชนชั้นสูงและมีการพัฒนาขึ้นมาจนเกิดเป็นอุตสาหกรรมการเลี้ยงกวางหรือฟาร์มกวาง ',	'จากการศึกษาวิวัฒนาการของสัตว์วงศ์กวางและกระจง ซึ่งเป็นสัตว์เคี้ยวเอื้องที่มีลักษณะคล้ายคลึงกัน พบว่ามีหลายชนิดที่มีลักษณะการปรับตัวทางวิวัฒนาการเป็นแบบเข้าหากัน คือ กวางและกระจงที่มีถิ่นอาศัยต่างถิ่นกัน อาจมีรูปร่างภายนอกที่คล้ายคลึงกันได้ หากสภาพแวดล้อมทางนิเวศวิทยาของถิ่น',	'29-08-2017',	'dห',	1,	1,	0,	0),
(3,	'ANI-01-R-2',	'เก้งธรรมดา',	'นรวีร์',	'มีส่วนหลังโก่งเล็กน้อย ลำตัวสีน้ำตาลแดง ด้านใต้ซีดและอมเทาเล็กน้อย หางด้านบนสีน้ำตาลเข้ม ด้านล่างสีขาว เก้งตัวผู้มีเขาสั้น ฐานเขาซึ่งเป็นส่วนหนึ่งของกะโหลกยื่นยาวขึ้นไปเป็นแท่ง มีขนปกคลุม และมีขนสีดำขึ้นตามแนวเขาจนดูเป็นรูปตัววีเมื่อมองด้านหน้าตรง ส่วนปลายเขาสั้น แต่เป็นง่ามเล็ก ๆ แค่สองง่าม ไม่แตกเป็นกิ่งก้านแบบกวาง ผลัดเขาปีละครั้ง ส่วนตัวเมียไม่มีเขาและฐานเขา แต่บนหน้าก็มีขนรูปตัววีเหมือนกัน เก้งตัวที่อายุมากผู้มีเขี้ยวยาวแหลมโค้งโผล่พ้นขากรรไกรออกมา เวลาเดินจะยกขาสูงทุกย่างก้าว',	'เก้งเผือก ซึ่งเป็นสัตว์เผือกโดยสมบูรณ์ มีลักษณะเหมือนเก้งทั่วไป แต่มีสีขนทั้งตัวสีขาวล้วน และนัยน์ตาสีแดง เก้งเผือกนั้นมีการเพาะเลี้ยงที่สวนสัตว์ดุสิต เป็นเก้งที่ได้รับพระราชทานจากสมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ ที่ทรงได้รับการถวายมาจากชาวบ้านที่จับได้ในป่า ชื่อ \"เพชร\" ต่อมาเพชรได้แพร่ขยายพันธุ์และออกลูกหลาน มาจนถึงมีด้วยกันถึง 6 ตัว โดยลูกเก้งเผือกตัวที่ 6 ที่เกิดมาชื่อ \"ไข่มุก\"เป็นลูกเก้งเผือกเพศเมียตัวแรกของสวนสัตว์ดุสิตซึ่งเกิดจากพ่อเก้งเผือกชื่อธูปและแม่เก้งแดงธรรมดา',	'พบแพร่กระจายพันธุ์ในเอเชียใต้และเอเชียตะวันออกเฉียงใต้ ตั้งแต่ ศรีลังกา, อินเดีย, จีนตอนใต้, พม่า, ไทย, ลาว, เวียดนาม, กัมพูชา, มาเลเซีย, เกาะสุมาตรา, เกาะชวา, เกาะบอร์เนียว, เกาะไหหลำ และหมู่เกาะซุนดา',	'29-11-2016',	'',	1,	1,	2,	0),
(4,	'ANI-01-F-1',	'ปลาตีน',	'นรวีร์',	'หัวมีขนาดโต มีตาหนึ่งคู่ตั้งอยู่ส่วนบนสุดของหัวโปนออกมาเห็นได้ชัด ดวงตาสามารถกรอกไปมาได้ จึงใช้มองเห็นได้ดีเมื่อพ้นน้ำ สามารถเคลื่อนที่บนบกได้ โดยใช้ครีบอกที่แข็งแรงไถลตัวไปตามพื้นเลนและสามารถกระโดดได้ด้วย และสามารถใช้ชีวิตอยู่บนบกได้เป็นเวลานานเนื่องจากมีอวัยวะพิเศษ',	'อยู่ข้างเหงือกที่สามารถเก็บความชุ่มชื้นจากน้ำได้ และจะสูดอากาศบนบกเข้าปาก เพื่อนำออกซิเจนเข้าไปผสมกับน้ำเพื่อหายใจผ่านเหงือกเหมือนปลาทั่วไป ดังนั้น ปลาตีนจึงต้องทำตัวให้คงความชื้นอยู่ตลอด',	'อาศัยในป่าชายเลนในประเทศไทย',	'29-11-2016',	'',	3,	1,	5,	0),
(5,	'ANI-01-F-2',	'ปลากัด',	'นรวีร์',	'ปลากัดมีรูปร่างเพรียวยาวและแบนข้าง หัวมีขนาดเล็ก ครีบก้นยาวจรดครีบหาง หางแบนกลม มีอวัยวะช่วยหายใจบนผิวน้ำได้โดยใช้ปากฮุบอากาศโดยไม่ต้องผ่านเหงือกเหมือนปลาทั่วไป เกล็ดสากเป็นแบบทีนอยด์ ปกคลุมจนถึงหัว ริมฝีปากหนา ตาโต ครีบอกคู่แรกยาวใช้สำหรับสัมผัส ปลาตัวผู้มีสีน้ำตาลเหลือบแดงและน้ำเงินหรือเขียว ครีบสีแดงและมีแถบสีเหลืองประ ในขณะที่ปลาตัวเมียสีจะซีดอ่อนและมีขนาดลำตัวที่เล็กกว่ามากจนเห็นได้ชัด',	'เป็นปลาที่ชาวไทยรู้จักเป็นอย่างดีมาแต่โบราณ โดยปลากัดสายพันธุ์ดั้งเดิมจากธรรมชาติมักเรียกติดปากว่า \"ปลากัดทุ่ง\" หรือ \"ปลากัดลูกทุ่ง\" หรือ \"ปลากัดป่า\" จากพฤติกรรมที่ชอบกัดกันเองแบบนี้ ทำให้นิยมนำมาเลี้ยงใช้สำหรับกัดต่อสู้กันเป็นการพนันชนิดหนึ่งของชาวไทย และได้มีการพัฒนาสายพันธุ์และความสามารถในชั้นเชิงการกัดจนถึงปัจจุบัน',	'พบกระจายอยู่ทั่วไปในแหล่งน้ำนิ่งตื้น',	'23-11-2016',	'',	3,	1,	3,	0),
(6,	'ANI-01-H-1',	'ไก่ป่า',	'นรวีร์',	'อยู่ตามพื้นป่า ตัวผู้ไม่ชอบร้องเหมือนตัวเมีย ในฝูงหนึ่งจะมีตัวผู้คุมตัวเมียหลายตัว ตัวผู้มักขันเป็นระยะ',	'ไก่ป่าผสมพันธุ์ในฤดูร้อน สร้างรังอยู่ตามพื้นดินตามกอหญ้า กอไผ่ วางไข่ 6 - 12 ฟอง ระยะฟักไข่ 21 วัน ลูกไก่แรกเกิดมีขนอุยสีเหลืองสลับลายดำทั่วลำตัว เมื่อขนแห้งก็เดินตามแม่ไปหากินได้ทันที โดยทั่วไปไก่ป่าเพศผู้จะเริ่มสืบพันธุ์ได้เมื่ออายุ 2 ปี แต่ในเพศเมียจะสืบพันธุ์ได้ตั้งแต่อายุ 1 ปี โดยมีช่วงการผสมพันธุ์ตั้งแต่เดือนพฤศจิกายน ถึงเดือนพฤษภาคม ในช่วงนี้ไก่ป่าเพศผู้จะมีสีสันสวยงามมาก',	'อาศัยตามป่าไผ่ ป่าดิบแล้ง และป่ารอยต่อระหว่างป่าดิบแล้งและป่าเต็งรัง',	'30-11-2016',	'',	2,	1,	0,	0),
(7,	'ANI-01-R-4',	'หมีสีน้ำตาล',	'นรวีร์',	'จัดเป็นหมีที่มีขนาดใหญ่มาก โดยตัวผู้มีขนาดใหญ่กว่าตัวเมีย เมื่อยืน 4 เท้ามีความสูงถึง 5 ฟุต และเมื่อยืนด้วย 2 เท้า อาจสูงถึง 9 ฟุต ',	'หมีสีน้ำตาลกินอาหารได้หลากหลายมาก ทั้งพืชและสัตว์ โดยหากเป็นพืชมักจะเป็นผลไม้ประเภทเบอร์รี่ บางครั้งกินสัตว์ขนาดเล็ก เช่น แมลง หรือ หนู แต่บางครั้งก็กินสัตว์ใหญ่ เช่น ม้า, วัวป่า, กวาง รวมถึงซากสัตว์ ในช่วงฤดูกาลที่มีอาหารสมบูรณ์ อาหารที่หมีสีน้ำตาลชอบมาก คือ ปลาแซลมอน และปลาเทราท์',	'หมีสีน้ำตาลตัวเมียต้องมีอายุ 4 ถึง 10 ปี จึงจะเข้าสู่วัยเจริญพันธุ์ ',	'01-12-2016',	'',	1,	1,	0,	0),
(8,	'ANI-01-R-9',	'ม้า',	'นรวีร์',	'ม้ามีวิวัฒนาการมากว่า 45 ถึง 55 ล้านปีจากสิ่งมีชีวิตหลายกีบเท้าขนาดเล็กสู่สัตว์กีบคี่ขนาดใหญ่ในปัจจุบัน มนุษย์เริ่มนำม้ามาเลี้ยงเมื่อราว 4,000 ปีก่อนคริสตกาล',	'กายวิภาคของม้าช่วยให้ม้าใช้ความเร็วในการหนีนักล่า และม้ายังพัฒนาความสมดุลได้อย่างยอดเยี่ยมและสัญชาตญาณสู้หรือถอยที่แข็งแกร่ง ม้ายังมีลักษณะพิเศษเพื่อใช้สำหรับหลบหลีกนักล่า คือ ม้าสามารถยืนหลับหรือล้มตัวลงนอนหลับก็ได้ ม้าตัวเมียจะอุ้มท้องประมาณ 11 เดือน ลูกม้าจะยืนและวิ่งได้ในเวลาไม่นานหลังกำเนิด ม้าบ้านจำนวนมากจะเริ่มฝึกภายใต้อานม้าหรือบังเหียนระหว่างอายุสองถึงสี่ปี ม้าจะโตเต็มที่เมื่ออายุห้าปี และมีช่วงอายุประมาณ 25 ถึง 30 ปี',	'ม้าและมนุษย์มีปฏิสัมพันธ์กันอย่างหลากหลายทั้งในการแข่งขันกีฬาและงานที่ไม่ใช่กิจกรรมสันทนาการ',	'30-11-2016',	'',	1,	1,	0,	0),
(9,	'ANI-01-F-5',	'วัว',	'นรวีร์',	'ผลิตภัณฑ์อื่นจากวัวมีหนังและมูลเพื่อใช้เป็นปุ๋ยคอกหรือเชื้อเพลิง ในบางประเทศ เช่น อินเดีย วัว',	'เป็นสัตว์มีกีบเท้าที่เป็นสัตว์เลี้ยงขนาดใหญ่ชนิดที่สามัญที่สุด เป็นสมาชิกสมัยใหม่ที่โดดเด่นในวงศ์ย่อย Bovinae เป็นชนิดที่แพร่หลายที่สุดในสกุล Bos และถูกจำแนกเป็นกลุ่มอย่างกว้างขวางที่สุดว่า Bos primigenius วัวถูกเลี้ยงเป็นปศุสัตว์เพื่อเอาเนื้อ',	'ในทางตะวันออกเฉียงใต้ของตุรกี',	'01-12-2016',	'',	1,	1,	2,	0),
(11,	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'30-08-2017',	'เพิ่มข้อมูลสัตว์',	1,	1,	0,	0),
(12,	'aasss',	'aaaa',	'aaa',	'aaaaa',	'aaaaa',	'aaa',	'22-08-2017',	'',	1,	1,	0,	0),
(13,	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'เพิ่มข้อมูลสัตว์',	'30-08-2017',	'เพิ่มข้อมูลสัตว์',	1,	1,	0,	0);

DROP TABLE IF EXISTS `botanic_animal_pic`;
CREATE TABLE `botanic_animal_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_animal_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(7,	'2016-10-21_11-50-38_14383270_208225329594212_1582758257_n.jpg',	'Thumb_2016-10-21_11-50-35_14383270_208225329594212_1582758257_n.jpg',	'Thumb_2016-10-21_11-50-35_14383270_208225329594212_1582758257_n.jpg',	0,	'anm_665',	1,	'',	0,	0),
(6,	'2016-10-21_11-50-35_14356124_208225319594213_762746207_n.jpg',	'Thumb_2016-10-21_11-50-32_14356124_208225319594213_762746207_n.jpg',	'Thumb_2016-10-21_11-50-32_14356124_208225319594213_762746207_n.jpg',	0,	'anm_665',	0,	'',	0,	0),
(5,	'2016-10-21_11-50-31_14349144_208225289594216_1063696665_n.jpg',	'Thumb_2016-10-21_11-50-28_14349144_208225289594216_1063696665_n.jpg',	'Thumb_2016-10-21_11-50-28_14349144_208225289594216_1063696665_n.jpg',	0,	'anm_665',	0,	'',	0,	0),
(8,	'2016-11-14_08-03-54_Sambar_2_(3867178921).jpg',	'Thumb_2016-11-14_08-03-51_Sambar_2_(3867178921).jpg',	'Thumb_2016-11-14_08-03-51_Sambar_2_(3867178921).jpg',	0,	'ANI-01-R-1',	0,	'',	0,	0),
(10,	'2016-11-14_08-07-56_Muntjac_in_Central_India.jpg',	'Thumb_2016-11-14_08-07-53_Muntjac_in_Central_India.jpg',	'Thumb_2016-11-14_08-07-53_Muntjac_in_Central_India.jpg',	0,	'ANI-01-R-2',	1,	'',	0,	0),
(11,	'2016-11-14_08-12-36_Boleophthalmus_boddarti_-_Laem_Phak_Bia.jpg',	'Thumb_2016-11-14_08-12-33_Boleophthalmus_boddarti_-_Laem_Phak_Bia.jpg',	'Thumb_2016-11-14_08-12-33_Boleophthalmus_boddarti_-_Laem_Phak_Bia.jpg',	0,	'ANI-01-F-1',	1,	'',	0,	0),
(12,	'2016-11-14_08-15-18_Betta_splendens_fighting.jpg',	'Thumb_2016-11-14_08-15-14_Betta_splendens_fighting.jpg',	'Thumb_2016-11-14_08-15-15_Betta_splendens_fighting.jpg',	0,	'ANI-01-F-2',	1,	'',	0,	0),
(13,	'2016-11-14_08-17-35_Gallus_gallus_male_Kaziranga_1.jpg',	'Thumb_2016-11-14_08-17-32_Gallus_gallus_male_Kaziranga_1.jpg',	'Thumb_2016-11-14_08-17-32_Gallus_gallus_male_Kaziranga_1.jpg',	0,	'ANI-01-H-1',	1,	'',	0,	0),
(14,	'2016-11-14_08-23-26_Brown_Bear_us_fish.jpg',	'Thumb_2016-11-14_08-23-23_Brown_Bear_us_fish.jpg',	'Thumb_2016-11-14_08-23-23_Brown_Bear_us_fish.jpg',	0,	'ANI-01-R-4',	1,	'',	0,	0),
(15,	'2016-11-14_08-26-11_800px-Arabian_Purebred_Stallion_0001.jpg',	'Thumb_2016-11-14_08-26-08_800px-Arabian_Purebred_Stallion_0001.jpg',	'Thumb_2016-11-14_08-26-08_800px-Arabian_Purebred_Stallion_0001.jpg',	0,	'ANI-01-R-9',	1,	'',	0,	0),
(16,	'2016-11-14_08-28-14_201312181305a_(Hartmann_Linge)_Sukhothai_cattle.jpg',	'Thumb_2016-11-14_08-28-11_201312181305a_(Hartmann_Linge)_Sukhothai_cattle.jpg',	'Thumb_2016-11-14_08-28-11_201312181305a_(Hartmann_Linge)_Sukhothai_cattle.jpg',	0,	'ANI-01-F-5',	1,	'',	0,	0),
(17,	'2017-08-22_10-48-12_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-48-09_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-48-09_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	0,	'ANI-01-R-1',	1,	'0',	0,	0),
(18,	'2017-08-22_10-49-06_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-49-03_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-49-03_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	0,	'เพิ่มข้อมูลสัตว์',	0,	'0',	0,	0);

DROP TABLE IF EXISTS `botanic_animal_upload`;
CREATE TABLE `botanic_animal_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_animal_upload` (`bpu_id`, `bpu_file`, `bpu_upload_time`, `obj_id`) VALUES
(3,	'4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'2017-08-22 02:52:21',	11),
(4,	'pdf.png',	'2017-08-22 03:44:28',	2),
(5,	'4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch_1.jpg',	'2017-08-22 03:48:55',	13);

DROP TABLE IF EXISTS `botanic_bio_category`;
CREATE TABLE `botanic_bio_category` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` text NOT NULL,
  `cat1_parent` int(11) NOT NULL,
  PRIMARY KEY (`cat1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_bio_category` (`cat1_id`, `cat1_name`, `cat1_parent`) VALUES
(1,	'ffff',	0),
(2,	'หฟกฟหก',	0);

DROP TABLE IF EXISTS `botanic_bio_category_lv2`;
CREATE TABLE `botanic_bio_category_lv2` (
  `ac2_id` int(4) NOT NULL AUTO_INCREMENT,
  `ac2_name` varchar(50) NOT NULL,
  `ac1_id` int(11) NOT NULL,
  PRIMARY KEY (`ac2_id`),
  KEY `ac1_id` (`ac1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_bio_category_lv2` (`ac2_id`, `ac2_name`, `ac1_id`) VALUES
(2,	'ฟหกฟหก',	1);

DROP TABLE IF EXISTS `botanic_bio_category_lv3`;
CREATE TABLE `botanic_bio_category_lv3` (
  `ac3_id` int(5) NOT NULL AUTO_INCREMENT,
  `ac3_name` varchar(50) NOT NULL,
  `ac2_id` int(4) NOT NULL,
  PRIMARY KEY (`ac3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `botanic_bio_object`;
CREATE TABLE `botanic_bio_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_identity` text NOT NULL,
  `obj_desc` text NOT NULL,
  `obj_area` text NOT NULL,
  `obj_date` varchar(40) NOT NULL,
  `obj_comment` text NOT NULL,
  `obj_cate` int(4) NOT NULL,
  `obj_access` int(1) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_bio_object` (`obj_id`, `obj_refcode`, `obj_title`, `obj_creator`, `obj_identity`, `obj_desc`, `obj_area`, `obj_date`, `obj_comment`, `obj_cate`, `obj_access`, `obj_cate2`, `obj_cate3`) VALUES
(4,	'เพิ่มข้อมูลชีวภาพ1',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'22-08-2017',	'เพิ่มข้อมูลชีวภาพ',	1,	1,	0,	0),
(5,	'aaa',	'aaaaa',	'aaaa',	'aaaaa',	'aaaa',	'aaaa',	'23-08-2017',	'aaa',	1,	1,	0,	0),
(6,	'aaa',	'aaaa',	'aaa',	'aaaa',	'aaaa',	'aaaaa',	'22-08-2017',	'',	0,	1,	0,	0),
(7,	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'เพิ่มข้อมูลชีวภาพ',	'22-08-2017',	'เพิ่มข้อมูลชีวภาพ',	1,	1,	0,	0);

DROP TABLE IF EXISTS `botanic_bio_pic`;
CREATE TABLE `botanic_bio_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_bio_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(1,	'2017-08-22_10-53-27_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-53-24_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-53-24_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	0,	'เพิ่มข้อมูลชีวภาพ',	1,	'0',	0,	0);

DROP TABLE IF EXISTS `botanic_bio_upload`;
CREATE TABLE `botanic_bio_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_bio_upload` (`bpu_id`, `bpu_file`, `bpu_upload_time`, `obj_id`) VALUES
(1,	'if_pdfs_774684.png',	'2017-08-22 02:39:03',	6),
(2,	'4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'2017-08-22 02:52:47',	1),
(3,	'4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'2017-08-22 03:49:36',	4);

DROP TABLE IF EXISTS `botanic_idea_category`;
CREATE TABLE `botanic_idea_category` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` text NOT NULL,
  `cat1_parent` int(11) NOT NULL,
  PRIMARY KEY (`cat1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_idea_category` (`cat1_id`, `cat1_name`, `cat1_parent`) VALUES
(1,	'ddd',	0);

DROP TABLE IF EXISTS `botanic_idea_category_lv2`;
CREATE TABLE `botanic_idea_category_lv2` (
  `ac2_id` int(4) NOT NULL AUTO_INCREMENT,
  `ac2_name` varchar(50) NOT NULL,
  `ac1_id` int(11) NOT NULL,
  PRIMARY KEY (`ac2_id`),
  KEY `ac1_id` (`ac1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_idea_category_lv2` (`ac2_id`, `ac2_name`, `ac1_id`) VALUES
(1,	'ddd',	1);

DROP TABLE IF EXISTS `botanic_idea_category_lv3`;
CREATE TABLE `botanic_idea_category_lv3` (
  `ac3_id` int(5) NOT NULL AUTO_INCREMENT,
  `ac3_name` varchar(50) NOT NULL,
  `ac2_id` int(4) NOT NULL,
  PRIMARY KEY (`ac3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_idea_category_lv3` (`ac3_id`, `ac3_name`, `ac2_id`) VALUES
(1,	'ddd',	1);

DROP TABLE IF EXISTS `botanic_idea_object`;
CREATE TABLE `botanic_idea_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_identity` text NOT NULL,
  `obj_desc` text NOT NULL,
  `obj_area` text NOT NULL,
  `obj_date` varchar(40) NOT NULL,
  `obj_comment` text NOT NULL,
  `obj_cate` int(4) NOT NULL,
  `obj_access` int(1) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_idea_object` (`obj_id`, `obj_refcode`, `obj_title`, `obj_creator`, `obj_identity`, `obj_desc`, `obj_area`, `obj_date`, `obj_comment`, `obj_cate`, `obj_access`, `obj_cate2`, `obj_cate3`) VALUES
(68,	'ข้าวเปลือกแม่ละเมาะ',	'เข้าเปลือกแม้อีเมาะ',	'แม่อีเมาะ',	'เป็ยข้าวสารที่แม่อีเมาะเป็นคนปลูกมาขาย',	'เอามากินกับกับข้าว',	'ทุ่งนาบ้านแม่อีเมาะ',	'29-08-2017',	'ติดต่อ แม่อีเมาะ 0825526554',	1,	2,	1,	1),
(79,	'sdasd',	'asdas',	'asd',	'dasdad',	'asdasd',	'asdasdas',	'25-08-2017',	'asd',	1,	1,	1,	1),
(82,	'111',	'111',	'121212',	'1111',	'11',	'1121212',	'31-08-2017',	'21212',	1,	1,	1,	1),
(93,	'TL1122',	'เพิ่ม',	'ไม่มี',	'ไม่มี',	'ไม่มี',	'ไม่มี',	'23-08-2017',	'',	1,	1,	0,	0),
(94,	'ภูมิปันยา',	'ภูมิปันยา',	'ภูมิปันยา',	'ภูมิปันยา',	'ภูมิปันยา',	'ภูมิปันยา',	'24-08-2017',	'ภูมิปันยา',	1,	1,	0,	0),
(95,	'DAY TEST',	'DAY TEST',	'DAY TEST',	'DAY TEST',	'DAY TEST',	'DAY TEST',	'22-08-2017',	'DAY TEST',	1,	1,	1,	1);

DROP TABLE IF EXISTS `botanic_idea_pic`;
CREATE TABLE `botanic_idea_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_idea_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(11,	'2016-11-11_07-31-48_m-culture-2.png',	'Thumb_2016-11-11_07-31-45_m-culture-2.png',	'Thumb_2016-11-11_07-31-45_m-culture-2.png',	0,	'id123',	1,	'',	0,	0),
(9,	'2016-11-11_07-31-42_emuseum-3.png',	'Thumb_2016-11-11_07-31-39_emuseum-3.png',	'Thumb_2016-11-11_07-31-39_emuseum-3.png',	0,	'id123',	0,	'',	0,	0),
(10,	'2016-11-11_07-31-45_m-culture-1.png',	'Thumb_2016-11-11_07-31-42_m-culture-1.png',	'Thumb_2016-11-11_07-31-42_m-culture-1.png',	0,	'id123',	0,	'',	0,	0),
(8,	'2016-11-11_07-31-38_emuseum-2.png',	'Thumb_2016-11-11_07-31-35_emuseum-2.png',	'Thumb_2016-11-11_07-31-35_emuseum-2.png',	0,	'id123',	0,	'',	0,	0),
(7,	'2016-11-11_07-31-35_emuseum-1.png',	'Thumb_2016-11-11_07-31-32_emuseum-1.png',	'Thumb_2016-11-11_07-31-32_emuseum-1.png',	0,	'id123',	0,	'',	0,	0),
(12,	'qq',	'qq',	'qq',	0,	'qqqq',	0,	'qqq',	0,	0),
(13,	'2017-08-22_10-59-43_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-59-40_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-59-40_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	0,	'DAY TEST',	1,	'0',	0,	0);

DROP TABLE IF EXISTS `botanic_idea_upload`;
CREATE TABLE `botanic_idea_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_idea_upload` (`bpu_id`, `bpu_file`, `bpu_upload_time`, `obj_id`) VALUES
(1,	'DotaSentinel.pdf',	'2016-10-22 20:00:08',	1),
(3,	'map_16.jpg',	'2017-08-22 01:35:27',	93),
(5,	'4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'2017-08-22 02:51:20',	95),
(6,	'4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'2017-08-22 02:56:10',	68);

DROP TABLE IF EXISTS `botanic_plant_category`;
CREATE TABLE `botanic_plant_category` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` text NOT NULL,
  `cat1_parent` int(11) NOT NULL,
  PRIMARY KEY (`cat1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_plant_category` (`cat1_id`, `cat1_name`, `cat1_parent`) VALUES
(3,	'AAAAAAad',	0),
(4,	'BBBBBB',	0),
(6,	'ก',	0),
(5,	'555d',	0),
(7,	'กกกก',	4),
(8,	'กก',	0),
(9,	'dd',	4),
(10,	'xddd',	0),
(11,	'dd',	6),
(12,	'dd',	6);

DROP TABLE IF EXISTS `botanic_plant_category_lv2`;
CREATE TABLE `botanic_plant_category_lv2` (
  `ac2_id` int(4) NOT NULL AUTO_INCREMENT,
  `ac2_name` varchar(50) NOT NULL,
  `ac1_id` int(11) NOT NULL,
  PRIMARY KEY (`ac2_id`),
  KEY `ac1_id` (`ac1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_plant_category_lv2` (`ac2_id`, `ac2_name`, `ac1_id`) VALUES
(1,	'aa22222222222',	1),
(2,	'wwwwwwwwwwwwwwwwww',	2),
(3,	'dddd',	4),
(4,	'กกก',	3),
(5,	'ฟกหหฟกหฟกห',	4),
(6,	'ฟหกหก',	8);

DROP TABLE IF EXISTS `botanic_plant_category_lv3`;
CREATE TABLE `botanic_plant_category_lv3` (
  `ac3_id` int(5) NOT NULL AUTO_INCREMENT,
  `ac3_name` varchar(50) NOT NULL,
  `ac2_id` int(4) NOT NULL,
  PRIMARY KEY (`ac3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_plant_category_lv3` (`ac3_id`, `ac3_name`, `ac2_id`) VALUES
(1,	'aaaa3333333333333',	1),
(2,	'eeeeeeeeee',	1);

DROP TABLE IF EXISTS `botanic_plant_object`;
CREATE TABLE `botanic_plant_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_identity` text NOT NULL,
  `obj_desc` text NOT NULL,
  `obj_area` text NOT NULL,
  `obj_date` varchar(40) NOT NULL,
  `obj_comment` text NOT NULL,
  `obj_cate` int(4) NOT NULL,
  `obj_access` int(1) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_plant_object` (`obj_id`, `obj_refcode`, `obj_title`, `obj_creator`, `obj_identity`, `obj_desc`, `obj_area`, `obj_date`, `obj_comment`, `obj_cate`, `obj_access`, `obj_cate2`, `obj_cate3`) VALUES
(1,	'PTT',	'ดอกแม้วบนดอยคอยสวรรค์',	'อีแม้วมั่งC',	'เป็นพืชยืนต้นล้มรุกคลุกคลาน ดอกมีสีขาวสนิด ทั้งใบ และมีลายสี แดงพาดดอก เป็นรูปแม้ว เมื่อมีอายุ 5 ปี จะยืนต้นทันที ',	'แม้วเอามาทำเป็นยาบำรุงร่างกายไว้กินแก้หนาว ยามีสรรพคุณเย็น ทำให้ร่างกายเย็นตัวลงเหมาะกับหน้าหนาว อย่างยิ่ง ยิ่งกินยิ่งหน้า ',	'โตบนดอยแม่แม้วเท่านั้น ไม่มีข้อมูลพบที่อื่น ชาวบ้าน ภาคใต้ชอบนำมาปลูกบริเวรบ้าน',	'22-08-2017',	'55',	3,	0,	0,	0),
(2,	'sdfdsd',	'fsdfddddddddddddddddddd',	'ttttt',	'asfds',	'afsdaf',	'sadfawds',	'21-10-2016',	'3esrdfsg',	4,	1,	0,	0),
(6,	'พันไม้',	'พันไม้',	'พันไม้',	'พันไม้',	'พันไม้',	'พันไม้',	'30-08-2017',	'พันไม้',	4,	1,	0,	0),
(9,	'qqaawwsseddd',	'qqaawwsseddd',	'',	'',	'qqaaa',	'',	'22-08-2017',	'',	0,	1,	0,	0),
(10,	'1q2w',	'111qqq',	'',	'11qqq',	'11qqq',	'',	'',	'',	0,	1,	0,	0),
(11,	'ทดสอบ',	'ทดสอบ',	'ทดสอบ',	'ทดสอบ',	'ทดสอบ',	'ทดสอบ',	'22-08-2017',	'',	3,	1,	0,	0),
(12,	'พันไม้',	'พันไม้',	'พันไม้',	'พันไม้',	'พันไม้',	'พันไม้',	'30-08-2017',	'พันไม้',	4,	1,	0,	0);

DROP TABLE IF EXISTS `botanic_plant_pic`;
CREATE TABLE `botanic_plant_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `botanic_plant_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(6,	'2016-10-09_16-54-17_Putue 1.jpg',	'Thumb_2016-10-09_16-54-14_Putue 1.jpg',	'Thumb_2016-10-09_16-54-14_Putue 1.jpg',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	1,	'',	0,	0),
(3,	'2016-10-09_15-38-27_Map.jpg',	'Thumb_2016-10-09_15-38-24_Map.jpg',	'Thumb_2016-10-09_15-38-24_Map.jpg',	0,	'',	0,	'',	0,	0),
(8,	'2016-10-09_18-47-13_Map.jpg',	'Thumb_2016-10-09_18-47-10_Map.jpg',	'Thumb_2016-10-09_18-47-10_Map.jpg',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	0,	'',	1,	0),
(11,	'2016-10-10_04-16-19_OfmJv4ux.jpeg',	'Thumb_2016-10-10_04-16-16_OfmJv4ux.jpeg',	'Thumb_2016-10-10_04-16-16_OfmJv4ux.jpeg',	0,	'sdfdsd',	1,	'',	1,	0),
(10,	'2016-10-10_04-15-07_Map.jpg',	'Thumb_2016-10-10_04-15-04_Map.jpg',	'Thumb_2016-10-10_04-15-04_Map.jpg',	0,	'sdfdsd',	0,	'',	2,	0),
(12,	'2016-10-10_04-16-22_tumblr_nfm8wuWPkh1sajurvo1_500.jpg',	'Thumb_2016-10-10_04-16-19_tumblr_nfm8wuWPkh1sajurvo1_500.jpg',	'Thumb_2016-10-10_04-16-19_tumblr_nfm8wuWPkh1sajurvo1_500.jpg',	0,	'sdfdsd',	0,	'',	0,	1),
(17,	'2016-10-31_06-56-26_1.jpg',	'Thumb_2016-10-31_06-56-23_1.jpg',	'Thumb_2016-10-31_06-56-23_1.jpg',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	0,	'',	2,	0),
(14,	'2016-10-21_11-48-44_14349144_208225289594216_1063696665_n.jpg',	'Thumb_2016-10-21_11-48-41_14349144_208225289594216_1063696665_n.jpg',	'Thumb_2016-10-21_11-48-41_14349144_208225289594216_1063696665_n.jpg',	0,	'anm_665',	0,	'',	0,	0),
(15,	'2016-10-21_11-48-47_14356124_208225319594213_762746207_n.jpg',	'Thumb_2016-10-21_11-48-44_14356124_208225319594213_762746207_n.jpg',	'Thumb_2016-10-21_11-48-44_14356124_208225319594213_762746207_n.jpg',	0,	'anm_665',	0,	'',	0,	0),
(16,	'2016-10-21_11-48-51_14383270_208225329594212_1582758257_n.jpg',	'Thumb_2016-10-21_11-48-47_14383270_208225329594212_1582758257_n.jpg',	'Thumb_2016-10-21_11-48-48_14383270_208225329594212_1582758257_n.jpg',	0,	'anm_665',	0,	'',	0,	0),
(18,	'2016-10-31_06-56-30_2.jpg',	'Thumb_2016-10-31_06-56-26_2.jpg',	'Thumb_2016-10-31_06-56-27_2.jpg',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	0,	'<p>eeeeeeeeeeeeeeeeeeeeeeeee</p>\r\n',	4,	0),
(19,	'2016-10-31_06-56-33_3.jpg',	'Thumb_2016-10-31_06-56-30_3.jpg',	'Thumb_2016-10-31_06-56-30_3.jpg',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	0,	'',	3,	0),
(21,	'2016-11-10_15-11-33_emuseum-2.png',	'Thumb_2016-11-10_15-11-30_emuseum-2.png',	'Thumb_2016-11-10_15-11-30_emuseum-2.png',	0,	't333',	1,	'',	0,	0),
(24,	'2017-01-26_10-09-10_hologram06.mp4',	'Thumb_2017-01-26_10-09-07_hologram06.mp4',	'Thumb_2017-01-26_10-09-07_hologram06.mp4',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	0,	'',	0,	0),
(28,	'2017-06-16_11-03-47_Logo.jpg',	'Thumb_2017-06-16_11-03-44_Logo.jpg',	'Thumb_2017-06-16_11-03-44_Logo.jpg',	0,	'weeeeeeeeeeeeeeeeedfgfsg',	0,	'',	0,	0),
(29,	'qq1',	'qqq',	'qqq',	0,	'qqq',	0,	'qqq',	0,	0),
(30,	'111',	'11111',	'1111',	0,	'',	0,	'11111',	0,	0),
(31,	'2017-08-22_10-42-38_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-42-35_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	'Thumb_2017-08-22_10-42-35_4705e78e484bd41ba317053174371399--totoro-draw-hayao-miyazaki-sketch.jpg',	0,	'PTT',	0,	'0',	0,	0);

DROP TABLE IF EXISTS `botanic_plant_upload`;
CREATE TABLE `botanic_plant_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `botanic_plant_upload` (`bpu_id`, `bpu_file`, `bpu_upload_time`, `obj_id`) VALUES
(9,	'DS-V2.pdf',	'2016-10-21 02:12:47',	3),
(12,	'DS-V2.pdf',	'2016-10-21 02:12:47',	1),
(15,	'DS-V2_3.pdf',	'2016-10-21 02:12:47',	1),
(21,	'pdf.png',	'2017-08-22 02:47:07',	11),
(22,	'YYYYYYY-11.jpg',	'2017-08-22 02:47:20',	11);

DROP TABLE IF EXISTS `copy_muse_bg`;
CREATE TABLE `copy_muse_bg` (
  `bg_id` int(11) NOT NULL,
  `bg_name` text NOT NULL,
  `bg_desc` text NOT NULL,
  `bg_entry` text NOT NULL,
  `bg_lat` float NOT NULL,
  `bg_lon` float NOT NULL,
  `bg_number` text NOT NULL,
  `bg_tambon` text NOT NULL,
  `bg_ampher` text NOT NULL,
  `bg_city` text NOT NULL,
  `bg_postcode` text NOT NULL,
  `bg_tel` text NOT NULL,
  `bg_email` text NOT NULL,
  `bg_website` text NOT NULL,
  `bg_pic` text NOT NULL,
  `bg_picshow` int(11) NOT NULL,
  `bg_watermark` text NOT NULL,
  `bg_watermarkshow` int(11) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `copy_muse_bg` (`bg_id`, `bg_name`, `bg_desc`, `bg_entry`, `bg_lat`, `bg_lon`, `bg_number`, `bg_tambon`, `bg_ampher`, `bg_city`, `bg_postcode`, `bg_tel`, `bg_email`, `bg_website`, `bg_pic`, `bg_picshow`, `bg_watermark`, `bg_watermarkshow`) VALUES
(1,	'พิพิธภัณฑ์วัดมงคลทุ่งแป้ง',	'วัดมงคลทุ่งแป้ง ถือเป็นวัดเก่าแก่ มีอายุประมาณ 500 ปีขึ้นไป ภายในวัดปรากฎซากโบราณสถาน ได้แก่ ซุ้มประตูโขงทางด้านทิศเหนือและทิศตะวันตก นอกจากนี้ยังมีวิหารเก่าที่มีความสวยงามภายในประดิษฐานพระพุทธรูปปางมารวิชัย ซึ่งวิหารดังกล่าวปัจจุบันได้รับการบูรณะเป็นที่เรียบร้อยแต่ยังคงไว้ซึ่งเอกลักษณ์และความสวยงามดั้งเดิม ซึ่งจากการบูรณะวิหารดังกล่าว เจ้าอาวาสรุ่นก่อน ๆ ได้เห็นถึงความสำคัญของส่วนประกอบของวิหารเก่า จึงได้จัดเก็บและรักษาไว้เพื่อให้คนรุ่นหลังได้ชมความเก่าแก่ของวิหารนี้ ไม่เพียงแค่นั้นต่อมาได้นำโบราณวัตถุต่าง ๆ ที่พบในวัด ได้แก่ ข้าวของเครื่องใช้ของพระภิกษุสงฆ์แต่เดิม และวัตถุที่ชาวบ้านที่มีจิตศรัทธานำมาถวายในอดีต โดยนำมาจัดแสดงภายในตู้กระจกภายในวิหารของวัด',	'เปิดทำการ วันอังคาร - วันอาทิตย์\r\nเวลา 09.00 น. - 17.00 น.',	14.0933,	100.615,	'142sl',	'วัดเกต',	'เมือง',	'38',	'50000',	'08-9850-1252',	'xx',	' xx',	'182615543514454693_1180410368700860_406583955_n.jpg',	1,	'watermark.jpg',	0);

DROP TABLE IF EXISTS `copy_muse_object`;
CREATE TABLE `copy_muse_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_titleeng` text NOT NULL,
  `obj_datecreate` text NOT NULL,
  `obj_level` text NOT NULL,
  `obj_extent` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_bio` text NOT NULL,
  `obj_dateacc` text NOT NULL,
  `obj_history` text NOT NULL,
  `obj_acquis` text NOT NULL,
  `obj_scope` text NOT NULL,
  `obj_appraisal` text NOT NULL,
  `obj_accruals` text NOT NULL,
  `obj_arrangement` text NOT NULL,
  `obj_legal` text NOT NULL,
  `obj_condition` text NOT NULL,
  `obj_copyright` text NOT NULL,
  `obj_lang` text NOT NULL,
  `obj_physicals` text NOT NULL,
  `obj_physicalseng` text NOT NULL,
  `obj_aids` text NOT NULL,
  `obj_location` text NOT NULL,
  `obj_existence` text NOT NULL,
  `obj_related` text NOT NULL,
  `obj_associated` text NOT NULL,
  `obj_pubnote` text NOT NULL,
  `obj_note` text NOT NULL,
  `obj_date` text NOT NULL,
  `obj_category` int(11) NOT NULL,
  `obj_access` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `obj_keyword` text NOT NULL,
  `obj_approve` int(11) NOT NULL,
  `obj_relation` text NOT NULL,
  `obj_display` int(11) NOT NULL,
  `obj_location_display` int(11) NOT NULL,
  `obj_existence_display` int(11) NOT NULL,
  `obj_creator_display` int(11) NOT NULL,
  `obj_bio_display` int(11) NOT NULL,
  `obj_dateacc_display` int(11) NOT NULL,
  `obj_history_display` int(11) NOT NULL,
  `obj_acquis_display` int(11) NOT NULL,
  `obj_downloadfile` text NOT NULL,
  `obj_download` int(11) NOT NULL,
  `obj_countdownload` int(11) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `copy_muse_object` (`obj_id`, `obj_refcode`, `obj_title`, `obj_titleeng`, `obj_datecreate`, `obj_level`, `obj_extent`, `obj_creator`, `obj_bio`, `obj_dateacc`, `obj_history`, `obj_acquis`, `obj_scope`, `obj_appraisal`, `obj_accruals`, `obj_arrangement`, `obj_legal`, `obj_condition`, `obj_copyright`, `obj_lang`, `obj_physicals`, `obj_physicalseng`, `obj_aids`, `obj_location`, `obj_existence`, `obj_related`, `obj_associated`, `obj_pubnote`, `obj_note`, `obj_date`, `obj_category`, `obj_access`, `user_id`, `obj_keyword`, `obj_approve`, `obj_relation`, `obj_display`, `obj_location_display`, `obj_existence_display`, `obj_creator_display`, `obj_bio_display`, `obj_dateacc_display`, `obj_history_display`, `obj_acquis_display`, `obj_downloadfile`, `obj_download`, `obj_countdownload`, `obj_cate2`, `obj_cate3`) VALUES
(1,	'TP2559-0027',	'พิพิธภัณฑ์ วัดมงคลทุ่งแป้ง',	'',	'2017-09-15',	'',	'ส. 5.8 ซม. ก. 4 ซม. ย. 5.2 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นปูนปั้นรูปนกตัวเล็กรูปร่างค่อนข้างอ้วนท้วม ขาสั้น ตกแต่งด้วยรอยขูดขีดบริเวณปีกของนก มีตาและมีจะงอยปาก ผิวเป็นเคลือบสีด้วยสีเทา ยกเว้นบริเวณส่วนขาและปีกหางด้านล่างมีร่องรอยชำรุดบริเวณเท้าและหาง\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(2,	'TP2559-0026',	'ดอกปูนปั้นติดแก้วจืนประดับฐานพระประธาน',	'',	'2017-09-15',	'',	'ส. 0.5 ซม. ก. 6 ซม. ย. 4 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากปูนปั้น ติดตรงฐานพระพุทธรูป ตรงกลางติดกระจก ผิวของปูนปั้นค่อนข้างหยาบ สีน้ำตาลดำ มีร่องรอยชำรุดบริเวณตรงกลางที่ติดกระจก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(3,	'TP2559/0025',	'ก้นหอยพระพุทธรูปโบราณ(เกศาพระเจ้า)',	'',	'2017-09-15',	'',	'ส. 3.2 ซม. ก. 3.9 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นปูนปั้นทำเป็นเส้นวางขดซ้อนลดหลั่นกันขึ้นไป 3 ชั้นเหมือนก้นหอย เป็นสีน้ำตาลอมดำ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(4,	'TP2559/0024',	'ดอกปูนปั้นติดแก้วจืนประดับฐานพระประธาน',	'',	'--',	'',	'ส. 0.5 ซม. ก. 4 ซม. ย. 5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นดอกปูนปั้นที่ติดแก้วจืนสีเขียวไว้ตรงกลาง มีกลีบดอกประดับอยู่รอบวง กลีบดอกตกแต่งด้วยลายขูดขีดและทาสีด้วยสีแดง มีร่องรอยชำรุดตรงปลายกลีบดอกบางส่วน และสีแดงที่ทาตรงกลีบดอกก็มีรอยถลอกมากแล้ว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(5,	'TP2559/0023',	'ดอกปูนปั้นติดแก้วจืนประดับฐานพระประธาน',	'',	'2017-09-15',	'',	'ส. 0.5 ซม. ก. 4.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นดอกปูนปั้นที่ติดแก้วจืนไว้ตรงกลางดอก แก้วจืนมีสีเขียวกลีบดอกทาสีแดง แต่สีถลอกมากแล้วมีรอยขีดประดับตกแต่งตรงกลีบดอกมีร่องรอยชำรุด\r\nตรงกลีบดอกหักหายไปบางส่วน',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(6,	'TP2559/0041',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 3 ซม. ก. 10 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่แหล่มปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา โดยรวมแล้วแตกหักบางส่วน ทำให้วัตถุชำรุด\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(7,	'TP2559/0040',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.2 ซม. ก. 12.1 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่แหล่มปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใชมุมหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา มีร่องรอยชำรุดแตกหักเหลือเพียงครึ่งเดียว และตรงขอแตกหักเล็กน้อย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(8,	'TP2559/0039',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.5 ซม. ก. 15.9 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่แหล่มปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา มีร่องรอยชำรุดแตกหักเหลือเพียงครึ่งเดียว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(9,	'TP2559/0037',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.1 ซม. ก. 21.4 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(10,	'TP2559/0036',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2 ซม. ก. 21.7 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(11,	'TP2559/0035',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.3 ซม. ก. 2.2 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอ ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(12,	'TP2559/0034',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส.1.7 ซม. ก. 21.7 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อยึดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ตกแต่งด้วยลวดลายดอกล้านนา มีร่องรอยชำรุดบริเวณด้านข้างและปลายตัดอีกข้างหนึ่ง\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(13,	'TP2559/0033',	'บูยาโบราณรูปหัวเทวดา',	'',	'2017-09-15',	'',	'ส. 3.7 ซม. ก. 2.2 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากดินเผาเคลือบสีดำเป็นรูปศีรษะเทวดา ลักษณะติ่งพระกรรณยาว ปากแบะ จมูกแบน มีไรพระศก ด้านบนเป็นช่องสำหรับใส่ยาสูบ ด้านล่างบริเวณหลังคอเทวดามีรูเล็ก ๆ สำหรับต่อด้ามเพื่อสูบ สันนิษฐานว่าคงจะใช้ไม้ไผ่เป็นด้าม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(14,	'TP2559/0032',	'บูยาดิน',	'',	'2017-09-15',	'',	'ส. 3.1 ซม. ก. 3 ซม. ฐก. 1.6 ซม ปก. 1.6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นท่อยาวมีหลุมเล็ก ๆ สำหรับใส่ยาสูบ ตรงกล้องยาแตกหัก ประดับด้วยลวดลายกลีบดอกบัว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(15,	'TP2559/0022',	'พระหินอ่อนศิลปะพุกามพม่า',	'',	'2017-09-15',	'',	'ตก. 9 ซม. ฐส. 4 ซม. สอ. 15 ซม. สฐ. 18.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นพระพุทธรูปหินอ่อนศิลปะพุกามพม่า นั่งขัดสมาธิราบปางมารวิชัย ชายสังฆาฏิยาว พระกัณฑ์ยาวถึง พระอังสะ พระรัศมีเป็นรูปดอกบัวตูม พระเกศาเรียบ พระพุทธรูปประทับนั่งอยู่บนฐานเขียง ด้านล่างของฐานเป็นรูโหว่\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	3,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(16,	'TP2559/0018',	'พระหินอ่อนศิลปะพุกามพม่า',	'',	'2017-09-15',	'',	'ตก. 9.5 ซม. ฐส. 4.7 ซม. สอ. 15 ซม. สฐ. 19.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นพระพุทธรูปทำจากหินอ่อน ปางมารวิชัย นั่งขัดสมาธิราบ ชายสังฆาฏิยาว พระรัศมีมีรูปดอกบัวตูม ติ่งพระกัณฑ์ยาวถึงพระอังสา พระเนตรหรี่ลงต่ำ ลักษณะฐานเป็นฐานเขียง ส่วนด้านล่างพื้นของฐานเป็นรูโหว่ มีรอยชำรุดตรงปลายพระรัศมี\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	3,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(17,	'TP2559/0007',	'เครื่องถ้วยลายครามศิลปะจีนโบราณ',	'',	'2017-09-15',	'',	'ก. 13.5 ซม. ฐก. 6 ซม. สฐ. 6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นถ้วยลายครามแบบศิลปะจีน โดยมีลวดลายที่ต่างไปจากเครื่องถ้วยจีนที่มีลวดลายดอกโบตั๋น แต่มีลายก้นหอยปนอยู่\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(18,	'TP2559/0013',	'เครื่องถ้วยตราไก่สมัยโบราณ',	'',	'2017-09-15',	'',	'ก.14 ซม. ฐก.6 ซม. สฐ.6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยที่ทำมาจากดินเผาสีขาว มีการวาดลวดลายตราไก่แบบสมัยโบราณ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(19,	'TP2559/0008',	'TP2559/0008',	'',	'2017-09-15',	'',	'ก.16 ซม. ฐก. 8.5 ซม. สฐ. 6.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เครื่องถ้วยดินเผาเคลือบสีขาว ใช้หมึกสีน้ำเงินในการวาด ปากถ้วยมีรอยหยักอยู่รอบ ๆ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(20,	'TP2559/0009',	'เครื่องถ้วยตราไก่สมัยโบราณ',	'',	'2017-09-15',	'',	'ก. 15 ซม. ฐก. 6.5 ซม. สฐ. 6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยทำมาจากดินเผาเคลือบ วาดลายรูปไก่สีดำ-แดง รูปดอกไม้สีชมพู และรูปใบไม้สีเขียว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(21,	'TP2559/0012',	'น้ำต้น',	'',	'2017-09-15',	'',	'ส. 27 ซม. ปก. 8 ซม. ศก. 17.5 ซม. ฐก. 8.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องปั้นดินเผาเคลือบ สีน้ำตาล มีรอยเชือกทาบอยู่ 3 จุด คือ บริเวณคอน้ำต้น 2 จุด และตรงก้นน้ำต้นอีก 1 จุด ตกแต่งบริเวณลำตัวของน้ำต้นด้วยรอยขีดแบบเฉียงอีก 4 รอย รอบลำตัว มีร่องรอยชำรุดตรงบริเวณปากน้ำต้นเล็กน้อย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(22,	'TP2559/0011',	'น้ำต้นสีดำ',	'',	'2017-09-15',	'',	'ส. 28 ซม. ปก. 3.5 ซม. ศก. 18.5 ซม. ฐก. 10 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องปั้นดินเผาเคลือบสีดำ เป็นศิลปะล้านนาผสมแบบหริภุญไชย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(23,	'TP2559/0010',	'น้ำต้น',	'',	'2017-09-15',	'',	'ส. 29 ซม. ปก. 5.5 ซม. ศก. 17 ซม. ฐก. 8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำมาจากดินเผาแต่เคลือบไม่หมด สีแดงน้ำตาล มีร่องรอยชำรุดตรงบริเวณปาก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(24,	'TP2559/0006',	'เครื่องถ้วยลายครามศิลปะจีนโบราณ',	'',	'2017-09-15',	'',	'ก. 13 ซม. ฐก. 7 ซม. สฐ. 5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยศิลปะจีน ใช้หมึกสีน้ำเงินในการวาด มีเส้นสีน้ำเงิน 2 เส้นอยู่ตรงกลางถ้วย และอีก 1 เส้นอยู่ตรงปากถ้วย และมีลวดลายดอกไม้รอบๆถ้วย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(25,	'TP2559/0005',	'เครื่องถ้วยตราไก่โบราณ',	'',	'2017-09-15',	'',	'ก. 15 ซม. ฐก. 6.5 ซม. สฐ. 6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยดินเผาเคลือบสีขาว สภาพเก่ามากมีร่องรอยแตกร้าวบริเวณรอบๆถ้วย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(26,	'TP2559-0004',	'เครื่องถ้วยเคลือบ',	'',	'2017-09-15',	'',	'ปก. 12.5 ซม. ฐก. 6 ซม. สฐ. 4.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยที่ทำมาจากดินเผาเคลือบ ไม่มีลวดลาย ลักษณะสีเป็นสีขาวไข่ บริเวณก้นถ้วยมีเส้นขดเป็นวงไม่เรียบ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-11-23',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(27,	'TP2559/0050',	'พระบุเงินล้านนา ศิลปะเมืองน่าน',	'',	'2017-09-15',	'',	'ตก. 2 ซม. สฐ. 5.5 ซม. สอ. 4.3 ซม. สฐ. 1.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นพระพุทธรูปบุเงินล้านนา ศิลปะเมืองน่าน ปางสมาธิ ชายสังฆาฏิยาว พระรัศมีเป็นรูปเปลวเพลิง พระเกศาขดเป็นรูปก้นหอย พระพุทธรูปนั่งขัดสมาธิบนฐานชุกชี มีร่องรอยแตกหักชำรุดตรงบริเวณพระพาหา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(28,	'TP2559/0049',	'เต้าปูนกินหมาก',	'',	'2017-09-15',	'',	'ฐก. 3.5 ซม. สฝ. 12.5 ซม. สฐ. 7 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นโลหะสีทองเก่าจนเป็นสีดำบางส่วน ฝาเป็นวงกลมซ้อนกัน 3 ชั้น คล้ายบัวถลา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(29,	'TP2559/0048',	'ตุ้มหูนากโบราณ',	'',	'2017-09-15',	'',	'ศก. 1 ซม. ก. 0.6 ซม. ส. 1.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากนาก เป็นโลหะผสมระหว่างทองแดง ทองคำ และเงิน รูปทรงกลมแบนมีส่วนสำหรับสอดเข้ารูหูติดอยู่ มี 2 ข้าง\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(30,	'TP2559/0047',	'กังสะดานโบราณ (ปาล) 2',	'',	'2017-09-15',	'',	'ก.19.2 ซม, ส. 12 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นทรงสามเหลี่ยม คล้ายกับระฆังแต่มีรูปร่างแบน ทำจากโลหะ ด้านบนส่วนหัวเจาะรูไว้สำหรับใส่เชือก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(31,	'TP2559/0046',	'กังสะดานโบราณ',	'',	'2017-09-15',	'',	'ก. 24.5 ซม. ส. 15 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นทรง สามเหลี่ยม คล้ายกับระฆังแต่มีรูปร่างแบน ทำจากโลหะ ด้านบนส่วนหัวเจาะรูไว้สำหรับใส่เชือก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(32,	'TP2559/0045',	'แหวนแก้วโป่งข่ามสมัยโบราณ',	'',	'2017-09-15',	'',	'หัวแหวน ศก. 0.7 ซม. ตัวแหวน ศก. 1.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'หัวแหวนทำจากทองคำ ลักษณะกลมเกือบรี หัวแหวนทำจากแก้วโป่งข่าม (ควอซต์) ประเภทแก้วแร จะเห็นเงาเหลือบระแรอยู่ในเนื้อแก้ว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(33,	'TP2559/0044',	'ตะปูเหล็กลิ่ม (สิงขวานอน)',	'',	'2017-09-15',	'',	'ย. 5.50 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีรูปร่างยาวปลายแหลม ตรงส่วนบริเวณหัวมีลักษณะบิดเบี้ยว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(34,	'TP2559/0043',	'เหล็กลิ่มโบราณตรึงสลักปั้นลมวิหาร',	'',	'2017-09-15',	'',	'ย. 19 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'บริเวณหัวของเหล็กลิ่มมีลักษณะเป็นเหล็กหนารูป สี่เหลี่ยม ยาวลงมาตรงปลายคดงอและเรียวแหลม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(35,	'TP2559/0042',	'เหล็กตรึงหลังช่อฟ้าวิหาร',	'',	'2017-09-15',	'',	'ก. 2 ซม. ย. 8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเหล็กที่มีขนาดเล็กรูปทรงคล้ายตะปู แต่มีลักษณะแบน มีรู ส่วนปลายแหลม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	0,	1,	'',	0,	'',	0,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(36,	'TP2559/0017',	'ตะปูไม้สักโบราณ',	'',	'2017-09-15',	'',	'ย. 5.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากไม้สัก ลักษณะปลายแหลม รูปร่างคล้ายเข็ม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(37,	'TP2559/0016',	'ปั้นลมรูปพญานาคล้านนาโบราณ',	'',	'2017-09-15',	'',	'ส 65 ซม. ย 400 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นไม้แกะสลักรูปพญานาค ประดับตกแต่งด้วยกระจกจืน\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(38,	'TP2559/0014',	'บัวหัวเสาไม้สักประดับกระจกจืน',	'',	'2017-09-15',	'',	'ย. 30 ซม. ส. 3.5 ซม. ก. 4 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากไม้สัก รูปทรงสามเหลี่ยม ปลายแหลมบิดงอขึ้นคล้ายรูปกลีบบัว ส่วนที่ประดับกระจกจืนหลุดไปหมดแล้ว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(39,	'TP2559/0015',	'พระพุทธรูปไม้แกะสลักศิลปะล้านนา',	'',	'2017-09-15',	'',	'สฐ. 9 ซม. สอ. 7 ซม. ฐส. 2 ซม. ตก. 4.50 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'แกะสลักจากไม้ ปางมารวิชัย นั่งขัดสมาธิราบ ชายพระสังฆาฎิยาวจรดพระนาภี เส้นพระเกศาเรียงเป็นรูปทรงสามเหลี่ยม พระรัศมีดอกบัวตูม พระเนตรหลบต่ำ พระเนตรด้านขวาถูกกะเทาะหายไป ติ่งพระกรรณข้างขวาชำรุด นั่งบนฐานเขียงสูง ตรงก้นมีรูใช้สำหรับยึดตอนแกะสลัก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0);

DROP TABLE IF EXISTS `copy_muse_pic`;
CREATE TABLE `copy_muse_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `folder_refcode` text NOT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `copy_muse_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `folder_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(1,	'2017-09-15_11-29-48_IMG_1576.JPG',	'Thumb_2017-09-15_11-29-44_IMG_1576.JPG',	'Thumb2_2017-09-15_11-29-45_IMG_1576.JPG',	0,	'TP2559-0027',	'TP2559-0027',	1,	'',	0,	1),
(2,	'2017-09-15_11-29-51_IMG_1578.JPG',	'Thumb_2017-09-15_11-29-48_IMG_1578.JPG',	'Thumb2_2017-09-15_11-29-48_IMG_1578.JPG',	0,	'TP2559-0027',	'',	0,	'',	0,	1),
(3,	'2017-09-15_11-29-55_IMG_1583.JPG',	'Thumb_2017-09-15_11-29-52_IMG_1583.JPG',	'Thumb2_2017-09-15_11-29-52_IMG_1583.JPG',	0,	'TP2559-0027',	'',	0,	'',	0,	1),
(4,	'2017-09-15_11-29-59_IMG_1585.JPG',	'Thumb_2017-09-15_11-29-56_IMG_1585.JPG',	'Thumb2_2017-09-15_11-29-56_IMG_1585.JPG',	0,	'TP2559-0027',	'',	0,	'',	0,	0),
(5,	'2017-09-15_11-31-06_IMG_1565.JPG',	'Thumb_2017-09-15_11-31-02_IMG_1565.JPG',	'Thumb2_2017-09-15_11-31-03_IMG_1565.JPG',	0,	'TP2559-0026',	'',	0,	'',	0,	1),
(6,	'2017-09-15_11-31-10_IMG_1567.JPG',	'Thumb_2017-09-15_11-31-06_IMG_1567.JPG',	'Thumb2_2017-09-15_11-31-07_IMG_1567.JPG',	0,	'TP2559-0026',	'',	1,	'',	0,	1),
(7,	'2017-09-15_11-32-33_IMG_1562.JPG',	'Thumb_2017-09-15_11-32-30_IMG_1562.JPG',	'Thumb2_2017-09-15_11-32-30_IMG_1562.JPG',	0,	'TP2559-0025',	'',	1,	'',	0,	1),
(8,	'2017-09-15_11-32-38_IMG_1563.JPG',	'Thumb_2017-09-15_11-32-34_IMG_1563.JPG',	'Thumb2_2017-09-15_11-32-35_IMG_1563.JPG',	0,	'TP2559-0025',	'',	0,	'',	0,	1),
(13,	'2017-09-15_11-35-37_IMG_1539.JPG',	'Thumb_2017-09-15_11-35-34_IMG_1539.JPG',	'Thumb2_2017-09-15_11-35-34_IMG_1539.JPG',	0,	'TP2559-0023',	'',	1,	'',	0,	1),
(14,	'2017-09-15_11-35-42_IMG_1541.JPG',	'Thumb_2017-09-15_11-35-38_IMG_1541.JPG',	'Thumb2_2017-09-15_11-35-39_IMG_1541.JPG',	0,	'TP2559-0023',	'',	0,	'',	0,	1),
(11,	'2017-09-15_11-34-27_IMG_1553.JPG',	'Thumb_2017-09-15_11-34-23_IMG_1553.JPG',	'Thumb2_2017-09-15_11-34-24_IMG_1553.JPG',	0,	'TP2559-0024',	'',	1,	'',	0,	1),
(12,	'2017-09-15_11-34-31_IMG_1556.JPG',	'Thumb_2017-09-15_11-34-28_IMG_1556.JPG',	'Thumb2_2017-09-15_11-34-28_IMG_1556.JPG',	0,	'TP2559-0024',	'',	0,	'',	0,	1),
(15,	'2017-09-15_11-37-19_IMG_1962.JPG',	'Thumb_2017-09-15_11-37-16_IMG_1962.JPG',	'Thumb2_2017-09-15_11-37-16_IMG_1962.JPG',	0,	'TP2559-0041',	'',	1,	'',	0,	1),
(16,	'2017-09-15_11-37-26_IMG_1964.JPG',	'Thumb_2017-09-15_11-37-23_IMG_1964.JPG',	'Thumb2_2017-09-15_11-37-23_IMG_1964.JPG',	0,	'TP2559-0041',	'',	0,	'',	0,	1),
(17,	'2017-09-15_11-38-35_IMG_1955.JPG',	'Thumb_2017-09-15_11-38-32_IMG_1955.JPG',	'Thumb2_2017-09-15_11-38-32_IMG_1955.JPG',	0,	'TP2559-0040',	'',	1,	'',	0,	1),
(18,	'2017-09-15_11-38-40_IMG_1957.JPG',	'Thumb_2017-09-15_11-38-36_IMG_1957.JPG',	'Thumb2_2017-09-15_11-38-37_IMG_1957.JPG',	0,	'TP2559-0040',	'',	0,	'',	0,	1),
(19,	'2017-09-15_11-39-43_IMG_1949.JPG',	'Thumb_2017-09-15_11-39-39_IMG_1949.JPG',	'Thumb2_2017-09-15_11-39-40_IMG_1949.JPG',	0,	'TP2559-0039',	'',	1,	'',	0,	1),
(20,	'2017-09-15_11-39-47_IMG_1952.JPG',	'Thumb_2017-09-15_11-39-43_IMG_1952.JPG',	'Thumb2_2017-09-15_11-39-44_IMG_1952.JPG',	0,	'TP2559-0039',	'',	0,	'',	0,	1),
(21,	'2017-09-15_11-41-19_IMG_1937.JPG',	'Thumb_2017-09-15_11-41-15_IMG_1937.JPG',	'Thumb2_2017-09-15_11-41-16_IMG_1937.JPG',	0,	'TP2559-0037',	'',	1,	'',	0,	1),
(22,	'2017-09-15_11-41-23_IMG_1940.JPG',	'Thumb_2017-09-15_11-41-19_IMG_1940.JPG',	'Thumb2_2017-09-15_11-41-20_IMG_1940.JPG',	0,	'TP2559-0037',	'',	0,	'',	0,	1),
(23,	'2017-09-15_11-42-09_IMG_1930.JPG',	'Thumb_2017-09-15_11-42-05_IMG_1930.JPG',	'Thumb2_2017-09-15_11-42-06_IMG_1930.JPG',	0,	'TP2559-0036',	'',	1,	'',	0,	1),
(24,	'2017-09-15_11-42-12_IMG_1933.JPG',	'Thumb_2017-09-15_11-42-09_IMG_1933.JPG',	'Thumb2_2017-09-15_11-42-09_IMG_1933.JPG',	0,	'TP2559-0036',	'',	0,	'',	0,	1),
(25,	'2017-09-15_11-44-38_IMG_1924.JPG',	'Thumb_2017-09-15_11-44-34_IMG_1924.JPG',	'Thumb2_2017-09-15_11-44-35_IMG_1924.JPG',	0,	'TP2559-0035',	'',	1,	'',	0,	1),
(26,	'2017-09-15_11-44-42_IMG_1927.JPG',	'Thumb_2017-09-15_11-44-39_IMG_1927.JPG',	'Thumb2_2017-09-15_11-44-39_IMG_1927.JPG',	0,	'TP2559-0035',	'',	0,	'',	0,	1),
(32,	'2017-09-15_14-45-53_IMG_1881.JPG',	'Thumb_2017-09-15_14-45-49_IMG_1881.JPG',	'Thumb2_2017-09-15_14-45-50_IMG_1881.JPG',	0,	'TP2559-0033',	'',	1,	'',	0,	1),
(31,	'2017-09-15_14-45-49_IMG_1879.JPG',	'Thumb_2017-09-15_14-45-45_IMG_1879.JPG',	'Thumb2_2017-09-15_14-45-46_IMG_1879.JPG',	0,	'TP2559-0033',	'',	0,	'',	0,	1),
(29,	'2017-09-15_14-44-35_IMG_1918.JPG',	'Thumb_2017-09-15_14-44-32_IMG_1918.JPG',	'Thumb2_2017-09-15_14-44-32_IMG_1918.JPG',	0,	'TP2559-0034',	'',	1,	'',	0,	1),
(30,	'2017-09-15_14-44-39_IMG_1920.JPG',	'Thumb_2017-09-15_14-44-36_IMG_1920.JPG',	'Thumb2_2017-09-15_14-44-36_IMG_1920.JPG',	0,	'TP2559-0034',	'',	0,	'',	0,	1),
(33,	'2017-09-15_14-45-56_IMG_1882.JPG',	'Thumb_2017-09-15_14-45-53_IMG_1882.JPG',	'Thumb2_2017-09-15_14-45-53_IMG_1882.JPG',	0,	'TP2559-0033',	'',	0,	'',	0,	1),
(34,	'2017-09-15_14-46-00_IMG_1885.JPG',	'Thumb_2017-09-15_14-45-57_IMG_1885.JPG',	'Thumb2_2017-09-15_14-45-57_IMG_1885.JPG',	0,	'TP2559-0033',	'',	0,	'',	0,	0),
(35,	'2017-09-15_14-46-04_IMG_1890.JPG',	'Thumb_2017-09-15_14-46-01_IMG_1890.JPG',	'Thumb2_2017-09-15_14-46-01_IMG_1890.JPG',	0,	'TP2559-0033',	'',	0,	'',	0,	1),
(36,	'2017-09-15_14-46-08_IMG_1898.JPG',	'Thumb_2017-09-15_14-46-05_IMG_1898.JPG',	'Thumb2_2017-09-15_14-46-05_IMG_1898.JPG',	0,	'TP2559-0033',	'',	0,	'',	0,	1),
(37,	'2017-09-15_14-47-25_IMG_1492.JPG',	'Thumb_2017-09-15_14-47-21_IMG_1492.JPG',	'Thumb2_2017-09-15_14-47-22_IMG_1492.JPG',	0,	'TP2559-0032',	'',	1,	'',	0,	1),
(38,	'2017-09-15_14-47-28_IMG_1495.JPG',	'Thumb_2017-09-15_14-47-25_IMG_1495.JPG',	'Thumb2_2017-09-15_14-47-25_IMG_1495.JPG',	0,	'TP2559-0032',	'',	0,	'',	0,	1),
(39,	'2017-09-15_14-47-32_IMG_1497.JPG',	'Thumb_2017-09-15_14-47-29_IMG_1497.JPG',	'Thumb2_2017-09-15_14-47-29_IMG_1497.JPG',	0,	'TP2559-0032',	'',	0,	'',	0,	1),
(40,	'2017-09-15_14-47-36_IMG_1501.JPG',	'Thumb_2017-09-15_14-47-33_IMG_1501.JPG',	'Thumb2_2017-09-15_14-47-33_IMG_1501.JPG',	0,	'TP2559-0032',	'',	0,	'',	0,	0),
(41,	'2017-09-15_14-47-40_IMG_1502.JPG',	'Thumb_2017-09-15_14-47-37_IMG_1502.JPG',	'Thumb2_2017-09-15_14-47-37_IMG_1502.JPG',	0,	'TP2559-0032',	'',	0,	'',	0,	1),
(42,	'2017-09-15_14-47-44_IMG_1505.JPG',	'Thumb_2017-09-15_14-47-41_IMG_1505.JPG',	'Thumb2_2017-09-15_14-47-41_IMG_1505.JPG',	0,	'TP2559-0032',	'',	0,	'',	0,	1),
(43,	'2017-09-15_14-47-48_IMG_1506.JPG',	'Thumb_2017-09-15_14-47-45_IMG_1506.JPG',	'Thumb2_2017-09-15_14-47-45_IMG_1506.JPG',	0,	'TP2559-0032',	'',	0,	'',	0,	1),
(44,	'2017-09-15_14-50-20_IMG_1751.JPG',	'Thumb_2017-09-15_14-50-17_IMG_1751.JPG',	'Thumb2_2017-09-15_14-50-17_IMG_1751.JPG',	0,	'TP2559-0022',	'',	1,	'',	0,	1),
(45,	'2017-09-15_14-50-24_IMG_1753.JPG',	'Thumb_2017-09-15_14-50-21_IMG_1753.JPG',	'Thumb2_2017-09-15_14-50-21_IMG_1753.JPG',	0,	'TP2559-0022',	'',	0,	'',	0,	1),
(46,	'2017-09-15_14-50-28_IMG_1755.JPG',	'Thumb_2017-09-15_14-50-25_IMG_1755.JPG',	'Thumb2_2017-09-15_14-50-25_IMG_1755.JPG',	0,	'TP2559-0022',	'',	0,	'',	0,	1),
(47,	'2017-09-15_14-50-32_IMG_1756.JPG',	'Thumb_2017-09-15_14-50-29_IMG_1756.JPG',	'Thumb2_2017-09-15_14-50-29_IMG_1756.JPG',	0,	'TP2559-0022',	'',	0,	'',	0,	0),
(57,	'2017-09-15_14-54-57_IMG_1792.JPG',	'Thumb_2017-09-15_14-54-54_IMG_1792.JPG',	'Thumb2_2017-09-15_14-54-54_IMG_1792.JPG',	0,	'TP2559-0007',	'',	1,	'',	0,	1),
(58,	'2017-09-15_14-56-16_IMG_1827.JPG',	'Thumb_2017-09-15_14-56-13_IMG_1827.JPG',	'Thumb2_2017-09-15_14-56-13_IMG_1827.JPG',	0,	'TP2559-0013',	'',	1,	'',	0,	1),
(56,	'2017-09-15_14-54-53_IMG_1787.JPG',	'Thumb_2017-09-15_14-54-50_IMG_1787.JPG',	'Thumb2_2017-09-15_14-54-50_IMG_1787.JPG',	0,	'TP2559-0007',	'',	0,	'',	0,	1),
(51,	'2017-09-15_14-52-13_IMG_1869.JPG',	'Thumb_2017-09-15_14-52-10_IMG_1869.JPG',	'Thumb2_2017-09-15_14-52-10_IMG_1869.JPG',	0,	'TP2559-0018',	'',	1,	'',	0,	1),
(52,	'2017-09-15_14-52-17_IMG_1872.JPG',	'Thumb_2017-09-15_14-52-14_IMG_1872.JPG',	'Thumb2_2017-09-15_14-52-14_IMG_1872.JPG',	0,	'TP2559-0018',	'',	0,	'',	0,	1),
(53,	'2017-09-15_14-52-21_IMG_1873.JPG',	'Thumb_2017-09-15_14-52-18_IMG_1873.JPG',	'Thumb2_2017-09-15_14-52-18_IMG_1873.JPG',	0,	'TP2559-0018',	'',	0,	'',	0,	1),
(54,	'2017-09-15_14-52-25_IMG_1876.JPG',	'Thumb_2017-09-15_14-52-21_IMG_1876.JPG',	'Thumb2_2017-09-15_14-52-22_IMG_1876.JPG',	0,	'TP2559-0018',	'',	0,	'',	0,	0),
(59,	'2017-09-15_14-56-20_IMG_1829.JPG',	'Thumb_2017-09-15_14-56-16_IMG_1829.JPG',	'Thumb2_2017-09-15_14-56-17_IMG_1829.JPG',	0,	'TP2559-0013',	'',	0,	'',	0,	1),
(61,	'2017-09-15_14-57-13_IMG_1800.JPG',	'Thumb_2017-09-15_14-57-10_IMG_1800.JPG',	'Thumb2_2017-09-15_14-57-10_IMG_1800.JPG',	0,	'TP2559-0013',	'',	0,	'',	0,	1),
(62,	'2017-09-15_14-58-33_IMG_1796.JPG',	'Thumb_2017-09-15_14-58-30_IMG_1796.JPG',	'Thumb2_2017-09-15_14-58-30_IMG_1796.JPG',	0,	'TP2559-0008',	'',	1,	'',	0,	1),
(63,	'2017-09-15_14-58-38_IMG_1797.JPG',	'Thumb_2017-09-15_14-58-34_IMG_1797.JPG',	'Thumb2_2017-09-15_14-58-35_IMG_1797.JPG',	0,	'TP2559-0008',	'',	0,	'',	0,	1),
(64,	'2017-09-15_14-59-27_IMG_1798.JPG',	'Thumb_2017-09-15_14-59-24_IMG_1798.JPG',	'Thumb2_2017-09-15_14-59-24_IMG_1798.JPG',	0,	'TP2559-0009',	'',	1,	'',	0,	1),
(65,	'2017-09-15_14-59-31_IMG_1799.JPG',	'Thumb_2017-09-15_14-59-28_IMG_1799.JPG',	'Thumb2_2017-09-15_14-59-28_IMG_1799.JPG',	0,	'TP2559-0009',	'',	0,	'',	0,	1),
(66,	'2017-09-15_14-59-35_IMG_1800.JPG',	'Thumb_2017-09-15_14-59-32_IMG_1800.JPG',	'Thumb2_2017-09-15_14-59-32_IMG_1800.JPG',	0,	'TP2559-0009',	'',	0,	'',	0,	1),
(67,	'2017-09-15_15-00-31_IMG_1813.JPG',	'Thumb_2017-09-15_15-00-28_IMG_1813.JPG',	'Thumb2_2017-09-15_15-00-28_IMG_1813.JPG',	0,	'TP2559-0012',	'',	1,	'',	0,	1),
(68,	'2017-09-15_15-00-35_IMG_1815.JPG',	'Thumb_2017-09-15_15-00-32_IMG_1815.JPG',	'Thumb2_2017-09-15_15-00-32_IMG_1815.JPG',	0,	'TP2559-0012',	'',	0,	'',	0,	1),
(69,	'2017-09-15_15-01-27_IMG_1809.JPG',	'Thumb_2017-09-15_15-01-24_IMG_1809.JPG',	'Thumb2_2017-09-15_15-01-24_IMG_1809.JPG',	0,	'TP2559-0011',	'',	1,	'',	0,	1),
(70,	'2017-09-15_15-01-31_IMG_1810.JPG',	'Thumb_2017-09-15_15-01-27_IMG_1810.JPG',	'Thumb2_2017-09-15_15-01-28_IMG_1810.JPG',	0,	'TP2559-0011',	'',	0,	'',	0,	1),
(71,	'2017-09-15_15-03-02_IMG_1805.JPG',	'Thumb_2017-09-15_15-02-58_IMG_1805.JPG',	'Thumb2_2017-09-15_15-02-59_IMG_1805.JPG',	0,	'TP2559-0010',	'',	1,	'',	0,	1),
(72,	'2017-09-15_15-03-06_IMG_1806.JPG',	'Thumb_2017-09-15_15-03-03_IMG_1806.JPG',	'Thumb2_2017-09-15_15-03-03_IMG_1806.JPG',	0,	'TP2559-0010',	'',	0,	'',	0,	1),
(73,	'2017-09-15_15-03-11_IMG_1807.JPG',	'Thumb_2017-09-15_15-03-08_IMG_1807.JPG',	'Thumb2_2017-09-15_15-03-08_IMG_1807.JPG',	0,	'TP2559-0010',	'',	0,	'',	0,	1),
(74,	'2017-09-15_15-04-12_IMG_1783.JPG',	'Thumb_2017-09-15_15-04-09_IMG_1783.JPG',	'Thumb2_2017-09-15_15-04-09_IMG_1783.JPG',	0,	'TP2559-0006',	'',	1,	'',	0,	1),
(75,	'2017-09-15_15-04-16_IMG_1784.JPG',	'Thumb_2017-09-15_15-04-13_IMG_1784.JPG',	'Thumb2_2017-09-15_15-04-13_IMG_1784.JPG',	0,	'TP2559-0006',	'',	0,	'',	0,	1),
(76,	'2017-09-15_15-05-15_IMG_1777.JPG',	'Thumb_2017-09-15_15-05-11_IMG_1777.JPG',	'Thumb2_2017-09-15_15-05-12_IMG_1777.JPG',	0,	'TP2559-0005',	'',	1,	'',	0,	1),
(77,	'2017-09-15_15-05-19_IMG_1780.JPG',	'Thumb_2017-09-15_15-05-15_IMG_1780.JPG',	'Thumb2_2017-09-15_15-05-16_IMG_1780.JPG',	0,	'TP2559-0005',	'',	0,	'',	0,	1),
(78,	'2017-09-15_15-06-21_IMG_1772.JPG',	'Thumb_2017-09-15_15-06-18_IMG_1772.JPG',	'Thumb2_2017-09-15_15-06-18_IMG_1772.JPG',	0,	'TP2559-0004',	'',	1,	'',	0,	1),
(79,	'2017-09-15_15-06-25_IMG_1773.JPG',	'Thumb_2017-09-15_15-06-22_IMG_1773.JPG',	'Thumb2_2017-09-15_15-06-22_IMG_1773.JPG',	0,	'TP2559-0004',	'',	0,	'',	0,	1),
(80,	'2017-09-15_15-07-59_IMG_1906.JPG',	'Thumb_2017-09-15_15-07-55_IMG_1906.JPG',	'Thumb2_2017-09-15_15-07-56_IMG_1906.JPG',	0,	'TP2559-0050',	'',	1,	'',	0,	1),
(81,	'2017-09-15_15-08-02_IMG_1909.JPG',	'Thumb_2017-09-15_15-07-59_IMG_1909.JPG',	'Thumb2_2017-09-15_15-07-59_IMG_1909.JPG',	0,	'TP2559-0050',	'',	0,	'',	0,	1),
(82,	'2017-09-15_15-08-06_IMG_1914.JPG',	'Thumb_2017-09-15_15-08-03_IMG_1914.JPG',	'Thumb2_2017-09-15_15-08-03_IMG_1914.JPG',	0,	'TP2559-0050',	'',	0,	'',	0,	1),
(83,	'2017-09-15_15-09-11_IMG_1686.JPG',	'Thumb_2017-09-15_15-09-07_IMG_1686.JPG',	'Thumb2_2017-09-15_15-09-08_IMG_1686.JPG',	0,	'TP2559-0049',	'',	1,	'',	0,	1),
(84,	'2017-09-15_15-09-14_IMG_1690.JPG',	'Thumb_2017-09-15_15-09-11_IMG_1690.JPG',	'Thumb2_2017-09-15_15-09-11_IMG_1690.JPG',	0,	'TP2559-0049',	'',	0,	'',	0,	1),
(85,	'2017-09-15_15-10-21_IMG_1681.JPG',	'Thumb_2017-09-15_15-10-18_IMG_1681.JPG',	'Thumb2_2017-09-15_15-10-18_IMG_1681.JPG',	0,	'TP2559-0048',	'',	1,	'',	0,	1),
(86,	'2017-09-15_15-10-25_IMG_1683.JPG',	'Thumb_2017-09-15_15-10-22_IMG_1683.JPG',	'Thumb2_2017-09-15_15-10-22_IMG_1683.JPG',	0,	'TP2559-0048',	'',	0,	'',	0,	1),
(87,	'2017-09-15_15-11-18_IMG_1675.JPG',	'Thumb_2017-09-15_15-11-14_IMG_1675.JPG',	'Thumb2_2017-09-15_15-11-15_IMG_1675.JPG',	0,	'TP2559-0047',	'',	0,	'',	0,	1),
(88,	'2017-09-15_15-11-22_IMG_1677.JPG',	'Thumb_2017-09-15_15-11-18_IMG_1677.JPG',	'Thumb2_2017-09-15_15-11-19_IMG_1677.JPG',	0,	'TP2559-0047',	'',	1,	'',	0,	1),
(89,	'2017-09-15_15-12-19_IMG_1667.JPG',	'Thumb_2017-09-15_15-12-16_IMG_1667.JPG',	'Thumb2_2017-09-15_15-12-16_IMG_1667.JPG',	0,	'TP2559-0046',	'',	1,	'',	0,	1),
(90,	'2017-09-15_15-12-23_IMG_1670.JPG',	'Thumb_2017-09-15_15-12-20_IMG_1670.JPG',	'Thumb2_2017-09-15_15-12-20_IMG_1670.JPG',	0,	'TP2559-0046',	'',	0,	'',	0,	1),
(92,	'2017-09-15_15-13-34_IMG_1644.JPG',	'Thumb_2017-09-15_15-13-31_IMG_1644.JPG',	'Thumb2_2017-09-15_15-13-31_IMG_1644.JPG',	0,	'TP2559-0045',	'',	1,	'',	0,	1),
(93,	'2017-09-15_15-13-38_IMG_1648.JPG',	'Thumb_2017-09-15_15-13-34_IMG_1648.JPG',	'Thumb2_2017-09-15_15-13-35_IMG_1648.JPG',	0,	'TP2559-0045',	'',	0,	'',	0,	1),
(94,	'2017-09-15_15-13-42_IMG_1650.JPG',	'Thumb_2017-09-15_15-13-39_IMG_1650.JPG',	'Thumb2_2017-09-15_15-13-39_IMG_1650.JPG',	0,	'TP2559-0045',	'',	0,	'',	0,	1),
(95,	'2017-09-15_15-13-46_IMG_1653.JPG',	'Thumb_2017-09-15_15-13-43_IMG_1653.JPG',	'Thumb2_2017-09-15_15-13-43_IMG_1653.JPG',	0,	'TP2559-0045',	'',	0,	'',	0,	0),
(96,	'2017-09-15_15-13-50_IMG_1654.JPG',	'Thumb_2017-09-15_15-13-47_IMG_1654.JPG',	'Thumb2_2017-09-15_15-13-47_IMG_1654.JPG',	0,	'TP2559-0045',	'',	0,	'',	0,	1),
(97,	'2017-09-15_15-14-41_IMG_1624.JPG',	'Thumb_2017-09-15_15-14-37_IMG_1624.JPG',	'Thumb2_2017-09-15_15-14-38_IMG_1624.JPG',	0,	'TP2559-0044',	'',	1,	'',	0,	1),
(98,	'2017-09-15_15-14-44_IMG_1633.JPG',	'Thumb_2017-09-15_15-14-41_IMG_1633.JPG',	'Thumb2_2017-09-15_15-14-41_IMG_1633.JPG',	0,	'TP2559-0044',	'',	0,	'',	0,	1),
(99,	'2017-09-15_15-15-34_IMG_1608.JPG',	'Thumb_2017-09-15_15-15-31_IMG_1608.JPG',	'Thumb2_2017-09-15_15-15-31_IMG_1608.JPG',	0,	'TP2559-0043',	'',	1,	'',	0,	1),
(100,	'2017-09-15_15-15-38_IMG_1613.JPG',	'Thumb_2017-09-15_15-15-35_IMG_1613.JPG',	'Thumb2_2017-09-15_15-15-35_IMG_1613.JPG',	0,	'TP2559-0043',	'',	0,	'',	0,	1),
(101,	'2017-09-15_15-16-29_IMG_1595.JPG',	'Thumb_2017-09-15_15-16-25_IMG_1595.JPG',	'Thumb2_2017-09-15_15-16-26_IMG_1595.JPG',	0,	'TP2559-0042',	'',	1,	'',	0,	1),
(102,	'2017-09-15_15-16-33_IMG_1596.JPG',	'Thumb_2017-09-15_15-16-29_IMG_1596.JPG',	'Thumb2_2017-09-15_15-16-30_IMG_1596.JPG',	0,	'TP2559-0042',	'',	0,	'',	0,	1),
(103,	'2017-09-15_15-17-48_IMG_1986.JPG',	'Thumb_2017-09-15_15-17-44_IMG_1986.JPG',	'Thumb2_2017-09-15_15-17-45_IMG_1986.JPG',	0,	'TP2559-0017',	'',	1,	'',	0,	1),
(104,	'2017-09-15_15-18-56_20161023_101630.jpg',	'Thumb_2017-09-15_15-18-52_20161023_101630.jpg',	'Thumb2_2017-09-15_15-18-53_20161023_101630.jpg',	0,	'TP2559-0016',	'',	1,	'',	0,	1),
(105,	'2017-09-15_15-19-00_20161023_1016101.jpg',	'Thumb_2017-09-15_15-18-57_20161023_1016101.jpg',	'Thumb2_2017-09-15_15-18-57_20161023_1016101.jpg',	0,	'TP2559-0016',	'',	0,	'',	0,	1),
(106,	'2017-09-15_15-19-49_IMG_1835.JPG',	'Thumb_2017-09-15_15-19-46_IMG_1835.JPG',	'Thumb2_2017-09-15_15-19-46_IMG_1835.JPG',	0,	'TP2559-0014',	'',	1,	'',	0,	1),
(107,	'2017-09-15_15-19-54_IMG_1836.JPG',	'Thumb_2017-09-15_15-19-51_IMG_1836.JPG',	'Thumb2_2017-09-15_15-19-51_IMG_1836.JPG',	0,	'TP2559-0014',	'',	0,	'',	0,	1),
(108,	'2017-09-15_15-19-58_IMG_1837.JPG',	'Thumb_2017-09-15_15-19-55_IMG_1837.JPG',	'Thumb2_2017-09-15_15-19-55_IMG_1837.JPG',	0,	'TP2559-0014',	'',	0,	'',	0,	1),
(109,	'2017-09-15_15-20-02_IMG_1839.JPG',	'Thumb_2017-09-15_15-19-59_IMG_1839.JPG',	'Thumb2_2017-09-15_15-19-59_IMG_1839.JPG',	0,	'TP2559-0014',	'',	0,	'',	0,	0),
(110,	'2017-09-15_15-20-51_IMG_1842.JPG',	'Thumb_2017-09-15_15-20-48_IMG_1842.JPG',	'Thumb2_2017-09-15_15-20-48_IMG_1842.JPG',	0,	'TP2559-0015',	'',	1,	'',	0,	1),
(111,	'2017-09-15_15-20-55_IMG_1844.JPG',	'Thumb_2017-09-15_15-20-52_IMG_1844.JPG',	'Thumb2_2017-09-15_15-20-52_IMG_1844.JPG',	0,	'TP2559-0015',	'',	0,	'',	0,	1),
(112,	'2017-09-15_15-20-59_IMG_1845.JPG',	'Thumb_2017-09-15_15-20-56_IMG_1845.JPG',	'Thumb2_2017-09-15_15-20-56_IMG_1845.JPG',	0,	'TP2559-0015',	'',	0,	'',	0,	1),
(113,	'2017-09-15_15-21-03_IMG_1846.JPG',	'Thumb_2017-09-15_15-20-59_IMG_1846.JPG',	'Thumb2_2017-09-15_15-21-00_IMG_1846.JPG',	0,	'TP2559-0015',	'',	0,	'',	0,	0),
(114,	'2018-01-09_14-27-52_2017-05-30_06-19-17_group3-11.jpg',	'Thumb_2018-01-09_14-27-49_2017-05-30_06-19-17_group3-11.jpg',	'Thumb2_2018-01-09_14-27-49_2017-05-30_06-19-17_group3-11.jpg',	0,	'กกก25611234',	'',	0,	'',	0,	1),
(119,	'2018-01-09_15-26-44_2017-09-15_15-08-06_IMG_1914.JPG',	'Thumb_2018-01-09_15-26-41_2017-09-15_15-08-06_IMG_1914.JPG',	'Thumb2_2018-01-09_15-26-41_2017-09-15_15-08-06_IMG_1914.JPG',	0,	'กกก25611234',	'',	0,	'',	0,	1),
(118,	'2018-01-09_15-23-34_2017-09-15_14-44-35_IMG_1918.JPG',	'Thumb_2018-01-09_15-23-31_2017-09-15_14-44-35_IMG_1918.JPG',	'Thumb2_2018-01-09_15-23-31_2017-09-15_14-44-35_IMG_1918.JPG',	0,	'',	'',	0,	'',	0,	1),
(120,	'2018-01-09_15-31-14_2017-09-15_15-00-31_IMG_1813.JPG',	'Thumb_2018-01-09_15-31-11_2017-09-15_15-00-31_IMG_1813.JPG',	'Thumb2_2018-01-09_15-31-11_2017-09-15_15-00-31_IMG_1813.JPG',	0,	'$refcode',	'',	0,	'',	0,	1),
(121,	'2018-01-09_15-32-54_2017-09-15_11-31-10_IMG_1567.JPG',	'Thumb_2018-01-09_15-32-50_2017-09-15_11-31-10_IMG_1567.JPG',	'Thumb2_2018-01-09_15-32-51_2017-09-15_11-31-10_IMG_1567.JPG',	0,	'กกก25611234',	'',	0,	'',	0,	1),
(122,	'2018-01-09_15-35-29_flower2.jpg',	'Thumb_2018-01-09_15-35-26_flower2.jpg',	'Thumb2_2018-01-09_15-35-26_flower2.jpg',	0,	'กกก25611234',	'',	0,	'',	0,	1);

DROP TABLE IF EXISTS `creativecommons`;
CREATE TABLE `creativecommons` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_name` varchar(255) NOT NULL,
  `cc_open` int(11) NOT NULL,
  `cc_pic_id` text NOT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `creativecommons` (`cc_id`, `cc_name`, `cc_open`, `cc_pic_id`) VALUES
(1,	'Attribution CC - BY ให้เผยแพร่ ดัดแปลง โดยต้องระบุที่มา',	0,	'by.png'),
(2,	'Attribution CC - BY -SA ให้เผยแพร่ ดัดแปลง โดยต้องระบุที่มาและต้องเผยแพร่งานดัดแปลงโดยใช้สัญญาอนุญาตเดียวกัน ',	0,	'sa.png'),
(3,	'Attribution CC - BY -ND ให้เผยแพร่ โดยต้องระบุที่มา แต่ห้ามดัดแปลง',	0,	'nd.png'),
(4,	'Attribution CC- BY -NC ให้เผยแพร่ ดัดแปลง โดยต้องระบุที่มาแต่ ห้ามใช้เพื่อการค้า',	0,	'nc.png'),
(5,	'Attribution CC- BY - NC - SA ให้เผยแพร่ ดัดแปลง โดยต้องระบุที่มาแต่ห้ามใช้เพื่อการค้าและต้องเผยแพร่งานดัดแปลงโดยใช้สัญญาอนุญาตชนิดเดียวกัน',	0,	'ncsa.png'),
(6,	'Attribution CC- BY - NC -ND ให้เผยแพร่ โดยต้องระบุที่มาแต่ห้ามดัดแปลงและห้ามใช้เพื่อการค้า',	1,	'ncnd.png');

DROP TABLE IF EXISTS `feature`;
CREATE TABLE `feature` (
  `fet_id` int(1) NOT NULL AUTO_INCREMENT,
  `fet_name` varchar(60) NOT NULL,
  `fet_enable` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`fet_id`),
  UNIQUE KEY `fet_name` (`fet_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `feature` (`fet_id`, `fet_name`, `fet_enable`) VALUES
(1,	'เอกสารจดหมายเหตุ',	0),
(2,	'พิพิธภัณฑ์',	1),
(3,	'พฤกษศาสตร์',	0);

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE `inbox` (
  `inx_id` int(5) NOT NULL AUTO_INCREMENT,
  `inx_from` varchar(30) NOT NULL,
  `inx_subject` varchar(50) NOT NULL,
  `inx_detail` mediumtext NOT NULL,
  `inx_email` varchar(50) DEFAULT NULL,
  `inx_tel` varchar(12) DEFAULT NULL,
  `inx_ip` varchar(39) NOT NULL,
  `inx_log` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`inx_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` text NOT NULL,
  `menu_pic` text NOT NULL,
  `menu_enable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_pic`, `menu_enable`) VALUES
(1,	'หน้าแรก',	'',	1),
(2,	'เกี่ยวกับเรา',	'',	1),
(3,	'พิพิธภัณฑ์',	'',	1),
(4,	'จดหมายเหตุ',	'',	1),
(5,	'ข่าวและกิจกรรม',	'',	1);

DROP VIEW IF EXISTS `museum`;
CREATE TABLE `museum` (`museum_code` int(11), `museum_name` text, `description` text, `open_date` text, `latitude` float, `longitude` float, `address` text, `tambon` text, `ampher` text, `province` varchar(150), `zipcode` text, `tel` text, `email` text, `website` text, `thumbnail` text, `bg_picshow` int(11));


DROP TABLE IF EXISTS `muse_bg`;
CREATE TABLE `muse_bg` (
  `bg_id` int(11) NOT NULL,
  `bg_name` text NOT NULL,
  `bg_desc` text NOT NULL,
  `bg_entry` text NOT NULL,
  `bg_open` text NOT NULL,
  `bg_close` text NOT NULL,
  `bg_lat` float NOT NULL,
  `bg_lon` float NOT NULL,
  `bg_number` text NOT NULL,
  `bg_tambon` text NOT NULL,
  `bg_ampher` text NOT NULL,
  `bg_city` text NOT NULL,
  `bg_postcode` text NOT NULL,
  `bg_tel` text NOT NULL,
  `bg_email` text NOT NULL,
  `bg_website` text NOT NULL,
  `bg_pic` text NOT NULL,
  `bg_picshow` int(11) NOT NULL,
  `bg_watermark` text NOT NULL,
  `bg_watermarkshow` int(11) NOT NULL,
  `bg_pano` text NOT NULL,
  `bg_panoshow` int(11) NOT NULL,
  `bg_360_pano` text NOT NULL,
  `bg_360_vdo` text NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `muse_bg` (`bg_id`, `bg_name`, `bg_desc`, `bg_entry`, `bg_open`, `bg_close`, `bg_lat`, `bg_lon`, `bg_number`, `bg_tambon`, `bg_ampher`, `bg_city`, `bg_postcode`, `bg_tel`, `bg_email`, `bg_website`, `bg_pic`, `bg_picshow`, `bg_watermark`, `bg_watermarkshow`, `bg_pano`, `bg_panoshow`, `bg_360_pano`, `bg_360_vdo`) VALUES
(1,	'พิพิธภัณฑ์วัดมงคลทุ่งแป้ง_ทดสอบ',	'วัดมงคลทุ่งแป้ง ถือเป็นวัดเก่าแก่ มีอายุประมาณ 500 ปีขึ้นไป ภายในวัดปรากฎซากโบราณสถาน ได้แก่ ซุ้มประตูโขงทางด้านทิศเหนือและทิศตะวันตก นอกจากนี้ยังมีวิหารเก่าที่มีความสวยงามภายในประดิษฐานพระพุทธรูปปางมารวิชัย ซึ่งวิหารดังกล่าวปัจจุบันได้รับการบูรณะเป็นที่เรียบร้อยแต่ยังคงไว้ซึ่งเอกลักษณ์และความสวยงามดั้งเดิม ซึ่งจากการบูรณะวิหารดังกล่าว เจ้าอาวาสรุ่นก่อน ๆ ได้เห็นถึงความสำคัญของส่วนประกอบของวิหารเก่า จึงได้จัดเก็บและรักษาไว้เพื่อให้คนรุ่นหลังได้ชมความเก่าแก่ของวิหารนี้ ไม่เพียงแค่นั้นต่อมาได้นำโบราณวัตถุต่าง ๆ ที่พบในวัด ได้แก่ ข้าวของเครื่องใช้ของพระภิกษุสงฆ์แต่เดิม และวัตถุที่ชาวบ้านที่มีจิตศรัทธานำมาถวายในอดีต โดยนำมาจัดแสดงภายในตู้กระจกภายในวิหารของวัด\r\n',	'เปิดทำการ วันอังคาร - วันอาทิตย์\r\n',	' 09.00',	'18.00',	18.5327,	98.8567,	'',	'ท่าวังพร้าว',	'สันป่าตอง',	'38',	'50120',	'053-0000000',	'mail@gmail.com',	' anurak.in.th',	'182615543514454693_1180410368700860_406583955_n (2).jpg',	1,	'watermark.png',	0,	'pano_S__18243758.jpg',	1,	'0',	'0');

DROP TABLE IF EXISTS `muse_category`;
CREATE TABLE `muse_category` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` text NOT NULL,
  `cat1_parent` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`cat1_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `muse_category` (`cat1_id`, `cat1_name`, `cat1_parent`) VALUES
(1,	'ปูนปั้น',	0),
(2,	'ดินเผา',	0),
(3,	'หินอ่อน',	0),
(4,	'ดินเผาเคลือบ',	0),
(5,	'โลหะ',	0),
(6,	'ไม้',	0);

DROP TABLE IF EXISTS `muse_category_lv2`;
CREATE TABLE `muse_category_lv2` (
  `ac2_id` int(4) NOT NULL AUTO_INCREMENT,
  `ac2_name` varchar(50) NOT NULL,
  `ac1_id` int(11) NOT NULL,
  PRIMARY KEY (`ac2_id`),
  KEY `ac1_id` (`ac1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `muse_category_lv2` (`ac2_id`, `ac2_name`, `ac1_id`) VALUES
(1,	'aaa',	1);

DROP TABLE IF EXISTS `muse_category_lv3`;
CREATE TABLE `muse_category_lv3` (
  `ac3_id` int(5) NOT NULL AUTO_INCREMENT,
  `ac3_name` varchar(50) NOT NULL,
  `ac2_id` int(4) NOT NULL,
  PRIMARY KEY (`ac3_id`),
  KEY `ac2_id` (`ac2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `muse_category_lv3` (`ac3_id`, `ac3_name`, `ac2_id`) VALUES
(2,	'aaa',	29);

DROP TABLE IF EXISTS `muse_menu`;
CREATE TABLE `muse_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` text NOT NULL,
  `menu_pic` text NOT NULL,
  `menu_enable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `muse_menu` (`menu_id`, `menu_name`, `menu_pic`, `menu_enable`) VALUES
(1,	'ประวัติความเป็นมา',	'191321531DSCF5971.jpg',	1),
(2,	'วัตถุจัดแสดง',	'18802894552.jpg',	1),
(3,	'ข่าวประชาสัมพันธ์',	'367170179borijak.jpg',	1),
(4,	'ข้อมูลสำหรับผู้เยี่ยมชม',	'567475108watsopanaram1.jpg',	1);

DROP TABLE IF EXISTS `muse_object`;
CREATE TABLE `muse_object` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_refcode` text NOT NULL,
  `old_obj_refcode` text NOT NULL,
  `obj_title` text NOT NULL,
  `obj_titleeng` text NOT NULL,
  `obj_datecreate` text NOT NULL,
  `obj_level` text NOT NULL,
  `obj_extent` text NOT NULL,
  `obj_creator` text NOT NULL,
  `obj_bio` text NOT NULL,
  `obj_dateacc` text NOT NULL,
  `obj_history` text NOT NULL,
  `obj_acquis` text NOT NULL,
  `obj_scope` text NOT NULL,
  `obj_appraisal` text NOT NULL,
  `obj_accruals` text NOT NULL,
  `obj_arrangement` text NOT NULL,
  `obj_legal` text NOT NULL,
  `obj_condition` text NOT NULL,
  `obj_copyright` text NOT NULL,
  `obj_lang` text NOT NULL,
  `obj_physicals` text NOT NULL,
  `obj_physicalseng` text NOT NULL,
  `obj_aids` text NOT NULL,
  `obj_location` text NOT NULL,
  `obj_existence` text NOT NULL,
  `obj_related` text NOT NULL,
  `obj_associated` text NOT NULL,
  `obj_pubnote` text NOT NULL,
  `obj_note` text NOT NULL,
  `obj_date` text NOT NULL,
  `obj_category` int(11) NOT NULL,
  `obj_access` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `obj_keyword` text NOT NULL,
  `obj_approve` int(11) NOT NULL,
  `obj_relation` text NOT NULL,
  `obj_display` int(11) NOT NULL,
  `obj_location_display` int(11) NOT NULL,
  `obj_existence_display` int(11) NOT NULL,
  `obj_creator_display` int(11) NOT NULL,
  `obj_bio_display` int(11) NOT NULL,
  `obj_dateacc_display` int(11) NOT NULL,
  `obj_history_display` int(11) NOT NULL,
  `obj_acquis_display` int(11) NOT NULL,
  `obj_downloadfile` text NOT NULL,
  `obj_download` int(11) NOT NULL,
  `obj_countdownload` int(11) NOT NULL,
  `obj_cate2` int(4) NOT NULL DEFAULT 0,
  `obj_cate3` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`obj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `muse_object` (`obj_id`, `obj_refcode`, `old_obj_refcode`, `obj_title`, `obj_titleeng`, `obj_datecreate`, `obj_level`, `obj_extent`, `obj_creator`, `obj_bio`, `obj_dateacc`, `obj_history`, `obj_acquis`, `obj_scope`, `obj_appraisal`, `obj_accruals`, `obj_arrangement`, `obj_legal`, `obj_condition`, `obj_copyright`, `obj_lang`, `obj_physicals`, `obj_physicalseng`, `obj_aids`, `obj_location`, `obj_existence`, `obj_related`, `obj_associated`, `obj_pubnote`, `obj_note`, `obj_date`, `obj_category`, `obj_access`, `user_id`, `obj_keyword`, `obj_approve`, `obj_relation`, `obj_display`, `obj_location_display`, `obj_existence_display`, `obj_creator_display`, `obj_bio_display`, `obj_dateacc_display`, `obj_history_display`, `obj_acquis_display`, `obj_downloadfile`, `obj_download`, `obj_countdownload`, `obj_cate2`, `obj_cate3`) VALUES
(1,	'TP2559-0027',	'TP2559-0027',	'นกเวียงกาหลง',	'',	'2017-09-15',	'',	'ส. 5.8 ซม. ก. 4 ซม. ย. 5.2 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นปูนปั้นรูปนกตัวเล็กรูปร่างค่อนข้างอ้วนท้วม ขาสั้น ตกแต่งด้วยรอยขูดขีดบริเวณปีกของนก มีตาและมีจะงอยปาก ผิวเป็นเคลือบสีด้วยสีเทา ยกเว้นบริเวณส่วนขาและปีกหางด้านล่างมีร่องรอยชำรุดบริเวณเท้าและหาง\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2018-01-10 09:09:52',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(2,	'TP2559-0026',	'',	'ดอกปูนปั้นติดแก้วจืนประดับฐานพระประธาน',	'',	'2017-09-15',	'',	'ส. 0.5 ซม. ก. 6 ซม. ย. 4 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากปูนปั้น ติดตรงฐานพระพุทธรูป ตรงกลางติดกระจก ผิวของปูนปั้นค่อนข้างหยาบ สีน้ำตาลดำ มีร่องรอยชำรุดบริเวณตรงกลางที่ติดกระจก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(3,	'TP2559-0025',	'',	'ก้นหอยพระพุทธรูปโบราณ(เกศาพระเจ้า)',	'',	'2017-09-15',	'',	'ส. 3.2 ซม. ก. 3.9 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นปูนปั้นทำเป็นเส้นวางขดซ้อนลดหลั่นกันขึ้นไป 3 ชั้นเหมือนก้นหอย เป็นสีน้ำตาลอมดำ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(4,	'TP2559-0024',	'',	'ดอกปูนปั้นติดแก้วจืนประดับฐานพระประธาน',	'',	'--',	'',	'ส. 0.5 ซม. ก. 4 ซม. ย. 5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นดอกปูนปั้นที่ติดแก้วจืนสีเขียวไว้ตรงกลาง มีกลีบดอกประดับอยู่รอบวง กลีบดอกตกแต่งด้วยลายขูดขีดและทาสีด้วยสีแดง มีร่องรอยชำรุดตรงปลายกลีบดอกบางส่วน และสีแดงที่ทาตรงกลีบดอกก็มีรอยถลอกมากแล้ว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(5,	'TP2559-0023',	'',	'ดอกปูนปั้นติดแก้วจืนประดับฐานพระประธาน',	'',	'2017-09-15',	'',	'ส. 0.5 ซม. ก. 4.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นดอกปูนปั้นที่ติดแก้วจืนไว้ตรงกลางดอก แก้วจืนมีสีเขียวกลีบดอกทาสีแดง แต่สีถลอกมากแล้วมีรอยขีดประดับตกแต่งตรงกลีบดอกมีร่องรอยชำรุด\r\nตรงกลีบดอกหักหายไปบางส่วน',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	1,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(6,	'TP2559-0041',	'ทป2559-0041',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 3 ซม. ก. 10 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่แหล่มปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา โดยรวมแล้วแตกหักบางส่วน ทำให้วัตถุชำรุด\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2018-01-04 04:19:37',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(7,	'TP2559-0040',	'',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.2 ซม. ก. 12.1 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่แหล่มปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใชมุมหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา มีร่องรอยชำรุดแตกหักเหลือเพียงครึ่งเดียว และตรงขอแตกหักเล็กน้อย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(8,	'TP2559-0039',	'',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.5 ซม. ก. 15.9 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่แหล่มปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา มีร่องรอยชำรุดแตกหักเหลือเพียงครึ่งเดียว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(9,	'TP2559-0037',	'',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.1 ซม. ก. 21.4 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(10,	'TP2559-0036',	'',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2 ซม. ก. 21.7 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(11,	'TP2559-0035',	'',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส. 2.3 ซม. ก. 2.2 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อติดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอ ประดับตกแต่งลวดลายด้วยดอกไม้ล้านนา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(12,	'TP2559-0034',	'',	'กระเบื้องดินขอมุงหลังคาโบราณลายดอกล้านนา',	'',	'2017-09-15',	'',	'ส.1.7 ซม. ก. 21.7 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นแผ่นสี่เหลี่ยมปลายตัดตรง ตรงปลายด้านใดด้านหนึ่งทำเป็นขอเพื่อยึดกับกระเบื้องอีกแผ่นในการใช้มุงหลังคา และตรงปลายส่วนด้านหน้าที่ทำเป็นขอก็ตกแต่งด้วยลวดลายดอกล้านนา มีร่องรอยชำรุดบริเวณด้านข้างและปลายตัดอีกข้างหนึ่ง\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(13,	'TP2559-0033',	'',	'บูยาโบราณรูปหัวเทวดา',	'',	'2017-09-15',	'',	'ส. 3.7 ซม. ก. 2.2 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากดินเผาเคลือบสีดำเป็นรูปศีรษะเทวดา ลักษณะติ่งพระกรรณยาว ปากแบะ จมูกแบน มีไรพระศก ด้านบนเป็นช่องสำหรับใส่ยาสูบ ด้านล่างบริเวณหลังคอเทวดามีรูเล็ก ๆ สำหรับต่อด้ามเพื่อสูบ สันนิษฐานว่าคงจะใช้ไม้ไผ่เป็นด้าม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(14,	'TP2559-0032',	'',	'บูยาดิน',	'',	'2017-09-15',	'',	'ส. 3.1 ซม. ก. 3 ซม. ฐก. 1.6 ซม ปก. 1.6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นท่อยาวมีหลุมเล็ก ๆ สำหรับใส่ยาสูบ ตรงกล้องยาแตกหัก ประดับด้วยลวดลายกลีบดอกบัว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	2,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(15,	'TP2559-0022',	'',	'พระหินอ่อนศิลปะพุกามพม่า',	'',	'2017-09-15',	'',	'ตก. 9 ซม. ฐส. 4 ซม. สอ. 15 ซม. สฐ. 18.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นพระพุทธรูปหินอ่อนศิลปะพุกามพม่า นั่งขัดสมาธิราบปางมารวิชัย ชายสังฆาฏิยาว พระกัณฑ์ยาวถึง พระอังสะ พระรัศมีเป็นรูปดอกบัวตูม พระเกศาเรียบ พระพุทธรูปประทับนั่งอยู่บนฐานเขียง ด้านล่างของฐานเป็นรูโหว่\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	3,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(16,	'TP2559-0018',	'',	'พระหินอ่อนศิลปะพุกามพม่า',	'',	'2017-09-15',	'',	'ตก. 9.5 ซม. ฐส. 4.7 ซม. สอ. 15 ซม. สฐ. 19.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นพระพุทธรูปทำจากหินอ่อน ปางมารวิชัย นั่งขัดสมาธิราบ ชายสังฆาฏิยาว พระรัศมีมีรูปดอกบัวตูม ติ่งพระกัณฑ์ยาวถึงพระอังสา พระเนตรหรี่ลงต่ำ ลักษณะฐานเป็นฐานเขียง ส่วนด้านล่างพื้นของฐานเป็นรูโหว่ มีรอยชำรุดตรงปลายพระรัศมี\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	3,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(17,	'TP2559-0007',	'',	'เครื่องถ้วยลายครามศิลปะจีนโบราณ',	'',	'2017-09-15',	'',	'ก. 13.5 ซม. ฐก. 6 ซม. สฐ. 6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นถ้วยลายครามแบบศิลปะจีน โดยมีลวดลายที่ต่างไปจากเครื่องถ้วยจีนที่มีลวดลายดอกโบตั๋น แต่มีลายก้นหอยปนอยู่\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(18,	'TP2559-0013',	'',	'เครื่องถ้วยตราไก่สมัยโบราณ',	'',	'2017-09-15',	'',	'ก.14 ซม. ฐก.6 ซม. สฐ.6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยที่ทำมาจากดินเผาสีขาว มีการวาดลวดลายตราไก่แบบสมัยโบราณ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(19,	'TP2559-0008',	'',	'เครื่องถ้วยลายครามจีนโบราณ',	'',	'2017-09-15',	'',	'ก.16 ซม. ฐก. 8.5 ซม. สฐ. 6.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เครื่องถ้วยดินเผาเคลือบสีขาว ใช้หมึกสีน้ำเงินในการวาด ปากถ้วยมีรอยหยักอยู่รอบ ๆ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-12-19 11:00:59',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(20,	'TP2559-0009',	'',	'เครื่องถ้วยตราไก่สมัยโบราณ',	'',	'2017-09-15',	'',	'ก. 15 ซม. ฐก. 6.5 ซม. สฐ. 6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยทำมาจากดินเผาเคลือบ วาดลายรูปไก่สีดำ-แดง รูปดอกไม้สีชมพู และรูปใบไม้สีเขียว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(21,	'TP2559-0012',	'',	'น้ำต้น',	'',	'2017-09-15',	'',	'ส. 27 ซม. ปก. 8 ซม. ศก. 17.5 ซม. ฐก. 8.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องปั้นดินเผาเคลือบ สีน้ำตาล มีรอยเชือกทาบอยู่ 3 จุด คือ บริเวณคอน้ำต้น 2 จุด และตรงก้นน้ำต้นอีก 1 จุด ตกแต่งบริเวณลำตัวของน้ำต้นด้วยรอยขีดแบบเฉียงอีก 4 รอย รอบลำตัว มีร่องรอยชำรุดตรงบริเวณปากน้ำต้นเล็กน้อย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(22,	'TP2559-0011',	'',	'น้ำต้นสีดำ',	'',	'2017-09-15',	'',	'ส. 28 ซม. ปก. 3.5 ซม. ศก. 18.5 ซม. ฐก. 10 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องปั้นดินเผาเคลือบสีดำ เป็นศิลปะล้านนาผสมแบบหริภุญไชย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(23,	'TP2559-0010',	'',	'น้ำต้น',	'',	'2017-09-15',	'',	'ส. 29 ซม. ปก. 5.5 ซม. ศก. 17 ซม. ฐก. 8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำมาจากดินเผาแต่เคลือบไม่หมด สีแดงน้ำตาล มีร่องรอยชำรุดตรงบริเวณปาก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(24,	'TP2559-0006',	'',	'เครื่องถ้วยลายครามศิลปะจีนโบราณ',	'',	'2017-09-15',	'',	'ก. 13 ซม. ฐก. 7 ซม. สฐ. 5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยศิลปะจีน ใช้หมึกสีน้ำเงินในการวาด มีเส้นสีน้ำเงิน 2 เส้นอยู่ตรงกลางถ้วย และอีก 1 เส้นอยู่ตรงปากถ้วย และมีลวดลายดอกไม้รอบๆถ้วย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(25,	'TP2559-0005',	'',	'เครื่องถ้วยตราไก่โบราณ',	'',	'2017-09-15',	'',	'ก. 15 ซม. ฐก. 6.5 ซม. สฐ. 6 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยดินเผาเคลือบสีขาว สภาพเก่ามากมีร่องรอยแตกร้าวบริเวณรอบๆถ้วย\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(26,	'TP2559-0004',	'',	'เครื่องถ้วยเคลือบ',	'',	'2017-09-15',	'',	'ปก. 12.5 ซม. ฐก. 6 ซม. สฐ. 4.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเครื่องถ้วยที่ทำมาจากดินเผาเคลือบ ไม่มีลวดลาย ลักษณะสีเป็นสีขาวไข่ บริเวณก้นถ้วยมีเส้นขดเป็นวงไม่เรียบ\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-11-23',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(27,	'TP2559-0050',	'',	'พระบุเงินล้านนา ศิลปะเมืองน่าน',	'',	'2017-09-15',	'',	'ตก. 2 ซม. สฐ. 5.5 ซม. สอ. 4.3 ซม. สฐ. 1.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นพระพุทธรูปบุเงินล้านนา ศิลปะเมืองน่าน ปางสมาธิ ชายสังฆาฏิยาว พระรัศมีเป็นรูปเปลวเพลิง พระเกศาขดเป็นรูปก้นหอย พระพุทธรูปนั่งขัดสมาธิบนฐานชุกชี มีร่องรอยแตกหักชำรุดตรงบริเวณพระพาหา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(28,	'TP2559-0049',	'',	'เต้าปูนกินหมาก',	'',	'2017-09-15',	'',	'ฐก. 3.5 ซม. สฝ. 12.5 ซม. สฐ. 7 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นโลหะสีทองเก่าจนเป็นสีดำบางส่วน ฝาเป็นวงกลมซ้อนกัน 3 ชั้น คล้ายบัวถลา\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(29,	'TP2559-0048',	'',	'ตุ้มหูนากโบราณ',	'',	'2017-09-15',	'',	'ศก. 1 ซม. ก. 0.6 ซม. ส. 1.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากนาก เป็นโลหะผสมระหว่างทองแดง ทองคำ และเงิน รูปทรงกลมแบนมีส่วนสำหรับสอดเข้ารูหูติดอยู่ มี 2 ข้าง\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	4,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(30,	'TP2559-0047',	'',	'กังสะดานโบราณ (ปาล) 2',	'',	'2017-09-15',	'',	'ก.19.2 ซม, ส. 12 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นทรงสามเหลี่ยม คล้ายกับระฆังแต่มีรูปร่างแบน ทำจากโลหะ ด้านบนส่วนหัวเจาะรูไว้สำหรับใส่เชือก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(31,	'TP2559-0046',	'',	'กังสะดานโบราณ',	'',	'2017-09-15',	'',	'ก. 24.5 ซม. ส. 15 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีลักษณะเป็นทรง สามเหลี่ยม คล้ายกับระฆังแต่มีรูปร่างแบน ทำจากโลหะ ด้านบนส่วนหัวเจาะรูไว้สำหรับใส่เชือก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(32,	'TP2559-0045',	'',	'แหวนแก้วโป่งข่ามสมัยโบราณ',	'',	'2017-09-15',	'',	'หัวแหวน ศก. 0.7 ซม. ตัวแหวน ศก. 1.8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'หัวแหวนทำจากทองคำ ลักษณะกลมเกือบรี หัวแหวนทำจากแก้วโป่งข่าม (ควอซต์) ประเภทแก้วแร จะเห็นเงาเหลือบระแรอยู่ในเนื้อแก้ว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(33,	'TP2559-0044',	'',	'ตะปูเหล็กลิ่ม (สิงขวานอน)',	'',	'2017-09-15',	'',	'ย. 5.50 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'มีรูปร่างยาวปลายแหลม ตรงส่วนบริเวณหัวมีลักษณะบิดเบี้ยว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(34,	'TP2559-0043',	'',	'เหล็กลิ่มโบราณตรึงสลักปั้นลมวิหาร',	'',	'2017-09-15',	'',	'ย. 19 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'บริเวณหัวของเหล็กลิ่มมีลักษณะเป็นเหล็กหนารูป สี่เหลี่ยม ยาวลงมาตรงปลายคดงอและเรียวแหลม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	5,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(35,	'TP2559-0042',	'',	'เหล็กตรึงหลังช่อฟ้าวิหาร',	'',	'2017-09-15',	'',	'ก. 2 ซม. ย. 8 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นเหล็กที่มีขนาดเล็กรูปทรงคล้ายตะปู แต่มีลักษณะแบน มีรู ส่วนปลายแหลม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-11-23',	5,	1,	1,	'',	1,	'',	0,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(36,	'TP2559-0017',	'',	'ตะปูไม้สักโบราณ',	'',	'2017-09-15',	'',	'ย. 5.5 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากไม้สัก ลักษณะปลายแหลม รูปร่างคล้ายเข็ม\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(37,	'TP2559-0016',	'',	'ปั้นลมรูปพญานาคล้านนาโบราณ',	'',	'2017-09-15',	'',	'ส 65 ซม. ย 400 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'เป็นไม้แกะสลักรูปพญานาค ประดับตกแต่งด้วยกระจกจืน\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(38,	'TP2559-0014',	'',	'บัวหัวเสาไม้สักประดับกระจกจืน',	'',	'2017-09-15',	'',	'ย. 30 ซม. ส. 3.5 ซม. ก. 4 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทำจากไม้สัก รูปทรงสามเหลี่ยม ปลายแหลมบิดงอขึ้นคล้ายรูปกลีบบัว ส่วนที่ประดับกระจกจืนหลุดไปหมดแล้ว\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-12-19 10:26:56',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(39,	'TP2559-0015',	'',	'พระพุทธรูปไม้แกะสลักศิลปะล้านนา',	'',	'2017-09-15',	'',	'สฐ. 9 ซม. สอ. 7 ซม. ฐส. 2 ซม. ตก. 4.50 ซม.',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'แกะสลักจากไม้ ปางมารวิชัย นั่งขัดสมาธิราบ ชายพระสังฆาฎิยาวจรดพระนาภี เส้นพระเกศาเรียงเป็นรูปทรงสามเหลี่ยม พระรัศมีดอกบัวตูม พระเนตรหลบต่ำ พระเนตรด้านขวาถูกกะเทาะหายไป ติ่งพระกรรณข้างขวาชำรุด นั่งบนฐานเขียงสูง ตรงก้นมีรูใช้สำหรับยึดตอนแกะสลัก\r\n\r\n',	'',	'',	'',	'',	'',	'',	'',	'',	'2017-09-15',	6,	1,	1,	'',	1,	'',	1,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(41,	'p',	'',	'p',	'p',	'2017-12-26',	'',	'ppp',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'p',	'p',	'',	'',	'',	'',	'',	'',	'',	'2017-12-26',	1,	0,	1,	'ppp',	0,	'',	0,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(42,	'TP2561-D001',	'วทป2561.D001',	'ทดสอบTP2561-D001',	'Test',	'2018-01-04',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'ทดสอบ',	'test',	'',	'',	'',	'',	'',	'',	'',	'2018-01-09 11:25:05',	1,	1,	1,	'',	1,	'',	0,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0),
(43,	'กกก25611234',	'กกก-25611234',	'กกก25611234',	'กกก25611234',	'2018-01-09',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'',	'2018-01-10 09:37:47',	1,	1,	1,	'',	1,	'',	0,	1,	0,	1,	0,	0,	0,	0,	'0',	0,	0,	0,	0);

DROP TABLE IF EXISTS `muse_pic`;
CREATE TABLE `muse_pic` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` text NOT NULL,
  `thumb_name` text NOT NULL,
  `thumb_name2` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `folder_refcode` text DEFAULT NULL,
  `obj_cover` int(11) NOT NULL,
  `pic_detail` text NOT NULL,
  `listorder` int(11) NOT NULL,
  `pic_open` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `muse_pic` (`pic_id`, `pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `folder_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES
(1,	'2017-09-15_11-29-48_IMG_1576.JPG',	'Thumb_2017-09-15_11-29-44_IMG_1576.JPG',	'Thumb2_2017-09-15_11-29-45_IMG_1576.JPG',	0,	'TP2559-0027',	'TP2559-0027',	1,	'',	1,	1),
(2,	'2017-09-15_11-29-51_IMG_1578.JPG',	'Thumb_2017-09-15_11-29-48_IMG_1578.JPG',	'Thumb2_2017-09-15_11-29-48_IMG_1578.JPG',	0,	'TP2559-0027',	'TP2559-0027',	0,	'',	0,	1),
(3,	'2017-09-15_11-29-55_IMG_1583.JPG',	'Thumb_2017-09-15_11-29-52_IMG_1583.JPG',	'Thumb2_2017-09-15_11-29-52_IMG_1583.JPG',	0,	'TP2559-0027',	'TP2559-0027',	0,	'',	2,	1),
(4,	'2017-09-15_11-29-59_IMG_1585.JPG',	'Thumb_2017-09-15_11-29-56_IMG_1585.JPG',	'Thumb2_2017-09-15_11-29-56_IMG_1585.JPG',	0,	'TP2559-0027',	'TP2559-0027',	0,	'',	3,	0),
(5,	'2017-09-15_11-31-06_IMG_1565.JPG',	'Thumb_2017-09-15_11-31-02_IMG_1565.JPG',	'Thumb2_2017-09-15_11-31-03_IMG_1565.JPG',	0,	'TP2559-0026',	'TP2559-0026',	0,	'',	0,	1),
(6,	'2017-09-15_11-31-10_IMG_1567.JPG',	'Thumb_2017-09-15_11-31-06_IMG_1567.JPG',	'Thumb2_2017-09-15_11-31-07_IMG_1567.JPG',	0,	'TP2559-0026',	'TP2559-0026',	1,	'',	0,	1),
(7,	'2017-09-15_11-32-33_IMG_1562.JPG',	'Thumb_2017-09-15_11-32-30_IMG_1562.JPG',	'Thumb2_2017-09-15_11-32-30_IMG_1562.JPG',	0,	'TP2559-0025',	'TP2559-0025',	1,	'',	0,	1),
(8,	'2017-09-15_11-32-38_IMG_1563.JPG',	'Thumb_2017-09-15_11-32-34_IMG_1563.JPG',	'Thumb2_2017-09-15_11-32-35_IMG_1563.JPG',	0,	'TP2559-0025',	'TP2559-0025',	0,	'',	0,	1),
(13,	'2017-09-15_11-35-37_IMG_1539.JPG',	'Thumb_2017-09-15_11-35-34_IMG_1539.JPG',	'Thumb2_2017-09-15_11-35-34_IMG_1539.JPG',	0,	'TP2559-0023',	'TP2559-0023',	1,	'',	0,	1),
(14,	'2017-09-15_11-35-42_IMG_1541.JPG',	'Thumb_2017-09-15_11-35-38_IMG_1541.JPG',	'Thumb2_2017-09-15_11-35-39_IMG_1541.JPG',	0,	'TP2559-0023',	'TP2559-0023',	0,	'',	0,	1),
(11,	'2017-09-15_11-34-27_IMG_1553.JPG',	'Thumb_2017-09-15_11-34-23_IMG_1553.JPG',	'Thumb2_2017-09-15_11-34-24_IMG_1553.JPG',	0,	'TP2559-0024',	'TP2559-0024',	1,	'',	0,	1),
(12,	'2017-09-15_11-34-31_IMG_1556.JPG',	'Thumb_2017-09-15_11-34-28_IMG_1556.JPG',	'Thumb2_2017-09-15_11-34-28_IMG_1556.JPG',	0,	'TP2559-0024',	'TP2559-0024',	0,	'',	0,	1),
(15,	'2017-09-15_11-37-19_IMG_1962.JPG',	'Thumb_2017-09-15_11-37-16_IMG_1962.JPG',	'Thumb2_2017-09-15_11-37-16_IMG_1962.JPG',	0,	'TP2559-0041',	'TP2559-0041',	1,	'',	0,	1),
(16,	'2017-09-15_11-37-26_IMG_1964.JPG',	'Thumb_2017-09-15_11-37-23_IMG_1964.JPG',	'Thumb2_2017-09-15_11-37-23_IMG_1964.JPG',	0,	'TP2559-0041',	'TP2559-0041',	0,	'',	0,	1),
(17,	'2017-09-15_11-38-35_IMG_1955.JPG',	'Thumb_2017-09-15_11-38-32_IMG_1955.JPG',	'Thumb2_2017-09-15_11-38-32_IMG_1955.JPG',	0,	'TP2559-0040',	'TP2559-0040',	1,	'',	0,	1),
(18,	'2017-09-15_11-38-40_IMG_1957.JPG',	'Thumb_2017-09-15_11-38-36_IMG_1957.JPG',	'Thumb2_2017-09-15_11-38-37_IMG_1957.JPG',	0,	'TP2559-0040',	'TP2559-0040',	0,	'',	0,	1),
(19,	'2017-09-15_11-39-43_IMG_1949.JPG',	'Thumb_2017-09-15_11-39-39_IMG_1949.JPG',	'Thumb2_2017-09-15_11-39-40_IMG_1949.JPG',	0,	'TP2559-0039',	'TP2559-0039',	1,	'',	0,	1),
(20,	'2017-09-15_11-39-47_IMG_1952.JPG',	'Thumb_2017-09-15_11-39-43_IMG_1952.JPG',	'Thumb2_2017-09-15_11-39-44_IMG_1952.JPG',	0,	'TP2559-0039',	'TP2559-0039',	0,	'',	0,	1),
(21,	'2017-09-15_11-41-19_IMG_1937.JPG',	'Thumb_2017-09-15_11-41-15_IMG_1937.JPG',	'Thumb2_2017-09-15_11-41-16_IMG_1937.JPG',	0,	'TP2559-0037',	'TP2559-0037',	1,	'',	0,	1),
(22,	'2017-09-15_11-41-23_IMG_1940.JPG',	'Thumb_2017-09-15_11-41-19_IMG_1940.JPG',	'Thumb2_2017-09-15_11-41-20_IMG_1940.JPG',	0,	'TP2559-0037',	'TP2559-0037',	0,	'',	0,	1),
(23,	'2017-09-15_11-42-09_IMG_1930.JPG',	'Thumb_2017-09-15_11-42-05_IMG_1930.JPG',	'Thumb2_2017-09-15_11-42-06_IMG_1930.JPG',	0,	'TP2559-0036',	'TP2559-0036',	1,	'',	0,	1),
(24,	'2017-09-15_11-42-12_IMG_1933.JPG',	'Thumb_2017-09-15_11-42-09_IMG_1933.JPG',	'Thumb2_2017-09-15_11-42-09_IMG_1933.JPG',	0,	'TP2559-0036',	'TP2559-0036',	0,	'',	0,	1),
(25,	'2017-09-15_11-44-38_IMG_1924.JPG',	'Thumb_2017-09-15_11-44-34_IMG_1924.JPG',	'Thumb2_2017-09-15_11-44-35_IMG_1924.JPG',	0,	'TP2559-0035',	'TP2559-0035',	1,	'',	0,	1),
(26,	'2017-09-15_11-44-42_IMG_1927.JPG',	'Thumb_2017-09-15_11-44-39_IMG_1927.JPG',	'Thumb2_2017-09-15_11-44-39_IMG_1927.JPG',	0,	'TP2559-0035',	'TP2559-0035',	0,	'',	0,	1),
(32,	'2017-09-15_14-45-53_IMG_1881.JPG',	'Thumb_2017-09-15_14-45-49_IMG_1881.JPG',	'Thumb2_2017-09-15_14-45-50_IMG_1881.JPG',	0,	'TP2559-0033',	'TP2559-0033',	1,	'',	0,	1),
(31,	'2017-09-15_14-45-49_IMG_1879.JPG',	'Thumb_2017-09-15_14-45-45_IMG_1879.JPG',	'Thumb2_2017-09-15_14-45-46_IMG_1879.JPG',	0,	'TP2559-0033',	'TP2559-0033',	0,	'',	0,	1),
(29,	'2017-09-15_14-44-35_IMG_1918.JPG',	'Thumb_2017-09-15_14-44-32_IMG_1918.JPG',	'Thumb2_2017-09-15_14-44-32_IMG_1918.JPG',	0,	'TP2559-0034',	'TP2559-0034',	1,	'',	0,	1),
(30,	'2017-09-15_14-44-39_IMG_1920.JPG',	'Thumb_2017-09-15_14-44-36_IMG_1920.JPG',	'Thumb2_2017-09-15_14-44-36_IMG_1920.JPG',	0,	'TP2559-0034',	'TP2559-0034',	0,	'',	0,	1),
(33,	'2017-09-15_14-45-56_IMG_1882.JPG',	'Thumb_2017-09-15_14-45-53_IMG_1882.JPG',	'Thumb2_2017-09-15_14-45-53_IMG_1882.JPG',	0,	'TP2559-0033',	'TP2559-0033',	0,	'',	0,	1),
(34,	'2017-09-15_14-46-00_IMG_1885.JPG',	'Thumb_2017-09-15_14-45-57_IMG_1885.JPG',	'Thumb2_2017-09-15_14-45-57_IMG_1885.JPG',	0,	'TP2559-0033',	'TP2559-0033',	0,	'',	0,	0),
(35,	'2017-09-15_14-46-04_IMG_1890.JPG',	'Thumb_2017-09-15_14-46-01_IMG_1890.JPG',	'Thumb2_2017-09-15_14-46-01_IMG_1890.JPG',	0,	'TP2559-0033',	'TP2559-0033',	0,	'',	0,	1),
(36,	'2017-09-15_14-46-08_IMG_1898.JPG',	'Thumb_2017-09-15_14-46-05_IMG_1898.JPG',	'Thumb2_2017-09-15_14-46-05_IMG_1898.JPG',	0,	'TP2559-0033',	'TP2559-0033',	0,	'',	0,	1),
(37,	'2017-09-15_14-47-25_IMG_1492.JPG',	'Thumb_2017-09-15_14-47-21_IMG_1492.JPG',	'Thumb2_2017-09-15_14-47-22_IMG_1492.JPG',	0,	'TP2559-0032',	'TP2559-0032',	1,	'',	0,	1),
(38,	'2017-09-15_14-47-28_IMG_1495.JPG',	'Thumb_2017-09-15_14-47-25_IMG_1495.JPG',	'Thumb2_2017-09-15_14-47-25_IMG_1495.JPG',	0,	'TP2559-0032',	'TP2559-0032',	0,	'',	0,	1),
(39,	'2017-09-15_14-47-32_IMG_1497.JPG',	'Thumb_2017-09-15_14-47-29_IMG_1497.JPG',	'Thumb2_2017-09-15_14-47-29_IMG_1497.JPG',	0,	'TP2559-0032',	'TP2559-0032',	0,	'',	0,	1),
(40,	'2017-09-15_14-47-36_IMG_1501.JPG',	'Thumb_2017-09-15_14-47-33_IMG_1501.JPG',	'Thumb2_2017-09-15_14-47-33_IMG_1501.JPG',	0,	'TP2559-0032',	'TP2559-0032',	0,	'',	0,	0),
(41,	'2017-09-15_14-47-40_IMG_1502.JPG',	'Thumb_2017-09-15_14-47-37_IMG_1502.JPG',	'Thumb2_2017-09-15_14-47-37_IMG_1502.JPG',	0,	'TP2559-0032',	'TP2559-0032',	0,	'',	0,	1),
(42,	'2017-09-15_14-47-44_IMG_1505.JPG',	'Thumb_2017-09-15_14-47-41_IMG_1505.JPG',	'Thumb2_2017-09-15_14-47-41_IMG_1505.JPG',	0,	'TP2559-0032',	'TP2559-0032',	0,	'',	0,	1),
(43,	'2017-09-15_14-47-48_IMG_1506.JPG',	'Thumb_2017-09-15_14-47-45_IMG_1506.JPG',	'Thumb2_2017-09-15_14-47-45_IMG_1506.JPG',	0,	'TP2559-0032',	'TP2559-0032',	0,	'',	0,	1),
(44,	'2017-09-15_14-50-20_IMG_1751.JPG',	'Thumb_2017-09-15_14-50-17_IMG_1751.JPG',	'Thumb2_2017-09-15_14-50-17_IMG_1751.JPG',	0,	'TP2559-0022',	'TP2559-0022',	1,	'',	0,	1),
(45,	'2017-09-15_14-50-24_IMG_1753.JPG',	'Thumb_2017-09-15_14-50-21_IMG_1753.JPG',	'Thumb2_2017-09-15_14-50-21_IMG_1753.JPG',	0,	'TP2559-0022',	'TP2559-0022',	0,	'',	0,	1),
(46,	'2017-09-15_14-50-28_IMG_1755.JPG',	'Thumb_2017-09-15_14-50-25_IMG_1755.JPG',	'Thumb2_2017-09-15_14-50-25_IMG_1755.JPG',	0,	'TP2559-0022',	'TP2559-0022',	0,	'',	0,	1),
(47,	'2017-09-15_14-50-32_IMG_1756.JPG',	'Thumb_2017-09-15_14-50-29_IMG_1756.JPG',	'Thumb2_2017-09-15_14-50-29_IMG_1756.JPG',	0,	'TP2559-0022',	'TP2559-0022',	0,	'',	0,	0),
(57,	'2017-09-15_14-54-57_IMG_1792.JPG',	'Thumb_2017-09-15_14-54-54_IMG_1792.JPG',	'Thumb2_2017-09-15_14-54-54_IMG_1792.JPG',	0,	'TP2559-0007',	'TP2559-0007',	1,	'',	0,	1),
(58,	'2017-09-15_14-56-16_IMG_1827.JPG',	'Thumb_2017-09-15_14-56-13_IMG_1827.JPG',	'Thumb2_2017-09-15_14-56-13_IMG_1827.JPG',	0,	'TP2559-0013',	'TP2559-0013',	1,	'',	0,	1),
(56,	'2017-09-15_14-54-53_IMG_1787.JPG',	'Thumb_2017-09-15_14-54-50_IMG_1787.JPG',	'Thumb2_2017-09-15_14-54-50_IMG_1787.JPG',	0,	'TP2559-0007',	'TP2559-0007',	0,	'',	0,	1),
(51,	'2017-09-15_14-52-13_IMG_1869.JPG',	'Thumb_2017-09-15_14-52-10_IMG_1869.JPG',	'Thumb2_2017-09-15_14-52-10_IMG_1869.JPG',	0,	'TP2559-0018',	'TP2559-0018',	1,	'',	0,	1),
(52,	'2017-09-15_14-52-17_IMG_1872.JPG',	'Thumb_2017-09-15_14-52-14_IMG_1872.JPG',	'Thumb2_2017-09-15_14-52-14_IMG_1872.JPG',	0,	'TP2559-0018',	'TP2559-0018',	0,	'',	0,	1),
(53,	'2017-09-15_14-52-21_IMG_1873.JPG',	'Thumb_2017-09-15_14-52-18_IMG_1873.JPG',	'Thumb2_2017-09-15_14-52-18_IMG_1873.JPG',	0,	'TP2559-0018',	'TP2559-0018',	0,	'',	0,	1),
(54,	'2017-09-15_14-52-25_IMG_1876.JPG',	'Thumb_2017-09-15_14-52-21_IMG_1876.JPG',	'Thumb2_2017-09-15_14-52-22_IMG_1876.JPG',	0,	'TP2559-0018',	'TP2559-0018',	0,	'',	0,	0),
(59,	'2017-09-15_14-56-20_IMG_1829.JPG',	'Thumb_2017-09-15_14-56-16_IMG_1829.JPG',	'Thumb2_2017-09-15_14-56-17_IMG_1829.JPG',	0,	'TP2559-0013',	'TP2559-0013',	0,	'',	0,	1),
(61,	'2017-09-15_14-57-13_IMG_1800.JPG',	'Thumb_2017-09-15_14-57-10_IMG_1800.JPG',	'Thumb2_2017-09-15_14-57-10_IMG_1800.JPG',	0,	'TP2559-0013',	'TP2559-0013',	0,	'',	0,	1),
(62,	'2017-09-15_14-58-33_IMG_1796.JPG',	'Thumb_2017-09-15_14-58-30_IMG_1796.JPG',	'Thumb2_2017-09-15_14-58-30_IMG_1796.JPG',	0,	'TP2559-0008',	'TP2559-0008',	1,	'',	0,	1),
(63,	'2017-09-15_14-58-38_IMG_1797.JPG',	'Thumb_2017-09-15_14-58-34_IMG_1797.JPG',	'Thumb2_2017-09-15_14-58-35_IMG_1797.JPG',	0,	'TP2559-0008',	'TP2559-0008',	0,	'',	0,	1),
(64,	'2017-09-15_14-59-27_IMG_1798.JPG',	'Thumb_2017-09-15_14-59-24_IMG_1798.JPG',	'Thumb2_2017-09-15_14-59-24_IMG_1798.JPG',	0,	'TP2559-0009',	'TP2559-0009',	1,	'',	0,	1),
(65,	'2017-09-15_14-59-31_IMG_1799.JPG',	'Thumb_2017-09-15_14-59-28_IMG_1799.JPG',	'Thumb2_2017-09-15_14-59-28_IMG_1799.JPG',	0,	'TP2559-0009',	'TP2559-0009',	0,	'',	0,	1),
(66,	'2017-09-15_14-59-35_IMG_1800.JPG',	'Thumb_2017-09-15_14-59-32_IMG_1800.JPG',	'Thumb2_2017-09-15_14-59-32_IMG_1800.JPG',	0,	'TP2559-0009',	'TP2559-0009',	0,	'',	0,	1),
(67,	'2017-09-15_15-00-31_IMG_1813.JPG',	'Thumb_2017-09-15_15-00-28_IMG_1813.JPG',	'Thumb2_2017-09-15_15-00-28_IMG_1813.JPG',	0,	'TP2559-0012',	'TP2559-0012',	1,	'',	0,	1),
(68,	'2017-09-15_15-00-35_IMG_1815.JPG',	'Thumb_2017-09-15_15-00-32_IMG_1815.JPG',	'Thumb2_2017-09-15_15-00-32_IMG_1815.JPG',	0,	'TP2559-0012',	'TP2559-0012',	0,	'',	0,	1),
(69,	'2017-09-15_15-01-27_IMG_1809.JPG',	'Thumb_2017-09-15_15-01-24_IMG_1809.JPG',	'Thumb2_2017-09-15_15-01-24_IMG_1809.JPG',	0,	'TP2559-0011',	'TP2559-0011',	1,	'',	0,	1),
(70,	'2017-09-15_15-01-31_IMG_1810.JPG',	'Thumb_2017-09-15_15-01-27_IMG_1810.JPG',	'Thumb2_2017-09-15_15-01-28_IMG_1810.JPG',	0,	'TP2559-0011',	'TP2559-0011',	0,	'',	0,	1),
(71,	'2017-09-15_15-03-02_IMG_1805.JPG',	'Thumb_2017-09-15_15-02-58_IMG_1805.JPG',	'Thumb2_2017-09-15_15-02-59_IMG_1805.JPG',	0,	'TP2559-0010',	'TP2559-0010',	1,	'',	0,	1),
(72,	'2017-09-15_15-03-06_IMG_1806.JPG',	'Thumb_2017-09-15_15-03-03_IMG_1806.JPG',	'Thumb2_2017-09-15_15-03-03_IMG_1806.JPG',	0,	'TP2559-0010',	'TP2559-0010',	0,	'',	0,	1),
(73,	'2017-09-15_15-03-11_IMG_1807.JPG',	'Thumb_2017-09-15_15-03-08_IMG_1807.JPG',	'Thumb2_2017-09-15_15-03-08_IMG_1807.JPG',	0,	'TP2559-0010',	'TP2559-0010',	0,	'',	0,	1),
(74,	'2017-09-15_15-04-12_IMG_1783.JPG',	'Thumb_2017-09-15_15-04-09_IMG_1783.JPG',	'Thumb2_2017-09-15_15-04-09_IMG_1783.JPG',	0,	'TP2559-0006',	'TP2559-0006',	1,	'',	0,	1),
(75,	'2017-09-15_15-04-16_IMG_1784.JPG',	'Thumb_2017-09-15_15-04-13_IMG_1784.JPG',	'Thumb2_2017-09-15_15-04-13_IMG_1784.JPG',	0,	'TP2559-0006',	'TP2559-0006',	0,	'',	0,	1),
(76,	'2017-09-15_15-05-15_IMG_1777.JPG',	'Thumb_2017-09-15_15-05-11_IMG_1777.JPG',	'Thumb2_2017-09-15_15-05-12_IMG_1777.JPG',	0,	'TP2559-0005',	'TP2559-0005',	1,	'',	0,	1),
(77,	'2017-09-15_15-05-19_IMG_1780.JPG',	'Thumb_2017-09-15_15-05-15_IMG_1780.JPG',	'Thumb2_2017-09-15_15-05-16_IMG_1780.JPG',	0,	'TP2559-0005',	'TP2559-0005',	0,	'',	0,	1),
(78,	'2017-09-15_15-06-21_IMG_1772.JPG',	'Thumb_2017-09-15_15-06-18_IMG_1772.JPG',	'Thumb2_2017-09-15_15-06-18_IMG_1772.JPG',	0,	'TP2559-0004',	'TP2559-0004',	1,	'',	0,	1),
(79,	'2017-09-15_15-06-25_IMG_1773.JPG',	'Thumb_2017-09-15_15-06-22_IMG_1773.JPG',	'Thumb2_2017-09-15_15-06-22_IMG_1773.JPG',	0,	'TP2559-0004',	'TP2559-0004',	0,	'',	0,	1),
(80,	'2017-09-15_15-07-59_IMG_1906.JPG',	'Thumb_2017-09-15_15-07-55_IMG_1906.JPG',	'Thumb2_2017-09-15_15-07-56_IMG_1906.JPG',	0,	'TP2559-0050',	'TP2559-0050',	1,	'',	0,	1),
(81,	'2017-09-15_15-08-02_IMG_1909.JPG',	'Thumb_2017-09-15_15-07-59_IMG_1909.JPG',	'Thumb2_2017-09-15_15-07-59_IMG_1909.JPG',	0,	'TP2559-0050',	'TP2559-0050',	0,	'',	0,	1),
(82,	'2017-09-15_15-08-06_IMG_1914.JPG',	'Thumb_2017-09-15_15-08-03_IMG_1914.JPG',	'Thumb2_2017-09-15_15-08-03_IMG_1914.JPG',	0,	'TP2559-0050',	'TP2559-0050',	0,	'',	0,	1),
(83,	'2017-09-15_15-09-11_IMG_1686.JPG',	'Thumb_2017-09-15_15-09-07_IMG_1686.JPG',	'Thumb2_2017-09-15_15-09-08_IMG_1686.JPG',	0,	'TP2559-0049',	'TP2559-0049',	1,	'',	0,	1),
(84,	'2017-09-15_15-09-14_IMG_1690.JPG',	'Thumb_2017-09-15_15-09-11_IMG_1690.JPG',	'Thumb2_2017-09-15_15-09-11_IMG_1690.JPG',	0,	'TP2559-0049',	'TP2559-0049',	0,	'',	0,	1),
(85,	'2017-09-15_15-10-21_IMG_1681.JPG',	'Thumb_2017-09-15_15-10-18_IMG_1681.JPG',	'Thumb2_2017-09-15_15-10-18_IMG_1681.JPG',	0,	'TP2559-0048',	'TP2559-0048',	1,	'',	0,	1),
(86,	'2017-09-15_15-10-25_IMG_1683.JPG',	'Thumb_2017-09-15_15-10-22_IMG_1683.JPG',	'Thumb2_2017-09-15_15-10-22_IMG_1683.JPG',	0,	'TP2559-0048',	'TP2559-0048',	0,	'',	0,	1),
(87,	'2017-09-15_15-11-18_IMG_1675.JPG',	'Thumb_2017-09-15_15-11-14_IMG_1675.JPG',	'Thumb2_2017-09-15_15-11-15_IMG_1675.JPG',	0,	'TP2559-0047',	'TP2559-0047',	0,	'',	0,	1),
(88,	'2017-09-15_15-11-22_IMG_1677.JPG',	'Thumb_2017-09-15_15-11-18_IMG_1677.JPG',	'Thumb2_2017-09-15_15-11-19_IMG_1677.JPG',	0,	'TP2559-0047',	'TP2559-0047',	1,	'',	0,	1),
(89,	'2017-09-15_15-12-19_IMG_1667.JPG',	'Thumb_2017-09-15_15-12-16_IMG_1667.JPG',	'Thumb2_2017-09-15_15-12-16_IMG_1667.JPG',	0,	'TP2559-0046',	'TP2559-0046',	1,	'',	0,	1),
(90,	'2017-09-15_15-12-23_IMG_1670.JPG',	'Thumb_2017-09-15_15-12-20_IMG_1670.JPG',	'Thumb2_2017-09-15_15-12-20_IMG_1670.JPG',	0,	'TP2559-0046',	'TP2559-0046',	0,	'',	0,	1),
(92,	'2017-09-15_15-13-34_IMG_1644.JPG',	'Thumb_2017-09-15_15-13-31_IMG_1644.JPG',	'Thumb2_2017-09-15_15-13-31_IMG_1644.JPG',	0,	'TP2559-0045',	'TP2559-0045',	1,	'',	0,	1),
(93,	'2017-09-15_15-13-38_IMG_1648.JPG',	'Thumb_2017-09-15_15-13-34_IMG_1648.JPG',	'Thumb2_2017-09-15_15-13-35_IMG_1648.JPG',	0,	'TP2559-0045',	'TP2559-0045',	0,	'',	0,	1),
(94,	'2017-09-15_15-13-42_IMG_1650.JPG',	'Thumb_2017-09-15_15-13-39_IMG_1650.JPG',	'Thumb2_2017-09-15_15-13-39_IMG_1650.JPG',	0,	'TP2559-0045',	'TP2559-0045',	0,	'',	0,	1),
(95,	'2017-09-15_15-13-46_IMG_1653.JPG',	'Thumb_2017-09-15_15-13-43_IMG_1653.JPG',	'Thumb2_2017-09-15_15-13-43_IMG_1653.JPG',	0,	'TP2559-0045',	'TP2559-0045',	0,	'',	0,	0),
(96,	'2017-09-15_15-13-50_IMG_1654.JPG',	'Thumb_2017-09-15_15-13-47_IMG_1654.JPG',	'Thumb2_2017-09-15_15-13-47_IMG_1654.JPG',	0,	'TP2559-0045',	'TP2559-0045',	0,	'',	0,	1),
(97,	'2017-09-15_15-14-41_IMG_1624.JPG',	'Thumb_2017-09-15_15-14-37_IMG_1624.JPG',	'Thumb2_2017-09-15_15-14-38_IMG_1624.JPG',	0,	'TP2559-0044',	'TP2559-0044',	1,	'',	0,	1),
(98,	'2017-09-15_15-14-44_IMG_1633.JPG',	'Thumb_2017-09-15_15-14-41_IMG_1633.JPG',	'Thumb2_2017-09-15_15-14-41_IMG_1633.JPG',	0,	'TP2559-0044',	'TP2559-0044',	0,	'',	0,	1),
(99,	'2017-09-15_15-15-34_IMG_1608.JPG',	'Thumb_2017-09-15_15-15-31_IMG_1608.JPG',	'Thumb2_2017-09-15_15-15-31_IMG_1608.JPG',	0,	'TP2559-0043',	'TP2559-0043',	1,	'',	0,	1),
(100,	'2017-09-15_15-15-38_IMG_1613.JPG',	'Thumb_2017-09-15_15-15-35_IMG_1613.JPG',	'Thumb2_2017-09-15_15-15-35_IMG_1613.JPG',	0,	'TP2559-0043',	'TP2559-0043',	0,	'',	0,	1),
(101,	'2017-09-15_15-16-29_IMG_1595.JPG',	'Thumb_2017-09-15_15-16-25_IMG_1595.JPG',	'Thumb2_2017-09-15_15-16-26_IMG_1595.JPG',	0,	'TP2559-0042',	'TP2559-0042',	1,	'',	0,	1),
(102,	'2017-09-15_15-16-33_IMG_1596.JPG',	'Thumb_2017-09-15_15-16-29_IMG_1596.JPG',	'Thumb2_2017-09-15_15-16-30_IMG_1596.JPG',	0,	'TP2559-0042',	'TP2559-0042',	0,	'',	0,	1),
(103,	'2017-09-15_15-17-48_IMG_1986.JPG',	'Thumb_2017-09-15_15-17-44_IMG_1986.JPG',	'Thumb2_2017-09-15_15-17-45_IMG_1986.JPG',	0,	'TP2559-0017',	'TP2559-0017',	1,	'',	0,	1),
(104,	'2017-09-15_15-18-56_20161023_101630.jpg',	'Thumb_2017-09-15_15-18-52_20161023_101630.jpg',	'Thumb2_2017-09-15_15-18-53_20161023_101630.jpg',	0,	'TP2559-0016',	'TP2559-0016',	1,	'',	0,	1),
(105,	'2017-09-15_15-19-00_20161023_1016101.jpg',	'Thumb_2017-09-15_15-18-57_20161023_1016101.jpg',	'Thumb2_2017-09-15_15-18-57_20161023_1016101.jpg',	0,	'TP2559-0016',	'TP2559-0016',	0,	'',	0,	1),
(106,	'2017-09-15_15-19-49_IMG_1835.JPG',	'Thumb_2017-09-15_15-19-46_IMG_1835.JPG',	'Thumb2_2017-09-15_15-19-46_IMG_1835.JPG',	0,	'TP2559-0014',	'TP2559-0014',	1,	'',	0,	1),
(107,	'2017-09-15_15-19-54_IMG_1836.JPG',	'Thumb_2017-09-15_15-19-51_IMG_1836.JPG',	'Thumb2_2017-09-15_15-19-51_IMG_1836.JPG',	0,	'TP2559-0014',	'TP2559-0014',	0,	'',	0,	1),
(108,	'2017-09-15_15-19-58_IMG_1837.JPG',	'Thumb_2017-09-15_15-19-55_IMG_1837.JPG',	'Thumb2_2017-09-15_15-19-55_IMG_1837.JPG',	0,	'TP2559-0014',	'TP2559-0014',	0,	'',	0,	1),
(109,	'2017-09-15_15-20-02_IMG_1839.JPG',	'Thumb_2017-09-15_15-19-59_IMG_1839.JPG',	'Thumb2_2017-09-15_15-19-59_IMG_1839.JPG',	0,	'TP2559-0014',	'TP2559-0014',	0,	'',	0,	0),
(110,	'2017-09-15_15-20-51_IMG_1842.JPG',	'Thumb_2017-09-15_15-20-48_IMG_1842.JPG',	'Thumb2_2017-09-15_15-20-48_IMG_1842.JPG',	0,	'TP2559-0015',	'TP2559-0015',	1,	'',	0,	1),
(111,	'2017-09-15_15-20-55_IMG_1844.JPG',	'Thumb_2017-09-15_15-20-52_IMG_1844.JPG',	'Thumb2_2017-09-15_15-20-52_IMG_1844.JPG',	0,	'TP2559-0015',	'TP2559-0015',	0,	'',	0,	1),
(112,	'2017-09-15_15-20-59_IMG_1845.JPG',	'Thumb_2017-09-15_15-20-56_IMG_1845.JPG',	'Thumb2_2017-09-15_15-20-56_IMG_1845.JPG',	0,	'TP2559-0015',	'TP2559-0015',	0,	'',	0,	1),
(113,	'2017-09-15_15-21-03_IMG_1846.JPG',	'Thumb_2017-09-15_15-20-59_IMG_1846.JPG',	'Thumb2_2017-09-15_15-21-00_IMG_1846.JPG',	0,	'TP2559-0015',	'TP2559-0015',	0,	'',	0,	0),
(114,	'2018-01-09_14-27-52_2017-05-30_06-19-17_group3-11.jpg',	'Thumb_2018-01-09_14-27-49_2017-05-30_06-19-17_group3-11.jpg',	'Thumb2_2018-01-09_14-27-49_2017-05-30_06-19-17_group3-11.jpg',	0,	'กกก25611234',	'kkk25611234',	1,	'แจกัน',	0,	1),
(119,	'2018-01-09_15-26-44_2017-09-15_15-08-06_IMG_1914.JPG',	'Thumb_2018-01-09_15-26-41_2017-09-15_15-08-06_IMG_1914.JPG',	'Thumb2_2018-01-09_15-26-41_2017-09-15_15-08-06_IMG_1914.JPG',	0,	'กกก25611234',	'kkk25611234',	0,	'',	2,	1),
(124,	'2018-01-10_10-12-45_2017-09-12_10-08-33_thumb_DSC00160_1024.jpg',	'Thumb_2018-01-10_10-12-42_2017-09-12_10-08-33_thumb_DSC00160_1024.jpg',	'Thumb2_2018-01-10_10-12-42_2017-09-12_10-08-33_thumb_DSC00160_1024.jpg',	0,	'กกก25611234',	'kkk25611234',	0,	'',	6,	1),
(120,	'2018-01-09_15-31-14_2017-09-15_15-00-31_IMG_1813.JPG',	'Thumb_2018-01-09_15-31-11_2017-09-15_15-00-31_IMG_1813.JPG',	'Thumb2_2018-01-09_15-31-11_2017-09-15_15-00-31_IMG_1813.JPG',	0,	'กกก25611234',	'kkk25611234',	0,	'',	3,	0),
(121,	'2018-01-09_15-32-54_2017-09-15_11-31-10_IMG_1567.JPG',	'Thumb_2018-01-09_15-32-50_2017-09-15_11-31-10_IMG_1567.JPG',	'Thumb2_2018-01-09_15-32-51_2017-09-15_11-31-10_IMG_1567.JPG',	0,	'กกก25611234',	'kkk25611234',	0,	'',	4,	1),
(122,	'2018-01-09_15-35-29_flower2.jpg',	'Thumb_2018-01-09_15-35-26_flower2.jpg',	'Thumb2_2018-01-09_15-35-26_flower2.jpg',	0,	'กกก25611234',	'kkk25611234',	0,	'',	1,	1),
(125,	'2018-01-10_10-13-28_2017-08-10_13-24-45_doll01-36.jpg',	'Thumb_2018-01-10_10-13-25_2017-08-10_13-24-45_doll01-36.jpg',	'Thumb2_2018-01-10_10-13-25_2017-08-10_13-24-45_doll01-36.jpg',	0,	'กกก25611234',	'kkk25611234',	0,	'',	5,	1);

DROP TABLE IF EXISTS `muse_upload`;
CREATE TABLE `muse_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `muse_upload_check`;
CREATE TABLE `muse_upload_check` (
  `bpu_id` int(11) NOT NULL AUTO_INCREMENT,
  `obj_id` int(11) NOT NULL,
  `bpu_count_dowload` int(11) NOT NULL,
  `open_check` int(11) NOT NULL,
  `open_check_true` varchar(255) NOT NULL,
  `open_check_false` varchar(255) NOT NULL,
  PRIMARY KEY (`bpu_id`),
  KEY `bpu_id` (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `muse_upload_check` (`bpu_id`, `obj_id`, `bpu_count_dowload`, `open_check`, `open_check_true`, `open_check_false`) VALUES
(100,	715,	0,	1,	'icon_set2.png',	'icon_set3.png'),
(101,	715,	0,	1,	'icon_set2.png',	'icon_set3.png'),
(102,	715,	0,	0,	'icon_set2.png',	'icon_set3.png'),
(103,	715,	0,	1,	'icon_set2.png',	'icon_set3.png'),
(104,	715,	0,	1,	'icon_set2.png',	'icon_set3.png'),
(105,	715,	0,	0,	'icon_set2.png',	'icon_set3.png'),
(106,	580,	0,	0,	'icon_set2.png',	'icon_set3.png'),
(107,	825,	0,	1,	'icon_set2.png',	'icon_set3.png'),
(108,	578,	0,	0,	'icon_set2.png',	'icon_set3.png'),
(109,	825,	0,	0,	'icon_set2.png',	'icon_set3.png');

DROP TABLE IF EXISTS `muse_vr`;
CREATE TABLE `muse_vr` (
  `vr_id` int(11) NOT NULL AUTO_INCREMENT,
  `vr_dir` text NOT NULL,
  `obj_id` int(11) NOT NULL,
  `obj_refcode` text NOT NULL,
  `vr_direction` char(2) NOT NULL,
  PRIMARY KEY (`vr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `muse_vr` (`vr_id`, `vr_dir`, `obj_id`, `obj_refcode`, `vr_direction`) VALUES
(1,	'pano_S__18243757',	40,	'dd',	'R'),
(2,	'demogroup4',	40,	'dd',	'R'),
(3,	'demogroup4',	1,	'TP2559/0027',	'R'),
(4,	'demo4',	1,	'TP2559-0027',	'R'),
(5,	'demo',	2,	'TP2559-0026',	'R'),
(6,	'R0010049',	40,	't',	'R'),
(7,	'',	40,	't',	'R'),
(12,	'15',	41,	'p',	'R');

DROP TABLE IF EXISTS `news_file`;
CREATE TABLE `news_file` (
  `nwf_id` int(6) NOT NULL AUTO_INCREMENT,
  `nwf_file` varchar(255) NOT NULL,
  `new_id` int(11) NOT NULL,
  PRIMARY KEY (`nwf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `news_pic`;
CREATE TABLE `news_pic` (
  `np_id` int(7) NOT NULL AUTO_INCREMENT,
  `np_file` varchar(255) NOT NULL,
  `np_cover` tinyint(1) NOT NULL DEFAULT 0,
  `nw_id` int(11) NOT NULL,
  PRIMARY KEY (`np_id`),
  KEY `nw_id` (`nw_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `news_pic` (`np_id`, `np_file`, `np_cover`, `nw_id`) VALUES
(10,	'157db83f21f47d_mpfihojkgnelq.jpeg',	0,	27),
(11,	'157db94ecb0853_qepnoglhfikjm.jpeg',	0,	27),
(12,	'1581980e900e97_iejlpqgfomnhk.jpeg',	0,	27),
(13,	'158198a793c5f3_fjoqginhpklem.jpeg',	1,	31),
(14,	'15840f85206892_fgjqlhpnkmoie.jpeg',	0,	32),
(16,	'15943555cdcf5d_jqhkepgmiofnl.jpeg',	0,	27),
(18,	'159435783887c5_hmifnlpegqojk.jpeg',	0,	34),
(21,	'1594b1abf230fb_pghnqiolmjekf.jpeg',	0,	33),
(27,	'1594b63669f75d_ilqpjnofemkhg.jpeg',	0,	34),
(29,	'1594b6a24c0aa4_gmhfjlqoenikp.jpeg',	1,	35),
(31,	'aaa',	0,	32);

DROP TABLE IF EXISTS `news_upload`;
CREATE TABLE `news_upload` (
  `bpu_id` int(6) NOT NULL AUTO_INCREMENT,
  `bpu_file` varchar(255) NOT NULL,
  `bpu_upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `obj_id` int(5) NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `news_upload` (`bpu_id`, `bpu_file`, `bpu_upload_time`, `obj_id`) VALUES
(4,	'56160011.pdf',	'2016-11-01 23:41:15',	31),
(19,	'56160011_111.pdf',	'2016-11-01 23:41:15',	31),
(20,	'78567171914886206_668720116628346_696901188_n.jpg',	'2017-07-19 01:59:51',	1),
(27,	'if_pdfs_774684.png',	'2017-08-17 03:41:16',	39),
(29,	'20562818_1632979186748056_2025872653_n.jpg',	'2017-08-17 04:01:49',	40),
(31,	'aa22borsang.jpg',	'2017-09-06 01:26:53',	32),
(32,	'S__17932408.jpg',	'2017-09-11 07:31:25',	33),
(33,	'S__17932408.jpg',	'2017-09-11 07:33:01',	44),
(34,	'IMG_5757.jpg',	'2017-09-11 07:53:12',	42),
(35,	'IMG_5762.jpg',	'2017-09-11 07:53:53',	34);

DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `PROVINCE_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PROVINCE_CODE` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME_ENG` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (`PROVINCE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `province` (`PROVINCE_ID`, `PROVINCE_CODE`, `PROVINCE_NAME`, `PROVINCE_NAME_ENG`, `GEO_ID`) VALUES
(1,	'10',	'กรุงเทพมหานคร   ',	'Bangkok',	2),
(2,	'11',	'สมุทรปราการ   ',	'Samut Prakan',	2),
(3,	'12',	'นนทบุรี   ',	'Nonthaburi',	2),
(4,	'13',	'ปทุมธานี   ',	'Pathum Thani',	2),
(5,	'14',	'พระนครศรีอยุธยา   ',	'Phra Nakhon Si Ayutthaya',	2),
(6,	'15',	'อ่างทอง   ',	'Ang Thong',	2),
(7,	'16',	'ลพบุรี   ',	'Loburi',	2),
(8,	'17',	'สิงห์บุรี   ',	'Sing Buri',	2),
(9,	'18',	'ชัยนาท   ',	'Chai Nat',	2),
(10,	'19',	'สระบุรี',	'Saraburi',	2),
(11,	'20',	'ชลบุรี   ',	'Chon Buri',	5),
(12,	'21',	'ระยอง   ',	'Rayong',	5),
(13,	'22',	'จันทบุรี   ',	'Chanthaburi',	5),
(14,	'23',	'ตราด   ',	'Trat',	5),
(15,	'24',	'ฉะเชิงเทรา   ',	'Chachoengsao',	5),
(16,	'25',	'ปราจีนบุรี   ',	'Prachin Buri',	5),
(17,	'26',	'นครนายก   ',	'Nakhon Nayok',	2),
(18,	'27',	'สระแก้ว   ',	'Sa Kaeo',	5),
(19,	'30',	'นครราชสีมา   ',	'Nakhon Ratchasima',	3),
(20,	'31',	'บุรีรัมย์   ',	'Buri Ram',	3),
(21,	'32',	'สุรินทร์   ',	'Surin',	3),
(22,	'33',	'ศรีสะเกษ   ',	'Si Sa Ket',	3),
(23,	'34',	'อุบลราชธานี   ',	'Ubon Ratchathani',	3),
(24,	'35',	'ยโสธร   ',	'Yasothon',	3),
(25,	'36',	'ชัยภูมิ   ',	'Chaiyaphum',	3),
(26,	'37',	'อำนาจเจริญ   ',	'Amnat Charoen',	3),
(27,	'39',	'หนองบัวลำภู   ',	'Nong Bua Lam Phu',	3),
(28,	'40',	'ขอนแก่น   ',	'Khon Kaen',	3),
(29,	'41',	'อุดรธานี   ',	'Udon Thani',	3),
(30,	'42',	'เลย   ',	'Loei',	3),
(31,	'43',	'หนองคาย   ',	'Nong Khai',	3),
(32,	'44',	'มหาสารคาม   ',	'Maha Sarakham',	3),
(33,	'45',	'ร้อยเอ็ด   ',	'Roi Et',	3),
(34,	'46',	'กาฬสินธุ์   ',	'Kalasin',	3),
(35,	'47',	'สกลนคร   ',	'Sakon Nakhon',	3),
(36,	'48',	'นครพนม   ',	'Nakhon Phanom',	3),
(37,	'49',	'มุกดาหาร   ',	'Mukdahan',	3),
(38,	'50',	'เชียงใหม่   ',	'Chiang Mai',	1),
(39,	'51',	'ลำพูน   ',	'Lamphun',	1),
(40,	'52',	'ลำปาง   ',	'Lampang',	1),
(41,	'53',	'อุตรดิตถ์   ',	'Uttaradit',	1),
(42,	'54',	'แพร่   ',	'Phrae',	1),
(43,	'55',	'น่าน   ',	'Nan',	1),
(44,	'56',	'พะเยา   ',	'Phayao',	1),
(45,	'57',	'เชียงราย   ',	'Chiang Rai',	1),
(46,	'58',	'แม่ฮ่องสอน   ',	'Mae Hong Son',	1),
(47,	'60',	'นครสวรรค์   ',	'Nakhon Sawan',	2),
(48,	'61',	'อุทัยธานี   ',	'Uthai Thani',	2),
(49,	'62',	'กำแพงเพชร   ',	'Kamphaeng Phet',	2),
(50,	'63',	'ตาก   ',	'Tak',	4),
(51,	'64',	'สุโขทัย   ',	'Sukhothai',	2),
(52,	'65',	'พิษณุโลก   ',	'Phitsanulok',	2),
(53,	'66',	'พิจิตร   ',	'Phichit',	2),
(54,	'67',	'เพชรบูรณ์   ',	'Phetchabun',	2),
(55,	'70',	'ราชบุรี   ',	'Ratchaburi',	4),
(56,	'71',	'กาญจนบุรี   ',	'Kanchanaburi',	4),
(57,	'72',	'สุพรรณบุรี   ',	'Suphan Buri',	2),
(58,	'73',	'นครปฐม   ',	'Nakhon Pathom',	2),
(59,	'74',	'สมุทรสาคร   ',	'Samut Sakhon',	2),
(60,	'75',	'สมุทรสงคราม   ',	'Samut Songkhram',	2),
(61,	'76',	'เพชรบุรี   ',	'Phetchaburi',	4),
(62,	'77',	'ประจวบคีรีขันธ์   ',	'Prachuap Khiri Khan',	4),
(63,	'80',	'นครศรีธรรมราช   ',	'Nakhon Si Thammarat',	6),
(64,	'81',	'กระบี่   ',	'Krabi',	6),
(65,	'82',	'พังงา   ',	'Phangnga',	6),
(66,	'83',	'ภูเก็ต   ',	'Phuket',	6),
(67,	'84',	'สุราษฎร์ธานี   ',	'Surat Thani',	6),
(68,	'85',	'ระนอง   ',	'Ranong',	6),
(69,	'86',	'ชุมพร   ',	'Chumphon',	6),
(70,	'90',	'สงขลา   ',	'Songkhla',	6),
(71,	'91',	'สตูล   ',	'Satun',	6),
(72,	'92',	'ตรัง   ',	'Trang',	6),
(73,	'93',	'พัทลุง   ',	'Phatthalung',	6),
(74,	'94',	'ปัตตานี   ',	'Pattani',	6),
(75,	'95',	'ยะลา   ',	'Yala',	6),
(76,	'96',	'นราธิวาส   ',	'Narathiwat',	6),
(77,	'97',	'บึงกาฬ',	'buogkan',	3);

DROP TABLE IF EXISTS `theme`;
CREATE TABLE `theme` (
  `thm_id` int(2) NOT NULL AUTO_INCREMENT,
  `thm_file` varchar(30) NOT NULL,
  `thm_name` varchar(30) NOT NULL,
  `thm_enable` tinyint(1) NOT NULL DEFAULT 0,
  `thm_pk_code` varchar(6) NOT NULL,
  PRIMARY KEY (`thm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `theme` (`thm_id`, `thm_file`, `thm_name`, `thm_enable`, `thm_pk_code`) VALUES
(1,	'yellow',	'เหลือง',	0,	'facb4f'),
(2,	'red',	'แดง',	0,	'e23c3c'),
(3,	'pink',	'ชมพู',	0,	'f83d98'),
(4,	'blue',	'น้ำเงิน',	0,	'0d8ebd'),
(5,	'green',	'เขียว',	0,	'65b037'),
(6,	'jade',	'เขียวอ่อน',	0,	'bcd43e'),
(7,	'orange',	'แสด',	0,	'f04e22'),
(8,	'purple',	'ม่วง',	1,	'8e4fa7'),
(9,	'cyan',	'คราม',	0,	'3fbbc0'),
(10,	'beige',	'น้ำตาล',	0,	'b2a668');

DROP TABLE IF EXISTS `tz_members`;
CREATE TABLE `tz_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `regIP` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `permission` text COLLATE utf8_unicode_ci NOT NULL,
  `mem_pic` text CHARACTER SET utf8 NOT NULL,
  `mem_picshow` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usr` (`usr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tz_members` (`id`, `usr`, `pass`, `email`, `regIP`, `dt`, `permission`, `mem_pic`, `mem_picshow`) VALUES
(1,	'Admin',	'1234',	'infor-earchiveum4n@hotmail.com',	'',	'2013-03-09 12:54:48',	'superadmin',	'182615543514454693_1180410368700860_406583955_n (2).jpg',	''),
(2,	'Admin2',	'1234',	'info-earchiveum2@hotmail.com',	'127.0.0.1',	'2013-03-09 12:54:48',	'superadmin',	'avatar5.png',	''),
(6,	'Admin3',	'1234',	'info-earchiveum3@hotmail.com',	'127.0.0.1',	'2013-03-17 09:28:08',	'superadmin',	'avatar5.png',	''),
(9,	'Admin4',	'1234',	'infor-earchiveum4n@hotmail.com',	'127.0.0.1',	'2013-04-08 08:11:46',	'superadmin',	'eye-open.png',	''),
(10,	'patiphanzz',	'1234',	'patiphanzz@gmail.com',	'',	'0000-00-00 00:00:00',	'superadmin',	'avatar5.png',	''),
(12,	'test',	'1234',	'test@gmail',	'',	'0000-00-00 00:00:00',	'superadmin',	'eye-close.png',	''),
(14,	'aaa',	'1234',	'aaa@gmail.com',	'',	'0000-00-00 00:00:00',	'user',	'avatar5.png',	''),
(15,	'test2',	'1234',	'test2@gmail.com',	'',	'0000-00-00 00:00:00',	'superadmin',	'webcam-toy-photo2.jpg',	''),
(16,	'test001',	'1234',	'test001@gmail.com',	'',	'0000-00-00 00:00:00',	'superadmin',	'avatar5.png',	''),
(17,	'editor1',	'1234',	'editor@gmail.com',	'',	'0000-00-00 00:00:00',	'editor',	'avatar5.png',	''),
(18,	'1',	'123',	'editor1@gmail.com',	'',	'0000-00-00 00:00:00',	'editor',	'',	'');

DROP TABLE IF EXISTS `museum`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `museum` AS select `culture_thailue`.`muse_bg`.`bg_id` AS `museum_code`,`culture_thailue`.`muse_bg`.`bg_name` AS `museum_name`,`culture_thailue`.`muse_bg`.`bg_desc` AS `description`,`culture_thailue`.`muse_bg`.`bg_entry` AS `open_date`,`culture_thailue`.`muse_bg`.`bg_lat` AS `latitude`,`culture_thailue`.`muse_bg`.`bg_lon` AS `longitude`,`culture_thailue`.`muse_bg`.`bg_number` AS `address`,`culture_thailue`.`muse_bg`.`bg_tambon` AS `tambon`,`culture_thailue`.`muse_bg`.`bg_ampher` AS `ampher`,`culture_thailue`.`province`.`PROVINCE_NAME` AS `province`,`culture_thailue`.`muse_bg`.`bg_postcode` AS `zipcode`,`culture_thailue`.`muse_bg`.`bg_tel` AS `tel`,`culture_thailue`.`muse_bg`.`bg_email` AS `email`,`culture_thailue`.`muse_bg`.`bg_website` AS `website`,`culture_thailue`.`muse_bg`.`bg_pic` AS `thumbnail`,`culture_thailue`.`muse_bg`.`bg_picshow` AS `bg_picshow` from (`culture_thailue`.`muse_bg` join `culture_thailue`.`province` on(`culture_thailue`.`muse_bg`.`bg_city` = `culture_thailue`.`province`.`PROVINCE_ID`));

-- 2018-01-10 08:21:59
