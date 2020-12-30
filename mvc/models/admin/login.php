<?php
class login extends DB{
    public function __construct()
	{
		parent::__construct();
	}
	public function login($username, $password) {
		$sql="SELECT * FROM `admin` WHERE aUsername='$username' AND aPassword='$password'";
		// echo $sql; die();
		$kq= $this->execute($sql);
		return mysqli_fetch_array($kq);
		
	}
	
	public function loginReserve($username, $password) {
		$sql="SELECT * FROM `reservationsagents` WHERE 	raUsername='$username' AND 	raPassword='$password'";
		
		$kq= $this->execute($sql);
		return mysqli_fetch_array($kq);
		
	}

}
?>