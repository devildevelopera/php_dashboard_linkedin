/*
SQLyog Community v12.3.2 (64 bit)
MySQL - 10.3.15-MariaDB : Database - linkedin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`linkedin` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `linkedin`;

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=722 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profile` */

insert  into `profile`(`id`,`name`,`position`,`company`,`location`,`profile`,`phone`,`email`,`url`,`social`) values 
(572,'Bill Gates','Partner, HR &amp; Admin Practice  at Hirewell','Hirewell','Greater Chicago Area','https://www.linkedin.com/sales/people/ACwAAAM0LtIBUEOll1-Er-ozTvTeL8_2im9ta1w,NAME_SEARCH,nhLE','','','http://www.hirewell.com',''),
(573,'Bill Gates','Advisory Board Member at Dependalite LLC ','Dependalite LLC ','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAJoKq8B891ptI3rTLD7thac8qeKc1dL1Sw,NAME_SEARCH,w-OT','','','https://www.advisorycloud.com/profile/Bill-Gates',''),
(574,'Bill Gates','Maricopa County/PING Golf','Maricopa County','Phoenix, Arizona, United States','https://www.linkedin.com/sales/people/ACwAABeVNsYB8eEoZ2CM2QyfaIPToiigfFtbMJI,NAME_SEARCH,yngI','','','http://billgatesaz.com','billgatesaz(TWITTER)'),
(575,'William Gates','Chief of Staff and Head of Strategic Planning','IQVIA','Singapore','https://www.linkedin.com/sales/people/ACwAAASg7HQB8lPcXcBYXbhL0Ju3ulT_a2N89Nc,NAME_SEARCH,bL1s','','','',''),
(576,'Bill Gates','Operations at Next Chapter Energy Services','Next Chapter Energy Services','Edmonton, Alberta, Canada','https://www.linkedin.com/sales/people/ACwAABcXjHEBJKkOOqPvz1A1PMXy49JROkQI75Q,NAME_SEARCH,qCZN','','','',''),
(577,'Bill Gates','VP Manufacturing - Grocery Platform at ConAgra Foods','Conagra Brands','Batesville, Arkansas, United States','https://www.linkedin.com/sales/people/ACwAAAF5GxcBpyS-lWUZEqIf6K8OFvPplyrLFRg,NAME_SEARCH,AiNc','','','',''),
(578,'Bill Gates','Senior IT Recruiter ready for my next challenge.  &#92;nSkilled in ERP, Web, Client-Server and Intel Recruiting.','Revolution Technonlogies','Myrtle Beach SC','https://www.linkedin.com/sales/people/ACwAAACa_tABXqrvsu_pbvhznG4J2nI616ThcQc,NAME_SEARCH,1AYv','','','',''),
(579,'Bill Gates','Network Security Engineer III at ADT Cybersecurity at ADT','ADT Cybersecurity SMB','Greensboro/Winston-Salem, North Carolina Area','https://www.linkedin.com/sales/people/ACwAABH-B44BRR0MQQOuQX-8_wwFKmllDYk6zEM,NAME_SEARCH,UInB','','','https://www.nexxt.com/p/Bill-Gates',''),
(580,'Bill Gates - law AT laptopmillionairesinc DOT net','Co-Founder at United Federations of Planets','LaptopMillionaires.info','La Jolla, California','https://www.linkedin.com/sales/people/ACwAACPmLRQBbW_Sx3-5csy8yQnywxkxWcsXl88,NAME_SEARCH,kCHF','','','',''),
(581,'William Gates','EVP, Business Development &amp; Alliances at SmartStream Technologies','SmartStream Technologies','New York, NY','https://www.linkedin.com/sales/people/ACwAAACEi20BVQa_b_GHY9QtLdweR44oIehu7IQ,NAME_SEARCH,le5e','','','',''),
(582,'Bill Gates','Retired former senior software engineer at QAD Inc.','QAD Inc.','Santa Barbara, California Area','https://www.linkedin.com/sales/people/ACwAAAFsyocBPdv4Pk8drcLGPeU_bvd7m_44V1E,NAME_SEARCH,XYNQ','','','',''),
(583,'William Gates','Fleet maintenance expert','looking for new opporunity','Chicago','https://www.linkedin.com/sales/people/ACwAAApLYQ8B4iAxRE8md03Jn4Dr-qMtNWRtwcA,NAME_SEARCH,tTnr','','','',''),
(584,'William Gates','CLSS, CSO','Marriott International','Chicago, Illinois, United States','https://www.linkedin.com/sales/people/ACwAABW4zwQBDj06y6hM3sGb-34EeBEZIFVFvlk,NAME_SEARCH,NJEz','','','',''),
(585,'Bill Gates','Business Development Mgr - Imaging Solutions','Epson','United States','https://www.linkedin.com/sales/people/ACwAAADjhtsBZmsHL_dz1XSf02xX6sKnRyuGcvQ,NAME_SEARCH,AJw9','','','',''),
(586,'William Gates','Enterprise Architect at AstraZeneca','AstraZeneca','Gaithersburg, Maryland','https://www.linkedin.com/sales/people/ACwAAACDS5MBgPBFy-C5bfu5EWS-N8A0NUj7gsg,NAME_SEARCH,2K16','','','http://wtfcoders.blogspot.com',''),
(587,'Bill Gates','Manager of eCommerce Search Strategy at FERGUSON ENTERPRISES','Ferguson Enterprises','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAHOl2oBQaCyz-nLmgVpYs8lThHz41Q7TO8,NAME_SEARCH,HH-r','','','',''),
(588,'William Gates','Hoop Dreams Elite','Hoop Dreams Elite LLC','San Antonio, Texas Area','https://www.linkedin.com/sales/people/ACwAAAhquf8BC9v5eYW-t63mLvhVeeIb_jYaWeY,NAME_SEARCH,OK5s','','','http://www.teamhoopdreams.com',''),
(589,'Bill Gates','Making my clients Rich,  one idea at a time! ','Bill Gates Marketing','Jacksonville, Florida','https://www.linkedin.com/sales/people/ACwAAAIwzVQB7EO6GFEqsvwu5NUU3Z0bGV_V2lk,NAME_SEARCH,7dYs','','','https://www.billgatesmarketing.com',''),
(590,'William Gates','Communications Manager at VINCI Construction Grands Projets','VINCI Construction Grands Projets','London, United Kingdom','https://www.linkedin.com/sales/people/ACwAAAWmmE0BMZ_O1QuOoXbt4PJpRNmoZC4l7EM,NAME_SEARCH,mZ6B','','','https://www.vinci-construction-projets.com/en/',''),
(591,'William Gates','Systems Programmer/Analyst at RTI International','RTI International','RTP, North Carolina','https://www.linkedin.com/sales/people/ACwAABYiZYkB-HAtUFEw6TpmZVIXo2rCu7CZL20,NAME_SEARCH,pINt','','','',''),
(592,'William Gates','Corporate Development and Strategy at WarnerMedia','WarnerMedia','New York, New York','https://www.linkedin.com/sales/people/ACwAABdOikUB8sbPJ1qobyK39RueLrnnmOsd3Dg,NAME_SEARCH,Jr7w','','','',''),
(593,'Bill Gates','Co-chair, Bill &amp; Melinda Gates Foundation','Bill &amp; Melinda Gates Foundation','Seattle, Washington, United States','https://www.linkedin.com/sales/people/ACwAAA8BYqEBlKc364xhzvygIeuJJ3rATiwe2NE,NAME_SEARCH,4kpE','','','https://gatesnot.es/linkedin',''),
(594,'bill gates','chairman 3PL Advisory Services LLC and Sunland Logistics','UTi Worldwide','Pawleys Island, South Carolina, United States','https://www.linkedin.com/sales/people/ACwAABLNr2IBWSoUrc9Eg6boQfvfo2J071VVRng,NAME_SEARCH,QJCQ','','','',''),
(595,'William Gates','Ophthalmologist','NueCura Partners, LLC','Brentwood, TN','https://www.linkedin.com/sales/people/ACwAABWmwgUBNdXbjuHZZUMx8SwU4xEh4ifmxvg,NAME_SEARCH,67nb','','','',''),
(596,'William Gates','General Manager','City of Greeley','Lakewood, CO','https://www.linkedin.com/sales/people/ACwAAANfLhsBn656nBIS2DkTYGCziQPeBxYP1AQ,NAME_SEARCH,EThE','','','',''),
(597,'Bill Gates','Co-chair, Bill &amp; Melinda Gates Foundation','Bill &amp; Melinda Gates Foundation','Seattle, Washington, United States','https://www.linkedin.com/sales/people/ACwAAA8BYqEBlKc364xhzvygIeuJJ3rATiwe2NE,NAME_SEARCH,4kpE','','','https://gatesnot.es/linkedin',''),
(598,'Bill Gates','Partner, HR &amp; Admin Practice  at Hirewell','Hirewell','Greater Chicago Area','https://www.linkedin.com/sales/people/ACwAAAM0LtIBUEOll1-Er-ozTvTeL8_2im9ta1w,NAME_SEARCH,nhLE','','','http://www.hirewell.com',''),
(599,'William Gates','CLSS, CSO','Marriott International','Chicago, Illinois, United States','https://www.linkedin.com/sales/people/ACwAABW4zwQBDj06y6hM3sGb-34EeBEZIFVFvlk,NAME_SEARCH,NJEz','','','',''),
(600,'Bill Gates','Senior IT Recruiter ready for my next challenge.  &#92;nSkilled in ERP, Web, Client-Server and Intel Recruiting.','Revolution Technonlogies','Myrtle Beach SC','https://www.linkedin.com/sales/people/ACwAAACa_tABXqrvsu_pbvhznG4J2nI616ThcQc,NAME_SEARCH,1AYv','','','',''),
(601,'William Gates','Ophthalmologist','NueCura Partners, LLC','Brentwood, TN','https://www.linkedin.com/sales/people/ACwAABWmwgUBNdXbjuHZZUMx8SwU4xEh4ifmxvg,NAME_SEARCH,67nb','','','',''),
(602,'William Gates','Communications Manager at VINCI Construction Grands Projets','VINCI Construction Grands Projets','London, United Kingdom','https://www.linkedin.com/sales/people/ACwAAAWmmE0BMZ_O1QuOoXbt4PJpRNmoZC4l7EM,NAME_SEARCH,mZ6B','','','https://www.vinci-construction-projets.com/en/',''),
(603,'Bill Gates','Manager of eCommerce Search Strategy at FERGUSON ENTERPRISES','Ferguson Enterprises','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAHOl2oBQaCyz-nLmgVpYs8lThHz41Q7TO8,NAME_SEARCH,HH-r','','','',''),
(604,'Bill Gates','Maricopa County/PING Golf','Maricopa County','Phoenix, Arizona, United States','https://www.linkedin.com/sales/people/ACwAABeVNsYB8eEoZ2CM2QyfaIPToiigfFtbMJI,NAME_SEARCH,yngI','','','http://billgatesaz.com','billgatesaz(TWITTER)'),
(605,'Bill Gates','VP Manufacturing - Grocery Platform at ConAgra Foods','Conagra Brands','Batesville, Arkansas, United States','https://www.linkedin.com/sales/people/ACwAAAF5GxcBpyS-lWUZEqIf6K8OFvPplyrLFRg,NAME_SEARCH,AiNc','','','',''),
(606,'William Gates','Systems Programmer/Analyst at RTI International','RTI International','RTP, North Carolina','https://www.linkedin.com/sales/people/ACwAABYiZYkB-HAtUFEw6TpmZVIXo2rCu7CZL20,NAME_SEARCH,pINt','','','',''),
(607,'Bill Gates','Business Development Mgr - Imaging Solutions','Epson','United States','https://www.linkedin.com/sales/people/ACwAAADjhtsBZmsHL_dz1XSf02xX6sKnRyuGcvQ,NAME_SEARCH,AJw9','','','',''),
(608,'Bill Gates','Network Security Engineer III at ADT Cybersecurity at ADT','ADT Cybersecurity SMB','Greensboro/Winston-Salem, North Carolina Area','https://www.linkedin.com/sales/people/ACwAABH-B44BRR0MQQOuQX-8_wwFKmllDYk6zEM,NAME_SEARCH,UInB','','','https://www.nexxt.com/p/Bill-Gates',''),
(609,'Bill Gates - law AT laptopmillionairesinc DOT net','Co-Founder at United Federations of Planets','LaptopMillionaires.info','La Jolla, California','https://www.linkedin.com/sales/people/ACwAACPmLRQBbW_Sx3-5csy8yQnywxkxWcsXl88,NAME_SEARCH,kCHF','','','',''),
(610,'William Gates','General Manager','City of Greeley','Lakewood, CO','https://www.linkedin.com/sales/people/ACwAAANfLhsBn656nBIS2DkTYGCziQPeBxYP1AQ,NAME_SEARCH,EThE','','','',''),
(611,'William Gates','EVP, Business Development &amp; Alliances at SmartStream Technologies','SmartStream Technologies','New York, NY','https://www.linkedin.com/sales/people/ACwAAACEi20BVQa_b_GHY9QtLdweR44oIehu7IQ,NAME_SEARCH,le5e','','','',''),
(612,'William Gates','Chief of Staff and Head of Strategic Planning','IQVIA','Singapore','https://www.linkedin.com/sales/people/ACwAAASg7HQB8lPcXcBYXbhL0Ju3ulT_a2N89Nc,NAME_SEARCH,bL1s','','','',''),
(613,'Bill Gates','Advisory Board Member at Dependalite LLC ','Dependalite LLC ','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAJoKq8B891ptI3rTLD7thac8qeKc1dL1Sw,NAME_SEARCH,w-OT','','','https://www.advisorycloud.com/profile/Bill-Gates',''),
(614,'Bill Gates','Retired former senior software engineer at QAD Inc.','QAD Inc.','Santa Barbara, California Area','https://www.linkedin.com/sales/people/ACwAAAFsyocBPdv4Pk8drcLGPeU_bvd7m_44V1E,NAME_SEARCH,XYNQ','','','',''),
(615,'bill gates','chairman 3PL Advisory Services LLC and Sunland Logistics','UTi Worldwide','Pawleys Island, South Carolina, United States','https://www.linkedin.com/sales/people/ACwAABLNr2IBWSoUrc9Eg6boQfvfo2J071VVRng,NAME_SEARCH,QJCQ','','','',''),
(616,'Bill Gates','Making my clients Rich,  one idea at a time! ','Bill Gates Marketing','Jacksonville, Florida','https://www.linkedin.com/sales/people/ACwAAAIwzVQB7EO6GFEqsvwu5NUU3Z0bGV_V2lk,NAME_SEARCH,7dYs','','','https://www.billgatesmarketing.com',''),
(617,'William Gates','Enterprise Architect at AstraZeneca','AstraZeneca','Gaithersburg, Maryland','https://www.linkedin.com/sales/people/ACwAAACDS5MBgPBFy-C5bfu5EWS-N8A0NUj7gsg,NAME_SEARCH,2K16','','','http://wtfcoders.blogspot.com',''),
(618,'William Gates','Hoop Dreams Elite','Hoop Dreams Elite LLC','San Antonio, Texas Area','https://www.linkedin.com/sales/people/ACwAAAhquf8BC9v5eYW-t63mLvhVeeIb_jYaWeY,NAME_SEARCH,OK5s','','','http://www.teamhoopdreams.com',''),
(619,'William Gates','Corporate Development and Strategy at WarnerMedia','WarnerMedia','New York, New York','https://www.linkedin.com/sales/people/ACwAABdOikUB8sbPJ1qobyK39RueLrnnmOsd3Dg,NAME_SEARCH,Jr7w','','','',''),
(620,'Bill Gates','Operations at Next Chapter Energy Services','Next Chapter Energy Services','Edmonton, Alberta, Canada','https://www.linkedin.com/sales/people/ACwAABcXjHEBJKkOOqPvz1A1PMXy49JROkQI75Q,NAME_SEARCH,qCZN','','','',''),
(621,'William Gates','Fleet maintenance expert','looking for new opporunity','Chicago','https://www.linkedin.com/sales/people/ACwAAApLYQ8B4iAxRE8md03Jn4Dr-qMtNWRtwcA,NAME_SEARCH,tTnr','','','',''),
(622,'William Gates','Communications Manager at VINCI Construction Grands Projets','VINCI Construction Grands Projets','London, United Kingdom','https://www.linkedin.com/sales/people/ACwAAAWmmE0BMZ_O1QuOoXbt4PJpRNmoZC4l7EM,NAME_SEARCH,mZ6B','','','https://www.vinci-construction-projets.com/en/',''),
(623,'William Gates','Communications Manager at VINCI Construction Grands Projets','VINCI Construction Grands Projets','London, United Kingdom','https://www.linkedin.com/sales/people/ACwAAAWmmE0BMZ_O1QuOoXbt4PJpRNmoZC4l7EM,NAME_SEARCH,mZ6B','','','https://www.vinci-construction-projets.com/en/',''),
(624,'William Gates','CLSS, CSO','Marriott International','Chicago, Illinois, United States','https://www.linkedin.com/sales/people/ACwAABW4zwQBDj06y6hM3sGb-34EeBEZIFVFvlk,NAME_SEARCH,NJEz','','','',''),
(625,'William Gates','Communications Manager at VINCI Construction Grands Projets','VINCI Construction Grands Projets','London, United Kingdom','https://www.linkedin.com/sales/people/ACwAAAWmmE0BMZ_O1QuOoXbt4PJpRNmoZC4l7EM,NAME_SEARCH,mZ6B','','','https://www.vinci-construction-projets.com/en/',''),
(626,'William Gates','CLSS, CSO','Marriott International','Chicago, Illinois, United States','https://www.linkedin.com/sales/people/ACwAABW4zwQBDj06y6hM3sGb-34EeBEZIFVFvlk,NAME_SEARCH,NJEz','','','',''),
(627,'William Gates','Corporate Development and Strategy at WarnerMedia','WarnerMedia','New York, New York','https://www.linkedin.com/sales/people/ACwAABdOikUB8sbPJ1qobyK39RueLrnnmOsd3Dg,NAME_SEARCH,Jr7w','','','',''),
(628,'William Gates','Corporate Development and Strategy at WarnerMedia','WarnerMedia','New York, New York','https://www.linkedin.com/sales/people/ACwAABdOikUB8sbPJ1qobyK39RueLrnnmOsd3Dg,NAME_SEARCH,Jr7w','','','',''),
(629,'William Gates','CLSS, CSO','Marriott International','Chicago, Illinois, United States','https://www.linkedin.com/sales/people/ACwAABW4zwQBDj06y6hM3sGb-34EeBEZIFVFvlk,NAME_SEARCH,NJEz','','','',''),
(630,'William Gates','Hoop Dreams Elite','Hoop Dreams Elite LLC','San Antonio, Texas Area','https://www.linkedin.com/sales/people/ACwAAAhquf8BC9v5eYW-t63mLvhVeeIb_jYaWeY,NAME_SEARCH,OK5s','','','http://www.teamhoopdreams.com',''),
(631,'William Gates','Corporate Development and Strategy at WarnerMedia','WarnerMedia','New York, New York','https://www.linkedin.com/sales/people/ACwAABdOikUB8sbPJ1qobyK39RueLrnnmOsd3Dg,NAME_SEARCH,Jr7w','','','',''),
(632,'William Gates','Hoop Dreams Elite','Hoop Dreams Elite LLC','San Antonio, Texas Area','https://www.linkedin.com/sales/people/ACwAAAhquf8BC9v5eYW-t63mLvhVeeIb_jYaWeY,NAME_SEARCH,OK5s','','','http://www.teamhoopdreams.com',''),
(633,'William Gates','Hoop Dreams Elite','Hoop Dreams Elite LLC','San Antonio, Texas Area','https://www.linkedin.com/sales/people/ACwAAAhquf8BC9v5eYW-t63mLvhVeeIb_jYaWeY,NAME_SEARCH,OK5s','','','http://www.teamhoopdreams.com',''),
(634,'bill gates','chairman 3PL Advisory Services LLC and Sunland Logistics','UTi Worldwide','Pawleys Island, South Carolina, United States','https://www.linkedin.com/sales/people/ACwAABLNr2IBWSoUrc9Eg6boQfvfo2J071VVRng,NAME_SEARCH,QJCQ','','','',''),
(635,'bill gates','chairman 3PL Advisory Services LLC and Sunland Logistics','UTi Worldwide','Pawleys Island, South Carolina, United States','https://www.linkedin.com/sales/people/ACwAABLNr2IBWSoUrc9Eg6boQfvfo2J071VVRng,NAME_SEARCH,QJCQ','','','',''),
(636,'bill gates','chairman 3PL Advisory Services LLC and Sunland Logistics','UTi Worldwide','Pawleys Island, South Carolina, United States','https://www.linkedin.com/sales/people/ACwAABLNr2IBWSoUrc9Eg6boQfvfo2J071VVRng,NAME_SEARCH,QJCQ','','','',''),
(637,'William Gates','Ophthalmologist','NueCura Partners, LLC','Brentwood, TN','https://www.linkedin.com/sales/people/ACwAABWmwgUBNdXbjuHZZUMx8SwU4xEh4ifmxvg,NAME_SEARCH,67nb','','','',''),
(638,'William Gates','Ophthalmologist','NueCura Partners, LLC','Brentwood, TN','https://www.linkedin.com/sales/people/ACwAABWmwgUBNdXbjuHZZUMx8SwU4xEh4ifmxvg,NAME_SEARCH,67nb','','','',''),
(639,'Bill Gates','Advisory Board Member at Dependalite LLC ','Dependalite LLC ','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAJoKq8B891ptI3rTLD7thac8qeKc1dL1Sw,NAME_SEARCH,w-OT','','','https://www.advisorycloud.com/profile/Bill-Gates',''),
(640,'William Gates','Ophthalmologist','NueCura Partners, LLC','Brentwood, TN','https://www.linkedin.com/sales/people/ACwAABWmwgUBNdXbjuHZZUMx8SwU4xEh4ifmxvg,NAME_SEARCH,67nb','','','',''),
(641,'Bill Gates','Advisory Board Member at Dependalite LLC ','Dependalite LLC ','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAJoKq8B891ptI3rTLD7thac8qeKc1dL1Sw,NAME_SEARCH,w-OT','','','https://www.advisorycloud.com/profile/Bill-Gates',''),
(642,'Bill Gates','Senior IT Recruiter ready for my next challenge.  &#92;nSkilled in ERP, Web, Client-Server and Intel Recruiting.','Revolution Technonlogies','Myrtle Beach SC','https://www.linkedin.com/sales/people/ACwAAACa_tABXqrvsu_pbvhznG4J2nI616ThcQc,NAME_SEARCH,1AYv','','','',''),
(643,'Bill Gates','Advisory Board Member at Dependalite LLC ','Dependalite LLC ','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAJoKq8B891ptI3rTLD7thac8qeKc1dL1Sw,NAME_SEARCH,w-OT','','','https://www.advisorycloud.com/profile/Bill-Gates',''),
(644,'Bill Gates','Senior IT Recruiter ready for my next challenge.  &#92;nSkilled in ERP, Web, Client-Server and Intel Recruiting.','Revolution Technonlogies','Myrtle Beach SC','https://www.linkedin.com/sales/people/ACwAAACa_tABXqrvsu_pbvhznG4J2nI616ThcQc,NAME_SEARCH,1AYv','','','',''),
(645,'Bill Gates','Business Development Mgr - Imaging Solutions','Epson','United States','https://www.linkedin.com/sales/people/ACwAAADjhtsBZmsHL_dz1XSf02xX6sKnRyuGcvQ,NAME_SEARCH,AJw9','','','',''),
(646,'Bill Gates','Senior IT Recruiter ready for my next challenge.  &#92;nSkilled in ERP, Web, Client-Server and Intel Recruiting.','Revolution Technonlogies','Myrtle Beach SC','https://www.linkedin.com/sales/people/ACwAAACa_tABXqrvsu_pbvhznG4J2nI616ThcQc,NAME_SEARCH,1AYv','','','',''),
(647,'Bill Gates','Business Development Mgr - Imaging Solutions','Epson','United States','https://www.linkedin.com/sales/people/ACwAAADjhtsBZmsHL_dz1XSf02xX6sKnRyuGcvQ,NAME_SEARCH,AJw9','','','',''),
(648,'Bill Gates','Partner, HR &amp; Admin Practice  at Hirewell','Hirewell','Greater Chicago Area','https://www.linkedin.com/sales/people/ACwAAAM0LtIBUEOll1-Er-ozTvTeL8_2im9ta1w,NAME_SEARCH,nhLE','','','http://www.hirewell.com',''),
(649,'Bill Gates','Business Development Mgr - Imaging Solutions','Epson','United States','https://www.linkedin.com/sales/people/ACwAAADjhtsBZmsHL_dz1XSf02xX6sKnRyuGcvQ,NAME_SEARCH,AJw9','','','',''),
(650,'Bill Gates','Retired former senior software engineer at QAD Inc.','QAD Inc.','Santa Barbara, California Area','https://www.linkedin.com/sales/people/ACwAAAFsyocBPdv4Pk8drcLGPeU_bvd7m_44V1E,NAME_SEARCH,XYNQ','','','',''),
(651,'Bill Gates','Partner, HR &amp; Admin Practice  at Hirewell','Hirewell','Greater Chicago Area','https://www.linkedin.com/sales/people/ACwAAAM0LtIBUEOll1-Er-ozTvTeL8_2im9ta1w,NAME_SEARCH,nhLE','','','http://www.hirewell.com',''),
(652,'Bill Gates','Partner, HR &amp; Admin Practice  at Hirewell','Hirewell','Greater Chicago Area','https://www.linkedin.com/sales/people/ACwAAAM0LtIBUEOll1-Er-ozTvTeL8_2im9ta1w,NAME_SEARCH,nhLE','','','http://www.hirewell.com',''),
(653,'Bill Gates','Maricopa County/PING Golf','Maricopa County','Phoenix, Arizona, United States','https://www.linkedin.com/sales/people/ACwAABeVNsYB8eEoZ2CM2QyfaIPToiigfFtbMJI,NAME_SEARCH,yngI','','','http://billgatesaz.com','billgatesaz(TWITTER)'),
(654,'Bill Gates','Retired former senior software engineer at QAD Inc.','QAD Inc.','Santa Barbara, California Area','https://www.linkedin.com/sales/people/ACwAAAFsyocBPdv4Pk8drcLGPeU_bvd7m_44V1E,NAME_SEARCH,XYNQ','','','',''),
(655,'Bill Gates','Manager of eCommerce Search Strategy at FERGUSON ENTERPRISES','Ferguson Enterprises','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAHOl2oBQaCyz-nLmgVpYs8lThHz41Q7TO8,NAME_SEARCH,HH-r','','','',''),
(656,'Bill Gates','Retired former senior software engineer at QAD Inc.','QAD Inc.','Santa Barbara, California Area','https://www.linkedin.com/sales/people/ACwAAAFsyocBPdv4Pk8drcLGPeU_bvd7m_44V1E,NAME_SEARCH,XYNQ','','','',''),
(657,'Bill Gates','Maricopa County/PING Golf','Maricopa County','Phoenix, Arizona, United States','https://www.linkedin.com/sales/people/ACwAABeVNsYB8eEoZ2CM2QyfaIPToiigfFtbMJI,NAME_SEARCH,yngI','','','http://billgatesaz.com','billgatesaz(TWITTER)'),
(658,'Bill Gates','Operations at Next Chapter Energy Services','Next Chapter Energy Services','Edmonton, Alberta, Canada','https://www.linkedin.com/sales/people/ACwAABcXjHEBJKkOOqPvz1A1PMXy49JROkQI75Q,NAME_SEARCH,qCZN','','','',''),
(659,'Bill Gates','Manager of eCommerce Search Strategy at FERGUSON ENTERPRISES','Ferguson Enterprises','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAHOl2oBQaCyz-nLmgVpYs8lThHz41Q7TO8,NAME_SEARCH,HH-r','','','',''),
(660,'Bill Gates','Maricopa County/PING Golf','Maricopa County','Phoenix, Arizona, United States','https://www.linkedin.com/sales/people/ACwAABeVNsYB8eEoZ2CM2QyfaIPToiigfFtbMJI,NAME_SEARCH,yngI','','','http://billgatesaz.com','billgatesaz(TWITTER)'),
(661,'Bill Gates - law AT laptopmillionairesinc DOT net','Co-Founder at United Federations of Planets','LaptopMillionaires.info','La Jolla, California','https://www.linkedin.com/sales/people/ACwAACPmLRQBbW_Sx3-5csy8yQnywxkxWcsXl88,NAME_SEARCH,kCHF','','','',''),
(662,'Bill Gates','Operations at Next Chapter Energy Services','Next Chapter Energy Services','Edmonton, Alberta, Canada','https://www.linkedin.com/sales/people/ACwAABcXjHEBJKkOOqPvz1A1PMXy49JROkQI75Q,NAME_SEARCH,qCZN','','','',''),
(663,'Bill Gates','Co-chair, Bill &amp; Melinda Gates Foundation','Bill &amp; Melinda Gates Foundation','Seattle, Washington, United States','https://www.linkedin.com/sales/people/ACwAAA8BYqEBlKc364xhzvygIeuJJ3rATiwe2NE,NAME_SEARCH,4kpE','','','https://gatesnot.es/linkedin',''),
(664,'Bill Gates','Manager of eCommerce Search Strategy at FERGUSON ENTERPRISES','Ferguson Enterprises','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAHOl2oBQaCyz-nLmgVpYs8lThHz41Q7TO8,NAME_SEARCH,HH-r','','','',''),
(665,'Bill Gates - law AT laptopmillionairesinc DOT net','Co-Founder at United Federations of Planets','LaptopMillionaires.info','La Jolla, California','https://www.linkedin.com/sales/people/ACwAACPmLRQBbW_Sx3-5csy8yQnywxkxWcsXl88,NAME_SEARCH,kCHF','','','',''),
(666,'William Gates','EVP, Business Development &amp; Alliances at SmartStream Technologies','SmartStream Technologies','New York, NY','https://www.linkedin.com/sales/people/ACwAAACEi20BVQa_b_GHY9QtLdweR44oIehu7IQ,NAME_SEARCH,le5e','','','',''),
(667,'Bill Gates','Operations at Next Chapter Energy Services','Next Chapter Energy Services','Edmonton, Alberta, Canada','https://www.linkedin.com/sales/people/ACwAABcXjHEBJKkOOqPvz1A1PMXy49JROkQI75Q,NAME_SEARCH,qCZN','','','',''),
(668,'Bill Gates','Co-chair, Bill &amp; Melinda Gates Foundation','Bill &amp; Melinda Gates Foundation','Seattle, Washington, United States','https://www.linkedin.com/sales/people/ACwAAA8BYqEBlKc364xhzvygIeuJJ3rATiwe2NE,NAME_SEARCH,4kpE','','','https://gatesnot.es/linkedin',''),
(669,'William Gates','Enterprise Architect at AstraZeneca','AstraZeneca','Gaithersburg, Maryland','https://www.linkedin.com/sales/people/ACwAAACDS5MBgPBFy-C5bfu5EWS-N8A0NUj7gsg,NAME_SEARCH,2K16','','','http://wtfcoders.blogspot.com',''),
(670,'Bill Gates - law AT laptopmillionairesinc DOT net','Co-Founder at United Federations of Planets','LaptopMillionaires.info','La Jolla, California','https://www.linkedin.com/sales/people/ACwAACPmLRQBbW_Sx3-5csy8yQnywxkxWcsXl88,NAME_SEARCH,kCHF','','','',''),
(671,'William Gates','Fleet maintenance expert','looking for new opporunity','Chicago','https://www.linkedin.com/sales/people/ACwAAApLYQ8B4iAxRE8md03Jn4Dr-qMtNWRtwcA,NAME_SEARCH,tTnr','','','',''),
(672,'William Gates','EVP, Business Development &amp; Alliances at SmartStream Technologies','SmartStream Technologies','New York, NY','https://www.linkedin.com/sales/people/ACwAAACEi20BVQa_b_GHY9QtLdweR44oIehu7IQ,NAME_SEARCH,le5e','','','',''),
(673,'Bill Gates','Co-chair, Bill &amp; Melinda Gates Foundation','Bill &amp; Melinda Gates Foundation','Seattle, Washington, United States','https://www.linkedin.com/sales/people/ACwAAA8BYqEBlKc364xhzvygIeuJJ3rATiwe2NE,NAME_SEARCH,4kpE','','','https://gatesnot.es/linkedin',''),
(674,'William Gates','Chief of Staff and Head of Strategic Planning','IQVIA','Singapore','https://www.linkedin.com/sales/people/ACwAAASg7HQB8lPcXcBYXbhL0Ju3ulT_a2N89Nc,NAME_SEARCH,bL1s','','','',''),
(675,'William Gates','Enterprise Architect at AstraZeneca','AstraZeneca','Gaithersburg, Maryland','https://www.linkedin.com/sales/people/ACwAAACDS5MBgPBFy-C5bfu5EWS-N8A0NUj7gsg,NAME_SEARCH,2K16','','','http://wtfcoders.blogspot.com',''),
(676,'William Gates','EVP, Business Development &amp; Alliances at SmartStream Technologies','SmartStream Technologies','New York, NY','https://www.linkedin.com/sales/people/ACwAAACEi20BVQa_b_GHY9QtLdweR44oIehu7IQ,NAME_SEARCH,le5e','','','',''),
(677,'Bill Gates','Network Security Engineer III at ADT Cybersecurity at ADT','ADT Cybersecurity SMB','Greensboro/Winston-Salem, North Carolina Area','https://www.linkedin.com/sales/people/ACwAABH-B44BRR0MQQOuQX-8_wwFKmllDYk6zEM,NAME_SEARCH,UInB','','','https://www.nexxt.com/p/Bill-Gates',''),
(678,'William Gates','Fleet maintenance expert','looking for new opporunity','Chicago','https://www.linkedin.com/sales/people/ACwAAApLYQ8B4iAxRE8md03Jn4Dr-qMtNWRtwcA,NAME_SEARCH,tTnr','','','',''),
(679,'William Gates','Systems Programmer/Analyst at RTI International','RTI International','RTP, North Carolina','https://www.linkedin.com/sales/people/ACwAABYiZYkB-HAtUFEw6TpmZVIXo2rCu7CZL20,NAME_SEARCH,pINt','','','',''),
(680,'William Gates','Enterprise Architect at AstraZeneca','AstraZeneca','Gaithersburg, Maryland','https://www.linkedin.com/sales/people/ACwAAACDS5MBgPBFy-C5bfu5EWS-N8A0NUj7gsg,NAME_SEARCH,2K16','','','http://wtfcoders.blogspot.com',''),
(681,'William Gates','Chief of Staff and Head of Strategic Planning','IQVIA','Singapore','https://www.linkedin.com/sales/people/ACwAAASg7HQB8lPcXcBYXbhL0Ju3ulT_a2N89Nc,NAME_SEARCH,bL1s','','','',''),
(682,'William Gates','General Manager','City of Greeley','Lakewood, CO','https://www.linkedin.com/sales/people/ACwAAANfLhsBn656nBIS2DkTYGCziQPeBxYP1AQ,NAME_SEARCH,EThE','','','',''),
(683,'William Gates','Fleet maintenance expert','looking for new opporunity','Chicago','https://www.linkedin.com/sales/people/ACwAAApLYQ8B4iAxRE8md03Jn4Dr-qMtNWRtwcA,NAME_SEARCH,tTnr','','','',''),
(684,'Bill Gates','Network Security Engineer III at ADT Cybersecurity at ADT','ADT Cybersecurity SMB','Greensboro/Winston-Salem, North Carolina Area','https://www.linkedin.com/sales/people/ACwAABH-B44BRR0MQQOuQX-8_wwFKmllDYk6zEM,NAME_SEARCH,UInB','','','https://www.nexxt.com/p/Bill-Gates',''),
(685,'William Gates','Chief of Staff and Head of Strategic Planning','IQVIA','Singapore','https://www.linkedin.com/sales/people/ACwAAASg7HQB8lPcXcBYXbhL0Ju3ulT_a2N89Nc,NAME_SEARCH,bL1s','','','',''),
(686,'Bill Gates','VP Manufacturing - Grocery Platform at ConAgra Foods','Conagra Brands','Batesville, Arkansas, United States','https://www.linkedin.com/sales/people/ACwAAAF5GxcBpyS-lWUZEqIf6K8OFvPplyrLFRg,NAME_SEARCH,AiNc','','','',''),
(687,'William Gates','Systems Programmer/Analyst at RTI International','RTI International','RTP, North Carolina','https://www.linkedin.com/sales/people/ACwAABYiZYkB-HAtUFEw6TpmZVIXo2rCu7CZL20,NAME_SEARCH,pINt','','','',''),
(688,'Bill Gates','Making my clients Rich,  one idea at a time! ','Bill Gates Marketing','Jacksonville, Florida','https://www.linkedin.com/sales/people/ACwAAAIwzVQB7EO6GFEqsvwu5NUU3Z0bGV_V2lk,NAME_SEARCH,7dYs','','','https://www.billgatesmarketing.com',''),
(689,'Bill Gates','Network Security Engineer III at ADT Cybersecurity at ADT','ADT Cybersecurity SMB','Greensboro/Winston-Salem, North Carolina Area','https://www.linkedin.com/sales/people/ACwAABH-B44BRR0MQQOuQX-8_wwFKmllDYk6zEM,NAME_SEARCH,UInB','','','https://www.nexxt.com/p/Bill-Gates',''),
(690,'William Gates','General Manager','City of Greeley','Lakewood, CO','https://www.linkedin.com/sales/people/ACwAAANfLhsBn656nBIS2DkTYGCziQPeBxYP1AQ,NAME_SEARCH,EThE','','','',''),
(691,'William Gates','Systems Programmer/Analyst at RTI International','RTI International','RTP, North Carolina','https://www.linkedin.com/sales/people/ACwAABYiZYkB-HAtUFEw6TpmZVIXo2rCu7CZL20,NAME_SEARCH,pINt','','','',''),
(692,'Bill Gates','VP Manufacturing - Grocery Platform at ConAgra Foods','Conagra Brands','Batesville, Arkansas, United States','https://www.linkedin.com/sales/people/ACwAAAF5GxcBpyS-lWUZEqIf6K8OFvPplyrLFRg,NAME_SEARCH,AiNc','','','',''),
(693,'William Gates','General Manager','City of Greeley','Lakewood, CO','https://www.linkedin.com/sales/people/ACwAAANfLhsBn656nBIS2DkTYGCziQPeBxYP1AQ,NAME_SEARCH,EThE','','','',''),
(694,'Bill Gates','Making my clients Rich,  one idea at a time! ','Bill Gates Marketing','Jacksonville, Florida','https://www.linkedin.com/sales/people/ACwAAAIwzVQB7EO6GFEqsvwu5NUU3Z0bGV_V2lk,NAME_SEARCH,7dYs','','','https://www.billgatesmarketing.com',''),
(695,'Bill Gates','VP Manufacturing - Grocery Platform at ConAgra Foods','Conagra Brands','Batesville, Arkansas, United States','https://www.linkedin.com/sales/people/ACwAAAF5GxcBpyS-lWUZEqIf6K8OFvPplyrLFRg,NAME_SEARCH,AiNc','','','',''),
(696,'Bill Gates','Making my clients Rich,  one idea at a time! ','Bill Gates Marketing','Jacksonville, Florida','https://www.linkedin.com/sales/people/ACwAAAIwzVQB7EO6GFEqsvwu5NUU3Z0bGV_V2lk,NAME_SEARCH,7dYs','','','https://www.billgatesmarketing.com',''),
(697,'William Gates','Communications Manager at VINCI Construction Grands Projets','VINCI Construction Grands Projets','London, United Kingdom','https://www.linkedin.com/sales/people/ACwAAAWmmE0BMZ_O1QuOoXbt4PJpRNmoZC4l7EM,NAME_SEARCH,mZ6B','','','https://www.vinci-construction-projets.com/en/',''),
(698,'William Gates','CLSS, CSO','Marriott International','Chicago, Illinois, United States','https://www.linkedin.com/sales/people/ACwAABW4zwQBDj06y6hM3sGb-34EeBEZIFVFvlk,NAME_SEARCH,NJEz','','','',''),
(699,'William Gates','Corporate Development and Strategy at WarnerMedia','WarnerMedia','New York, New York','https://www.linkedin.com/sales/people/ACwAABdOikUB8sbPJ1qobyK39RueLrnnmOsd3Dg,NAME_SEARCH,Jr7w','','','',''),
(700,'William Gates','Hoop Dreams Elite','Hoop Dreams Elite LLC','San Antonio, Texas Area','https://www.linkedin.com/sales/people/ACwAAAhquf8BC9v5eYW-t63mLvhVeeIb_jYaWeY,NAME_SEARCH,OK5s','','','http://www.teamhoopdreams.com',''),
(701,'bill gates','chairman 3PL Advisory Services LLC and Sunland Logistics','UTi Worldwide','Pawleys Island, South Carolina, United States','https://www.linkedin.com/sales/people/ACwAABLNr2IBWSoUrc9Eg6boQfvfo2J071VVRng,NAME_SEARCH,QJCQ','','','',''),
(702,'William Gates','Ophthalmologist','NueCura Partners, LLC','Brentwood, TN','https://www.linkedin.com/sales/people/ACwAABWmwgUBNdXbjuHZZUMx8SwU4xEh4ifmxvg,NAME_SEARCH,67nb','','','',''),
(703,'Bill Gates','Advisory Board Member at Dependalite LLC ','Dependalite LLC ','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAJoKq8B891ptI3rTLD7thac8qeKc1dL1Sw,NAME_SEARCH,w-OT','','','https://www.advisorycloud.com/profile/Bill-Gates',''),
(704,'Bill Gates','Senior IT Recruiter ready for my next challenge.  &#92;nSkilled in ERP, Web, Client-Server and Intel Recruiting.','Revolution Technonlogies','Myrtle Beach SC','https://www.linkedin.com/sales/people/ACwAAACa_tABXqrvsu_pbvhznG4J2nI616ThcQc,NAME_SEARCH,1AYv','','','',''),
(705,'Bill Gates','Business Development Mgr - Imaging Solutions','Epson','United States','https://www.linkedin.com/sales/people/ACwAAADjhtsBZmsHL_dz1XSf02xX6sKnRyuGcvQ,NAME_SEARCH,AJw9','','','',''),
(706,'Bill Gates','Partner, HR &amp; Admin Practice  at Hirewell','Hirewell','Greater Chicago Area','https://www.linkedin.com/sales/people/ACwAAAM0LtIBUEOll1-Er-ozTvTeL8_2im9ta1w,NAME_SEARCH,nhLE','','','http://www.hirewell.com',''),
(707,'Bill Gates','Retired former senior software engineer at QAD Inc.','QAD Inc.','Santa Barbara, California Area','https://www.linkedin.com/sales/people/ACwAAAFsyocBPdv4Pk8drcLGPeU_bvd7m_44V1E,NAME_SEARCH,XYNQ','','','',''),
(708,'Bill Gates','Maricopa County/PING Golf','Maricopa County','Phoenix, Arizona, United States','https://www.linkedin.com/sales/people/ACwAABeVNsYB8eEoZ2CM2QyfaIPToiigfFtbMJI,NAME_SEARCH,yngI','','','http://billgatesaz.com','billgatesaz(TWITTER)'),
(709,'Bill Gates','Manager of eCommerce Search Strategy at FERGUSON ENTERPRISES','Ferguson Enterprises','Cleveland, Ohio, United States','https://www.linkedin.com/sales/people/ACwAAAHOl2oBQaCyz-nLmgVpYs8lThHz41Q7TO8,NAME_SEARCH,HH-r','','','',''),
(710,'Bill Gates','Operations at Next Chapter Energy Services','Next Chapter Energy Services','Edmonton, Alberta, Canada','https://www.linkedin.com/sales/people/ACwAABcXjHEBJKkOOqPvz1A1PMXy49JROkQI75Q,NAME_SEARCH,qCZN','','','',''),
(711,'Bill Gates - law AT laptopmillionairesinc DOT net','Co-Founder at United Federations of Planets','LaptopMillionaires.info','La Jolla, California','https://www.linkedin.com/sales/people/ACwAACPmLRQBbW_Sx3-5csy8yQnywxkxWcsXl88,NAME_SEARCH,kCHF','','','',''),
(712,'Bill Gates','Co-chair, Bill &amp; Melinda Gates Foundation','Bill &amp; Melinda Gates Foundation','Seattle, Washington, United States','https://www.linkedin.com/sales/people/ACwAAA8BYqEBlKc364xhzvygIeuJJ3rATiwe2NE,NAME_SEARCH,4kpE','','','https://gatesnot.es/linkedin',''),
(713,'William Gates','EVP, Business Development &amp; Alliances at SmartStream Technologies','SmartStream Technologies','New York, NY','https://www.linkedin.com/sales/people/ACwAAACEi20BVQa_b_GHY9QtLdweR44oIehu7IQ,NAME_SEARCH,le5e','','','',''),
(714,'William Gates','Enterprise Architect at AstraZeneca','AstraZeneca','Gaithersburg, Maryland','https://www.linkedin.com/sales/people/ACwAAACDS5MBgPBFy-C5bfu5EWS-N8A0NUj7gsg,NAME_SEARCH,2K16','','','http://wtfcoders.blogspot.com',''),
(715,'William Gates','Fleet maintenance expert','looking for new opporunity','Chicago','https://www.linkedin.com/sales/people/ACwAAApLYQ8B4iAxRE8md03Jn4Dr-qMtNWRtwcA,NAME_SEARCH,tTnr','','','',''),
(716,'William Gates','Chief of Staff and Head of Strategic Planning','IQVIA','Singapore','https://www.linkedin.com/sales/people/ACwAAASg7HQB8lPcXcBYXbhL0Ju3ulT_a2N89Nc,NAME_SEARCH,bL1s','','','',''),
(717,'Bill Gates','Network Security Engineer III at ADT Cybersecurity at ADT','ADT Cybersecurity SMB','Greensboro/Winston-Salem, North Carolina Area','https://www.linkedin.com/sales/people/ACwAABH-B44BRR0MQQOuQX-8_wwFKmllDYk6zEM,NAME_SEARCH,UInB','','','https://www.nexxt.com/p/Bill-Gates',''),
(718,'William Gates','Systems Programmer/Analyst at RTI International','RTI International','RTP, North Carolina','https://www.linkedin.com/sales/people/ACwAABYiZYkB-HAtUFEw6TpmZVIXo2rCu7CZL20,NAME_SEARCH,pINt','','','',''),
(719,'William Gates','General Manager','City of Greeley','Lakewood, CO','https://www.linkedin.com/sales/people/ACwAAANfLhsBn656nBIS2DkTYGCziQPeBxYP1AQ,NAME_SEARCH,EThE','','','',''),
(720,'Bill Gates','VP Manufacturing - Grocery Platform at ConAgra Foods','Conagra Brands','Batesville, Arkansas, United States','https://www.linkedin.com/sales/people/ACwAAAF5GxcBpyS-lWUZEqIf6K8OFvPplyrLFRg,NAME_SEARCH,AiNc','','','',''),
(721,'Bill Gates','Making my clients Rich,  one idea at a time! ','Bill Gates Marketing','Jacksonville, Florida','https://www.linkedin.com/sales/people/ACwAAAIwzVQB7EO6GFEqsvwu5NUU3Z0bGV_V2lk,NAME_SEARCH,7dYs','','','https://www.billgatesmarketing.com','');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`trn_date`) values 
(1,'Miguel','miguel@gmail.com','3dbe00a167653a1aaee01d93e77e730e','2020-05-13 17:05:34'),
(2,'Miguelhoffmann','miguelhoffmannsmart@gmail.com','3dbe00a167653a1aaee01d93e77e730e','2020-05-14 04:51:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
