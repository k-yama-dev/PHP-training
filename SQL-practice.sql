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

--0317 課題
-- shopデータベース
create database shop;
-- shopデータベースに移動
use shop;
-- shohinテーブル
create table shohin (
  shohin_id char(4) not null,
  shohin_mei varchar(100) not null,
  shohin_bunrui varchar(32) not null,
  hanbai_tanka int,
  shiire_tanka int,
  torokubi date,
  primary key(shohin_id)
);
-- データ挿入
insert into shohin values ('0001', 'Tシャツ','衣服',1000,500,'2009-09-20');
insert into shohin values ('0002', '穴あけパンチ','事務用品',500,320,'2009-09-11');
insert into shohin values ('0003', 'カッターシャツ','衣服',4000,2800,null);
insert into shohin values ('0004', '包丁','キッチン用品',3000,2800,'2009-09-20');
insert into shohin values ('0005', '圧力鍋','キッチン用品',6800,5000,'2009-01-15');
insert into shohin values ('0006', 'フォーク','キッチン用品',500,null,'2009-09-20');
insert into shohin values ('0007', 'おろしがね','キッチン用品',800,790,'2008-04-28');
insert into shohin values ('0008', 'ボールペン','事務用品',100,null,'2009-11-11');
--項目を指定して表示するselect文
SELECT shohin_id,shohin_mei,shiire_tanka FROM shohin;
--項目を別名で表示 AS
SELECT shohin_id AS '商品ID',shohin_mei AS '商品名',shiire_tanka AS '商品単価' FROM shohin;
--distinct 重複したものをださない
SELECT DISTINCT shohin_bunrui FROM shohin;
--where文
SELECT shohin_mei,shohin_bunrui FROM shohin WHERE shohin_bunrui='衣服';
--nullを検索で表示 is null
SELECT shohin_mei,shohin_bunrui FROM shohin WHERE torokubi is null;
--分類の各行を数えるSQL文
SELECT shohin_bunrui,COUNT(*) FROM shohin GROUP BY shohin_bunrui;

--0317 1日のまとめ
-- shopデータベース
create database shop;

-- shopデータベースに移動
use shop;

-- shohinテーブル
create table shohin (
  shohin_id char(4) not null,
  shohin_mei varchar(100) not null,
  shohin_bunrui varchar(32) not null,
  hanbai_tanka int,
  shiire_tanka int,
  torokubi date,
  primary key(shohin_id)
);

-- データ挿入
insert into shohin values ('0001', 'Tシャツ','衣服',1000,500,'2009-09-20');
insert into shohin values ('0002', '穴あけパンチ','事務用品',500,320,'2009-09-11');
insert into shohin values ('0003', 'カッターシャツ','衣服',4000,2800,null);
insert into shohin values ('0004', '包丁','キッチン用品',3000,2800,'2009-09-20');
insert into shohin values ('0005', '圧力鍋','キッチン用品',6800,5000,'2009-01-15');
insert into shohin values ('0006', 'フォーク','キッチン用品',500,null,'2009-09-20');
insert into shohin values ('0007', 'おろしがね','キッチン用品',800,790,'2008-04-28');
insert into shohin values ('0008', 'ボールペン','事務用品',100,null,'2009-11-11');

-- 列の指定
select shohin_id as "商品ID", shohin_mei as "商品名", shiire_tanka as "商品単価"
   from shohin;

-- 定数
select "商品", 38, shohin_id
   from shohin;

-- 重複排除
select DISTINCT shohin_bunrui
   from shohin;
-- 衣服
-- 事務用品
-- キッチン用品

select DISTINCT shiire_tanka
   from shohin;
-- 500
-- 320
-- 2800  まとまった
-- 5000
-- NULL　まとまった
-- 790

-- whereで絞込
select shohin_mei, shohin_bunrui
   from shohin
   where shohin_bunrui='衣服';

/*
 * コメント
 */

-- nullは=では検索できない
select shohin_mei, shohin_bunrui
   from shohin
   where torokubi = null;

-- nullの検索はisを使う
select shohin_mei, shohin_bunrui
   from shohin
   where torokubi is null;

-- 数値の比較
select shohin_mei, shohin_bunrui, hanbai_tanka
   from shohin
   where hanbai_tanka <= 1000;

-- 文字列比較の実験
create table chars(
    chr char(3) not null,
    primary key(chr)
);

insert into chars values ('1');
insert into chars values ('2');
insert into chars values ('3');
insert into chars values ('10');
insert into chars values ('11');
insert into chars values ('222');

select chr
  from chars
  where chr > '2';
-- 222
-- 3
-- 10と11は入らない

-- fromが無くても動く
select 100;

select 100+300;
-- 100+300 列名
-- 400     値

-- nullが計算に出てくると答はすべてnullになる
select 100+null;
-- null

-- 論理演算子
-- not
select shohin_mei, shohin_bunrui, hanbai_tanka
  from shohin
  where hanbai_tanka >= 1000;

-- notを使うと反対の意味になる
select shohin_mei, shohin_bunrui, hanbai_tanka
  from shohin
  where not hanbai_tanka >= 1000;

-- and 論理演算子
select 
  shohin_mei, shohin_bunrui, hanbai_tanka
 from shohin
 where shohin_bunrui = 'キッチン用品'
   and hanbai_tanka >= 3000;

-- or 論理演算子
select 
  shohin_mei, shohin_bunrui, hanbai_tanka
 from shohin
 where shohin_bunrui = 'キッチン用品'
   or hanbai_tanka >= 3000;

-- andとorが混在するとおかしくなる
select shohin_mei, shohin_bunrui, torokubi
  from shohin
  where shohin_bunrui = '事務用品' 
    and torokubi = '2009-9-11' 
    or torokubi = '2009-9-20';
-- Tシャツ 衣服 2009-09-20
-- 穴あけパンチ 事務用品 2009-09-11
-- 包丁 キッチン用品 2009-09-20
-- フォーク キッチン用品 2009-09-20

select shohin_mei, shohin_bunrui, torokubi
  from shohin
  where shohin_bunrui = '事務用品' 
    and (torokubi = '2009-9-11' 
    or torokubi = '2009-9-20');
-- 穴あけパンチ 事務用品 2009-09-11  正しくなった

-- 関数
--count
select count(*) from shohin;
-- 8

select count(shiire_tanka) from shohin;
-- 6 nullは数えない

-- sum関数
select sum(hanbai_tanka) from shohin;
-- 16700

-- sum関数二つ
select sum(hanbai_tanka),sum(shiire_tanka) from shohin;
-- shiire_tankaにnullがあるが、無視されて0として合計させる

select avg(hanbai_tanka),avg(shiire_tanka) from shohin;
-- 2087.5000 2035.0000
-- shiire_tankaはnullがあるので/6で計算される

-- max関数
select max(hanbai_tanka),max(shiire_tanka) from shohin;
-- 6800 5000

select min(hanbai_tanka),min(shiire_tanka) from shohin;
-- 100 320
-- nullは入らない

-- min,maxは日付もできる
select max(torokubi),min(torokubi) from shohin;
-- 2009-11-11 2008-04-28

-- 文字もできる
select max(shohin_mei),min(shohin_mei) from shohin;
-- 穴あけパンチ Tシャツ

-- 関数内でdistinctが使える
select count(DISTINCT shohin_bunrui) from shohin;
-- 3

-- group byでグループ化
-- 分類の各行数を数える
select shohin_bunrui,count(*)
  from shohin
  GROUP BY shohin_bunrui;
-- 衣服 2
-- 事務用品 2
-- キッチン用品 4

-- nullを含む場合、名無しで集計される
select shiire_tanka,count(*) from shohin GROUP BY shiire_tanka;

-- havingの練習
select shohin_bunrui,count(*)
  from shohin
  GROUP BY shohin_bunrui;

-- havingの使用
select shohin_bunrui,count(*)
  from shohin
  GROUP BY shohin_bunrui
  HAVING count(*) = 2;

-- 別名も使える
select shohin_bunrui,count(*) as cnt
  from shohin
  GROUP BY shohin_bunrui
  HAVING cnt = 2;

-- 販売単価の昇順
select shohin_id,shohin_mei,hanbai_tanka,shiire_tanka
  from shohin
  order by hanbai_tanka;

-- 販売単価の降順
select shohin_id,shohin_mei,hanbai_tanka,shiire_tanka
  from shohin
  order by hanbai_tanka desc;

-- 販売単価の昇順でidの降順
select shohin_id,shohin_mei,hanbai_tanka,shiire_tanka
  from shohin
  order by hanbai_tanka, shohin_id desc;

-- nullを含む場合データベースによって異なる
select shohin_id,shohin_mei,hanbai_tanka,shiire_tanka
  from shohin
  order by shiire_tanka;

-- shohinins
create table shohinins (
  shohin_id char(4) not null,
  shohin_mei varchar(100) not null,
  shohin_bunrui varchar(32) not null,
  hanbai_tanka int default 0,
  shiire_tanka int,
  torokubi date,
  primary key(shohin_id)
);
-- 列リストを指定してinsert
insert into shohinins (shohin_id,shohin_mei,shohin_bunrui,hanbai_tanka,shiire_tanka,torokubi)
  values ('0001','Tシャツ','衣服',1000,500,'2009-9-20');
-- default値を入れてみる
insert into shohinins (shohin_id,shohin_mei,shohin_bunrui,hanbai_tanka,shiire_tanka,torokubi)
  values ('0007', 'おろしがね','キッチン用品',DEFAULT,790,'2008-04-28');
-- default値の０が入る


-- 指定しないことによりdefault値を入力する
insert into shohinins (shohin_id,shohin_mei,shohin_bunrui,shiire_tanka,torokubi)
  values ('0008', 'ボールペン','事務用品',null,'2009-11-11');


-- 0318
SELECT shohin_bunrui,SUM(hanbai_tanka),SUM(shiire_tanka) FROM shohin GROUP BY shohin_bunrui;
--view
CREATE VIEW shohinSum(shohin_bunrui,sum_hanbai,sum_shiire) 
AS SELECT shohin_bunrui,SUM(hanbai_tanka),SUM(shiire_tanka) 
FROM shohin GROUP BY shohin_bunrui;
--view 削除
Drop View --view名

create view shohincnt(shohin_bunrui,cnt_bunrui)
as select shohin_bunrui,count(*) from shohin group by shohin_bunrui;
--サブクエリ
SELECT shohin_bunrui,shohin_cnt
FROM(SELECT shohin_bunrui,COUNT(*)
     	AS shohin_cnt
    	FROM shohin
    	GROUP BY shohin_bunrui)
        AS shohincnt;
--サブクエリinサブクエリ
SELECT shohin_bunrui,shohin_cnt
FROM(SELECT * 
      	FROM(SELECT shohin_bunrui,COUNT(*)
     			AS shohin_cnt
    			FROM shohin
    			GROUP BY shohin_bunrui)
         AS shohincnt
WHERE shohin_cnt = 4)  
AS shohincnt2;
--Gem
SELECT shohin_bunrui, shohin_cnt
FROM (
    SELECT * 
    FROM (
        SELECT shohin_bunrui, COUNT(*) AS shohin_cnt
        FROM shohin
        GROUP BY shohin_bunrui
    ) AS shohincnt -- 1つ目のマトリョーシカ
    WHERE shohin_cnt = 4
) AS shohincnt2; -- 2つ目のマトリョーシカ
--スカラ・サブクエリ
SELECT shohin_id,shohin_mei,hanbai_tanka
FROM shohin
WHERE hanbai_tanka > (SELECT AVG(hanbai_tanka) FROM shohin);

--テキスト
/* view */
-- まず登録したいselect文を作る
select shohin_bunrui, sum(hanbai_tanka), sum(shiire_tanka)
  from shohin
  group by shohin_bunrui;

-- viewに登録する
create view shohinSum (shohin_bunrui, sum_hanbai, sum_shiire)
AS
select shohin_bunrui, sum(hanbai_tanka), sum(shiire_tanka)
  from shohin
  group by shohin_bunrui;

--実行
select * from shohinsum;

-- 課題：分類ごとの商品数をカウントするshohincnt viewを作れ
create view shohincnt (shohin_bunrui,bunrui_cnt)
AS
SELECT shohin_bunrui,count(*)
  from shohin
  GROUP BY shohin_bunrui;

--実行
select * from shohincnt;

-- shohincnt viewと同じ動きをするサブクエリ
select shohin_bunrui, shohin_cnt
  from (select shohin_bunrui, count(*) as shohin_cnt
       from shohin
         group by shohin_bunrui) as shohincnt;

-- cnt_shohinが４のものだけ抽出するサブクエリを書け
select shohin_bunrui, shohin_cnt
  from (select * 
          from (select shohin_bunrui, count(*) as shohin_cnt
                  from shohin
                  group by shohin_bunrui) as shohincnt
          where shohin_cnt = 4) as shohincnt2;

/* スカラサブクエリ */
-- 販売単価の平均を求めよ
select avg(hanbai_tanka) from shohin;
-- 2085.5

-- サブクエリを使って販売単価が平均値より高いものを探しましょう
select shohin_id, shohin_mei, hanbai_tanka
  from shohin
  where hanbai_tanka > (select avg(hanbai_tanka) from shohin);

-- select句でも使える
select shohin_id, shohin_mei, hanbai_tanka,(select avg(hanbai_tanka) from shohin) as shohin_avg
  from shohin;

/* 相関サブクエリ */
select shohin_bunrui, shohin_mei, hanbai_tanka
  from shohin as S1
  where hanbai_tanka > (select avg(hanbai_tanka) from shohin as S2
                          where S1.shohin_bunrui=S2.shohin_bunrui
						  group by shohin_bunrui);
