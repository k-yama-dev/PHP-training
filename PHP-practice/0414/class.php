<?php
class e
{
    public function __construct(
        private string $ln,
        private string $fn
    ) {}

    public function gfn(): string
    {
        return $this->ln . '' . $this->fn;
    }
}
$yamada = new e('山田', '太郎');
echo $yamada->gfn() . '<br>' . PHP_EOL;

$k = new e('Kurt', 'Cobain');
echo $k->gfn() . '<br>' . PHP_EOL;

class dice
{
    private int $n;
    private int $t;

    public function __construct(int $n)
    {
        $this->n = $n;
        $this->t = time();
    }

    public function gn()
    {
        return $this->n;
    }

    public function gt()
    {
        return $this->t;
    }
}

$md = new dice(6);
echo $md->gn() . '<br>' . "\n";
echo $md->gt() . '<br>' . "\n";

class pa
{
    public function __construct()
    {
        echo "PAのコンストラクタ\n";
    }
}
class ca extends pa {}
new ca();

class pb
{
    public function __construct()
    {
        echo "PBのコンストラクタ\n";
    }
}
class cb extends pb
{
    public function __construct()
    {
        echo "CBのコンストラクタ\n";
    }
}
new cb();
new pb();

class pc
{
    public function __construct()
    {
        echo "PCのコンストラクタ\n";
    }
}
class cc extends pc
{
    public function __construct()
    {
        parent::__construct();
        echo "CCのコンストラクタ\n" . PHP_EOL;
    }
}
new cc();
new pc();
?>
<br>
<?
class de
{
    public static function gr()
    {
        return rand(1, 6);
    }
}
echo "サイコロの目" . de::gr() . "やで\n" . PHP_EOL;

class di
{
    public static $ct = 0;
    public static function countUp()
    {
        self::$ct++;
        return self::$ct;
    }

    public static function er()
    {
        self::$ct++;
        echo self::$ct . "回目のサイコロの目(1)は..." . self::gr() . PHP_EOL;
    }
    public static function gr()
    {
        return rand(1, 6);
    }
}
di::er();
echo di::countUp() . "回目のサイコロの目(2)は..." . de::gr() . PHP_EOL;
