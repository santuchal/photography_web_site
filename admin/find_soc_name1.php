<?php
include('../config.php');





$soc_name1=$_GET['name1'];

$sql1=mysql_query("select name from social where name='$soc_name1'");
if(mysql_num_rows($sql1)>0){
while($row1=mysql_fetch_array($sql1))
{
$soc_link1=$row1['name'];

echo $soc_link1;

//echo '<input type="text" name="working" id="working" value="'.$name.'" class="form-login"/>';
}
}
else{
	echo '1';
}
?>


