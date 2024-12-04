ALTER TABLE utilisateur
ADD UNIQUE (noUtilisateur);

ALTER TABLE historiquerelever
ADD CONSTRAINT FK_id
FOREIGN KEY (id) REFERENCES relever(id);

ALTER TABLE historiquerelever
ADD CONSTRAINT FK_noPosition
FOREIGN KEY (noPosition) REFERENCES orientationMoteur(noPosition);