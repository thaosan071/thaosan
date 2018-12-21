<?php
$group = Utils::getIndex("group", "banve");

//cho xu ly table tau
if ($group=="tau")
{	
	$tau = new Tau();
	$ac = Utils::getIndex("ac", "tauShow");
	if ($ac =="edit")
	{
	 include ROOT."/admins/module/banve/tauedit.php";
	}
	
	if ($ac=="tauShow")
	{
		include ROOT."/admins/module/banve/tauadd.php";
		include ROOT."/admins/module/banve/taushow.php";
	}
	
	if ($ac=="delete")
		{
			//xu ly xoa	
			$n = $tau->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?> tau!");
			window.location="index.php?mod=banve&group=tau";
			</script>
            <?php
		}
	if ($ac=="saveEdit")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $tau->saveEdit();
			?>
            <script language="javascript">
			alert("Đã sửa <?php echo $n;?> tau!");
			window.location="index.php?mod=banve&group=tau";
			</script>
            <?php
		}
	if ($ac=="saveAdd")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $tau->saveAddNew();
			?>
            <script language="javascript">
			alert("Da them <?php echo $n;?> tau!");
			window.location="index.php?mod=banve&group=tau";
			</script>
            <?php
		}
}
if ($group=="banve")
{
$ac = Utils::getIndex("ac", "banveShow");
if ($ac=="banveShow")
include ROOT."/admins/module/banve/banveshow.php";
//...
//...

}

if ($group=="ga")
{
   $ga = new Ga();
	$ac = Utils::getIndex("ac", "gaShow");
	if ($ac =="edit")
	include ROOT."/admins/module/banve/gaedit.php"; //Insert form edit or add new
	
	if ($ac=="gaShow")
	{
		include ROOT."/admins/module/banve/gaadd.php";
		include ROOT."/admins/module/banve/gashow.php";
	}
	
	if ($ac=="delete")
		{
			//xu ly xoa	
			$n = $ga->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?> ga!");
			window.location="index.php?mod=banve&group=ga";
			</script>
            <?php
		}
	if ($ac=="saveEdit")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $ga->saveEdit();
			?>
            <script language="javascript">
			alert("Đã sửa <?php echo $n;?> ga!");
			window.location="index.php?mod=banve&group=ga";
			</script>
            <?php
		}
	if ($ac=="saveAdd")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $ga->saveAddNew();
			?>
            <script language="javascript">
			alert("Da them <?php echo $n;?> ga!");
			window.location="index.php?mod=banve&group=ga";
			</script>
            <?php
		}	
}

if ($group=="lichtrinh")
{
   $lichtrinh = new LichTrinh();
	$ac = Utils::getIndex("ac", "lichtrinhShow");
	if ($ac =="edit")
	{
		include ROOT."/admins/module/banve/lichtrinhedit.php"; //Insert form edit or add new
	}
	if ($ac=="lichtrinhShow")
	{	
		include ROOT."/admins/module/banve/lichtrinhadd.php";
		include ROOT."/admins/module/banve/lichtrinhshow.php";
	}
	
	if ($ac=="delete")
		{
			//xu ly xoa	
			$n = $lichtrinh->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?> lichtrinh!");
			window.location="index.php?mod=banve&group=lichtrinh";
			</script>
            <?php
		}
	if ($ac=="saveEdit")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $lichtrinh->saveEdit();
			?>
            <script language="javascript">
			alert("Đã sửa <?php echo $n;?> lichtrinh!");
			window.location="index.php?mod=banve&group=lichtrinh";
			</script>
            <?php
		}
	if ($ac=="saveAdd")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $lichtrinh->saveAddNew();
			?>
            <script language="javascript">
			alert("Da them <?php echo $n;?> lichtrinh!");
			window.location="index.php?mod=banve&group=lichtrinh";
			</script>
            <?php
		}
	if ($ac=="detail")
	{
		include ROOT."/admins/module/banve/lichtrinhdetail.php";
	}		
}

if ($group=="tuyen")
{
   $tuyen = new Tuyen();
	$ac = Utils::getIndex("ac", "tuyenShow");
	
	if ($ac=="tuyenShow")
	{
		include ROOT."/admins/module/banve/tuyenadd.php";
		include ROOT."/admins/module/banve/tuyenshow.php";
	}

	if($ac=="edit")
	{
		include ROOT."/admins/module/banve/tuyenedit.php";
	}
	
	if ($ac=="delete")
		{
			//xu ly xoa	
			$n = $tuyen->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?> tuyến!");
			window.location="index.php?mod=banve&group=tuyen";
			</script>
            <?php
		}
	if ($ac=="saveEdit")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $tuyen->saveEdit(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã sửa <?php echo $n;?> tuyến!");
			window.location="index.php?mod=banve&group=tuyen";
			</script>
            <?php
		}
	if ($ac=="saveAdd")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $tuyen->saveAddNew();
			?>
            <script language="javascript">
			alert("Da them <?php echo $n;?> tuyến!");
			window.location="index.php?mod=banve&group=tuyen";
			</script>
            <?php
		}
	if ($ac=="detail")
	{
		include ROOT."/admins/module/banve/tuyendetail.php";
	}	
}

if ($group=="chitiettuyen")
{
   $chitiettuyen = new ChiTietTuyen();
	$ac = Utils::getIndex("ac", "chitiettuyenShow");
	if ($ac =="edit")
	{
		include ROOT."/admins/module/banve/chitiettuyenedit.php"; //Insert form edit or add new
	}
	
	if ($ac=="chitiettuyenShow")
	{
		include ROOT."/admins/module/banve/chitiettuyenadd.php";
		include ROOT."/admins/module/banve/chitiettuyenshow.php";
	}
	
	if ($ac=="delete")
		{
			//xu ly xoa	
			$n = $chitiettuyen->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?>chi tiết tuyến!");
			window.location="index.php?mod=banve&group=chitiettuyen";
			</script>
            <?php
		}
	if ($ac=="saveEdit")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $chitiettuyen->saveEdit(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã sửa <?php echo $n;?>chi tiết tuyến!");
			window.location="index.php?mod=banve&group=chitiettuyen";
			</script>
            <?php
		}
	if ($ac=="saveAdd")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $chitiettuyen->saveAddNew();
			?>
            <script language="javascript">
			alert("Da them <?php echo $n;?>chi tiết tuyến!");
			window.location="index.php?mod=banve&group=chitiettuyen";
			</script>
            <?php
		}	
}


if ($group=="news")
{
   $news = new News();
	$ac = Utils::getIndex("ac", "newsShow");
	if ($ac !="delete")
	include ROOT."/admins/module/banve/newsedit.php"; //Insert form edit or add new
	
	if ($ac=="newsShow")
		include ROOT."/admins/module/banve/newsshow.php";
	
	if ($ac=="delete")
		{
			//xu ly xoa	
			$n = $news->delete(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã xóa <?php echo $n;?> News!");
			window.location="index.php?mod=banve&group=news";
			</script>
            <?php
		}
	if ($ac=="saveEdit")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			
			$n = $news->saveEdit(Utils::getIndex("id"));
			?>
            <script language="javascript">
			alert("Đã sửa <?php echo $n;?> News!");
			window.location="index.php?mod=banve&group=news";
			</script>
            <?php
		}
	if ($ac=="saveAdd")
		{
			//xu ly edit -> and redirect to index.php -> mod-> action	
			$n = $news->saveAddNew();
			?>
            <script language="javascript">
			alert("Da them <?php echo $n;?> News!");
			window.location="index.php?mod=banve&group=news";
			</script>
            <?php
		}	
}