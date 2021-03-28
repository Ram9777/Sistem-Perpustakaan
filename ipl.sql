-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 12:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Kepala'),
(3, 'Kelola'),
(4, 'Transaksi'),
(5, 'Kelola Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sub_menu`
--

CREATE TABLE `admin_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_sub_menu`
--

INSERT INTO `admin_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'Administrator', 'fas fa-fw fa-folder'),
(2, 2, 'Dashboard', 'Kepala', 'fas fa-fw fa-folder'),
(3, 1, 'Buku Tamu', 'Administrator/buku_tamu', 'fas fa-fw fa-folder'),
(4, 3, 'Kelola Anggota', 'Kelola/kelanggota', 'fas fa-fw fa-folder'),
(5, 3, 'Kelola Buku', 'Kelola', 'fas fa-fw fa-folder'),
(6, 4, 'Peminjaman Buku', 'Transaksi', 'fas fa-fw fa-folder'),
(7, 4, 'Pengembalian Buku', 'Transaksi/pengembalian', 'fas fa-fw fa-folder'),
(8, 5, 'Laporan Anggota', 'Kelola_Laporan/index', 'fas fa-fw fa-folder'),
(9, 5, 'Laporan Peminjaman', 'Kelola_Laporan/lapbuku', 'fas fa-fw fa-folder'),
(12, 4, 'History Peminjaman', 'Transaksi/history', 'fa fa-fw fa-folder'),
(13, 5, 'Laporan Pengunjung', 'Kelola_laporan/laporan_pengunjung', 'fas fa-folder'),
(14, 5, 'Kirim Laporan', 'Kelola_Laporan/kirim_laporan', 'fas fa-folder'),
(15, 2, 'Lihat Laporan Anggota', 'Kepala/laporan', 'fas fa-fw fa-folder'),
(16, 2, 'Lihat Laporan Pengunjung', 'Kepala/laporan2', 'fas fa-fw fa-folder'),
(17, 2, 'Lihat laporan Peminjaman', 'Kepala/laporan3', 'fas fa-fw fa-folder');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_btamu` varchar(10) NOT NULL,
  `tujuan` varchar(64) NOT NULL,
  `tanggal_dtg` date NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_btamu`, `tujuan`, `tanggal_dtg`, `id_anggota`, `nama`) VALUES
('9511101', 'baca buku', '2018-01-25', '4511105', 'Ardi Destiawan'),
('9511102', 'pinjam buku', '2018-10-25', '4511104', 'Indra Gunawan'),
('9511103', 'pakai fasilitas', '2019-10-25', '4511103', 'Rizal Febrian'),
('9511104', 'pinjem buku', '2019-02-25', '4511101', 'Budi Dwi Prasetyo'),
('9511105', 'baca buku', '2019-02-25', '4511105', 'Ardi Destiawan'),
('9511106', 'pakai fasilitas', '2019-03-25', '4511106', 'Agung Wahyu'),
('9511107', 'pinjem buku', '2019-04-25', '4511108', 'Resta Nurfitriyana'),
('9511108', 'pakai fasilitas', '2019-03-25', '4511115', 'Agung Kharis'),
('9511109', 'baca buku', '2019-05-25', '4511117', 'Agus Hermanto'),
('9511110', 'pakai fasilitas', '2019-05-25', '4511119', 'Audila Gumanty'),
('9511111', 'pinjem buku', '2019-05-25', '4511120', 'Bima Wahyu Utama'),
('9511112', 'baca buku', '2019-05-25', '4511123', 'Fitrizki Allunita'),
('9511113', 'pakai fasilitas', '2019-06-25', '4511130', 'Nurul Annisa'),
('9511114', 'pakai fasilitas', '2019-06-25', '4511141', 'Yuliani Dwi Utami'),
('9511115', 'pinjem buku', '2019-06-25', '4511155', 'Erik Aulia'),
('9511116', 'pakai fasilitas', '2019-07-25', '4511150', 'Ika Rahma'),
('9511117', 'pinjem buku', '2019-07-25', '4511169', 'Hanifa Humanisa'),
('9511118', 'baca buku', '2019-08-25', '4511157', 'Luki Juliadi'),
('9511119', 'pakai fasilitas', '2019-08-25', '4511165', 'Asy Syabila'),
('9511120', 'pinjem buku', '2019-08-25', '4511133', 'Resty Awaliah'),
('9511121', 'pakai fasilitas', '2019-09-25', '4511169', 'Hanifa Humanisa'),
('9511122', 'pakai fasilitas', '2019-10-25', '4511143', 'Aldi Permana'),
('9511123', 'pinjem buku', '2019-11-22', '4511103', 'Rizal Febrian'),
('9511124', 'baca buku', '2019-12-13', '4511103', 'Rizal Febrian'),
('9511125', 'pinjem buku', '2020-01-20', '4511105', 'Ardi Destiawan');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `Jenis_kelamin` text NOT NULL,
  `tingkat_pendidikan` text NOT NULL,
  `kategori` text NOT NULL,
  `data_created` date NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama`, `alamat`, `no_hp`, `Jenis_kelamin`, `tingkat_pendidikan`, `kategori`, `data_created`, `foto`) VALUES
('4511101', 'Budi Dwi Prasetyo', 'Cihampelas', '085320942911', 'L', 'SMA', 'umum', '2019-09-21', ''),
('4511102', 'Febry Ramadhan', 'Parongpong', '081254542094', 'L', 'SMA', 'umum', '2019-09-21', ''),
('4511103', 'Rizal Febrian', 'Cisarua', '082165849898', 'L', 'SMP', 'standar', '2019-09-21', ''),
('4511104', 'Indra Gunawan', 'Padalarang', '089640007754', 'L', 'SMP', 'standar', '2019-09-21', ''),
('4511105', 'Ardi Destiawan', 'Cimahi', '081222243543', 'L', 'SMA', 'umum', '2019-09-21', ''),
('4511106', 'Agung Wahyu', 'Padalarang', '089688885478', 'L', 'SMA', 'standar', '2019-09-22', ''),
('4511107', 'Helmi Fachrureza', 'Citapen', '081264872004', 'L', 'SMP', 'standar', '2019-09-22', ''),
('4511108', 'Resta Nurfitriyana', 'Cihampelas', '085320874421', 'P', 'S1', 'umum', '2019-09-22', ''),
('4511110', 'Restu Islami Fasha', 'Cimahi', '081278985648', 'L', 'SMP', 'standar', '2019-09-22', ''),
('4511111', 'Muhammad Yusriel', 'Cijerah', '085386878896', 'L', 'SMP', 'standar', '2019-09-23', ''),
('4511112', 'Muhammad Gumilar', 'Cimahi', '089652234568', 'L', 'SMA', 'standar', '2019-09-23', ''),
('4511113', 'Agya Java Maulidin', 'Cimahi', '089785649875', 'L', 'SMA', 'standar', '2019-09-24', ''),
('4511114', 'Fajri Maulid', 'Cimahi', '089687456545', 'L', 'SMA', 'umum', '2019-09-24', ''),
('4511115', 'Agung Kharis', 'Cimahi', '089784562094', 'L', 'SMP', 'standar', '2019-09-25', ''),
('4511116', 'Sayyidah Sarah', 'Cimahi', '089687239564', 'P', 'SMP', 'standar', '2019-09-25', ''),
('4511117', 'Agus Hermanto', 'Cimahi', '089756842234', 'L', 'SMA', 'standar', '2019-09-26', ''),
('4511118', 'Bahrul Rizqillah', 'Padalarang', '085384659124', 'L', 'SMA', 'standar', '2019-09-26', ''),
('4511119', 'Audila Gumanty', 'Cihampelas', '089687982234', 'P', 'SMA', 'standar', '2019-09-27', ''),
('4511120', 'Bima Wahyu Utama', 'Cimahi', '089687223494', 'L', 'SMA', 'umum', '2019-09-27', ''),
('4511121', 'Mahbub Arrozi', 'Cimahi', '089654872264', 'L', 'SMP', 'standar', '2019-09-28', ''),
('4511122', 'Dini Eka Putri', 'Batujajar', '081254876598', 'P', 'SMP', 'standar', '2019-09-28', ''),
('4511123', 'Fitrizki Allunita', 'Cimahi', '089658978863', 'P', 'SMA', 'standar', '2019-09-29', ''),
('4511124', 'Irmaya Rusti', 'Padasuka', '089786985562', 'P', 'SMP', 'umum', '2019-09-29', ''),
('4511125', 'Silvia Rusmawanti', 'Cimahi', '085398785564', 'P', 'SMA', 'standar', '2019-09-30', ''),
('4511126', 'Kundika Whicak', 'Padalarang', '089788973264', 'L', 'SMA', 'umum', '2019-09-30', ''),
('4511127', 'Lugina Masri', 'Padalarang', '081269875631', 'L', 'SMA', 'standar', '2019-10-01', ''),
('4511128', 'Mukti Kinani', 'Padasuka', '089856498878', 'L', 'SMP', 'standar', '2019-10-01', ''),
('4511129', 'Novia Retno', 'Parongpong', '089682345692', 'P', 'SMA', 'umum', '2019-10-02', ''),
('4511130', 'Nurul Annisa', 'Cihampelas', '081265958798', 'P', 'SMA', 'standar', '2019-10-02', ''),
('4511131', 'Rahmania Ikrimah', 'Cililin', '089684956321', 'P', 'SMA', 'umum', '2019-10-02', ''),
('4511132', 'Begawan Raka', 'Cimahi', '089863521235', 'L', 'SMA', 'standar', '2019-10-03', ''),
('4511133', 'Resty Awaliah', 'Padalarang', '081294658879', 'P', 'SMP', 'umum', '2019-10-03', ''),
('4511134', 'Rina Saputri', 'Parongpong', '081277953364', 'P', 'SMA', 'standar', '2019-10-03', ''),
('4511135', 'Sevty Nourmantana', 'Padasuka', '089677875687', 'L', 'SMA', 'standar', '2019-10-04', ''),
('4511136', 'Sheila Nurmeila', 'Cimahi', '081298562234', 'P', 'S1', 'umum', '2019-10-04', ''),
('4511137', 'Shisi Prayesti', 'Padasuka', '089884872265', 'P', 'SMA', 'umum', '2019-10-05', ''),
('4511138', 'Shofa Marwati', 'Parongpong', '087855649982', 'P', 'SMA', 'standar', '2019-10-05', ''),
('4511139', 'Reza Fahrizal', 'Cihanjuang', '089855872364', 'L', 'SD', 'standar', '1970-01-06', ''),
('4511140', 'Siska Fadilah', 'Batujajar', '087756982234', 'P', 'SMA', 'umum', '2019-10-06', ''),
('4511141', 'Yuliani Dwi Utami', 'Cimahi', '081284986635', 'P', 'SMA', 'umum', '2019-10-06', ''),
('4511142', 'Agil Satriani', 'Cililin', '089758112546', 'L', 'SMP', 'standar', '2019-10-07', ''),
('4511143', 'Aldi Permana', 'Cimahi', '087795632264', 'L', 'SMA', 'standar', '2019-10-07', ''),
('4511144', 'Anita Safitri', 'Padalarang', '081255363324', 'P', 'SMA', 'standar', '2019-10-08', ''),
('4511145', 'Dony Septian', 'Cihanjuang', '089877485564', 'L', 'SMA', 'umum', '2019-10-08', ''),
('4511146', 'Dwi Rizqi Ramdhani', 'Padasuka', '08789921456', 'P', 'SMA', 'umum', '2019-10-09', ''),
('4511147', 'Ella Wahyu Guntari', 'Cimahi', '081296583345', 'P', 'S1', 'umum', '2019-10-09', ''),
('4511148', 'Fladio Armandika', 'Padasuka', '087869521145', 'L', 'SMP', 'standar', '2019-10-09', ''),
('4511149', 'Hadi Apryana', 'Pasir Koja', '089577842236', 'L', 'SMA', 'umum', '2019-10-10', ''),
('4511150', 'Ika Rahma', 'Cimahi', '085365898878', 'P', 'SMA', 'standar', '2019-10-10', ''),
('4511151', 'Rizki Fadilah', 'Batujajar', '087789563325', 'L', 'SMA', 'standar', '2019-10-11', ''),
('4511152', 'Ilham Maulana', 'Cimahi', '081296855523', 'L', 'SMA', 'standar', '2019-10-11', ''),
('4511153', 'Rayzha Raka', 'Padasuka', '089985635548', 'L', 'SMA', 'umum', '2019-10-12', ''),
('4511154', 'Yusuf Andas', 'Cihanjuang', '081284569985', 'L', 'SMA', 'standar', '2019-10-12', ''),
('4511155', 'Erik Aulia', 'Cimahi', '089678995587', 'L', 'SMA', 'standar', '2019-10-13', ''),
('4511156', 'Rully Haryadi', 'Padalarang', '089578224565', 'L', 'SMA', 'umum', '2019-10-13', ''),
('4511157', 'Luki Juliadi', 'Padasuka', '089687983365', 'L', 'SMA', 'umum', '2019-10-14', ''),
('4511158', 'Rizal Umami', 'Padalarang', '089855632245', 'L', 'SMA', 'standar', '2019-10-14', ''),
('4511159', 'Rikpal Ramdepin', 'Cihanjuang', '085374852234', 'L', 'SMP', 'standar', '2019-10-15', ''),
('4511160', 'Mochammad Novyan', 'Padalarang', '089855638878', 'L', 'SMA', 'umum', '2019-10-15', ''),
('4511161', 'Ghea Adiputra', 'Parongpong', '089566312245', 'L', 'SMA', 'umum', '2019-10-15', ''),
('4511162', 'Septiono Prasetyo', 'Parongpong', '089688523154', 'L', 'SMP', 'standar', '2019-10-16', ''),
('4511163', 'Ai Ropiqoh', 'Cimahi', '085398785545', 'P', 'SMP', 'standar', '2019-10-16', ''),
('4511164', 'Mira Aulia', 'Cihampelas', '089855653321', 'P', 'SD', 'standar', '2019-10-17', ''),
('4511165', 'Asy Syabila', 'Cihampelas', '081256357789', 'P', 'SMA', 'umum', '2019-10-18', ''),
('4511166', 'Bella Donata', 'Cihampelas', '089785216689', 'P', 'SD', 'standar', '2019-10-19', ''),
('4511167', 'Ryan Beni Aryando', 'Cihampelas', '087842356651', 'L', 'SMA', 'umum', '2019-10-19', ''),
('4511168', 'Hendryanto Eko', 'Cimahi', '081285324456', 'L', 'S1', 'umum', '2019-10-20', ''),
('4511169', 'Hanifa Humanisa', 'Padalarang', '081263524529', 'P', 'SMA', 'standar', '2019-10-21', ''),
('4511170', 'Chika Jessika', 'Padasuka', '089866324589', 'P', 'SMP', 'standar', '2019-10-21', ''),
('4511171', 'Marliana Rahayu', 'Parongpong', '081296335482', 'P', 'SMA', 'umum', '2019-10-22', ''),
('4511172', 'Marsika Rahayu', 'Cihanjuang', '081296332245', 'P', 'SMA', 'standar', '2019-10-22', ''),
('4511173', 'Lusiana Saputri', 'Padalarang', '081255231452', 'P', 'S1', 'umum', '2019-10-23', ''),
('4511174', 'Rahmadayanti Syifa', 'Cihampelas', '081295827756', 'P', 'S1', 'umum', '2019-10-24', ''),
('4511175', 'Resti Nurfitriyani', 'Cihampelas', '081296324485', 'P', 'S1', 'umum', '2019-10-25', ''),
('4511176', 'mamat', 'Bandung', '23254230', 'L', 'SD', 'standar', '2020-01-15', 'r.jpg'),
('4511177', '', '', '', 'L', 'SD', 'standar', '2020-01-15', 'IMG_20200115_023247.jpg'),
('4511178', 'ramde', 'Cimahi', '23254239', 'P', 'SMP', 'standar', '2020-01-18', 'IMG_20200115_023247.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` varchar(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `penerbit` varchar(128) NOT NULL,
  `penulis` varchar(64) NOT NULL,
  `tahun_cetak` varchar(50) NOT NULL,
  `stok` int(2) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `label` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `penerbit`, `penulis`, `tahun_cetak`, `stok`, `kategori`, `label`) VALUES
('4511101', 'Bicara Itu Ada Seninya', 'Buana Ilmu Populer', 'Oh su hyang', '2018', 97, 'Umum', '2g31h42jh3'),
('4511102', 'Jangan membuat masalah kecil menjadi masalah besar', 'gramedia pustaka utama', 'Richard Carrison', '2019', 21, 'umum', '3h23bh53j4n'),
('4511103', 'La tahzan for hijabers', 'araska publisher', 'Humaira L rahmi', '2018', 50, 'umum', '2133jdsajdhf'),
('4511104', 'negeri para bedebah', 'Bulan media', 'Tere liye', '2019', 59, 'umum', '453j4das6'),
('4511105', 'titik temu', 'buku mojok', 'gina amanda', '2017', 67, 'umum', '21324hjsd5'),
('4511106', 'seperti hujan yang jatuh ke bumi', 'media kita', 'boy Candra', '2016', 58, 'umum', '12bh432hv4'),
('4511107', 'lebih dari seribu amalan sunnah dalam sehari semalam', 'pustaka imam asy syafii', 'ibrahim A', '2017', 69, 'standar', '1b2g32g4'),
('4511108', 'sebuah seni untuk bersikap bodo amat', 'azzimah', 'mark manson', '2017', 69, 'umum', '7j56hj7j56'),
('4511109', 'vocabulary skills booster', 'andaliman books', 'forum alumni pare', '2019', 212, 'standar', '1nj2b32'),
('4511110', 'BUlan terbelah di langit amerika', 'gramedia pustaka utama', 'IU', '2015', 2, 'umum', '45b7857438b3h'),
('4511111', 'yang fana adalah waktu', 'gramedia pustaka utama', 'saparji jhoko darmono', '2018', 40, 'Standard', '34asdbfj45a'),
('4511112', 'terus memperbaiki diri', 'elex media komputindo', 'endang koswara', '2019', 64, 'umum', '26bahg25'),
('4511113', 'master your time, master your life', 'elex media komputindo', 'brian tracy', '2018', 29, 'umum', '1nbfuj278asf'),
('4511114', 'Alfatih', 'gramedia pustaka utama', 'Felix Siauw', '2019', 19, 'Pengetahuan', '43dr42dj');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_laporan` varchar(64) NOT NULL,
  `tgl_dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_laporan`, `tgl_dibuat`) VALUES
(1, 'TA1_BISMILLAH1.docx', '0000-00-00'),
(2, 'Modul_2_impementasi1.pdf', '0000-00-00'),
(3, 'jadwal.docx', '0000-00-00'),
(4510105, '3411161046_FebryRamadhan_Modul3.docx', '0000-00-00'),
(4510106, 'Modul_2_impementasi3.pdf', '2019-10-19'),
(4510107, 'TA1_BISMILLAH2.docx', '2019-10-19'),
(4510108, 'coba_laporan_2.pdf', '2019-10-21'),
(4510109, 'Data_Transaksi_141.pdf', '2019-10-22'),
(4510110, 'Data_Transaksi.pdf', '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_peminjaman`
--

CREATE TABLE `laporan_peminjaman` (
  `id_laporan_peminjaman` int(11) NOT NULL,
  `nama_laporan_peminjaman` varchar(64) NOT NULL,
  `tgl_dibuat_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_peminjaman`
--

INSERT INTO `laporan_peminjaman` (`id_laporan_peminjaman`, `nama_laporan_peminjaman`, `tgl_dibuat_peminjaman`) VALUES
(4540101, 'Data_Transaksi1.pdf', '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pengunjung`
--

CREATE TABLE `laporan_pengunjung` (
  `id_laporan_pengunjung` int(11) NOT NULL,
  `nama_laporan_pengunjung` varchar(64) NOT NULL,
  `tgl_dibuat_pengunjung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_pengunjung`
--

INSERT INTO `laporan_pengunjung` (`id_laporan_pengunjung`, `nama_laporan_pengunjung`, `tgl_dibuat_pengunjung`) VALUES
(4520101, 'jadwal1.docx', '2019-10-19'),
(4520102, 'TA1_BISMILLAH3.docx', '2019-10-20'),
(4520103, 'coba_laporan.pdf', '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(11) NOT NULL,
  `nopinjam` int(11) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id` varchar(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nopinjam`, `id_anggota`, `id`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `qty`, `tgl_pengembalian`) VALUES
('1511101', 14, '4511104', '4511101', '2019-10-25', '2019-11-01', 1, 1, '0000-00-00'),
('1511102', 15, '4511101', '4511113', '2019-10-25', '2019-11-01', 1, 1, '0000-00-00'),
('1511103', 16, '4511103', '4511110', '2019-10-25', '2019-11-01', 1, 1, '0000-00-00'),
('1511104', 17, '4511110', '4511113', '2019-10-25', '2019-11-01', 1, 1, '0000-00-00'),
('1511105', 18, '4511107', '4511102', '2019-10-25', '2019-10-01', 2, 1, '2019-10-25'),
('1511106', 19, '4511118', '4511103', '2019-10-25', '2019-11-01', 2, 1, '2019-10-25'),
('1511107', 20, '4511113', '4511101', '2019-10-25', '2019-11-01', 1, 1, '0000-00-00'),
('1511107', 21, '4511113', '4511110', '2019-10-25', '2019-11-01', 2, 1, '2020-01-20'),
('1511108', 22, '4511119', '4511101', '2019-10-25', '2019-11-01', 1, 1, '0000-00-00'),
('1511109', 23, '4511105', '4511114', '2019-12-13', '2019-12-20', 2, 1, '2019-12-13'),
('1511110', 24, '4511102', '4511114', '2020-01-20', '2020-01-27', 1, 1, '0000-00-00');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `kembali` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
UPDATE data_buku SET stok = stok + old.qty
WHERE id = old.id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
UPDATE data_buku SET stok = stok - new.qty
WHERE id = new.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `data_created`) VALUES
(1, 'Dadan', 'Dadan123@gmail.com.com', 'default.jpg', '$2y$10$z4QxUT2vt9J0ImGGx7nF8.PzohqBb7w9FNSjVliYjid5xcZPUY.Mu', 1, 1566152823),
(2, 'Ramadhan', 'febryramadhan285@gmail.com', 'default.jpg', '$2y$10$iBL2EV6MTxNDYnbiGofI6O/YQSemmW127LdRXi02mfAWNa4EoKsRm', 2, 1566152872),
(4, 'Budi', 'PrasetyoBudi@gmail.com', 'default.jpg', '$2y$10$KAx2/anFJmwoAct1oktlC.Au8ebcEn7cqzm0QnRkBHopNodWB/Gwu', 1, 1571937441);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_btamu`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `laporan_peminjaman`
--
ALTER TABLE `laporan_peminjaman`
  ADD PRIMARY KEY (`id_laporan_peminjaman`);

--
-- Indexes for table `laporan_pengunjung`
--
ALTER TABLE `laporan_pengunjung`
  ADD PRIMARY KEY (`id_laporan_pengunjung`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`nopinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_sub_menu`
--
ALTER TABLE `admin_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4510111;
--
-- AUTO_INCREMENT for table `laporan_peminjaman`
--
ALTER TABLE `laporan_peminjaman`
  MODIFY `id_laporan_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4540102;
--
-- AUTO_INCREMENT for table `laporan_pengunjung`
--
ALTER TABLE `laporan_pengunjung`
  MODIFY `id_laporan_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4520104;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `nopinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD CONSTRAINT `buku_tamu_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id`) REFERENCES `data_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
