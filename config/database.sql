-- CREATE DATABASE db_klinik;

USE db_klinik;

CREATE TABLE IF NOT EXISTS `user` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `username`    VARCHAR(255),
  `email`       VARCHAR(255),
  `nomor`       VARCHAR(20),
  `password`    VARCHAR(255),
  `kode`        VARCHAR(255),
  `usertype_id` INT(11),
  `wilayah_id`  INT(11),
  PRIMARY KEY  (`id`),
  UNIQUE  (`email`, `kode`)
);

CREATE TABLE IF NOT EXISTS `usertype` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(100),
  PRIMARY KEY  (`id`)
);

CREATE TABLE IF NOT EXISTS `wilayah` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `kode`        VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE IF NOT EXISTS `obat` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `jenis`       VARCHAR(100),
  `harga`       DECIMAL,
  `keterangan`  VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE IF NOT EXISTS `tindakan` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `harga`       DECIMAL,
  `keterangan`  VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE IF NOT EXISTS `periksa` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `pasien_id`   INT(11),
  `pegawai_id`  INT(11),
  `harga`       DECIMAL,
  `tanggal`     DATETIME,
  `totalharga`  DECIMAL,
  `pembayaran`  VARCHAR(255),
  `tglbayar`    DATETIME,
  `keterangan`  VARCHAR(255),
  `status`      VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE IF NOT EXISTS `periksa_obat` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `periksa_id`  INT(11),
  `obat_id`     INT(11),
  `harga`       DECIMAL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE IF NOT EXISTS `periksa_tindakan` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `periksa_id`  INT(11),
  `tindakan_id` INT(11),
  `harga`       DECIMAL,
  PRIMARY KEY  (`id`)
);

INSERT INTO usertype 
  (nama) 
VALUES
  ('admin'),
  ('pasien'),
  ('pegawai')
;