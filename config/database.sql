CREATE DATABASE db_klinik;

USE db_klinik;

CREATE TABLE `users` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `username`    VARCHAR(255),
  `email`       VARCHAR(255),
  `nomor`       VARCHAR(20),
  `password`    VARCHAR(255),
  `usertype_id` INT(2),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `usertype` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(100),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `wilayah` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `kode`        INT(100),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `obat` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `jenis`       VARCHAR(100),
  `harga`       DECIMAL,
  `keterangan`  VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `tindakan` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `nama`        VARCHAR(255),
  `harga`       DECIMAL,
  `keterangan`  VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `periksa` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `pasien_id`   INT(11),
  `pegawai_id`  INT(11),
  `harga`       DECIMAL,
  `tanggal`     DATETIME,
  `totalharga`  DECIMAL,
  `pembayaran`  VARCHAR(255),
  `buktibayar`  VARCHAR(255),
  `tglbayar`    DATETIME,
  `keterangan`  VARCHAR(255),
  PRIMARY KEY  (`id`)
);

CREATE TABLE `periksa_obat` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `pasien_id`   INT(11),
  `obat_id`     INT(11),
  `harga`       DECIMAL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `periksa_tindakan` (
  `id`          INT(11)         NOT NULL        AUTO_INCREMENT,
  `pasien_id`   INT(11),
  `tindakan_id` INT(11),
  `harga`       DECIMAL,
  PRIMARY KEY  (`id`)
);