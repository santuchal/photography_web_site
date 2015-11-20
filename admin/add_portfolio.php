    <?php
	include('config.php');	
		if(isset($_POST["add_portfolio"]))
	{
		$port_name=$_POST['port_name'];
		$port_cat=$_POST['port_cat'];
		$port_pic=$_FILES['port_file']['name'];
		//echo $port_name;
		$s=time().$port_pic;
		
		 $imageextension11 = substr(strrchr($port_pic,'.'), 1);
  if (($imageextension11!= "jpg") && ($imageextension11 != "jpeg") && ($imageextension11 != "gif")&& ($imageextension11 != "png")&& ($imageextension11 != "bmp") && ($imageextension11!= "tif")) {
   // die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension11= "jpg") && ($imageextension11= "jpeg") && ($imageextension11= "gif") && ($imageextension11 = "png") && ($imageextension11 = "bmp") && ($imageextension11= "tif")) {   
  
  
   $sql50=mysql_query("select * from portfolio where portfolio_name='$port_name'");
		if(mysql_num_rows($sql50))
		{
			echo '<script>alert("Portfolio Already Exists!");</script>';
			
		}
		else{
    $query22=mysql_query("INSERT INTO `portfolio`(`portfolio_img`,`portfolio_name`,`portfolio_category`) VALUES('$s','$port_name','$port_cat')");
	
    $action22 = move_uploaded_file($_FILES['port_file']['tmp_name'],"img/gallery/portfolio/".$s);
		
		echo '<script>alert("Portfolio Successfully Inserted!");</script>';
				
	}
		
	}
	}
		?>