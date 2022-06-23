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
        `userPassWord` VARCHAR(255) NOT NULL,
        `userFav01` INT NOT NULL,
        `userFav02` INT NOT NULL,
        `userImg` VARCHAR(255) NOT NULL,
        FOREIGN KEY (`userFav01`) REFERENCES MovieGenres(`idGenre`),
        FOREIGN KEY (`userFav02`) REFERENCES MovieGenres(`idGenre`)
        );

INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'V de Vingança', 'Após uma guerra mundial, a Inglaterra é ocupada por um governo fascista e vive sob um regime totalitário. Na luta pela liberdade, um vigilante, conhecido apenas como V, utiliza-se de táticas terroristas para enfrentar os opressores da sociedade. V salva uma jovem chamada Evey da polícia secreta e encontra nela uma nova aliada em busca de liberdade e justiça para o seu país.'
, '130', '2006', NULL, NULL, NULL, '../img/movieBanners/VdeVingançaBanner.webp', '../img/movieBackgrounds/VdeVingançaBackground.jpg', 'https://streamtape.com/v/lxZv8lGKD2f7K6z');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Taxi Driver', 'Travis Bickle (Robert DeNiro) é um jovem veterano do Vietnã que volta para as ruas de Nova York trabalhando como motorista de táxi. Conhecendo melhor todos os podres das vielas da cidade, seu caminho se cruza com o das jovens Betsy (Cybill Sheperd) e Iris (Jodie Foster), uma prostituta de apenas doze anos, o que o faz se revoltar com tudo e com todos, explodindo sua raiva e violência que sempre demonstrou ter.'
, '114', '1976', '4', '5', '3', '../img/movieBanners/TaxiDriverBanner.webp', '../img/movieBackground/TaxiDriverBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Bastardos Inglórios', 'Durante a Segunda Guerra Mundial, na França, um grupo de judeus americanos conhecidos como Bastardos espalha o terror entre o terceiro Reich. Ao mesmo tempo, Shosanna, uma judia que fugiu dos nazistas, planeja vingança quando um evento em seu cinema reunirá os líderes do partido. ',
 '153', '2009', '3', '11', '4', '../img/movieBanners/BastardosBanner.webp', '../img/movieBackgrounds/BastardosBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Django Livre', 'Django é um escravo, comprado pelo caçador de recompensas alemão Dr. King Schultz para auxiliá-lo em uma missão. A dupla acaba fazendo amizade e, após resolver os problemas do caçador, parte em busca por Broomhilda, esposa de Django. Para isso, eles devem enfrentar o vilão Calvin Candie, proprietário da escrava. '
, '165', '2012', '10', '3', '2', '../img/movieBanners/DjangoBanner.webp', '../img/movieBackgrounds/DjangoBackgrounds.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Pulp Fiction: Tempo de Violência', 'Vincent Vega (John Travolta) e Jules Winnfield (Samuel L. Jackson) são dois assassinos profissionais que trabalham fazendo cobranças para Marsellus Wallace (Ving Rhames), um poderosos gângster. Vega é forçado a sair com a garota do chefe, temendo passar dos limites. Enquanto isso, o pugilista Butch Coolidge (Bruce Willis) se mete em apuros por ganhar uma luta que deveria perder. ', '154', '1994', '4', '3', '6', '../img/movieBanners/PulpFictionBanner.webp', '../img/movieBackgrounds/PulpFictionBackground.jpg', ''), (NULL, 'Shreck para sempre', 'Com saudade do tempo em que era um verdadeiro ogro, Shrek assina um contrato enfeitiçado com Rumpelstiltskin e... puf! Em um instante, tudo e todos se transformam. De repente Burro não se lembra de seu melhor amigo, Fiona agora é uma valente princesa guerreira e Gato de Botas é só um gato gordo! Juntos, eles precisam reverter o contrato em apenas 24 horas, para salvar Tão Tão Distante e restaurar seus dias felizes para sempre.', '93', '2010', '9', '6', '3', '../img/movieBanners/ShreckSempreBanner.webp', '../img/movieBackgrounds/ShreckBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Straight Outta Compton: A História do N.W.A.', 'Califórnia, década de 1980. Cinco jovens usam suas experiências pessoais na produção de músicas honestas, rebeldes, diferentes e totalmente contra o sistema. Surge o N.W.A. (Niggaz Wit Attitudes), que dá voz a uma geração e promove a explosão do gangsta rap.', '147', '2015', '3', '4', '5', '../img/movieBanners/StraightBanner.webp', '../img/movieBackgrounds/StraightBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Mad Max: Estrada da Fúria', 'Em um mundo apocalíptico, Max Rockatansky acredita que a melhor forma de sobreviver é não depender de ninguém. Porém, após ser capturado pelo tirano Immortan Joe e seus rebeldes, Max se vê no meio de uma guerra mortal, iniciada pela imperatriz Furiosa que tenta salvar um grupo de garotas. Também tentando fugir, Max aceita ajudar Furiosa. Dessa vez, o tirano Joe está ainda mais implacável pois teve algo insubstituível roubado.', '120', '2015', '3', '4', '11', '../img/movieBanners/MadMaxBanner.webp', '../img/movieBackgrounds/MadMaxBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Ben-Hur', 'Na Judéia invadida pelos conquistadores romanos, o príncipe Ben-Hur tenta conduzir seu povo rumo à liberdade. Mas isso gera um conflito de interesses com o seu amigo de infância, Messala, agora um severo comandante dos exércitos de Roma. Preso, o príncipe é enviado para trabalhar como escravo, longe de suas terras, família e sua amada Esther (Haya Harareet). O pacífico Ben-Hur transforma-se em um guerreiro forte e corajoso, disposto a enfrentar seus inimigos e restabelecer a paz.', '222', '1959', '3', '5', '11', '../img/movieBanners/BenHurBanner.webp', '../img/movieBackgrounds/BenHurBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Tropa de Elite', 'Rio de Janeiro, 1997. Nascimento, capitão da Tropa de Elite do Rio de Janeiro, é designado para chefiar uma das equipes que tem como missão \"apaziguar\" o Morro do Turano por um motivo que ele considera insensato. Mas ele tem que cumprir as ordens enquanto procura por um substituto. Sua mulher, Rosane, está no final da gravidez e todos os dias lhe pede para sair da linha de frente do batalhão. Pressionado, o capitão sente os efeitos do estresse.Neste clima, é chamado para mais uma emergência num morro. Em meio a um tiroteio em um baile funk, Nascimento e sua equipe têm que resgatar dois aspirantes a oficiais da PM: Neto e Matias. Ansiosos por entrar em ação e impressionados com a eficiência de seus salvadores, os dois se candidatam ao curso de formação da Tropa de Elite.', '115', '2007', '3', '5', '11', '../img/movieBanners/TropadeEliteBanner.webp', '../img/movieBackgrounds/TropadeEliteBackground.jpg', '');
INSERT INTO `movies` (`movieId`, `movieName`, `movieDesc`, `movieDuration`, `releaseYear`, `movieGenre01`, `movieGenre02`, `movieGenre03`, `movieBanner`, `movieBackground`, `movieLink`) VALUES (NULL, 'Cidade de Deus', 'Buscapé é um jovem morador da Cidade de Deus que cresce em meio à violência. Com medo de se tornar um bandido, enxerga na fotografia uma oportunidade de ter uma vida digna.\r\n', '130', '2002', '3', '5', '11', '../img/movieBanners/CidadedeDeusBanner.webp\r\n', '../img/movieBackgrounds/CidadedeDeusBackground.jpg', '');



INSERT INTO `moviegenres` (`idGenre`, `Genre`, `genreImg`) VALUES ('1', 'Romance', ''), ('2', 'Terror', ''), ('3', 'Ação e Aventura', ''), ('4', 'Suspense', ''), ('5', 'Drama', ''), ('6', 'Comédia', ''), ('7', 'Comédia Romântica', ''), ('8', 'Ficção Científica', ''), ('9', 'Infantil', ''), ('10', 'Faroeste', ''), ('11', 'Guerra', '')
INSERT INTO `moviegenres` (`idGenre`, `Genre`) VALUES ('1', 'Romance'), ('2', 'Terror');UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/RomanceGenre.jpg' WHERE `moviegenres`.`idGenre` = 1; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/TerrorGenre.jpg' WHERE `moviegenres`.`idGenre` = 2;UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/AçãoGenre.jpg' WHERE `moviegenres`.`idGenre` = 3; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/SuspenseGenre.jpg' WHERE `moviegenres`.`idGenre` = 4; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/DramaGenre.jpg' WHERE `moviegenres`.`idGenre` = 5; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/ComédiaGenre.jpg' WHERE `moviegenres`.`idGenre` = 6; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/ComédiaRomânticaGenre.jpg' WHERE `moviegenres`.`idGenre` = 7; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/FicçãoGenre.jpg' WHERE `moviegenres`.`idGenre` = 8; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/InfantilGenre.webp' WHERE `moviegenres`.`idGenre` = 9; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/FaroesteGenre.jpg' WHERE `moviegenres`.`idGenre` = 10; UPDATE `moviegenres` SET `genreImg` = '../img/genresBanner/GuerraGenre.jpg' WHERE `moviegenres`.`idGenre` = 11;