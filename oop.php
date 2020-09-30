<?php
class Produk {
	public $judul = "judul",
		   $pengembang = "pengembang:",
		   $mesin = "mesin",
		   $genre = "genre",
		   $penerbit = "penerbit",
		   $platform = "platform" ;

	public function getbaru () {
		return "$this->judul , $this->pengembang , $this->mesin , $this->genre , $this->penerbit , $this->platform" ;
	}
}

$produk1 = new Produk ();
$produk1 = judul = "Mobile Legends" ;
$produk1 = pengembang = "Moonton" ;
$produk1 = mesin = "Unity" ;
$produk1 = genre = "Moba 5vs5" ;
$produk1 = penerbit = "Moonton" ;
$produk1 = platform = "Android , Ios " ;
var_dump($produk1);

echo "Game : $produk1-> judul , $produk1-> pengembang  , $produk1->mesin , $produk1->genre , $produk1-> penerbit , $produk1->platform ";
echo "<br>";
echo $produk1->getbaru();