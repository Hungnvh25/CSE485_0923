create database QuanLySinhVien;
use QuanLySinhVien;

create table Lop(
	id int unsigned auto_increment primary key not null,
	tenLop varchar(255) not null
);

create table SinhVien(
	id int unsigned auto_increment primary key not null,
    tenSinhVien varchar(255) not null,
    email varchar(255) not null,
    ngaySinh date not null,
    idLop int unsigned not null,
    FOREIGN KEY (idLop) REFERENCES Lop(id)
);

drop table SinhVien;
insert into Lop (id, tenLop) values (1, 'Olympe');
insert into Lop (id, tenLop) values (2, 'Hedvige');
insert into Lop (id, tenLop) values (3, 'Elvin');
insert into Lop (id, tenLop) values (4, 'Dex');
insert into Lop (id, tenLop) values (5, 'Erinn');
insert into Lop (id, tenLop) values (6, 'Harlie');
insert into Lop (id, tenLop) values (7, 'Travers');
insert into Lop (id, tenLop) values (8, 'Jefferey');
insert into Lop (id, tenLop) values (9, 'Gallagher');
insert into Lop (id, tenLop) values (10, 'Aksel');
insert into Lop (id, tenLop) values (11, 'Aldric');
insert into Lop (id, tenLop) values (12, 'Matelda');


insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (1, 'Hatty Twyning', 'htwyning0@example.com', '2023-09-17', 1);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (2, 'Jada Raw', 'jraw1@hud.gov', '2022-12-16', 2);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (3, 'Nero Hauxwell', 'nhauxwell2@msu.edu', '2023-03-10', 3);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (4, 'Fionna Navarro', 'fnavarro3@biglobe.ne.jp', '2022-11-28', 4);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (5, 'Frank Simla', 'fsimla4@stanford.edu', '2023-08-19', 5);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (6, 'Teresita McElroy', 'tmcelroy5@springer.com', '2023-08-30', 6);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (7, 'Rockwell Southam', 'rsoutham6@answers.com', '2022-10-10', 7);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (8, 'Franchot Alwood', 'falwood7@delicious.com', '2023-01-19', 8);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (9, 'Marnie Henrie', 'mhenrie8@hao123.com', '2022-11-26', 9);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (10, 'Karrah Martinello', 'kmartinello9@google.fr', '2023-04-27', 10);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (11, 'Ileane Dik', 'idika@behance.net', '2023-06-02', 11);
