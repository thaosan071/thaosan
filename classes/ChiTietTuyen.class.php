<?php
class ChiTietTuyen extends Db{
	
	
	public function delete($maT)
	{
		$sql="delete from chitiettuyen where maT=:maT ";
		$arr =  Array(":maT"=>$maT);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($maT)
	{
		$sql="select * 
			from chitiettuyen
			where  maT=:maT ";
		$arr = array(":maT"=>$maT);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	public function getAllById($maT)
	{
		$sql="select * 
			from chitiettuyen
			where  maT=:maT ";
		$arr = array(":maT"=>$maT);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from chitiettuyen");
	}
	
	public function saveEdit()
	{
		$maT =Utils::postIndex("maT", "");
		$maga =Utils::postIndex("maga", "");
		$vitri =Utils::postIndex("vitri", "");

		if ($id =="" || $vitri=="" ||  $maga=="" ) return 0;//Error
		$sql="update chitiettuyen set  maga=:maga, vitri=:vitri where maT=:id ";
		$arr = array( ":maga"=>$maga, ":vitri"=>$vitri, ":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("maT", "");
		$maga =Utils::postIndex("maga", "");
		$vitri =Utils::postIndex("vitri", "");

		if ($id =="" || $vitri=="" ||  $maga=="" ) return 0;//Error
		$sql="insert into chitiettuyen(maT, vitri, maga) values(:maT, :vitri, :maga) ";
		$arr = array(":maT"=>$id, ":vitri"=>$vitri, ":maga"=>$maga);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	
	public function detail($id)
	{
		$id =Utils::postIndex("maT", "");
		$sql= "select * from chitiettuyen where maT=:id";
		$arr = array( "id"=>$id);
		return $this->exeNoneQuery($sql, $arr);
	}

}
?>