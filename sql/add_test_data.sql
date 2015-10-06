-- Lisää INSERT INTO lauseet tähän tiedostoon
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Tomi','Åberg','012-34567','tomi@hotmail.com','00900','Linnanherrantie 1','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Tomi','Åberg','012-34567','tomi@hotmail.com','00900','Linnanherrantie 2','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Jukka','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 3','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Pekka','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 4','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Leena','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 5','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Laura','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 6','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Maija','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 7','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Maija','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 8','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Maija','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 9','ahkera');
INSERT INTO henkilo (etunimet,sukunimi,puhelinnumero,sahkopostiosoite,postinumero,lahiosoite,muutatietoa) VALUES ('Maija','Aarnio','012-34567','tomi@hotmail.com','00900','Linnanherrantie 10','ahkera');

INSERT INTO ryhma (ryhmannimi) VALUES ('Aikaiset');
INSERT INTO ryhma (ryhmannimi) VALUES ('Paivakerho');
INSERT INTO ryhma (ryhmannimi) VALUES ('Jasen');
INSERT INTO ryhma (ryhmannimi) VALUES ('S2015 koulutus');
INSERT INTO ryhma (ryhmannimi,tietoa) VALUES ('Jasen','Kokous ke 19:30');
INSERT INTO ryhma (ryhmannimi,tietoa) VALUES ('Kunniajasen','Erityismaininta');

INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (1,'Aikaiset');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (2,'Aikaiset');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (3,'Aikaiset');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (1,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (2,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (3,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (4,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (5,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (6,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (7,'S2015 koulutus');
INSERT INTO henkiloidenryhmat (henkilonumero,ryhmannimi) VALUES (8,'S2015 koulutus');

INSERT INTO kayttajat (kayttajatunnus,salasana) VALUES ('tomi','qwerty');

