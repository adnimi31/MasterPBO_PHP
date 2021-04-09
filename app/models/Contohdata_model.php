<?php 

	/**
	 * 
	 */
	class Contohdata_model
	{
		private $table='data';
		private $db;

			
		public function __construct()
		{
			$this->db = new Database;
		}

		public function getContoh()
		{
			$this->db->query('SELECT * FROM data');
			return $this->db->resultSet();
		}

		public function detailContoh($id)
		{
			$this->db->query('SELECT * FROM data WHERE id=:id');
			$this->db->bind('id', $id);
			return $this->db->single();
		}

		public function tambahDataContoh($data)
		{
			$query = "INSERT INTO data VALUES('', :nama, :alamat, :nohp)";
			$this->db->query($query);
			$this->db->bind('nama',$data['nama']);
			$this->db->bind('alamat',$data['alamat']);
			$this->db->bind('nohp',$data['nohp']);

			$this->db->execute();
			return $this->db->rowCount();

		}

		public function hapusDataContoh($id)
		{
			$query = "DELETE FROM data WHERE id=:id";
			$this->db->query($query);
			$this->db->bind('id', $id);

			$this->db->execute();
			return $this->db->rowCount();

		}

		public function getContohubah($id)
		{
			$this->db->query('SELECT * FROM data WHERE id=:id');
			$this->db->bind('id', $id);
			return $this->db->single();
		}


		public function ubahDataContoh($data)
		{
			$query = "UPDATE data SET nama=:nama, alamat=:alamat, nohp=:nohp WHERE id=:id";
			$this->db->query($query);
			$this->db->bind('nama',$data['nama']);
			$this->db->bind('alamat',$data['alamat']);
			$this->db->bind('nohp',$data['nohp']);
			$this->db->bind('id',$data['id']);

			$this->db->execute();
			return $this->db->rowCount();

		}

		// //tes percobaan
		// private $dbh;
		// private $stmt;

		// public function __construct()
		// {

		// 	$dsn ='mysql:host=localhost;dbname=cobamvc';

		// 	try {
		// 		$this->dbh = new PDO($dsn,'root','');
		// 	}catch(PDOException $e){
		// 		die($e->getMessage());
		// 	}

		// }

		// public function getContoh()
		// {
			
		// 	$this->stmt = $this->dbh->prepare('SELECT * FROM data');
		// 	$this->stmt->execute();
		// 	return $this->stmt->fetchAll(PDO::FETCH_ASSOC);


		// }
	}

 ?>