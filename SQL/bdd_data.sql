-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: bandeja
-- ------------------------------------------------------
-- Server version	5.6.17

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
  `articleId` int(11) NOT NULL AUTO_INCREMENT,
  `articleTitre` text,
  `articleDescription` text,
  `articleTexte` text,
  `articleImage` varchar(255) DEFAULT NULL,
  `articleDate` datetime DEFAULT NULL,
  `articlePost` tinyint(1) DEFAULT NULL,
  `utilisateurId` int(11) DEFAULT NULL,
  PRIMARY KEY (`articleId`),
  KEY `utilisateurId` (`utilisateurId`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (4,'Anecdote de Khreight','Après un coup droit, il a cassé la vitre','Lorem ipsum dolor sit amet. Eum nemo quod ea dolor sunt et iste incidunt. Sed voluptatem eligendi vel minus odit aut quia esse! Ut laborum obcaecati non asperiores unde et reiciendis tempore qui consequatur explicabo quo autem pariatur. Vel nihil sapiente et laudantium maiores ad molestias voluptas aut tenetur quia a quae excepturi ex aspernatur minus! Cum omnis earum non magni autem in ratione sunt ut quis laboriosam. Est consequatur error et aliquid explicabo eum obcaecati vero et quia voluptatem ut consequuntur reiciendis eum omnis sunt. 33 exercitationem dolor nam minima nulla rem aperiam itaque ab assumenda eveniet ut mollitia commodi. Vel cumque unde sed internos voluptatem eos natus odio At itaque distinctio ad galisum commodi et officiis temporibus ut aspernatur dolores? Et molestiae numquam aut nemo velit nam incidunt voluptatem qui harum voluptas id voluptatem mollitia et fuga placeat! Vel magnam pariatur qui pariatur dolorem in praesentium totam. Est eveniet sint qui nihil tempora id maxime nihil et illum ipsum ea laborum velit. Id explicabo quibusdam cum cumque nihil aut laborum labore. Est tenetur eligendi hic facere vitae 33 aspernatur corrupti. In repudiandae repudiandae eum excepturi beatae aut doloremque optio aut inventore sequi. Et assumenda omnis non quia provident ex veritatis quia est inventore tempora. Et molestiae internos quo porro laudantium ad facere excepturi et debitis quidem At aliquid dolorem aut odit illo est Quis voluptatibus. Et omnis velit et unde suscipit qui nesciunt praesentium. Et voluptates odit est dolore veniam et blanditiis omnis eum consequatur quos. Quo sequi tempore et eligendi autem vel sequi officiis. Est sequi exercitationem qui aspernatur iure aut aliquid reprehenderit qui labore quibusdam id doloribus consequatur est perspiciatis eligendi ea ipsa obcaecati. Qui veniam maxime ut dolore dolorem id magnam recusandae ut vitae quia. Ex laboriosam quaerat sit ratione corporis sit similique iure cum eaque reprehenderit? Et velit architecto et ipsa ten','bit.ly/3JEnnLx','2022-11-23 15:09:45',1,5),(5,'Raquette de Khreight','Raquette jamais utilisée','Bonjour, pour 300€, je vend ma raquette hiuoiudrhgoiduhogriuh durhgo iudhoirugh doiurhg oiduhroi huodiruhg oiduh orgihuodiruhg oiuhdoriguh odiurhg oiuhdrogiuh odiurhg oiudhrogiuh doiruhgo iduhogiudhr oiguhdoiruhgoidhrogiuhodirh go duhorgihuodihrugo iduhrogiuh doiruhg oiudhrogi uhdoiruhg ','bit.ly/3lugtAx','2023-10-10 10:10:10',1,2),(6,'Nouvelle question de AFJOM','Comment poster','Bonjour, je ne sais pas si c\'est normale mais nrdiuhgpdiur iduhr oiuhd roiguhodiruhg oiuhd roiguh odiurng iundorigun odiurng oiudnorigu noidh ruogi nd','','2005-03-12 01:01:01',0,7),(7,'Attention à ce nouveau règlement','Le règlement rentre en vigeur à partir du 1er janvier.','C\'est un règlement très stricte, la preuve iuheofu sheofiuh osiuhoe fiush oefiuh soefiuh osiuheo fiushoefiuh osiuhef oisuhoefiuh osiuhfo isuhoeifh ','bit.ly/42Bm8p6','1999-02-02 23:34:45',1,6),(8,'Lebronc a disparu','Un joueur vedette de l\'équipe d\'espagne a été signalé kidnappé','ufhosiuhefo uhsoeiufhosiuhefoiu shoiufh oisuhefoiuh soiehfuo ishueofi uhsoieufho isuhofiuh soiuefh oisuhoefiuho siuhofiuh osi','bit.ly/3LG5wX7','2023-03-23 16:06:34',0,3),(9,'Les règles du padel','Découvrez les règles du padel, un sport en plein essor','Le padel est un sport de raquette qui se pratique sur un terrain de dimensions réduites. Les règles sont simples et faciles à comprendre, ce qui explique en partie son succès grandissant. Cet article vous présente les règles de base du padel.','lien de l\'image','2023-03-30 00:00:00',1,3),(10,'Les bienfaits du padel pour la santé','Découvrez les nombreux bienfaits du padel pour la santé','Le padel est un sport complet qui sollicite l\'ensemble des muscles du corps. Il permet de travailler l\'endurance, la coordination et la souplesse. De plus, il favorise la socialisation et réduit le stress. Cet article présente les différents bienfaits du padel pour la santé.','lien de l\'image','2023-03-30 00:00:00',0,2),(11,'Les meilleures raquettes de padel','Découvrez les meilleures raquettes de padel du moment','La raquette est l\'élément clé du padel. Elle doit être choisie avec soin pour s\'adapter à votre niveau et à votre style de jeu. Cet article vous présente une sélection des meilleures raquettes de padel du moment, en fonction de différents critères.','lien de l\'image','2023-03-30 00:00:00',1,6),(12,'Les tournois de padel à ne pas manquer en 2023','Découvrez les tournois de padel à ne pas manquer en 2023','Le padel est un sport en plein essor, avec de nombreux tournois organisés tout au long de l\'année. Certains tournois sont particulièrement prestigieux et rassemblent les meilleurs joueurs du monde. Cet article vous présente les tournois de padel à ne pas manquer en 2023.','lien de l\'image','2023-03-30 00:00:00',0,1),(13,'Comment progresser rapidement au padel ?','Découvrez nos conseils pour progresser rapidement au padel','Le padel est un sport exigeant qui demande de la technique et de la pratique pour progresser. Pour améliorer votre niveau, il est important de travailler différents aspects du jeu. Cet article vous donne des conseils pour progresser rapidement au padel, que vous soyez débutant ou confirmé.','lien de l\'image','2023-03-30 00:00:00',1,5);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_categorie`
--

DROP TABLE IF EXISTS `article_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article_categorie` (
  `article_CategorieId` int(11) NOT NULL AUTO_INCREMENT,
  `articleId` int(11) DEFAULT NULL,
  `categorieId` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_CategorieId`),
  KEY `articleId` (`articleId`),
  KEY `categorieId` (`categorieId`),
  CONSTRAINT `article_categorie_ibfk_1` FOREIGN KEY (`articleId`) REFERENCES `article` (`articleId`),
  CONSTRAINT `article_categorie_ibfk_2` FOREIGN KEY (`categorieId`) REFERENCES `categorie` (`categorieId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_categorie`
--

LOCK TABLES `article_categorie` WRITE;
/*!40000 ALTER TABLE `article_categorie` DISABLE KEYS */;
INSERT INTO `article_categorie` VALUES (1,4,3),(2,5,5),(3,6,6),(4,7,1),(5,8,2);
/*!40000 ALTER TABLE `article_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie` (
  `categorieId` int(11) NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `reaction_utilisateur_article`
--

DROP TABLE IF EXISTS `reaction_utilisateur_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reaction_utilisateur_article` (
  `reaction_utilisateur_articleId` int(11) NOT NULL AUTO_INCREMENT,
  `reaction_utilisateur_articleMessage` text,
  `reaction_utilisateur_articleDate` datetime DEFAULT NULL,
  `utilisateurId` int(11) DEFAULT NULL,
  `articleId` int(11) DEFAULT NULL,
  PRIMARY KEY (`reaction_utilisateur_articleId`),
  KEY `utilisateurId` (`utilisateurId`),
  KEY `articleId` (`articleId`),
  CONSTRAINT `reaction_utilisateur_article_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`),
  CONSTRAINT `reaction_utilisateur_article_ibfk_2` FOREIGN KEY (`articleId`) REFERENCES `article` (`articleId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reaction_utilisateur_article`
--

LOCK TABLES `reaction_utilisateur_article` WRITE;
/*!40000 ALTER TABLE `reaction_utilisateur_article` DISABLE KEYS */;
INSERT INTO `reaction_utilisateur_article` VALUES (6,'Bahahah, c\'est trop marrant','2023-03-12 02:30:34',3,4),(7,'Je suis preneuse si c\'est en dessous de 200€','2023-02-12 13:50:33',7,5),(8,'c pas chère pour ce que tu mets...','2023-11-10 02:34:45',2,5),(9,'C\'est normale, il faut que les administrateurs du site approuvent votre article','2023-02-12 13:50:33',2,6),(10,'Oh merde!','2023-02-12 13:50:33',7,8);
/*!40000 ALTER TABLE `reaction_utilisateur_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `utilisateurId` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateurNom` varchar(255) DEFAULT NULL,
  `utilisateurPrenom` varchar(255) DEFAULT NULL,
  `utilisateurPseudo` varchar(255) DEFAULT NULL,
  `utilisateurEmail` varchar(255) DEFAULT NULL,
  `utilisateurMotdepasse` varchar(255) DEFAULT NULL,
  `utilisateurRole` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`utilisateurId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'dazdaz','dzadza','ddezdzedzedzeze','dzadaz@dezezd.cecezdez','dezedzezezedzed','user'),(2,'Francken','Louis','Khreight','220153@site.asty-moulin.be','motdepassesafe','administrator'),(3,'Francken','Sarah','Cmoisarah','cmoisarah@gmail.com','sarahmdp','member'),(4,'Francken','Charlotte','Charlllloooota','charl09#gmail.com','charlottemdp','member'),(5,'Francken','Thomas','DEM_Toto','totodem@gmail.com','thomasmdp','member'),(6,'Francken','Johan','geantvert','jofr01@gmail.com','johanmdp','member'),(7,'Jomouton','Anne-France','AFJOM','jomouton@gmail.com','afmdp','member'),(8,'rdgdrgdr','drgdrgdrg','loipdurghpdiu','drgdrg@gmail.com','hpiuhprdiuhgpdti','user'),(9,'test','test','test','test@gmail.com','test','user');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-30 15:28:48
