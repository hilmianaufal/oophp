<?php

require_once "App/Init.php";

// require_once "App/Produk/infoProduk.php";
// require_once "App/Produk/Produk.php";
// require_once "App/Produk/Komik.php";
// require_once "App/Produk/Game.php";
// require_once "App/Produk/CetakInfoProduk.php";

// $produk1 = new Komik("Naruto","Masashi Kashimoto", "Shonen Jump",30000,100,"Komik");
// $produk2 = new Game("God Of War", "Kim Jong Un", "Sony Computer", 50000,50,"Game");


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";
use App\Produk\User as ProdukUser;
use App\Servis\User as ServisUser;

new ProdukUser();
echo"<br>";
new ServisUser();