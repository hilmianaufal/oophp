<?php
// <!-- Kita Akan Membuat Sebuah Toko Yang Menjual Game dan Komik -->
class Produk {
        public $judul,
              $penulis,
              $penerbit,
              $harga,
              $jmlHalaman,
              $wktMain,
              $tipe;


        public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0,$wktMain=0,$tipe="tipe"){
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->wktMain = $wktMain;
            $this->tipe= $tipe;
        }
        public function getHello(){
            return "$this->penulis, $this->penerbit";
        }
        public function getInfoLengkap(){
            $str="{$this->tipe} : {$this->judul} | {$this->getHello()} (Rp. {$this->harga})";
            if ($this-> tipe == "Komik"){
                $str .= " - {$this->jmlHalaman} Halaman.";
            }else if ($this->tipe == "Game"){
                $str .= " -{$this->wktMain} Jam.";
            }
            return $str;
        }
}
class cetakInfoProduk{
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getHello()} (Rp. $produk->harga)";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Masashi Kashimoto", "Shonen Jump",30000,100,0,"Komik");

$produk2 = new Produk("God Of War", "Kim Jong Un", "Sony Computer", 50000,0,50,"Game");
 echo $produk1->getInfoLengkap();
 echo "<br>";
 echo $produk2->getInfoLengkap();