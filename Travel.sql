-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: travel
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `travel`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `travel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `travel`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  PRIMARY KEY (`id_penumpang`),
  KEY `id_pemesan` (`id_pemesan`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `biaya`
--

DROP TABLE IF EXISTS `biaya`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `biaya` (
  `id_fasilitas` int(11) NOT NULL,
  `id_transportasi` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  KEY `id_penumpang` (`id_penumpang`),
  KEY `id_fasilitas` (`id_fasilitas`),
  CONSTRAINT `biaya_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `transportasi` (`id_penumpang`),
  CONSTRAINT `biaya_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biaya`
--

LOCK TABLES `biaya` WRITE;
/*!40000 ALTER TABLE `biaya` DISABLE KEYS */;
/*!40000 ALTER TABLE `biaya` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cari`
--

DROP TABLE IF EXISTS `cari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cari` (
  `id_transportasi` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  PRIMARY KEY (`id_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cari`
--

LOCK TABLES `cari` WRITE;
/*!40000 ALTER TABLE `cari` DISABLE KEYS */;
/*!40000 ALTER TABLE `cari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `Notelp_driver` int(11) NOT NULL,
  PRIMARY KEY (`id_driver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driver`
--

LOCK TABLES `driver` WRITE;
/*!40000 ALTER TABLE `driver` DISABLE KEYS */;
/*!40000 ALTER TABLE `driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasilitas` (
  `id_pemesan` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  PRIMARY KEY (`id_fasilitas`),
  KEY `id_pemesan` (`id_pemesan`),
  CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas`
--

LOCK TABLES `fasilitas` WRITE;
/*!40000 ALTER TABLE `fasilitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemesan`
--

DROP TABLE IF EXISTS `pemesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `email_pemesan` text NOT NULL,
  `alamat_pemesan` text NOT NULL,
  `Notelp_pemesan` int(11) NOT NULL,
  PRIMARY KEY (`id_pemesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemesan`
--

LOCK TABLES `pemesan` WRITE;
/*!40000 ALTER TABLE `pemesan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pemesan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penumpang`
--

DROP TABLE IF EXISTS `penumpang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `email_penumpang` text NOT NULL,
  `alamat_penumpang` text NOT NULL,
  `Notelp_penumpang` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  PRIMARY KEY (`id_penumpang`),
  KEY `id_pemesan` (`id_pemesan`),
  KEY `id_penumpang` (`id_penumpang`),
  CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`),
  CONSTRAINT `penumpang_ibfk_2` FOREIGN KEY (`id_penumpang`) REFERENCES `admin` (`id_penumpang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penumpang`
--

LOCK TABLES `penumpang` WRITE;
/*!40000 ALTER TABLE `penumpang` DISABLE KEYS */;
/*!40000 ALTER TABLE `penumpang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transportasi`
--

DROP TABLE IF EXISTS `transportasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `jenis_kendaraan` text NOT NULL,
  PRIMARY KEY (`id_penumpang`),
  KEY `id_pemesan` (`id_pemesan`),
  KEY `id_transportasi` (`id_transportasi`),
  KEY `id_driver` (`id_driver`),
  CONSTRAINT `transportasi_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`),
  CONSTRAINT `transportasi_ibfk_2` FOREIGN KEY (`id_transportasi`) REFERENCES `cari` (`id_transportasi`),
  CONSTRAINT `transportasi_ibfk_3` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportasi`
--

LOCK TABLES `transportasi` WRITE;
/*!40000 ALTER TABLE `transportasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transportasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tujuan`
--

DROP TABLE IF EXISTS `tujuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `id_transportasi` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  PRIMARY KEY (`id_penumpang`),
  KEY `id_transportasi` (`id_transportasi`),
  CONSTRAINT `tujuan_ibfk_1` FOREIGN KEY (`id_transportasi`) REFERENCES `cari` (`id_transportasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tujuan`
--

LOCK TABLES `tujuan` WRITE;
/*!40000 ALTER TABLE `tujuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tujuan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-29 14:14:26
