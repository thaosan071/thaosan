<?php
class LichTrinh extends Db{
	
	
	public function delete($maLT)
	{
		$sql="delete from lichtrinh where maLT=:maLT ";
		$arr =  Array(":maLT"=>$maLT);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($maLT)
	{
		$sql="select lichtrinh.* 
			from lichtrinh
			where  lichtrinh.maLT=:maLT ";
		$arr = array(":maLT"=>$maLT);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	public function getByIdNgayDi($id , $ngaydi)
	{
		$sql="select lichtrinh.* 
			from lichtrinh
			where  lichtrinh.maT=:maT and lichtrinh.ngaydi=:ngaydi ";
		$arr = array(":maT"=>$id,":ngaydi"=>$ngaydi);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}
	public function getAll()
	{
		return $this->exeQuery("select * from lichtrinh");
	}
	
	public function saveEdit()
	{
		$id =Utils::postIndex("maLT", "");
		$maT =Utils::postIndex("maT", "");
		$matau =Utils::postIndex("matau", "");
		$ngaydi =Utils::postIndex("ngaydi", "");
		$giodi =Utils::postIndex("giodi", "");
		$ngayden =Utils::postIndex("ngayden", "");
		$gioden =Utils::postIndex("gioden", "");
		

		if ($id =="" || $ngaydi=="" || $giodi=="" || $ngayden=="" || $gioden=="" || $matau=="" || $maT=="") return 0;//Error
		$sql="update lichtrinh set  ngaydi=:ngaydi, giodi=:giodi, ngayden=:ngayden, gioden=:gioden, maT=:maT, matau=:matau where maLT=:id ";
		$arr = array( ":ngaydi"=>$ngaydi, ":giodi"=>$giodi, ":ngayden"=>$ngayden, ":gioden"=>$gioden,  ":matau"=>$matau, ":id"=>$id, ":maT"=>$maT);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$id =Utils::postIndex("maLT", "");
		$maT =Utils::postIndex("maT", "");
		$matau =Utils::postIndex("matau", "");
		$ngaydi =Utils::postIndex("ngaydi", "");
		$giodi =Utils::postIndex("giodi", "");
		$ngayden =Utils::postIndex("ngayden", "");
		$gioden =Utils::postIndex("gioden", "");

		if ($id =="" || $ngaydi=="" || $giodi=="" || $ngayden=="" || $gioden=="" || $matau=="" || $maT=="") return 0;//Error
		$sql="insert into lichtrinh(maLT, maT, ngaydi, giodi, ngayden, gioden, matau) values(:maLT, :maT, :ngaydi, :giodi, :ngayden, :gioden, :matau) ";
		$arr = array(":maLT"=>$id,"maT"=>$maT, ":ngaydi"=>$ngaydi, ":giodi"=>$giodi, ":ngayden"=>$ngayden, ":gioden"=>$gioden, ":matau"=>$matau);
		return $this->exeNoneQuery($sql, $arr);
		
	}

}
?>