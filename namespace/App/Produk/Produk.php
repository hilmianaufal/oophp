<?php 

abstract class Produk {
        protected $judul,
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
        
        abstract public function getInfo();

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