<?php 
	
	/**
	 * 
	 */
	class Home extends Controller
	{
				
		public function index ()
		{	
			$data['judul'] = 'Home';
			$this->view('templates/auth_home');
			$this->view('home/index',$data);
		}

		public function login()
		{			
			// menghitung sesi jika data ebih dari 0(dalam artian data yg dimasukan benar yg sudah di validasi di model_login)
			if ($this->model('Login_model')->masuk($_POST) > 0) {
			// membuat sessi login yg ingin ditampilkan
			$datalogin=$this->model('Login_model')->masuk($_POST);
			$_SESSION['username']=$datalogin['username'];
			$_SESSION['role']=$datalogin['role'];
			// membuat redirect atau mengarahkan user dengan hak akses apa ke tempatnya masing" menggunakan session yg telah dibuat
				if ($datalogin['role']=='Admin') {
					header('Location:'.BASEURL.'/dashboard');
				}elseif ($datalogin['role']=='SAdmin') {
					header('Location:'.BASEURL.'/sadashboard');
				}else{
					
				}
			
			exit;
			}else{
				Flasher::setFlash('Username atu Password','Salah!', 'danger');
				header('Location:'.BASEURL.'');
				exit;
			}
		}

		public function logout ()
		{
			session_destroy();
			$data['judul'] = 'Home';
			header('Location:'.BASEURL.'');
		}
		

	}

 ?>