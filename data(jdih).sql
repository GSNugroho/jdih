/*
 Navicat Premium Data Transfer

 Source Server         : server
 Source Server Type    : SQL Server
 Source Server Version : 10504000
 Source Host           : localhost:1433
 Source Catalog        : data
 Source Schema         : dbo

 Target Server Type    : SQL Server
 Target Server Version : 10504000
 File Encoding         : 65001

 Date: 05/01/2020 21:12:42
*/


-- ----------------------------
-- Table structure for pubgugus
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[pubgugus]') AND type IN ('U'))
	DROP TABLE [dbo].[pubgugus]
GO

CREATE TABLE [dbo].[pubgugus] (
  [vc_k_gugus] varchar(4) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [vc_n_gugus] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [vc_kd_hgugus] varchar(2) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL
)
GO

ALTER TABLE [dbo].[pubgugus] SET (LOCK_ESCALATION = TABLE)
GO


-- ----------------------------
-- Records of pubgugus
-- ----------------------------
INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0302', N'KLINIK TUMBUH KEMBANG', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1201', N'BAGIAN LOGISTIK', N'12')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0001', N'GUDANG', NULL)
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0002', N'SERVICE', NULL)
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0003', N'LELANG', NULL)
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0233', N'HEMODIALISA', NULL)
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0223', N'KLINIK KARYAWAN', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1105', N'HOME CARE', N'11')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0224', N'KLINIK KECANTIKAN', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1401', N'GAS MEDIS', N'14')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0225', N'TUMBUH KEMBANG', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0309', N'ONE DAY SURGERY', N'03')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0226', N'KLINIK ENDOSKOPI', N'01')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0227', N'KLINIK BEDAH DIGESTIF', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0228', N'PELATIHAN PIJAT BAYI', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0229', N'SENAM HAMIL', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1202', N'GUDANG ATK', N'12')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1203', N'GUDANG RUMAH TANGGA', N'12')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1204', N'GUDANG LINEN', N'12')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1702', N'PENDAFTARAN', N'17')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2202', N'PIUTANG', N'22')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'5101', N'DIREKTUR', N'31')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2203', N'AKRI', N'22')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1200', N'BAGIAN LOGISTIK DAN UMUM', N'12')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0300', N'INSTALASI RAWAT INAP', N'03')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0330', N'BP NUSUKAN', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'5102', N'DIVISI PELAYANAN MEDIK', N'31')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'5103', N'DIVISI PENUNJANG MEDIS', N'31')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'5104', N'DIVISI KEUANGAN DAN UMUM', N'31')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'3001', N'TIM PENAMPILAN', N'30')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'3002', N'TIM PEMBELIAN BARANG MEDIK', N'30')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'3003', N'TIM PEMBELIAN BARANG UMUM', N'30')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0200', N'INSTALASI RAWAT JALAN', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0700', N'INSTALASI LABORATORIUM', N'07')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0101', N'INSTALASI GAWAT DARURAT', N'01')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0202', N'KLINIK ANAK', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2101', N'AKUNTANSI', N'21')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0204', N'KLINIK BEDAH ANAK', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0209', N'KLINIK BEDAH UROLOGI', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0211', N'KLINIK INTERNIS', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0212', N'KLINIK JANTUNG', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0214', N'KLINIK KIA/KKB/IMUNISASI', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0215', N'KLINIK KONSULTASI GIZI', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0216', N'KLINIK KULIT DAN KELAMIN', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0221', N'KLINIK THT', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0222', N'KLINIK UMUM', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1501', N'INSTALASI GIZI', N'15')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0303', N'RUANG BAKUNG', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0304', N'RUANG BOUGENVILLE', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0306', N'RUANG CATLEYA IBU', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0308', N'RUANG DAHLIA', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0801', N'RADIOLOGI', N'8')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0901', N'REHABILITASI MEDIK', N'9')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2302', N'HUMAS DAN INFORMASI', N'23')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'7701', N'DRIVER', N'77')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1601', N'KEPERAWATAN', N'16')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1801', N'SEKRETARIAT', N'18')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1901', N'INSTALASI KESEHATAN LINGKUNGAN', N'19')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2001', N'EDP', N'20')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0701', N'LABORAT - PATOLOGI KLINIK', N'7')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0604', N'FARMASI GUDANG', N'6')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0702', N'LABORAT - MIKROBIOLOGI', N'7')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0703', N'LABORAT - PATOLOGI ANATOMI', N'7')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0203', N'KLINIK ANDROLOGI', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0205', N'KLINIK BEDAH ORTOPEDI', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0206', N'KLINIK BEDAH PLASTIK', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0208', N'KLINIK BEDAH UMUM', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0220', N'KLINIK SYARAF', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2601', N'SOSIO MEDIK', N'26')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'5163', N'SPI', N'63')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0301', N'RUANG ANGGREK', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0302', N'RUANG ASTER', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0307', N'RUANG CEMPAKA', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0401', N'INSTALASI PERAWATAN INTENSIF', N'4')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0501', N'INSTALASI KAMAR BEDAH', N'5')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0601', N'FARMASI BARAT', N'6')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0602', N'FARMASI TIMUR', N'6')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1103', N'SECURITY', N'11')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1104', N'PANGRUKTI LOYO', N'11')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0218', N'KLINIK OBSGYN', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1101', N'HOSPITAL SERVICE', N'11')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1205', N'LINEN LAUNDRY', N'14')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0603', N'FARMASI OKSIGEN', N'6')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0305', N'RUANG CATLEYA BAYI', N'3')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0210', N'KLINIK GIGI', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0213', N'KLINIK JIWA', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0217', N'KLINIK MATA', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0219', N'KLINIK PARU', N'2')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1301', N'PERSONALIA', N'13')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1001', N'INSTALASI STERILISASI', N'10')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1701', N'REKAM MEDIS', N'17')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2301', N'HUMAS DAN PEMASARAN', N'23')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'2201', N'KEUANGAN', N'22')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0201', N'KLINIK AKUPUNTUR MEDIK', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0207', N'KLINIK BEDAH SYARAF', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1861', N'KOMITE MEDIK', NULL)
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'0262', N'UPKM', N'02')
GO

INSERT INTO [dbo].[pubgugus] ([vc_k_gugus], [vc_n_gugus], [vc_kd_hgugus]) VALUES (N'1503', N'INSTALASI PENGADAAN MAKANAN', N'15')
GO


-- ----------------------------
-- Table structure for SKR_Jdih
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[SKR_Jdih]') AND type IN ('U'))
	DROP TABLE [dbo].[SKR_Jdih]
GO

CREATE TABLE [dbo].[SKR_Jdih] (
  [id_jdih] int  IDENTITY(1,1) NOT NULL,
  [kd_jdih] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [r_lingkup] int  NULL,
  [jns_prtn] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [th_prtn] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [nmr_prtn] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [nm_prtn] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [sts_prtn] int  NULL,
  [stru_prtn] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [nm_doc_prtn] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [date_create] datetime  NULL,
  [dl_sts] int  NULL,
  [uradd] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL
)
GO

ALTER TABLE [dbo].[SKR_Jdih] SET (LOCK_ESCALATION = TABLE)
GO


-- ----------------------------
-- Records of SKR_Jdih
-- ----------------------------
SET IDENTITY_INSERT [dbo].[SKR_Jdih] ON
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, N'default.pdf', N'2019-09-11 10:46:33.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'2', N'JDIH000001', N'1', NULL, N'2019', N'026/perdir/2019', N'Peraturan 1', N'1', N'Semua', N'default.pdf', N'2019-09-11 10:46:36.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'3', N'JDIH000001', N'2', N'8', N'2019', N'027/perdir/2019', N'Peraturan 1', N'1', N'Semua', N'default.pdf', N'2019-09-11 10:46:39.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'4', N'JDIH000001', N'2', N'8', N'2019', N'028/perdir/2019', N'Peraturan 3', N'1', N'Semua', N'default.pdf', N'2019-09-11 10:46:42.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'5', N'JDIH000001', N'2', N'8', N'2019', N'029/perdir/2019', N'Peraturan 4', N'1', N'Semua', N'JDIH000001.pdf', N'2019-09-11 10:46:45.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'6', N'JDIH000002', N'1', N'2', N'2019', N'001/PP/2019', N'Peraturan 5', N'1', N'Semua', N'JDIH000002.pdf', N'2019-09-11 10:46:48.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'7', N'JDIH000003', N'1', N'1', N'2019', N'026/perdir/2019', N'Peraturan 1', N'1', N'Semua', N'JDIH000003.pdf', N'2019-09-11 10:46:51.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'8', N'JDIH000004', N'1', N'2', N'2019', N'0284/pp/09/2019', N'Peraturan 4322', N'1', N'Semua', N'JDIH000004', N'2019-09-11 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'9', N'JDIH000005', N'1', N'1', N'2019', N'001/UU/9/2019', N'Peraturan 432', N'1', N'Semua', N'JDIH000005', N'2019-09-11 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'10', N'JDIH000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, N'JDIH000006', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'11', N'JDIH000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, N'JDIH000007', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'12', N'JDIH000008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, N'JDIH000008', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'13', N'JDIH000009', N'2', N'8', N'2019', N'XX/perdir/09/2019', N'Peraturan Pakaian', N'1', N'Semua', N'JDIH000009', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'14', N'JDIH000010', N'2', N'8', N'2019', N'XXI/perdir/09/2019', N'Peraturan Pakaian 2', N'1', N'Semua', N'JDIH000010', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'15', N'JDIH000011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, N'JDIH000011', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'16', N'JDIH000012', N'2', N'8', N'2019', N'XXII/perdir/09/2019', N'Peraturan Pakaian 3', N'1', N'Semua', N'JDIH000012', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'17', N'JDIH000013', N'2', N'8', N'2019', N'XXIV/perdir/09/2019', N'Peraturan Pakaian 4', N'1', N'Semua', N'JDIH000013', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'18', N'JDIH000014', N'2', N'8', N'2019', N'XXV/perdir/09/2019', N'Peraturan Pakaian 5', N'1', N'Semua', N'JDIH000014', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'19', N'JDIH000015', N'2', N'8', N'2019', N'XXVI/perdir/09/2019', N'Peraturan Pakaian 6', N'1', N'Semua', N'JDIH000015', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'20', N'JDIH000016', N'2', N'8', N'2019', N'XXVII/perdir/09/2019', N'Peraturan Pakaian 7', N'1', N'Semua', N'JDIH000016', N'2019-09-13 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'21', N'JDIH000017', N'2', N'8', N'2019', N'XXVIII/perdir/09', N'Peraturan Pakaian Karyawan', N'1', N'Semua', N'JDIH000017', N'2019-09-13 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'22', N'JDIH000018', N'1', N'5', N'1990', N'347/MenKes/SK/VII/1990', N'Obat Wajib Apotik', N'1', N'Semua', N'JDIH000018', N'2019-09-13 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'23', N'JDIH000019', N'1', N'5', N'2019', N'HK.01.07/MENKES/207/2019', N'Program Legislasi Kesehatan Tahun 2019 ', N'1', N'Semua', N'JDIH000019', N'2019-09-13 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'24', N'JDIH000020', N'1', N'1', N'1949', N'419 Tahun 1949 ', N'Ordonansi Obat Keras', N'1', N'Semua', N'JDIH000020', N'2019-09-14 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'25', N'JDIH000021', N'1', N'2', N'1980', N'18 Tahun 1980', N'Transfusi Darah', N'1', N'Semua', N'JDIH000021', N'2019-09-14 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'27', N'JDIH000022', N'1', N'2', N'1998', N'72 Tahun 1998', N'Pengamanan Sediaan Farmasi Dan Alat Kesehatan', N'1', N'Farmasi', N'JDIH000022', N'2019-09-21 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'28', N'JDIH000023', N'1', N'5', N'2004', N'1027/MENKES/SK/IX/2004', N'Standar Pelayanan Kefarmasian Di Apotek', N'1', N'Farmasi', N'JDIH000023', N'2019-09-21 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'29', N'JDIH000024', N'1', N'2', N'a', N'a', N'a', N'1', N'AKRI', N'JDIH000024', N'2019-10-04 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'30', N'JDIH000025', N'1', N'7', N'a', N'a', N'a', N'1', N'BAGIAN LOGISTIK', N'JDIH000025', N'2019-10-04 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'31', N'JDIH000026', N'1', N'5', N'2014', N'NOMOR 1 TAHUN 2014', N'Petunjuk Teknis Bantuan Operasional Kesehatan', N'1', N'Semua', N'JDIH000026', N'2019-10-05 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'32', N'JDIH000027', N'2', N'8', N'2019', N'XX/perdir/09/2019', N'Peraturan Pakaian Karyawan 2', N'1', N'Semua', N'JDIH000027', N'2019-10-05 00:00:00.000', N'0', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'33', N'JDIH000028', N'1', N'4', N'2019', N'30 TAHUN 2019', N'Klasifikasi Dan Perizinan Rumah Sakit', N'1', N'Semua', N'JDIH000028', N'2019-10-10 00:00:00.000', N'1', N'Galihs')
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'34', N'JDIH000029', N'2', N'8', N'2019', N'Nomor 12 Tahun 2019', N'Peraturan Parkir Karyawan', N'1', N'Semua', N'JDIH000029', N'2019-10-10 00:00:00.000', N'0', N'Galihs')
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'35', N'JDIH000030', N'2', N'8', N'2019', N'XXVIII/perdir/09/2019', N'Peraturan Asesoris Karyawan', N'1', N'Semua', N'JDIH000030', N'2019-10-10 00:00:00.000', N'0', N'Galihs')
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'36', N'JDIH000031', N'1', N'1', N'2019', N'18', N'Peraturan U', N'2', N'Semua', N'JDIH000031', N'2019-10-19 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'37', N'JDIH000032', N'1', N'1', N'2019', N'20', N'Peraturan Uu', N'1', N'Semua', N'JDIH000032', N'2019-10-19 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'38', N'JDIH000033', N'1', N'1', N'2019', N'18', N'Peratura UuUu', N'1', N'Semua', N'JDIH000033', N'2019-10-19 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'39', N'JDIH000034', N'1', N'', N'2019', N'12', N'coba', N'1', N'Semua', N'JDIH000034', N'2019-10-19 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'40', N'JDIH000035', N'2', N'9', N'2019', N'33', N'CC', N'1', N'Semua', N'JDIH000035', N'2019-10-19 00:00:00.000', N'1', NULL)
GO

INSERT INTO [dbo].[SKR_Jdih] ([id_jdih], [kd_jdih], [r_lingkup], [jns_prtn], [th_prtn], [nmr_prtn], [nm_prtn], [sts_prtn], [stru_prtn], [nm_doc_prtn], [date_create], [dl_sts], [uradd]) VALUES (N'41', N'JDIH000036', N'1', N'2', N'2019', N'12', N'Vsgr', N'1', N'Semua', N'JDIH000036', N'2019-10-19 00:00:00.000', N'1', NULL)
GO

SET IDENTITY_INSERT [dbo].[SKR_Jdih] OFF
GO


-- ----------------------------
-- Table structure for SKR_Jdih_jns
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[SKR_Jdih_jns]') AND type IN ('U'))
	DROP TABLE [dbo].[SKR_Jdih_jns]
GO

CREATE TABLE [dbo].[SKR_Jdih_jns] (
  [id_jns] int  NULL,
  [nm_jdih_jns] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [bt_aktif] int  NULL
)
GO

ALTER TABLE [dbo].[SKR_Jdih_jns] SET (LOCK_ESCALATION = TABLE)
GO


-- ----------------------------
-- Records of SKR_Jdih_jns
-- ----------------------------
INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'1', N'Undang-undang', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'2', N'Peraturan Pemerintah', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'3', N'Perpres', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'4', N'Permenkes', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'5', N'Kepmenkes', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'6', N'Keppres', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'7', N'Inpres', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'8', N'Perdir', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'9', N'SK', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'10', N'SE', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'11', N'DLL', N'1')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'13', N'Ketetapan MPR RI', N'0')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'12', N'UUD', N'0')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'14', N'Ketetapan MPR RI', N'0')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'15', N'Ketetapan MPR RI', N'0')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'16', N'redirect(base_url(''Jdih/jns_prtn''));', N'0')
GO

INSERT INTO [dbo].[SKR_Jdih_jns] ([id_jns], [nm_jdih_jns], [bt_aktif]) VALUES (N'17', NULL, N'0')
GO


-- ----------------------------
-- Table structure for SKR_Jdih_status
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[SKR_Jdih_status]') AND type IN ('U'))
	DROP TABLE [dbo].[SKR_Jdih_status]
GO

CREATE TABLE [dbo].[SKR_Jdih_status] (
  [id_sts] int  NULL,
  [nm_sts] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL
)
GO

ALTER TABLE [dbo].[SKR_Jdih_status] SET (LOCK_ESCALATION = TABLE)
GO


-- ----------------------------
-- Records of SKR_Jdih_status
-- ----------------------------
INSERT INTO [dbo].[SKR_Jdih_status] ([id_sts], [nm_sts]) VALUES (N'1', N'Berlaku')
GO

INSERT INTO [dbo].[SKR_Jdih_status] ([id_sts], [nm_sts]) VALUES (N'2', N'Tidak')
GO


-- ----------------------------
-- Auto increment value for SKR_Jdih
-- ----------------------------
DBCC CHECKIDENT ('[dbo].[SKR_Jdih]', RESEED, 41)
GO

