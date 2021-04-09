<?php 

	/**
	 * 
	 */
	class User_model
	{
		private $table='data';
		private $db;

			
		public function __construct()
		{
			$this->db = new Database;
		}

		public function tambahUser($data)
		{
			// $password = md5($data['password']);
			$query = "INSERT INTO user VALUES('', :username, :password, :role)";
			$this->db->query($query);
			$this->db->bind('username',$data['username']);
			$this->db->bind('password',md5($data['password']));
			$this->db->bind('role',$data['role']);

			$this->db->execute();
			return $this->db->rowCount();

		}
	}

 ?>