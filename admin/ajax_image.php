<?php
include('config.php');

$id1=$_POST['id'];
$sql=mysql_query("select * from galery_content where s_id='$id1'");
//echo '<option>Select Sub Category</option>';
while($row=mysql_fetch_assoc($sql))
{

$data1=$row['img'];


echo $data1;

}

		
?>