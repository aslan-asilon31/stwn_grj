/*
 Navicat Premium Data Transfer

 Source Server         : AslanAsilon
 Source Server Type    : MySQL
 Source Server Version : 80403 (8.4.3)
 Source Host           : localhost:3306
 Source Schema         : stwn_gereja

 Target Server Type    : MySQL
 Target Server Version : 80403 (8.4.3)
 File Encoding         : 65001

 Date: 17/07/2025 06:52:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_baptis
-- ----------------------------
DROP TABLE IF EXISTS `tbl_baptis`;
CREATE TABLE `tbl_baptis`  (
  `id_baptis` int NOT NULL AUTO_INCREMENT,
  `hari_tanggal` datetime NULL DEFAULT NULL,
  `waktu` time NULL DEFAULT NULL,
  `tempat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dilayani` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ttl` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamatnya` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `nama_ayah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `baptis_sidi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saksi1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `saksi2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sumbangan` double NULL DEFAULT NULL,
  `lampiran_akte` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lampiran_nikah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lampiran_sidi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lain_lain` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `id_jemaat` int NOT NULL,
  PRIMARY KEY (`id_baptis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_baptis
-- ----------------------------
INSERT INTO `tbl_baptis` VALUES (1, '2025-07-16 20:07:41', '20:07:45', 'indonesia', '-', '-', '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);
INSERT INTO `tbl_baptis` VALUES (2, '2025-07-16 00:00:00', '12:00:00', '-', '-', '-', 'Pria', 'bandung', '-', '-', '-', '--', '-', '-', '-', 10, 'upload/akte_1752671532.jpg', 'upload/nikah_1752671532.jpg', 'upload/sidi_1752671532.jpg', 'hvjhv', 1);
INSERT INTO `tbl_baptis` VALUES (3, '2025-07-17 00:00:00', '12:00:00', 'bekasi', 'admin', 'admin1', 'Pria', 'bekasi', 'bekasi', 'admin2', 'admin3', '-', '0487503845', 'admin4', 'admin5', 500000, 'upload/akte_1752671665.jpg', 'upload/nikah_1752671665.jpg', 'upload/sidi_1752671665.jpg', '-', 1);

-- ----------------------------
-- Table structure for tbl_blog
-- ----------------------------
DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE `tbl_blog`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_posting` date NULL DEFAULT NULL,
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 63 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_blog
-- ----------------------------
INSERT INTO `tbl_blog` VALUES (58, 'Firman', 'Gereja Sebagai Rumah Rohani (1 Petrus 2:4-8)', '<p style=\"text-align:justify\">Gereja &ndash; dalam arti&rdquo;kumpulan orang percaya&rdquo; - digambarkan melalui beragam metafora. Tiap metafora mengandung aspek-aspek tertentu yang khas dan ingin disampaikan oleh penulisnya. Salah satu metafora itu adalah gereja sebagai bangunan rohani (1 Kor 3:10-16; Ef 2:19-22; 1 Pet 2:4-8). Dalam metafora ini aspek komunal (kebersamaan) dari setiap orang percaya sangat ditekankan. Sama seperti sebuah bangunan dibuat dari banyak batu dan bahan lain, demikian pula bangunan rohani hanya dapat berdiri apabila ada keterkaitan antar bagiannya.</p>\r\n\r\n<p style=\"text-align:justify\">Walaupun metafora sebagai bangunan rohani disinggung di beberapa bagian Alkitab, dalam khotbah minggu ini kita akan berfokus pada tulisan Petrus saja. Ada tiga pertanyaan yang akan kita jawab melalui khotbah hari ini.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Bagaimana kita dapat menjadi bangunan rohani?</h3>\r\n\r\n<p style=\"text-align:justify\">Sebuah bangunan tidak tercipta dalam sekejap. Tidak ada bangunan yang tercipta secara kebetulan. Pendirian sebuah bangunan membutuhkan sebuah proses. Bagaimana dengan gereja sebagai bangunan rohani?</p>\r\n\r\n<p style=\"text-align:justify\">Pertama, rumah rohani melibatkan orang-orang yang sudah bertobat (ayat 5). Di ayat 5 Petrus menyebut penerima suratnya sebagai &ldquo;batu-batu hidup&rdquo;. Secara hurufiah ayat ini berbunyi &ldquo;kalian sendiri seperti batu-batu hidup sedang dibangun sebagai sebuah bangunan rohani&rdquo;. Jadi, tidak semua batu cocok untuk pembangunan rumah rohani. Hanya batu-batu yang hidup saja yang pantas dipergunakan.</p>\r\n\r\n<p style=\"text-align:justify\">Aspek pertobatan ini juga selaras dengan keseluruhan konteks 2:1-10. Penerima surat sudah menjadi bayi-bayi rohani di dalam Kristus (2:2). Mereka sudah mengecap kebaikan Tuhan (2:3). Mereka dibedakan dari orang-orang lain yang tidak percaya (2:7) dan tidak taat kepada firman Allah (2:8). Mereka memiliki identitas baru sebagai umat Allah (2:9-10).</p>\r\n\r\n<p style=\"text-align:justify\">Penjelasan di atas mengajarkan bahwa tidak semua orang yang rajin ke gereja secara otomatis akan menjadi bagian dari rumah rohani. Tanpa pertobatan yang sungguh kepada Yesus Kristus sebagai Tuhan dan Juruselamat, seseorang tidak akan berguna bagi rumah rohani. Dengan kata lain, Petrus ingin menunjukkan bahwa pembangunan secara komunal (bersama) harus dimulai dari pertumbuhan secara individual (pertobatan dan keinginan untuk bertumbuh).</p>\r\n\r\n<p style=\"text-align:justify\">Kedua, rumah rohani membutuhkan orang-orang yang mau datang kepada Kristus (ayat 4a). Proses ini akan terlihat jelas apabila kita memperhatikan kalimat Yunani yang digunakan Petrus dalam bagian ini. Ayat 4 dan 5 sebenarnya terdiri dari satu kalimat saja, dengan induk kalimat terdapat pada ayat 5. Sesuai kalimat Yunaninya, dua ayat ini berbunyi &ldquo;tatkala kalian datang kepada-Nya&hellip;(ayat 4), kamu sedang dibangun sebagai sebuah rumah rohani&hellip;(ayat 5). Jadi, proses pembangunan sedang terjadi pada saat orang-orang datang kepada Kristus.</p>\r\n\r\n<p style=\"text-align:justify\">Datang kepada Kristus di sini tidak boleh diartikan sebagai pertobatan, seolah-olah Petrus sedang menasihati orang-orang non-Kristen untuk datang kepada Kristus. Petrus sedang berbicara kepada orang-orang yang sudah bertobat. Jadi, apakah maksud &ldquo;datang kepada Kristus&rdquo; di ayat 5?</p>\r\n\r\n<p style=\"text-align:justify\">Sesuai dengan konteks yang ada, kita seyogyanya menafsirkan ini sebagai kerinduan yang besar terhadap kebernilaian Kristus dalam kehidupan kita. Sama seperti bayi yang selalu membutuhkan dan menginginkan air susu (ayat 2), demikian pula kita harus menginginkan Kristus (2:4a). Kita menginginkan Dia karena Kristus sangat berharga. Dari-Nya kita mengecap kebaikan demi kebaikan (2:3). Dia adalah batu pilihan dan batu yang berharga di mata Allah (2:4; bdk. mayoritas versi Inggris). Bagi kita pun Dia begitu bernilai (2:7). Kita hanya bisa menjadi batu-batu yang hidup (2:5) apabila kita terus-menerus datang kepada Batu Hidup dan Yang Menghidupkan (2:4), yaitu Yesus Kristus.</p>\r\n\r\n<p style=\"text-align:justify\">Lagipula, sebuah rumah sangat bergantung pada batu penjuru, dan batu penjuru itu adalah Kristus (2:6-7). Sebuah batu penjuru (lithos akrogÅniaios, 2:6) merupakan kepala dari sudut rumah (kephalÄ“ gÅnia, 2:7; lihat KJV/ASV/RSV/NRSV &ldquo;the [very] head of the corner&rdquo;). Jadi, Kristus bukan sembarang batu. Tidak peduli berapa banyak batu yang digunakan untuk membangun sebuah rumah, tanpa batu penjuru semua batu lain akan menjadi percuma. Betapa penting dan berharganya Kristus bagi kita! Karena itu, sudah sepantasnya kalau kita mengharapkan Dia dengan penuh hasrat.</p>\r\n\r\n<p style=\"text-align:justify\">Kerinduan yang sama diekspresikan oleh pemazmur kepada Allah. Dia berkata: &ldquo;Betapa berharganya kasih setia-Mu, ya Allah! Anak-anak manusia berlindung dalam naungan sayap-Mu. Mereka mengenyangkan dirinya dengan lemak di rumah-Mu; Engkau memberi mereka minum dari sungai kesenangan-Mu&rdquo; (Mzm 36:8-9). Apakah kita benar-benar menyadari kebernilaian Kristus bagi kita? Jika benar, kita pasti akan memiliki kerinduan yang besar untuk selalu datang kepada-Nya: menikmati dan mengagumi Dia setiap waktu.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Apa fungsi dari rumah rohani?</h3>\r\n\r\n<p style=\"text-align:justify\">Petrus tidak hanya menyebut gereja sebagai rumah, tetapi rumah rohani (ayat 5). Dalam kaitan dengan sebuah metafora, penambahan kata &ldquo;rohani&rdquo; tampaknya tidak terlalu diperlukan. Ini hanya sebuah metafora, sehingga rumah yang dimaksud jelas bukan secara hurufiah. Rumah itu pasti secara simbolis.</p>\r\n\r\n<p style=\"text-align:justify\">Walaupun demikian, Petrus tetap menambahkan kata &ldquo;rohani&rdquo; (pneumatikos). Alasan pertama adalah untuk penekanan. Alasan kedua adalah untuk membangun paralelisme antara &ldquo;rumah rohani&rdquo; (oikos pneumatikos) dengan &ldquo;persembahan rohani&rdquo; (pneumatikas thusias). Sebuah gereja bukan hanya perkumpulan biasa dengan aktivitas yang biasa. Gereja adalah perkumpulan rohani dengan aktivitas yang rohani pula.</p>\r\n\r\n<p style=\"text-align:justify\">Sebagai rumah rohani yang di dalamnya Roh Allah berdiam secara khusus (1 Kor 3:16; Ef 2:21-22), gereja memainkan dua fungsi yang saling berkaitan erat (ayat 5). Dua fungsi ini dalam teks Yunani dinyatakan melalui kata depan eis (eis hierateuma hagion, lit. &ldquo;untuk menjadi sebuah imamat yang kudus&rdquo;) dan kata kerja infinitif anenenkai (anenenkai pneumatikas thusias euprosdektous tÅ theÅ dia IÄ“sou Christou, lit. &ldquo;untuk mempersembahkan korban rohani yang berkenan kepada Allah melalui Yesus Kristus&rdquo;).</p>\r\n\r\n<p style=\"text-align:justify\">Gereja menjadi imamat yang kudus. Metafora rumah rohani bisa menimbulkan kesan bahwa orang-orang Kristen secara pasif dijadikan bahan bangunan. Kesan ini ternyata keliru. Orang-orang yang percaya kepada Kristus tidak hanya disamakan dengan bait Allah, melainkan juga dengan para imam yang melayani di dalamnya (lihat juga 2:9). Jadi, keterlibatan orang-orang Kristen dalam pembangunan rumah rohani bersifat aktif.</p>\r\n\r\n<p style=\"text-align:justify\">Gereja mempersembahkan korban rohani bagi Allah melalui Yesus Kristus. Sebagaimana para imam di dalam bait Allah selalu memberikan beragam korban kepada Allah, demikian pula gereja Tuhan sebagai imamat yang kudus. Kita harus selalu mempersembahkan korban yang berkenan di hadapan Allah, bukan sembarang korban. Korban yang menyenangkan hati Allah tidak dapat dipisahkan dari Kristus (&ldquo;melalui Yesus Kristus&rdquo;). Gereja yang tidak Kristosentris tidak mungkin menyenangkan Allah.</p>\r\n\r\n<p style=\"text-align:justify\">Apa saja yang termasuk korban yang memperkenankan hati Allah? Di bagian lain Alkitab disebutkan tiga contoh dari korban semacam ini. Korban rohani adalah persembahan tubuh kepada Allah sebagai persembahan yang hidup, kudus, dan berkenan kepada Allah (Rom 12:1). Korban rohani juga bisa berupa ucapan bibir yang memuji dan memuliakan Allah (Ibr 13:15 &ldquo;Sebab itu marilah kita, oleh Dia, senantiasa mempersembahkan korban syukur kepada Allah, yaitu ucapan bibir yang memuliakan nama-Nya&rdquo;). Tindakan kasih dan keterlibatan dalam pelayanan juga merupakan persembahan yang disukai Allah. Paulus menyebut bantuan dari jemaat Filipi sebagai &ldquo;suatu persembahan yang harum, suatu korban yang disukai dan yang berkenan kepada Allah&rdquo; (Flp 4:18). Penulis Surat Ibrani memberikan nasihat untuk terus melakukan kebaikan dengan alasan: &ldquo;sebab korban-korban yang demikianlah yang berkenan kepada Allah&rdquo; (Ibr 13:16). &nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Apa jaminannya?</h3>\r\n\r\n<p style=\"text-align:justify\">Sebuah bangunan pasti melibatkan perencanaan. Tanpa rencana yang baik pembangunan akan menghadapi berbagai kendala. Kemunculan berbagai faktor X yang tidak diperkirakan sebelumnya akan menghambar proses pembangunan. Puji Tuhan, dalam pembangunan rumah rohani tidak ada sesuatu pun yang mengagetkan. Tidak ada faktor X dalam rencana ilahi. TUHAN sudah merencanakan semuanya secara tepat dan indah.</p>\r\n\r\n<p style=\"text-align:justify\">Ide di atas dinyatakan Petrus melalui dua cara. Pertama, pengutipan beberapa nubuat dari kitab suci (ayat 6-7; kutipan dari Mzm 117:22; Yes 8:14; 28:16). Kedua, keterangan tentang ketetapan ilahi (ayat 8 &ldquo;untuk itu mereka juga telah disediakan&rdquo;). Kedua cara ini dikaitkan dengan penolakan bangsa Israel terhadap Kristus (bdk. Mar 12:10//Mat 21:42//Luk 20:17; Kis 4:11). Apakah penolakan itu berarti kegagalan bagi Allah? Sama sekali tidak! Penolakan itu sudah dinyatakan (ayat 6-7) dalam kitab suci dan direncanakan (ayat 8) sebelumnya oleh Allah. Tidak ada suatu pun yang mengagetkan Allah.</p>\r\n', '2018-09-25', 'Admin', 'Aktif', '');
INSERT INTO `tbl_blog` VALUES (62, 'news', 'Minggu Kasih, Polisi Amankan Gereja', '<p>NEGARA, NusaBali - Aparat kepolisian dari Polsek Pekutatan dan Polsek Kawasan Pelabuhan (KP) Gilimanuk serentak melakukan tatap muka sekaligus pengamanan ibadah gereja serangkaian Minggu Kasih, Minggu (22/6). Inisiatif ini tidak hanya memastikan kelancaran ibadah melainkan juga menjadi cerminan nyata toleransi dan pelayanan Polri di tengah masyarakat Jembrana.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di Pekutatan, personel Polsek Pekutatan melaksanakan pengamanan di Gereja Katolik Santa Maria Ratu Gumbrih, Banjar Pasar, Desa Gumbrih. Pengamanan yang dipimpin Perwira Pengawas (Pawas) Iptu I Nyoman Bagia bersama tiga personel lainnya ini bertujuan memberikan rasa aman dan nyaman bagi jemaat. &quot;Kami ingin memastikan kegiatan persembahyangan berjalan lancar, aman, dan tertib,&quot; ujar Iptu Bagia.&nbsp;</p>\r\n\r\n<p><ins><iframe frameborder=\"0\" height=\"0\" id=\"aswift_5\" name=\"aswift_5\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-6454044497590142&amp;output=html&amp;h=280&amp;adk=628181520&amp;adf=76989902&amp;pi=t.aa~a.2494685855~i.4~rp.4&amp;w=623&amp;abgtt=9&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1750664254&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=3021301669&amp;ad_type=text_image&amp;format=623x280&amp;url=https%3A%2F%2Fwww.nusabali.com%2Fberita%2F195287%2Fminggu-kasih-polisi-amankan-gereja&amp;fwr=0&amp;pra=3&amp;rh=156&amp;rw=622&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiNC4wLjAiLCJ4ODYiLCIiLCIxMzcuMC43MTUxLjEyMCIsbnVsbCwwLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTM3LjAuNzE1MS4xMjAiXSxbIkNocm9taXVtIiwiMTM3LjAuNzE1MS4xMjAiXSxbIk5vdC9BKUJyYW5kIiwiMjQuMC4wLjAiXV0sMF0.&amp;dt=1750661714949&amp;bpp=1&amp;bdt=107024&amp;idt=1&amp;shv=r20250617&amp;mjsv=m202506170101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D7106d1c100378f96%3AT%3D1750661715%3ART%3D1750661715%3AS%3DALNI_MZtsf3NuanhIK57N1_4nPIqYL-Xtw&amp;gpic=UID%3D00001137d68e0cf5%3AT%3D1750661715%3ART%3D1750661715%3AS%3DALNI_MbQx12oXLDZoNsY8VDaZP_XKmD3fg&amp;eo_id_str=ID%3Dfc794726f0b1155a%3AT%3D1750661715%3ART%3D1750661715%3AS%3DAA-Afja9OOECmZfhZmjSdpqKlQS1&amp;prev_fmts=0x0%2C1200x280%2C300x250&amp;nras=2&amp;correlator=4642985984712&amp;frm=20&amp;pv=1&amp;u_tz=420&amp;u_his=4&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=308&amp;ady=1292&amp;biw=1351&amp;bih=641&amp;scr_x=0&amp;scr_y=0&amp;eid=31084128%2C42532524%2C95353386%2C95362656%2C95363435%2C95364339%2C95364385%2C95359265%2C95364334%2C95364391&amp;oid=2&amp;pvsid=1683982309165261&amp;tmod=419805646&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C641&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=1152&amp;bc=31&amp;bz=0&amp;td=1&amp;tdf=2&amp;psd=W251bGwsbnVsbCxudWxsLDFd&amp;nt=1&amp;ifi=6&amp;uci=a!6&amp;btvi=1&amp;fsb=1&amp;dtd=M\" title=\"Advertisement\" width=\"623\"></iframe></ins></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Iptu Bagia mewakili Kapolsek Pekutatan mengatakan, Polsek Pekutatan berkomitmen terus hadir dalam berbagai kegiatan keagamaan guna menjaga harmoni dan ketertiban. &quot;Kehadiran kami di tengah jemaat juga sebagai wujud pelayanan Polri dalam menjaga keamanan, termasuk di tempat ibadah. Selama ibadah berlangsung, situasi terpantau aman dan kondusif,&quot; ucap Iptu Bagia.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara itu, Polsek KP Gilimanuk juga melaksanakan hal serupa di Gereja Kristen Protestan di Bali (GKPB) Gilimanuk. Panit Lantas Polsek KP Gilimanuk, Iptu Nyoman Gede Sedana, mewakili Kapolsek, hadir menyampaikan pesan-pesan tentang keamanan dan ketertiban masyarakat (Kamtibmas) kepada Pendeta Trifena Wati dan sekitar 10 jemaat GKPB Gilimanuk.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam kesempatan tersebut, Iptu Sedana menyampaikan ucapan terima kasih atas sambutan hangat serta mengapresiasi hubungan baik yang telah terjalin antara umat Kristiani dengan Kepolisian. Ia pun menekankan pentingnya membangun komunikasi terbuka antara pihak gereja dan Polsek KP Gilimanuk, khususnya dalam pelaksanaan kebaktian rutin ataupun perayaan keagamaan, untuk menjamin keamanan dan kelancaran lalu lintas mengingat lokasi gereja berada di tepi jalan utama Denpasar-Gilimanuk.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Usai kegiatan tatap muka, personel Polsek KP Gilimanuk langsung melaksanakan pengamanan serta pengaturan arus lalu lintas dan membantu penyeberangan jemaat yang selesai beribadah. Kegiatan berakhir pukul 10.00 Wita dan seluruh rangkaian kegiatan berjalan dengan aman dan lancar.7ode</p>\r\n', '2025-06-23', 'Admin', 'Aktif', 'minggu-kasih-polisi-amankan-gereja-800-2025-06-23-031509_0.jpg');

-- ----------------------------
-- Table structure for tbl_file
-- ----------------------------
DROP TABLE IF EXISTS `tbl_file`;
CREATE TABLE `tbl_file`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konten` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tgl_posting` date NULL DEFAULT NULL,
  `user` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data_file` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_file
-- ----------------------------
INSERT INTO `tbl_file` VALUES (1, 'MINGGU', '11 : 00 Jam Ibdah Telah di ubah', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"height:80px; width:383px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>09:00-10.40 WIB</td>\r\n			<td>Ibadah Pertama</td>\r\n		</tr>\r\n		<tr>\r\n			<td>11.00-Selesai</td>\r\n			<td>Ibdah Ke II</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Kami Mengharapkan Kedatangan Anda Untuk Tuhan</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-09-16', 'Delisman', 'Aktif', '');
INSERT INTO `tbl_file` VALUES (3, 'SELASA', '19 : 00 - Latihan Pelayanan Music - Di Gereja', '', '2018-09-16', 'Admin', 'Akif', '');
INSERT INTO `tbl_file` VALUES (4, 'RABU', '19 : 00 - Doa Syafaat - Di Gereja', '', '2018-09-16', 'Admin', 'Akif', '');
INSERT INTO `tbl_file` VALUES (58, 'KAMIS', 'Ibadah Doa Rumah Tangga', '', '2018-09-16', 'Admin', 'Akif', '');
INSERT INTO `tbl_file` VALUES (59, 'JUMAT', '19 : 00 Latihan Pelayanan Musik - Di Gereja', '', '2018-09-16', 'Admin', 'Aktif', '');
INSERT INTO `tbl_file` VALUES (60, 'SABTU', '17 : 00 Menara Doa di Gereja dan 20: 00 : Ibadah Kaum Muda-Mudi di Gereja', '', '2018-09-17', 'Admin', '', '');

-- ----------------------------
-- Table structure for tbl_folio
-- ----------------------------
DROP TABLE IF EXISTS `tbl_folio`;
CREATE TABLE `tbl_folio`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_folio
-- ----------------------------
INSERT INTO `tbl_folio` VALUES (16, 'gambar 2', '#', 'cara mudah hosting web site layanan coding delis.png');
INSERT INTO `tbl_folio` VALUES (17, 'Gambar3', '#', 'penduduk.jpg');
INSERT INTO `tbl_folio` VALUES (18, 'Gambar 4', '#', 'gambar.jpg');
INSERT INTO `tbl_folio` VALUES (19, 'Gambar ke 4', '#', 'layanan coding belajar html.png');

-- ----------------------------
-- Table structure for tbl_janji
-- ----------------------------
DROP TABLE IF EXISTS `tbl_janji`;
CREATE TABLE `tbl_janji`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `handphone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nominal` int NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_regis` date NULL DEFAULT NULL,
  `tanggal_bayar` date NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_janji
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_jemaat
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jemaat`;
CREATE TABLE `tbl_jemaat`  (
  `id_jemaat` int NOT NULL AUTO_INCREMENT,
  `tgl_daftar` date NOT NULL,
  `nm_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jns_kelamin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_jemaat`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_jemaat
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_nikah
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nikah`;
CREATE TABLE `tbl_nikah`  (
  `id_nikah` int NOT NULL AUTO_INCREMENT,
  `tanggal_pengajuan` date NOT NULL,
  `waktu` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dilayani_oleh` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_pria` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ttl_pria` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_pria` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_pria` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hp_pria` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `baptis_pria` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_baptis_pria` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_sidi_pria` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_wanita` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ttl_wanita` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_wanita` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_wanita` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hp_wanita` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `baptis_wanita` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_baptis_wanita` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_sidi_wanita` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ayah_pria` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ibu_pria` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ayah_wanita` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ibu_wanita` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sumbangan` double NOT NULL,
  `mengetahui` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jemaat` int NOT NULL,
  PRIMARY KEY (`id_nikah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_nikah
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_pesan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pesan`;
CREATE TABLE `tbl_pesan`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pesan` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `keterangan` int NOT NULL COMMENT '0',
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pesan
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'Administrator', '081282165618', 'admin', 'admin');

-- ----------------------------
-- Table structure for tbl_video
-- ----------------------------
DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE `tbl_video`  (
  `kode` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_video
-- ----------------------------
INSERT INTO `tbl_video` VALUES (3, 'Video Lagu - Lagu Rohani', 'kvF5QsrR1Z0');
INSERT INTO `tbl_video` VALUES (4, 'Lagu-Lau Rohani 2', 'kvF5QsrR1Z0');
INSERT INTO `tbl_video` VALUES (5, 'Video Ke COBA', 'cq4SUrLJfN8');

SET FOREIGN_KEY_CHECKS = 1;
