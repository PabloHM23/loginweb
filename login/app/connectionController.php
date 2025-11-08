<?php 
class ConnectionController{

	private $HOST = "localhost";
	private $USER = "root";
	private $PASS = "12345";
	private $DBNM = "CRUD";

	function connect()
	{
		$conn = new mysqli($this->HOST,$this->USER,$this->PASS,$this->DBNM);

		if ($conn) {
			return $conn;
		}
		return null;
	}

}

?>