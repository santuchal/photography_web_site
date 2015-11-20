<?php
include('../config.php');


$soc_name=$_GET['name'];

$sql=mysql_query("select link from social where name='$soc_name'");
while($row=mysql_fetch_array($sql))
{
$soc_link=$row['link'];

echo $soc_link;

//echo '<input type="text" name="working" id="working" value="'.$name.'" class="form-login"/>';
}
?>


