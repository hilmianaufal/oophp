<?php

class Game extends Produk implements infoProduk{
    public $wktMain;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$wktMain=0){
    parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->wktMain= $wktMain;
    }

    public function setDiskon($diskon){
        return  $this->diskon =$diskon;
      }

    public function getInfoLengkap(){
        $str="Game : {$this->getInfo()}-{$this->wktMain} Jam.";
        return $str;
    }
    
    public function getInfo(){
        $str=" {$this->judul} | {$this->getHello()} (Rp. {$this->harga})";
        return $str;
    }
}