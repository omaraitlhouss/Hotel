-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 04 juin 2019 à 02:25
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetfin`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `nom_catg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`nom_catg`) VALUES
('familiale'),
('reguliere'),
('suite');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `Id_cham` int(11) NOT NULL,
  `Tele` varchar(30) NOT NULL,
  `Etage` int(11) NOT NULL,
  `Nbr_lits` int(11) NOT NULL,
  `Tarif_cham` float NOT NULL,
  `Nom_catg` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `Nom_hotel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`Id_cham`, `Tele`, `Etage`, `Nbr_lits`, `Tarif_cham`, `Nom_catg`, `photo`, `Nom_hotel`) VALUES
(1, '+212648795623', 1, 2, 40, 'familiale', 'chambre20', 'OHen HOTEL TANGER CITY CENTER'),
(2, '+212648795623', 1, 2, 20, 'reguliere', 'chambre30', 'OHen HOTEL TANGER CITY CENTER'),
(3, '+212689451227', 2, 1, 25, 'reguliere', 'chambre40', 'OHen HOTEL TANGER CITY CENTER'),
(4, '+212455923144', 1, 2, 70, 'suite', 'barc1', 'OHen HOTEL CHEMSIYA MARRACKECH'),
(5, '+212454562314', 1, 2, 50, 'familiale', 'bro2', 'OHen HOTEL CHEMSIYA MARRACKECH'),
(6, '+212451472314', 2, 1, 70, 'suite', 'chambre-atlantic_401289_pgbighd', 'OHen HOTEL CHEMSIYA MARRACKECH'),
(7, '+212564823147', 1, 2, 80, 'suite', 'chambre-atlantic_401290_pgbighd', 'OHen HOTEL RIAD RABAT'),
(8, '+212125823141', 2, 2, 20, 'reguliere', 'chambre-atlantic_402055_pgbighd', 'OHen HOTEL RIAD RABAT'),
(9, '+212782823140', 3, 1, 40, 'familiale', 'ger_hot1', 'OHen HOTEL RIAD RABAT'),
(10, '+212564823147', 1, 2, 30, 'reguliere', 'hotel-casa-vilella-sitges-3', 'OHen HOTEL ATLANTIC AGADIR'),
(11, '+212564789314', 1, 1, 30, 'familiale', 'lc2', 'OHen HOTEL ATLANTIC AGADIR'),
(12, '+212564523149', 2, 1, 70, 'suite', 'mad1', 'OHen HOTEL ATLANTIC AGADIR'),
(13, '+212455923456', 1, 1, 70, 'suite', 'chambre30', 'OHen HOTEL NOUZHA FES'),
(14, '+212454523456', 1, 1, 60, 'suite', 'mun1', 'OHen HOTEL NOUZHA FES'),
(15, '+212454126456', 2, 2, 35, 'familiale', 'mun3', 'OHen HOTEL NOUZHA FES'),
(16, '+212648795623', 1, 2, 30, 'familiale', 'oran2', 'OHen HOTEL RAS EL MAA IFRANE'),
(17, '+212617995623', 2, 1, 70, 'suite', 'chambre20', 'OHen HOTEL RAS EL MAA IFRANE'),
(18, '+212648459623', 3, 1, 25, 'reguliere', 'paris2', 'OHen HOTEL RAS EL MAA IFRANE'),
(19, '+124478914457', 1, 2, 30, 'familiale', 'chambre20', 'OHen HOTEL CAMPANILE TOULOUSE'),
(20, '+124478917857', 2, 1, 20, 'reguliere', 'chambre30', 'OHen HOTEL CAMPANILE TOULOUSE'),
(41, '+124478914457', 2, 1, 70, 'suite', 'chambre40', 'OHen HOTEL CAMPANILE TOULOUSE'),
(42, '+124478741457', 1, 1, 40, 'suite', 'barc1', 'OHen HOTEL CITADINES DIDOT'),
(43, '+124414914457', 2, 2, 30, 'familiale', 'bro2', 'OHen HOTEL CITADINES DIDOT'),
(44, '+124478741657', 3, 1, 20, 'reguliere', 'chambre-atlantic_401289_pgbighd', 'OHen HOTEL CITADINES DIDOT'),
(45, '', 1, 2, 50, 'suite', 'chambre-atlantic_401290_pgbighd', 'OHen HOTEL NOVOTEL MARSEILLE'),
(46, '+124129914457', 2, 2, 20, 'familiale', 'chambre-atlantic_402055_pgbighd', 'OHen HOTEL NOVOTEL MARSEILLE'),
(47, '+124477894457', 2, 1, 25, 'reguliere', 'ger_hot1', 'OHen HOTEL NOVOTEL MARSEILLE'),
(48, '+124478914457', 1, 2, 60, 'suite', 'hotel-casa-vilella-sitges-3', 'OHen HOTEL ODALYS LILLE'),
(49, '+124478915457', 2, 1, 50, 'suite', 'lc2', 'OHen HOTEL ODALYS LILLE'),
(50, '+124448914457', 2, 1, 40, 'familiale', 'mad1', 'OHen HOTEL ODALYS LILLE'),
(51, '+124478914857', 1, 2, 60, 'suite', 'chambre40', 'OHen HOTEL OPERA BORDEAUX'),
(52, '+124425714457', 1, 2, 40, 'familiale', 'chambre40', 'OHen HOTEL OPERA BORDEAUX'),
(53, '+124478786457', 2, 1, 35, 'familiale', 'chambre40', 'OHen HOTEL OPERA BORDEAUX'),
(54, '+124471254457', 1, 2, 70, 'suite', 'mun1', 'OHen HOTEL TERMINUS LYON'),
(55, '+124477854457', 2, 1, 30, 'familiale', 'mun3', 'OHen HOTEL TERMINUS LYON'),
(56, '+124471294457', 2, 2, 20, 'reguliere', 'oran2', 'OHen HOTEL TERMINUS LYON'),
(57, '+204785429623', 1, 2, 55, 'suite', 'paris2', 'OHen HOTEL BARCELONE'),
(58, '+204745929623', 1, 2, 55, 'suite', 'chambre20', 'OHen HOTEL BARCELONE'),
(59, '+204785421423', 2, 1, 20, 'reguliere', '', 'OHen HOTEL BARCELONE'),
(60, '+204787459623', 1, 3, 30, 'familiale', 'chambre40', 'OHen HOTEL BARCELONE'),
(61, '+204785414823', 1, 2, 55, 'suite', 'barc1', 'OHen HOTEL CITADINES OLIVA'),
(62, '+204748629623', 2, 1, 20, 'reguliere', 'bro2', 'OHen HOTEL CITADINES OLIVA'),
(63, '+204718929623', 1, 3, 20, 'reguliere', 'chambre-atlantic_401289_pgbighd', 'OHen HOTEL CITADINES OLIVA'),
(64, '+204784899623', 2, 2, 40, 'suite', 'chambre-atlantic_401290_pgbighd', 'OHen HOTEL GRENADE'),
(65, '+204781329623', 2, 1, 30, 'familiale', 'chambre-atlantic_402055_pgbighd', 'OHen HOTEL GRENADE'),
(66, '+204785752623', 1, 2, 20, 'reguliere', 'ger_hot1', 'OHen HOTEL GRENADE'),
(67, '+204714929623', 1, 2, 30, 'familiale', 'hotel-casa-vilella-sitges-3', 'OHen HOTEL LOS CRISTIANOS SOL ARONA'),
(68, '+204785742623', 2, 1, 25, 'reguliere', 'lc2', 'OHen HOTEL LOS CRISTIANOS SOL ARONA'),
(69, '+204785459623', 1, 1, 40, 'suite', 'mad1', 'OHen HOTEL LOS CRISTIANOS SOL ARONA'),
(70, '+204785448923', 2, 2, 30, 'familiale', 'mun1', 'OHen HOTEL MADRID'),
(71, '+204785474323', 3, 2, 22, 'reguliere', 'barc1', 'OHen HOTEL MADRID'),
(72, '+204785746623', 1, 1, 70, 'suite', 'lc2', 'OHen HOTEL MADRID'),
(73, '+204774829623', 2, 1, 40, 'familiale', 'paris2', 'OHen HOTEL BARCELONE'),
(74, '+204784582623', 2, 2, 25, 'reguliere', 'paris2', 'OHen HOTEL BARCELONE'),
(75, '+204774829623', 2, 1, 40, 'familiale', 'oran2', 'OHen HOTEL MARBILLA'),
(76, '+204784582623', 2, 2, 25, 'reguliere', 'paris2', 'OHen HOTEL MARBILLA'),
(77, '+204785445812', 2, 2, 50, 'familiale', 'mun1', 'OHen HOTEL MARBILLA');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `Cin` varchar(10) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Tele` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Adress` varchar(60) NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `Ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id`, `Cin`, `Nom`, `Prenom`, `Tele`, `Email`, `Adress`, `Pays`, `Ville`) VALUES
(33, 'K55', 'Belkaze', 'Oussama', ' 21254842484', 'oussama@gmail.com', 'Branes', 'Maroc', 'Tanger');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Full_name` varchar(60) NOT NULL,
  `Adress` varchar(60) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Tele` varchar(20) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Id`, `Full_name`, `Adress`, `Subject`, `Tele`, `Message`) VALUES
(9, 'Oussama Belkaze', 'oussama@gmail.com', 'Reservation', '+21215451218', 'esfsekfpeskf');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `Nom_hotel` varchar(100) NOT NULL,
  `Desc_hotel` text NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Tele` varchar(20) NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`Nom_hotel`, `Desc_hotel`, `Adress`, `Tele`, `Pays`, `Ville`, `photo`) VALUES
('OHen HOTEL ATLANTIC AGADIR', 'RÃ©servez l\'hÃ´tel Atlantic, Ã  seulement 800 m de la plage d\'Agadir et Ã  27 km de l\'aÃ©roport. Un petit hÃ´tel de charme entiÃ¨rement rÃ©novÃ©, chaleureux, situÃ© au cÅ“ur du secteur animÃ© et commerÃ§ant de la ville. Vous apprÃ©cierez son ambiance conviviale et son personnel attentionnÃ©. Logement L\'hÃ´tel Atlantic 4* vous accueille dans une petite structure de 2 Ã©tages au style mauresque. Il dispose de 44 chambres (20 mÂ²) : TV, climatisation, coffre-fort, salle de bains avec douche ou baignoire. Wi-Fi. Chambres communicantes sur demande. Bon Ã  savoir Les chiens (- 5 kg) sont acceptÃ©s sauf dans les parties communes. L\'hÃ´tel ne possÃ¨de pas de chambre triple adulte. 2 Ã©tages sans ascenseur. .', 'Maroc,Agadir', '+212689445829', 'Maroc', 'Agadir', 'piscine-atlantic_401278_pgbighd'),
('OHen HOTEL AZ Hotel Zeralda', 'DotÃ© d\'un spa et d\'une terrasse, l\'AZ Hotel Zeralda est situÃ© Ã  ZÃ©ralda, dans la wilaya d\'Alger. Un parking privÃ© est disponible gratuitement sur place. Toutes les chambres comprennent une tÃ©lÃ©vision Ã  Ã©cran plat et une salle de bains privative pourvue d\'une baignoire ou d\'une douche. D\'autre part, une connexion Wi-Fi est mise gracieusement Ã  votre disposition dans l\'ensemble des locaux de l\'AZ Hotel Zeralda. Vous profiterez d\'un restaurant sur place. La rÃ©ception est ouverte 24h/24. Enfin, l\'AZ Hotel Zeralda est installÃ© Ã  33 km de l\'aÃ©roport d\'Alger - Houari BoumÃ©diÃ¨ne. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  ZÃ©ralda ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,1 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  ZÃ©ralda ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Algerie,Zeralda', '+216644567852', 'Algerie', 'Zeralda', 'alge_hot2'),
('OHen HOTEL BACHA Oran', 'SituÃ© Ã  Oran, Le MÃ©ridien se trouve sur la cÃ´te mÃ©diterranÃ©enne. Il dispose d\'une piscine extÃ©rieure, d\'un spa et d\'un centre de remise en forme offrant une vue sur la mer. DiffÃ©rents restaurants seront Ã©galement Ã  votre disposition. Chaque chambre climatisÃ©e affiche une dÃ©coration moderne et dispose d\'un coin salon ainsi que d\'un balcon offrant une vue sur le jardin ou la mer. Elles comprennent une tÃ©lÃ©vision Ã  Ã©cran plat, un minibar, du matÃ©riel de repassage, ainsi qu\'une salle de bains privative dotÃ©e d\'une baignoire et d\'articles de toilette gratuits. Vous pourrez dÃ©guster des spÃ©cialitÃ©s italiennes au Favola ou des plats gastronomiques au Latest Recipe. Vous pourrez Ã©galement vous dÃ©tendre au Latitude 35, un bar dotÃ© d\'une terrasse qui donne sur la mer. Le MÃ©ridien propose Ã©galement des service de concierge et de change, ainsi qu\'un centre d\'affaires et de confÃ©rences. L\'aÃ©roport international d\'Oran est accessible en 15 minutes en voiture. Le musÃ©e Ahmed Zabana se trouve Ã  2 km de l\'hÃ´tel et la Promenade de Ibn Badis Ã  3 km. Un parking privÃ© gratuit sera Ã  votre disposition sur place. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,1 pour un sÃ©jour Ã  deux', 'Algerie,Oran', '+216645747852', 'Algerie', 'Oran', 'alge_hot3'),
('OHen HOTEL BARCELONE', 'Le Catalonia Park GÃ¼ell propose une connexion Wi-Fi gratuite et une piscine sur le toit. Cet hÃ´tel est situÃ© dans un quartier rÃ©sidentiel en pÃ©riphÃ©rie du centre historique de Barcelone, Ã  600 mÃ¨tres du parc GÃ¼ell. Sobres et confortables, les chambres de l\'hÃ´tel comprennent la climatisation et une tÃ©lÃ©vision par satellite. Sur place, vous disposerez d\'un restaurant et d\'un bar. Vous sÃ©journerez Ã  seulement 300 mÃ¨tres de la station de mÃ©tro Vallcarca, qui dessert le centre-ville en moins de 10 minutes. Les arrÃªts des bus V19 et 22 sont Ã  proximitÃ©. La terrasse bien exposÃ©e offre une vue sur la ville. L\'hÃ´tel se situe Ã  proximitÃ© de certains des plus cÃ©lÃ¨bres centres mÃ©dicaux de Barcelone, notamment des hÃ´pitaux Delfos et QuirÃ³nsalud. De nombreux clubs sportifs et parcs vous attendent Ã  quelques pas de l\'hÃ´tel. Enfin, Ã  quelques minutes de marche du Catalonia Park GÃ¼ell, vous rejoindrez le quartier prisÃ© de GrÃ cia, oÃ¹ vous trouverez des places animÃ©es bordÃ©es de bars et de restaurants. Ce quartier (GrÃ cia) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : les monuments, les balades en ville et l\'architecture.', 'Spain,Bacelone', '+204647442123', 'Spain', 'Barcelone', 'cataloniaparkguell-piscina'),
('OHen HOTEL CAMPANILE TOULOUSE', 'Le Campanile Toulouse Purpan est situÃ© Ã  proximitÃ© de l\'autoroute A620 et Ã  5 km de l\'aÃ©roport de Toulouse-Blagnac. Ses hÃ©bergements climatisÃ©s et insonorisÃ©s sont dotÃ©s d\'une connexion Wi-Fi gratuite. Les chambres disposent d\'une salle de bains privative, d\'un plateau/bouilloire et d\'une tÃ©lÃ©vision par satellite (avec beIN Sports, Canal + et Sport). Vous pourrez dÃ©guster une cuisine rÃ©gionale au restaurant du Purpan. L\'Ã©tablissement possÃ¨de Ã©galement un bar et une terrasse fleurie. Des journaux sont disponibles gratuitement Ã  la rÃ©ception ouverte 24h/24. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Toulouse ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'France,Toulouse', '+124478914145', 'France', 'Toulouse', 'fr1'),
('OHen HOTEL Castello di Spaltenna Exclusive Resort Spa', 'SituÃ© dans la campagne toscane, le Castello di Spaltenna Exclusive Resort & Spa est amÃ©nagÃ© dans un ancien monastÃ¨re du Xe siÃ¨cle. Il dispose de deux piscines, dont une est chauffÃ©e, d\'un restaurant et de chambres spacieuses pourvue d\'une tÃ©lÃ©vision avec les chaÃ®nes du bouquet Sky. Les chambres du Castello Di Spaltenna prÃ©sentent une dÃ©coration toscane traditionnelle et offrent une vue panoramique sur la vallÃ©e ou la cour. Toutes sont Ã©quipÃ©es d\'une connexion Wi-Fi gratuite. La piscine extÃ©rieure est agrÃ©mentÃ©e d\'une cascade et d\'une terrasse bien exposÃ©e pour profiter du soleil. En hiver, la piscine intÃ©rieure donne sur la campagne. Le restaurant Il Pievano est situÃ© dans le hall historique du chÃ¢teau et propose une grande carte des vins comprenant de nombreux vins de la rÃ©gion du Chianti. Des dÃ®ners aux chandelles sont servis dans la cour. L\'Ã©tablissement met Ã©galement Ã  votre disposition un sauna, un bain turc, une salle de sport, un court de tennis et une salle de billards. Le personnel pourra vous conseiller sur les nombreux sentiers de randonnÃ©e et pistes de VTT de la rÃ©gion. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,3 pour un sÃ©jour Ã  deux.', 'Italy,Chianti', '+104689451224', 'Italy', 'Chianti', 'italy_hot1'),
('OHen HOTEL CHEMSIYA MARRACKECH', 'RÃ©servez l\'hÃ´tel Atlantic, Ã  seulement 800 m de la plage d\'Agadir et Ã  27 km de l\'aÃ©roport. Un petit hÃ´tel de charme entiÃ¨rement rÃ©novÃ©, chaleureux, situÃ© au cÅ“ur du secteur animÃ© et commerÃ§ant de la ville. Vous apprÃ©cierez son ambiance conviviale et son personnel attentionnÃ©. Logement L\'hÃ´tel Atlantic 4* vous accueille dans une petite structure de 2 Ã©tages au style mauresque. Il dispose de 44 chambres (20 mÂ²) : TV, climatisation, coffre-fort, salle de bains avec douche ou baignoire. Wi-Fi. Chambres communicantes sur demande. Bon Ã  savoir Les chiens (- 5 kg) sont acceptÃ©s sauf dans les parties communes. L\'hÃ´tel ne possÃ¨de pas de chambre triple adulte. 2 Ã©tages sans ascenseur. .', 'Maroc,Marrakech', '+212689451227', 'Maroc', 'Marrakech', 'mh-pi-41879505_Fill_600_400'),
('OHen HOTEL CITADINES DIDOT', 'L\'un de nos meilleurs choix pour Paris. SituÃ© dans le 14Ã¨me arrondissement de Paris,OHen Citadines Didot se trouve Ã  600 mÃ¨tres de la station de mÃ©tro Plaisance. Il vous propose des studios et des appartements classiques dotÃ©s d\'une tÃ©lÃ©vision par satellite et d\'une connexion Internet gratuite. ClimatisÃ©s, ces derniers disposent tous d\'une kitchenette entiÃ¨rement Ã©quipÃ©e et d\'un coin salon. La salle de bains privative est pourvue d\'un sÃ¨che-cheveux. Un petit-dÃ©jeuner continental est servi chaque matin dans la salle de petit-dÃ©jeuner de l\'Ã©tablissement. La rÃ©ception du Citadines Didot est ouverte 24h/24 et la connexion Internet est gratuite.Cet hÃ´tel est situÃ© Ã  10 minutes en voiture du parc des expositions de la Porte de Versailles et du parc aquatique Aquaboulevard. L\'Ã©glise d\'AlÃ©sia se trouve Ã  10 minutes de marche ; vous pourrez aussi vous rendre au parc Montsouris en tramway. Ce quartier (14e arr.) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : les monuments, les musÃ©es et la culture.', 'France,Paris', '+124478914149', 'France', 'Paris', 'appart-hotel-montparnasse-adagio-tour-1-aparthotel-citadines-didot-montparnasse'),
('OHen HOTEL CITADINES OLIVA', 'L\'Ã©lÃ©gant Oliva Nova Beach & Golf Hotel propose une piscine de style lagon, un spa ainsi qu\'un accÃ¨s direct Ã  la plage d\'Oliva Nova. Cet Ã©tablissement fait partie du parcours de golf d\'Oliva Nova, conÃ§u par Seve Ballesteros. Chaque chambre Ã©lÃ©gante et spacieuse comprend un coin salon, une tÃ©lÃ©vision Ã  Ã©cran plat et une connexion Wi-Fi gratuite. Elles bÃ©nÃ©ficient Ã©galement d\'une terrasse couverte donnant sur le complexe, les dunes de sable voisines ou les montagnes MontgÃ³. Vous pourrez dÃ©guster des plats de riz typiquement valenciens au restaurant El Olivo sur place. Vous apprÃ©cierez aussi le restaurant avec terrasse bordant la piscine ainsi que le pub irlandais et le bar de plage. Les installations de spa sont disponibles moyennant des frais supplÃ©mentaires. SituÃ© entre Gandie et DÃ©nia, l\'Hotel Oliva Nova se trouve Ã  45 minutes de route de Valence. Les villes de Valence et Alicante sont facilement accessibles par les autoroutes N-332 et AP-7. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,8 pour un sÃ©jour Ã  deux.', 'Spain,OLIVA', '+204647429745', 'Spain', 'OLIVA', 'Galapagos-hotels-dining-room-Casa-de-Marita'),
('OHen HOTEL Constantine Marriott Hotel', 'Le Constantine Marriott Hotel propose des hÃ©bergements Ã  Constantine et une connexion Wi-Fi gratuite dans l\'ensemble de l\'Ã©tablissement. Il comporte un bar et un restaurant. Certaines chambres possÃ¨dent un coin salon, pour votre confort. Elles sont Ã©quipÃ©es d\'une tÃ©lÃ©vision Ã  Ã©cran plat, d\'une machine Ã  cafÃ©, d\'un sÃ¨che-cheveux et d\'articles de toilette gratuits. Vous trouverez Ã©galement un salon de coiffure sur place. L\'aÃ©roport international de Constantine-Mohamed Boudiaf, le plus proche du Constantine Marriott Hotel, se situe Ã  6 km. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,3 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Constantine ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Algerie,Constantine', '+216789147852', 'Algerie', 'Constantine', 'alge_hot4'),
('OHen HOTEL Domina Milano Fiera MILANO', 'Le Domina Milano Fiera est situÃ© Ã  Novate Milanese, Ã  respectivement 3 km et moins de 10 minutes en voiture des parcs des expositions Fiera Milano et Expo 2015. DotÃ© d\'une connexion Wi-Fi et d\'un parking gratuits, l\'hÃ´tel propose un service de navette vers les parcs des expositions lors des principales manifestations. Toutes les chambres du Domina Milano Fiera sont climatisÃ©es, modernes et spacieuses. Elles sont toutes pourvues de matelas orthopÃ©diques, de parquet et d\'une tÃ©lÃ©vision Ã  Ã©cran plat. Certaines chambres, qui sont situÃ©es au 4Ã¨me Ã©tage, offrent une vue sur le jardin. Un copieux petit-dÃ©jeuner buffet est servi le matin. Vous pourrez savourer diffÃ©rentes spÃ©cialitÃ©s de Lombardie et une cuisine internationale au sein du restaurant Expo. L\'Ã©tablissement possÃ¨de Ã©galement un bar, un salon d\'affaires exÃ©cutif et une salle de sport. L\'hÃ´tel se situe juste Ã  cÃ´tÃ© du rond-point sur la route SP46, Ã  proximitÃ© du supermarchÃ© Famila. Il est Ã©galement situÃ© Ã  5 minutes Ã  pied de la gare de Novate Milanese, oÃ¹ vous pourrez prendre la ligne S3 afin de rejoindre la gare Cadorna et le centre-ville de Milan. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,1 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Novate Milanese ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Italy,Milano,', '+104689742220', 'Italy', 'Milano', 'italy_hot3'),
('OHen HOTEL Eremo Della Giubiliana', 'Occupant une maison de campagne historique, l\'Eremo della Giubiliana est un charmant hÃ´tel traditionnel qui bÃ©nÃ©ficie d\'un emplacement stratÃ©gique Ã  cÃ´tÃ© de Raguse. Il propose une piste d\'atterrissage et met un avion Ã  votre disposition.  L\'Eremo della Giubiliana se distingue par la variÃ©tÃ© d\'excursions et de visites organisÃ©es. Vous pourrez dÃ©couvrir la beautÃ© de la cÃ´te, la Sicile mÃ©diÃ©vale, les ruines de la GrÃ¨ce antique et les merveilles naturelles de la rÃ©gion, telles que la plage de Playa Grande.  Les villes de Raguse, Taormine, Agrigente, Syracuse, Modica et Noto comptent parmi les destinations rÃ©putÃ©es dans les environs. Vous pourrez explorer la rÃ©gion au cours d\'un circuit en Land Rover ou lors d\'un fascinant vol panoramique Ã  bord de l\'avion de l\'hÃ´tel. Vous pourrez mÃªme faire l\'aller-retour en avion jusqu\'Ã  Malte, dans la journÃ©e.  ComplÃ¨tement rÃ©novÃ© et Ã©quipÃ© de tout le confort moderne, l\'Eremo della Giubiliana a conservÃ© son atmosphÃ¨re originale et ses meubles d\'Ã©poque fabriquÃ©s Ã  la main. Vous serez immanquablement fascinÃ© par les Ã©toffes prÃ©cieuses, les cartes rares et une peinture authentique du XVIIe siÃ¨cle reprÃ©sentant la Vierge Marie. Une connexion Internet est disponible gratuitement.  ApprÃ©cier la bonne cuisine fait partie intÃ©grante d\'un sÃ©jour en Sicile. L\'Eremo della Giubiliana dispose d\'un excellent restaurant oÃ¹ l\'on sert la meilleure cuisine rÃ©gionale qui soit, ainsi que de trÃ¨s bons plats mÃ©diterranÃ©ens. Des cours de cuisine sicilienne sont Ã©galement disponibles.  Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Contrada Giubiliana ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville.  Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,0 pour un sÃ©jour Ã  deux.  Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Contrada Giubiliana ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Italy,Giubiliana', '+104689452228', 'Italy', 'Giubiliana', 'eremo2'),
('OHen HOTEL Grand Hotel Heiligendamm', 'SituÃ© Ã  Heiligendamm, sur la cÃ´te de la mer Baltique, l\'Ã©tablissement de luxe Grand Hotel Heiligendamm dispose de plusieurs restaurants et bars, d\'installations de spa et de chambres Ã©lÃ©gantes avec vue sur la mer ou le parc. Il propose des chambres spacieuses et Ã©lÃ©gantes rÃ©parties dans 4 bÃ¢timents de style classique. Les chambres sont ornÃ©es d\'un mobilier conÃ§u sur mesure et vous y bÃ©nÃ©ficierez gratuitement d\'une connexion Internet et d\'une bouteille d\'eau. Un petit-dÃ©jeuner amÃ©ricain est servi tous les matins. Les options de restauration comprennent le restaurant Friedrich Franz, Ã©toilÃ© au guide Michelin, le bar Ã  sushis Baltic et le restaurant historique Kurhaus. Le spa Heiligendamm de 3 000 mÂ² comprend une piscine, un programme de sport variÃ© et un bar. Vous y trouverez Ã©galement un club animÃ© pour enfants et une aire de jeux. Si vous Ãªtes amateurs de sport, vous pourrez faire une partie de golf, vous balader Ã  travers la campagne ou faire une variÃ©tÃ© d\'activitÃ©s nautiques Ã  Heiligendamm et dans la rÃ©gion environnante. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,4 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Heiligendamm ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Germany,Heiligendamm', '+101264742395', 'Germany', 'Heiligendamm', 'ger2'),
('OHen HOTEL GRENADE', 'L\'Hotel Granada Center est situÃ© Ã  seulement 10 minutes Ã  pied de la vieille ville de Grenade et Ã  5 minutes de la gare. Lors de votre sÃ©jour, vous profiterez d\'une connexion Wi-Fi gratuite et d\'un espace de stationnement privÃ© payant. Toutes les chambres du Granada Center disposent de la climatisation et d\'une salle de bains privative. Elles comportent Ã©galement une tÃ©lÃ©vision et un minibar. Le restaurant Ã  la carte de l\'Hotel Granada Center, l\'Al Zagal, sert une cuisine mÃ©diterranÃ©enne. Vous pourrez Ã©galement prendre un verre au cafÃ©-bar ou au pub anglais de l\'hÃ´tel. Des plats sans gluten sont proposÃ©s. L\'hÃ´tel se trouve Ã  seulement 10 minutes Ã  pied de la cathÃ©drale et de l\'universitÃ© de Grenade. L\'arrÃªt de bus situÃ© en face du Granada Center vous permettra d\'accÃ©der aux principaux sites d\'intÃ©rÃªt de la ville. Ce quartier (Centre de Grenade) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : les monuments anciens, l\'architecture et les monuments. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,4 pour un sÃ©jour Ã  deux.', 'Spain,Grenade', '+204647741623', 'Spain', 'Grenade', 'granade-pic'),
('OHen HOTEL Kastens Hotel Luisenhof', 'BÃ©nÃ©ficiant d\'un emplacement central Ã  300 mÃ¨tres de l\'opÃ©ra de Hanovre, l\'Ã©tablissement 5 Ã©toiles supÃ©rieur Kastens Hotel Luisenhof propose d\'excellentes installations de spa et une salle de sport, une cuisine raffinÃ©e, ainsi qu\'un accÃ¨s facile au parc des expositions Hannover Messe. Affichant une grande faÃ§ade de style classique, le Kastens Hotel Luisenhof vous accueille dans des chambres Ã©lÃ©gantes avec une connexion Wi-Fi gratuite, une tÃ©lÃ©vision Ã  Ã©cran plat et une bouteille d\'eau minÃ©rale. Vous disposerez d\'un accÃ¨s gratuit Ã  la salle de sport du Luisenhof, surplombant les toits de la ville. Vous profiterez Ã©galement d\'un sauna, ainsi que de services de massages et de location de vÃ©los. Un petit-dÃ©jeuner buffet copieux est servi dans le salon prÃ©vu Ã  cet effet. RÃ©cemment ouvert, le restaurant Mary\'s prÃ©pare une cuisine gastronomique et des spÃ©cialitÃ©s rÃ©gionales, accompagnÃ©es d\'une sÃ©lection de vins. Vous apprÃ©cierez des cocktails et des biÃ¨res au bar de l\'Ã©tablissement. La gare centrale de Hanovre, Ã  250 mÃ¨tres, vous conduira au parc des expositions Hannover Messe en seulement 15 minutes. Le stade de football HDI-Arena et le musÃ©e d\'art moderne Sprengel se trouvent Ã  moins de 10 minutes de route. Ce quartier (Mitte) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : le shopping, les balades en ville et les restaurants. C\'est le quartier prÃ©fÃ©rÃ© des voyageurs visitant Hanovre, selon les commentaires clients indÃ©pendants. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Hanovre ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,6 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Hanovre ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Germany,Hanover', '+101241236789', 'Germany', 'Hanover', 'ger'),
('OHen HOTEL LOS CRISTIANOS SOL ARONA', 'Le Sol Arona Tenerife se trouve Ã  200 mÃ¨tres de la plage de Los Cristianos, Ã  Tenerife. Il possÃ¨de une grande piscine extÃ©rieure avec des chaises longues, ainsi que des chambres dotÃ©es d\'un balcon offrant une vue sur la mer, pour la plupart. Les enfants bÃ©nÃ©ficieront de leur propre piscine et des activitÃ©s leur seront proposÃ©es sur l\'aire de jeux de l\'Ã©tablissement, telles que l\'escalade et le trampoline Ã  Ã©lastiques. Pendant ce temps, vous aurez la possibilitÃ© de vous rendre Ã  la salle de sport ou de prendre le soleil sur la terrasse bien exposÃ©e. En fin de journÃ©e, toute la famille se retrouvera autour d\'un dÃ®ner au restaurant-buffet, avant de profiter des divertissements nocturnes. Vous rejoindrez l\'aÃ©roport de TÃ©nÃ©rife Sud en moins de 20 minutes de route du Sol Arona Tenerife. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,4 pour un sÃ©jour Ã  deux.', 'Spain,Los Cristianos', '+204647456623', 'Spain', 'Los Cristianos', 'sol-arona-tenerife'),
('OHen HOTEL Madaure Cheragar', 'InstallÃ© Ã  ChÃ©raga, l\'HÃ´tel Madaure vous propose une connexion Wi-Fi gratuite, une rÃ©ception ouverte 24h/24, un restaurant et une terrasse bien exposÃ©e. Les chambres de l\'hÃ´tel comprennent une tÃ©lÃ©vision Ã  Ã©cran plat, la climatisation ainsi qu\'une salle de bains privative. Certaines bÃ©nÃ©ficient Ã©galement d\'un balcon. Un petit-dÃ©jeuner continental vous sera servi tous les matins sur place. L\'aÃ©roport international d\'Alger-Houari-BoumÃ©diÃ¨ne se trouve Ã  29 km de l\'HÃ´tel Madaure.', 'Algerie,Cheraga', '+216648745852', 'Algerie', 'Cheraga', 'granade-pic'),
('OHen HOTEL MADRID', 'Le Campanile Toulouse Purpan est situÃ© Ã  proximitÃ© de l\'autoroute A620 et Ã  5 km de l\'aÃ©roport de Toulouse-Blagnac. Ses hÃ©bergements climatisÃ©s et insonorisÃ©s sont dotÃ©s d\'une connexion Wi-Fi gratuite. Les chambres disposent d\'une salle de bains privative, d\'un plateau/bouilloire et d\'une tÃ©lÃ©vision par satellite (avec beIN Sports, Canal + et Sport). Vous pourrez dÃ©guster une cuisine rÃ©gionale au restaurant du Purpan. L\'Ã©tablissement possÃ¨de Ã©galement un bar et une terrasse fleurie. Des journaux sont disponibles gratuitement Ã  la rÃ©ception ouverte 24h/24. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Toulouse ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Spain,Madrid', '+204785429623', 'Spain', 'Madrid', '16-600x400'),
('OHen HOTEL MARBILLA', 'Le Gran MeliÃ¡ Don Pepe est situÃ© sur le front de mer, Ã  proximitÃ© de la plage Don Pepe de Marbella et Ã  15 minutes Ã  pied de la vieille ville. Il propose 3 piscines extÃ©rieures, un spa et des chambres de luxe avec une grande tÃ©lÃ©vision Ã  Ã©cran plasma. Les chambres de cet hÃ´tel 5 Ã©toiles donnent sur la mer, les jardins de l\'Ã©tablissement ou les montagnes. Elles comprennent une tÃ©lÃ©vision par satellite interactive, un coffre-fort Ã©lectronique, un minibar et une connexion Wi-Fi gratuite. Vous bÃ©nÃ©ficierez par ailleurs de l\'entrÃ©e gratuite Ã  la piscine intÃ©rieure chauffÃ©e et Ã  la salle de sport. L\'hÃ´tel met Ã  votre disposition 2 courts de tennis, 2 courts de paddle, et un spa avec un bain turc, un bain Ã  remous, un sauna, diffÃ©rents soins et des massages. Le restaurant-grill de l\'Ã©tablissement sert des steaks, des grillades et des spÃ©cialitÃ©s mÃ©diterranÃ©ennes. Le restaurant Tahini, qui prÃ©pare une cuisine japonaise, offre une vue sur l\'ocÃ©an. Vous pourrez Ã©galement profiter d\'un bar au bord de la piscine, d\'un espace gastronomique pourvu d\'un bar Ã  huÃ®tres et Ã  caviar, ainsi que d\'un espace servant des chocolats belges et des macarons. Le club de plage privÃ© vous proposera, quant Ã  lui, des collations, des cocktails et des smoothies. InstallÃ© sur la Costa del Sol rÃ©putÃ©e, le Gran MeliÃ¡ Don Pepe n\'est qu\'Ã  5 minutes de marche du parc Paco Cantos et Ã  moins de 2 km de la vieille ville historique de Marbella. C\'est le quartier prÃ©fÃ©rÃ© des voyageurs visitant Marbella, selon les commentaires clients indÃ©pendants. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,4 pour un sÃ©jour Ã  deux.', 'Spain,Marbilla', '+204647456623', 'Spain', 'Marbilla', 'brochureid-marbi'),
('OHen HOTEL monchgut living spa', 'SituÃ© Ã  Gager, le complexe de vacances moderne mÃ¶nchgut living & spa est dotÃ© d\'un espace bien-Ãªtre de 700 mÂ² avec 5 saunas dont vous pourrez profiter gratuitement et de faÃ§on illimitÃ©e. Vous bÃ©nÃ©ficierez Ã©galement de linge de lit et de serviettes, ainsi que d\'un parking gratuits. Paisiblement installÃ© prÃ¨s des rives de la mer Baltique, il propose aussi une grande terrasse bien exposÃ©e et une vue unique sur la lagune. Les autres installations gratuites comprises dans le tarif indiquÃ© du mÃ¶nchgut living & spa comprennent une salle de sport entiÃ¨rement Ã©quipÃ©e, une salle de jeux avec un billard professionnel, une table de ping-pong et un baby-foot, ainsi qu\'un salon dotÃ© d\'une cheminÃ©e et d\'une vue sur la baie de Greifswald (lagune). Les chambres et appartements Ã©lÃ©gants du mÃ¶nchgut living & spa disposent d\'un mobilier contemporain. Certains appartements sont Ã©galement pourvus d\'une cheminÃ©e et d\'un sauna. Si vous sÃ©journez dans un appartement ou une maison de vacances, vous pourrez prÃ©parer vos repas dans leur cuisine entiÃ¨rement Ã©quipÃ©e. Le mÃ¶nchgut living & spa vous accueille dans la rÃ©serve de biosphÃ¨re du sud-est de RÃ¼gen, oÃ¹ vous pourrez dÃ©couvrir les plages de sable, le littoral accidentÃ© et les lagunes. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,9 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Gager ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Germany,Gager', '+101264578895', 'Germany', 'Gager', 'ger3'),
('OHen HOTEL NOUZHA FES', 'Hmizate vous offre lâ€™opportunitÃ© de sÃ©journer Ã  petit budget au cÅ“ur de la ville de FÃ¨s, Ã  lâ€™hÃ´tel Nouzha 3*, 1 nuit pour 2 adultes + 1 enfant (-5 ans) en chambre double avec petit dÃ©jeuner SituÃ© en plein centre ville, lâ€™hÃ´tel Nouzha, hÃ´tel de charme 3 Ã©toiles, Ã  la fois moderne et de style traditionnel, rappelle nos demeures fassies par le luxe et le raffinement de ses fresques mauresques HÃ´tel Nouzha dispose de 60 chambres avec suites et chambres doubles. Le tÃ©lÃ©phone, la climatisation et le chauffage, avec tÃ©lÃ©vision satellitaire qui vous permet de visionner des chaÃ®nes internationales, sont prÃ©sents dans toutes les chambres. A FÃ¨s, l\'Ã©tablissement HÃ´tel Nouzha se trouve tout prÃ¨s de CimetiÃ¨re juif, Palais royal et Parc Jnane Sbile. Les sites MusÃ©e de Der Batha et Blue Gate se trouvent Ã©galement Ã  proximitÃ©. DÃ©couvrez FÃ¨s, ses souks et ses nombreux foundouks. Visitez les remparts de cette ancienne citÃ© impÃ©riale, qui est aussi capitale gastronomique du Maroc. HÃ´tel Nouzha est le lieu idÃ©al pour sÃ©journer dans cette ville magnifique !', 'Maroc,Fes', '+212458765324', 'Maroc', 'Fes', 'hotel-nouzha-fes_1'),
('OHen HOTEL NOVOTEL MARSEILLE', 'Le Novotel Marseille Vieux Port se trouve Ã  Marseille, Ã  seulement 400 mÃ¨tres du palais du Pharo et Ã  5 minutes de marche de la plage des Catalans. Il possÃ¨de un restaurant avec une terrasse offrant une vue panoramique sur le Vieux-Port, et une connexion Wi-Fi est disponible gratuitement. Vous pourrez Ã©galement accÃ©der au spa de l\'hÃ´tel voisin. Toutes les chambres de cet Ã©tablissement Novotel sont climatisÃ©es et disposent d\'une connexion Wi-Fi gratuite, d\'une tÃ©lÃ©vision par satellite, d\'une salle de bains privative ainsi que de toilettes sÃ©parÃ©es. Le restaurant du Novotel Marseille Vieux Port sert une cuisine mÃ©diterranÃ©enne. Vous pourrez Ã©galement dÃ©guster des cocktails au bar de la piscine extÃ©rieure, ouvert jusque tard dans la soirÃ©e. Le spa Sofitel Marseille Vieux Port So Spa est directement accessible depuis l\'hÃ´tel moyennant des frais supplÃ©mentaires. Il comporte un hammam, un sauna et une piscine intÃ©rieure. Des massages peuvent y Ãªtre dispensÃ©s moyennant un supplÃ©ment. Vous pourrez par ailleurs profiter gratuitement de la salle de sport ouverte 24h/24. Un service de concierge virtuel pourra vous fournir des informations et des conseils pour vous permettre de profiter au maximum de votre sÃ©jour. L\'Ã©tablissement est Ã  moins de 2,8 km du fort Saint-Jean et du musÃ©e des civilisations de l\'Europe et de la MÃ©diterranÃ©e (MuCEM). Le Novotel Marseille est facilement accessible depuis les autoroutes A7 et A55 par le tunnel du Vieux-Port ainsi que depuis l\'autoroute A50 par le tunnel Prado-CarÃ©nage. Il est situÃ© Ã  4,5 km du stade VÃ©lodrome. Un parking privÃ© est disponible sur place moyennant des frais supplÃ©mentaires. C\'est le quartier prÃ©fÃ©rÃ© des voyageurs visitant Marseille, selon les commentaires clients indÃ©pendants. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,6 pour un sÃ©jour Ã  deux.', 'France,Marseille', '+124478914627', 'France', 'Marseille', 'fr2'),
('OHen HOTEL Oasis Hotel Alger', 'SituÃ© Ã  Alger, l\'Oasis Hotel propose un bar, un restaurant ainsi qu\'une rÃ©ception ouverte 24h/24. Offrant une vue sur la mer, les chambres comprennent un coin salon, une salle de bains privative, un bureau et une tÃ©lÃ©vision. Un petit-dÃ©jeuner continental est servi dans la salle Ã  manger. Vous bÃ©nÃ©ficierez d\'une connexion Wi-Fi gratuite et d\'un parking privÃ© sur place. L\'aÃ©roport d\'Alger-Houari BoumÃ©diÃ¨ne, le plus proche, est situÃ© Ã  13 km de l\'Oasis Hotel.', 'Algerie,Alger', '+216648747852', 'Algerie', 'Alger', 'alge_hot11'),
('OHen HOTEL ODALYS LILLE', 'OHen Odalys se trouve Ã  20 minutes du centre-ville en transports en commun, Ã  30 minutes en mÃ©tro des Champs-Ã‰lysÃ©es et Ã  20 minutes de route de La DÃ©fense. Les studios sont dotÃ©s d\'une tÃ©lÃ©vision Ã  Ã©cran plat. Leur kitchenette est Ã©quipÃ©e d\'un micro-ondes, d\'un rÃ©frigÃ©rateur et de plaques de cuisson. Un petit-dÃ©jeuner buffet est servi sur place. L\'aÃ©roport de LILLE-Orly est le plus proche, Ã  28 km de l\'Ã©tablissement.Ce quartier (17e arr.) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : le shopping, les sÃ©jours romantiques et les monuments. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Paris ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'France,Lille', '+124478914186', 'France', 'Lille', 'appart-hotel-odalys-paris'),
('OHen HOTEL OPERA BORDEAUX', 'L\'Hotel de L\'OpÃ©ra propose un hÃ©bergement abordable dotÃ© d\'une connexion Wi-Fi gratuite dans le centre de Bordeaux, en face du Grand ThÃ©Ã¢tre, Ã  350 mÃ¨tres de la place des Quinconces. DÃ©corÃ©es simplement, toutes les chambres sont insonorisÃ©es et disposent d\'une tÃ©lÃ©vision par cÃ¢ble ainsi que d\'une salle de bains privative. Certaines comprennent un balcon donnant sur la ville. Un petit-dÃ©jeuner est servi tous les matins dans le coin repas ou dans le confort de votre chambre. Les chambres sont desservies par un ascenseur, et la rÃ©ception de l\'Ã©tablissement est ouverte 24h/24. L\'Hotel de L\'OpÃ©ra se trouve Ã  seulement quelques mÃ¨tres de la station de tramway Quinconces, permettant d\'accÃ©der directement Ã  la gare Saint-Jean, Ã  l\'arrÃªt de bus desservant l\'aÃ©roport et Ã  l\'ensemble des principaux sites d\'intÃ©rÃªt de la ville.Ce quartier (Centre de Bordeaux) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : la nourriture, le shopping et le vin. C\'est le quartier prÃ©fÃ©rÃ© des voyageurs visitant Bordeaux, selon les commentaires clients indÃ©pendants. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,3 pour un sÃ©jour Ã  deux.', 'France,Bordeaux', '+124474194627', 'France', 'Bordeaux', '19'),
('OHen HOTEL Palazzo Arzaga Hotel,Spa Golf Resort', 'L\'Ã©tablissement Palazzo Arzaga Hotel, Spa & Golf Resort est situÃ© sur un grand terrain comprenant un centre de bien-Ãªtre Clarins, un parcours de golf Championship de 18 trous et un autre parcours de 9 trous. Le lac de Garde et Padenghe se trouvent Ã  5 km. Datant du XVe siÃ¨cle, le Palazzo Arzaga Hotel, Golf & Spa Resort prÃ©sente des intÃ©rieurs classiques, des plafonds aux poutres apparentes, des fresques d\'origine et un mobilier ancien. Les chambres climatisÃ©es disposent d\'une connexion Wi-Fi gratuite et d\'une tÃ©lÃ©vision par satellite. Leur salle de bains privative est pourvue d\'un peignoir et de chaussons. La plupart donnent sur le parcours de golf ou sur la campagne environnante. Vous profiterez d\'un accÃ¨s gratuit Ã  la piscine intÃ©rieure/extÃ©rieure, Ã  la salle de sport et au court de tennis. Le centre de bien-Ãªtre, accessible moyennant des frais supplÃ©mentaires, comporte un sauna et un bain turc, ainsi que toute une gamme de soins. Un petit-dÃ©jeuner buffet copieux est servi chaque matin dans la cour du palais. Le restaurant Il Moretto prÃ©pare des plats italiens traditionnels pour le dÃ®ner. L\'Ã©tablissement est Ã  30 minutes de route de Brescia et Ã  45 minutes en voiture de l\'aÃ©roport de VÃ©rone. La ville de Desenzano del Garda est distante de seulement 14 km. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Calvagese della Riviera ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,9 pour un sÃ©jour Ã  deux.', 'Italy,Riviera', '+104687411221', 'Italy', 'Riviera', 'italy_hot22'),
('OHen HOTEL RAS EL MAA IFRANE', 'L\'HÃ´tel Relais Ras El Maa est situÃ© Ã  Ifrane. En voiture, il se trouve Ã  5 minutes du parc aquatique Vitel Spring Water Park et Ã  30 minutes de la station de ski de Michlifen. Vous pourrez dÃ©guster des plats locaux au restaurant sur place. RELAIS RASS EL MAÃ„ vous offre toute lâ€™excellence du service et du confort, de fraÃ®cheur et de verdure, que lâ€™on est en droit dâ€™attendre dâ€™un hÃ´tel 3 Ã©toile. ÃŽlot de calme et de sÃ©rÃ©nitÃ© de fraÃ®cheur qui domine. Larges avenues, espaces verts de nature, vous y apprÃ©cierez toutes les joies de la dÃ©tente et cette attention de tous les instants.', 'Maroc,Ifrane', '+212458767822', 'Maroc', 'Ifrane', 'ifrane'),
('OHen HOTEL RIAD RABAT', 'SituÃ© Ã  Rabat, le Riad propose un service chaleureux et agrÃ©able dans un cadre authentique. Il constitue un pied-Ã -terre idÃ©al pour dÃ©couvrir la rÃ©gion. Les chambres, personnalisÃ©es, offrent un charme unique. Elles sont dÃ©corÃ©es dans un style trÃ¨s oriental, confortable ou contemporain. Vous pourrez profiter du dÃ©cor unique, des fleurs, des fruits, des livres et de la musique Ã  votre disposition. La salle Ã  manger sert des plats traditionnels marocains et vous pourrez Ã©couter de la musique locale prÃ¨s de la cheminÃ©e du salon. DÃ©tendez-vous sur une des terrasses ouvertes du riad. Le Riad Dar Mayssane prÃ©sente une atmosphÃ¨re chaleureuse et vivante. Vous pouvez profiter des nombreux soins de beautÃ© disponibles tels que les gommages exfoliants, les manucures, les massages et les bains de pÃ©tales de roses. Ce quartier (MÃ©dina) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : les marchÃ©s, l\'exploration de la vieille ville et les visites. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Rabat ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,3 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Rabat ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville. Nous parlons votre langue !', 'Maroc,Rabat', '+212458765325', 'Maroc', 'Rabat', 'piscine-chems_337384_pgbighd'),
('OHen HOTEL SCHLOSS Fleesensee', 'Construit en 1842, le SCHLOSS Fleesensee est situÃ© au cÅ“ur de la rÃ©gion des lacs du Mecklembourg, Ã  GÃ¶hren-Lebbin. Cet hÃ´tel-chÃ¢teau baroque propose un spa sur place et une connexion Wi-Fi gratuite dans l\'ensemble de ses locaux. Ã‰lÃ©gamment meublÃ©es, toutes les chambres et les suites du Schloss Fleesensee disposent de la climatisation, d\'un minibar, d\'une tÃ©lÃ©vision Ã  Ã©cran plat ainsi que d\'une salle de bains privative pourvue de peignoirs et de chaussons. L\'Ã©tablissement possÃ¨de en outre 3 restaurants, un bar et un salon avec vÃ©randa. Vous pourrez ainsi savourer des plats locaux et internationaux adaptÃ©s Ã  tous les goÃ»ts. De plus, vous aurez la possibilitÃ© de boire un verre dans la cave voÃ»tÃ©e ou de prendre vos repas dans la chapelle rÃ©amÃ©nagÃ©e du nouveau restaurant, le BlÃ¼chers. Les trois parcours de golf 18 trous et les deux 9 trous du Golfclub Fleesensee vous attendent juste Ã  cÃ´tÃ© du parc de l\'hÃ´tel. Par ailleurs, il vous sera possible de vous dÃ©tendre dans l\'espace bien-Ãªtre du spa Schloss incluant une piscine extÃ©rieure, une terrasse, une salle de sport, un sauna finlandais, un hammam et 2 suites spa privÃ©es. L\'Ã©tablissement se trouve Ã  20 km de la gare de Waren ainsi qu\'Ã  8 km du lac de Fleesen et de l\'autoroute A19. L\'Ã©tÃ©, un service de navette circulant dans les environs est enfin assurÃ©. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,9 pour un sÃ©jour Ã  deux.', 'Germany,Lebbin', '+101264874595', 'Germany', 'Lebbin', 'ger_hot222'),
('OHen HOTEL Steigenberger Hotel Bad Homburg', 'This hotel opposite Bad Homburg\'s Kurpark spa gardens offers an elegant Art DÃ©co design and spacious, soundproofed rooms. It provides fine dining and a conservatory cafÃ©. The rooms of the Steigenberger Hotel Bad Homburg include adjustable air conditioning, extra-long beds, and Wi-Fi. For an extra fee, a rich breakfast buffet is served in the Steigenberger RitterÂ´s. Other facilities at the Steigenberger include a sauna, steam room, and a small fitness room. Guests are welcome to use these for no extra charge. The Steigenberger Bad Homburg\'s underground garage is available for an extra fee. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Bad Homburg vor der HÃ¶he ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,4 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Bad Homburg vor der HÃ¶he ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Germany,Homburg', '+101264412895', 'Germany', 'Homburg', 'ger_hot3'),
('OHen HOTEL Suisse Alge', 'SituÃ© Ã  Alger, l\'hÃ´tel 3 Ã©toiles Suisse propose des hÃ©bergements climatisÃ©s, une rÃ©ception ouverte 24h/24 et un restaurant. Les chambres disposent d\'un bureau, d\'une salle de bains privative pourvue d\'une baignoire ou d\'une douche et d\'articles de toilette gratuits, ainsi que d\'une tÃ©lÃ©vision par satellite Ã  Ã©cran plat. Un petit-dÃ©jeuner continental est servi chaque jour. L\'aÃ©roport d\'Alger-Houari BoumÃ©diÃ¨ne, le plus proche, est installÃ© Ã  23 km. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Alger ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Alger ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Algerie,Alge', '+216641347852', 'Algerie', 'Alge', 'alge_hot6'),
('OHen HOTEL TANGER CITY CENTER', 'L\'hÃ´tel OHen Tanger City Center jouit d\'un emplacement idÃ©al pour votre sÃ©jour Ã  Tanger, au Maroc. Il se trouve Ã  une courte distance des principales infrastructures de la ville. Cet Ã©tablissement donne le ton avec un design moderne, des touches marocaines et une faÃ§ade en verre, offrant une vue superbe sur la ville et la mer MÃ©diterranÃ©e. ApprÃ©ciez un repas au Garden Grille, commandez votre cocktail prÃ©fÃ©rÃ© ou des tapas dans notre bar au cadre Ã©lÃ©gant et profitez d\'un Ã©ventail d\'autres services et installations. L\'hÃ´tel abrite un espace Ã©vÃ©nementiel modulable Ã©quipÃ© de l\'accÃ¨s Wi-Fi et baignÃ© de lumiÃ¨re naturelle. Cet hÃ´tel est le lieu idÃ©al pour vos rÃ©unions et Ã©vÃ©nements et peut accueillir jusqu\'Ã  260 personnes', 'Maroc,Tanger', '+212648795628', 'Maroc', 'Tanger', 'vue_367192_pgbighd'),
('OHen HOTEL TERMINUS LYON', 'IdÃ©alement situÃ© dans le 12Ã¨me arrondissement, en face de la gare de Lyon, l\'HÃ´tel OHen Terminus Lyon se trouve Ã  10 minutes Ã  pied de la place de la Bastille. Ses hÃ©bergements climatisÃ©s sont Ã©quipÃ©s d\'une connexion Wi-Fi gratuite et d\'une tÃ©lÃ©vision par satellite. Desservies par un ascenseur, toutes les chambres de l\'hÃ´tel OHen Terminus Lyon comprennent une salle de bains privative avec baignoire ou douche et sÃ¨che-cheveux. Un service d\'Ã©tage est Ã©galement assurÃ©. Des chambres quadruples sont Ã  la disposition des groupes et des familles.Un petit-dÃ©jeuner buffet complet est servi tous les matins Ã  l\'hÃ´tel Terminus Lyon, tandis que des distributeurs automatiques de boissons fraÃ®ches sont disponibles sur place 24h/24 et 7j/7. Vous pourrez vous dÃ©tendre au bar et lire les journaux quotidiens Ã  votre disposition. L\'hÃ´tel abrite une rÃ©ception ouverte 24h/24, une bagagerie et un service de billetterie. Le personnel se fera un plaisir de vous donner des conseils pour profiter au mieux de votre sÃ©jour Ã  Paris. Le Terminus Lyon est implantÃ© Ã  proximitÃ© de nombreux restaurants et transports en commun. La gare RER Gare de Lyon vous permettra de rejoindre directement les Champs-Ã‰lysÃ©es, le quartier d\'affaires de La DÃ©fense ou encore Disneyland Paris. Ce quartier (12e arr.) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : l\'histoire, les cathÃ©drales et l\'architecture. C\'est le quartier prÃ©fÃ©rÃ© des voyageurs visitant Paris, selon les commentaires clients indÃ©pendants. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 8,9 pour un sÃ©jour Ã  deux.', 'France,Lyon', '+124478914457', 'France', 'Lyon', '15263048'),
('OHen HOTEL Therasia Resort Sea and SPA', 'SituÃ© sur la pÃ©ninsule de Vulcanello, le Therasia Resort Sea and SPA offre des vues sur les Ã®les Ã‰oliennes. Cet impressionnant Ã©difice en pierres blanches propose un spa moderne et un accÃ¨s privÃ© Ã  la mer. L\'Ã©tablissement a Ã©tÃ© construit avec des matÃ©riaux locaux, dont de la roche en fusion de l\'Etna, de la terre cuite sicilienne ainsi que du bois de cÃ¨dre et d\'olivier. Les chambres Ã©lÃ©gantes sont dÃ©corÃ©es dans des couleurs douces et apaisantes. Ã€ quelques pas du Therasia Resort Sea and SPA, vous pourrez dÃ©couvrir un sentier de randonnÃ©e d\'1 km et marcher Ã  travers la vÃ©gÃ©tation mÃ©diterranÃ©enne, les cactus et les plantes subtropicales. Une navette gratuite vers le centre de Vulcano et le port est Ã©galement assurÃ©e. Chaque chambre est dotÃ©e d\'un balcon, d\'une tÃ©lÃ©vision par satellite Ã  Ã©cran LCD ainsi que d\'une salle de bains privative prÃ©sentant des pierres de lave et du carrelage colorÃ© sicilien. Certaines d\'entre elles jouissent de vues sur la mer et les Ã®les. Le Therasia Resort Sea and SPA dispose de 3 restaurants, dont l\'Aricpelago, une pizzeria-grill, et l\'Il Cappero, qui sert une cuisine mÃ©diterranÃ©enne avec des spÃ©cialitÃ©s siciliennes. Le copieux petit-dÃ©jeuner buffet se compose de viennoiseries de la rÃ©gion. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Vulcano ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,9 pour un sÃ©jour Ã  deux. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent rapport qualitÃ©/prix Ã  Vulcano ! Les clients en ont plus pour leur argent en comparaison avec d\'autres Ã©tablissements dans cette ville.', 'Italy,Vulcano', '+104674951227', 'Italy', 'Vulcano', 'italy_hot6'),
('OHen HOTEL Verdura Resort', 'NichÃ© au cÅ“ur de 230 hectares d\'oliviers dans la campagne sicilienne, bordÃ© par 2 km de cÃ´te, le Verdura Resort propose une plage privÃ©e, 3 parcours de golf et des vues imprenables sur la mer. Les chambres spacieuses du Verdura Resort comprennent un balcon, un lit king-size, une tÃ©lÃ©vision par satellite et une grande salle de bains privative. Certaines possÃ¨dent leur propre cour et terrasse privÃ©es surplombant la mer MÃ©diterranÃ©e. Parmi les Ã©quipements gratuits fournis par le Verdura Resort, vous trouverez un sac et une serviette de plage ainsi que des peignoirs. Les nombreuses installations sportives du Verdura incluent 6 courts de tennis, deux parcours de golf de 18 trous et un parcours de 9 trous, une piscine Ã  dÃ©bordement de 60 mÃ¨tres et une salle de sport. Les pistes de course Ã  pied traversent les plantations de citronniers et les oliveraies. Par ailleurs, le Verdura Resort propose 4 piscines de thalassothÃ©rapie, un programme de soins de beautÃ© et une variÃ©tÃ© de massages. Les restaurants et bars du complexe servent tous une large sÃ©lection de vins raffinÃ©s et une cuisine typiquement sicilienne. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,3 pour un sÃ©jour Ã  deux.', 'Italy,Ribera', '+104612351226', 'Italy', 'Ribera', 'italy_hot5'),
('OHen HOTEL Vier Jahreszeiten Kempinski Munchen', 'Le Vier Jahreszeiten Kempinski MÃ¼nchen est un Ã©tablissement 5 Ã©toiles dotÃ© dâ€™un spa Ã©lÃ©gant avec piscine et vue panoramique sur la ville. Il se trouve dans le centre de Munich, Ã  5 minutes Ã  pied de la place Marienplatz. Les chambres chic sont dÃ©corÃ©es dans un style moderne. ClimatisÃ©es, elles comprennent une tÃ©lÃ©vision, un minibar, ainsi quâ€™une salle de bains lumineuse pourvue de peignoirs, de chaussons et dâ€™articles de toilette gratuits. Chaque jour, vous y trouverez une bouteille dâ€™eau gratuite. Une bouilloire Ã©lectrique peut Ãªtre fournie sur demande (sous rÃ©serve de disponibilitÃ©). Tous les matins, vous dÃ©gusterez un copieux petit-dÃ©jeuner buffet. Vous pourrez aussi vous dÃ©tendre au Schwarzreiter Tagesbar, qui sert des cocktails. SituÃ© au 6Ã¨me Ã©tage, le spa du Kempinski dispose d\'une grande piscine, d\'une salle de sport bien Ã©quipÃ©e et d\'un sauna. Des massages et des soins de beautÃ© sont Ã©galement proposÃ©s. Le Vier Jahreszeiten Kempinski MÃ¼nchen se trouve Ã  proximitÃ© de boutiques, des galeries ainsi que de musÃ©es et Ã  5 minutes Ã  pied du parc pittoresque Hofgarten. Vous pourrez prendre le mÃ©tro ou un train urbain S-Bahn sur la place Marienplatz. Ce quartier (Altstadt-Lehel) est un choix idÃ©al pour les voyageurs qui s\'intÃ©ressent Ã  ces thÃ¨mes : le shopping, la nourriture et l\'architecture. C\'est le quartier prÃ©fÃ©rÃ© des voyageurs visitant Munich, selon les commentaires clients indÃ©pendants. Cet Ã©tablissement a Ã©galement Ã©tÃ© bien notÃ© pour son excellent emplacement Ã  Munich ! Les clients en sont plus satisfaits en comparaison avec d\'autres Ã©tablissements dans cette ville. Les couples apprÃ©cient particuliÃ¨rement l\'emplacement de cet Ã©tablissement. Ils lui donnent la note de 9,5 pour un sÃ©jour Ã  deux.', 'Germany,Munich', '+101648778951', 'Germany', 'Munich', 'ger_hot11');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `Num_res` int(11) NOT NULL,
  `Date_res` date NOT NULL,
  `Date_arr` date NOT NULL,
  `Date_dep` date NOT NULL,
  `Nbr_cham` int(11) NOT NULL,
  `adultes` int(11) NOT NULL,
  `enfants` int(11) NOT NULL,
  `Id` int(10) NOT NULL,
  `Tarif_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`Num_res`, `Date_res`, `Date_arr`, `Date_dep`, `Nbr_cham`, `adultes`, `enfants`, `Id`, `Tarif_total`) VALUES
(134, '2019-05-28', '2019-05-01', '2019-05-04', 1, 1, 0, 29, 180),
(137, '2019-05-28', '2019-05-28', '2019-05-30', 1, 1, 0, 31, 220),
(138, '2019-05-28', '2019-05-16', '2019-05-18', 1, 1, 0, 32, 70),
(139, '2019-05-30', '2019-05-01', '2019-05-03', 1, 1, 0, 29, 115),
(140, '2019-05-30', '2019-05-01', '2019-05-03', 1, 1, 0, 29, 0),
(141, '2019-05-30', '2019-05-01', '2019-05-03', 1, 1, 0, 29, 0),
(142, '2019-05-30', '2019-05-01', '2019-05-03', 1, 1, 0, 29, 0),
(143, '2019-05-30', '2019-05-01', '2019-05-03', 1, 1, 0, 29, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservations_cham`
--
-- Erreur de lecture de structure pour la table projetfin.reservations_cham : #1932 - Table 'projetfin.reservations_cham' doesn't exist in engine
-- Erreur de lecture des données pour la table projetfin.reservations_cham : #1064 - Erreur de syntaxe près de 'FROM `projetfin`.`reservations_cham`' à la ligne 1

-- --------------------------------------------------------

--
-- Structure de la table `reservations_ser`
--

CREATE TABLE `reservations_ser` (
  `Id` int(11) NOT NULL,
  `Num_res` int(11) NOT NULL,
  `Id_ser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_chambre`
--

CREATE TABLE `reservation_chambre` (
  `Id` int(11) NOT NULL,
  `Id_cham` int(200) NOT NULL,
  `Num_res` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `Id` int(11) NOT NULL,
  `Nom_ser` varchar(30) NOT NULL,
  `Desc_ser` text NOT NULL,
  `Tarif_ser` float NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`Id`, `Nom_ser`, `Desc_ser`, `Tarif_ser`, `photo`) VALUES
(1, 'Evenements', 'Une salle des fÃªtes ou salle polyvalente est un lieu public qui est mis Ã  la disposition des habitants pour tenir un Ã©vÃ¨nement festif. Le bÃ¢timent est gÃ©nÃ©ralement la propriÃ©tÃ© de la commune et gÃ©rÃ© par le service municipal chargÃ© de la vie associative.  Dans les villages, les Ã©vÃ©nements qui nÃ©cessitent une vaste piÃ¨ce couverte se tiennent dans les Ã©coles, dans les salles de sports ou dans une salle annexe Ã  la mairie. Les salles spÃ©cifiques sont nÃ©cessaires si l\'activitÃ© culturelle est plus importante et nÃ©cessite de mobiliser plus souvent l\'espace. Outre l\'investissement immobilier, l\'Ã©quipement d\'une salle communale reprÃ©sente un coÃ»t de fonctionnement dans le budget municipal. La ville peut louer la salle ou la mettre gracieusement Ã  disposition des utilisateurs.  Ces salles peuvent Ãªtre Ã©quipÃ© de vestiaires, de tables et de chaises et souvent d\'une cuisine pour pouvoir organiser un repas. Elles peuvent Ã©galement Ãªtre sonorisÃ©es, mais ces bÃ¢timents sont nÃ©anmoins soumis aux lÃ©gislations sur le bruit.', 20, 'Salle_de_fete'),
(2, 'Gym', 'Une salle de musculation dÃ©signe un lieu spÃ©cifique consacrÃ© Ã  l\'exercice de la musculation. Ã‰quipÃ©e de machines de musculation, elle est souvent privÃ©e et peut Ãªtre rÃ©servÃ©e Ã  la clientÃ¨le d\'un hÃ´tel, aux rÃ©sidents d\'un immeuble, ou plus couramment aux adhÃ©rents d\'une association de musculation.  L\'exercice de la musculation se fait principalement par l\'utilisation de poids qu\'il soit libre, par les haltÃ¨res notamment ou encore guidÃ© par des machines.', 30, 'gym'),
(3, 'Piscine', 'Une piscine est un bassin artificiel, Ã©tanche, rempli d\'eau et dont les dimensions permettent Ã  un Ãªtre humain de s\'y plonger au moins partiellement. Une piscine se diffÃ©rencie d\'une cuve ou d\'une baignade par ses Ã©quipements de filtration (pompe, filtre...). Il existe diffÃ©rents types de piscine dont les caractÃ©ristiques varient en fonction de leurs destinations (piscine privÃ©e, piscine privÃ©e Ã  usage collectif, piscine publique) et de leur usage (piscine familiale, piscine de loisir, piscine thÃ©rapeutique, piscine d\'entrainement sportif, piscine de plongÃ©e, aussi appelÃ©e Â« fosse Ã  plongÃ©e Â»...).', 30, 'piscine'),
(4, 'Restaurant', 'Un restaurant est un Ã©tablissement de commerce oÃ¹ l\'on sert des plats prÃ©parÃ©s et des boissons Ã  consommer sur place, en Ã©change d\'un paiement.  La nourriture y est gÃ©nÃ©ralement prÃ©parÃ©e par un chef cuisinier. Le terme couvre une multiplicitÃ© de lieux et une grande diversitÃ© des types de cuisines, tant locales qu\'Ã©trangÃ¨res. Les restaurants sont parfois le dispositif rÃ©servÃ© au service des repas au sein d\'une plus grande entitÃ© (hÃ´tel, universitÃ©, aÃ©roport...), on parle alors de restaurant collectif par opposition au site de cuisine. Ils peuvent aussi Ãªtre associÃ©s Ã  une activitÃ© de traiteur ou d\'Ã©picerie. Le restaurant offre des conditions de confort plus ou moins importante, et la restauration est dite Â« rapide Â» quand le client peut commander et manger en quelques minutes ou dizaines de minutes, Ã©ventuellement debout.', 15, 'rest'),
(5, 'Spa', 'Un spa ou centre d\'hydrothÃ©rapie est un Ã©tablissement de soins esthÃ©tiques ou de remise en forme Ã  l\'aide de l\'hydrothÃ©rapie. Les mÃ©thodes utilisÃ©es peuvent comprendre le bain et la douche d\'hydromassage, le bain de boue, le bain de vapeur, le sauna, la gymnastique aquatique1.', 35, 'spa'),
(6, 'Transport Touristique', 'Notre personnel , qui parle plusieurs langues, sera Ã  votre entiÃ¨re disposition pour vous renseigner Ã  propos des visites guidÃ©es en autocar grand tourisme, qui parcourent les principaux lieux d\'interet et de valeur dans la ville. Vous recevrez Ã©galement des guides pour des restaurants, trattorias, cafÃ©s, pubs et tout ce dont vous aurez besoin pendant votre sÃ©jour.', 20, 'trans');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`nom_catg`),
  ADD KEY `nom_catg` (`nom_catg`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`Id_cham`),
  ADD KEY `Nom_catg` (`Nom_catg`),
  ADD KEY `Id_cham` (`Id_cham`),
  ADD KEY `Nom_hotel` (`Nom_hotel`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Nom_hotel`),
  ADD KEY `Nom_hotel` (`Nom_hotel`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`Num_res`),
  ADD KEY `Num_res` (`Num_res`),
  ADD KEY `Id` (`Id`);

--
-- Index pour la table `reservations_ser`
--
ALTER TABLE `reservations_ser`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Num_res` (`Num_res`),
  ADD KEY `Id_ser` (`Id_ser`);

--
-- Index pour la table `reservation_chambre`
--
ALTER TABLE `reservation_chambre`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `Id_cham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `Num_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT pour la table `reservations_ser`
--
ALTER TABLE `reservations_ser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reservation_chambre`
--
ALTER TABLE `reservation_chambre`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`Nom_catg`) REFERENCES `categorie` (`nom_catg`),
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`Nom_hotel`) REFERENCES `hotel` (`Nom_hotel`);

--
-- Contraintes pour la table `reservations_ser`
--
ALTER TABLE `reservations_ser`
  ADD CONSTRAINT `reservations_ser_ibfk_1` FOREIGN KEY (`Num_res`) REFERENCES `reservations` (`Num_res`),
  ADD CONSTRAINT `reservations_ser_ibfk_2` FOREIGN KEY (`Id_ser`) REFERENCES `services` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
