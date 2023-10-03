<?php
// <!-- Kita Akan Membuat Sebuah Toko Yang Menjual Game dan Komik -->
class Produk {
        public $judul,
              $penulis,
              $penerbit,
              $harga;
        public function __construct($judul="judu",$penulis="penulis",$penerbit="penerbit",$harga=0){
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
            
        }



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

$produk1 = new Produk("Naruto","Masashi Kashimoto", "Shonen Jump",30000);

$produk2 = new Produk("God Of War", "Kim Jong Un", "Sony Computer", 50000);



echo "Komik :" . $produk1->getHello();
echo "<br>";
echo "Game :" .$produk2->getHello();