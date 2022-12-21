<?php

// class 
class Produk {

    // property
    public  $harga,
            $judul, 
            $penerbit,
            $tipe,
            $penulis,
            $jmlhHalaman;

    public function __construct($tipe, $harga = 1000, $judul = "Aku sayang kamu", $penulis = "Someone", $penerbit = "Aku", $jmlhHalaman = 0)
    {
        $this->harga = $harga;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->tipe = $tipe;
        $this->penulis = $penulis;
        $this->jmlhHalaman = $jmlhHalaman;
    }

    //method
    public function getJudulPenerbit()
    {
        return "$this->judul | $this->penerbit";
    }

    public function getDetail()
    {
        $text = "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
        return $text;
    }

}


// Inheritance -> All method (Public) and Properties (Public) descend to the child class
class DetProd extends Produk{

    public function printDetail()
    {
        if($this->tipe == 'komik' || $this->tipe == 'Komik'){
            $text = "Komik : {$this->getDetail()} - {$this->jmlhHalaman} Halaman";
        }else{
            $text = "Game : {$this->getDetail()} ~ {$this->jmlhHalaman} Jam";
        }

        return $text;
    }

}

$a = new DetProd("Komik", 10000, "Apageelah", "Someone", "Aku", 100);

echo $a->printDetail();

?>