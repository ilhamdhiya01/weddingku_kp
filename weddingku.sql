-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2021 at 08:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingku`
--

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
(1, 1, 1, 1, 'Alissha Bride', 'Established in 2012, Alissha is known for its up to date gowns and spectacular quality of its dress. We served the best quality of our dresses, make-up, and photography. And now we also have venue, decoration, and Wedding Organizer & Entertainment (All-In Packages)', 'Jl. Bisma Tengah 2 No.21, RT.7/RW.9, Papanggo, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14340', 'Jakarta', '(021) 5215334', '085803135909', 'alissha-bride.webp', 'bridal1.webp', 1),
(2, 2, 12, 2, 'Luxe Voir Enterprise', 'We provide professional MC and session player for Wedding, Event, Gathering, etc', 'Kalideres ', 'Semarang', '(021) 5215332', '081239438228', 'luxe-voir-enterprise.webp', 'music1.webp', 0),
(3, 3, 4, 3, 'Red Ribbon Gift', '', 'Ketapang Business Centre no B8. Jalan. KH Zainul Arifin . Jakarta Pusat Ph: 08159005876 / 081298867011 Line : redribbongift', 'Jakarta', '(021) 5215345', '081225405255', 'red-ribbon-gift.webp', 'sovenir1.webp', 1),
(4, 4, 10, 4, 'lolphotobooth.co', 'LOLphotobooth.co is a self-service photo booth machine. Our machines automated and equipped with cutting edge technology, great lighting and high resolution rapid printing. Our templates are customizable to suit every client\'s unique needs. Each picture will be given a unique QR code. Upon scanning the code, pictures and videos can be downloaded and saved into the user\'s smartphone.\r\n\r\nWe are available in Jakarta, Bali, Bandung, Jogjakarta, Lampung, Makassar, Medan, Semarang, Surabaya & Vietnam.', 'Citywalk Sudirman, Jl KH Mas Mansyur, unit 2203, Jakarta Pusat', 'Bali', '(021) 5215355', '085803135900', 'lolphotoboothco.webp', 'photo1.webp', 1),
(5, 5, 1, 5, 'Elina Wang Bridal', 'We understand that everyone have their own wedding dream. It is a pleasure for us to be part of making your dream come true.', 'Jl Ki Hajar Dewantara , Ruko Crystal 2 no 1, Gading Serpong', 'Jakarta', '(021) 5654656', '081234567645', 'elina-wang-bridal.webp', 'tumbnail_bridal1.webp', 1),
(6, 6, 1, 6, 'Buah Tangan Widuri', 'Widuri is your one stop bridal shop. We offer you variant range of products and services, from kebaya, traditional accessories, hairpiece, jewelry, veil, shoes, to makeup and hairdo. We also provide you with styling and consulting, and pay attention to the details on your needs to match with your concept and culture, whereas we collaborated with other partners/vendors.', 'Widuri. Ruang Bersua Lt. 3 Pondok Indah Plaza 2 Jl. Metro Duta Niaga, Blok II, BA 1-4 Pondok Indah, Kec. Kebayoran Lama Jakarta Selatan 12310 DKI Jakarta Indonesia', 'Jakarta', '(021) 8868767', '08178523578', 'buah-tangan-widuri.webp', 'tumbnail_bridal2.webp', 0),
(7, 7, 1, 7, 'Boenga Couture', 'Made to order / haute couture dress, gown, shoes for engagement, wedding, events & memorable moments', 'Ruko azores, blok B7D no 18-19, banjar wijaya, cipondoh, tangerang', 'Jakarta', '(021) 8688621', '085867786686', 'boenga-couture.webp', 'tumbnail_bridal3.webp', 0),
(8, 8, 12, 8, 'KEYS Entertainment', 'Founded by passionate musician David Obedianto, graduated from Academy of Art University and Indonesian Music Institute. He began his career as a session player and now he also works as a composer. KEYS Entertainment is supported by young professional and experienced musicians with formal music education background. We always strive to build your trust and our integrity with our commitment to always deliver the best performance in every moment.', 'Kelapa Gading, Jakarta Utara', 'Jakarta', '(021) 8575125', '082175675723', 'keys-entertainment.webp', 'tumbnail_music1.webp', 1),
(9, 9, 12, 9, 'Thelogicmusic Entertainment', 'Thelogicmusic is a professional music entertainment & audio sound system vendor we have experience in handling weddings, gatherings, launching, grand opening events, etc. We are also experienced as a band that accompanies an artist. Your event will be more luxurious, elegant, and romantic by presenting Thelogicmusic at your event.', 'Jl Kancil 1 No. 115', 'Bali', '(021) 7686125', '082767652135', 'thelogicmusic-entertainment.webp', 'tumbnail_music2.webp', 1),
(10, 10, 12, 10, 'Joshua Setiawan Entertainment', 'Music Entertainment | Live Music Provider | MC | Sound System | LED Screen | Fire Dance ', 'Bali - Jakarta - Surabaya - Semarang', 'Surabaya', '(021) 8875758', '089757657576', 'joshua-setiawan-entertainment.webp', 'music3.webp', 1),
(11, 11, 4, 11, 'Olaya Premium Reed Diffuser', 'Olaya premium reed diffuser dikemas dengan packaging hardbox emboss yg mewah sehingga memberikan kesan lux bagi orang yang mendapatkannya. Pembelian diatas 30pcs bisa custom gift card.', 'Jl. Pabaki Gang Maksudi dalam 2 no.1 kec. astana anyar, kel. panjunan', 'Bandung', '(021) 7851753', '081286781236', 'olaya-premium-reed-diffuser.webp', 'tumbnail_sovenir1.webp', 0),
(12, 12, 4, 12, 'The HoloGrail', 'The first animated photobooth in Indonesia (Yes, we travel Nationwide for you and your loved ones.)', 'jalan suryopranoto 67a', 'Jakarta', '(021) 7521356', '08975123575', 'the-holograil.webp', 'tumbnail_sovenir2.webp', 1),
(13, 13, 4, 13, 'Loff_co souvenir', 'Feel free to customize your own design, colour and fragrance that fit with your event\'s theme.', 'pluit - jakarta utara', 'Jakarta', '(021) 6465455', '08127575651', 'loffco-souvenir.webp', 'tumbnail_sovenir3.webp', 1),
(14, 14, 10, 14, 'Viceversa', 'test', 'Musi 30, Cideng, Gambir, Central Jakarta', 'Bali', '(021) 8t877788', '08348667687', 'viceversa.webp', 'tumbnail_fotografi1.webp', 0),
(15, 15, 10, 15, 'AKSA Creative', 'We do prewedding, engagement, wedding ceremony, family, maternity and baby photography and cinematic film', 'Jalan Bhakti No 10 Kebayoran Baru, Jakarta Selatan, Jakarta 12180', 'Bali', '(021) 86768126', '08167675127', 'aksa-creative.webp', 'tumbnail_fotografi2.webp', 1),
(16, 16, 10, 16, 'Wedding Factory', 'We build our relationship with all of our clients like we\'re best friends and we serve profesionally and give you with the fullest service for you for your once in a lifetime moments..', 'Jl. Delima Raya no 34, Tanjung Duren Selatan', 'Jakarta', '(021) 99878977', '081287631111', 'wedding-factory.webp', 'tumbnail_fotografi3.webp', 1);

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
(2, 1, 6, '8', '220800000');

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
(19, 1, 7, 'bridal4-4.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_service`
--

CREATE TABLE `tb_kategori_service` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_service`
--

INSERT INTO `tb_kategori_service` (`id`, `nama_kategori`) VALUES
(1, 'Bridal'),
(2, 'Catering'),
(3, 'Aksesoris Pernikahan'),
(4, 'Souvenir & Seserahan'),
(5, 'Gaun & Pakaian Wanita'),
(7, 'Jas & Pakaian Pria'),
(8, 'Wedding Planning'),
(9, 'Rias Rambut & Make Up'),
(10, 'Fotografi'),
(11, 'Dekorasi & Pencahayaan'),
(12, 'Hiburan / Entertainment'),
(13, 'Videografi'),
(14, 'Makanan & Minuman'),
(15, 'Undangan'),
(16, 'Venue'),
(17, 'Aksesoris Pria'),
(18, 'Perhiasan'),
(19, 'Bulan Madu'),
(20, 'Perawatan & Kecantikan'),
(21, 'Paket Lengkap');

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
(16, 16, '', '', '', '');

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
(9, 'Annisa Wahyu Hidayah', '085803135909', 'annisawahyu68@gmail.com', '$2y$10$TcoDeDCUP9G2boMtLlXs1.W4wJNu7y5N.vwsjQo6NGZ5M8oKxQpQe');

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
  `harga` int(50) NOT NULL,
  `id_diskon` int(5) DEFAULT NULL,
  `id_data_lengkap_vendor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `id_vendor`, `gambar_tumbnail`, `nama_produk`, `detail_produk`, `syarat_ketentuan`, `id_gambar`, `id_kategori_service`, `harga`, `id_diskon`, `id_data_lengkap_vendor`) VALUES
(4, 1, 'bridal-1.webp', 'Wedding Gown Gaun Dress grade \"Gold\"', 'Price (until Aug 2022)  Minimum Revenue for 1 sect. Ballroom - IDR 410 million Minimum Revenue for 2 sect. Ballroom - IDR 810 million Studio (50 pax) - IDR 170 million  Ayo persiapkan hari bahagiamu dengan pernikahan ala-ala new normal yang super aman !  Kami menyediakan layanan all-in / paket pernikahan lengkap yang sudah disesuaikan dengan protokol kesehatan untuk hari bahagia kalian dengan harga yang sangat terjangkau (ada garansi harga terbaik loh, atau selisih harga kembali^^)  Vendor-vendor yang tergabung dalam paket All-In kami adalah vendor berpengalaman di bidangnya dan sudah terjamin kualitasnya lebih dari 10 tahun bergerak di industri ini.  Paket ini sudah mencakup: 1. Venue 2. Food & Beverages 3. Dress, Suits & Makeup 4. Photo & Video (inc. prewedding) 5. Wedding Organizer 6. Entertainment 7. Wedding Car 8. Wedding Cake 9. Hand Bouquet dll  Silahkan kontak kami jika ingin melihat list lengkap dari venue kami atau mungkin buat kamu yang sudah ada venue, kami juga menyediakan paket Bridal yang harganya terjangkau dan lengkap banget, jadi apa yang harus dibingungkan?   Silahkan kontak via Whatsapp: +628 23345 23345, IG: @alisshabride, website: alissh****** !  Semangat dalam mencari vendor untuk hari bahagiamu, thank you :)', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, 4800000, 1, 1),
(5, 1, 'bridal2-1.webp', 'GEDUNG ARSIP NASIONAL (PAKET PERNIKAHAN ALL-IN NEW NORMAL)', '300 pax - IDR 165 million 500 pax - IDR 210 million  Kami menyediakan paket layanan All In / One Stop Wedding dimana Kakak tidak perlu lagi bingung untuk cari vendor wedding segala kebutuhan di hari Wedding Kakak. Vendor-vendor Kami sudah berpengalaman lebih dari 10 tahun di dunia Wedding dan tentunya sudah terpercaya di kalangan customer kami. Paket All In Kami terdiri dari:  1. Venue menyebar di seluruh Jakarta dan Tangerang 2. Premium Standard Wedding Decoration* 3. Bridal & Photo (termasuk wedding car, wedding cake, hand bouquet, dokumentasi hari H, dan photobooth*) 4. Entertainment (MC + 4 Alat Musik) 5. WO hari Wedding  *sebagian benefit belum termasuk, tergantung dari venue  Jadi kalau sudah ambil paket ini, yg kurang untuk kebutuhan weddingnya hanya cincin, souvenir, dan kartu undangan', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, 137500000, NULL, 1),
(6, 1, 'bridal3-1.webp', 'Paket Pernikahan All-in Alissha - Atria Serpong', '400 pax - IDR 215 million 600 pax - IDR 255 million 800 pax - IDR 295 million  Kami menyediakan paket layanan All In / One Stop Wedding dimana Kakak tidak perlu lagi bingung untuk cari vendor wedding segala kebutuhan di hari Wedding Kakak. Vendor-vendor Kami sudah berpengalaman lebih dari 10 tahun di dunia Wedding dan tentunya sudah terpercaya di kalangan customer kami. Paket All In Kami terdiri dari:  1. Venue menyebar di seluruh Jakarta dan Tangerang 2. Premium Standard Wedding Decoration* 3. Bridal & Photo (termasuk wedding car, wedding cake, hand bouquet, dokumentasi hari H, dan photobooth*) 4. Entertainment (MC + 4 Alat Musik) 5. WO hari Wedding  *sebagian benefit belum termasuk, tergantung dari venue  Jadi kalau sudah ambil paket ini, yg kurang untuk kebutuhan weddingnya hanya cincin, souvenir, dan kartu undangan', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, 240000000, 2, 1),
(7, 1, 'bridal4-1.webp', 'Paket Bridal Wedding \"Emerald\" (Gown-Makeup)', 'Only for payment purposes relating to customized bridal and all-in packages', 'We can’t wait to be your partner !! However, to secure our service and book us on preferred date, here are our terms and conditions:... • The price includes government tax & service. • The price includes delivery, set up, and dismantle fee. • Payments made to Vowever Wedding Planner will be non-refundable. Deposit & balance payment schedules will be agreed in the Services Contract. • The client remains responsible for fee payment as well as costs of repairs or replacement of supplier services and/or products. • Third party contracts remain independent between supplier and client, and are in no way the responsibility of Vowever Wedding Planner. • Adjustments of detailed arrangement can be made not later than 45 days before the wedding date.', 1, 1, 150000000, NULL, 1);

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
(16, 'Andre', 'andre@gmail.com', '$2y$10$qu0EgCV3nJtI8jeEIG/MDuszkDpjettgqjBZ692WJ4hqTBuhOZRqW', 2, 0, '2021-12-03');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner_slider`
--
ALTER TABLE `tb_banner_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_data_lengkap_vendor`
--
ALTER TABLE `tb_data_lengkap_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_diskon_produk`
--
ALTER TABLE `tb_diskon_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_gambar_produk`
--
ALTER TABLE `tb_gambar_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_kategori_service`
--
ALTER TABLE `tb_kategori_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_media_sosial_vendor`
--
ALTER TABLE `tb_media_sosial_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
