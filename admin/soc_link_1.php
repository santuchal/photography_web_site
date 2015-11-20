   <?php
	include('config.php');	
		if(isset($_POST["soc_update"]))
	{
		$soc_name=$_POST["soc_name"];
		$soc_link=$_POST["link"];
		$combo=$_POST["combo"];
		//$email=$_POST["email"];
		//echo $combo;
		//echo $soc_link;
		
		$sql6=mysql_query("select * from social where name='$combo'");
 while ($rows6=mysql_fetch_array($sql6)) {
	$image_name6=$rows6['image'];
	//echo $image_name6;
 }
 
 if (file_exists($image_name6)) {
  unlink("../img/socials/$image_name6");
   // echo 'File '.$filename.' has been deleted';
  }
		
		
		
		
		
		 $imgname6=$_FILES['social_icon']['name'];
		 
		 //$s=time().$imgname6;
		 
		 
  $imgname66=time().$imgname6;
  //echo $imgname66;

  $imageextension11 = substr(strrchr($imgname6,'.'), 1);
  if (($imageextension11!= "jpg") && ($imageextension11 != "jpeg") && ($imageextension11 != "JPEG") && ($imageextension11 != "gif")&& ($imageextension11 != "png")&& ($imageextension11 != "bmp") && ($imageextension11!= "tif")) {
   // die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension11= "jpg") && ($imageextension11= "jpeg") && ($imageextension11= "gif") && ($imageextension11 = "png") && ($imageextension11 = "bmp") && ($imageextension11= "tif")) {   
  //echo $image_name6;
  //echo $combo;
    $query22=mysql_query("UPDATE `social` SET `link`='$soc_link',`image`='$imgname66' WHERE name ='$combo'");
	
    $action22 = move_uploaded_file($_FILES['social_icon']['tmp_name'],"../img/socials/".$imgname66);
	echo '<script>alert("Social Link Updated Successfully!");</script>';
	if($action22) {
		
	}
	 //echo "<body onload='goBack();'></body>";
    //die('Uploded');
 
}
	}
		
		
		?>
		
        
        
        <?php
	include('config.php');	
		if(isset($_POST["soc_add"]))
	{
		$soc_name1=$_POST["soc_name"];
		$soc_link1=$_POST["link"];
		$soc_icon1=$_POST["social_icon"];
		//$email=$_POST["email"];
		//echo $soc_name1;
		//echo $soc_link1;
		//echo $soc_icon1;
		
		
		 $imgname2=$_FILES['social_icon']['name'];
		 
		 $imgname1=time().$imgname2;
  //$imgname2=$image_name;
  //echo $imgname1;

$sql1=mysql_query("select * from social where name='$soc_name1'");
		if(mysql_num_rows($sql1))
		{
			
			
		}
		else{

  $imageextension1 = substr(strrchr($imgname1,'.'), 1);
  if (($imageextension1!= "jpg") && ($imageextension1 != "jpeg") && ($imageextension1 != "gif")&& ($imageextension1 != "png")&& ($imageextension1 != "bmp") && ($imageextension1!= "tif")) {
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension1= "jpg") && ($imageextension1= "jpeg") && ($imageextension1= "gif") && ($imageextension1 = "png") && ($imageextension1 = "bmp") && ($imageextension1= "tif")) {   
   // $query1=mysql_query("UPDATE banner SET image='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['social_icon']['tmp_name'],"../img/socials/".$imgname1);
	
		$query2=mysql_query("INSERT INTO `social` (`name`, `link`,`image`) VALUES('$soc_name1','$soc_link1','$imgname1')");
  }
		
		//header("Location:admin.php");
		 echo '<script> document.getElementById("foot").style.display="block" ;</script>';
		 echo '<script>alert("Social Link Added Successfully!");</script>';
	}
		
	}
		?>
		
        
     
     
           
        <?php
	include('config.php');	
		if(isset($_POST["soc_delete"]))
	{
		$soc_name60=$_POST["soc_name"];
		$soc_link60=$_POST["link"];
		//$soc_icon1=$_POST["social_icon"];
		//$email=$_POST["email"];
		//echo $soc_name60;
		//echo $soc_link1;
		
		
		
	
		$sql60=mysql_query("select * from social where name='$soc_name60'");
 while ($rows60=mysql_fetch_array($sql60)) {
	$image_name60=$rows60['image'];
	//echo $image_name60;
 }
 
 if (!file_exists($image_name60)) {
	// echo 'img/socials/'.$image_name60;
  unlink("../img/socials/".$image_name60);
   // echo 'File '.$filename.' has been deleted';
  }
		
		
	
	
		$query20=mysql_query("DELETE FROM `social` where `name`='$soc_name60'");
 
	echo '<script>alert("Social Link Deleted Successfully!");</script>';	
	//header("Location:admin.php");
	}
	
		
		?>
		
        
     