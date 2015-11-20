<?php
include('config.php');

$id1=$_POST['ss1'];
$sql=mysql_query("select * from galery_sub_category where c_id='$id1'");
//echo '<option>Select Sub Category</option>';
echo '<option>Select Sub Category</option>';
while($row=mysql_fetch_assoc($sql))
{

$data1=$row['s_name'];
$data2=$row['s_id'];

echo '<option value="'.$data2.'">'.$data1.'</option>';

}

		
?>