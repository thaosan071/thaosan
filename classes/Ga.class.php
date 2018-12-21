<?php
class Ga extends Db{
	
	
	public function delete($maga)
	{
		$sql="delete from ga where maga=:maga ";
		$arr =  Array(":maga"=>$maga);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($maga)
	{
		$sql="select ga.* 
			from ga
			where  ga.maga=:maga ";
		$arr = array(":maga"=>$maga);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from ga");
	}
	
	public function saveEdit()
	{
		$id =Utils::postIndex("maga", "");
		$name =Utils::postIndex("tenga", "");
		$diachi =Utils::postIndex("diachi", "");
		if ($id =="" || $name=="" || $diachi=="") return 0;//Error
		$sql="update ga set tenga=:name, diachi=:diachi where maga=:id ";
		$arr = array(":name"=>$name, ":id"=>$id, ":diachi"=>$diachi);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("maga", "");
		$name =Utils::postIndex("tenga", "");
		$diachi =Utils::postIndex("diachi", "");
		if ($id =="" || $name=="" || $diachi=="") return 0;//Error
		$sql="insert into ga(maga, tenga, diachi) values(:maga, :tenga, :diachi) ";
		$arr = array(":maga"=>$id, ":tenga"=>$name, ":diachi"=>$diachi);
		return $this->exeNoneQuery($sql, $arr);
		
	}


}
?>