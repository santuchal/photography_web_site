

<?php

session_start();
include('config.php');
	  $a=filter_var($_POST['ss'],FILTER_SANITIZE_STRING);
	  $b=filter_var($_POST['ss1'],FILTER_SANITIZE_STRING);
	  $sql="select * from user where uid='$a' and pass='$b'";
	  $r=mysql_query($sql);
	  if(mysql_num_rows($r)>0)
	    {
			
			$er=1;
			echo $er;
			$_SESSION['uid']=$a;
		}
  else
  {
	    		$er=0;
		echo $er;		
		}  
  
?>