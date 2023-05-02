-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: car_sell
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car` (
  `CarID` int NOT NULL AUTO_INCREMENT,
  `Brand` varchar(20) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Age` int NOT NULL,
  `Price` int NOT NULL,
  `Location` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Distance` int NOT NULL,
  `LaunchDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Image` varchar(500) DEFAULT NULL,
  `Note` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `StaffID` int NOT NULL,
  `CouponID` int DEFAULT NULL,
  `OrderID` int DEFAULT NULL,
  PRIMARY KEY (`CarID`),
  UNIQUE KEY `Image` (`Image`,`OrderID`),
  UNIQUE KEY `Image_2` (`Image`),
  KEY `StaffID` (`StaffID`),
  KEY `CouponID` (`CouponID`),
  KEY `OrderID` (`OrderID`),
  CONSTRAINT `car_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `car_ibfk_2` FOREIGN KEY (`CouponID`) REFERENCES `coupon` (`CouponID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `car_ibfk_3` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `CHK_DIS` CHECK ((`Distance` > 0)),
  CONSTRAINT `CHK_PRICE` CHECK ((`Price` > 0))
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (1,'Toyota','Corolla Cross 1.8 Hybrid',2019,858000,'台北',13000,'2022-12-25 15:52:26','https://i.imgur.com/1vAO1D3.jpg','旗艦 自排 紅  原廠保固至26/02/17',4,8,4),(2,'Mitsubishi','Colt Plus',2019,358000,'高雄',53000,'2022-12-25 16:51:36','https://i.imgur.com/Pxm6nWJ.jpg','尊貴型 1.5自排 藍',4,6,4),(5,'Toyota','Vios 1.5雅緻',2016,338000,'台中',60000,'2022-12-26 16:46:29','https://i.imgur.com/1YoNCIu.jpg','自排 銀 自排 銀',4,NULL,5),(6,'Ford','Kuga EcoBoost 250',2021,968000,'桃園',33000,'2022-12-28 03:44:08','https://i.imgur.com/tLvHEmj.jpg','AWD旗艦X 2.0 自排 白',4,8,8),(9,'Honda','CR-V 1.5 VTi-S',2021,918000,'新竹',16000,'2022-12-28 03:52:10','https://i.imgur.com/1Mzuk2r.jpg','自排 白原廠保固至24/01/25',4,NULL,NULL),(17,'Lexus','UX 250h豪華版 2.0',2020,1180000,'台北',39000,'2022-12-30 22:36:04','https://i.imgur.com/GZ6UcNs.jpg','250h豪華版 2.0 自排 棕原廠保固至24/06/29',4,8,4),(20,'BENZ','C250 coupe',2016,1200000,'林口',80000,'2021-02-25 17:15:20','https://photo.8891.com.tw/nc/2016/09/08/s/1473297309649727_800_1800.jpg','電熱通風椅',7,8,NULL),(21,'BENZ','S450',2020,2000000,'林口',60000,'2021-05-04 18:20:07','https://autos.yahoo.com.tw/y/r/w880/iw/MMT/car/520e21582cb174aec9f09c280289e1fb_1200.jpg','ACC、電熱通風椅、按摩椅、冰箱、小電視',7,NULL,NULL),(22,'AUDI','A8',2019,1800000,'林口',60000,'2021-05-28 12:39:40','https://img.autoabc.lv/audi-a8/audi-a8_2017_Sedans_21102853128_3.jpg','ACC、電熱通風椅、小電視、B&O音響',7,NULL,NULL),(23,'TOYOTA','ALTIS',2016,430000,'林口',150000,'2021-01-17 16:47:39','https://autos.yahoo.com.tw/y/r/w1200/iw/MMT/car/10b9bdee8f09cccd15f9d8909e328c19_1200.jpg','無',10,NULL,NULL),(24,'TOYOTA','ALPHARD',2017,650000,'林口',70000,'2021-08-15 13:59:07','https://www.ybgauto.com/wp-content/uploads/2021/05/WhatsApp-Image-2021-04-26-at-4.41.47-PM-768x504.jpeg','電動後視鏡、BOSE音響',10,NULL,NULL),(25,'MAZDA','CX-5',2018,200000,'林口',110000,'2021-12-25 09:28:19','https://autos.yahoo.com.tw/y/r/w1200/iw/MMT/car/26573c374976d1eb803c5e83c7da427a_1200.jpg','按摩椅、大螢幕、電熱通風椅',10,NULL,NULL),(26,'LEXUS','IS200',2022,1800000,'林口',15000,'2021-04-13 14:02:00','https://cdn2.ettoday.net/images/4942/d4942491.jpg','ACC、通風椅、電動後視鏡',4,8,6),(27,'LEXUS','LM',2021,3500000,'林口',40000,'2021-07-06 12:31:08','https://autos.yahoo.com.tw/p/r/w1200/car-trim/December2019/8199c2e5bf0aacb5e0b5138146fb71c4.jpeg','後座大螢幕、電熱通風椅、按摩椅、冰箱、星空頂',7,8,NULL),(28,'BMW','740Li',2018,1450000,'林口',100000,'2021-02-08 09:31:17','https://dbz-images.dubizzle.com/images/2022/10/19/96hl9fij2xnv3-DUBIZZLE.jpeg','ACC、電熱通風椅、小電視、按摩椅、電動窗簾',7,NULL,NULL),(29,'BMW','X5',2019,1900000,'林口',30000,'2023-01-02 02:15:42','https://www.thecarexpert.co.uk/wp-content/uploads/2020/01/P90331851_highRes_the-bmw-x5-m50d-1536x768.jpg.webp','ACC、5AU',7,NULL,NULL),(30,'Toyota','bZ 4X',2022,1580000,'台北',2423,'2023-01-02 16:55:42','http://sscars.com.tw/wp-content/uploads/2023/01/1440C9D5-BEB3-430F-B8DB-ADAAB11FB128.jpg','自排 紅原廠保固至26/05/30',4,8,8);
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coupon` (
  `CouponID` int NOT NULL AUTO_INCREMENT,
  `CouponType` int NOT NULL,
  `StartTime` date NOT NULL,
  `EndTime` date NOT NULL,
  `UsageLimit` int NOT NULL DEFAULT '0',
  `Discount` int NOT NULL DEFAULT '0',
  `Descriptions` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'None',
  `StaffID` int NOT NULL,
  PRIMARY KEY (`CouponID`),
  KEY `StaffID` (`StaffID`),
  CONSTRAINT `coupon_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `CHK_DISCOUNT` CHECK ((`Discount` >= 0)),
  CONSTRAINT `CHK_LIMIT` CHECK ((`UsageLimit` >= 0)),
  CONSTRAINT `CHK_TIME` CHECK ((`EndTime` >= `StartTime`)),
  CONSTRAINT `CHK_TYPE` CHECK ((`CouponType` in (1,2,3)))
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
INSERT INTO `coupon` VALUES (3,1,'2022-12-15','2022-12-31',100000,0,'聖誕節滿10萬免運費優惠',4),(4,1,'2022-12-15','2022-12-31',100000,0,'聖誕節滿10萬免運費優惠',4),(5,2,'2022-09-01','2023-01-25',600000,100000,'冬季滿60萬折10萬喔',4),(6,3,'2022-12-26','2023-01-18',350000,65000,'元旦喽',4),(7,2,'2022-02-01','2023-01-31',500000,10000,'全年性滿50萬折1萬',4),(8,3,'2022-12-29','2023-01-07',700000,150000,'元旦大撒幣',4),(10,1,'2022-12-01','2023-01-31',500000,0,'寒冬免運費',4),(11,1,'2022-12-31','2023-01-05',200000,0,'跨年免運',4),(12,1,'2022-01-01','2022-02-28',0,0,'春節免運活動',7),(13,1,'2022-07-01','2022-08-31',0,0,'暑期免運活動',7),(14,2,'2022-03-01','2022-05-31',1800000,200000,'春季折扣',10),(15,2,'2022-06-01','2022-08-31',2000000,200000,'夏季折扣',10),(16,2,'2022-09-01','2022-11-30',1800000,200000,'秋季折扣',4),(17,2,'2022-12-01','2023-02-28',2000000,200000,'冬季折扣',10),(18,2,'2022-01-31','2022-02-15',1000000,130000,'周年慶',7),(19,3,'2022-04-01','2022-04-10',2500000,500000,'春假折扣活動',10),(20,3,'2022-12-20','2022-12-30',2500000,500000,'聖誕折扣活動',7),(21,1,'2023-01-01','2023-02-28',0,0,'春節免運活動',7),(23,2,'2023-03-01','2023-05-31',1800000,200000,'春季折扣',10),(24,2,'2023-06-01','2023-08-31',2000000,200000,'夏季折扣',10),(25,2,'2023-09-01','2023-11-30',1800000,200000,'秋季折扣',4),(26,2,'2023-12-01','2024-02-28',2000000,200000,'冬季折扣',10),(27,2,'2023-01-31','2023-02-15',1000000,130000,'周年慶',7),(28,3,'2023-04-01','2023-04-10',2500000,500000,'春假折扣活動',10),(29,3,'2023-12-20','2023-12-30',2500000,500000,'聖誕折扣活動',7),(30,2,'2023-01-02','2023-01-02',5000000,1000000,'土豪折扣',7),(32,3,'2023-02-11','2023-02-25',666666,88888,'新年折扣',4);
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `UPassword` varchar(30) NOT NULL,
  `Authority` int NOT NULL DEFAULT '3',
  PRIMARY KEY (`MemberID`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Phone` (`Phone`),
  UNIQUE KEY `Email` (`Email`),
  CONSTRAINT `CHK_AUTHORITY` CHECK ((`Authority` in (1,2,3)))
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (2,'qweasd','0900244567','abc6589@gmail.com','5798645',3),(3,'Terry123','0977847874','kkddk123@yahoo.com.tw','0123456789',3),(4,'staff01','0987654321','ntut01@ntut.edu.tw','ntut01',2),(5,'aabbc','0900123456','a@gmail.com','12345',3),(6,'Alice','0123456789','alice@gmail.com','alice0123',3),(7,'Bob','0011223344','bob@gmail.com','bob0011',2),(8,'Catherine','0000012345','catherine@gmail.com','catherine0000',3),(9,'Daniel','9876543210','daniel@gmail.com','daniel9876',1),(10,'Anderson','1234098765','anderson@gmail.com','anderson1234',2),(11,'Ryan','2234179820','ryan@gmail.com','ryan2234',3),(14,'aa','0900111222','aa@ntut.edu.tw','aa',3);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `OrderID` int NOT NULL AUTO_INCREMENT,
  `OStatus` int NOT NULL DEFAULT '1',
  `TotalPrice` int NOT NULL DEFAULT '0',
  `ShipFee` int NOT NULL,
  `Address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `OrderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ShipDate` datetime DEFAULT NULL,
  `ArriveDate` datetime DEFAULT NULL,
  `CompleteDate` datetime DEFAULT NULL,
  `PaymentMethod` int NOT NULL,
  `CouponID` int DEFAULT NULL,
  `CustomerID` int NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `CouponID` (`CouponID`),
  KEY `CustomerID` (`CustomerID`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CouponID`) REFERENCES `coupon` (`CouponID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `member` (`MemberID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `CHK_ARRIVEDATE` CHECK ((`ArriveDate` >= `ShipDate`)),
  CONSTRAINT `CHK_COMPLETEDATE` CHECK ((`CompleteDate` >= `ArriveDate`)),
  CONSTRAINT `CHK_PM` CHECK ((`PaymentMethod` in (1,2,3))),
  CONSTRAINT `CHK_SHIPDATE` CHECK ((`ShipDate` >= `OrderDate`)),
  CONSTRAINT `CHK_STATUS` CHECK ((`OStatus` in (1,2,3,4))),
  CONSTRAINT `CHK_TOTALPRICE` CHECK ((`TotalPrice` >= 0))
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (4,2,1931000,0,'106台北市大安區忠孝東路三段1號','2023-01-01 05:18:33','2023-01-02 03:47:33',NULL,NULL,2,5,3),(5,4,338000,0,'台北市大安區忠孝東路三段1號','2023-01-01 06:56:53','2023-01-02 01:34:11','2023-01-02 17:45:00','2023-01-03 03:47:24',2,NULL,3),(6,1,1550000,0,'建國南路一段81號','2023-01-02 00:35:58',NULL,NULL,NULL,3,5,5),(8,4,2048000,0,'建國南路一段81號','2023-01-01 05:59:00','2023-01-02 16:59:25','2023-01-02 16:59:34','2023-01-02 16:59:36',3,17,14);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-11 23:39:30
