<?php 
	
	/**
	 * 
	 */
	class Register extends Controller
	{
		
		public function index ()
		{	
			$data['judul'] = 'Register';
			$this->view('templates/saheader', $data);
			$this->view('home/register',$data);
			$this->view('templates/footer');
		}

		public function addUser ()
		{	
			if ($this->model('User_model')->tambahUser($_POST) > 0) {
			Flasher::setFlash('Data User Berhasil','Ditambahkan', 'success');
			header('Location:'.BASEURL.'/register');
			exit;
			}else{
				Flasher::setFlash('Data User Gagal','Ditambahkan', 'danger');
				header('Location:'.BASEURL.'/register');
				exit;
			}
		}

		
	}

 ?>