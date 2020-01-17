<?php 

class Produk{
	//  property
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga; 
	// method
	public function sayHello(){
		return "Hello";
	}

	public function getlabel(){
		return "$this->penulis,$this->penerbit";
	}

}

$produk1 =  new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

// var_dump($produk1); 
echo "Komik : $produk1->penulis, $produk1->penerbit";
echo "<br>";
echo $produk1->sayHello();
echo "<br>";

$produk2 = new Produk();
$produk2->judul = "GTA 5";
$produk2->penulis = "Rockstar Editor";
$produk2->penerbit = "Rockstar";
$produk2->harga = 15000000;


echo $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();