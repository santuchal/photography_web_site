  <?php
		include('config.php');
		$count=0;
		$mem_name1=$_GET['name'];
		echo $mem_name1;
$query2="select * from member_social where member_id='$mem_name1'";
$fetch2=mysql_query($query2);

while ($rows2=mysql_fetch_array($fetch2)) {
	$id22=$rows2['id'];
	$s_name = $rows2['s_name'];
    $url = $rows2['s_url'];
	
	$count++;
  echo "<tr><td style='display:none;'><form action='' enctype='multipart/form-data' method='post'><input type='text' id='hhd".$count."' value='".$id22."' ></td><td><input type='text' id='hhdd".$count."' value='".$s_name."'></td><td><input type='text' id='hhhddd".$count."' value='".$url."'></td><td><input type='file' class='file1' id='hhhhdddd".$count."' ></td><td></<td><input type='Button' id='hh".$count."' onclick=update_for_name('".$count."') value='Update'></td><td><input type='Button' id='go".$count."' onclick=delete_for_name('".$count."') value='Delete'></td></tr></form>";   

}
?>


