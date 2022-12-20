<?php

// class 
class Produk {

    // property
    public  $harga,
            $judul, 
            $penerbit;

    public function __construct($harga = 1000, $judul = "Aku sayang kamu", $penerbit = "Aku")
    {
        $this->harga = $harga;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
    }

    //method
    public function getJudulPenerbit()
    {
        return "$this->judul | $this->penerbit";
    }

}

class InfoProduk {

    // printInfoProduk parameter must be an instance of Produk
    public function printInfoProduk(Produk $produk)
    {
        $str = "{$produk->getJudulPenerbit()}, {$produk->harga}";
        return $str;
    }

}

// object
$a = new Produk(100, "Meh", "Akue");
$b = new Produk();
$c = new InfoProduk();

echo $a->getJudulPenerbit();
echo "<br>";
echo $b->getJudulPenerbit();
echo "<br>";
echo $c->printInfoProduk($a);

// var_dump($a);

?>