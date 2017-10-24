<?php

	class kaoskaki {
		public $bahan = 'sutra';
		public $ukuran = 'm';
		public $motif = 'belang belang';
		public $harga = '2000';

	}
	

	$kaoskaki1 = new kaoskaki;
	echo " kaos kaki berbahan : " .$kaoskaki1 ->bahan. '<br>';
	echo " memiliki ukuran : " .$kaoskaki1 ->ukuran. '<br>';
	echo " mempunyai motif : " .$kaoskaki1 ->motif. '<br>';
	echo " dibandrol dengan harga : " .$kaoskaki1 ->harga. '<br>';


echo "<br>";


	class sepatu {
		public $bahan = 'kulit sapi';
		public $ukuran = '34';
		public $warnas = 'coklat';
		public $warnat = 'hitam';
		public $harga = '25.000';

	}
	

	$sepatu1 = new sepatu;
	echo " sepatu berbahan dari : " .$sepatu1 ->bahan. '<br>';
	echo " memiliki ukuran : " .$sepatu1 ->ukuran. '<br>';
	echo " sepatu itu berwarna : " .$sepatu1 ->warnas. '<br>';
	echo " dengan tali sepatu warna : " .$sepatu1 ->warnat. '<br>';
	echo " dibandrol dengan harga : " .$sepatu1 ->harga. '<br>';

	
	echo "<br>";

	class sarung {
		public $bahan = 'sutra';
		public $ukuran = 'xl';
		public $warnas = 'hijau';
		public $harga = '50.000';

	}
	

	$sarung1 = new sarung;
	echo " sarung berbahan dari : " .$sarung1 ->bahan. '<br>';
	echo " memiliki ukuran : " .$sarung1 ->ukuran. '<br>';
	echo " sarung itu berwarna : " .$sarung1 ->warnas. '<br>';
	echo " dibandrol dengan harga : " .$sarung1 ->harga. '<br>';


	echo "<br>";


	class celana {
		public $jenis ='levis';
		public $ukuran = 'm';
		public $warnas = 'coklat';
		public $harga = '75.000';

	}
	

	$celana1 = new celana;
	echo " jenis celana : " .$celana1 ->jenis. '<br>';
	echo " memiliki ukuran : " .$celana1 ->ukuran. '<br>';
	echo " celana itu berwarna : " .$celana1 ->warnas. '<br>';
	echo " dibandrol dengan harga : " .$celana1 ->harga. '<br>';

	echo "<br>";


	class kaos {
		public $jenis = 'kaos oblong';
		public $ukuran = 'm';
		public $warnas = 'merah';
		public $bahan = 'katun combat';
		public $harga = '30.000';

	}
	

	$kaos1 = new kaos;
	echo " koas jenis : " .$kaos1 ->jenis. '<br>';
	echo " memiliki ukuran : " .$kaos1 ->ukuran. '<br>';
	echo " kaos itu berwarna : " .$kaos1 ->warnas. '<br>';
	echo " berbahan : " .$kaos1 ->bahan. '<br>';
	echo " dibandrol dengan harga : " .$kaos1 ->harga. '<br>';
?>