<?php //get the posted image when the submit button is clicked
include('config.php');
 
     if(isset($_POST['banner_delete'])){
$id=$_POST['id1'];



$sql1=mysql_query("select image_name  from background_image where id='$id'");
 while ($rows2=mysql_fetch_array($sql1)) {
	$image_name=$rows2['image_name'];
	//echo $image_name;
 }
 
 if (!file_exists($image_name)) {
   unlink("shutterstock/".$image_name);
   // echo 'File '.$filename.' has been deleted';
  }

     
  $query = mysql_query("delete from background_image WHERE id ='$id'");
     
     
   echo '<script>alert("Background Image Successfully Deleted!");</script>';
      



	 }
?> 