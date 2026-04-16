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
    $pen = new Zaiko('',-1); 
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
    echo '(Stock)';
} catch (RunTimeException $e) {
    echo '(Run)';
}