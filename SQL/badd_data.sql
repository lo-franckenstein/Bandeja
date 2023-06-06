-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: bandeja
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `articleId` int NOT NULL AUTO_INCREMENT,
  `articleTitre` text,
  `articleDescription` text,
  `articleTexte` text,
  `articleImage` varchar(255) DEFAULT NULL,
  `articleDate` datetime DEFAULT NULL,
  `articlePost` tinyint(1) DEFAULT NULL,
  `utilisateurId` int DEFAULT NULL,
  PRIMARY KEY (`articleId`),
  KEY `utilisateurId` (`utilisateurId`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (24,'Les bienfaits du Padel pour la santé','Découvrez comment le Padel peut améliorer votre condition physique et votre bien-être.','Le Padel est un sport dynamique qui combine le tennis et le squash. En plus de vous permettre de passer un bon moment, il présente de nombreux avantages pour la santé. La pratique régulière du Padel favorise l\'endurance, renforce les muscles, améliore la coordination et la concentration. Découvrez dans cet article tous les bienfaits de ce sport en plein essor.','https://bit.ly/3LG5wX7',NULL,1,30),(25,'Conseils pour choisir sa raquette de Padel','Trouver la raquette de Padel adaptée à votre style de jeu est essentiel pour progresser.','La raquette est l\'outil principal du joueur de Padel. Pour bien choisir sa raquette, il faut prendre en compte plusieurs critères tels que le poids, la forme, l\'équilibre et le matériau. Dans cet article, nous vous donnons des conseils précieux pour vous aider à trouver la raquette de Padel qui correspondra le mieux à votre niveau et à votre style de jeu.','https://bit.ly/3LG5wX7',NULL,1,31),(26,'Les règles essentielles du Padel','Découvrez les règles de base du Padel pour profiter pleinement de ce sport.','Le Padel est un sport convivial et facile à apprendre, mais il est important de connaître les règles de base pour pouvoir jouer correctement et respecter les autres joueurs. Dans cet article, nous vous expliquons les règles essentielles du Padel, notamment en ce qui concerne les dimensions du terrain, le décompte des points, les fautes et les stratégies de jeu.','https://bit.ly/3LG5wX7',NULL,1,32),(27,'Les meilleurs endroits pour jouer au Padel','Découvrez les clubs et les terrains de Padel les plus populaires dans votre région.','Si vous êtes passionné de Padel ou que vous souhaitez découvrir ce sport, il est essentiel de savoir où trouver les meilleurs endroits pour jouer. Dans cet article, nous vous présentons une sélection des clubs et des terrains de Padel les plus réputés, avec des installations de qualité et des ambiances conviviales. Trouvez l\'endroit idéal pour pratiquer le Padel près de chez vous !','https://bit.ly/3LG5wX7',NULL,1,33),(28,'Les techniques de base au Padel','Maîtrisez les gestes essentiels du Padel pour améliorer votre jeu.','Que vous soyez débutant ou joueur confirmé, connaître et maîtriser les techniques de base au Padel est crucial pour progresser et prendre du plaisir sur le terrain. Dans cet article, nous vous détaillons les gestes fondamentaux du Padel tels que le service, la volée, le lob, le smash et le coup droit. Suivez nos conseils et améliorez votre jeu au Padel !','https://bit.ly/3LG5wX7',NULL,1,34),(29,'Les accessoires indispensables pour jouer au Padel','Découvrez les accessoires qui vous seront utiles lors de vos parties de Padel.','Outre la raquette, il existe plusieurs accessoires qui peuvent améliorer votre expérience de jeu au Padel. Dans cet article, nous vous présentons les accessoires indispensables tels que les balles spécifiques au Padel, les grips de raquette, les chaussures adaptées, les vêtements confortables et les sacs de transport pratiques. Équipez-vous correctement et profitez pleinement de votre pratique du Padel !','https://bit.ly/3LG5wX7',NULL,1,35),(30,'Les tournois de Padel à ne pas manquer','Découvrez les compétitions de Padel les plus prestigieuses et excitantes.','Le Padel est un sport compétitif qui offre de nombreuses opportunités de participer à des tournois et des compétitions. Dans cet article, nous vous présentons les tournois de Padel les plus renommés, où vous pourrez voir s\'affronter les meilleurs joueurs mondiaux et vivre des moments palpitants. Notez les dates dans votre agenda et plongez dans l\'univers passionnant des tournois de Padel !','https://bit.ly/3LG5wX7',NULL,1,36),(31,'Alerte, manque 1 joueurs','Il manque un joueur pour demain. Match à 14h30 à Mokko',NULL,NULL,NULL,1,45),(32,'3 joueurs pour un match','J\'aimerais taper la balle avant de recommencer une semaine de travail, donc besoin de 3 personnes pour jouer soit à Géronsart ou à Mokko ce soir',NULL,NULL,NULL,1,34),(33,'Une paire pour demain?','Une paire pour demain à PlanetPadel? Entre 20h et 24h pour jouer 1h30',NULL,NULL,NULL,1,44),(34,'Match, manque 2 partenaires','Suite à une blessure d\'une paire, on cherche deux partenaires pour mercredi 11h à l\'Arena d\'Andenne',NULL,NULL,NULL,1,68),(35,'Qqn pour un tournoi?','Je débute dans le padel, je cherche un partenaire pour faire un tournoi prochainement. Dispo partout tant que c\'est en Belgique',NULL,NULL,NULL,1,32),(36,'des personnes pour jouer?','Envie de taper la balle, dispo à Vilvoorde au Y5C, niveau p300',NULL,NULL,NULL,1,55),(37,'1 personne P100?','Suite à un changement d\'avis, un joueur a quitté notre match, quelqu\'un pour le remplacer? à Mokko niveau p100',NULL,NULL,NULL,1,56),(38,'Créer un article','hgyvgtrhjtyrghygrth',NULL,NULL,NULL,1,45),(39,'Créer un compte','hgtfhgvtrhvgjtrhygnjtgrhgbj,thygnthyjy',NULL,NULL,NULL,1,33),(40,'Bug affichage','trhvjrtghvyntrghyvtrhyvgygtrhyggrth',NULL,NULL,NULL,1,55),(41,'Connexion soucis','thyghygrthtgrhyvytrghyvygtyhvggtryhvgtgy',NULL,NULL,NULL,1,34),(42,'Email???','ghyvgngtrhgtgryhnvgtgryhvgytrhyty',NULL,NULL,NULL,1,55),(43,'Ca charge lgt','ngytrhynvygrthyvytghygytrhygnytghyg',NULL,NULL,NULL,1,54),(44,'Connexion bug','yhgnthygrtyhgnygrthytgyhgtrhyygrthyg',NULL,NULL,NULL,1,33),(45,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3lugtAx',NULL,1,41),(46,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3lugtAx',NULL,1,43),(47,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3lugtAx',NULL,1,44),(48,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3JEnnLx',NULL,1,45),(49,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3lugtAx',NULL,1,46),(50,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3lugtAx',NULL,1,47),(51,'Raquette à vendre','rybubiuhdgbytiunhgyvtfyrvuygbhiunyturyuybiuntugybuturyfyhiugtufryguyiuhut',NULL,'bit.ly/3lugtAx',NULL,1,48);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_categorie`
--

DROP TABLE IF EXISTS `article_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article_categorie` (
  `article_CategorieId` int NOT NULL AUTO_INCREMENT,
  `articleId` int DEFAULT NULL,
  `categorieId` int DEFAULT NULL,
  PRIMARY KEY (`article_CategorieId`),
  KEY `articleId` (`articleId`),
  KEY `categorieId` (`categorieId`),
  CONSTRAINT `article_categorie_ibfk_1` FOREIGN KEY (`articleId`) REFERENCES `article` (`articleId`),
  CONSTRAINT `article_categorie_ibfk_2` FOREIGN KEY (`categorieId`) REFERENCES `categorie` (`categorieId`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_categorie`
--

LOCK TABLES `article_categorie` WRITE;
/*!40000 ALTER TABLE `article_categorie` DISABLE KEYS */;
INSERT INTO `article_categorie` VALUES (12,24,3),(13,25,3),(14,26,3),(15,27,3),(16,28,3),(17,29,3),(18,30,3),(19,31,4),(20,32,4),(21,33,4),(22,34,4),(23,35,4),(24,36,4),(25,37,4),(26,38,6),(27,39,6),(28,40,6),(29,41,6),(30,42,6),(31,43,6),(32,44,6),(33,45,5),(34,46,5),(35,47,5),(36,48,5),(37,49,5),(38,50,5),(39,51,5);
/*!40000 ALTER TABLE `article_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie` (
  `categorieId` int NOT NULL AUTO_INCREMENT,
  `categorieNom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categorieId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Annonce'),(2,'Actualité'),(3,'Forum'),(4,'Recherche Joueurs'),(5,'Boutique'),(6,'FAQ');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conversation` (
  `conversationId` int NOT NULL AUTO_INCREMENT,
  `conversationType` enum('binaire','groupe') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`conversationId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversation`
--

LOCK TABLES `conversation` WRITE;
/*!40000 ALTER TABLE `conversation` DISABLE KEYS */;
INSERT INTO `conversation` VALUES (1,''),(2,'binaire'),(3,'groupe'),(4,'binaire'),(5,'binaire'),(6,'binaire');
/*!40000 ALTER TABLE `conversation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `message` (
  `messageId` int NOT NULL AUTO_INCREMENT,
  `messageText` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `messageDate` date DEFAULT NULL,
  `messageHeure` time DEFAULT NULL,
  `utilisateurId` int DEFAULT NULL,
  `conversationId` int DEFAULT NULL,
  PRIMARY KEY (`messageId`),
  KEY `utilisateurId` (`utilisateurId`),
  KEY `conversationId` (`conversationId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `utilisateurId` int NOT NULL AUTO_INCREMENT,
  `utilisateurNom` varchar(255) DEFAULT NULL,
  `utilisateurPrenom` varchar(255) DEFAULT NULL,
  `utilisateurPseudo` varchar(255) DEFAULT NULL,
  `utilisateurEmail` varchar(255) DEFAULT NULL,
  `utilisateurMotdepasse` varchar(255) DEFAULT NULL,
  `utilisateurRole` varchar(255) DEFAULT NULL,
  `utilisateurOubli` int NOT NULL,
  PRIMARY KEY (`utilisateurId`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (30,'Francken','Louis','Khreight','louisthedeaf@gmail.com','LouisLouisCHUT','administrator',4422571),(31,'Student','Louis','220153','220153@site.asty-moulin.be','FL-220153CHUT','administrator',89637897),(32,'Doe','John','john.doe','john.doe@example.com','password123','user',34921775),(33,'Smith','Emma','emma.smith','emma.smith@example.com','password456','user',5695185),(34,'Johnson','Michael','michael.johnson','michael.johnson@example.com','password789','user',23710606),(35,'Williams','Olivia','olivia.williams','olivia.williams@example.com','password123','user',1467478),(36,'Brown','Noah','noah.brown','noah.brown@example.com','password456','user',36205576),(37,'Jones','Ava','ava.jones','ava.jones@example.com','password789','user',76625450),(38,'Garcia','Liam','liam.garcia','liam.garcia@example.com','password123','user',74510525),(39,'Miller','Isabella','isabella.miller','isabella.miller@example.com','password456','user',42676279),(40,'Davis','Sophia','sophia.davis','sophia.davis@example.com','password789','user',89849822),(41,'Martinez','Logan','logan.martinez','logan.martinez@example.com','password123','user',21220277),(42,'Thomas','Mia','mia.thomas','mia.thomas@example.com','password456','user',36551923),(43,'Hernandez','Lucas','lucas.hernandez','lucas.hernandez@example.com','password789','user',19098788),(44,'Moore','Harper','harper.moore','harper.moore@example.com','password123','user',85838174),(45,'Clark','Evelyn','evelyn.clark','evelyn.clark@example.com','password456','user',71894511),(46,'Lewis','Abigail','abigail.lewis','abigail.lewis@example.com','password789','user',1958036),(47,'Young','Elijah','elijah.young','elijah.young@example.com','password123','user',94106650),(48,'Walker','Charlotte','charlotte.walker','charlotte.walker@example.com','password456','user',64659146),(49,'Hall','Amelia','amelia.hall','amelia.hall@example.com','password789','user',40975783),(50,'Allen','Benjamin','benjamin.allen','benjamin.allen@example.com','password123','user',10901482),(51,'King','Henry','henry.king','henry.king@example.com','password456','user',31580065),(52,'Wright','Elizabeth','elizabeth.wright','elizabeth.wright@example.com','password789','user',25195880),(53,'Lopez','Sebastian','sebastian.lopez','sebastian.lopez@example.com','password123','user',31239210),(54,'Scott','Victoria','victoria.scott','victoria.scott@example.com','password456','user',80608415),(55,'Green','Penelope','penelope.green','penelope.green@example.com','password789','user',9324447),(56,'Adams','Daniel','daniel.adams','daniel.adams@example.com','password123','user',4796994),(57,'Baker','Scarlett','scarlett.baker','scarlett.baker@example.com','password456','user',96011633),(58,'Gonzalez','Matthew','matthew.gonzalez','matthew.gonzalez@example.com','password789','user',65667185),(59,'Nelson','Avery','avery.nelson','avery.nelson@example.com','password123','user',40301033),(60,'Carter','Sofia','sofia.carter','sofia.carter@example.com','password456','user',4503610),(61,'Lee','Dylan','dylan.lee','dylan.lee@example.com','password789','user',1614955),(62,'Perez','Mila','mila.perez','mila.perez@example.com','password123','user',94563950),(63,'Robinson','Wyatt','wyatt.robinson','wyatt.robinson@example.com','password456','user',67974888),(64,'Harris','Layla','layla.harris','layla.harris@example.com','password789','user',56182595),(65,'Clark','Gabriel','gabriel.clark','gabriel.clark@example.com','password123','user',76988314),(66,'Lewis','Scarlett','scarlett.lewis','scarlett.lewis@example.com','password456','user',16393790),(67,'Wright','Hannah','hannah.wright','hannah.wright@example.com','password789','user',51004009),(68,'Taylor','Landon','landon.taylor','landon.taylor@example.com','password123','user',5838679),(69,'White','Grace','grace.white','grace.white@example.com','password456','user',76181370);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur_conversation`
--

DROP TABLE IF EXISTS `utilisateur_conversation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur_conversation` (
  `utilisateurConversationId` int NOT NULL AUTO_INCREMENT,
  `conversationId` int DEFAULT NULL,
  `utilisateurId` int DEFAULT NULL,
  PRIMARY KEY (`utilisateurConversationId`),
  KEY `utilisateurId` (`utilisateurId`),
  KEY `conversationId` (`conversationId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur_conversation`
--

LOCK TABLES `utilisateur_conversation` WRITE;
/*!40000 ALTER TABLE `utilisateur_conversation` DISABLE KEYS */;
INSERT INTO `utilisateur_conversation` VALUES (1,6,30),(2,6,68);
/*!40000 ALTER TABLE `utilisateur_conversation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-25 16:17:02
