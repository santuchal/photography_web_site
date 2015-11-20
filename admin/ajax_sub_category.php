<?php
include('config.php');
$all_category=$_POST['all_category'];
$sub_category=$_POST['sub_category'];

$sql=mysql_query("select * from galery_category where c_id='$all_category'");
$r=mysql_fetch_assoc($sql);
$c=$r['name'];
//echo $all_category;
//echo $sub_category;
$sql1=mysql_query("insert into galery_sub_category (c_id,s_name) values('$all_category','$sub_category')") or die("pres_error");
@mkdir('images/category/'.$c.'/'.$sub_category, 0777, true);
$sql2=mysql_query("select max(s_id) as id from galery_sub_category");
$r1=mysql_fetch_assoc($sql2);
$sd=$r1['id'];

$src=array();
array_push($src,$sub_category,$sd);
echo json_encode($src);
/*
if(isset($_FILES['propic'])){
	$fileName = $_FILES['propic']['name'];
	$tmpName  = $_FILES['propic']['tmp_name'];
	$fileSize = $_FILES['propic']['size'];

}
$sql=mysql_query("insert into galery_category (name,c_image) values('$c_name','$fileName');") or die("pres_error");
@mkdir('images/category/'.$c_name, 0777, true);
move_uploaded_file($tmpName,"images/category/".$fileName);
*/
?>