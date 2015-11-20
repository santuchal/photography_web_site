                  <?php
				  include('config.php');
				 if(isset($_POST["update_mem1"]))
				 
				 {
				 
				 $mem_nam=$_POST['mem_name1'];
                 $mem_pos=$_POST['mem_post1'];
				 $id=$_POST['hidden_name'];
				 //$mem_name2=$_POST[''];
				 
				 //echo $mem_name2;
				
				 
				
				
				
		          //$email=$_POST["email"];
		 //         echo $mem_nam;
		  //        echo $mem_pos;
			//	  echo $mem_name2; 
				  
				 
				 
				  
				  
				$sql6=mysql_query("select * from member_info where id ='$id'");
 while ($rows6=mysql_fetch_array($sql6)) {
	$image_name6=$rows6['mem_pic'];
	//echo $image_name6;
	if (!file_exists($image_name6)) {
	unlink("images/team/".$image_name6);
	}
 }
 
 
  
 	
		
		
		
		
 
		 $imgname6=$_FILES['mem_pic1']['name'];
  $imgname66=$imgname6;
 // echo $imgname66;

  $imageextension11 = substr(strrchr($imgname6,'.'), 1);
 

  
     $query22=mysql_query("UPDATE `member_info` SET `mem_post`='$mem_pos',`mem_name`='$mem_nam', `mem_pic`='$imgname6' WHERE  id='$id'");
	 
    $action22 = move_uploaded_file($_FILES['mem_pic1']['tmp_name'],"images/team/".$imgname66);
	if($action22) {
		// header("Location:admin.php");
	}
	// echo "<body onload='goBack();'></body>";
  //  die('Uploded');
 

	
				 }
				 
				 ?>
      