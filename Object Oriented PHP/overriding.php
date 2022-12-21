<?php

// class 
class Produk {

    // property
    public  $harga,
            $judul, 
            $penerbit,
            $penulis;

    public function __construct($harga = 0, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit")
    {
        $this->harga = $harga;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

}


class Komik extends Produk{

    public $jumHalaman;

    public function __construct($harga = 0, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $jumHalaman = 0)
    {

        // overriding -> get method from parent with same name and run all its code
        parent::__construct($harga, $judul, $penulis, $penerbit);
        $this->jumHalaman = $jumHalaman;

    }

    public function getInfoProduk()
    {
        // overriding
        $str = "Komik : ". parent::getInfoProduk() . " - {$this->jumHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{

    public $jamMain;

    public function __construct($harga = 0, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $jamMain = 0)
    {
        // overriding
        parent::__construct($harga, $judul, $penulis, $penerbit);
        
        $this->jamMain = $jamMain;

    }

    public function getInfoProduk()
    {
        // overriding
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->jamMain} Jam.";
        return $str;
    }
}

$a = new Game(10000, "Apageelah", "Someone", "Aku", 100);
$b = new Komik(1000, "Muehehe", "Somoeone", "Kamu", 1000);

echo $a->getInfoProduk();
echo "<br>";
echo $b->getInfoProduk();

?>