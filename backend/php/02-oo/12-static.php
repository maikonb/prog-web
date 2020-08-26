<?php

    class Math {
        static $PI = 3.1415926;

        static function somar($x, $y) {
            return $x + $y;
        }
        static function arredondar($x) {
            return round($x);
        }
        public function imprimirPI() {
            echo "<p>(Math) PI = " . self::$PI . "</p\n";
        }
    }

    echo "<p>PI = " . Math::$PI . "</p\n";
    echo "<p>somar(50,10) = " . Math::somar(50,10) . "</p\n";
    echo "<p>arredondar( 1.88 ) = " . Math::arredondar( 1.88 ) . "</p\n";

    $m = new Math();
    $m->imprimirPI();
?>