CREATE DATABASE fakultas;


CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,

    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

INSERT INTO jurusan (kode, nama) VALUES ("JTI", "Teknologi Informasi");
INSERT INTO jurusan (kode, nama) VALUES ("JTE", "Teknik Elektro");

INSERT INTO mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES ("1", "20317101", "Nur Anisa", "Perempuan", "Malang", "2001-01-12", "Jl. Kertarejasa 66B");
INSERT INTO mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES ("2", "20317102", "Arif Aunur", "Laki-laki", "Malang", "2001-05-12", "Perum Griya Nieuw");

UPDATE mahasiswa SET alamat = "Jl. Kertanegara" WHERE id = 1;
UPDATE mahasiswa SET tempat_lahir = "Jakarta";

DELETE FROM mahasiswa WHERE id = 2;