-- 0316
-- テーブルの作成 Create文
create table 社員テーブル(
    社員番号 int not null,
    氏名 varchar(100) not null,
    入社年月日 date,
    部署コード char(4),
    primary key (社員番号)
);
CREATE TABLE 部署テーブル(
	部署コード char(4) not null,
	部署名 varchar(30) not null,
    PRIMARY KEY (部署コード)
);
-- データの挿入 INSERT文
INSERT INTO 社員テーブル
VALUES(100,'小滝 美都子','2003-4-1','B001'
);
INSERT INTO 社員テーブル
VALUES(101,'羽田 優子','2003-9-4','B002'
);
INSERT INTO 社員テーブル
VALUES(103,'石井 裕之','2005-4-1','B001'
);
INSERT INTO 部署テーブル
VALUES('B001','システム開発部');
INSERT INTO 部署テーブル
VALUES('B002','総務部');
--select文
SELECT * FROM `社員テーブル` WHERE 部署コード = 'B001';
--RDB
SELECT * FROM 
(テーブル1 INNER JOIN テーブル2
ON テーブル1.項目名 = テーブル2.項目名)
-- 社員テーブル.部署コード
-- 部署テーブル.部署コード
WHERE テーブル名.項目名 = 条件
-- ↓リアルな書き方
SELECT * FROM 
(社員テーブル INNER JOIN 部署テーブル
ON 社員テーブル.部署コード = 部署テーブル.部署コード)
WHERE 部署テーブル.部署名 = 'システム開発部';


