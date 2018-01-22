<?php 
	require "class/medoo.php";
	use Medoo\Medoo;
	
	class DB {
		protected $db;
		function __construct(){
			try{
				$this->db =new Medoo([
					'database_type' => 'mysql',
					'database_name' => 'ogrencikayit',
					'server' => 'localhost',
					'username' => 'root',
					'password' => '',
				 
					// [optional]
					'charset' => 'utf8',
				]);
			}catch(PDOException $ex){
				var_dump($ex);
			}
		}
	}