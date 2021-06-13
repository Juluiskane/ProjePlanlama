-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2021, 07:49:24
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `pp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_me`
--

CREATE TABLE `about_me` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about_me`
--

INSERT INTO `about_me` (`about_id`, `about_title`, `content`, `cv`) VALUES
(1, 'Hakkımda', 'İsmim Harun Altun.19 yaşındayım.İnönü Üniversitesinde eğitim görmeye devam ediyorum.Müzik dinlemeyi,oyun oynamayı ve yüzmeyi severim.\r\n', 'resim_2021-05-06_162512.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  `locationn` varchar(100) NOT NULL,
  `location_link` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gsm` varchar(13) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `github` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_title`, `locationn`, `location_link`, `email`, `gsm`, `twitter`, `instagram`, `github`, `linkedin`) VALUES
(1, 'İLETİŞİM', 'Küçükçekmece,İstanbul', 'https://www.google.com/maps/place/Küçükçekmece%2Fİstanbul/data=!4m2!3m1!1s0x14caa4102814e62d:0xf17358ce73944614?sa=X&ved=2ahUKEwj0u6zH2MbvAhU_DmMBHTRtBiEQ8gEwPHoECCQQAQ', 'hrnaltun44@gmail.com', '+905549591150', 'https://twitter.com/Akrabadankacin', 'https://www.instagram.com/harunamabikmis/', 'https://github.com/Juluiskane', 'https://www.linkedin.com/in/harun-altun-2482a916a/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_settings`
--

CREATE TABLE `site_settings` (
  `settings_id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `namee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `site_settings`
--

INSERT INTO `site_settings` (`settings_id`, `site_title`, `namee`) VALUES
(1, 'Harun Altun', 'Harun Altun');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_title` varchar(50) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `fourth_skill` varchar(50) NOT NULL,
  `fifth_skill` varchar(50) NOT NULL,
  `sixth_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_counter` varchar(10) NOT NULL,
  `fourth_counter` varchar(10) NOT NULL,
  `fifth_counter` varchar(10) NOT NULL,
  `sixth_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_title`, `first_skill`, `second_skill`, `third_skill`, `fourth_skill`, `fifth_skill`, `sixth_skill`, `first_counter`, `second_counter`, `third_counter`, `fourth_counter`, `fifth_counter`, `sixth_counter`) VALUES
(1, 'Yetenekler', 'Html/Css', 'C', 'Javascript', 'Problem  çözme', 'Php', 'Sabır', '10', '10', '1', '65', '1', '85');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'admin', 'hrnaltun44@gmail.com', '48058e0c99bf7d689ce71c360699a14ce2f99774');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_me`
--
ALTER TABLE `about_me`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
