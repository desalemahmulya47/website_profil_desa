CREATE DATABASE IF NOT EXISTS digital_desa CHARACTER SET utf8mb4;
USE digital_desa;
CREATE TABLE roles(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(30));
CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(100),username VARCHAR(50) UNIQUE,password VARCHAR(255),role_id INT,FOREIGN KEY(role_id) REFERENCES roles(id));
CREATE TABLE kartu_keluarga(id INT AUTO_INCREMENT PRIMARY KEY,no_kk VARCHAR(20),kepala_keluarga VARCHAR(100),alamat TEXT);
CREATE TABLE dusun(id INT AUTO_INCREMENT PRIMARY KEY,dusun VARCHAR(50));
CREATE TABLE penduduk(id INT AUTO_INCREMENT PRIMARY KEY,nik VARCHAR(20) UNIQUE,nama VARCHAR(100),jk ENUM('Laki-laki','Perempuan'),tempat_lahir VARCHAR(50),tanggal_lahir DATE,alamat TEXT,pekerjaan VARCHAR(60),pendidikan VARCHAR(40),kk_id INT NULL,FOREIGN KEY(kk_id) REFERENCES kartu_keluarga(id) ON DELETE SET NULL);
CREATE TABLE perangkat_desa(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(100),jabatan VARCHAR(60),nip VARCHAR(30),foto VARCHAR(100));
CREATE TABLE layanan(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(100),deskripsi TEXT,link TEXT);
CREATE TABLE formulir(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(100),deskripsi TEXT,dokumen TEXT);
CREATE TABLE pengajuan_layanan(id INT AUTO_INCREMENT PRIMARY KEY,nomor VARCHAR(30) UNIQUE,layanan_id INT,nama VARCHAR(100),nik VARCHAR(20),hp VARCHAR(20),alamat TEXT,keperluan TEXT,file VARCHAR(100),status ENUM('Diajukan','Diproses','Disetujui','Ditolak','Selesai') DEFAULT 'Diajukan',keterangan TEXT,tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,tanggal_selesai DATE NULL,FOREIGN KEY(layanan_id) REFERENCES layanan(id));
CREATE TABLE pengaduan(id INT AUTO_INCREMENT PRIMARY KEY,nomor VARCHAR(30) UNIQUE,nama VARCHAR(100),nik VARCHAR(20),hp VARCHAR(20),kategori VARCHAR(50),isi TEXT,lokasi VARCHAR(150),file VARCHAR(100),status ENUM('Baru','Diverifikasi','Diproses','Selesai') DEFAULT 'Baru',tanggal DATETIME DEFAULT CURRENT_TIMESTAMP);
CREATE TABLE kategori_berita(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(50));
CREATE TABLE berita(id INT AUTO_INCREMENT PRIMARY KEY,judul VARCHAR(200),kategori_id INT,penulis VARCHAR(60),ringkasan TEXT,isi TEXT,foto VARCHAR(100),headline TINYINT DEFAULT 0,tanggal DATE,FOREIGN KEY(kategori_id) REFERENCES kategori_berita(id));
CREATE TABLE agenda(id INT AUTO_INCREMENT PRIMARY KEY,judul VARCHAR(150),tanggal DATE,lokasi VARCHAR(100),keterangan TEXT);
CREATE TABLE potensi_desa(id INT AUTO_INCREMENT PRIMARY KEY,nama VARCHAR(100),jenis VARCHAR(40),deskripsi TEXT,lokasi VARCHAR(100),kontak VARCHAR(50),foto VARCHAR(100));
CREATE TABLE dokumen_desa(id INT AUTO_INCREMENT PRIMARY KEY,judul VARCHAR(150),kategori VARCHAR(40),tahun INT,file VARCHAR(100));
CREATE TABLE apbdes(id INT AUTO_INCREMENT PRIMARY KEY,tahun INT,uraian VARCHAR(150),jenis ENUM('Pendapatan','Belanja','Pembiayaan'),anggaran BIGINT,realisasi BIGINT);
CREATE TABLE profil_desa(id INT AUTO_INCREMENT PRIMARY KEY,sejarah TEXT,visi TEXT,misi TEXT,geografis TEXT,batas TEXT,demografi TEXT);
CREATE TABLE pengaturan(k VARCHAR(50) PRIMARY KEY,v TEXT);
CREATE TABLE log_aktivitas(id INT AUTO_INCREMENT PRIMARY KEY,user_id INT,aktivitas VARCHAR(100),waktu DATETIME DEFAULT CURRENT_TIMESTAMP);
INSERT INTO roles(nama)VALUES('super_admin'),('admin_desa'),('kepala_desa'),('masyarakat');
INSERT INTO users(nama,username,password,role_id)VALUES('Super Admin','admin','$6$OAhWEanLCackhTuJ$CQqMiTPJ3/rRK7jhSNcrLwtvDPWZtmvgPpWDUB8vPB3SP6dO8bhNCgw1lSt4.HKRKuLEn16VTOb5ZGIAQg4.k1',1),('Petugas Desa','petugas','$6$OAhWEanLCackhTuJ$CQqMiTPJ3/rRK7jhSNcrLwtvDPWZtmvgPpWDUB8vPB3SP6dO8bhNCgw1lSt4.HKRKuLEn16VTOb5ZGIAQg4.k1',2),('Kepala Desa','kades','$6$OAhWEanLCackhTuJ$CQqMiTPJ3/rRK7jhSNcrLwtvDPWZtmvgPpWDUB8vPB3SP6dO8bhNCgw1lSt4.HKRKuLEn16VTOb5ZGIAQg4.k1',3);
INSERT INTO pengaturan VALUES('nama_desa','Lemahmulya'),('kecamatan','Majalaya'),('kabupaten','Karawang'),('provinsi','Jawa Barat'),('alamat','Desa Lemahmulya, Kec. Majalaya, Kab. Karawang, Provinsi Jawa Barat, Kode Pos 41371, Indonesia'),('telepon','085196506516'),('email','desalemahmulya47@gmail.com'),('maps','https://www.google.com/maps?q=Majalaya+Karawang&output=embed'),('facebook','https://web.facebook.com/groups/1191910710935259'),('instagram','https://www.instagram.com/lemahmulya_karawang/'),('youtube','https://youtube.com'),('stat_penduduk','11989'),('stat_kk','4137'),('stat_lk','6059'),('stat_pr','5930'),('stat_dusun','5'),('stat_rt','34'),('stat_rw','9');
INSERT INTO profil_desa(sejarah,visi,misi,geografis,batas,demografi)VALUES(
    'Pada awalnya Desa Lemahmulya merupakan suatu kampung yang bernama Kampung Gokgik atau Dusun Karangmulya yang merupakan bagian dari pemerintahan Desa Bengle Kecamatan Klari.

    Lemahmulya terdiri dari dua suku kata, yaitu Lemah dan Mulya, Lemah mempunyai arti tanah sedangkan Mulya mempunyai arti barokah atau manfaat. Pada Tahun 1664, di Kampung Gokgik, banyak sekali usaha kerajinan pembuatan genteng atau pabrik lio yang bahan dasar tanahnya diambil dari wilayah sekitar kampung, tanah tersebut merupakan salah satu sumber penghasilan atau manfaat dan barokah bagi warga kampung Gokgik Atas dasar itulah masyarakat Kampung Gokgik mengganti namanya menjadi Desa Lemahmulya.

    Desa Lemahmulya merupakan Desa Pemekaran wilayah dari Desa Bengle, pemekaran tersebut terjadi pada Tahun 1979. Pada Tanggal 14 September 1979, secara resmi didirikan suatu pemerintahan Desa pemekaran yang lokasi kantornya didirikan diwilayah Tegalwaru Dusun Belendung. Pada Tahun 1980, warga menghendaki nama desa tersebut adalah Desa Karangmulya dan mengajukannya ke tingkat provinsi. Namun nama desa tersebut tidak dikukuhkan dengan alasan sudah menjadi nama desa di wilayah Kecamatan Telukjambe. Yang pada akhirnya dikukuhkanlah nama desa pemekaran tersebut menjadi Desa Lemahmulya.',
    'Terwujudnya desa yang maju, mandiri, dan sejahtera.',
    '1. Pelayanan transparan\n2. Digitalisasi desa\n3. Pemberdayaan ekonomi',
    'Desa Lemahmulya merupakan salah satu Desa di Wilayah Kecamatan Majalaya yang terletak di bagian Selatan Kecamatan Majalaya.
    
    Luas wilayah Desa Lemahmulya  ± 500 Hektar, yang terdiri dari daratan dan areal persawahan. Iklim Desa Lemahmulya sama sebagaimana desa-desa lain di wilayah Indonesia  karena dipengaruhi musim kemarau dan penghujan,  hal tersebut  mempunyai pengaruh langsung terhadap pola tanam yang ada di Desa Lemahmulya.',
    'Utara: Desa Pasir Talaga dan Desa Majalaya
    Selatan: Desa Cibalong Sari
    Barat: Desa Bengle
    Timur: Desa Belendung dan Desa Pasirmulya',
    'Penduduk Desa Lemahmulya tersebar dalam lima Dusun, yaitu Dusun Karangmulya 1, Dusun Karangmulya 2, Dusun Cimider, Dusun Belendung, dan Dusun Tamiang.

    Mata pencaharian penduduk Desa Lemahmulya mayoritas sebagai Pedagang, Petani, dan Karyawan.

    Penggunaan tanah di Desa Lemahmulya sebagian besar diperuntukan untuk tanah pertanian sawah sedangkan sisanya untuk tanah kering yang merupakan bangunan dan fasilitas-fasilitas lainnya.

    Mata pencaharian lain penduduk desa Lemahmulya adalah sebagai Petani, Pengrajin dan Peternak. Peternakan yang ada diantaranya peternakan kambing, domba, itik dan lain sebagainya'
    );
INSERT INTO layanan(nama,deskripsi,link)VALUES
-- ('Surat Pengantar','Surat pengantar umum','Kepala {desa} menerangkan bahwa {nama} (NIK {nik}), {alamat}, adalah warga kami dan mohon dibantu untuk keperluan: {keperluan}.'),
('Informasi Harga Pasar', '', 'https://hargapasar.karawangkab.go.id/'),
('Tangkas', 'Tangginas Ngarojong Kasehatan. Sistem Terintegrasi Penanganan Stunting Kabupaten Karawang', 'https://tangkas.karawangkab.go.id/'),
('Whistleblowing System', 'Aplikasi Whistleblowing System disediakan oleh Pemerintah Kabupaten Karawang bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi korupsi yang terjadi di lingkungan Pemerintah Kabupaten Karawang.', 'https://wbskarawang.karawangkab.go.id/'),
('JDIH', 'Jaringan Dokumentasi dan Informasi Hukum Kabupaten Karawang', 'https://jdih.karawangkab.go.id/'),
('MPP Kab. Karawang', 'Mall Pelayanan Publik Kabupaten Karawang', 'https://mpp.karawangkab.go.id/'),
('Info Loker', 'Informasi lowongan pekerjaan di Kabupaten Karawang', 'https://karawangkab.go.id/layanan-kecamatan'),
('Edukcapil', 'Edukasi Kependudukan Kabupaten Karawang', 'https://edukcapil.karawangkab.go.id/'),
('Cek Bansos', 'Cek bantuan sosial', 'https://cekbansos.kemensos.go.id/'),
('Aplikasi Cek Bansos', 'Aplikasi Cek Dan Pengajuan Penerimaan Bantuan Sosial', 'https://play.google.com/store/apps/details?id=id.go.kemensos.pelaporan');
INSERT INTO formulir(nama,deskripsi,dokumen)VALUES
('Formulir Biodata Keluarga','Formulir permohonan biodata keluarga','Formulir F1-01 baru.pdf'),
('Formulir Pendaftaran Peristiwa Kependudukan','Formulir permohonan KK','Formulir F-1.02 Pendaftaran Peristiwa Kependudukan.pdf'),
('Formulir Pendaftaran Perpindahan Penduduk','Formulir permohonan akta kelahiran','formulir/Formulir F-1.03 - Perpindahan Penduduk.pdf'),
('Surat Pernyataan Tidak Memiliki Dokumen Kependudukan','Formulir permohonan akta kematian','Formulir F-1.04 - TIDAK MEMILIKI IDENTITAS.pdf'),
('Surat Pernyataan Tanggung Jawab Mutlak Perkawinan/Perceraian Belum Tercatat','Formulir permohonan pindah datang','Formulir F-1.05 SPTJM Perkawinan KK.pdf'),
('Surat Pernyataan Perubahan Elemen Data Kependudukan','Formulir permohonan pindah keluar','Formulir F-1.06 - Kartu Keluarga.pdf'),
('Formulir Pendataan Atau Pembatalan Penduduk Nonpermanen','Formulir permohonan pindah keluar','Formulir F-1.15 Penduduk Nonpermanen.pdf'),
('Formulir Pelaporan Pencatatatan Kelahiran Di Dalam Wilayah NKRI', '', 'Formulir F-2.01 Akta Kelahiran.pdf'),
('Formulir Pelaporan Pencatatatan Kematian Di Dalam Wilayah NKRI', '', 'Formulir F-2.01 2022 KEMATIAN.pdf'),
('Formulir Pelaporan Pencatatatan Atau Pembatalan Perwakilan Di Dalam Wilayah NKRI', '', 'Formulir F-2.01 2022 PENCATATAN ATAU PEMBATALAN PERKAWINAN.pdf'),
('Formulir Pelaporan Perceraian Atau Pembatalan Perwakilan Di Dalam Wilayah NKRI', '', 'Formulir F-2.01 2022 PERCERAIAN DAN PEMBATALAN PERCERAIAN.pdf'),
('Formulir Pelaporan Perubahan Atau Pembetulan Akkta Kelahiran Di Dalam Wilayah NKRI', '', 'Formulir F-2.01 2022 PERUBAHAN ATAU PEMBETULAN.pdf'),
('Surat Pernyataan Tanggung Jawab Mutlak (SPTJM) Kebenaran DATA KELAHIRAN', '', 'F-2.03 SPTJM Kebenaran Kelahiran.pdf'),
('Surat Pernyataan Tanggung Jawab Mutlak (SPTJM) Kebenaran Sebagai Pasangan Suami Istri', '', 'F-2.04 SPTJM Kebenaran Suami-Istri.pdf'),
('Formulir SPTJM Kebenaran Data Kematian', '', 'Formulir Perubahan Data Akta Kelahiran.pdf'),
('Formulir Perubahan Data Akta Kelahiran', '', 'Surat Kuasa Pengasuhan Anak.pdf'),
('Formulir Tarik Data Sendiri, digunakan bagi Individu yang akan menetap di Kab. Karawang tanpa harus ke domisili sebelumnya', '', 'Surat Pernyataan Tidak Keberatan Menerima Anggota Keluarga.pdf'),
('Formulir Tarik Data Sekeluarga, digunakan bagi keluarga yang akan menetap di Kab. Karawang tanpa harus ke domisili sebelumnya', '', 'Formulir Tarik Data Sekeluarga.pdf'),
('Formulir Surat Pernyataan Tidak Keberatan Menerima Anggota Keluarga', '', 'Formulir Tarik Data sendiri.pdf'),
('Formulir Surat Kuasa Pengasuhan Anak', '', 'SPTJM - KEBENARAN DATA KEMATIAN.pdf'),
('Surat Perizinan', '', 'https://karawangkab.go.id/layanan-kecamatan');
INSERT INTO kartu_keluarga(no_kk,kepala_keluarga,alamat)VALUES('3215010101010001','Ahmad Sopian','Dusun 1 RT 01 RW 01'),('3215010101010002','Dedi Suryadi','Dusun 2 RT 02 RW 01');
INSERT INTO penduduk(nik,nama,jk,tempat_lahir,tanggal_lahir,alamat,pekerjaan,pendidikan,kk_id)VALUES('3215010101900001','Ahmad Sopian','Laki-laki','Karawang','1990-01-01','Dusun 1 RT 01 RW 01','Petani','SMA',1),('3215010202920002','Siti Aminah','Perempuan','Karawang','1992-02-02','Dusun 1 RT 01 RW 01','Ibu Rumah Tangga','SMP',1),('3215010303850003','Dedi Suryadi','Laki-laki','Majalaya','1985-03-03','Dusun 2 RT 02 RW 01','Wiraswasta','S1',2),('3215010404950004','Rina Marlina','Perempuan','Majalaya','1995-04-04','Dusun 2 RT 02 RW 01','Guru','S1',2),('3215010505000005','Budi Santoso','Laki-laki','Karawang','2000-05-05','Dusun 3 RT 03 RW 02','Buruh','SMA',NULL);
INSERT INTO dusun(dusun)VALUES('Dusun Karangmulya 1'),('Dusun Karangmulya 2'),('Cimider'),('Babakan Tamiang'),('Belendung');
INSERT INTO perangkat_desa(nama,jabatan,nip)VALUES('','Kepala Desa',''),('','Sekretaris Desa','-'),('','Kepala Urusan','-');
INSERT INTO kategori_berita(nama)VALUES('Pemerintahan'),('Kegiatan Desa'),('Pembangunan'),('Masyarakat'),('Kesehatan'),('Pendidikan'),('UMKM'),('Pengumuman');
INSERT INTO potensi_desa(nama,jenis,deskripsi,lokasi,kontak)VALUES('Padi Organik','Pertanian','Sawah produktif.','Dusun 1','-'),('Kerajinan Anyaman','Kerajinan','Anyaman bambu.','Dusun 2','-');
INSERT INTO apbdes(tahun,uraian,jenis,anggaran,realisasi)VALUES(2026,'Dana Desa','Pendapatan',800000000,400000000),(2026,'Pembangunan Jalan','Belanja',300000000,150000000);

CREATE TABLE IF NOT EXISTS banner(id INT AUTO_INCREMENT PRIMARY KEY,judul VARCHAR(150),foto VARCHAR(100),link VARCHAR(255),urutan INT DEFAULT 0,aktif TINYINT DEFAULT 1);
