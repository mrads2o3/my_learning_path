<?php

// class 
class Produk {

    // property
    public  $harga,
            $judul, 
            $penerbit;

    // constructor is method that automatically execute every class called / object created 
    // this constructor not mandatory to set property every object created, so the property is set according to the parameter
    public function __construct($harga = 1000, $judul = "Aku sayang kamu", $penerbit = "Aku")
    {
        $this->harga = $harga;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
    }

    // if constructor parameter set like this then every time object created you have to set a parameter
    // public function __construct($harga, $judul, $penerbit)
    // {
    //     $this->harga = $harga;
    //     $this->judul = $judul;
    //     $this->penerbit = $penerbit;
    // }
    // Create object like this : $var = new Class(1, "Something", "Someone");

    //method
    public function getProduk()
    {
        return "Penerbit buku adalah : $this->penerbit  dengan judul $this->judul dan harga nya adalah $this->harga";
    }
}

// object
$a = new Produk(100, "Meh", "Akue");
$b = new Produk();

echo $a->getProduk();
echo "<br>";
echo $b->getProduk();
// var_dump($a);

?>