create table categorie(
    idCategorie int primary key NOT NULL AUTO_INCREMENT,
    nom varchar(30),
    ref varchar(35)
);
insert into categorie (nom,ref) values 
    ('Aventure', '.aventure'),
    ('Sport', '.sport'),
    ('Carte', '.carte');

create table jeux(
    idJeu int primary key NOT NULL AUTO_INCREMENT,
    idCategorie int,
    nom varchar(50),
    descrip varchar(900),
    photo varchar(200),
    foreign key (idCategorie) references categorie(idCategorie)
);
insert into jeux (idCategorie, nom, descrip,photo) values
    (1,'Eyes: The Horror Game','Eyes: The Horror Game est un jeu d horreur à la première personne dans lequel votre objectif est très simple: vous devez entrer dans un bâtiment au milieu de la nuit, trouver une vingtaine de sacs remplis d argent, et vous échapper avant que quelqu un réalise ce que vous avez fait.','eye-horror-game'),
    (1,'Five Nights at Freddy s 4','Five Nights at Freddy s 4 est le quatrième et dernier chapitre de cette populaire saga d horreur qui effraie des gens sur Windows et Android depuis la sortie du premier jeu, depuis 2014. Depuis ce moment,en un peu plus d un an, Five Nights at Freddy est devenu un symbole d horreur.','freddy'),
    (1,'Minecraft','Minecraft est un jeu rempli d aventure, d exploration et de créativité où tu survis dans un monde composé de blocs - semblable aux Legos - que tu peux déplacer comme tu veux à partir d une perspective à la première personne. Et lorsque nous disons « comme tu veux », il s agit de la vérité, car tu peux amasser des blocs de tout type de matériel à utiliser plus tard pour la façon que tu préfères.','minecraft'),
    (1,'SCP - Containment Breach','SCP: Containment Breach est un jeu vidéo de type survival horror en vue subjective, développé en Blitz Basic par Joonas Rikkonen. Ce jeu est inspiré de certaines histoires de la « Fondation SCP ».','SCP'),
    (2,'FIFA 19','Soyez prêt pour le retour de l UEFA Ligue des champions avec du nouveau contenu incroyable dans FIFA 19. Avec des maillots et des éléments joueurs Ligue des champions et le choix entre Neymar Jr, Kevin De Bruyne ou Paulo Dybala en prêt pour 10 matchs pour votre équipe, c est le meilleur moment pour profiter de FIFA 19 !','FIFA 19'),
    (2,'NBA 2K19','NBA 2K19 est un jeu vidéo en développement, sur PC, PlayStation 4, Xbox One et Nintendo Switch, de genre sport, développé par Visual Concepts et édité par 2K Games.','NBA'),
    (2,'PES 19','Le gameplay de Pro Evolution Soccer 2019 (PES 2019) a été considérablement amélioré pour offrir aux joueurs une expérience de jeu authentique et une vitesse de déplacement réaliste. Vous allez également pouvoir profiter de la plus grande évolution du mode myClub depuis des années. Cette dernière permet notamment d obtenir des joueurs puissants, de jouer en coopération ou d affronter vos rivaux mais surtout de participer à la PES LEAGUE.','PES'),
    (3,'UNO','Facile à apprendre, vous serez vite gagné par la frénésie d’UNO, le plus célèbre des jeux de cartes familiaux. Pour gagner débarrassez-vous de toutes vos cartes, utilisez les cartes action pour piéger vos adversaires. Lorsqu’il ne vous reste plus qu’une seule carte en main n’oubliez pas de dire UNO.','Uno'),
    (3,'Citadelle','Dans Citadelles, chaque joueur développe une cité pour la rendre la plus riche et la plus prestigieuse. A chaque tour de jeu, chaque joueur choisit le personnage qu il veut incarner. Les personnages peuvent collecter de l or, bâtir des quartiers, et exercer des pouvoirs particuliers tel que voler de l or, assassiner, subtiliser ou détruire des quartiers adverses... C est un jeu de double-guessing, où chaque joueur doit à la fois prendre le personnage le plus bénéfique, et éviter d être victime d un personnage adverse. Après quelques tours de jeu, on se plonge dans l ambiance et dans l intrigue.','citadelle');

create table admin(
    idAdmin int primary key NOT NULL AUTO_INCREMENT,
    identifiant varchar(75),
    mdpHash varchar(50)
);
insert into admin values
    (1,'Rindra','991486ebd9c21df18ce28d6d07e16e49dd40f47c');