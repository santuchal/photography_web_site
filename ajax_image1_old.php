<?php
include('Admin/config.php');

$id1=$_POST['id'];
$src=array();
$count=0;

$sql1=mysql_query("select * from galery_sub_category where s_id='$id1'");
{
	$row1=mysql_fetch_assoc($sql1);
	$name=$row1['s_name'];//sub category name
	$n1=$row1['c_id'];
	$sql2=mysql_query("select * from galery_category where c_id='$n1'");
	$row2=mysql_fetch_assoc($sql2);
	$nm=$row2['name'];///category name
}

$sql=mysql_query("select * from galery_content where s_id='$id1'");
//echo '<option>Select Sub Category</option>';
while($row=mysql_fetch_assoc($sql))
{

$data1=$row['img'];
$a='/';
//echo $nm;
//echo $name;
//echo $data1;
echo '<li class="ipl6 isotope-item" ><a  href="Admin/images/category/'.$nm.''.$a.''.$name.''.$a.''.$data1.'" rel="bookmark" class="fancybox"><img style="width:162px; height:162px;" src="Admin/images/category/'.$nm.''.$a.''.$name.''.$a.''.$data1.'" alt="Ravi_Shanker_tulsan" /><div><span>cdxcxcf</span></div></a></li>';



 /* echo '<li><a onClick="cat1();" href="javascript:void(0);" ><img src="Admin/images/category/'.$nm.''.$a.''.$name.''.$a.''.$data1.'"  style="width:162px; height:162px;"/><div><span></span></div></a></li>
           ';

 */
 

}
	
?>