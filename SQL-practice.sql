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
