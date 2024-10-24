-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Okt 2024 pada 05.16
-- Versi server: 10.11.8-MariaDB-0ubuntu0.23.10.1
-- Versi PHP: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: prakweb
--

-- --------------------------------------------------------

--
-- Struktur dari tabel cache
--

CREATE TABLE cache (
  key varchar(255) NOT NULL,
  value mediumtext NOT NULL,
  expiration int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel cache_locks
--

CREATE TABLE cache_locks (
  key varchar(255) NOT NULL,
  owner varchar(255) NOT NULL,
  expiration int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel failed_jobs
--

CREATE TABLE failed_jobs (
  id bigint(20) UNSIGNED NOT NULL,
  uuid varchar(255) NOT NULL,
  connection text NOT NULL,
  queue text NOT NULL,
  payload longtext NOT NULL,
  exception longtext NOT NULL,
  failed_at timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel fakultas
--

CREATE TABLE fakultas (
  id bigint(20) UNSIGNED NOT NULL,
  nama_fakultas varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel fakultas
--

INSERT INTO fakultas (id, nama_fakultas, created_at, updated_at) VALUES
(1, 'FMIPA', NULL, NULL),
(2, 'FKIP', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel jobs
--

CREATE TABLE jobs (
  id bigint(20) UNSIGNED NOT NULL,
  queue varchar(255) NOT NULL,
  payload longtext NOT NULL,
  attempts tinyint(3) UNSIGNED NOT NULL,
  reserved_at int(10) UNSIGNED DEFAULT NULL,
  available_at int(10) UNSIGNED NOT NULL,
  created_at int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel job_batches
--

CREATE TABLE job_batches (
  id varchar(255) NOT NULL,
  name varchar(255) NOT NULL,
  total_jobs int(11) NOT NULL,
  pending_jobs int(11) NOT NULL,
  failed_jobs int(11) NOT NULL,
  failed_job_ids longtext NOT NULL,
  options mediumtext DEFAULT NULL,
  cancelled_at int(11) DEFAULT NULL,
  created_at int(11) NOT NULL,
  finished_at int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel kelas
--

CREATE TABLE kelas (
  id bigint(20) UNSIGNED NOT NULL,
  nama_kelas varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel kelas
--

INSERT INTO kelas (id, nama_kelas, created_at, updated_at) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel migrations
--

CREATE TABLE migrations (
  id int(10) UNSIGNED NOT NULL,
  migration varchar(255) NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel migrations
--

INSERT INTO migrations (id, migration, batch) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_28_080316_create_kelas_table', 1),
(5, '2024_08_28_040625_create_table_fakultas', 2),
(6, '2024_09_28_080621_create_user_table', 3),
(7, '2024_09_28_081629_add_foto_to_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel password_reset_tokens
--

CREATE TABLE password_reset_tokens (
  email varchar(255) NOT NULL,
  token varchar(255) NOT NULL,
  created_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel sessions
--

CREATE TABLE sessions (
  id varchar(255) NOT NULL,
  user_id bigint(20) UNSIGNED DEFAULT NULL,
  ip_address varchar(45) DEFAULT NULL,
  user_agent text DEFAULT NULL,
  payload longtext NOT NULL,
  last_activity int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel sessions
--

INSERT INTO sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES
('1OO7D3xLYl5incmGzug5izPfk93MnwHm8GeLXNno', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUk9YbXJHeGlFM21hZEJYQ1dvQ3J1UjJ3dGJtQklUYVhvNHg1c1FRdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1729744086),
('3e4urH8cKXukcaWjv6nYbO98JMSEsnpGTD8Sh8Yd', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVJRcHhyWlRHczg5MkJkc0N0NUVhb2ZxUHV2cldaY3FEOWF2Y08ybyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9wcm9maWxlL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1729744401),
('6kAZlIdSVLZghCFWN5mfXOQTxYMylo8BdX2ChA3i', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczBFaHdZVlJTeUp3eTlZOTNJQm41RjZVTE9iYlZoZWVLSmlEUjBndyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9wcm9maWxlLzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1729746483),
('H6cKtv8hBTH8yAV4SpqZGdghwnX0lBVtCcmPuUrP', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFZqQllXa09WRzZjOHZVZXVtWU9XSEFwUGVWNW9YT2ZTd0Jqem5lQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1729746279),
('hd7LgOMZS8RaY6ZVAvWZIV6PhIG7dbjPirVx0xlk', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTVsY2lVS3BYWE1hSDlpb2k4TTlLMkphb0xJbjFqOW1jajFDYnlKNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9wcm9maWxlLzIvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1729744863);

-- --------------------------------------------------------

--
-- Struktur dari tabel user
--

CREATE TABLE user (
  id bigint(20) UNSIGNED NOT NULL,
  nama varchar(255) NOT NULL,
  jurusan enum('fisika','kimia','biologi','matematika','ilmu komputer') NOT NULL,
  semester int(10) UNSIGNED NOT NULL DEFAULT 1,
  kelas_id bigint(20) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  fakultas_id bigint(20) UNSIGNED NOT NULL,
  foto varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel user
--

INSERT INTO user (id, nama, jurusan, semester, kelas_id, created_at, updated_at, fakultas_id, foto) VALUES
(3, 'database', 'biologi', 2, 1, '2024-10-23 22:03:47', '2024-10-23 22:06:55', 1, 'GAnEaIAX9BMH2hSOo1Ca2V4TzievBQ3cqa1Lx3mD.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel users
--

CREATE TABLE users (
  id bigint(20) UNSIGNED NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  email_verified_at timestamp NULL DEFAULT NULL,
  password varchar(255) NOT NULL,
  remember_token varchar(100) DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel cache
--
ALTER TABLE cache
  ADD PRIMARY KEY (key);

--
-- Indeks untuk tabel cache_locks
--
ALTER TABLE cache_locks
  ADD PRIMARY KEY (key);

--
-- Indeks untuk tabel failed_jobs
--
ALTER TABLE failed_jobs
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY failed_jobs_uuid_unique (uuid);

--
-- Indeks untuk tabel fakultas
--
ALTER TABLE fakultas
  ADD PRIMARY KEY (id);

--
-- Indeks untuk tabel jobs
--
ALTER TABLE jobs
  ADD PRIMARY KEY (id),
  ADD KEY jobs_queue_index (queue);

--
-- Indeks untuk tabel job_batches
--
ALTER TABLE job_batches
  ADD PRIMARY KEY (id);

--
-- Indeks untuk tabel kelas
--
ALTER TABLE kelas
  ADD PRIMARY KEY (id);

--
-- Indeks untuk tabel migrations
--
ALTER TABLE migrations
  ADD PRIMARY KEY (id);

--
-- Indeks untuk tabel password_reset_tokens
--
ALTER TABLE password_reset_tokens
  ADD PRIMARY KEY (email);

--
-- Indeks untuk tabel sessions
--
ALTER TABLE sessions
  ADD PRIMARY KEY (id),
  ADD KEY sessions_user_id_index (user_id),
  ADD KEY sessions_last_activity_index (last_activity);

--
-- Indeks untuk tabel user
--
ALTER TABLE user
  ADD PRIMARY KEY (id),
  ADD KEY user_kelas_id_foreign (kelas_id);

--
-- Indeks untuk tabel users
--
ALTER TABLE users
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY users_email_unique (email);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel failed_jobs
--
ALTER TABLE failed_jobs
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel fakultas
--
ALTER TABLE fakultas
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel jobs
--
ALTER TABLE jobs
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel kelas
--
ALTER TABLE kelas
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel migrations
--
ALTER TABLE migrations
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel user
--
ALTER TABLE user
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel users
--
ALTER TABLE users
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel user
--
ALTER TABLE user
  ADD CONSTRAINT user_kelas_id_foreign FOREIGN KEY (kelas_id) REFERENCES kelas (id);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;