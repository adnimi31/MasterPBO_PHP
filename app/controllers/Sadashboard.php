<?php 
	
	/**
	 * 
	 */
	class Sadashboard extends Controller
	{
		
		public function index ()
		{	
			$data['judul'] = 'Super Admin Dashboard';
			$this->view('templates/saheader', $data);
			$this->view('sadmin/index',$data);
			$this->view('templates/footer');
		}
		public function about ()
		{
			$data['judul'] = 'About';
			$this->view('templates/saheader', $data);
			$this->view('home/about');
			$this->view('templates/footer');
		}

		
	}

 ?>