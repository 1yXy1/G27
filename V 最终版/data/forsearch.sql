-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: forsearch
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `save`
--

DROP TABLE IF EXISTS `save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `save` (
  `id` int NOT NULL AUTO_INCREMENT,
  `filename` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  `value` varchar(45) COLLATE utf8mb3_bin DEFAULT NULL,
  `line` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1242 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `save`
--

LOCK TABLES `save` WRITE;
/*!40000 ALTER TABLE `save` DISABLE KEYS */;
INSERT INTO `save` VALUES (1200,'1.pdf','哎哎哎',1),(1201,'1.pdf','Aaa',2),(1202,'1.pdf','嗷嗷嗷',3),(1203,'1.pdf','顶顶顶',4),(1204,'2.pdf','12345',1),(1205,'2.pdf','23456',2),(1206,'2.pdf','23456',3),(1207,'2.pdf','45678',4),(1208,'23.pdf','你少角度上看封面',1),(1209,'23.pdf','上帝啊	u凤凰男参加	',2),(1210,'23.pdf','见到妇女三角',3),(1211,'23.pdf','防护撒法及',4),(1212,'444.pdf','111111',1),(1213,'444.pdf','Asdsdssfs',2),(1214,'444.pdf','Cvccdfs',3),(1215,'444.pdf','122aaasdsf',4),(1216,'1.docx','11111',1),(1217,'1.docx','2222',2),(1218,'1.docx','33333',3),(1219,'1.docx','4444',4),(1220,'1.docx','5555',5),(1221,'1.docx','12334',6),(1222,'1.docx','2345',7),(1223,'123.docx','111232sda',1),(1224,'123.docx','Asdsfs',2),(1225,'123.docx','Cvdfs',3),(1226,'123.docx','122',4),(1227,'123.docx','sdsf',5),(1228,'2.docx','AAA',1),(1229,'2.docx','BCD',2),(1230,'2.docx','CDE',3),(1231,'22.docx','我喜欢大海动手动脚',1),(1232,'22.docx','你打稍等',2),(1233,'22.docx','Nczjnkcusio',3),(1234,'22.docx','Zbhsduioh',4),(1235,'22.docx','解耦水浇地',5),(1236,'22.docx','吧撒旦哦哦就',6),(1237,'22.docx','到不能看',7),(1238,'23.docx','你少角度上看封面',1),(1239,'23.docx','上帝啊u凤凰男参加',2),(1240,'23.docx','见到妇女三角',3),(1241,'23.docx','防护撒法及',4);
/*!40000 ALTER TABLE `save` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-30 12:42:23
