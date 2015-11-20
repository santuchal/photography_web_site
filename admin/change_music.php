<?php
if(isset($_POST['update_music']))
 {
	    $upload_name=$_FILES["music"]["name"];
		$upload_type=$_FILES["music"]["type"];
		$upload_size=$_FILES["music"]["size"];
		$upload_temp=$_FILES["music"]["tmp_name"];
		
		 $sql1=mysql_query("select music_name from music where id='1'");
 while ($rows2=mysql_fetch_array($sql1)) {
	$image_name=$rows2['music_name'];
//	echo $image_name;
 }
 
 if (file_exists($image_name)) {
   unlink("../audio/$image_name");
   // echo 'File '.$filename.' has been deleted';
  }
		
		
		
		move_uploaded_file($upload_temp,"../audio/".$upload_name);
		
		
		 $query1=mysql_query("UPDATE `music` SET `music_name`='$upload_name' where id='1'");
		
		
		echo '<script>alert("Music File Successfully Updated!");</script>';
		 
	 }
	 
	 
	 ?>
