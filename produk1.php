<?php
// <!-- Kita Akan Membuat Sebuah Toko Yang Menjual Game dan Komik -->
class Produk {
        public $judul="judul",
              $penulis="penulis",
              $penerbit="penerbit",
              $harga=0;

        public function getHello(){
            return "$this->penulis, $this->penerbit";
        }
}

// $produk1 = new Produk();
// $produk1->judul="Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->tambahProperty="Uncharted";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis ="Masashi Kishimoto";
$produk3->penerbit ="Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul="God Of War";
$produk4->penulis ="Kim Jong Un";
$produk4->penerbit ="Sony Computer";
$produk4->harga = 50000;



echo $produk4->getHello();