<?php
include('config.php');
$c_name=$_POST['c_name'];
//echo $c_name;
if(isset($_FILES['propic'])){
	$fileName = $_FILES['propic']['name'];
	$tmpName  = $_FILES['propic']['tmp_name'];
	$fileSize = $_FILES['propic']['size'];

}
//$sd=();
//echo $fileName;
$s=time().$fileName;

$sql=mysql_query("insert into galery_category (name,c_image) values('$c_name','$s');") or die("pres_error");
@mkdir('images/category/'.$c_name, 0777, true);
move_uploaded_file($tmpName,"images/category/".$s);
$sql1=mysql_query("select max(c_id) as id from galery_category");
$r=mysql_fetch_assoc($sql1);
$sd=$r['id'];

$src=array();
array_push($src,$c_name,$sd);
echo json_encode($src);

?>