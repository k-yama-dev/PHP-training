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
--複数テーブルの内部連結?
SELECT * FROM 
(社員テーブル INNER JOIN 部署テーブル
ON 社員テーブル.部署コード = 部署テーブル.部署コード)
WHERE 部署テーブル.部署名 = 'システム開発部';
((テーブル1 INNER JOIN テーブル2
ON テーブル１.項目名 = テーブル2.項目名)
    INNER JOIN テーブル3
    ON テーブル１.項目名 = テーブル３.項目名) 
-- 課題2 正規化

	受注テーブル
詳細テーブル　主キー組
商品マスタ
顧客マスタ
char(4)ABES BABA CHIB

SELECT 
    J.受注番号, 
    J.受注日, 
    K.顧客名 AS 受注先, 
    S.商品名, 
    D.数量, 
    S.単価,
    (D.数量 * S.単価) AS 合計金額  -- ここで計算！🧮
FROM 
    受注テーブル AS J
INNER JOIN 顧客マスタ AS K ON J.顧客コード = K.顧客コード
INNER JOIN 詳細テーブル AS D ON J.受注番号 = D.受注番号
INNER JOIN 商品マスタ AS S ON D.商品コード = S.商品コード
ORDER by 受注番号 ASC;

-- RDBの内部連結複数の書き方
SELECT * FROM 
	(((受注テーブル INNER JOIN 詳細テーブル ON 受注テーブル.受注番号 = 詳細テーブル.受注番号)
		INNER JOIN 顧客マスタ ON 受注テーブル.顧客コード=顧客マスタ.顧客コード)
	INNER JOIN 商品マスタ ON 詳細テーブル.商品コード = 商品マスタ.商品コード);
-- 受注日ごとの商品ごとの合計金額を計算しよう
SELECT 受注日,商品名, SUM(数量*単価) FROM
(((受注テーブル 
    INNER JOIN 詳細テーブル ON 受注テーブル.受注番号 = 詳細テーブル.受注番号)
	INNER JOIN 顧客マスタ ON 受注テーブル.顧客コード=顧客マスタ.顧客コード)
	INNER JOIN 商品マスタ ON 詳細テーブル.商品コード = 商品マスタ.商品コード)
    GROUP BY 受注日,商品名;
-- 単価が１０００円以上の商品についてのみ、合計金額を計算しよう
SELECT 商品名, SUM(数量*単価) FROM
(((受注テーブル 
    INNER JOIN 詳細テーブル ON 受注テーブル.受注番号 = 詳細テーブル.受注番号)
	INNER JOIN 顧客マスタ ON 受注テーブル.顧客コード=顧客マスタ.顧客コード)
	INNER JOIN 商品マスタ ON 詳細テーブル.商品コード = 商品マスタ.商品コード)
    WHERE 商品マスタ.単価 >= 1000
    GROUP BY 商品名
    ORDER BY 商品名 ASC;
-- 商品ごとの合計金額が１００００円以上のもののみ、抽出しよう
SELECT 商品名, SUM(数量*単価) AS 合計金額 FROM
(((受注テーブル 
    INNER JOIN 詳細テーブル ON 受注テーブル.受注番号 = 詳細テーブル.受注番号)
	INNER JOIN 顧客マスタ ON 受注テーブル.顧客コード=顧客マスタ.顧客コード)
	INNER JOIN 商品マスタ ON 詳細テーブル.商品コード = 商品マスタ.商品コード)
    GROUP BY 商品名
    HAVING 合計金額 >=10000
    ORDER BY 商品名 ASC;
