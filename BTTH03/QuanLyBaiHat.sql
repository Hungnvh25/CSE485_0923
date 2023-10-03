create database QuanLyBaiHat;
use QuanLyBaiHat;

create table TheLoai(
	id int unsigned auto_increment primary key not null,
	TenTheLoai varchar(255) not null
);

create table BaiHat(
	id int unsigned auto_increment primary key not null,
    TenBaiHat varchar(255) not null,
    CaSi varchar(255) not null,
	idTheLoai int unsigned not null,
    FOREIGN KEY (idTheLoai) REFERENCES TheLoai(id)
);
insert into TheLoai (id, TenTheLoai) values (1, 'Olympe');
insert into TheLoai (id, TenTheLoai) values (2, 'Hedvige');
insert into TheLoai (id, TenTheLoai) values (3, 'Elvin');
insert into TheLoai (id, TenTheLoai) values (4, 'Dex');
insert into TheLoai (id, TenTheLoai) values (5, 'Erinn');
insert into TheLoai (id, TenTheLoai) values (6, 'Harlie');
insert into TheLoai (id, TenTheLoai) values (7, 'Travers');
insert into TheLoai (id, TenTheLoai) values (8, 'Jefferey');
insert into TheLoai (id, TenTheLoai) values (9, 'Gallagher');
insert into TheLoai (id, TenTheLoai) values (10, 'Aksel');
insert into TheLoai (id, TenTheLoai) values (11, 'Aldric');
insert into TheLoai (id, TenTheLoai) values (12, 'Matelda');
insert into TheLoai (id, TenTheLoai) values (13, 'Lilith');
insert into TheLoai (id, TenTheLoai) values (14, 'Trenna');
insert into TheLoai (id, TenTheLoai) values (15, 'Belinda');
insert into TheLoai (id, TenTheLoai) values (16, 'Sven');
insert into TheLoai (id, TenTheLoai) values (17, 'Toinette');
insert into TheLoai (id, TenTheLoai) values (18, 'Thorstein');
insert into TheLoai (id, TenTheLoai) values (19, 'Gwen');
insert into TheLoai (id, TenTheLoai) values (20, 'Norina');
insert into TheLoai (id, TenTheLoai) values (21, 'Fay');
insert into TheLoai (id, TenTheLoai) values (22, 'Danielle');
insert into TheLoai (id, TenTheLoai) values (23, 'Royall');
insert into TheLoai (id, TenTheLoai) values (24, 'Godfry');
insert into TheLoai (id, TenTheLoai) values (25, 'Pegeen');
insert into TheLoai (id, TenTheLoai) values (26, 'Gabriellia');
insert into TheLoai (id, TenTheLoai) values (27, 'Madelon');
insert into TheLoai (id, TenTheLoai) values (28, 'Ivette');
insert into TheLoai (id, TenTheLoai) values (29, 'Jany');
insert into TheLoai (id, TenTheLoai) values (30, 'Tonye');
insert into TheLoai (id, TenTheLoai) values (31, 'Ethelyn');
insert into TheLoai (id, TenTheLoai) values (32, 'Edmund');
insert into TheLoai (id, TenTheLoai) values (33, 'Gilberta');
insert into TheLoai (id, TenTheLoai) values (34, 'Reeva');
insert into TheLoai (id, TenTheLoai) values (35, 'Obidiah');
insert into TheLoai (id, TenTheLoai) values (36, 'Earl');
insert into TheLoai (id, TenTheLoai) values (37, 'Anastasie');
insert into TheLoai (id, TenTheLoai) values (38, 'Reggie');
insert into TheLoai (id, TenTheLoai) values (39, 'Catherine');
insert into TheLoai (id, TenTheLoai) values (40, 'Suzanna');
insert into TheLoai (id, TenTheLoai) values (41, 'Arlan');
insert into TheLoai (id, TenTheLoai) values (42, 'Jarrod');
insert into TheLoai (id, TenTheLoai) values (43, 'Bryana');
insert into TheLoai (id, TenTheLoai) values (44, 'Elliot');
insert into TheLoai (id, TenTheLoai) values (45, 'Niall');
insert into TheLoai (id, TenTheLoai) values (46, 'Rachael');
insert into TheLoai (id, TenTheLoai) values (47, 'Trula');
insert into TheLoai (id, TenTheLoai) values (48, 'Elly');
insert into TheLoai (id, TenTheLoai) values (49, 'Dolli');
insert into TheLoai (id, TenTheLoai) values (50, 'Dorolisa');

insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (1, 'Mace', 'Mace Glennie', 1);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (2, 'Carl', 'Carl Rounds', 2);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (3, 'Claudio', 'Claudio Rottery', 3);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (4, 'Conn', 'Conn Studd', 4);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (5, 'Ted', 'Ted Moreno', 5);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (6, 'Flossi', 'Flossi Kingdon', 6);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (7, 'Chrotoem', 'Chrotoem Wrates', 7);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (8, 'Kaja', 'Kaja Stanney', 8);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (9, 'Colene', 'Colene Spelman', 9);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (10, 'Joane', 'Joane O''Kane', 10);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (11, 'Emmaline', 'Emmaline Illidge', 11);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (12, 'Silvano', 'Silvano Ormond', 12);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (13, 'Vickie', 'Vickie Cleal', 13);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (14, 'Leland', 'Leland Beville', 14);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (15, 'Lamond', 'Lamond Yatman', 15);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (16, 'Xylia', 'Xylia Cisco', 16);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (17, 'Willi', 'Willi Cicconetti', 17);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (18, 'Shoshanna', 'Shoshanna Janecek', 18);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (19, 'Nathanael', 'Nathanael Aguirre', 19);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (20, 'Noemi', 'Noemi Gowthrop', 20);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (21, 'Symon', 'Symon Paszak', 21);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (22, 'Elisabeth', 'Elisabeth Bott', 22);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (23, 'Torin', 'Torin Brands', 23);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (24, 'Zeb', 'Zeb McFarland', 24);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (25, 'Kailey', 'Kailey Wild', 25);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (26, 'Simon', 'Simon Mattingson', 26);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (27, 'Benni', 'Benni Karpenko', 27);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (28, 'Maxie', 'Maxie Giraldon', 28);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (29, 'Lucia', 'Lucia Lindenblatt', 29);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (30, 'Erik', 'Erik Heinonen', 30);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (31, 'Freddie', 'Freddie Andrioni', 31);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (32, 'Cory', 'Cory Goulborn', 32);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (33, 'Elli', 'Elli Conachie', 33);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (34, 'Gerhard', 'Gerhard Fleg', 34);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (35, 'Tamma', 'Tamma Reiling', 35);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (36, 'Sydney', 'Sydney Tudgay', 36);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (37, 'Fitz', 'Fitz Dobrowlski', 37);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (38, 'Lillis', 'Lillis Dudill', 38);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (39, 'Mamie', 'Mamie Chancelier', 39);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (40, 'Alejandro', 'Alejandro Craig', 40);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (41, 'Darcy', 'Darcy Burrel', 41);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (42, 'Bride', 'Bride Sterte', 42);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (43, 'Ryon', 'Ryon Abilowitz', 43);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (44, 'Darla', 'Darla Bartocci', 44);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (45, 'Nicky', 'Nicky Smye', 45);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (46, 'Dmitri', 'Dmitri Fearnsides', 46);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (47, 'Kayle', 'Kayle Peizer', 47);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (48, 'Katti', 'Katti Timmis', 48);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (49, 'Delilah', 'Delilah MacCaffery', 49);
insert into BaiHat (id, TenBaiHat, CaSi, idTheLoai) values (50, 'Lori', 'Lori Halsted', 50);