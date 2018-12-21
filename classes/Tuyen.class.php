<?php
class Tuyen extends Db{
	
	
	public function delete($maT)
	{
		$sql="delete from tuyen where maT=:maT ";
		$arr =  Array(":maT"=>$maT);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($maT)
	{
		$sql="select tuyen.* 
			from tuyen
			where  tuyen.maT=:maT ";
		$arr = array(":maT"=>$maT);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from tuyen");
	}
	
	public function saveEdit()
	{
		$id =Utils::postIndex("maT", "");
		$TenT =Utils::postIndex("TenT", "");

		if ($id =="" || $TenT=="") return 0;//Error
		$sql="update tuyen set  TenT=:TenT where maT=:id ";
		$arr = array( ":TenT"=>$TenT, "id"=>$id);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("maT", "");
		$TenT =Utils::postIndex("TenT", "");
		

		if ($id =="" || $TenT=="") return 0;//Error
		$sql="insert into tuyen(maT, TenT) values(:maT, :TenT) ";
		$arr = array(":maT"=>$id, ":TenT"=>$TenT);
		return $this->exeNoneQuery($sql, $arr);
		
	}


}
?>