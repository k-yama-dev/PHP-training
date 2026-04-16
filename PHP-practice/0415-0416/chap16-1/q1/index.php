<?php
class Zaiko {
    public function __construct(
        public string $name,
        public int $stock
    ) {
        if ($stock < 0) {
            throw new RangeException('在庫数は０以上を入力してください');
        }
    }
}

try {
    $pen = new Zaiko('ペン',-100);
    echo 'name = ' . $pen->name;
    echo 'stock = ' . $pen->stock;
} catch (RangeException $e) {
// } catch (Exception $e) {
    echo 'message = ' . $e->getMessage();
}