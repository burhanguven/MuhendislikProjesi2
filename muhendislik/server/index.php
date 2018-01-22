<?php 
	$type = $_POST["type"];

	require "db.php";
	require "user.php";
	require "ogrencibilgi.php";

	$result = [ 'result' => false ,"error" => "Bir sorun oluştu!"];

	switch($type){
		case "login":
			$user = new User();

			$username = $_POST["username"];
			$password = $_POST["password"];	

			$result["result"] = $user->control($username,$password);
		break;

		case "add":
			$ogrencibilgi = new Ogrencibilgi();

			$name = $_POST["name"];
			$email = $_POST["email"];
			$bolum = $_POST["bolum"];
			$sinif = $_POST["sinif"];
			$no = $_POST["no"];

			if($name && $email && $bolum && $sinif && $no){
				$result["result"] = $ogrencibilgi->add($name,$email,$bolum,$sinif,$no);
			}else $result["error"] = "Lütfen boş alan bırakmayınız!";

		break;

		case "list":
			$ogrencibilgi = new Ogrencibilgi();
			$result["list"] = $ogrencibilgi->liste();
			$result["result"] = true;
		break;

		case "delete":
			$ogrencibilgi = new Ogrencibilgi();
			$id = $_POST["id"];
			$result["result"] = $ogrencibilgi->del($id);
		break;

		case "get":
			$ogrencibilgi = new Ogrencibilgi();
			$id = $_POST["id"];
			$list = $ogrencibilgi->get($id);
			$result["get"] = $list;
			$result["result"] = $list ? true:false;
			if(!$list)
				$result["error"] = "Kayıt bulunamadı";
		break;

		case "update":
			$ogrencibilgi = new Ogrencibilgi();

			$name = $_POST["name"];
			$email = $_POST["email"];
			$bolum = $_POST["bolum"];
			$sinif = $_POST["sinif"];
			$no = $_POST["no"];
			$id = $_POST["id"];

			if($name && $email && $bolum && $sinif && $no && $id){
				$result["result"] = $ogrencibilgi->update($name,$email,$bolum,$sinif,$no,$id);
			}else $result["error"] = "Lütfen boş alan bırakmayınız!";
		break;
	}

	echo json_encode($result);