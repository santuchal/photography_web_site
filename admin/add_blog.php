    <?php
	include('config.php');	
		if(isset($_POST["blog_add"]))
	{
		$blog_title=$_POST["blog_title"];
		$blog_text=mysql_real_escape_string($_POST['blog_text']);
		$blog_pic_name=$_FILES['blog_pic']['name'];
		//echo $blog_pic_name;
		$date=date('Y-m-d H:i:s');
		//echo $date;
		
		$s=time().$blog_pic_name;
		 $imageextension11 = substr(strrchr($blog_pic_name,'.'), 1);
  if (($imageextension11!= "jpg") && ($imageextension11 != "jpeg") && ($imageextension11 != "gif")&& ($imageextension11 != "png")&& ($imageextension11 != "bmp") && ($imageextension11!= "tif")) {
   // die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension11= "jpg") && ($imageextension11= "jpeg") && ($imageextension11= "gif") && ($imageextension11 = "png") && ($imageextension11 = "bmp") && ($imageextension11= "tif")) {   
  
   
	   $sql50=mysql_query("select * from blog where blog_title='$blog_title'");
		if(mysql_num_rows($sql50))
		{
			echo "<script>alert('Event Already Exists!');</script>";
			
		}
		else{
  
  
    $query22=mysql_query("INSERT INTO `blog`(`blog_title`,`blog_text`,`blog_pic`,`blog_date`,`blog_user`) VALUES('$blog_title','$blog_text','$s','$date','Admin')");
	
    $action22 = move_uploaded_file($_FILES['blog_pic']['tmp_name'],"blog/".$s);
	echo '<script>alert("Event Added Successfully!");</script>';
		
		
				
	}
  }
	}
		?>