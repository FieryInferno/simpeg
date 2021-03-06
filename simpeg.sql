-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 03.55
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_pegawai` varchar(191) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `jumlah_hari` int(191) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `alamat_cuti` varchar(191) NOT NULL,
  `jenis_cuti` enum('cuti_tahunan','cuti_besar','cuti_sakit','cuti_bersalin','cuti_karena_alasan_penting') NOT NULL,
  `status_cuti` enum('0','1','2','3','4') NOT NULL,
  `surat_pengajuan` varchar(191) NOT NULL,
  `no_urut` int(191) DEFAULT NULL,
  `surat_izin` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_pegawai`, `tanggal_pengajuan`, `jumlah_hari`, `tanggal_mulai`, `tanggal_selesai`, `alamat_cuti`, `jenis_cuti`, `status_cuti`, `surat_pengajuan`, `no_urut`, `surat_izin`) VALUES
(5, '6', '2021-06-25', 5, '2021-06-25', '2021-06-30', 'sagalaherang', 'cuti_tahunan', '4', '60d5e48b83f47.pdf', 1, 'Surat_Edaran60d6009fb9e76.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kenaikan_jabatan_pilihan`
--

CREATE TABLE `kenaikan_jabatan_pilihan` (
  `id_jabatan_pilihan` int(11) NOT NULL,
  `id_pegawai` int(100) NOT NULL,
  `pangkat_diajukan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kenaikan_jabatan_pilihan`
--

INSERT INTO `kenaikan_jabatan_pilihan` (`id_jabatan_pilihan`, `id_pegawai`, `pangkat_diajukan`) VALUES
(1, 2, 'lkhg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kenaikan_jabatan_reguler`
--

CREATE TABLE `kenaikan_jabatan_reguler` (
  `id_pangkat_reguler` int(11) NOT NULL,
  `id_pegawai` int(100) NOT NULL,
  `pangkat_diajukan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kenaikan_jabatan_reguler`
--

INSERT INTO `kenaikan_jabatan_reguler` (`id_pangkat_reguler`, `id_pegawai`, `pangkat_diajukan`) VALUES
(1, 1, 'asdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `nama_lengkap` varchar(191) NOT NULL,
  `nip` varchar(191) NOT NULL,
  `nip_lama` varchar(191) DEFAULT NULL,
  `tempat_lahir` varchar(191) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(191) DEFAULT NULL,
  `agama` varchar(191) DEFAULT NULL,
  `status_perkawinan` varchar(191) DEFAULT NULL,
  `suku_bangsa` varchar(191) DEFAULT NULL,
  `golongan_darah` varchar(191) DEFAULT NULL,
  `jalan` varchar(191) DEFAULT NULL,
  `rt/rw` varchar(191) DEFAULT NULL,
  `desa` varchar(191) DEFAULT NULL,
  `kecamatan` varchar(191) DEFAULT NULL,
  `kabupaten` varchar(191) DEFAULT NULL,
  `provinsi` varchar(191) DEFAULT NULL,
  `no_telp` varchar(191) DEFAULT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `no_karpeg` varchar(191) DEFAULT NULL,
  `no_karis` varchar(191) DEFAULT NULL,
  `no_ktp` varchar(191) DEFAULT NULL,
  `no_peserta_askes` varchar(191) DEFAULT NULL,
  `no_peserta_taspen` varchar(191) DEFAULT NULL,
  `npwp` varchar(191) DEFAULT NULL,
  `status` enum('belum','sudah') NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `id_user` varchar(191) NOT NULL,
  `bagian` varchar(191) DEFAULT NULL,
  `pangkat_golongan` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `email`, `nama_lengkap`, `nip`, `nip_lama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `suku_bangsa`, `golongan_darah`, `jalan`, `rt/rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `no_telp`, `foto`, `no_karpeg`, `no_karis`, `no_ktp`, `no_peserta_askes`, `no_peserta_taspen`, `npwp`, `status`, `bidang`, `id_user`, `bagian`, `pangkat_golongan`) VALUES
(1, 'bagassetia271@gmail.com', 'M. Bagas Setia', '10104019', '-', 'Bandung', '1998-11-26', 'laki-laki', 'islam', 'menikah', 'sunda', 'A', 'Kp. Pasir Gombong', '15/07', 'Sukamandi', 'Sagalaherang', 'Subang', 'Jawa Barat', '085723853284', 'ANTM5.png', '123', '123', '1', '123', '123', '123', 'sudah', 'pendanaan_dan_pemerintahan', '2', NULL, 'Juru Tingkat I/I/d'),
(2, 'malbinuriman21@gmail.com', 'M. Albi Nur\'Iman', '12345678', '-', 'Subang', '2000-02-10', 'laki-laki', 'islam', 'menikah', 'sunda', 'A', 'Jalan Jalan', '01/02', 'Soklat', 'Subang', 'Subang', 'Jawa Barat', '082111623434', 'logo_bpn.png', '-', '-', '-', '-', '-', '-', 'sudah', 'pendanaan_dan_pemerintahan', '6', NULL, 'Juru/I/c'),
(3, 'angginoah06@gmail.com', 'Rizki', '12345678910', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sudah', 'pendanaan_dan_pemerintahan', '606a0250b3a98', NULL, 'Juru Muda Tingkat I/I/b'),
(11, 'bagassetia271@gmail.com', 'M. Bagas Setia', '321301261190001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'belum', 'penelitian_dan_pengembangan', '60cb3dea2766f', 'umum_dan_kepegawaian', 'Juru Muda/I/a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pindah`
--

CREATE TABLE `pengajuan_pindah` (
  `id_pengajuan_pindah` int(11) NOT NULL,
  `id_user` varchar(191) NOT NULL,
  `sk_cpns` varchar(191) NOT NULL,
  `sk_pangkat` varchar(191) NOT NULL,
  `kartu_pegawai` varchar(191) NOT NULL,
  `penilaian_kerja` varchar(191) NOT NULL,
  `surat_permohonan` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_pindah`
--

INSERT INTO `pengajuan_pindah` (`id_pengajuan_pindah`, `id_user`, `sk_cpns`, `sk_pangkat`, `kartu_pegawai`, `penilaian_kerja`, `surat_permohonan`) VALUES
(3, '6', 'logo_bpn.png', 'logo_bpn1.png', 'logo_bpn2.png', 'logo_bpn3.png', '60cb7f2571ae9.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','kepala_bp4d','kasubid','pegawai','kasubag','sekretaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `level`) VALUES
(1, 'adminsimpeg@gmail.com', '12345678', 'admin'),
(6, 'malbinuriman21@gmail.com', 'polongo', 'pegawai'),
(7, 'kepalabp4d@gmail.com', '12345678', 'kepala_bp4d'),
(60, '', '', 'pegawai'),
(61, 'kasubag@gmail.com', '12345678', 'kasubag'),
(62, 'sekretaris@gmail.com', '12345678', 'sekretaris');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `kenaikan_jabatan_pilihan`
--
ALTER TABLE `kenaikan_jabatan_pilihan`
  ADD PRIMARY KEY (`id_jabatan_pilihan`);

--
-- Indeks untuk tabel `kenaikan_jabatan_reguler`
--
ALTER TABLE `kenaikan_jabatan_reguler`
  ADD PRIMARY KEY (`id_pangkat_reguler`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pengajuan_pindah`
--
ALTER TABLE `pengajuan_pindah`
  ADD PRIMARY KEY (`id_pengajuan_pindah`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kenaikan_jabatan_pilihan`
--
ALTER TABLE `kenaikan_jabatan_pilihan`
  MODIFY `id_jabatan_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kenaikan_jabatan_reguler`
--
ALTER TABLE `kenaikan_jabatan_reguler`
  MODIFY `id_pangkat_reguler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_pindah`
--
ALTER TABLE `pengajuan_pindah`
  MODIFY `id_pengajuan_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
