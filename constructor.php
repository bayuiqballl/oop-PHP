<?php 

class Produk{
	//  property
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga; 
	// Constructor method
	public function __construct( $judul, $penulis, $penerbit, $harga){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	// method
	public function getlabel(){
		return "$this->penulis,$this->penerbit";
	}

}

// cara memanggil
$produk1 =  new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

echo "Komik : " . $produk1->getLabel();

