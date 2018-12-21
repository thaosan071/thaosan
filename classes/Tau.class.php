<?php
class Tau extends Db{
	
	
	public function delete($matau)
	{
		$sql="delete from tau where matau=:matau ";
		$arr =  Array(":matau"=>$matau);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($matau)
	{
		$sql="select tau.* 
			from tau
			where  tau.matau=:matau ";
		$arr = array(":matau"=>$matau);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from tau");
	}
	
	public function saveEdit()
	{
		$id =Utils::postIndex("matau", "");
		$name =Utils::postIndex("tentau", "");
		if ($id =="" || $name=="") return 0;//Error
		$sql="update tau set tentau=:name where matau=:id ";
		$arr = array(":name"=>$name, ":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("matau", "");
		$name =Utils::postIndex("tentau", "");
		if ($id =="" || $name=="") return 0;//Error
		$sql="insert into tau(matau, tentau) values(:matau, :tentau) ";
		$arr = array(":matau"=>$id, ":tentau"=>$name);
		return $this->exeNoneQuery($sql, $arr);
		
	}

}
?>