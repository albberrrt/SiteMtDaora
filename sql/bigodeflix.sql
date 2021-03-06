    CREATE DATABASE bigodeflix;
    USE bigodeflix;

    CREATE TABLE `MovieGenres` (
        `idGenre` INT PRIMARY KEY NOT NULL,
        `Genre` VARCHAR(175) NOT NULL,
        `genreImg` VARCHAR(255) NOT NULL
        );

    CREATE TABLE `Movies` (
        `movieId` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        `movieName` VARCHAR(255) NOT NULL,
        `movieDesc` TEXT(1000) NOT NULL,
        `movieDuration` INT NOT NULL,
        `releaseYear` INT NOT NULL,
        `movieGenre01` INT,
        `movieGenre02` INT,
        `movieGenre03` INT,
        `movieBanner` VARCHAR(255) NOT NULL,
        `movieBackground` VARCHAR(255) NOT NULL,
        `movieLink` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`movieGenre01`) REFERENCES MovieGenres(`idGenre`),
        FOREIGN KEY (`movieGenre02`) REFERENCES MovieGenres(`idGenre`),
        FOREIGN KEY (`movieGenre03`) REFERENCES MovieGenres(`idGenre`)
        );
    
    CREATE TABLE `Users` (
        `userId` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        `userName` VARCHAR(255) NOT NULL,
        `userEmail` VARCHAR(255) NOT NULL,
        `userPassWord` VARCHAR(20) NOT NULL,
        `userFav01` INT NOT NULL,
        `userFav02` INT NOT NULL,
        `userImg` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`userFav01`) REFERENCES MovieGenres(`idGenre`),
        FOREIGN KEY (`userFav02`) REFERENCES MovieGenres(`idGenre`)
        );

INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'V de Vingança', 'Após uma guerra mundial, a Inglaterra é ocupada por um governo fascista e vive sob um regime totalitário. Na luta pela liberdade, um vigilante, conhecido apenas como V, utiliza-se de táticas terroristas para enfrentar os opressores da sociedade. V salva uma jovem chamada Evey da polícia secreta e encontra nela uma nova aliada em busca de liberdade e justiça para o seu país.'
, '130', '2006', NULL, NULL, NULL, '../img/movieBanners/VdeVingançaBanner.webp', '../img/movieBackgrounds/VdeVingançaBackground.jpg', 'https://streamtape.com/v/lxZv8lGKD2f7K6z');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Taxi Driver', 'Travis Bickle (Robert DeNiro) é um jovem veterano do Vietnã que volta para as ruas de Nova York trabalhando como motorista de táxi. Conhecendo melhor todos os podres das vielas da cidade, seu caminho se cruza com o das jovens Betsy (Cybill Sheperd) e Iris (Jodie Foster), uma prostituta de apenas doze anos, o que o faz se revoltar com tudo e com todos, explodindo sua raiva e violência que sempre demonstrou ter.', '114', '1976', '4', '5', '3', '../img/movieBanners/TaxiDriverBanner.webp', '../img/movieBackground/TaxiDriverBackground.jpg', '')

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassWord`, `userFav01`, `userFav02`, `userImg`) VALUES ('1', 'carolteytey', 'anne.carol.rx@gmail.com', 'carolteytey', '1', '2', '../img/profileImage/carolteyteyProfile.png');

INSERT INTO `moviegenres` (`idGenre`, `Genre`) VALUES ('1', 'Romance'), ('2', 'Terror');UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/RomanceGenre.jpg' WHERE `moviegenres`.`idGenre` = 1; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/TerrorGenre.jpg' WHERE `moviegenres`.`idGenre` = 3; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/SuspenseGenre.jpg' WHERE `moviegenres`.`idGenre` = 4; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/DramaGenre.jpg' WHERE `moviegenres`.`idGenre` = 5; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/ComédiaGenre.jpg' WHERE `moviegenres`.`idGenre` = 6; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/ComédiaRomânticaGenre.jpg' WHERE `moviegenres`.`idGenre` = 7; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/FicçãoGenre.jpg' WHERE `moviegenres`.`idGenre` = 8; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/InfantilGenre.webp' WHERE `moviegenres`.`idGenre` = 9; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/FaroesteGenre.jpg' WHERE `moviegenres`.`idGenre` = 10; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/GuerraGenre.jpg' WHERE `moviegenres`.`idGenre` = 11;
INSERT INTO `moviegenres` (`idGenre`, `Genre`, `genreImg`) VALUES ('1', 'Romance', ''), ('2', 'Terror', ''), ('3', 'Ação e Aventura', ''), ('4', 'Suspense', ''), ('5', 'Drama', ''), ('6', 'Comédia', ''), ('7', 'Comédia Romântica', ''), ('8', 'Ficção Científica', ''), ('9', 'Infantil', ''), ('10', 'Faroeste', ''), ('11', 'Guerra', '')

UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/TerrorGenre.jpg' WHERE `moviegenres`.`idGenre` = 2
UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/AçãoGenre.jpg' WHERE `moviegenres`.`idGenre` = 3

UPDATE `users` 
SET 
	`userEmail` = 'asenhaesoulindo@gmail.com'
WHERE 
    `users`.`userId` = 10

    UPDATE `users` SET `userName` = 'alberto', `userEmail` = 'asenhaesoulindoo@gmail.com', `userPassWord` = '$2y$10$Hjkj6RD8/tz4PQq93lcyeeCQNPVbgNKibs4K/FhhTvDmmet7JGjd6m', `userFav01` = '2', `userFav02` = '1' WHERE `users`.`userId` = 10