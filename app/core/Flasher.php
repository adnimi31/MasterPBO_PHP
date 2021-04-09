<?php 

/**
 * 
 */
class Flasher
{
	// untuk set pesan pemberitahuan 
	public static function setFlash($pesan, $aksi, $tipe)
	{
		$_SESSION['flash']=[
			'pesan'=> $pesan,
			'aksi'=>$aksi,
			'tipe'=>$tipe
		];
	}

	//menampilkan pesan pemberitahuan
	public static function flash()
	{
		if (isset($_SESSION['flash'])) {
			echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
				  '. $_SESSION['flash']['pesan'] .'  '. $_SESSION['flash']['aksi'] .'!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
			  </div>';
			  unset($_SESSION['flash']);
		}
		
	}



}

 ?>