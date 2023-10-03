<?php
// <!-- Kita Akan Membuat Sebuah Toko Yang Menjual Game dan Komik -->
class Produk {
        private $judul,
              $penulis,
              $penerbit,
              $diskon;

    protected $harga;

        public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
            $this->judul = $judul;
            $this->penerbit = $penerbit;
            $this->penulis = $penulis;
            $this->harga = $harga;
        }
        public function setJudul($judul){
            return $this->judul=$judul;
        }

        public function getHarga(){
            return $this->harga - ( $this->harga * $this->diskon / 100 );
        }

        public function getHello(){
            return "$this->penulis, $this->penerbit";
        }
        public function getInfoLengkap(){
            $str=" {$this->judul} | {$this->getHello()} (Rp. {$this->harga})";
            return $str;
        }
        public function getJudul (){
            return $this->judul;
        }
        public function setPenulis(){
            return $this->penulis =$penulis;
        }
        public function getPenulis (){
            return $this->penulis;
        }

        public function setPenerbit(){
            return $this->penerbit =$penerbit;
        }
        public function getPenerbit(){
            return $this->penerbit; 
        }
}

class Komik extends Produk {
    public $jmlHalaman;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoLengkap(){
        $str="Komik : ".parent::getInfoLengkap()."-{$this->jmlHalaman} Halaman.";
        return $str;
    }

}
class Game extends Produk {
    public $wktMain;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$wktMain=0){
    parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->wktMain= $wktMain;
    }

    public function setDiskon($diskon){
        return  $this->diskon =$diskon;
      }

    public function getInfoLengkap(){
        $str="Game : ".parent::getInfoLengkap()."-{$this->wktMain} Jam.";
        return $str;
    }
}


class cetakInfoProduk{
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getHello()} (Rp. $produk->harga)";
        return $str;
    }
}


$produk1 = new Komik("Naruto","Masashi Kashimoto", "Shonen Jump",30000,100,"Komik");
$produk2 = new Game("God Of War", "Kim Jong Un", "Sony Computer", 50000,50,"Game");
 echo $produk1->getInfoLengkap();
 echo "<br>";
 echo $produk2->getInfoLengkap();
 echo "<hr>";


$produk2->setDiskon(50);
 echo $produk2->getHarga();
 echo "<hr>";
 $produk1->setJudul("Boruto");
 echo $produk1->getJudul();