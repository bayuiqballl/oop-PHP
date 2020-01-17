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

// Object Type
class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


// memanggil Object Type
$produk1 =  new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);








