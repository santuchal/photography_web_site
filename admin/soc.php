<?php

//session_start();
include('config.php');
	  $a=$_POST['id'];
	  
	  $sql="select * from social where name='$a'";
	  $r=mysql_query($sql);
	  if(mysql_num_rows($r)>0)
	    {
			
			$er=1;
			echo $er;
			//$_SESSION['uid']=$a;
		}
  else
  {
	    		$er=0;
		echo $er;		
		}  
  
?>