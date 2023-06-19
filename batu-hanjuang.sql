-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2023 pada 17.09
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batu-hanjuang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `id_transaksi`, `id_tiket`, `qty`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 2, 5, 2),
(5, 3, 8, 1),
(6, 4, 10, 1),
(7, 4, 2, 2),
(8, 5, 4, 1),
(9, 6, 6, 2),
(10, 7, 1, 1),
(11, 7, 3, 1),
(12, 8, 4, 1),
(13, 8, 6, 2),
(14, 9, 4, 1),
(15, 10, 9, 1),
(16, 10, 6, 1),
(17, 11, 1, 5),
(18, 12, 3, 2),
(19, 13, 6, 3),
(20, 14, 1, 1),
(21, 14, 9, 1),
(22, 14, 10, 1),
(23, 15, 4, 2),
(24, 16, 10, 2),
(25, 17, 5, 1),
(26, 17, 4, 1),
(27, 18, 9, 1),
(28, 19, 2, 1),
(29, 20, 2, 1),
(30, 21, 4, 2),
(31, 22, 3, 2),
(32, 23, 8, 1),
(33, 24, 7, 2),
(34, 25, 1, 1),
(35, 25, 9, 1),
(36, 25, 10, 2),
(37, 26, 2, 1),
(38, 27, 6, 1),
(39, 28, 5, 1),
(40, 29, 7, 1),
(41, 30, 4, 1),
(42, 31, 1, 1),
(43, 32, 2, 1),
(44, 33, 8, 1),
(45, 34, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `tgl_diskon` varchar(15) NOT NULL,
  `diskon` int(11) NOT NULL,
  `nama_diskon` varchar(20) NOT NULL,
  `member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_tiket`, `tgl_diskon`, `diskon`, `nama_diskon`, `member`) VALUES
(1, 1, '2023-06-14', 5, 'Sale', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `review` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama_tiket` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `jml_orang` int(11) NOT NULL,
  `type_tiket` int(11) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_tiket`, `deskripsi`, `jml_orang`, `type_tiket`, `harga`) VALUES
(1, 'One People Bast', 'Tiket One people best ever untuk healing', 1, 1, '10000'),
(2, 'Together be Like', 'Tiket Together be Like untuk pasangan', 2, 2, '18000'),
(3, 'Double Date', 'Tiket Double Date untuk kencan ganda', 4, 2, '37000'),
(4, 'Prewedding Photo', 'Tiket Prewedding Photo untuk photo pranikah', 3, 2, '28000'),
(5, 'Tour  ', 'Tiket Tour untuk rombongan', 7, 3, '65000'),
(6, 'Family Vacation', 'Tiket Family Vacation untuk Keluarga ', 6, 2, '55000'),
(7, 'weekend', 'Tiket weekend untuk hari sabtu dan minggu', 10, 3, '90000'),
(8, 'Weekday', 'Tiket Weekday untuk hari senin-jumat', 5, 3, '45000'),
(9, 'Tur batu', 'Tiket Tur Batu untuk melihat taman batu ', 3, 3, '28000'),
(10, 'Spot Photo', 'Tiket Spot Photo untuk foto-foto disekitar area ', 1, 3, '9000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_wisatawan` int(11) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `tot_transaksi` varchar(15) NOT NULL,
  `stat_transaksi` int(11) NOT NULL,
  `stat_pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_wisatawan`, `tgl_transaksi`, `tot_transaksi`, `stat_transaksi`, `stat_pembayaran`, `bukti_pembayaran`) VALUES
(1, 1, '2023-05-19', '65000', 2, 1, '0'),
(2, 1, '2023-05-20', '130000', 2, 1, '0'),
(3, 1, '2023-05-21', '45000', 2, 1, '0'),
(4, 1, '2023-05-22', '26000', 2, 1, '0'),
(5, 1, '2023-05-23', '28000', 2, 1, '0'),
(6, 2, '2023-05-24', '110000', 2, 1, '0'),
(7, 2, '2023-05-24', '47000', 2, 1, '0'),
(8, 2, '2023-05-24', '28000', 2, 1, '0'),
(9, 9, '2023-05-24', '28000', 2, 1, '0'),
(10, 10, '2023-05-24', '83000', 2, 1, '0'),
(11, 11, '2023-05-24', '50000', 2, 1, '0'),
(12, 11, '2023-05-24', '74000', 2, 1, '0'),
(13, 11, '2023-05-19', '165000', 2, 1, '0'),
(14, 14, '2023-05-19', '47000', 2, 1, '0'),
(15, 15, '2023-05-19', '56000', 2, 1, '0'),
(16, 3, '2023-05-19', '18000', 2, 1, '0'),
(17, 3, '2023-05-19', '93000', 2, 1, '0'),
(18, 3, '2023-05-19', '28000', 2, 1, '0'),
(19, 3, '2023-05-19', '18000', 2, 1, '0'),
(20, 1, '2023-05-28', '18000', 2, 1, '0'),
(21, 5, '2023-05-28', '56000', 2, 1, '0'),
(22, 5, '2023-05-28', '74000', 2, 1, '0'),
(23, 5, '2023-05-28', '45000', 2, 1, '0'),
(24, 5, '2023-05-28', '180000', 2, 1, '0'),
(25, 6, '2023-05-28', '56000', 2, 1, '0'),
(26, 6, '2023-05-28', '18000', 2, 1, '0'),
(27, 6, '2023-05-08', '55000', 2, 1, '0'),
(28, 6, '2023-05-08', '65000', 2, 1, '0'),
(29, 7, '2023-05-08', '90000', 2, 1, '0'),
(30, 7, '2023-05-08', '28000', 2, 1, '0'),
(31, 8, '2023-05-08', '10000', 2, 1, '0'),
(32, 8, '2023-05-08', '18000', 2, 1, '0'),
(33, 8, '2023-05-08', '45000', 2, 1, '0'),
(34, 8, '2023-05-08', '55000', 2, 1, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'admin', 'Kuningan', '085156727388', 'admin', 'admin', 1),
(2, 'Pengelola', 'Kuningan', '0875698745633', 'pengelola', 'pengelola', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatawan`
--

CREATE TABLE `wisatawan` (
  `id_wisatawan` int(11) NOT NULL,
  `nama_wisatawan` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `username_wisatawan` varchar(30) NOT NULL,
  `password_wisatawan` varchar(30) NOT NULL,
  `no_hp_wisatawan` varchar(15) NOT NULL,
  `level_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisatawan`
--

INSERT INTO `wisatawan` (`id_wisatawan`, `nama_wisatawan`, `alamat`, `tgl_lahir`, `jk`, `username_wisatawan`, `password_wisatawan`, `no_hp_wisatawan`, `level_member`) VALUES
(1, 'Ahmad Syahid', ' Ciberem', '30 Desember ', 'L', 'ahmad111', 'ahmad111', '89945360982', 1),
(2, 'Dewi Rahayu', 'Ciberem', '24 Januari', 'P', 'dewirahayu111', 'dewirahayu111', '82143215678', 1),
(3, 'Budi Santoso', 'Jalaksana', '3 Maret', 'L', 'budisantoso111', 'budisantoso111', '82145679132', 1),
(4, 'Maya Sari', 'Jalaksana', '18 Januari', 'P', 'mayasari111', 'mayasari', '89965437891', 0),
(5, 'Siti Aisyah', 'Kuningan', '21 Maret', 'P', 'sitiaisyah111', 'sitiaisyah111', '82176892456', 0),
(6, 'Desi Wulandari', 'Kuningan', '16 Juni', 'P', 'desiwulandari111', 'desiwulandari111', '89987614562', 1),
(7, 'Rina Fitriani', 'Kuningan', '12 juli', 'P', 'rinafitriani111', 'rinafitriani111', '82145980127', 1),
(8, 'Indra Kusuma', 'Kuningan', '1 Januari', 'L', 'indrakusuma111', 'indrakusuma111', '89925679810', 1),
(9, 'Agus Salim', 'Kuningan', '2023-04-14', 'L', 'agus111', 'agus111', '89887654543', 1),
(10, 'Rizki Maulana', 'Kuningan', '2023-04-18', 'L', 'rizki111', 'rizki111', '89099123212', 1),
(11, 'Andi Nugraha', 'Kuningan', '14 April', 'L', 'andinugraha111', 'andinugraha111', '89998712350', 1),
(12, 'Mochammad Ali', 'Kuningan', '18 April', 'L', 'mochamadali111', 'mochamadali111', '82198011278', 0),
(13, 'Rizki Maulana', 'Kuningan', '20 Januari', 'L', 'rizkimaulana111', 'rizkimaulana111', '82176890912', 0),
(14, 'Rina Indriani', 'Setianegara', '4 April', 'P', 'rinaindriani111', 'rinaindriani111', '89945267891', 1),
(15, 'Ahmad Ridwan', 'Setianegara', '17 Januari', 'L', 'ahmadridwan111', 'ahmadridwan111', '82165728901', 1),
(16, 'Siti Rahayu', 'Cirebon ', '10 November', 'P', 'sitirahayu111', 'sitirahayu111', '82176091270', 0),
(17, 'Ani Setiawati', 'Cirebon ', '15 September', 'P', 'anisetiawati111', 'anisetiawati111', '89909812379', 0),
(18, 'Dewi Sulistiani', 'Cirebon ', '7 Maret', 'P', 'dewisulistiani111', 'dewisulistiani111', '82265718901', 0),
(19, 'Joko Susanto', 'Cirebon ', '17 Juni', 'L', 'jokosusanto111', 'jokosusanto111', '89923760981', 0),
(20, 'Rudi Hermawan', 'Cirebon ', '24 Januari', 'L', 'rudihermawan111', 'rudihermawan111', '89954217801', 0),
(21, 'Andi Pratama', 'Cirebon ', '7 Desember', 'L', 'andipratama111', 'andipratama111', '89987012356', 0),
(22, 'Anton Wijaya', 'Cirebon ', '9 Maret', 'L', 'antonwijaya111', 'antonwijaya111', '82134896571', 0),
(23, 'Lina wulandari', 'Cirebon ', '28 September', 'P', 'linawlandari111', 'linawlandari111', '89971024586', 0),
(24, 'Dedy Sutomo', 'Cirebon ', '14 November', 'L', 'dedysutomo111', 'dedysutomo111', '82154710923', 0),
(25, 'Rina Maulida', 'Ancaran', '18 Februari', 'p', 'rinamaulida111', 'rinamaulida111', '82176120945', 0),
(26, 'Hadi santoso', 'Ancaran', '21 Maret', 'L', 'hadisantoso111', 'hadisantoso111', '89965810976', 0),
(27, 'Imam Sutisna', 'Ancaran', '18 Novemver', 'L', 'imamsutisan111', 'imamsutisna111', '89227810976', 0),
(28, 'Desi Rahmawati', 'Ancaran', '9 September', 'P', 'desirahmawati111', 'desirahmawati111', '82115459822', 0),
(29, 'Sri Rahayu', 'Ancaran', '7 Desember', 'P', 'srirahayu111', 'srirahayu111', '82154789644', 0),
(30, 'Agus Susanto', 'Ancaran', '29 Maret', 'L', 'agussusanto111', 'agussusanto111', '82187615643', 0),
(31, 'Anisa Setiawan', 'Ancaran', '8 Juni', 'P', 'anissetiawan111', 'anisasetiawan111', '8996578342', 0),
(32, 'Maya Sulistiani', 'Ancaran', '24 November', 'P', 'mayasulistiani111', 'mayasuliatiani111', '82154718734', 0),
(33, 'Heri Prasetyo', 'Linggarjati', '26 Juli', 'L', 'heriprasetyo111', 'heriprasetyo111', '89976915787', 0),
(34, 'Nina Kusuma', 'Linggarjari', '14 September', 'P', 'ninakusuma111', 'ninakusuma111', '89987291071', 0),
(35, 'Joko Wijaya', 'Cigandamekar', '31 Januari', 'L', 'jokowijaya111', 'jokowijaya111', '82145629865', 0),
(36, 'Dewi Setyowati', 'Cigandamekar', '4 April', 'P', 'dewisetyowati111', 'dewisetyowati111', '82176542891', 0),
(37, 'Surya Hermawan', 'Cigandamekar', '19 Desember', 'L', 'suryahermawan111', 'suryahermawan111', '89976532561', 0),
(38, 'Nita Wulandari', 'Cigandamekar', '27 November', 'P', 'nitawulandari111', 'nitawulandari111', '82145367811', 0),
(39, 'Heru Sutomo', 'Cigandamekar', '14 Maret', 'L', 'herusutomo111', 'herusutomo111', '89976421567', 0),
(40, 'Lusi Maulida', 'Cigandamekar', '25 September', 'P', 'lusimaulida111', 'lusimaulida111', '82154367186', 0),
(41, 'Rina rahmawati', 'Cikaso', '16 November', 'P', 'rinarahmawati111', 'rinarahmawati111', '82176534716', 0),
(42, 'Siti Sutisna', 'Cikaso', '25 Januari', 'P', 'sitisutisna111', 'sitisutisna111', '82154267185', 0),
(43, 'Toni Sutisna', 'Cikaso', '17 Desember', 'L', 'tonisutisna111', 'tonisutisna111', '82154367614', 0),
(45, 'Ahmad Susanto', 'Cikaso', '3 September', 'L', 'ahmadsusanto111', 'ahmadsusanto111', '89927365416', 0),
(46, 'Yani Wulandari', 'Cikaso', '4 April', 'P', 'yaniwulandari111', 'yaniwulandari111', '82176483916', 0),
(47, 'Arif Setiawan', 'Cibentang', '27 Desember', 'L', 'arifsetiawan111', 'arifsetiawan111', '89976482682', 0),
(48, 'Tuti Prasetyo', 'Cibentang', '24 Januari', 'P', 'tutiprasetyo111', 'tutiprasetyo111', '89926391074', 0),
(49, 'Yudi Pratama', 'Sukamukti', '14 September', 'L', 'yudipratama111', 'yudipratama111', '82163574820', 0),
(50, 'Nita Kusuma', 'Sukamukti', '16 Juli 1998', 'P', 'nitakusuma111', 'nitakusuma111', '89984372915', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisatawan`
--
ALTER TABLE `wisatawan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wisatawan`
--
ALTER TABLE `wisatawan`
  MODIFY `id_wisatawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
