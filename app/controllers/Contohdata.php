<?php 

/**
 * 
 */
class Contohdata extends Controller
{
	
	public function index()
	{
		$data['judul'] = 'Contoh Data';
		$data['contohdata'] = $this->model('Contohdata_model')->getContoh();
		$this->view('/templates/header', $data);
		$this->view('/home/contohdata', $data);
		$this->view('/templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Contoh Data';
		$data['contohdata'] = $this->model('Contohdata_model')->detailContoh($id);
		$this->view('/templates/header', $data);
		$this->view('/home/contohdatadetail', $data);
		$this->view('/templates/footer');
	}

	public function tambah()
	{
		if ($this->model('Contohdata_model')->tambahDataContoh($_POST) > 0) {
			Flasher::setFlash('Contoh Data Berhasil','Ditambahkan', 'success');
			header('Location:'.BASEURL.'/contohdata');
			exit;
		}else{
			Flasher::setFlash('Contoh Data Gagal','Ditambahkan', 'danger');
			header('Location:'.BASEURL.'/contohdata');
			exit;
		}
	}

	public function hapus($id)
	{
		if ($this->model('Contohdata_model')->hapusDataContoh($id) > 0) {
			Flasher::setFlash('Contoh Data Berhasil','Dihapus', 'success');
			header('Location:'.BASEURL.'/contohdata');
			exit;
		}else{
			Flasher::setFlash('Contoh Data Gagal','Dihapus', 'danger');
			header('Location:'.BASEURL.'/contohdata');
			exit;
		}
	}

	public function getubah()
	{
		// karena data yg ingin kita berikan bukan array assosiatif maka kita bungkus dengan json_encode agar datanya berubah jadi json
		echo json_encode($this->model('Contohdata_model')->getContohubah($_POST['id']));
	}

	public function ubah()
	{
		if ($this->model('Contohdata_model')->ubahDataContoh($_POST) > 0) {
			Flasher::setFlash('Contoh Data Berhasil','Diubah', 'success');
			header('Location:'.BASEURL.'/contohdata');
			exit;
		}else{
			Flasher::setFlash('Contoh Data Gagal','Diubah', 'danger');
			header('Location:'.BASEURL.'/contohdata');
			exit;
		}
	}

}


 ?>