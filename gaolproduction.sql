/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - gaolproduction
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gaolproduction` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `gaolproduction`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galeri_user_id_foreign` (`user_id`),
  CONSTRAINT `galeri_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galeri` */

insert  into `galeri`(`id`,`user_id`,`judul`,`tempat`,`tanggal`,`deskripsi`,`gambar`,`created_at`,`updated_at`) values 
(1,1,'Acara pernikahan Bule asal Amerika dengan wanita pribumi','Tarutung','2023-05-28','Acara pernikahan ini adalah bukti nyata bahwa cinta tidak mengenal batas budaya atau ras. Melalui pernikahan ini, terjalinlah persatuan dua keluarga dan pertukaran nilai-nilai budaya yang berharga. Keberagaman dihargai dan dirayakan, sementara kesatuan dan cinta menjadi fokus utama acara ini.','1.jpg','2023-06-09 11:59:07','2023-06-09 12:28:43'),
(2,1,'Acara ulang tahun dari anak bupati ini sangat meriah','Tarutung','2022-11-09','Acara ulang tahun anak bupati ini tidak hanya menjadi perayaan pribadi, tetapi juga menjadi perwujudan kebesaran dan kecintaan terhadap masyarakat. Pesta yang meriah ini memberikan kesempatan bagi anak bupati untuk merayakan ulang tahunnya dengan menginspirasi dan membawa kebahagiaan kepada banyak orang.','2.jpg','2023-06-09 12:03:15','2023-06-09 12:29:42'),
(3,1,'Acara konser dari artis ibukota yaitu judika sangat meriah','Tarutung','2022-08-10','Kemeriahan konser ini tercermin dalam kegembiraan dan antusiasme yang dirasakan oleh para penggemar. Semangat mereka memenuhi arena, menciptakan atmosfer yang magis dan tak terlupakan. Acara konser ini menjadi bukti betapa Judika adalah seorang entertainer yang mampu membangkitkan semangat dan menghibur orang-orang dengan bakatnya yang luar biasa.','3.jpeg','2023-06-09 12:03:50','2023-06-09 12:30:23'),
(4,1,'Acara GenderReveal dari keluarga Toluto ini sangat meriah dan viral','Tarutung','2023-06-07','Acara Gender Reveal yang diadakan oleh keluarga Toluto ini menjadi perbincangan hangat di berbagai platform media sosial. Acara tersebut tidak hanya meriah, tetapi juga berhasil memviralkan kebersamaan dan kegembiraan keluarga.','4.jpeg','2023-06-09 12:04:56','2023-06-09 12:31:46'),
(5,1,'Acara Naik sidi anak dari bupati tarutung sangat mewah','Tarutung','2023-05-28','Pesta Naik Sidi ini dihiasi dengan dekorasi yang anggun dan mewah. Aula tempat acara berlangsung dihiasi dengan kain-kain indah, hiasan bunga, serta elemen dekoratif lainnya yang menggambarkan kekayaan dan status keluarga Bupati. Nuansa kemewahan terlihat dari perpaduan warna-warna yang elegan dan desain yang memikat.','6.jpg','2023-06-09 12:05:32','2023-06-09 12:34:11'),
(6,1,'Acara pelantikan bupati baru Tapanuli Utara sangat ramai dan banyak pejabat','Tarutung','2023-03-16','Pelantikan ini adalah acara yang sangat ditunggu-tunggu oleh masyarakat Tapanuli Utara, karena bupati baru akan menjadi pemimpin mereka dalam mewujudkan perubahan dan kemajuan bagi daerah tersebut. Sebagai hasilnya, hadir banyak pejabat dari tingkat lokal, regional, bahkan mungkin juga nasional.','5.jpeg','2023-06-09 12:06:06','2023-06-09 12:33:03');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_03_23_071151_create_permission_tables',1),
(6,'2023_03_23_090014_create_galeris_table',1),
(7,'2023_03_23_091339_create_testimonis_table',1),
(8,'2023_03_23_091716_create_pembayarans_table',1),
(9,'2023_04_27_012132_create_table_produk',1),
(10,'2023_04_27_012333_create_pesanans_table',1),
(11,'2023_04_27_015723_create_table_pembelian',1),
(12,'2023_04_27_015816_create_pembelian_item_table',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\Models\\User',1),
(2,'App\\Models\\User',2),
(3,'App\\Models\\User',3);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `pembelian` */

DROP TABLE IF EXISTS `pembelian`;

CREATE TABLE `pembelian` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` double NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pembelian_order_number_unique` (`order_number`),
  KEY `pembelian_user_id_foreign` (`user_id`),
  CONSTRAINT `pembelian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pembelian` */

insert  into `pembelian`(`id`,`user_id`,`username`,`alamat`,`order_number`,`total_harga`,`tanggal_pembelian`,`no_telpon`,`bukti_pembayaran`,`status`,`created_at`,`updated_at`) values 
(37,3,'Putra Hutagalung','Gedung Serba Guna GKPI Pearaja','KA2094JL',6000000,'2023-06-16 00:00:00','082167157367','1686536570.jpg','Selesai','2023-06-12 02:22:29','2023-06-12 02:28:18'),
(38,3,'Frans Hutagalung','Jalan Tarutung-Sipaholon','715LRIVB',8000000,'2023-06-14 00:00:00','082263524317','1686536610.jpg','Selesai','2023-06-12 02:23:18','2023-06-12 02:28:27'),
(39,3,'Ray Siagian','Lapangan Hijau Tangsi','J1NG5I8E',1500000,'2023-06-16 00:00:00','082167157367','1686536671.jpg','Selesai','2023-06-12 02:24:21','2023-06-13 02:28:54'),
(40,3,'Suryanto Panjaitan','Gang Siamaung-maung Dolok, Gang Hutabagot','1M7TP740',5000000,'2023-06-16 00:00:00','082167157367','1686623243.jpg','Selesai','2023-06-13 02:26:49','2023-06-13 02:29:01');

/*Table structure for table `pembelian_item` */

DROP TABLE IF EXISTS `pembelian_item`;

CREATE TABLE `pembelian_item` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `produk_id` bigint(20) unsigned NOT NULL,
  `pembelian_id` bigint(20) unsigned NOT NULL,
  `jumlah` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembelian_item_produk_id_foreign` (`produk_id`),
  KEY `pembelian_item_pembelian_id_foreign` (`pembelian_id`),
  CONSTRAINT `pembelian_item_pembelian_id_foreign` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pembelian_item_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pembelian_item` */

insert  into `pembelian_item`(`id`,`produk_id`,`pembelian_id`,`jumlah`,`created_at`,`updated_at`) values 
(39,30,37,1,'2023-06-12 02:22:29','2023-06-12 02:22:29'),
(40,27,38,1,'2023-06-12 02:23:18','2023-06-12 02:23:18'),
(41,23,39,50,'2023-06-12 02:24:21','2023-06-12 02:24:21'),
(42,26,40,1,'2023-06-13 02:26:49','2023-06-13 02:26:49');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `total` double NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pesanan_order_number_unique` (`order_number`),
  KEY `pesanan_user_id_foreign` (`user_id`),
  KEY `pesanan_product_id_foreign` (`product_id`),
  CONSTRAINT `pesanan_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pesanan` */

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `produk` */

insert  into `produk`(`id`,`name`,`jenis`,`gambar`,`harga`,`deskripsi`,`created_at`,`updated_at`) values 
(14,'Paket Simplebay','Paket Musik','SIMPLEBAY.jpg',2500000,'Paket ini digunakan untuk talkshow, seminar, dan simple music performance. Paket terdiri dari Speakers Klarheit BC15 (2unit), Mixing Console Behringer Xenyx 1202 FX (1unit), Cable Microphone Shure SM 58 (3Unit), Wireless Microphone',NULL,NULL),
(15,'Paket Superbay','Paket Musik','SUPERBAY.jpg',4000000,'Paket Superbay sering dipesan oleh klien kami yang ingin menyelenggarakan acara-acara musik akustik, pertunjukan musik, pernikahan, ulang tahun, pesta, Gathering, acara kampus, dan acara pribadi lainnya. Paket terdiri dari Front Speakers Klarheit BC15 (2Unit), Mixing Console Yamaha MG20XU (1 Unit), Monitor Speaker Klarheit BC15 (2 Unit), Vocal Microphone Shure SM58 (5 Unit), Instrument MicShure SM57 (3Unit), Wireless Microphone Mipro ACT Wireless (2 unit), Direct Box Soundking Passive DI (4 Unit), Percussion (Standard Acoustic Cajon (1 unit)), Guitar Yamaha Acoustic Guitar (1 unit), Bass Standard Studio Bass (1 unit), Keyboard Standard Studio Keyboard (1 unit)',NULL,NULL),
(16,'Paket Megabay','Paket Musik','MEGABAY.jpg',3500000,'Paket MegaBay sering dipesan oleh klien kami yang ingin menyelenggarakan acara  Band Music Performance, Wedding, Gathering, School & Campus Event, Gathering, acara kampus, dan acara pribadi lainnya. Paket terdiri dari Monitor Speaker Klarheit BC15 (4 Unit), Vocal Microphone Shure SM58 (5Unit), Instrument Mic Shure SM57(4unit) Shure/AKg Drumfs, Microphone Set(1unit), Wireless Microphone Mipro ACT Wireless (2unit), Direct Box Behringer Ultra DI/GI (6unit), Drum Set Pearl Forum/Tama Imperialstar(1set) Cymbal Set(1set), Guitar Amps Peavey Bandit 12\"(2unit), Guitar Studio Electric Guitar(2unit), Bass Amps Laney 15\" Bass Amp(1unit), Bass Studio Electric Bass(1unit), Keyboard Amps Roland KC 350(1unit), Keyboard Standard Studio Keyboard(1unit)',NULL,NULL),
(17,'Paket Broadcast','Paket Musik','BROADCAST.jpg',3000000,'Paket ini dapat digunakan untuk mendukung kegiatan  live streaming  wedding, webinar, talkshow ataupun music performance. Paket terdiri dari PC/Laptop with OBS Software (1 unit), Video Capture Card (1 unit), Camera + Tripod (1 unit), Visual Cable&accesories (1 set), Greenscreen 3x4 meter',NULL,NULL),
(18,'Paket Lighting','Paket Musik','LIGHT.jpg',2000000,'Paket Sewa Lighting digunakan oleh Anda yang ingin menambahkan suasana lebih meriah di acaramu, cocok untuk segala jenis event baik indoor maupun outdoor. Paket terdiri dari Basic Light Par LED (8 unit), Effect Smoke Machine (1 unit), Mixer Light Controller (2 unit)',NULL,NULL),
(19,'Ayam Goreng','Paket Makanan','ayam goreng.jpg',25000,'Berisikan ayam, nasi putuh, sayur dan sambal',NULL,NULL),
(20,'Ayam Penyet','Paket Makanan','Ayam penyet.jpg',25000,'Berisikan ayam, sayur, sambal, dan nasi putih',NULL,NULL),
(21,'Ayam Gulai','Paket Makanan','Ayam gulai.jpg',25000,'Berisikan nasi putih, sayur, sambal, dan ayam',NULL,NULL),
(22,'Tuna Asam Manis','Paket Makanan','Tuna asam manis.jpg',35000,'Berisikan nasi putih, tuna, sayur, dan sambal',NULL,NULL),
(23,'Tongseng Ayam','Paket Makanan','Tongseng ayam.jpg',30000,'Berisikan nasi putih, tongseng ayam, sayur, dan sambal',NULL,NULL),
(24,'Paket Acara PromNight','Paket Acara','gambar 1.jpg',15000000,'Paket berisikan kursi, meja bundar, seperangkat alat makan untuk 500 orang, hiasan untuk dekorasi bernuansa putih mewah dan hidangan untuk 500 otang',NULL,NULL),
(25,'Paket Pernikahan A','Paket Acara','gambar 2.jpg',20000000,'Paket berisikan sound system full musik, dekorasi bernuansa mewah, hidangan untuk 500 orang',NULL,NULL),
(26,'Paket Birthday Party','Paket Acara','gambar 4.jpg',5000000,'Paket berisikan dekorasi full ballon, hidangan untuk 250 orang disertai bingkisan',NULL,NULL),
(27,'Paket Pernikahan B','Paket Acara','la2 (1).jpg',8000000,'Paket berisikan dekorasi untuk outdoor bernuansa putih, kursi sebanyak 500 buah, hidangan 500 porsi yang disertai dengan cemilan',NULL,NULL),
(28,'Paket Lamaran A','Paket Acara','la5 (1).jpeg',10000000,'Paket berisikan dekorasi nuansa putih, kuris 500 buah, dan hidangan untuk 400 orang',NULL,NULL),
(29,'Dekorasi Pernikahan A','Paket Dekorasi','la3 (1).png',10000000,'Paket berisikan dekorasi bernuansa camping',NULL,NULL),
(30,'Dekorasi Lamaran A','Paket Dekorasi','la5 (1).jpeg',6000000,'Dekorasi bernuansa simple dan elegan',NULL,NULL);

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'admin','web','2023-06-06 13:46:56','2023-06-06 13:46:56'),
(2,'kasir','web','2023-06-06 13:46:56','2023-06-06 13:46:56'),
(3,'user','web','2023-06-06 13:46:56','2023-06-06 13:46:56');

/*Table structure for table `testimoni` */

DROP TABLE IF EXISTS `testimoni`;

CREATE TABLE `testimoni` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `testimoni_user_id_foreign` (`user_id`),
  CONSTRAINT `testimoni_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `testimoni` */

insert  into `testimoni`(`id`,`user_id`,`deskripsi`,`created_at`,`updated_at`) values 
(1,3,'Saya sangat puas dengan jasa ketering yang diberikan oleh perusahaan ini. Makanan yang disajikan sangat lezat dan beragam, serta penyajiannya sangat rapi dan teratur. Tamu-tamu saya sangat terkesan dengan kualitas makanan yang disajikan.','2023-06-09 12:35:55','2023-06-09 12:35:55'),
(2,3,'Terima kasih kepada tim katering yang telah menyediakan hidangan yang luar biasa untuk acara kami. Tidak hanya rasa makanan yang istimewa, tetapi pelayanan mereka juga sangat profesional dan ramah. Kami pasti akan merekomendasikan jasa katering ini kepada teman-teman kami.','2023-06-09 12:36:11','2023-06-09 12:36:11'),
(3,3,'Acara pernikahan kami menjadi sangat sempurna berkat jasa katering ini. Makanan yang disajikan sangat enak dan menarik, serta dihidangkan dengan presentasi yang indah. Tamu-tamu kami memberikan pujian atas kualitas makanan dan pelayanan yang diberikan. Terima kasih banyak!','2023-06-09 12:36:22','2023-06-09 12:36:22'),
(4,3,'Saya sangat terkesan dengan jasa katering ini. Mereka tidak hanya menghadirkan hidangan yang lezat, tetapi juga memperhatikan detail kecil seperti kebersihan, penyajian, dan kenyamanan tamu. Saya benar-benar merasa tenang menyerahkan tugas katering pada mereka.','2023-06-09 12:36:33','2023-06-09 12:36:33'),
(5,3,'Makanan yang disediakan oleh jasa katering ini benar-benar luar biasa. Rasanya begitu autentik dan bahan-bahan yang digunakan sangat segar. Mereka juga sangat responsif terhadap permintaan khusus kami dan memastikan bahwa semua tamu kami puas dengan hidangan yang disajikan.','2023-06-09 12:36:44','2023-06-09 12:36:44'),
(6,3,'Saya ingin berterima kasih kepada tim katering yang telah memberikan pengalaman kuliner yang luar biasa pada acara kami. Makanan yang mereka sajikan benar-benar menggugah selera dan variasinya sangat beragam. Tidak ada yang bisa kami keluhkan tentang layanan mereka yang sangat profesional dan efisien.','2023-06-09 12:36:55','2023-06-09 12:36:55'),
(7,3,'Makanan yang disediakan oleh jasa katering ini benar-benar luar biasa. Rasanya begitu autentik dan bahan-bahan yang digunakan sangat segar. Mereka juga sangat responsif terhadap permintaan khusus kami dan memastikan bahwa semua tamu kami puas dengan hidangan yang disajikan.','2023-06-13 07:43:02','2023-06-13 07:43:02');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_nohp_unique` (`nohp`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`nohp`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Administrator','admin@gmail.com','12345678901234',NULL,'$2y$10$m.PtZl4sLGuDtBeJJwswbuJw5FSaenPOmIL9PY8ZOD6JxC1Bp.r/K',NULL,'2023-06-06 13:46:57','2023-06-06 13:46:57',NULL),
(2,'Kasir','kasir@gmail.com','12341234',NULL,'$2y$10$sx4/yrzLEAavWr0iBCddLuHncWI5Pi3ZIniMA.V5j/179G/MAarC2',NULL,'2023-06-06 13:46:57','2023-06-06 13:46:57',NULL),
(3,'User','user@gmail.com','1234512345',NULL,'$2y$10$U1JKM9RXAklRp71adrKb2ebBp.s3rdjwXZ9rJsE5KVN7GZuvidtgq',NULL,'2023-06-06 13:46:57','2023-06-06 13:46:57',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
