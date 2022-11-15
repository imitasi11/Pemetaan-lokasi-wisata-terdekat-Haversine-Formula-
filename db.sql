-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 03:44 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_login`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE IF NOT EXISTS `tb_wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `deskripsi` text,
  `kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama`, `alamat`, `latitude`, `longitude`, `gambar`, `deskripsi`, `kategori`) VALUES
(97, 'MUSEUM RADYA PUSTAKA SURAKARTA ', 'Jl. Slamet Riyadi No.275, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', -7.568719, 110.81436, '.jpg', 'mbok yo tulung sadaro ojo sak penak e dewe kiro kiro yen ra tresno ora kok ngene carane waton ninggal lungo gandeng karo wong lliyo yowes ora popo karma iseh ono yowes modaro', 'sejarah'),
(98, 'MUSEUM BATIK DANAR HADI', 'Jl. Slamet Riyadi No.261, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', -7.56878, 110.816322, '.jpg', 'esytdsaydgcsoahdfosajfklsajflkasjfksljfklasfjkashfasjkasfasjfaskjfask', 'sejarah'),
(99, 'MUSEUM DULLAH', 'Jl. Dr. Sutomo, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', -7.56477, 110.810726, '.jpg', NULL, 'sejarah'),
(100, 'MUSEUM REKSO PUSTOKO', 'Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', -7.566243, 110.823607, '.jpg', NULL, 'sejarah'),
(101, 'MUSEUM PERS', 'Jl. Gajahmada No.76, Timuran, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57132', -7.564734, 110.818102, '.jpg', NULL, 'sejarah'),
(102, 'MUSEUM LOKANANTA', 'Jl. A. Yani No.379, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57143', -7.55774, 110.795596, '.jpg', NULL, 'sejarah'),
(103, 'MUSEUM KERIS', 'Jl. Bhayangkara No.2, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', -7.568773, 110.810948, '.jpg', NULL, 'sejarah'),
(104, 'TAMAN BALEKAMBANG', 'Jl. Balekambang No.1, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139', -7.551945, 110.808549, '.jpg', '', 'alam'),
(105, 'WAYANG ORANG SRIWEDARI', 'Jl. Kebangkitan Nasional No.15, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', -7.568901, 110.812694, '.jpg', '', 'budaya'),
(106, 'KERATON KASUNANAN SURAKARTA', 'Baluwarti, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57144', -7.578114, 110.827348, '.jpg', '', 'sejarah'),
(107, 'PURA MANGKUNEGARAN', 'Jl. Ronggowarsito No.83, Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', -7.565649, 110.823227, '.jpg', '', 'budaya'),
(108, 'TAMAN SATWA TARU JURUG', 'Jl. Ir. Sutami No.109, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', -7.562854, 110.860256, '.jpg', '', 'alam'),
(109, 'PGS', 'Lantai 2,Gladag, Jl. Mayor Sunaryo No.1, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah', -7.572979, 110.829874, '.jpg', '', 'belanja'),
(110, 'BTC', 'Benteng Trade Center (BTC), Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133', -7.573182, 110.831178, '.jpg', '', 'belanja'),
(111, 'PASAR KLEWER', 'Jl. DR. Radjiman No.5A, Gajahan, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57155', -7.575336, 110.826558, '.jpg', '', 'belanja'),
(112, 'PASAR GEDHE', 'Jl. Jend. Urip Sumoharjo No.14, Sudiroprajan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57129', -7.569329, 110.831106, '.jpg', '', 'belanja'),
(113, 'PASAR ANTIK TRIWINDU', 'Ngarsopuro, Jl. Diponegoro, Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', -7.569203, 110.822381, '.jpg', '', 'belanja'),
(114, 'KAMPUNG BATIK KAUMAN', 'Kauman, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah', -7.57417, 110.825545, '.jpg', '', 'belanja'),
(115, 'GALABO', 'Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133', -7.572417, 110.8298, '.jpg', '', 'kuliner'),
(116, 'KAWASAN KULINER KOTA BARAT', 'Jl. Mawar, Penumping, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57141', -7.562212, 110.807005, '.jpg', '', 'kuliner'),
(117, 'MASJID AGUNG SURAKARTA', 'Great Mosque Street No.1, Kauman, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57122', -7.574342, 110.826575, '.png', '', 'religi'),
(118, 'SERABI NOTOSUMAN NY. LIDIA', 'Jl. Moh. Yamin No.28, Jayengan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57152', -7.577249, 110.820075, '.jpg', '', 'kuliner'),
(119, 'WEDANGAN LAWANG DJOENDJING', 'Gg. Gunung Kelud II No.7, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136', -7.543482, 110.831568, '.jpg', '', 'kuliner'),
(120, 'ASTANA OETARA', 'Jl. Nayu, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', -7.548064, 110.82356, '.jpg', '', 'religi'),
(121, 'VIHARA DHAMMA SUNDARA', 'Jl. Ir. Juanda No.223B, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57128', -7.569824, 110.848824, '.jpg', '', 'religi'),
(122, 'GUA MARIA MOJOSONGO', 'Kampung, Jl. Debegan, RT.4/RW.5, Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127', -7.546076, 110.83988, '.jpg', '', 'religi'),
(123, 'KLENTENG TIEN KOK SIE', 'Jl. RE Martadinata No.12, Sudiroprajan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57121', -7.569525, 110.831421, '.jpg', '', 'religi'),
(124, 'PURA INDRA PRASTA', 'Mutihan, Sondakan Lawean, Sondakan, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57147', -7.565481, 110.787107, '.jpg', '', 'sejarah'),
(125, 'KAMPUNG BATIK LAWEYAN', 'Jl. Sidoluhur No.6, Bumi, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57148', -7.570581, 110.797591, '.jpg', '', 'belanja'),
(126, 'SATE KAMBING MBOK GALAK ', 'Jl. Ki Mangun Sarkoro No.112, Sumber, Banjarsari, Banyuanyar, Sumber, Kec. Banjarsari, Kota Surakar', -7.544697, 110.808766, '.jpg', '', 'kuliner'),
(127, 'SERABI NOTOSUMAN NY. HANDAYANI', 'Jl. Moh. Yamin No.51, Kratonan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57153', -7.577521, 110.819798, '.jpg', '', 'kuliner'),
(128, 'SERABI NOTOSUMAN H. OEMAR', 'Jl. Gatot Subroto No.215, Kratonan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57152', -7.577644, 110.819544, '.jpg', '', 'kuliner'),
(132, 'MAJELIS TAFSIR AL-QURAN', 'Jl. Ronggowarsito Mangkunegaran No.111A, Timuran, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', -7.567937, 110.821797, '.jpg', 'tolong bisa plis', 'religi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
