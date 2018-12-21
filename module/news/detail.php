<?php
  $id = getIndex("id", "all");
  $sql ="select * from news where ";
  $arr = array();
  if($id != "all")
  {	$sql .="id =:id ";
	$arr[":id"] = $id;
  }
  $list = $news->exeQuery($sql, $arr);
  echo "Có ".$news->getRowCount() ." kết quả";
  ?>
  <div id="Newsdetail" class="container">
     <table style="border: 1px solid #ddd">
     	<tr >
     		<th>Title</th>
     		<th>Img</th>
     		<th>Short_content</th>
     		<th>Content</th>
     		<th>Hot</th>
     	</tr>
  <?php
foreach($list as $r)
{
	?>
     	<tr>
     		<td><?php echo $r['title'];?></td>
     		<td><?php echo $r['img'];?></td>
     		<td><?php echo $r['short_content'];?></td>
     		<td><?php echo $r['content'];?></td>
     		<td><?php echo $r['hot'];?></td>
     	</tr>
     
    <?php	
}
?>
    </table>
  </div>