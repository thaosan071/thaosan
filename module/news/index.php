<?php
$news = new News();
$ac = getIndex("ac", "list");
if ($ac=="list")
	{
		// echo "Hiển thị danh sách tin tức tại đây!";	
		include ROOT."/module/news/list.php";
	}
if ($ac=="detail")
{
	$id = getIndex("id");
	// echo "Hiển thị chi tiết tin có id ='$id' ";	
	include ROOT."/module/news/detail.php";
	}
?>