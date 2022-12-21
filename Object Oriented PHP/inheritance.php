<?php

// class 
class Produk {

    // property
    public  $harga,
            $judul, 
            $penerbit,
            $penulis,
            $var;

    public function __construct($harga = 1000, $judul = "Aku sayang kamu", $penulis = "Someone", $penerbit = "Aku", $var = 0)
    {
        $this->harga = $harga;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->var = $var;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // public function getDetail()
    // {
    //     $text = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    //     return $text;
    // }

}


// Inheritance -> All method (Public) and Properties (Public) descend to the child class
class Komik extends Produk{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->var} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->var} Jam.";
        return $str;
    }
}

$a = new Game(10000, "Apageelah", "Someone", "Aku", 100);
$b = new Komik(1000, "Muehehe", "Somoeone", "Kamu", 1000);

echo $a->getInfoProduk();
echo "<br>";
echo $b->getInfoProduk();

?>