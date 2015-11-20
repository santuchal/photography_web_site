<?php
include('config.php');


$mem_name=$_GET['name'];

$sql=mysql_query("select * from member_info where id='$mem_name'");
while($row=mysql_fetch_array($sql))
{
$mem_name1=$row['mem_name'];
$mem_post1=$row['mem_post'];
$mem_id=$row['id'];





//echo '<input type="text" name="working" id="working" value="'.$name.'" class="form-login"/>';
}


$src=array();
array_push($src,$mem_name1,$mem_post1,$mem_id);
echo json_encode($src);
?>