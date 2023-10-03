<?php

// class contohStatic{
//     public static $angka = 1;
//     public static function halo(){
//         return "Hallo" . self::$angka++ . "kali";
//     }
// }



// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();


class Contoh {
    public static $angka = 1 ;

    public function halo(){
        return "Hallo".self::$angka++."Kali .<br>";
    }
}

$obj = new Contoh;
echo"<br>";
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();