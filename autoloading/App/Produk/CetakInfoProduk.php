<?php

class cetakInfoProduk{
    public $daftarProduk = [];
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[]=$produk;
    }


    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p){
            $str .= "- {$p->getInfoLengkap()} : <br>";
        }


        return $str;
    }
    
    public function getInfo(){
        $str=" {$this->judul} | {$this->getHello()} (Rp. {$this->harga})";
        return $str;
    }
}
