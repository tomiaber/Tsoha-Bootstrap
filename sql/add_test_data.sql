-- Lisää INSERT INTO lauseet tähän tiedostoon
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Tomi','Åberg','012-34567','tomi@hotmail.com','00900','Linnanherrantie 1','laiskimus');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Tomi','Åberg','012-34567','tomi@hotmail.com','00900','Linnanherrantie 1','laiskimus');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Pakka','Pirkko','012-34567','tomi@hotmail.com','00900','Linnanherrantie 1','laiskimus');

INSERT INTO ryhma (ryhmannimi) VALUES ('Aikaiset');
INSERT INTO ryhma (ryhmannimi) VALUES ('Paivakerho');
INSERT INTO ryhma (ryhmannimi) VALUES ('Jasen');
INSERT INTO ryhma (ryhmannimi,tietoa) VALUES ('Jasen','Kokous ke 19:30');
INSERT INTO ryhma (ryhmannimi,tietoa) VALUES ('Kunniajasen','Erityismaininta');

INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (1,'Aikaiset');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (2,'Aikaiset');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (3,'Aikaiset');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (1,'Jasen');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (2,'Jasen');
