    <?php
	include('config.php');	
		if(isset($_POST["save_add"]))
	{
		$address=mysql_real_escape_string($_POST["address"]);
		$contact=$_POST["phone"];
		$email=$_POST["email"];
		//echo $address;
		
		$query1=mysql_query("UPDATE `address` SET `address`='$address',`phone`='$contact',`email`='$email' WHERE id ='1'");
		 echo '<script>alert("Address Successfully Updated!");</script>';
		//header("Location:admin.php");
	}
		
		
		?>