<?php
class NameException extends RunTimeException {}
class StockException extends RunTimeException {}
class Zaiko {
    public function __construct(
        public string $name,
        public int $stock
    ) {
        if (strlen($name) === 0) {
            throw new NameException('在庫の名前を入力してください');
        }
        if ($stock < 0) {
            throw new StockException('在庫数は０以上を入力してください');
        }
    }
}

try {
    $pen = new Zaiko('123',-1); 
// } catch (RunTimeException $e) {
//     echo '(1)';
// } catch (NameException $e) {
//     echo '(2)';
// } catch (StockException $e) {
//     echo '(3)';
// }
} catch (NameException $e) {//詳細な範囲のものから聞く
    echo '(Name)';
} catch (StockException $e) {
    // echo '(Stock)';

    //case1
    //

    //case2
    // $pen = new Zaiko('errorName',0);//stock:0

    //case3
    // throw new InternalServerException('サーバーが壊れています:' . $e->getMessage());
    //今くいかない

    //case4
    // error_log('在庫数がエラーになりました:' . $e-getMessage());
    // throw $e;
    //今くいかない

} catch (RunTimeException $e) {
    echo '(Run)';
} catch(Exception $e) {
    echo 'ThorError:' . $e->getMessage();
}

echo 'stock:' . $pen->stock;