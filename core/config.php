<?php  

class library {
	public function __construct() {
            $this->db = new PDO("mysql:host=localhost;dbname=sekolah","root", "");
        }

	//store datake database
	public function store($nama,$email,$birthday,$phone,$address,$password){
		$created_at = date("y/m/d");
		$sql = "INSERT INTO user (name,email,birthday,phone,address,created_at,password) VALUES('$nama','$email','$birthday','$phone','$address','$created_at','$password')";
		$query = $this->db->query($sql);
		var_dump($query);
		if(!$query){
			return "error";
		} else{
			return "success";
		}
	}

	public function login($name) {
		$sql ="SELECT * FROM user where name = '$name' OR email = '$name' ";
		$query = $this->db->query($sql);
		return $query;
	}
}

?>


<!-- // public function __construct(){
// 		$this->db = new PDO("mysql:host=localhost;dbname=sekolah","root","");
// 	} -->