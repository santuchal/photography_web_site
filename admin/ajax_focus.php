<?php
include('config.php');
$c=$_POST['c'];
$sql=mysql_query("select * from galery_category where name='$c'");
$r=mysql_num_rows($sql);
if($r>0)
{
	echo '1';
}
else
{
	echo '0';
}
?>