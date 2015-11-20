<?php
include('config.php');
$category=$_POST['category'];
$s_category=$_POST['s_category'];
if(isset($_FILES['gallery_img'])){
	$fileName = $_FILES['gallery_img']['name'];
	$tmpName  = $_FILES['gallery_img']['tmp_name'];
	$fileSize = $_FILES['gallery_img']['size'];

}
echo $category;
$sql=mysql_query("select * from galery_category where c_id='$category'");
$r=mysql_fetch_assoc($sql);
$c=$r['name'];

$sql1=mysql_query("select * from galery_sub_category where s_id='$s_category'");
$r1=mysql_fetch_assoc($sql1);
$c1=$r1['s_name'];

$s=time().$fileName;
$sql2=mysql_query("INSERT INTO galery_content(c_id, s_id, img) VALUES ('$category','$s_category','$s')");
move_uploaded_file($tmpName,"images/category/".$c."/".$c1."/".$s);
?>