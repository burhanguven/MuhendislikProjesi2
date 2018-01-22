<?php 

	class User extends DB{
		function control($username,$password){
			return $this->db->has("login",["AND" => ["username"=>$username,"password"=>$password]]);
		}

	}
