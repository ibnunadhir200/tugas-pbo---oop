<?php
class Produk {
	public $judul = "judul",
		   $pengembang = "pengembang:",
		   $mesin = "mesin",
		   $genre = "genre",
		   $penerbit = "penerbit",
		   $platform = "platform" ;

	public function __construct ( $judul , $pengembang , $mesin , $genre , $penerbit , $platform) {
		$this->judul=$judul ;
		$this->pengembang=$pengembang;
		$this->mesin=$mesin;
		$this->genre=$genre;
		$this->penerbit=$penerbit;
		$this->platform=$platform;
	}

	public function getbaru () {
		return "$this->judul , $this->pengembang , $this->mesin , $this->genre , $this->penerbit , $this->platform" ;
	}
}

$produk1 = new Produk ("Mobile Legends" , "Moonton" , "Unity" , "Moba 5vs5" , "Moonton" , "Android , Ios" );


echo "Game : $produk1-> judul , $produk1-> pengembang  , $produk1->mesin , $produk1->genre , $produk1-> penerbit , $produk1->platform ";
echo "<br>";
echo $produk1->getbaru();0-