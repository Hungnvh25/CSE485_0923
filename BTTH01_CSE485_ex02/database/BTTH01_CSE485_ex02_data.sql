create database  BTTH01_CSE485;
use  BTTH01_CSE485;

create table tagia(
	ma_tgia int unsigned not null AUTO_INCREMENT  primary key,
    ten_tgia varchar(100) not null,
    hinh_tgia varchar(100)
);

create table theloai(
	ma_tloai int unsigned not null AUTO_INCREMENT primary key,
    ten_tloai varchar(50) not null
);
CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
<<<<<<< HEAD
    email varchar(50) NOT NULL,
    pass VARCHAR(255) NOT NULL
);


INSERT INTO users (username,email, pass) VALUES
('admin','nguyenvanhung@gmail.com', '000'),
('hung','nguyenvanfung@gmail.com', 'hung12');
=======
    pass VARCHAR(20) NOT NULL
);


INSERT INTO users (username, pass) VALUES
('admin', '000'),
('hung', 'hung12');
>>>>>>> a2da7cd4c97a5945d0ad18fc6d405bd03162cc60


select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;

select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 1 ;


create table baiviet(
	ma_bviet int unsigned not null AUTO_INCREMENT primary key,
    tieude varchar(200) not null,
    ten_bhat varchar(100) not null,
    ma_tloai int unsigned not null,
    tomtat text  not null,
    noidung text,
    ma_tgia int unsigned not null,
    ngayviet datetime not null DEFAULT CURRENT_TIMESTAMP,
    hinhanh varchar(200),
    FOREIGN KEY (ma_tgia) REFERENCES tagia(ma_tgia),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);

drop table tagia;
drop table theloai;
drop table baiviet;
drop table users;


INSERT INTO tagia ( ten_tgia, hinh_tgia) VALUES
( 'Nhacvietplus', 'hinh_tgia_1.jpg'),
( 'Tacsiviet', 'hinh_tgia_2.jpg'),
( 'NhacsiX', 'hinh_tgia_3.jpg');


INSERT INTO theloai ( ten_tloai) VALUES
( 'Nhạc trữ tình'),
( 'Nhạc pop'),
( 'Nhạc rap');

INSERT INTO baiviet ( tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
( 'Cảm nhận về bài hát A', 'A', 1, 'Bài hát A là một tác phẩm trữ tình.', 'Nội dung bài viết về bài hát A.', 1, 'hinh_baiviet_1.jpg'),
( 'Cảm nhận về bài hát B', 'B', 1, 'Bài hát B thuộc thể loại trữ tình.', 'Nội dung bài viết về bài hát B.', 2, 'hinh_baiviet_2.jpg'),
( 'Bài viết về bài hát C', 'C', 2, 'Bài hát C thuộc thể loại pop.', 'Nội dung bài viết về bài hát C.', 1, 'hinh_baiviet_3.jpg');

select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;
<<<<<<< HEAD

select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 2;

select * from users where usersname = 'admin' and pass = '000';
UPDATE theloai SET  ten_tloai = 'Ten the loai moi' WHERE ma_tloai = 1;

DELETE FROM theloai WHERE ma_tloai = 5;
=======
>>>>>>> a2da7cd4c97a5945d0ad18fc6d405bd03162cc60

select * from  baiviet join theloai on baiviet.ma_tloai = theloai.ma_tloai join tagia on tagia.ma_tgia = baiviet.ma_tgia where ma_bviet = 2;

select * from users where usersname = 'admin' and pass = '000';
UPDATE theloai SET  ten_tloai = 'Ten the loai moi' WHERE ma_tloai = 1;

DELETE FROM theloai WHERE ma_tloai = 5;
