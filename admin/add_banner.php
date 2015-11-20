<?php
include('config.php');
if(isset($_POST["banner_add"]))
	{
		
		
		$banner_image=$_FILES['banner_file']['name'];
		//echo $banner_image;
		$s=time().$banner_image;
		
		
		 $imageextension11 = substr(strrchr($banner_image,'.'), 1);
  if (($imageextension11!= "jpg") && ($imageextension11 != "jpeg") && ($imageextension11 != "gif")&& ($imageextension11 != "png")&& ($imageextension11 != "bmp") && ($imageextension11!= "tif")) {
  // die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension11= "jpg") && ($imageextension11= "jpeg") && ($imageextension11= "gif") && ($imageextension11 = "png") && ($imageextension11 = "bmp") && ($imageextension11= "tif")) {   
  
 if($banner_image){
  
   $sql50=mysql_query("select * from background_image where image_name='$banner_image'");
		if(mysql_num_rows($sql50))
		{
			echo '<script>alert("Background Image Already Exists!");</script>';
			
		}
		else{
    $query22=mysql_query("INSERT INTO `background_image`(`image_name`) VALUES('$banner_image')");
	
    $action22 = move_uploaded_file($_FILES['banner_file']['tmp_name'],"shutterstock/".$banner_image);
		
		echo '<script>alert("Background Image Successfully Inserted!");</script>';
				
	}
  
 }
		
	}
	}

?>