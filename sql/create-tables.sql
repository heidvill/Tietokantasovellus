create table kayttaja(
idtunnus serial primary key,
tunnus varchar(20) unique not null,
salasana varchar(20) not null
);

create table elokuva(
idtunnus serial primary key,
nimi varchar(100) not null,
kesto integer,
ikaraja varchar(3),
vuosi integer,
kieli varchar(100),
maa varchar(100),
nahty varchar(20),
kayttaja integer,
foreign key(kayttaja) references kayttaja
);

create table henkilo(
idtunnus serial primary key,
nimi varchar(50)
);

create table kategoria(
idtunnus serial primary key,
nimi varchar(30)
);

create table ohjaus(
elokuva integer,
ohjaaja integer,
foreign key(elokuva) references elokuva,
foreign key(ohjaaja) references henkilo
);

create table roolisuoritus(
elokuva integer,
nayttelija integer,
foreign key(elokuva) references elokuva,
foreign key(nayttelija) references henkilo
);

create table luokitus(
elokuva integer,
kategoria integer,
foreign key(elokuva) references elokuva,
foreign key(kategoria) references kategoria
);



