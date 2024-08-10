<?php 

include('library/pdo/result.php'); //Memuat file class/result.php

class Database {

	private $statement; //Variabel untuk menampung kode Statement / Value yang akan diproses oleh fungsi-fungsi tertentu

	private $handler; //Variabel untuk menghandle Database
	private $error; //Variabel untuk menampung error


	//Fungsi untuk melakukan koneksi ke Database Server
	public function __construct($credentials){

		$connection = 'mysql:host=' . $credentials['hostname'] . ';dbname=' . $credentials['database'];
		$options = array(
			PDO::ATTR_PERSISTENT    => true,
			PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
		);
		try{
			$this->handler = new PDO($connection, $credentials['username'], $credentials['password'], $options);
		}
		catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}

	//Fungsi untuk melakukan pembuatan data pada table dalam database
	public function create($table, $data)
	{
		$keys = array_keys($data);
		$stringKeys = implode(',', $keys);
		
		$keysBinder = [];

		foreach ($keys as $key) {
			$keysBinder[] = ':'.$key;
		}

		$stringKeysBinder = implode(',', $keysBinder);

		$this->prepareStatement('INSERT INTO '. $table .'  ('. $stringKeys .') VALUES ('. $stringKeysBinder .')');


		foreach ($data as $key => $value) {
			$this->bind(':'.$key, $value);
		}

		return $this->execute();
	}

	//Fungsi untuk melakukan Query SQL 
	public function query($sql)
	{
		$this->prepareStatement($sql);

		$this->execute();

		$data = $this->statement->fetchAll(PDO::FETCH_ASSOC);

		return new Result($data);
	}

	//Fungsi untuk melakukan Update data yang sudah ada didalam table
	public function update($table, $data, $where)
	{
		$keys = array_keys($data);

		$whereStatement = [];

		foreach ($where as $key => $value) {
			if (is_int($value)) {
				$value = $value;
			} else {
				$value = '"'.$value.'"';
			}
			$whereStatement[] = $key.'='.$value;
		}

		$stringWhereStatement = implode(' AND ', $whereStatement); 

		foreach ($keys as $key) {
			$keysBinder[] =  $key.'=:'.$key;
		}

		$stringKeysBinder = implode(',', $keysBinder);

		$this->prepareStatement('UPDATE '. $table .' SET '. $stringKeysBinder .' WHERE '. $stringWhereStatement .'');

		foreach ($data as $key => $value) {
			$this->bind(':'.$key, $value);
		}

		return $this->execute();
	}

	//Fungsi untuk menghapus data yg sudah ada pada table dalam database
	public function delete($table, $where)
	{

		$whereStatement = [];

		foreach ($where as $key => $value) {
			if (is_int($value)) {
				$value = $value;
			} else {
				$value = '"'.$value.'"';
			}
			$whereStatement[] = $key.'='.$value;
		}

		$stringWhereStatement = implode(' AND ', $whereStatement); 

		$this->prepareStatement('DELETE FROM '. $table .' WHERE '. $stringWhereStatement .'');

		return $this->execute();
	}

	//Fungsi untuk menampung perintah SQL
	private function prepareStatement($query){
		$this->statement = $this->handler->prepare($query);
	}

	//Fungsi untuk menampung inputan yang akan diproses pada fungsi yang membutuhkan
	public function bind($param, $value, $type = null){
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
		$this->statement->bindValue($param, $value, $type);
	}

	//Fungsi untuk melakukan eksekusi statement yang telah disiapkan
	public function execute(){
	    return $this->statement->execute();
	}
}