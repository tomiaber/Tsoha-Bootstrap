-- Lisää CREATE TABLE lauseet tähän tiedostoonCREATE 
CREATE TABLE Henkilo(
henkilonumero SERIAL PRIMARY KEY,
etunimet varchar(50) NOT NULL,
sukunimi varchar(30) NOT NULL,
puhelinnumero varchar(20),
sahkopostiosoite varchar(30),
postinumero varchar(5),
lahiosoite varchar(30),
muutatietoa varchar(300)  
);

CREATE TABLE Ryhma(
ryhmannimi varchar(20) NOT NULL,
tietoa varchar(300),
PRIMARY KEY(ryhmannimi)
);

CREATE TABLE Henkiloidenryhmat(
henkilonumero INTEGER REFERENCES Henkilo(henkilonumero),
ryhmannimi varchar(20) REFERENCES Ryhma(ryhmannimi),
PRIMARY KEY(henkilonumero,ryhmannimi) 
);