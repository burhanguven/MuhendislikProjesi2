<?php 
	class Ogrencibilgi extends DB{
		function add($name,$email,$bolum,$sinif,$no){
			$this->db->insert("ogrencibilgi",[
				'ogrenci_ad' => $name,
				'ogrenci_email' => $email,
				'ogrenci_bolum' => $bolum,
				'ogrenci_sinif' => $sinif,
				'ogrenci_no' => $no
			]);

			return ($this->db->id() > 0 ? true:false);
		}

		function update($name,$email,$bolum,$sinif,$no,$id){
			$this->db->update("ogrencibilgi",[
				'ogrenci_ad' => $name,
				'ogrenci_email' => $email,
				'ogrenci_bolum' => $bolum,
				'ogrenci_sinif' => $sinif,
				'ogrenci_no' => $no
			],[
				"ogrenci_id"=>$id
			]);

			return ($this->db->error()[2] == null ? true:false);
		}

		function liste(){
			return $this->db->select("ogrencibilgi","*");
		}

		function del($id){
			$this->db->delete("ogrencibilgi",["ogrenci_id"=>$id]);
			return ($this->db->error()[2]==null?true:false);
		}

		function get($id){
			return $this->db->get("ogrencibilgi","*",["ogrenci_id"=>$id]);
		}
	}