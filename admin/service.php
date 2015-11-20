<?php
include('config.php');
if(isset($_POST["add_serv"])){
$service=$_POST["service_title"];
$service_details=mysql_real_escape_string($_POST["service_details"]);
$h_name=$_POST['h_name'];
//echo $service_details;
@mkdir('service/'.$service, 0777, true);
for($i=1;$i<=$h_name;$i++)
   {
	   $s="service_picture".$i;
	  
	   $fileName1 = $_FILES[$s]['name'];
	   $tmpName1  = $_FILES[$s]['tmp_name'];
	   $fileSize1 = $_FILES[$s]['size'];
	   
	   
	   
	   
	   $s=time().$fileName1;
	   
	   $sql50=mysql_query("select * from service where serv_title='$service'");
		if(mysql_num_rows($sql50))
		{
			
			
		}
		else{
	  
	   $sql=mysql_query("INSERT INTO `service`(`serv_title`, `serv_img`, `serv_details`) VALUES ('$service','$s','$service_details')");
	   move_uploaded_file($tmpName1,"service/".$service."/".$s);
	   
echo "<script>alert('Services Added Successfully!');</script>";
	   
   }


echo "<script>document.getElementById('service').style.display='block';</script>";

}

}



?>