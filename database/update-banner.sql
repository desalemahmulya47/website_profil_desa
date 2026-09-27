USE digital_desa;
DROP TABLE IF EXISTS banner;
CREATE TABLE banner(id INT AUTO_INCREMENT PRIMARY KEY,judul VARCHAR(150),foto VARCHAR(100),link VARCHAR(255),urutan INT DEFAULT 0,aktif TINYINT DEFAULT 1);
INSERT INTO banner(judul,foto,urutan,aktif)VALUES('Selamat Datang','banner1.jpg',1,1),('Gotong Royong','banner2.jpg',2,1),('Layanan Digital','banner3.jpg',3,1);
