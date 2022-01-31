-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2022 at 03:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedingku`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `prov_id`) VALUES
(508, 'Jayapura', NULL),
(507, 'Manokwari', NULL),
(506, 'Ambon', NULL),
(505, 'Ternate', NULL),
(504, 'Makasar', NULL),
(503, 'Kendari', NULL),
(502, 'Manado', NULL),
(501, 'Palu', NULL),
(500, 'Mamuju', NULL),
(499, 'Gorontalo', NULL),
(498, 'Bali', NULL),
(497, 'Surabaya', NULL),
(496, 'Yogyakarta', NULL),
(495, 'Semarang', NULL),
(494, 'Bandung', NULL),
(493, 'Jakarta', NULL),
(492, 'Serang', NULL),
(491, 'Tanjung Selor', NULL),
(490, 'Palang Karaya', NULL),
(489, 'Banjarmasin', NULL),
(488, 'Samarinda', NULL),
(487, 'Pontianak', NULL),
(486, 'Pangkal Pinang', NULL),
(485, 'Bandar Lampung', NULL),
(484, 'Jambi', NULL),
(483, 'Tanjung Pinang', NULL),
(482, 'Pekanbaru', NULL),
(481, 'Bengkulu', NULL),
(480, 'Padang', NULL),
(479, 'Palembang', NULL),
(478, 'Medan', NULL),
(477, 'Banda Aceh', NULL),
(476, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_member` int(5) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_member`, `id_vendor`, `id_produk`) VALUES
(35, 8, 1, 7),
(36, 9, 1, 7),
(37, 8, 1, 7),
(38, 8, 1, 7),
(39, 9, 1, 5),
(40, 9, 1, 4),
(41, 9, 1, 6),
(42, 10, 17, 9),
(43, 9, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner_slider`
--

CREATE TABLE `tb_banner_slider` (
  `id` int(11) NOT NULL,
  `gambar_banner` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_lengkap_vendor`
--

CREATE TABLE `tb_data_lengkap_vendor` (
  `id` int(11) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `id_kategori_service` int(5) NOT NULL,
  `id_media_sosial` int(1) NOT NULL,
  `nama_bisnis` varchar(255) NOT NULL,
  `tentang_bisnis` varchar(500) NOT NULL,
  `alamat_kantor` varchar(500) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_tlp_bisnis` varchar(50) NOT NULL,
  `no_wa_bisnis` varchar(50) NOT NULL,
  `foto_profile` varchar(255) NOT NULL,
  `tumbnail_vendor` varchar(255) NOT NULL,
  `flexible_vendor` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_lengkap_vendor`
--

INSERT INTO `tb_data_lengkap_vendor` (`id`, `id_vendor`, `id_kategori_service`, `id_media_sosial`, `nama_bisnis`, `tentang_bisnis`, `alamat_kantor`, `kota`, `no_tlp_bisnis`, `no_wa_bisnis`, `foto_profile`, `tumbnail_vendor`, `flexible_vendor`) VALUES
(1, 1, 1, 1, 'Alissha Bride', 'Established in 2012, Alissha is known for its up to date gowns and spectacular quality of its dress. We served the best quality of our dresses, make-up, and photography. And now we also have venue, decoration, and Wedding Organizer & Entertainment (All-In Packages)', 'Jl. Bisma Tengah 2 No.21, RT.7/RW.9, Papanggo, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14340', 'Bandung', '(021) 5215334', '085803135909', 'alissha-bride.webp', 'bridal1.webp', 1),
(2, 2, 12, 2, 'Luxe Voir Enterprise', 'We provide professional MC and session player for Wedding, Event, Gathering, etc', 'Kalideres ', 'Semarang', '(021) 5215332', '081239438228', 'luxe-voir-enterprise.webp', 'music1.webp', 0),
(3, 3, 4, 3, 'Red Ribbon Gift', '', 'Ketapang Business Centre no B8. Jalan. KH Zainul Arifin . Jakarta Pusat Ph: 08159005876 / 081298867011 Line : redribbongift', 'Jakarta', '(021) 5215345', '081225405255', 'red-ribbon-gift.webp', 'sovenir1.webp', 1),
(4, 4, 10, 4, 'lolphotobooth.co', 'LOLphotobooth.co is a self-service photo booth machine. Our machines automated and equipped with cutting edge technology, great lighting and high resolution rapid printing. Our templates are customizable to suit every client\'s unique needs. Each picture will be given a unique QR code. Upon scanning the code, pictures and videos can be downloaded and saved into the user\'s smartphone.\r\n\r\nWe are available in Jakarta, Bali, Bandung, Jogjakarta, Lampung, Makassar, Medan, Semarang, Surabaya & Vietnam.', 'Citywalk Sudirman, Jl KH Mas Mansyur, unit 2203, Jakarta Pusat', 'Bali', '(021) 5215355', '085803135900', 'lolphotoboothco.webp', 'photo1.webp', 1),
(5, 5, 1, 5, 'Elina Wang Bridal', 'We understand that everyone have their own wedding dream. It is a pleasure for us to be part of making your dream come true.', 'Jl Ki Hajar Dewantara , Ruko Crystal 2 no 1, Gading Serpong', 'Jakarta', '(021) 5654656', '081234567645', 'elina-wang-bridal.webp', 'tumbnail_bridal1.webp', 1),
(6, 6, 1, 6, 'Buah Tangan Widuri', 'Widuri is your one stop bridal shop. We offer you variant range of products and services, from kebaya, traditional accessories, hairpiece, jewelry, veil, shoes, to makeup and hairdo. We also provide you with styling and consulting, and pay attention to the details on your needs to match with your concept and culture, whereas we collaborated with other partners/vendors.', 'Widuri. Ruang Bersua Lt. 3 Pondok Indah Plaza 2 Jl. Metro Duta Niaga, Blok II, BA 1-4 Pondok Indah, Kec. Kebayoran Lama Jakarta Selatan 12310 DKI Jakarta Indonesia', 'Denpasar', '(021) 8868767', '08178523578', 'buah-tangan-widuri.webp', 'tumbnail_bridal2.webp', 0),
(7, 7, 1, 7, 'Boenga Couture', 'Made to order / haute couture dress, gown, shoes for engagement, wedding, events & memorable moments', 'Ruko azores, blok B7D no 18-19, banjar wijaya, cipondoh, tangerang', 'Depok', '(021) 8688621', '085867786686', 'boenga-couture.webp', 'tumbnail_bridal3.webp', 0),
(8, 8, 12, 8, 'KEYS Entertainment', 'Founded by passionate musician David Obedianto, graduated from Academy of Art University and Indonesian Music Institute. He began his career as a session player and now he also works as a composer. KEYS Entertainment is supported by young professional and experienced musicians with formal music education background. We always strive to build your trust and our integrity with our commitment to always deliver the best performance in every moment.', 'Kelapa Gading, Jakarta Utara', 'Semarang', '(021) 8575125', '082175675723', 'keys-entertainment.webp', 'tumbnail_music1.webp', 1),
(9, 9, 12, 9, 'Thelogicmusic Entertainment', 'Thelogicmusic is a professional music entertainment & audio sound system vendor we have experience in handling weddings, gatherings, launching, grand opening events, etc. We are also experienced as a band that accompanies an artist. Your event will be more luxurious, elegant, and romantic by presenting Thelogicmusic at your event.', 'Jl Kancil 1 No. 115', 'Bandung', '(021) 7686125', '082767652135', 'thelogicmusic-entertainment.webp', 'tumbnail_music2.webp', 1),
(10, 10, 12, 10, 'Joshua Setiawan Entertainment', 'Music Entertainment | Live Music Provider | MC | Sound System | LED Screen | Fire Dance ', 'Bali - Jakarta - Surabaya - Semarang', 'Surabaya', '(021) 8875758', '089757657576', 'joshua-setiawan-entertainment.webp', 'music3.webp', 1),
(11, 11, 4, 11, 'Olaya Premium Reed Diffuser', 'Olaya premium reed diffuser dikemas dengan packaging hardbox emboss yg mewah sehingga memberikan kesan lux bagi orang yang mendapatkannya. Pembelian diatas 30pcs bisa custom gift card.', 'Jl. Pabaki Gang Maksudi dalam 2 no.1 kec. astana anyar, kel. panjunan', 'Bandung', '(021) 7851753', '081286781236', 'olaya-premium-reed-diffuser.webp', 'tumbnail_sovenir1.webp', 0),
(12, 12, 4, 12, 'The HoloGrail', 'The first animated photobooth in Indonesia (Yes, we travel Nationwide for you and your loved ones.)', 'jalan suryopranoto 67a', 'Jakarta', '(021) 7521356', '08975123575', 'the-holograil.webp', 'tumbnail_sovenir2.webp', 1),
(13, 13, 4, 13, 'Loff_co souvenir', 'Feel free to customize your own design, colour and fragrance that fit with your event\'s theme.', 'pluit - jakarta utara', 'Jakarta', '(021) 6465455', '08127575651', 'loffco-souvenir.webp', 'tumbnail_sovenir3.webp', 1),
(14, 14, 10, 14, 'Viceversa', 'test', 'Musi 30, Cideng, Gambir, Central Jakarta', 'Bali', '(021) 8t877788', '08348667687', 'viceversa.webp', 'tumbnail_fotografi1.webp', 0),
(15, 15, 10, 15, 'AKSA Creative', 'We do prewedding, engagement, wedding ceremony, family, maternity and baby photography and cinematic film', 'Jalan Bhakti No 10 Kebayoran Baru, Jakarta Selatan, Jakarta 12180', 'Bandung', '(021) 86768126', '08167675127', 'aksa-creative.webp', 'tumbnail_fotografi2.webp', 1),
(16, 16, 10, 16, 'Wedding Factory', 'We build our relationship with all of our clients like we\'re best friends and we serve profesionally and give you with the fullest service for you for your once in a lifetime moments..', 'Jl. Delima Raya no 34, Tanjung Duren Selatan', 'Jakarta', '(021) 99878977', '081287631111', 'wedding-factory.webp', 'tumbnail_fotografi3.webp', 1),
(17, 17, 8, 17, 'Nika di Bali', 'We are an experienced wedding organizer that will help you organize your dream wedding in Bali. We love making bride-to-be’s wishes come true just like we love breathing. We also know every spot and every corner of Bali so we are able to provide the best wedding venue, just exactly like what you have always wanted. We provide all inclusive packages with various venues and wedding style. \r\nFrom the venue, catering, entertainment to the makeup and hairstyle, we only will bring the best for you.', 'Office : Jl. Gunung Agung, Br. Umah Anyar, Penarungan, Mengwi, Badung, Bali\r\n80361', 'Denpasar', '081339167837', '081339167837', 'nika-di-bali.webp', 'tumbnail-nika-di-bali.webp', 1),
(18, 18, 8, 18, 'Malaika Wedding Planner', 'A \"friend\" who will inspires and help you to plan your special day in Bali', 'Jl. Tropic Residence Blok J/10\r\n80361\r\n', 'Denpasar', '081239905743', '081239905743', 'malaika-wedding-planner.webp', 'tumbnail-malaika-wedding-planner.webp', 1),
(19, 19, 8, 19, 'Top Fusion Wedding', 'Top Fusion Corporate has everything you need\r\n\r\nTOP FUSION WEDDING for Wedding Consultant & Field Coordinator (Jakarta)\r\n\r\nJASMINE WEDDING BALI for Wedding Consultant & Field Coordinator (Bali)\r\n\r\nTOP FUSION PHOTOGRAPHY for Documentation\r\n\r\nTOP FUSION MUSIC for Entertainment\r\n\r\nTOP FUSION ART for Rustic Outdoor Decoration\r\n\r\nWe are FLEXIBLE, CREATIVE, also UNIQUE and give the maximum services for you and your couple\r\n\r\nContact us\r\nJabodetabek : 0899 9823 912 (Dhyo)\r\nBali : 0878 6001 9495 (Echa)', 'Jl. Karang Tengah Raya No. 25a (Lantai 3), Lb. Bulus, Cilandak\r\n12440', 'Jakarta', '08999823912', '08999823912', 'top-fusion-wedding.webp', 'tumbnail-top-fusion-wedding.webp', 1),
(20, 20, 8, 20, 'Billies Wedding Organizer', 'For more question, reach us via : \r\nhttps://linktr.ee/BilliesOrganizer', 'Jakarta, Indonesia.\r\n11510\r\n', 'Jakarta', '087846810535', '087846810535', 'billies-wedding-organizer.webp', 'tumbnail-billies-wedding-organizer.webp', 1),
(21, 21, 16, 21, 'Sheraton Surabaya Hotel & Towers', 'Sheraton Surabaya Hotel & Towers is a five star hotel, located in the heart of Surabaya. Our ballroom can accomodate up tp 1000 guests.', 'Jl. Embong Malang 25-31 Surabaya 60261\r\n60261', 'Surabaya', '08123456763', '081339167837', 'sheraton-bali-kuta-resort.webp', 'tumbnail-sheratorn.webp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskon_produk`
--

CREATE TABLE `tb_diskon_produk` (
  `id` int(11) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `persentase_diskon` varchar(50) NOT NULL,
  `harga_setelah_diskon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diskon_produk`
--

INSERT INTO `tb_diskon_produk` (`id`, `id_vendor`, `id_produk`, `persentase_diskon`, `harga_setelah_diskon`) VALUES
(1, 1, 4, '5', '4560000'),
(2, 1, 6, '8', '220800000'),
(3, 17, 9, '9', '218400000'),
(4, 17, 10, '10', '247500000'),
(5, 17, 11, '6', '94000000'),
(6, 17, 12, '15', '255000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar_produk`
--

CREATE TABLE `tb_gambar_produk` (
  `id` int(11) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambar_produk`
--

INSERT INTO `tb_gambar_produk` (`id`, `id_vendor`, `id_produk`, `gambar_produk`) VALUES
(1, 1, 4, 'bridal-1.webp'),
(2, 1, 4, 'bridal-2.webp'),
(3, 1, 4, 'bridal-3.webp'),
(7, 1, 4, 'bridal-4.webp'),
(8, 1, 5, 'bridal2-1.webp'),
(9, 1, 5, 'bridal2-2.webp'),
(10, 1, 5, 'bridal2-3.webp'),
(11, 1, 5, 'bridal2-4.webp'),
(12, 1, 6, 'bridal3-1.webp'),
(13, 1, 6, 'bridal3-2.webp'),
(14, 1, 6, 'bridal3-3.webp'),
(15, 1, 6, 'bridal3-4.webp'),
(16, 1, 7, 'bridal4-1.webp'),
(17, 1, 7, 'bridal4-2.webp'),
(18, 1, 7, 'bridal4-3.webp'),
(19, 1, 7, 'bridal4-4.webp'),
(20, 2, 8, 'musik1.webp'),
(21, 2, 8, 'musik2.webp'),
(22, 2, 8, 'musik3.webp'),
(23, 17, 9, 'produk1-nika-di-bali.webp'),
(24, 17, 9, 'produk2-nika-di-bali.webp'),
(25, 17, 9, 'produk3-nika-di-bali.webp'),
(26, 17, 9, 'produk4-nika-di-bali.webp'),
(27, 17, 10, 'produk5-nika-di-bali.webp'),
(28, 17, 10, 'produk6-nika-di-bali.webp'),
(29, 17, 10, 'produk7-nika-di-bali.webp'),
(30, 17, 10, 'produk8-nika-di-bali.webp'),
(31, 17, 11, 'produk9-nika-di-bali.webp'),
(32, 17, 11, 'produk10-nika-di-bali.webp'),
(33, 17, 11, 'produk11-nika-di-bali.webp'),
(34, 17, 11, 'produk12-nika-di-bali.webp'),
(35, 17, 12, 'produk13-nika-di-bali.webp'),
(36, 17, 12, 'produk14-nika-di-bali.webp'),
(37, 17, 12, 'produk15-nika-di-bali.webp'),
(38, 17, 12, 'produk16-nika-di-bali.webp'),
(39, 18, 13, 'malaika4.webp'),
(40, 18, 13, 'malaika2.webp'),
(41, 18, 13, 'malaika3.webp'),
(42, 18, 13, 'malaika1.webp'),
(43, 21, 14, 'sheraton1.webp'),
(44, 21, 14, 'sheraton2.webp'),
(45, 21, 14, 'sheraton3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_service`
--

CREATE TABLE `tb_kategori_service` (
  `id` int(11) NOT NULL,
  `gambar_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_service`
--

INSERT INTO `tb_kategori_service` (`id`, `gambar_kategori`, `nama_kategori`) VALUES
(1, 'bridal.png', 'Bridal'),
(3, 'aksesoris-pernikahan.png', 'Aksesoris Pernikahan'),
(4, 'souvenir-seserahan.png', 'Souvenir & Seserahan'),
(5, 'gaun-wanita.png', 'Gaun & Pakaian Wanita'),
(7, 'jas-pria.png', 'Jas & Pakaian Pria'),
(8, 'wedding-planning.png', 'Wedding Planning'),
(9, 'makeup.png', 'Rias Rambut & Make Up'),
(10, 'fotografi.png', 'Fotografi'),
(11, 'dekorasi.png', 'Dekorasi & Pencahayaan'),
(12, 'hiburan.png', 'Hiburan / Entertainment'),
(13, 'videografi.png', 'Videografi'),
(14, 'makanan.png', 'Makanan & Minuman'),
(15, 'undangan.png', 'Undangan'),
(16, 'venue.png', 'Venue'),
(17, 'aksesoris-pria.png', 'Aksesoris Pria'),
(18, 'perhiasan.png', 'Perhiasan'),
(19, 'bulan-madu.png', 'Bulan Madu'),
(20, 'perawatan.png', 'Perawatan & Kecantikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_media_sosial_vendor`
--

CREATE TABLE `tb_media_sosial_vendor` (
  `id` int(11) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `situs_website` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_media_sosial_vendor`
--

INSERT INTO `tb_media_sosial_vendor` (`id`, `id_vendor`, `situs_website`, `facebook`, `instagram`, `twitter`) VALUES
(1, 1, 'https://www.alisshabride.com/', 'https://web.facebook.com/alisshabride', '', ''),
(2, 2, 'https://www.sejasa.com/businesses/luxe-voir-entertainment', 'https://web.facebook.com/luxevoirid', 'https://www.instagram.com/luxevoirid/?hl=en', ''),
(3, 3, 'http://www.redribbongift.com/', 'https://web.facebook.com/redribbongiftIND', 'https://www.instagram.com/redribbongift/?hl=en', ''),
(4, 4, 'https://vymaps.com/ID/LOLphotobooth-co-Open-Photobox-Photobooth-2949037488447223/', 'https://web.facebook.com/lolphotobooth.co', 'https://www.instagram.com/lolphotobooth.co/?hl=en', ''),
(5, 5, '', '', '', ''),
(6, 6, '', '', '', ''),
(7, 7, '', '', '', ''),
(8, 8, '', '', '', ''),
(9, 9, '', '', '', ''),
(10, 10, '', '', '', ''),
(11, 11, '', '', '', ''),
(12, 12, '', '', '', ''),
(13, 13, '', '', '', ''),
(14, 14, '', '', '', ''),
(15, 15, '', '', '', ''),
(16, 16, '', '', '', ''),
(17, 17, '', '', '', ''),
(18, 18, '', '', '', ''),
(19, 19, '', '', '', ''),
(20, 20, '', '', '', ''),
(21, 21, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama_member`, `no_tlp`, `email`, `kata_sandi`) VALUES
(8, 'Ilham Dhiya Ulhaq', '085803135909', 'ulhaqilhamdhiya@gmail.com', '$2y$10$vQNf9/Y584q9S3LTTxaG1.LObjbsiVqYfOVOrTMg5l9noJqbinN.e'),
(9, 'Annisa Wahyu Hidayah', '085803135909', 'annisawahyu68@gmail.com', '$2y$10$TcoDeDCUP9G2boMtLlXs1.W4wJNu7y5N.vwsjQo6NGZ5M8oKxQpQe'),
(10, 'Herman', '085803135909', 'herman123@gmail.com', '$2y$10$0HgKd6WE15OLYbIBPcQvDONUfFP42UHQLJAjUBYeZ50OsVBP.qR7e'),
(11, 'Budi', '085803135999', 'budi@gamil.com', '$2y$10$hA7BYYqJRlvoodpsdEq2QO8U3NNc1HZtf6.LWjhZVAEzhACW3bhfG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `gambar_tumbnail` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `detail_produk` text NOT NULL,
  `syarat_ketentuan` text NOT NULL,
  `id_gambar` int(5) NOT NULL,
  `id_kategori_service` int(5) NOT NULL,
  `id_sub_kategori` int(5) DEFAULT NULL,
  `harga` int(50) NOT NULL,
  `id_diskon` int(5) DEFAULT NULL,
  `id_data_lengkap_vendor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `id_vendor`, `gambar_tumbnail`, `nama_produk`, `detail_produk`, `syarat_ketentuan`, `id_gambar`, `id_kategori_service`, `id_sub_kategori`, `harga`, `id_diskon`, `id_data_lengkap_vendor`) VALUES
(4, 1, 'bridal-1.webp', 'Wedding Gown Gaun Dress grade \"Gold\"', 'Price (until Aug 2022)  Minimum Revenue for 1 sect. Ballroom - IDR 410 million Minimum Revenue for 2 sect. Ballroom - IDR 810 million Studio (50 pax) - IDR 170 million  Ayo persiapkan hari bahagiamu dengan pernikahan ala-ala new normal yang super aman !  Kami menyediakan layanan all-in / paket pernikahan lengkap yang sudah disesuaikan dengan protokol kesehatan untuk hari bahagia kalian dengan harga yang sangat terjangkau (ada garansi harga terbaik loh, atau selisih harga kembali^^)  Vendor-vendor yang tergabung dalam paket All-In kami adalah vendor berpengalaman di bidangnya dan sudah terjamin kualitasnya lebih dari 10 tahun bergerak di industri ini.  Paket ini sudah mencakup: 1. Venue 2. Food & Beverages 3. Dress, Suits & Makeup 4. Photo & Video (inc. prewedding) 5. Wedding Organizer 6. Entertainment 7. Wedding Car 8. Wedding Cake 9. Hand Bouquet dll  Silahkan kontak kami jika ingin melihat list lengkap dari venue kami atau mungkin buat kamu yang sudah ada venue, kami juga menyediakan paket Bridal yang harganya terjangkau dan lengkap banget, jadi apa yang harus dibingungkan?   Silahkan kontak via Whatsapp: +628 23345 23345, IG: @alisshabride, website: alissh****** !  Semangat dalam mencari vendor untuk hari bahagiamu, thank you :)', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, NULL, 4800000, 1, 1),
(5, 1, 'bridal2-1.webp', 'GEDUNG ARSIP NASIONAL (PAKET PERNIKAHAN ALL-IN NEW NORMAL)', '300 pax - IDR 165 million 500 pax - IDR 210 million  Kami menyediakan paket layanan All In / One Stop Wedding dimana Kakak tidak perlu lagi bingung untuk cari vendor wedding segala kebutuhan di hari Wedding Kakak. Vendor-vendor Kami sudah berpengalaman lebih dari 10 tahun di dunia Wedding dan tentunya sudah terpercaya di kalangan customer kami. Paket All In Kami terdiri dari:  1. Venue menyebar di seluruh Jakarta dan Tangerang 2. Premium Standard Wedding Decoration* 3. Bridal & Photo (termasuk wedding car, wedding cake, hand bouquet, dokumentasi hari H, dan photobooth*) 4. Entertainment (MC + 4 Alat Musik) 5. WO hari Wedding  *sebagian benefit belum termasuk, tergantung dari venue  Jadi kalau sudah ambil paket ini, yg kurang untuk kebutuhan weddingnya hanya cincin, souvenir, dan kartu undangan', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, NULL, 137500000, NULL, 1),
(6, 1, 'bridal3-1.webp', 'Paket Pernikahan All-in Alissha - Atria Serpong', '400 pax - IDR 215 million 600 pax - IDR 255 million 800 pax - IDR 295 million  Kami menyediakan paket layanan All In / One Stop Wedding dimana Kakak tidak perlu lagi bingung untuk cari vendor wedding segala kebutuhan di hari Wedding Kakak. Vendor-vendor Kami sudah berpengalaman lebih dari 10 tahun di dunia Wedding dan tentunya sudah terpercaya di kalangan customer kami. Paket All In Kami terdiri dari:  1. Venue menyebar di seluruh Jakarta dan Tangerang 2. Premium Standard Wedding Decoration* 3. Bridal & Photo (termasuk wedding car, wedding cake, hand bouquet, dokumentasi hari H, dan photobooth*) 4. Entertainment (MC + 4 Alat Musik) 5. WO hari Wedding  *sebagian benefit belum termasuk, tergantung dari venue  Jadi kalau sudah ambil paket ini, yg kurang untuk kebutuhan weddingnya hanya cincin, souvenir, dan kartu undangan', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, NULL, 240000000, 2, 1),
(7, 1, 'bridal4-1.webp', 'Paket Bridal Wedding \"Emerald\" (Gown-Makeup)', 'Only for payment purposes relating to customized bridal and all-in packages', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, NULL, 150000000, NULL, 1),
(8, 2, 'musik1.webp', 'Le\' Saphir II ( Mini Orchestra )', 'Le\' Saphir II (Mini Orchestra)\r\n\r\n3 Singers (Male & Female)\r\n1 Guitarist (Backing Vocal)\r\n1 Keyboardist\r\n1 Bassist\r\n1 Drummer\r\n1 saxophonist\r\n\r\nSet of String- Section\r\n2 Violinists\r\n1 Violist\r\n1 Cellist\r\n\r\nOperators and Crew', 'Le\' Saphir II (Mini Orchestra)\r\n\r\n3 Singers (Male & Female)\r\n1 Guitarist (Backing Vocal)\r\n1 Keyboardist\r\n1 Bassist\r\n1 Drummer\r\n1 saxophonist\r\n\r\nSet of String- Section\r\n2 Violinists\r\n1 Violist\r\n1 Cellist\r\n\r\nOperators and Crew', 2, 12, NULL, 38500000, NULL, 2),
(9, 17, 'produk1-nika-di-bali.webp', 'VILLA PHALOSA - FULL WEDDING PACKAGE - 100 PAX', 'Detail\r\nIncluding:\r\n* 2 Nights Stay in 4 Bedroom Villa\r\n* Commitment Wedding ( Priest / Celebrant & Liturgy)\r\n* Sound System\r\n* Generator\r\n* Accoustic\r\n* Exclusive Decoration \r\n* Buffet Dinner for 100 Pax\r\n* Pyrotech 4 Pcs\r\n* Fairy Light covered on dinner area\r\n* Ambience Lighting\r\n* Master of ceremony English / Indonesia / Bilingual\r\n* Round table Include centrepiece\r\n* Personal Hand Bouquet for Bride and Boutonniere For Groom\r\n* Bridesmaid Bouquet and Groomsman Boutonniere \r\n* Nika Di Bali\'s services', 'ORGANIZATION STRUCTURE ON WEDDING DAY:\r\n\r\nWedding Manager\r\nBride & Groom Assistant\r\nBride & Groom Family Assistant\r\nGroomsmen Assistant\r\nBridesmaid Assistant\r\nGuest Coordinator\r\nTalent Coordinator\r\nDecoration & Catering Coordinator\r\nSound System, Lighting, Multimedia & Music Coordinator\r\nTransport Coordinator', 9, 8, 1, 240000000, 1, 17),
(10, 17, 'produk5-nika-di-bali.webp', 'VILLA ANUGRAH - FULL WEDDING PACKAGE - 100 PAX', 'Detail\r\nIncluding:\r\n* 2 Nights Stay in 6 Bedroom Cliff side Villa\r\n* Commitment Wedding ( Priest / Celebrant & Liturgy)\r\n* Sound System\r\n* Generator\r\n* Accoustic\r\n* Exclusive Decoration \r\n* Buffet Dinner for 100 Pax\r\nPyrotech 4 Pcs\r\n* Fairy Light covered on dinner area\r\n* Ambience Lighting\r\n* Master of ceremony English / Indonesia / Bilingual\r\n* Round table Include centrepiece\r\n* Personal Hand Bouquet for Bride and Boutonniere For Groom\r\n* Bridesmaid Bouquet and Groomsman Boutonniere \r\n* Floating Stage\r\n* Nika Di Bali\'s services', 'ORGANIZATION STRUCTURE ON WEDDING DAY:\r\n\r\nWedding Manager\r\nBride & Groom Assistant\r\nBride & Groom Family Assistant\r\nGroomsmen Assistant\r\nBridesmaid Assistant\r\nGuest Coordinator\r\nTalent Coordinator\r\nDecoration & Catering Coordinator\r\nSound System, Lighting, Multimedia & Music Coordinator\r\nTransport Coordinator', 10, 8, 1, 275000000, 1, 17),
(11, 17, 'produk9-nika-di-bali.webp', 'NDB Package 50 Pax- Villa Alindra', 'Including:\r\n* 1 Nights Stay in 5 Bedroom Villa\r\n* Commitment Wedding ( Priest / Celebrant & Liturgy)\r\n* Sound System\r\n* Generator\r\n* Accoustic\r\n* Exclusive Decoration \r\n* Buffet Dinner for 50 Pax\r\n* Pyrotech\r\n* Fairy Light covered on dinner area\r\n* Ambience Lighting\r\n* Master of ceremony English / Indonesia / Bilingual\r\n* Round table Include centrepiece\r\n* Personal Hand Bouquet for Bride and Boutonniere For Groom\r\n* Bridesmaid Bouquet and Groomsman Boutonniere \r\n* Nika Di Bali\'s services\r\n', '\r\nORGANIZATION STRUCTURE ON WEDDING DAY:\r\n\r\nWedding Manager\r\nBride & Groom Assistant\r\nBride & Groom Family Assistant\r\nGroomsmen Assistant\r\nBridesmaid Assistant\r\nGuest Coordinator\r\nTalent Coordinator\r\nDecoration & Catering Coordinator\r\nSound System, Lighting, Multimedia & Music Coordinator\r\nTransport Coordinator', 11, 8, 1, 100000000, 1, 17),
(12, 17, 'produk13-nika-di-bali.webp', 'VILLA OMBAK BIRU - FULL WEDDING PACKAGE - 100 PAX', 'Including:\r\n* 3 Nights Stay in 6 Bedroom Villa\r\n* Commitment Wedding ( Priest / Celebrant & Liturgy)\r\n* Sound System\r\n* Generator\r\n* Accoustic\r\n* Exclusive Decoration \r\n* Buffet Dinner for 100 Pax\r\n* Make up and Hair do for Bride & Groom\r\n* Pyrotech\r\n* Fairy Light covered on dinner area\r\n* Ambience Lighting\r\n* Master of ceremony English / Indonesia / Bilingual\r\n* Round table Include centrepiece\r\n* Personal Hand Bouquet for Bride and Boutonniere For Groom\r\n* Bridesmaid Bouquet and Groomsman Boutonniere \r\n* Nika Di Bali\'s services', '\r\nORGANIZATION STRUCTURE ON WEDDING DAY:\r\n\r\nWedding Manager\r\nBride & Groom Assistant\r\nBride & Groom Family Assistant\r\nGroomsmen Assistant\r\nBridesmaid Assistant\r\nGuest Coordinator\r\nTalent Coordinator\r\nDecoration & Catering Coordinator\r\nSound System, Lighting, Multimedia & Music Coordinator\r\nTransport Coordinator\r\n\r\n', 12, 8, 1, 300000000, 1, 17),
(13, 18, 'tumbnail-malaika-wedding-planner.webp', 'Engagement Package A', 'Venue @meeting point\r\nCatering (buffet lunch / Dinner)\r\nFotografi (Mini Album 10 page, mini Canvas 30 x 40 cm)\r\nDekor (Leveling Stage 2 x 2 m, Backdrop, 2 Standing Flower, Name board, Enter Gate) ', 'Venue @meeting point\r\nCatering (buffet lunch / Dinner)\r\nFotografi (Mini Album 10 page, mini Canvas 30 x 40 cm)\r\nDekor (Leveling Stage 2 x 2 m, Backdrop, 2 Standing Flower, Name board, Enter Gate) ', 13, 8, 2, 20000000, NULL, 18),
(14, 21, 'sheraton1.webp', 'Sheraton Grand Ballroom', 'The largest room in the hotel. Has convenience access from the Lobby room, foyer entrance is connected to the Tunjungan Plaza mall. The ballroom can be divided into 3 ballrooms. This package includes Oriental & Indonesian Buffet choice for the catering for 300 pax.', 'The largest room in the hotel. Has convenience access from the Lobby room, foyer entrance is connected to the Tunjungan Plaza mall. The ballroom can be divided into 3 ballrooms. This package includes Oriental & Indonesian Buffet choice for the catering for 300 pax.', 14, 16, 3, 202555000, NULL, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kategori`
--

CREATE TABLE `tb_sub_kategori` (
  `id` int(11) NOT NULL,
  `id_kategori_service` int(5) NOT NULL,
  `sub_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sub_kategori`
--

INSERT INTO `tb_sub_kategori` (`id`, `id_kategori_service`, `sub_kategori`) VALUES
(1, 8, 'Paket Pernikahan'),
(2, 8, 'Paket Lamaran'),
(3, 16, 'Balllroom Hotel'),
(4, 16, 'Aula & Function Hall'),
(5, 16, 'Villa / Resort'),
(6, 16, 'Restoran / Kafe');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `level_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vendor`
--

INSERT INTO `tb_vendor` (`id`, `nama`, `email`, `kata_sandi`, `level_id`, `is_active`, `date_create`) VALUES
(1, 'Budi', 'budi@gmail.com', '$2y$10$2jbtVsbszm/seemWjBp7ueV4Mvs8jkAmjxcJJXAaoLlU3PusnOQTq', 2, 0, '2021-12-01'),
(2, 'Herman', 'herman@gmail.com', '$2y$10$VN.Hvy8nuUTgLUnjsLBR5OYbuNDV19mzjPWi8Mvg77DdT9yTsCgrO', 2, 0, '2021-12-02'),
(3, 'Ilham', 'ilham@gmail.com', '$2y$10$w9eXzLOookoyyafDJvwHT.StXKSN2qtiJep8hdFKhmXQR7jTwZTmC', 2, 0, '2021-12-02'),
(4, 'Frido Andre', 'frido@gmail.com', '$2y$10$obaqipD9kXuY5Ld1QkcI8uO0dks6ZsMSFmL0pjGAeWwe3EF05/I7C', 2, 0, '2021-12-02'),
(5, 'Davi', 'davi@gmail.com', '$2y$10$PoTdH9YiyAVFixPtMs5C5.jNCdB3vtFQyLy8mzRqNeqjhCOC/FEua', 2, 0, '2021-12-03'),
(6, 'Sela', 'sela@gmail.com', '$2y$10$uvan.zMNTJXAF5bOvY4AquVbk3EYD2CpZ51GwADVlw3qUj7CpwkY2', 2, 0, '2021-12-03'),
(7, 'Annisa', 'annisa@gmail.com', '$2y$10$M1W2ZH0CAWXXS79QbGHfhedFKjmjwO3KrDQDM7aNgKpMKwuImP4CO', 2, 0, '2021-12-03'),
(8, 'Rahma', 'rahma@gmail.com', '$2y$10$FPcFatanhXxJsnpqMPnBF.BKJhBxdbXHYM7X6YccnKxZVnQqGn5wS', 2, 0, '2021-12-03'),
(9, 'Dika', 'dika@gmail.com', '$2y$10$aIjPuEvPnbe5QCtj/ZDX9.MQPJmcp/1Y7AZp3bOOXtDNJpD6jE9SG', 2, 0, '2021-12-03'),
(10, 'Riski', 'riski@gmail.com', '$2y$10$YNnFmEM.MT784ratzW.lM.lQ3TQJnBb5TmjxzaEYaL3QmlvsAdKUy', 2, 0, '2021-12-03'),
(11, 'Sinta', 'sinta@gmail.com', '$2y$10$bwv.9nXndzpcRDOakYzF9.Cfe/StI9bAy9Ev8ou4IRhrakVYuFWAS', 2, 0, '2021-12-03'),
(12, 'Siska', 'siska@gmail.com', '$2y$10$r5R.2dSDaiTlbGZVXM2Oy.O36M6.ADD/81a5lu0qQQeHgmU1gBGyW', 2, 0, '2021-12-03'),
(13, 'Irfan', 'irfan@gmail.com', '$2y$10$LN7XKOiHoYXVQ6.Z1wtWquZzhJJNzej62zflC3zKdyNM5lNqHZCLu', 2, 0, '2021-12-03'),
(14, 'Sukri', 'sukri@gmail.com', '$2y$10$IEOvshwP4bjU5rpbcni/nuSse76UUlLc6cRIiTCUIbwBUkJ7sL1Mi', 2, 0, '2021-12-03'),
(15, 'Susi', 'susi@gmailo.com', '$2y$10$RG.qPsMAFm/kiwjfSSxEg.dDCex8UWW8CRJHW0sgXT/BHl4Bew9UC', 2, 0, '2021-12-03'),
(16, 'Andre', 'andre@gmail.com', '$2y$10$qu0EgCV3nJtI8jeEIG/MDuszkDpjettgqjBZ692WJ4hqTBuhOZRqW', 2, 0, '2021-12-03'),
(17, 'Nika di Bali', 'nika@gmail.com', '$2y$10$mueP3ohe87OYFrHT6H1are..9AVL27A/slw/jCc7JqtwH04nG2d9S', 2, 0, '2021-12-20'),
(18, 'Malaika Wedding Planner', 'malika@gmail.com', '$2y$10$ae/U8R0aIR3pDCJMHSekLevqVIcJ1ItvpazQEFuO8Fqb2vjcjkp7i', 2, 0, '2021-12-20'),
(19, 'Top Fusion Wedding', 'top@gmail.com', '$2y$10$waav9D0fhgm2FrLfvX3tsuwrKseej0E9qsIFrNNbVKGWXckRyDOVG', 2, 0, '2021-12-20'),
(20, 'Billies Wedding Organizer', 'billies@gmail.com', '$2y$10$iHBd3EywqeBa5UOGJSUgIeOLVj.2GqvV7rrhl5c55kmHOzcHWIjfC', 2, 0, '2021-12-20'),
(21, 'Sheraton Surabaya Hotel & Towers', 'sheraton@gmail.com', '$2y$10$zuZ49zOFCm6EpKjSotag8ufJle8lCHknEcLmRHu8nR/wugO9chovm', 2, 0, '2021-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`) USING BTREE;

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_banner_slider`
--
ALTER TABLE `tb_banner_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data_lengkap_vendor`
--
ALTER TABLE `tb_data_lengkap_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_diskon_produk`
--
ALTER TABLE `tb_diskon_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gambar_produk`
--
ALTER TABLE `tb_gambar_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori_service`
--
ALTER TABLE `tb_kategori_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_media_sosial_vendor`
--
ALTER TABLE `tb_media_sosial_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_banner_slider`
--
ALTER TABLE `tb_banner_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_data_lengkap_vendor`
--
ALTER TABLE `tb_data_lengkap_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_diskon_produk`
--
ALTER TABLE `tb_diskon_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_gambar_produk`
--
ALTER TABLE `tb_gambar_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_kategori_service`
--
ALTER TABLE `tb_kategori_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_media_sosial_vendor`
--
ALTER TABLE `tb_media_sosial_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_sub_kategori`
--
ALTER TABLE `tb_sub_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
