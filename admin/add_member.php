   
      
     <?php
		
		include('config.php');

		
		$mem_name=$_POST["mem_nam"];
		$mem_post=$_POST["mem_post"];
		$fileName=$_FILES["mem_img"]["name"];
		$upload_name2=time().$fileName;
		
		//echo $upload_name2;
		
		$s1_name=$_POST["s1_name"];
		$s1_url=$_POST["s1_url"];
		$filename1=$_FILES["s1_img"]["name"];
		$upload_name3=time().$filename1;
		
		$s2_name=$_POST["s2_name"];
		$s2_url=$_POST["s2_url"];
		$filename2=$_FILES["s2_img"]["name"];
		$upload_name4=time().$filename2;
		
		$s3_name=$_POST["s3_name"];
		$s3_url=$_POST["s3_url"];
		$filename3=$_FILES["s3_img"]["name"];
		$upload_name5=time().$filename3;
		
		$s4_name=$_POST["s4_name"];
		$s4_url=$_POST["s4_url"];
		$filename4=$_FILES["s4_img"]["name"];
		$upload_name6=time().$filename4;
		
		$s=time().$fileName;
		
		
	
		
		
		
		$imageextension1 = substr(strrchr($upload_name2,'.'), 1);
		if($imageextension1!=''){
  if (($imageextension1!= "jpg") && ($imageextension1 != "jpeg") && ($imageextension1 != "gif")&& ($imageextension1 != "png")&& ($imageextension1 != "bmp") && ($imageextension1!= "tif") ) {
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension1= "jpg") && ($imageextension1= "jpeg") && ($imageextension1= "gif") && ($imageextension1 = "png") && ($imageextension1 = "bmp") && ($imageextension1= "tif")) {   
   // $query1=mysql_query("UPDATE banner SET image='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['mem_img']['tmp_name'],"images/team/".$upload_name2);
	
		
  }
		}
		else{
			$action = move_uploaded_file($_FILES['mem_img']['tmp_name'],"images/team/".$upload_name2);
		}
  
  	$imageextension2 = substr(strrchr($upload_name3,'.'), 1);
	if($imageextension2!=''){
  if (($imageextension2!= "jpg") && ($imageextension2 != "jpeg") && ($imageextension2 != "gif")&& ($imageextension2 != "png")&& ($imageextension2 != "bmp") && ($imageextension2!= "tif")) {
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension2= "jpg") && ($imageextension2= "jpeg") && ($imageextension2= "gif") && ($imageextension2 = "png") && ($imageextension2 = "bmp") && ($imageextension2= "tif")) {   
   // $query1=mysql_query("UPDATE banner SET image='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['s1_img']['tmp_name'],"images/team/".$upload_name3);
	
		
  }
	}
	else
	{
		 $action = move_uploaded_file($_FILES['s1_img']['tmp_name'],"images/team/".$upload_name3);
	}
  
  	$imageextension3 = substr(strrchr($upload_name4,'.'), 1);
	if($imageextension3!=''){
  if (($imageextension3!= "jpg") && ($imageextension3 != "jpeg") && ($imageextension3 != "gif")&& ($imageextension3 != "png")&& ($imageextension3 != "bmp") && ($imageextension3!= "tif")) {
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension3= "jpg") && ($imageextension3= "jpeg") && ($imageextension3= "gif") && ($imageextension3 = "png") && ($imageextension3 = "bmp") && ($imageextension3= "tif")) {   
   // $query1=mysql_query("UPDATE banner SET image='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['s2_img']['tmp_name'],"images/team/".$upload_name4);
	
		
  }
	}
	else{
		$action = move_uploaded_file($_FILES['s2_img']['tmp_name'],"images/team/".$upload_name4);
	}
  	$imageextension4 = substr(strrchr($upload_name5,'.'), 1);
	if($imageextension4!=''){
  if (($imageextension4!= "jpg") && ($imageextension4 != "jpeg") && ($imageextension4 != "gif")&& ($imageextension4 != "png")&& ($imageextension4 != "bmp") && ($imageextension4!= "tif")) {
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension4= "jpg") && ($imageextension4= "jpeg") && ($imageextension4= "gif") && ($imageextension4 = "png") && ($imageextension4 = "bmp") && ($imageextension4= "tif")) {   
   // $query1=mysql_query("UPDATE banner SET image='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['s3_img']['tmp_name'],"images/team/".$upload_name5);
	
		
  }
	}
	else{
		 $action = move_uploaded_file($_FILES['s3_img']['tmp_name'],"images/team/".$upload_name5);
	}
  
  
  $imageextension5 = substr(strrchr($upload_name6,'.'), 1);
  if($imageextension5!=''){
  if (($imageextension5!= "jpg") && ($imageextension5 != "jpeg") && ($imageextension5 != "gif")&& ($imageextension5 != "png")&& ($imageextension5 != "bmp") && ($imageextension5!= "tif")) {
    die('Unknown extension. Only jpg, jpeg, and gif files are allowed. Please hit the back button on your browser and try again.');
  }

  if (($imageextension5= "jpg") && ($imageextension5= "jpeg") && ($imageextension5= "gif") && ($imageextension5 = "png") && ($imageextension5 = "bmp") && ($imageextension5= "tif")) {   
   // $query1=mysql_query("UPDATE banner SET image='$imgname1' WHERE id ='$id'");
    $action = move_uploaded_file($_FILES['s4_img']['tmp_name'],"images/team/".$upload_name6);
	
		
  }
	
  }
  else{
	  $action = move_uploaded_file($_FILES['s4_img']['tmp_name'],"images/team/".$upload_name6);
  }
		
		
	//	echo $upload_name1;
		$sql1="insert into member_info(mem_name,mem_post,mem_pic) values('$mem_name','$mem_post','$upload_name2')";
		$r=mysql_query($sql1) or die("error");
		$sql14=mysql_query("select max(id) as id from member_info");
		$ad=mysql_fetch_assoc($sql14);
		$af=$ad['id'];
		
		$sql2="insert into member_social(member_id,member_name,s_name,s_image,s_url) values('$af','$mem_name','$s1_name','$upload_name3','$s1_url')";
		
		$sql3="insert into member_social(member_id,member_name,s_name,s_image,s_url) values('$af','$mem_name','$s2_name','$upload_name4','$s2_url')";
		
		$sql4="insert into member_social(member_id,member_name,s_name,s_image,s_url) values('$af','$mem_name','$s3_name','$upload_name5','$s3_url')";
		
		$sql5="insert into member_social(member_id,member_name,s_name,s_image,s_url) values('$af','$mem_name','$s4_name','$upload_name6','$s4_url')";
		//echo $sql;
		
		$r1=mysql_query($sql2) or die("error");
		$r1=mysql_query($sql3) or die("error");
		$r1=mysql_query($sql4) or die("error");
		$r1=mysql_query($sql5) or die("error");
		
		
		//echo "ddd";
	
		
		
		?>