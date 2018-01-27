-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2018, 19:49:45
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrencikayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `kullanici_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`kullanici_id`, `username`, `password`) VALUES
(1, 'burhan', '123456789'),
(2, 'can', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrencibilgi`
--

CREATE TABLE `ogrencibilgi` (
  `ogrenci_id` int(11) NOT NULL,
  `ogrenci_ad` varchar(50) NOT NULL,
  `ogrenci_email` varchar(50) NOT NULL,
  `ogrenci_no` varchar(15) NOT NULL,
  `ogrenci_bolum` varchar(50) NOT NULL,
  `ogrenci_sinif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `ogrencibilgi`
--

INSERT INTO `ogrencibilgi` (`ogrenci_id`, `ogrenci_ad`, `ogrenci_email`, `ogrenci_no`, `ogrenci_bolum`, `ogrenci_sinif`) VALUES
(12, 'emre', 'emre@gmail.com', '2014141001', 'bilgisayar mühendisi', 4),
(13, 'burhan', 'burhanguven34@hotmail.com', '2014141057', 'inşaat mühendisliği', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `ogrencibilgi`
--
ALTER TABLE `ogrencibilgi`
  ADD PRIMARY KEY (`ogrenci_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `kullanici_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `ogrencibilgi`
--
ALTER TABLE `ogrencibilgi`
  MODIFY `ogrenci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
