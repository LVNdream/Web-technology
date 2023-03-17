-- cơ sở dữ liệu cho WebSite bán máy tính 
create database laptoppro;
use laptoppro;
 -- Tạo bảng cho database 
create table sanpham(
idsp int auto_increment not null primary key,
ten varchar(100) not null,
gia int not null,
model varchar(100) not null,
mausac varchar(100) not null,
nhasanxuat varchar(100) not null,
xuatxu varchar(100) not null
);
create table test(
id int auto_increment not null primary key,
ten varchar(100) not null,
mota varchar(100) not null
);

create table user_admin(
admin_id int auto_increment not null primary key,
email varchar(100) not null,
matkhau  varchar(100) not null
);
INSERT INTO user_admin (email, matkhau) VALUES
('sang201101071001@gmail.com','123456');

select * from user_admin;
select * from sanpham;
select * from test;

ALTER TABLE sanpham add img varchar(500) not null;
ALTER TABLE sanpham drop column model;

INSERT INTO sanpham (ten,gia, mausac,nhasanxuat,xuatxu,img) VALUES
('Máy tính để bàn Acer','23000000','Vàng kim','Acer','Trung Quốc','img/imlaptop/asus-GL503VS-EI037T-01-300x300.jpg'),
('Máy tính để bàn Acer ','24000000','Trắng','Acer','Trung Quốc','img/imlaptop/hp-envy-13-01-300x300.jpg'),
('Máy tính để bàn Acer','22500000','Đen','Acer','Trung Quốc','img/imlaptop/hp-probook-440-g3-t9s24pa-01-300x300.jpg'),
('Máy tính để bàn Asus','22050000','Xanh đen','Asus','Trung Quốc','img/imlaptop/lenovo-IdeaPad-Y520-01-300x300.jpg'),
('Máy tính để bàn Dell','23500000','Xám','Dellr','Trung Quốc','img/imlaptop/lenovo-ThinkPad-T470-01-300x300.jpg'),
('Máy tính để bàn HP i5','19500000','Trắng','HP','Trung Quốc','img/imlaptop/mac-pro-2017-01-300x300.jpg'),
('Máy tính để bàn HP i7','17000000','Trắng','HP','Trung Quốc','img/imlaptop/macbook-air-2017-01-300x300.jpg'),
('Máy tính để bàn HP Grạhic','13000000','Đen','HP','Trung Quốc','img/imlaptop/lenovo-ThinkPad-T470-01-300x300.jpg'),
('Máy tính để bàn Lenovo','26350000','Đen xám','Lenovo','Trung Quốc','img/imlaptop/mac-pro-2017-01-300x300.jpg'),
('Máy tính để bàn MSI','23990000','Đen đỏ','MSI','Trung Quốc','img/imlaptop/lenovo-IdeaPad-Y520-01-300x300.jpg'),
('Máy tính để bàn Microsoft','21500000','Trắng','Microsoft','Trung Quốc','img/imlaptop/mac-pro-2017-01-300x300.jpg'),
('Máy tính để bàn','15900000','vàng kim','Acer','Trung Quốc','img/imlaptop/asus-GL503VS-EI037T-01-300x300.jpg');

drop table hoadon;
create table hoadon(
idhd int auto_increment not null primary key,
hovaten varchar(100) not null,
diachi varchar(500) not null,
sodienthoai varchar(15) not null,
email varchar(150) not null,
ghichu varchar(100),
thanhtoan varchar(100) not null,
tongtien varchar(100) not null,
trangthai varchar(100) not null
);
create table chitiethd(
idhd int not null,
idsp int not null,
soluong int not null,
CONSTRAINT PK_CTHD PRIMARY KEY (idhd,idsp)
);
drop table chitiethd;
select *from chitiethd;
select *from hoadon;

delete from hoadon where idhd = '7';









