<?php

//class 
class Produk {

    //property
    public $harga, $judul, $penerbit;

    //method
    public function getProduk(){
        return "Penerbit buku adalah : $this->penerbit  dengan judul $this->judul dan harga nya adalah $this->harga";
    }
}

//object
$a = new Produk();

//add/set/change value from property
$a->harga = 1000;
$a->judul = 'Aku sayang kamu';
$a->penerbit = 'Aku';
$a->entah = 'apa yang merasukimu';

// echo $a->getProduk();

var_dump($a);

?>