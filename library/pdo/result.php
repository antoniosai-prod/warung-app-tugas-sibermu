<?php
/**
* 
*/
class Result
{

	private $data;
	
	function __construct(Array $data)
	{
		$this->data = $data;
	}

	//Untuk mengembalikan hasil semua index pada sebuah array
	public function all()
	{
		return $this->data;
	}

	//Untuk mengembalikan sebuah index pertama dalam sebuah array
	public function first()
	{
		if (empty($this->data)) {
			return null;
		}

		return $this->data[0];
	}

}