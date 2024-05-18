-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 03:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_gayabelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nik`, `password`, `level`) VALUES
('100', '100', '2'),
('2', '2', '2'),
('admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `kode` int(11) NOT NULL,
  `nik` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nosoal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`kode`, `nik`, `nosoal`, `nilai`) VALUES
(146, '2', '1', 'A'),
(147, '2', '2', 'A'),
(148, '2', '3', 'A'),
(149, '2', '4', 'A'),
(150, '2', '5', 'A'),
(151, '2', '6', 'A'),
(152, '2', '7', 'A'),
(153, '2', '8', 'A'),
(154, '2', '9', 'K'),
(155, '2', '10', 'K'),
(156, '2', '11', 'K'),
(157, '2', '12', 'K'),
(158, '2', '13', 'K'),
(159, '2', '14', 'K'),
(160, '2', '15', 'K'),
(161, '2', '16', 'K'),
(162, '2', '17', 'V'),
(163, '2', '18', 'V'),
(164, '2', '19', 'V'),
(165, '2', '20', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `kode` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nosoal` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`kode`, `nosoal`, `pertanyaan`, `nilai`) VALUES
('AP1', '1', 'Berbicara dengan tempo sedang', 'A'),
('AP10', '10', 'Sangat tertarik pada suara ', 'A'),
('AP11', '11', 'Menganalisa sesuatu dengan mengucapakn berulang-ulang', 'A'),
('AP12', '12', 'Sulit kosentrasi ketika ada keributan ', 'A'),
('AP13', '13', 'Cenderung terkesan pada melodi atau nada ', 'A'),
('AP14', '14', 'Kecenderunagn memulai kalimat opini : ''menurut yang saya dengar''', 'A'),
('AP15', '15', 'Suka diajari oleh guru dengan cara menjelaskan dengan suara indah', 'A'),
('AP16', '16', 'Cenderung memilih untuk tidur di ruang tenang/sepi', 'A'),
('AP17', '17', 'Suka mendengar dialog pada saat nonton film ', 'A'),
('AP18', '18', 'Mudah tertarik pada suatu produk ketika ada penjelasan baik dari penjualnya', 'A'),
('AP19', '19', 'Cenderung ingin dijelaskan secara lisan cara merakit alat-alat elektronik', 'A'),
('AP2', '2', 'Sering mengatakan sesuatu yang kedengarannya bagus', 'A'),
('AP20', '20', 'Sangat terkesan pada bunyi-bunyi di sekeliling saat berada di alam terbuka', 'A'),
('AP3', '3', 'Mudah mengingat hal yang didengar', 'A'),
('AP4', '4', 'Lebih terkesan pada suara dan nama ', 'A'),
('AP5', '5', 'Sangat menyukai music ', 'A'),
('AP6', '6', 'Cenderung memperhatikan orang pada pembicaraannya', 'A'),
('AP7', '7', 'Senang menghafal sesuatu dengan mengulangi kata-kata dengan suara keras', 'A'),
('AP8', '8', 'Dalam berbicara menjelaskan, cenderung menyampaikan secara lisan', 'A'),
('AP9', '9', 'Mudah terganggu dengan suara yang berisik ', 'A'),
('KP1', '1', 'Berbicara dengan tempo lambat', 'K'),
('KP10', '10', 'Sangat tertarik pada gerakan tubuh ', 'K'),
('KP11', '11', 'Menganalisa sesuatu dengan membayangkan sesuatu di otak', 'K'),
('KP12', '12', 'Sulit untuk bisa duduk diam dan tenang ', 'K'),
('KP13', '13', 'Cenderung terkesan pada tarian ', 'K'),
('KP14', '14', 'Kecenderunagn memulai kalimat opini : ‘menurut yang saya lakukan’', 'K'),
('KP15', '15', 'Suka diajari oleh guru dengan cara mempraktikkan dan menyentuh object yang dibicarakan', 'K'),
('KP16', '16', 'Cenderung memilih untuk tidur di ranjang yang nyaman', 'K'),
('KP17', '17', 'Suka mengamati acting para actor pada saat nonton film dan cenderung ingin mempraktekkannya', 'K'),
('KP18', '18', 'Suka mencoba barang/produk yang ingin dibeli', 'K'),
('KP19', '19', 'Cenderung suka pada praktek langsung dalam merakit alat-alat elektronik', 'K'),
('KP2', '2', 'Sering mengatakan sesuatu yang rasanya enak ', 'K'),
('KP20', '20', 'Sangat terkesan pada sentuhan alam saat berada di alam terbuka', 'K'),
('KP3', '3', 'Mudah mengingat hal yang dilakukan ', 'K'),
('KP4', '4', 'Lebih terkesan pada kejadian, emosi dan peristiwa', 'K'),
('KP5', '5', 'Sangat menyukai tarian ', 'K'),
('KP6', '6', 'Cenderung memperhatikan orang pada prilaku dan gerak geriknya', 'K'),
('KP7', '7', 'Senang menghafal sesuatu sambil berjalan ', 'K'),
('KP8', '8', 'Dalam berbicara menjelaskan, cenderung menggerakkan tangan', 'K'),
('KP9', '9', 'Mudah terganggu dengan benda yang bergerak ', 'K'),
('VP1', '1', 'Berbicara dengan tempo cepat', 'V'),
('VP10', '10', 'Sangat tertarik pada warna', 'V'),
('VP11', '11', 'Menganalisa sesuatu dengan membuat coretan ', 'V'),
('VP12', '12', 'Sulit bisa berlama belajar jika bahan pelajaran penuh tulisan atau tidak rapi', 'V'),
('VP13', '13', 'Cenderung terkesan pada cahaya ', 'V'),
('VP14', '14', 'Kecenderunagn memulai kalimat opini : ‘menurut yang saya lihat’', 'V'),
('VP15', '15', 'Suka diajari oleh guru dengan cara mengambarkan suatu object di papan tulis', 'V'),
('VP16', '16', 'Cenderung memilih untuk tidur di kamar yang gelap', 'V'),
('VP17', '17', 'Suka melihat pemandang/latar bakcground pada saat nonton film', 'V'),
('VP18', '18', 'Sangat tertarik pada model produk (desain dan warna) yang akan dibeli', 'V'),
('VP19', '19', 'Cenderung butuh diagram alur kerja dalam merakit alat-alat elektronik', 'V'),
('VP2', '2', 'Sering mengatakan sesuatu yang kelihatannya bagus', 'V'),
('VP20', '20', 'Sangat terkesan pada indahnya pemandangan saat berada di alam terbuka', 'V'),
('VP3', '3', 'Mudah mengingat hal yang dilihat ', 'V'),
('VP4', '4', 'Lebih terkesan pada orang, lingkungan dan wajah', 'V'),
('VP5', '5', 'Sangat menyukai lukisan ', 'V'),
('VP6', '6', 'Cenderung memperhatikan orang pada wajah dan pakaian yang dikenakan', 'V'),
('VP7', '7', 'Senang menghafal sesuatu dengan menulis ', 'V'),
('VP8', '8', 'Dalam berbicara menjelaskan, cenderung membuat coretan dikertas', 'V'),
('VP9', '9', 'Mudah terganggu dengan barang-barang berantakan disekitarnya', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `kode` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gayabelajar` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`kode`, `gayabelajar`, `keterangan`) VALUES
('A01', 'A', 'Jika bacaan yang penuh tulisan membosankan\r\nbuat kamu,ucapkanlah apa yang sedang kamu\r\nbaca sehingga bisa terdengar secara pribadi\r\nmaka kamu butuh keheningan dalam hal ini'),
('A02', 'A', 'Cobalah tidak langsung mencatat apa yang\nkamu dengar, tapi dengarkan dulu dengan\nseksama baru dicatat'),
('A03', 'A', 'Ucapkanlah apa yang kamu ingin hafal atau\nbuatlah ritme lagu dalam menghafal rumus'),
('A04', 'A', 'Jika bacaan penuh tulisan membosankan buat\nkamu, cobalah warnai beberapa kalimat penting\ndalan bacaan tersebut degan rapi'),
('A05', 'A', 'Kamu butuh penjelasan dari seseorang dalam\nmerakit sesuatu seperti(robot, mobil, dan\nmainan lainnya)'),
('A06', 'A', 'Biasakanlah untuk mengucapkan kembali apa\ninformasi yang kamu terima, tidak perlu keraskeras\ncukup terdengar secara pribadi sehingga\nkamu ingat'),
('A07', 'A', 'Kamu perlu mendengarkan musik kesukaan\ndalam belajar, agar lebih santai dan tidak\nmudah jenuh'),
('A08', 'A', 'Jika dalam belajar, kamu sambil memutar\nmusik dan orang tua menganggap kamu tidak\nkosentrasi belajar maka berilah pengertian\ndengan baik tentang cara belajar kamu ini'),
('K01', 'K', 'Banyaklah menyalurkan energi melalui gerakan\ntubuh seperti olahraga senam'),
('K02', 'K', 'Isilah waktu luang dengan dengan aktivitas di\nluar yang menguji kekuatan fisik'),
('K03', 'K', 'Agar bisa berlama-lama dalam menghafal,\ntetaplah biasakan menghafal sambil berjalan\nselama tidak menganggu orang lain'),
('K04', 'K', 'Jika dalam belajar di ruang kelas yang\nmenuntut untuk berdiam lama, agar lebih relax,\nkamu bisa saja menggoyangkan kaki mu,\nselama itu tidak menganggu orang lain'),
('K05', 'K', 'Di dalam merakit sesuatu(robot, mobil dan\nmainan lainnya) kamu cenderung langsung\npraktek membuatnya,namun jika kamu\nmengalami kegagalan, hendaklah kamu melihat\ndiagram contoh dengan saksama'),
('K06', 'K', 'Kamu sesekali perlu belajar di luar rumah atau\nluar ruangan, terutama saat belajar biologi,\nkamu butuh memahami lingkungan atau\ntanaman secara langsung'),
('V01', 'V', 'Isilah waktu luang mu dengan membaca buku\nkesukaan dan majalah-majalah yang membuat\nmatamu berwisata'),
('V02', 'V', 'Jika kamu terlihat sesuatu yang jelek atau\nberantakan, jangan terlalu diperhatikan karena\nbisa menggangu suasana hatimu'),
('V03', 'V', 'Kamu harus segera mencatat segala informasi\nyang kamu dengar, misalnya ketika bu guru\nmenjelaskan sembarang teory'),
('V04', 'V', 'Dalam menghafal sesuatu, buatlah coretan\nsetiap kali kamu menghafal sesuatu tersebut,\nsehingga kamu ingat'),
('V05', 'V', 'Ternyata kamu lebih senang melihat alur\ndiagram dalam merakit sesuatu, ini\nmenunjukkan kamu mempunyai sifat modalitas\nVisual, jadi biasanya kamu punya bakat dalam\nmengambar diagram');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
