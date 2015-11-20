<?php
include('config.php');
if(isset($_POST["serv_del"])){

$sel=$_POST['serv_sel'];

$sql=mysql_query("select * from service where serv_title='$sel'");
while($r=mysql_fetch_assoc($sql))
{
	$a=$r['serv_img'];
	unlink("service/".$sel."/".$a);
	//"service/".$fileName1
	
}
rmdir("service/".$sel);
mysql_query("delete from service where serv_title='$sel'");


echo "<script>alert('Services Deleted Successfully!');</script>";

}





?>