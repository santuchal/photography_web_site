  <?php
	include('config.php');
	if(isset($_POST["del_mem"]))
	{
		
		$mem_select_name=$_POST["mem_select_name"];
		//echo $mem_select_name;
		
		
		
		$sql50=mysql_query("select * from member_info where id='$mem_select_name'");
        while ($rows60=mysql_fetch_array($sql50)) {
	    $image_name50=$rows60['mem_pic'];
		
		
        }
 
             if (!file_exists($image_name50)) {
	          // echo 'img/socials/'.$image_name60;
              unlink("images/team/".$image_name50);
               // echo 'File '.$filename.' has been deleted';
  }
  
  
  $sql51=mysql_query("select * from member_social where member_id='$mem_select_name'");
        while ($rows61=mysql_fetch_array($sql51)) {
	    $image_name51=$rows61['s_image'];
		
		
        
 
             if (!file_exists($image_name51)) {
	          // echo 'img/socials/'.$image_name60;
              unlink("images/team/".$image_name51);
               // echo 'File '.$filename.' has been deleted';
  }
  
		}
  
  
		
		$query20=mysql_query("DELETE FROM `member_info` where `id`='$mem_select_name'");
		
		$query21=mysql_query("DELETE FROM `member_social` where `member_id`='$mem_select_name'");
		echo '<script>alert("Delete Member Successfully!");</script>';
		
		
		
	}
	
	
	
	?>
  