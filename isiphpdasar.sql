CREATE DATABASE phpdasar;

CREATE TABLE mahasiswa(
	NIM INT (8) PRIMARY KEY,
	Nama VARCHAR(50),
	Email VARCHAR(50),
	Jurusan VARCHAR(50),
	Gambar VARCHAR(50)
)

INSERT INTO mahasiswa VALUES (1220001, 'Brian Babayaga', 'Brian@gmail.com','Sistem Informasi', 'Brian.jpg'),
(1320001, 'Charles Brigand', 'CharlesBri@gmail.com','Manajemen', 'Charles.jpg'),
(1420001, 'Eastkan Westerosi', 'Easter@gmail.com','Akuntansi', 'Eastkan.jpg'),
(1520001, 'Echidna', 'Echidna@gmail.com','Biologi', 'echidna.jpg'),
(1520002, 'Hartono Linglung', 'LinglungH@gmail.com','Biologi', 'hartono.jpg'),
(1620001, 'Jeremy Clarkson', 'Jereclarkson@gmail.com','IT', 'jeremy.jpg'),
(1620002, 'Juhendi Kyun', 'Juhendri@gmail.com','IT', 'juhendi.jpg'),
(1220002, 'Nirkun', 'YokoTaro@gmail.com','Sistem Informasi', 'Nirkun.jpg'),
(1320002, 'Northkan Southkan', 'NorthSouth@gmail.com','Manajemen', 'Northkan.jpg'),
(1420002, 'Selas Victoria', 'SelasVictoria@gmail.com','Akuntansi', 'Selas.jpg')