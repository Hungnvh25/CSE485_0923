create database  BTTH01_CSE485;
use  BTTH01_CSE485;

create table tagia(
	ma_tgia int unsigned not null primary key,
    ten_tgia varchar(100) not null,
    hinh_tgia varchar(100)
);

create table theloai(
	ma_tloai int unsigned not null primary key,
    ten_tloai varchar(50) not null
);


create table baiviet(
	ma_bviet int unsigned not null primary key,
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



INSERT INTO tagia (ma_tgia, ten_tgia, hinh_tgia) VALUES
(1, 'Nhacvietplus', 'hinh_tgia_1.jpg'),
(2, 'Tacsiviet', 'hinh_tgia_2.jpg'),
(3, 'NhacsiX', 'hinh_tgia_3.jpg');


INSERT INTO theloai (ma_tloai, ten_tloai) VALUES
(1, 'Nhạc trữ tình'),
(2, 'Nhạc pop'),
(3, 'Nhạc rap');


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(1, 'Cảm nhận về bài hát A', 'A', 1, 'Bài hát A là một tác phẩm trữ tình.', 'Nội dung bài viết về bài hát A.', 1, 'hinh_baiviet_1.jpg'),
(2, 'Cảm nhận về bài hát B', 'B', 1, 'Bài hát B thuộc thể loại trữ tình.', 'Nội dung bài viết về bài hát B.', 2, 'hinh_baiviet_2.jpg'),
(3, 'Bài viết về bài hát C', 'C', 2, 'Bài hát C thuộc thể loại pop.', 'Nội dung bài viết về bài hát C.', 1, 'hinh_baiviet_3.jpg');



