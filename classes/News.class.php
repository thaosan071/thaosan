<?php
	class News extends Db{
		private $_page_size=5;
		public function getAll($Page=1)
		{
			$offset = ($currPage -1) * $this->_page_size;
			$sql="SELECT
					Count(*)
					FROM
					news";
					$n  = $this->count($sql);
					$this->_page_count = ceil($n/$this->_page_size);
			$sql="SELECT
					id,
					title,
					img,
					short_content,
					content,
					hot
					FROM
					news
					limit $offset, " . $this->_page_size;
			
			return $this->exeQuery($sql);
		}
		public function getDetail($id)
		{
			$sql="select * from news where id = @id";
					
			$arr = array("@id"=>$id);
			$data = $this->exeQuery($sql, $arr);
			if (Count($data)>0) return $data[0];
			else return array();
		}
		public function getAllNews()
	{
		return $this->exeQuery("select * from news");
	}
	public function delete($id)
	{
		$sql="delete from news where id=:id ";
		$arr =  Array(":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($id)
	{
		$sql="select news.* 
			from news
			where  news.id=:id ";
		$arr = array(":id"=>$id);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	public function saveEdit($id)
	{
		$title =Utils::postIndex("title", "");
		$img =Utils::postIndex("img", "");
		$short_content =Utils::postIndex("short_content", "");
		$content =Utils::postIndex("content", "");
		$hot = Utils::postIndex("hot", "");
		if ($id =="" || $img == "" || $title=="" || $short_content=="" || $content=="" || $hot=="") return 0;//Error
		$sql="update news set title=:title, img=:img, short_content=:short_content, content=:content ,hot=:hot where id=:id ";
		$arr = array(":title"=>$title, ":img"=>$img, ":short_content"=>$short_content, ":content"=>$content, ":hot"=>$hot, ":id"=> $id );
		return $this->exeNoneQuery($sql, $arr);
		
	}
	public function saveAddNew()
	{
		$title =Utils::postIndex("title", "");
		$img =Utils::postIndex("img", "");
		$short_content =Utils::postIndex("short_content", "");
		$content =Utils::postIndex("content", "");
		$hot = Utils::postIndex("hot", "");

		if ( $img == "" || $title=="" || $short_content=="" || $content=="" || $hot=="") return 0;//Error
		var_dump($title);
		var_dump($short_content);
		var_dump($content);
		var_dump($hot);
		$sql="insert into news (title, img, short_content, content, hot) values(:title, :img, :short_content, :content, :hot)";
		$arr = array( ":title"=>$title, ":img"=>$img, ":short_content"=>$short_content, ":content"=>$content, ":hot"=>$hot);
		return $this->exeNoneQuery($sql, $arr);
		
	}
	
}
?>