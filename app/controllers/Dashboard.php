<?php 
	
	/**
	 * 
	 */
	class Dashboard extends Controller
	{
		
		public function index ()
		{	
			$data['judul'] = 'Dashboard';
			$this->view('templates/header', $data);
			$this->view('admin/index',$data);
			$this->view('templates/footer');
		}
		public function about ()
		{
			$data['judul'] = 'About';
			$this->view('templates/header', $data);
			$this->view('home/about');
			$this->view('templates/footer');
		}

		
	}

 ?>