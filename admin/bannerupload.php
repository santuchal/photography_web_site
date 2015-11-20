
<?php

if(isset($_POST['go'])){
$id=$_POST['id'];

 include('config.php');
 $sql1=mysql_query("select image_name  from background_image where id='$id'");
 while ($rows2=mysql_fetch_array($sql1)) {
	$image_name=$rows2['image_name'];
	//echo $image_name;
 }
 
 

  $imgname1=$_FILES['image']['name'];
  $imgname2=$image_name;
 // echo $imgname1;
if($imgname1){
	if (!file_exists($image_name)) {
    unlink("shutterstock/$image_name");
   // echo 'File '.$filename.' has been deleted';
  }
 
  
    $query1=mysql_query("UPDATE background_image SET image_name='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['image']['tmp_name'],"shutterstock/".$imgname1);
	echo '<script>alert("Background Image Updated Successfully!");</script>';
	if($action) {
	//	 header("Location:admin.php");
	}
 
  else{
	  
	  
	  
	  
  }
   // die('Uploded');
 
}
}
?> 