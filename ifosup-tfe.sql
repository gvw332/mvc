-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 31 mai 2023 à 23:14
-- Version du serveur : 5.5.68-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ifosup-tfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` bigint(20) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `medias` varchar(255) DEFAULT NULL,
  `enligne` tinyint(1) NOT NULL DEFAULT '0',
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `contenu`, `medias`, `enligne`, `modified_date`) VALUES
(42, 'Que faire pousser comme tomates en Belgique ?', 'Introduction :<br>La Belgique offre un climat tempéré, ce qui en fait un endroit propice à la culture des tomates. Que vous ayez un jardin, un balcon ou une serre, cet article vous guidera à travers les variétés de tomates adaptées au climat belge et vous donnera des conseils pratiques pour réussir la culture de vos plants de tomates.<br><br>1. Variétés de tomates adaptées au climat belge :<br>En raison du climat belge, il est recommandé de choisir des variétés de tomates qui mûrissent plus rapidement et résistent mieux aux conditions changeantes. Voici quelques variétés populaires :<br><br>a. \'Merveille des marchés\' : Cette variété précoce produit des tomates savoureuses de taille moyenne et est résistante aux maladies.<br><br>b. \'Cœur de bœuf\' : Une variété de tomate charnue et juteuse, idéale pour les climats plus frais.<br><br>c. \'Cornue des Andes\' : Cette variété rustique donne des tomates allongées, douces et savoureuses, parfaites pour les étés belges.<br><br>d. \'Green Zebra\' : Une variété de tomate verte rayée qui résiste bien aux variations de température.<br><br>2. Préparation du sol et plantation :<br>Préparez votre sol en le désherbant et en le nourrissant avec du compost bien décomposé. Assurez-vous que le sol est bien drainé pour éviter les problèmes d\'humidité. Pour la plantation, attendez que tout risque de gel soit passé (généralement après la mi-mai en Belgique). Creusez des trous suffisamment profonds et espacez les plants d\'environ 60 à 90 centimètres.<br><br>3. Exposition et soins :<br>Les plants de tomates ont besoin d\'une exposition ensoleillée pour se développer correctement. Placez-les dans un endroit qui reçoit au moins 6 à 8 heures de lumière directe par jour. Arrosez régulièrement les plants, en évitant de mouiller les feuilles pour réduire les risques de maladies fongiques. Paillez le sol autour des plants pour maintenir l\'humidité et réduire les mauvaises herbes.<br><br>4. Tuteurage et taille :<br>La plupart des variétés de tomates nécessitent un tuteurage pour les soutenir et éviter qu\'elles ne s\'affaissent. Utilisez des tuteurs, des cages à tomates ou des treillis pour soutenir les plants à mesure qu\'ils grandissent. Également, pincez les gourmands, les petites pousses qui se forment à l\'aisselle des feuilles, pour favoriser une croissance verticale et une meilleure circulation de l\'air.<br><br>5. Fertilisation et entretien :<br>Apportez régulièrement un engrais équilibré pour assurer une bonne croissance des plants de tomates. Veillez à suivre les instructions d\'application spécifiques à l\'engrais utilisé. Surveillez les signes de ravageurs ou de maladies et prenez des mesures appropriées, telles que l\'utilisation d\'insecticides naturels ou de fongicides, si nécessaire.<br><br>6. Récolte et dégustation :<br>Les tomates peuvent être récoltées lorsque leurs couleurs sont vives et qu\'elles sont fermes au toucher. Cueillez-les délicatement à la main pour éviter de les abîmer. Profitez de vos tomates fraîches dans des salades, des sauces ou des plats cuisinés et savourez la récompense de votre travail de jardinage.<br><br>Conclusion :<br>Cultiver des plants de tomates en Belgique peut être un succès gratifiant avec les bonnes variétés et les soins appropriés. Suivez les conseils de ce guide pour obtenir une récolte savoureuse et abondante de tomates dans votre jardin ou sur votre balcon. N\'oubliez pas d\'expérimenter avec différentes variétés pour découvrir celles qui prospèrent le mieux dans votre climat local.', 'tomatoes.jpg', 1, '2023-05-07 22:22:20'),
(45, 'Bienvenue sur notre tout nouveau site internet !', 'Chers visiteurs,<br>c\'est avec une grande excitation que nous vous accueillons sur notre tout nouveau site internet dédié au merveilleux monde du jardinage ! Après des semaines de préparation et de travail acharné, nous sommes ravis de pouvoir enfin partager avec vous notre passion et notre expertise. <br>Notre site internet a été conçu avec soin pour vous offrir une expérience immersive et enrichissante. Que vous soyez un jardinier expérimenté ou un novice plein de curiosité, vous trouverez ici une mine d\'informations, d\'astuces et d\'inspiration pour embellir votre jardin et créer un espace qui reflète votre personnalité.<br><br>Nous espérons que notre site internet deviendra votre source d\'inspiration et votre guide pour créer un jardin magnifique, rempli de couleurs, de senteurs et de moments de détente. Explorez, apprenez, partagez et surtout, profitez de votre parcours jardinier avec nous.<br><br>Bienvenue dans l\'univers passionnant du jardinage !<br><br>gvw-tech', 'Blue Modern Company Business Logo.png', 1, '2023-03-09 23:08:57'),
(51, 'Le mois de juin : un moment clé pour le jardinier passionné', 'Alors que nous allons entamer le mois de juin, il est temps de profiter pleinement de nos espaces extérieurs et de continuer à cultiver notre jardin avec enthousiasme. Ce mois-ci offre une multitude d\'opportunités et de tâches importantes pour les amoureux des plantes et les jardiniers. Voici quelques actualités et conseils pour bien commencer ce mois de juin :<br><br>1. Récoltes généreuses :<br>Le mois de juin est synonyme de récoltes abondantes. Les légumes tels que les courgettes, les haricots, les tomates et les concombres commencent à mûrir et à être prêts à être cueillis. Profitez des saveurs fraîches et délicieuses de votre potager en récoltant régulièrement les légumes arrivés à maturité.<br><br>2. Soin des rosiers :<br>Juin est le mois des roses ! Assurez-vous de donner à vos rosiers l\'attention qu\'ils méritent. Taillez les roses fanées régulièrement pour encourager de nouvelles floraisons et veillez à bien arroser les rosiers pendant les périodes de chaleur. Vous pourriez également envisager d\'appliquer un engrais spécialement formulé pour les rosiers pour stimuler leur croissance et leur floraison.<br><br>3. Entretien des pelouses :<br>Votre pelouse a probablement connu une croissance rapide au printemps. En juin, veillez à tondre régulièrement votre gazon en ajustant la hauteur de coupe selon les conditions climatiques. Arrosez la pelouse tôt le matin pour favoriser une croissance saine et évitez de couper l\'herbe trop courte pour prévenir les problèmes de dessèchement.<br><br>4. Gestion des mauvaises herbes :<br>Les mauvaises herbes peuvent rapidement s\'installer dans votre jardin en juin. Prenez le temps de désherber régulièrement pour empêcher leur propagation et pour éviter qu\'elles ne concurrencent vos plantes cultivées. Utilisez des techniques manuelles, un paillage épais ou des herbicides naturels pour maîtriser ces indésirables.<br><br>5. Protection contre les ravageurs :<br>Avec la chaleur et l\'humidité croissantes, les ravageurs tels que les pucerons, les limaces et les escargots peuvent devenir plus actifs dans votre jardin. Surveillez attentivement vos plantes et utilisez des méthodes écologiques pour contrôler les ravageurs, comme la culture de plantes répulsives ou l\'introduction d\'insectes prédateurs bénéfiques.<br><br>6. Plantations estivales :<br>Juin est un moment idéal pour planter des fleurs annuelles, des plantes vivaces et des légumes d\'été. Préparez bien le sol et choisissez des plantes adaptées à votre climat local. Arrosez abondamment les nouvelles plantations et veillez à les protéger des fortes chaleurs.<br><br>7. Soins des plantes en pot :<br>Si vous avez des plantes en pot, gardez-les bien hydratées en augmentant la fréquence des arrosages pendant les périodes chaudes. Fournissez-leur également des nutriments supplémentaires en utilisant des engrais adaptés aux plantes en pot. Vérifiez régulièrement l\'état des racines et rempotez les plantes si nécessaire.<br><br>Ce mois de juin offre de nombreuses possibilités de travailler avec passion et de profiter des résultats gratifiants de notre travail acharné dans le jardin. Prenez le temps d\'admirer la beauté de la nature qui s\'épanouit autour de vous et n\'oubliez pas de vous accorder des moments de détente et de contemplation dans votre oasis verte.<br><br>Joyeux jardinage et que ce mois de juin soit rempli de fleurs et de récoltes abondantes !<br><br>Votre équipe dévouée des actualités du jardin.', 'cueillette-fraises.jpg', 1, '2023-05-29 22:20:27'),
(52, 'Les activités incontournables au jardin et au potager en mars', 'Introduction :<br>Le mois de mars marque l\'arrivée tant attendue du printemps, et avec lui, de nouvelles opportunités passionnantes pour les jardiniers. C\'est le moment idéal pour se remettre au travail dans le jardin et préparer le potager pour une saison de croissance abondante. Dans cet article, nous vous présenterons les activités essentielles à réaliser au jardin et au potager en mars.<br><br>1. Préparation du sol :<br>Au mois de mars, il est temps de préparer le sol pour les futures plantations. Commencez par enlever les mauvaises herbes et les débris végétaux accumulés pendant l\'hiver. Ensuite, ameublissez le sol en utilisant une fourche-bêche ou une grelinette pour favoriser la circulation de l\'air et des nutriments.<br><br>2. Semis et plantation :<br>Mars est le moment idéal pour commencer les semis à l\'intérieur, en prévision de la saison de croissance. Les légumes tels que les tomates, les poivrons, les aubergines et les courges peuvent être semés dans des godets, puis placés dans un endroit lumineux ou sous des lampes de croissance. Dans le potager, certaines cultures rustiques peuvent être directement semées en pleine terre, comme les radis, les carottes, les épinards et les pois.<br><br>3. Taille des arbustes et des fruitiers :<br>Profitez du mois de mars pour tailler vos arbustes à floraison estivale ou printanière. Supprimez les branches mortes, malades ou endommagées, ainsi que les pousses indésirables. Pour les fruitiers, effectuez également une taille légère pour favoriser une meilleure circulation de l\'air et une croissance équilibrée.<br><br>4. Entretien du gazon :<br>Au mois de mars, le gazon reprend sa croissance. C\'est donc le moment idéal pour procéder à une première tonte de l\'année. Réglez la hauteur de coupe de la tondeuse à une hauteur modérée pour éviter de couper l\'herbe trop court. Si nécessaire, scarifiez le gazon pour éliminer la mousse et les débris accumulés.<br><br>5. Amendement du sol et compostage :<br>Profitez de ce mois pour enrichir le sol de votre potager et de vos parterres de fleurs en ajoutant du compost bien décomposé. Épandez une couche de compost d\'environ 5 à 10 cm d\'épaisseur sur le sol et mélangez-le légèrement. Cela améliorera la structure du sol, favorisera la rétention d\'eau et apportera des nutriments essentiels à vos plantes.<br><br>6. Protection contre les gelées :<br>Même si le printemps est en marche, il peut encore y avoir des risques de gelées au mois de mars. Surveillez les prévisions météorologiques et protégez vos plantes sensibles en utilisant des voiles d\'hivernage, des cloches ou en les déplaçant temporairement à l\'intérieur.<br><br>7. Entretien des outils de jardinage :<br>Profitez de cette période plus calme pour entretenir vos outils de jardinage. Nettoyez-les soigneusement, affûtez les lames des sécateurs et des cisailles, et lubrifiez les parties mobiles. Cela permettra de prolonger leur durée de vie et de les avoir prêts pour les prochaines tâches au jardin.<br><br>Conclusion :<br>Au mois de mars, les journées s\'allongent et la nature se réveille peu à peu. Profitez de ce moment pour préparer votre jardin et votre potager en effectuant les activités essentielles telles que la préparation du sol, les semis, la taille des arbustes et des fruitiers, l\'entretien du gazon et l\'amendement du sol. Avec ces soins attentifs, votre jardin sera prêt à accueillir une saison de croissance verdoyante et de récoltes abondantes.', 'mains-dans-la-terre-.jpg', 1, '2023-03-10 14:34:42'),
(53, 'Les plaisirs du jardinage au mois d\'avril', 'Introduction :<br>Le mois d\'avril marque le début du printemps en plein essor, et le jardin est rempli de promesses et d\'opportunités. C\'est le moment idéal pour profiter des plaisirs du jardinage et observer la nature s\'épanouir. Dans cet article, nous vous présenterons quelques activités à apprécier au jardin au mois d\'avril.<br><br>1.  Plantations printanières :<br>Avril est le moment idéal pour planter de nouvelles fleurs et plantes dans votre jardin. Optez pour des variétés printanières telles que les primevères, les tulipes, les narcisses et les jacinthes. Préparez le sol en enlevant les mauvaises herbes et en l\'ameublissant. Choisissez des emplacements en fonction des besoins en ensoleillement et en drainage de chaque plante.<br><br>2. Entretien des bulbes à floraison estivale :<br>Avril est également le moment de prendre soin des bulbes à floraison estivale que vous avez plantés plus tôt dans l\'année. Vérifiez l\'émergence des pousses et éliminez les mauvaises herbes autour des bulbes. Fournissez-leur un arrosage régulier et ajoutez une couche de paillis pour maintenir l\'humidité du sol.<br><br>3. Soins des plantes en pot :<br>Si vous avez des plantes en pot, avril est le bon moment pour leur donner un peu d\'attention. Vérifiez l\'humidité du sol et arrosez-les régulièrement. Si nécessaire, rempotez les plantes qui ont besoin d\'un espace supplémentaire pour leurs racines. N\'oubliez pas de fertiliser vos plantes en pot pour leur apporter les nutriments nécessaires à leur croissance.<br><br>4. Préparation du potager :<br>Avril est le moment propice pour préparer votre potager en vue des cultures estivales. Enlevez les mauvaises herbes, ameublissez le sol et ajoutez du compost pour enrichir la terre. Planifiez vos cultures et commencez à semer des légumes tels que les haricots, les courgettes, les concombres et les salades.<br><br>5. Contrôle des ravageurs :<br>Avec l\'arrivée du printemps, les ravageurs commencent à être plus actifs. Surveillez vos plantes et inspectez-les régulièrement pour détecter les signes d\'insectes nuisibles ou de maladies. Utilisez des méthodes de lutte biologiques, comme l\'introduction d\'insectes bénéfiques ou l\'utilisation de produits naturels, pour protéger vos plantes.<br><br>Conclusion :<br>Le mois d\'avril offre une multitude d\'opportunités de jardinage. Profitez de ce moment pour planter de nouvelles fleurs, prendre soin des bulbes à floraison estivale, entretenir vos plantes en pot, préparer le potager et contrôler les ravageurs. En participant activement aux activités de jardinage en avril, vous créerez un espace extérieur florissant et agréable à vivre.', 'tulipes-hollande.jpg', 1, '2023-04-08 22:40:29');

-- --------------------------------------------------------

--
-- Structure de la table `recover`
--

CREATE TABLE `recover` (
  `id` bigint(20) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `niveau` int(3) NOT NULL DEFAULT '2',
  `login` varchar(60) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `niveau`, `login`, `mdp`) VALUES
(10, 'VolkWags', 'Gaston', 'mail@gvw-tech.be', 1, 'Admin', '$2y$10$6gQ6BwWkz9hlazWhf6qcJOk9dEonDigA/C1BbpVZud0y/nXS9m1pO'),
(12, 'VW', 'JP', 'jpvw.ing@hotmail.com', 2, 'jpvw4u', '$2y$10$FtKSxxG7qtNjHjgaA3/Geu/MNrNxnp5reptG9KAKiLr5SYdb4ETjG'),
(60, 'Secchi', 'Silvio', 'ugs0309@gmail.com', 2, 'Stinger', '$2y$10$QW3Q6kzSdAp/pHsTzGSkruICCmsg.q2GwRZfl7wh9qoXXYoYASNqi'),
(61, 'tata', 'tata', 'pevin61201@favilu.com', 2, 'tata', '$2y$10$NbisoLif2bTxSPFDEnYTAOOpTwdKGpttazy6rpBfnYR32/uuUHwaK'),
(62, 'Levecq', 'Jason', 'levecqjason@gmail.com', 2, 'Xenon', '$2y$10$QiAwtvw.hiaUafX6I3UMAuAWHR7F9CNu0LyaRvWMU8S88yf/EESE6'),
(63, 'van Wessem', 'Antoine', 'vw.antoine@gmail.com', 2, 'AVW', '$2y$10$6dwG4PS8cTmYS71UtIMijuo/457pv88kmihPXEigjYxlIg3C9kEGK'),
(64, 'Dark', 'Cheos', 'Ericdellisse@gmail.com', 2, 'Cheos', '$2y$10$XRiVtfQ0fvrhesnwQ1aJCeLpvTMeqwYifWDVY4hCOLKRcxNGA5UFG'),
(65, 'legrand', 'mathieu', 'mathlegrand1985@gmail.com', 2, 'Darkside', '$2y$10$yH3uOLUj4cMcFSN0aEeGDuZg4dAhdC7X1lnrIwRaYOCY0CAc4uRzq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recover`
--
ALTER TABLE `recover`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `login` (`login`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `recover`
--
ALTER TABLE `recover`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
