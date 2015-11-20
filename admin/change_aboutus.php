    <?php
	include('config.php');	
		if(isset($_POST["update"]))
	{
		$text=mysql_real_escape_string($_POST["text"]);
		
		
		//echo $address;
		
		$query1=mysql_query("UPDATE `aboutus` SET `file`='$text' WHERE id ='1'");
		echo '<script>alert("About us Changed Successfully!");</script>';
	}
		
		
		?>