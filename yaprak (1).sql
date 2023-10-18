-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Eki 2023, 12:58:45
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yaprak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `kulad` char(255) NOT NULL,
  `sifre` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`adminID`, `kulad`, `sifre`) VALUES
(0, 'admin', '123\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `anasayfaID` int(11) NOT NULL,
  `baslik1` char(255) NOT NULL,
  `bilgi1` longtext NOT NULL,
  `baslik2` char(255) NOT NULL,
  `bilgi2` longtext NOT NULL,
  `resimURL1` char(255) NOT NULL,
  `resimURL2` char(255) NOT NULL,
  `resimURL3` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`anasayfaID`, `baslik1`, `bilgi1`, `baslik2`, `bilgi2`, `resimURL1`, `resimURL2`, `resimURL3`) VALUES
(1, 'Yaprak', 'Yaprak Bilgi Sistemi, doğanın güzelliklerini ve çeşitliliğini keşfetmek isteyen herkese rehberlik etmek amacıyla kurulmuştur. Bizler doğanın bize sunduğu muhteşem bitkilerin çeşitli türlerini keşfetmek, tanıtmak ve bilgi sağlamak için buradayız. Amacımız, bitkilerin farklı türlerini ve özelliklerini anlatarak doğayı daha iyi anlamanıza yardımcı olmaktır.', 'Yaprak Nedir ?', 'Yaprak Bilgi Sistemi, doğanın güzelliklerini ve çeşitliliğini keşfetmek isteyen herkese rehberlik etmek amacıyla kurulmuştur. Bizler doğanın bize sunduğu muhteşem bitkilerin çeşitli türlerini keşfetmek, tanıtmak ve bilgi sağlamak için buradayız. Amacımız, bitkilerin farklı türlerini ve özelliklerini anlatarak doğayı daha iyi anlamanıza yardımcı olmaktır.', 'resim01.jpg', 'resim02.jpg', 'resim03.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizdaID` int(11) NOT NULL,
  `hakkimizda` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizdaID`, `hakkimizda`) VALUES
(1, 'Yaprak Bilgi Sistemi, doğanın güzelliklerini ve çeşitliliğini keşfetmek isteyen herkese rehberlik etmek amacıyla kurulmuştur. Bizler doğanın bize sunduğu muhteşem bitkilerin çeşitli türlerini keşfetmek, tanıtmak ve bilgi sağlamak için buradayız. Amacımız, bitkilerin farklı türlerini ve özelliklerini anlatarak doğayı daha iyi anlamanıza yardımcı olmaktır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesajID` int(11) NOT NULL,
  `adsoyad` char(255) NOT NULL,
  `mail` char(255) NOT NULL,
  `konu` char(255) NOT NULL,
  `mesaj` longtext NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesajID`, `adsoyad`, `mail`, `konu`, `mesaj`, `tarih`) VALUES
(0, 'asd', 'sadik@gmail.com', 'asd', 'asd', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yapraklar`
--

CREATE TABLE `yapraklar` (
  `yaprakID` int(11) NOT NULL,
  `yaprakAD` char(255) NOT NULL,
  `yaprakÖnBilgi` longtext NOT NULL,
  `baslik1` char(255) NOT NULL,
  `yaprakBİLGİ1` longtext NOT NULL,
  `baslik2` char(255) NOT NULL,
  `yaprakBİLGİ2` longtext NOT NULL,
  `yaprakURL1` char(255) NOT NULL,
  `yaprakURL2` char(255) NOT NULL,
  `yaprakURL3` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yapraklar`
--

INSERT INTO `yapraklar` (`yaprakID`, `yaprakAD`, `yaprakÖnBilgi`, `baslik1`, `yaprakBİLGİ1`, `baslik2`, `yaprakBİLGİ2`, `yaprakURL1`, `yaprakURL2`, `yaprakURL3`) VALUES
(9, 'İncir', 'İncir yaprağı, incir ağacının büyüyen dallarında bulunan yeşil yapraklardır. Bu yapraklar, çok sayıda besin maddesi ve sağlık faydası taşırlar. İncir ağacı, Anadolu ve Akdeniz bölgesi gibi sıcak iklimlerde yetişir ve bu bölgelerde yaygın olarak bulunur.', 'incir yaprağı', 'incir yaprağı', 'incir yaprağı', 'incir yaprağı', 'foto/images.jpg', 'foto/incir2.jpg', 'foto/images.jpg'),
(10, 'Gül yaprağı', 'gül yaprağı ile ilgi yazı', 'Gül yaprağı', 'Gül yaprağı', 'Gül yaprağı', 'Gül yaprağı', 'foto/gul-1.jpg', 'foto/gul-1.jpg', 'foto/gul-1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yapraktür`
--

CREATE TABLE `yapraktür` (
  `turID` int(11) NOT NULL,
  `turAD` char(255) NOT NULL,
  `turBİLGİ` longtext NOT NULL,
  `turRESİM` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yapraktür`
--

INSERT INTO `yapraktür` (`turID`, `turAD`, `turBİLGİ`, `turRESİM`) VALUES
(1, 'Yumurta Yaprak', 'Yumurta yaprak', 'yumurta.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Tablo için indeksler `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`anasayfaID`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesajID`);

--
-- Tablo için indeksler `yapraklar`
--
ALTER TABLE `yapraklar`
  ADD PRIMARY KEY (`yaprakID`);

--
-- Tablo için indeksler `yapraktür`
--
ALTER TABLE `yapraktür`
  ADD PRIMARY KEY (`turID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `anasayfaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yapraklar`
--
ALTER TABLE `yapraklar`
  MODIFY `yaprakID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
