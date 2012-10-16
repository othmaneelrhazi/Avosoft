CREATE TABLE `login` (
`idLogin` int NOT NULL,
`tLogin` varchar(255) NULL,
`tPassword` varchar(255) NULL,
`tType` varchar(255) NULL,
PRIMARY KEY (`idLogin`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `dossier` (
`idDossier` int NOT NULL,
`tDossier` varchar(255) NULL,
`client` int NULL,
`login` int NULL,
`dDateCloture` date NULL,
PRIMARY KEY (`idDossier`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `client` (
`idClient` int NOT NULL,
`tCivilite` varchar(255) NULL,
`tNom` varchar(255) NULL,
`tPrenom` varchar(255) NULL,
`iCompteBancaire` int NULL,
`iGsm` int(10) NULL,
`iTelephone` int(10) NULL,
`iFax` int(9) NULL,
`tEmail` varchar(255) NULL,
`login` int NULL,
PRIMARY KEY (`idClient`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `adresse` (
`idAdresse` int NOT NULL,
`tRue` varchar(255) NULL,
`iNumero` int NULL,
`tBte` varchar(255) NULL,
`iCodePostal` int NULL,
`tLocalite` varchar(255) NULL,
`client` int NULL,
PRIMARY KEY (`idAdresse`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE `livre` (
`idLivret` int NOT NULL,
`dDate` date NULL,
`iHonnoraire` int NULL,
`iProvisionIn` int NULL,
`iProvisionOut` int NULL,
`iTiersOut` int NULL,
`iTiersIn` int NULL,
`tHuissiers` varchar(255) NULL,
`tConfrere` varchar(255) NULL,
`tCommentaire` text NULL,
`dossier` varchar(255) NULL,
PRIMARY KEY (`idLivret`) 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci;


ALTER TABLE `dossier` ADD CONSTRAINT `fk_login_login` FOREIGN KEY (`login`) REFERENCES `login` (`idLogin`);
ALTER TABLE `client` ADD CONSTRAINT `fk_login_client` FOREIGN KEY (`login`) REFERENCES `login` (`idLogin`);
ALTER TABLE `dossier` ADD CONSTRAINT `fk_client_client` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`);
ALTER TABLE `adresse` ADD CONSTRAINT `kf_client_adresse` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`);
ALTER TABLE `livre` ADD CONSTRAINT `fk_dossier_livre` FOREIGN KEY (`dossier`) REFERENCES `dossier` (`idDossier`);

