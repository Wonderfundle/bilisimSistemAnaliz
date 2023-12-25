-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Ara 2023, 00:46:40
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bilisimdeneme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `depolar`
--

CREATE TABLE `depolar` (
  `depo_id` int(11) NOT NULL,
  `depo_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `depolar`
--

INSERT INTO `depolar` (`depo_id`, `depo_adi`) VALUES
(1, 'Manisa-Akhisar'),
(2, 'İzmir-Menemen'),
(3, 'Aydın-Germencik'),
(4, 'Balıkesir-Burhaniye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`) VALUES
(1, 'İçecek'),
(2, 'Yiyecek'),
(3, 'Gazlı İçecek');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stok`
--

CREATE TABLE `stok` (
  `urun_id` int(11) NOT NULL,
  `depo_id` int(11) NOT NULL,
  `miktar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `stok`
--

INSERT INTO `stok` (`urun_id`, `depo_id`, `miktar`) VALUES
(1, 1, 305),
(4, 2, 35),
(4, 3, 35),
(4, 1, 35),
(9, 3, 271),
(3, 3, 83),
(6, 3, 120),
(7, 1, 207),
(50, 4, 230),
(47, 3, 50),
(8, 2, 102),
(11, 2, 63),
(47, 2, 50),
(1, 4, 44),
(1, 3, 200),
(1, 2, 55),
(40, 4, 26),
(29, 2, 90),
(29, 3, 90),
(29, 4, 90),
(45, 2, 250),
(45, 3, 258),
(45, 4, 110),
(45, 1, 120),
(36, 2, 30),
(36, 4, 30),
(36, 1, 30),
(27, 1, 265),
(27, 3, 380),
(22, 3, 70),
(32, 1, 200),
(32, 2, 300),
(8, 4, 102),
(38, 3, 57),
(38, 1, 110),
(42, 2, 48),
(31, 3, 220),
(44, 1, 400),
(41, 1, 40),
(41, 2, 165),
(49, 4, 60),
(50, 1, 230),
(5, 3, 300),
(5, 2, 0),
(13, 1, 45),
(13, 2, 165),
(40, 2, 26),
(40, 1, 26),
(25, 1, 44),
(25, 3, 44),
(20, 2, 10),
(20, 1, 10),
(46, 3, 75),
(30, 1, 45),
(30, 2, 145),
(7, 4, 207),
(33, 2, 120),
(41, 3, 90),
(48, 3, 70),
(14, 3, 35),
(14, 1, 35),
(3, 1, 40),
(44, 3, 200),
(16, 3, 0),
(5, 4, 90),
(30, 4, 25),
(17, 1, 190),
(10, 4, 7),
(49, 3, 90),
(3, 2, 130),
(15, 1, 710),
(7, 2, 207),
(15, 2, 170),
(31, 1, 30),
(50, 3, 230),
(36, 3, 60),
(21, 1, 60),
(4, 4, 300),
(38, 4, 155),
(26, 2, 150),
(5, 1, 280),
(42, 1, 150),
(44, 4, 100),
(31, 4, 300),
(15, 3, 25),
(37, 1, 60),
(24, 1, 120),
(25, 4, 44),
(23, 1, 80);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stok_hareketleri`
--

CREATE TABLE `stok_hareketleri` (
  `hareket_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `depo_id` int(11) NOT NULL,
  `miktar` int(11) NOT NULL,
  `hareket_tarihi` date NOT NULL,
  `hareket_turu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `stok_hareketleri`
--

INSERT INTO `stok_hareketleri` (`hareket_id`, `urun_id`, `depo_id`, `miktar`, `hareket_tarihi`, `hareket_turu`) VALUES
(1, 1, 1, 50, '2023-12-25', 'Yeni Veri Girişi'),
(2, 3, 3, 30, '2023-12-25', 'Yeni Veri Girişi'),
(4, 6, 3, 120, '2023-12-25', 'Yeni Veri Girişi'),
(5, 7, 1, 160, '2023-12-25', 'Yeni Veri Girişi'),
(6, 50, 4, 150, '2023-12-25', 'Yeni Veri Girişi'),
(7, 1, 1, 12, '2023-12-25', 'Azalan Miktar'),
(8, 47, 3, 75, '2023-12-25', 'Yeni Veri Girişi'),
(9, 8, 2, 132, '2023-12-25', 'Yeni Veri Girişi'),
(10, 11, 2, 42, '2023-12-25', 'Yeni Veri Girişi'),
(11, 47, 2, 76, '2023-12-25', 'Yeni Veri Girişi'),
(12, 3, 3, 23, '2023-12-25', 'Artan Miktar'),
(13, 1, 4, 44, '2023-12-25', 'Yeni Veri Girişi'),
(14, 1, 3, 50, '2023-12-25', 'Yeni Veri Girişi'),
(15, 1, 2, 55, '2023-12-25', 'Yeni Veri Girişi'),
(16, 7, 1, 33, '2023-12-25', 'Azalan Miktar'),
(17, 11, 2, 12, '2023-12-25', 'Azalan Miktar'),
(18, 11, 2, 50, '2023-12-25', 'Artan Miktar'),
(19, 40, 4, 77, '2023-12-25', 'Yeni Veri Girişi'),
(20, 29, 2, 100, '2023-12-25', 'Yeni Veri Girişi'),
(21, 29, 3, 100, '2023-12-25', 'Yeni Veri Girişi'),
(22, 29, 4, 100, '2023-12-25', 'Yeni Veri Girişi'),
(23, 29, 3, 10, '2023-12-25', 'Azalan Miktar'),
(24, 45, 2, 250, '2023-12-25', 'Yeni Veri Girişi'),
(25, 45, 3, 258, '2023-12-25', 'Yeni Veri Girişi'),
(26, 45, 4, 110, '2023-12-25', 'Yeni Veri Girişi'),
(27, 45, 1, 120, '2023-12-25', 'Yeni Veri Girişi'),
(28, 36, 2, 60, '2023-12-25', 'Yeni Veri Girişi'),
(29, 36, 4, 60, '2023-12-25', 'Yeni Veri Girişi'),
(30, 36, 1, 65, '2023-12-25', 'Yeni Veri Girişi'),
(31, 27, 1, 65, '2023-12-25', 'Yeni Veri Girişi'),
(32, 27, 3, 190, '2023-12-25', 'Yeni Veri Girişi'),
(33, 27, 3, 190, '2023-12-25', 'Artan Miktar'),
(34, 40, 4, 30, '2023-12-25', 'Azalan Miktar'),
(35, 36, 4, 30, '2023-12-25', 'Azalan Miktar'),
(36, 22, 3, 30, '2023-12-25', 'Yeni Veri Girişi'),
(37, 22, 1, 30, '2023-12-25', 'Azalan Miktar'),
(38, 32, 1, 200, '2023-12-25', 'Yeni Veri Girişi'),
(39, 32, 2, 200, '2023-12-25', 'Yeni Veri Girişi'),
(40, 8, 4, 80, '2023-12-25', 'Yeni Veri Girişi'),
(41, 38, 3, 57, '2023-12-25', 'Yeni Veri Girişi'),
(42, 38, 1, 60, '2023-12-25', 'Yeni Veri Girişi'),
(43, 42, 2, 60, '2023-12-25', 'Yeni Veri Girişi'),
(44, 31, 3, 77, '2023-12-25', 'Yeni Veri Girişi'),
(45, 31, 2, 7, '2023-12-25', 'Azalan Miktar'),
(46, 44, 1, 150, '2023-12-25', 'Yeni Veri Girişi'),
(47, 41, 1, 40, '2023-12-25', 'Yeni Veri Girişi'),
(48, 41, 2, 40, '2023-12-25', 'Yeni Veri Girişi'),
(49, 49, 4, 60, '2023-12-25', 'Yeni Veri Girişi'),
(50, 50, 4, 130, '2023-12-25', 'Artan Miktar'),
(51, 50, 1, 130, '2023-12-25', 'Yeni Veri Girişi'),
(52, 50, 2, 30, '2023-12-25', 'Azalan Miktar'),
(53, 5, 3, 75, '2023-12-25', 'Yeni Veri Girişi'),
(54, 5, 2, 75, '2023-12-25', 'Yeni Veri Girişi'),
(55, 5, 4, 75, '2023-12-25', 'Azalan Miktar'),
(56, 13, 1, 45, '2023-12-25', 'Yeni Veri Girişi'),
(57, 13, 2, 45, '2023-12-25', 'Yeni Veri Girişi'),
(58, 40, 2, 50, '2023-12-25', 'Yeni Veri Girişi'),
(59, 40, 1, 50, '2023-12-25', 'Yeni Veri Girişi'),
(60, 38, 1, 50, '2023-12-25', 'Artan Miktar'),
(61, 25, 1, 200, '2023-12-25', 'Yeni Veri Girişi'),
(62, 25, 3, 200, '2023-12-25', 'Yeni Veri Girişi'),
(63, 25, 2, 100, '2023-12-25', 'Azalan Miktar'),
(64, 20, 2, 100, '2023-12-25', 'Yeni Veri Girişi'),
(65, 20, 2, 57, '2023-12-25', 'Azalan Miktar'),
(66, 20, 1, 120, '2023-12-25', 'Yeni Veri Girişi'),
(67, 46, 3, 120, '2023-12-25', 'Yeni Veri Girişi'),
(68, 46, 1, 45, '2023-12-25', 'Azalan Miktar'),
(69, 30, 1, 45, '2023-12-25', 'Yeni Veri Girişi'),
(70, 30, 2, 45, '2023-12-25', 'Yeni Veri Girişi'),
(71, 7, 4, 50, '2023-12-25', 'Yeni Veri Girişi'),
(72, 32, 2, 100, '2023-12-25', 'Artan Miktar'),
(73, 40, 2, 100, '2023-12-25', 'Artan Miktar'),
(74, 40, 2, 21, '2023-12-25', 'Azalan Miktar'),
(75, 33, 2, 210, '2023-12-25', 'Yeni Veri Girişi'),
(76, 33, 3, 90, '2023-12-25', 'Azalan Miktar'),
(77, 41, 3, 90, '2023-12-25', 'Yeni Veri Girişi'),
(78, 48, 3, 35, '2023-12-25', 'Yeni Veri Girişi'),
(79, 48, 3, 35, '2023-12-25', 'Artan Miktar'),
(80, 14, 3, 35, '2023-12-25', 'Yeni Veri Girişi'),
(81, 14, 1, 35, '2023-12-25', 'Yeni Veri Girişi'),
(82, 3, 1, 40, '2023-12-25', 'Yeni Veri Girişi'),
(83, 9, 1, 32, '2023-12-25', 'Azalan Miktar'),
(84, 44, 3, 200, '2023-12-25', 'Yeni Veri Girişi'),
(85, 22, 3, 70, '2023-12-25', 'Artan Miktar'),
(86, 16, 3, 25, '2023-12-25', 'Yeni Veri Girişi'),
(87, 4, 2, 25, '2023-12-25', 'Azalan Miktar'),
(88, 11, 3, 17, '2023-12-25', 'Azalan Miktar'),
(89, 5, 4, 90, '2023-12-25', 'Yeni Veri Girişi'),
(90, 9, 3, 27, '2023-12-25', 'Azalan Miktar'),
(91, 1, 3, 150, '2023-12-25', 'Artan Miktar'),
(92, 1, 1, 150, '2023-12-25', 'Artan Miktar'),
(93, 44, 1, 250, '2023-12-25', 'Artan Miktar'),
(94, 42, 3, 12, '2023-12-25', 'Azalan Miktar'),
(95, 30, 4, 25, '2023-12-25', 'Yeni Veri Girişi'),
(96, 30, 2, 100, '2023-12-25', 'Artan Miktar'),
(97, 17, 1, 190, '2023-12-25', 'Yeni Veri Girişi'),
(98, 10, 4, 27, '2023-12-25', 'Yeni Veri Girişi'),
(99, 7, 1, 230, '2023-12-25', 'Artan Miktar'),
(100, 49, 3, 90, '2023-12-25', 'Yeni Veri Girişi'),
(101, 41, 2, 125, '2023-12-25', 'Artan Miktar'),
(102, 27, 1, 200, '2023-12-25', 'Artan Miktar'),
(103, 3, 2, 130, '2023-12-25', 'Yeni Veri Girişi'),
(104, 3, 3, 30, '2023-12-25', 'Artan Miktar'),
(105, 5, 3, 300, '2023-12-25', 'Artan Miktar'),
(106, 15, 1, 1210, '2023-12-25', 'Yeni Veri Girişi'),
(107, 15, 1, 500, '2023-12-25', 'Azalan Miktar'),
(108, 10, 4, 130, '2023-12-25', 'Artan Miktar'),
(109, 7, 2, 170, '2023-12-25', 'Yeni Veri Girişi'),
(110, 15, 2, 170, '2023-12-25', 'Yeni Veri Girişi'),
(111, 47, 1, 25, '2023-12-25', 'Azalan Miktar'),
(112, 31, 1, 30, '2023-12-25', 'Yeni Veri Girişi'),
(113, 50, 3, 30, '2023-12-25', 'Yeni Veri Girişi'),
(114, 50, 3, 20, '2023-12-25', 'Azalan Miktar'),
(115, 36, 3, 60, '2023-12-25', 'Yeni Veri Girişi'),
(116, 21, 1, 60, '2023-12-25', 'Yeni Veri Girişi'),
(117, 8, 1, 30, '2023-12-25', 'Azalan Miktar'),
(118, 4, 4, 300, '2023-12-25', 'Yeni Veri Girişi'),
(119, 7, 4, 150, '2023-12-25', 'Azalan Miktar'),
(120, 38, 4, 155, '2023-12-25', 'Yeni Veri Girişi'),
(121, 26, 2, 150, '2023-12-25', 'Yeni Veri Girişi'),
(122, 16, 2, 25, '2023-12-25', 'Azalan Miktar'),
(123, 5, 1, 280, '2023-12-25', 'Yeni Veri Girişi'),
(124, 42, 1, 150, '2023-12-25', 'Yeni Veri Girişi'),
(125, 31, 3, 150, '2023-12-25', 'Artan Miktar'),
(126, 20, 3, 33, '2023-12-25', 'Azalan Miktar'),
(127, 9, 3, 90, '2023-12-25', 'Artan Miktar'),
(128, 44, 4, 100, '2023-12-25', 'Yeni Veri Girişi'),
(129, 31, 4, 150, '2023-12-25', 'Yeni Veri Girişi'),
(130, 31, 4, 150, '2023-12-25', 'Artan Miktar'),
(131, 10, 3, 125, '2023-12-25', 'Azalan Miktar'),
(132, 15, 3, 25, '2023-12-25', 'Yeni Veri Girişi'),
(133, 13, 2, 120, '2023-12-25', 'Artan Miktar'),
(134, 37, 1, 60, '2023-12-25', 'Yeni Veri Girişi'),
(135, 24, 1, 120, '2023-12-25', 'Yeni Veri Girişi'),
(136, 25, 4, 120, '2023-12-25', 'Yeni Veri Girişi'),
(137, 25, 1, 56, '2023-12-25', 'Azalan Miktar'),
(138, 23, 1, 200, '2023-12-25', 'Yeni Veri Girişi'),
(139, 23, 3, 120, '2023-12-25', 'Azalan Miktar'),
(140, 10, 4, 25, '2023-12-25', 'Azalan Miktar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tedarikciler`
--

CREATE TABLE `tedarikciler` (
  `tedarikci_id` int(11) NOT NULL,
  `tedarikci_adi` varchar(255) NOT NULL,
  `tedarikci_adresi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tedarikciler`
--

INSERT INTO `tedarikciler` (`tedarikci_id`, `tedarikci_adi`, `tedarikci_adresi`) VALUES
(1, 'Pepsi', 'Egemenlik Mah. 6096/3. Sok. No: 2/A, Bornova, İzmir'),
(2, 'FritoLay', 'Egemenlik, Aydınlar Cd. No:3, 35070 Bornova/İzmir'),
(3, 'Pınar', 'Yunus Emre Mh. Kemalpaşa Cd. No:317 P.K. 35060 Pınarbaşı – Bornova / İZMİR'),
(4, 'Uludağ', 'Geri Dönüşümcüler Sitesi İçi Egemenlik Mahallesi, Aydınlar Caddesi No:87 Pk.35070. Işıkkent Bornova / İzmir'),
(5, 'Kaltun Madran', 'Kasımpaşa Mh.1025 Sok.No:10 Menemen'),
(6, 'Avşar', 'Cumhuriyet Mah. Sanayi Sitesi No:102/1 Selçuk/İZMİR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `birim_fiyat` decimal(10,2) NOT NULL,
  `tedarikci_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `kategori_id`, `birim_fiyat`, `tedarikci_id`) VALUES
(1, 'Pepsi Cola 1L', 3, 20.00, 1),
(2, 'Pepsi Kutu Cola 250ml', 3, 15.00, 1),
(3, 'Pepsi Twist 4x250 ml Kutu', 3, 149.90, 1),
(4, 'Pepsi Twist Pet 1 LT', 3, 49.00, 1),
(5, 'Doritos Nacho Peynirli', 2, 25.00, 2),
(6, 'Lays Klasik Parti Boy', 2, 35.00, 2),
(7, ' Midi Süt Mısır 26gr', 2, 14.00, 2),
(8, 'Lays Fırından Süzme Yoğurt Acılı Domates 96 Gr', 2, 34.00, 2),
(9, 'Lays Yoğurt Mevsim Yeşillikleri Aile Boy', 2, 34.00, 2),
(10, 'Lays Baharatlı Süper Boy 107 Gr', 2, 39.00, 2),
(11, 'Avşar M.soda 200 Ml Düşes Armudu Nektar', 3, 14.00, 6),
(12, 'Avşar Soda Karadut&Frenk Üzümü 200 ml', 3, 14.00, 6),
(13, 'Avşar Maden Suyu C Plus Limon 200 Ml', 3, 14.00, 6),
(14, 'Avşar M.soda 200 Ml Karamix', 3, 14.00, 6),
(15, 'Avşar C Plus Mango-Ananas Aromalı Maden Suyu 200 ml', 3, 14.00, 6),
(16, 'Avşar C Plus Karpuz Çilek Maden Suyu 200 ml', 3, 14.00, 6),
(17, 'Avşar Maden Suyu Sade 200 Ml\r\n', 3, 14.00, 6),
(18, 'Avşar Maden Suyu Yeşil Elma 200 Ml', 3, 14.00, 6),
(19, 'Kaltun Su Pet Şişe 1,5ltx6’lı Paket', 1, 59.00, 5),
(20, 'Kaltun Su Pet Şişe 5lt', 1, 49.00, 5),
(21, 'Kaltun Su Pet Şişe 500ml', 1, 14.00, 5),
(22, 'Kaltun Bardak Su 200mlx72\'li Paket', 1, 89.00, 5),
(23, 'Pınar Krema (%35 Yağlı) 200 ml', 2, 54.00, 3),
(24, 'Pınar Kasap Dana Kıyma (Köftelik) 1kg', 2, 489.00, 3),
(25, 'Pınar Aç Bitir Dana Jambon 50 g', 2, 19.00, 3),
(26, 'Pınar Piliç Şinitzel 415 g', 2, 125.00, 3),
(27, 'Pınar Ayran 170 ml', 1, 5.00, 3),
(28, 'Pınar Labne 8x20 g', 2, 54.00, 3),
(29, 'Pınar Limon Cheesecake Soslu Labne 180 g', 2, 56.00, 3),
(30, 'Pınar Denge Laktozsuz Yarım Yağlı Yoğurt 750 g', 2, 64.00, 3),
(31, 'Uludag M.suyu Premıum 250 Ml', 3, 14.00, 4),
(32, 'Uludağ Doğal Maden Suyu 200ml', 3, 19.00, 4),
(33, 'Uludağ Frutti Limon 6*200 Ml', 3, 59.00, 4),
(34, 'Uludağ Frutti Elma 6*200 Ml', 3, 59.00, 4),
(35, 'Uludağ Frutti Karpuz Çilek 6x200ml', 3, 59.00, 4),
(36, 'Uludağ Frutti Çilek 6*200 Ml', 3, 59.00, 4),
(37, 'Uludağ Frutti Nar 250ml', 3, 9.00, 4),
(38, 'Uludağ Extra Orman Meyveli 250 Ml', 3, 14.00, 4),
(39, 'Uludağ Frutti 250 Ml Extra Armutlu', 3, 14.00, 4),
(40, 'Pınar Tereyağı 700 g', 2, 334.00, 3),
(41, 'Pınar Kayseri Mantısı 400 g', 2, 39.00, 3),
(42, 'Pınar Milföy 500 g', 2, 39.00, 3),
(44, 'Uludağ Meyvelim Orman Meyveleri 1 Lt', 1, 29.00, 4),
(45, 'Pınar Sarımsaklı & Frenk Soğanlı Labne 180 g', 2, 56.00, 3),
(46, 'Pınar Cheddar Dilimli Peynir 200 g', 2, 116.00, 3),
(47, 'Pınar Dilimli Tost Peyniri 500 g', 2, 210.00, 3),
(48, 'Pınar Beyaz 180 g', 2, 49.00, 3),
(49, 'Pınar Kahvaltı Kreması 160 g', 2, 47.00, 3),
(50, 'Pınar Üçgen Peynir 8x12,5 g', 2, 28.00, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_adi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`yonetici_id`, `yonetici_adi`, `sifre`) VALUES
(1, 'Hakan Aydın', '123456'),
(2, 'Ali Dağ', '214365'),
(3, 'Ahmet Tunç', '657840');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `depolar`
--
ALTER TABLE `depolar`
  ADD PRIMARY KEY (`depo_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `stok`
--
ALTER TABLE `stok`
  ADD KEY `urun_id` (`urun_id`) USING BTREE,
  ADD KEY `depo_id` (`depo_id`) USING BTREE;

--
-- Tablo için indeksler `stok_hareketleri`
--
ALTER TABLE `stok_hareketleri`
  ADD PRIMARY KEY (`hareket_id`),
  ADD KEY `urun_id` (`urun_id`) USING BTREE,
  ADD KEY `depo_id` (`depo_id`) USING BTREE;

--
-- Tablo için indeksler `tedarikciler`
--
ALTER TABLE `tedarikciler`
  ADD PRIMARY KEY (`tedarikci_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `kategori_id` (`kategori_id`) USING BTREE,
  ADD KEY `tedarikci_id` (`tedarikci_id`) USING BTREE;

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `stok_hareketleri`
--
ALTER TABLE `stok_hareketleri`
  MODIFY `hareket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4136;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_ibfk_2` FOREIGN KEY (`depo_id`) REFERENCES `depolar` (`depo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `stok_hareketleri`
--
ALTER TABLE `stok_hareketleri`
  ADD CONSTRAINT `stok_hareketleri_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`urun_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_hareketleri_ibfk_2` FOREIGN KEY (`depo_id`) REFERENCES `depolar` (`depo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategoriler` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urunler_ibfk_2` FOREIGN KEY (`tedarikci_id`) REFERENCES `tedarikciler` (`tedarikci_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
