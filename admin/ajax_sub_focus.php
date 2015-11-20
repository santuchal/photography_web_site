<?php
include('config.php');
$c1=$_POST['c1'];
$sql=mysql_query("select * from galery_sub_category where s_name='$c1'");
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