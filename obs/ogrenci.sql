-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ogrenci`;
CREATE TABLE `ogrenci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adisoyadi` varchar(52) COLLATE utf8_turkish_ci NOT NULL,
  `numara` varchar(52) COLLATE utf8_turkish_ci NOT NULL,
  `bolum` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

INSERT INTO `ogrenci` (`id`, `adisoyadi`, `numara`, `bolum`) VALUES
(1,	'sena kudu',	'14290052',	'comp.eng'),
(2,	'Emirhan Kudu',	'14290051',	'elektrik elektronik muhendisligi'),
(3,	'metehan basol',	'14290049',	'makine muhendisligi'),
(4,	'Mükremin yıldız',	'14290030',	'hazırlık');

-- 2020-01-31 20:56:31
