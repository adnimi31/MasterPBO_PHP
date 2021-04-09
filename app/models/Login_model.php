<?php 

	/**
	 * 
	 */
	class Login_model
	{
		private $table='';
		private $db;

			
		public function __construct()
		{
			$this->db = new Database;
		}

		public function masuk($data)
		{
			//mencari username dan pass yg dimasukan
			$query = "SELECT * FROM user WHERE username=:username AND password=:password";
			$this->db->query($query);
			$this->db->bind('username',$data['username']);
			$this->db->bind('password',md5($data['password']));

			return $this->db->single();
			return $this->db->rowCount();	
		}

		public function sessionHandle()
		{

		}
	}

 ?>