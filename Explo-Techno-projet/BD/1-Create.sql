CREATE DATABASE stationSolaire

CREATE TABLE utilisateur
(
    noUtilisateur       INT                 AUTO_INCREMENT           NOT NULL            PRIMARY KEY,
    nomUtilisateur      VARCHAR(50)         NOT NULL,
    prenomUtilisateur   VARCHAR(50)         NOT NULL,
    courriel            VARCHAR(100)        NOT NULL,
    mdp                 BINARY(64)          NOT NULL,
    sel                 CHAR(36)            NOT NULL
)

CREATE TABLE relever
(
    id                  BIGINT              AUTO_INCREMENT           NOT NULL            PRIMARY KEY,
    relever             INT                 NOT NULL
)

CREATE TABLE orientationMoteur
(
    noPosition          INT                 AUTO_INCREMENT            NOT NULL            PRIMARY KEY,
    position            INT                 NOT NULL
)

CREATE TABLE historiqueRelever
(
    id                  BIGINT              NOT NULL,
    noPosition          INT                 NOT NULL,
    date                DATETIME            NOT NULL,
    PRIMARY KEY(id, noPosition)
)