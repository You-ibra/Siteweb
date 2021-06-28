CREATE TABLE USER(
    id INT PRIMARY KEY,
    nom VARCHAR(20),
    prénom VARCHAR(20),
    Adresse VARCHAR(100),
    codePostal DECIMAL(5),
    CONSTRAINT valeur_cp CHECK (codePostal BETWEEN00001 AND99999)
    Date_de_naissance DATE,
    email VARCHAR(255),
    numero_telephone INT
    );

    CREATE TABLE Avantage(
        id INT PRIMARY KEY,
        Solde_BEPS FLOAT,
        date_attribution DATE,
        FOREIGN KEY fk_idUser(idUser) REFERENCES User(id),


    );

        CREATE TABLE Animal(
        id INT PRIMARY KEY,
        nom VARCHAR(20),
        Date_de_naissance DATE,
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),
        FOREIGN KEY fk_idGarde(idGarde) REFERENCES Garde(id),

    );

        CREATE TABLE Garde(
        id INT PRIMARY KEY,
        Date_de_debut DATE,
        Date_de_fin DATE,
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),
        FOREIGN KEY fk_idAnnonce(idAnnonce) REFERENCES Annonce(id),
        nombre_de_beps FLOAT

    );
    
    CREATE TABLE Message(
        id INT PRIMARY KEY,
        Date_de_envoie DATE,
        Objet VARCHAR(255),
        Contenu VARCHAR(10000),
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),

    );

    CREATE TABLE Envoyer_Par(
        FOREIGN KEY fk_idMessage(idMessage) REFERENCES Message(id),
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),

    );

    CREATE TABLE Annonce(
        id INT PRIMARY KEY,
        Titre VARCHAR(255),
        Date_de_creation DATE,
        Déscription VARCHAR(10000),
        Lieu VARCHAR(100),
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),

    );

        CREATE TABLE Image(
        id INT PRIMARY KEY,
        lien VARCHAR(255),
        Date_de_creation DATE,
        FOREIGN KEY fk_idAnnonce(idAnnonce) REFERENCES Annonce(id),

    );

        CREATE TABLE Appartenir (
        FOREIGN KEY fk_idCategorie(idCategorie) REFERENCES Message(id),
        FOREIGN KEY fk_idAnnonce(idAnnonce) REFERENCES Annonc(id),

    );

        CREATE TABLE Annonce(
        id INT PRIMARY KEY,
        nom VARCHAR(255),
        Date_de_naissance DATE,
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),
        FOREIGN KEY fk_idGarde(idGarde) REFERENCES Garde(id),
    );

        CREATE TABLE Posseder (
        FOREIGN KEY fk_idCategorie(idCategorie) REFERENCES Message(id),
        FOREIGN KEY fk_idUser(idUser) REFERENCES USER(id),

    );