<?php 
	
	/**
	 * 
	 */
	class Database
	{
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $db_name = DB_NAME;

		private $dbh;
		// database statement
		private $stmt;
		public function __construct()
		{
			// data source name
			$dsn='mysql:host='. $this->host .';dbname=' . $this->db_name;

			// mengoptimasi database konfigurasi(agar terjaga terus)
			$option = [
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			];
			try {
				$this->dbh = new PDO ($dsn, $this->user, $this->pass, $option);
				
			} catch (PDOException $e) {
				die($e->getMessage());
				
			}
		}


		// membuat fungsi agar query nantinya bisa digunakan dimana saja
		public function query($query){
			$this->stmt = $this->dbh->prepare($query);
		}
		// mengubah variable yg masuk ke scrit database(lebih tepatnya untuk menghindari sql injection)
		public function bind($param, $value, $type=null){

			if (is_null($type)) {
				switch (true) {
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;

					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;
					
					case is_null($value):
						$type = PDO::PARAM_NULL;
						break;
					
					default:
						$type = PDO::PARAM_STR;
				}
			}
			$this->stmt->bindValue($param, $value, $type);
		}

		//script untuk eksekusi
		public function execute()
		{
			$this->stmt->execute();
		}
		//mengkesekusi data semua atau banyak
		public function resultSet()
		{
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		//mengkesekusi data hanya satu
		public function single()
		{
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_ASSOC);
		}


		//menghitung raw yg ada
		public function rowCount()
		{
			return $this->stmt->rowCount();
		}



	}
	
 ?>