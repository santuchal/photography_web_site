<?php
		include('config.php');
		
		//echo "edee";
		if(isset($_FILES['propic'])){
	$fileName = $_FILES['propic']['name'];
	$tmpName  = $_FILES['propic']['tmp_name'];
	$fileSize = $_FILES['propic']['size'];
$s=time().$fileName;

}


		$ss=$_POST['name_id'];//id
		$ss1=$_POST['name_name'];//name
		$ss2=$_POST['name_url'];//url
		$sd=mysql_query("select * from `member_social`  WHERE id ='$ss'");
		$im=mysql_fetch_assoc($sd);
		$img=$im['s_image'];
		if($fileSize){
		 if (!file_exists($img)) {
		 unlink("images/team/".$img);
		 }
$query2="UPDATE `member_social` SET `s_name`='$ss1',`s_url`='$ss2',s_image='$s' WHERE id ='$ss'";



$fetch2=mysql_query($query2);
move_uploaded_file($tmpName,"images/team/".$s);

echo "1";
		}
?>