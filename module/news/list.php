<?php
  $sql ="select * from news";
  $list = $news->exeQuery($sql);
  echo "Có ".$news->getRowCount() ." kết quả";
  foreach($list as $r)
{
	?>
    <div class=book>
    	<?php echo $r["title"];?>
    </div>
    <?php	
}
?>