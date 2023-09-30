CREATE TABLE `user` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ho_ten` varchar(50),
  `gioi_tinh` varchar(10),
  `email` varchar(100),
  `so_dien_thoai` varchar(20),
  `cap_bac` varchar(20),
  `dia_chi` varchar(200),
  `mat_khau` varchar(32),
  `role` varchar(20)
);

CREATE TABLE `danh_muc` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `anh_danh_muc` varchar(3000),
  `ten_danh_muc` varchar(100)
);

CREATE TABLE `san_pham` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ma_danh_muc` integer,
  `ma_hang_san_xuat` integer,
  `ten_san_pham` text,
  `gia_ban` integer,
  `gia_ban_sale` integer,
  `anh_thumbnail` text,
  `mo_ta_san_pham` text,
  `mo_ta_san_pham_chi_tiet` text,
  `ngay_them_san_pham` datetime,
  `ngay_cap_nhat_san_pham` datetime
);

CREATE TABLE `san_pham_desc` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ma_san_pham` integer,
  `anh_thumbnail_bo_sung` text
);

CREATE TABLE `phan_hoi` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ho_ten` varchar(50),
  `email` varchar(100),
  `so_dien_thoai` varchar(20),
  `noi_dung_phan_hoi` text
);

CREATE TABLE `don_hang` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `user_id` integer,
  `ho_ten` varchar(50),
  `email` varchar(100),
  `so_dien_thoai` varchar(20),
  `dia_chi` varchar(200),
  `ghi_chu` text,
  `thoi_diem_dat_hang` datetime,
  `trang_thai` varchar(30)
);

CREATE TABLE `chi_tiet_don_hang` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ma_don_hang` integer,
  `ma_san_pham` integer,
  `gia_ban` integer,
  `so_luong` integer
);

CREATE TABLE `hang_san_xuat` (
  `id` integer PRIMARY KEY AUTO_INCREMENT,
  `ten_hang` varchar(100),
  `so_dien_thoai` varchar(20),
  `dia_chi` varchar(200),
  `anh_dai_dien` text
);

CREATE TABLE `menu` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `thuoc_nhom` varchar(50),
  `tieu_de_menu` varchar(100),
  `menu_cha` varchar(50),
  `loai_menu` varchar(50),
  `trang_dich` varchar(50),
  `trang_thai` varchar(50),
  `mo_menu` varchar(50),
  `mo_ta_chi_tiet` text
);

CREATE TABLE `nhom_menu` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `ten_nhom` varchar(100),
  `mo_ta_nhom` text
);

CREATE TABLE `thong_tin_co_ban_website` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `tieu_de_trang` varchar(100),
  `logo_cua_trang` text,
  `trang_thai` varchar(50),
  `email_nguoi_quan_tri` varchar(100),
  `so_dien_thoai` varchar(20),
  `dia_chi` text
);

CREATE TABLE `noi_dung_tinh_website` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `fanpage` text,
  `theo_doi_chung_toi` text,
  `thong_tin_lien_he` text
);

CREATE TABLE `gioi_thieu_website` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `tieu_de` varchar(100),
  `gioi_thieu_ngan` varchar(200),
  `anh_dai_dien` text,
  `gioi_thieu` text
);

ALTER TABLE `san_pham` ADD FOREIGN KEY (`ma_hang_san_xuat`) REFERENCES `hang_san_xuat` (`id`);

ALTER TABLE `san_pham_desc` ADD FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`);

ALTER TABLE `don_hang` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

ALTER TABLE `chi_tiet_don_hang` ADD FOREIGN KEY (`ma_don_hang`) REFERENCES `don_hang` (`id`);

ALTER TABLE `chi_tiet_don_hang` ADD FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`);

ALTER TABLE `san_pham` ADD FOREIGN KEY (`ma_danh_muc`) REFERENCES `danh_muc` (`id`);
