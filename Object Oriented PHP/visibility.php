<?php

// class 
class Produk {

    // All property protected because im not allowed to change value 
    protected   $harga,
                $judul, 
                $penerbit,
                $penulis,
                $discount = 0;

    public function __construct($harga = 0, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit")
    {
        $this->harga = $harga;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
    }

    //getLabel private because getLabel used only in Produk class
    private function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->discount / 100);
    }
    // public function getProperty(){
    //     $property = array(
    //         "harga" => $this->harga,
    //         "judul" => $this->judul,
    //         "penerbit" => $this->penerbit,
    //         "penulis" => $this->penulis
    //     );
    //     return $property;
    // }

}


class Komik extends Produk{

    // This property private because its not used in other class
    private $jumHalaman, $property;

    public function __construct($harga = 0, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $jumHalaman = 0)
    {

        parent::__construct($harga, $judul, $penulis, $penerbit);
        $this->jumHalaman = $jumHalaman;

    }

    public function getInfoProduk()
    {
        $str = "Komik : ". parent::getInfoProduk() . " - {$this->jumHalaman} Halaman.";
        return $str;
    }

    public function setDiscount( $discount )
    {
        $this->discount = $discount;
    }

    // Dumb way to use private property. 
    // Private property must used on this class only, dont return it! If you want return it, you can use public!
    // public function getProperty(){
    //     $this->property = parent::getProperty();
    //     $this->property = array_merge($this->property, ["jumHalaman" => $this->jumHalaman]);
    //     return $this->property;
    // }
}

class Game extends Produk{

    // This property private because its not used in other class
    private $jamMain;

    public function __construct($harga = 0, $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $jamMain = 0)
    {
        parent::__construct($harga, $judul, $penulis, $penerbit);
        
        $this->jamMain = $jamMain;

    }

    public function getInfoProduk()
    {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->jamMain} Jam.";
        return $str;
    }
}

$a = new Game(10000, "Apageelah", "Someone", "Aku", 100);
$b = new Komik(10000, "Muehehe", "Somoeone", "Kamu", 1000);

// $a->setDiscount(15);
$b->setDiscount(20);
echo $a->getInfoProduk();
echo "<br>";
echo $b->getInfoProduk();
echo "<hr>";
echo $a->discount;
?>